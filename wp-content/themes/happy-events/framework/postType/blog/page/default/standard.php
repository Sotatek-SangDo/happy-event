<?php
/**
 * @package 	WordPress
 * @subpackage 	Happy Events
 * @version		1.0.0
 * 
 * Blog Page Default Standard Post Format Template
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

?>

<!--_________________________ Start Standard Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_post_default'); ?>>
	<div class="cmsmasters_post_default_inner">
		<?php 

		if (!post_password_required() && has_post_thumbnail()) {
			happy_events_thumb(get_the_ID(), 'post-thumbnail', true, false, false, false, false, true, false);
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
<!--_________________________ Finish Standard Article _________________________ -->

