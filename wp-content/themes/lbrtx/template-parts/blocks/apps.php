<?php

if (!defined('ABSPATH')) exit;

if (function_exists('get_field')) {
  $items = get_field('items');
  $cta = get_field('cta');
}
if(!$items) return;
?>

<section class="apps">
  <div class="wrapper">
    <div class="apps__items">
      <?php foreach ($items as $item) : ?>
        <div class="apps__item">
          <div>
            <h5 class="apps__title">
              <span class="text-colored">
                <?php echo $item['title']; ?>
              </span>
            </h5>
            <p>
              <?php echo $item['text']; ?>
            </p>
          </div>
          
          
          <?php if ($item['links']) : ?>
            <div class="apps__links">
              <?php foreach ($item['links'] as $link) : ?>
              
                <?php if ($link['acf_fc_layout'] == 'app_store' && $link['link'] != '') : ?>
                  <a href="<?php $link['link']; ?>">
                    <?php echo file_get_contents(get_stylesheet_directory() . '/assets/img/app_store.svg'); ?>
                  </a>
                <?php endif; ?>
                <?php if ($link['acf_fc_layout'] == 'google_play' && $link['link'] != '') : ?>
                  <a href="<?php $link['link']; ?>">
                  <?php echo file_get_contents(get_stylesheet_directory() . '/assets/img/google_play.svg'); ?>
                  </a>
                <?php endif; ?>
                <?php if ($link['acf_fc_layout'] == 'text_link' && $link['link'] != '' && $link['text'] != '') : ?>
                  <a href="<?php echo $link['link']; ?>" class="button">
                    <span><?php echo $link['text']; ?></span>
                  </a>
                <?php endif; ?>
              <?php endforeach; ?>
            </div>
          <?php endif;?>
        </div>

      <?php endforeach; ?>
    </div>
    <?php if ($cta['link'] && $cta['text']) : ?>
      <div class="apps__cta">
        <a href="<?php echo $cta['link']; ?>" class="button ghost">
          <?php echo $cta['text']; ?>
        </a>
      </div>
    <?php endif; ?>
  </div>
</section>