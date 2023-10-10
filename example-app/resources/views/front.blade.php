@extends('front_master')
@section('content')
    


   <div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Tourist</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
       @include('around.navbar');
    </nav>
    @include('around.search_home');
</div>
    <!-- Navbar & Hero End -->


    <!-- About Start -->
    @include('around.about')
    <!-- About End -->


    <!-- Service Start -->
   @include('around.services')
    <!-- Service End -->


    <!-- Destination Start -->
    @include('around.destination');
    </div>
    <!-- Destination Start -->


    <!-- Package Start -->
    @include('around.packages')
    <!-- Package End -->


    <!-- Booking Start -->
   @include('around.booking')
    <!-- Booking Start -->


    <!-- Process Start -->
    @include('around.process')
    <!-- Process Start -->


    <!-- Team Start -->
   @include('around.team')
    <!-- Team End -->


    <!-- Testimonial Start -->
    @include('around.testimonial')
    <!-- Testimonial End -->
        

    <!-- Footer Start -->
    <!-- Footer End -->

    @endsection
    <!-- Back to Top -->
    