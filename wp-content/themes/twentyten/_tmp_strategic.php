<?php
/**
 * Template Name: Strategic Drivers page
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); 

?>
		<div id="container" class="one-column">
			<div id="content" role="main">
			<div id="report-page-container">
            	<div id="report-top">
                	<div id="report-title">
                    	<div id="report-page-heading">
							<?php 
								$pa = get_post_ancestors( $post );
								$pid = '';
								$isLevelOne = false;
								$levelTwoTitle = '';
								if (empty($pa))
									$isLevelOne = true;
								if(isset($pa[1])){
									$pid = $pa[1];
									$levelTwoTitle = get_the_title($pa[0]);
								}else{
									$pid = $pa[0];
									$levelTwoTitle = get_the_title($post);
								}
								
								$parent_title = get_the_title($pid);
								echo $parent_title;
							?>
</div>
                        <div id="report-page-sub-heading"><?php if(!$isLevelOne) echo $levelTwoTitle;?></div>
                    </div>
                    <div id="report-subpage">
                    <ul>
                    <?php
						//get top most parent and first level ancestors
						$siblings = wp_list_pages(array(
                            'child_of' => $pid,
							'sort_column' => 'menu_order',
							'echo'	=> 0,
							'title_li' => '',
							'depth'=> 2
						));
						if(!$isLevelOne)
							echo $siblings;                		
					?>
                    </ul>
                    </div>
                </div>
                <div id="breadcrumb"><?php echo get_breadcrumb($post, true); ?></div>
                <div id="report-content-container">
               		<div id="report-content">
                    	<?php get_template_part( 'loop', 'page' );?>
                    </div>
                    <div id="report-menu">
                    	<?php get_template_part( 'nav', 'side' );?>
                    </div>
                </div>
            
           	</div>
           
			

			</div><!-- #content -->
		</div><!-- #container -->
<script>
$(document).ready(function(){
	//initContentSlideToggle();
});
</script>
<?php get_footer(); ?>
