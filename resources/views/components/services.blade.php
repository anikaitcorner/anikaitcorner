@props(["services"])

<section class="layout-pt-lg layout-pb-lg">
    <!-- container start -->
    <div class="container">
        <!-- row start -->
        <div class="row justify-content-between">

            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="sectionHeading -md">
                    <p class="sectionHeading__subtitle">
                        Our Services
                    </p>
                    <h2 class="sectionHeading__title">
                        Solutions &amp; Focus Areas
                    </h2>
                    <p class="mt-20">
                        The Anika IT Solutions team is entirely focused on meeting the information challenges of IT
                        Solution &
                        Services companies
                    </p>
                    <a href="/services" class="button -md -outline-black text-black mt-32">
                        All Services
                    </a>
                </div>
            </div>


            <div class="col-lg-7">
                <!-- row start -->
                <div class="row x-gap-72 y-gap-72 md:mt-48">
                    @foreach ($services as $item)
                        <div class="col-md-6">
                            <div class="ml-minus-4">
                                <div class="d-flex align-items-center">
                                    <div class="services__icon bg-white shadow-light rounded-full">

                                        <i class="{{ $item->icon }}"></i>
                                    </div>
                                </div>
                            </div>
                            <h3 class="text-2xl fw-500 mt-32">
                                {{ $item->name }}
                            </h3>
                            <p class="mt-12">
                                {{ $item->desc }}
                            </p>
                            <div class="mt-16">
                                <a data-barba="" href="services" class="button -icon text-black">
                                    Know More
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-arrow-right icon size-xs str-width-md">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>
                <!-- row end -->
            </div>

        </div>
        <!-- row end -->
    </div>
    <!-- container end -->
</section>