<?php
/**
 * @package 	WordPress
 * @subpackage 	Happy Events
 * @version		1.0.0
 * 
 * Blog Post Image Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = happy_events_get_global_options();


$cmsmasters_post_title = get_post_meta(get_the_ID(), 'cmsmasters_post_title', true);

$cmsmasters_post_image_link = get_post_meta(get_the_ID(), 'cmsmasters_post_image_link', true);


list($cmsmasters_layout) = happy_events_theme_page_layout_scheme();

if ($cmsmasters_layout == 'fullwidth') {
	$cmsmasters_image_thumb_size = 'cmsmasters-full-masonry-thumb';
} else {
	$cmsmasters_image_thumb_size = 'cmsmasters-masonry-thumb';
}

?>

<!--_________________________ Start Image Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_open_post'); ?>>
	<?php 
	
	if ($cmsmasters_post_title == 'true') {
		happy_events_post_title_nolink(get_the_ID(), 'h1');
	}
	
	echo '<div class="cmsmasters_post_cont_wrap">';
		
		if (
			$cmsmasters_option['happy-events' . '_blog_post_date'] || 
			$cmsmasters_option['happy-events' . '_blog_post_like'] || 
			$cmsmasters_option['happy-events' . '_blog_post_comment'] 
		) {
			echo '<div class="cmsmasters_post_cont_info_top entry-meta">';
			
				happy_events_get_post_date('post');
				
				happy_events_get_post_likes('post');
				
				happy_events_get_post_comments('post');
				
			echo '</div>';
		}	
		
		if (
			$cmsmasters_option['happy-events' . '_blog_post_author'] || 
			$cmsmasters_option['happy-events' . '_blog_post_cat'] 
		) {
			echo '<div class="cmsmasters_post_cont_info entry-meta">';
				
				happy_events_get_post_author('post');
				
				happy_events_get_post_category(get_the_ID(), 'category', 'post');
				
			echo '</div>';
		}
	
		if (
			$cmsmasters_post_image_link != '' || 
			get_the_content() != ''
		){

			echo '<div class="cmsmasters_post_content entry-content">';
					
				if (!post_password_required()) {
					if ($cmsmasters_post_image_link != '') {
						happy_events_thumb(get_the_ID(), $cmsmasters_image_thumb_size, false, 'img_' . get_the_ID(), false, false, false, true, $cmsmasters_post_image_link);
					} elseif (has_post_thumbnail()) {
						happy_events_thumb(get_the_ID(), $cmsmasters_image_thumb_size, false, 'img_' . get_the_ID(), false, false, false, true, false);
					}
				}
					
				if (get_the_content() != '') {
					the_content();
					
					wp_link_pages(array( 
						'before' => '<div class="subpage_nav">' . '<strong>' . esc_html__('Pages', 'happy-events') . ':</strong>', 
						'after' => '</div>', 
						'link_before' => '<span>', 
						'link_after' => '</span>' 
					));
				}
					
			echo '</div>';
		}
		
		
		if (
			$cmsmasters_option['happy-events' . '_blog_post_tag']
		) {
			echo '<footer class="cmsmasters_post_footer entry-meta">';
				
				happy_events_get_post_tags();
				
			echo '</footer>';
		}
			
		if ($cmsmasters_option['happy-events' . '_blog_post_nav_box']) {
			happy_events_prev_next_posts();
		}

	echo '</div>';	
	
	?>	
</article>
<!--_________________________ Finish Image Article _________________________ -->

