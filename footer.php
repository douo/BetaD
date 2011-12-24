<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->

	<div id="footer" role="contentinfo">
		<div id="colophon">

<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>

			<div id="site-info">
				<div class="cr">Proudly powered by <a href="http://wordpress.org" rel="external" target="_blank">WordPress</a> , Theme  <a href="http://wordpress.org" rel="external" target="_blank">BetaD</a> by <a href="http://dourok.info/" rel="external" target="_blank">DouO</a>. <a href="<?php bloginfo('url');?>/wp-admin/" title="Site Admin">Admin</a> </div>

	    © 2012 <?php bloginfo('name');?>

			</div><!-- #site-info -->

		</div><!-- #colophon -->
	</div><!-- #footer -->

</div><!-- #wrapper -->
<div id="background"><canvas id="abstract" width="2000" height="1200" datasrc="<?php bloginfo('stylesheet_directory');?>/js/abstract.pjs"></canvas></div>
<div id="scroll"><a href="#content" title="回到页首" class="back-to-top" style="opacity: 0.4; ">回到页首</a><a href="#footer-widget-area" title="回到页尾" class="back-to-bottom" style="opacity: 0.4; ">回到页尾</a></div>
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
