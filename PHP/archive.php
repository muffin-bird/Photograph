<?php get_header(); ?>
    <div class="container">
        <section class="section_secondary">
            <div class="boxes">
                <!-- ループ開始 -->
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="card">
                    <a href="<?php the_permalink(); ?>" class="link">
                        <span class="thumbnail"><?php the_post_thumbnail(); ?></span>
                        <div class="meta">
                            <time class="date" datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time>
                            <h2 class="title"><?php the_title(); ?></h2>
                            <p class="txt"><?php the_content(); ?></p>
                        </div>
                    </a>
                </article>
                <?php endwhile; endif; ?>
                <!-- ループ終わり -->
            </div>
        </section>
    </div>
<?php get_footer(); ?>