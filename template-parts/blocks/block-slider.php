<?php 

$slider_main	=	get_field('slider');
 
?>



<!-- Start Slider -------------------------- -->
 
<section class="column-slider">
  <!-- Slider main container -->
 
    <div class="swiper">
    <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?php if(isset($slider_main) && $slider_main ): ?>
                <?php foreach($slider_main as $slider): ?>

                    <div class="swiper-slide swiper-slider-main" style="background-image: url(<?php echo $slider['image']['url']; ?>);">
                        <div class="container main-container"> 
                    
                            <h2 class="title"> 
                                <?php echo $slider['title']; ?>
                            </h2>  

                            <h2 class="title-space">
                                <?php echo $slider['title_two']; ?>
                            </h2>  
                        </div>
        
                    </div>

                    <?php endforeach;?>
            <?php endif;?>
 
 
        </div>

                <!-- If we need pagination -->
        <div class="container pagination_content"> 
            <div class="main-pagination"> 
                <div class="swiper-pagination sw-pag-class"></div>
            </div>
            </div>
            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar main-swiper "  onclick="location.href='#scroldownService'">
                <div class="scroldown" >
                    <img id="" class="arrow" src="https://sweeftdigital.com/assets/Scroll-arrow.svg" alt="">
                </div>
                <p>scroll down</p>
            </div>
    
 




    </div>
</section>



<!-- End Slider -------------------------- -->
