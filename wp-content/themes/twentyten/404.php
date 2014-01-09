<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); 

$sContent['en']['Not Found'] = 'Not Found';
$sContent['zh-hant']['Not Found'] = '找不到網頁';

$sContent['en']['Search Results for'] = 'Search Results for';
$sContent['zh-hant']['Search Results for'] = '搜尋關鍵字';

$sContent['en']['Nothing Found'] = 'Nothing Found';
$sContent['zh-hant']['Nothing Found'] = '找不到網頁';


$sContent['en']['Sorry'] = 'Sorry, no page found. Please try again with some different keywords.';
$sContent['zh-hant']['Sorry'] = '對不起！ 找不到網頁。請嘗試選擇不同的關鍵字。';
?>

	<div id="container" class="one-column">
		<div id="content" role="main">
<div id="report-page-container">
            	<div id="report-top">
                	<div id="report-title">
                    	<div id="report-page-heading"><?php echo $sContent[ICL_LANGUAGE_CODE]['Not Found']; ?></div>
                        <div id="report-page-sub-heading"><?php if(!$isLevelOne) echo $levelTwoTitle;?></div>
                    </div>
                </div>
                <div id="breadcrumb"></div>
                <div id="report-content-container">
               		<div id="report-content">
                            <div id="post-0" class="post no-results not-found">
                                <h2 class="entry-title"><?php _e( $sContent[ICL_LANGUAGE_CODE]['Nothing Found'], 'twentyten' ); ?></h2>
                                <div class="entry-content">
                                    <p><?php _e( $sContent[ICL_LANGUAGE_CODE]['Sorry'], 'twentyten' ); ?></p>
                                    <p>
									<?php
									 get_template_part( 'nav', 'searchform' );
									?>
                                    </p>
                                </div><!-- .entry-content -->
                            </div><!-- #post-0 -->
                    </div>
                    <div id="report-menu">
                    	<?php // get_template_part( 'nav', 'side' );?>
                    </div>
                </div>
            
           	</div>

			 </div>

		</div><!-- #content -->
	</div><!-- #container -->
	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_footer(); ?>