<?php

namespace App\Http\Controllers;

use App\Mail\SendMailable;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function mailMailTrap()
    {
        $name = 'Prosper Ngouari';
        Mail::to('prosperngouari38@gmail.com')->send(new SendMailable($name));

        return 'Email envoyé';
    }

}
