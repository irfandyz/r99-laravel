@extends('template')
@section('content')

<div class=" mt-3" style="background: white">
  <div class="mt-3">
    <div class="p5">
      <div class="">
        <div class="d-flex justify-content-between">
          <div class="">
            <h3 class="fw-bold mb-3 logo-color">
              <a href="{{ asset("").strtolower($category->type) }}"><i class="fas fa-backward me-3 text-secondary"></i></a> 
              {{ $request->category }}
            </h3>
          </div>
          <div class="">
            <a class="btn border-none fw-bold text-white" style="background: #4f2f13;" data-bs-toggle="offcanvas"
              href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
              <i class="fas fa-bars"></i> CATEGORIES
            </a>
          </div>
        </div>
      </div>  
      @if ($data)
      <div class="row gallery mb-4">
        @foreach ($data as $item)
            <div class="col-lg-2 col-md-3 col-sm-6 mt-3">
              <div class="shadow-product bg-white pb-3">
                <a href="{{ asset('').$item->path }}" class="text-decoration-none">
                  <img src="{{ asset('').$item->path }}" class="img-fluid" alt="">
                  <p class="text-center logo-color" style="font-size: 14px">{{ $item->name }}</p>
                </a>
              </div>
            </div>
        @endforeach
      </div>
      {{$data->withQueryString()->links('pagination::bootstrap-5')}}
      @else
        <h1 class="text-center">Page Not Found</h1>
      @endif
    </div>
  </div>
</div>
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


