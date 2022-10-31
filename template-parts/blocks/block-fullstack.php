<?php


$image                  =  get_field("image");
$section_title          =  get_field("title");
$emploiers              =  get_field("emploiers");
$section_description    =  get_field("description");
$icondown               =  get_field("icondown");
 
 
?>


<!-- Start first block  -->
<section class="container-fluid p-0 block-fullstack">
      <div class="service_section" style="background: linear-gradient(rgba(23,7,56,.7),rgba(23,7,56,.7)), url(<?php echo $image['url'] ?>);">
         <div class="container"> 
            <div class="main_block"> 
                  <div class="service_title">
                        <h1><?php echo $section_title ?></h1>
                        <p><?php echo $emploiers ?></p>
                  </div>
                  <div class="service_description">
                     <p><?php echo $section_description ?></p>
                  </div>
            </div>
         </div>

         <div class="downservice"  onclick="location.href='#downService'">
            <div class="scroldown" >
               <img class="arrow" src="<?php echo $icondown['url']; ?>" alt="">
            </div>
            <p>scroll down</p>
         </div>
      </div>
</section>
<!-- End first block  -->





