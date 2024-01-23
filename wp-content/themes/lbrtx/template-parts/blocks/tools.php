<?php 

if (!defined('ABSPATH')) exit;

if (function_exists('get_field')) {
  $title = get_field('title');
}

$tools = get_posts([
  'post_type' => 'tools',
  'numberposts' => -1,
  'order' => 'ASC',
  'orderby' => 'date'
]);

if (!empty($tools)):
?>
<section class="tools">
  <div class="wrapper">
    <?php echo $title; ?>
    
    <div class="tools__grid">
      <?php foreach ($tools as $tool): 
        $icon = get_field('icon', $tool->ID);
        $bg = get_field('bg', $tool->ID);
        ?>
        <div class="tools__item">
          <div class="tools__icon">
            <?php echo wp_get_attachment_image($icon['ID'], 'thumb'); ?>
          </div>
          <h5>
            <?php echo $tool->post_title; ?>
          </h5>
          <p>
            <?php echo $tool->post_content; ?>
          </p>
          <?php echo wp_get_attachment_image($bg['ID'], 'large', false,  ['class' => 'tools__item-bg', 'alt' => $bg['alt']]); ?>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="tools__link">
      <a href="javascript:void(0);" class="tools__more">
        <?php _e('Еще инструменты', 'lbrtx'); ?>
      </a>
    </div>
  </div>
</section>

<?php endif;