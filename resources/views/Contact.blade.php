@extends('Layouts.temp')

 @section('title','Contact')
 @section('Content')


@php
$settings = App\Models\Setting::first();
@endphp

<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5">
                <span class="px-2">Get In Touch</span>
            </p>
            <h1 class="mb-4">Contact Us For Any Query</h1>
        </div>
        <div class="row">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <!-- Form starts here -->
                    <form method="POST" action="{{ route('contact.submit') }}" id="contactForm" novalidate="novalidate">
                        @csrf  <!-- Laravel CSRF protection -->

                        <div class="control-group">
                            <input
                                type="text"
                                class="form-control"
                                name="name"
                                placeholder="Your Name"
                                required="required"
                                data-validation-required-message="Please enter your name"
                            />
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="control-group">
                            <input
                                type="email"
                                class="form-control"
                                name="email"
                                placeholder="Your Email"
                                required="required"
                                data-validation-required-message="Please enter your email"
                            />
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="control-group">
                            <input
                                type="text"
                                class="form-control"
                                name="subject"
                                placeholder="Subject"
                                required="required"
                                data-validation-required-message="Please enter a subject"
                            />
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="control-group">
                            <textarea
                                class="form-control"
                                rows="6"
                                name="message"
                                placeholder="Message"
                                required="required"
                                data-validation-required-message="Please enter your message"
                            ></textarea>
                            <p class="help-block text-danger"></p>
                        </div>

                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Contact Details -->
            <div class="col-lg-5 mb-5">
                <p>
                    Labore sea amet kasd diam justo amet ut vero justo. Ipsum ut et kasd duo sit, ipsum sea et erat est dolore, magna ipsum et magna elitr. Accusam accusam lorem magna, eos et sed eirmod dolor est eirmod eirmod amet.
                </p>
                <div class="d-flex">
                    <i class="fa fa-map-marker-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle" style="width: 45px; height: 45px"></i>
                    <div class="pl-3">
                        <h5>Address</h5>
                        <p>123 Street, New York, USA</p>
                    </div>
                </div>
                <div class="d-flex">
                    <i class="fa fa-envelope d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle" style="width: 45px; height: 45px"></i>
                    <div class="pl-3">
                        <h5>Email</h5>
                        <p>info@example.com</p>
                    </div>
                </div>
                <div class="d-flex">
                    <i class="fa fa-phone-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle" style="width: 45px; height: 45px"></i>
                    <div class="pl-3">
                        <h5>Phone</h5>
                        <p>+012 345 67890</p>
                    </div>
                </div>
                <div class="d-flex">
                    <i class="far fa-clock d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle" style="width: 45px; height: 45px"></i>
                    <div class="pl-3">
                        <h5>Opening Hours</h5>
                        <strong>Sunday - Friday:</strong>
                        <p class="m-0">08:00 AM - 05:00 PM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

 @endsection