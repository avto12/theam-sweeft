<?php 


$cv_image       =   get_field('cv_image');
$cv_title       =   get_field('cv_title');
$cv_paragraph   =   get_field('cv_paragraph');
$cv_button      =   get_field('cv_button');


?>


<section class="cv_block"> 
    <div class="container"> 
        <div class="card mb-3 cv_card">
            <div class="row g-0 cv_card_column">
                <div class="col-md-4 text-start cv_img">
                    <img src="<?php echo $cv_image['url']; ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="card-body cv_body">
                        <h5 class="card-title"><?php echo $cv_title; ?></h5>
                        <p class="card-text"><?php echo $cv_paragraph ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-end">
                    <div class="card-body cv_body">
                        <?php if(!empty($cv_button['url']) or !empty($cv_button['title'])): ?>
                            <a href="<?php echo $cv_button['url']; ?>" target="<?php echo $cv_button['target']; ?>"> 
                                <button class="btn-cv"><?php echo $cv_button['title']; ?></button>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>