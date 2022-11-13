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
        <div class="col-xl-5 col-lg-12 col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="buy-sell-widget">
                <ul class="nav nav-pills nav-tabs justify-content-center flex-lg-nowrap" id="pills-tab" role="tablist">
                  <li class="nav-item text-center" role="presentation">
                    <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#buy" aria-selected="true">Buy</a>
                  </li>
                  <li class="nav-item text-center" role="presentation">
                    <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#sell"aria-selected="false">Sell</a>
                  </li>
                </ul>
                <div class="tab-content tab-content-default">
                  <div class="tab-pane fade show active" id="buy" role="tabpanel">
                    <form method="post" name="myform" class="currency_validate">
                      <div class="form-group">
                        <label class="me-sm-2">Currency</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <label class="input-group-text"><i class="cc BTC-alt"></i></label>
                          </div>
                          <select name='currency' class="form-select">
                            <option value="">Select</option>
                            <option value="bitcoin">Bitcoin</option>
                            <option value="litecoin">Litecoin</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="me-sm-2">Payment Method</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <label class="input-group-text"><i class="fas fa-university"></i></label>
                          </div>
                          <select class="form-select" name="method">
                            <option value="">Select</option>
                            <option value="bank">Bank of America ********45845</option>
                            <option value="master">Master Card ***********5458</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="me-sm-2">Enter your amount</label>
                        <div class="input-group">
                          <input type="text" name="currency_amount" class="form-control" placeholder="0.0214 BTC">
                          <input type="text" name="usd_amount" class="form-control" placeholder="125.00 USD">
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                          <p class="mb-0">Monthly Limit</p>
                          <h6 class="mb-0">$49750 remaining</h6>
                        </div>
                      </div>
                      <button type="submit" name="submit" class="btn btn-success w-100">Exchange
                        Now</button>
                    </form>
                  </div>
                  <div class="tab-pane fade" id="sell">
                    <form method="post" name="myform" class="currency2_validate">
                      <div class="form-group">
                        <label class="me-sm-2">Currency</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <label class="input-group-text"><i class="cc BTC-alt"></i></label>
                          </div>
                          <select name='currency' class="form-select">
                            <option value="">Select</option>
                            <option value="bitcoin">Bitcoin</option>
                            <option value="litecoin">Litecoin</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="me-sm-2">Payment Method</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <label class="input-group-text"><i class="fas fa-university"></i></label>
                          </div>
                          <select class="form-select" name="method">
                            <option value="">Select</option>
                            <option value="bank">Bank of America ********45845</option>
                            <option value="master">Master Card ***********5458</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="me-sm-2">Enter your amount</label>
                        <div class="input-group">
                          <input type="text" name="currency_amount" class="form-control" placeholder="0.0214 BTC">
                          <input type="text" name="usd_amount" class="form-control" placeholder="125.00 USD">
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                          <p class="mb-0">Monthly Limit</p>
                          <h6 class="mb-0">$49750 remaining</h6>
                        </div>
                      </div>
                      <button type="submit" name="submit" class="btn btn-success w-100">Exchange
                        Now</button>
                    </form>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <p class="p-4">Note: Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi cupiditate suscipit
            explicabo voluptas eos in tenetur error temporibus dolorum. Nulla!</p>
        </div>
        <div class="col-xl-7 col-lg-12 col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="buyer-seller">
                <div class="d-md-flex justify-content-between mb-3">
                  <div class="buyer-info d-flex mb-4 mb-md-0">
                      <img class="me-3" src="images/profile/2.png" alt="" width="50">
                      <div class="">
                        <h4>Buyer</h4>
                        <h5>Michael John</h5>
                        <a href="mailto:hello@example.com">hello@example.com</a>
                      </div>
                  </div>
                  <div class="seller-info d-flex flex-row-reverse flex-md-row justify-content-end">
                      <div class="text-md-end">
                        <h4>Seller</h4>
                        <h5>John Doe</h5>
                        <a href="mailto:hello@example.com">hello@example.com</a>
                      </div>
                      <img class="ms-md-3 me-3 me-md-0" src="images/profile/1.png" alt="" width="50">
                    </div>
                </div>
                
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td><span class="text-primary">You are selling</span></td>
                        <td><span class="text-primary">0.00254 BTC</span></td>
                      </tr>
                      <tr>
                        <td>Payment Method</td>
                        <td>Bank of America Bank ***********5245</td>
                      </tr>
                      <tr>
                        <td>Exchange Rate</td>
                        <td>0.00212455 BTC</td>
                      </tr>
                      <tr>
                        <td>Fee</td>
                        <td>$28.00 USD</td>
                      </tr>
                      <tr>
                        <td>Total</td>
                        <td>$854.00 USD</td>
                      </tr>
                      <tr>
                        <td>Vat</td>
                        <td>
                          <div class="text-danger">$25.00 USD</div>
                        </td>
                      </tr>
                      <tr>
                        <td> Sub Total</td>
                        <td> $1232.00 USD</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-xl-6">
          <div class="card accordion border-0 rounded-default mb-4 mb-xl-0" id="accordion-faq">
            <h5 class="card-title px-4 py-3">FAQ</h5>
            <div class="accordion-item px-4 py-3">
              <h6 class="accordion-button p-0 border-0 background-transparent text-dark-200"  id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"  aria-controls="collapseOne">What Shipping Methods are Available?</h6>
              <div id="collapseOne" class="accordion-collapse border-0 collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion-faq">
                <div class="accordion-body p-0">
                  <p class="fs-6 mt-4">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item px-4 py-3">
              <h6 class="accordion-button p-0 border-0 background-transparent collapsed text-dark-200" id="headingTwo" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">How Long Will it Take To Get My Package?</h6>
              <div id="collapseTwo" class="accordion-collapse border-0 collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion-faq">
                <div class="accordion-body p-0">
                  <p class="fs-6 mt-4">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item px-4 py-3">
              <h6 class="accordion-button p-0 border-0 background-transparent collapsed text-dark-200" id="headingThree"data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How Do I Track My Order?</h6>
              <div id="collapseThree" class="accordion-collapse border-0 collapse" aria-labelledby="headingThree" data-bs-parent="#accordion-faq">
                <div class="accordion-body p-0">
                  <p class="fs-6 mt-4">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item px-4 py-3">
              <h6 class="accordion-button p-0 border-0 background-transparent collapsed text-dark-200" id="headingFour"data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Do I Need A Account To Place Order?</h6>
              <div id="collapseFour" class="accordion-collapse border-0 collapse" aria-labelledby="headingFour" data-bs-parent="#accordion-faq">
                <div class="accordion-body p-0">
                  <p class="fs-6 mt-4">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item px-4 py-3">
              <h6 class="accordion-button p-0 border-0 background-transparent collapsed text-dark-200" id="headingFive"data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">How do I Place an Order?</h6>
              <div id="collapseFive" class="accordion-collapse border-0 collapse" aria-labelledby="headingFive" data-bs-parent="#accordion-faq">
                <div class="accordion-body p-0">
                  <p class="fs-6 mt-4">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- card end -->
        </div>

        <div class="col-xl-6">
          <div class="intro-video-play">
            <div class="play-btn">
              <a class="venobox popup-youtube" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=aRh_eUQSmIg">
              <span><i class="fas fa-play"></i></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===================== Content body End =====================-->
@endsection