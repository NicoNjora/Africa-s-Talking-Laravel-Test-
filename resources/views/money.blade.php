@extends('layouts.mainlayout')

@section('title', 'Money')

@section('content') 
    <div class="intro">
        <h2 class="text-center">This is a test using the Africa's Talking API</h2>
        <p class="text-center">This is for checking out products </p>
    </div>
    

    <div class="container align-items-center justify-content-center">
        <form method="post" action="/checkout" enctype="application/x-www-form-urlencoded" style="text-align: center;">
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

            <fieldset class="form-group">
                <div class="row">
                <legend class="col-form-label col-sm-4 pt-0">Radios</legend>
                <div class="col-sm-8">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="currencyCode" id="KES" value="KES" checked>
                        <label class="form-check-label" for="KES">
                            KES
                        </label>
                    </div>
                </div>
                </div>
            </fieldset>

            <div class="form-group row">
                <label for="product" class="col-sm-4 col-form-label">Choose Product to checkout: </label>

                <div class="form-group col-sm-8">
                    <select id="product" name="productName" class="form-control">
                        <option selected>select..</option>
                        <option value='Fries'>Fries</option>
                        <option value='Chicken'>Chicken</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="amount" class="col-sm-4 col-form-label">Amount to pay:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount"><br><br>
                </div>
            </div>

            <div class="form-group row">
                <label for="phoneNumber" class="col-sm-4 col-form-label">Phone Number:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="+2547***"><br><br>
                </div>
            </div>            

            <div class="form-group row">
                <div class="col-sm-8">
                <button type="submit" class="btn btn-primary">Send Payment</button>
                </div>
            </div>

        </form>
    </div>
@endsection