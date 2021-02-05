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
				<?php 
					the_archive_title( '<h2 class="page-title">', '</h2>' );
				?>
				</h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .page-header -->
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

			<?php endwhile; ?>

			<?php activello_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
		</div>			
		</main><!-- #main -->
	</section><!-- #primary -->
<?php get_sidebar(); ?>	
<?php get_footer(); ?>