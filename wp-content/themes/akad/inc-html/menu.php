<?php
wp_nav_menu( array(
    'menu_class'      => 'nav__menu navbar-nav',          // (string) class самого меню (ul тега)
    'container'       => 'div',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
    'container_class' => 'collapse navbar-collapse',              // (string) class контейнера (div тега)
    'container_id'    => 'navbarNav',              // (string) class контейнера (div тега)
    'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
    'depth'           => 0
) );
?>