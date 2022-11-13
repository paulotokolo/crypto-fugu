@extends('webmenu')
@section('content')
<div class="fugu-breadcrumb-section">
    <div class="container">
      <div class="breadcrumbs">
        <h1 class="wow fadeInUpX" data-wow-delay="0s">Get in touch</h1>
        <nav aria-label="breadcrumb" class="wow fadeInUpX" data-wow-delay="0.15s">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Get in touch</li>
          </ol>
        </nav>
      </div>

    </div>
    <div class="fugu-shape8">
      <img src="assets/images/shape/shape7.png" alt="">
    </div>
    <div class="fugu-shape9">
      <img src="assets/images/shape/shape8.png" alt="">
    </div>
  </div>
  <!-- End breadcrumb -->

  <div class="section fugu-section-padding">
    <div class="container">
      <div class="row">
        <div class="col-xl-5 col-lg-6 col-md-10">
          <div class="fugu-default-content contact-page">
            <h2>Have any questions? We will talk to you sincerely anytime</h2>
            <p>If you have any questions about subscription or usage, please fill out the form and our team will get back to you within 24 hours.</p>
            <div class="fugu-contact-info">
              <ul>
                <li>
                  <a href="tel:123">
                    <div class="fugu-contact-info-icon">
                      <img src="assets/images/social/call.svg" alt="">
                    </div>
                    <h5>Call us</h5>
                    <p>+088-234-6534-563</p>
                  </a>
                </li>
                <li>
                  <a href="mailto:name@email.com">
                    <div class="fugu-contact-info-icon">
                      <img src="assets/images/social/email.svg" alt="">
                    </div>
                    <h5>Email us</h5>
                    <p>example@gmail.com</p>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div class="fugu-contact-info-icon">
                      <img src="assets/images/social/map.svg" alt="">
                    </div>
                    <h5>Office address</h5>
                    <p>4132 Thornridge City, New York.</p>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 offset-xl-1">
          <div class="fugu-contact-wrap  wow fadeInUpX">
            <div class="fugu-input-field">
              <label>Your name</label>
              <input type="text" placeholder="Enter your full name">
            </div>
            <div class="fugu-input-field">
              <label>Email address</label>
              <input type="email" placeholder="Enter your email">
            </div>
            <div class="fugu-input-field">
              <label>Write your message</label>
              <textarea name="textarea" placeholder="Write us your question here..."></textarea>
            </div>
            <button id="fugu-input-submit">Send Message</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End section -->

  <div class="section bg-warning-300 fugu-section-padding3">
    <div class="container">
      <div class="fugu-section-title">
        <h2>Want communicate directly?</h2>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="fugu-iconbox-wrap4 wow fadeInUpX" data-wow-delay="0s">
            <div class="fugu-iconbox-icon4">
              <img src="assets/images/all-img/contact/icon1.png" alt="">
            </div>
            <div class="fugu-iconbox-data4">
              <h4>Careers</h4>
              <p>the job or series of jobs that you do during your working making progress</p>
              <a class="fugu-icon-btn" href="#">Discover More <img src="assets/images/svg/arrow-black-right.svg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="fugu-iconbox-wrap4 wow fadeInUpX" data-wow-delay=".10s">
            <div class="fugu-iconbox-icon4">
              <img src="assets/images/all-img/contact/icon2.png" alt="">
            </div>
            <div class="fugu-iconbox-data4">
              <h4>Help & Support</h4>
              <p>the job or series of jobs that you do during your working making progress</p>
              <a class="fugu-icon-btn" href="#">Discover More <img src="assets/images/svg/arrow-black-right.svg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
          <div class="fugu-iconbox-wrap4 wow fadeInUpX" data-wow-delay=".20s">
            <div class="fugu-iconbox-icon4">
              <img src="assets/images/all-img/contact/icon3.png" alt="">
            </div>
            <div class="fugu-iconbox-data4">
              <h4>Ask Question</h4>
              <p>the job or series of jobs that you do during your working making progress</p>
              <a class="fugu-icon-btn" href="#">Discover More <img src="assets/images/svg/arrow-black-right.svg" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End section -->

  <div class="fugu-map">
    <div id="map"></div>
  </div>

  <!-- End map -->

  <div class="section fugu-section-padding2">
    <div class="container">
      <div class="fugu-section-title">
        <h2>Ask us if you have any <br/> other questions</h2>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="nexto-accordion-one" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Q. What is cryptocurrency in general?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  A cryptocurrency is a digital currency, which is an alternative form of payment created using encryption algorithms.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Q. What other types of cryptocurrency are out there?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  A cryptocurrency is a digital currency, which is an alternative form of payment created using encryption algorithms.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Q. What can you buy with cryptocurrency, and how?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  A cryptocurrency is a digital currency, which is an alternative form of payment created using encryption algorithms.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Q. What support and service packages are available?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  A cryptocurrency is a digital currency, which is an alternative form of payment created using encryption algorithms.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="nexto-accordion-one two" id="accordionExample2">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  Q. Will my data and information be safe?
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample2">
                <div class="accordion-body">
                  A cryptocurrency is a digital currency, which is an alternative form of payment created using encryption algorithms.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  Q. What regulation and requirements govern bitcoin?
                </button>
              </h2>
              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample2">
                <div class="accordion-body">
                  A cryptocurrency is a digital currency, which is an alternative form of payment created using encryption algorithms.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingSeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                  Q. What is the biggest problem with cryptocurrency?
                </button>
              </h2>
              <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample2">
                <div class="accordion-body">
                  A cryptocurrency is a digital currency, which is an alternative form of payment created using encryption algorithms.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingEight">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                  Q. Will my data and information be safe?
                </button>
              </h2>
              <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample2">
                <div class="accordion-body">
                  A cryptocurrency is a digital currency, which is an alternative form of payment created using encryption algorithms.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="fugu-center-btn">
        <a class="fugu-btn small-btn" href="#">Ask More</a>
      </div>
    </div>
  </div>

  <!-- End -->
@endsection