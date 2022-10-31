<?php




$title = get_field('title');
$align = get_field('title_align');
$content_work = get_field("content_work");

?>

<!----------------- Start SAMPLE WORK -------------->
<section class="sample-work">
   <div class="container">
      <div class="title-sample-work <?= $align ?>">
         <h2><?php echo $title ?></h2>
      </div>
      
      <div class="row column-box"> 
        <?php if(isset($content_work) && $content_work): ?>
            <?php foreach($content_work as $works): 

                $permalink  =   get_permalink($works);
                $image      =   get_the_post_thumbnail($works, 'full');
                $title      =   get_the_title($works);                
                
            ?>


                
                <div class="col-md-4 col-lg-4 py-2">
                    <a href="<?php echo $permalink; ?>" 
                    class="box-sample-work" 
                    target="_blank"> 
                    <span class="card-img-top"> 
                        <?php echo $image; ?>
                    </span>
 

                        <div class="body-box-card">
                            <h4 class="card-title-work">
                                <?php echo $title; ?>
                            </h4>
                        </div>

                    </a>
                </div>

            <?php endforeach; ?>
         <?php endif; ?>
      </div>
   </div>
</section>
<!----------------- End SAMPLE WORK --------------->