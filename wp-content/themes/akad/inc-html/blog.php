<section class="blog container">
    <div class="blog__posts">
        <div class="blog__posts-post">
            <?php
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => '36',
            );
            $query = new WP_Query($args);
            if($query->have_posts()) {
                while($query->have_posts()) {
                    $query->the_post();
                    ?>
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
                    <?php
                }
            } else {}
            wp_reset_postdata();
            ?>
        </div>
    </div>
    <div class="blog__sidebar">
        <?php
        get_sidebar();
        ?>
    </div>
</section>