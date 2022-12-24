<?php get_header(); ?>
    <div class="container">
        <section class="section_secondary">
            <div class="boxes">
                <!-- ループ開始 -->
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="card">
                    <a href="<?php the_permalink(); ?>" class="link">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/news.jpg" alt="thumbnail" class="img">
                        <div class="meta">
                            <time class="date">2022.11.19</time>
                            <h2 class="title">ホームページ開設</h2>
                            <p class="txt">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが...</p>
                        </div>
                    </a>
                </article>
                <?php endwhile; endif; ?>
                <!-- ループ終わり -->
            </div>
        </section>
    </div>
<?php get_footer(); ?>