<?php get_header(); ?>
    <main>
        <h1><?php the_archive_title(); ?></h1>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
            <?php the_posts_pagination(); ?>
        <?php else : ?>
            <p><?php esc_html_e('Записей нет.', 'my-theme'); ?></p>
        <?php endif; ?>
    </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>