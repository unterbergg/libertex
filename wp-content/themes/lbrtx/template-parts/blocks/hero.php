<?php

if (!defined('ABSPATH')) exit;

if (function_exists('get_field')) {
  $title = get_field('title');
  $buttons = get_field('buttons');
}
?>

<section class="hero">
  <div class="wrapper">
    <?php echo $title; ?>
    <?php if ($buttons) : ?>
      <div class="hero__buttons">
        <?php 
          foreach($buttons as $button) : 
            if ($button['link'] && $button['text']) :
            ?>
            <a href="<?php echo $button['link']; ?>" 
              class="button rounded <?php echo $button['style'] != 'default' ? $button['style'] : ''; ?>"
            >
              <span>
                <?php echo $button['text']; ?>
              </span>
            </a>
            <?php 
            endif;
          endforeach; 
        ?>
      </div>
    <?php endif; ?>
    <div class="hero__img mobile-only">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.png" alt="IPhone">
    </div>
  </div>
  
</section>