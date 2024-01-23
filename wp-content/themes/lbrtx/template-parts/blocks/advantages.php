<?php

if (!defined('ABSPATH')) exit;

if (function_exists('get_field')) {
  $title = get_field('title');
  $list = get_field('list');
}
?>

<section class="features">
  <div class="wrapper">
    <?php echo $title; ?>
    <?php if ($list) : ?>
      <div class="features__items">
        <?php foreach ($list as $item) : 
          if ($item['text'] != '') :
            ?>
            <div class="features__item">
              <?php echo file_get_contents(get_stylesheet_directory() . '/assets/icons/check.svg'); ?>
              <?php echo $item['text']; ?>
            </div>
            <?php
          endif;
        endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>