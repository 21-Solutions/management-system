@extends('website.layouts.website')

@section('body')

<section class="hero-section pt-100 background-img" style="background: url('{{ asset('images/about.jpg') }}') no-repeat center center / cover; height: 200px;">
    <div class="container">
        <div class="row align-items-center justify-content-center py-5">
            <div class="col-md-7 col-lg-6">
                <div class="hero-content-left text-white text-center">
                    <h1>WELCOME</h1>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
