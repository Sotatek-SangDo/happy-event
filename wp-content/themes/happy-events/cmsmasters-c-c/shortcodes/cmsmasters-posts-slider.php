<?php
/**
 * @package 	WordPress
 * @subpackage 	Happy Events
 * @version		1.0.1
 * 
 * Content Composer Posts Slider Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));


$unique_id = $shortcode_id;


$this->posts_slider_atts = array(
	'cmsmasters_post_metadata' => 		$blog_metadata, 
	'cmsmasters_project_metadata' => 	$portfolio_metadata 
);


if (!isset($post_type) || $post_type == '') {
	$post_type = 'post';
}


$args = array( 
	'post_type' => 				$post_type,
	'orderby' => 				$orderby, 
	'order' => 					$order, 
	'posts_per_page' => 		$count, 
	'ignore_sticky_posts' => 	true 
);


if ($post_type == 'post' && $blog_categories != '') {
	$args['category_name'] = $blog_categories;
} elseif ($post_type == 'project' && $portfolio_categories != '') {
	$cat_array = explode(",", $portfolio_categories);
	
	$args['tax_query'] = array(
		array( 
			'taxonomy' => 	'pj-categs', 
			'field' => 		'slug', 
			'terms' => 		$cat_array 
		)
	);
}


$query = new WP_Query($args);


$pause = ($pause == '' ? 0 : $pause);

$autoplay = ($pause > 0 ? $pause * 1000 : 'false');


if ($post_type == 'post') {
	$columns = $amount;
}

if ($slider_nav_arrow == '') {
	$slider_nav_arrow = 'false';
}

$out = "";


if ($query->have_posts()) : 
	
	$out .= "<div class=\"cmsmasters_posts_slider" . 
		(($classes != '') ? ' ' . esc_attr($classes) : '') . 
	"\" " . 
		(($animation != '') ? ' data-animation="' . esc_attr($animation) . '"' : '') . 
		(($animation != '' && $animation_delay != '') ? ' data-delay="' . esc_attr($animation_delay) . '"' : '') . 
	">
		<div" . 
			" id=\"cmsmasters_slider_" . esc_attr($unique_id) . "\"" . 
			" class=\"cmsmasters_owl_slider owl-carousel\"" . 
			" data-items=\"" . esc_attr($columns) . "\"" . 
			" data-single-item=\"false\"" . 
			" data-auto-play=\"" . esc_attr($autoplay) . "\"" . 
			" data-pagination=\"false\"" . 
		">";
			
			
			while ($query->have_posts()) : $query->the_post();
				
				$out .= '<div class="cmsmasters_owl_slider_item">';
					
					if (get_post_format() != '') {
						if ($post_type == 'post') {
							$out .= cmsmasters_composer_ob_load_template('framework/postType/posts-slider/blog/' . get_post_format() . '.php', $this->posts_slider_atts);
						} elseif ($post_type == 'project') {
							$out .= cmsmasters_composer_ob_load_template('framework/postType/posts-slider/portfolio/' . get_post_format() . '.php', $this->posts_slider_atts);
						}
					} else {
						if ($post_type == 'post') {
							$out .= cmsmasters_composer_ob_load_template('framework/postType/posts-slider/blog/standard.php', $this->posts_slider_atts);
						} elseif ($post_type == 'project') {
							$out .= cmsmasters_composer_ob_load_template('framework/postType/posts-slider/portfolio/standard.php', $this->posts_slider_atts);
						}
					}
					
				$out .= '</div>';
				
			endwhile;
			
			
		$out .= '</div>' . 
	'</div>';

endif;


wp_reset_query();


echo $out;
