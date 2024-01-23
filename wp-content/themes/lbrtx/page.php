<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package libertex
 */

get_header();

?> 

<main>
  <?php if (!is_front_page()) : ?>
    <section class="registration__bg"></section>
  <?php endif;?>

  <?php the_content(); ?>

</main>
<?php
get_footer();
