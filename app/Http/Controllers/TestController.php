<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AfricasTalking\SDK\AfricasTalking;

class TestController extends Controller
{   
    
    public function sendMessage(Request $request) {

        $username = $request['username'];
        $apiKey = $request['apiKey'];

        $recipients = $request['recipients'];
        $message = $request['message'];

        // $username   = "testat";
        // $apiKey     = "8a8ee190b0ef99e7e901207dd6ca41894a0426c227ca10d105f1a94337eb1d75";
        
        // Initialize the SDK
        $AT         = new AfricasTalking($username, $apiKey);
        
        // Get the SMS service
        $sms        = $AT->sms();
    
        try {
            // Thats it, hit send and we'll take care of the rest
            $result = $sms->send([
                'to'      => $recipients,
                'message' => $message
            ]);
    
            print_r($result);
        } catch (Exception $e) {
            echo "Error: ".$e.getMessage();
        }

        return "I am done";    
    }

    public function messageView(){
         
    	return view('/sms');
        
    }

    
}
