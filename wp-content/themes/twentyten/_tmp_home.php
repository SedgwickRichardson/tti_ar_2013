<?php
/**
 * Template Name: Home Page
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
get_header(); 

$homeContent['en']['Audio Webcast'] = 'Audio Webcast';
$homeContent['zh-hant']['Audio Webcast'] = '網絡廣播';
$homeContent['en']['Presentation'] = 'Presentation';
$homeContent['zh-hant']['Presentation'] = '公司簡報';
$homeContent['zh-hant']['Presentation'] = '公司簡報';
$homeContent['en']['Press release'] = 'Press release';
$homeContent['zh-hant']['Press release'] = '新聞發佈';
$homeContent['en']['Print this page in PDF'] = 'Print this page in PDF';
$homeContent['zh-hant']['Print this page in PDF'] = '列印此頁之PDF';

$homeContent['en']['HIGHLIGHTS'] = 'Financial Highlights';
$homeContent['zh-hant']['HIGHLIGHTS'] = '財務摘要';

$str = '<ul class="section_highlight_list">';
$str .= '<li>Record Sales</li>';
$str .= '<li>Record Profits</li>';
$str .= '<li>Record Free Cash Flow</li>';
$str .= '</ul>';
$homeContent['en']['HIGHLIGHTS Excerpt'] =  $str;

$str = '<ul class="section_highlight_list">';
$str .= '<li>銷售額創新高</li>';
$str .= '<li>創紀錄溢利</li>';
$str .= '<li>創新高紀錄自由現金流量</li>';
$str .= '</ul>';
$homeContent['zh-hant']['HIGHLIGHTS Excerpt'] =  $str;

$str = '<ul class="section_list">';
$str .= '<li>Sales grew 11.6% to a record USD4.3 billion </li>';
$str .= '<li>Gross profit expanded 14.2% with a record margin of 34.2%</li>';
$str .= '<li>Net profit increased to USD250 million, growing 24.5%</li>';
$str .= '<li>Another strong year delivering free cash flow of USD332 million</li>';
$str .= '<li>Working capital improved to 13.9% of sales </li>';
$str .= '<li>Gearing improved and was lowered from 25.8% to 10.6%</li>';
$str .= '</ul>';
$homeContent['en']['HIGHLIGHTS List'] =  $str;

$str = '<ul class="section_list">';
$str .= '<li>銷售額增長11.6%至創紀錄的4,300,000,000美元</li>';
$str .= '<li>毛利增加14.2%，毛利率達創紀錄的34.2%</li>';
$str .= '<li>純利增長至250,000,000美元，增幅達24.5% </li>';
$str .= '<li>又一強勁年度，創造自由現金流量達332,000,000美元</li>';
$str .= '<li>營運資金持續改善，佔銷售額13.9% </li>';
$str .= '<li>負債比率持績改善，由25.8%降低至10.6%</li>';
$str .= '</ul>';
$homeContent['zh-hant']['HIGHLIGHTS List'] =  $str;

$str = '<table class="normalWithAlt financialTable highlightTable" cellspacing="5" cellpadding="0" width="100%">';
$str .= '<tbody><tr class="heading-row">';
$str .= '<td width="321" class=""></td>';
$str .= '<td width="72" align="right" class="bold">2013<br>USDm</td>';
$str .= '<td width="72" align="right" class="">2012<br>USDm</td>';
$str .= '<td width="72" align="right" class="bold">Changes</td>';
$str .= '</tr>';
$str .= '<tr class="thin-border-bottom">';
$str .= '<td class="">Turnover</td>';
$str .= '<td class="highlight_current financial_table_highlight bold" align="right">4,300</td>';
$str .= '<td align="right" class="">3,852</td>';
$str .= '<td class="bold" align="right">+11.6% </td>';
$str .= '</tr>';
$str .= '<tr class="thin-border-bottom">';
$str .= '<td class="">Gross profit margin</td>';
$str .= '<td class="highlight_current financial_table_highlight bold" align="right">34.2%</td>';
$str .= '<td align="right" class="">33.5%</td>';
$str .= '<td class="bold" align="right">+70 bpt</td>';
$str .= '</tr>';
$str .= '<tr class="thin-border-bottom">';
$str .= '<td class="">EBIT</td>';
$str .= '<td class="highlight_current financial_table_highlight bold" align="right">304</td>';
$str .= '<td align="right" class="">260</td>';
$str .= '<td class="bold" align="right">+16.9%</td>';
$str .= '</tr>';
$str .= '<tr class="thin-border-bottom">';
$str .= '<td class="">Profit attributable to Owners of the Company</td>';
$str .= '<td class="highlight_current financial_table_highlight bold" align="right">250</td>';
$str .= '<td align="right" class="">201</td>';
$str .= '<td class="bold" align="right">+24.5%</td>';
$str .= '</tr>';
$str .= '<tr class="thin-border-bottom">';
$str .= '<td class="">Basic earnings per share (US cents)</td>';
$str .= '<td class="highlight_current financial_table_highlight bold" align="right">13.68</td>';
$str .= '<td align="right" class="">11.42</td>';
$str .= '<td class="bold" align="right">+19.8%</td>';
$str .= '</tr>';
$str .= '<tr class="thin-border-bottom">';
$str .= '<td>Dividend per share (approx. US cents) </td>';
$str .= '<td class="highlight_current financial_table_highlight bold" align="right">3.06</td>';
$str .= '<td align="right">2.25</td>';
$str .= '<td class="bold" align="right">+35.7%</td>';
$str .= '</tr>';
$str .= '</tbody>';
$str .= '</table>';
$homeContent['en']['HIGHLIGHTS Table'] =  $str;

$str = '<table class="normalWithAlt financialTable highlightTable" cellspacing="5" cellpadding="0" width="100%">';
$str .= '<tbody><tr class="heading-row">';
$str .= '<td width="321" class=""></td>';
$str .= '<td width="72" align="right" class="bold">2013<br>百萬美元</td>';
$str .= '<td width="72" align="right" class="">2012<br>百萬美元</td>';
$str .= '<td width="72" align="right" class="bold">增長</td>';
$str .= '</tr>';
$str .= '<tr class="thin-border-bottom">';
$str .= '<td class="">營業額</td>';
$str .= '<td class="highlight_current financial_table_highlight bold" align="right">4,300</td>';
$str .= '<td align="right" class="">3,852</td>';
$str .= '<td class="bold" align="right">+11.6% </td>';
$str .= '</tr>';
$str .= '<tr class="thin-border-bottom">';
$str .= '<td class="">毛利率</td>';
$str .= '<td class="highlight_current financial_table_highlight bold" align="right">34.2%</td>';
$str .= '<td align="right" class="">33.5%</td>';
$str .= '<td class="bold" align="right">+70 <span class="chi-bold-font">基點</span></td>';
$str .= '</tr>';
$str .= '<tr class="thin-border-bottom">';
$str .= '<td class="">除利息及稅項前盈利</td>';
$str .= '<td class="highlight_current financial_table_highlight bold" align="right">304</td>';
$str .= '<td align="right" class="">260</td>';
$str .= '<td class="bold" align="right">+16.9%</td>';
$str .= '</tr>';
$str .= '<tr class="thin-border-bottom">';
$str .= '<td class="">本公司股東應佔溢利</td>';
$str .= '<td class="highlight_current financial_table_highlight bold" align="right">250</td>';
$str .= '<td align="right" class="">201</td>';
$str .= '<td class="bold" align="right">+24.5%</td>';
$str .= '</tr>';
$str .= '<tr class="thin-border-bottom">';
$str .= '<td class="">每股基本盈<span class="closer">利（</span>美<span class="closer">仙）</span></td>';
$str .= '<td class="highlight_current financial_table_highlight bold" align="right">13.68</td>';
$str .= '<td align="right" class="">11.42</td>';
$str .= '<td class="bold" align="right">+19.8%</td>';
$str .= '</tr>';
$str .= '<tr class="thin-border-bottom">';
$str .= '<td>每股股<span class="closer">息（</span>約美<span class="closer">仙）</span></td>';
$str .= '<td class="highlight_current financial_table_highlight bold" align="right">3.06</td>';
$str .= '<td align="right">2.25</td>';
$str .= '<td class="bold" align="right">+35.7%</td>';
$str .= '</tr>';
$str .= '</tbody>';
$str .= '</table>';
$homeContent['zh-hant']['HIGHLIGHTS Table'] =  $str;

$str = '<div class="graphTitleDiv ">';
$str .= '<span class="graphTitle">Turnover</span>';
$str .= '<span class="graphUnit">USDm</span>';
$str .= '</div>';
$str .= '<div class="graphProfile dotUnderline">';
$str .= '<span class="figure_arrow_up">&#8593;</span>';
$str .= '<span class="graphFigure">11.6%</span>';
$str .= '</div>';
$homeContent['en']['HIGHLIGHTS chart1 title'] =  $str;

$str = '<div class="graphTitleDiv">';
$str .= '<span class="graphTitle">營業額</span>';
$str .= '<span class="graphUnit"> 百萬美元</span>';
$str .= '</div>';
$str .= '<div class="graphProfile dotUnderline">';
$str .= '<span class="figure_arrow_up">&#8593;</span>';
$str .= '<span class="graphFigure">11.6%</span>';
$str .= '</div>';
$homeContent['zh-hant']['HIGHLIGHTS chart1 title'] =  $str;

$str = '<div class="graphTitleDiv">';
$str .= '<span class="graphTitle">Gross Profit Margin</span>';
$str .= '<span class="graphUnit">%</span>';
$str .= '</div>';
$str .= '<div class="graphProfile dotUnderline">';
$str .= '<span class="figure_arrow_up">&#8593;</span>';
$str .= '<span class="graphFigure">70 bpt</span>';
$str .= '</div>';
$homeContent['en']['HIGHLIGHTS chart2 title'] =  $str;

$str = '<div class="graphTitleDiv">';
$str .= '<span class="graphTitle">毛利率</span>';
$str .= '<span class="graphUnit eng-regular-font">%</span>';
$str .= '</div>';
$str .= '<div class="graphProfile dotUnderline">';
$str .= '<span class="figure_arrow_up">&#8593;</span>';
$str .= '<span class="graphFigure">70 <span class="chi-bold-font">基點</span></span>';
$str .= '</div>';
$homeContent['zh-hant']['HIGHLIGHTS chart2 title'] =  $str;

$str = '<div class="graphTitleDiv">';
$str .= '<span class="graphTitle">EBIT</span>';
$str .= '<span class="graphUnit">USDm</span>';
$str .= '</div>';
$str .= '<div class="graphProfile dotUnderline">';
$str .= '<span class="figure_arrow_up">&#8593;</span>';
$str .= '<span class="graphFigure">16.9%</span>';
$str .= '</div>';
$homeContent['en']['HIGHLIGHTS chart3 title'] =  $str;

$str = '<div class="graphTitleDiv">';
$str .= '<span class="graphTitle">除利息及稅項前盈利</span>';
$str .= '<span class="graphUnit">百萬美元</span>';
$str .= '</div>';
$str .= '<div class="graphProfile dotUnderline">';
$str .= '<span class="figure_arrow_up">&#8593;</span>';
$str .= '<span class="graphFigure">16.9%</span>';
$str .= '</div>';
$homeContent['zh-hant']['HIGHLIGHTS chart3 title'] =  $str;

$str = '<div class="graphTitleDiv">';
$str .= '<span class="graphTitle">Basic Earnings per Share</span>';
$str .= '<span class="graphUnit">US cents</span>';
$str .= '</div>';
$str .= '<div class="graphProfile dotUnderline">';
$str .= '<span class="figure_arrow_up">&#8593;</span>';
$str .= '<span class="graphFigure">19.8%</span>';
$str .= '</div>';
$homeContent['en']['HIGHLIGHTS chart4 title'] =  $str;

$str = '<div class="graphTitleDiv">';
$str .= '<span class="graphTitle">每股基本盈利</span>';
$str .= '<span class="graphUnit"> 美仙</span>';
$str .= '</div>';
$str .= '<div class="graphProfile dotUnderline">';
$str .= '<span class="figure_arrow_up">&#8593;</span>';
$str .= '<span class="graphFigure">19.8%</span>';
$str .= '</div>';
$homeContent['zh-hant']['HIGHLIGHTS chart4 title'] =  $str;

$homeContent['en']['CHAIRMANS STATEMENT'] = 'Chairman&#146;s Statement';
$homeContent['zh-hant']['CHAIRMANS STATEMENT'] = '主席報告書';

$str = 'TTI delivered another record year for sales, gross margin and profit in 2013. We are excited about our positive momentum and are well positioned to build on our record financial performance through our continued commitment to innovation and superior products.<span class="quoteClose"></span>';
$homeContent['en']['CHAIRMANS STATEMENT quotation'] = $str;

$str = '創科實業於二零一三年之銷售額、毛利率及溢利均再創新高。我們對此增長勢頭感到欣喜，並在此驕人業績的基礎上，透過持續創新及不斷推出優質產品，繼續推動業務發展。<span class="quoteClose"></span>';
$homeContent['zh-hant']['CHAIRMANS STATEMENT quotation'] = $str;

$str = '<p>I am pleased to announce that TTI  delivered another year of record sales, gross margin, and profit in 2013,  building on our strong 2012 performance. We achieved a number of financial  milestones:</p>';
$str .= '<ul>';
$str .= '<li>Sales  grew 11.6% to a record <span class="nowrap">USD4.3 billion</span></li>';
$str .= '<li>All  business segments and geographic regions delivered strong growth</li>';
$str .= '<li>Gross  profit expanded 14.2% with a record margin of 34.2%</li>';
$str .= '<li>Net  profit increased to <span class="nowrap">USD250 million</span>, growing 24.5%</li>';
$str .= '<li>Working  capital improved to 13.9% of sales</li>';
$str .= '<li>Another  strong year delivering free cash flow of <span class="nowrap">USD332 million</span></li>';
$str .= '</ul>';
$str .= '<p>A disciplined focus on our key strategic  drivers is reflected in our financial performance and validates that our  strategy is working. These four strategic drivers, having powerful brands, developing innovative products, building a strong  company culture through exceptional people, and pursuing operational  excellence, are precisely what we will do to continue delivering outstanding  results.</p>';
$str .= '<h6>Record Financial Performance</h6>';
$str .= '<p> Sales for the year ended <span class="nowrap">December 31, 2013</span> increased 11.6% over 2012 to <span class="nowrap">USD4.3 billion</span> as we continued investing in new  products and driving organic growth. Sales  of our largest business segments, Power Equipment, rose by 9.8% to  <span class="nowrap">USD3.1 billion</span>, accounting for 73.1% of total sales, against 74.4% in 2012.  Floor Care and Appliance had a strong year  on sales growth of 17.0% over 2012 to <span class="nowrap">USD1.2 billion</span>. We delivered double digit sales growth in all  geographic regions. The acquisition of the powerful <span class="nowrap">ORECK<sup>®</sup></span>  brand in the second half of 2013 further strengthened our global floor care  portfolio and expanded our offering in the commercial and premium market  segments. </p>';
$str .= '<p>Our gross profit margin improved for the  fifth consecutive year to 34.2% from 33.5% last year through the introduction of new products coupled with further  productivity gains in our operations and sourcing. Cost improvement programs  across our global operations delivered significant savings in purchasing,  supply chain, value engineering, and  manufacturing. In addition, we continue to invest in automation and lean  manufacturing initiatives to improve both labor efficiency and overall  productivity.</p>';
$str .= '<p>Earnings in 2013, before interest and  taxes, increased by 16.9% to <span class="nowrap">USD304 million</span>, with the margin improving by 30  basis points to 7.1%. We increased our strategic spending on research and  development (R&amp;D) to deliver our innovative new product road map across all  categories and on marketing to successfully launch the new products. Our solid  operational performance drove shareholders’ profits to rise by 24.5% to <span class="nowrap">USD250  million</span>, with earnings per share increasing  by 19.8% over 2012 to <span class="nowrap">US13.68 cents</span>. The higher sales and operational  efficiency drove positive free cash flow to a record <span class="nowrap">USD332 million</span>. We  continued to improve the management of our working capital and lowered our  gearing, reducing it from 25.8% at the end of 2012, to 10.6% in 2013.</p>';
$homeContent['en']['CHAIRMANS STATEMENT CONTENT'] = $str;

$str = '<p>本人欣然宣佈，創科實業於<span class="nowrap">二零一三年</span>之銷售額、利潤率及溢利再創新高，比<span class="nowrap">二零一二年</span>之表現更強勁。我們實現多個財務里程碑：</p>';
$str .= '<ul>';
$str .= '<li>銷售額增長11.6%至創紀錄的<span class="nowrap">4,300,000,000美元</span></li>';
$str .= '<li>所有業務及市場地區均錄得強勁增長</li>';
$str .= '<li>毛利增加14.2%，毛利率達創紀錄的34.2%</li>';
$str .= '<li>純利增長至<span class="nowrap">250,000,000美元</span>，增幅達24.5%</li>';
$str .= '<li>營運資金持續改善，佔銷售額13.9%</li>';
$str .= '<li>又一強勁年度，創造自由現金流量達<span class="nowrap">332,000,000美元</span></li>';
$str .= '</ul>';
$str .= '<p>我們嚴謹專注於我們的主要策略，反映在我們的財務表現中，足以證明我們的策略行之有效。這四項策略推動力為擁有強勁品牌、開發創新產品、透過優秀人才建立穩固的企業文化，以及追求營運卓越，持續採用這四項策略，將可達致更理想業績。</p>';
$str .= '<h6>財務表現創紀錄</h6><p>隨著我們繼續投資新產品及推動內部增長，截至<span class="nowrap">二零一三年十二月三十一日</span>止年度的銷售額較二零一二年增長11.6%至<span class="nowrap">4,300,000,000美元</span>。我們最大的業務電動工具銷售額增長9.8%至<span class="nowrap">3,100,000,000美元</span>，佔總銷售額的73.1%，而<span class="nowrap">二零一二年</span>佔74.4%。地板護理及器具本年度表現強勁，銷售額較<span class="nowrap">二零一二年</span>增長17.0%至<span class="nowrap">1,200,000,000美元</span>。我們在所有市場地區的銷售額均錄得雙位數增幅。我們於<span class="nowrap">二零一三年</span>下半年收購強大的<span class="nowrap">ORECK<sup>&reg;</sup></span>品牌，進一步加強我們的全球地板護理組合及擴展我們在商業及高檔市場的產品種類。</p>';
$str .= '<p>我們的毛利率連續五年上升，由去年的33.5%上升至34.2%，乃透過推出嶄新產品以及進一步提高營運及採購效率，我們全球業務的成本改進計劃在採購、供應鏈、價值工程及製造方面節省了大量成本。此外，我們繼續投資自動化及精益生產，以提高勞工效率及整體生產效率。</p>';
$str .= '<p><span class="nowrap">二零一三年</span>除利息及稅項前盈利增加16.9%至<span class="nowrap">304,000,000美元</span>，利潤率提高30個基點至7.1%。我們加強投資於研究及開發的策略，創新產品路線圖橫跨所有產品類別。我們穩固的營運表現令股東溢利較<span class="nowrap">二零一二年</span>增加24.5%至<span class="nowrap">250,000,000美元</span>，每股盈利增加19.8%至<span class="nowrap">13.68美仙</span>。銷售額增長及營運效率提升使正現金流達創紀錄的<span class="nowrap">332,000,000美元</span>。我們繼續改善營運資金管理及降低負債比率，使負債比率由<span class="nowrap">二零一二年底</span>的25.8%下降至<span class="nowrap">二零一三年</span>的10.6%。</p>';
$homeContent['zh-hant']['CHAIRMANS STATEMENT CONTENT'] = $str;

$str = '<div class="graphTitleDiv graphTitleDivWithArrow">';
$str .= '<span class="graphTitle">Dividend per Share</span>';
$str .= '<span class="graphUnit">US cents</span>';
$str .= '</div>';
$str .= '<div class="graphProfile dotUnderline">';
$str .= '<span class="figure_arrow_up">&#8593;</span>';
/*$str .= '<span class="smallFont">USD</span>';*/
$str .= '<span class="graphFigure">35.7%</span>';
//$str .= '<span class="smallFont">m</span>';
$str .= '</div>';
$homeContent['en']['CHAIRMANS STATEMENT chart1 title'] = $str;

$str = '<div class="graphTitleDiv graphTitleDivWithArrow">';
$str .= '<span class="graphTitle">每股股息</span>';
$str .= '<span class="graphUnit">美仙</span>';
$str .= '</div>';
$str .= '<div class="graphProfile dotUnderline">';
$str .= '<span class="figure_arrow_up">&#8593;</span>';
$str .= '<span class="graphFigure">35.7%</span>';
$str .= '</div>';
$homeContent['zh-hant']['CHAIRMANS STATEMENT chart1 title'] = $str;

$str = '<div class="graphTitleDiv graphTitleDivWithArrow">';
$str .= '<span class="graphTitle">Basic Earnings per Share</span>';
$str .= '<span class="graphUnit">US cents</span>';
$str .= '</div>';
$str .= '<div class="graphProfile dotUnderline">';
$str .= '<span class="figure_arrow_up">&#8593;</span>';
$str .= '<span class="graphFigure">19.8%</span>';
$str .= '</div>';
$homeContent['en']['CHAIRMANS STATEMENT chart2 title'] = $str;

$str = '<div class="graphTitleDiv graphTitleDivWithArrow">';
$str .= '<span class="graphTitle">每股基本盈利</span>';
$str .= '<span class="graphUnit">美仙</span>';
$str .= '</div>';
$str .= '<div class="graphProfile dotUnderline">';
$str .= '<span class="figure_arrow_up">&#8593;</span>';
$str .= '<span class="graphFigure">19.8%</span>';
$str .= '</div>';
$homeContent['zh-hant']['CHAIRMANS STATEMENT chart2 title'] = $str;

$str = '<p class="homeOvewviewText">The Power Equipment  business is our largest division and consists of power tools, hand tools,  outdoor products and accessories. In 2013, sales in this business rose by 9.8%  to a record <span class="nowrap">USD3.1 billion</span>. We delivered growth in all geographic markets and  reported strong results in our industrial division. The business accounted for  73.1% of Group turnover, against 74.4% in 2012. Earnings grew 14.2% to <span class="nowrap">USD261  million</span> on new products, operational efficiency, and supply chain productivity.</p>';
$homeContent['en']['Power Overview Text'] = $str;
$str = '<p class="homeOvewviewText">電動工具業務是我們最大規模的業務，產品包括電動工具、手動工具、戶外產品及配件。此業務的<span class="nowrap">二零一三年</span>銷售額上升9.8%至創新高的<span class="nowrap">3,100,000,000美元</span>。我們在所有地區市場均錄得增長並且在工業分部錄得強勁業績。此業務佔本集團營業額的73.1%（<span class="nowrap">二零一二年：</span>74.4%）。受惠於新產品、營運效益及供應鏈生產力，盈利上升14.2%至261<span class="nowrap">,000,000美元</span>。</p>';
$homeContent['zh-hant']['Power Overview Text'] = $str;

$str = '<p class="homeOvewviewText">Floor Care and Appliances had a successful year. The business realigned its cost base to increase efficiencies, and invested significantly in product development and marketing. The result was a significant increase in sales and margin improvement. We generated sales growth of 17.0% over 2012 to <span class="nowrap">USD1.2 billion</span> with double digit growth in all geographic markets. Profitability moved higher on positive contributions from new product launches, the reorganization of our operations, and cost improvements. The business accounted for 26.9% of group turnover against 25.6% in 2012.</p>';
$homeContent['en']['Floorcare Overview Text'] = $str;
$str = '<p class="homeOvewviewText">地板護理及器具業務取得豐碩成果，該業務重新調整其成本基礎以增強效率，並大力投資於產品開發及營銷，令銷售額大幅上升及改善利潤率。我們的銷售額增長較<span class="nowrap">二零一二年</span>提升17.0%至<span class="nowrap">1,200,000,000美元</span>，並在所有地區市場均錄得雙位數字增幅。推出嶄新產品、業務重組及改善成本提升了盈利能力。該業務佔本集團營業額26.9%（<span class="nowrap">二零一二年</span>：25.6%）。</p>';
$homeContent['zh-hant']['Floorcare Overview Text'] = $str;

$str = 'Power Equipment Overview Image';
$homeContent['en']['Power Equipment Overview Image'] = $str;
$str = '電動工具及配件';
$homeContent['zh-hant']['Power Equipment Overview Image'] = $str;

$str = 'Power Equipment &amp; Accessories';
$homeContent['en']['Power Equipment & Accessories'] = $str;
$str = '電動工具及配件';
$homeContent['zh-hant']['Power Equipment & Accessories'] = $str;

$str = 'Hand Tools';
$homeContent['en']['Hand Tools'] = $str;
$str = '手動工具';
$homeContent['zh-hant']['Hand Tools'] = $str;

$str = 'Outdoor';
$homeContent['en']['Outdoor'] = $str;
$str = '戶外工具';
$homeContent['zh-hant']['Outdoor'] = $str;

$str = 'Industrial';
$homeContent['en']['Industrial'] = $str;
$str = '工業';
$homeContent['zh-hant']['Industrial'] = $str;

$str = 'Professional';
$homeContent['en']['Professional'] = $str;
$str = '專業';
$homeContent['zh-hant']['Professional'] = $str;

$str = 'Consumer &amp; Trade';
$homeContent['en']['Consumer and Trade'] = $str;
$str = '消費者及商業';
$homeContent['zh-hant']['Consumer and Trade'] = $str;

$str = 'Premium Cleansing';
$homeContent['en']['Premium Cleansing'] = $str;
$str = '卓越清洗功能';
$homeContent['zh-hant']['Premium Cleansing'] = $str;

$str = 'Commercial';
$homeContent['en']['Commercial'] = $str;
$str = '商業';
$homeContent['zh-hant']['Commercial'] = $str;

$str = 'High-Performance';
$homeContent['en']['High-Performance'] = $str;
$str = '高性能';
$homeContent['zh-hant']['High-Performance'] = $str;

$str = 'Consumer';
$homeContent['en']['Consumer'] = $str;
$str = '消費者';
$homeContent['zh-hant']['Consumer'] = $str;

$homeContent['en']['CHAIRMANS STATEMENT read more'] = 'Read more about the Chairman&#146;s Statement';
$homeContent['zh-hant']['CHAIRMANS STATEMENT read more'] = '主席報告書詳情';

$homeContent['en']['Power Equipment, Accessories and Hand Tools Overview'] = 'Power Equipment, Accessories and Hand Tools Overview';
$homeContent['zh-hant']['Power Equipment, Accessories and Hand Tools Overview'] = '電動工具、配件及手動工具摘要';

$homeContent['en']['Floor Care and Appliances Overview'] = 'Floor Care and Appliances Overview';
$homeContent['zh-hant']['Floor Care and Appliances Overview'] = '地板護理及器具摘要';

$homeContent['en']['Power Overview read more'] = 'Read more about the Power Equipment, Accessories and Hand Tools Overview';
$homeContent['zh-hant']['Power Overview read more'] = '電動工具、配件及手動工具摘要詳情';

$homeContent['en']['Floorcare Overview read more'] = 'Read more about the Floor Care and Appliances Overview';
$homeContent['zh-hant']['Floorcare Overview read more'] = '地板護理及器具摘要詳情';

$homeContent['en']['TURNOVER'] = 'TURNOVER from external customers';
$homeContent['zh-hant']['TURNOVER'] = '銷售予外界客戶之營業額';

$homeContent['en']['GLOBAL OPERATIONS'] = 'GLOBAL OPERATIONS';
$homeContent['zh-hant']['GLOBAL OPERATIONS'] = '全球營運';

$homeContent['en']['Financial Highlights read more'] = 'Read more about the Financial Highlights';
$homeContent['zh-hant']['Financial Highlights read more'] = '財務摘要詳情';

$homeContent['en']['CEO title'] = 'Chief Executive Officer&#146;s Strategic Review';
$homeContent['zh-hant']['CEO title'] = '行政總裁策略回顧';

$homeContent['en']['CEO title2'] = 'CEO&#39;s Strategic Review';
$homeContent['zh-hant']['CEO title2'] = '行政總裁策略回顧';

$homeContent['en']['Chief Executive Officers Strategic Review'] = 'Chief Executive Officer&#146;s Strategic Review';
$homeContent['zh-hant']['Chief Executive Officers Strategic Review'] = '行政總裁策略回顧';

$homeContent['en']['CEO read more'] = 'Read more about the Chief Executive Officer&#146;s Strategic Review';
$homeContent['zh-hant']['CEO read more'] = '行政總裁策略回顧詳情';

$homeContent['en']['REVIEW OF OPERATIONS'] = 'Review of Operations';
$homeContent['zh-hant']['REVIEW OF OPERATIONS'] = '業務回顧';

$homeContent['en']['Power Equipment'] = 'Power Equipment';
$homeContent['zh-hant']['Power Equipment'] = '電動工具';

$homeContent['en']['Floor Care'] = 'Floor Care and Appliances';
$homeContent['zh-hant']['Floor Care'] = '地板護理及器具';

$homeContent['en']['Sales by Business'] = 'Sales by Business';
$homeContent['zh-hant']['Sales by Business'] = '營業額以業務劃分';

$homeContent['en']['Review of Operations'] = 'Review of Operations';
$homeContent['zh-hant']['Review of Operations'] = '業務回顧';

$homeContent['en']['Executive Summary'] = 'Executive Summary';
$homeContent['zh-hant']['Executive Summary'] = '行政摘要';

$homeContent['en']['MDA & Governance'] = 'Management’s Discussion and Analysis, and Governance';
$homeContent['zh-hant']['MDA & Governance'] = '討論、分析與管治';

$homeContent['en']['Our Brands'] = 'Our Brands';
$homeContent['zh-hant']['Our Brands'] = '我們的品牌';

$homeContent['en']['Find out more'] = 'Find out more';
$homeContent['zh-hant']['Find out more'] = '了解詳情';

$homeContent['en']['DOWNLOADS'] = 'Downloads';
$homeContent['zh-hant']['DOWNLOADS'] = '下載';

$homeContent['en']['Full Report (PDF)'] = 'Full Report (PDF)';
$homeContent['zh-hant']['Full Report (PDF)'] = '全份年報(PDF)';

$homeContent['en']['Download full report'] = 'Download full report';
$homeContent['zh-hant']['Download full report'] = '下載全份年報';

$homeContent['en']['Sections (PDF)'] = 'Sections (PDF)';
$homeContent['zh-hant']['Sections (PDF)'] = '章節(PDF)';

$homeContent['en']['Financial Highlights'] = 'Financial Highlights';
$homeContent['zh-hant']['Financial Highlights'] = '財務摘要';
$homeContent['en']['Governance'] = 'Governance';
$homeContent['zh-hant']['Governance'] = '管治';
$homeContent['en']['Board of Directors'] = 'Board of Directors';
$homeContent['zh-hant']['Board of Directors'] = '董事會';
$homeContent['en']['Managements Discussion and Analysis'] = 'Management&#39;s Discussion and Analysis';
$homeContent['zh-hant']['Managements Discussion and Analysis'] = '管理層討論與分析';
$homeContent['en']['Corporate Governance Report'] = 'Corporate Governance Report';
$homeContent['zh-hant']['Corporate Governance Report'] = '企業管治報告';
$homeContent['en']['Report of the Directors'] = 'Report of the Directors';
$homeContent['zh-hant']['Report of the Directors'] = '董事會報告書';
$homeContent['en']['Business Review'] = 'Business Review';
$homeContent['zh-hant']['Business Review'] = '業務回顧';
$homeContent['en']['Operational Highlights'] = 'Operational Highlights';
$homeContent['zh-hant']['Operational Highlights'] = '營運摘要';
$homeContent['en']['Power Equipment Highlights'] = 'Power Equipment, Accessories and Hand Tools Overview';
$homeContent['zh-hant']['Power Equipment Highlights'] = '電動工具、配件及手動工具摘要';
$homeContent['en']['Power Equipment'] = 'Power Equipment, Accessories and Hand Tools';
$homeContent['zh-hant']['Power Equipment'] = '電動工具、配件及手動工具';
$homeContent['en']['Floor Care and Appliances Highlights'] = 'Floor Care and Appliances Overview';
$homeContent['zh-hant']['Floor Care and Appliances Highlights'] = '地板護理及器具摘要';
$homeContent['en']['Floor Care and Appliances'] = 'Floor Care and Appliances';
$homeContent['zh-hant']['Floor Care and Appliances'] = '地板護理及器具';
$homeContent['en']['Financials'] = 'Financials';
$homeContent['zh-hant']['Financials'] = '財務';
$homeContent['en']['Financial Summary'] = 'Financial Summary';
$homeContent['zh-hant']['Financial Summary'] = '財務概要';
$homeContent['en']['Independent Auditors Report'] = 'Independent Auditor&#39;s Report';
$homeContent['zh-hant']['Independent Auditors Report'] = '獨立核數師報告書';
$homeContent['en']['Consolidated Statement of Comprehensive Income'] = 'Consolidated Statement of Comprehensive Income';
$homeContent['zh-hant']['Consolidated Statement of Comprehensive Income'] = '綜合全面收入表';
$homeContent['en']['Consolidated Statement of Financial Position'] = 'Consolidated Statement of Financial Position';
$homeContent['zh-hant']['Consolidated Statement of Financial Position'] = '綜合財務狀況表';
$homeContent['en']['Statements of Financial Position'] = 'Statement of Financial Position';
$homeContent['zh-hant']['Statements of Financial Position'] = '財務狀況表';
$homeContent['en']['Consolidated Statement of Changes in Equity'] = 'Consolidated Statement of Changes in Equity';
$homeContent['zh-hant']['Consolidated Statement of Changes in Equity'] = '綜合權益變動表';
$homeContent['en']['Consolidated Statement of Cash Flow'] = 'Consolidated Statement of Cash Flow';
$homeContent['zh-hant']['Consolidated Statement of Cash Flow'] = '綜合現金流量表';
$homeContent['en']['Notes to the Consolidated Financial Statements'] = 'Notes to the Consolidated Financial Statements';
$homeContent['zh-hant']['Notes to the Consolidated Financial Statements'] = '綜合財務報表附註';
$homeContent['en']['Corporate Information'] = 'Corporate Information';
$homeContent['zh-hant']['Corporate Information'] = '公司資料';
$langContent['en']['Print this page'] = '&#59158;';
$langContent['zh-hant']['Print this page'] = '&#59158;';
$langContent['en']['Print this page in PDF'] = '&#59158;';
$langContent['zh-hant']['Print this page in PDF'] = '&#59158;';
$langContent['en']['Download PDF file of this section'] = '&#128229;';
$langContent['zh-hant']['Download PDF file of this section'] = '&#128229;';
$langContent['en']['Email this page'] = '&#59196;';
$langContent['zh-hant']['Email this page'] = '&#59196;';
$langContent['en']['Download this section'] = '&#128229;';
$langContent['zh-hant']['Download this section'] = '&#128229;';

$langContent['en']['home share position'] = 'right:-125px;';
$langContent['zh-hant']['home share position'] = 'right: -133px;';

$langContent['en']['download tooltips position'] = 'right:-53px;';
$langContent['zh-hant']['download tooltips position'] = 'right:-13px;';

$langContent['en']['print tooltips position'] = 'right:-63px;';
$langContent['zh-hant']['print tooltips position'] = 'right:-48px;';

$homeContent['en']['USDm'] = 'USDm';
$homeContent['zh-hant']['USDm'] = '百萬美元';

$homeContent['en']['Quick Links'] = 'Quick Links';
$homeContent['zh-hant']['Quick Links'] = '快速連結';

$homeContent['en']['tencent'] = 'TTI Annual Report 2012';
$homeContent['zh-hant']['tencent'] = '创科实业2012年年报';

$homeContent['en']['PDF Links'] = 'TTI_AR12_home_en.pdf';
$homeContent['zh-hant']['PDF Links'] = 'TTI_AR12_home_tc.pdf';

$shortLang = '';
if (ICL_LANGUAGE_CODE == 'zh-hant'){
	$shortLang = '_tc';
}
?>
<script type="text/javascript">	
$(document).ready(function(){
	 var homeRightNavTop = $('#homeRightNav').offset().top;
	 $(window).scroll(function(){
		  if( $(window).scrollTop() > 0) {
				$('#wrapper').css({"margin-top":"185px"});
				
		  }		  
	 });
	 
 	//initHomeScrollMenu();  
});
$(window).load(function () {
    initHomeScrollMenu();  
	 <?php
	 if(ICL_LANGUAGE_CODE=="en")
		echo 'initHomeGraph("en");';
	else
		echo 'initHomeGraph("zh-hant");';
	?>
});
</script>
<div id="container">
  <div id="content" role="main" class="clearfix">
    <div class="centerDiv">
		<div id="primary">
		  <div id="iconBtnstickyContainer">
			  <div id="iconBtn">
					<a href="javascript:;" id="headerShareBtn"><?php echo $langContent[ICL_LANGUAGE_CODE]['Email this page']; ?></a>
					<a id="downloadLink" target="_blank" href="<?php echo site_url();echo '/wp-content/uploads/2013/pdf/';echo $homeContent[ICL_LANGUAGE_CODE]['PDF Links'];?>"><?php echo $langContent[ICL_LANGUAGE_CODE]['Download this section']; ?><span id="tooltips_download" style="<?php echo $langContent[ICL_LANGUAGE_CODE]['download tooltips position']; ?>"></span></a>
					<a id="printLink" target="_blank" href="<?php echo site_url();echo '/wp-content/uploads/2013/pdf/';echo $homeContent[ICL_LANGUAGE_CODE]['PDF Links'];?>"><?php echo $langContent[ICL_LANGUAGE_CODE]['Print this page in PDF']?><span id="tooltips_print" style="<?php echo $langContent[ICL_LANGUAGE_CODE]['print tooltips position']; ?>"></span></a>
			  </div>  
			  <div class="addthis_toolbox addthis_default_style shareBox" id="shareBox" style="display:none; <?php echo $langContent[ICL_LANGUAGE_CODE]['home share position']; ?>">
					<a class="addthis_button_facebook"></a>
					<a class="addthis_button_twitter"></a>
					<a class="addthis_button_google_plusone_badge" g:plusone:size="small" g:plusone:name="" g:plusone:href="https://plus.google.com/102383601500147943541/"></a> 
					<!--<a class="addthis_button_linkedin"></a>
					<a class="addthis_button_reddit"></a>-->
					<a class="addthis_button_email"></a>
					<a class="addthis_button_sinaweibo"></a>
					<div id="qqwb_share__" data-appkey="801387349" data-icon="2" data-counter="0" data-content="<?php echo $homeContent[ICL_LANGUAGE_CODE]['tencent']; ?>"></div>
			  </div>
		  </div>
		  <script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
		  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5153b9e640b238a8"></script>
        <div class="homeContentLeft">
		<div id="prod_status" style="width: 820px;margin: 0 auto;border: 3px solid #f00;margin-bottom:20px;display:none;"><h1 style="margin:30px auto;color: #f00;font-size: 18px;text-align: center;">Layout programmed, dummy content populated</h1></div>
          <div class="homeSection">
          	<div class="sectionContent">
              <div class="homeSectionContentDiv clearfix" style="padding-top: 0;">
              	<div class="FH_highlight">
              		<?php echo $homeContent[ICL_LANGUAGE_CODE]['HIGHLIGHTS Excerpt'];?>
              		<?php echo $homeContent[ICL_LANGUAGE_CODE]['HIGHLIGHTS List'];?>
              	</div>
              </div>
          	</div>
            <div class="sectionTitle">
              <div><?php echo $homeContent[ICL_LANGUAGE_CODE]['HIGHLIGHTS'];?></div>
            </div>
            <div class="sectionContent">
              <div class="homeSectionContentDiv clearfix">
              	<div class="homeSectionContentInnerFullWidthDiv">
              		<?php echo $homeContent[ICL_LANGUAGE_CODE]['HIGHLIGHTS Table'];?>
					<div class="FH_highlight_graph clearfix">
						<div class="graphContainer"> <?php echo $homeContent[ICL_LANGUAGE_CODE]['HIGHLIGHTS chart1 title'];?>
						<div id="home-graph-container-1" class="graph-container" style="width: 185px;height: 230px;"></div>
						</div>
						<div class="graphContainer"> <?php echo $homeContent[ICL_LANGUAGE_CODE]['HIGHLIGHTS chart2 title'];?>
						<div id="home-graph-container-2" class="graph-container" style="width: 185px;height: 230px;"></div>
						</div>
						<div class="graphContainer"> <?php echo $homeContent[ICL_LANGUAGE_CODE]['HIGHLIGHTS chart3 title'] ;?>
						<div id="home-graph-container-3" class="graph-container" style="width: 185px;height: 230px;"></div>
						</div>
						<div class="graphContainer noMarginRight"> <?php echo $homeContent[ICL_LANGUAGE_CODE]['HIGHLIGHTS chart4 title'] ;?>
						<div id="home-graph-container-4" class="graph-container" style="width: 185px;height: 230px;"></div>
						</div>
              		</div>
              		<div class="readMoreDiv"> <a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/highlights-2<?php echo get_curr_lang_second_path() ; ?>" class="btn_readMore clearfix"> <span class="readMoreLeft"></span> <span class="readMoreMid"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Financial Highlights read more'] ;?></span> <span class="readMoreRight"></span> </a>
						</div>
				</div>
              </div>
            </div>
          </div>
          <div class="homeSection">
            <div class="sectionTitle">
              <div><?php echo $homeContent[ICL_LANGUAGE_CODE]['CHAIRMANS STATEMENT'] ;?></div>
            </div>
            <div class="sectionContent">
              <div class="homeSectionContentDiv homeChairmanContentDiv">
                <div class=" clearfix">
                  <div class="contentLeft">
                  	<img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/twentyten/images/home/img_chairman.jpg" alt="" />
                  	<div class="graphContainer noMarginRight"> <?php echo $homeContent[ICL_LANGUAGE_CODE]['CHAIRMANS STATEMENT chart1 title'] ;?>
                        <div id="home-graph-container-5" class="graph-container" style="width: 244px; height: 250px;"></div>
                      </div>
                      <div class="graphContainer noMarginRight"> <?php echo $homeContent[ICL_LANGUAGE_CODE]['CHAIRMANS STATEMENT chart2 title'] ;?>
                        <div id="home-graph-container-6" class="graph-container" style="width: 244px; height: 250px;"></div>
                      </div>
                  </div>
                  <div class="contentRight">
                  	<div class="quote">
                  		<?php echo $homeContent[ICL_LANGUAGE_CODE]['CHAIRMANS STATEMENT quotation'] ;?>
                  	</div>
                  	<div class="home_chairman_content" style="padding-bottom:20px;">
                  		<?php echo $homeContent[ICL_LANGUAGE_CODE]['CHAIRMANS STATEMENT CONTENT'] ;?>
                  	</div>
                    <div class="readMoreDiv"> <a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/chairmans-statement<?php echo get_curr_lang_second_path() ; ?>" class="btn_readMore clearfix"> <span class="readMoreLeft"></span> <span class="readMoreMid"><?php echo $homeContent[ICL_LANGUAGE_CODE]['CHAIRMANS STATEMENT read more'] ;?></span> <span class="readMoreRight"></span> </a> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="homeSection">
            <div class="sectionTitle">
              <div><?php echo $homeContent[ICL_LANGUAGE_CODE]['CEO title'] ;?></div>
            </div>
            <div class="sectionContent">
              <div class="homeSectionContentDiv">
                <div class=" clearfix">
                  <div class="contentLeft"> <img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/twentyten/images/home/img_ceo.jpg" alt="" /> </div>
                  <div class="contentRight">
                    <?php
					if(ICL_LANGUAGE_CODE=="en"){
					?>
	                    <div style="padding-bottom:25px;"><p>At TTI we are highly focused on our strategic drivers: powerful brands, innovative products, exceptional people, and operational excellence. These are the keys to our continued growth and success. This strategic foundation is driving our business to record levels by empowering our people to create cutting edge products. It is our innovative technology in breakthrough new products like the <span class="nowrap">MILWAUKEE<sup>®</sup> FUEL<sup>®</sup></span> line that are transforming the power tool industry. Our relentless focus on applying Lithium cordless technology to new  categories in power tools, outdoor products, and floor care are revolutionizing these businesses. Our management team is committed to continue to tap the full potential of our business. We refuse to settle for anything less than being the best.</p>
						<h6>New Product Machine</h6>
						<p> Our new  product development system is a rigorous process that ensures high quality,  game changing, and innovative products. We are producing a continuous stream of new products that excite end-users, overwhelm the competition, and change the respective  industries. TTI invests heavily in product development and 2013 was no  exception with research and development (R&amp;D) spending up 34.7% to 2.5% of sales, a very  sustainable level for us.</p></div>
                    <? }
					else{
					?>
	                    <p>創科實業高度專注於強勁品牌、創新產品、優秀人才及卓越營運四大業務發展推動策略。堅守這四大業務發展推動策略是創科實業持續錄得增長與取得成功的關鍵。此四大業務發展推動策略為業務發展的基礎，令員工能夠創造出更多尖端科技產品，推動我們的業績屢創新高。創科實業的嶄新產品<span class="nowrap">MILWAUKEE<sup>®</sup> FUEL<sup>®</sup></span>系列應用的創新技術，改變了電動工具行業面貌。創科實業努力不懈地鑽研嶄新類型電動工具、戶外工具及地板護理產品上應用鋰離子充電技術，令產品市場出現突破性改變。創科實業的管理團隊不斷致力發掘業務的全面發展潛力。我們絕不會因滿足於現有成績而停步，反而會全力以赴繼續向前邁進。</p>
						<h6>創造新產品之機器</h6>
						<p> 創科實業研發嶄新產品系統的過程嚴格而且精密，以確保研發出優質、開創先河的革新產品。我們不斷生產嶄新產品推出市場，令終端用家十分鼓舞，並且力壓市場競爭對手及引發相關行業的變革。創科實業持續在產品開發方面作出龐大投資，二<span class="nowrap">零一三年亦</span>不例外，研究及開發（研發）開支增加34.7%至佔銷售額的2.5%，這對創科實業而言屬恰當水平。</p>
                    <?
					}
					?>
					<div class="readMoreDiv"> <a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/ceos-strategic-review" class="btn_readMore clearfix"> <span class="readMoreLeft"></span> <span class="readMoreMid"><?php echo $homeContent[ICL_LANGUAGE_CODE]['CEO read more'] ;?></span> <span class="readMoreRight"></span> </a> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="homeSection clearfix">
            <div class="sectionTitle">
              <div><?php echo $homeContent[ICL_LANGUAGE_CODE]['Power Equipment, Accessories and Hand Tools Overview'] ;?></div>
            </div>
            <div class="sectionContent">
              <div class="homeSectionContentDiv homeOverviewContentDiv">
              	<img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/home/main_power_overview<?php echo get_curr_lang_second_path() ; ?>.jpg" width="820" height="399" alt="" />
              	<?php echo $homeContent[ICL_LANGUAGE_CODE]['Power Overview Text'] ;?>
              	<table width="100%" border="0" cellspacing="0" cellpadding="0">
				  <tr>
				    <td colspan="3" class="homeProduct1stCategory"><p><?php echo $homeContent[ICL_LANGUAGE_CODE]['Power Equipment & Accessories'] ;?></p></td>
				    <td colspan="3" class="homeProduct1stCategory"><p><?php echo $homeContent[ICL_LANGUAGE_CODE]['Hand Tools'] ;?></p></td>
				    <td colspan="2" class="homeProduct1stCategory"><p class="noMarginRight"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Outdoor'] ;?></p></td>
				  </tr>
				  <tr>
				    <td class="homeProduct2ndCategory"><p><?php echo $homeContent[ICL_LANGUAGE_CODE]['Industrial'] ;?></p></td>
				    <td class="homeProduct2ndCategory"><p><?php echo $homeContent[ICL_LANGUAGE_CODE]['Professional'] ;?></p></td>
				    <td class="homeProduct2ndCategory"><p><?php echo $homeContent[ICL_LANGUAGE_CODE]['Consumer and Trade'] ;?></p></td>
				    <td class="homeProduct2ndCategory" colspan="3"><p>&nbsp;</p></td>
				    <td class="homeProduct2ndCategory" colspan="2"><p class="noMarginRight">&nbsp;</p></td>
				  </tr>
				  <tr>
				    <td><a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/power-equipment<?php echo get_curr_lang_second_path() ; ?>/industrial-power-tools<?php echo get_curr_lang_second_path() ; ?>/milwaukee<?php echo get_curr_lang_second_path() ; ?>"><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/home/milwaukee_logo.png" alt="" width="100" height="49" /><span class="logoBtnArrow"></span></a></td>
				    <td><a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/power-equipment<?php echo get_curr_lang_second_path() ; ?>/professional-power-tools<?php echo get_curr_lang_second_path() ; ?>/aeg<?php echo get_curr_lang_second_path() ; ?>"><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/home/aeg_logo.png" alt="" width="100" height="49" /><span class="logoBtnArrow"></span></a></td>
				    <td><a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/power-equipment<?php echo get_curr_lang_second_path() ; ?>/consumer-and-trade-power-tools<?php echo get_curr_lang_second_path() ; ?>/ryobi<?php echo get_curr_lang_second_path() ; ?>"><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/home/ryobi_logo.png" alt="" width="100" height="49" /><span class="logoBtnArrow"></span></a></td>
				    <td><a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/power-equipment<?php echo get_curr_lang_second_path() ; ?>/hand-tools<?php echo get_curr_lang_second_path() ; ?>/milwaukee<?php echo get_curr_lang_second_path() ; ?>"><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/home/milwaukee_logo.png" alt="" width="100" height="49" /><span class="logoBtnArrow"></span></a></td>
				    <td><a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/power-equipment<?php echo get_curr_lang_second_path() ; ?>/hand-tools<?php echo get_curr_lang_second_path() ; ?>/stiletto<?php echo get_curr_lang_second_path() ; ?>"><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/home/stiletto_logo.png" alt="" width="100" height="49" /><span class="logoBtnArrow"></span></a></td>
				    <td><a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/power-equipment<?php echo get_curr_lang_second_path() ; ?>/hand-tools<?php echo get_curr_lang_second_path() ; ?>/hart<?php echo get_curr_lang_second_path() ; ?>"><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/home/hart_logo.png" alt="" width="100" height="49" /><span class="logoBtnArrow"></span></a></td>
				    <td><a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/power-equipment<?php echo get_curr_lang_second_path() ; ?>/outdoor-products<?php echo get_curr_lang_second_path() ; ?>/ryobi<?php echo get_curr_lang_second_path() ; ?>"><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/home/ryobi_logo.png" alt="" width="100" height="49" /><span class="logoBtnArrow"></span></a></td>
				    <td><a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/power-equipment<?php echo get_curr_lang_second_path() ; ?>/outdoor-products<?php echo get_curr_lang_second_path() ; ?>/homelite<?php echo get_curr_lang_second_path() ; ?>"><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/home/homelite_logo.png" alt="" width="100" height="49" /><span class="logoBtnArrow noMarginRight"></span></a></td>
				  </tr>
				</table>
              </div>
            </div>
            <div class="readMoreDiv" style="margin: 20px 20px 40px 0;"> <a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/power-equipment-accessories-and-hand-tools-overview" class="btn_readMore clearfix"> <span class="readMoreLeft"></span> <span class="readMoreMid"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Power Overview read more'] ;?></span> <span class="readMoreRight"></span> </a> </div>
          </div>
          <div class="homeSection clearfix">
            <div class="sectionTitle">
              <div><?php echo $homeContent[ICL_LANGUAGE_CODE]['Floor Care and Appliances Overview'] ;?></div>
            </div>
            <div class="sectionContent">
              <div class="homeSectionContentDiv homeOverviewContentDiv homeFloorcareOverviewContentDiv">
              	<img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/home/main_floorcare_overview<?php echo get_curr_lang_second_path() ; ?>.jpg" width="820" height="410" alt="" />
              	<?php echo $homeContent[ICL_LANGUAGE_CODE]['Floorcare Overview Text'] ;?>
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
				  <tr>
				    <td class="homeProduct2ndCategory"><p><?php echo $homeContent[ICL_LANGUAGE_CODE]['Premium Cleansing'] ;?></p></td>
				    <td class="homeProduct2ndCategory"><p><?php echo $homeContent[ICL_LANGUAGE_CODE]['Commercial'] ;?></p></td>
				    <td class="homeProduct2ndCategory"><p><?php echo $homeContent[ICL_LANGUAGE_CODE]['High-Performance'] ;?></p></td>
				    <td class="homeProduct2ndCategory"><p class="noMarginRight"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Consumer'] ;?></p></td>
				  </tr>
				  <tr>
				    <td><a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/floor-care-and-appliances<?php echo get_curr_lang_second_path() ; ?>/hoover<?php echo get_curr_lang_second_path() ; ?>"><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/home/hoover_logo.png" alt="" width="201" height="64" /><span class="logoBtnArrow"></span></a></td>
				    <td><a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/floor-care-and-appliances<?php echo get_curr_lang_second_path() ; ?>/oreck<?php echo get_curr_lang_second_path() ; ?>"><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/home/oreck_logo.png" alt="" width="201" height="64" /><span class="logoBtnArrow"></span></a></td>
				    <td><a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/floor-care-and-appliances<?php echo get_curr_lang_second_path() ; ?>/vax<?php echo get_curr_lang_second_path() ; ?>"><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/home/vax_logo.png" alt="" width="201" height="64" /><span class="logoBtnArrow"></span></a></td>
				    <td><a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/floor-care-and-appliances<?php echo get_curr_lang_second_path() ; ?>/dirt-devil<?php echo get_curr_lang_second_path() ; ?>"><img src="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/home/dirt_logo.png" alt="" width="201" height="64" /><span class="logoBtnArrow noMarginRight"></span></a></td>
				  </tr>
				</table>
              </div>
            </div>
            <div class="readMoreDiv" style="margin: 20px 20px 40px 0;"> <a href="<?php echo site_url();echo get_curr_lang_path() ; ?>/executive-summary<?php echo get_curr_lang_second_path() ; ?>/floor-care-and-appliances-overview" class="btn_readMore clearfix"> <span class="readMoreLeft"></span> <span class="readMoreMid"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Floorcare Overview read more'] ;?></span> <span class="readMoreRight"></span> </a> </div>
          </div>
          <div class="homeSection">
            <div class="sectionTitle">
              <div><?php echo $homeContent[ICL_LANGUAGE_CODE]['DOWNLOADS'] ;?></div>
            </div>
            <div class="sectionContent" id="sectionContentDownload">
              <div class="homeSectionContentDiv" style="padding-left:17px;">
                <div class="clearfix">
                  <div class="downloadLeft">
                    <div class="headlineTitle dotUnderline"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Full Report (PDF)'] ;?></div>
                    <div class="reportCoverContainer"><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf"><img src="<?php bloginfo('wpurl'); ?>/wp-content/themes/twentyten/images/home/home_cover<?php echo get_curr_lang_second_path() ; ?>.jpg" alt="" /></a></div>
                    <a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Download full report'] ;?></a> </div>
                  <div class="downloadRight">
                    <div class="headlineTitle dotUnderline"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Sections (PDF)'] ;?></div>
                    <div class="downloadLinksContainer dotUnderline">
                      <div><?php echo $homeContent[ICL_LANGUAGE_CODE]['Executive Summary'] ;?></div>
                      <ul class="downloadLinkList">
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Financial_Highlights<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Financial Highlights'] ;?></a></li>
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Chairman_Statement<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['CHAIRMANS STATEMENT'] ;?></a></li>
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_CEO_Review<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Chief Executive Officers Strategic Review'] ;?></a></li>
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Power_Equipment_Highlights<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Power Equipment Highlights'] ;?></a></li>
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Power_Equipment<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Power Equipment'] ;?></a></li>
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Floor_Care_And_Appliances_Highlights<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Floor Care and Appliances Highlights'] ;?></a></li>
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Floor_Care_And_Appliances<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Floor Care and Appliances'] ;?></a></li>
                      </ul>
                    </div>
                    <div class="downloadLinksContainer dotUnderline">
                      <div><?php echo $homeContent[ICL_LANGUAGE_CODE]['MDA & Governance'] ;?></div>
                      <ul class="downloadLinkList">
                      	<li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Board_of_Directors<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Board of Directors'] ;?></a></li>
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Management_Discussion_Analysis<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Managements Discussion and Analysis'] ;?></a></li>
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Corporate_Governance<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Corporate Governance Report'] ;?></a></li>
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Director_Report<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Report of the Directors'] ;?></a></li>
                      </ul>
                    </div>
                    <div class="downloadLinksContainer dotUnderline">
                      <div><?php echo $homeContent[ICL_LANGUAGE_CODE]['Financials'] ;?></div>
                      <ul class="downloadLinkList">
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Financial_Summary<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Financial Summary'] ;?></a></li>
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Independent_Auditor_Report<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Independent Auditors Report'] ;?></a></li>
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Consolidated_Statement_Comprehensive_Income<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Consolidated Statement of Comprehensive Income'] ;?></a></li>
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Consolidated_Statement_Financial_Position<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Consolidated Statement of Financial Position'] ;?></a></li>
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Statement_Financial_Position<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Statements of Financial Position'] ;?></a></li>
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Consolidated_Statement_Changes_Equity<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Consolidated Statement of Changes in Equity'] ;?></a></li>
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Consolidated_Statement_Cash_Flow<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Consolidated Statement of Cash Flow'] ;?></a></li>
                        <li><a target="_blank" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Notes_Consolidated_Financial_Statement<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Notes to the Consolidated Financial Statements'] ;?></a></li>
                      </ul>
                    </div>
                    <ul class="downloadLinkList">
                      <li><a target="_blank" style="background-position: 0 5px" href="<?php bloginfo('wpurl'); ?>/wp-content/uploads/2013/pdf/TTI_AR12_Corporate_info<?php echo get_pdf_curr_lang_second_path() ; ?>.pdf" class="downloadLink sectionHeader"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Corporate Information'] ;?></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="secondary"> 
        <div id="homeRightNav"> <a href="javascript:;" class="active"><?php echo $homeContent[ICL_LANGUAGE_CODE]['HIGHLIGHTS'] ;?></a> <a href="javascript:;"><?php echo $homeContent[ICL_LANGUAGE_CODE]['CHAIRMANS STATEMENT'] ;?></a><a href="javascript:;"><?php echo $homeContent[ICL_LANGUAGE_CODE]['CEO title'] ;?></a> <a href="javascript:;"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Power Equipment, Accessories and Hand Tools Overview'] ;?></a><a href="javascript:;"><?php echo $homeContent[ICL_LANGUAGE_CODE]['Floor Care and Appliances Overview'] ;?></a><a href="javascript:;" class="lastItem"><?php echo $homeContent[ICL_LANGUAGE_CODE]['DOWNLOADS'] ;?></a> </div>
      </div>
    </div>
  </div>
  <!-- #content --> 
</div>
<!-- #container -->
<?php
	get_footer();
?>