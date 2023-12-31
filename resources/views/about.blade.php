@section('title', 'About Us')
@component('layouts.app')
  <!-- Hero Section -->
  <section class="layout-pt-2xl layout-pb-md">
    <div data-anim-wrap="" class="animated">

      <!-- container start -->
      <div class="container">
        <!-- row start -->
        <div class="row justify-content-between">

          <div class="col-lg-6 col-md-10">
            <div data-anim-child="slide-up" class="sectionHeading -sm is-in-view">
              <h1 class="sectionHeading__title">
                Let Us Be Your Partners Preferred IT Partner.
              </h1>
            </div>
          </div>


          <div class="col-lg-5 col-md-10 md:mt-32 sm:mt-20">
            <div data-anim-child="slide-up delay-1" class="is-in-view">
              <p class="text-lg sm:text-base">
                Moveth brought face. Without of given land thing own. Sea yielding second you're abundantly shall created
                Under whose also bearing tree night.
              </p>
              <p class="text-lg sm:text-base mt-32 md:mt-20">
                Give life form isn't third there form bearing day can't. Which subdue, divide subdue two, there evening.
                Is firmament, grass own had. Bring man created also bearing set air. Under make seasons third very, isn't
                subdue third seasons land living his i meat.
              </p>
            </div>
          </div>

        </div>
        <!-- row end -->
      </div>
      <!-- container end -->


      <!-- container start -->
      <div class="container-wide layout-pt-lg">
        <div data-anim-child="slide-up delay-3" data-parallax="0.7" class="h-lg is-in-view">

          <div id="jarallax-container-0"
            style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;">
            <div data-parallax-target="" class="bg-image js-lazy loaded"
              style="object-fit: cover; object-position: 50% 50%; max-width: none; position: absolute; top: 0px; left: 0px; width: 1712.72px; height: 804.203px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: 62.3984px; transform: translate3d(0px, -223.423px, 0px); background-image: url(&quot;img/home_team.jpg&quot;);"
              data-ll-status="loaded"></div>
          </div>
        </div>
      </div>
      <!-- container end -->

    </div>
  </section>
  <!-- Hero Section end -->

  <!-- Team Section -->
  <section class="layout-pt-lg layout-pb-lg">
    <!-- container start -->
    <div class="container">

      <!-- row start -->
      <div class="row justify-content-center text-center">
        <div class="col-lg-7">
          <div class="sectionHeading -md">
            <p class="sectionHeading__subtitle text__primary">
              Professionals
            </p>
            <h2 class="sectionHeading__title">
              Our Team
            </h2>
            <p class="text-lg sm:text-base mt-24">
              So upon land can't Together beginning set great us you're had green firmament life. There over were bearing
              to forth subdue days.
            </p>
          </div>
        </div>
      </div>
      <!-- row end -->


      <!-- row start -->
      <x-desktop-team class="mobile-hide"/>

      <x-mobile-team/>
      <!-- row end -->

    </div>
    <!-- container end -->
  </section>
  <!-- Team Section end -->

  <!-- Start a Project Section -->
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
    <div id="jarallax-container-1"
      style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;">
      <div data-parallax-target="" class="overlay-black-md bg-image js-lazy loaded"
        style="object-fit: cover; object-position: 50% 50%; max-width: none; position: absolute; top: 0px; left: 0px; width: 1903px; height: 662.103px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: 133.448px; transform: translate3d(0px, -167.709px, 0px); background-image: url(&quot;img/team_banner.jpg&quot;);"
        data-ll-status="loaded"></div>
    </div>
  </section>
  <!-- Start a Project Section end -->
@endcomponent
