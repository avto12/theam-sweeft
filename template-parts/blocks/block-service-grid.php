<?php 


$grid_title          =  get_field("grid_title");
$grid_description    =  get_field("grid_description");
$service_box         =  get_field("service_box");

 

?>


<!-- Start second block  -->
<section class="container" id="downService">
    <div class="box-column">
        <div class="box-title">
            <h2><?php echo $grid_title; ?></h2>
            <p><?php echo $grid_description; ?></p>
        </div>

        <div class="row row-cols-1 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 g-3">

        <?php if(isset($service_box) && $service_box ): ?>
            <?php foreach($service_box as $box_service): ?>

                <div class="col">
                    <div class="card h-100 card_box p-3">
                        <img src="<?php echo  $box_service['imageicon']['url']; ?>" class="card-img-top mb-4" alt="...">
                        <div class="card-body body_card p-0">
                        <h5 class="card-title mb-4"><?php echo  $box_service['title']; ?></h5>
                        <p class="card-text"><?php echo $box_service['description']; ?></p>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        <?php endif; ?>
        </div>
    </div>
</section>

<!-- End second block  -->