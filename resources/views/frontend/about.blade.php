@extends('frontend.layouts.main')

@section('main-container')

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    
    <!-- end header section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding layout_margin">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable. If you
              are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
              the middle of text. All
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="{{ asset('frontend/images/about-img.png') }}" alt="">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end about section -->

 

</body>

@endsection