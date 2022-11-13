@extends('dashboardmenu')
@section('content')
<!--===================== Content body Start =====================-->
<div class="content-body">
    <!--===================== Page title Start =====================-->
    <div class="page_title">
      <div class="container">
        <div class="row">
          <div class="col-12 d-sm-flex align-items-center justify-content-between">
            <div class="page_title-content">
              <p>Welcome Back,
                <span> {{Auth::user()->name}}</span>
              </p>
            </div>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb bg-transparent px-0 mb-0">
                <li class="breadcrumb-item text-capitalize"><a href="settings">settings</a></li>
                <li class="breadcrumb-item active text-primary text-capitalize" aria-current="page">accout</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!--===================== Page title End =====================-->
    <div class="container">
      <div class="row">
        <div class="col-12 col-xl-3">
            <div class="card settings_menu">
                <div class="card-header">
                  <h4 class="card-title" style="text-align: center;">Verify your account details</h4>
                  
                </div>
                <br>
                  <b style="text-align: center;">
                    <p>Step 1: Verify Bank details</p>
                    <br>
                    <p>Step 2: Link Card for withdrawal</p>
                    <br>
                    <p>Step 3: Verify Phone Number</p>
                    <br>
                  </b>
              </div>
        </div>
        <div class="col-12 col-xl-9">
          <div class="card settings-account">
            <div class="card-header">
              <h4 class="card-title">Linked Account or Card</h4>
            </div>
            <div class="card-body">
              <div class="form">
                <ul class="linked_account">
                  <li class="mb-4">
                    <div class="row">
                      <div class="col-12 col-md-9">
                        <div class="media d-flex justify-content-between align-items-center mb-4 mb-md-0">
                          <div class="d-flex align-items-center">
                            <span class="me-3 icon d-flex align-items-center justify-content-center"><i class="fab fa-cc-mastercard"></i></span>
                            <div class="media-body">
                              <h5 class="mt-0 mb-1">Bank of America</h5>
                              <p>Bank **************5421</p>
                            </div>
                          </div>
                          <div class="edit-option d-flex flex-column flex-sm-row">
                            <a href="#"><i class="far fa-eye"></i></a>
                            <a href="#"><i class="fas fa-pencil-alt"></i></a>
                            <a href="#"><i class="fas fa-trash"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-3">
                        <div class="verify">
                          <div class="verified">
                            <span><i class="la la-check"></i></span>
                            <a href="#">Verified</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="mb-4">
                    <div class="row">
                      <div class="col-12 col-md-9">
                        <div class="media d-flex justify-content-between align-items-center mb-4 mb-md-0">
                          <div class="d-flex align-items-center">
                            <span class="me-3 icon d-flex align-items-center justify-content-center"><i class="fab fa-cc-mastercard"></i></span>
                            <div class="media-body">
                              <h5 class="mt-0 mb-1">Master Card</h5>
                              <p>Credit Card *********5478</p>
                            </div>
                          </div>
                          <div class="edit-option d-flex flex-column flex-sm-row">
                            <a href="#"><i class="far fa-eye"></i></a>
                            <a href="#"><i class="fas fa-pencil-alt"></i></a>
                            <a href="#"><i class="fas fa-trash"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-3">
                        <div class="verify">
                          <div class="verified">
                            <span><i class="la la-check"></i></span>
                            <a href="#">Verified</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="mb-4">
                    <div class="row">
                      <div class="col-12 col-md-9">
                        <div class="media d-flex justify-content-between align-items-center mb-4 mb-md-0">
                          <div class="d-flex align-items-center">
                            <span class="me-3 icon d-flex align-items-center justify-content-center"><i class="fab fa-cc-mastercard"></i></span>
                            <div class="media-body">
                              <h5 class="mt-0 mb-1">Debit Card</h5>
                              <p>Debit Card</p>
                            </div>
                          </div>
                          <div class="edit-option d-flex flex-column flex-sm-row">
                            <a href="#"><i class="far fa-eye"></i></a>
                            <a href="#"><i class="fas fa-pencil-alt"></i></a>
                            <a href="#"><i class="fas fa-trash"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-3">
                        <div class="verify">
                          <div class="not-verify">
                              <span><i class="la la-close"></i></span>
                              <a href="#">Not verified</a>
                          </div>
                          </div>
                      </div>
                    </div>
                  </li>

                 
                </ul>

                <div class="btn-group mt-5 flex-column flex-sm-row">
                  <a href="verify-step-5.html" class="btn btn-primary px-4 me-3 mb-3 mb-sm-0">Add Bank
                    Account</a>
                  <a href="add-card" class="btn btn-success px-4 me-3">Add Card</a>
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