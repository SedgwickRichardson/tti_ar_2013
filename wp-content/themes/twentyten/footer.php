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
	<div id="footer" role="contentinfo">
		<div id="colophon">
<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
$menu['en']['sitemap'] = 'Sitemap';
$menu['en']['terms'] = 'Copyright';
$menu['en']['privacy'] = 'privacy policy';
$menu['zh-hant']['sitemap'] = '網站概覽';
$menu['zh-hant']['terms'] = '版權';
$menu['zh-hant']['privacy'] = '私隱政策';
//COPYRIGHT 
$menu['en']['copyright'] = 'Copyright &copy; 2013 Techtronic Industries Co. Ltd.';
$menu['zh-hant']['copyright'] = '版權 &copy; 2013 創科實業有限公司';
?>
			<div id="footer-links">
          	<a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/sitemap<?php echo get_curr_lang_second_path() ; ?>"><?php echo $menu[ICL_LANGUAGE_CODE]['sitemap'];?></a> | 
	         <a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/copyright<?php echo get_curr_lang_second_path() ; ?>"><?php echo $menu[ICL_LANGUAGE_CODE]['terms'];?></a>			
			</div><!-- #site-generator -->
			<div id="copyright-footer"><?php echo $menu[ICL_LANGUAGE_CODE]['copyright']; ?></div>
		</div><!-- #colophon -->
        
	</div><!-- #footer -->
	
</div><!-- #wrapper -->
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */
	wp_footer();
?>
<script type="text/javascript">
  /*var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22804685-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();*/
</script>
</body>
</html>