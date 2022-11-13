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
            <p>Welcome Back,<span> {{Auth::user()->name}} </span></p>
          </div>
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
              <h4 class="card-title">Settings</h4>
            </div>
            <div class="card-body">
              <ul>
                <li class="nav-item">
                  <a href="settings" class="nav-link active">
                    <i class="mdi mdi-account"></i>
                    <span>Edit Profile</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="settings-account" class="nav-link">
                    <i class="la la-university"></i>
                    <span>Link Account</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-9">
          <div class="row">
            <div class="col-xl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">User Profile</h4>
                </div>
                <div class="card-body">
                  <form action="#">
                    <div class="form-row">
                      <div class="form-group col-12">
                        <label class="mr-sm-2">Your Name</label>
                        <input type="text" class="form-control" placeholder="{{Auth::user()->name}}">
                      </div>
                      <div class="form-group col-12">
                        <div class="d-flex align-items-center mb-3">
                          <img class="me-3 rounded-circle mr-0 mr-sm-3" src="images/profile/2.png" width="55"
                            height="55" alt="">
                          <div>
                            <h4 class="mb-0">{{Auth::user()->name}}</h4>
                            <p class="mb-0">Max file size is 20mb</p>
                          </div>
                        </div>
                        <div class="file-upload-wrapper" data-text="Change Photo">
                          <input name="file-upload-field" type="file" class="file-upload-field" value="">
                        </div>
                      </div>
                      <div class="col-12">
                        <button class="btn btn-success">Save</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">User Profile</h4>
                </div>
                <div class="card-body">
                  <form action="#">
                    <div class="form-row">
                      <div class="form-group col-12">
                        <label class="mr-sm-2">New Email</label>
                        <input type="email" class="form-control" placeholder="{{Auth::user()->name}}">
                      </div>
                      <div class="form-group col-12">
                        <label class="mr-sm-2">New Password</label>
                        <input type="password" class="form-control" placeholder="**********">
                        
                      </div>
                      <div class="col-12">
                        <button class="btn btn-success">Save</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-xl-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Personal Information</h4>
                </div>
                <div class="card-body">
                  <form method="post" name="myform" class="personal_validate">
                    <div class="form-row d-flex flex-wrap">
                      <div class="form-group col-12 col-xl-6">
                        <label class="mr-sm-2">Your Name</label>
                        <input type="text" class="form-control" placeholder="{{Auth::user()->name}}" value="{{Auth::user()->name}}" name="fullname">
                      </div>
                      <div class="form-group col-12 col-xl-6">
                        <label class="mr-sm-2">Email</label>
                        <input type="email" class="form-control" value="{{Auth::user()->email}}" placeholder="{{Auth::user()->email}}" name="email">
                      </div>
                      <div class="form-group col-12 col-xl-6">
                        <label class="mr-sm-2">Date of birth</label>
                        <input type="text" class="form-control" placeholder="day-month-year" id="datepicker"
                          autocomplete="off" name="dob">
                      </div>
                      <div class="form-group col-12 col-xl-6">
                        <label class="mr-sm-2">Present Address</label>
                        <input type="text" class="form-control" placeholder="Present Address" value="{{Auth::user()->present_address}}"
                          name="presentaddress">
                      </div>
                      <div class="form-group col-12 col-xl-6">
                        <label class="mr-sm-2">Permanent Address</label>
                        <input type="text" class="form-control" placeholder="Permanent Address" {{Auth::user()->permanent_address}}
                          name="permanentaddress">
                      </div>
                      <div class="form-group col-12 col-xl-6">
                        <label class="mr-sm-2">City</label>
                        <input type="text" class="form-control" placeholder="City" value="{{Auth::user()->city}}" name="city">
                      </div>
                      <div class="form-group col-12 col-xl-6">
                        <label class="mr-sm-2">Postal Code</label>
                        <input type="text" class="form-control" placeholder="Postal Code" value="{{Auth::user()->postal_code}}" name="postal">
                      </div>

                      <div class="form-group col-12">
                        <button class="btn btn-success pl-5 pr-5">Save</button>
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
  </div>
  <!--===================== Content body End =====================-->
@endsection