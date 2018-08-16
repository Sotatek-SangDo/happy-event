<?php
/**
 * @package 	WordPress
 * @subpackage 	Happy Events
 * @version 	1.0.0
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


function happy_events_theme_fonts() {
	$cmsmasters_option = happy_events_get_global_options();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Happy Events
 * @version 	1.0.0
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


/***************** Start Theme Font Styles ******************/
	
	/* Start Content Font */
	body,
	.cmsmasters_wrap_pagination .page-numbers.prev,
	.cmsmasters_wrap_pagination .page-numbers.next,
	.post_nav > span > span,
	.cmsmasters_toggles .cmsmasters_toggle_title a,
	.headline_text .entry-subtitle,
	.cmsmasters_pricing_table .feature_list .feature_link,
	.cmsmasters_post_cont_info,
	.cmsmasters_post_cont_info a,
	.cmsmasters_open_project .project_details_item_desc .cmsmastersLike,
	.widget > .product_list_widget .reviewer,
	.widget_tag_cloud a,
	.widget_rss ul li cite,
	.widget_rss ul li .rssSummary,
	.widget_custom_posts_tabs_entries .tab_comments li > p {
		font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_content_font_google_font']) . $cmsmasters_option['happy-events' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['happy-events' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['happy-events' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['happy-events' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['happy-events' . '_content_font_font_style'] . ";
	}
	
	.cmsmasters_icon_list_items li:before {
		line-height:" . $cmsmasters_option['happy-events' . '_content_font_line_height'] . "px;
	}
	
	.cmsmasters_quotes_grid .cmsmasters_quote_content {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_content_font_font_size'] + 1) . "px;
	}
	
	.header_top .meta_wrap > div[class^='cmsmasters-icon-']:before, 
	.header_top .meta_wrap > div[class^='cmsmasters_theme_icon_']:before, 
	.header_top .meta_wrap > div[class*='cmsmasters-icon-']:before, 
	.header_top .meta_wrap > div[class*='cmsmasters_theme_icon_']:before {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_content_font_font_size'] + 1) . "px;
	}
	
	.cmsmasters_quotes_slider .cmsmasters_quote_content {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_content_font_font_size'] + 3) . "px;
		line-height:" . ((int) $cmsmasters_option['happy-events' . '_content_font_line_height'] + 6). "px;
	}

	.cmsmasters_toggles .cmsmasters_toggle_title a, 
	.headline_text .entry-subtitle {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_content_font_font_size'] + 4) . "px;
	}
	
	.cmsmasters_open_project .project_details_item_desc .cmsmastersLike:before {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_content_font_font_size'] - 1) . "px;
	}
	
	.post_nav > span > span,
	.widget > .product_list_widget .reviewer,
	.widget_rss ul li cite,
	.widget_rss ul li .rssSummary,
	.widget_custom_twitter_entries .tweet_text,
	.widget_custom_twitter_entries .tweet_text a,
	.widget_custom_posts_tabs_entries .tab_comments li > p,
	.cmsmasters_quotes_grid .cmsmasters_quote_site,
	.cmsmasters_quotes_grid .cmsmasters_quote_site a {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_content_font_font_size'] - 2) . "px;
	}
	
	.header_top .meta_wrap,
	.header_top .meta_wrap a,
	.footer_copyright {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_content_font_font_size'] - 3) . "px;
	}
	
	.cmsmasters_open_profile .profile_details_item_desc, 
	.cmsmasters_open_profile .profile_features_item_desc, 
	.cmsmasters_open_project .project_details_item_desc, 
	.cmsmasters_open_project .project_features_item_desc, 
	.cmsmasters_open_profile .profile_details_item_desc * , 
	.cmsmasters_open_profile .profile_features_item_desc * , 
	.cmsmasters_open_project .project_details_item_desc * , 
	.cmsmasters_open_project .project_features_item_desc *,
	.cmsmasters_open_project .project_details .project_details_item_title,
	.cmsmasters_open_project .project_details .project_features_item_title,
	.cmsmasters_open_profile .profile_details .profile_details_item_title,
	.cmsmasters_open_profile .profile_details .profile_features_item_title {
		line-height:" . ((int) $cmsmasters_option['happy-events' . '_content_font_line_height'] - 2) . "px;
	}
	
	.error .error_wrap .error_inner .error_title {
		font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_content_font_google_font']) . $cmsmasters_option['happy-events' . '_content_font_system_font'] . ";
	}
	
	.widget_tag_cloud a {
		line-height:30px; /* static */
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	a,
	.cmsmasters_notice .notice_content,
	.cmsmasters_breadcrumbs span,
	.cmsmasters_breadcrumbs a,
	.cmsmasters_twitter_wrap .cmsmasters_twitter_item_content {
		font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_link_font_google_font']) . $cmsmasters_option['happy-events' . '_link_font_system_font'] . ";
		font-size:" . $cmsmasters_option['happy-events' . '_link_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['happy-events' . '_link_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['happy-events' . '_link_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['happy-events' . '_link_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['happy-events' . '_link_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['happy-events' . '_link_font_text_decoration'] . ";
	}
	
	a:hover {
		text-decoration:" . $cmsmasters_option['happy-events' . '_link_hover_decoration'] . ";
	}
	
	.cmsmasters_breadcrumbs span, 
	.cmsmasters_breadcrumbs a {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_link_font_font_size'] - 2) . "px;
	}
	/* Finish Link Font */
	
	
	/* Start Navigation Title Font */
	.menu-item-mega-container > ul > li.menu-item > a .nav_title,
	.navigation > li > a,
	.top_line_nav > li > a,
	.footer_nav > li > a {
		font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_nav_title_font_google_font']) . $cmsmasters_option['happy-events' . '_nav_title_font_system_font'] . ";
		font-size:" . $cmsmasters_option['happy-events' . '_nav_title_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['happy-events' . '_nav_title_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['happy-events' . '_nav_title_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['happy-events' . '_nav_title_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['happy-events' . '_nav_title_font_text_transform'] . ";
	}
	
	@media only screen and (min-width: 1025px) and (max-width: 1440px) {
		.mid_nav > li > a {
			font-size:" . ((int) $cmsmasters_option['happy-events' . '_nav_title_font_font_size'] - 1) . "px;
		}
	}
	
	.nav_item_wrap .nav_subtitle,
	.top_line_nav > li > a, 
	ul.navigation > li > a .nav_tag	{
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_nav_title_font_font_size'] - 2) . "px;
	}
	
	@media only screen and (max-width: 1024px) {
		.header_top .top_line_nav ul li a {
			font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_nav_title_font_google_font']) . $cmsmasters_option['happy-events' . '_nav_title_font_system_font'] . ";
			font-size:" . ((int) $cmsmasters_option['happy-events' . '_nav_title_font_font_size'] - 2) . "px;
			line-height:" . $cmsmasters_option['happy-events' . '_nav_title_font_line_height'] . "px;
			font-weight:" . $cmsmasters_option['happy-events' . '_nav_title_font_font_weight'] . ";
			font-style:" . $cmsmasters_option['happy-events' . '_nav_title_font_font_style'] . ";
			text-transform:" . $cmsmasters_option['happy-events' . '_nav_title_font_text_transform'] . ";
		}
	}
	
	.footer_nav > li > a {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_nav_title_font_font_size'] - 3) . "px;
	}
	
	.nav_item_wrap .nav_subtitle, 
	ul.navigation > li > a .nav_tag,
	.footer_nav > li > a {
		line-height:" . ((int) $cmsmasters_option['happy-events' . '_nav_title_font_line_height'] - 2) . "px;
	}
	
	.navigation > li > div > ul > li > a {
		font-weight:" . $cmsmasters_option['happy-events' . '_nav_title_font_font_weight'] . ";
	}
	
	.nav_item_wrap .nav_subtitle {
		font-weight:300; /* static */
		text-transform:none; /* static */
	}
	/* Finish Navigation Title Font */
	
	
	/* Start Navigation Dropdown Font */
	.navigation ul li a,
	.top_line_nav ul li a {
		font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_nav_dropdown_font_google_font']) . $cmsmasters_option['happy-events' . '_nav_dropdown_font_system_font'] . ";
		font-size:" . $cmsmasters_option['happy-events' . '_nav_dropdown_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['happy-events' . '_nav_dropdown_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['happy-events' . '_nav_dropdown_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['happy-events' . '_nav_dropdown_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['happy-events' . '_nav_dropdown_font_text_transform'] . ";
	}
	
	@media only screen and (max-width: 1024px) {
		.menu-item-mega-container > ul > li.menu-item > a .nav_title, 
		.navigation li a .nav_title, 
		.navigation li a {
			font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_nav_dropdown_font_google_font']) . $cmsmasters_option['happy-events' . '_nav_dropdown_font_system_font'] . ";
			font-size:" . $cmsmasters_option['happy-events' . '_nav_dropdown_font_font_size'] . "px;
			line-height:" . $cmsmasters_option['happy-events' . '_nav_dropdown_font_line_height'] . "px;
			font-weight:" . $cmsmasters_option['happy-events' . '_nav_dropdown_font_font_weight'] . ";
			font-style:" . $cmsmasters_option['happy-events' . '_nav_dropdown_font_font_style'] . ";
			text-transform:" . $cmsmasters_option['happy-events' . '_nav_dropdown_font_text_transform'] . ";
		}
	}
	
	.navigation > li > div > ul > li > a {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_nav_dropdown_font_font_size'] - 1) . "px;
	}
	/* Finish Navigation Dropdown Font */
	
	
	/* Start H1 Font */
	h1,
	h1 a,
	.logo .title {
		font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_h1_font_google_font']) . $cmsmasters_option['happy-events' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['happy-events' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['happy-events' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['happy-events' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['happy-events' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['happy-events' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['happy-events' . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_dropcap {
		font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_h1_font_google_font']) . $cmsmasters_option['happy-events' . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['happy-events' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['happy-events' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['happy-events' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['happy-events' . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_icon_list_items.cmsmasters_icon_list_icon_type_number .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	.cmsmasters_icon_box.box_icon_type_number:before,
	.cmsmasters_icon_box.cmsmasters_icon_heading_left.box_icon_type_number .icon_box_heading:before {
		font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_button_font_google_font']) . $cmsmasters_option['happy-events' . '_button_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['happy-events' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['happy-events' . '_h1_font_font_style'] . ";
	}

	.cmsmasters_dropcap.type1 {
		font-size:60px; /* static */
	}
	
	.cmsmasters_dropcap.type2 {
		font-size:40px; /* static */
	}
	
	.cmsmasters_counters.counters_type_vertical .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap {
		line-height:36px; /* static */
	}
	
	.headline_outer .headline_inner .headline_icon:before {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_h1_font_font_size'] + 5) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon:before {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_h1_font_line_height'] + 15) . "px;
	}
	.headline_outer .headline_inner.align_left .headline_icon + .cmsmasters_breadcrumbs, 
	.headline_outer .headline_inner.align_left .headline_icon {
		padding-left:" . ((int) $cmsmasters_option['happy-events' . '_h1_font_font_size'] + 45) . "px;
	}
	
	.headline_outer .headline_inner.align_right .headline_icon + .cmsmasters_breadcrumbs, 
	.headline_outer .headline_inner.align_right .headline_icon {
		padding-right:" . ((int) $cmsmasters_option['happy-events' . '_h1_font_font_size'] + 45) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon {
		padding-top:" . ((int) $cmsmasters_option['happy-events' . '_h1_font_line_height'] + 15) . "px;
	}
	
	@media only screen and (max-width: 1024px) {
		.cmsmasters_open_post .cmsmasters_post_header .cmsmasters_post_title {
			font-size:" . ((int) $cmsmasters_option['happy-events' . '_h1_font_line_height'] - 20) . "px;
		}
	}
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	h2,
	h2 a,
	.post_nav a,
	.subpage_nav > a,
	.subpage_nav > span,
	.cmsmasters_table caption,
	.cmsmasters_profile_title,
	.cmsmasters_profile_title a,
	.cmsmasters_pricing_table .pricing_title {
		font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_h2_font_google_font']) . $cmsmasters_option['happy-events' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['happy-events' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['happy-events' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['happy-events' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['happy-events' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['happy-events' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['happy-events' . '_h2_font_text_decoration'] . ";
	}
	
	.cmsmasters_post_default .cmsmasters_post_default_inner .cmsmasters_post_header .cmsmasters_post_title a {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_h2_font_font_size'] + 4) . "px;
		line-height:" . ((int) $cmsmasters_option['happy-events' . '_h2_font_line_height'] + 4) . "px;
	}
	
	.error .error_wrap .error_inner .error_subtitle {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_h2_font_font_size'] + 10) . "px;
		line-height:" . ((int) $cmsmasters_option['happy-events' . '_h2_font_line_height'] + 10) . "px;
	}
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a, 
	h3,
	h3 a,
	.cmsmasters_stats .cmsmasters_stat_wrap .cmsmasters_stat_title,
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat_title {
		font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_h3_font_google_font']) . $cmsmasters_option['happy-events' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['happy-events' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['happy-events' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['happy-events' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['happy-events' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['happy-events' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['happy-events' . '_h3_font_text_decoration'] . ";
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	h4,
	h4 a,
	.cmsmasters_post_timeline .cmsmasters_post_date .cmsmasters_day, 
	.comment-reply-title small a, 
	.about_author_cont_title,
	.cmsmasters_open_project .project_details_title,
	.cmsmasters_open_profile .cmsmasters_profile_subtitle, 
	.cmsmasters_open_profile .profile_details_title,
	.comment-reply-title,
	.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap,
	.cmsmasters_wrap_pagination .page-numbers,
	.subpage_nav a,
	.subpage_nav span {
		font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_h4_font_google_font']) . $cmsmasters_option['happy-events' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['happy-events' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['happy-events' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['happy-events' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['happy-events' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['happy-events' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['happy-events' . '_h4_font_text_decoration'] . ";
	}

	.cmsmasters_post_timeline .cmsmasters_post_date .cmsmasters_day {
		font-size:28px; /* static */
		line-height:50px; /* static */
	}
	
	.about_author_cont_title,
	.cmsmasters_wrap_pagination .page-numbers,
	.subpage_nav a,
	.subpage_nav span {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_h4_font_font_size'] + 2) . "px;
		line-height:" . ((int) $cmsmasters_option['happy-events' . '_h4_font_line_height'] + 2) . "px;
	}
	
	.about_author_cont_title {
		text-transform:none;
	}
	
	.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_h4_font_font_size'] - 2) . "px;
	}
	
	.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat_container {
		height:" . ((int) $cmsmasters_option['happy-events' . '_h4_font_line_height'] * 2 + 220 + 13) . "px;
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	h5,
	h5 a,
	#wp-calendar tbody td,
	#wp-calendar tbody th,
	.cmsmasters_archive_item__service_duration,
	.cmsmasters_archive_item__service_participants,
	.cmsmasters_archive_type .cmsmasters_archive_item_info *,
	.cmsmasters_archive_type .cmsmasters_archive_item_type,
	.cmsmasters_single_slider_item_service_price,
	.cmsmasters_post_tags > a,
	.cmsmasters_post_cont_info,
	.wp-caption .wp-caption-text,
	.gallery-item .wp-caption-text,
	.cmsmasters_img.with_caption,
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_title,
	.cmsmasters_pricing_table .cmsmasters_price_wrap,
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat_counter_wrap,
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap,
	.cmsmasters_portfolio_project_price,
	.cmsmasters_post_read_more {
		font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_h5_font_google_font']) . $cmsmasters_option['happy-events' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['happy-events' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['happy-events' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['happy-events' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['happy-events' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['happy-events' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['happy-events' . '_h5_font_text_decoration'] . ";
	}
	
	.cmsmasters_table thead th,
	.cmsmasters_table tfoot td {
		font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_h5_font_google_font']) . $cmsmasters_option['happy-events' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['happy-events' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['happy-events' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['happy-events' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['happy-events' . '_h5_font_font_style'] . ";
		text-decoration:" . $cmsmasters_option['happy-events' . '_h5_font_text_decoration'] . ";
	}
	
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap {
		font-size:36px; /* static */
	}

 	#wp-calendar tbody td, 
	#wp-calendar tbody th, 
	.cmsmasters_archive_type .cmsmasters_archive_item_type {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_h5_font_font_size'] - 2) . "px;
	}
	
	.cmsmasters_archive_type .cmsmasters_archive_item_info *, 
	.cmsmasters_post_tags > a, 
	.wp-caption .wp-caption-text, 
	.gallery-item .wp-caption-text, 
	.cmsmasters_img.with_caption {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_h5_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['happy-events' . '_h5_font_line_height'] - 2) . "px;
	}
	
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat_counter_wrap {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_h5_font_font_size'] + 22) . "px;
		line-height:" . ((int) $cmsmasters_option['happy-events' . '_h5_font_line_height'] + 22) . "px;
	}
	
	.cmsmasters_pricing_table .cmsmasters_price_wrap {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_h5_font_font_size'] + 28) . "px;
		line-height:" . ((int) $cmsmasters_option['happy-events' . '_h5_font_line_height'] + 28) . "px;
	}
	
	.cmsmasters_single_slider_item_service_price {
		font-size:18px; /* static */
		line-height:34px; /* static */
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	h6,
	h6 a,
	#wp-calendar caption,
	#wp-calendar thead,
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_archive > li,
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a,
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a,
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_archive > li > a,
	.cmsmasters_archive_type .cmsmasters_archive_item_service_participants,
	.cmsmasters_archive_type .cmsmasters_archive_item_service_duration,
	.cmsmasters_archive_type .cmsmasters_archive_item_date_wrap,
	.cmsmasters_archive_type .cmsmasters_archive_item_date_wrap a,
	.cmsmasters_service_search form label,
	.portfolio.puzzle .cmsmasters_project_category,
	.portfolio.puzzle .cmsmasters_project_category a,
	.portfolio.grid .cmsmasters_project_category,
	.portfolio.grid .cmsmasters_project_category a,
	.cmsmasters_portfolio_project_duration,
	.cmsmasters_portfolio_project_participants,
	.portfolio.puzzle .cmsmasters_project_comments a,
	.portfolio.puzzle .cmsmasters_project_likes a,
	.portfolio.grid .project_outer_image_wrap_meta .cmsmasters_project_comments a,
	.portfolio.grid .project_outer_image_wrap_meta .cmsmasters_project_likes a,
	.cmsmasters_open_project .project_details_item_title,
	.cmsmasters_open_project .project_features_item_title,
	.cmsmasters_open_profile .profile_details_item_title,
	.cmsmasters_open_profile .profile_features_item_title,
	.cmsmasters_profile_subtitle,
	.cmsmasters_single_slider_item_service .cmsmasters_single_slider_item_inner_meta span,
	.cmsmasters_slider_project .project_outer_image_wrap_meta_bottom > span a,
	.cmsmasters_slider_project .cmsmasters_slider_project_inner .cmsmasters_portfolio_project_footer,
	.cmsmasters_slider_post .cmsmasters_post_top_wrap .entry-meta *,
	.cmsmasters_post_puzzle .cmsmasters_post_top_wrap .entry-meta *,
	.cmsmasters_post_masonry .cmsmasters_post_top_wrap .entry-meta *,
	.cmsmasters_post_timeline .cmsmasters_post_top_wrap .entry-meta *,
	.cmsmasters_post_timeline .cmsmasters_post_date .cmsmasters_mon,
	.cmsmasters_post_cont_info_top *,
	.cmsmasters_comment_item_date,
	.cmsmasters_comment_item_cont_info > a,
	.cmsmasters_slider_post_read_more,
	.share_posts a,
	.cmsmasters_open_profile h3,
	.cmsmasters_twitter_wrap .published,
	.form_info label,
	.comment-respond p label,
	.widget .widgettitle,
	.widget_rss .rss-date,
	.widget_rss .widgettitle a,
	.widget_recent_entries ul li span,
	.widget_custom_twitter_entries .tweet_time,
	.widget_custom_posts_tabs_entries .published,
	.widget_custom_posts_tabs_entries .cmsmasters_lpr_tabs_cont > a,
	.cmsmasters_slider_project .project_outer_image_wrap_meta_bottom .cmsmasters_slider_project_category,
	.cmsmasters_slider_project .project_outer_image_wrap_meta_bottom .cmsmasters_slider_project_category a,
	.cmsmasters_slider_post .cmsmasters_post_cont_info,
	.cmsmasters_slider_post .cmsmasters_post_cont_info a,
	.cmsmasters_post_default .cmsmasters_post_info *,
	.blog .cmsmasters_post_cont_info,
	.blog .cmsmasters_post_cont_info a,
	.page #fbuilder .fields > label,
	.project_navi a {
		font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_h6_font_google_font']) . $cmsmasters_option['happy-events' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['happy-events' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['happy-events' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['happy-events' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['happy-events' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['happy-events' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['happy-events' . '_h6_font_text_decoration'] . ";
	}
	
	.cmsmasters_post_masonry .cmsmasters_post_top_wrap .entry-meta span:before, 
	.cmsmasters_post_masonry .cmsmasters_post_top_wrap .entry-meta a:before, 
	.cmsmasters_post_timeline .cmsmasters_post_top_wrap .entry-meta span:before, 
	.cmsmasters_post_timeline .cmsmasters_post_top_wrap .entry-meta a:before {
		font-size:13px; /* static */
	}
	
	.cmsmasters_slider_post_read_more {
		font-weight:600; /* static */
	}
	
	.widget .widgettitle {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_h6_font_font_size'] + 2) . "px;
		line-height:" . ((int) $cmsmasters_option['happy-events' . '_h6_font_line_height'] + 2) . "px;
	}
	
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_archive > li, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_archive > li > a {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_h6_font_font_size'] + 4) . "px;
		line-height:" . ((int) $cmsmasters_option['happy-events' . '_h6_font_line_height'] + 4) . "px;
	}

	.cmsmasters_slider_project .cmsmasters_slider_project_inner .cmsmasters_portfolio_project_footer span {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_h6_font_font_size'] - 1) . "px;
	}
	
	.widget_rss .rss-date, 
	.widget_recent_entries ul li span, 
	#wp-calendar thead, 
	.portfolio.grid .project_outer_image_wrap_meta .cmsmasters_project_comments a, 
	.portfolio.grid .project_outer_image_wrap_meta .cmsmasters_project_likes a, 
	.cmsmasters_single_slider_item_service .cmsmasters_single_slider_item_inner_meta span, 
	.cmsmasters_comment_item_date {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_h6_font_font_size'] - 2) . "px;
	}
	
	.cmsmasters_post_timeline .cmsmasters_post_date .cmsmasters_mon {
		font-size:12px; /*static*/
		line-height:30px; /*static*/
	}
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	.cmsmasters_button, 
	.button, 
	input[type=submit], 
	input[type=button], 
	button {
		font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_button_font_google_font']) . $cmsmasters_option['happy-events' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['happy-events' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['happy-events' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['happy-events' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['happy-events' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['happy-events' . '_button_font_text_transform'] . ";
	}
	
	#page .cmsmasters_service_search .cmsmasters_service_search_min input {
		line-height:" . $cmsmasters_option['happy-events' . '_button_font_line_height'] . "px;
	}
	
	.cmsmasters_tabs .cmsmasters_tabs_list_item a {
		line-height:" . ((int) $cmsmasters_option['happy-events' . '_button_font_line_height'] - 10) . "px;
	}
	
	a.cmsmasters_project_filter_but:before {
		font-size:14px; /* static */
	}
	
	.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a, 
	a.cmsmasters_project_sort_but, 
	a.cmsmasters_project_filter_but {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_button_font_font_size'] - 2) . "px;
	}
	
	.gform_wrapper .gform_footer input.button, 
	.gform_wrapper .gform_footer input[type=submit] {
		font-size:" . $cmsmasters_option['happy-events' . '_button_font_font_size'] . "px !important;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg, 
	.cmsmasters_button.cmsmasters_but_icon_divider, 
	.cmsmasters_button.cmsmasters_but_icon_inverse {
		padding-left:" . ((int) $cmsmasters_option['happy-events' . '_button_font_line_height'] + 20) . "px;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_divider:before, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:before, 
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_divider:after, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:after {
		width:" . $cmsmasters_option['happy-events' . '_button_font_line_height'] . "px;
	}
	
	a.cmsmasters_project_sort_but, 
	a.cmsmasters_project_filter_but, 
	.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a {
		line-height:" . ((int) $cmsmasters_option['happy-events' . '_button_font_line_height'] - 6) . "px;
		text-transform:none;
	}
	
	a.cmsmasters_project_sort_but:before, 
	a.cmsmasters_project_filter_but:before {
		font-size:20px; /* static */
		line-height:" . ((int) $cmsmasters_option['happy-events' . '_button_font_line_height'] - 6) . "px;
	}
	
	.cmsmasters_pricing_table .cmsmasters_period {
		font-weight:" . $cmsmasters_option['happy-events' . '_button_font_font_weight'] . ";
	}
	/* Finish Button Font */
	
	
	/* Start Small Text Font */
	small,
	form .formError .formErrorContent {
		font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_small_font_google_font']) . $cmsmasters_option['happy-events' . '_small_font_system_font'] . ";
		font-size:" . $cmsmasters_option['happy-events' . '_small_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['happy-events' . '_small_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['happy-events' . '_small_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['happy-events' . '_small_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['happy-events' . '_small_font_text_transform'] . ";
	}
	
	.gform_wrapper .description, 
	.gform_wrapper .gfield_description, 
	.gform_wrapper .gsection_description, 
	.gform_wrapper .instruction {
		font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_small_font_google_font']) . $cmsmasters_option['happy-events' . '_small_font_system_font'] . " !important;
		font-size:" . $cmsmasters_option['happy-events' . '_small_font_font_size'] . "px !important;
		line-height:" . $cmsmasters_option['happy-events' . '_small_font_line_height'] . "px !important;
	}
	/* Finish Small Text Font */
	
	
	/* Start Text Fields Font */
	input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	textarea,
	select,
	option,
	code {
		font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_input_font_google_font']) . $cmsmasters_option['happy-events' . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option['happy-events' . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['happy-events' . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['happy-events' . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['happy-events' . '_input_font_font_style'] . ";
	}
	
	.gform_wrapper input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	.gform_wrapper textarea, 
	.gform_wrapper select {
		font-size:" . $cmsmasters_option['happy-events' . '_input_font_font_size'] . "px !important;
	}
	/* Finish Text Fields Font */
	
	
	/* Start Blockquote Font */
	blockquote {
		font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_quote_font_google_font']) . $cmsmasters_option['happy-events' . '_quote_font_system_font'] . ";
		font-size:" . $cmsmasters_option['happy-events' . '_quote_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['happy-events' . '_quote_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['happy-events' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['happy-events' . '_quote_font_font_style'] . ";
	}
	
	q {
		font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_quote_font_google_font']) . $cmsmasters_option['happy-events' . '_quote_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['happy-events' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['happy-events' . '_quote_font_font_style'] . ";
	}
	/* Finish Blockquote Font */
	
/***************** Finish Theme Font Styles ******************/


";


if (CMSMASTERS_DONATIONS && class_exists('Cmsmasters_Donations')) {

	$custom_css .= "
/***************** Start CMSMASTERS Donations Font Styles ******************/
	
	/* Start Content Font */
	/* Finish Content Font */
	
	
	/* Start Link Font */
	/* Finish Link Font */
	
	
	/* Start Navigation Title Font */
	/* Finish Navigation Title Font */
	
	
	/* Start H1 Font */
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	/* Finish Button Font */
	
	
	/* Start Small Text Font */
	/* Finish Small Text Font */
	
/***************** Finish CMSMASTERS Donations Font Styles ******************/


";

}


if (CMSMASTERS_WOOCOMMERCE) {

	$custom_css .= "
/***************** Start WooCommerce Font Styles ******************/
	
	/* Start Content Font */
	.widget_price_filter .price_slider_amount .price_label, 
	.widget_shopping_cart .total span, 
	.widget_shopping_cart .total, 
	.widget_shopping_cart .total strong, 
	.shop_table.woocommerce-checkout-review-order-table .amount, 
	.shop_table.woocommerce-checkout-review-order-table .amount span, 
	.shop_table.woocommerce-checkout-review-order-table tbody strong, 
	.shop_table.woocommerce-checkout-review-order-table tbody th, 
	.shop_table.woocommerce-checkout-review-order-table tbody td, 
	.shop_table.woocommerce-checkout-review-order-table tfoot td, 
	.shop_table.woocommerce-checkout-review-order-table tfoot th, 
	.shop_table td > .amount span, 
	.shop_table td > .amount, 
	.shop_table td strong > .amount, 
	.shop_table td strong > .amount span, 
	.cmsmasters_dynamic_cart .amount span, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .total strong, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .total, 
	.shop_table.woocommerce-checkout-review-order-table .product-name dl, 
	.shop_table.order_details .product-name dl {
		font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_content_font_google_font']) . $cmsmasters_option['happy-events' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['happy-events' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['happy-events' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['happy-events' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['happy-events' . '_content_font_font_style'] . ";
	}
	
	.shop_table.woocommerce-checkout-review-order-table .product-name dl, 
	.shop_table.order_details .product-name dl {
		text-transform:none;
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	/* Finish Link Font */
	
	
	/* Start H1 Font */
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	.cmsmasters_single_product .price {
		font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_h2_font_google_font']) . $cmsmasters_option['happy-events' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['happy-events' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['happy-events' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['happy-events' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['happy-events' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['happy-events' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['happy-events' . '_h2_font_text_decoration'] . ";
	}
	
	.woocommerce-shipping-fields > h5 {
		line-height:" . $cmsmasters_option['happy-events' . '_h2_font_line_height'] . "px;
	}
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	.shop_table thead th, 
	.shop_table.woocommerce-checkout-review-order-table .order-total th, 
	.shop_table.woocommerce-checkout-review-order-table .order-total td, 
	.shop_table.order_details tfoot tr:last-child th, 
	.shop_table.order_details tfoot tr:last-child td {
		font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_h3_font_google_font']) . $cmsmasters_option['happy-events' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['happy-events' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['happy-events' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['happy-events' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['happy-events' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['happy-events' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['happy-events' . '_h3_font_text_decoration'] . ";
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	.cmsmasters_woo_tabs .cmsmasters_tab_inner h2, 
	.shop_table .product-name a, 
	.shop_table.order_details tfoot tr th {
		font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_h4_font_google_font']) . $cmsmasters_option['happy-events' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['happy-events' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['happy-events' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['happy-events' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['happy-events' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['happy-events' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['happy-events' . '_h4_font_text_decoration'] . ";
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.cmsmasters_single_product .cmsmasters_product_info_wrap .price,
	.cmsmasters_single_product .cmsmasters_product_info_wrap .price span,
	.woocommerce-view-order .shop_table.order_details tbody *,
	.woocommerce-view-order .shop_table.order_details tfoot *,
	.woocommerce-order-received .shop_table.order_details tbody *,
	.woocommerce-order-received .shop_table.order_details tfoot *,
	.woocommerce-checkout-payment .payment_methods label,
	.cart_totals table .amount,
	.cart_totals table .amount span,
	.cmsmasters_woo_comments .cmsmasters_comment_item .cmsmasters_comment_item_title,
	.cmsmasters_single_product .product_meta,
	.cmsmasters_single_product .product_meta a,
	.cmsmasters_single_product .product_meta > span,
	.cmsmasters_single_product .cmsmasters_product_info_wrap .price,
	.cmsmasters_single_product .cmsmasters_product_info_wrap .price span,
	.cmsmasters_product .price,
	.cmsmasters_product .cmsmasters_product_cat,
	.cmsmasters_product .cmsmasters_product_cat a,
	.cmsmasters_woo_wrap_result .woocommerce-result-count,
	.shop_attributes th,
	.shop_table.order_details tfoot tr td,
	ul.order_details strong,
	ul.order_details strong .amount,
	ul.order_details strong .amount span,
	.widget > .product_list_widget .amount,
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list a,
	.cmsmasters_dynamic_cart .quantity,
	.cmsmasters_dynamic_cart .quantity .amount span	{
		font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_h5_font_google_font']) . $cmsmasters_option['happy-events' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['happy-events' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['happy-events' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['happy-events' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['happy-events' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['happy-events' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['happy-events' . '_h5_font_text_decoration'] . ";
	}
	
	.widget > .product_list_widget .amount, 
	.widget > .product_list_widget .amount span, 
	.cmsmasters_product .cmsmasters_product_cat, 
	.cmsmasters_product .cmsmasters_product_cat a, 
	.cmsmasters_dynamic_cart .quantity, 
	.cmsmasters_dynamic_cart .quantity .amount span,
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list a {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_h5_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['happy-events' . '_h5_font_line_height'] - 2) . "px;
	}

	.shop_table.order_details tfoot tr td, 
	ul.order_details strong {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_h5_font_font_size'] + 2) . "px;
		line-height:" . ((int) $cmsmasters_option['happy-events' . '_h5_font_line_height'] + 2) . "px;
	}

	.cmsmasters_single_product .cmsmasters_product_info_wrap .price span {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_h5_font_font_size'] + 4) . "px;
		line-height:" . ((int) $cmsmasters_option['happy-events' . '_h5_font_line_height'] + 2) . "px;
	}
	
	.cmsmasters_single_product .cmsmasters_product_info_wrap .price,
	.cmsmasters_product .price span, 
	.cmsmasters_product .price {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_h5_font_font_size'] + 4) . "px;
		line-height:" . ((int) $cmsmasters_option['happy-events' . '_h5_font_line_height'] + 4) . "px;
	}
	
	.widget_product_tag_cloud a {
		line-height:28px; /* static */
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	.widget_shopping_cart .cart_list .quantity, 
	.widget_shopping_cart .cart_list .quantity span, 
	.woocommerce-view-order #page .shop_table.order_details tfoot tr:last-child td, 
	.woocommerce-view-order #page .shop_table.order_details tfoot tr:last-child th, 	
	.woocommerce-order-received #page .shop_table.order_details tfoot tr:last-child td, 
	.woocommerce-order-received #page .shop_table.order_details tfoot tr:last-child th, 
	ul.order_details, 
	.widget_product_tag_cloud a,
	.widget > .product_list_widget a,
	.widget_shopping_cart .cart_list a,
	.widget_layered_nav ul li,
	.widget_layered_nav ul li a,
	.widget_layered_nav_filters ul li,
	.widget_layered_nav_filters ul li a,
	.widget_product_categories ul li,
	.widget_product_categories ul li a,
	.widget_archive ul li a,
	.widget_categories ul li,
	.widget_categories ul li a,
	.widget_meta ul li,
	.widget_meta ul li a,
	.shop_table.woocommerce-checkout-review-order-table .order-total th, 
	.shop_table.woocommerce-checkout-review-order-table .order-total td, 
	.woocommerce-billing-fields label, 
	.woocommerce-shipping-fields label, 
	.cmsmasters_calc_shipping_btn,
	.shipping-calculator-button, 
	.cart_totals table th, 
	.shop_table thead th {
		font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_h6_font_google_font']) . $cmsmasters_option['happy-events' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['happy-events' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['happy-events' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['happy-events' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['happy-events' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['happy-events' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['happy-events' . '_h6_font_text_decoration'] . ";
	}
	
	.widget_layered_nav ul li, 
	.widget_layered_nav ul li a, 
	.widget_layered_nav_filters ul li, 
	.widget_layered_nav_filters ul li a, 
	.widget_product_categories ul li, 
	.widget_product_categories ul li a,
	.widget_archive ul li a,
	.widget_categories ul li,
	.widget_categories ul li a,
	.widget_meta ul li,
	.widget_meta ul li a {
		line-height:" . ((int) $cmsmasters_option['happy-events' . '_h6_font_line_height'] + 2) . "px;
	}
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	.cmsmasters_product .cmsmasters_product_add_inner > a {		
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_button_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['happy-events' . '_button_font_line_height'] + 6) . "px;
		font-weight:" . $cmsmasters_option['happy-events' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['happy-events' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['happy-events' . '_button_font_text_transform'] . ";
	}
	
	#page .shop_table td .quantity input, 
	#page .cmsmasters_single_product .cart .quantity .input-text {
		line-height:" . $cmsmasters_option['happy-events' . '_button_font_font_size'] . "px;
	}	
	
	.cmsmasters_product .cmsmasters_product_add_inner {
		height:" . ((int) $cmsmasters_option['happy-events' . '_button_font_line_height'] + 6) . "px;
	}
	
	.widget_price_filter .price_slider_amount .button, 
	.widget_shopping_cart .buttons .button, 
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .buttons .button, 
	.onsale, 
	.out-of-stock, 
	.stock,
	.woocommerce-MyAccount-navigation > ul > li a {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_button_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['happy-events' . '_button_font_line_height'] - 12) . "px;
		font-weight:" . $cmsmasters_option['happy-events' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['happy-events' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['happy-events' . '_button_font_text_transform'] . ";
	}
	/* Finish Button Font */
	
	
	/* Start Small Text Font */
	/* Finish Small Text Font */

/***************** Finish WooCommerce Font Styles ******************/


";

}


if (CMSMASTERS_EVENTS_CALENDAR) {

	$custom_css .= "
/***************** Start Events Font Styles ******************/

	/* Start Content Font */
	.tribe-mini-calendar tbody, 
	.tribe-mini-calendar tbody a, 
	.widget .vcalendar .cmsmasters_widget_event_info, 
	.widget .vcalendar .cmsmasters_widget_event_info a, 
	.tribe-mini-calendar-list-wrapper .cmsmasters_widget_event_info, 
	.tribe-mini-calendar-list-wrapper .cmsmasters_widget_event_info a, 
	.tribe-this-week-events-widget .tribe-events-page-title, 
	.tribe-this-week-events-widget .tribe-this-week-widget-header-date {
		font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_content_font_google_font']) . $cmsmasters_option['happy-events' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['happy-events' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['happy-events' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['happy-events' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['happy-events' . '_content_font_font_style'] . ";
	}
	
	.widget .vcalendar .cmsmasters_widget_event_info, 
	.widget .vcalendar .cmsmasters_widget_event_info a, 
	.tribe-mini-calendar-list-wrapper .cmsmasters_widget_event_info, 
	.tribe-mini-calendar-list-wrapper .cmsmasters_widget_event_info a, 
	.tribe-this-week-events-widget .tribe-this-week-widget-header-date {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_content_font_font_size'] - 1) . "px;
	}
	
	.tribe-mini-calendar tbody, 
	.tribe-mini-calendar tbody a {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_content_font_font_size'] - 2) . "px;
	}
	
	.tribe-events-grid .column.first, 
	.tribe-events-grid .tribe-week-grid-hours {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_content_font_font_size'] - 4) . "px;
	}
	
	.tribe-mini-calendar tbody a {
		font-weight:normal;
	}
	
	.tribe-this-week-events-widget .tribe-events-page-title {
		text-transform:none;
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	/* Finish Link Font */
	
	
	/* Start H1 Font */
	@media only screen and (max-width: 1024px) {
		.headline_outer .headline_inner .headline_content .headline_text .entry-title {
			font-size:" . ((int) $cmsmasters_option['happy-events' . '_h1_font_line_height'] - 20) . "px;
		}
	}
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	.tribe-events-countdown-widget .tribe-countdown-time, 
	.tribe-events-page-title, 
	.tribe-events-page-title a, 
	.tribe-mobile-day .tribe-mobile-day-date {
		font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_h2_font_google_font']) . $cmsmasters_option['happy-events' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['happy-events' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['happy-events' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['happy-events' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['happy-events' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['happy-events' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['happy-events' . '_h2_font_text_decoration'] . ";
	}
	
	.tribe-events-page-title, 
	.tribe-events-page-title a {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_h2_font_font_size'] + 12) . "px;
		line-height:" . ((int) $cmsmasters_option['happy-events' . '_h2_font_line_height'] + 12) . "px;
	}
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	.tribe-events-countdown-widget .tribe-countdown-text, 
	.tribe-events-countdown-widget .tribe-countdown-text a, 
	table.tribe-events-calendar thead th {
		font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_h3_font_google_font']) . $cmsmasters_option['happy-events' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['happy-events' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['happy-events' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['happy-events' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['happy-events' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['happy-events' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['happy-events' . '_h3_font_text_decoration'] . ";
	}
	
	table.tribe-events-calendar thead th, 
	.tribe-events-list .tribe-events-event-cost, 
	.tribe-events-grid .tribe-grid-header span {
		text-transform:none;
	}
	
	@media only screen and (max-width: 787px) {
		#page table.tribe-events-calendar thead th {
			font-size:" . ((int) $cmsmasters_option['happy-events' . '_h3_font_font_size'] - 5) . "px;
		}
	}
	
	@media only screen and (max-width: 540px) {
		#page table.tribe-events-calendar thead th {
			font-size:" . ((int) $cmsmasters_option['happy-events' . '_h3_font_font_size'] - 10) . "px;
		}
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	.cmsmasters_single_event_meta .tribe-events-single-section-title {
		font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_h4_font_google_font']) . $cmsmasters_option['happy-events' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['happy-events' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['happy-events' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['happy-events' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['happy-events' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['happy-events' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['happy-events' . '_h4_font_text_decoration'] . ";
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	table.tribe-events-calendar tbody td .tribe-events-month-event-title,
	table.tribe-events-calendar tbody td .tribe-events-month-event-title a,
	#tribe-events-content > .tribe-events-button,
	.tribe-events-list .tribe-events-read-more,
	.cmsmasters_single_event .cmsmasters_single_event_header_right a,
	.tribe-events-venue .cmsmasters_events_venue_header_right a,
	.tribe-events-organizer .cmsmasters_events_organizer_header_right a,
	.tribe-events-widget-link a,
	.tribe-mobile-day .tribe-events-read-more,
	.tribe-this-week-events-widget .tribe-events-viewmore a {
		font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_h5_font_google_font']) . $cmsmasters_option['happy-events' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['happy-events' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['happy-events' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['happy-events' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['happy-events' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['happy-events' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['happy-events' . '_h5_font_text_decoration'] . ";
	}

	table.tribe-events-calendar tbody td .tribe-events-month-event-title, 
	table.tribe-events-calendar tbody td .tribe-events-month-event-title a {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_h5_font_font_size'] - 2) . "px;
	}	
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	.tribe-this-week-events-widget .tribe-this-week-event .duration, 
	.tribe-this-week-events-widget .tribe-this-week-event .tribe-venue, 
	.tribe-this-week-events-widget .tribe-this-week-event .tribe-venue a, 
	.tribe-this-week-events-widget .tribe-this-week-widget-header-date, 
	.tribe-events-venue-widget .tribe-venue-widget-venue-name a, 
	.tribe-events-countdown-widget .tribe-countdown-time span, 
	.tribe_mini_calendar_widget .tribe-mini-calendar-list-wrapper .cmsmasters_widget_event_info, 
	.tribe_mini_calendar_widget .tribe-mini-calendar-list-wrapper .cmsmasters_widget_event_info a, 	
	.cmsmasters_event_date .cmsmasters_event_day, 
	.cmsmasters_event_date .cmsmasters_event_mon, 
	.tribe-mini-calendar [id*=tribe-mini-calendar-month], 
	table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-], 
	table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-] a, 
	table.tribe-events-calendar thead th, 
	.tribe-events-tooltip .duration,
	.tribe-events-grid .column.first, 
	.tribe-events-grid .tribe-week-grid-hours, 
	.tribe-events-grid .tribe-grid-header span, 
	.tribe-events-photo .time-details, 
	.tribe-events-sub-nav li a, 
	.tribe-events-list .tribe-events-event-cost, 
	.tribe-events-day-time-slot > h5, 
	.tribe-events-list .tribe-events-list-separator-month, 
	.tribe-bar-filters-inner > div label, 
	.tribe-events-list .tribe-events-event-meta, 
	.tribe-events-list .tribe-events-event-meta a, 
	.tribe-events-photo .tribe-events-event-meta, 
	.tribe-events-photo .tribe-events-event-meta a, 
	.cmsmasters_single_event .tribe-events-schedule, 
	.cmsmasters_single_event .tribe-events-schedule a, 
	.tribe-events-venue .tribe-events-event-meta, 
	.tribe-events-venue .tribe-events-event-meta a, 
	.tribe-events-organizer .tribe-events-event-meta, 
	.tribe-events-organizer .tribe-events-event-meta a, 
	.tribe-mini-calendar thead th, 
	.tribe-events-venue-widget .vcalendar .cmsmasters_widget_event_info, 
	.tribe-events-venue-widget .vcalendar .cmsmasters_widget_event_info a, 
	.tribe-mobile-day .tribe-events-event-schedule-details, 
	.tribe-mobile-day .tribe-event-schedule-details,
	.cmsmasters_single_event_meta dt,
	.cmsmasters_single_event_meta dd a,
	.cmsmasters_single_event_meta .cmsmasters_event_meta_info_item_title,
	.cmsmasters_single_event_meta .cmsmasters_event_meta_info_item_descr,
	.cmsmasters_single_event_meta .cmsmasters_event_meta_info_item_descr a {
		font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_h6_font_google_font']) . $cmsmasters_option['happy-events' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['happy-events' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['happy-events' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['happy-events' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['happy-events' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['happy-events' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['happy-events' . '_h6_font_text_decoration'] . ";
	}

	.tribe-this-week-events-widget .tribe-this-week-event .duration, 
	.tribe-this-week-events-widget .tribe-this-week-event .tribe-venue, 
	.tribe-this-week-events-widget .tribe-this-week-event .tribe-venue a, 
	.tribe-this-week-events-widget .tribe-this-week-widget-header-date, 
	.tribe-events-venue-widget .vcalendar .cmsmasters_widget_event_info, 
	.tribe-events-venue-widget .vcalendar .cmsmasters_widget_event_info a, 
	.tribe_mini_calendar_widget .tribe-mini-calendar-list-wrapper .cmsmasters_widget_event_info, 
	.tribe_mini_calendar_widget .tribe-mini-calendar-list-wrapper .cmsmasters_widget_event_info a, 
	table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-], 
	table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-] a, 
	.tribe-events-tooltip .duration,
	.tribe-events-grid .column.first, 
	.tribe-events-grid .tribe-week-grid-hours, 
	.tribe-events-photo .time-details {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_h6_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['happy-events' . '_h6_font_line_height'] - 2) . "px;
	}

	.cmsmasters_single_event .tribe-events-schedule > div:before {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_h6_font_font_size'] + 6) . "px;
	}
	
	table.tribe-events-calendar thead th, 
	.tribe-events-grid .tribe-grid-header span, 
	.tribe-events-day-time-slot > h5, 
	.tribe-events-list .tribe-events-list-separator-month {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_h6_font_font_size'] + 4) . "px;
		line-height:" . ((int) $cmsmasters_option['happy-events' . '_h6_font_line_height'] + 4) . "px;
	}
	
	.cmsmasters_single_event .tribe-events-schedule > div:before {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_h6_font_font_size'] + 4) . "px;
		line-height:" . $cmsmasters_option['happy-events' . '_h6_font_line_height'] . "px;
	}
	
	.tribe-events-sub-nav li a {
		line-height:" . ((int) $cmsmasters_option['happy-events' . '_h6_font_line_height'] + 6) . "px;
	}
	
	.tribe-this-week-events-widget .tribe-this-week-widget-header-date {
		line-height:28px; /* static */
	}
	
	.cmsmasters_event_date .cmsmasters_event_mon {
		font-size:12px; /* static */
		line-height:28px; /* static */
	}
	
	.cmsmasters_event_date .cmsmasters_event_day {
		font-size:28px; /* static */
		line-height:48px; /* static */
	}
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	#tribe-bar-views .tribe-bar-views-list li, 
	#tribe-bar-views .tribe-bar-views-list li a {
		font-family:" . happy_events_get_google_font($cmsmasters_option['happy-events' . '_button_font_google_font']) . $cmsmasters_option['happy-events' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['happy-events' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['happy-events' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['happy-events' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['happy-events' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['happy-events' . '_button_font_text_transform'] . ";
	}
	
	#tribe-bar-views .tribe-bar-views-list li, 
	#tribe-bar-views .tribe-bar-views-list li a {
		font-size:" . ((int) $cmsmasters_option['happy-events' . '_button_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['happy-events' . '_button_font_line_height'] - 6) . "px;
		text-transform:none;
	}
	/* Finish Button Font */
	
	
	/* Start Small Text Font */
	/* Finish Small Text Font */
	
/***************** Finish Events Font Styles ******************/


";

}
	
	return apply_filters('happy_events_theme_fonts_filter', $custom_css);
}

