<?php

if (!defined('ABSPATH')) exit;

if (function_exists('get_field')) {
  $title = get_field('title');
}
$recent_posts_array = get_posts(['numberposts' => 7]); 

if (!empty($recent_posts_array)): ?>
  <section class="news">
    <div class="wrapper">
      <div class="news__header">
        <?php echo $title; ?>
        <a href="#" class="button ghost accent">
          Читать все
        </a>
      </div>
      <div class="news__items-large">
        <?php foreach (array_slice($recent_posts_array, 0, 3) as $item): ?>
          <a href="<?php echo get_field('original_url', $item->ID); ?>" class="news__item">
            <?php echo get_the_post_thumbnail($item->ID, 'medium', ['class' => 'news__thumb']); ?>
            <h6 class="news__title">
              <?php echo $item->post_title; ?>
            </h6>
            <p class="news__description">
              <?php echo $item->post_excerpt; ?>
            </p>
            <span class="news__meta">
              <?php echo get_the_date("D, m/d/Y - H:i", $item->ID); ?>
            </span>
          </a>
        <?php endforeach; ?>
      </div>
      <?php if (!empty(array_slice($recent_posts_array, 3, 4))): ?>
        <hr>
        <div class="news__items">
          <?php foreach (array_slice($recent_posts_array, 3) as $item): ?>
            <a href="<?php echo get_field('original_url', $item->ID); ?>" class="news__item">
              <h6 class="news__title">
                <?php echo $item->post_title; ?>
              </h6>
              <span class="news__meta">
                <?php echo get_the_date("D, m/d/Y - H:i", $item->ID); ?>
              </span>
            </a>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>
<?php endif; ?>