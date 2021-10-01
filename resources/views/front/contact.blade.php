@extends('front.layouts.app')
@section('title','Home')
@section('content')
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Contact Us</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="index.html">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<section id="contact-us" class="contact-us section">
    <div class="container">
        <div class="contact-head">
            <div class="inner-content">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-12">
                        <div class="form-main">
                            <h3 class="inner-title left">Contact Form</h3>
                            <form class="form" method="post"
                                action="https://demo.graygrids.com/themes/bold/assets/mail/mail.php">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input name="name" type="text" placeholder="Your Name" required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input name="subject" type="text" placeholder="Your Subject"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input name="email" type="email" placeholder="Your Email"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input name="phone" type="text" placeholder="Your Phone"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group message">
                                            <textarea name="message" placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group button">
                                            <button type="submit" class="btn ">Submit Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="contact-info">
                            <div class="single-head">
                                <h3 class="inner-title">Contact Info</h3>
                                <div class="single-info">
                                    <i class="lni lni-phone"></i>
                                    <ul>
                                        <span>Location</span>
                                        <li>76/A, Green valle, Califonia <br>United State</li>
                                    </ul>
                                </div>
                                <div class="single-info">
                                    <i class="lni lni-envelope"></i>
                                    <ul>
                                        <span>Call Us</span>
                                        <li><a href="#">+1 756 445 5658</a></li>
                                        <li><a href="#">+1 125 458 5555</a></li>
                                    </ul>
                                </div>
                                <div class="single-info">
                                    <i class="lni lni-map"></i>
                                    <ul>
                                        <span>Mail Us</span>
                                        <li><a
                                                href="https://demo.graygrids.com/cdn-cgi/l/email-protection#abd8dedbdbc4d9dfebd2c4ded9c6cac2c785c8c4c6"><span
                                                    class="__cf_email__"
                                                    data-cfemail="cab9bfbabaa5b8be8ab3a5bfb8a7aba3a6e4a9a5a7">[email&#160;protected]</span></a>
                                        </li>
                                        <li><a
                                                href="https://demo.graygrids.com/cdn-cgi/l/email-protection#3d5e5253495c5e497d4452484f505c5451135e5250"><span
                                                    class="__cf_email__"
                                                    data-cfemail="80e3efeef4e1e3f4c0f9eff5f2ede1e9ecaee3efed">[email&#160;protected]</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="single-info">
                                    <i class="lni lni-map"></i>
                                    <ul>
                                        <span>Office Hour</span>
                                        <li>Monday - Friday (9.00-19.00)</li>
                                        <li>Sunday - Thusday (10.00-06.00)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="map-section">
    <div class="mapouter">
        <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas"
                src="https://maps.google.com/maps?q=New%20York&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
    </div>
</div>

@endsection