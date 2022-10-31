<?php




add_action('acf/init', 'my_acfregister_blocks');
function my_acfregister_blocks() {
	
    if( function_exists( 'acf_register_block' ) ) {

        acf_register_block(
            array(
                'name'              =>  'headline',
                'title'             =>  __('headline'),
                'render_callback'   =>  'my_acf_black_render_callback',
                'catgeory'          =>  'headline',
                'icon'              =>  'plus-alt2',
                'keywords'          =>  array('headline', 'quote')
            )
        );

        acf_register_block( 

            array(
                'name'              =>  'slider',
                'title'             =>  __('Slider_header'),
                'description'       =>  __('slider for header'),
                'render_callback'   =>  'my_acf_black_render_callback',
                'category'          =>  'slider',
                'icon'              =>  'slides',
                'keywords'          =>  array( 'slider_header', 'quote')
            )
        );

        acf_register_block(
            
            array(
                'name'              =>  'international',
                'title'             =>  __('international'),
                'render_callback'   =>  'my_acf_black_render_callback',
                'category'          =>  'international-section',
                'icon'              =>  'admin-customizer',
                'keywords'          =>  array('international', 'quote')
            )
        );

        acf_register_block(

            array(

                'name'              =>  'services',
                'title'             =>  __('services'),
                'render_callback'   =>  'my_acf_black_render_callback',
                'category'          =>  'services',
                'icon'              =>  'admin-multisite',
                'keywords'          =>  array('services', 'quote')
            )
        );

        acf_register_block(

            array(
                'name'              =>  'simple-work',
                'title'             =>  __('simple-work'),
                'render_callback'   =>  'my_acf_black_render_callback',
                'category'          =>  'simple-work',
                'icon'              =>  'admin-network',
                'keywords'          =>  array('simple work', 'quote')
            )
        );

        acf_register_block(

            array(
                'name'              =>  'partners-say',
                'title'             =>  __('partners-say'),
                'render_callback'   =>  'my_acf_black_render_callback',
                'category'          =>  'partners-say',
                'icon'              =>  'buddicons-buddypress-logo',
                'keywords'          =>  array('partners say', 'quote')
            )
        );

        acf_register_block(

            array(
                'name'              =>  'blog',
                'title'             =>  __('blog'),
                'render_callback'   =>  'my_acf_black_render_callback',
                'category'          =>  'blog',
                'icon'              =>  'welcome-write-blog',
                'keywords'          =>  array('blog', 'quote')
            )
        );




        // page --------------

        acf_register_block(
            array(
                'name'              => 'fullstack',
                'title'             =>  __('full_stack_section'),
                'render_callback'   =>  'my_acf_black_render_callback',
                'category'          =>  'fullstack',
                'icon'              =>  'insert-before',
                'keywords'          =>  array('fullstack', 'quote')
            ),
        );


        acf_register_block(
            array(
                'name'              =>  'service-grid',
                'title'             =>  __('service-grid'),
                'render_callback'   =>  'my_acf_black_render_callback',
                'category'          =>  'service_grid',
                'icon'              =>  'grid-view',
                'keywords'          =>  array('service-grid', 'quote')
            )
        );

        acf_register_block(
            array(
                'name'              =>  'ourwork',
                'title'             =>  __('ourwork'),
                'render_callback'   =>  'my_acf_black_render_callback',
                'category'          =>  'ourwork',
                'icon'              =>  'nametag',
                'keywords'          =>  array('ourwork', 'quote')
            )
        );

        acf_register_block(
            array(
                'name'              =>  'banner-page',
                'title'             =>  __('banner-page'),
                'render_callback'   =>  'my_acf_black_render_callback',
                'catgeory'          =>  'banner-page',
                'icon'              =>  'welcome-view-site',
                'keywords'          =>  array('banner-page', 'quote')
            )
        );

        acf_register_block(
            array(
                'name'              =>  'team',
                'title'             =>  __('team'),
                'render_callback'   =>  'my_acf_black_render_callback',
                'catgeory'          =>  'team',
                'icon'              =>  'universal-access',
                'keywords'          =>  array('team', 'quote')
            )
        );

        acf_register_block(
            array(
                'name'              =>  'careers',
                'title'             =>  __('careers'),
                'render_callback'   =>  'my_acf_black_render_callback',
                'catgeory'          =>  'careers',
                'icon'              =>  'admin-customizer',
                'keywords'          =>  array('careers', 'quote')
            )
        );

        acf_register_block(
            array(
                'name'              =>  'relocation',
                'title'             =>  __('relocation'),
                'render_callback'   =>  'my_acf_black_render_callback',
                'catgeory'          =>  'relocation',
                'icon'              =>  'admin-site-alt2',
                'keywords'          =>  array('relocation', 'quote')
            )
        );

        acf_register_block(
            array(
                'name'              =>  'cv',
                'title'             =>  __('cv'),
                'render_callback'   =>  'my_acf_black_render_callback',
                'catgeory'          =>  'cv',
                'icon'              =>  'media-document',
                'keywords'          =>  array('cv', 'quote')
            )
        );

        acf_register_block(
            array(
                'name'              =>  'blog-archive',
                'title'             =>  __('blog-archive'),
                'render_callback'   =>  'my_acf_black_render_callback',
                'catgeory'          =>  'blog-archive',
                'icon'              =>  'admin-post',
                'keywords'          =>  array('blog-archive', 'quote')
            )
        );
        
        acf_register_block(
            array(
                'name'              =>  'vertical-slider',
                'title'             =>  __('vertical-slider'),
                'render_callback'   =>  'my_acf_black_render_callback',
                'catgeory'          =>  'vertical-slider',
                'icon'              =>  'media-interactive',
                'keywords'          =>  array('vertical-slider', 'quote')
            )
        );

        acf_register_block(
            array(
                'name'              =>  'contact',
                'title'             =>  __('contact'),
                'render_callback'   =>  'my_acf_black_render_callback',
                'catgeory'          =>  'contact',
                'icon'              =>  'feedback',
                'keywords'          =>  array('contact', 'quote')
            )
        );

        acf_register_block(
            array(
                'name'              =>  'map',
                'title'             =>  __('map'),
                'render_callback'   =>  'my_acf_black_render_callback',
                'catgeory'          =>  'map',
                'icon'              =>  'location-alt',
                'keywords'          =>  array('map', 'quote')
            )
        );

    };
}


function my_acf_black_render_callback( $block ){

    $slug = str_replace( 'acf/', '', $block['name']);

    if(file_exists(STYLESHEETPATH . "/template-parts/blocks/block-{$slug}.php")) {
        include(STYLESHEETPATH . "/template-parts/blocks/block-{$slug}.php");
    };

};


 