<?php
/**
 * @package 	WordPress
 * @subpackage 	Happy Events
 * @version		1.0.0
 * 
 * Blog Page Timeline Standard Post Format Template
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

?>

<!--_________________________ Start Standard Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_post_timeline'); ?>>
	<?php 
	if ($date) {
		echo '<div class="cmsmasters_post_info entry-meta">';
		
			happy_events_get_post_date('page', 'timeline');
			
		echo '</div>';
	}
	?>
	<div class="cmsmasters_timeline_margin">
		<div class="cmsmasters_post_cont">
		<?php			
			if (has_post_thumbnail()) {
				$cmsmasters_with_image = " cmsmasters_with_image"; 
			} else {
				$cmsmasters_with_image = "";
			}
		
			echo '<div class="cmsmasters_post_top_wrap">' . 
				'<div class="entry-meta' . $cmsmasters_with_image . '">';
				
				if ($likes || $comments) {
				
					$comments ? happy_events_get_post_comments('page') : '';
				
					$likes ? happy_events_get_post_likes('page') : '';
					
				}
				
				echo '</div>';
			
				if (!post_password_required() && has_post_thumbnail()) {
					happy_events_thumb(get_the_ID(), 'post-thumbnail', true, false, true, false, true, true, false);
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
	</div>
</article>
<!--_________________________ Finish Standard Article _________________________ -->

