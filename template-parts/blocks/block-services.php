<?php 
 
$service_title        =   get_field('service_title');
$service_paragraph    =   get_field('service_paragraph');

$services =   get_field('services');

?>




<!------------- Start Our Core Services ------------------->
<section class="columns-service" id="scroldownService">
   <div class="container"> 
      <div class="title-services">
         <h2> 
            <?php echo $service_title ?> 
        </h2>
         <p>
            <?php echo $service_paragraph ?>
         </p>
      </div>
   </div>

   <div class="container-fluid myboxs-container">
      <div class="carad-column">
         <div class="mySwiper">
            <div class="swiper-wrapper myswiper-wrapper">

            <?php if(isset($services) && $services): ?>
                <?php foreach($services as $service):?>
                  
                    
                    <div class="swiper-slide card-box">
                        <div class="py-4 px-4 ">
                            <img class="card-img-top service-img" 
                                src="<?php echo $service['service_box_image']['url']; ?>" 
                                alt="Software Development"
                            >
                            <div class="card-body p-0">
                                <h4 class="card-title py-4">
                                    <?php echo $service['service_box_title']; ?>
                                </h4>
                                <p class="card-text">
                                    <?php echo $service['service_box_description']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                
               <?php endforeach; ?>
            <?php endif; ?>   
               </div>
                  <div class="swiper-pagination"></div>
               </div>
         </div>
      </div>
   </div>
</section>
<!--------------- End Our Core Services ------------>

