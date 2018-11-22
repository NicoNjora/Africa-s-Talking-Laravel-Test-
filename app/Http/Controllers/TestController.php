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

    public function sendAirtime(Request $request){

        // Set your app credentials
        $username = $request['username'];
        $apiKey = $request['apiKey'];

        // Initialize the SDK
        $AT       = new AfricasTalking($username, $apiKey);

        // Get the airtime service
        $airtime  = $AT->airtime();

        // Set the phone number, currency code and amount in the format below
        $recipients = [[
            "phoneNumber"  => "+254711XXXYYY",
            "currencyCode" => "KES",
            "amount"       => 100
        ], [
            "phoneNumber"  => "+254733YYYZZZ",
            "currencyCode" => "KES",
            "amount"       => 1000
        ]];

        try {
            // That's it, hit send and we'll take care of the rest
            $results = $airtime->send([
                "recipients" => $recipients
            ]);
            print_r($results);

        } catch(Exception $e) {

            echo "Error: ".$e->getMessage();
        }
    }

    public function checkout(Request $request){
        
        // Set your app credentials
        $username = $request['username'];
        $apiKey = $request['apiKey'];

        // Set the name of your Africa's Talking payment product
        $productName = $request['productName'];

        // Set The 3-Letter ISO currency code and the checkout amount
        $currencyCode = $request['currencyCode'];
        $amount = $request['amount'];

        // Set the phone number you want to send to in international format
        $phoneNumber  = $request['phoneNumber'];

        // Initialize the SDK
        $AT         = new AfricasTalking($username, $apiKey);

        // Get the payments service
        $payments   = $AT->payments();

    
        // Set any metadata that you would like to send along with this request.
        // This metadata will be included when we send back the final payment notification
        $metadata = [
            "agentId"   => "654",
            "productId" => "321"
        ];

        try {
            // Thats it, hit send and we'll take care of the rest.
            $result = $payments->mobileCheckout([
                "productName"  => $productName,
                "phoneNumber"  => $phoneNumber,
                "currencyCode" => $currencyCode,
                "amount"       => $amount,
                "metadata"     => $metadata
            ]);

            print_r($result);
        } catch(Exception $e) {
            echo "Error: ".$e->getMessage();
        }
    }

    
}
