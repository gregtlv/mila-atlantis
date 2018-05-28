<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mila_Atlantis
 */

?>
<!-- Contacts -->
<section id="contacts" class="main__contacts">

	<!-- Top -->
	<div  style="background-image: url(<?php the_field( 'contacts_bg_img') ?>)" class="main__contacts__top">

		<h2 class="main__contacts__title"><?php the_field( 'contacts_title' ); ?></h2>
		<h2 class="main__contacts__subtitle"><?php the_field( 'contacts_subtitle' ); ?></h2>
		<i class="<?php the_field( 'contacts_center_icon' ); ?>"></i>

	</div>

	<!-- Bottom -->
	<div class="main__contacts__bottom">

	<!-- Container -->
	<div class="container">
	<ul class="main__contacts__bottom__list">

		<li class="main__contacts__item">
				<i class="item__icon far fa-comments"></i>
				<div class="main__contacts__item__content">
					<h3><?php the_field( 'contacts_left_block' ); ?></h3>
					<ul class="main__contacts__messenger__icons">
						<a href="https://api.whatsapp.com/send?phone=<?php the_field( 'whatsapp_number' ); ?>&text=<?php the_field( 'whatsapp_msg' ); ?>" target="_blank">
							<i class="fab fa-whatsapp"></i></a>
						<a href="<?php the_field( 'second_messenger_link' ); ?>" target="_blank"><i class="<?php the_field( 'second_messenger_icon' ); ?>"></i></a>
						<a href="<?php the_field( 'thrid_messenger_link' ); ?>" target="_blank"><i class="<?php the_field( 'thrid_messenger_icon' ); ?>"></i></a>
					</ul>
				</div>
		</li>
		<li class="main__contacts__item">
				<i class="item__icon fas fa-mobile-alt"></i>
				<div class="main__contacts__item__content">
					<h3><?php the_field( 'contacts_center_block' ); ?></h3>
					<p><?php the_field( 'gen_number' ); ?><br>
						 <?php the_field( 'second_number' ); ?></p>
				</div>
		</li>
		<li class="main__contacts__item">
				<i class="item__icon fas fa-map-pin"></i>
				<div class="main__contacts__item__content">
					<h3><?php the_field( 'contacts_right_block' ); ?></h3>
					<p><?php the_field( 'contacts_right_block_text' ); ?></p>
				</div>
		</li>

	</ul>

	</div>
	<!-- End of Container -->

	</div>
	<!-- /main__contacts__bottom -->

</section>
<!-- End of Contacts -->


</main>
<!-- End of Main -->
