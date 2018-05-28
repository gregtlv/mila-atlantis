<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mila_Atlantis
 */

?>


		<?php
		// the_content();
		
		get_template_part( 'template-parts/content', 'header' );
		get_template_part( 'template-parts/content', 'offers' );
		get_template_part( 'template-parts/content', 'services' );
		get_template_part( 'template-parts/content', 'blog' );
		get_template_part( 'template-parts/content', 'contacts' );
		get_template_part( 'template-parts/content', 'footer' );

		?>
