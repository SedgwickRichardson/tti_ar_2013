<?php
	$searchContent['en']['Search'] = 'Search';
	$searchContent['zh-hant']['Search'] = '搜尋';
	
?>
<div id="search-bar-404">
    <input id="site-search-404" type="text" name="s" value="<?php echo $searchContent[ICL_LANGUAGE_CODE]['Search'];?>"/><a id="searchsubmit-404">Go</a>
    <form role="search" method="get" id="searchform-hidden-404" style="display:none;" action="<?php bloginfo( 'url' ); ?>" >
          <input id="site-search-hidden-404" type="text" name="s" value="Search"/>
    </form>
</div>