<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); 


$sContent['en']['Search Results'] = 'Search Results';
$sContent['zh-hant']['Search Results'] = '搜尋結果';

$sContent['en']['Search Results for'] = 'Search Results for';
$sContent['zh-hant']['Search Results for'] = '搜尋關鍵字';

$sContent['en']['Nothing Found'] = 'Nothing Found';
$sContent['zh-hant']['Nothing Found'] = '找不到結果';


$sContent['en']['Sorry'] = 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.';
$sContent['zh-hant']['Sorry'] = '對不起！ 找不到結果。請嘗試選擇不同的關鍵字。';
?>
<script type="text/javascript">	
$(document).ready(function(){
	 $(window).scroll(function(){
		  if( $(window).scrollTop() > 0) {
				$('#wrapper').css({"margin-top":"185px"});
				
		  }		  
	 });
	 
 	//initHomeScrollMenu();  
});
</script>

<div id="container" class="one-column">
	<div id="content" role="main" >
		<div id="report-page-container">
			<div id="report-content-container">
				<div id="report-content">
					<?php if ( have_posts() ) : ?>
					<h1 class="page-title"><?php printf( __( $sContent[ICL_LANGUAGE_CODE]['Search Results for'].': %s', 'twentyten' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					<?php
							  get_template_part( 'loop', 'search' );
							 ?>
					<?php else : ?>
					<div id="post-0" class="post no-results not-found">
						<h2 class="entry-title">
							<?php _e( $sContent[ICL_LANGUAGE_CODE]['Nothing Found'], 'twentyten' ); ?>
						</h2>
						<div class="entry-content">
							<p><?php _e( $sContent[ICL_LANGUAGE_CODE]['Sorry'], 'twentyten' ); ?></p>
							<div class="clearfix" style="border: 1px solid rgb(0, 0, 0); width: 222px; height: 29px;"><?php get_template_part( 'nav', 'searchform' );?></div>
						</div>
						<!-- .entry-content -->
					</div>
					<!-- #post-0 -->
					<?php endif; ?>
				</div>
				<div class="bottomNav clearfix"></div>
			</div>
		</div>
	</div>
</div>
<!-- #content -->
</div>
<!-- #container -->
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
