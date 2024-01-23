<?php

if (!defined('ABSPATH')) exit;

add_filter('block_categories_all', 'lbrtx_block_categories', 10, 2);
function lbrtx_block_categories($block_categories, $editor_context) {
    if (!empty( $editor_context->post)) {
        array_push(
            $block_categories,
            array(
                'slug'  => 'lbrtx',
                'title' => __('Libertex', 'lbrtx'),
                'icon'  => null,
            )
        );
    }
    return $block_categories;
}

add_action('acf/init', 'rntbx_acf_init_blocks');
function rntbx_acf_init_blocks() {

    if (function_exists('acf_register_block_type')) {
        // Section block
        acf_register_block_type(array(
          'name'              => 'section',
          'title'             => __('Section', 'lbrtx'),
          'description'       => __('Section block', 'lbrtx'),
          'render_template'   => 'template-parts/blocks/section.php',
          'category'          => 'lbrtx',
          'supports'          => array(
              'anchor' => true,
              'jsx' => true
          ),
          'keywords'          => array('lbrtx', 'section'),
        ));

        // Registration form block
        acf_register_block_type(array(
          'name'              => 'registration',
          'title'             => __('Registration form', 'lbrtx'),
          'description'       => __('Registration form block', 'lbrtx'),
          'render_template'   => 'template-parts/blocks/registration-form.php',
          'category'          => 'lbrtx',
          'supports'          => array(
              'jsx' => true
          ),
          'mode'              => 'edit',
          'keywords'          => array('lbrtx', 'registration', 'form'),
        ));

        // Hero block
        acf_register_block_type(array(
          'name'              => 'hero',
          'title'             => __('Hero', 'lbrtx'),
          'description'       => __('Hero block', 'lbrtx'),
          'render_template'   => 'template-parts/blocks/hero.php',
          'category'          => 'lbrtx',
          'supports'          => array(
              'jsx' => true
          ),
          'mode'              => 'edit',
          'keywords'          => array('lbrtx', 'hero'),
        ));

        // Tools block
        acf_register_block_type(array(
          'name'              => 'tools',
          'title'             => __('Tools', 'lbrtx'),
          'description'       => __('Tools block', 'lbrtx'),
          'render_template'   => 'template-parts/blocks/tools.php',
          'category'          => 'lbrtx',
          'supports'          => array(
              'jsx' => true
          ),
          'mode'              => 'edit',
          'keywords'          => array('lbrtx', 'tools'),
        ));
        

        // Advantages block
        acf_register_block_type(array(
          'name'              => 'advantages',
          'title'             => __('Advantages', 'lbrtx'),
          'description'       => __('Advantages block', 'lbrtx'),
          'render_template'   => 'template-parts/blocks/advantages.php',
          'category'          => 'lbrtx',
          'supports'          => array(
              'jsx' => true
          ),
          'mode'              => 'edit',
          'keywords'          => array('lbrtx', 'advantages'),
        ));
        

        // Platform block
        acf_register_block_type(array(
          'name'              => 'platform',
          'title'             => __('Platform', 'lbrtx'),
          'description'       => __('Platform block', 'lbrtx'),
          'render_template'   => 'template-parts/blocks/platform.php',
          'category'          => 'lbrtx',
          'supports'          => array(
              'jsx' => true
          ),
          'mode'              => 'edit',
          'keywords'          => array('lbrtx', 'platform'),
        ));
        

        // News block
        acf_register_block_type(array(
          'name'              => 'news',
          'title'             => __('News', 'lbrtx'),
          'description'       => __('News block', 'lbrtx'),
          'render_template'   => 'template-parts/blocks/news.php',
          'category'          => 'lbrtx',
          'supports'          => array(
              'jsx' => true
          ),
          'mode'              => 'edit',
          'keywords'          => array('lbrtx', 'news'),
        ));
        

        // Apps block
        acf_register_block_type(array(
          'name'              => 'apps',
          'title'             => __('Apps', 'lbrtx'),
          'description'       => __('Apps block', 'lbrtx'),
          'render_template'   => 'template-parts/blocks/apps.php',
          'category'          => 'lbrtx',
          'supports'          => array(
              'jsx' => true
          ),
          'mode'              => 'edit',
          'keywords'          => array('lbrtx', 'apps'),
        ));
        

        // About block
        acf_register_block_type(array(
          'name'              => 'about',
          'title'             => __('About', 'lbrtx'),
          'description'       => __('About block', 'lbrtx'),
          'render_template'   => 'template-parts/blocks/about.php',
          'category'          => 'lbrtx',
          'supports'          => array(
              'jsx' => true
          ),
          'mode'              => 'edit',
          'keywords'          => array('lbrtx', 'about'),
        ));
    }

}