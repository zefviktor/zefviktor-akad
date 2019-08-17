
<?php
    /*
    Template Name: blog
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

        <?php require 'inc-html/blog.php'?>
    </main>










<?php
get_footer();
?>
