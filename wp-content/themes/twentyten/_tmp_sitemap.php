<?php
/**
 * Template Name: Sitemap
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); 
$menu['en'][1][1] = 'Executive Summary';
$menu['en'][1][2] = 'Financial Highlights';
$menu['en'][1][3] = 'Chairman\'s Statement';
$menu['en'][1][4] = 'Vice Chairman\'s Message';
$menu['en'][1][5] = 'CEO\'s Strategic Review';
$menu['en'][1][6] = 'Brands Overview';
$menu['en'][1][7] = 'Review of Operations';
$menu['en'][1][8] = 'Strategic Drivers';
$menu['en'][1][9] = 'Power Equipment Overview';
$menu['en'][1][10] = 'Review of Operations – Power Equipment';
$menu['en'][1][11] = 'Floor Care and Appliances Overview';
$menu['en'][1][12] = 'Review of Operations – Floor Care and Appliances';

$menu['en'][2][1] = 'MD&A & Governance';
$menu['en'][2][2] = 'Board of Directors';
$menu['en'][2][3] = 'Global Senior Management';
$menu['en'][2][4] = 'Management\'s Discussion & Analysis';
$menu['en'][2][5] = 'Corporate Governance Report';
$menu['en'][2][6] = 'Director\'s Report';

$menu['en'][3][1] = 'Financials';
$menu['en'][3][2] = 'Independent Auditor\'s Report';
$menu['en'][3][3] = 'Consolidated Statement of comprehensive Income';
$menu['en'][3][4] = 'Consolidated Statement of Financial Position';
$menu['en'][3][5] = 'Statement of Financial Position';
$menu['en'][3][6] = 'Consolidated Statement of Changes in Equity';
$menu['en'][3][7] = 'Consolidated Statement of Cash Flow';
$menu['en'][3][8] = 'Notes to the Consolidated Financial Statements';

$menu['en'][4][1] = 'Financial Summary';
$menu['en'][5][1] = 'Corporate Information';
$menu['en'][7][1] = 'Downloads';
$menu['en'][8][1] = 'Contact Us';
$menu['en'][9][1] = 'Terms';
$menu['en'][10][1] = 'Privacy Policy';

$menu['en'][11][1] = 'Powerful Brands';
$menu['en'][11][2] = 'Innovative Products';
$menu['en'][11][3] = 'Exceptional People';
$menu['en'][11][4] = 'Operational Excellence';

$menu['zh-hant'][1][1] = '行政摘要';
$menu['zh-hant'][1][2] = '財務摘要';
$menu['zh-hant'][1][3] = '主席報告書';
$menu['zh-hant'][1][4] = '副主席之言';
$menu['zh-hant'][1][5] = '行政總裁策略回顧';
$menu['zh-hant'][1][6] = '品牌概述';
$menu['zh-hant'][1][7] = '業務回顧';
$menu['zh-hant'][1][8] = '策略路線圖';
$menu['zh-hant'][1][9] = '電動工具概覽';
$menu['zh-hant'][1][10] = '業務回顧 – 電動工具';
$menu['zh-hant'][1][11] = '地板護理及器具概覽';
$menu['zh-hant'][1][12] = '業務回顧 – 地板護理及器具';

$menu['zh-hant'][2][1] = '討論、分析與管治';
$menu['zh-hant'][2][2] = '董事會';
$menu['zh-hant'][2][3] = '環球高級管理人員';
$menu['zh-hant'][2][4] = '管理層討論與分析';
$menu['zh-hant'][2][5] = '企業管治報告';
$menu['zh-hant'][2][6] = '董事會報告書';

$menu['zh-hant'][3][1] = '財務';
$menu['zh-hant'][3][2] = '獨立核數師報告書';
$menu['zh-hant'][3][3] = '綜合全面收入表';
$menu['zh-hant'][3][4] = '綜合財務狀況表';
$menu['zh-hant'][3][5] = '財務狀況表';
$menu['zh-hant'][3][6] = '綜合權益變動表';
$menu['zh-hant'][3][7] = '綜合現金流量表';
$menu['zh-hant'][3][8] = '綜合財務報表附註';

$menu['zh-hant'][4][1] = '財務概要';
$menu['zh-hant'][5][1] = '公司資料';
$menu['zh-hant'][7][1] = '下載';
$menu['zh-hant'][8][1] = '聯絡我們';
$menu['zh-hant'][9][1] = '條款';
$menu['zh-hant'][10][1] = '私隱政策';

$menu['zh-hant'][11][1] = '強勁品牌';
$menu['zh-hant'][11][2] = '創新產品';
$menu['zh-hant'][11][3] = '優秀人才';
$menu['zh-hant'][11][4] = '卓越營運';

$homeContent['en']['Corporate Links'] = 'Corporate Links';
$homeContent['zh-hant']['Corporate Links'] = '企業連結';
$homeContent['en']['Audio Webcast'] = 'Audio Webcast';
$homeContent['zh-hant']['Audio Webcast'] = '網絡廣播';
$homeContent['en']['Presentation'] = 'Presentation';
$homeContent['zh-hant']['Presentation'] = '公司簡報';
$homeContent['en']['Press release'] = 'Press release';
$homeContent['zh-hant']['Press release'] = '新聞發佈';

$homeContent['en']['Related Links'] = 'Related Links';
$homeContent['zh-hant']['Related Links'] = '相關連結';


$homeContent['en']['Print this page'] = 'Print this page';
$homeContent['zh-hant']['Print this page'] = '列印此頁';
$homeContent['en']['Print this page in PDF'] = 'Print this page in PDF';
$homeContent['zh-hant']['Print this page in PDF'] = '列印此頁之PDF';


$homeContent['en']['Download PDF file of this section'] = 'Download PDF file of this section';
$homeContent['zh-hant']['Download PDF file of this section'] = '下載此部分之PDF';


$homeContent['en']['Email this page'] = 'Email this page';
$homeContent['zh-hant']['Email this page'] = '電郵此頁';
?>
		<div id="container">
			<div id="content" <?php if(ICL_LANGUAGE_CODE=="zh-hant") echo 'class="chi-content" ';?>role="main">
			<div id="report-page-container">
                <div id="breadcrumb">
					<div class="clearfix" style="width:960px; margin:0 auto; border-bottom: 1px dashed #000; padding-bottom: 4px;">
					 	<div style="float:left;">
					 		<?php echo get_breadcrumb($post, true); ?>
					 	</div>
						<!--<div style="float:right; width:273px;">
							<a href="#" style="float:left;">&laquo; Previous page</a>
							<a href="#" style="float:right;">Next page &raquo;</a>
						</div>-->
						<div style="float:right;">
						<?php
						if(!empty($pdfLink)){	?>
							<div style="float:left; margin-right:40px;">
								<a target="_blank" href="<?php echo site_url();echo $pdfLink;?>"><?php echo $langContent[ICL_LANGUAGE_CODE]['Download this section']; ?></a>
							</div>
						<?
						}
						?>
							<div style="float:left; width:<?php echo $langContent[ICL_LANGUAGE_CODE]['width']; ?>px;">
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
						</div>
					</div>
				</div>
                <div id="report-content-container">
                
               		<div id="report-content">
								<div class="innerPageCenterDiv">
									<div id="sitemap-container">
										<div class="sitemap-item">
											<div class="title">
									<a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>"><?php echo $menu[ICL_LANGUAGE_CODE][1][1];?></a></div>
											  <a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/financial-highlights"><?php echo $menu[ICL_LANGUAGE_CODE][1][2];?></a>
									<a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/chairmans-statement"><?php echo $menu[ICL_LANGUAGE_CODE][1][3];?></a>
											  <a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/ceos-strategic-review"><?php echo $menu[ICL_LANGUAGE_CODE][1][5];?></a>
									
											  <a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/strategic-drivers"><?php echo $menu[ICL_LANGUAGE_CODE][1][8];?></a>
									<a class="sitemap_subnav" href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/strategic-drivers/powerful-brands"><?php echo $menu[ICL_LANGUAGE_CODE][11][1];?></a>
									<a class="sitemap_subnav" href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/strategic-drivers/innovative-products"><?php echo $menu[ICL_LANGUAGE_CODE][11][2];?></a>
									<a class="sitemap_subnav" href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/strategic-drivers/exceptional-people"><?php echo $menu[ICL_LANGUAGE_CODE][11][3];?></a>
									<a class="sitemap_subnav" href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/strategic-drivers/operational-excellence"><?php echo $menu[ICL_LANGUAGE_CODE][11][4];?></a>
									
											  <a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/power-equipment-overview"><?php echo $menu[ICL_LANGUAGE_CODE][1][9];?></a>
									<a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/review-of-operations-power-equipment"><?php echo $menu[ICL_LANGUAGE_CODE][1][10];?></a>
									<a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/floor-care-and-appliances-overview"><?php echo $menu[ICL_LANGUAGE_CODE][1][11];?></a>
									<a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/review-of-operations-floor-care-and-appliances"><?php echo $menu[ICL_LANGUAGE_CODE][1][12];?></a>
										 </div>
										 <div class="sitemap-item">
											<div class="title"><a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/mda-governance<?php echo get_curr_lang_second_path() ; ?>"><?php echo $menu[ICL_LANGUAGE_CODE][2][1];?></a></div>
											  <a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/mda-governance<?php echo get_curr_lang_second_path() ; ?>/board-of-directors"><?php echo $menu[ICL_LANGUAGE_CODE][2][2];?></a>
											  <a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/mda-governance<?php echo get_curr_lang_second_path() ; ?>/managements-dicussion-analysis"><?php echo $menu[ICL_LANGUAGE_CODE][2][4];?></a>
											  <a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/mda-governance<?php echo get_curr_lang_second_path() ; ?>/corporate-governance-report"><?php echo $menu[ICL_LANGUAGE_CODE][2][5];?></a>
											  <a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/mda-governance<?php echo get_curr_lang_second_path() ; ?>/directors-report"><?php echo $menu[ICL_LANGUAGE_CODE][2][6];?></a>
										 </div>
										 <div class="sitemap-item">
											<div class="title"><a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/financials<?php echo get_curr_lang_second_path() ; ?>"><?php echo $menu[ICL_LANGUAGE_CODE][3][1];?></a></div>
											  <a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/financials<?php echo get_curr_lang_second_path() ; ?>/independent-auditors-report"><?php echo $menu[ICL_LANGUAGE_CODE][3][2];?></a>
											  <a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/financials<?php echo get_curr_lang_second_path() ; ?>/consolidated-statement-of-comprehensive-income"><?php echo $menu[ICL_LANGUAGE_CODE][3][3];?></a>
											  <a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/financials<?php echo get_curr_lang_second_path() ; ?>/consolidated-statement-of-financial-position"><?php echo $menu[ICL_LANGUAGE_CODE][3][4];?></a>
											  <a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/financials<?php echo get_curr_lang_second_path() ; ?>/statement-of-financial-position"><?php echo $menu[ICL_LANGUAGE_CODE][3][5];?></a>
											  <a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/financials<?php echo get_curr_lang_second_path() ; ?>/consolidated-statement-of-changes-in-equity"><?php echo $menu[ICL_LANGUAGE_CODE][3][6];?></a>
											  <a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/financials<?php echo get_curr_lang_second_path() ; ?>/consolidated-statement-of-cash-flow"><?php echo $menu[ICL_LANGUAGE_CODE][3][7];?></a>
											  <a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/financials<?php echo get_curr_lang_second_path() ; ?>/notes-to-the-consolidated-financial-statements"><?php echo $menu[ICL_LANGUAGE_CODE][3][8];?></a>
											 
										 </div>
										 <div class="sitemap-item">
											<div class="title"><a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/financial-summary<?php echo get_curr_lang_second_path() ; ?>"><?php echo $menu[ICL_LANGUAGE_CODE][4][1];?></a></div>
										 </div>
										 <div class="sitemap-item">
											<div class="title"><a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/corporate-information<?php echo get_curr_lang_second_path() ; ?>"><?php echo $menu[ICL_LANGUAGE_CODE][5][1];?></a></div>
										 </div>
										 
										 <div style="clear:both;"></div>
										 
										 <div class="sitemap-item">
											<div class="title"><a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/Downloads<?php echo get_curr_lang_second_path() ; ?>"><?php echo $menu[ICL_LANGUAGE_CODE][7][1];?></a></div>
										 </div>
										 <div class="sitemap-item">
											<div class="title"><a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/contact-us<?php echo get_curr_lang_second_path() ; ?>"><?php echo $menu[ICL_LANGUAGE_CODE][8][1];?></a></div>
										 </div>
										 <div class="sitemap-item">
											<div class="title"><a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/terms<?php echo get_curr_lang_second_path() ; ?>"><?php echo $menu[ICL_LANGUAGE_CODE][9][1];?></a></div>
										 </div>
									</div>
								</div>
                    </div>
                </div>
            
           	</div>
           
			

			</div><!-- #content -->
		</div><!-- #container -->
<?php get_footer(); ?>
