<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mila_Atlantis
 */

?>
<!-- Footer -->

<footer style="background-color: <?php the_field( 'footer_bg_color' ); ?>;"id="footer" class="footer">
	<ul class="footer__social__icons">
		<a href="<?php the_field( 'social_fb' ); ?>"><li><i class="fab fa-facebook"></i></li></a>
		<a href="<?php the_field( 'social_inst' ); ?>"><li><i class="fab fa-instagram"></i></li></a>
		<a href="<?php the_field( 'social_tlgrm' ); ?>"><li><i class="fab fa-telegram"></i></li></a>
	</ul>
	<p><?php the_field( 'footer_text' ); ?></p>
</footer>

<!-- End of footer -->
