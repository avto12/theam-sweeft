<?php 

$partner_title = get_field('partner_title');

$partner_content = get_field('partner_content');

?>






<!----------------- Start Our Partner -------------->
<section class="column-partner">
   <div class="container-fulid partner-container">
      <div class="title-partner-box">
         <h2><?php echo $partner_title; ?></h2>
      </div>

      <?php if(isset($partner_content) && $partner_content): ?> 
         <div class="partenr-tab-box"> 
            <ul class="nav nav-tabs main-tab" id="myTab" role="tablist">
               <div class="Swiper-partner">
                  <div class="swiper-wrapper">
   
                  <?php foreach($partner_content as $key => $content_tab_title): ?>

                     <div class="swiper-slide">
                        <li class="nav-item tab-text-top" role="presentation">
                           <button class="nav-link <?php if ($key === 0) :  ?>  active <?php endif; ?> link-tab" id="tabId-tab<?= $key ?>" data-bs-toggle="tab" data-bs-target="#tabId<?= $key ?>" type="button" role="tab" aria-controls="home" aria-selected="true">
                              <h5> <?php echo $content_tab_title['company_name']; ?> </h5>
                              <h6> <?php echo $content_tab_title['country']; ?> </h6>
                           </button>
                        </li>
                     </div>

                  <?php endforeach; ?>
   
                  </div>
               </div>
            </ul>

            <!-- logo -->
   
            <div class="tab-content" id="myTabContent">
   
            <?php foreach($partner_content as $key => $content_tab_partner): ?>
               
               <div class="tab-pane fade show <?php if ($key === 0) : ?> active <?php endif; ?> tab-content activetabnew" id="tabId<?= $key ?>" role="tabpanel" aria-labelledby="tabId-tab<?= $key ?>">
                  <p>
                     <?php echo $content_tab_partner['describe'] ?> 
                  </p>
                  <div class="partner-logo"> 
                     <img src="<?php echo $content_tab_partner['logo']['url'] ?>" alt="Simon Redfern, CEO">
                     <h6><?php echo $content_tab_partner['ceo'] ?></h6>
                  </div>
               </div>

            <?php endforeach ?>

            </div>
         </div>

      <?php endif; ?>

   </div>
</section>
<!----------------- End Our Partner -------------->
