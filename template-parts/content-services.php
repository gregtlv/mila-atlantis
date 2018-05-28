<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mila_Atlantis
 */

?>

<!-- Services -->
<section id="services" class="main__service">

  <!-- Container -->
  <div class="container">

  <h2 class="main__service__title"><?php the_field( 'services_title' ); ?></h2>
  <h2 class="main__service__subtitle"><?php the_field( 'services_subtitle' ); ?></h2>

  <!-- Services -->
  <div class="main__service__items">

    <!-- Left -->
    <ul class="main__service__list__left">
      <li class="main__service__item">
          <i class="<?php the_field( 'service_icon_1' ); ?>"></i>
          <div class="main__service__item__content">
            <h3><?php the_field( 'service_tite_1' ); ?></h3>
            <p><?php the_field( 'service_descr_1' ); ?></p>
          </div>
      <li class="main__service__item">
          <i class="<?php the_field( 'service_icon_2' ); ?>"></i>
          <div class="main__service__item__content">
            <h3><?php the_field( 'service_tite_2' ); ?></h3>
            <p><?php the_field( 'service_descr_2' ); ?></p>
          </div>
      <li class="main__service__item">
          <i class="<?php the_field( 'service_icon_3' ); ?>"></i>
          <div class="main__service__item__content">
            <h3><?php the_field( 'service_tite_3' ); ?></h3>
            <p><?php the_field( 'service_descr_3' ); ?></p>
          </div>
    </ul>

    <!-- Right -->
    <ul class="main__service__list__right">
      <li class="main__service__item">
          <i class="<?php the_field( 'service_icon_4' ); ?>"></i>
          <div class="main__service__item__content">
            <h3><?php the_field( 'service_tite_4' ); ?></h3>
            <p><?php the_field( 'service_descr_4' ); ?></p>
          </div>
      <li class="main__service__item">
          <i class="<?php the_field( 'service_icon_5' ); ?>"></i>
          <div class="main__service__item__content">
            <h3><?php the_field( 'service_tite_5' ); ?></h3>
            <p><?php the_field( 'service_descr_5' ); ?></p>
          </div>
      <li class="main__service__item">
          <i class="<?php the_field( 'service_icon_6' ); ?>"></i>
          <div class="main__service__item__content">
            <h3><?php the_field( 'service_tite_6' ); ?></h3>
            <p><?php the_field( 'service_descr_6' ); ?></p>
          </div>
        </li>
    </ul>

  </div>

  </div>
  <!-- End Container -->
</section>
<!-- End of Services -->
