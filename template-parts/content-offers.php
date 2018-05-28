<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mila_Atlantis
 */

?>

<!-- Main  -->

  <main id="main" class="main">

    <!-- Main Offers -->
    <section style="background-image: url(<?php the_field( 'offers_bg_img') ?>)" id="tours" class="main__offers">

      <div class="main__offers__top">

        <!-- Container -->
        <div class="container">

          <h2 class="main__service__title"><?php the_field( 'offer_title' ); ?></h2>
          <h2 class="main__service__subtitle"><?php the_field( 'offer_subtitle' ); ?></h2>

          <div class="main__offers__cards">

            <ul class="main__offers__cards__list">

              <li class="offers__card">

                <img src="<?php the_field('offer_image_1'); ?>" alt="Offer Image">
                <div class="card__body">
                  <h4 class="card__trip__duration"><?php the_field('offer_duration_1'); ?></h4>
                  <h3 class="card__city__destination"><?php the_field('offer_dest_1'); ?></h3>
                  <p class="card__trip__description"><?php the_field( 'offer_descr_1' ); ?></p>
                  <h3 class="card__trip__price"><?php the_field( 'offer_price_1' ); ?></h3>
                  <a class="card__purchase__link" href=""><div class="card__purchase__button"><span><?php the_field( 'offer_button' ); ?></span></div></a>
                </div>
              </li>
              <li class="offers__card__center">
                <img src="<?php the_field('offer_image_2'); ?>" alt="Offer Image">
                <div class="card__body">
                  <h4 class="card__trip__duration"><?php the_field('offer_duration_2'); ?></h4>
                  <h3 class="card__city__destination"><?php the_field('offer_dest_2'); ?></h3>
                  <p class="card__trip__description"><?php the_field( 'offer_descr_2' ); ?></p>
                  <h3 class="card__trip__price"><?php the_field( 'offer_price_2' ); ?></h3>
                  <a class="card__purchase__link" href=""><div class="card__purchase__button"><?php the_field( 'offer_button' ); ?></div></a>
                </div>
              </li>
              <li class="offers__card">
                <img src="<?php the_field('offer_image_3'); ?>" alt="Offer Image">
                <div class="card__body">
                  <h4 class="card__trip__duration"><?php the_field('offer_duration_3'); ?></h4>
                  <h3 class="card__city__destination"><?php the_field('offer_dest_3'); ?></h3>
                  <p class="card__trip__description"><?php the_field( 'offer_descr_3' ); ?></p>
                  <h3 class="card__trip__price"><?php the_field( 'offer_price_3' ); ?></h3>
                  <a class="card__purchase__link" href=""><div class="card__purchase__button"><?php the_field( 'offer_button' ); ?></div></a>
                </div>
              </li>

            </ul>

          </div>
          <!-- main__offers__cards -->

        </div>
        <!-- End of Container -->

      </div>
      <!-- end of main__offers__top -->

    </section>
    <!-- End of Offers -->
