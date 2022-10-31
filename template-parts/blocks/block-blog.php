<?php 

$block_title        =   get_field('block_title');
$block_description  =   get_field('block_description');
$read_more_icon     =   get_field('read_more_icon');
$read_more          =   get_field('read_more');

$blog_content       =   get_field('blog_content');

?>


<!------------------ Start BLOG  ---------------------------->

<section class="blog-column-second">
   <div class="container">
      <div class="title-blogs">
         <h2><?php echo $block_title ?></h2>
         <p><?php echo $block_description ?></p>
      </div>
   </div>

    <div class="container-fluid blog-container"> 
        <div class="Swiper-blog">
            <div class="swiper-wrapper">
                <?php if($blog_content) : ?>
                        <?php foreach($blog_content as $blog_post) : 
                    
                            $permalink  =   get_permalink($blog_post);
                            $image      =   get_the_post_thumbnail($blog_post, 'full');
                            $title      =   get_the_title($blog_post);
                            $date       =   get_the_date('j M Y', $blog_post);
                
                        ?>

                        <div class="swiper-slide start-blog-slider">
                            <div class="card card-blog">
                                <span class="card-img-top image_thumbnail">
                                <a href="<?php echo $permalink; ?>">
                                    <?php echo $image; ?>
                                </a>
                                </span>
                                <div class="card-body blog-body">
                                    <div class="box-card-container"> 
                                        <h5 class="card-title">
                                            <?php echo $title; ?>
                                        </h5>
                                        <div class="read-more-icon"> 
                                        <a href="<?php echo $permalink; ?>">
                                            <img src="<?php echo $read_more_icon['sizes']['large']?>" alt="">
                                        </a>
                                        </div>
                                    </div>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            <?php echo $date; ?>
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                <?php endif; ?>

            </div>
            <div class="pagination-blog">
            <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

   <?php

    if(isset($read_more) && $read_more): ?>
        <div class="btn-readmore"> 
            <a href="<?= $read_more['url']; ?>" target="<?= $read_more['targert']; ?>">
                <div class="link-read btn-stores more-btn">
                    <span class="get-ling"> <?= $read_more['title'];?> </span>
                </div>
            </a>
        </div>

   <?php endif; ?>


</section>
<!--- End section Second max-width 1201px ---->
<!-------------------------- End BLOG  -------------------------->