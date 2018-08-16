<?php
/**
 * @package 	WordPress
 * @subpackage 	Happy Events
 * @version		1.0.0
 * 
 * Blog Page Default Image Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_post_metadata = !is_home() ? explode(',', $cmsmasters_metadata) : array();


$date = (in_array('date', $cmsmasters_post_metadata) || is_home()) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_post_metadata) || is_home())) ? true : false;
$author = (in_array('author', $cmsmasters_post_metadata) || is_home()) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_post_metadata) || is_home())) ? true : false;
$likes = (in_array('likes', $cmsmasters_post_metadata) || is_home()) ? true : false;
$more = (in_array('more', $cmsmasters_post_metadata) || is_home()) ? true : false;


$cmsmasters_post_image_link = get_post_meta(get_the_ID(), 'cmsmasters_post_image_link', true);

?>

<!--_________________________ Start Image Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_post_default'); ?>>
	<div class="cmsmasters_post_default_inner">
		<?php 
		
		if (!post_password_required()) {
			if ($cmsmasters_post_image_link != '') {
				happy_events_thumb(get_the_ID(), 'cmsmasters-masonry-thumb', false, 'img_' . get_the_ID(), false, false, false, true, $cmsmasters_post_image_link);
			} elseif (has_post_thumbnail()) {
				happy_events_thumb(get_the_ID(), 'cmsmasters-masonry-thumb', false, 'img_' . get_the_ID(), false, false, false, true, false);
			}
		}
		
		if ($date || $likes || $comments) {
			echo '<div class="cmsmasters_post_info entry-meta">';
				
				$date ? happy_events_get_post_date('page', 'default') : '';
				
				$comments ? happy_events_get_post_comments('page') : '';
				
				$likes ? happy_events_get_post_likes('page') : '';
				
			echo '</div>';
		}
		?>
		<div class="cmsmasters_post_cont">
			<?php		
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
					
					$more ? happy_events_post_more(get_the_ID()) : '';
					
				echo '</footer>';
			}
			?>
		</div>
	</div>
</article>
<!--_________________________ Finish Image Article _________________________ -->

