<?php

if (!defined('ABSPATH')) exit;

if (function_exists('get_field')) {
  $title = get_field('title');
  $items = get_field('items');
  $cta = get_field('cta');
  $partners = get_field('partners');
}
?>

<?php if ($items) : ?>
  <section class="online">
    <div class="wrapper">
      <?php echo $title; ?>
      <div class="online__row">
        <div class="online__col">
          <div class="online__items">
            <?php foreach ($items as $item) : 
              $icon = $item['icon'];
              ?>
              <div class="online__item">
                <span class="online__icon">
                  <?php echo wp_get_attachment_image($icon['ID'], 'thumb'); ?>
                </span>
                <span>
                  <?php echo $item['text']; ?>
                </span>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="online__col">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ipad.png" alt="IPad">
        </div>
      </div>
      <?php if ($cta['link'] && $cta['text']) : ?>
        <div class="online__cta">
          <a href="<?php echo $cta['link']; ?>" class="button">
            <span>
              <?php echo $cta['text']; ?>
            </span>
          </a>
        </div>
      <?php endif; ?>
    </div>
  </section>
<?php endif;?>

<?php if ($items) : ?>
  <section class="partners">
    <div class="wrapper">
      <div class="partners__wrapper">
        <?php foreach ($partners as $partner) : ?>
          <?php echo wp_get_attachment_image($partner['ID'], 'full', ['alt' => $partner['alt']]); ?>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
<?php endif;?>