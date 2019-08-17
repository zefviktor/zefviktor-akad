<section  id="content" class="why-choose-us container">
    <div class="post__type-general-title word">
        <div>
            <div class="word__background">
            </div>
        </div>
        <h2 class="word__title">
            <?php echo get_theme_mod( 'zef_content_why-choose-us__general-title' ); ?>
        </h2>
    </div>
    <p class="post__type-general-subtitle word__subtitle">
        <?php echo get_theme_mod( 'zef_content_why-choose-us__general-text' ); ?>
    </p>
    <div class="why-choose-us__content">
        <div class="why-choose-us__content-item-why-choose-us">
            <?php foreach(getWhyChooseUs() as $whyChooseUs): ?>
                <div class="item-why-choose-us">
                    <div class="item-why-choose-us__content">
                        <div class="word__icon">
                            <?php echo $whyChooseUs['icon'] ?>
                        </div>
                        <h3  class="word__choose-title">
                            <?php echo $whyChooseUs['title'] ?>
                        </h3>
                        <ul>
                            <li class="word__choose-text">
                                <?php echo $whyChooseUs['text_1'] ?>
                            </li>
                            <li class="word__choose-text">
                                <?php echo $whyChooseUs['text_2'] ?>
                            </li>
                            <li class="word__choose-text">
                                <?php echo $whyChooseUs['text_3'] ?>
                            </li>
                            <li class="word__choose-text">
                                <?php echo $whyChooseUs['text_4'] ?>
                            </li>
                        </ul>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="why-choose-us__content-icon">
            <?php foreach(getImageWhy() as $imageWhy): ?>
                <div>
                    <img class=""  src="<?php echo wp_get_attachment_url($imageWhy['image'])?>"  alt="interior"/>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
