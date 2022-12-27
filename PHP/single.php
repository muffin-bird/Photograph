<?php get_header(); ?>
    <div class="container">
        <section class="section">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="post">
                <div class="headarea">
                    <h2 class="heading"><?php the_title(); ?></h2>
                    <time class="date" datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time>
                </div>
                <div class="thumbnail single"><?php the_post_thumbnail(); ?></div>
                <p class="text"><?php the_content(); ?></p>
            </article>
            <?php endwhile; endif; ?>
        </section>
    </div>
<?php get_footer(); ?>