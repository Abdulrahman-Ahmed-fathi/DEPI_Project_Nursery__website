@extends('Layouts.temp')

 @section('title','Classes')
 @section('Content')

    <!-- Class Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Popular Classes</span>
                </p>
                <h1 class="mb-4">Classes for Your Kids</h1>
            </div>
            <div class="row">
                @foreach ($courses as $course)
                    <div class="col-lg-4 mb-5">
                        <div class="card border-0 bg-light shadow-sm pb-2">
                            <img class="card-img-top mb-2" src="img/class-{{ $course->id }}.jpg"
                                alt="{{ $course->name }}" />
                            <div class="card-body text-center">
                                <h4 class="card-title">{{ $course->name }}</h4>
                                <p class="card-text">
                                    Justo ea diam stet diam ipsum no sit, ipsum vero et et diam ipsum duo et no et, ipsum
                                    erat duo amet clita duo.
                                </p>
                            </div>
                            <div class="card-footer bg-transparent py-4 px-5">
                                <div class="row border-bottom">
                                    <div class="col-6 py-1 text-right border-right">
                                        <strong>Age of Kids</strong>
                                    </div>
                                    <div class="col-6 py-1">{{ $course->age_group_start }} - {{ $course->age_group_end }}
                                        Years</div>
                                </div>
                                <div class="row border-bottom">
                                    <div class="col-6 py-1 text-right border-right">
                                        <strong>Total Seats</strong>
                                    </div>
                                    <div class="col-6 py-1">{{ $course->seats }} Seats</div>
                                </div>
                                <div class="row border-bottom">
                                    <div class="col-6 py-1 text-right border-right">
                                        <strong>Class Time</strong>
                                    </div>
                                    <div class="col-6 py-1">{{ $course->class_time }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-6 py-1 text-right border-right">
                                        <strong>Tuition Fee</strong>
                                    </div>
                                    <div class="col-6 py-1">${{ $course->tuition_fee }} / Month</div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Class End -->

  
 @endsection