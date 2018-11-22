<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>

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
  
    </body>
</html>
