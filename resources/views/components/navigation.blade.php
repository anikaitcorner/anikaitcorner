<!-- data -->
@php
  $nav_menu = json_decode($nav_menu);
  $social_media = json_decode($social_media);
  $contact_us = json_decode($contact_us);
  $info = json_decode($info);
@endphp

<!-- header start -->
<header class="header -light -sticky-light js-header">
  <!-- header__bar start -->
  <div class="header__bar">
    <div class="header__logo js-header-logo">
      <a data-barba href="/">
        <img class="header__logo__dark js-lazy" src="#" data-src="{{ $info->nav_logo }}" alt="ROF Logo">
      </a>
    </div>

    <div class="header__menu js-header-menu">
      <button type="button" class="nav-button-open js-nav-open">
        <i class="icon" data-feather="menu"></i>
        <span></span>
        <span></span>
      </button>
    </div>
  </div>
  <!-- header__bar end -->


  <!-- nav start -->
  <nav class="nav js-nav">
    <div class="nav__inner js-nav-inner">
      <div class="nav__bg js-nav-bg"></div>

      <div class="nav__container">
        <div class="nav__header">
          <button type="button" class="nav-button-back js-nav-back">
            <i class="icon" data-feather="arrow-left-circle"></i>
          </button>

          <button type="button" class="nav-btn-close js-nav-close pointer-events-none">
            <i class="icon" data-feather="x"></i>
          </button>
        </div>

        <div class="nav__content">
          <div class="nav__content__left">
            <div class="navList__wrap">
              <ul class="navList js-navList">
                @foreach ($nav_menu->items as $item)
                  <li>
                    <a data-barba href="{{ route($item->route) }}">
                      {{ $item->label }}
                    </a>
                  </li>
                @endforeach
              </ul>
            </div>
          </div>

          <div class="nav__content__right">
            <div class="nav__info">
              <div class="nav__info__item js-navInfo-item">
                <h5 class="text-sm tracking-none fw-500">
                  Address
                </h5>

                <div class="nav__info__content text-lg text-white mt-16">
                  <p>
                    {{ $info->address }}
                  </p>
                </div>
              </div>

              <div class="nav__info__item js-navInfo-item">
                <h5 class="text-sm tracking-none fw-500">
                  Socials
                </h5>

                <div class="nav__info__content text-lg text-white mt-16">
                  @foreach ($social_media->items as $item)
                    <a href="{{ $item->slug }}">{{ $item->label }}</a>
                  @endforeach
                </div>
              </div>

              <div class="nav__info__item js-navInfo-item">
                <h5 class="text-sm tracking-none fw-500">
                  Contact Us
                </h5>

                <div class="nav__info__content text-lg text-white mt-16">
                  @foreach ($contact_us->items as $item)
                    <a href="{{ $item->slug }}">{{ $item->label }}</a>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- nav end -->
</header>
<!-- header end -->
