<?php 
//Template Name: Home

?>

<div class="main">
  <div class="container">
    
      <?php // Start the loop ?>
      <?php get_header(); ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php $image_src = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
        <section class="content home-sections" style="background-image: url(<?php echo $image_src ?>)">
          
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>

        </section> <!-- /,content -->
      <?php endwhile; // end the loop?>
    <?php 
      $loopArgs = array(
          "post_type" => "section"
        );
      $loopQuery = new WP_Query($loopArgs);
      if( $loopQuery->have_posts() ){
        while( $loopQuery->have_posts() ){
          $loopQuery->the_post();
          $image_src = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
          ?>
          <section class="home-sections" style="background-image: url(<?php echo $image_src ?> )">
            <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
          </section>
          <?php
        }
      }

    ?>


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>