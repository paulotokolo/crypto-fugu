@extends('dashboardmenu')
@section('content')
<!--===================== Content body Start =====================-->
<div class="content-body">
    <!--===================== Page title Start =====================-->
    <div class="page_title">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="page_title-content">
              <p>Welcome Back,<span>{{Auth::user()->name}} </span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--===================== Page title End =====================-->
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6">
              <div class="widget-card">
                <div class="widget-title">
                  <h5>Balance</h5>
                </div>
                <div class="widget-info">
                  <h3>$5,000.00</h3>
                  <p>USD</p>
                </div>
                <br>
                  <p><a style="color: rgb(6, 201, 136);" href="add-card">Withdraw Funds</a></p>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
              <div class="widget-card">
                <div class="widget-title">
                  <h5>Account Verified</h5>
                </div>
                <div class="widget-info">
                  <h3>No</h3>
                  <p>USD</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
              <div class="widget-card">
                <div class="widget-title">
                  <h5>Bank Transfers/Withdrawals
                  </h5>
                </div>
                <div class="widget-info">
                  <h3>$0</h3>
                  <p>USD</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
              <div class="widget-card">
                <div class="widget-title">
                  <h5>Bonus</h5>
                </div>
                <div class="widget-info">
                  <h3>$5,000</h3>
                  <p>USD</p>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="col-xl-12">
          <div class="row">
            <div class="col-xl-6 col-lg-12 col-xxl-4">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Withdraw</h4>
                </div>
                <div class="card-body">
                  <div class="buy-sell-widget">
                    <form name="myform" onsubmit="alert('You need to verify your account to withdraw')" class="currency_validate">
                      <div class="form-group">
                        <label class="me-sm-2">Balance</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <label class="input-group-text"><i class="cc BTC-alt"></i></label>
                          </div>
                          <select disabled name='currency' class="form-select">
                            <option value="bitcoin">$5,000</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="me-sm-2">Amount</label>
                        <div class="input-group">
                          <input required min="1000" max="5000" type="number" name="currency_amount" class="form-control" placeholder="Enter your amount">
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                          <p class="mb-0">Monthly Limit</p>
                          <h6 class="mb-0">$49750 remaining</h6>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="me-sm-2">Payment Method</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <label class="input-group-text"><i class="fas fa-university"></i></label>
                          </div>
                          <select required class="form-select" name="method">
                            <option value="">Select</option>
                            <option value="bank">Add Payment Method</option>
                          </select>
                        </div>
                      </div>
                      <button type="submit" name="submit" class="btn btn-success w-100">
                        Withdraw
                      </button>

                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-xxl-8">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Transaction </h4>
                </div>
                <div class="card-body">
                  <div class="transaction-widget">
                    <ul class="p-0 m-0 list-unstyled">
                      <li class="d-sm-flex align-items-center justify-content-between">
                          <div class="d-flex align-items-center">
                              <span class="icon me-3 rounded-circle d-flex align-items-center justify-content-center bg-success"><i class="las la-arrow-up"></i></span>
                              <div>
                                  <p class="mb-2">{{Auth::user()->created_at}}</p>
                                  <h5>Referral Bonus via Sarah Mohani</h5>
                              </div>
                          </div>
                          <div class="ms-5 mt-3 text-sm-end text-sm-end">
                              <h4>$5,000</h4>
                          </div>
                      </li>
                  </ul>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===================== Content body End =====================-->
@endsection