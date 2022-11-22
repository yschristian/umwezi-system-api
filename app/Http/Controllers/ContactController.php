<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
     //
     public function store(Request $request){

        $contact = Contact::create([
            'Name'=>$request->Name,
            'Email'=> $request-> Email,
            'Subject'=>$request->Subject,
            'Message'=>$request->Message
          
        ]);
       
        //  return $contact;
        return view('components.contact')->with('contacts',$contact);
    }
    public function index(){
        $contacts = Contact::all();
      
       //  return $contacts;
        
       return view('contact')->with('contacts',$contacts);
    }
    
    public function destroy($id){
        $contact = Contact::destroy($id);
        return $contact;
    }
}
