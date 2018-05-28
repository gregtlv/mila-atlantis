<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mila_Atlantis
 */

?>
<!-- Blog section -->
<section style="background-image: url(<?php the_field( 'blog_bg_img') ?>)" id="blog" class="main__blog">

  <div class="container">

    <h2 class="main__service__title"><?php the_field( 'blog_title' ); ?></h2>
    <h2 class="main__service__subtitle"><?php the_field( 'blog_subtitle' ); ?></h2>

    <ul class="main__blog__posts">
      <!-- <img src="" alt=""> -->
      <!-- Item -->
      <?php
        $args = array( 'numberposts' => '3' );
        $recent_posts = wp_get_recent_posts ( $args );
        foreach ( $recent_posts as $recent ) {
          echo '<li class="main__blog__post">
          <img src="' . get_field( 'blog_post_img', $recent["ID"] ) . '" alt="Post_Image">
          <div class="main__blog__post__content">
          <a href="' . get_permalink($recent["ID"]) . '">
          <div class="post__button">
          <span>Читать</span>
          </div>
          </a>
          <h3>' . $recent["post_title"] . '</h3>
          <h4 class="blog__post__date">' . date('j/n/Y', strtotime($recent["post_date"])) . '</h4>
          <p>' . get_field( 'blog_post_small_text', $recent["ID"] ) . '</p>
          </div>
          </li>';
        }
        ?>

    </ul>

  </div>
  <!-- End of Container -->

</section>
<!-- End of Blog Section -->
