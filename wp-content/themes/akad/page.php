<?php
    /*
    Template Name: page
    */

get_header();
?>
    <main>
        <section class="hero hero__background">
            <div class="hero__background-home">
                <div class="container">
                    <div class="hero__content">
                        <div class="hero__content-one">
                            <button class="hero__content-one-button">
                                we’re
                            </button>
                            <div class="hero__content-one-title">
                                <h1 class="hero__content-one-title-style word__general">
                                    creative agency
                                </h1>
                            </div>
                            <p class="hero__content-one-text word__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                        <div class="hero__content-two">
                            <div class="hero__content-two-title">
                                <a class="hero__content-two-title-icon">
                                    <img class="" src="<?php echo Q_IMG_DIR; ?>/icon_hero.png" height="400" width="458" alt="interior"/>
                                </a>
                            </div>

                            <div class="hero__content-two-item">
                                <div class="hero__content-two-item-style word">
                                    <div class="word__background"></div>
                                    <h2 class="word__title">
                                        HISTORY OF AGENCY
                                    </h2>
                                </div>
                                <p class="hero__content-two-item-text word__text">
                                    Porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore
                                    et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis
                                    nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid
                                    ex ea commodi modi tempora incidunt ut labore.
                                </p>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hero__content-two-item-button">
                                    <p class="button__text  button__icon-light">read more</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>


<?php
get_footer();
?>

