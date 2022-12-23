<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/stylesheets/css/destyle.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/stylesheets/css/style.css">
    <title>name</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="fixed">
        <div class="hd">
            <div class="fx">
                <h1 class="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="link">Name</a>
                </h1>
                <div class="socialBtnSp">
                    <a href="" target="_blank" class="link">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" width="18px" height="18px" alt="Instagram">
                    </a>
                </div>
            </div>
            <nav>
                <ul class="menu">
                    <li class="photography"><a href="photography.html" class="link">Photography</a></li>
                    <li class="about"><a href="<?php echo esc_url( home_url( '/about/' ) ) ?>" class="link">About</a></li>
                    <li class="news"><a href="news.html" class="link">News</a></li>
                    <li class="contact"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="link">Contact</a></li>
                </ul>
            </nav>
            <div class="socialBtn">
                <a href="" target="_blank" class="link">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" width="15px" height="15px" alt="Instagram">
                </a>
            </div>
            <div class="copy">
                <small class="copyright">© Name</small>
            </div>
        </div>
    </header>