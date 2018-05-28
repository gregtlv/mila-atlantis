<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mila_Atlantis
 */

?>

<?php
$temp_parts = get_template_directory_uri() . "/template-parts/" ?>

<!-- Scripts -->

<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

<script src="<?php echo $temp_parts . 'js/main.js' ?>"></script>

<?php wp_footer(); ?>

</body>
</html>
