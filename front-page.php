<?php


get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">
    <!-- LOOP1 -->
    <?php if (have_posts()) : ?>
    <?php query_posts('posts_per_page=1'); ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="col-sm-12 col-md-6">
      <div class="main_col-6">
        <?php
        if ( has_post_thumbnail() ) { ?>
                        <?php 
                        $imgsrcparam = array(
              'alt' => trim(strip_tags( $post->post_excerpt )),
              'title' => trim(strip_tags( $post->post_title )),
              );
                        $thumbID = get_the_post_thumbnail( $post->ID, 'two', $imgsrcparam ); ?>
                          <div class="single-featured wp-post-image"><a href="<?php the_permalink() ?>"><?php echo "$thumbID"; ?></a></div>

                      
                      <?php } else {?>
                          <div class="single-featured wp-post-image"><a href="<?php the_permalink() ?>"><img src="<?php bloginfo('template_url'); ?>/images/default-thumbnail.jpg" alt="<?php the_title(); ?>" /></a></div>
                      <?php } ?>

          </div><!-- .col2 -->
          <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
          <?php the_excerpt(); ?>   
          <div class="time"><?php the_category(','); ?></div>
    </div>
    </div>
    <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?> 
    <?php wp_reset_query(); ?>
    <!-- #LOOP1 --> 

    
    <!-- LOOP2 -->
    <?php if (have_posts()) : ?>
    <?php query_posts('posts_per_page=3'); ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="col-xs-12 col-md-3">
      <div class="main_col-3">

          <?php
          if ( has_post_thumbnail() ) { ?>
                          <?php 
                          $imgsrcparam = array(
                'alt' => trim(strip_tags( $post->post_excerpt )),
                'title' => trim(strip_tags( $post->post_title )),
                );
                          $thumbID = get_the_post_thumbnail( $post->ID, 'one', $imgsrcparam ); ?>
                            <div class="single-featured wp-post-image"><a href="<?php the_permalink() ?>"><?php echo "$thumbID"; ?></a></div>

                        
                        <?php } else {?>
                            <div class="single-featured wp-post-image"><a href="<?php the_permalink() ?>"><img src="<?php bloginfo('template_url'); ?>/images/default-thumbnail.jpg" alt="<?php the_title(); ?>" /></a></div>
                        <?php } ?>

      </div><!-- .sepia -->
      <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
      <?php the_excerpt(); ?> 
    </div>
    <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?> 
    <?php wp_reset_query(); ?>
    <!-- #LOOP2 --> 
  </main><!-- #main -->

</div><!-- #primary -->

<?php get_footer(); ?>
