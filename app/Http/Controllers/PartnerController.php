<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;
use App\Mail\mailer;
use Illuminate\Support\Facades\Mail;

class PartnerController extends Controller
{
    //
    public function store(Request $request){

        $partner = Partner::create([
            'FirstName'=>$request->FirstName,
            'LastName'=> $request-> LastName,
            'Email'=>$request->Email,
            'Option'=>$request->Option,
            'Description'=>$request->Description,
            'Status'=>"pending"
        ]);
        // $partner->assignRole("admin");
        //  return $partner;
        $data = [
            'subject'=>'UMWEZI FARMING',
            'body'=> 'your request is well received !!! thank u for trust us and your patient  ,the proved message is 
            coming soon  . 
            your sincerely faithful '
        ];
        Mail::to($request['Email'])->send(new mailer($data));
        return view('components.Partner')->with('partners',$partner);
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
        return redirect('/request/getAll');
    }

    public function update(Request $request,$id){
        $partner = Partner::find($id);
        $input = $request->all();
        $partner -> update($input);
        return $partner;
    }
    public function approve($id){
        $patner = Partner::find($id);
        $patner->Status="Approved";
        $patner->save();

        $hashed_random_password = Hash::make(str::random(8));
            $user = User::create([
                "username" => $patner ->FirstName,
                "email" => $patner ->Email,
                "password"=>$hashed_random_password,
                "role"=>$patner->Option
            ]);
            $user->assignRole($patner->Option);
            $data = [
                'subject'=>'UMWEZI FARMING',
                'body'=> `you are approved now you are partner! 
                We trusted company to make purchase more easy 
                hope we are going to work together in good way `
            ];
            return view('partner')->with('partners',$patner);   
    }

}
