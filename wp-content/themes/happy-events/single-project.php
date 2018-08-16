<?php
/**
 * @package 	WordPress
 * @subpackage 	Happy Events
 * @version		1.0.0
 * 
 * Single Service Template
 * Created by CMSMasters
 * 
 */


get_header();


$cmsmasters_option = happy_events_get_global_options();


$project_tags = get_the_terms(get_the_ID(), 'pj-tags');


$cmsmasters_project_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_project_sharing_box', true);

$cmsmasters_project_author_box = get_post_meta(get_the_ID(), 'cmsmasters_project_author_box', true);

$cmsmasters_project_more_posts = get_post_meta(get_the_ID(), 'cmsmasters_project_more_posts', true);


echo '<!--_________________________ Start Content _________________________ -->' . "\n" . 
'<div class="middle_content entry">';


if (have_posts()) : the_post();
	echo '<div class="portfolio opened-article">' . "\n";
	
	
	if (get_post_format() != '') {
		get_template_part('framework/postType/portfolio/post/' . get_post_format());
	} else {
		get_template_part('framework/postType/portfolio/post/standard');
	}	
	
	if ($cmsmasters_project_sharing_box == 'true') {
		happy_events_sharing_box(esc_html__('Share this service?', 'happy-events'), 'h4');
	}
	
	
	if ($cmsmasters_project_author_box == 'true') {
		happy_events_author_box(esc_html__('Meet your guide', 'happy-events'), 'h4', 'h4');
	}
	
	
	if ($project_tags) {
		$tgsarray = array();
		
		
		foreach ($project_tags as $tagone) {
			$tgsarray[] = $tagone->term_id;
		}  
	} else {
		$tgsarray = '';
	}
	
	
	if ($cmsmasters_project_more_posts != 'hide') {
		happy_events_related( 
			'h4', 
			$cmsmasters_project_more_posts, 
			$tgsarray, 
			$cmsmasters_option['happy-events' . '_portfolio_more_projects_count'], 
			$cmsmasters_option['happy-events' . '_portfolio_more_projects_pause'], 
			'project' 
		);
	}
	
	
	comments_template( '/reviews.php' );
	
	
	echo '</div>';
endif;


echo '</div>' . "\n" . 
'<!-- _________________________ Finish Content _________________________ -->' . "\n\n";


get_footer();

