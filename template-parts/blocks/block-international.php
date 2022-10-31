<?php 

$international =    get_field('international');
$title         =    get_field('title');
$text_area     =    get_field('text_area');

 
?>




<!--------------- Start INTERNATIONAL section ----------------->
<section class="columns-about">
        <div class="container mainblock-inter">
            <div class="row d-flex justify-content-betwee blcok-main"> 
                <div class="col-sm-10 col-md-6 international-section">
                    <p>
                        <?php echo $international ?>
                    </p>
                    <h2>
                        <?php echo $title ?>
                    </h2>
                </div>
                <div class="col-sm-10 col-md-6  aboutsoftwear">
                    <p>
                        <?php echo $text_area ?>
                    </p>
                </div>
            </div>
        </div>

</section>
<!------------ End INTERNATIONAL section ----------------->