<?php
/**
 * @package 	WordPress
 * @subpackage 	Happy Events
 * @version		1.0.1
 * 
 * Blog Page Masonry Gallery Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_post_metadata = explode(',', $cmsmasters_metadata);


$date = (in_array('date', $cmsmasters_post_metadata) || is_home()) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_post_metadata) || is_home())) ? true : false;
$author = (in_array('author', $cmsmasters_post_metadata) || is_home()) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_post_metadata) || is_home())) ? true : false;
$likes = (in_array('likes', $cmsmasters_post_metadata) || is_home()) ? true : false;
$more = (in_array('more', $cmsmasters_post_metadata) || is_home()) ? true : false;


$cmsmasters_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_post_images', true))));


$post_sort_categs = get_the_terms(0, 'category');

if ($post_sort_categs != '') {
	$post_categs = '';
	
	foreach ($post_sort_categs as $post_sort_categ) {
		$post_categs .= ' ' . $post_sort_categ->slug;
	}
	
	$post_categs = ltrim($post_categs, ' ');
}

?>

<!--_________________________ Start Gallery Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_post_masonry'); ?> data-category="<?php echo esc_attr($post_categs); ?>">
	<div class="cmsmasters_post_cont">
		<?php 
		if (sizeof($cmsmasters_post_images) > 1 || has_post_thumbnail()) {
			$cmsmasters_with_image = " cmsmasters_with_image"; 
		} else {
			$cmsmasters_with_image = "";
		}
		
		echo '<div class="cmsmasters_post_top_wrap">' . 
			'<div class="entry-meta' . $cmsmasters_with_image . '">';
			
			if ($likes || $comments || $date) {
			
				$date ? happy_events_get_post_date('page', 'masonry') : '';
			
				$comments ? happy_events_get_post_comments('page') : '';
			
				$likes ? happy_events_get_post_likes('page') : '';
				
			}
			
			echo '</div>';
			
			if (!post_password_required() && sizeof($cmsmasters_post_images) > 1) {
			?>
				<div class="cmsmasters_date_img_wrap">
					<?php 
					echo '<div' . 
						' id="cmsmasters_owl_slider_' . esc_attr(uniqid()) . '"' . 
						' class="cmsmasters_owl_slider"' . 
					'>';
						
						foreach ($cmsmasters_post_images as $cmsmasters_post_image) {
							$image_atts = wp_prepare_attachment_for_js(strstr($cmsmasters_post_image, '|', true));
							
							
							echo '<div class="cmsmasters_owl_slider_item">' . 
								'<figure>' . 
									wp_get_attachment_image(strstr($cmsmasters_post_image, '|', true), 'cmsmasters-blog-masonry-thumb', false, array( 
										'class' => 	'full-width', 
										'alt' => ($image_atts['alt'] != '') ? esc_attr($image_atts['alt']) : cmsmasters_title(get_the_ID(), false), 
										'title' => ($image_atts['title'] != '') ? esc_attr($image_atts['title']) : cmsmasters_title(get_the_ID(), false) 
									)) . 
								'</figure>' . 
							'</div>';
						}
						
					echo '</div>';
					?>
				</div>
			<?php 
			} elseif (!post_password_required() && sizeof($cmsmasters_post_images) == 1 && $cmsmasters_post_images[0] != '') {
				echo '<div class="cmsmasters_date_img_wrap">';
					
					happy_events_thumb(get_the_ID(), 'cmsmasters-blog-masonry-thumb', false, 'img_' . get_the_ID(), true, true, true, true, $cmsmasters_post_images[0]);
					
				echo '</div>';
			} elseif (!post_password_required() && has_post_thumbnail()) {
				echo '<div class="cmsmasters_date_img_wrap">';
					
					happy_events_thumb(get_the_ID(), 'cmsmasters-blog-masonry-thumb', false, 'img_' . get_the_ID(), true, true, true, true, false);
					
				echo '</div>';
			}

		echo '</div>';
		
		
		echo '<div class="cmsmasters_post_cont_wrap">';
		
			happy_events_post_heading(get_the_ID(), 'h2');
			
			
			if ($author || $categories) {
				echo '<div class="cmsmasters_post_cont_info entry-meta">';
					
					$author ? happy_events_get_post_author('page') : '';
					
					$categories ? happy_events_get_post_category(get_the_ID(), 'category', 'page') : '';
					
				echo '</div>';
			}
			
			
			happy_events_post_exc_cont();
			
			
			if ($more) {
				echo '<footer class="cmsmasters_post_footer entry-meta">';
					
					happy_events_post_more(get_the_ID());
					
				echo '</footer>';
			}
			
		echo '</div>';
	?>
	</div>
</article>
<!--_________________________ Finish Gallery Article _________________________ -->

