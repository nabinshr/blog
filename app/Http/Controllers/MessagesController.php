<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\message;

class MessagesController extends Controller
{
    public function submit(Request $request){
         $this->validate($request,
        ['name'=>'required',
        'email'=>'required']);
        //create a message
        $message = new message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        //save message
        $message->save();

        //redirect
        return redirect('/');
    }
}
