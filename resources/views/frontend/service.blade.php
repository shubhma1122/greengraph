@extends('frontend.layouts.main')

@section('main-container')

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
   
    <!-- end header section -->
  </div>

  <!-- service section -->
  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Services
        </h2>
        <p>
          consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="{{ asset('frontend/images/s1.png') }}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Link Building
              </h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
              </p>
              <a href="">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="{{ asset('frontend/images/s2.png')}}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                On page SEO
              </h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
              </p>
              <a href="">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="{{ asset('frontend/images/s3.png')}}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Online Marketing
              </h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
              </p>
              <a href="">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="{{ asset('frontend/images/s4.png')}}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Email Marketing
              </h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
              </p>
              <a href="">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          View More
        </a>
      </div>
    </div>
  </section>
  <!-- end service section -->


 
    <!-- info section -->

    

    <!-- end info section -->

    <!-- footer section -->
   

</body>

@endsection