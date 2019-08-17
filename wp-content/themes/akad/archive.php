<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package akad
 */

get_header();
?>

    <main>
        <section class="hero hero__background">
            <div class="hero__background-blog">
                <div class="container">
                    <div class="hero__new-page">
                        <div class="hero__new-page-title">
                            <h1 class="word__new-page-title">blog posts</h1>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <p class="word__new-page-subtitle">home / blog</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="blog container">
            <div class="blog__posts">
                <div class="blog__posts-post">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail();?>
                        </a>
                        <div class="blog__posts-post-content">
                            <div class="blog__posts-post-content-info">
                                <div class="button__text button__icon-all-category">
                                    <small><?php the_time('F jS, Y'); ?></small>
                                </div>
                                <div class="blog__posts-post-content-info-item">
                                    <div class="blog__posts-post-content-info-item-position word__fontawesome word__fontawesome-coment">
                                        <i class="far fa-comment-alt"></i>
                                    </div>
                                    <p>12</p>
                                </div>
                                <div class="blog__posts-post-content-info-item">
                                    <div class="blog__posts-post-content-info-item-position word__fontawesome word__fontawesome-heart">
                                        <i class="fas fa-heart"></i>
                                    </div>
                                    <p>7</p>
                                </div>
                            </div>

                            <div class="blog__posts-post-content-title word__post-title-two">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                            <div class="blog__posts-post-content-text word__post-text">
                                <?php the_content(); ?>
                            </div>
                            <div class="blog__posts-post-content-button">
                                <a href="<?php the_permalink(); ?>" class="button__continue-reading">
                                    <p class="word__post-subtitle">
                                        continue reading
                                    </p>
                                    <div class="word__post-subtitle button__continue-reading-icon">
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endwhile;
                        the_posts_navigation();
                    else :
                        get_template_part( 'template-parts/content', 'none' );
                        ?>
                        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="blog__sidebar">
                <?php
                get_sidebar();
                ?>
            </div>
        </section>
    </main>
<?php
get_footer();









