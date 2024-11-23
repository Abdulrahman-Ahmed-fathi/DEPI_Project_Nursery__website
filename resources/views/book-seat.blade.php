@extends('Layouts.temp')

@section('title', 'kidkinder')

@section('Content')


<!-- Book A Seat Form -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <p class="section-title pr-5">
                    <span class="pr-2">Book A Seat</span>
                </p>
                <h1 class="mb-4">Book A Seat For Your Kid</h1>
                <p>
                    Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
                    ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est dolor.
                </p>
                <ul class="list-inline m-0">
                    <li class="py-2">
                        <i class="fa fa-check text-success mr-3"></i>Labore eos amet dolor amet diam
                    </li>
                    <li class="py-2">
                        <i class="fa fa-check text-success mr-3"></i>Etsea et sit dolor amet ipsum
                    </li>
                    <li class="py-2">
                        <i class="fa fa-check text-success mr-3"></i>Diam dolor diam elitripsum vero.
                    </li>
                </ul>
            </div>
            <div class="col-lg-5">
                <div class="card border-0">
                    <div class="card-header bg-secondary text-center p-4">
                        <h1 class="text-white m-0">Book A Seat</h1>
                    </div>
                    <div class="card-body rounded-bottom bg-primary p-5">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <form action="{{ route('book-seat.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control border-0 p-4" placeholder="Your Name"
                                       required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control border-0 p-4" placeholder="Your Email"
                                       required="required" />
                            </div>
                            <div class="form-group">
                                <select name="course" class="custom-select border-0 px-4" style="height: 47px" required>
                                    <option selected disabled>Select A Class</option>
                                    @foreach($courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->name }} 
                                        ({{ $course->age_group_start }}-{{ $course->age_group_end }} years)
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <button class="btn btn-secondary btn-block border-0 py-3" type="submit">
                                    Book Now
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
