<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package akad
 */

?>

<section class="newsletter newsletter__background">
    <div class="container newsletter__content">
        <div class="item-work item-work__background">
            <h3 class="item-work__title">
                YOU THINK WE'RE COOL ? LET'S WORK TOGETHER
            </h3>
            <a href="page-zaglushka.php" class="item-work__button">
                <p class="button__work  button__icon-dark">read more</p>
            </a>

        </div>
        <div class="newsletter__content-item">
            <div class="item-newsletter">
                <div class="item-newsletter__background">
                    <h3 class="item-newsletter__title">
                        STAY INFORMED WITH OUR NEWSLETTER
                    </h3>
                    <p class="item-newsletter__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <form class="item-newsletter__form">
                        <label for="name" hidden="hidden">name</label>
                        <input type="text" id="email" name="email" class="item-newsletter__form-input-text" placeholder="your email">
                        <button type="submit" class="button__icon-light button__text" name="Send" value="Send">
                            Send
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>


<footer class="footer footer__background">
    <div class="container">
        <div class="footer__content">
            <div class="pos-f-t">
                <div class="collapse" id="navbarToggleExternalContent">
                    <div class="navbar navbar-expand navbar-light">
                        <?php require "inc-html/menu.php"; ?>
                    </div>
                </div>

                <nav class="navbar navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div>
                        <div class="footer__content-one">
                            <h4 class="footer__content-text">
                                Created by akhouad 2016. All Rights Reserved
                            </h4>
                        </div>
                        <div class="footer__content-two">
                            <div class="item-social">
                                <?php foreach(getWeAreInSocial() as $weAreInSocial): ?>
                                    <a href="<?php echo $weAreInSocial['link']?>" class="item-social__icon">
                                        <div class="item-social__text">
                                            <?php echo $weAreInSocial['icon']?>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                </nav>
            </div>


        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>