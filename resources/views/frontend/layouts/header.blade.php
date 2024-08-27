

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>GreenGraph</title>


  <!-- bootstrap core css
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

   font awesome style -->
  <!-- <link href="css/font-awesome.min.css" rel="stylesheet" /> -->

  <!-- Custom styles for this template -->
  <!-- <link href="css/style.css" rel="stylesheet" /> -->
  <!-- responsive style -->
  <!-- <link href="css/responsive.css" rel="stylesheet" />  -->

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.css') }}" />

    <!-- font awesome style -->
    <link href="{{ url('public/frontend/css/font-awesome.min.css') }}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" />

    <!-- responsive style -->
    <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet" />

</head>
<header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              GreenGraph
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('main') }}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
              <a class="nav-link" href="{{ route('about') }}">About</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('service') }}">Services</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
              </li>
            </ul>
            <div class="quote_btn-container">
              <a href="" class="quote_btn">
                Get A Quote
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>