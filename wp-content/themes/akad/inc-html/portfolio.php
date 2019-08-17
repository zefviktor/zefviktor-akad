<section class="portfolio container">
    <div class="post__type-general-title word">
        <div>
            <div class="word__background">
            </div>
        </div>
        <h2 class="word__title">
            <?php echo get_theme_mod( 'zef_content_our-portfolio__general-title' ); ?>
        </h2>
    </div>
    <p class="post__type-general-subtitle word__subtitle">
        <?php echo get_theme_mod( 'zef_content_our-portfolio__general-text' ); ?>
    </p>
    <div class="portfolio__content">
        <div class="portfolio__content-item-one">
            <div class="item-portfolio">
                <h3 class="word__choose-title">
                    choose category
                </h3>
                <div class="button__icon-all-category">
                    <p class="button__text">all</p>
                </div>
                <ul>
                    <li class="word__choose-text">
                        webdesign
                    </li>
                    <li class="word__choose-text">
                        graphic design
                    </li>
                    <li class="word__choose-text">
                        fashion
                    </li>
                    <li class="word__choose-text">
                        logo design
                    </li>
                    <li class="word__choose-text">
                        advertising
                    </li>
                </ul>
            </div>
        </div>
        <div class="portfolio__content-item-two">
            <div class="posts-gride">
                <?php foreach(getPortfolios() as $portfolio): ?>
                    <div class="post-item">
                        <img class="post-item-icon"  height="auto" width="100%" src="<?php echo wp_get_attachment_url($portfolio['picture'])?>"  alt="interior"/>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>