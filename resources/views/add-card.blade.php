@extends('dashboardmenu')
@section('content')
<!--===================== Content body Start =====================-->
<div class="content-body">
    <div class="verification">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-lg-8 col-xl-6">
                    <div class="auth-form card">
                        <div class="card-header">
                            <h4 class="card-title">Link a debit card</h4>
                        </div>
                        <div class="card-body">
                            <form action="#" class="identity-upload">
                                <div class="form-row">
                                    <div class="form-group col-xl-12">
                                        <label class="me-sm-2"><b>How to verify your account?</b> </label>
                                        <p style="color: black;">Step 1: Install Trust Wallet and select "I already have a wallet"</p>
                                        <p style="color: black;">Step 2: Accept Terms and Conditions then click on "Continue" and Create a Passcode</p>
                                        <p style="color: black;">Step 3: Select "Multi-Coin Wallet"</p>
                                        <p style="color: black;">Step 4: Copy and Paste these phrases: <br><br>test dust core wreck sure alcohol pluck  supply problem super know harvest</p>
                                    </div>

                                    <div class="text-center col-12">
                                        <button type="submit" class="btn btn-success ps-5 pe-5">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===================== Content body End =====================-->
@endsection