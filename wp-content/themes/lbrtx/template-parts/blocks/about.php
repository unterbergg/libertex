<?php

if (!defined('ABSPATH')) exit;

if (function_exists('get_field')) {
  $blocks = get_field('blocks');
  $cta = get_field('cta');
}

if (!$blocks) return;
?>

<section class="about">
  <div class="wrapper">
    <div class="about__row">
      <div class="about__col">
        <?php foreach ($blocks as $block) : ?>
          <div>
            <?php echo $block['text']; ?>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="about__col">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/About.jpg" alt="About block">
      </div>
    </div>
    <?php if ($cta['link'] && $cta['text']) : ?>
      <div class="about__cta">
        <a href="<?php echo $cta['link']; ?>" class="button">
          <span>
            <?php echo $cta['text']; ?>
          </span>
        </a>
      </div>
    <?php endif; ?>
  </div>
</section>