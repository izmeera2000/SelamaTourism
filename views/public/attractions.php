<!--
=========================================================
* Soft UI Design System PRO - v1.1.0
=========================================================

* Product Page:  https://themes.getbootstrap.com/product/soft-ui-design-system-pro/ 
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/public/template/head.php"); ?>

<body class="presentation-page">
  <!-- Navbar -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/public/template/nav.php"); ?>

  
  <header class="header-2">
    <div class="page-header min-vh-75 relative" style="background-image: url('assets/img/lataputeh.jpg')">
      <span class=" mask  bg-gradient-dark"></span>
      <div class="container">
        <div class="row">
          <div class="col-lg-7 text-center mx-auto">
            <h1 class="text-white pt-3 mt-n5">Lata Puteh</h1>
            <p class="lead text-white mt-3">Discover the Hidden Gem of Nature </p>
            <div class="buttons">
              <a href="<?php echo $basePath2; ?>/book"  class="btn bg-gradient-primary mt-4">Explore Now</a>
              <!-- <button type="button" class="btn text-primary shadow-none mt-4">Read more</button> -->
            </div>
          </div>
        </div>
      </div>
      <div class="position-absolute w-100 z-index-1 bottom-0">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
          viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
          <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
          </defs>
          <g class="moving-waves">
            <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
            <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
            <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)" />
            <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,0.95" />
          </g>
        </svg>
      </div>
    </div>
  </header>
  <!-- <section class="pt-3 pb-4" id="count-stats">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 z-index-2 border-radius-xl mt-n10 mx-auto py-3 blur shadow-blur">
          <div class="row">
            <div class="col-md-4 position-relative">
              <div class="p-3 text-center">
                <h1 class="text-gradient text-primary"><span id="state1" countTo="300">0</span>+</h1>
                <h5 class="mt-3">Coded Elements</h5>
                <p class="text-sm">From buttons, to inputs, navbars, alerts or cards, you are covered</p>
              </div>
              <hr class="vertical dark">
            </div>
            <div class="col-md-4 position-relative">
              <div class="p-3 text-center">
                <h1 class="text-gradient text-primary"> <span id="state2" countTo="100">0</span>+</h1>
                <h5 class="mt-3">Design Blocks</h5>
                <p class="text-sm">Mix the sections, change the colors and unleash your creativity</p>
              </div>
              <hr class="vertical dark">
            </div>
            <div class="col-md-4">
              <div class="p-3 text-center">
                <h1 class="text-gradient text-primary" id="state3" countTo="39">0</h1>
                <h5 class="mt-3">Pages</h5>
                <p class="text-sm">Save 3-4 weeks of work when you use our pre-made pages for your website</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->



  <section class="pt-7 pb-0">

    <div class="container">
      <div class="row">
        <div class="row justify-content-center text-center my-sm-5">
          <div class="col-lg-6">
            <h2 class="text-dark mb-0">About</h2>
            <h2 class="text-primary text-gradient">Lata Puteh</h2>
            <!-- <p class="lead">We have created multiple options for you to put together and customise into pixel perfect pages. </p> -->
          </div>
        </div>
      </div>
    </div>

    <div class="container py-5">
      <div class="row align-items-center">
        <div class="col-md-6 mb-md-0 mb-4">
          <h3 class="text-gradient text-primary mb-0">Location</h3>
          <!-- <h3>500+ offices</h3> -->
          <!-- <p class="mb-4">
            Technology is applied science. Science is the study of nature. Mathematics is the language of nature. Philosophy is the root of mathematics. All tightly interrelated.
          </p> -->
          <p class="font-weight-bold"><span class="me-2">-</span> Showcase and embed your work with</p>
          <p class="font-weight-bold"><span class="me-2">-</span> Publish across social channels in a click</p>
          <p class="font-weight-bold"><span class="me-2">-</span> Sell your videos worldwide</p>
          <p class="font-weight-bold mb-5"><span class="me-2">-</span> Make more profit</p>
          <!-- <a href="javascript:;" class="text-info icon-move-right">Learn More
            <i class="fas fa-arrow-right text-sm ps-1"></i>
          </a> -->
        </div>
        <div class="col-md-6">
          <div class="card p-0 rounded-3">
            <div class="blur-shadow-image">
              <!-- <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5551.778495759178!2d100.88466645!3d5.1540165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31b5449f5352a5a5%3A0xd95bd59180f51a34!2sSungai%20Lata%20Puteh%2C%2034510%20Batu%20Kurau%2C%20Perak!5e1!3m2!1sen!2smy!4v1741111614717!5m2!1sen!2smy"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe> -->
            </div>
            <div class="colored-shadow"
              style="background-image: url(&quot;https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/buildings.jpg&quot;);">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container py-5">
      <div class="row align-items-center">

        <div class="col-md-6">
          <div class="card p-0 rounded-3">
            <div class="blur-shadow-image">
              <img
                src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/buildings.jpg"
                alt="img-blur-shadow" class="img-fluid shadow rounded-3">
            </div>
            <div class="colored-shadow"
              style="background-image: url(&quot;https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/buildings.jpg&quot;);">
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-md-0 mb-4">
          <h3 class="text-gradient text-primary mb-0">History</h3>
          <!-- <h3>500+ offices</h3> -->
          <!-- <p class="mb-4">
            Technology is applied science. Science is the study of nature. Mathematics is the language of nature. Philosophy is the root of mathematics. All tightly interrelated.
          </p> -->
          <p class="font-weight-bold"><span class="me-2">-</span> Showcase and embed your work with</p>
          <p class="font-weight-bold"><span class="me-2">-</span> Publish across social channels in a click</p>
          <p class="font-weight-bold"><span class="me-2">-</span> Sell your videos worldwide</p>
          <p class="font-weight-bold mb-5"><span class="me-2">-</span> Make more profit</p>
          <!-- <a href="javascript:;" class="text-info icon-move-right">Learn More
            <i class="fas fa-arrow-right text-sm ps-1"></i>
          </a> -->
        </div>

      </div>
    </div>


    <div class="container py-5">
      <div class="row align-items-center">
        <div class="col-md-6 mb-md-0 mb-4">
          <h3 class="text-gradient text-primary mb-0">Best Time To Visit</h3>
          <!-- <h3>500+ offices</h3> -->
          <!-- <p class="mb-4">
            Technology is applied science. Science is the study of nature. Mathematics is the language of nature. Philosophy is the root of mathematics. All tightly interrelated.
          </p> -->
          <p class="font-weight-bold"><span class="me-2">-</span> Showcase and embed your work with</p>
          <p class="font-weight-bold"><span class="me-2">-</span> Publish across social channels in a click</p>
          <p class="font-weight-bold"><span class="me-2">-</span> Sell your videos worldwide</p>
          <p class="font-weight-bold mb-5"><span class="me-2">-</span> Make more profit</p>
          <!-- <a href="javascript:;" class="text-info icon-move-right">Learn More
            <i class="fas fa-arrow-right text-sm ps-1"></i>
          </a> -->
        </div>
        <div class="col-md-6">
          <div class="card p-0 rounded-3">
            <div class="blur-shadow-image">
              <img
                src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/buildings.jpg"
                alt="img-blur-shadow" class="img-fluid shadow rounded-3">
            </div>
            <div class="colored-shadow"
              style="background-image: url(&quot;https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/buildings.jpg&quot;);">
            </div>
          </div>
        </div>
      </div>
    </div>




  </section>

  <section class=" py-5 ">

    <div class="container">
      <div class="row">
        <div class="row justify-content-center text-center my-sm-5">
          <div class="col-lg-6">
            <h2 class="text-dark mb-0">Why Visit</h2>
            <h2 class="text-primary text-gradient">Lata Puteh</h2>
            <!-- <p class="lead">We have created multiple options for you to put together and customise into pixel perfect pages. </p> -->
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="card card-background move-on-hover shadow-lg">
            
            <a href="javascript:;" >
              <div class="full-background "
                style="background-image: url(https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/pool.jpg)">
              </div>
              
              <div class="card-body pt-12">
                <h4 class="text-white">Search and Discovery</h4>
                <p>Website visitors today demand a frictionless user expericence — especially when using search. Because
                  of the hight standards.</p>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="card card-background move-on-hover shadow-lg">
            
            <a href="javascript:;" >
              <div class="full-background "
                style="background-image: url(https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/antalya.jpg)">
              </div>
              
              <div class="card-body pt-12">
                <h4 class="text-white">Search and Discovery</h4>
                <p>Website visitors today demand a frictionless user expericence — especially when using search. Because
                  of the hight standards.</p>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="card card-background move-on-hover shadow-lg">
            
            <a href="javascript:;" >
              <div class="full-background "
                style="background-image: url(https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/tiny-house.jpg)">
              </div>
              
              <div class="card-body pt-12">
                <h4 class="text-white">Search and Discovery</h4>
                <p>Website visitors today demand a frictionless user expericence — especially when using search. Because
                  of the hight standards.</p>
              </div>
            </a>
          </div>
        </div>
 
     
      

      </div>
    </div>
  </section>


  <!-- START Testimonials w/ 3 cards & dark background -->
  <section class="py-5 bg-gradient-primary position-relative overflow-hidden">
    <div class="position-absolute w-100 z-inde-1 top-0 mt-n3">
      <svg width="100%" viewBox="0 -2 1920 157" version="1.1" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink">
        <title>wave-down</title>
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g fill="#FFFFFF" fill-rule="nonzero">
            <g id="wave-down">
              <path
                d="M0,60.8320331 C299.333333,115.127115 618.333333,111.165365 959,47.8320321 C1299.66667,-15.5013009 1620.66667,-15.2062179 1920,47.8320331 L1920,156.389409 L0,156.389409 L0,60.8320331 Z"
                id="Path-Copy-2"
                transform="translate(960.000000, 78.416017) rotate(180.000000) translate(-960.000000, -78.416017) ">
              </path>
            </g>
          </g>
        </g>
      </svg>
    </div>
    <img src="../../assets/img/shapes/waves-white.svg" class="position-absolute opacity-6 h-100 top-0 d-md-block d-none"
      alt="">
    <div class="container pt-6 pb-5 position-relative z-index-3">
      <div class="row">
        <div class="col-md-6 mx-auto text-center">
          <span class="badge badge-white text-dark mb-2">Testimonials</span>
          <h2 class="text-white mb-3">Some thoughts from our clients</h2>
          <h5 class="text-white font-weight-light">
            If you’re selected for them you’ll also get three tickets, opportunity to access Investor Office Hours and
            Mentor Hours and much more all for free.
          </h5>
        </div>
      </div>
      <div class="row mt-8">
        <div class="col-md-4 mb-md-0 mb-7">
          <div class="card">
            <div class="text-center mt-n5 z-index-1">
              <div class="position-relative">
                <div class="blur-shadow-avatar">
                  <img class="avatar avatar-xxl shadow-lg" src="../../assets/img/team-2.jpg">
                </div>
              </div>
            </div>
            <div class="card-body text-center pb-0">
              <h4 class="mb-0">Olivia Harper</h4>
              <p>@oliviaharper</p>
              <p class="mt-2">
                The connections you make at Web Summit are unparalleled, we met users all over the world.
              </p>
            </div>
            <div class="card-footer text-center pt-2">
              <div class="mx-auto">
                <svg class="opacity-2" width="60px" height="60px" viewBox="0 0 270 270" version="1.1"
                  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>quote-down</title>
                  <g id="quote-down" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <path
                      d="M107.000381,49.033238 C111.792099,48.01429 115.761022,48.6892564 116.625294,50.9407629 C117.72393,53.8028077 113.174473,58.3219079 107.017635,60.982801 C107.011653,60.9853863 107.00567,60.9879683 106.999688,60.990547 C106.939902,61.0219589 106.879913,61.0439426 106.820031,61.0659514 C106.355389,61.2618887 105.888177,61.4371549 105.421944,61.5929594 C88.3985192,68.1467602 80.3242628,76.9161885 70.3525495,90.6906738 C60.0774843,104.884196 54.9399518,119.643717 54.9399518,134.969238 C54.9399518,138.278158 55.4624127,140.716309 56.5073346,142.283691 C57.2039492,143.328613 57.9876406,143.851074 58.8584088,143.851074 C59.7291771,143.851074 61.0353294,143.241536 62.7768659,142.022461 C68.3497825,138.016927 75.4030052,136.01416 83.9365338,136.01416 C93.8632916,136.01416 102.658051,140.063232 110.320811,148.161377 C117.983572,156.259521 121.814952,165.88151 121.814952,177.027344 C121.814952,188.695638 117.417572,198.970703 108.622813,207.852539 C99.828054,216.734375 89.1611432,221.175293 76.6220807,221.175293 C61.9931745,221.175293 49.3670351,215.166992 38.7436627,203.150391 C28.1202903,191.133789 22.8086041,175.024577 22.8086041,154.822754 C22.8086041,131.312012 30.0359804,110.239421 44.490733,91.6049805 C58.2196377,73.906272 74.3541002,59.8074126 102.443135,50.4450748 C102.615406,50.3748509 102.790055,50.3058192 102.966282,50.2381719 C104.199241,49.7648833 105.420135,49.3936487 106.596148,49.1227802 L107,49 Z M233.000381,49.033238 C237.792099,48.01429 241.761022,48.6892564 242.625294,50.9407629 C243.72393,53.8028077 239.174473,58.3219079 233.017635,60.982801 C233.011653,60.9853863 233.00567,60.9879683 232.999688,60.990547 C232.939902,61.0219589 232.879913,61.0439426 232.820031,61.0659514 C232.355389,61.2618887 231.888177,61.4371549 231.421944,61.5929594 C214.398519,68.1467602 206.324263,76.9161885 196.352549,90.6906738 C186.077484,104.884196 180.939952,119.643717 180.939952,134.969238 C180.939952,138.278158 181.462413,140.716309 182.507335,142.283691 C183.203949,143.328613 183.987641,143.851074 184.858409,143.851074 C185.729177,143.851074 187.035329,143.241536 188.776866,142.022461 C194.349783,138.016927 201.403005,136.01416 209.936534,136.01416 C219.863292,136.01416 228.658051,140.063232 236.320811,148.161377 C243.983572,156.259521 247.814952,165.88151 247.814952,177.027344 C247.814952,188.695638 243.417572,198.970703 234.622813,207.852539 C225.828054,216.734375 215.161143,221.175293 202.622081,221.175293 C187.993174,221.175293 175.367035,215.166992 164.743663,203.150391 C154.12029,191.133789 148.808604,175.024577 148.808604,154.822754 C148.808604,131.312012 156.03598,110.239421 170.490733,91.6049805 C184.219638,73.906272 200.3541,59.8074126 228.443135,50.4450748 C228.615406,50.3748509 228.790055,50.3058192 228.966282,50.2381719 C230.199241,49.7648833 231.420135,49.3936487 232.596148,49.1227802 L233,49 Z"
                      id="quote-up" fill="#48484A" fill-rule="nonzero"
                      transform="translate(135.311778, 134.872794) scale(-1, -1) translate(-135.311778, -134.872794) ">
                    </path>
                  </g>
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-md-0 mb-7">
          <div class="card">
            <div class="text-center mt-n5 z-index-1">
              <div class="position-relative">
                <div class="blur-shadow-avatar">
                  <img class="avatar avatar-xxl shadow-lg" src="../../assets/img/team-3.jpg">
                </div>
              </div>
            </div>
            <div class="card-body text-center pb-0">
              <h4 class="mb-0">Simon Lauren</h4>
              <p>@simonlaurent</p>
              <p class="mt-2">
                The networking at Web Summit is like no other European tech conference. Everything is amazing.
              </p>
            </div>
            <div class="card-footer text-center pt-2">
              <div class="mx-auto">
                <svg class="opacity-2" width="60px" height="60px" viewBox="0 0 270 270" version="1.1"
                  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>quote-down</title>
                  <g id="quote-down" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <path
                      d="M107.000381,49.033238 C111.792099,48.01429 115.761022,48.6892564 116.625294,50.9407629 C117.72393,53.8028077 113.174473,58.3219079 107.017635,60.982801 C107.011653,60.9853863 107.00567,60.9879683 106.999688,60.990547 C106.939902,61.0219589 106.879913,61.0439426 106.820031,61.0659514 C106.355389,61.2618887 105.888177,61.4371549 105.421944,61.5929594 C88.3985192,68.1467602 80.3242628,76.9161885 70.3525495,90.6906738 C60.0774843,104.884196 54.9399518,119.643717 54.9399518,134.969238 C54.9399518,138.278158 55.4624127,140.716309 56.5073346,142.283691 C57.2039492,143.328613 57.9876406,143.851074 58.8584088,143.851074 C59.7291771,143.851074 61.0353294,143.241536 62.7768659,142.022461 C68.3497825,138.016927 75.4030052,136.01416 83.9365338,136.01416 C93.8632916,136.01416 102.658051,140.063232 110.320811,148.161377 C117.983572,156.259521 121.814952,165.88151 121.814952,177.027344 C121.814952,188.695638 117.417572,198.970703 108.622813,207.852539 C99.828054,216.734375 89.1611432,221.175293 76.6220807,221.175293 C61.9931745,221.175293 49.3670351,215.166992 38.7436627,203.150391 C28.1202903,191.133789 22.8086041,175.024577 22.8086041,154.822754 C22.8086041,131.312012 30.0359804,110.239421 44.490733,91.6049805 C58.2196377,73.906272 74.3541002,59.8074126 102.443135,50.4450748 C102.615406,50.3748509 102.790055,50.3058192 102.966282,50.2381719 C104.199241,49.7648833 105.420135,49.3936487 106.596148,49.1227802 L107,49 Z M233.000381,49.033238 C237.792099,48.01429 241.761022,48.6892564 242.625294,50.9407629 C243.72393,53.8028077 239.174473,58.3219079 233.017635,60.982801 C233.011653,60.9853863 233.00567,60.9879683 232.999688,60.990547 C232.939902,61.0219589 232.879913,61.0439426 232.820031,61.0659514 C232.355389,61.2618887 231.888177,61.4371549 231.421944,61.5929594 C214.398519,68.1467602 206.324263,76.9161885 196.352549,90.6906738 C186.077484,104.884196 180.939952,119.643717 180.939952,134.969238 C180.939952,138.278158 181.462413,140.716309 182.507335,142.283691 C183.203949,143.328613 183.987641,143.851074 184.858409,143.851074 C185.729177,143.851074 187.035329,143.241536 188.776866,142.022461 C194.349783,138.016927 201.403005,136.01416 209.936534,136.01416 C219.863292,136.01416 228.658051,140.063232 236.320811,148.161377 C243.983572,156.259521 247.814952,165.88151 247.814952,177.027344 C247.814952,188.695638 243.417572,198.970703 234.622813,207.852539 C225.828054,216.734375 215.161143,221.175293 202.622081,221.175293 C187.993174,221.175293 175.367035,215.166992 164.743663,203.150391 C154.12029,191.133789 148.808604,175.024577 148.808604,154.822754 C148.808604,131.312012 156.03598,110.239421 170.490733,91.6049805 C184.219638,73.906272 200.3541,59.8074126 228.443135,50.4450748 C228.615406,50.3748509 228.790055,50.3058192 228.966282,50.2381719 C230.199241,49.7648833 231.420135,49.3936487 232.596148,49.1227802 L233,49 Z"
                      id="quote-up" fill="#48484A" fill-rule="nonzero"
                      transform="translate(135.311778, 134.872794) scale(-1, -1) translate(-135.311778, -134.872794) ">
                    </path>
                  </g>
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-md-0 mb-7">
          <div class="card">
            <div class="text-center mt-n5 z-index-1">
              <div class="position-relative">
                <div class="blur-shadow-avatar">
                  <img class="avatar avatar-xxl shadow-lg" src="../../assets/img/team-4.jpg">
                </div>
              </div>
            </div>
            <div class="card-body text-center pb-0">
              <h4 class="mb-0">Lucian Eurel</h4>
              <p>@luciaeurel</p>
              <p class="mt-2">
                Web Summit will increase your appetite, your inspiration, your motivation and your network.
              </p>
            </div>
            <div class="card-footer text-center pt-2">
              <div class="mx-auto">
                <svg class="opacity-2" width="60px" height="60px" viewBox="0 0 270 270" version="1.1"
                  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>quote-down</title>
                  <g id="quote-down" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <path
                      d="M107.000381,49.033238 C111.792099,48.01429 115.761022,48.6892564 116.625294,50.9407629 C117.72393,53.8028077 113.174473,58.3219079 107.017635,60.982801 C107.011653,60.9853863 107.00567,60.9879683 106.999688,60.990547 C106.939902,61.0219589 106.879913,61.0439426 106.820031,61.0659514 C106.355389,61.2618887 105.888177,61.4371549 105.421944,61.5929594 C88.3985192,68.1467602 80.3242628,76.9161885 70.3525495,90.6906738 C60.0774843,104.884196 54.9399518,119.643717 54.9399518,134.969238 C54.9399518,138.278158 55.4624127,140.716309 56.5073346,142.283691 C57.2039492,143.328613 57.9876406,143.851074 58.8584088,143.851074 C59.7291771,143.851074 61.0353294,143.241536 62.7768659,142.022461 C68.3497825,138.016927 75.4030052,136.01416 83.9365338,136.01416 C93.8632916,136.01416 102.658051,140.063232 110.320811,148.161377 C117.983572,156.259521 121.814952,165.88151 121.814952,177.027344 C121.814952,188.695638 117.417572,198.970703 108.622813,207.852539 C99.828054,216.734375 89.1611432,221.175293 76.6220807,221.175293 C61.9931745,221.175293 49.3670351,215.166992 38.7436627,203.150391 C28.1202903,191.133789 22.8086041,175.024577 22.8086041,154.822754 C22.8086041,131.312012 30.0359804,110.239421 44.490733,91.6049805 C58.2196377,73.906272 74.3541002,59.8074126 102.443135,50.4450748 C102.615406,50.3748509 102.790055,50.3058192 102.966282,50.2381719 C104.199241,49.7648833 105.420135,49.3936487 106.596148,49.1227802 L107,49 Z M233.000381,49.033238 C237.792099,48.01429 241.761022,48.6892564 242.625294,50.9407629 C243.72393,53.8028077 239.174473,58.3219079 233.017635,60.982801 C233.011653,60.9853863 233.00567,60.9879683 232.999688,60.990547 C232.939902,61.0219589 232.879913,61.0439426 232.820031,61.0659514 C232.355389,61.2618887 231.888177,61.4371549 231.421944,61.5929594 C214.398519,68.1467602 206.324263,76.9161885 196.352549,90.6906738 C186.077484,104.884196 180.939952,119.643717 180.939952,134.969238 C180.939952,138.278158 181.462413,140.716309 182.507335,142.283691 C183.203949,143.328613 183.987641,143.851074 184.858409,143.851074 C185.729177,143.851074 187.035329,143.241536 188.776866,142.022461 C194.349783,138.016927 201.403005,136.01416 209.936534,136.01416 C219.863292,136.01416 228.658051,140.063232 236.320811,148.161377 C243.983572,156.259521 247.814952,165.88151 247.814952,177.027344 C247.814952,188.695638 243.417572,198.970703 234.622813,207.852539 C225.828054,216.734375 215.161143,221.175293 202.622081,221.175293 C187.993174,221.175293 175.367035,215.166992 164.743663,203.150391 C154.12029,191.133789 148.808604,175.024577 148.808604,154.822754 C148.808604,131.312012 156.03598,110.239421 170.490733,91.6049805 C184.219638,73.906272 200.3541,59.8074126 228.443135,50.4450748 C228.615406,50.3748509 228.790055,50.3058192 228.966282,50.2381719 C230.199241,49.7648833 231.420135,49.3936487 232.596148,49.1227802 L233,49 Z"
                      id="quote-up" fill="#48484A" fill-rule="nonzero"
                      transform="translate(135.311778, 134.872794) scale(-1, -1) translate(-135.311778, -134.872794) ">
                    </path>
                  </g>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="position-absolute w-100 bottom-0">
      <svg width="100%" viewBox="0 -1 1920 166" version="1.1" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink">
        <title>wave-up</title>
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g transform="translate(0.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <g id="wave-up" transform="translate(0.000000, -5.000000)">
              <path
                d="M0,70 C298.666667,105.333333 618.666667,95 960,39 C1301.33333,-17 1621.33333,-11.3333333 1920,56 L1920,165 L0,165 L0,70 Z">
              </path>
            </g>
          </g>
        </g>
      </svg>
    </div>
  </section>
  <!-- END Testimonials w/ 3 cards & dark background -->

  <!-- 
  <section class="my-5 py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 ms-auto">
          <div class="row justify-content-start">
            <div class="col-md-6">
              <div class="info">
                <div class="icon icon-sm">
                  <svg class="text-primary" width="25px" height="25px" viewBox="0 0 40 44" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>document</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(154.000000, 300.000000)">
                            <path class="color-background"
                              d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"
                              opacity="0.603585379"></path>
                            <path class="color-background"
                              d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
                            </path>
                          </g>
                        </g>
                      </g>
                    </g>
                  </svg>
                </div>
                <h5 class="font-weight-bolder mt-3">Full Documentation</h5>
                <p class="pe-5">Built by developers for developers. Check the foundation and you will find everything
                  inside our documentation.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info">
                <div class="icon icon-sm">
                  <svg class="text-primary" width="25px" height="25px" viewBox="0 0 45 40" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>shop </title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                          <g id="shop-" transform="translate(0.000000, 148.000000)">
                            <path class="color-background"
                              d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"
                              opacity="0.598981585"></path>
                            <path class="color-background"
                              d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                            </path>
                          </g>
                        </g>
                      </g>
                    </g>
                  </svg>
                </div>
                <h5 class="font-weight-bolder mt-3">Bootstrap 5 Ready</h5>
                <p class="pe-3">The world’s most popular front-end open source toolkit, featuring Sass variables and
                  mixins.</p>
              </div>
            </div>
          </div>
          <div class="row justify-content-start mt-5">
            <div class="col-md-6 mt-3">
              <div class="info">
                <div class="icon icon-sm">
                  <svg class="text-primary" width="25px" height="25px" viewBox="0 0 42 44" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>time-alarm</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g transform="translate(-2319.000000, -440.000000)" fill="#923DFA" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                          <g id="time-alarm" transform="translate(603.000000, 149.000000)">
                            <path class="color-background"
                              d="M18.8086957,4.70034783 C15.3814926,0.343541521 9.0713063,-0.410050841 4.7145,3.01715217 C0.357693695,6.44435519 -0.395898667,12.7545415 3.03130435,17.1113478 C5.53738466,10.3360568 11.6337901,5.54042955 18.8086957,4.70034783 L18.8086957,4.70034783 Z"
                              opacity="0.6"></path>
                            <path class="color-background"
                              d="M38.9686957,17.1113478 C42.3958987,12.7545415 41.6423063,6.44435519 37.2855,3.01715217 C32.9286937,-0.410050841 26.6185074,0.343541521 23.1913043,4.70034783 C30.3662099,5.54042955 36.4626153,10.3360568 38.9686957,17.1113478 Z"
                              opacity="0.6"></path>
                            <path class="color-background"
                              d="M34.3815652,34.7668696 C40.2057958,27.7073059 39.5440671,17.3375603 32.869743,11.0755718 C26.1954189,4.81358341 15.8045811,4.81358341 9.13025701,11.0755718 C2.45593289,17.3375603 1.79420418,27.7073059 7.61843478,34.7668696 L3.9753913,40.0506522 C3.58549114,40.5871271 3.51710058,41.2928217 3.79673036,41.8941824 C4.07636014,42.4955431 4.66004722,42.8980248 5.32153275,42.9456105 C5.98301828,42.9931963 6.61830436,42.6784048 6.98113043,42.1232609 L10.2744783,37.3434783 C16.5555112,42.3298213 25.4444888,42.3298213 31.7255217,37.3434783 L35.0188696,42.1196087 C35.6014207,42.9211577 36.7169135,43.1118605 37.53266,42.5493622 C38.3484064,41.9868639 38.5667083,40.8764423 38.0246087,40.047 L34.3815652,34.7668696 Z M30.1304348,25.5652174 L21,25.5652174 C20.49574,25.5652174 20.0869565,25.1564339 20.0869565,24.6521739 L20.0869565,15.5217391 C20.0869565,15.0174791 20.49574,14.6086957 21,14.6086957 C21.50426,14.6086957 21.9130435,15.0174791 21.9130435,15.5217391 L21.9130435,23.7391304 L30.1304348,23.7391304 C30.6346948,23.7391304 31.0434783,24.1479139 31.0434783,24.6521739 C31.0434783,25.1564339 30.6346948,25.5652174 30.1304348,25.5652174 Z">
                            </path>
                          </g>
                        </g>
                      </g>
                    </g>
                  </svg>
                </div>
                <h5 class="font-weight-bolder mt-3">Save Time & Money</h5>
                <p class="pe-5">Creating your design from scratch with dedicated designers can be very expensive. Start
                  with our Design System.</p>
              </div>
            </div>
            <div class="col-md-6 mt-3">
              <div class="info">
                <div class="icon icon-sm">
                  <svg class="text-primary" width="25px" height="25px" viewBox="0 0 42 42" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>office</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                          <g id="office" transform="translate(153.000000, 2.000000)">
                            <path class="color-background"
                              d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"
                              opacity="0.6"></path>
                            <path class="color-background"
                              d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z">
                            </path>
                          </g>
                        </g>
                      </g>
                    </g>
                  </svg>
                </div>
                <h5 class="font-weight-bolder mt-3">Fully Responsive</h5>
                <p class="pe-3">Regardless of the screen size, the website content will naturally fit the given
                  resolution.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
          <div class="card card-background card-background-mask-primary tilt" data-tilt>
            <div class="full-background"
              style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/team-working.jpg')">
            </div>
            <div class="card-body pt-7 text-center">
              <div class="icon icon-lg up mb-3 mt-3">
                <svg width="50px" height="50px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>box-3d-50</title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                        <g id="box-3d-50" transform="translate(603.000000, 0.000000)">
                          <path
                            d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z">
                          </path>
                          <path
                            d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"
                            opacity="0.7"></path>
                          <path
                            d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"
                            opacity="0.7"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <h2 class="text-white up mb-0">Feel the <br /> Soft UI Design System</h2>
              <a href="sections/page-sections/hero-sections.html" target="_blank"
                class="btn btn-outline-white btn-lg mt-3 up btn-round">Start with Headers</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- <section class="my-5 py-5">
    <div class="container">
      <div class="row">
        <div class="row justify-content-center text-center my-sm-5">
          <div class="col-lg-6">
            <h2 class="text-dark mb-0">Huge collection of sections</h2>
            <h2 class="text-primary text-gradient">Infinite combinations</h2>
            <p class="lead">We have created multiple options for you to put together and customise into pixel perfect
              pages. </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-sm-5 mt-3">
      <div class="row">
        <div class="col-lg-3">
          <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
            <h3>Design Blocks</h3>
            <h6 class="text-secondary font-weight-normal pe-3">A selection of 45 page sections that fit perfectly in any
              combination</h6>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="row">
            <div class="col-md-4 mt-md-0">
              <a
                href="https://demos.creative-tim.com/marketplace/soft-ui-design-system-pro/sections/page-sections/hero-sections.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 my-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/page-sections/page-headers/header-7.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Page Headers</h6>
                  <p class="text-secondary text-sm">10 Examples</p>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
              <a href="sections/page-sections/features.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 my-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/page-sections/features/features-3.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Features</h6>
                  <p class="text-secondary text-sm">14 Examples</p>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
              <a href="sections/page-sections/pricing.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 my-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/page-sections/pricing/pricing-3.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Pricing</h6>
                  <p class="text-secondary text-sm">8 Examples</p>
                </div>
              </a>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-4 mt-md-0 mt-3">
              <a href="sections/page-sections/faq.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 my-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/page-sections/faq/faq-1.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">FAQ</h6>
                  <p class="text-secondary text-sm">1 Examples</p>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
              <a href="sections/page-sections/blog-posts.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 my-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/page-sections/blog-posts/blog-7.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Blog Posts</h6>
                  <p class="text-secondary text-sm">11 Examples</p>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
              <a href="sections/page-sections/testimonials.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 my-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/page-sections/testimonials/testimonials-2.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Testimonials</h6>
                  <p class="text-secondary text-sm">11 Examples</p>
                </div>
              </a>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-4 mt-md-0 mt-3">
              <a href="sections/page-sections/teams.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 my-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/page-sections/teams/team-6.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Teams</h6>
                  <p class="text-secondary text-sm">6 Examples</p>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
              <a href="sections/page-sections/stats.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 my-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/page-sections/stats/stats-2.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Stats</h6>
                  <p class="text-secondary text-sm">3 Examples</p>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
              <a href="sections/page-sections/call-to-actions.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 my-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/page-sections/call-to-actions/prefooter-1.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Call to Actions</h6>
                  <p class="text-secondary text-sm">8 Examples</p>
                </div>
              </a>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-4 mt-md-0 mt-3">
              <a href="sections/page-sections/applications.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 my-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/page-sections/applications/project-6.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Applications</h6>
                  <p class="text-secondary text-sm">6 Examples</p>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
              <a href="sections/page-sections/logo-areas.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 my-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/page-sections/logo-areas/logos-3.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Logo Areas</h6>
                  <p class="text-secondary text-sm">4 Examples</p>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
              <a href="sections/page-sections/footers.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 my-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/page-sections/footers/footer-9.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Footers</h6>
                  <p class="text-secondary text-sm">10 Examples</p>
                </div>
              </a>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-4 mt-md-0 mt-3">
              <a href="sections/page-sections/general-cards.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 my-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/page-sections/general-cards/card-4.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">General Cards</h6>
                  <p class="text-secondary text-sm">9 Examples</p>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
              <a href="sections/page-sections/content-sections.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 my-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/page-sections/content-sections/content-6.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Content Sections</h6>
                  <p class="text-secondary text-sm">10 Examples</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row pt-lg-6">
        <div class="col-lg-3">
          <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
            <h3>Navigation</h3>
            <h6 class="text-secondary font-weight-normal pe-3">30+ components that will help go through the pages</h6>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="row mt-3">
            <div class="col-md-4">
              <a href="sections/navigation/navbars.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 m-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/navigation/navbars/navbar-large.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Navbars</h6>
                  <p class="text-secondary text-sm">4 Examples</p>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
              <a href="sections/navigation/nav-tabs.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 m-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/navigation/nav-tabs/tab-large.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Nav Tabs</h6>
                  <p class="text-secondary text-sm">2 Nav Tabs</p>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
              <a href="sections/navigation/pagination.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 m-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/navigation/pagination/pagination-large.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Pagination</h6>
                  <p class="text-secondary text-sm">3 Examples</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row pt-lg-6">
        <div class="col-lg-3">
          <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
            <h3>Input Areas</h3>
            <h6 class="text-secondary font-weight-normal pe-3">50+ elements that you need for text manipulation and
              insertion</h6>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="row mt-3">
            <div class="col-md-4">
              <a href="sections/input-areas/newsletters.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 my-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/input-areas/newsletters/newsletter-large.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Newsletters</h6>
                  <p class="text-secondary text-sm">6 Examples</p>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
              <a href="sections/input-areas/contact-sections.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 m-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/input-areas/contact-sections/contactus-large.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Contact Sections</h6>
                  <p class="text-secondary text-sm">8 Examples</p>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
              <a href="sections/input-areas/forms.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 m-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/input-areas/forms/forms-large.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Forms</h6>
                  <p class="text-secondary text-sm">3 Examples</p>
                </div>
              </a>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-4">
              <a href="sections/input-areas/inputs.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 my-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/input-areas/inputs/input-large.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Inputs</h6>
                  <p class="text-secondary text-sm">6 Examples</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row pt-lg-6">
        <div class="col-lg-3">
          <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
            <h3>Attention Catchers</h3>
            <h6 class="text-secondary font-weight-normal pe-3">20+ Fully coded components that popup from different
              places of the screen</h6>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="row mt-3">
            <div class="col-md-4">
              <a href="sections/attention-catchers/alerts.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 my-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/attention-catchers/alerts/alert-large.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Alerts</h6>
                  <p class="text-secondary text-sm">4 Examples</p>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
              <a href="sections/attention-catchers/notifications.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 my-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/attention-catchers/notifications/toast-large.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Notifications</h6>
                  <p class="text-secondary text-sm">3 Examples</p>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
              <a href="sections/attention-catchers/tooltips-popovers.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 my-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/attention-catchers/tooltips-popovers/popover-large.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Tooltips & Popovers</h6>
                  <p class="text-secondary text-sm">2 Examples</p>
                </div>
              </a>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-4 mt-md-0 mt-3">
              <a href="sections/attention-catchers/modals.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 my-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/attention-catchers/modals/modal-large.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Modals</h6>
                  <p class="text-secondary text-sm">5 Examples</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
            <h3>Elements</h3>
            <h6 class="text-secondary font-weight-normal pe-3">80+ carefully crafted small elements that come with
              multiple colors and shapes</h6>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="row mt-3">
            <div class="col-md-4">
              <a href="sections/elements/buttons.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 my-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/elements/buttons/button-large.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Buttons</h6>
                  <p class="text-secondary text-sm">6 Examples</p>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
              <a href="sections/elements/avatars.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 my-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/elements/avatars/avatar-large.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Avatars</h6>
                  <p class="text-secondary text-sm">2 Examples</p>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
              <a href="sections/elements/dropdowns.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 my-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/elements/dropdowns/dropdown-large.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Dropdowns</h6>
                  <p class="text-secondary text-sm">2 Examples</p>
                </div>
              </a>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-4">
              <a href="sections/elements/toggles.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 my-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/elements/toggles/toggle-large.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Toggles</h6>
                  <p class="text-secondary text-sm">2 Examples</p>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
              <a href="sections/elements/social-buttons.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 my-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/elements/social-buttons/social-btn-large.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Social Buttons</h6>
                  <p class="text-secondary text-sm">2 Examples</p>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
              <a href="sections/elements/button-groups.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 my-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/elements/button-groups/button-groups-large.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Button Groups</h6>
                  <p class="text-secondary text-sm">5 Examples</p>
                </div>
              </a>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-4 mt-md-0 mt-3">
              <a href="sections/elements/breadcrumbs.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 my-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/elements/breadcrumbs/breadcrumbs-large.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Breadcrumbs</h6>
                  <p class="text-secondary text-sm">1 Example</p>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
              <a href="sections/elements/badges.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 my-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/elements/badges/badge-large.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Badges</h6>
                  <p class="text-secondary text-sm">3 Example</p>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
              <a href="sections/elements/progress-bars.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 my-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/elements/progress-bars/progress-large.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Progress Bars</h6>
                  <p class="text-secondary text-sm">4 Examples</p>
                </div>
              </a>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-4 mt-md-0 mt-3">
              <a href="sections/elements/tables.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 my-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/elements/tables/table-2.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Tables</h6>
                  <p class="text-secondary text-sm">3 Examples</p>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
              <a href="sections/elements/typography.html">
                <div class="card shadow-lg move-on-hover min-height-160 min-height-160">
                  <img class="w-100 my-auto"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/sections/elements/typography/typography-2.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Typography</h6>
                  <p class="text-secondary text-sm">2 Examples</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- -------- START Presentation Account Pages ------- -->
  <!-- <section class="mt-lg-10 pb-4 bg-gray-900 m-3 border-radius-xl">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 my-auto">
          <h2 class="text-gradient text-primary mb-0 mt-6">Account Pages</h2>
          <h2 class="mb-4 text-white">For beautiful webapps</h2>
          <p class="text-white opacity-8">We created many examples for pages like Signup, Signin, Forgot Password, 2FA
            Authentification and so on. Just choose between a Basic Design, an illustration or a cover and you are good
            to go!</p>
          <div class="buttons">
            <a href="pages/sign-in/sign-in-cover.html" target="_blank" class="btn bg-gradient-primary mt-4">View
              Pages</a>
            <a href="pages/sign-up/sign-up-basic.html" target="_blank" class="btn text-white shadow-none mt-4">View
              Signup Pages</a>
          </div>
        </div>
        <div class="col-lg-8 ps-5 pe-0">
          <div class="row mt-lg-n7">
            <div class="col-lg-4 col-6 mt-5">
              <div class="card move-on-hover">
                <a href="pages/sign-up/sign-up-basic.html">
                  <img class="w-100 border-radius-xl"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-account/sign-up-cover.jpg"
                    alt="">
                </a>
              </div>
              <div class="card move-on-hover mt-4">
                <a href="pages/reset/reset-cover.html">
                  <img class="w-100 border-radius-xl"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-account/reset-password-1.jpg"
                    alt="">
                </a>
              </div>
              <div class="card move-on-hover mt-4 p-1">
                <a href="pages/sign-up/sign-up-illustration.html">
                  <img class="w-100 border-radius-xl"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-account/signup-1.jpg"
                    alt="">
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-6">
              <div class="card move-on-hover">
                <a href="pages/2fa-security.html">
                  <img class="w-100 border-radius-xl"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-account/2fa.jpg"
                    alt="">
                </a>
              </div>
              <div class="card move-on-hover mt-4">
                <a href="pages/coming-soon.html">
                  <img class="w-100 border-radius-xl"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-account/coming-soon.jpg"
                    alt="">
                </a>
              </div>
              <div class="card move-on-hover mt-4">
                <a href="pages/reset/reset-basic.html">
                  <img class="w-100 border-radius-xl"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-account/reset-password-3.jpg"
                    alt="">
                </a>
              </div>
              <div class="card move-on-hover mt-4">
                <a href="pages/error-500.html">
                  <img class="w-100 border-radius-xl"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-account/500-error.jpg"
                    alt="">
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-6 mt-5 d-lg-block d-none">
              <div class="card move-on-hover">
                <a href="pages/error-404.html">
                  <img class="w-100 border-radius-xl"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-account/404-error.jpg"
                    alt="">
                </a>
              </div>
              <div class="card move-on-hover p-1 mt-4">
                <a href="pages/sign-in/sign-in-illustration.html">
                  <img class="w-100 border-radius-xl"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-account/sign-in.jpg"
                    alt="">
                </a>
              </div>
              <div class="card move-on-hover p-1 mt-4">
                <a href="pages/sign-up/sign-up-cover.html">
                  <img class="w-100 border-radius-xl"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-account/signup-21.jpg"
                    alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- -------- END HEADER 5 w/ text and illustration ------- -->
  <!-- <section class="py-5">
    <div class="container">
      <div class="row text-center my-sm-5 mt-5">
        <div class="col-lg-6 mx-auto">
          <h2 class="text-primary text-gradient mb-0">Boost creativity</h2>
          <h2 class="">With our coded pages</h2>
          <p class="lead">The easiest way to get started is to use one of our <br /> pre-built example pages. </p>
        </div>
      </div>
    </div>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-8">
          <div class="row mt-4">
            <div class="col-md-4">
              <a href="pages/coworking.html">
                <div class="card move-on-hover">
                  <img class="w-100"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-pages/coworking.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Coworking Page</h6>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-5">
              <a href="pages/rental.html">
                <div class="card move-on-hover">
                  <img class="w-100"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-pages/rental.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Rental Page</h6>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-5">
              <a href="pages/case-study.html">
                <div class="card move-on-hover">
                  <img class="w-100"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-pages/case-study.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Case Study</h6>
                </div>
              </a>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-4 mt-md-0 mt-4">
              <a href="pages/about-us.html">
                <div class="card move-on-hover">
                  <img class="w-100"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-pages/about-us.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">About Us Page</h6>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-5">
              <a href="pages/pricing.html">
                <div class="card move-on-hover">
                  <img class="w-100"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-pages/pricing.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Pricing Page</h6>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-5">
              <a href="pages/career.html">
                <div class="card move-on-hover">
                  <img class="w-100"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-pages/career.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Career Page</h6>
                </div>
              </a>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-4 mt-md-0 mt-4">
              <a href="pages/work-with-us.html">
                <div class="card move-on-hover">
                  <img class="w-100"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-pages/work-with-us.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Work With Us</h6>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-5">
              <a href="pages/terms.html">
                <div class="card move-on-hover">
                  <img class="w-100"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-pages/terms.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Terms &amp; Conditions</h6>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-5">
              <a href="pages/help-center.html">
                <div class="card move-on-hover">
                  <img class="w-100"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-pages/help-center.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Help Center</h6>
                </div>
              </a>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-4 mt-md-0 mt-4">
              <a href="pages/help-center-basic.html">
                <div class="card move-on-hover">
                  <img class="w-100"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-pages/help-center-basic.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Help Center Basic</h6>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-5">
              <a href="pages/contact-us.html">
                <div class="card move-on-hover">
                  <img class="w-100"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-pages/contact-us.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Contact Us Page</h6>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-5">
              <a href="pages/contact-us-simple.html">
                <div class="card move-on-hover">
                  <img class="w-100"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-pages/contact-us-basic.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Contact Us Basic</h6>
                </div>
              </a>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-4 mt-md-0 mt-4">
              <a href="pages/faq.html">
                <div class="card move-on-hover">
                  <img class="w-100"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-pages/faq.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">FAQ Page</h6>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-5">
              <a href="pages/privacy.html">
                <div class="card move-on-hover">
                  <img class="w-100"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-pages/privacy.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Privacy Page</h6>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-5">
              <a href="pages/mobile-app.html">
                <div class="card move-on-hover">
                  <img class="w-100"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-pages/mobile-app.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Mobile App Page</h6>
                </div>
              </a>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-4 mt-md-0 mt-4">
              <a href="pages/desktop-app.html">
                <div class="card move-on-hover">
                  <img class="w-100"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-pages/desktop-app.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Desktop App Page</h6>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-5">
              <a href="pages/blog/single-article.html">
                <div class="card move-on-hover">
                  <img class="w-100"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-pages/single-article.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Single Article Blog</h6>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-5">
              <a href="pages/blog/blog-posts.html">
                <div class="card move-on-hover">
                  <img class="w-100"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-pages/blog-posts.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Blog Posts Page</h6>
                </div>
              </a>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-4 mt-md-0 mt-4">
              <a href="pages/blog/categories.html">
                <div class="card move-on-hover">
                  <img class="w-100"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-pages/categories.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Blog Categories</h6>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-5">
              <a href="pages/blog/author.html">
                <div class="card move-on-hover">
                  <img class="w-100"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-pages/author.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Author Blog Page</h6>
                </div>
              </a>
            </div>
            <div class="col-md-4 mt-md-0 mt-5">
              <a href="pages/automotive.html">
                <div class="card move-on-hover">
                  <img class="w-100"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-pages/automotive.jpg"
                    alt="">
                </div>
                <div class="mt-2 ms-2">
                  <h6 class="mb-0">Automotive Page</h6>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mx-auto mt-md-0 mt-5">
          <div class="position-sticky" style="top:100px !important">
            <h4 class="">Presentation Pages for Company, Landing Pages, Blogs and Support</h4>
            <h6 class="text-secondary">These is just a small selection of the multiple possibitilies you have. Focus on
              the business, not on the design.</h6>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- -------- START Content Presentation Docs ------- -->
  <div class="container mt-sm-5">
    <div class="page-header min-vh-50 my-sm-3 mb-3 border-radius-xl"
      style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/desktop.jpg');">
      <span class="mask bg-gradient-dark"></span>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 ms-lg-5">
            <h4 class="text-white mb-0">Built by developers</h4>
            <h1 class="text-white">Complex Documentation</h1>
            <p class="lead text-white opacity-8">From colors, cards, typography to complex elements, you will find the
              full documentation. Play with the utility classes and you will create unlimited combinations for our
              components.</p>
            <a href="https://www.creative-tim.com/learning-lab/bootstrap-marketplace/overview/soft-ui-design-system"
              class="text-white icon-move-right">
              Read docs
              <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="info-horizontal bg-gradient-primary border-radius-xl p-5">
          <div class="icon">
            <svg class="text-white" width="25px" height="25px" viewBox="0 0 46 43" version="1.1"
              xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>delivery-fast</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-2320.000000, -741.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g id="delivery-fast" transform="translate(604.000000, 450.000000)">
                      <rect class="color-background" opacity="0.601143973" x="0" y="0" width="17.25"
                        height="3.83333333"></rect>
                      <rect class="color-background" opacity="0.601143973" x="3.83333333" y="7.66666667"
                        width="13.4166667" height="3.83333333"></rect>
                      <rect class="color-background" opacity="0.601143973" x="7.66666667" y="15.3333333"
                        width="9.58333333" height="3.83333333"></rect>
                      <rect class="color-background" opacity="0.601888021" x="11.5" y="23" width="5.75"
                        height="3.83333333"></rect>
                      <path class="color-foreground"
                        d="M44.9400833,19.3679167 L38.0611667,15.9294167 L36.3591667,9.1195 C36.1464167,8.26466667 35.37975,7.66666667 34.5,7.66666667 L31.3854167,7.66666667 L21.0833333,7.66666667 C21.0833333,7.66666667 21.0833333,31.5310833 21.0833333,32.5833333 C21.0833333,33.6355833 21.1810833,34.5 21.1810833,34.5 C21.6640833,38.801 25.2808333,42.1666667 29.7083333,42.1666667 C34.1358333,42.1666667 37.7525833,38.801 38.2355833,34.5 L44.0833333,34.5 C45.1413333,34.5 46,33.6413333 46,32.5833333 L46,21.0833333 C46,20.3569167 45.5898333,19.69375 44.9400833,19.3679167 Z M29.7083333,38.3333333 C27.0671667,38.3333333 24.9166667,36.18475 24.9166667,33.5416667 C24.9166667,30.8985833 27.0671667,28.75 29.7083333,28.75 C32.3495,28.75 34.5,30.8985833 34.5,33.5416667 C34.5,36.18475 32.3495,38.3333333 29.7083333,38.3333333 Z M24.9166667,17.25 L24.9166667,11.5 L33.2426667,11.5 L34.5,17.25 L24.9166667,17.25 Z">
                      </path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
          <div class="description ps-5">
            <h5 class="text-white">Getting Started</h5>
            <p class="text-white">Check the possible ways of working with our product and the necessary files for
              building your own project.</p>
            <a href="https://www.creative-tim.com/learning-lab/bootstrap-marketplace/overview/soft-ui-design-system"
              class="text-white icon-move-right">
              Let's start
              <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 px-lg-1 mt-lg-0 mt-4">
        <div class="info-horizontal bg-gray-200 border-radius-xl p-5">
          <div class="icon">
            <svg class="text-primary" width="25px" height="25px" viewBox="0 0 40 44" version="1.1"
              xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>document</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g transform="translate(154.000000, 300.000000)">
                      <path class="color-foreground"
                        d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"
                        opacity="0.603585379"></path>
                      <path class="color-background"
                        d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
                      </path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
          <div class="description ps-5">
            <h5>Plugins</h5>
            <p>Get inspiration and have an overview about the plugins that we used to create the Soft UI Design System.
            </p>
            <a href="https://www.creative-tim.com/learning-lab/bootstrap-marketplace/datepicker/soft-ui-design-system"
              class="text-primary icon-move-right">
              Read more
              <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-lg-0 mt-4">
        <div class="info-horizontal bg-gray-200 border-radius-xl p-5">
          <div class="icon">
            <svg class="text-primary" width="25px" height="25px" viewBox="0 0 40 40" version="1.1"
              xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>ungroup</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-2170.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g id="ungroup" transform="translate(454.000000, 151.000000)">
                      <path class="color-background"
                        d="M38.1818182,10.9090909 L32.7272727,10.9090909 L32.7272727,30.9090909 C32.7272727,31.9127273 31.9127273,32.7272727 30.9090909,32.7272727 L10.9090909,32.7272727 L10.9090909,38.1818182 C10.9090909,39.1854545 11.7236364,40 12.7272727,40 L38.1818182,40 C39.1854545,40 40,39.1854545 40,38.1818182 L40,12.7272727 C40,11.7236364 39.1854545,10.9090909 38.1818182,10.9090909 Z">
                      </path>
                      <path class="color-foreground"
                        d="M27.2727273,29.0909091 L1.81818182,29.0909091 C0.812727273,29.0909091 0,28.2781818 0,27.2727273 L0,1.81818182 C0,0.814545455 0.812727273,0 1.81818182,0 L27.2727273,0 C28.2781818,0 29.0909091,0.814545455 29.0909091,1.81818182 L29.0909091,27.2727273 C29.0909091,28.2781818 28.2781818,29.0909091 27.2727273,29.0909091 Z">
                      </path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
          <div class="description ps-5">
            <h5>Utility Classes</h5>
            <p>Soft UI Design System is giving you a lot of pre-made elements. For those who want flexibility, we
              included many utility classes.</p>
            <a href="https://www.creative-tim.com/learning-lab/bootstrap-marketplace/datepicker/soft-ui-design-system"
              class="text-primary icon-move-right">
              Read more
              <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- -------- END Content Presentation Docs ------- -->
  <!-- <section class="py-7">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mx-auto text-center">
          <h2 class="mb-0">Trusted by over</h2>
          <h2 class="text-gradient text-primary mb-3">1,435,000 web developers</h2>
          <p class="lead">Many Fortune 500 companies, startups, universities and governmental institutions love Creative
            Tim's products. </p>
        </div>
      </div>
      <div class="row mt-6">
        <div class="col-lg-4 col-md-8">
          <div class="card card-plain">
            <div class="card-body">
              <div class="author">
                <div class="name">
                  <h6 class="mb-0 font-weight-bolder">Nick Willever</h6>
                  <div class="stats">
                    <i class="far fa-clock"></i> 1 day ago
                  </div>
                </div>
              </div>
              <p class="mt-4">"This is an excellent product, the documentation is excellent and helped me get things
                done more efficiently."</p>
              <div class="rating mt-3">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-8 ms-md-auto">
          <div class="card bg-gradient-primary">
            <div class="card-body">
              <div class="author align-items-center">
                <div class="name">
                  <h6 class="text-white mb-0 font-weight-bolder">Shailesh Kushwaha</h6>
                  <div class="stats text-white">
                    <i class="far fa-clock"></i> 1 week ago
                  </div>
                </div>
              </div>
              <p class="mt-4 text-white">"I found solution to all my design needs from Creative Tim. I use them as a
                freelancer in my hobby projects for fun! And its really affordable, very humble guys !!!"</p>
              <div class="rating mt-3">
                <i class="fas fa-star text-white"></i>
                <i class="fas fa-star text-white"></i>
                <i class="fas fa-star text-white"></i>
                <i class="fas fa-star text-white"></i>
                <i class="fas fa-star text-white"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-8">
          <div class="card card-plain">
            <div class="card-body">
              <div class="author">
                <div class="name">
                  <h6 class="mb-0 font-weight-bolder">Samuel Kamuli</h6>
                  <div class="stats">
                    <i class="far fa-clock"></i> 3 weeks ago
                  </div>
                </div>
              </div>
              <p class="mt-4">"Great product. Helped me cut the time to set up a site. I used the components within
                instead of starting from scratch. I highly recommend for developers who want to spend more time on the
                backend!."</p>
              <div class="rating mt-3">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr class="horizontal dark my-5">
      <div class="row">
        <div class="col-lg-2 col-md-4 col-6 ms-auto">
          <img class="w-100 opacity-6" src="assets/img/logos/gray-logos/logo-apple.svg" alt="Logo">
        </div>
        <div class="col-lg-2 col-md-4 col-6">
          <img class="w-100 opacity-6" src="assets/img/logos/gray-logos/logo-facebook.svg" alt="Logo">
        </div>
        <div class="col-lg-2 col-md-4 col-6">
          <img class="w-100 opacity-6" src="assets/img/logos/gray-logos/logo-nasa.svg" alt="Logo">
        </div>
        <div class="col-lg-2 col-md-4 col-6 ms-lg-0 ms-md-auto">
          <img class="w-100 opacity-6" src="assets/img/logos/gray-logos/logo-vodafone.svg" alt="Logo">
        </div>
        <div class="col-lg-2 col-md-4 col-6 me-md-auto mx-md-0 mx-auto">
          <img class="w-100 opacity-6" src="assets/img/logos/gray-logos/logo-digitalocean.svg" alt="Logo">
        </div>
      </div>
    </div>
  </section> -->
  <!-- <section class="py-sm-7" id="pricing-soft-ui">
    <div class="bg-gradient-primary position-relative m-3 border-radius-xl">
      <img src="assets/img/shapes/waves-white.svg" alt="pattern-lines"
        class="position-absolute start-0 top-md-0 w-100 opacity-6">
      <div class="container pb-lg-8 pb-7 pt-5 postion-relative z-index-2 position-relative">
        <div class="row">
          <div class="col-md-7 mx-auto text-center">
            <span class="badge bg-gradient-dark mb-2">Pricing</span>
            <h3 class="text-white">Ready to get Soft UI Design System?</h3>
            <p class="text-white">Based on the license you get, you will have direct access to our team <br /> of
              developers who built the product.</p>
          </div>
        </div>
      </div>x
    </div>
    <div class="mt-lg-n8 mt-n6">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 mb-lg-auto mb-4 my-auto p-md-0 ms-auto">
            <div class="card border-radius-top-end-lg-0 border-radius-bottom-end-lg-0">
              <div class="card-header text-center pt-4 pb-3">
                <h6 class="text-dark opacity-8 mb-0">Standard</h6>
                <h1 class="font-weight-bolder">
                  <small>$</small>79
                </h1>
              </div>
              <div class="card-body mx-auto pt-0">
                <div class="justify-content-start d-flex px-2 py-1">
                  <div>
                    <i class="fas fa-check text-dark opacity-6 text-sm"></i>
                  </div>
                  <div class="ps-2">
                    <span class="text-sm">Documentation</span>
                  </div>
                </div>
                <div class="justify-content-start d-flex px-2 py-1">
                  <div>
                    <i class="fas fa-check text-dark opacity-6 text-sm"></i>
                  </div>
                  <div class="ps-2">
                    <span class="text-sm">Fully Coded</span>
                  </div>
                </div>
                <div class="justify-content-start d-flex px-2 py-1">
                  <div>
                    <i class="fas fa-check text-dark opacity-6 text-sm"></i>
                  </div>
                  <div class="ps-2">
                    <span class="text-sm">Designer Files</span>
                  </div>
                </div>
                <div class="justify-content-start d-flex px-2 py-1">
                  <div>
                    <i class="fas fa-check text-dark opacity-6 text-sm"></i>
                  </div>
                  <div class="ps-2">
                    <span class="text-sm">Lifetime Access</span>
                  </div>
                </div>
                <div class="justify-content-start d-flex px-2 py-1">
                  <div>
                    <i class="fas fa-check text-dark opacity-6 text-sm"></i>
                  </div>
                  <div class="ps-2">
                    <span class="text-sm">1 Project</span>
                  </div>
                </div>
                <div class="justify-content-start d-flex px-2 py-1">
                  <div>
                    <i class="fas fa-check text-dark opacity-6 text-sm"></i>
                  </div>
                  <div class="ps-2">
                    <span class="text-sm">1 Developer</span>
                  </div>
                </div>
                <div class="justify-content-start d-flex px-2 py-1">
                  <div>
                    <i class="fas fa-check text-dark opacity-6 text-sm"></i>
                  </div>
                  <div class="ps-2">
                    <span class="text-sm">6 Months Tech Support</span>
                  </div>
                </div>
                <div class="justify-content-start d-flex px-2 py-1">
                  <div>
                    <i class="fas fa-check text-dark opacity-6 text-sm"></i>
                  </div>
                  <div class="ps-2">
                    <span class="text-sm">6 Months Free Updates</span>
                  </div>
                </div>
              </div>
              <div class="card-footer pt-0">
                <a href="https://themes.getbootstrap.com/product/soft-ui-design-system-pro/"
                  class="btn w-100 bg-gradient-dark mb-0">
                  Buy now
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 p-md-0 mb-lg-auto mb-4 z-index-2">
            <div class="card">
              <div class="card-header text-center pt-5 pb-3">
                <h6 class="text-dark opacity-8 text mb-0 mt-2">Multisite</h6>
                <h1 class="font-weight-bolder">
                  <small>$</small>99
                </h1>
              </div>
              <div class="card-body mx-auto pt-0">
                <div class="justify-content-start d-flex px-2 py-1">
                  <div>
                    <i class="fas fa-check text-dark opacity-6 text-sm"></i>
                  </div>
                  <div class="ps-2">
                    <span class="text-sm">Documentation</span>
                  </div>
                </div>
                <div class="justify-content-start d-flex px-2 py-1">
                  <div>
                    <i class="fas fa-check text-dark opacity-6 text-sm"></i>
                  </div>
                  <div class="ps-2">
                    <span class="text-sm">Fully Coded</span>
                  </div>
                </div>
                <div class="justify-content-start d-flex px-2 py-1">
                  <div>
                    <i class="fas fa-check text-dark opacity-6 text-sm"></i>
                  </div>
                  <div class="ps-2">
                    <span class="text-sm">Designer Files</span>
                  </div>
                </div>
                <div class="justify-content-start d-flex px-2 py-1">
                  <div>
                    <i class="fas fa-check text-dark opacity-6 text-sm"></i>
                  </div>
                  <div class="ps-2">
                    <span class="text-sm">Lifetime Access</span>
                  </div>
                </div>
                <div class="justify-content-start d-flex px-2 py-1">
                  <div>
                    <i class="fas fa-check text-dark opacity-6 text-sm"></i>
                  </div>
                  <div class="ps-2">
                    <span class="text-sm">Unlimited Projects</span>
                  </div>
                </div>
                <div class="justify-content-start d-flex px-2 py-1">
                  <div>
                    <i class="fas fa-check text-dark opacity-6 text-sm"></i>
                  </div>
                  <div class="ps-2">
                    <span class="text-sm">Up to 10 Developers</span>
                  </div>
                </div>
                <div class="justify-content-start d-flex px-2 py-1">
                  <div>
                    <i class="fas fa-check text-dark opacity-6 text-sm"></i>
                  </div>
                  <div class="ps-2">
                    <span class="text-sm">12 Months Tech Support</span>
                  </div>
                </div>
                <div class="justify-content-start d-flex px-2 py-1">
                  <div>
                    <i class="fas fa-check text-dark opacity-6 text-sm"></i>
                  </div>
                  <div class="ps-2">
                    <span class="text-sm">12 Months Free Updates</span>
                  </div>
                </div>
              </div>
              <div class="card-footer pt-0">
                <a href="https://themes.getbootstrap.com/product/soft-ui-design-system-pro/"
                  class="btn btn-icon bg-gradient-primary d-block mb-0 icon-move-right">Buy Now
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 mb-lg-auto mb-4 my-auto p-md-0 me-auto">
            <div class="card border-radius-top-start-lg-0 border-radius-bottom-start-lg-0">
              <div class="card-header text-center pt-4 pb-2">
                <h6 class="text-dark opacity-8 text mb-0">Extended</h6>
                <h1 class="font-weight-bolder">
                  <small>$</small>449
                </h1>
              </div>
              <div class="card-body mx-auto pt-0">
                <div class="justify-content-start d-flex px-2 py-1">
                  <div>
                    <i class="fas fa-check text-dark opacity-6 text-sm"></i>
                  </div>
                  <div class="ps-2">
                    <span class="text-sm">Documentation</span>
                  </div>
                </div>
                <div class="justify-content-start d-flex px-2 py-1">
                  <div>
                    <i class="fas fa-check text-dark opacity-6 text-sm"></i>
                  </div>
                  <div class="ps-2">
                    <span class="text-sm">Fully Coded</span>
                  </div>
                </div>
                <div class="justify-content-start d-flex px-2 py-1">
                  <div>
                    <i class="fas fa-check text-dark opacity-6 text-sm"></i>
                  </div>
                  <div class="ps-2">
                    <span class="text-sm">Designer Files</span>
                  </div>
                </div>
                <div class="justify-content-start d-flex px-2 py-1">
                  <div>
                    <i class="fas fa-check text-dark opacity-6 text-sm"></i>
                  </div>
                  <div class="ps-2">
                    <span class="text-sm">Lifetime Access</span>
                  </div>
                </div>
                <div class="justify-content-start d-flex px-2 py-1">
                  <div>
                    <i class="fas fa-check text-dark opacity-6 text-sm"></i>
                  </div>
                  <div class="ps-2">
                    <span class="text-sm">Unlimited Projects</span>
                  </div>
                </div>
                <div class="justify-content-start d-flex px-2 py-1">
                  <div>
                    <i class="fas fa-check text-dark opacity-6 text-sm"></i>
                  </div>
                  <div class="ps-2">
                    <span class="text-sm">More than 10 Developers</span>
                  </div>
                </div>
                <div class="justify-content-start d-flex px-2 py-1">
                  <div>
                    <i class="fas fa-check text-dark opacity-6 text-sm"></i>
                  </div>
                  <div class="ps-2">
                    <span class="text-sm">18 Months Tech Support</span>
                  </div>
                </div>
                <div class="justify-content-start d-flex px-2 py-1">
                  <div>
                    <i class="fas fa-check text-dark opacity-6 text-sm"></i>
                  </div>
                  <div class="ps-2">
                    <span class="text-sm">18 Months Free Updates</span>
                  </div>
                </div>
              </div>
              <div class="card-footer pt-0">
                <a href="https://themes.getbootstrap.com/product/soft-ui-design-system-pro/"
                  class="btn w-100 bg-gradient-dark mb-0">Buy now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p class="text-center mt-5">
              <i class="fa fa-lock"></i> Secured Payment by <b> 2Checkout </b> with:
              <br><br>
              <i class="fa fa-cc-paypal fa-2x"></i> <i class="fa fa-cc-visa fa-2x"></i> <i
                class="fa fa-cc-mastercard fa-2x"></i> <i class="fa fa-cc-amex fa-2x"></i>
            </p>
            <p class="text-center max-width-500 mx-auto"> <b>Info:</b> If you are a Registered Company inside the
              European Union you will be able to add your VAT ID after your Press "Buy Now"
            </p>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- START Section Content W/ 2 images aside of icon title description -->
  <!-- <section class="pt-lg-7 pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-8 order-2 order-md-2 order-lg-1">
          <div class="position-relative ms-lg-5 mb-0 mb-md-7 mb-lg-0 d-none d-md-block d-lg-block d-xl-block h-75">
            <div class="bg-gradient-primary w-100 h-100 border-radius-xl position-absolute d-lg-block d-none"></div>
            <img src="assets/img/curved-images/curved11.jpg"
              class="w-100 border-radius-xl mt-6 ms-lg-5 position-relative z-index-5" alt="">
          </div>
        </div>
        <div class="col-lg-5 col-md-12 ms-auto order-1 order-md-1 order-lg-1">
          <div class="p-3 pt-0">
            <div class="icon icon-shape bg-gradient-primary rounded-circle shadow text-center mb-4">
              <i class="ni ni-building"></i>
            </div>
            <h4 class="text-gradient text-primary mb-0">Special Thanks</h4>
            <h4 class="mb-4"><a href="https://twitter.com/dnyivn" target="blank" rel="nofollow">3D Images by Danny
                Ivan</a></h4>
            <p>We are more than happy to use the great images made by Danny inside Soft UI Design System. They come with
              a high level of quality and bright colors, fitting perfect with our product's colors.<br><br> Danny is a
              important designer that is active into the 3D Image space. His war was awarded many times in different
              categories in Behance, Digital Art or Motion Graphics.</p>
            <a href="https://www.behance.net/dannyivan" target="blank" rel="nofollow"
              class="text-dark icon-move-right">Check Danny's work
              <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- END Section Content -->
  <!-- -------   START PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->
  <!-- <div class="pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 ms-auto">
          <h4 class="mb-1">Thank you for your support!</h4>
          <p class="lead mb-0">We deliver the best web products</p>
        </div>
        <div class="col-lg-5 me-lg-auto my-lg-auto text-lg-end mt-5">
          <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Design%20System%20made%20by%20%40CreativeTim%20%23webdesign%20%23designsystem%20%23bootstrap5&url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-design-system-pro" class="btn btn-twitter mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-design-system-pro" class="btn btn-facebook mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1"></i> Share
          </a>
          <a href="https://www.pinterest.com/pin/create/button/?url=https://www.creative-tim.com/product/soft-ui-design-system-pro" class="btn btn-pinterest mb-0 me-2" target="_blank">
            <i class="fab fa-pinterest me-1"></i> Pin it
          </a>
        </div>
      </div>
    </div>
  </div> -->
  <!-- -------   END PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->

  <section class="mt-lg-10 pb-4 bg-gray-900 m-3 border-radius-xl">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 my-auto">
          <h2 class="text-gradient text-primary mb-0 mt-6">Account Pages</h2>
          <h2 class="mb-4 text-white">For beautiful webapps</h2>
          <p class="text-white opacity-8">We created many examples for pages like Signup, Signin, Forgot Password, 2FA
            Authentification and so on. Just choose between a Basic Design, an illustration or a cover and you are good
            to go!</p>
          <div class="buttons">
            <a href="pages/sign-in/sign-in-cover.html" target="_blank" class="btn bg-gradient-primary mt-4">View
              Pages</a>
            <a href="pages/sign-up/sign-up-basic.html" target="_blank" class="btn text-white shadow-none mt-4">View
              Signup Pages</a>
          </div>
        </div>
        <div class="col-lg-8 ps-5 pe-0">
          <div class="row mt-lg-n7">
            <div class="col-lg-4 col-6 mt-5">
              <div class="card move-on-hover">
                <a href="pages/sign-up/sign-up-basic.html">
                  <img class="w-100 border-radius-xl"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-account/sign-up-cover.jpg"
                    alt="">
                </a>
              </div>
              <div class="card move-on-hover mt-4">
                <a href="pages/reset/reset-cover.html">
                  <img class="w-100 border-radius-xl"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-account/reset-password-1.jpg"
                    alt="">
                </a>
              </div>
              <div class="card move-on-hover mt-4 p-1">
                <a href="pages/sign-up/sign-up-illustration.html">
                  <img class="w-100 border-radius-xl"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-account/signup-1.jpg"
                    alt="">
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-6">
              <div class="card move-on-hover">
                <a href="pages/2fa-security.html">
                  <img class="w-100 border-radius-xl"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-account/2fa.jpg"
                    alt="">
                </a>
              </div>
              <div class="card move-on-hover mt-4">
                <a href="pages/coming-soon.html">
                  <img class="w-100 border-radius-xl"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-account/coming-soon.jpg"
                    alt="">
                </a>
              </div>
              <div class="card move-on-hover mt-4">
                <a href="pages/reset/reset-basic.html">
                  <img class="w-100 border-radius-xl"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-account/reset-password-3.jpg"
                    alt="">
                </a>
              </div>
              <div class="card move-on-hover mt-4">
                <a href="pages/error-500.html">
                  <img class="w-100 border-radius-xl"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-account/500-error.jpg"
                    alt="">
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-6 mt-5 d-lg-block d-none">
              <div class="card move-on-hover">
                <a href="pages/error-404.html">
                  <img class="w-100 border-radius-xl"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-account/404-error.jpg"
                    alt="">
                </a>
              </div>
              <div class="card move-on-hover p-1 mt-4">
                <a href="pages/sign-in/sign-in-illustration.html">
                  <img class="w-100 border-radius-xl"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-account/sign-in.jpg"
                    alt="">
                </a>
              </div>
              <div class="card move-on-hover p-1 mt-4">
                <a href="pages/sign-up/sign-up-cover.html">
                  <img class="w-100 border-radius-xl"
                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/presentation/section-account/signup-21.jpg"
                    alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/public/template/footer.php"); ?>

  <!--   Core JS Files   -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/public/template/script.php"); ?>


  <script>
  </script>
  <script type="text/javascript">
    if (document.getElementById('state1')) {
      const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
      if (!countUp.error) {
        countUp.start();
      } else {
        console.error(countUp.error);
      }
    }
    if (document.getElementById('state2')) {
      const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
      if (!countUp1.error) {
        countUp1.start();
      } else {
        console.error(countUp1.error);
      }
    }
    if (document.getElementById('state3')) {
      const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
      if (!countUp2.error) {
        countUp2.start();
      } else {
        console.error(countUp2.error);
      };
    }
  </script>
</body>

</html>