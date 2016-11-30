<?php

namespace App\Http\Controllers;

use App\Mail\RegisterShipped;
use Mail;

class RegisteShipped extends Controller
{
    public function apply()
    {

        $sendData = [
            'register_token' => 'register_token',
        ];

        Mail::to('b5122@oic.jp')->send(new RegisterShipped($sendData));
    }
}
