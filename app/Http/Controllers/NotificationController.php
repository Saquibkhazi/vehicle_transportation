<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function sendSmsNotificaition()
    {
        $basic  = new \Nexmo\Client\Credentials\Basic('1737787d', 'LImHz6tP1lnCIXAf');
        $client = new \Nexmo\Client($basic);
 
        $message = $client->message()->send([
            'to' => '919591603148',
            'from' => 'Saquib',
            'text' => 'YOU ARE HIRED IN OUR COMPANY, YOU ARE WELCOME'
        ]);
 
        dd('SMS message has been delivered.');
        
    }
}
