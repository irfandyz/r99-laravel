@extends('template')
@section('content')
<!-- Section 1 -->
<div id="home" style="margin-top: -65px">
  <!-- visible on large and medium -->
  <div id="carouselExampleIndicators" class="carousel slide w-100 d-none d-sm-block" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
        aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
        aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('') }}assets/banner/BCR05498.jpg" class="d-block w-100" alt="..." />
      </div>
      <div class="carousel-item">
        <img src="{{ asset('') }}assets/banner/banner-1.jpg" style="filter: brightness(95%)" class="d-block w-100"
          alt="..." />
      </div>
      <div class="carousel-item">
        <img src="{{ asset('') }}assets/banner/banner-2.jpg" style="filter: brightness(95%)" class="d-block w-100"
          alt="..." />
      </div>
      <div class="carousel-item">
        <img src="{{ asset('') }}assets/banner/banner-3.jpg" style="filter: brightness(95%)" class="d-block w-100"
          alt="..." />
      </div>
      <div class="carousel-item">
        <img src="{{ asset('') }}assets/banner/banner-4.jpg" style="filter: brightness(95%)" class="d-block w-100"
          alt="..." />
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- visible on small -->
  <div id="carouselExampleIndicators1" class="carousel slide w-100 d-block d-sm-none" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="3"
        aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="4"
        aria-label="Slide 5"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('') }}assets/banner/BCR054981.jpg" class="d-block w-100" alt="..." />
      </div>
      <div class="carousel-item">
        <img src="{{ asset('') }}assets/banner/banner-sm-1.jpg" style="filter: brightness(95%)" class="d-block w-100"
          alt="..." />
      </div>
      <div class="carousel-item">
        <img src="{{ asset('') }}assets/banner/banner-sm-2.jpg" style="filter: brightness(95%)" class="d-block w-100"
          alt="..." />
      </div>
      <div class="carousel-item">
        <img src="{{ asset('') }}assets/banner/banner-sm-3.jpg" style="filter: brightness(95%)" class="d-block w-100"
          alt="..." />
      </div>
      <div class="carousel-item">
        <img src="{{ asset('') }}assets/banner/banner-sm-4.jpg" style="filter: brightness(95%)" class="d-block w-100"
          alt="..." />
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators1"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators1"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<!-- end Section 1 -->

<!-- Section 2 -->
<!-- visible on large -->
<div id="product"></div>
<div class="p-5 text-justify d-none d-lg-block" style="background: rgb(243, 243, 243)">
  <div class="d-flex justify-content-between p-5">
    <div class="pt-5" style="width: 20rem">
      <p class="fw-bold logo-color">OUR PRODUCTS</p>
      <h3 class="section-2-title fw-bold">
        A Supplier <br />of Quality <br />Furniture
      </h3>
      <p class="text-secondary mb-5">
        Our rattan furniture: crafted with <br />
        excellent materials, embodying <br />
        superior craftsmanship for global <br />
        clientele.
      </p>
    </div>
    <a href="{{ asset('modern') }}" class="text-decoration-none hover-dark">
      <div class="card ms-3" style="width: 20rem">
        <img src="{{ asset('') }}assets/product/thumbnail/modern-thumbnail.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="text-center mt-3">
            <span class="fw-bold">MODERN RATTAN</span><br />
          </p>
        </div>
      </div>
    </a>
    <a href="{{ asset('natural') }}" class="text-decoration-none hover-dark">
      <div class="card ms-3" style="width: 20rem">
        <img src="{{ asset('') }}assets/product/thumbnail/natural-thumbnail.png" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="text-center mt-3">
            <span class="fw-bold">NATURAL RATTAN</span><br />
          </p>
        </div>
      </div>
    </a>
  </div>
</div>
<!-- visible on medium -->
<div class="p-5 text-justify d-none d-md-block d-lg-none" style="background: rgb(243, 243, 243)">
  <div class="mt-3">
    <div class="">
      <p class="fw-bold logo-color text-center">OUR PRODUCTS</p>
      <h3 class="section-2-title fw-bold text-center">
        A Supplier of Quality Furniture
      </h3>
      <p class="text-secondary mb-5 text-center">
        Our rattan furniture: crafted with excellent materials, embodying
        superior craftsmanship for global clientele.
      </p>
    </div>
    <div class="row mt-3">
      <div class="col-6">
        <a href="{{ asset('modern') }}" class="text-decoration-none hover-dark">
          <div class="card ms-3" style="">
            <img src="{{ asset('') }}assets/product/thumbnail/modern-thumbnail.png" class="card-img-top" alt="..." />
            <div class="card-body">
              <p class="text-center mt-3">
                <span class="fw-bold">MODERN RATTAN</span><br />
              </p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-6">
        <a href="{{ asset('natural') }}" class="text-decoration-none hover-dark">
          <div class="card ms-3" style="">
            <img src="{{ asset('') }}assets/product/thumbnail/natural-thumbnail.png" class="card-img-top" alt="..." />
            <div class="card-body">
              <p class="text-center mt-3">
                <span class="fw-bold">NATURAL RATTAN</span><br />
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- visible on small -->
<div class="p-3 text-justify d-block d-md-none" style="background: rgb(243, 243, 243)">
  <div class="mt-5">
    <div class="">
      <p class="fw-bold logo-color text-center">OUR PRODUCTS</p>
      <h3 class="section-2-title fw-bold text-center">
        A Supplier of Quality Furniture
      </h3>
      <p class="text-secondary mb-5 text-center">
        Our rattan furniture: crafted with excellent materials, embodying
        superior craftsmanship for global clientele.
      </p>
    </div>
    <div class="row">
      <div class="col-6">
        <a href="{{ asset('modern') }}" class="text-decoration-none hover-dark">
          <div class="card card-block">
            <img src="{{ asset('') }}assets/product/thumbnail/modern-thumbnail.png" class="card-img-top" alt="..." />
            <div class="card-body text-center">
              <p>
                <span class="fw-bold" style="font-size: 12px">MODERN RATTAN</span><br />
              </p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-6">
        <a href="{{ asset('natural') }}" class="text-decoration-none hover-dark">
          <div class="card card-block">
            <img src="{{ asset('') }}assets/product/thumbnail/natural-thumbnail.png" class="card-img-top" alt="..." />
            <div class="card-body text-center">
              <p>
                <span class="fw-bold" style="font-size: 12px">NATURAL RATTAN</span><br />
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- end Section 2 -->

<!-- Section 3 -->
<!-- visible on large -->
<div id="about"></div>
<div class="d-none d-lg-block">
  <div class="row w-100" style="margin-top: 150px">
    <div class="col-6">
      <img src="{{ asset('') }}assets/BCR05847.jpg" class="border-radius-small-right w-100 shadow-img-left" alt="" />
    </div>
    <div class="col-2" style="margin-top: -80px">
      <img src="{{ asset('') }}assets/BCR05471.jpg" class="border-radius-small w-100" alt="" />
      &nbsp;
      <img src="{{ asset('') }}assets/BCR05835.jpg" class="border-radius-small w-100 mt-2" alt="" />
    </div>
    <div class="col-4 mt-3">
      <div class="container">
        <p class="fw-bold logo-color">ABOUS US</p>
        <h3 class="section-2-title fw-bold text-about-title">
          Rattan <br />Sanga Sanga<br />
          Cirebon
        </h3>
        <p class="text-secondary mb-5 text-about-secondary">
          We Are Rattan Sanga Sanga Cirebon Indonesia, <br />
          Rattan Furniture Manufacture, Principally involve <br />
          in the design, manufacture and sale of rattan <br />
          furniture product.
        </p>
        <a style="text-decoration: none" class="logo-color" href="">CONTACT US
        </a>
      </div>
    </div>
  </div>
</div>
<!-- visible on medium and small -->
<div class="d-block d-lg-none">
  <div class="row w-100 mt-5">
    <div class="col-12 text-center mb-5">
      <div class="container">
        <p class="fw-bold logo-color">ABOUT US</p>
        <h3 class="section-2-title fw-bold">Rattan Sanga Sanga Cirebon</h3>
        <p class="text-secondary mb-5">
          We Are Rattan Sanga Sanga Cirebon Indonesia, Rattan Furniture
          Manufacture, Principally involve in the design, manufacture and
          sale of rattan furniture product.
        </p>
        <a style="text-decoration: none" class="logo-color" href="">CONTACT US
        </a>
      </div>
    </div>
    <div class="col-6">
      <img src="{{ asset('') }}assets/BCR05835.jpg" class="border-radius-small-right w-100" alt="" />
    </div>
    <div class="col-6">
      <img src="{{ asset('') }}assets/BCR05847.jpg" class="border-radius-small w-100" alt="" />
      &nbsp;<img src="{{ asset('') }}assets/BCR05472.jpg" class="border-radius-small w-100" alt="" />
    </div>
  </div>
</div>
<!-- end Section 3 -->

<!-- section gallery -->
<div id="gallery" style="background: rgb(243, 243, 243)" class="mt-4 pb-5">
  <div class="row w-100 mt-5 text-start">
    <div class="col-sm-12 text-center mb-5 mt-5 logo-color">
      <h1 class="fw-bold">Gallery Rattan</h1>
    </div>
  </div>

  <div class="container">
    <div class="row gallery">
      <div class="col-md-3 col-sm-6 mb-3">
        <a href="{{ asset('') }}assets/gallery/1.jpg">
          <img src="{{ asset('') }}assets/gallery/1.jpg" class="img-fluid zoom" alt="" />
        </a>
      </div>
      <div class="col-md-3 col-sm-6 mb-3">
        <a href="{{ asset('') }}assets/gallery/2.jpg">
          <img src="{{ asset('') }}assets/gallery/2.jpg" class="img-fluid zoom" alt="" />
        </a>
      </div>
      <div class="col-md-3 col-sm-6 mb-3">
        <a href="{{ asset('') }}assets/gallery/3.jpg">
          <img src="{{ asset('') }}assets/gallery/3.jpg" class="img-fluid zoom" alt="" />
        </a>
      </div>
      <div class="col-md-3 col-sm-6 mb-3">
        <a href="{{ asset('') }}assets/gallery/4.jpg">
          <img src="{{ asset('') }}assets/gallery/4.jpg" class="img-fluid zoom" alt="" />
        </a>
      </div>
      <div class="col-md-3 col-sm-6 mb-3">
        <a href="{{ asset('') }}assets/gallery/5.jpg">
          <img src="{{ asset('') }}assets/gallery/5.jpg" class="img-fluid zoom" alt="" />
        </a>
      </div>
      <div class="col-md-3 col-sm-6 mb-3">
        <a href="{{ asset('') }}assets/gallery/6.jpg">
          <img src="{{ asset('') }}assets/gallery/6.jpg" class="img-fluid zoom" alt="" />
        </a>
      </div>
      <div class="col-md-3 col-sm-6 mb-3">
        <a href="{{ asset('') }}assets/gallery/7.jpg">
          <img src="{{ asset('') }}assets/gallery/7.jpg" class="img-fluid zoom" alt="" />
        </a>
      </div>
      <div class="col-md-3 col-sm-6 mb-3">
        <a href="{{ asset('') }}assets/gallery/8.jpg">
          <img src="{{ asset('') }}assets/gallery/8.jpg" class="img-fluid zoom" alt="" />
        </a>
      </div>
    </div>
  </div>
</div>
<!-- end section gallery -->

<!-- Section 4 -->
<!-- visible on large and medium -->
<div class="d-none d-md-block">
  <div class="row w-100 mt-5 text-start">
    <div class="col-sm-12 text-center mb-5 mt-5">
      <h1 class="fw-bold">Why Choosing Us</h1>
    </div>
    <div class="col-sm-2"></div>
    <div class="col-sm-3">
      <div class="d-flex justify-content-center">
        <div>
          <img src="{{ asset('') }}assets/logo/trophy-svgrepo-com.svg" class="img-choosing" alt="" />
        </div>
        <div class="">
          <div>
            <span class="fw-bold header-choosing"></span><b>Quality </b><br />
            <p class="text-choosing">Producting quality furniture</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="d-flex justify-content-center">
        <div>
          <img src="{{ asset('') }}assets/logo/hand-delivery-box-box-svgrepo-com.svg" class="img-choosing" alt="" />
        </div>
        <div class="">
          <div>
            <span class="fw-bold header-choosing"></span><b>Trusted </b><br />
            <p class="text-choosing">Become a trusted furniture company</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="d-flex justify-content-center">
        <div>
          <img src="{{ asset('') }}assets/logo/badge-check-svgrepo-com.svg" class="img-choosing" alt="" />
        </div>
        <div>
          <div>
            <span class="fw-bold header-choosing"></span><b>Global Level </b><br />
            <p class="text-choosing">
              Become a supplier of quality furniture to a global level
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- visible on small -->
<div class="d-block d-md-none">
  <div class="row w-100 mt-5 text-center">
    <div class="col-12 text-center mb-4">
      <h4 class="fw-bold">Why Choosing Us</h4>
    </div>
    <div class="col-4">
      <div>
        <img src="{{ asset('') }}assets/logo/trophy-svgrepo-com.svg" class="" style="width: 40px" alt="" />
      </div>
      <div>
        <span class="header-choosing-small"><b>Quality </b></span><br />
        <p class="text-choosing-small">Producting quality furniture</p>
      </div>
    </div>
    <div class="col-4">
      <img src="{{ asset('') }}assets/logo/hand-delivery-box-box-svgrepo-com.svg" class="" style="width: 40px" alt="" />
      <div>
        <span class="header-choosing-small"><b>Trusted </b></span><br />
        <p class="text-choosing-small">
          Become a trusted furniture company
        </p>
      </div>
    </div>
    <div class="col-4">
      <img src="{{ asset('') }}assets/logo/badge-check-svgrepo-com.svg" class="" style="width: 40px" alt="" />
      <div>
        <span class="header-choosing-small"><b>Global Level </b></span>
        <br />
        <p class="text-choosing-small">
          Become a supplier of quality furniture to a global level
        </p>
      </div>
    </div>
  </div>
</div>
<!-- end Section 4 -->
<div style="height: 100px"></div>
<!-- Section 5 -->
<div id="news"></div>
<div class="p-5 text-justify" style="background: rgb(243, 243, 243)">
  <div class="container text-center">
    <p class="fw-bold logo-color">NEWS</p>
    <h1>Recent Update</h1>
    <!-- visible on large and medium -->
    <div class="d-none d-md-block">
      <div class="row text-start w-100 mt-5">
        <!-- item -->
        <div class="col-4 mt-3">
          <img src="{{ asset('') }}assets/ifex.jpeg" alt="" class="w-100 border-radius-image-small" />
        </div>
        <div class="col-8 p-4">
          <h5 class="fw-bold">International Furniture Expo (IFEX) 2024</h5>
          <small class="text-secondary">20016 - 03</small>
          <p class="text-secondary mt-5">
            International Furniture Expo (IFEX) is an International Trade
            Event that exhibits quality Furniture & Craft products by
            Indonesian Craftsmen.
          </p>
          <p class="fw-bold logo-color">Details</p>
        </div>
        <div class="col-4 mt-3">
          <img src="{{ asset('') }}assets/ifex2023.jpeg" alt="" class="w-100 border-radius-image-small" />
        </div>
        <div class="col-8 p-4">
          <h5 class="fw-bold">International Furniture Expo (IFEX) 2023</h5>
          <small class="text-secondary">20016 - 03</small>
          <p class="text-secondary mt-5">
            International Furniture Expo (IFEX) is an International Trade
            Event that exhibits quality Furniture & Craft products by
            Indonesian Craftsmen.
          </p>
          <p class="fw-bold logo-color">Details</p>
        </div>
        <!-- item -->
        <div class="col-12 text-center mt-5">
          <p class="fw-bold logo-color">
            View All Posts <i class="fas fa-arrow-right"></i>
          </p>
        </div>
      </div>
      <!-- visible on small -->
    </div>
    <!-- visible on small -->
    <div class="d-block d-md-none">
      <div class="row text-start w-100 mt-5">
        <!-- item -->
        <div class="col-12">
          <img src="{{ asset('') }}assets/ifex.jpeg" class="w-100 border-radius-image-small" />
        </div>
        <div class="col-12 p-4">
          <h5 style="font-size: 10px" class="fw-bold">
            International Furniture Expo (IFEX) 2024
          </h5>
          <small class="text-secondary">20016 - 02</small>
          <p class="text-secondary" style="font-size: 10px">
            International Furniture Expo (IFEX) is an International Trade
            Event that exhibits quality Furniture & Craft products by
            Indonesian Craftsmen.
          </p>
          <p class="fw-bold logo-color" style="font-size: 12px">Details</p>
        </div>
        <div class="col-12">
          <img src="{{ asset('') }}assets/ifex2023.jpeg" class="w-100 border-radius-image-small" />
        </div>
        <div class="col-12 p-4">
          <h5 style="font-size: 10px" class="fw-bold">
            International Furniture Expo (IFEX) 2023
          </h5>
          <small class="text-secondary">20016 - 02</small>
          <p class="text-secondary" style="font-size: 10px">
            International Furniture Expo (IFEX) is an International Trade
            Event that exhibits quality Furniture & Craft products by
            Indonesian Craftsmen.
          </p>
          <p class="fw-bold logo-color" style="font-size: 12px">Details</p>
        </div>
        <!-- item -->
        <div class="col-12 text-center mt-5">
          <p class="fw-bold logo-color">
            View All Posts <i class="fas fa-arrow-right"></i>
          </p>
        </div>
      </div>
      <!-- visible on small -->
    </div>
  </div>
</div>
<!-- end Section 5 -->

<!-- Section 6 -->
<div style="background: rgb(243, 243, 243)" class="d-none d-lg-block">
  <div class="row w-100">
    <div class="col-sm-7 bg-white border-radius-right-top">
      <div class="container w-100 mt-5">
        <p class="fw-bold text-center" style="font-size: 16px">
          <i class="fas fa-envelope text-secondary"></i>
          Subscribe Newsletter
        </p>
        <div class="d-flex justify-content-center w-100">
          <input type="text" placeholder="Enter your Name" style="width: 200px" class="form-control me-2" />
          <input type="email" placeholder="Enter your e-mail" style="width: 200px" class="form-control me-2" />
          <button class="btn" style="background: #a38b00">
            <i class="fas fa-paper-plane text-white"></i>
          </button>
        </div>
      </div>
    </div>
    <div class="col-sm-5">
      <div class="text-end w-100">
        <img src="{{ asset('') }}assets/BCR05472.jpg" class="rounded" style="margin-bottom: -100px; width: 88%"
          alt="" />
      </div>
    </div>
  </div>
</div>
<div class="d-block d-lg-none mt-5">
  <p class="fw-bold text-center" style="font-size: 16px">
    <i class="fas fa-envelope text-secondary"></i>
    Subscribe Newsletter
  </p>
  <div class="row w-100">
    <div class="col-sm-3 col-1"></div>
    <div class="col-sm-6 col-10">
      <div class="row w-100">
        <div class="col-5">
          <input type="email" placeholder="Enter your e-mail" class="form-control me-2" />
        </div>
        <div class="col-5">
          <input type="email" placeholder="Enter your e-mail" class="form-control me-2" />
        </div>
        <div class="col-2">
          <button class="btn" style="background: #a38b00">
            <i class="fas fa-paper-plane text-white"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end Section 6 -->
<script>
  $(document).ready(function () {
    $(".gallery").magnificPopup({
      delegate: "a",
      type: "image",
      tLoading: "Loading image #%curr%...",
      mainClass: "mfp-img-mobile",
      gallery: {
        enabled: true,
        navigateByImgClick: true,
        tPrev: "Previous (Left arrow key)",
        tNext: "Next (Right arrow key)",
        tCounter: "%curr% of %total%",
        preload: [0, 1],
      },
      image: {
        tError: '<a href="%url%">The Image #%curr%</a> Tidak Dapat Diproses',
        titleSrc: function (item) {
          return (
            item.el.attr("title") +
            "<small>" +
            item.el.attr("decs") +
            "</small>"
          );
        },
      },
    });
  });
</script>
@endsection