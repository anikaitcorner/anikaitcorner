<!-- data -->
@php
  $blogs = json_decode($blogs);
  
  $blog_tags = [];
  foreach ($blogs as $blog) {
      array_push($blog_tags, $blog->tag);
  }
  $blog_tags = array_unique($blog_tags);
@endphp

@section('title',"Blog")

@component('layouts.app')
  <!-- section start -->
  <section class="layout-pt-xl layout-pb-md">
    <!-- container start -->
    <div class="container">
      <!-- row start -->
      <div class="row justify-content-center text-center">
        <div class="col-xl-7 col-lg-8">
          <ul class="breadcrumbs justify-content-center text-black mb-40">
            <li class="breadcrumbs-item">
              <a data-barba href="home-1.html">
                Home
              </a>
            </li>
            <li class="breadcrumbs-item active" aria-current="page">
              Blog list
            </li>
          </ul>

          <div class="sectionHeading -lg">
            <h1 class="sectionHeading__title">
              Blog List
            </h1>
          </div>
        </div>
      </div>
      <!-- row end -->
    </div>
    <!-- container end -->
  </section>
  <!-- section end -->


  <!-- section start -->
  <section class="layout-pt-xs layout-pb-md">
    <!-- container start -->
    <div class="container">
      <!-- row start -->
      <div class="row no-gutters justify-content-between">

        <!-- posts start -->
        <div class="col-lg-8">

          @foreach ($blogs as $blog)
            <!-- blog-item start -->
            <div class="blogPost">
              <a data-barba href="{{ route('blog', $blog->slug) }}">
                <div class="blogPost__img -hover">
                  <div class="bg-image ratio ratio-16:9 js-lazy" data-bg="{{ $blog->thumbnail }}"></div>
                </div>
              </a>

              <!-- blog-content start -->
              <div class="blogPost__content mt-24">
                <div class="blogPost__info leading-md">
                  <a href="#">{{ $blog->tag }}</a>
                </div>

                <h3 class="blogPost__title text-2xl fw-600 mt-16">
                  <a data-barba href="{{ route('blog', $blog->slug) }}">
                    {{ $blog->title }}
                  </a>
                </h3>

                <p class="blogPost__text text-base mt-12">
                  {{ $blog->short_description }}
                </p>

                <div class="blogPost__button text-black mt-12">
                  <a href="{{ route('blog', $blog->slug) }}" data-barba class="button -underline fw-500">
                    Read More
                  </a>
                </div>
              </div>
              <!-- blog-content end -->
            </div>
            <!-- blog-item end -->
          @endforeach

          <div class="blogPost-pagination">
            <div class="blogPost-pagination__wrap">
              <a class="@php if(isset($_GET["page"])){
                if($_GET["page"] === "1"){
                  echo "is-active";
                }
              } @endphp"
                href="/blogs?page=1">1</a>
              <a class="@php if(isset($_GET["page"])){
                if($_GET["page"] === "2"){
                  echo "is-active";
                }
              } @endphp"
                href="/blogs?page=2">2</a>
              <a class="@php if(isset($_GET["page"])){
                if($_GET["page"] === "3"){
                  echo "is-active";
                }
              } @endphp"
                href="/blogs?page=3">3</a>
              <span>...</span>
              <a class="@php if(isset($_GET["page"])){
                if($_GET["page"] === "6"){
                  echo "is-active";
                }
              } @endphp"
                href="/blogs?page=6">6</a>
            </div>
          </div>


        </div>
        <!-- posts end -->


        <!-- sidebar start -->
        <div class="col-lg-4">
          <aside class="blogSidebar widget_area">
            <!-- widget start -->
            <div class="widget widget_categories">
              <h5 class="widget-title">
                Categories
              </h5>

              <ul>


                @foreach ($blog_tags as $tag)
                  <li>
                    <a href="#">{{ $tag }}</a>
                  </li>
                @endforeach
              </ul>
            </div>
            <!-- widget end -->


            <!-- widget start -->
            <div class="widget widget_recent_entries">
              <h5 class="widget-title">
                Recent Posts
              </h5>

              <ul>
                @foreach (array_slice($blogs, 7) as $blog)
                  <li>
                    <span class="post-date">{{ $blog->created_at }}</span>
                    <a data-barba href="blog-article.html">{{ $blog->title }}</a>
                  </li>
                @endforeach
                <li>
                  <span class="post-date">May 22, 2020</span>
                  <a data-barba href="blog-article.html">Graphic Design: Tips and Best Practices</a>
                </li>
                <li>
                  <span class="post-date">April 19, 2020</span>
                  <a data-barba href="blog-article.html">Review of Popular Web Design Trends in 2020</a>
                </li>
              </ul>
            </div>
            <!-- widget end -->
          </aside>
        </div>
        <!-- sidebar end -->

      </div>
      <!-- row end -->
    </div>
    <!-- container end -->
  </section>
  <!-- section end -->
@endcomponent
