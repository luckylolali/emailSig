<?php include('header.php'); ?>
<div class="splash-wrap">
  <div class="splash splash--header splash--simple" style="background-image:url();">  
    <div class="splash__hue"></div>  
    <div class="wrap wrap--landing-slider">
        <div class="landing-slider-top">
            <div class="landing-slider__item">
                <div class="feature">
                    <div class="feature__media-wrap">
        	            <div class="feature__media">
            	            <img class="feature__media__image" src="http://dev2016.lmu.edu/media/lmu2015responsivesite/siteassets/images/home-splash.jpg" alt="">
                        </div>
                    </div>
                    <div class="feature__content feature__content--centered">
        	            <div class="feature__title">Study together</div>
                        <div class="feature__heading">sub heading</div>
                        <div class="feature__cta"><a class="button-alt" href="">Learn More</a></div>
                    </div>
                </div>
            </div>
            <div class="landing-slider__item">
	            <div class="feature">
    	            <div class="feature__media-wrap">
        	            <div class="feature__media">
            	            <img class="feature__media__image" src="http://lmu.edu/media/lmu2015responsivesite/siteassets/images/uni-splash-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="feature__content feature__content--centered">
        	            <div class="feature__title">Play together</div>
                        <div class="feature__heading">sub heading</div>
                        <div class="feature__cta"><a class="button-3d" href="">Learn More</a></div>
                    </div>
                </div>
            </div>
        </div><!-- close landing-slider -->
    </div></!--close wrap--landing-slider-->
    </div><!--close splash--header-->
    <div class="splash-feature">
        <div class="wrap wrap--splash wrap--splash-header">
            <h1 class="splash__heading">Nothing is impossible</h1>
        </div>
    </div>
</div>
<script>
    // landing slider
  var landingSliderAutoPlay = false;
  if (window.innerWidth >= 1024) {
    landingSliderAutoPlay = 2000;
  }
  $('.landing-slider-top').flickity({
    prevNextButtons: true,
    pageDots: false,
    imagesLoaded: true,
    autoPlay: landingSliderAutoPlay
  });
</script>
<?php include('footer.php'); ?>