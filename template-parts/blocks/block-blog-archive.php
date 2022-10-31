<?php 

 $blog_archive  =   get_field('blog_archive');

 
?>


<section class="archive_block">
    <div class="container"> 
        <?php if($blog_archive): ?>
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 g-4 achive-column">
            <?php foreach($blog_archive as $post_archive): 
                
                $permalink  =   get_permalink('$post_archive');
                $image      =   get_the_post_thumbnail($post_archive, 'full');
                $title      =   get_the_title($post_archive);
                $data       =   get_the_date('j M Y', $post_archive);
                $excerpt    =   get_the_excerpt($post_archive);
            ?>
            <div class="col pb-5">
                <div class="card card_archive_blog">
                    <div class="permalink_image_archive">
                        <a href="<?php echo $permalink ?>"> 
                            <?php echo $image; ?>
                        </a>
                    </div>
                    <div class="card-body archive-blog-body pb-4 ps-0 pe-0">
                        <h5 class="card-title pt-3 mb-0"><?php echo $title; ?></h5>
                        <span class="pt-0"><?php echo $data; ?></span>
                        <p class="card-text pt-3"><?php echo $excerpt; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>