<!-- data -->
@php
  $project_categories = json_decode($project_categories);
  $blogs = json_decode($blogs);
@endphp

@section('title', 'Home')

@component('layouts.app')
  <!-- hero section start -->
  <section data-speed="1200" data-autoplay-delay="2900"
    class="sliderMain -type-3 js-sliderMain-type-3 sm:layout-mt-headerBar">
    <!-- container start -->
    <div class="container-fluid h-full px-0 sm:px-20">
      <!-- row start -->
      <div class="row sm:justify-content-center h-full">
        <div class="col-xl-3 offset-xl-2 col-lg-4 offset-lg-1 col-md-5 offset-md-1 col-sm-9">
          <div class="slider__content__wrapper sm:text-center h-full z-3">

            <div class="slider__content  is-active  js-slider-content">
              <div data-split="lines">
                <p class="slider__subtitle text-sm uppercase tracking-md leading-md mb-32 js-subtitle text__primary">
                  Root Over Flow
                </p>
              </div>
              <div data-split="lines" class="mr-minus-col-2 sm:mr-0">
                <h1 class="slider__title fw-700 leading-xs js-title">

                  Modern IT & Tech Service Solutions
                </h1>
              </div>
              <div class="slider__button overflow-hidden mt-32">
                <div class="js-button py-4">
                  <a href="https://calendly.com/anikaitcorner/30min" target="_blank"
                    class="button -md -black text-white btn__primary">
                    Book Your Strategy Call
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col layout-pr-headerBar lg:pr-0 col-lg-7 col-md-6 swiper-col">
          <div class="swiper-container h-100vh">
            <div class="swiper-wrapper z-2">

              <div class="swiper-slide overflow-hidden">
                <div class="slider__img" data-swiper-parallax="150" data-parallax="0.7" data-swiper-parallax-opacity="0">
                  <div data-parallax-target class="bg-image swiper-lazy js-image"
                    data-background="img/headers/hero_bg.jpg"></div>
                </div>

                <div class="slider__img__cover js-image-cover"></div>

                <div class="slider__img__bg bg-dark-1"></div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- row end -->

      <!-- slider nav start -->
      <div class="slider__navs js-slider-nav js-ui">
        <div class="navButton">
          <button type="button" class="navButton__item button -outline-black text-black js-prev">
            <i class="icon" data-feather="arrow-left"></i>
          </button>
          <button type="button" class="navButton__item button -outline-black text-black mt-12 js-next">
            <i class="icon" data-feather="arrow-right"></i>
          </button>
        </div>
      </div>
      <!-- slider nav end -->
    </div>
    <!-- container end -->

    <!-- ui-element start -->
    <div class="ui-element -bottom-left sm:d-none js-ui">
      <button type="button" class="ui-element__scroll text-black js-ui-scroll-button">
        scroll down
        <i class="icon text__primary" data-feather="arrow-down"></i>
      </button>
    </div>
    <!-- ui-element end -->
  </section>
  <!-- hero section end -->

  <!-- Skills Slider start -->
  <section class="py-24 mt-72 m-0 p-0">
    <div data-cursor data-cursor-label="DRAG" class="overflow-hidden js-section-slider"
      data-slider-col="base-16 lg-7 md-5 sm-3" data-pagination data-loop data-swiper-autoplay>
      <div class="swiper-wrapper"">
        <div class="swiper-slide">
          <a class="tag-cloud-link">Javascript</a>
        </div>

        <div class="swiper-slide">
          <a class="tag-cloud-link">Python</a>
        </div>

        <div class="swiper-slide">
          <a class="tag-cloud-link">PHP</a>
        </div>
        <div class="swiper-slide">
          <a class="tag-cloud-link">Adobe Photoshop</a>
        </div>
        <div class="swiper-slide">
          <a class="tag-cloud-link">Adobe Illustrator</a>
        </div>

        <div class="swiper-slide">
          <a class="tag-cloud-link">Adobe XD</a>
        </div>

        <div class="swiper-slide">
          <a class="tag-cloud-link">Figma</a>
        </div>

        <div class="swiper-slide">
          <a class="tag-cloud-link">SemRush</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Skills Slider End -->


  <!-- services section start -->
  <x-services :services="$services" />
  <!-- services section end -->

  <!-- project section -->
  <section class="layout-pt-md layout-pb-md">
    <div class="section-filter">
      <!-- container start -->
      <div class="container">
        <!-- row start -->
        <div class="row y-gap-32 justify-content-between align-items-center">
          <div class="col-auto">
            <div class="filter-button-group text-dark fw-500">
              <button class="button mr-20 btn-active" data-filter="*">Show All</button>
              @foreach ($project_categories as $project_category)
                <button class="button mr-20"
                  data-filter=".{{ $project_category->tag }}">{{ $project_category->label }}</button>
              @endforeach
            </div>
          </div>

          <div class="col-auto hide">
            <a class="button -md -outline-black text-black" href="#">
              See All Works
            </a>
          </div>
        </div>
        <!-- row end -->
      </div>
      <!-- container end -->


      <!-- container start -->
      <div class="container-wide layout-pt-sm">
        <div class="masonry -col-4 -gap-32">
          <div class="masonry__sizer"></div>
          @foreach ($project_categories as $project_category)
            @foreach ($project_category->projects as $project)
              <div class="masonry__item {{ $project_category->tag }}">
                <div data-anim="slide-up" class="portfolioCard -type-2 -hover">
                  <div class="ratio">
                    <div class="portfolioCard__img">
                      <div class="portfolioCard__img__inner">
                        <div class="bg-image js-lazy" data-bg="{{ $project->thumbnail }}"></div>
                      </div>
                    </div>

                    <div class="portfolioCard__content">
                      <a href="#" class="portfolioCard__category text-light mb-8">{{ $project_category->label }}</a>
                      <h3 class="portfolioCard__title text-3xl md:text-2xl fw-600 text-white">
                        {{ $project->name }}</h3>
                    </div>

                    <a href="portfolio-single-1.html" data-barba class="portfolioCard__link"></a>
                  </div>
                </div>
              </div>
            @endforeach
          @endforeach
        </div>
      </div>
      <!-- container end -->

    </div>
  </section>
  <!-- project section end -->

  <!-- about section -->
  <section class="layout-pt-lg layout-pb-sm">
    <!-- container start -->
    <div class="container-fluid px-0">
      <!-- row start -->
      <div class="row no-gutters align-items-center">

        <div class="col-lg-6 z-1">
          <div class="ratio ratio-1:1" data-parallax="0.7">

            <div id="jarallax-container-0"
              style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;">
              <div data-parallax-target="" class="bg-image js-lazy loaded"
                style="object-fit: cover; object-position: 50% 50%; max-width: none; position: absolute; top: 0px; left: 0px; width: 951.5px; height: 772.55px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: -208.775px; transform: translate3d(0px, 362.534px, 0px); background-image: url(&quot;img/backgrounds/ceo.jpg&quot;);"
                data-ll-status="loaded"></div>
            </div>
          </div>
        </div>


        <div class="col-xl-4 col-lg-5 offset-lg-1 md:mt-48 z-2">
          <div class="sectionHeading -sm md:container pt-16">
            <div class="ml-minus-col-2 md:ml-0">
              <h2 class="sectionHeading__title fw-700 leading-md text__primary">
                We use well-known development methods to create a customized approach for each of the
                projects.
              </h2>
            </div>

            <!-- row start -->
            <div class="row x-gap-32 y-gap-60 layout-pt-md">

              <div class="col-xl-5 col-lg-6 col-md-5 col-sm-6">
                <div data-anim="counter delay-1" data-counter="35" data-counter-add="+" class="counter">
                  <h2 class="number -md -left fw-300 js-counter-num">35+</h2>
                  <h3 class="text-lg text-dark fw-500 mt-20">
                    Complete Projects
                  </h3>
                </div>
              </div>

              <div class="col-xl-5 col-lg-6 col-md-5 col-sm-6">
                <div data-anim="counter delay-1" data-counter="38" data-counter-add="+" class="counter">
                  <h2 class="number -md -left fw-300 js-counter-num">38+</h2>
                  <h3 class="text-lg text-dark fw-500 mt-20">
                    Complete Projects
                  </h3>
                </div>
              </div>

              <div class="col-xl-5 col-lg-6 col-md-5 col-sm-6">
                <div data-anim="counter delay-1" data-counter="41" data-counter-add="+" class="counter">
                  <h2 class="number -md -left fw-300 js-counter-num">41+</h2>
                  <h3 class="text-lg text-dark fw-500 mt-20">
                    Complete Projects
                  </h3>
                </div>
              </div>

              <div class="col-xl-5 col-lg-6 col-md-5 col-sm-6">
                <div data-anim="counter delay-1" data-counter="44" data-counter-add="+" class="counter">
                  <h2 class="number -md -left fw-300 js-counter-num">44+</h2>
                  <h3 class="text-lg text-dark fw-500 mt-20">
                    Complete Projects
                  </h3>
                </div>
              </div>

            </div>
            <!-- row end -->
          </div>
        </div>

      </div>
      <!-- row end -->
    </div>
    <!-- container end -->
  </section>
  <!-- about section end -->

  <!-- testimonies section -->
  <section class="layout-pt-lg layout-pb-lg">
    <!-- container start -->
    <div class="container">
      <div data-cursor="" data-cursor-label="DRAG"
        class="overflow-hidden js-section-slider swiper-container-initialized swiper-container-horizontal swiper-container-autoheight"
        data-slider-col="base-1 lg-1 md-1 sm-1" data-pagination="" data-loop="">

        <div class="pagination -dark js-pagination pt-4 mb-48 swiper-pagination-clickable swiper-pagination-bullets">
          <div class="pagination__item" tabindex="0" role="button" aria-label="Go to slide 1"></div>
          <div class="pagination__item is-active" tabindex="0" role="button" aria-label="Go to slide 2">
          </div>
          <div class="pagination__item" tabindex="0" role="button" aria-label="Go to slide 3"></div>
        </div>

        <div class="swiper-wrapper"
          style="transition-duration: 0ms; transform: translate3d(-2656px, 0px, 0px); height: 412px;">
          <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2"
            style="width: 1328px;">
            <div class="row justify-content-center">
              <div class="col-lg-9 col-md-10">
                <div class="testimonials text-center">
                  <p class="testimonials__comment text-3xl md:text-2xl sm:text-xl fw-500 leading-xl text-black">
                    Kind isn't had. Their whose seasons fowl light created they're void is female fowl
                    he second shall
                    that from, firmament you over had brought herb void cattle image form creeping.
                  </p>

                  <div class="testimonials__author mt-48">
                    <div class="size-xl mx-auto mb-20">
                      <div class="bg-image rounded-full swiper-lazy swiper-lazy-loaded"
                        style="background-image: url(&quot;img/testimonials/3.jpg&quot;);"></div>
                    </div>

                    <h5 class="text-lg capitalize fw-600">Maegan Leach</h5>
                    <p class="capitalize">UX designer</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0" style="width: 1328px;">
            <div class="row justify-content-center">
              <div class="col-lg-9 col-md-10">
                <div class="testimonials text-center">
                  <p class="testimonials__comment text-3xl md:text-2xl sm:text-xl fw-500 leading-xl text-black">
                    Nor themselves introduced themselves unsatiable devonshire get. They why quit gay
                    cold rose deal park.
                    One same they four did ask busy. Reserved opinions fat him nay position.
                  </p>

                  <div class="testimonials__author mt-48">
                    <div class="size-xl mx-auto mb-20">
                      <div class="bg-image rounded-full swiper-lazy swiper-lazy-loaded"
                        style="background-image: url(&quot;img/testimonials/1.jpg&quot;);"></div>
                    </div>

                    <h5 class="text-lg capitalize fw-600">Gareth Grey</h5>
                    <p class="capitalize">graphic designer</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1" style="width: 1328px;">
            <div class="row justify-content-center">
              <div class="col-lg-9 col-md-10">
                <div class="testimonials text-center">
                  <p class="testimonials__comment text-3xl md:text-2xl sm:text-xl fw-500 leading-xl text-black">
                    Green great Called is so rule evening. For appear winged brought divided. Life
                    fruitful together she'd
                    sixth them evening abundantly herb. Subdue yielding seas open called living life.
                  </p>

                  <div class="testimonials__author mt-48">
                    <div class="size-xl mx-auto mb-20">
                      <div class="bg-image rounded-full swiper-lazy swiper-lazy-loaded"
                        style="background-image: url(&quot;img/testimonials/2.jpg&quot;);"></div>
                    </div>

                    <h5 class="text-lg capitalize fw-600">Alyce Hackett</h5>
                    <p class="capitalize">developer</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2" style="width: 1328px;">
            <div class="row justify-content-center">
              <div class="col-lg-9 col-md-10">
                <div class="testimonials text-center">
                  <p class="testimonials__comment text-3xl md:text-2xl sm:text-xl fw-500 leading-xl text-black">
                    Kind isn't had. Their whose seasons fowl light created they're void is female fowl
                    he second shall
                    that from, firmament you over had brought herb void cattle image form creeping.
                  </p>

                  <div class="testimonials__author mt-48">
                    <div class="size-xl mx-auto mb-20">
                      <div class="bg-image rounded-full swiper-lazy swiper-lazy-loaded"
                        style="background-image: url(&quot;img/testimonials/3.jpg&quot;);"></div>
                    </div>

                    <h5 class="text-lg capitalize fw-600">Maegan Leach</h5>
                    <p class="capitalize">UX designer</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0"
            style="width: 1328px;">
            <div class="row justify-content-center">
              <div class="col-lg-9 col-md-10">
                <div class="testimonials text-center">
                  <p class="testimonials__comment text-3xl md:text-2xl sm:text-xl fw-500 leading-xl text-black">
                    Nor themselves introduced themselves unsatiable devonshire get. They why quit gay
                    cold rose deal park.
                    One same they four did ask busy. Reserved opinions fat him nay position.
                  </p>

                  <div class="testimonials__author mt-48">
                    <div class="size-xl mx-auto mb-20">
                      <div class="bg-image rounded-full swiper-lazy swiper-lazy-loaded"
                        style="background-image: url(&quot;img/testimonials/1.jpg&quot;);"></div>
                    </div>

                    <h5 class="text-lg capitalize fw-600">Gareth Grey</h5>
                    <p class="capitalize">graphic designer</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
      </div>
    </div>
    <!-- container end -->
  </section>
  <!-- testimonial section end -->

  <!-- newsletter section -->
  <section data-parallax="0.7" class="layout-pt-lg layout-pb-lg">



    <!-- container start -->
    <div class="container z-5">
      <!-- row start -->
      <div class="row justify-content-center text-center">
        <div class="col-12">
          <p class="text-sm uppercase tracking-lg text-white mb-20">
            Contact us
          </p>

          <h2 class="text-5xl sm:text-5xl xs:text-4xl leading-sm fw-700 text-white">
            Have a project of your own?
          </h2>

          <p class="text-xl md:text-lg text-white mt-16">
            Small or big, we've got you covered!
          </p>

          <a href="#" class="button -md -white text-black mt-32">
            Get in Touch
          </a>
        </div>
      </div>
      <!-- row end -->
    </div>
    <!-- container end -->
    <div id="jarallax-container-2"
      style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;">
      <div data-parallax-target="" class="overlay-black-md bg-image js-lazy loaded"
        style="object-fit: cover; object-position: 50% 50%; max-width: none; position: absolute; top: 0px; left: 0px; width: 1903px; height: 489.903px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: -67.4516px; transform: translate3d(0px, 13.3953px, 0px); background-image: url(&quot;img/team_banner.jpg&quot;);"
        data-ll-status="loaded"></div>
    </div>
  </section>
  <!-- newsletter section end -->

  <!-- team section -->
  <section class="layout-pt-lg layout-pb-lg">
    <!-- container start -->
    <div class="container">

      <!-- row start -->
      <div class="row justify-content-center text-center">
        <div class="col-lg-6">
          <div class="sectionHeading -md">
            <p class="sectionHeading__subtitle">
              Our Team
            </p>
            <h2 class="sectionHeading__title">
              Reliable &amp; Professional
            </h2>
            <p class="text-lg sm:text-base mt-24">
              So upon land can't Together beginning set great us you're had green firmament life. There over
              were bearing
              to forth subdue days.
            </p>
          </div>
        </div>
      </div>
      <!-- row end -->


      <!-- row start -->
      <x-desktop-team class="mobile-hide" />
      {{-- Mobile Team Section --}}

      <x-mobile-team />



      <!-- row end -->

    </div>
    <!-- container end -->
  </section>
  <!-- team section end -->

  <!-- client section -->
  <section class="layout-pt-md layout-pb-lg">
    <!-- container start -->
    <div class="container">

      <x-client-desktop />
      <x-client-mobile />
    </div>
    <!-- container end -->
  </section>
  <!-- client section end -->
@endcomponent
