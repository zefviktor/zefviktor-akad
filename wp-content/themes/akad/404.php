<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package akad
 */

get_header();
?>
    <section class="hero hero__background">
        <div class="hero__background-blog">
            <div class="container">
                <div class="hero__new-page">
                    <div class="hero__new-page-title">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <p class="word__error-oops404">404</p>
                        </a>
                        <p class="word__error-oops"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'akad' ); ?></p>
                        <p class="word__error-content"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'akad' ); ?></p>

                        <?php
                        get_search_form();

                        ?>
                            </div><!-- .page-content -->
                        </section><!-- .error-404 -->
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
get_footer();
