<?php
/**
 * The template for displaying Szakosztaéy pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package activello
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<h1 class="page-title">
<<<<<<< HEAD
				<?php 
					the_archive_title( '<h2 class="page-title">', '</h2>' );
				?>
=======

>>>>>>> c9441b925b827e302fbf345a6c514e40f84ed5e6
				</h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .page-header -->
<<<<<<< HEAD
			<?php 
			$basic ='col-md-3';
			$row = 'row';
			 ?>			
			<div class="<?php $row; ?>">
			<?php $i = 1; # start a loop counter at 1 ?>
			<?php /* Start the Loop */ ?>
			<?php
			global $query_string;
			query_posts( $query_string . '&orderby=title&order=asc&posts_per_page=-1');
			 ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="<?php echo $basic; ?>">			
            <?php get_template_part( 'content-muvesz-grid', 'none' ); ?>
			</div>

=======

			<?php /* Start the Loop */ ?>

			<?php while ( have_posts() ) : the_post(); ?>
			<div class="col-md-3">
			<header class="muvesz-list page-header">
				<h3 class="muvesz-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			</header><!-- .entry-header -->
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ></a>                     
			</div>


>>>>>>> c9441b925b827e302fbf345a6c514e40f84ed5e6
			<?php endwhile; ?>

			<?php activello_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
<<<<<<< HEAD
		</div>			
		</main><!-- #main -->
	</section><!-- #primary -->
<?php get_sidebar(); ?>	
=======
			
		</main><!-- #main -->
	</section><!-- #primary -->
>>>>>>> c9441b925b827e302fbf345a6c514e40f84ed5e6
<?php get_footer(); ?>