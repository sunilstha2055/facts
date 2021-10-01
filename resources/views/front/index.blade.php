@extends('front.layouts.app')
@section('title','Home')
@section('content')
<section class="hero-area style2">
    <div class="hero-slider">
        @foreach($sliders as $slider)
        <div class="hero-inner style2 overlay"
            style="background-image: url({{ asset('assets/image/slider/' . $slider->image) }});">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-7 co-12">
                        <div class="home-slider">
                            <div class="hero-text">
                                <h5 class="wow fadeInUp" data-wow-delay=".2s">{{$slider->title1}}</h5>
                                <h1 class="wow fadeInUp" data-wow-delay=".4s">{{$slider->title2}}</h1>
                                <p class="wow fadeInUp" data-wow-delay=".6s">Lorem Ipsum is simply dummy text of the
                                    printing and typesetting <br> industry. Lorem Ipsum has been the industry's
                                    standard
                                    <br>dummy text ever since.
                                </p>
                                <div class="button wow fadeInUp" data-wow-delay=".8s">
                                    <a href="about-us.html" class="btn">Discover More</a>
                                    <a href="https://www.youtube.com/watch?v=r44RKWyfcFw&amp;fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM"
                                        class="glightbox video btn"><i class="lni lni-play"></i> Play Video</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


        <!-- <div class="hero-inner style2 overlay"
            style="background-image: url({{asset('images/hero/hero-slider2.jpg')}});">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-7 co-12">
                        <div class="home-slider">
                            <div class="hero-text">
                                <h5 class="wow fadeInUp" data-wow-delay=".2s">Let’s grow your business with us.</h5>
                                <h1 class="wow fadeInUp" data-wow-delay=".4s">Designing awesome brands & experiences
                                </h1>
                                <p class="wow fadeInUp" data-wow-delay=".6s">Lorem Ipsum is simply dummy text of the
                                    printing and typesetting <br> industry. Lorem Ipsum has been the industry's
                                    standard
                                    <br>dummy text ever since.
                                </p>
                                <div class="button wow fadeInUp" data-wow-delay=".8s">
                                    <a href="about-us.html" class="btn">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

    </div>
</section>


<section class="features style2 section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <span class="wow fadeInDown" data-wow-delay=".2s">Our Features</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">We Have The Main Features to Run The Business</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                        Ipsum available, but the majority have suffered alteration in some form.</p>
                    <h3 class="overlay-text">Features</h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($features as $feature)
            <div class="col-lg-4 col-md-6 col-12">

                <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
                    <i class="{{$feature->icon_name}}"></i>
                    <h3><a href="#">{{$feature->title}}</a></h3>
                    <p>{{$feature->description}}</p>
                </div>

            </div>
            @endforeach
            <!-- <div class="col-lg-4 col-md-6 col-12">

                <div class="single-feature wow fadeInUp" data-wow-delay=".4s">
                    <i class="lni lni-briefcase"></i>
                    <h3><a href="#">Business Planning</a></h3>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vul esse molestie consequat vel illum.</p>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12">

                <div class="single-feature wow fadeInUp" data-wow-delay=".6s">
                    <i class="lni lni-select"></i>
                    <h3><a href="#">Brand Development</a></h3>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vul esse molestie consequat vel illum.</p>
                </div>

            </div> -->
        </div>
    </div>
</section>


<section class="about-us section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="about-left">
                    <div class="section-title align-left">
                        <span class="wow fadeInDown" data-wow-delay=".2s">Every day brings new challenges</span>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">We are a full-service creative agency</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, do eius mod tempor incididunt ut labore et dolore magna aliqua. Ut
                            enim ad min im veniam, quis nostrud exercitati ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.</p>
                        <p class="wow fadeInUp" data-wow-delay=".8s">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, do eius mod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad min im veniam.</p>
                        <div class="author wow fadeInUp" data-wow-delay="1s">
                            <img src="assets/images/about/author.png" alt="#">
                            <div class="content">
                                <h5>MAX SCOFILD, <a href="#">@Google</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="about-right wow fadeInRight" data-wow-delay=".4s">
                    <img src="{{asset('images/about/about-img2.png')}}" alt="#">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="services style2 section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <span class="wow fadeInDown" data-wow-delay=".2s">Services</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Services we offer for you</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                        Ipsum available, but the majority have suffered alteration in some form.</p>
                    <h3 class="overlay-text">Services</h3>
                </div>
            </div>
        </div>
        <div class="single-head">
            <div class="row">
                @foreach($services as $service)
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-service wow fadeInUp" data-wow-delay=".2s">
                        <img src="{{ asset('assets/image/service/' . $service->image) }}" alt="#" />
                        <h3><a href="service-single.html">{{$service->title}}</a></h3>
                        <p>{{$service->description}}
                        </p>
                        <a href="service-single.html" class="more">Learn More <i class="lni lni-arrow-right"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


<section class="our-achievement section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="single-achievement wow fadeInUp" data-wow-delay=".2s">
                    <h3 class="counter"><span id="secondo1" class="countup" cup-end="5">5</span>M+</h3>
                    <p>Customers visit Omega every month to get their service done.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="single-achievement wow fadeInUp" data-wow-delay=".4s">
                    <h3 class="counter"><span id="secondo2" class="countup" cup-end="92">92</span>%</h3>
                    <p>Satisfaction rate comes from our awesome customers.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="single-achievement wow fadeInUp" data-wow-delay=".6s">
                    <h3 class="counter"><span id="secondo3" class="countup" cup-end="500">500</span>+</h3>
                    <p>Average Award we have got all over internet.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="portfolio-section section">
    <div id="container" class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <span class="wow fadeInDown" data-wow-delay=".2s">Latest Cases</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s"> Our Latest works</h2>
                    <h3 class="overlay-text">Portfolio</h3>
                    <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                        Ipsum available, but the majority have suffered alteration in some form.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="portfolio-button-head">
                    <div class="portfolio-btn-wrapper wow fadeInUp" data-wow-delay=".4s">
                        <button class="portfolio-btn active" data-filter="*">All</button>
                        @foreach($projects as $project)
                        <button class="portfolio-btn"
                            data-filter=".{{$project->latestwork->title}}">{{$project->latestwork->title}}</button>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
        <div class="row grid">
            @foreach($projects as $project)
            <div class="col-lg-6 col-md-6 grid-item {{$project->latestwork->title}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img">
                        <a href="#"><img src="{{ asset('assets/image/project/' . $project->image) }}" alt="#"></a>
                    </div>
                    <div class="portfolio-overlay">
                        <div class="pf-content">
                            <span class="category">{{$project->latestwork->title}}</span>
                            <h4><a href="portfolio-single.html">{{$project->description}}</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- <div class="col-lg-6 col-md-6 grid-item marketing">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img">
                        <a href="#"><img src="{{asset('images/portfolio/pf2.png')}}" alt="#"></a>
                    </div>
                    <div class="portfolio-overlay">
                        <div class="pf-content">
                            <span class="category">Marketing</span>
                            <h4><a href="portfolio-single.html">Unique Marketing tips & tricks</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 grid-item web">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img">
                        <a href="#"><img src="{{asset('images/portfolio/pf3.png')}}" alt="#"></a>
                    </div>
                    <div class="portfolio-overlay">
                        <div class="pf-content">
                            <span class="category">Web Design</span>
                            <h4><a href="portfolio-single.html">Best Web Design in 2023</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 grid-item branding">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img">
                        <a href="#"><img src="{{asset('images/portfolio/pf4.png')}}" alt="#"></a>
                    </div>
                    <div class="portfolio-overlay">
                        <div class="pf-content">
                            <span class="category">Branding</span>
                            <h4><a href="portfolio-single.html">Best Branding Solutions </a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 grid-item web">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img">
                        <a href="#"><img src="{{asset('images/portfolio/img-5.jpg')}}" alt="#"></a>
                    </div>
                    <div class="portfolio-overlay">
                        <div class="pf-content">
                            <span class="category">Web Design</span>
                            <h4><a href="portfolio-single.html">Best Web Design in 2023</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 grid-item graphic">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img">
                        <a href="#"><img src="{{asset('images/portfolio/img-7.jpg')}}" alt="#"></a>
                    </div>
                    <div class="portfolio-overlay">
                        <div class="pf-content">
                            <span class="category">Graphic Design</span>
                            <h4><a href="portfolio-single.html">Best Graphic Design in 2023</a></h4>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="row">
            <div class="col-12">
                <div class="button see-all">
                    <a href="portfolio.html" class="btn">See all works</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section testimonials">
    <div class="container">
        <div class="testimonial-slider-head">
            <div class="testimonial-slider">
                @foreach($testinomials as $testinomial)
                <div class="single-testimonial">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-7 col-12">
                            <div class="testimonial-content">
                                <i class="lni lni-quotation"></i>
                                <h2>{{$testinomial->description}}</h2>
                                <div class="bottom">
                                    <h4 class="name">{{$testinomial->name}} <span>{{$testinomial->postion}}</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-12">
                            <div class="testimonial-image">
                                <img src="{{ asset('assets/image/testinomial/' . $testinomial->image) }}" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- <div class="single-testimonial">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-7 col-12">
                            <div class="testimonial-content">
                                <i class="lni lni-quotation"></i>
                                <h2>We move at a fast <br>pace. I’m always working <br>on something I'am excited
                                    about!</h2>
                                <div class="bottom">
                                    <h4 class="name">Zaklin lee <span>Graphics Designer</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-12">
                            <div class="testimonial-image">
                                <img src="{{asset('images/testimonial/testi3.jpg')}}" alt="#">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="single-testimonial">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-7 col-12">
                            <div class="testimonial-content">
                                <i class="lni lni-quotation"></i>
                                <h2>We move at a fast <br>pace. I’m always working <br>on something I'am excited
                                    about!</h2>
                                <div class="bottom">
                                    <h4 class="name">Gerina pic <span>Website Designer</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-12">
                            <div class="testimonial-image">
                                <img src="assets/images/testimonial/testi5.jpg" alt="#">
                            </div>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
    </div>
</section>


<section id="team" class="team section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title align-center gray-bg">
                    <span class="wow fadeInDown" data-wow-delay=".2s">Creative Team</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Meet our team</h2>
                    <h3 class="gray-bg">Creative</h3>
                    <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                        Ipsum available, but the majority have suffered alteration in some form.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($teams as $team)
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-team wow fadeInUp" data-wow-delay=".2s">
                    <div class="image">
                        <img src="{{ asset('assets/image/team/' . $team->image) }}" alt="#">
                        <ul class="social">
                            <li><a href="https://www.facebook.com/{{$team->f_username}}" target="_blank"><i
                                        class="lni lni-facebook-filled"></i></a></li>
                            <li><a href="https://twitter.com/{{$team->t_username}}" target="_blank"><i
                                        class="lni lni-twitter-original"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/{{$team->l_username}}" target="_blank"><i
                                        class="lni lni-linkedin-original"></i></a></li>
                            <li><a href="https://www.instagram.com/{{$team->i_username}}" target="_blank"><i
                                        class="lni lni-behance-original"></i></a></li>
                        </ul>
                    </div>
                    <div class="info-head">

                        <div class="info-box">
                            <h4 class="name"><a href="team-single.html">{{$team->name}}</a></h4>
                            <span class="designation">{{$team->designation}}</span>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach

            <!-- <div class="col-lg-3 col-md-6 col-12">
                <div class="single-team wow fadeInUp" data-wow-delay=".4s">

                    <div class="image">
                        <img src="assets/images/team/team2.png" alt="#">

                        <ul class="social">
                            <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                            <li><a href="#"><i class="lni lni-behance-original"></i></a></li>
                        </ul>

                    </div>

                    <div class="info-head">

                        <div class="info-box">
                            <h4 class="name"><a href="team-single.html">Jhone digo</a></h4>
                            <span class="designation">Markeitng</span>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-team wow fadeInUp" data-wow-delay=".6s">

                    <div class="image">
                        <img src="{{asset('images/team/team3.png')}}" alt="#">

                        <ul class="social">
                            <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                            <li><a href="#"><i class="lni lni-behance-original"></i></a></li>
                        </ul>

                    </div>

                    <div class="info-head">

                        <div class="info-box">
                            <h4 class="name"><a href="team-single.html">Zara tingo</a></h4>
                            <span class="designation">Web Developer</span>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-team wow fadeInUp" data-wow-delay=".8s">

                    <div class="image">
                        <img src="{{asset('images/team/team4.png')}}" alt="#">

                        <ul class="social">
                            <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                            <li><a href="#"><i class="lni lni-behance-original"></i></a></li>
                        </ul>

                    </div>

                    <div class="info-head">

                        <div class="info-box">
                            <h4 class="name"><a href="team-single.html">David Zone</a></h4>
                            <span class="designation">SEO Expert</span>
                        </div>

                    </div>
                </div>
            </div> -->

        </div>
    </div>
</section>


<section class="intro-video-area overlay">
    <div class="container-fluid">
        <div class="video-inner ">
            <div class="row">
                <div class="col-12">
                    <div class="intro-video-play">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-12">
                                <div class="play-thumb wow zoomIn" data-wow-delay=".2s">
                                    <a href="https://www.youtube.com/watch?v=r44RKWyfcFw&amp;fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM"
                                        class="glightbox video"><i class="lni lni-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-title white-text">
                        <span class="wow fadeInDown" data-wow-delay=".2s">Create your own experience</span>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">How do we help you to grow?</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority<br> have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="pricing-table section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <span class="wow fadeInDown" data-wow-delay=".2s">Pricing Table</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Our Pricing Plan</h2>
                    <h3 class="gray-bg">Pricing</h3>
                    <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                        Ipsum available, but the majority have suffered alteration in some form.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($pricings as $pricing)
            <div class="col-lg-4 col-md-6 col-12">

                <div class="single-table wow fadeInUp" data-wow-delay=".2s">

                    <div class="table-head">
                        <div class="price">
                            <p class="amount">${{$pricing->price}}<span class="duration">/month</span></p>
                        </div>
                        <div class="title">
                            <h4>{{$pricing->name}}</h4>
                            <p>{{$pricing->description}}</p>
                        </div>
                    </div>


                    <ul class="table-list">
                        <li>{{$pricing->feature}}</li>
                        <!-- <li>Dapibus ac facilisis in</li>
                        <li>Morbi leo risus</li> -->
                    </ul>


                    <div class="button">
                        <a class="btn" href="#">Purchase</a>
                    </div>

                </div>

            </div>
            @endforeach
            <!-- <div class="col-lg-4 col-md-6 col-12">

                <div class="single-table wow fadeInUp" data-wow-delay=".4s">

                    <div class="table-head">
                        <div class="price">
                            <p class="amount">$29<span class="duration">/month</span></p>
                        </div>
                        <div class="title">
                            <h4>Medium Pack</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>


                    <ul class="table-list">
                        <li>Cras justo odio</li>
                        <li>Dapibus ac facilisis in</li>
                        <li>Morbi leo risus</li>
                    </ul>


                    <div class="button">
                        <a class="btn" href="#">Purchase</a>
                    </div>

                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12">

                <div class="single-table wow fadeInUp" data-wow-delay=".6s">

                    <div class="table-head">
                        <div class="price">
                            <p class="amount">$59<span class="duration">/month</span></p>
                        </div>
                        <div class="title">
                            <h4>Extended Pack</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>


                    <ul class="table-list">
                        <li>Cras justo odio</li>
                        <li>Dapibus ac facilisis in</li>
                        <li>Morbi leo risus</li>
                    </ul>


                    <div class="button">
                        <a class="btn" href="#">Purchase</a>
                    </div>

                </div>

            </div> -->
        </div>
    </div>
</section>


<section class="newsletter-area section">
    <div class="container">
        <div class="row ">
            <div class="col-lg-8 offset-lg-2 col-12">
                <div class="section-title">
                    <span class="wow fadeInDown" data-wow-delay=".2s">Subscribe Now</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Subscribe to our newsletter to get latest news on
                        your inbox.</h2>
                    <h3 class="gray-bg">Newsletter</h3>
                </div>

                <div class="subscribe-text wow fadeInUp" data-wow-delay=".2s">
                    <form action="https://demo.graygrids.com/themes/bold/mail/mail.php" method="get" target="_blank"
                        class="newsletter-inner">
                        <input name="EMAIL" placeholder="Your email address" class="common-input"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'" required=""
                            type="email">
                        <div class="button">
                            <button class="btn">Subscribe Now!</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>


<div class="latest-news-area section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <span class="wow fadeInDown" data-wow-delay=".2s">latest news</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Latest News & Blog</h2>
                    <h3 class="gray-bg">Blog</h3>
                    <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                        Ipsum available, but the majority have suffered alteration in some form.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6 col-12">

                <div class="single-news custom-shadow-hover wow fadeInUp" data-wow-delay=".2s">
                    <div class="image">
                        <img class="thumb" src="{{ asset('assets/image/blog/' . $blog->image) }}" alt="#">
                    </div>
                    <div class="content-body">
                        <a class="cat" href="#">{{$blog->blog_type}}</a>
                        <h4 class="title"><a href="blog-single-sidebar.html">{{$blog->title}}</a></h4>
                        <p>{{$blog->description}}</p>
                        <div class="button">
                            <a href="blog-single-sidebar.html" class="btn">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach
            <!-- <div class="col-lg-4 col-md-6 col-12">

                <div class="single-news custom-shadow-hover wow fadeInUp" data-wow-delay=".4s">
                    <div class="image">
                        <img class="thumb" src="{{asset('images/blog/blog-grid2.jpg')}}" alt="#">
                    </div>
                    <div class="content-body">
                        <a class="cat" href="#">Lifestyle</a>
                        <h4 class="title"><a href="blog-single-sidebar.html">10 ways to readuce your office work
                                depression.</a></h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry's.</p>
                        <div class="button">
                            <a href="blog-single-sidebar.html" class="btn">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-12">

                <div class="single-news custom-shadow-hover wow fadeInUp" data-wow-delay=".6s">
                    <div class="image">
                        <img class="thumb" src="{{asset('images/blog/blog-grid3.jpg')}}" alt="#">
                    </div>
                    <div class="content-body">
                        <a class="cat" href="#">Career</a>
                        <h4 class="title"><a href="blog-single-sidebar.html">Why should you work as a team even on
                                small projects.</a></h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry's.</p>
                        <div class="button">
                            <a href="blog-single-sidebar.html" class="btn">Read More</a>
                        </div>
                    </div>
                </div>

            </div> -->
        </div>
    </div>
</div>


<div class="brand-area section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
                <div class="section-title">
                    <span class="wow fadeInDown" data-wow-delay=".2s">Meet our Clients</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Our Awesome Clients</h2>
                    <h3 class="gray-bg">Clients</h3>
                    <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                        Ipsum available, but the majority have
                        suffered alteration in some form.</p>
                </div>
                <div class="clients-logos">
                    <div class="single-image">
                        <img src="{{asset('images/clients/client1.png')}}" alt="Brand Logo Images">
                    </div>
                    <div class="single-image">
                        <img src="{{asset('images/clients/client2.png')}}" alt="Brand Logo Images">
                    </div>
                    <div class="single-image">
                        <img src="{{asset('images/clients/client3.png')}}" alt="Brand Logo Images">
                    </div>
                    <div class="single-image">
                        <img src="{{asset('images/clients/client4.png')}}" alt="Brand Logo Images">
                    </div>
                    <div class="single-image">
                        <img src="{{asset('images/clients/client5.png')}}" alt="Brand Logo Images">
                    </div>
                    <div class="single-image">
                        <img src="{{asset('images/clients/client6.png')}}" alt="Brand Logo Images">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection