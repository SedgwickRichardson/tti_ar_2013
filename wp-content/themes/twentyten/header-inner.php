<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	$pa = get_post_ancestors( $post );
	
	$pid = '';
	$isLevelOne = false;
	if (empty($pa))
		$isLevelOne = true;
	if(isset($pa[1])){
		$pid = $pa[0];
		$parent_title = get_the_title($pid);
		echo get_the_title($pa[1]).' - '.get_the_title($pa[0]).' - ';
	}else if(isset($pa[0])){
		echo get_the_title($pa[0]).' - ';
	}
	
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/43e1adce-17f3-48ab-a9c7-54a3c7075afc.css"/>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/tti.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/font-<?php if($_COOKIE['gre_font_cookie']) echo $_COOKIE['gre_font_cookie'];else echo "medium"; ?>.css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=3.0.1'></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type='text/javascript' src='<?php bloginfo( 'template_url' ); ?>/js/tti.js'></script>
<script type='text/javascript' src='<?php bloginfo( 'template_url' ); ?>/js/jquery.cookie.js'></script>
<script type='text/javascript' src='<?php bloginfo( 'template_url' ); ?>/js/jquery.pngFix.pack.js'></script>
<script type="text/javascript" src='<?php bloginfo( 'template_url' ); ?>/js/jquery.scrollTo-1.4.2-min.js'></script>
<script type="text/javascript" src='<?php bloginfo( 'template_url' ); ?>/js/jquery.localscroll-1.2.7-min.js'></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/highcharts.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/exporting.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/graph.js"></script>
<script src="http://mat1.gtimg.com/app/openjs/openjs.js#autoboot=no&debug=no"></script>
<script type="text/javascript">
$(function(){
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
});
$(document).ready(function(){
    currentNoteAnchor = 0;
	initNoteRightNav();
	initGeneralContentRightNav();
	initBrandGallery();
	initOperationalTab();
	initOperationalMap();
	initBod();
	initCEOReview();
	initFindOutMore('findOutMoreBtn', 'findOutMoreContent');
	initFindOutMore('operationalTabContent', 'findOutMoreContent');
	initFindOutMoreBannerContent();
	
	// var HeaderTop = $('#header').offset().top; 
	initInnerPageTopNav();
	
	//init interactive chart for Power Equipment Highlights
   if($('body').hasClass('page-id-3636')){
		initPowerEquipmentHighlightsGraph("en");
	}
	else if($('body').hasClass('page-id-3639')){
		initPowerEquipmentHighlightsGraph("chi");
	}
	else if($('body').hasClass('page-id-1470')){
	//init interactive chart for Power Equipment Highlights
		initFloorCareHighlightsGraph("en");
	}
	else if($('body').hasClass('page-id-1473')){
		initFloorCareHighlightsGraph("chi");
	}
	else if($('body').hasClass('page-id-13') || $('body').hasClass('page-id-18')){
	//init interactive chart for Chairman’s Statement
		initChairmanGraph();
	}
	else if($('body').hasClass('page-id-2589')){
		initOperationalHighlightsGraph("en");
	}
	else if($('body').hasClass('page-id-2591')){
		initOperationalHighlightsGraph("chi");
	}
	else if($('body').hasClass('page-id-326')){
		initFinancialHighlights("en");
	}
	else if($('body').hasClass('page-id-328')){
		initFinancialHighlights("chi");
	}

});
$(window).load(function () {
	function stickyInit()
	{
		var headerHeight = $('#header').height();
		if( $(window).scrollTop() > 127 ) {
			$('#main-nav').css({position: 'fixed', top: '-10px', 'z-index': '899'});
			$('#wrapper').css({"margin-top":"0"});
			//$('#backToTop').show();
			//$('.bottomBacktoTop').fadeIn(300);
			//$('.sideBacktoTop').fadeIn(300);
			
		} else {
			$('#main-nav').css({position: 'relative', 'z-index': '899', top:'0'});
			$('#wrapper').css({"margin-top":"0"});
			//$('#backToTop').hide();
			//$('.bottomBacktoTop').fadeOut(300);
			//$('.sideBacktoTop').fadeOut(300);
		}
		
		if( $(window).scrollTop() > 170 ) {
			if($('#stickyRightNav').hasClass('generalStickyRightNav'))
			{
				$('#stickyRightNav').css({position: 'fixed', top: '105px', 'z-index': '899'});
			}else{
				$('#stickyRightNav').css({position: 'fixed', top: '105px', 'z-index': '899'});
			}
		} else {
			$('#stickyRightNav').css({position: 'relative', top:'0', 'z-index':'800'});
		}
		
		
		if(headerHeight < 200)
		{
			if( $(window).scrollTop() > 125)
			{
				$('#breadcrumb').css({position: 'fixed', top: '49px', 'z-index': '900'});
				$('#wrapper').css({'margin-top':110})
			}else{
				$('#breadcrumb').css({position: 'relative', top: '0'});	
				$('#wrapper').css({'margin-top':0})
			}	
		}else{
			if( $(window).scrollTop() > headerHeight-55)
			{
				$('#breadcrumb').css({position: 'fixed', top: '49px', 'z-index': '900'});
				$('#wrapper').css({'margin-top':50})
			}else{
				$('#breadcrumb').css({position: 'relative', top: '0'});	
				$('#wrapper').css({'margin-top':0})
			}
		}
	}
   
   
	stickyInit();
	$(window).scroll(function(){
       stickyInit();
   });
   
   
});
</script>
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/style_ie6.css"/>
<![endif]-->
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/style_ie7.css"/>
<![endif]-->
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/style_ie8.css"/>
<![endif]-->
<!--[if IE 9]>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/style_ie9.css"/>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	wp_head();
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<?php
	$currLang = ICL_LANGUAGE_CODE;
	$langContent['en']['annual_report'] = 'Annual Report 2011';
	$langContent['zh-hant']['annual_report'] = '<span style="color:#0089c0;">2010年</span> <span style="color:#4c6a79;">年報</span>';
	
	$langContent['en']['TTI Group'] = 'TTI Group';
	$langContent['en']['Investor Relations'] = 'Investor Relations';
	$langContent['en']['Investor Relations link'] = 'http://www.ttigroup.com/en/investor_relations/';
	$langContent['zh-hant']['Investor Relations link'] = 'http://www.ttigroup.com/hk/investor_relations/';
	$langContent['en']['download'] = 'Downloads';
	$langContent['en']['contact-us'] = 'Contact Us';
	$langContent['zh-hant']['TTI Group'] = '創科集團';
	$langContent['zh-hant']['Investor Relations'] = '投資者關係';
	$langContent['zh-hant']['download'] = '下載';
	$langContent['zh-hant']['contact-us'] = '聯絡我們';
	
	$homeContent['en']['Audio Webcast'] = 'Audio Webcast';
	$homeContent['zh-hant']['Audio Webcast'] = '網絡廣播';
	$homeContent['en']['Presentation'] = 'Presentation';
	$homeContent['zh-hant']['Presentation'] = '公司簡報';
	$homeContent['en']['Press release'] = 'Press Release';
	$homeContent['zh-hant']['Press release'] = '新聞發佈';
	$langContent['en']['Press release link'] = 'http://www.ttigroup.com/en/investor_relations/news/press_releases';
	$langContent['zh-hant']['Press release link'] = 'http://www.ttigroup.com/hk/investor_relations/news/press_releases/';
	
	$langContent['en']['Search'] = 'Search';
	$langContent['zh-hant']['Search'] = '搜尋';
	
	$homeContent['en']['Print this page'] = 'Print';
	$homeContent['zh-hant']['Print this page'] = '列印此頁';
	$homeContent['en']['Print this page in PDF'] = 'Print this page in PDF';
	$homeContent['zh-hant']['Print this page in PDF'] = '列印此頁之PDF';
	$homeContent['en']['Download PDF file of this section'] = 'PDF file of this page';
	$homeContent['zh-hant']['Download PDF file of this section'] = '下載此頁之PDF';
	$homeContent['en']['Email this page'] = 'Share';
	$homeContent['zh-hant']['Email this page'] = '分享';
	$homeContent['en']['BACK TO TOP'] = 'BACK TO TOP';
	$homeContent['zh-hant']['BACK TO TOP'] = '返回頁首';
	$homeContent['en']['report image name'] = 'img_annual_report_2013.png';
	$homeContent['zh-hant']['report image name'] = 'img_annual_report_2013_chi.png';
	$homeContent['en']['TTI Annual Report 2012'] = 'TTI Annual Report 2013';
	$homeContent['zh-hant']['TTI Annual Report 2012'] = '創科實業有限公司 2013年 年報';
	$homeContent['en']['Downloads'] = 'Downloads';	$homeContent['zh-hant']['Downloads'] = '下載';
	$homeContent['en']['Quick Links'] = 'Quick Links';
	$homeContent['zh-hant']['Quick Links'] = '快速連結';
	
	//check if this page has PDF for download, else show print link
	$pdfLink = get_post_custom_values('pdfLink', get_the_ID());
	$pdfLink = $pdfLink[0];	
?>
<body <?php body_class(); ?> <?php if(ICL_LANGUAGE_CODE=="zh-hant") echo 'id="chi-page"';?>>
<div id="scrollshow" style="position:fixed; z-index:1000; top:0; left:0; width:100px; height:20px;"></div>
<div id="top"></div>
<div id="header">
		<div id="masthead">
			<div class="headerContainer clearfix">
				<div id="tti-logo"><a target="_blank" title ="<?php echo $homeContent[ICL_LANGUAGE_CODE]['TTI Annual Report 2012'];?>" href="http://www.ttigroup.com/"><img src="<?php bloginfo( 'template_url' ); ?>/images/headers/tti_logo.jpg" /></a></div>
				<div id="branding" role="banner">
					<h1 id="site-title">
							<a rel="home" title="<?php echo $homeContent[ICL_LANGUAGE_CODE]['TTI Annual Report 2012'];?>" href="<?php echo site_url();echo get_curr_lang_path() ; ?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/headers/<?php echo $homeContent[ICL_LANGUAGE_CODE]['report image name'];?>" /></a>
					</h1>
				</div><!-- #branding -->
					<div id="second-nav">
						<div id="second-nav-list">
							<div id="search-bar">
								<input id="site-search" type="text" name="s" value="<?php echo $langContent[ICL_LANGUAGE_CODE]['Search'];?>"/><a id="searchsubmit">Go</a>
								<form role="search" method="get" id="searchform-hidden" style="display:none;" action="<?php bloginfo( 'url' ); ?>" >
								<input id="site-search-hidden" type="text" name="s" value="Search"/>
								</form>
							</div>
							<div id="second-link" style="float: right;">
								<a target="_blank" href="http://www.ttigroup.com/"><?php echo $langContent[ICL_LANGUAGE_CODE]['TTI Group']; ?></a> | 
								<a href="javascript:;" id="quickLinksBtn"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Quick Links'];?></a> | 
								<div id="quickLinkBox">								
									<a target="_blank" href="<?php echo $langContent[ICL_LANGUAGE_CODE]['Investor Relations link']; ?>"><?php echo $langContent[ICL_LANGUAGE_CODE]['Investor Relations']; ?></a>
									<a target="_blank" href="http://www.ttigroup.com/en/investor_relations/presentation_and_webcasts"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Audio Webcast']; ?></a>
									<a target="_blank" href="http://www.ttigroup.com/en/investor_relations/presentation_and_webcasts"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Presentation']; ?></a>
									<a target="_blank" href="<?php echo $langContent[ICL_LANGUAGE_CODE]['Press release link']; ?>"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Press release']; ?></a>
								</div>																	<a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/downloads<?php echo get_curr_lang_second_path() ; ?>"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Downloads']; ?></a> |  
						<?php
									$langs = icl_get_languages('skip_missing=N&orderby=KEY&order=DIR') ; 
							//print_r($langs);
							foreach ($langs as $currLang){
								if ($currLang['language_code'] != ICL_LANGUAGE_CODE){
									echo '<a class="lang-sel-link" href="'.$currLang['url'].'">'.$currLang['native_name'].'</a>';
								}
							}
						?>   |   
							<a href="#" id="text-small" style="margin:0; font-size:14px;">A</a>
							<a href="#" id="text-medium" style="margin:0; font-size:17px;">A</a>
							<a href="#" id="text-large" style="margin:0; font-size:20px;">A</a> 
						</div>
					</div>
				</div>
      	</div>		
			<div id="innerpageMainNav">
            <div id="main-nav" class="clearfix">
                <div id="access" role="navigation">
                    <?php wp_nav_menu( array( 'container_class' => 'menu-header clearfix', 'theme_location' => 'primary', 'depth' => 1 ) ); ?>
						  <div id="backToTop"><a href="javascript:initBackTop();"><?php echo $homeContent[ICL_LANGUAGE_CODE]['BACK TO TOP']; ?></a></div>
                </div><!-- #access -->
            </div>
				<div id="subNavWraper">
					<div id="subNavContainer">
							<div class="subNavDiv executiveSubNav">
								<div class="subNav clearfix">
									<ul class="sub-nav clearfix">
											<?php
											if(ICL_LANGUAGE_CODE=="zh-hant")
												$page_id=2586;
											else
												$page_id=2584;												
											$args = array(
											'depth'        => 1,
											'child_of'     => $page_id,
											'title_li'     => '',
											'echo'         => 1,
											'authors'      => '',
											'sort_column'  => 'menu_order',
											'post_type'    => 'page',
											'post_status'  => 'publish' 
											);
											wp_list_pages( $args );
										?>
										</ul>
								</div>
							</div>
							<div class="subNavDiv">
								<div class="subNav clearfix">
									<ul class="sub-nav clearfix">
											<?php
											if(ICL_LANGUAGE_CODE=="zh-hant")
												$page_id=98;
											else
												$page_id=10;
											$args = array(
											'depth'        => 1,
											'child_of'     => $page_id,
											'title_li'     => '',
											'echo'         => 1,
											'authors'      => '',
											'sort_column'  => 'menu_order',
											'post_type'    => 'page',
											'post_status'  => 'publish' ,
											'exclude' => '3643,3712'
											);
											wp_list_pages( $args );
										?>
										</ul>
								</div>
							</div>
							<div class="subNavDiv finicialSubNav">
								<div class="subNav clearfix">
									<ul class="sub-nav clearfix">
											<?php
											if(ICL_LANGUAGE_CODE=="zh-hant")
												$page_id=131;
											else
												$page_id=86;
											$args = array(
											'depth'        => 1,
											'child_of'     => $page_id,
											'title_li'     => '',
											'echo'         => 1,
											'authors'      => '',
											'sort_column'  => 'menu_order',
											'post_type'    => 'page',
											'post_status'  => 'publish' 
											);
											wp_list_pages( $args );
										?>
										</ul>
								</div>
							</div>
						</div>	
					</div>
			</div>
		</div><!-- #masthead -->
	</div>
<div id="wrapper" class="hfeed">
	<!-- #header -->
	<div id="main">
