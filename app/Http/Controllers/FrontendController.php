<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;

class FrontendController extends Controller
{
    public function Message(Request $request)
    {
        $this->validate($request, array(
            'email'=>'required|email',
            'message'=>'required|max:500',
            'name'=>'required',
            'subject'=>'required',
        ));
        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message,
            'name' =>$request->name,
            'number' => $request->number
        );
        Mail::send('email.message', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('pahenlobattimuni@gmail.com');
            $message->subject($data['subject']);
        });
        Session::flash('success','Your message was Posted successfully!');
        return redirect()->back();
    }
}
