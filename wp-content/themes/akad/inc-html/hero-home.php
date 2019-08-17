
<section class="hero hero__background">
            <div class="hero__background-home">
                <div class="container">
                    <div class="hero__content">
                        <div class="hero__content-one">
                            <button class="hero__content-one-button">
                                <?php echo get_theme_mod( 'zef_content_hero__general-up-title' ); ?>
                            </button>
                            <div class="hero__content-one-title">
                                <a onclick="smoothScroll('content')">
                                    <h1 class="hero__content-one-title-style word__general">
                                        <?php echo get_theme_mod( 'zef_content_hero__general-title' ); ?>
                                    </h1>
                                </a>
                            </div>
                            <p class="hero__content-one-text word__text">
                                <?php echo get_theme_mod( 'zef_content_hero__general-text' ); ?>
                            </p>
                        </div>
                        <div class="hero__content-two">
                                <div class="hero__content-two-title">
                                    <?php foreach(getImageHero() as $imageHero): ?>
                                        <a class="hero__content-two-title-icon">
                                            <img class=""  src="<?php echo wp_get_attachment_url($imageHero['image'])?>"  alt="interior"/>
                                        </a>
                                    <?php endforeach; ?>
                                </div>

                            <div class="hero__content-two-item">
                                <div class="hero__content-two-item-style word">
                                    <div class="word__background"></div>
                                    <h2 class="word__title">
                                        <?php echo get_theme_mod( 'zef_content_hero__content-title' ); ?>
                                    </h2>
                                </div>
                                <p class="hero__content-two-item-text word__text">
                                    <?php echo get_theme_mod( 'zef_content_hero__content-text' ); ?>
                                </p>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hero__content-two-item-button">
                                    <p class="button__text  button__icon-light">
                                        <?php echo get_theme_mod( 'zef_content_hero__content-button' ); ?>
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>