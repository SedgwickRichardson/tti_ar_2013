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
$currLang = ICL_LANGUAGE_CODE;
$langContent['en']['Previous page'] = '&laquo; Previous';
$langContent['zh-hant']['Previous page'] = '&laquo; 上一頁';
$langContent['en']['Next page'] = 'Next &raquo;';
$langContent['zh-hant']['Next page'] = '下一頁 &raquo;';
$nextPage = get_post_custom_values('nextPage', get_the_ID());
$nextPage = $nextPage[0];
$prevPage = get_post_custom_values('prevPage', get_the_ID());
$prevPage = $prevPage[0];
$nextTipTitle = get_post_custom_values('tipTitle', $nextPage);
$nextTipTitle = $nextTipTitle[0];
$prevTipTitle = get_post_custom_values('tipTitle', $prevPage);
$prevTipTitle = $prevTipTitle[0];
?>
<div class="bottomNav clearfix">
<?php
if(!empty($prevPage)){
?>
<div class="floatLeft"><a class="tooltip-left" title="<?php if(ICL_LANGUAGE_CODE=="zh-hant"){echo '去到';} else{echo 'Go to ';}?><?php if(empty($prevTipTitle)){echo get_the_title($prevPage);}else{echo $prevTipTitle;} ?>" href="<?php echo get_permalink($prevPage);?>"><?php echo $langContent[ICL_LANGUAGE_CODE]['Previous page']; ?></a></div>
<?
}
?>
<?php
if(!empty($nextPage)){
?>
<div class="floatRight"><a class="tooltip" title="<?php if(ICL_LANGUAGE_CODE=="zh-hant"){echo '去到';} else{echo 'Go to ';}?><?php if(empty($nextTipTitle)){echo get_the_title($nextPage);}else{echo $nextTipTitle;} ?>" href="<?php echo get_permalink($nextPage);?>"><?php echo $langContent[ICL_LANGUAGE_CODE]['Next page']; ?></a></div>
<?
}
?>
</div>
	<div id="footer" role="contentinfo" style="border-top:1px solid #343434; padding-top:25px;">
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
$menu['zh-hant']['privacy'] = '';
//COPYRIGHT
$menu['en']['copyright'] = 'Copyright &copy; 2014 Techtronic Industries Co. Ltd.';
$menu['zh-hant']['copyright'] = '版權 © 2014 創科實業有限公司';
?>
			<div class="clearfix">
				<div style="margin-top: 30px;float:left;">
					<table cellpadding="0" cellspacing="0" border="0" class="footerLogoTable">
						<tr>
							<td><a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/power-equipment<?php echo get_curr_lang_second_path() ; ?>/industrial-power-tools<?php echo get_curr_lang_second_path() ; ?>/milwaukee<?php echo get_curr_lang_second_path() ; ?>"><img src="<?php echo site_url();?>/wp-content/themes/twentyten/images/footerLogo/logo_milwaukee.png" alt="" /></a></td>
				            <td><a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/power-equipment<?php echo get_curr_lang_second_path() ; ?>/professional-power-tools<?php echo get_curr_lang_second_path() ; ?>/aeg<?php echo get_curr_lang_second_path() ; ?>"><img src="<?php echo site_url();?>/wp-content/themes/twentyten/images/footerLogo/logo_aeg.png" alt="" /></a></td>
				            <td><a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/power-equipment<?php echo get_curr_lang_second_path() ; ?>/consumer-and-trade-power-tools<?php echo get_curr_lang_second_path() ; ?>/ryobi<?php echo get_curr_lang_second_path() ; ?>"><img src="<?php echo site_url();?>/wp-content/themes/twentyten/images/footerLogo/logo_ryobi.png" alt="" /></a></td>
				            <td><a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/power-equipment<?php echo get_curr_lang_second_path() ; ?>/outdoor-products<?php echo get_curr_lang_second_path() ; ?>/homelite<?php echo get_curr_lang_second_path() ; ?>"><img src="<?php echo site_url();?>/wp-content/themes/twentyten/images/footerLogo/logo_homelite.png" alt="" /></a></td>
				            <td><a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/floor-care-and-appliances<?php echo get_curr_lang_second_path() ; ?>/hoover<?php echo get_curr_lang_second_path() ; ?>"><img src="<?php echo site_url();?>/wp-content/themes/twentyten/images/footerLogo/logo_hoover.png" alt="" /></a></td>
				            <td><a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/floor-care-and-appliances<?php echo get_curr_lang_second_path() ; ?>/oreck<?php echo get_curr_lang_second_path() ; ?>"><img src="<?php echo site_url();?>/wp-content/themes/twentyten/images/footerLogo/logo_oreck.png" alt="" /></a></td>
				            <td><a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/floor-care-and-appliances<?php echo get_curr_lang_second_path() ; ?>/vax<?php echo get_curr_lang_second_path() ; ?>"><img src="<?php echo site_url();?>/wp-content/themes/twentyten/images/footerLogo/logo_vax.png" alt="" /></a></td>
				            <td><a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/floor-care-and-appliances<?php echo get_curr_lang_second_path() ; ?>/dirt-devil<?php echo get_curr_lang_second_path() ; ?>"><img src="<?php echo site_url();?>/wp-content/themes/twentyten/images/footerLogo/logo_dirt_devil.png" alt="" /></a></td>
						</tr>
					</table>
				</div>
				<div style="float:right;">
					<div id="footer-links" style="float:right; padding-bottom:20px;">
						<a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/sitemap<?php echo get_curr_lang_second_path() ; ?>"><?php echo $menu[ICL_LANGUAGE_CODE]['sitemap'];?></a> |
						<a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/copyright<?php echo get_curr_lang_second_path() ; ?>"><?php echo $menu[ICL_LANGUAGE_CODE]['terms'];?></a>
					</div><!-- #site-generator -->
					<div id="copyright-footer"><?php echo $menu[ICL_LANGUAGE_CODE]['copyright']; ?></div>
				</div>
			</div>
		</div><!-- #colophon -->
	</div><!-- #footer -->
</div><!-- #wrapper -->
</div>
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */
	wp_footer();
?>
<div id="brandOverlay">
	<div id="loader" class="loading">
		<a href="javascript:;" id="overlayCloseBtn"></a>
	</div>
</div>
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