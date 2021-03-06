<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package activello
 */
?>

				</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
			</div><!-- close .row -->
		</div><!-- close .container -->
	</div><!-- close .site-content -->
	<div id="footer-area">
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info container">
			<?php include (TEMPLATEPATH . "/bottom.php"); ?>
<div class="row">
<hr>
<p>Cím: 1061 Budapest, Andrássy út 6. I.em. | Levelezési cím: 1364 Budapest, Pf. 51.<br>
e-mail: art@mkisz.axelero.net<br>
Bankszámlaszám: 11705008-20463708<br>
nyitva tartás: Hétfőtől-csütörtökig 10-18 óráig, (július-augusztusban 10-14 óráig)<br>
telefon: + 36 1 302-2255<br></p>
</div>	
				<div class="row">
					<?php if( !get_theme_mod('footer_social') ) activello_social_icons(); ?>
					<div class="copyright col-md-12">
						<?php echo get_bloginfo( 'name' ); ?> &copy; <?php echo date("Y"); ?> | <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyfifteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfifteen' ), 'WordPress' ); ?></a> <br>
						Site: <a href="http://onlineprojects.hu" target="_blank">OnlineProjects.hu</a>
					</div>
				</div>
			</div><!-- .site-info -->
			<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
		</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
