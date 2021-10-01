<script src="{{asset('js/frontend/bootstrap.min.js')}}"></script>
<script src="{{asset('js/frontend/count-up.min.js')}}"></script>
<script src="{{asset('js/frontend/wow.min.js')}}"></script>
<script src="{{asset('js/frontend/tiny-slider.js')}}"></script>
<script src="{{asset('js/frontend/glightbox.min.js')}}"></script>
<script src="{{asset('/js/frontend/imagesloaded.min.js')}}"></script>
<script src="{{asset('js/frontend/isotope.min.js')}}"></script>
<script src="{{asset('js/frontend/main.js')}}"></script>

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