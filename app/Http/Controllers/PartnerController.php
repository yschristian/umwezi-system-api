<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;

class PartnerController extends Controller
{
    //
    public function store(Request $request){

        $createPatner = Partner::create([
            'FirstName'=>$request->FirstName,
            'LastName'=> $request-> LastName,
            'Email'=>$request->Email,
            'Option'=>$request->Option,
            'Description'=>$request->Description
        ]);
        // return $createPatner;
        return view('partners')->with('partners',$createPatner);
    }
    public function index(){

        $partners = Partner::all();
        // return $partners;
        return view('partners')->with('partners',$partners);
    }
    
    public function show($id){

        $patner = Partner::find($id);
        return $patner;
    }

    public function edit($id){
        $patner = Partner::find($id);
        return $patner;
    }

    public function destroy($id){
        $patner = Partner::destroy($id);
        return $patner;
    }

    public function update(Request $request,$id){
        $partner = Partner::find($id);
        $input = $request->all();
        $partner -> update($input);
        return $partner;
    }
    public function approve(Request $request,$id){
        $patner = Partner::find($id)-> partners;
        $item =  $request->all();
        $hashed_random_password = Hash::make(str::random(8));

        if($item){
            $user = User::create([
                "username" => $item->FirstName,
                "email" => $item->Email,
                "password"=>$hashed_random_password,
            ]);
            return response(["message"=>"user approved",$user], 201);
          
        }
        
    }

}
