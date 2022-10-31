<?php 

$title          =   get_field('title_ourwork');
$paragraph      =   get_field('paragraph');
$image_first    =   get_field('image_first');
$image_second   =   get_field('image_second');
$image_third    =   get_field('image_third');

// var_dump($image_third)

?>


<section class="ourwork-column">
     
        
            <div class="container"> 
                <div class="row">

                    <div class="col-sm-12 col-lg-6 col-md-12"> 
 
                        <div class="title_block">
                            <h5 class="card-title"><?php echo $title ?></h5>
                            <p class="card-text"><?php echo $paragraph ?></p>
                        </div>
                    </div>
 
                    <div class="col-sm-12 col-lg-6 col-md-12"> 
                        <div class="content_block">
                            <div class="phone_image"> 
                                <img src="<?php echo $image_first['url']  ?>" class="img_ph" alt="phone">  
                            </div>
                            <div class="svg_class"> 
                                <img src="<?php echo $image_second['url']  ?>" alt="svg">
                            </div>
                        </div>
                    </div>
 
                </div>
            </div>
            
 
        <div class="visual_image">
            <img src="<?php  echo $image_third['url']; ?>" alt="svg">
        </div>

</section>


 
 