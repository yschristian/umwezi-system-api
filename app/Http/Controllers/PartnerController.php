<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

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
        return $createPatner;
    }
    public function index(){

        $partners = Partner::all();
        return $partners;
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
}
