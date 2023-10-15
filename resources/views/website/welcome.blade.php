@extends('website.layouts.website')

@section('body')

<style>

    .h1{
        font-size: 100px;
    }

    .lead {
        line-height: 2;
        font-size: 20px;
    }



    .hero-content-left {
        text-align: left;
    }

    .row.align-items-center.justify-content-between.py-5 {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 10rem;
        padding-bottom: 15rem;
    }

    .action-btn .btn {
        border-radius: 30px;
        background-color: rgb(0, 221, 255);
        color: white;
        padding: 12px 24px;
        transition: background-color 0.3s ease;
    }

    .action-btn .btn:hover {
        background-color: white;
        color: blue;
    }

    .hero-content-left .lead {
    margin-bottom: 2rem;
}

    @media (max-width: 768px) {
        .row.align-items-center.justify-content-between.py-5 {
            flex-direction: column;
        }
    }
</style>

<section class="hero-section pt-100 background-img" style="background: url('{{ asset('images/i.jpg') }}') no-repeat center center / cover; height: 700px;">
    <div class="container">
        <div class="row align-items-center justify-content-between py-5">
            <div class="col-md-7 col-lg-6">
                <div class="hero-content-left text-white">
                    <h4>WELCOME</h4>
                    <h1 class="text-white font-weight-bold">
                        JUBARI
                    </h1>
                    <p class="lead">
                        Revolutionize school management with our all-in-one system.<br> Effortlessly track student performance, engage parents, and optimize <br> educational outcomes for enhanced student success. Experience<br> seamless administration and unlock your school's full potential.
                    </p>

                    <div class="action-btn mt-4">
                        <a href="{{ route('register') }}" class="btn solid-btn hero">Register</a>
                        <div class="btn-stroke"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
