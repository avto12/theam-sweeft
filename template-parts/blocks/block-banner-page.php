<?php 

$background_size    =   get_field('background_size');
$title_background   =   get_field('title_background');


$banner             =   get_field('banner');
$banner_video       =   get_field('banner_video');
$baner_title        =   get_field('banner_title');
$banner_paragraph   =   get_field('banner_paragraph');
$paragraph_size     =   get_field('paragraph_size');
$position           =   get_field("position");
$show_button        =   get_field('show_button');
$button_readmode    =   get_field('btn_readmore');
$downicon_content   =   get_field('downicon_content');

 
 
?>

 
<section id="<?= $background_size ?>" class="bg-image-class" 
        style="background: 
            linear-gradient(to right,rgba(23,7,56,.3),rgba(23,7,56,.3)), 
            url(<?php echo $banner['url'];?>)">  

    <?php if(!empty($banner_video)): ?>
        <div class="videoupload" id="" > 
            <video  
                muted 
                autoplay 
                loop 
                src="<?php echo $banner_video; ?>">
            </video>
        </div>
    <?php endif; ?>

    <div class="container container_my"> 
        <div id="<?= $title_background ?>" class="banner-image-class <?= $position; ?>"> 
            <div class="cursor_banner <?=$paragraph_size;?>">
                <h1><?php echo $baner_title; ?></h1>
                <p class="par_banner"> <?php echo $banner_paragraph; ?> </p>
            </div>
            
            <?php foreach($show_button as $show_button): ?>
                <?php if(!empty($button_readmode['url']) or !empty($button_readmode['title'])): ?>
                    <div class="btn_content"> 
                        <a href="<?php echo $button_readmode['url']; ?>" target="<?php echo $button_readmode['target']; ?>"> 
                            <div class="btn_read_more <?= $show_button ?>">
                                <span> <?php echo $button_readmode['title']; ?></span>
                            </div>
                        </a>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>

        </div> 

        <div class="down-column">

            <?php if(isset($downicon_content) && $downicon_content): ?>
                <?php foreach($downicon_content as $icon_content): ?>

                    <div class="banner_down"  onclick="location.href='<?php echo $icon_content['downiconurl']; ?>'">
                        <div class="scroldown" >
                            <img class="arrow" src="<?php echo $icon_content['donwicon']['url']; ?>" alt="">
                        </div>
                        <p><?php echo $icon_content['donw_title']; ?></p>
                    </div>

                <?php endforeach; ?>
            <?php endif;?>

        </div>
    
    </div>
</section>