@extends('front.layouts.app')
@section('title','Home')
@section('content')
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Services</h1>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy
                        text
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="index.html">Home</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section class="services style3 section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <span class="wow fadeInDown" data-wow-delay=".2s">Services</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">
                        Services we offer for you
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">
                        There are many variations of passages of Lorem Ipsum available,
                        but the majority have suffered alteration in some form.
                    </p>
                    <h3 class="overlay-text">Services</h3>
                </div>
            </div>
        </div>
        <div class="single-head">
            <div class="row">
                <?php $sn =1 ;
                                ?>
                @foreach($services as $service)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-service wow fadeInUp" data-wow-delay=".2s">

                        <span class="serial">{{$service->id}}</span>
                        <h3>
                            <a href="/services-detail">{{$service->title}}</a>
                        </h3>
                        <p>
                            {{$service->description}}
                        </p>
                        <div class="button">
                            <a href="/services-detail" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-service wow fadeInUp" data-wow-delay=".4s">
                        <span class="serial">02</span>
                        <h3>
                            <a href="/services-detail">General Consulting Process</a>
                        </h3>
                        <p>
                            We dejoy working with discerning clients, people for whom
                            qualuty, service, integrity & aesthetics.
                        </p>
                        <div class="button">
                            <a href="/services-detail" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-service wow fadeInUp" data-wow-delay=".6s">
                        <span class="serial">03</span>
                        <h3>
                            <a href="/services-detail">Hire in Fixed Contracting</a>
                        </h3>
                        <p>
                            We dejoy working with discerning clients, people for whom
                            qualuty, service, integrity & aesthetics.
                        </p>
                        <div class="button">
                            <a href="/services-detail" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-service wow fadeInUp" data-wow-delay=".2s">
                        <span class="serial">04</span>
                        <h3><a href="/services-detail">Marketing Solutions</a></h3>
                        <p>
                            We dejoy working with discerning clients, people for whom
                            qualuty, service, integrity & aesthetics.
                        </p>
                        <div class="button">
                            <a href="/services-detail" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-service wow fadeInUp" data-wow-delay=".4s">
                        <span class="serial">05</span>
                        <h3><a href="/services-detail">Business Analytics</a></h3>
                        <p>
                            We dejoy working with discerning clients, people for whom
                            qualuty, service, integrity & aesthetics.
                        </p>
                        <div class="button">
                            <a href="/services-detail" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-service wow fadeInUp" data-wow-delay=".6s">
                        <span class="serial">06</span>
                        <h3><a href="/services-detail">UX & UI Design</a></h3>
                        <p>
                            We dejoy working with discerning clients, people for whom
                            qualuty, service, integrity & aesthetics.
                        </p>
                        <div class="button">
                            <a href="/services-detail" class="btn">Read More</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>

@endsection