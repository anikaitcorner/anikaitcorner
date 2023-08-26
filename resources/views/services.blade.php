@section("title","Services")
@component('layouts.app')
  <!-- Hero Section -->
  <section data-anim-wrap="" class="layout-pt-xl layout-pb-lg animated">
    <div class="container">
      <!-- row start -->
      <div class="row">
        <div class="col-xl-6 col-md-8">
          <div class="sectionHeading -lg">
            <div data-anim-child="slide-up delay-1" class="is-in-view">
              <p class="sectionHeading__subtitle text-black text__primary">
                Services
              </p>
            </div>
            <div data-anim-child="slide-up delay-2" class="is-in-view">
              <h1 class="sectionHeading__title">
                Wide range of IT Solution.
              </h1>
            </div>
          </div>
        </div>
      </div>
      <!-- row end -->

      <!-- row start -->
      <div class="row mt-40 md:mt-24">
        <div class="col-xl-6 col-lg-8 col-md-9">
          <div data-anim-child="slide-up delay-3" class="is-in-view">
            <p class="text-lg sm:text-base">
              Empowering Businesses Through IT Solutions. From captivating web experiences to dynamic mobile apps, we're
              your partner for innovative digital solutions.
            </p>
          </div>
        </div>
      </div>
      <!-- row end -->

      <!-- row start -->
      <div class="row x-gap-60 y-gap-60 layout-pt-md">

        @foreach($services as $service)

        <div class="col-lg-4 col-md-6">
          <div data-anim="slide-up delay-5" class="is-in-view">
            <div class="d-flex ml-minus-4">
              <div class="service__icon">
                <i class="{{$service->icon}} text__primary font-24"></i>
              </div>
            </div>
            <h3 class="text-2xl fw-500 mt-32">
              {{$service->name}}
            </h3>
            <p class="mt-20">
              {{$service->desc}}
            </p>
            <div class="mt-24">
              <a data-barba="" href="#" class="button -icon text-black">
                Know More
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-arrow-right icon size-xs str-width-md">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </a>
            </div>
          </div>
        </div>
        @endforeach


      </div>
      <!-- row end -->
    </div>
  </section>
  <!-- Hero Section end -->
  <!-- Price Box Section -->
  {{-- <section class="layout-pt-lg layout-pb-lg">
    <!-- container start -->
    <div class="container">

      <!-- row start -->
      <div class="row justify-content-center text-center">
        <div class="col-xl-7 col-lg-9">
          <div class="sectionHeading -lg">
            <p class="sectionHeading__subtitle">
              pricing
            </p>
            <h2 class="sectionHeading__title">
              Our Pricing
            </h2>
          </div>
        </div>
      </div>
      <!-- row end -->


      <!-- row start -->
      <div class="row x-gap-40 y-gap-40 layout-pt-md">


        <div class="col-lg-4 col-md-6">
          <div class="priceCard py-40 px-40 rounded-base shadow-light">
            <div class="priceCard__content">
              <h3 class="priceCard__title text-2xl fw-500">
                Personal
              </h3>

              <h3 class="priceCard__price number -md text-black fw-600 mt-24">
                $ 39
              </h3>

              <p class="priceCard__badge text-sm fw-500 mt-32">
                Monthly
              </p>

              <p class="text-black fw-500 mt-24">
                Get the current deal without any risk and additional fees.
              </p>

              <ul class="priceCard__list mt-24">
                <li>
                  <p class="">Unlimited updates &amp; projects</p>
                </li>
                <li>
                  <p class="">Custom permissions</p>
                </li>
                <li>
                  <p class="line-through">Custom infrastructure</p>
                </li>
                <li>
                  <p class="line-through">Custom Design &amp; features</p>
                </li>
              </ul>

              <div class="priceCard__button mt-32">
                <a href="#" class="button -sm -outline-black text-black">
                  Get started
                </a>
              </div>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6">
          <div class="priceCard py-40 px-40 rounded-base shadow-light bg-dark-1">
            <div class="priceCard__content">
              <h3 class="priceCard__title text-2xl fw-500 text-white">
                Personal
              </h3>

              <h3 class="priceCard__price number -md text-white fw-600 mt-24">
                $ 49
              </h3>

              <p class="priceCard__badge -light text-white text-sm fw-500 mt-32">
                Monthly
              </p>

              <p class="text-white fw-500 mt-24">
                Get the current deal without any risk and additional fees.
              </p>

              <ul class="priceCard__list mt-24">
                <li>
                  <p class="text-light">Unlimited updates &amp; projects</p>
                </li>
                <li>
                  <p class="text-light">Custom permissions</p>
                </li>
                <li>
                  <p class="text-light line-through">Custom infrastructure</p>
                </li>
                <li>
                  <p class="text-light line-through">Custom Design &amp; features</p>
                </li>
              </ul>

              <div class="priceCard__button mt-32">
                <a href="#" class="button -sm -outline-white text-white">
                  Get started
                </a>
              </div>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6">
          <div class="priceCard py-40 px-40 rounded-base shadow-light">
            <div class="priceCard__content">
              <h3 class="priceCard__title text-2xl fw-500">
                Personal
              </h3>

              <h3 class="priceCard__price number -md text-black fw-600 mt-24">
                $ 59
              </h3>

              <p class="priceCard__badge text-sm fw-500 mt-32">
                Monthly
              </p>

              <p class="text-black fw-500 mt-24">
                Get the current deal without any risk and additional fees.
              </p>

              <ul class="priceCard__list mt-24">
                <li>
                  <p class="">Unlimited updates &amp; projects</p>
                </li>
                <li>
                  <p class="">Custom permissions</p>
                </li>
                <li>
                  <p class="line-through">Custom infrastructure</p>
                </li>
                <li>
                  <p class="line-through">Custom Design &amp; features</p>
                </li>
              </ul>

              <div class="priceCard__button mt-32">
                <a href="#" class="button -sm -outline-black text-black">
                  Get started
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- row end -->

    </div>
    <!-- container end -->
  </section> --}}
  <!-- Price Box Section End -->
  <!-- Client Section -->
  {{-- <section class="layout-pt-lg layout-pb-lg bg-dark-1">
    <!-- container start -->
    <div class="container">
      <!-- row start -->
      <div class="row y-gap-32">

        <div class="col-lg-3 col-sm-6">
          <div data-anim="slide-up delay-1"
            class="clientsItem -light -hover ratio ratio-3:2 border-light rounded-4 is-in-view">
            <div class="clientsItem__img">
              <img class="col-8" src="img/clients/light/1.png" alt="Client">
            </div>

            <div class="clientsItem__content">
              <h5 class="clientsItem__title text-xl">
                Sophia &amp; Holden
              </h5>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6">
          <div data-anim="slide-up delay-1"
            class="clientsItem -light -hover ratio ratio-3:2 border-light rounded-4 is-in-view">
            <div class="clientsItem__img">
              <img class="col-8" src="img/clients/light/2.png" alt="Client">
            </div>

            <div class="clientsItem__content">
              <h5 class="clientsItem__title text-xl">
                Sophia &amp; Holden
              </h5>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6">
          <div data-anim="slide-up delay-1"
            class="clientsItem -light -hover ratio ratio-3:2 border-light rounded-4 is-in-view">
            <div class="clientsItem__img">
              <img class="col-8" src="img/clients/light/3.png" alt="Client">
            </div>

            <div class="clientsItem__content">
              <h5 class="clientsItem__title text-xl">
                Sophia &amp; Holden
              </h5>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6">
          <div data-anim="slide-up delay-1"
            class="clientsItem -light -hover ratio ratio-3:2 border-light rounded-4 is-in-view">
            <div class="clientsItem__img">
              <img class="col-8" src="img/clients/light/4.png" alt="Client">
            </div>

            <div class="clientsItem__content">
              <h5 class="clientsItem__title text-xl">
                Sophia &amp; Holden
              </h5>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6">
          <div data-anim="slide-up delay-1"
            class="clientsItem -light -hover ratio ratio-3:2 border-light rounded-4 is-in-view">
            <div class="clientsItem__img">
              <img class="col-8" src="img/clients/light/5.png" alt="Client">
            </div>

            <div class="clientsItem__content">
              <h5 class="clientsItem__title text-xl">
                Sophia &amp; Holden
              </h5>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6">
          <div data-anim="slide-up delay-1"
            class="clientsItem -light -hover ratio ratio-3:2 border-light rounded-4 is-in-view">
            <div class="clientsItem__img">
              <img class="col-8" src="img/clients/light/6.png" alt="Client">
            </div>

            <div class="clientsItem__content">
              <h5 class="clientsItem__title text-xl">
                Sophia &amp; Holden
              </h5>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6">
          <div data-anim="slide-up delay-1"
            class="clientsItem -light -hover ratio ratio-3:2 border-light rounded-4 is-in-view">
            <div class="clientsItem__img">
              <img class="col-8" src="img/clients/light/7.png" alt="Client">
            </div>

            <div class="clientsItem__content">
              <h5 class="clientsItem__title text-xl">
                Sophia &amp; Holden
              </h5>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6">
          <div data-anim="slide-up delay-1"
            class="clientsItem -light -hover ratio ratio-3:2 border-light rounded-4 is-in-view">
            <div class="clientsItem__img">
              <img class="col-8" src="img/clients/light/8.png" alt="Client">
            </div>

            <div class="clientsItem__content">
              <h5 class="clientsItem__title text-xl">
                Sophia &amp; Holden
              </h5>
            </div>
          </div>
        </div>

      </div>
      <!-- row end -->
    </div>
    <!-- container end -->
  </section> --}}
  <!-- Client Section End -->
@endcomponent
