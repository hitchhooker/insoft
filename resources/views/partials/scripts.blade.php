
<script>
    /*  TODO:youtubemodal  
    
    <iframe class="youtube-video flex w-full min-h-640 lg:h-screen"
                    src="https://www.youtube.com/embed/Y6OAOfwTkdk?controls=0" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe> */

</script>


<!----------------------------------------------------------Logo slider css start------------------------------------------------------------------------>

<script>
jQuery(document).ready(function(){
    jQuery('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: true,
        pauseOnHover: true,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!----------- Logo slider css end-------------------------TODO: HOST SLICK LOCALLY ------------>
