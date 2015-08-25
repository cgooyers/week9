<?php
//Template Name: Home

?>

<?php get_header(); ?>
<div id="fullpage" class="main">
  <div class="container">

      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php $image_src = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
        <section class="content home-sections section" data-anchor="home" style="background-image: url(<?php echo $image_src ?>)">

          <div class="section-container">
            <div class="title-info">

              <p><?php the_content(); ?></p>
            </div>
           <h1 class="home"><?php the_title(); ?></h1>
          </div>


        </section> <!-- /,content -->
      <?php endwhile; // end the loop?>
    <?php
      $loopArgs = array(
          "post_type" => "section",
          'orderby' => 'menu_order',
          'order' => 'ASC'
        );
      $loopQuery = new WP_Query($loopArgs);
      if( $loopQuery->have_posts() ){
        while( $loopQuery->have_posts() ){
          $loopQuery->the_post();
          $image_src = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
          ?>
          <section class="home-sections section" data-anchor= "<?php echo strtolower(get_the_title())?>" style="background-image: url(<?php echo $image_src ?> )">

            <h2><a href="#<?php echo strtolower(get_the_title())?>"><?php the_title() ?><i class="fa fa-angle-up animate infinite bounce"></i></a></h2>
            <div class="section-content">
              <i class="fa  <?php the_field('font_awesome'); ?>"></i>
              <h1><?php the_sub_field('section_label'); ?></h1>
              <p><?php the_content(); ?></p>
              <?php $count = 0; ?>
              <?php if( have_rows('work') ): while ( have_rows('work') ) : the_row(); ?>

                <?php $count = $count + 1;
                  if( $count % 2 == 0) {
                    $even_class = 'right-work';
                  }
                  else {
                    $even_class = '';
                  }
                ?>
                  <div class="work-container <?php echo $even_class ?>">
                    <div class="image-text">
                      <h1><?php the_sub_field('image_title'); ?></h1>
                      <p><?php the_sub_field('image_description'); ?>
                          <span class="team">Team members: <?php the_sub_field('team_members'); ?></span>
                      </p>

                      <button><?php the_sub_field('link'); ?></button>
                    </div>

                    <?php
                    $image = get_sub_field('image');
                    ?>
                    <div class="image-container" style="background-image: url( )">
                      <img src="<?php echo $image['url'] ?>" alt="">
                    </div>
                  </div>
                <? endwhile; else : endif; ?>
            </div>
          </section>
          <?php
        }
      }

    ?>

  <?php get_footer(); ?>
  </div> <!-- /.container -->

</div> <!-- /.main -->
