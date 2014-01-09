<div class="home-menu-row">
<?php 
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
$homeContent['en']['Statement of financial position'] = 'Statement of financial position';
$homeContent['zh-hant']['Statement of financial position'] = '財務狀況表';
$homeContent['en']['Financial Summary'] = 'Financial Summary';
$homeContent['zh-hant']['Financial Summary'] = '財務概要';
//check if this page has PDF for download, else show print link
$pdfLink = get_post_custom_values('pdfLink', get_the_ID());
$pdfLink = $pdfLink[0];		

$printPDF = get_post_custom_values('printPDF', get_the_ID());
$printPDF = $printPDF[0];		

if(!empty($printPDF)){								
	echo '<a id="printLink" target="_blank" href="';echo site_url();echo $pdfLink.'">'.$homeContent[ICL_LANGUAGE_CODE]['Print this page in PDF'].'</a>';								
}else{
	?>
	<?php 
	$pLink = get_permalink();
	$last = substr($pLink, -1);
	if($last != '/'){
		$pLink .= '/';
	}								
	$disablePrint = get_post_custom_values('disablePrint', get_the_ID());							
	if(!$disablePrint){
		?>
		<a id="printLink" target="_blank" href="<?php echo $pLink;?>printpage/<?php //print_link(); ?>"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Print this page']; ?></a>               
		<?php		
	}
}

?>                                       	
<a id="emailLink" href="mailto:?subject=<?php bloginfo( 'name' )?> - <?php urlencode(the_title()) ?>&body=<?php urlencode(the_permalink()) ?>"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Email this page']; ?></a>
<?php if(!empty($pdfLink)){ ?>
	<a id="pdfLink" target="_blank" href="<?php echo site_url();echo $pdfLink; ?>"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Download PDF file of this section']; ?></a>
	<?php }?>
<div class="title"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Corporate Links']; ?></div>
<a id="audioLink" href="http://www.ttigroup.com/en/investor_relations/presentation_and_webcasts" target="_blank"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Audio Webcast']; ?></a>
<a id="presentLink" href="http://www.ttigroup.com/en/investor_relations/presentation_and_webcasts" target="_blank"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Presentation']; ?></a>
<a id="pressLink" href="http://www.ttigroup.com/en/investor_relations/news/press_releases" target="_blank"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Press release']; ?></a>

<?php 
$rL = get_post_meta($post->ID, 'relatedLink', false); 
$rL = ''; // not show related links
if(!empty($rL)){
	?>
	<div class="report-menu-sep"></div> 
	<div class="report-menu-title"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Related Links']; ?></div>                        <?php 
	
	foreach ($rL as $currLink){
		icl_link_to_element($currLink);
	}
	?>
	
	<?php }?>
</div>