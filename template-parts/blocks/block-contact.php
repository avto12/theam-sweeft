<?php 


$bg_image   =   get_field('bg_image');
$title = get_field('title');


$name = get_field("name");
$email = get_field("email");
$message = get_field("message");



?>

<section class="contact_page_block" style="background: 
            linear-gradient(to right,rgba(63,44,101,.8),rgba(63,44,101,.8)), 
            url(<?php echo $bg_image['url'];?>)"> 
    <div class="container"> 
        <div class="row"> 
            <div class="col-md-6 d-flex justify-content-end "> 
                <div class="contact_title">
                    <h1><?php echo $title ?></h1>
                </div>
            </div>

            <div class="col-md-6 d-flex flex-column align-items-center justify-content-center"> 
                <div class="row">
                    <div class="col">
                        
                        <form method="post">
                        <?php
                            if (get_field('contact_form_shortcode')):
                                echo get_field('contact_form_shortcode');
                            else:
                                echo do_shortcode('[contact-form-7 id="1056" title="Contact form 1"]');
                            endif; 
                            echo "<div class='g-recaptcha' data-sitekey='some-key (original is right)'>"
                        ?>
                         
                        </form>
                    </div>
                </div>
                 

            </div>
        </div>
    </div>
</section>

 
<script src='https://www.google.com/recaptcha/api.js?onload=recaptchaOnload&render=explicit' async defer></script>
 

 
