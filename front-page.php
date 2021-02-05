<?php
   get_header();
?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">
    <!-- LOOP1 -->
        <?php
   // WP_Query arguments
   $leadposts = array(
        'post_type' => array(
            'post' 
       ),
       'posts_per_page' => '2',
       'tax_query' => array(
            array(
                'taxonomy' => 'mkisz_order', //or tag or custom taxonomy
               'field' => 'id',
               'terms' => array(
                    '42',
                   '43' 
               ) 
           ) 
       ) 
   );
   // The Query
   $query     = new WP_Query( $leadposts );
   // The Loop
   if ( $query->have_posts() ) {
       while ( $query->have_posts() ) {
           $query->the_post();
?>
<div class="row">
<div class="col-sm-12 col-md-6">    
    <?php
           if ( has_post_thumbnail() ) {
?>
                        <?php
               $imgsrcparam = array(
                    'alt' => trim( strip_tags( $post->post_excerpt ) ),
                   'title' => trim( strip_tags( $post->post_title ) ) 
               );
               $thumbID     = get_the_post_thumbnail( $post->ID, 'two', $imgsrcparam );
?>
                          <div class="single-featured wp-post-image"><a href="<?php
               the_permalink();
?>"><?php
               echo "$thumbID";
?></a></div>

                      
                      <?php
           } else {
?>
                          <div class="single-featured wp-post-image"><a href="<?php
               the_permalink();
?>"><img src="<?php
               bloginfo( 'template_url' );
?>/images/default-thumbnail.jpg" alt="<?php
               the_title();
?>" /></a></div>
                      <?php
           }
?>

          <h2><a href="<?php
           the_permalink();
?>" title="<?php
           the_title();
?>"><?php
           the_title();
?></a></h2>
          <?php
           the_excerpt();
?>   
          <div class="time">
          <?php /* the_category( ',' ); */ ?>
          </div> 

        </div> <!-- // col-sm-12 col-md-6 -->          
        <?php
       }
   } else {
       // no posts found
   }
   // Restore original Post Data
   wp_reset_postdata();
?>
</div>
      <!-- #LOOP1 --> 
 <div class="row">
 <!-- LOOP2 -->
        <?php
   // WP_Query arguments
   $leadposts = array(
        'post_type' => array(
            'post' 
       ),
       'posts_per_page' => '4',
       'tax_query' => array(
            array(
                'taxonomy' => 'mkisz_order', //or tag or custom taxonomy
               'field' => 'id',
               'terms' => array(
                    '44' 
               ) 
           ) 
       ) 
   );
   // The Query
   $query     = new WP_Query( $leadposts );
   // The Loop
   if ( $query->have_posts() ) {
       while ( $query->have_posts() ) {
           $query->the_post();
?>

<div class="col-sm-12 col-md-3">    
    <?php
           if ( has_post_thumbnail() ) {
?>
                        <?php
               $imgsrcparam = array(
                    'alt' => trim( strip_tags( $post->post_excerpt ) ),
                   'title' => trim( strip_tags( $post->post_title ) ) 
               );
               $thumbID     = get_the_post_thumbnail( $post->ID, 'one', $imgsrcparam );
?>
                          <div class="single-featured wp-post-image"><a href="<?php
               the_permalink();
?>"><?php
               echo "$thumbID";
?></a></div>

                      
                      <?php
           } else {
?>
                          <div class="single-featured wp-post-image"><a href="<?php
               the_permalink();
?>"><img src="<?php
               bloginfo( 'template_url' );
?>/images/default-thumbnail.jpg" alt="<?php
               the_title();
?>" /></a></div>
                      <?php
           }
?>

          <h2><a href="<?php
           the_permalink();
?>" title="<?php
           the_title();
?>"><?php
           the_title();
?></a></h2>
          <?php
           the_excerpt();
?>   
          <div class="time">
          <?php /* the_category( ',' ); */ ?>
          </div>
        </div> <!-- // col-sm-12 col-md-6 -->          
        <?php
       }
   } else {
       // no posts found
   }
   // Restore original Post Data
   wp_reset_postdata();
?>
      <!-- #LOOP2 --> 
  </main><!-- #main -->

</div><!-- #primary -->

<?php
   get_footer();
?>