<?php 

$team_title     =   get_field('team_title');
$team_content   =   get_field('team_content');
$social_network     =   get_field('social_network');
 
?>

<section class="container team_blcok">

    <?php if(isset($team_content) && $team_content ): ?>
        <div class="team_title">
            <div class="line_title"></div>
                <h2><?php echo $team_title; ?></h2>
            <div class="line_title"></div>
        </div>

        <div class="row row-cols-1 row-cols-md-4 g-1 row-content">
            <?php foreach($team_content as $content):?>

                <div class="col full_person_column">
                    <div class="card person_image">
                        <img src="<?php echo $content['person_image']['url']; ?>" class="card-img-top" alt="...">
            
                        <div class="social_network_blcok">
                            <?php foreach($content['social_network'] as $social): ?>
                                <a href="<?php echo $social['team_social_url']; ?>">
                                    <img src="<?php echo $social['team_social_icon']['url'];  ?>" alt="">
                                </a>
                            <?php endforeach; ?>
                        </div>

                        <div class="card-body team_partner_body pt-2 pb-3 ">
                            <h5 class="card-title"><?php echo  $content['person_name']; ?></h5>
                            <p class="card-text"><?php echo  $content['person_position']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
 
        <?php endif; ?>
   
</section>