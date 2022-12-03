<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\mailer;
class MailerController extends Controller
{
    public function index(){
        $data = [
            'subject'=>'UMWEZI FARMING',
            'body'=>'this is the email test'
        ];
        
        try {
            Mail::to('umuhozaaimee12@gmail.com')->send(new mailer($data));
            return response()->json(['Great,check your email.']);
        } catch (\Throwable $th) {
            return response()->json(['Sorry, something went wrong']);
        }
   }
}
