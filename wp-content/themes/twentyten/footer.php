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
<div id="footer" role="contentinfo" style="padding-top:25px;">
  <div id="colophon">
    <?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
$menu['en']['sitemap'] = 'Sitemap';
$menu['en']['terms'] = 'Intellectual Property';
$menu['en']['privacy'] = 'privacy policy';
$menu['zh-hant']['sitemap'] = '網站概覽';
$menu['zh-hant']['terms'] = '知識產權';
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
        <div id="footer-links" style="float:right; padding-bottom:20px;"> <a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/sitemap<?php echo get_curr_lang_second_path() ; ?>"><?php echo $menu[ICL_LANGUAGE_CODE]['sitemap'];?></a> | <a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/intellectual-property<?php echo get_curr_lang_second_path() ; ?>"><?php echo $menu[ICL_LANGUAGE_CODE]['terms'];?></a> </div>
        <!-- #site-generator -->
        <div id="copyright-footer"><?php echo $menu[ICL_LANGUAGE_CODE]['copyright']; ?></div>
      </div>
    </div>
  </div>
  <!-- #colophon --> 
</div>
<!-- #footer -->

</div>
<!-- #wrapper -->
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */
	wp_footer();
?>
<script type="text/javascript">
$(document).ready(function(){

    // Scroll initially if there's a hash (#something) in the url
    $.localScroll.hash({
    queue:true,
    duration:500
  });
  $.localScroll({
    duration:500,
    queue:true,
    hash:false
  });

    var HeaderTop = $('#header').offset().top;
    $(window).scroll(function(){
    
        if( $(window).scrollTop() > HeaderTop ) {
            $('#header').css({position: 'fixed', top: '0px'});
        if(isiPhone())
        {
          $("#iconBtnstickyContainer").css({"top":window.pageYOffset, "position":"absolute"});
        }else
          $('#iconBtnstickyContainer').css({position: 'fixed', top: '173px'});
        $('.homeContentLeft').css({'margin-top':39});
        } else {
            $('#header').css({position: 'fixed'});
        if(isiPhone())
        {
          $("#iconBtnstickyContainer").css({"top":window.pageYOffset, "position":"absolute", 'z-index':1});
        }else
          $('#iconBtnstickyContainer').css({position: 'fixed', 'z-index':1});
        $('.homeContentLeft').css({'margin-top':39});
        }
    });
   
   initTopNav();
   initOperationalMap();
   inithomeBrandTab('homePowerEquipmentBrandTabContainer', 'homePowerEquipmentBrandContentContainer');
   inithomeBrandTab('homeFloorCareBrandTabContainer', 'homeFloorCareBrandContentContainer');

   $('.tooltip').tooltipster({
     arrow: false,
     /*offsetX: -20,*/
     offsetY: 5,
     position: 'bottom-right',
     speed: 0,
     delay: 0
  });
  $('.tooltip-left').tooltipster({
     arrow: false,
     /*offsetX: -20,*/
     offsetY: 5,
     position: 'bottom-left',
     speed: 0,
     delay: 0
  });
  
});

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