<?php get_header(); ?>
    <main>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class(); ?>>
                    <h1><?php the_title(); ?></h1>
                    <div class="entry-content">
                        <?php the_content(); ?>
                        <?php edit_post_link(__('Редактировать', 'my-theme'), '<p>', '</p>'); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>