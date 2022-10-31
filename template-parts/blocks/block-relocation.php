<?php 

$realocation_title          =   get_field('realocation_title');
$realocation_description    =   get_field('realocation_description');
$realocation_image          =   get_field('realocation_image');
$realocation_button         =   get_field('realocation_button');


?>

 
<section> 
    <div class="container"> 
        <div class="card mb-5 h-100 realocation_card">
            <div class="row g-0 relocation_card_content_new">
                <div class="col-md-6 realocation_card_content">
                    <h5 class="card-title"><?php echo $realocation_title; ?></h5>
                    <p class="card-text"><?php echo $realocation_description; ?></p>
                    
                    <div class="btn_content"> 
                        <?php if(!empty($realocation_button['url']) or !empty($realocation_button['title'])): ?>
                            <a href="<?php echo $realocation_button['url']; ?>" target="<?php echo $realocation_button['target']; ?>"> 
                                <div class="btn_realocation">
                                    <span> <?php echo $realocation_button['title']; ?></span>
                                </div>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="card-body realocation_body">
                        <img src="<?php echo $realocation_image['url']; ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>