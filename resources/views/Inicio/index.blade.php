@extends('layout.main')
@section('contenido')
<!-- <div class="u-hero-v1">
      <div id="heroNav" class="js-slick-carousel u-slick"
           data-autoplay="true"
           data-speed="10000"
           data-adaptive-height="true"
           data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle"
           data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4"
           data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4"
           data-numbered-pagination="#slickPaging"
           data-nav-for="#heroNavThumb">
        <div class="js-slide">
          <div class="d-lg-flex align-items-lg-center u-hero-v1__main" style="background-image: url(../../assets/img/1920x800/img2.jpg);">
            <div class="container space-3 space-top-md-5 space-top-lg-3">
              <div class="row">
                <div class="col-md-8 col-lg-6 position-relative">
                  <span class="d-block h4 text-white font-weight-light mb-2"
                        data-scs-animation-in="fadeInUp">
                    Front is a
                  </span>
                  <h1 class="text-white display-4 font-size-md-down-5 mb-0"
                      data-scs-animation-in="fadeInUp"
                      data-scs-animation-delay="200">
                    Self-<span class="font-weight-semi-bold">mastering</span> template
                  </h1>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="js-slide">
          <div class="d-lg-flex align-items-lg-center u-hero-v1__main" style="background-image: url(../../assets/img/1920x800/img3.jpg);">
            <div class="container space-3 space-top-md-5 space-top-lg-3">
              <div class="row">
                <div class="col-md-8 col-lg-6">
                  <span class="d-block h4 text-white font-weight-light mb-2"
                        data-scs-animation-in="fadeInUp">
                    It is an
                  </span>
                  <h2 class="text-white display-4 font-size-md-down-5 mb-0"
                      data-scs-animation-in="fadeInUp"
                      data-scs-animation-delay="200">
                    <span class="font-weight-semi-bold">Easy</span> business with Front template
                  </h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container position-relative">
        <div id="slickPaging" class="u-slick__paging"></div>
      </div>
      <div id="heroNavThumb" class="js-slick-carousel u-slick"
           data-autoplay="true"
           data-speed="10000"
           data-is-thumbs="true"
           data-nav-for="#heroNav">
        <div class="js-slide">
        </div>
        <div class="js-slide">
        </div>
      </div>
</div> -->

<div class="position-relative">
      <!-- Main Slider -->
      <div id="heroSlider" class="js-slick-carousel u-slick u-slick--equal-height bg-light"
           data-fade="true"
           data-infinite="true"
           data-autoplay-speed="7000"
           data-arrows-classes="d-none d-lg-inline-block u-slick__arrow u-slick__arrow--flat-white u-slick__arrow-centered--y shadow-soft rounded-circle"
           data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-5"
           data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-5"
           data-nav-for="#heroSliderNav">
        <!-- Slide -->
        <div class="js-slide">
          <div class="container space-top-2 space-bottom-3 slideUno" style="margin-top: 100px;">
            <!-- <div class="row align-items-lg-center"> -->
              <!-- <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
                <div class="mb-6">
                  <h1 class="display-4 font-size-md-down-5 font-weight-semi-bold mb-4">Front original design cap</h1>
                  <p>As well as being game-changers when it comes to technical innovation, Front has some of the bestselling cap in its locker.</p>
                </div>
                <a class="btn btn-primary btn-pill transition-3d-hover px-5 mr-2" href="#">$59 - Add to Cart</a>
                <a class="btn btn-icon btn-outline-primary rounded-circle" href="#" data-toggle="tooltip" data-placement="top" title="Save for later">
                  <span class="fas fa-heart btn-icon__inner"></span>
                </a>
              </div> -->
              <!-- <div class="col-lg-12 order-lg-12 ">
                <div class="w-85 mx-auto" >
                  <img class="img-fluid" src="../../assets/img/SlideUno.png" alt="Image Description">
                </div>
              </div> -->
            <!-- </div> -->
          </div>
        </div>
        <!-- End Slide -->

        <!-- Slide -->
        <div class="js-slide">
          <div class="container space-top-2 space-bottom-3 slideDos" style="margin-top: 100px;">
            <!-- <div class="row align-items-lg-center"> -->
              <!-- <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
                <div class="mb-6">
                  <h2 class="display-4 font-size-md-down-5 font-weight-semi-bold mb-4">Apple iPad Pro</h2>
                  <p>It's all new, all screen, and all powerful. Completely redesigned and packed with our most advanced technology, it will make you rethink what iPad is capable of.</p>
                </div>
                <a class="btn btn-primary btn-pill transition-3d-hover px-5 mr-2" href="#">$799 - Add to Cart</a>
                <a class="btn btn-icon btn-outline-primary rounded-circle" href="#" data-toggle="tooltip" data-placement="top" title="Save for later">
                  <span class="fas fa-heart btn-icon__inner"></span>
                </a>
              </div> -->
              <!-- <div class="col-lg-12 order-lg-12">
                <div class="w-85 mx-auto">
                  <img class="img-fluid" src="../../assets/img/SlideDos.jpg" alt="Image Description">
                </div>
              </div> -->
            <!-- </div> -->
          </div>
        </div>
        <!-- End Slide -->

        <!-- Slide -->
        <div class="js-slide">
          <div class="container space-top-2 space-bottom-3 slideTres" style="margin-top: 100px;">
            <!-- <div class="row align-items-lg-center"> -->
              <!-- <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
                <div class="mb-6">
                  <h3 class="display-4 font-size-md-down-5 font-weight-semi-bold mb-4">Celio hoodie</h3>
                  <p>Founded in 1985, French label Celio channels 30 years of expertise into its contemporary menswear range. Expect fly style for a city or beach with its denim shorts, chinos and printed jersey.</p>
                </div>
                <a class="btn btn-primary btn-pill transition-3d-hover px-5 mr-2" href="#">$15 - Add to Cart</a>
                <a class="btn btn-icon btn-outline-primary rounded-circle" href="#" data-toggle="tooltip" data-placement="top" title="Save for later">
                  <span class="fas fa-heart btn-icon__inner"></span>
                </a>
              </div> -->
              <!-- <div class="col-lg-12 order-lg-12">
                <div class="w-85 mx-auto">
                  <img class="img-fluid" src="../../assets/img/SlideTres.png" alt="Image Description">
                </div>
              </div> -->
            <!-- </div> -->
          </div>
        </div>
        <!-- End Slide -->
      </div>
      <!-- End Main Slider -->

      <!-- Slider Nav -->
      <div class="position-absolute bottom-0 w-100 hidden" style="display: none">
        <div class="container space-bottom-1">
          <div id="heroSliderNav" class="js-slick-carousel u-slick u-slick--transform-off max-width-27 mx-auto"
               data-slides-show="3"
               data-autoplay-speed="7000"
               data-infinite="true"
               data-is-thumbs="true"
               data-is-thumbs-progress="true"
               data-thumbs-progress-options='{
                 "color": "#377dff",
                 "width": 8
               }'
               data-thumbs-progress-container=".js-slick-thumb-progress"
               data-nav-for="#heroSlider">
            <div class="js-slide p-1">
              <a class="js-slick-thumb-progress position-relative d-block u-avatar border rounded-circle p-1" href="javascript:;">
                <!-- <img class="img-fluid rounded-circle" src="../../assets/img/100x100/img13.jpg" alt="Image Description"> -->
              </a>
            </div>
            <div class="js-slide p-1">
              <a class="js-slick-thumb-progress position-relative d-block u-avatar border rounded-circle p-1" href="javascript:;">
                <!-- <img class="img-fluid rounded-circle" src="../../assets/img/100x100/img14.jpg" alt="Image Description"> -->
              </a>
            </div>
            <div class="js-slide p-1">
              <a class="js-slick-thumb-progress position-relative d-block u-avatar border rounded-circle p-1" href="javascript:;">
                <!-- <img class="img-fluid rounded-circle" src="../../assets/img/100x100/img15.jpg" alt="Image Description"> -->
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- End Slider Nav -->
</div>


<div class="d-lg-flex position-relative">
    <div class="container d-lg-flex align-items-lg-center space-top-2 space-top-md-5 space-lg-0 min-height-lg-100vh">
        <div class="row w-100">
          <div class="col-lg-5">
            <h1 class="display-4 font-size-md-down-5 mb-3">Introducing Front</h1>
            <p>
              Your company will look
              <span class="text-primary">
                <strong class="u-text-animation u-text-animation--typing">more professi</strong><span class="typed-cursor">|</span>
              </span>
              <br>
              Attract more visitors, and win more business with Front template.
            </p>
            <div class="d-flex align-items-center flex-wrap">
              <a class="btn btn-soft-primary btn-wide transition-3d-hover" href="../pages/login-simple.html">Get Started</a>
              <!-- Fancybox -->
              <a class="js-fancybox media align-items-center u-media-player ml-3" href="javascript:;" data-src="//vimeo.com/167434033" data-speed="700" data-animate-in="zoomIn" data-animate-out="zoomOut" data-caption="Front - Responsive Website Template">
                <span class="u-media-player__icon u-media-player__icon--success mr-3">
                  <span class="fas fa-play u-media-player__icon-inner"></span>
                </span>
                <span class="media-body">
                  Play video
                </span>
              </a>
              <!-- End Fancybox -->
            </div>
          </div>
        </div>
    </div>
</div>

<div class="container space-top-3 space-bottom-md-3 space-bottom-2">
      <!-- Title -->
      <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-9">
        <span class="btn btn-xs btn-soft-success btn-pill mb-2">What we do?</span>
        <h2>Front makes designing easy and performance fast</h2>
      </div>
      <!-- End Title -->
      <div class="row">
        <div class="col-md-4 mb-7">
          <div class="text-center px-lg-3">
            <span class="btn btn-icon btn-lg btn-soft-danger rounded-circle mb-5">
              <span class="fab fa-yelp fa-2x btn-icon__inner btn-icon__inner-bottom-minus"></span>
            </span>
            <h3 class="h5">Professional Design</h3>
            <p class="mb-md-0">Achieve virtually any design and layout from within the one template.</p>
          </div>
        </div>

        <div class="col-md-4 mb-7">
          <div class="text-center px-lg-3">
            <span class="btn btn-icon btn-lg btn-soft-primary rounded-circle mb-5">
              <span class="fas fa-fire fa-2x btn-icon__inner btn-icon__inner-bottom-minus"></span>
            </span>
            <h3 class="h5">Front Strategy</h3>
            <p class="mb-md-0">We strive to figure out ways to help your business grow through all platforms.</p>
          </div>
        </div>

        <div class="col-md-4 mb-7">
          <div class="text-center px-lg-3">
            <span class="btn btn-icon btn-lg btn-soft-success rounded-circle mb-5">
              <span class="fab fa-whmcs fa-2x btn-icon__inner btn-icon__inner-bottom-minus"></span>
            </span>
            <h3 class="h5">Unlimited Power</h3>
            <p class="mb-md-0">Find what you need in one template and combine features at will.</p>
          </div>
        </div>
      </div>

      <img class="img-fluid d-none d-md-block w-75 mx-auto mb-7" src="../../assets/svg/components/pointer-1.svg" alt="SVG Arrow">

      <!-- Title -->
      <div class="w-md-60 w-lg-50 text-center mx-auto mb-7">
        <h4 class="h5">
          It is fast and easy. <span class="font-weight-normal">Create your first and ongoing website with Front.</span>
        </h4>
      </div>
      <!-- End Title -->

      <!-- Mockup Browser -->
      <div class="u-browser-v1 mx-auto mb-4">
        <!-- SVG Background Shape -->
        <figure id="SVGbgShapeID1" class="svg-preloader ie-soft-triangle-shape">
          <img class="js-svg-injector" src="../../assets/svg/components/soft-triangle-shape.svg" alt="Image Description"
               data-parent="#SVGbgShapeID1">
        </figure>
        <!-- End SVG Background Shape -->

        <!-- Mockup Browser -->
        <figure id="SVGBrowserShape" class="svg-preloader ie-browser u-browser-v1__svg">
          <img class="js-svg-injector" src="../../assets/svg/illustrations/browser.svg" alt="Image Description"
               data-img-paths='[
                 {"targetId": "#SVGBrowserShapeImg1", "newPath": "../../assets/img/855x665/img1.jpg"}
               ]'
               data-parent="#SVGBrowserShape">
        </figure>
        <!-- End Mockup Browser -->
      </div>
      <!-- End Mockup Browser -->

      <div class="w-50 w-md-40 w-lg-30 text-center mx-auto">
        <p class="small">We are launching soon. Join the priority list for information and early access.</p>
      </div>
</div>

<div class="gradient-half-primary-v2">
      <div class="container space-2 space-md-3 px-lg-7">
        <!-- Title -->
        <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-9">
          <span class="btn btn-xs btn-soft-success btn-pill mb-2">News &amp; Blog</span>
          <h2>Read our latest news</h2>
          <p>Our duty towards you is to share our experience we're reaching in our work path with you.</p>
        </div>
        <!-- End Title -->

        <!-- News Carousel -->
        <div class="js-slick-carousel u-slick u-slick--equal-height u-slick--gutters-3"
             data-slides-show="3"
             data-slides-scroll="1"
             data-arrows-classes="d-none d-lg-inline-block u-slick__arrow u-slick__arrow--offset u-slick__arrow-centered--y rounded-circle"
             data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-inner u-slick__arrow-inner--left"
             data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-inner u-slick__arrow-inner--right"
             data-pagi-classes="text-center u-slick__pagination mt-7 mb-0"
             data-responsive='[{
               "breakpoint": 992,
               "settings": {
                 "slidesToShow": 2
               }
             }, {
               "breakpoint": 768,
               "settings": {
                 "slidesToShow": 1
               }
             }, {
               "breakpoint": 554,
               "settings": {
                 "slidesToShow": 1
               }
             }]'>
          <!-- Blog News -->
          <a class="js-slide bg-img-hero gradient-overlay-half-dark-v1 transition-3d-hover rounded-pseudo my-4" href="../blog/single-article-classic.html" style="background-image: url(../../assets/img/400x500/img1.jpg);">
            <article class="align-self-end w-100 text-center p-6">
              <h3 class="h4 text-white">How to make trust your competitive advantage</h3>
              <div class="mt-4">
                <strong class="d-block text-white-70 mb-2">Neyton Burchie</strong>
                <div class="u-avatar mx-auto">
                  <img class="img-fluid rounded-circle" src="../../assets/img/100x100/img3.jpg" alt="Image Description">
                </div>
              </div>
            </article>
          </a>
          <!-- End Blog News -->

          <!-- Blog News -->
          <div class="js-slide position-relative bg-white shadow-sm transition-3d-hover rounded my-4">
            <article class="align-self-end w-100 text-center p-6">
              <h3 class="h6 font-weight-normal">" How to help your team excel at remote collaboration. Here are tips and tools we use on the content team at InVision to keep our remote collaboration game strong. Trust is both a complex and nuanced topic. Its very nature makes it difficult to tackle through direct effort. "</h3>
              <div class="my-4">
                <strong class="d-block mb-2">Keith Margaret</strong>
                <div class="u-avatar mx-auto">
                  <img class="img-fluid rounded-circle" src="../../assets/img/100x100/img2.jpg" alt="Image Description">
                </div>
              </div>
              <a class="btn btn-sm btn-soft-primary btn-wide transition-3d-hover" href="../blog/single-article-classic.html">Read More</a>
            </article>
          </div>
          <!-- End Blog News -->

          <!-- Blog News -->
          <a class="js-slide bg-img-hero gradient-overlay-half-dark-v1 transition-3d-hover rounded-pseudo my-4" href="../blog/single-article-classic.html" style="background-image: url(../../assets/img/400x500/img2.jpg);">
            <article class="align-self-end w-100 text-center p-6">
              <h3 class="h4 text-white">Remote workers, here's how to dodge distractions</h3>
              <div class="mt-4">
                <strong class="d-block text-white-70 mb-2">Tina Krueger</strong>
                <div class="u-avatar mx-auto">
                  <img class="img-fluid rounded-circle" src="../../assets/img/100x100/img1.jpg" alt="Image Description">
                </div>
              </div>
            </article>
          </a>
          <!-- End Blog News -->

          <!-- Blog News -->
          <div class="js-slide position-relative bg-white shadow-sm transition-3d-hover rounded my-4">
            <article class="align-self-end w-100 text-center p-6">
              <h3 class="h6 font-weight-normal">" 4 salary negotiation mistakes you've probably made. Four years ago, I was making $25 per hour as a freelance digital designer building ecommerce sites. I had no idea how to increase my hourly rate, even if I'd wanted to. "</h3>
              <div class="my-4">
                <strong class="d-block mb-2">Neyton Burchie</strong>
                <div class="u-avatar mx-auto">
                  <img class="img-fluid rounded-circle" src="../../assets/img/100x100/img3.jpg" alt="Image Description">
                </div>
              </div>
              <a class="btn btn-sm btn-soft-primary btn-wide transition-3d-hover" href="../blog/single-article-classic.html">Read More</a>
            </article>
          </div>
          <!-- End Blog News -->

          <!-- Blog News -->
          <a class="js-slide bg-img-hero gradient-overlay-half-dark-v1 transition-3d-hover rounded-pseudo my-4" href="../blog/single-article-classic.html" style="background-image: url(../../assets/img/400x500/img3.jpg);">
            <article class="align-self-end w-100 text-center p-6">
              <h3 class="h4 text-white">Steal these ideas to stay happy and productive</h3>
              <div class="mt-4">
                <strong class="d-block text-white-70 mb-2">Liza Nelson</strong>
                <div class="u-avatar mx-auto">
                  <img class="img-fluid rounded-circle" src="../../assets/img/100x100/img4.jpg" alt="Image Description">
                </div>
              </div>
            </article>
          </a>
          <!-- End Blog News -->
        </div>
        <!-- End News Carousel -->
      </div>
</div>
<style>
.slideUno{
    background:url(assets/img/SlideUnoNew.png) no-repeat fixed center;
    background-size: cover;
    height: 100%;
    width : 100%;
}
.slideDos{
    background:url(assets/img/SlideDos.jpg) no-repeat fixed center;
    background-size: cover;
    height: 100%;
    width : 100%;
}
.slideTres{
    background:url(assets/img/SlideTres.png) no-repeat fixed center;
    background-size: cover;
    height: 100%;
    width : 100%;
}
</style>
@endsection
