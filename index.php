
Copy code
<?php get_header(); ?>

<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>
    <?php endwhile; else : ?>
        <p><?php _e('Sorry, no content found.'); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
