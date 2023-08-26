@section("title","Contact")
@component('layouts.app')
  <!-- Hero Section -->
  <section class="layout-pt-xl layout-pb-xs">
    <!-- container start -->
    <div data-anim-wrap="" class="container animated">

      <!-- row start -->
      <div class="row">
        <div class="col-xl-9 offset-xl-1 col-lg-11">
          <div data-anim-child="slide-up delay-1" class="sectionHeading -lg is-in-view">
            <p class="sectionHeading__subtitle text__primary">
              Hire Us
            </p>
            <h1 class="sectionHeading__title leading-sm">
              Got a project to discuss?
              Get in touch.
            </h1>
          </div>
        </div>
      </div>
      <!-- row end -->

      <!-- row start -->
      <div data-anim-child="slide-up delay-2" class="row justify-content-center layout-pt-md is-in-view">
        <div class="col-xl-10">
          <div class="row x-gap-48 y-gap-48">
            <div class="col-lg-3 col-md-6 col-sm-8">
              <h4 class="text-xl fw-600">
                Address
              </h4>
              <div class="text-dark mt-12">
                <p>Level-6, Sheikh Hasina Software & Technology Park, Jashore</p>
              </div>
            </div>

            <div class="col-lg-auto offset-lg-1 col-md-6">
              <h4 class="text-xl fw-600">
                Contact Us
              </h4>
              <div class="text-dark mt-12">
                <div>
                  <a class="button -underline" href="mailto:contact@anikaitcorner.com">anikaitcorner@gmail.com</a>
                </div>
                <div class="mt-4">
                  <a class="button -underline" href="tel:+8801887567230">+880 1887 567 230</a>
                </div>
              </div>
            </div>

            <div class="col-md-auto offset-lg-1">
              <h4 class="text-xl fw-600">
                Follow Us
              </h4>
              <div class="social -bordered mt-16 md:mt-12">

                <a class="social__item text-black border-dark" href="#">
                  <i class="fa fa-twitter"></i>
                </a>

                <a class="social__item text-black border-dark" href="#">
                  <i class="fa fa-instagram"></i>
                </a>

                <a class="social__item text-black border-dark" href="#">
                  <i class="fa fa-youtube-play"></i>
                </a>

                <a class="social__item text-black border-dark" href="#">
                  <i class="fa fa-linkedin"></i>
                </a>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- row end -->

    </div>
    <!-- container end -->
  </section>
  <!-- Hero Section end -->

  <!-- Form Section -->
  <section class="layout-pt-md layout-pb-lg">
    <!-- container start -->
    <div class="container">
      <!-- row start -->
      <div data-anim="slide-up delay-3" class="row justify-content-center is-in-view">
        <div class="col-xl-10">
          <div class="sectionHeading -sm">
            <h2 class="sectionHeading__title">
              Drop us a line
            </h2>
            <p class="text-black leading-md mt-12">
              Use the form below or
              <a href="#" class="fw-700">send us an email</a>.
            </p>
          </div>
        </div>

        <div class="w-1/1"></div>

        <div class="col-xl-10 mt-48 sm:mt-32">
          <div class="contact-form -type-1">
            <form id="mail" class="row x-gap-40 y-gap-32 js-ajax-form" method="POST" action="contact.php"
              data-message-success="Your message has been sent! We will reply you as soon as possible."
              data-message-error="Something went wrong. Please contact us directly at <a href='mailto:anikaitcorner@gmail.com'>anikaitcorner@gmail.com</a>.">
              
              @csrf
              <div class="col-lg-6">
                <label class="js-input-group">
                  Name
                  <input type="text" name="name" data-required="" placeholder="Fill in your name">
                  <span class="form__error"></span>
                </label>
              </div>

              <div class="col-lg-6">
                <label class="js-input-group">
                  Your phone number (optional)
                  <input type="text" name="phone" placeholder="Phone number">
                  <span class="form__error"></span>
                </label>
              </div>

              <div class="col-lg-6">
                <label class="js-input-group">
                  Email
                  <input type="text" name="email" data-required="" placeholder="Fill in your email">
                  <span class="form__error"></span>
                </label>
              </div>

              <div class="col-lg-6">
                <label class="js-input-group">
                  Subject
                  <input type="text" name="subject" placeholder="What are you looking for?">
                  <span class="form__error"></span>
                </label>
              </div>

              <div class="col-12">
                <label class="js-input-group">
                  Message
                  <textarea name="message" rows="2" placeholder="Fill in your message"></textarea>
                  <span class="form__error"></span>
                </label>
              </div>

              <div class="col-12 ajax-form-alert js-ajax-form-alert">
                <div class="ajax-form-alert__content">
                </div>
              </div>

              <div class="col-12">
                <button class="button -md -black text-white">
                  Send Message
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- row end -->
    </div>
    <!-- container end -->
  </section>
  <!-- Form Section end -->
@endcomponent
