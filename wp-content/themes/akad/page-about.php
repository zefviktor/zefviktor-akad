
<?php
    /*
    Template Name: about us
    */
?>
<?php
get_header();
?>
    <main>
        <section class="hero hero__background">
            <div class="hero__background-about">
                <div class="container">
                    <div class="hero__new-page">
                        <div class="hero__new-page-title">
                            <h1 class="word__new-page-title">about us</h1>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <p class="word__new-page-subtitle">home / about</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-us__posts container">
            <?php foreach(getAboutUs() as $about): ?>
                <div class="post__type-one">
                    <div class="post__type-one-content">
                        <div class="post__type-one-content-title word">
                            <div>
                                <div class="word__background">
                                </div>
                            </div>
                            <h2 class="word__title">
                                <?php echo $about['title'] ?>
                            </h2>
                        </div>
                        <p class="post__type-one-content-subtitle word__post-subtitle">
                            <?php echo $about['subtitle'] ?>
                        </p>
                        <p class="post__type-one-content-text word__post-text">
                            <?php echo $about['text']?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
        <section class="container">
            <div class="post__type-general">
                <div class="post__type-general-title word">
                    <div>
                        <div class="word__background">
                        </div>
                    </div>
                    <h2 class="word__title">
                         <?php echo get_theme_mod( 'zef_content_some-benefits__general-title' ); ?>
                    </h2>
                </div>
            </div>
            <p class="post__type-general-subtitle word__subtitle">
                <?php echo get_theme_mod( 'zef_content_some-benefits__general-text' ); ?>
            </p>
            <div class="post__type-two-content">
                <?php foreach(getSomeBenefits() as $someBenefit): ?>
                    <div class="post__type-two-content-item">
                        <div class="post__type-two-content-item-title">
                            <div class="word__post-icon-bg">
                                <div class="word__post-icon-bg-text">
                                    </i><?php echo $someBenefit['icon']?>
                                </div>
                            </div>
                            <h3 class="word__post-title-two">
                                <?php echo $someBenefit['title']?>
                            </h3>
                        </div>
                        <p class="word__post-text">
                            <?php echo $someBenefit['text']?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        <section class="container dream-team">
            <div class="post__type-general">
                <div class="post__type-general-title word">
                    <div>
                        <div class="word__background">
                        </div>
                    </div>
                    <h2 class="word__title">
                       <?php echo get_theme_mod( 'zef_content_dream-team__general-title' ); ?>
                    </h2>
                </div>
            </div>
            <p class="post__type-general-subtitle word__subtitle">
                <?php echo get_theme_mod( 'zef_content_dream-team__general-text' ); ?>
            </p>
            <div class="post__type-general-content">
                <?php foreach(getTheDreamTeam() as $theDreamTeam): ?>
                    <div class="post__type-general-content-icon">
                        <img  height="auto" width="100%" src="<?php echo wp_get_attachment_url($theDreamTeam['picture']) ?>"  alt="people"/>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        <section class="container">
            <div class="bar">
                <div class="bar-item">
                    <p class="word__post-bottom">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                    </p>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="">
                        <p class="button__text  button__icon-light">read more</p>
                    </a>
                </div>
            </div>
        </section>
        <section class="container bottom">
            <div class="testimonials bottom__content">
                <div class="testimonials__content">
                    <div class=testimonials__content-wrapper>
                        <div id="carouselExampleIndicators" class="main carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="testimonials__content-wrapper-item">
                                        <div class="testimonials__content-wrapper-item-title">
                                            <img class="" src="<?php echo Q_IMG_DIR; ?>/icon_avatar-1.png" height="82" width="83" alt="interior"/>
                                        </div>
                                        <p class="testimonials__content-wrapper-item-text word__post-text">
                                            Quisque iaculis lorem vestibulum eros vehicula, non congue elit dictum.
                                            Donec mollis aliquet lorem, eu porttitor sapien semper in. Duis ac erat
                                            luctus, gravida lectus sit amet, consectetur orci. Suspendisse libero mauris.
                                        </p>
                                        <div class="testimonials__content-wrapper-item-button">
                                            <a href="zaglushka.html" class="">
                                                <p class="button__text  button__icon-testimonials">john doe</p>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="testimonials__content-wrapper-item">
                                        <div class="testimonials__content-wrapper-item-title">
                                            <img class="" src="<?php echo Q_IMG_DIR; ?>/icon_avatar-1.png" height="82" width="83" alt="interior"/>
                                        </div>
                                        <p class="testimonials__content-wrapper-item-text word__post-text">
                                            Quisque iaculis lorem vestibulum eros vehicula, non congue elit dictum.
                                            Donec mollis aliquet lorem, eu porttitor sapien semper in. Duis ac erat
                                            luctus, gravida lectus sit amet, consectetur orci. Suspendisse libero mauris.
                                        </p>
                                        <div class="testimonials__content-wrapper-item-button">
                                            <a href="zaglushka.html" class="">
                                                <p class="button__text  button__icon-testimonials">john doe</p>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="testimonials__content-wrapper-item">
                                        <div class="testimonials__content-wrapper-item-title">
                                            <img class="" src="<?php echo Q_IMG_DIR; ?>/icon_avatar-1.png" height="82" width="83" alt="interior"/>
                                        </div>
                                        <p class="testimonials__content-wrapper-item-text word__post-text">
                                            Quisque iaculis lorem vestibulum eros vehicula, non congue elit dictum.
                                            Donec mollis aliquet lorem, eu porttitor sapien semper in. Duis ac erat
                                            luctus, gravida lectus sit amet, consectetur orci. Suspendisse libero mauris.
                                        </p>
                                        <div class="testimonials__content-wrapper-item-button">
                                            <a href="zaglushka.html" class="">
                                                <p class="button__text  button__icon-testimonials">john doe</p>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <ol class="main__carousel">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="main__carousel-item active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="main__carousel-item"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2" class="main__carousel-item"></li>
                            </ol>
                        </div
                    </div>
                </div>
            </div>

            <div class="client bottom__content">
                <div class="client__content">
                    <?php foreach(getClients() as $client): ?>
                        <a href="zaglushka.html" class="client__content-wrapper">
                            <div class="client__content-wrapper-item">
                                <div class="">
                                    <img height="auto" width="100%" src="<?php echo wp_get_attachment_url($client['picture'])?>"  alt="clients"/>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>


<?php
get_footer();
?>

