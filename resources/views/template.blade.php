<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Rattan Sanga Sanga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="image_src" href="{{ asset('') }}assets/BCR05498.jpg" />
    <link rel="icon" href="{{ asset('') }}assets/logo/logo.svg" type="image/icon type" />
    <link rel="stylesheet" href="{{ asset('') }}new-style.css" />
    <script src="{{ asset('') }}assets/popup/jquery.js"></script>
    <link rel="stylesheet" href="{{ asset('') }}assets/popup/magnific-popup.css" />
    <script src="{{ asset('') }}assets/popup/jquery.magnific-popup.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark static-top autohide" style="background: #4f2f13; opacity: 0.7">
        <div class="container">
            <a class="navbar-brand" href="{{ asset('') }}">
                <img src="{{ asset('') }}assets/logo/logo-white.svg" class="logo-color" alt="..." height="36" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white bw-bold" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white bw-bold" href="#product">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white bw-bold" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white bw-bold" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white bw-bold" href="#news">News</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <!-- Footer Section 7 -->
    <div id="contact"></div>

    <div class="d-none d-md-block" style="margin-top: 100px"></div>
    <div class="container mt-5">
        <img src="{{ asset('') }}assets/logo/logo.svg" width="100px" alt="" />
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="fw-bold title-footer">CV. RATTAN SANGA SANGA</p>
                        <p class="text-footer">
                            Jl. Kisabalang no. 117 <br />
                            DS. Bode Lor, kec Plumbon <br />
                            Kab. Cirebon, WEST JAVA <br />
                            INDONESIA 45155
                        </p>
                    </div>
                    <div class="col-md-6 text-center">
                        <div class="d-none d-md-block">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{ asset('') }}assets/logo/legal-color.svg" width="40%" alt="" />
                                </div>
                                <div class="col-12 mt-2">
                                    <img src="{{ asset('') }}assets/logo/BSCI-color.svg" width="40%" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="d-block d-md-none mb-5">
                            <div class="row mt-2">
                                <div class="col-8">
                                    <img src="{{ asset('') }}assets/logo/legal-bsci.png" class="img-fluid" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row w-100">
                    <div class="col-4">
                        <div class="ms-3">
                            <p class="fw-bold link-header">Quick Link</p>
                            <a href="#home" class="link-footer nav-link">Home</a>
                            <a href="#product" class="link-footer nav-link mt-2">Product</a>
                            <a href="#gallery" class="link-footer nav-link mt-2">Gallery</a>
                            <a href="#about" class="link-footer nav-link mt-2">About Us</a>
                            <a href="#news" class="link-footer nav-link mt-2">News</a>
                        </div>
                    </div>
                    <div class="col-8">
                        <p class="fw-bold link-header">Recent Update</p>
                        <a href="#" class="link-footer nav-link">International Furniture Expo (IFEX) 2024</a>
                        <a href="#" class="link-footer nav-link">International Furniture Expo (IFEX) 2023</a>
                    </div>
                </div>
            </div>
        </div>
        <p style="font-size: 18px" class="fw-bold mt-4">Contact Us</p>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-3">
                        <p class="link-footer nav-link">SEPTIAN</p>
                        <p class="link-footer nav-link">ANDI</p>
                    </div>
                    <div class="col-5">
                        <p class="link-footer nav-link">ian.rattan99cirebon@gmail.com</p>
                        <p class="link-footer nav-link">andi.rattan99cirebon@gmail.com</p>
                    </div>
                    <div class="col-4">
                        <p class="link-footer nav-link">+62 822 1817 1189</p>
                        <p class="link-footer nav-link">+62 853 5377 5799</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 w-100 text-end">
                <div class="mt-4">
                    <a class="btn-footer" style="padding: 10px 15px" href="#"><i
                            class="fa-brands fa-facebook-f"></i></a>
                    <a class="btn-footer" style="padding: 10px 13px" href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a class="btn-footer" style="padding: 10px 13px" href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a class="btn-footer" style="padding: 10px 15px" href="#"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        <hr class="mt-3" />
        <div class="d-flex justify-content-between">
            <div class="footer-text">
                Copyright <i class="fas fa-copyright"></i> 2023 R99 All Right Reserved
            </div>
            <div class="footer-text mb-4">
                <span>Term & Conditions</span>
                <span class="ms-4">Privacy Policy</span>
            </div>
        </div>
    </div>
    <!-- end Section 7 -->
    <!-- offcanvas -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h3 class="offcanvas-title fw-bold" id="offcanvasExampleLabel">Categories</h3>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="container">
        <h5 class="text-secondary fw-bold">Modern Rattan</h5>
        <div class="container" style="list-style: none;">
            @foreach (\App\Models\Category::where('type','Modern')->get(); as $item)
                <li class="mt-2"><a class="text-decoration-none text-dark" href="{{ asset('modern/product?category='.$item->name) }}"><i class="fas fa-forward fw-bold"></i> {{ $item->name }}</a></li>
            @endforeach
        </div>
        <h5 class="text-secondary fw-bold mt-4">Natural Rattan</h5>
        <div class="container" style="list-style: none;">
          @foreach (\App\Models\Category::where('type','Natural')->get(); as $item)
                <li class="mt-2"><a class="text-decoration-none text-dark" href="{{ asset('natural/product?category='.$item->name) }}"><i class="fas fa-forward fw-bold"></i> {{ $item->name }}</a></li>
            @endforeach
        </div>
      </div>
    </div>
  </div>
  
  <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(){
          
          el_autohide = document.querySelector('.autohide');
          
          // add padding-top to bady (if necessary)
          navbar_height = document.querySelector('.navbar').offsetHeight;
          document.body.style.paddingTop = navbar_height + 'px';
  
          if(el_autohide){
              
              var last_scroll_top = 0;
              window.addEventListener('scroll', function() {
                     let scroll_top = window.scrollY;
                 if(scroll_top < last_scroll_top) {
                      el_autohide.classList.remove('scrolled-down');
                      el_autohide.classList.add('scrolled-up');
                  }
                  else {
                      el_autohide.classList.remove('scrolled-up');
                      el_autohide.classList.add('scrolled-down');
                  }
                  last_scroll_top = scroll_top;
  
              }); 
              // window.addEventListener
  
          }
          // if
          
      }); 
      // DOMContentLoaded  end
  </script>
</body>

</html>