<?php

if (!defined('ABSPATH')) exit;

if (function_exists('get_field')) {
  $scrollTop = get_field('scroll_top');
  $anchor = get_field('anchor');
}
?>

<section id='section-<?php echo esc_html($anchor);?>' class="section section-light anchor-parent bg-aijiro-white <?php echo esc_html($block['className']) ?? ''; ?>">
  <span class="anchor" id="<?php echo esc_html($anchor); ?>"></span>
  <div class="container">
    <div class="row">
      <div class="content section-content-light col-xs-12 text-left">
        <InnerBlocks/>
    </div>  
  </div>
  <?php if($scrollTop) :?>
    <div class="scroll-top">
			<a href="#page-top" class="page-scroll btn-circle btn btn-default">
				<i class="icon icon-arrow-up">&nbsp;</i>
				<span class="sr-only">Top</span>
			</a>
		</div>
  <?php endif;?>
</section>