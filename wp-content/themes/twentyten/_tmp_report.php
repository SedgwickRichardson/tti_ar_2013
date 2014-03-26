<?php
/**
 * Template Name: Report page
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
get_header("inner"); 
$currLang = ICL_LANGUAGE_CODE;
$langContent['en']['Download this section'] = '&#128229;';
$langContent['zh-hant']['Download this section'] = '&#128229;';
$langContent['en']['Previous page'] = '&laquo; Previous';
$langContent['zh-hant']['Previous page'] = '&laquo; 上一頁';
$langContent['en']['Next page'] = 'Next &raquo;';
$langContent['zh-hant']['Next page'] = '下一頁 &raquo;';
$langContent['en']['width'] = '130';
$langContent['zh-hant']['width'] = '125';
$langContent['en']['Print this page'] = '&#59158;';
$langContent['zh-hant']['Print this page'] = '&#59158;';
$langContent['en']['Print this page in PDF'] = '&#59158;';
$langContent['zh-hant']['Print this page in PDF'] = '&#59158;';
$langContent['en']['Download PDF file of this section'] = '&#128229;';
$langContent['zh-hant']['Download PDF file of this section'] = '&#128229;';
$langContent['en']['Email this page'] = '&#59196;';
$langContent['zh-hant']['Email this page'] = '&#59196;';
$langContent['en']['BACK TO TOP'] = 'Back to top';
$langContent['zh-hant']['BACK TO TOP'] = '返回頁首';
$langContent['en']['tencent'] = 'TTI Annual Report 2012';
$langContent['zh-hant']['tencent'] = '创科实业2012年年报';
$pdfLink = get_post_custom_values('pdfLink', get_the_ID());
$pdfLink = $pdfLink[0];	
$nextPage = get_post_custom_values('nextPage', get_the_ID());
$nextPage = $nextPage[0];	
$prevPage = get_post_custom_values('prevPage', get_the_ID());
$prevPage = $prevPage[0];	
?>
		<div id="container">
		
			<div id="content" <?php if(ICL_LANGUAGE_CODE=="zh-hant") echo 'class="chi-content" ';?>role="main">
			<div id="report-page-container">
                <div id="breadcrumb">
					<div class="clearfix" style="width:960px; margin:0 auto; border-bottom: 1px dashed #000; padding-bottom: 4px; position:relative;">
					 	<div style="float:left;width: 620px;">
					 		<?php echo get_breadcrumb($post, true); ?>
					 	</div>
						<!--<div style="float:right; width:273px;">
							<a href="#" style="float:left;">&laquo; Previous page</a>
							<a href="#" style="float:right;">Next page &raquo;</a>
						</div>-->
						<div class="pageLinkContainer">
							
							<script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
							<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5153b9e640b238a8"></script>
						
						<?php
						if(!empty($pdfLink)){	?>
							<div id="iconBtn">
								<a href="javascript:;" id="headerShareBtn"><?php echo $langContent[ICL_LANGUAGE_CODE]['Email this page']; ?></a>
								<a id="downloadLink" target="_blank" href="<?php echo site_url();echo $pdfLink;?>"><?php echo $langContent[ICL_LANGUAGE_CODE]['Download this section']; ?><span id="tooltips_download"></span></a>
								<a id="printLink" target="_blank" href="<?php echo site_url();echo $pdfLink;?>"><?php echo $langContent[ICL_LANGUAGE_CODE]['Print this page in PDF']?><span id="tooltips_print"></span></a>
							</div>
						<?
						}
						?>
							<div style="float:left; margin-right:17px; width:<?php echo $langContent[ICL_LANGUAGE_CODE]['width']; ?>px;">
								<?php
								if(!empty($prevPage)){
								?>
								<a href="<?php echo site_url();echo $prevPage;?>" style="float:left;"><?php echo $langContent[ICL_LANGUAGE_CODE]['Previous page']; ?></a>
								<?
								}
								?>
								<?php
								if(!empty($nextPage)){
								?>
								<a href="<?php echo site_url();echo $nextPage;?>" style="float:right;"><?php echo $langContent[ICL_LANGUAGE_CODE]['Next page']; ?></a>
								<?
								}
								?>								
							</div>
							<a id="backToTopLink"  href="javascript:initBackTop();" style="float:right;"><?php echo $langContent[ICL_LANGUAGE_CODE]['BACK TO TOP']; ?></a>
							
							<div class="addthis_toolbox addthis_default_style shareBox" id="shareBox" style="display:none">
								<a class="addthis_button_facebook"></a>
								<a class="addthis_button_twitter"></a>
								<a class="addthis_button_google_plusone_badge" g:plusone:size="small" g:plusone:name="" g:plusone:href="https://plus.google.com/102383601500147943541/"></a> 
								<!--<a class="addthis_button_linkedin"></a>
								<a class="addthis_button_reddit"></a>-->
								<a class="addthis_button_email"></a>
								<a class="addthis_button_sinaweibo"></a>
								
								<div id="qqwb_share__" data-appkey="801387349" data-icon="2" data-counter="0" data-content="<?php echo $langContent[ICL_LANGUAGE_CODE]['tencent']; ?>"></div>
								<!--<script type="text/javascript" src="http://china-addthis.googlecode.com/svn/trunk/addthis.js" charset="UTF-8"></script>
								<a class="addico add_48" href="http://addthis.org.cn/go/?act=share&id=48" i="48" e="click" title="收藏&amp;分享">分享</a>-->
							</div>		
						</div>
					</div>
				</div>
				<div id="prod_status" style="width: 960px;margin: 0 auto;border: 3px solid #f00;margin-bottom:20px"><h1 style="margin:30px auto;color: #f00;font-size: 18px;text-align: center;">
					<?php
						$alert = get_field("prod_status");
						if($alert==""){
							echo "Production in process, not for review yet";
						}else{
							echo $alert;
						}
					?>
				</h1></div>
                <div id="report-content-container">
               		<div id="report-content">
                    	<?php get_template_part( 'loop', 'page' );?>
                    </div>
                </div>
            
           	</div>
           
			
			</div><!-- #content -->
		</div><!-- #container -->
<script>
$(document).ready(function(){
	initContentSlideToggle();
	/*if($("body").hasClass="page-id-3653"){
		$("#footer").css("margin-bottom","20px");
	}*/
	if (navigator.userAgent.indexOf('Safari') != -1 
             && navigator.userAgent.indexOf('Chrome') == -1) 
	  {
		//alert("safari");
		$("#iconBtn").css("margin-top","0px");
	  }
});
</script>
<?php get_footer("inner"); ?>
