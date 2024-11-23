@extends('Layouts.temp')
 
 @section('title','Gallery')


@section('content')
    <!-- Gallery Start -->
    <div class="container-fluid pt-5 pb-3">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Our Gallery</span>
          </p>
          <h1 class="mb-4">Our Kids School Gallery</h1>
        </div>
        <div class="row">
          <div class="col-12 text-center mb-2">
            <ul class="list-inline mb-4" id="portfolio-flters">
              <li class="btn btn-outline-primary m-1 active" data-filter="*">All</li>
              @foreach($categories as $category)
                <li class="btn btn-outline-primary m-1" data-filter=".{{ strtolower($category->name) }}">
                  {{ $category->name }}
                </li>
              @endforeach
            </ul>
          </div>
        </div>

        <!-- Images for the gallery -->
        <div class="row portfolio-container">
          @foreach($categories as $category)
            @foreach($category->images as $image)
              <div class="col-lg-4 col-md-6 mb-4 portfolio-item {{ strtolower($category->name) }}">
                <div class="position-relative overflow-hidden mb-2">
                  <img class="img-fluid w-100" src="{{ asset($image->image_url) }}" alt="Gallery Image" />
                  <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                    <a href="{{ asset($image->image_url) }}" data-lightbox="portfolio">
                      <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                    </a>
                  </div>
                </div>
              </div>
            @endforeach
          @endforeach
        </div>
      </div>
    </div>
    <!-- Gallery End -->
@endsection
