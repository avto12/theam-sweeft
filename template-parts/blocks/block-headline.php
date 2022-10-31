<?php

    $headline = get_field('headline');
    $position_horizontal =  get_field('position_horizontal');
    $position_vertical   =  get_field('position_vertical');
    $background_size     =  get_field('background_size')


?>


<main class="container d-flex <?=$position_horizontal; ?> <?=$position_vertical; ?> <?=$background_size; ?> ">
    <div class="headline-block"> 
        <h1><?php echo $headline; ?></h1>
    </div>
</main>