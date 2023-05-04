<!-- data -->
@php
  $nav_menu = json_decode($nav_menu);
  $social_media = json_decode($social_media);
  $contact_us = json_decode($contact_us);
  $info = json_decode($info);
@endphp

<footer class="footer -type-1">
  <!-- container start -->
  <div class="container">

    <div class="footer__top">
      <!-- row start -->
      <div class="row y-gap-48 justify-content-between">
        <div class="col-lg-auto col-sm-12">
          <a href="/" class="footer__logo text-black">
            <img class="header__logo__dark js-lazy loaded" src="{{ $info->footer_logo }}" alt="ROF Logo"
              data-ll-status="loaded">
          </a>
        </div>

        <div class="col-lg-3 col-sm-6">
          <h4 class="text-xl fw-500 text-black">
            Studio
          </h4>

          <div class="footer__content text-base text-dark mt-16 sm:mt-12">
            <p> {{ $info->address }}</p>

            @foreach ($contact_us->items as $item)
              <a class="mt-8 d-block" href="{{ $item->slug }}">{{ $item->label }}</a>
            @endforeach
          </div>
        </div>

        <div class="col-lg-auto col-sm-4">
          <h4 class="text-xl fw-500 text-black">
            Links
          </h4>

          <div class="footer__content text-base text-dark mt-16 sm:mt-12">
            @foreach ($nav_menu->items as $item)
              <div><a data-barba="" href="{{ $item->route }}" class="button -underline">{{ $item->label }}</a></div>
            @endforeach
          </div>
        </div>

        <div class="col-lg-auto col-auto">
          <h4 class="text-xl fw-500 text-black">
            Follow us
          </h4>

          <div class="social -bordered mt-16 sm:mt-12">
            @foreach ($social_media->items as $item)
              <a class="social__item text-black border-dark" href="{{ $item->slug }}" title="{{ $item->label }}">
                <i class="{{ $item->icon }}"></i>
              </a>
            @endforeach
          </div>
        </div>
      </div>
      <!-- row end -->
    </div>


    <div class="footer__bottom">
      <!-- row start -->
      <div class="row">
        <div class="col">
          <div class="footer__copyright">
            <p class="text-dark">
              {{ $info->copyright }}
            </p>
          </div>
        </div>
      </div>
      <!-- row end -->
    </div>

  </div>
  <!-- container end -->
</footer>
