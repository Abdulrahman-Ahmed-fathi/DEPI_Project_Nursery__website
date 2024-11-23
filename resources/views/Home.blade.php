@extends('Layouts.temp')

@section('title', 'kidkinder')

@section('Content')


    <!-- Facilities Start -->
    <div class="container-fluid pt-5">
        <div class="container pb-3">
            <div class="row">
                @foreach ($facilities as $facility)
                    <div class="col-lg-4 col-md-6 pb-1">
                        <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px">
                            <i class="{{ $facility->icon }} h1 font-weight-normal text-primary mb-3"></i>
                            <div class="pl-4">
                                <h4>{{ $facility->name }}</h4>
                                <p class="m-0">
                                    {{ $facility->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Facilities End -->



    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-5 mb-lg-0" src="img/about-1.jpg" alt="" />
                </div>
                <div class="col-lg-7">
                    <p class="section-title pr-5">
                        <span class="pr-2">Learn About Us</span>
                    </p>
                    <h1 class="mb-4">Best School For Your Kids</h1>
                    <p>
                        Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo
                        dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.
                        Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                        dolor
                    </p>
                    <div class="row pt-2 pb-4">
                        <div class="col-6 col-md-4">
                            <img class="img-fluid rounded" src="img/about-2.jpg" alt="" />
                        </div>
                        <div class="col-6 col-md-8">
                            <ul class="list-inline m-0">
                                <li class="py-2 border-top border-bottom">
                                    <i class="fa fa-check text-primary mr-3"></i>Labore eos amet
                                    dolor amet diam
                                </li>
                                <li class="py-2 border-bottom">
                                    <i class="fa fa-check text-primary mr-3"></i>Etsea et sit
                                    dolor amet ipsum
                                </li>
                                <li class="py-2 border-bottom">
                                    <i class="fa fa-check text-primary mr-3"></i>Diam dolor diam
                                    elitripsum vero.
                                </li>
                            </ul>
                        </div>
                    </div>
                   <!-- <a href="" class="btn btn-primary mt-2 py-2 px-4">Learn More</a>-->
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

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

    <!-- Registration Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <p class="section-title pr-5">
                        <span class="pr-2">Book A Seat</span>
                    </p>
                    <h1 class="mb-4">Book A Seat For Your Kid</h1>
                    <p>
                        Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo
                        dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.
                        Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                        dolor
                    </p>
                    <ul class="list-inline m-0">
                        <li class="py-2">
                            <i class="fa fa-check text-success mr-3"></i>Labore eos amet
                            dolor amet diam
                        </li>
                        <li class="py-2">
                            <i class="fa fa-check text-success mr-3"></i>Etsea et sit dolor
                            amet ipsum
                        </li>
                        <li class="py-2">
                            <i class="fa fa-check text-success mr-3"></i>Diam dolor diam
                            elitripsum vero.
                        </li>
                    </ul>
                 
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-secondary text-center p-4">
                            <h1 class="text-white m-0">Book A Seat</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                                <div>
                                     <a href="http://127.0.0.1:8000/book-seat" class="btn btn-secondary btn-block border-0 py-3">Book Now</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->

    <!-- Team Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Our Teachers</span>
                </p>
                <h1 class="mb-4">Meet Our Teachers</h1>
            </div>
            <div class="row">
                @foreach ($teachers as $teacher)
                    <div class="col-md-6 col-lg-3 text-center team mb-5">
                        <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                            <img class="img-fluid w-100" src="{{ $teacher->photo }}" alt="{{ $teacher->name }}" />
                        </div>
                        <h4>{{ $teacher->name }}</h4>
                        <i>{{ $teacher->subject }}</i>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->



    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container p-0">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Testimonial</span>
                </p>
                <h1 class="mb-4">What Parents Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                @foreach ($testimonials as $testimonial)
                    <div class="testimonial-item px-3">
                        <div class="bg-light shadow-sm rounded mb-4 p-4">
                            <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                            {{ $testimonial->quote }}
                        </div>
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" src="{{ $testimonial->photo }}"
                                style="width: 70px; height: 70px" alt="{{ $testimonial->parent_name }}" />
                            <div class="pl-3">
                                <h5>{{ $testimonial->parent_name }}</h5>
                                <i>{{ $testimonial->profession }}</i>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->




@endsection
