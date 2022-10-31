<?php 

$career_title       =   get_field('careers_title');
$career_box_content =   get_field('career_box_content');

$box_image          =   get_field('box_image');
$box_title          =   get_field('box_title');
$box_description    =   get_field('box_description');

$change_hover_style =   get_field('change_hover_style')


?>

<section class="career_block"> 

<?php if(isset($career_box_content) && $career_box_content): ?>

    <div class="container">
        <div class="career_title">
            <h2><?php echo $career_title ?></h2>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-3 mt-5">
            <?php foreach($career_box_content as $carrerbox ): ?>
                <div class="col main_card_career">
                    <div class="card h-100 carer_card_box p-3" id="<?= $change_hover_style ?>">
                        <img src="<?php echo $carrerbox['box_image']['url']; ?>" class="card-img-top" alt="...">
                        <div class="card-body carer_body_card p-2">
                            <h5 class="card-title pb-3 pt-3"><?php echo $carrerbox['box_title']; ?></h5>
                            <p class="card-text"><?php echo $carrerbox['box_description']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

 
    <?php endif; ?>

</section>