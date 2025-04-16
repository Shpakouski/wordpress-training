<?php
if (!defined('ABSPATH')) exit;
/* Template Name: Главная страница */
get_header(); ?>
<main>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="home-content">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</main>
<?php get_footer(); ?>
