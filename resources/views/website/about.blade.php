@extends('website.layouts.website')

@section('content')
<style>
    .image {
        max-width: 90%;
        height: auto;
        overflow: hidden;
    }


    .image img {
        width: 100%;
        height: auto;
    }

    .lead-2 {
        text-align: justify;
        text-justify: inter-word;
        line-height: 1.5;
        margin-bottom: 20px;
    }
    .lead-4{
        font-size: 25px;
    }

    .container-second {
    margin-top: 50px;
    margin-bottom: 40px;
  }

  .values-heading {
    padding-top: 50px;
    padding-bottom: 25px;
    border-bottom: 1px solid white;
    text-align: center;

  }
  .col-md-6 p {
    margin-top: 0;
    text-align: justify;
        text-justify: inter-word;
  }

  .card {
  height: 250px; /* Set a fixed height for the cards */
  /* Prevent content overflow */

}

.icon {
        display: inline-block;
        padding: 3px; /* Adjust padding as desired */

    }

    .icon i {
        color: #9ACD32; /* Set the icon color to light grey */
        font-size: 30px; /* Increase the icon size */
    }

    .action-btn .btn {
    color: white;

}

.action-btn .btn:hover {
    color: #9ACD32;
    background-color: white;
}

.bg-light-gray {
        background-color: #c6ced6d1;
    }

<style>
    .hero-section {

    }

    @media (max-width: 768px) {
        .hero-section {
            padding-top: 50px;
        }

        .custom-hero-content {
            text-align: center;
        }
    }
</style>




</style>

<section class="hero-section pt-100" style="position: relative;">
    <div class="background-img" style="background: url('{{ asset('images/smiling.jpg') }}') no-repeat center center / cover; position: relative; height:200px;">
        <div class="image-overlay" style="background-color: rgba(0, 123, 255, 0.5); width: 100%; height: 100%; position: absolute; top: 0; left: 0;"></div>
        <div class="container">
            <div class="custom-hero-content d-flex flex-column align-items-center justify-content-center">
                <h1 class="text-white" style="padding-top: 66px; font-weight: 1000; position: relative; z-index: 1;">
                   ABOUT US
                </h1>

                <div class="action-btn mt-4" style="position: relative; z-index: 1;">
                    <a href="{{ route('welcome') }}" class="btn solid-btn hero" style="font-weight: bold; font-size: 20px;">Home</a>
                    <a href="{{ route('about') }}" class="btn solid-btn hero" style="font-weight: bold; font-size: 20px;">About Us</a>
                </div>
            </div>
        </div>
    </div>
</section>





@endsection
