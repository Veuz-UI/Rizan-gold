<?php include("header.php") ?>

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/banner3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block" data-aos="fade-up" data-aos-duration="3000">
                <!-- <div class="banner-heading">
                    <h1>About Us</h1>
                </div> -->

                <a href="product.php"><button type="button" class="btn5">View More</button></a>
              </div>
          </div>
          
        </div>
       
      </div>

  <div class="main-heading mt-100" data-aos="fade-up" data-aos-duration="3000">
    <h2>Contact Us</h2>
  </div>

    <div class="container">
        <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-duration="3000">
            <div class="contact-main-img">
                <img src="img/contact-img.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
 

<div class="contact-padding">
    <div class="contact-bg-map d-flex align-items-center" data-aos="fade-up" data-aos-duration="3000">
        <div class="container">
            
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="adress-box sm-margin h-100">
                        <div class="contact-top-icon">
                            <img src="img/map.svg" alt="">
                        </div>
                        <h4>Address</h4>
                        <h5 class="contact-adrss-place">Rizan Jewellery LLC Office #111, 1st Floor, Hind Plaza, Bldg#4B Al Ras, Deira Gold Souq Dubai – U.A.E</h5> 
                    </div> 
                </div>
                <div class="col-lg-4">
                    <div class="adress-box sm-margin h-100">
                        <div class="contact-top-icon">
                            <img src="img/contact.svg" alt="">
                        </div>
                        <h4>Contact</h4>
                        <div class="contact-adrss">
                        <h5>Rizan Jewellery LLC</h5>
                        <h5>Rizan - Malaysia</h5>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-phone-alt adrss-icon icon-rotate"></i>
                            <a href="tel:+971 4225 9881"><h5>+971 4225 9881</h5></a>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-phone-alt adrss-icon icon-rotate"></i>
                            <a href="tel:+971 56 7556 916"><h5>+971 56 7556 916</h5></a>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-envelope adrss-icon"></i>
                            <a href="mailto:sales@rizanjewellery.com"><h5>sales@rizanjewellery.com</h5></a>
                            
                        </div>
                        </div>  
                    </div> 
                </div>
                              
                                         
             </div>
        </div>
    </div>
</div>
                       
            
        

<section class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57702.26303706723!2d55.37613700429273!3d25.324642622792847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5f21d0ea0963%3A0xd4b3404a5d69b72c!2sSafari%20Mall%20Sharjah!5e0!3m2!1sen!2sin!4v1699614036907!5m2!1sen!2sin" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<?php include("footer.php") ?>





    <script src="https://kit.fontawesome.com/16b0815225.js" crossorigin="anonymous"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/aos.js"></script>
    <script>
        AOS.init({disable: 'mobile'});
    </script>
    <script>
        $(function() {
            setTimeout(function() {
                $(".loader-mask").hide();
            }, 2000)

        })
    </script>
      <script>
        $(document).ready(function () {
            $(".shop-carousel").owlCarousel();
        });

        $('.shop-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
        $(document).ready(function () {
            $(".shop-carousel1").owlCarousel();
        });

        $('.shop-carousel1').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
       
  
    </script>
    <script>
        function formatState(state) {
            if (!state.id) {
                return state.text;
            }
            var $state = $(
                '<span><img src="' + $(state.element).attr('data-src') + '" class="img-flag" /> ' + state.text +
                '</span>'
            );
            return $state;
        };
        $('select').select2({
            minimumResultsForSearch: Infinity,
            templateResult: formatState,
            templateSelection: formatState
        });
        
    </script>
    <script>
        $(function () {
            $('.fav-icon').click(function () {
                $(this).parent().toggleClass('active');
            });
            $('.favorite').click(function () {
                $(this).toggleClass('active');
            });
        });
   
    </script>

    <script>
        $(document).ready(function() {
		    var slider = $("#slider");
		    var thumb = $("#thumb");
		    var slidesPerPage = 4; //globaly define number of elements per page
		    var syncedSecondary = true;
		    slider.owlCarousel({
		        items: 1,
		        slideSpeed: 2000,
		        nav: false,
		        autoplay: false, 
		        dots: false,
		        loop: true,
		        responsiveRefreshRate: 200
		    }).on('changed.owl.carousel', syncPosition);
		    thumb
		        .on('initialized.owl.carousel', function() {
		            thumb.find(".owl-item").eq(0).addClass("current");
		        })
		        .owlCarousel({
		            items: slidesPerPage,
		            dots: false,
		            nav: true,
		            item: 4,
                    margin: 10,
		            smartSpeed: 200,
		            slideSpeed: 500,
		            slideBy: slidesPerPage, 
		        	navText: ['<svg width="13px" height="13px" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 3px;stroke: #fff;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="13px" height="13px" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 3px;stroke: #fff;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
		            responsiveRefreshRate: 100
		        }).on('changed.owl.carousel', syncPosition2);
		    function syncPosition(el) {
		        var count = el.item.count - 1;
		        var current = Math.round(el.item.index - (el.item.count / 2) - .5);
		        if (current < 0) {
		            current = count;
		        }
		        if (current > count) {
		            current = 0;
		        }
		        thumb
		            .find(".owl-item")
		            .removeClass("current")
		            .eq(current)
		            .addClass("current");
		        var onscreen = thumb.find('.owl-item.active').length - 1;
		        var start = thumb.find('.owl-item.active').first().index();
		        var end = thumb.find('.owl-item.active').last().index();
		        if (current > end) {
		            thumb.data('owl.carousel').to(current, 100, true);
		        }
		        if (current < start) {
		            thumb.data('owl.carousel').to(current - onscreen, 100, true);
		        }
		    }
		    function syncPosition2(el) {
		        if (syncedSecondary) {
		            var number = el.item.index;
		            slider.data('owl.carousel').to(number, 100, true);
		        }
		    }
		    thumb.on("click", ".owl-item", function(e) {
		        e.preventDefault();
		        var number = $(this).index();
		        slider.data('owl.carousel').to(number, 300, true);
		    });


            $(".qtyminus").on("click",function(){
                var now = $(".qty").val();
                if ($.isNumeric(now)){
                    if (parseInt(now) -1> 0)
                    { now--;}
                    $(".qty").val(now);
                }
            })            
            $(".qtyplus").on("click",function(){
                var now = $(".qty").val();
                if ($.isNumeric(now)){
                    $(".qty").val(parseInt(now)+1);
                }
            });
		});
    </script>
</body>
</html>