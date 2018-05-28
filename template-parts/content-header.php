<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mila_Atlantis
 */

?>

<!-- Header -->

<header style="background-image: url(<?php the_field( 'header_bg_img') ?>)" id="header" class="header">

  <!-- Header Top -->

  <div id="headerTop" class="header__top">

    <!-- Container -->
    <div class="container">

    <!-- Header Top Up -->

    <div class="header__top__up">

      <!-- Header Contacts -->

      <ul class="header__top__up__contacts">

        <li class="header__top__up__contact__item">
          <i class="fas fa-phone-square"></i>
          <a href="https://api.whatsapp.com/send?phone=<?php the_field( 'whatsapp_number' ); ?>&text=<?php the_field( 'whatsapp_msg' ); ?>" target="_blank"><i class="fab fa-whatsapp-square"></i></a>
          <span class="header__top__up__contact__item__text"><?php the_field( 'gen_number' ); ?></span>
        </li>

        <li class="header__top__up__contact__item">
          <i class="fas fa-envelope"></i>
          <span class="header__top__up__contact__item__text"><?php the_field( 'gen_mail' ); ?></span>
        </li>
      </ul>

      <!-- Header Social Networks -->

      <ul class="header__top__up__social">

        <li class="header__top__up__social__item">
          <a href="<?php the_field( 'social_fb' ); ?>" target="_blank"><i class="fab fa-facebook"></i></a>
        </li>
        <li class="header__top__up__social__item">
          <a href="<?php the_field( 'social_inst' ); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
        </li>
        <li class="header__top__up__social__item">
          <a href="<?php the_field( 'social_vk' ); ?>" target="_blank"><i class="fab fa-vk"></i></a>
        </li>
        <li class="header__top__up__social__item">
          <a href="<?php the_field( 'social_tlgrm' ); ?>" target="_blank"><i class="fab fa-telegram"></i></a>
        </li>

      </ul>

      <!-- Header Languages -->
      <i class="lang__toggle fas fa-globe"></i>

      <ul class="header__top__up__lang">
        <li class="header__top__up__lang__item">Ru</li>
        <li class="header__top__up__lang__item">En</li>
        <li class="header__top__up__lang__item">He</li>

      </ul>

    </div>
    <!-- End of Header Top Up -->

    <hr>

    <!-- Header Top Down -->

    <div class="header__top__down">

      <div class="header__top__down__logo">
        <h2>Логотип</h2>
        <h4>Creative text</h4>
      </div>

      <!-- Header Top Nav -->

      <nav id="headerNav" class="header__top__down__nav">

        <i id="headerToggle" class="header__toggle fas fa-bars"></i>
        <!-- <i class="row__up__toggle far fa-arrow-alt-circle-up"></i> -->
        <!-- Navigation -->
        <ul id="headerNavList" class="header__top__down__nav__list">
          <li class="header__top__down__nav__item">
            <a href="">Главная</a>
          </li>
          <li class="header__top__down__nav__item">
            <a href="#services">Услуги</a>
          </li>
          <li class="header__top__down__nav__item">
            <a href="#tours">Туры</a>
          </li>
          <li class="header__top__down__nav__item">
            <a href="#blog">Блог</a>
          </li>
          <li class="header__top__down__nav__item">
            <a href="#about">О нас</a>
          </li>
          <li class="header__top__down__nav__item">
            <a href="#contacts">Контакты</a>
          </li>
        </ul>
        </span>
      </nav>

      <!-- End of Header Top Nav -->
    </div>

  </div>
  <!-- end of Container -->

  </div>
  <!-- end of Header Top -->

  <!-- Header Content -->

  <div class="header__content">

    <!-- Container -->
    <div class="container">

    <h1 class="header__content__title"><?php the_field( 'header_title' ); ?></h1>
    <h2 class="header__content__subtitle"><?php the_field( 'header_subtitle' ); ?></h2>
    <p class="header__content__text"><?php the_field( 'header_text' ); ?></p>
    <span class="header__content__button">Подробнее</span>

    </div>
  </div>

<script type="text/javascript" src="http://localhost:35729/livereload.js">
</script>

</header>
<!-- End of Header -->
