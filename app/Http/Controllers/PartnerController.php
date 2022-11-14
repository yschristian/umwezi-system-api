<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;

class PartnerController extends Controller
{
    //
    public function store(Request $request){

        $partner = Partner::create([
            'FirstName'=>$request->FirstName,
            'LastName'=> $request-> LastName,
            'Email'=>$request->Email,
            'Option'=>$request->Option,
            'Description'=>$request->Description
        ]);
        $partner->assignRole("admin");
         return $request->Option;
        //return view('partner')->with('partners',$partner);
    }
    public function index(){
        $partners = Partner::all();
        $role = Role::all();
        // return $partners;
        //return $role;
        return view('partner')->with('partners',$partners)->with('roles',$role);
    }
    
    public function show($id){

        $patner = Partner::find($id);
        return view('ViewPartner')->with('patner',$patner);

    }

    public function edit($id){
        $patner = Partner::find($id);
        return $patner;
    }

    public function destroy($id){
        $patner = Partner::destroy($id);
        // return $patner;
        return view('partner')->with('partners',$patner);
    }

    public function update(Request $request,$id){
        $partner = Partner::find($id);
        $input = $request->all();
        $partner -> update($input);
        return $partner;
    }
    public function approve($id){
        $patner = Partner::find($id);
        $hashed_random_password = Hash::make(str::random(8));
            $user = User::create([
                "username" => $patner ->FirstName,
                "email" => $patner ->Email,
                "password"=>$hashed_random_password,
            ]);
            return response(["message"=>"user approved",$user], 201);   
    }

}
