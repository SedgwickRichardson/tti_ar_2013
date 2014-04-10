 var isOpera = !!(window.opera && window.opera.version);  // Opera 8.0+
 var isFirefox = testCSS('MozBoxSizing');                 // FF 0.8+
 var isSafari = Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0; // At least Safari 3+: "[object HTMLElementConstructor]"
 var isChrome = !isSafari && testCSS('WebkitTransform');  // Chrome 1+
 var isIE = /*@cc_on!@*/false || testCSS('msTransform');  // At least IE6
 
 function testCSS(prop) {
	return prop in document.documentElement.style;
 }
$(document).ready(function(){
	initTextSwitcher();
	//initTopNav();
	initSearchFunction();
	initStyles();
	init2010HL();
	initFHL();
	//initSearchBox();
	//initBackTop();
	initFindOutMore();
	initShare();
	initQuickLink();
	if(document.getElementById('strategicDriversMap'))
	{
		initStrategicDriversMap();
	}
	//$(document).pngFix(); 
});
function initSearchBox()
{
	//var siteSearch = document.getElementById('site-search');
	var temp = $('#site-search').value;
	$('#site-search').focus(function(){
		if($('#site-search').val() == 'Search'	)
		$('#site-search').val('');	
		$('#site-search').animate({width:"180px"}, 250);
	});
	
	$('#site-search').focusout(function() {
		if($('#site-search').val() == '')
		{
			$('#site-search').val('Search');
		}
		$('#site-search').animate({width:"67px"}, 250);
	});
}
var total2010HL = 0;
var list2010HL = null;
var curr2010HLItem = 0;
function init2010HL(){
	list2010HL = $('#hlContainer .hl-item');
	total2010HL = list2010HL.length;
	sid2010 = setInterval("goto2010HL()", 6000);
	$('#hlContainer-prev-btn a').click(function(e){
		clearInterval(sid2010);
        e.preventDefault();										 	
		goto2010HL(curr2010HLItem+1);
	});
	$('#hlContainer-next-btn a').click(function(e){
		clearInterval(sid2010);
        e.preventDefault();										 	
		goto2010HL(curr2010HLItem+1);
	});
}
function goto2010HL(index){
	nextIdx = parseInt(index);
    if (!!!nextIdx){
        nextIdx = curr2010HLItem+1;
    }
	if (nextIdx == curr2010HLItem){
		return;
	}
	if(nextIdx >= total2010HL){
		nextIdx = 0;
	}
	$(list2010HL[curr2010HLItem]).fadeOut('slow', function(){$(list2010HL[nextIdx]).fadeIn('slow');});
	
	curr2010HLItem = nextIdx;
}
//financial highlights
var totalFHL = 0;
var listFHL = null;
var currFHLItem = 0;
function initFHL(){
	listFHL = $('#financeHlContainer .fhl-item');
	totalFHL = listFHL.length;
	sidFHL = setInterval("gotoFHL()", 8000);
	$('#fhlContainer-prev-btn a').click(function(e){
		clearInterval(sidFHL);
        e.preventDefault();										 	
		gotoFHL(currFHLItem+1);
	});
	$('#fhlContainer-next-btn a').click(function(e){
		clearInterval(sidFHL);
        e.preventDefault();										 	
		gotoFHL(currFHLItem+1);
	});
}
function gotoFHL(index){
	nextIdx = parseInt(index);
    if (!!!nextIdx){
        nextIdx = currFHLItem+1;
    }
	if (nextIdx == currFHLItem){
		return;
	}
	if(nextIdx >= totalFHL){
		nextIdx = 0;
	}
	$(listFHL[currFHLItem]).fadeOut('slow',function(){$(listFHL[nextIdx]).fadeIn('slow');});
	
	currFHLItem = nextIdx;
}
function initStyles(){
	$('.financialTable tr, .financialTable tr.row-odd').hover(
	 function(){ 
	 	if($(this).parents('table').hasClass('normal')){			
			return;
		}
		$(this).children('td').addClass('tdHover');
	}, function(){ 
		$(this).children('td').removeClass('tdHover');
	});
}
function initSearchFunction(){
	
	var searchTitle = '';
	var searchKeyword = '';
	
	if (icl_lang == 'en'){
		searchTitle = 'Search';
		searchKeyword = 'Enter keyword';
	}else{
		searchTitle = '搜尋';
		searchKeyword = '輸入關鍵字';		
	}
	
	$('#site-search').focus(function(){
		if ($('#site-search').val() == 'Search' || 
			$('#site-search').val() == 'Enter keyword' ||
			$('#site-search').val() == '搜尋' ||
			$('#site-search').val() == '輸入關鍵字')
		{
			$('#site-search').val('');
		}				$('#site-search').animate({width: '180'}, 500)
	});
	$('#site-search').blur(function(){
		if($('#site-search').val() == ''){
			$('#site-search').val(searchTitle);						$('#site-search').animate({width: '90'}, 500)
		}
	});	
	
	$('#site-search').keypress(function(event) {
		if(event.which == 13){
			$('a#searchsubmit').click();
		}
	});
	
	$('a#searchsubmit').click(function(e){
		e.preventDefault();
		if($('#site-search').val() == '' || 
			$('#site-search').val() == 'Search' || 
			$('#site-search').val() == 'Enter keyword' ||
			$('#site-search').val() == '搜尋' ||
			$('#site-search').val() == '輸入關鍵字'){
				$('#site-search').val(searchKeyword);
			return;
		}else{
			$('#site-search-hidden').val($('#site-search').val());
			$('#searchform-hidden').submit();
		}
	});
	
	//404 search
		$('#site-search-404').focus(function(){
		if ($('#site-search-404').val() == 'Search' || 
			$('#site-search-404').val() == 'Enter keyword'||
			$('#site-search-404').val() == '搜尋' ||
			$('#site-search-404').val() == '輸入關鍵字'
			){
			$('#site-search-404').val('');
		}else{
			}
	});
	$('#site-search-404').blur(function(){
		if($('#site-search-404').val() == ''){
			$('#site-search-404').val(searchTitle);
		}
	});	
	
	$('#site-search-404').keypress(function(event) {
		if(event.which == 13){
			$('a#searchsubmit-404').click();
		}
	});
	
	$('a#searchsubmit-404').click(function(e){
		e.preventDefault();
		if(	$('#site-search-404').val() == '' || 
			$('#site-search-404').val() == 'Search' || 
			$('#site-search-404').val() == 'Enter keyword' ||
			$('#site-search-404').val() == '搜尋' ||
			$('#site-search-404').val() == '輸入關鍵字'){
			$('#site-search-404').val(searchKeyword);
			return;
		}else{
			$('#site-search-hidden-404').val($('#site-search-404').val());
			$('#searchform-hidden-404').submit();
		}
	});
	
}
function initTextSwitcher(){
	$('#text-small').click(function(){
		$('#report-content').css('font-size','100%');
		$('#report-content').css('line-height','120%');
		$.cookie('gre_font_cookie', 'small', {expires:300, path: '/'});
	});
	$('#text-medium').click(function(){
		$('#report-content').css('font-size','115%');
		$('#report-content').css('line-height','130%');
		$.cookie('gre_font_cookie', 'medium', {expires:300, path: '/'});
	});
	$('#text-large').click(function(){
		$('#report-content').css('font-size','125%');
		$('#report-content').css('line-height','140%');
		$.cookie('gre_font_cookie', 'large', {expires:300, path: '/'});
	});
}
function initContentSlideToggle(){
	$('.report-collapse-header, .brands-collapse-header').click(function(e){
		$(this).children('.toggleButton').toggleClass('toggleButtonOpened');
		$(this).next().slideToggle('fast');
	});
}
function changeImg(id, flag)
{
	var img = document.getElementById(id);
	if(flag)
	{
		img.style.display = 'block';
	}
	
	if(!flag)
	{
		img.style.diplay = 'none';
	}
}
var d = document;
/*function showImg(btn, id, showID) {
    var menu = d.getElementById(id);
    showLayer(1);
    btn.onmouseover = function() { menu.hit = true; showLayer(1); };
    menu.onmouseover = function() { menu.hit = true; showLayer(1); };
    btn.onmouseout = function() { menu.hit = false; showLayer(0); };
    menu.onmouseout = function() { menu.hit = false; showLayer(0); };
    menu.onclick = function() { menu.hit = false; showLayer(0); };
    function showLayer(over) {
        if (over == 1) {
            $("#"+id).fadeIn(300);
				//menu.style.display = 'block';
				if (!d.getElementById(showID)) return;
            d.getElementById(showID).style.display = "none";
        }
        else {
            setTimeout(function() {
                if (!menu.hit) {
						$("#"+id).fadeOut(300);
   	           //menu.style.display = 'none';
						if (!d.getElementById(showID)) return;
                  d.getElementById(showID).style.display = "block";
                }
            }, 50);
        }
    }
}
*/
function showImg(btn, id1, id2)
{
	var oldImg = d.getElementById(id1);
	var newImg = d.getElementById(id2);
	var contentDiv = d.getElementById(id2+'_content');
	var contentDivArray = ['btn_powerful_content', 'btn_innovative_content', 'btn_exceptional_content', 'btn_operational_content']
	for(var i=0; i<contentDivArray.length; i++)
	{
		d.getElementById(contentDivArray[i]).style.display = 'none';	
	}
	
	d.getElementById(contentDivArray[0]).style.display = 'block';
	oldImg.src = newImg.src;
	
	btn.onmouseover = function(){
		oldImg.src = newImg.src;
		contentDiv.style.display = "block";
	}
}
function setChildNodes(obj, tagName)
{
	var array = new Array();
	
	for (var i=0; i<obj.childNodes.length; i++)
	{
		if (tagName)
		{
			if (obj.childNodes[i].tagName != tagName)	continue;
		}
		if (obj.childNodes[i].toString().toLowerCase().indexOf('text') >= 0)	continue;
		array.push(obj.childNodes[i]);
	}
	
	return array;
}
function initStrategicDriversMap()
{
	var div = d.getElementById('strategicImgBtn');
	var imgBtnArray = div.getElementsByTagName('IMG');
	var imgMapBtnArray = div.getElementsByTagName('AREA');
	var contentDiv = d.getElementById('strategicImgContent');
	var contentDivArray = setChildNodes(contentDiv, 'DIV');
	
	for(var i=0; i<imgMapBtnArray.length; i++)
	{
		imgMapBtnArray[i].num = i;
		imgMapBtnArray[i].onmouseover = function()
		{
			imgBtnArray[0].src = imgBtnArray[this.num+1].src;
			for(var j=0; j<contentDivArray.length; j++)
			{
				contentDivArray[j].style.display = 'none';
			}
			contentDivArray[this.num].style.display = 'block';
		}
	}
}
function init_rotator() {
  // Does element exist?
  if (!$('#rotator').length) {
    // If not, exit.
    return;
  }
  //fading time
  var bgFadeSpeed = 500;
  //how long an image stays
  var bgDuration = 4000;
  // Pause setting.
  var pause = false;
  var start = true;
  var timer;
  // Rotator function.
  function rotate(element) {
    // Stop, if user has interacted.
    if (pause) {
      return;
    }
	
    // Either the next /first <li>.
	if($(element).next('li').length)
	{
		 var $next_li = $(element).next('li');
		start = false;
	}
	else
	{
		 var $next_li = $('#rotator li:first');
		 start = true;
	}
    // Either next / first control link.
    var $next_a = $('#rotator_controls a.current').parent('li').next('li').length ? 
                  $('#rotator_controls a.current').parent('li').next('li').find('a') : 
                  $('#rotator_controls a:first');
    // Animate.
	if(start)
	{
		$('#rotator_controls a').removeClass().addClass('start');
		$('#rotator_controls a:first').addClass('current');
	}
	else
	{
		$('#rotator_controls a').removeClass();
		$next_a.addClass('current');
	}
    // Continue.
    function doIt() {
      rotate($next_li);
    }
    // Fade out <li>.
    $(element).fadeOut(bgFadeSpeed);
    // Show next <li>.
	$($next_li).removeClass().addClass("current_slide").siblings('li').removeClass();
    $($next_li).fadeIn(bgFadeSpeed, function() {
      // Slight delay.
      timer = setTimeout(doIt, bgDuration);
    });
  }
  // Add click listeners for controls.
  $('#rotator_controls a').mouseover(function() {
	clearTimeout(timer);
    // Show target, hide other <li>.
    $("#"+$(this).attr('rel')).show().removeClass().addClass('current_slide').siblings('li').hide().removeClass();
    // Add class="current" and remove from all others.
    $(this).removeClass().addClass('current').parent('li').siblings('li')
           .find('a').removeClass();
    // Pause animation.
    pause = true;	
    this.blur();
    return false;
  });
  
   $('#rotator li').mouseover(function() {
	clearTimeout(timer);
    // Pause animation.
    pause = true;	
    this.blur();
    return false;
  });
  
  function resume(){
		pause = false;
		timer = setTimeout(function() {
			rotate($('#rotator li.current_slide'));
		},bgDuration);
		this.blur();
		return false;
  }
  
   $('#rotator_controls a').mouseout(resume);
   $('#rotator li').mouseout(resume);
  // Hide all but first <li>.
  $('#rotator li:first').siblings('li').hide();
  // Wait for page load.
    // Begin rotation.
	$('#rotator li:first').show();
    setTimeout(function() {
		rotate($('#rotator li:first'))
		},bgDuration);
}
function getElementsByClassName(p, c, selected) {
    var array = new Array();
    var tags = p.getElementsByTagName('*');
	
	for (var i = 0; i < tags.length; i++) {
        if (!tags[i].className) continue;
        if (selected) {
				var temp = tags[i].className;
				var astr = temp.split(" ");
				for (var j = 0; j < astr.length; j++) {
					if (astr[j] == c) array.push(tags[i]);
				}
        } else {
            if (tags[i].className == c) array.push(tags[i]);
        }
    }
	
	return array;
}
function setChildNodes(obj, tagName) {
    var array = new Array();
    for (var i = 0; i < obj.childNodes.length; i++) {
        if (tagName) {
            if (obj.childNodes[i].tagName != tagName) continue;
        }
        if (obj.childNodes[i].toString().toLowerCase().indexOf('text') >= 0) continue;
        array.push(obj.childNodes[i]);
    }
    return array;
}
function initTopNav()
{
	var mainNavArray = document.getElementById('main-nav').getElementsByTagName('A');
	var mainNavConainerArray = document.getElementById('main-nav').getElementsByTagName('LI');
	var subNavContainer = document.getElementById('subNavContainer');
	var subNavArray = getElementsByClassName(subNavContainer, 'subNavDiv', 1);
	
	for(var i=0; i<mainNavArray.length-1; i++)
	{
		mainNavArray[i].num = i;
		
		if(i>0 && i < mainNavArray.length-2)
		{
			/*mainNavArray[i].href = 'javascript:;';
			
			mainNavArray[i].onclick = function()
			{
				if(subNavArray[this.num-1].style.display == 'block')
				{
					subNavArray[this.num-1].style.display = 'none';
					subNavArray[this.num-1].className = subNavArray[this.num-1].className.replace('notActive','');
					mainNavConainerArray[this.num].className = mainNavConainerArray[this.num].className.replace('notActiveSubNavShow', '');
				}else{
					resetHomeSubNav();
					mainNavConainerArray[this.num].className += ' notActiveSubNavShow';
					subNavArray[this.num-1].className += ' notActive';
					subNavArray[this.num-1].style.display = 'block';
				}
			}*/
		}
	}
	
	for(var i=0; i<mainNavConainerArray.length; i++)
	{
		if(mainNavConainerArray[i].className.indexOf('current-page-ancestor') > 0)
		{
			subNavArray[i].style.display = 'block';
		}
	}
	
	function resetHomeSubNav()
	{
		for(var i=0; i<subNavArray.length; i++)
		{
			subNavArray[i].style.display = 'none';
			subNavArray[i].className = subNavArray[i].className.replace('notActive','');
		}
		for(var j=0; j<mainNavConainerArray.length; j++)
		{
			mainNavConainerArray[j].className = mainNavConainerArray[j].className.replace('notActiveSubNavShow', '');
		}
	}
	
	$('html').click(function(e){
	   if($(e.target).is('a')){
		
		}else{
			$(".subNavDiv").hide();
			for(var i=0; i<mainNavConainerArray.length; i++)
			{
				mainNavConainerArray[i].className = mainNavConainerArray[i].className.replace('notActiveSubNavShow', '');
			}
		}
    });
}
function initInnerPageTopNav()
{
	var mainNavArray = document.getElementById('access').getElementsByTagName('A');
	var mainNavConainerArray = document.getElementById('access').getElementsByTagName('LI');
	var subNavContainer = document.getElementById('subNavContainer');
	var subNavArray = getElementsByClassName(subNavContainer, 'subNavDiv', 1);
	var headerHeight = 0;
	
	initAction(false);
	headerHeight = $('#header').height();
	setCurrentSubNav();
	
	$(window).scroll(function(){
		//$('#scrollshow').html($(window).scrollTop());
		if( $(window).scrollTop() < 127) {
			$('#subNavContainer').css({position: 'relative', top:0, 'z-index':899});
		}
		
		if($(window).scrollTop() > 127)
		{
			$('#subNavContainer').css({'z-index':799});
		}
		if($(window).scrollTop() < 128)
		{
			$('#subNavContainer').css({'margin-top':0});
		}
		if( $(window).scrollTop() > 128) {
			$('#subNavContainer').css({position: 'relative', top:0, 'margin-top':50});
			
			/*if(headerHeight < 200)
			{
				if( $(window).scrollTop() > 120)
				{
					$('#breadcrumb').css({position: 'fixed', top: '50px', 'z-index': '899'});
				}else{
					$('#breadcrumb').css({position: 'relative', top: '0'});	
				}	
			}else{
				if( $(window).scrollTop() > headerHeight-51)
				{
					$('#breadcrumb').css({position: 'fixed', top: '50px', 'z-index': '899'});
				}else{
					$('#breadcrumb').css({position: 'relative', top: '0'});	
				}
			}*/
				
			resetSubNav();
			for(var i=0; i<mainNavArray.length-1; i++)
			{
				mainNavArray[i].num = i;
				if(i>0 && i < mainNavArray.length-2)
				{
					/*mainNavArray[i].href = 'javascript:;';
					mainNavArray[i].onclick = function()
					{
						if(subNavArray[this.num-1].style.display == 'block')
						{
							subNavArray[this.num-1].style.display = 'none';
							mainNavConainerArray[this.num].className = mainNavConainerArray[this.num].className.replace('subNavShow', '');
							mainNavConainerArray[this.num].className = mainNavConainerArray[this.num].className.replace('notActiveSubNavShow', '');
							if(mainNavConainerArray[this.num].className.indexOf('current-page-ancestor') > 0)
							{
								if(mainNavConainerArray[this.num].className.indexOf('bottomArrow') < 0)
								{
									mainNavConainerArray[this.num].className += ' bottomArrow';
								}
							}
						}else{
							resetSubNav();
							if( $(window).scrollTop() > 125) {
								$('#subNavContainer').css({position: 'fixed', top: '49px', 'z-index': '899'});
							}
							if(mainNavConainerArray[this.num].className.indexOf('current-page-ancestor') > 0)
							{
								mainNavConainerArray[this.num].className += ' subNavShow';
								mainNavConainerArray[this.num].className = mainNavConainerArray[this.num].className.replace('bottomArrow','');
								subNavArray[this.num-1].style.display = 'block';
							}else{
								mainNavConainerArray[this.num].className += ' notActiveSubNavShow';
								subNavArray[this.num-1].className += ' notActive';
								subNavArray[this.num-1].style.display = 'block';
							}
						}
					}*/
				}
			}
		}else{
			initAction(true);
		}
	 });
	
	$('html').click(function(e){
	   if($(e.target).is('a')){
		
		}else{
			//$(".subNavDiv").hide();
			for(var i=0; i<mainNavConainerArray.length; i++)
			{
				mainNavConainerArray[i].className = mainNavConainerArray[i].className.replace('subNavShow', '');
				mainNavConainerArray[i].className = mainNavConainerArray[i].className.replace('notActiveSubNavShow', '');	
				if(mainNavConainerArray[i].className.indexOf('current-page-ancestor') > 0)
				{
					if(mainNavConainerArray[i].className.indexOf('bottomArrow') < 0)
					{
						mainNavConainerArray[i].className += ' bottomArrow';
					}
				}
			}
		}
    });
	
	function initAction(flag){
		resetSubNav();
		setCurrentSubNav();
		if(flag)
			$('#subNavContainer').css({position: 'relative', top:0});
			
		$('#breadcrumb').css({position: 'relative', top: '0'});	
			
		for(var i=0; i<mainNavArray.length-1; i++)
		{
			mainNavArray[i].num = i;
			if(i>0 && i < mainNavArray.length-2)
			{
				/*mainNavArray[i].href = 'javascript:;';
				mainNavArray[i].onclick = function()
				{
					if(subNavArray[this.num-1].style.display == 'block')
					{
						subNavArray[this.num-1].style.display = 'none';
						mainNavConainerArray[this.num].className = mainNavConainerArray[this.num].className.replace('subNavShow', '');
						mainNavConainerArray[this.num].className = mainNavConainerArray[this.num].className.replace('notActiveSubNavShow', '');
						if(mainNavConainerArray[this.num].className.indexOf('current-page-ancestor') > 0)
						{
							if(mainNavConainerArray[this.num].className.indexOf('bottomArrow') < 0)
							{
								mainNavConainerArray[this.num].className += ' bottomArrow';
							}
						}
					}else{
						resetSubNav();
						if(mainNavConainerArray[this.num].className.indexOf('current-page-ancestor') > 0)
						{
							mainNavConainerArray[this.num].className += ' subNavShow';
							mainNavConainerArray[this.num].className = mainNavConainerArray[this.num].className.replace('bottomArrow','');
							subNavArray[this.num-1].style.display = 'block';
							
						}else{
							mainNavConainerArray[this.num].className += ' notActiveSubNavShow';
							//mainNavConainerArray[this.num].className = mainNavConainerArray[this.num].className.replace('bottomArrow','');
							subNavArray[this.num-1].className += ' notActive';
							subNavArray[this.num-1].style.display = 'block';
						}
					}
				}*/
			}
		}		
	}
	
	function setCurrentSubNav()
	{
		for(var i=0; i<mainNavConainerArray.length; i++)
		{
			if(mainNavConainerArray[i].className.indexOf('current-page-ancestor') > 0)
			{
				/*subNavArray[i-1].style.display = 'block';*/
				subNavArray[i-1].style.display = 'block';
				var subNavHeight = $('#subNavContainer').height()+'px';
				headerHeight = $('#header').height();
				$('#subNavWraper').height(subNavHeight);
				
				if(mainNavConainerArray[i].className.indexOf('bottomArrow') > 0)
				{
					mainNavConainerArray[i].className = mainNavConainerArray[i].className.replace('bottomArrow','');
				}
			}
		}
	}
	
	function resetSubNav()
	{
		for(var i=0; i<subNavArray.length; i++)
		{
			//subNavArray[i].style.display = 'none';
			subNavArray[i].className = subNavArray[i].className.replace('notActive','');
		}
		for(var j=0; j<mainNavConainerArray.length; j++)
		{
			mainNavConainerArray[j].className = mainNavConainerArray[j].className.replace('subNavShow', '');
			mainNavConainerArray[j].className = mainNavConainerArray[j].className.replace('notActiveSubNavShow', '');
			if(mainNavConainerArray[j].className.indexOf('current-page-ancestor') > 0)
			{
				if(mainNavConainerArray[j].className.indexOf('bottomArrow') < 0)
				{
					mainNavConainerArray[j].className += ' bottomArrow';
				}
			}
		}
	}
}
function isiPhone(){
    return (
        (navigator.platform.indexOf("iPhone") != -1) ||
        (navigator.platform.indexOf("iPad") != -1)
    );
}
var currentAnchor = 0;	 
function initHomeScrollMenu()
{
	var homeSectionPosArray = new Array();
	var homeSectionArray = getElementsByClassName(document.getElementById('primary'), 'homeSection', 1);
	var homeRightNavArray = document.getElementById('homeRightNav').getElementsByTagName('A');
	
	if(isiPhone()) 
	{ 
		  $("#homeRightNav").css("position", "absolute"); 
		  window.onscroll = anchorScroll;
	};
	
	function anchorScroll() { 
		$(window).scroll(function() {
			 $("#homeRightNav,#iconBtnstickyContainer").css('visibility', 'hidden');
		});
		setTimeout('$("#homeRightNav").css({"top":window.pageYOffset+38, "visibility":"visible"});$("#iconBtnstickyContainer").css({"top":window.pageYOffset, "visibility":"visible"});',500);
	}
	
	for(var i=0; i<homeSectionArray.length; i++)
	{
		homeSectionPosArray.push($(homeSectionArray[i]).offset().top);
	}
	
	for(var j=0; j<homeRightNavArray.length; j++)
	{
		homeRightNavArray[j].num = j;
		homeRightNavArray[j].onclick = function()
		{
			if(this.className.indexOf('active') < 0)
			{
				$('#homeRightNav').find('.active').removeClass('active');
				this.className += ' active';
			}
			
			var movePos = $(homeSectionArray[this.num]).offset().top;
			
			var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
				
			if(isChrome)
			{
				$body.animate({
					scrollTop: movePos-221
				}, 750);
				currentAnchor = this.num;
				setTimeout("this.className += ' active'", 750 );
			}else if(isiPhone()){
				$body.animate({
					scrollTop: movePos-220
				}, 750);
				currentAnchor = this.num;
				setTimeout("this.className += ' active'", 750 );
				/*var hack = document.createElement("div");
				hack.style.height = "101%";
				document.body.appendChild(hack);
				setTimeout(function(){
					 document.body.removeChild(hack);
					 hack = null;
				}, 751);		*/	
			}else{
				$body.animate({
					scrollTop: movePos-220
				}, 750);
				currentAnchor = this.num;
				setTimeout("this.className += ' active'", 750 );
			}
			
		}
	}
	
	$(window).scroll(function(){
		if(isChrome)
		{
			if( $(window).scrollTop() > homeSectionPosArray[currentAnchor+1]-231) {
				$('#homeRightNav').find('.active').removeClass('active');
				
				if(currentAnchor < homeSectionPosArray.length-1)
					currentAnchor++;
				
				homeRightNavArray[currentAnchor].className += ' active';	  
			}else if( $(window).scrollTop() < homeSectionPosArray[currentAnchor]-231) {
				$('#homeRightNav').find('.active').removeClass('active');
				
				if(currentAnchor >= 1)
					currentAnchor--;
				
				homeRightNavArray[currentAnchor].className += ' active';	  
			}
		}else{
			if( $(window).scrollTop() > homeSectionPosArray[currentAnchor+1]-230) {
				$('#homeRightNav').find('.active').removeClass('active');
				
				if(currentAnchor < homeSectionPosArray.length-1)
					currentAnchor++;
				
				homeRightNavArray[currentAnchor].className += ' active';	  
			}else if( $(window).scrollTop() < homeSectionPosArray[currentAnchor]-230) {
				$('#homeRightNav').find('.active').removeClass('active');
				
				if(currentAnchor >= 1)
					currentAnchor--;
				
				homeRightNavArray[currentAnchor].className += ' active';	  
			}	
		}
	 });
	
	/*$('html').click(function(e){
	   if($(e.target).is('a')){
		
		}else{
			$(".subNavDiv").hide();		  
		}
    });*/
 }
var levelArray = new Array();
var TCflag = false;
function getLevel() {
    var url = location.pathname;
    levelArray = url.split('/');
	 if(jQuery.inArray('zh-hant', levelArray) < 0)
	 {
		 levelArray.shift();
		 levelArray.shift();
		 levelArray.shift();
		 TCflag = false;
	 }else{
		 levelArray.shift();
		 levelArray.shift();
		 levelArray.shift();
		 levelArray.shift();
		 TCflag = true;
	 }
    if (levelArray.length == 0) return;
    var obj = levelArray[levelArray.length - 1];
    if (!(obj == 'index.asp' || obj == 'index_big5.asp')) {
        if (obj == 'online.asp') levelArray[levelArray.length - 1] = obj.replace('.asp', '');
        else
        levelArray[levelArray.length - 1] = obj.replace('.html', '');
    } else {
        levelArray.pop();
    }
}
function getUrlVars() {
  var vars = {};
  var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
	  vars[key] = value;
  });
 return vars;
}
var currentNoteAnchor = 0;
function initNoteRightNav()
{
	if(!document.getElementById('noteContent')) return;
	if(!document.getElementById('stickyRightNav')) return;
	var stickyRightNav = document.getElementById('stickyRightNav');
	var treeListTitleArray = getElementsByClassName(stickyRightNav, 'treeListTitle', 1);
	var treeListContentArray = getElementsByClassName(stickyRightNav, 'treeListContent', 1);
	
	getLevel();
	var scrolldistance = 0;
	if(!TCflag)
	{
		scrolldistance = 115;
	}else{
		scrolldistance = 120;
	}
	//var noteAnchorArray = document.getElementById('stickyRightNav').getElementsByTagName('LI');
	
	var noteAnchorArray = document.getElementById(levelArray[0]).getElementsByTagName('LI');
	var noteContentAnchorArray = document.getElementById('noteContent').getElementsByTagName('H2');
	var notePosArray = new Array();
	
	var HeaderTop = $('#header').offset().top;
	
	for(var k=0; k<noteContentAnchorArray.length; k++)
	{
		notePosArray.push($(noteContentAnchorArray[k]).offset().top);
	}
	
	for(var i=0; i<treeListTitleArray.length; i++)
	{
		treeListTitleArray[i].num = i;
		treeListContentArray[i].style.display = 'none';
		treeListTitleArray[i].onclick = function()
		{
			if(treeListContentArray[this.num].style.display == 'none')
			{
				resetNav();
				$(treeListContentArray[this.num]).slideDown("slow");
				this.parentNode.className = 'treeListItem active';
			}else{
				$(treeListContentArray[this.num]).slideUp("slow");
				this.parentNode.className = 'treeListItem';
			}
		}
	}
	
	for(var j=0; j<noteAnchorArray.length; j++)
	{
		noteAnchorArray[j].num = j;
		noteAnchorArray[j].onclick = function()
		{
			if(this.className.indexOf('currentAnchor') < 0)
			{
				$('#stickyRightNav').find('.currentAnchor').removeClass('currentAnchor');
				//this.className += ' currentAnchor';
			}
			currentNoteAnchor = this.num;
			//alert(this.num)
			if($(window).scrollTop() < 125)
				var movePos = $(noteContentAnchorArray[this.num]).offset().top-117;
			else
				var movePos = $(noteContentAnchorArray[this.num]).offset().top;
			
			var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
			$body.animate({
				scrollTop: movePos-scrolldistance
			}, 750);
			
			setTimeout("this.className += ' currentAnchor'", 750 );	
		}
	}
	
	$(window).scroll(function(){
			/*if( $(window).scrollTop() > notePosArray[currentNoteAnchor+1]-245) {
				$('#stickyRightNav').find('.currentAnchor').removeClass('currentAnchor');
				
				if(currentNoteAnchor < notePosArray.length-1)
					currentNoteAnchor++;
				
				noteAnchorArray[currentNoteAnchor].className += ' currentAnchor';	  
			}else if( $(window).scrollTop() < notePosArray[currentNoteAnchor]-245) {
				$('#stickyRightNav').find('.currentAnchor').removeClass('currentAnchor');
				
				if(currentNoteAnchor >= 1)
					currentNoteAnchor--;
				
				noteAnchorArray[currentNoteAnchor].className += ' currentAnchor';	  
			}*/
			if(currentNoteAnchor < noteContentAnchorArray.length-1)
			{
				if( $(window).scrollTop() > $(noteContentAnchorArray[currentNoteAnchor+1]).offset().top-140) {
					$('#stickyRightNav').find('.currentAnchor').removeClass('currentAnchor');
					
					if(currentNoteAnchor < notePosArray.length-1)
						currentNoteAnchor++;
					
					noteAnchorArray[currentNoteAnchor].className += ' currentAnchor';	  
				}else if( $(window).scrollTop() < $(noteContentAnchorArray[currentNoteAnchor]).offset().top-140) {
					$('#stickyRightNav').find('.currentAnchor').removeClass('currentAnchor');
					
					if(currentNoteAnchor >= 1)
						currentNoteAnchor--;
					
					noteAnchorArray[currentNoteAnchor].className += ' currentAnchor';	  
				}
			}else{
				if( $(window).scrollTop() > $(noteContentAnchorArray[currentNoteAnchor]).offset().top-140) {
					$('#stickyRightNav').find('.currentAnchor').removeClass('currentAnchor');
					
					if(currentNoteAnchor < notePosArray.length-1)
						currentNoteAnchor++;
					
					noteAnchorArray[currentNoteAnchor].className += ' currentAnchor';	  
				}else if( $(window).scrollTop() < $(noteContentAnchorArray[currentNoteAnchor]).offset().top-140) {
					$('#stickyRightNav').find('.currentAnchor').removeClass('currentAnchor');
					
					if(currentNoteAnchor >= 1)
						currentNoteAnchor--;
					
					noteAnchorArray[currentNoteAnchor].className += ' currentAnchor';	  
				}
			}
	 });
	
	function resetNav()
	{
		for(var i=0; i<treeListTitleArray.length; i++)
		{
			$(treeListContentArray[i]).slideUp("slow");
			treeListTitleArray[i].parentNode.className = 'treeListItem';
		}
	}
	
	function activeList(id)
	{
		treeListContentArray[id].style.display = 'block';
		var anchorListArray = treeListContentArray[id].getElementsByTagName('A');
		noteAnchorArray[0].className += ' currentAnchor';
		for(var i=0; i<anchorListArray.length; i++)
		{
			anchorListArray[i].href = 'javascript:;';	
		}
		var get_anchor = getUrlVars()["n"];
		if( typeof get_anchor != 'undefined' ) {
			var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
				$body.animate({
					scrollTop: notePosArray[get_anchor-1]-scrolldistance
				}, 750);
		}
	}
	switch (levelArray[0])
	{
	case '1-10':
	  activeList(0);
	  break;
	case '11-20':
	  activeList(1);
	  break;
	case '21-30':
	  activeList(2);
	  break;
	case '31-40':
	  activeList(3);
	  break;
	case '41-50':
	  activeList(4);
	  break;
	case '51-54':
	  activeList(5);
	  break;
	} 
}
var currentGeneralAnchor = 0;
function initGeneralContentRightNav()
{
	if(!document.getElementById('generalContent')) return;
	if(!document.getElementById('stickyRightNav')) return;
	var stickyRightNav = document.getElementById('stickyRightNav');
	var treeListTitleArray = getElementsByClassName(stickyRightNav, 'treeListTitle', 1);
	var treeListContentArray = getElementsByClassName(stickyRightNav, 'treeListContent', 1);
	
	var noteAnchorArray = document.getElementById('stickyRightNav').getElementsByTagName('LI');
	var noteContentAnchorArray = document.getElementById('generalContent').getElementsByTagName('H2');
	var notePosArray = new Array();
	
	var HeaderTop = $('#header').offset().top;
	
	for(var k=0; k<noteContentAnchorArray.length; k++)
	{
		notePosArray.push($(noteContentAnchorArray[k]).offset().top);
	}
	
	for(var i=0; i<treeListTitleArray.length; i++)
	{
		treeListTitleArray[i].num = i;
		treeListContentArray[i].style.display = 'none';
		treeListTitleArray[i].onclick = function()
		{
			if(treeListContentArray[this.num].style.display == 'none')
			{
				resetNav();
				$(treeListContentArray[this.num]).slideDown("slow");
				this.parentNode.className = 'treeListItem active';
			}else{
				$(treeListContentArray[this.num]).slideUp("slow");
				this.parentNode.className = 'treeListItem';
			}
		}
	}
	
	for(var j=0; j<noteAnchorArray.length; j++)
	{
		noteAnchorArray[j].num = j;
		noteAnchorArray[j].onclick = function()
		{
			if(this.className.indexOf('currentAnchor') < 0)
			{
				$('#stickyRightNav').find('.currentAnchor').removeClass('currentAnchor');
			}
			
			/*var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
			$body.animate({
				scrollTop: notePosArray[this.num]-125
			}, 750);*/
			if($(window).scrollTop() < 125)
				var movePos = $(noteContentAnchorArray[this.num]).offset().top-117;
			else
				var movePos = $(noteContentAnchorArray[this.num]).offset().top;
			var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
			$body.animate({
				scrollTop: movePos-110
			}, 750);
			movePos=0;
			currentNoteAnchor = this.num;
			setTimeout("this.className += ' currentAnchor'", 750 );	
		}
	}
	
	$(window).scroll(function(){
			
			if(currentNoteAnchor < noteContentAnchorArray.length-1 && $(window).scrollTop() > $(noteContentAnchorArray[currentNoteAnchor+1]).offset().top-245) {
				$('#stickyRightNav').find('.currentAnchor').removeClass('currentAnchor');
				
				if(currentNoteAnchor < noteContentAnchorArray.length-1)
					currentNoteAnchor++;
				
				noteAnchorArray[currentNoteAnchor].className += ' currentAnchor';	  
			}else if( $(window).scrollTop() < $(noteContentAnchorArray[currentNoteAnchor]).offset().top-245) {
				//$('#stickyRightNav').find('.currentAnchor').removeClass('currentAnchor');
				$('#stickyRightNav li').each(function(){
					$(this).removeClass('currentAnchor');
				})
				
				if(currentNoteAnchor >= 1)
					currentNoteAnchor--;
				
				noteAnchorArray[currentNoteAnchor].className += ' currentAnchor';	  
			}
	 });
	
	function resetNav()
	{
		for(var i=0; i<treeListTitleArray.length; i++)
		{
			$(treeListContentArray[i]).slideUp("slow");
			treeListTitleArray[i].parentNode.className = 'treeListItem';
		}
	}
	
	function activeList(id)
	{
		treeListContentArray[id].style.display = 'block';
		noteAnchorArray[0].className += ' currentAnchor';
	}
	activeList(0);
}
function gotoPageAnchor(container, num)
{
	var contentAnchorArray = document.getElementById(container).getElementsByTagName('H2');
	var posArray = new Array();
	
	for(var k=0; k<contentAnchorArray.length; k++)
	{
		posArray.push($(contentAnchorArray[k]).offset().top);
	}
	
	if(num-1 < posArray.length)
	{
		var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
		$body.animate({
				scrollTop: posArray[num-1]-110
			}, 750);
	}
}
function initBackTop()
{
	var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
	if($(window).scrollTop() > 0)
	{		
		$body.animate({
			scrollTop: 0
		}, 450);
	}
}
var findoutMoreShowFlag = false;
function initFindOutMore(id, id2)
{
	if(!d.getElementById(id)) return;
	if(!d.getElementById(id2)) return;
	
	var findOutMoreBtnArray = document.getElementById(id).getElementsByTagName('A');
	var findOutMoreContentArray = getElementsByClassName(document.getElementById(id2), 'findOutMoreItem');
	var closeBtnArray = new Array();

	//offset for floorcare popup
	var popup_offset_x, popup_offset_y = 0;
	var isFloorcare = $('#findOutMoreContainer_floorcare').length>0;
	/*if($('#findOutMoreContainer_floorcare')){
		popup_offset_y = 40;
		popup_offset_x = 40;
	}*/
	
	for(var i=0; i<findOutMoreBtnArray.length; i++)
	{
		findOutMoreBtnArray[i].num = i;
		findOutMoreContentArray[i].num = i;
		findOutMoreBtnArray[i].onclick = function()
		{
			resetFindout();
			var offset = $(this).offset();
			var posY = offset.top - $(window).scrollTop();
			var posX = offset.left - $(window).scrollLeft();
			//console.log(posX+" "+posY);
			var popup_left,popup_top;
			if(posX<=700){
				if(isFloorcare)
					popup_left = 60;
				else
					popup_left = 20;
			}
			else{
				if(isFloorcare)
					popup_left = -240;
				else
					popup_left = -280;
			}
			if(posY<=250){
				if(isFloorcare)
					popup_top = -200;
				else
					popup_top = -270;
			}
			else{
				if(isFloorcare)
					popup_top = -660;
				else
					popup_top = -700;
			}
			//console.log("popup_top="+popup_top+", popup_left="+popup_left);
			findOutMoreContentArray[this.num].style.left = offset.left+popup_left+'px';
			findOutMoreContentArray[this.num].style.top = offset.top+popup_top+'px';
			findOutMoreContentArray[this.num].style.display = 'block';	
			findoutMoreShowFlag = true;
		}
		
		closeBtnArray.push(getElementsByClassName(findOutMoreContentArray[i], 'btn_findOutMoreClose')[0]);
	}
	
	for(var j=0; j<closeBtnArray.length; j++)
	{
		closeBtnArray[j].num = j;
		closeBtnArray[j].onclick = function()
		{
			findOutMoreContentArray[this.num].style.display = 'none';
			findoutMoreShowFlag = false;
		}
	}
	
	function resetFindout()
	{
		for(var j=0; j<findOutMoreContentArray.length; j++)
		{
			findOutMoreContentArray[j].style.display = 'none';
			findoutMoreShowFlag = false;
		}
	}
	
	/*$('html').click(function(e){
		if(findoutMoreShowFlag){
			if($(e.target).is('a')){
				return;
			}else {
				resetFindout();
			}
		}
    });*/
	
	$('html').on('click touchend',function(e){
		if(findoutMoreShowFlag){
			if($(e.target).is('a')){
				return;
			}else {
				resetFindout();
			}
		}
    });
	
}
function initBrandGallery(){
	if(!d.getElementById('galleryLargePic')) return;	
	if(!d.getElementById('galleryContainer')) return;
	
	var currentGalleryCount = 0;	
	//productDetail
	
	$("#galleryContainer .imgContainerWrapper").css("width", $("#galleryContainer .imgContainerWrapper > div").size()*335+'px');
	
	$('#galleryContainer img').click(function() {
		$("#galleryContainer img").each(function(){
			$(this).removeClass('active');
		})
		
		$("#productDetail .detailContentItem").each(function(){
			$(this).css('display', 'none');
		})
		
		$(this).addClass('active');
		var imgSrc = $(this).attr('src');
		imgSrc = imgSrc.replace('_thumb', '');
		$('#galleryLargePic img').attr('src', imgSrc);
		$('#productDetail .detailContentItem').eq($(this).attr('rel')).css('display', 'block');
	});
	
	if(d.getElementById('galleryContainer').getElementsByTagName('IMG').length < 7)
	{
		$('#arrow_next').css('visibility', 'hidden');
		$('#arrow_prev').css('visibility', 'hidden');
	}
	
	$('#arrow_next').click(function(){
		if(currentGalleryCount < $("#galleryContainer .imgContainerWrapper > div").size()-1)
		{
			currentGalleryCount++;
			$('#galleryContainer .imgContainerWrapper').animate({"left":currentGalleryCount*335*-1+'px'}, 450);
		}
	});
	
	$('#arrow_prev').click(function(){
		if(currentGalleryCount > 0)
		{
			currentGalleryCount--;
			$('#galleryContainer .imgContainerWrapper').animate({"left":currentGalleryCount*335+'px'}, 450);
		}
	});
	
	d.getElementById('galleryContainer').getElementsByTagName('IMG')[0].className +=' active'
	$('#productDetail .detailContentItem').eq(0).css('display', 'block');
}
function initBod()
{
	if(!d.getElementById('bodPhotoContainer')) return;	
	if(!d.getElementById('bodContent')) return;
	
	$('#bodPhotoContainer .bodPhotoItem').click(function(){
		$('#bodPhotoContainer .bodPhotoItem').each(function(){
			$(this).removeClass('active');
		})
		$("#bodContent .bodContentItem").each(function(){
			$(this).css('display', 'none');
		})
		
		$(this).addClass('active');
		$('#bodContent .bodContentItem').eq($(this).index()).css('display', 'block');
	})
	
	$('#bodPhotoContainer .bodPhotoItem').eq(0).addClass('active');
	$('#bodContent .bodContentItem').eq(0).css('display', 'block');
}
function initOperationalTab()
{
	if(!d.getElementById('operationalTabBtn')) return;
	if(!d.getElementById('operationalTabContent')) return;
	
	$('#operationalTabBtn a').click(function(){
		$('#operationalTabBtn a').each(function(){
			$(this).removeClass('active');
		})
		$("#operationalTabContent .operationalTabContentItem").each(function(){
			$(this).css('display', 'none');
		})
		
		$(this).addClass('active');
		$('#operationalTabContent .operationalTabContentItem').eq($(this).index()).css('display', 'block');	
		//var chart = ($('#operationalTabContent .operationalTabContentItem').eq($(this).index())).find(".graph-container").highcharts();
		//alert($(chart).attr("id"));
		//chart = chart.highcharts();
		//chart.destroy();
		//chart.render();
	})
	
	//operationalTabContentItem
}
function initOperationalMap()
{
	if(!d.getElementById('worldMapContainer')) return;
	
	if(d.getElementById('globalOperationsContent')){
		$('#worldMapContainer div').click(function(){
			$('#worldMapContainer div').each(function(){
				$(this).removeClass('active');
			})
			$("#globalOperationsContent .globalOperationsItem").each(function(){
				$(this).css('display', 'none');
			})
			
			$(this).addClass('active');
			$('#globalOperationsContent .globalOperationsItem').eq($(this).index()).css('display', 'block');
		})
	}else if(d.getElementById('homeGlobalOperationContent')){
		$('#worldMapContainer div').click(function(){
			$('#worldMapContainer div').each(function(){
				$(this).removeClass('active');
			})
			$("#homeGlobalOperationContent table").each(function(){
				$(this).css('display', 'none');
			})
			
			$(this).addClass('active');
			$('#homeGlobalOperationContent table').eq($(this).index()).css('display', 'block');
		})
	}
}
function initCEOReview()
{
	if(!d.getElementById('strategicMapImageContainer')) return;
	if(!d.getElementById('strategicMapContent')) return;
	
	$('#strategicMapImageContainer a').click(function(){
		/*$('#strategicMapImageContainer a').each(function(){
			$(this).removeClass('active');
		})
		$('#strategicMapContent div').each(function(){
			$(this).css('display', 'none');
		})
		$(this).addClass('active');
		$('#strategicMapContent div').eq($(this).index()).css('display', 'block');*/
		
		if($(window).scrollTop() < 125)
			var movePos = $('#strategicMapContent h6').eq($(this).index()).offset().top-117;
		else
			var movePos = $('#strategicMapContent h6').eq($(this).index()).offset().top;
		var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
		$body.animate({
			scrollTop: movePos-110
		}, 750);
	})
}
function inithomeBrandTab(id, id2){
	if(!d.getElementById(id)) return;
	if(!d.getElementById(id2)) return;
	
	$('#'+id+' .powerEquipmentBrandContainer').click(function(){
		$('#'+id+' .powerEquipmentBrandContainer').each(function(){
				$(this).removeClass('active');
		})
		$('#'+id2+' .brandContentItem').each(function(){
				$(this).css('display', 'none');
		})
		
		$(this).addClass('active');
		$('#'+id2+' .brandContentItem').eq($(this).index()).css('display', 'block');
	})
	
	//brandContentItem
}
function initFindOutMoreBannerContent(){
	if(!d.getElementById('btn_banner_findoutMore')) return;
	if(!d.getElementById('btn_close_findoutMoreBanner')) return;
	
	$('#btn_banner_findoutMore').click(function(){
		//$(this).animate({opacity:'0'}, 300);
		$(this).css('display', 'none');
		$('.findoutMoreBannerContent').css('display', 'block');
		var contentHeight = $('.findoutMoreBannerContent .contentDiv').height();
		$('.findoutMoreBannerContent').animate({width:"960px", height:'140px'}, 300);
		$('.findoutMoreBannerContent .contentDiv').animate({opacity:'1'}, 600);
		$('#btn_close_findoutMoreBanner').animate({opacity:'1'}, 800);
	})
	
	$('#btn_close_findoutMoreBanner').click(function(){
		//$('#btn_banner_findoutMore').animate({opacity:'1'}, 300);
		setTimeout('$("#btn_banner_findoutMore").css("display", "block");', 600)
		$('#btn_close_findoutMoreBanner').animate({opacity:'0'}, 200);
		$('.findoutMoreBannerContent .contentDiv').animate({opacity:'0'}, 600);
		$('.findoutMoreBannerContent').animate({width:"233px", height:'49px'}, 600);		
	})
}
function initShare()
{
	if(!d.getElementById('shareBox')) return;
	if(!d.getElementById('headerShareBtn')) return;
	//alert("yes");
	var isiDevice = /ipad|iphone|ipod/i.test(navigator.userAgent.toLowerCase());
	
	if (isiDevice){
		/*$("headerShareBtn").bind('touchstart',function() {
			$('#shareBox').css('display','block');	
		}).bind('touchend', function(){
    		$('#shareBox').css('display','none');	
		});*/
		
		$("#downloadLink").on('click touchend', function(e) {
			 var el = $(this);
			 var link = el.attr('href');
			 window.open(link);
		});
		
		$("#printLink").on('click touchend', function(e) {
			 var el = $(this);
			 var link = el.attr('href');
			 window.open(link);
		});
		
		document.getElementById("headerShareBtn").addEventListener('touchstart',function(){
			$('#shareBox').css('display','block');	
		},false)
		
		$('html').bind('touchstart',function(e) {
			if($(e.target).is('a') || $(e.target).is('#shareBox') || $(e.target).is($('#shareBox').find("*"))){
				return;
			}else {
				$('#shareBox').css('display','none');	
			}
		})
	}else{
		$('#headerShareBtn').mouseover(function(){
			$('#shareBox').css('display','block');	
		})
		
		$('#shareBox').mouseover(function(){
			$('#shareBox').css('display','block');	
		})
		
		$('#headerShareBtn').mouseout(function(){
			$('#shareBox').css('display','none');	
		})
		
		$('#shareBox').mouseout(function(){
			$('#shareBox').css('display','none');	
		})
	}
}
function initQuickLink()
{
	if(!d.getElementById('quickLinkBox')) return;
	if(!d.getElementById('quickLinksBtn')) return;
	
	var isiDevice = /ipad|iphone|ipod/i.test(navigator.userAgent.toLowerCase());
	
	if (isiDevice){
		/*$("headerShareBtn").bind('touchstart',function() {
			$('#quickLinkBox').css('display','block');	
		}).bind('touchend', function(){
    		$('#quickLinkBox').css('display','none');	
		});*/
		
		document.getElementById("quickLinksBtn").addEventListener('touchstart',function(){
			$('#quickLinkBox').css('display','block');	
		},false)
		
		$('html').bind('touchstart',function(e) {
			if($(e.target).is('a')){
				return;
			}else {
				$('#quickLinkBox').css('display','none');	
			}
		})
	}else{
		$('#quickLinksBtn').mouseover(function(){
			$('#quickLinkBox').css('display','block');	
		})
		
		$('#quickLinkBox').mouseover(function(){
			$('#quickLinkBox').css('display','block');	
		})
		
		$('#quickLinksBtn').mouseout(function(){
			$('#quickLinkBox').css('display','none');	
		})
		
		$('#quickLinkBox').mouseout(function(){
			$('#quickLinkBox').css('display','none');	
		})
	}
}
var preventshowBrandOverlay = false;
function showBrandOverlay(imgSrc,w,h){
	//var img = $('<img id="dynamic">'); //Equivalent: $(document.createElement('img'))
	//img.attr('src', imgSrc)
	//img.appendTo('#brandOverlay div');
	/*if(preventshowBrandOverlay)
	{
		return;
	}*/
	if(isiPhone())
	{
		//$('#brandOverlay').css({'position':'absolute', 'width':768, 'height':946, 'top':window.pageYOffset, 'left':0})
	}
	
	$('#brandOverlay').show();		$("#overlayCloseBtn").hide();
	$('#loader').css({'width':w,'height':h, 'margin-top':h/2*-1, 'margin-left':w/2*-1});
	
	var img = new Image();
	$(img).load(function () {
		//$(this).css('display', 'none'); // .hide() doesn't work in Safari when the element isn't on the DOM already
		$(this).hide();
		$('#loader').removeClass('loading').append(this);
		$(this).fadeIn(400, function() {			$("#overlayCloseBtn").fadeIn(200);      });
	}).error(function () {}).attr('src', imgSrc);
	
	
	
	
	$('#overlayCloseBtn').click(function(){
		$('#brandOverlay img').remove();
		if(isiPhone())
			$('#brandOverlay').hide('slow');
		else
			$('#brandOverlay').hide();
		$('#loader').addClass('loading');
		//resetBrandOverlay();
	})
	
	/*$('html').click(function(e){
	   if($(e.target).is('a')){
		
		}else{
			//$(".subNavDiv").hide();
			$('#brandOverlay img').remove();
			$('#brandOverlay').hide();
			$('#loader').addClass('loading');
		}
    });*/
	
	$('html').on('click touchend',function(e){
	   if($(e.target).is('a')){
			
		}else{
			//$(".subNavDiv").hide();
			//preventshowBrandOverlay = true;
			$('#brandOverlay img').remove();
			if(isiPhone())
				$('#brandOverlay').hide('slow');
			else
				$('#brandOverlay').hide();
			$('#loader').addClass('loading');
			//if(preventshowBrandOverlay)
			//	resetBrandOverlay();
		}
    });
}
function resetBrandOverlay()
{
	alert("resetBrandOverlay");
	setTimeout('preventshowBrandOverlay = false', 200);	
}