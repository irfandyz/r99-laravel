@extends('template')
@section('content')

<div class="container mt-3" style="background: white">
  <div class="d-flex justify-content-between">
    <div class="">
      <h3 class="fw-bold mb-3 logo-color">
        <a href="{{ asset('') }}"><i class="fas fa-backward me-3 text-secondary"></i></a> 
        {{ $type }} Rattan
      </h3>
    </div>
    <div class="">
      <a class="btn border-none fw-bold text-white" style="background: #4f2f13;" data-bs-toggle="offcanvas"
        href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
        <i class="fas fa-bars"></i> CATEGORIES
      </a>
    </div>
  </div>
  <div class="row mt-4 mb-4">
    @foreach ($data as $item)
      <div class="col-md-3 col-lg-2 col-6 mt-3">
        <div class="border hover-border bg-white">
          <a href="{{ asset('') }}modern/product?category={{ $item->name }}" class="text-decoration-none">
            <img src="{{ asset('').$item->product[0]->url }}thumbnail.png" class="img-fluid" alt="">
            <h5 class="text-center mb-3 logo-color">{{ $item->name }}</h5>
          </a>
        </div>
      </div>
    @endforeach
  </div>
  {{$data->withQueryString()->links('pagination::bootstrap-5')}}
</div>


