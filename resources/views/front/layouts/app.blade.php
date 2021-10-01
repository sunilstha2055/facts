<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="manifest" href="site.webmanifest" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('assets/front')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets/front')}}/css/animate.css">
    <link rel="stylesheet" href="{{asset('assets/front')}}/css/glightbox.css">
    <link rel="stylesheet" href="{{asset('assets/front')}}/css/LineIcons.css">
    <link rel="stylesheet" href="{{asset('assets/front')}}/css/main.css">
    <link rel="stylesheet" href="{{asset('assets/front')}}/css/style.css">
    <!-- <link rel="stylesheet" href="{{asset('assets/front')}}/css/fontawesome-all.min.css"> -->
    <link rel="stylesheet" href="{{asset('assets/front')}}/css/tiny-slider.css">

</head>

<body>
    @include('front.layouts.header')

    <main>
        @yield('content')
    </main>
    @include('front.layouts.footer')
    @include('front.layouts.scripts')


    <script src="{{asset('assets/front')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('assets/front')}}/js/count.up.min.js"></script>
    <script src="{{asset('assets/front')}}/js/glightbox.min.js"></script>
    <script src="{{asset('assets/front')}}/js/imagesloaded.min.js"></script>
    <script src="{{asset('assets/front')}}/js/isotope.min.js"></script>
    <script src="{{asset('assets/front')}}/js/tiny-slider.js"></script>
    <script src="{{asset('assets/front')}}/js/wow.min.js"></script>
    <script src="{{asset('assets/front')}}/js/main.js"></script>
    <script type="text/javascript">
    //========= testimonial 
    tns({
        container: '.hero-slider',
        items: 1,
        slideBy: 'page',
        autoplay: false,
        mouseDrag: true,
        gutter: 0,
        nav: false,
        controls: true,
        controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
    });
    //========= testimonial 
    //========= testimonial 
    tns({
        container: '.testimonial-slider',
        items: 1,
        slideBy: 'page',
        autoplay: false,
        mouseDrag: true,
        gutter: 0,
        nav: false,
        controls: true,
        controlsText: ['<i class="lni lni-arrow-left"></i>', '<i class="lni lni-arrow-right"></i>'],
    });

    //========= glightbox
    GLightbox({
        'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
        'type': 'video',
        'source': 'youtube', //vimeo, youtube or local
        'width': 900,
        'autoplayVideos': true,
    });

    //============== isotope masonry js with imagesloaded
    imagesLoaded('#container', function() {
        var elem = document.querySelector('.grid');
        var iso = new Isotope(elem, {
            // options
            itemSelector: '.grid-item',
            masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: '.grid-item'
            }
        });

        let filterButtons = document.querySelectorAll('.portfolio-btn-wrapper button');
        filterButtons.forEach(e =>
            e.addEventListener('click', () => {

                let filterValue = event.target.getAttribute('data-filter');
                iso.arrange({
                    filter: filterValue
                });
            })
        );
    });
    </script>
    <script defer src="../../../static.cloudflareinsights.com/beacon.min.js"
        data-cf-beacon='{"rayId":"693564ed1a51a767","version":"2021.8.1","r":1,"token":"93dd3b16eaea413cbf84c7c6b5a1817a","si":10}'>
    </script>
</body>

</html>