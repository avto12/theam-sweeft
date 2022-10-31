<?php

$vertical_slider_content    =   get_field('vertical_slider_content');



$slider_image   =   get_field('slider_image');
$slider_title   =   get_field('slider_title');
$slider_paragraph  =   get_field('slider_paragraph');
$candidates_info    =   get_field('candidates_info');




?>

 

<section class="vertical-slider-block" id="vertical">

    <div class="container"> 

        <?php if(isset($vertical_slider_content) && $vertical_slider_content): ?>

            <div class="d-flex align-items-start pill_content">
                
                <div class="row">
                    <div class="col-lg-6 col-md-5  content_column">
                        <div class="tab-content" id="v-pills-tabContent">
                            <?php foreach($vertical_slider_content as $key=> $slider_content_img): ?>
                                <div class="tab-pane fade show <?php if($key == 0): ?> active <?php endif; ?> tab_pill_image" id="tabNewId<?=$key ?>" role="tabpanel" aria-labelledby="tabId<?=$key ?>" tabindex="0">
                                    <img src="<?php echo $slider_content_img['slider_image']['url'];?>" alt="">
                                </div>
                            <?php endforeach ?>    
                        </div>
                    </div>

                    <div class="col-lg-1 col-md-3 col-sm-12 next_btn_tab">
                        <div class="nav flex-column nav-pills me-3"  id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <div class="mySwiper-vertical">
                                <div class="swiper-wrapper" id="hello">
                                <?php foreach($vertical_slider_content as $key=> $slider): ?>
                                    <div class="<?php if($key == 0):  ?> active <?php endif; ?>" id="docs"> 
                                        <button class="nav-link  <?php if($key == 0):  ?> active <?php endif; ?>" id="tabId<?=$key ?>"  id=" " data-bs-toggle="pill" data-bs-target="#tabNewId<?=$key ?>" type="button" role="tab" aria-controls="tabId<?=$key ?>"  aria-selected="true"></button>
                                    </div>
                                <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-5 col-md-10  content_tab_info"> 
                        <div class="tab-content" id="v-pills-tabContentB__" >
                            <?php foreach($vertical_slider_content as $key=> $slider_content): ?>
                            
                                <div class="tab-pane fade show <?php if($key == 0):  ?> active <?php endif; ?> content_text" id="tabNewId<?=$key ?>" role="tabpanel" aria-labelledby="tabId<?=$key ?>" tabindex="0">
                                    
                                    <h5 class="card-title pb-5"><?php echo $slider_content['slider_title']; ?></h5>
                                    <p class="card-text"> <?php echo $slider_content['slider_paragraph']; ?></p>
                                    <p class="card-text pt-3"><small class="text-muted"><?php echo $slider_content['candidates_info']; ?></small></p>
                                            
                                </div>
                                
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                 
            </div>
        <?php endif; ?> 
    </div>
</section>