  <!-- section start -->
  <section class="layout-pt-lg layout-pb-lg">
    <!-- container start -->
    <div class="container">

        <!-- row start -->
        <div class="row justify-content-between align-items-end">
            <div class="col-md-6">
                <div class="sectionHeading -md">
                    <p class="sectionHeading__subtitle">
                        our journal
                    </p>
                    <h2 class="sectionHeading__title">
                        Latest news
                    </h2>
                </div>
            </div>

            <div class="col-md-auto col-sm-12 sm:mt-24">
                <a data-barba href="{{ route('blogs') }}" class="button -md -outline-black text-black">
                    view all
                </a>
            </div>
        </div>
        <!-- row end -->


        <!-- row start -->
        <div class="row x-gap-48 y-gap-40 layout-pt-sm">

            @foreach ($blogs as $blog)
                <div class="col-lg-4 col-md-6">
                    <div data-anim-wrap class="blogCard -type-1 -hover">
                        <a class="blogCard__img" data-barba href="{{ route('blog', $blog->slug) }}">
                            <div data-anim-child="img-right cover-dark-1 delay-1">
                                <div class="ratio ratio-4:3 bg-image js-lazy" data-bg="{{ $blog->thumbnail }}"></div>
                            </div>
                        </a>

                        <div class="blogCard__content mt-24">
                            <div data-anim-child="slide-up delay-6"
                                class="blogCard__info text-dark leading-md text-sm">
                                <a class="fw-400 mr-4" href="#">{{ $blog->tag }}</a> -
                                <p class="d-inline-block ml-4">{{ $blog->created_at }}</p>
                            </div>

                            <div data-anim-child="slide-up delay-7">
                                <h4 class="blogCard__title text-2xl leading-lg fw-500 mt-12">
                                    <a data-barba href="{{ route('blog', $blog->slug) }}">
                                        {{ $blog->title }}
                                    </a>
                                </h4>
                            </div>


                            <div data-anim-child="slide-up delay-8" class="mt-12">
                                <a data-barba href="{{ route('blog', $blog->slug) }}"
                                    class="button -icon text-black">
                                    Read More
                                    <i class="icon size-xs str-width-md" data-feather="arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
        <!-- row end -->

    </div>
    <!-- container end -->
</section>
<!-- section end -->