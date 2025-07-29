@extends('site.layouts.app')

@section('content')
    <section class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1>Welcome to Our Site</h1>
                    <h2>Your one-stop solution for all your needs</h2>
                    <a href="#services" class="btn-get-started scrollto">Get Started</a>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('site/assets/img/hero-img.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section> 

    @endsection
               

