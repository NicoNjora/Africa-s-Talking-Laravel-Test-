@extends('layouts.mainlayout')

@section('title', 'SMS')

@section('content')
<div class="intro">
        <h2 class="text-center">This is a test using the Africa's Talking API</h2>
    <p class="text-center">This is for sending bulk sms </p>
    </div>
    

    <div class="container align-items-center justify-content-center">
        <form method="post"action="/test" enctype="application/x-www-form-urlencoded" style="text-align: center;">
        {{csrf_field()}}
                
            <div class="form-group row">
                <label for="username" class="col-sm-4 col-form-label">Africa's Talking API username:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="username" name="username" placeholder="username"><br><br>
                </div>
            </div>

            <div class="form-group row">
                <label for="apiKey" class="col-sm-4 col-form-label">Africa's Talking API Key:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="apiKey" name="apiKey" placeholder="API Key"><br><br>
                </div>
            </div>

            <div class="form-group row">
                <label for="message" class="col-sm-4 col-form-label">Message you want to send:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="message" name="message" placeholder="Message"><br><br>
                </div>
            </div>
            <div class="form-group row">    
                <label for="recipient" class="col-sm-4 col-form-label">Recipient of message:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="recipient" name="recipient" placeholder="+2547********"><br><br>
                </div>
            </div>
                <button class="btn btn-primary" type="submit"> Send Message</button> 
        </form>
    </div>
@endsection