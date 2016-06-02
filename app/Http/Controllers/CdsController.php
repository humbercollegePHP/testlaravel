<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Mail;

class CdsController extends Controller
{
    public function sendmail(){

        $user = User::find(1);


        Mail::send('emails.test',['user' => $user, 'products' =>products], function($message) use($user){
          $message->to($user->email, $user->name)
                ->from('bbb@bbb.com')
                ->subject('test message');
        });

        return "mail sent";
    }
}
