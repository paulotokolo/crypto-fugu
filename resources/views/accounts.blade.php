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
        <p>Welcome Back,<span> {{Auth::user()->name}}</span></p>
      </div>
    </div>
  </div>
</div>
</div>
<!--===================== Page title End =====================-->
<div class="container">
  <div class="row">
    <div class="col-xl-6 col-lg-6 col-md-12">
      <div class="card profile_card">
        <div class="card-body">
          <div class="user-profile d-flex mb-4 pb-4">
            <img class="me-3 rounded-circle me-0 me-sm-3" src="images/profile/2.png" width="60"
              height="60" alt="">
            <div>
              <span>Hello</span>
              <h4 class="mb-2">{{Auth::user()->name}}</h4>
              <a href="tel:+1 235 5547" class="mb-1 d-inline-block"> <span><i class="fas fa-phone-alt me-2 text-primary"></i>
              </span> +1 235 5547
            </a><br>
              <a href="mailto:{{Auth::user()->email}}"> 
                <span><i class="fa fa-envelope me-2 text-primary"></i></span> {{Auth::user()->email}}
              </a>
            </div>
          </div>

          <ul class="card-profile__info">
            <li>
              <h5 class="me-4">Address</h5>
              <span class="text-muted">House 14, Road 9, Gulshan, Dhaka</span>
            </li>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-12">
      <div class="card acc_balance">
        <div class="card-header">
          <h4 class="card-title">Wallet</h4>
        </div>
        <div class="card-body">
          <span>Account Balance</span>
          <h3>$0.0230145</h3>


          <div class="btn-group mb-3">
            <button class="btn btn-primary">Sell</button>
            <button class="btn btn-success">Buy</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Withdraw</h4>
        </div>
        <div class="card-body">
          <form action="#">
            <div class="form-group">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text"><i class="far fa-money-bill-alt"></i></label>
                </div>
                <input type="text" class="form-control" placeholder="5000 USD">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text"><i class="fas fa-university"></i></label>
                </div>
                <select class="form-select">
                  <option>Bank of America ********45845</option>
                  <option>Master Card ***********5458</option>
                </select>
              </div>
            </div>

            <button class="btn btn-primary w-100">Withdraw Now</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xl-12">

      
      <div class="card table-card border-0 rounded-default px-4 py-3 box-shadow">
        <div class="card-header bg-transparent border-0 p-0">
          <h5 class="card-title border-0 p-0 pb-2">All Activities</h5>
        </div>
        <div class="card-body p-0">
          <table>
            <tbody>
              <tr>
                <td data-label="Arrow Icon"><i class="la la-arrow-down fa-md rounded-circle text-white bg-danger"></i></td>
                <td data-label="Badge"><span class="badge inline-flex align-items-center bg-danger text-white">solid</span></td>
                <td data-label="Icon">
                  <div class="d-flex align-items-center">
                    <span class="icon d-flex align-items-center justify-content-center me-1">
                      <i class="cc BTC fs-6"></i>
                    </span>
                    <span class="text-uppercase text-purple-200 fw-bold">btc</span>
                  </div>
                </td>
                <td data-label="Card"><span class="text-purple-200 fw-bold">Using - Bank *******5264</span></td>
                <td data-label="Amout BTC"><span class="text-danger fw-bold">-0.000242 BTC</span></td>
                <td data-label="Amout USD"><span class="text-purple-200 fw-bold">-0.125 USD</span></td>
              </tr>
              <tr>
                <td scope="row" data-label="Arrow Icon"><i class="la la-arrow-up fa-md rounded-circle text-white bg-success"></i></td>
                <td data-label="Badge"><span class="badge inline-flex align-items-center bg-success text-white">solid</span></td>
                <td data-label="Icon">
                  <div class="d-flex align-items-center">
                    <span class="icon d-flex align-items-center justify-content-center me-1">
                      <i class="cc LTC fs-6"></i>
                    </span>
                    <span class="text-uppercase text-purple-200 fw-bold">LTC</span>
                  </div>
                </td>
                <td data-label="Card"><span class="text-purple-200 fw-bold">Using - Bank *******5264</span></td>
                <td data-label="Amout BTC"><span class="text-success fw-bold">-0.000242 BTC</span></td>
                <td data-label="Amout USD"><span class="text-purple-200 fw-bold">-0.125 USD</span></td>
              </tr>
              <tr>
                <td scope="row" data-label="Arrow Icon"><i class="la la-arrow-down fa-md rounded-circle text-white bg-danger"></i></td>
                <td data-label="Badge"><span class="badge inline-flex align-items-center bg-danger text-white">solid</span></td>
                <td data-label="Icon">
                  <div class="d-flex align-items-center">
                    <span class="icon d-flex align-items-center justify-content-center me-1">
                      <i class="cc XRP fs-6"></i>
                    </span>
                    <span class="text-uppercase text-purple-200 fw-bold">XRP</span>
                  </div>
                </td>
                <td data-label="Card"><span class="text-purple-200 fw-bold">Using - Bank *******5264</span></td>
                <td data-label="Amout BTC"><span class="text-danger fw-bold">-0.000242 BTC</span></td>
                <td data-label="Amout USD"><span class="text-purple-200 fw-bold">-0.125 USD</span></td>
              </tr>
              <tr>
                <td scope="row" data-label="Acount"><i class="la la-arrow-up fa-md rounded-circle text-white bg-success"></i></td>
                <td data-label="Badge"><span class="badge inline-flex align-items-center bg-success text-white">solid</span></td>
                <td data-label="Icon">
                  <div class="d-flex align-items-center">
                    <span class="icon d-flex align-items-center justify-content-center me-1">
                      <i class="cc DASH fs-6"></i>
                    </span>
                    <span class="text-uppercase text-purple-200 fw-bold">DASH</span>
                  </div>
                </td>
                <td data-label="Card"><span class="text-purple-200 fw-bold">Using - Bank *******5264</span></td>
                <td data-label="Amout BTC"><span class="text-success fw-bold">-0.000242 BTC</span></td>
                <td data-label="Amout USD"><span class="text-purple-200 fw-bold">-0.125 USD</span></td>
              </tr>
              <tr>
                <td scope="row" data-label="Acount"><i class="la la-arrow-up fa-md rounded-circle text-white bg-danger"></i></td>
                <td data-label="Badge"><span class="badge inline-flex align-items-center bg-danger text-white">solid</span></td>
                <td data-label="Icon">
                  <div class="d-flex align-items-center">
                    <span class="icon d-flex align-items-center justify-content-center me-1">
                      <i class="cc BTC fs-6"></i>
                    </span>
                    <span class="text-uppercase text-purple-200 fw-bold">btc</span>
                  </div>
                </td>
                <td data-label="Card"><span class="text-purple-200 fw-bold">Using - Bank *******5264</span></td>
                <td data-label="Amout BTC"><span class="text-danger fw-bold">-0.000242 BTC</span></td>
                <td data-label="Amout USD"><span class="text-purple-200 fw-bold">-0.125 USD</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>
</div>
</div>
<!--===================== Content body End =====================-->
@endsection