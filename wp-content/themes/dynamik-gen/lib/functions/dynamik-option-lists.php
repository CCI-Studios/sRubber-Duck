<?php
/**
 * Builds many of the admin options drop-down lists.
 *
 * @package Dynamik
 */
 
/**********
CSS Builder Popup Elements
           **********/

/**
 * Build general CSS elements drop-down list.
 *
 * @since 1.0
 * @return general CSS elements array.
 */
function dynamik_css_elements_array()
{
	$dynamik_css_elements_array = array(
		'-- Page Elements --' => array(
			'Body' => 'body',
			'Universal Link' => 'a, a:visited',
			'Universal Link Hover' => 'a:hover'
		),
		'-- Header --' => array(
			'Header' => dynamik_html_markup( 'site_header' ),
			'Header Wrap' => dynamik_html_markup( 'site_header' ) . ' .wrap',
			'Title Area' => dynamik_html_markup( 'title_area' ),
			'Site Title' => dynamik_html_markup( 'site_title' ),
			'Site Title Link' => dynamik_html_markup( 'site_title' ) . ' a, ' . dynamik_html_markup( 'site_title' ) . ' a:visited',
			'Site Title Link Hover' => dynamik_html_markup( 'site_title' ) . ' a:hover',
			'Site Tagline' => dynamik_html_markup( 'site_description' ),
			'Logo Image' => '.header-image ' . dynamik_html_markup( 'site_header' ) . ' .wrap ' . dynamik_html_markup( 'title_area' ),
			'Logo Image Area' => '.header-image ' . dynamik_html_markup( 'title_area' ) . ', .header-image ' . dynamik_html_markup( 'site_title' ) . ', .header-image ' . dynamik_html_markup( 'site_title' ) . ' a',
			'Header Widget Area' => dynamik_html_markup( 'site_header' ) . ' .widget-area'
		),
		'-- Header Menu --' => array(
			'Header Menu' => dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu',
			'Header Menu Page Link' => dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu a',
			'Header Menu Page Link Hover' => dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li a:active, ' . dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li a:hover',
			'Header Menu Current Page Link' => dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu .current_page_item a, ' . dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu .current-cat a, ' . dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu .current-menu-item a',
			'Header Menu Page jQuery Sub-Indicator' => dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li a .sf-sub-indicator, ' . dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li li a .sf-sub-indicator, ' . dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li li li a .sf-sub-indicator',
			'Header Menu Sub-Page Link' => dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li li a, ' . dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li li a:link, ' . dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li li a:visited',
			'Header Menu Sub-Page Link Hover' => dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li li a:active, ' . dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li li a:hover'
		),
		'-- Nav --' => array(
			'Nav' => dynamik_html_markup( 'nav_primary' ),
			'Nav Menu' => '.menu-primary',
			'Nav Page Link' => '.menu-primary a',
			'Nav Page Link Hover' => '.menu-primary li a:active, .menu-primary li a:hover',
			'Nav Current Page Link' => '.menu-primary .current_page_item a, .menu-primary .current-cat a, .menu-primary .current-menu-item a',
			'Nav Page jQuery Sub-Indicator' => '.menu-primary li a .sf-sub-indicator, .menu-primary li li a .sf-sub-indicator, .menu-primary li li li a .sf-sub-indicator',
			'Nav Sub-Page Link' => '.menu-primary li li a, .menu-primary li li a:link, .menu-primary li li a:visited',
			'Nav Sub-Page Link Hover' => '.menu-primary li li a:active, .menu-primary li li a:hover',
			'Nav Right' => '.genesis-nav-menu li.right',
			'Nav Right Search' => '.genesis-nav-menu li.search',
			'Nav Right RSS' => '.genesis-nav-menu li.rss a',
			'Nav Right Twitter' => '.genesis-nav-menu li.twitter a',
			'Nav Right Link' => '.genesis-nav-menu li.right a, .genesis-nav-menu li.right a:visted',
			'Nav Right Link Hover' => '.genesis-nav-menu li.right a:hover'
		),
		'-- Subnav --' => array(
			'Subnav' => dynamik_html_markup( 'nav_secondary' ),
			'Subnav Menu' => '.menu-secondary',
			'Subnav Page Link' => '.menu-secondary a',
			'Subnav Page Link Hover' => '.menu-secondary li a:active, .menu-secondary li a:hover',
			'Subnav Current Page Link' => '.menu-secondary .current_page_item a, .menu-secondary .current-cat a, .menu-secondary .current-menu-item a',
			'Subnav Page jQuery Sub-Indicator' => '.menu-secondary li a .sf-sub-indicator, .menu-secondary li li a .sf-sub-indicator, .menu-secondary li li li a .sf-sub-indicator',
			'Subnav Sub-Page Link' => '.menu-secondary li li a, .menu-secondary li li a:link, .menu-secondary li li a:visited',
			'Subnav Sub-Page Link Hover' => '.menu-secondary li li a:active, .menu-secondary li li a:hover'
		),
		'-- Containers --' => array(
			'Main Wrap' => dynamik_html_markup( 'site_container' ),
			'Inner Wrap' => dynamik_html_markup( 'site_inner' ),
			'Content Sidebar Wrap' => dynamik_html_markup( 'content_sidebar_wrap' )
		),
		'-- Main Content --' => array(
			'Content' => dynamik_html_markup( 'content' ),
			'Content Post' => dynamik_html_markup( 'content' ) . ' .post',
			'Content Page' => dynamik_html_markup( 'content' ) . ' .page',
			'Content Paragraph' => '.entry-content p',
			'Content Lists' => '.entry-content ul li, .entry-content ol li',
			'Content Link' => '.entry-content a, .entry-content a:visited',
			'Content Link Hover' => '.entry-content a:hover',
			'Content Blockquote' => dynamik_html_markup( 'content' ) . ' blockquote',
			'Content Blockquote Paragraph' => dynamik_html_markup( 'content' ) . ' blockquote p',
			'Content Blockquote Link' => dynamik_html_markup( 'content' ) . ' blockquote a, ' . dynamik_html_markup( 'content' ) . ' blockquote a:visited',
			'Content Blockquote Link Hover' => dynamik_html_markup( 'content' ) . ' blockquote a:hover',
			'Post/Page Title' => dynamik_html_markup( 'content' ) . ' h1.entry-title, ' . dynamik_html_markup( 'content' ) . ' h2.entry-title',
			'Post Title Link' => dynamik_html_markup( 'content' ) . ' .post h2 a, ' . dynamik_html_markup( 'content' ) . ' .post h2 a:visited',
			'Post Title Link Hover' => dynamik_html_markup( 'content' ) . ' .post h2 a:hover',
			'Content Post H1' => dynamik_html_markup( 'content' ) . ' .post h1',
			'Content Post H2' => dynamik_html_markup( 'content' ) . ' .post h2',
			'Content Post H3' => dynamik_html_markup( 'content' ) . ' .post h3',
			'Content Post H4' => dynamik_html_markup( 'content' ) . ' .post h4',
			'Content Post H5' => dynamik_html_markup( 'content' ) . ' .post h5',
			'Content Post H6' => dynamik_html_markup( 'content' ) . ' .post h6',
			'Content Page H1' => dynamik_html_markup( 'content' ) . ' .page h1',
			'Content Page H2' => dynamik_html_markup( 'content' ) . ' .page h2',
			'Content Page H3' => dynamik_html_markup( 'content' ) . ' .page h3',
			'Content Page H4' => dynamik_html_markup( 'content' ) . ' .page h4',
			'Content Page H5' => dynamik_html_markup( 'content' ) . ' .page h5',
			'Content Page H6' => dynamik_html_markup( 'content' ) . ' .page h6',
			'Content Post/Page UL LI' => '.entry-content ul li',
			'Content Post/Page OL LI' => '.entry-content ol li',
			'Post Info' => dynamik_html_markup( 'entry_header_entry_meta' ),
			'Post Info Link' => dynamik_html_markup( 'entry_header_entry_meta' ) . ' a, ' . dynamik_html_markup( 'entry_header_entry_meta' ) . ' a:visited',
			'Post Info Link Hover' => dynamik_html_markup( 'entry_header_entry_meta' ) . ' a:hover',
			'Post Meta' => dynamik_html_markup( 'entry_footer_entry_meta' ),
			'Post Meta Link' => dynamik_html_markup( 'entry_footer_entry_meta' ) . ' a, ' . dynamik_html_markup( 'entry_footer_entry_meta' ) . ' a:visited',
			'Post Meta Link Hover' => dynamik_html_markup( 'entry_footer_entry_meta' ) . ' a:hover',
			'Post Navigation' => dynamik_html_markup( 'pagination' ),
			'Post Navigation Link' => dynamik_html_markup( 'pagination' ) . ' a, ' . dynamik_html_markup( 'pagination' ) . ' a:visited',
			'Post Navigation Link Hover' => dynamik_html_markup( 'pagination' ) . ' a:hover',
			'Post Navigation Numbered' => dynamik_html_markup( 'pagination' ) . ' li a, ' . dynamik_html_markup( 'pagination' ) . ' li.disabled, ' . dynamik_html_markup( 'pagination' ) . ' li a:hover, ' . dynamik_html_markup( 'pagination' ) . ' li.active a ',
			'Post Navigation Numbered Link' => dynamik_html_markup( 'pagination' ) . ' li a:hover, ' . dynamik_html_markup( 'pagination' ) . ' li.active a ',
			'Post Navigation Numbered Link Hover' => dynamik_html_markup( 'pagination' ) . ' li a:hover'
		),
		'-- Breadcrumbs --' => array(
			'Breadcrumbs' => '.breadcrumb',
			'Breadcrumbs Link' => '.breadcrumb a, .breadcrumb a:visited',
			'Breadcrumbs Link Hover' => '.breadcrumb a:hover'
		),
		'-- Taxonomy Description --' => array(
			'Taxonomy Description' => '.taxonomy-description',
			'Taxonomy Description Title' => dynamik_html_markup( 'content' ) . ' .taxonomy-description h1',
			'Taxonomy Description Paragraph' => dynamik_html_markup( 'content' ) . ' .taxonomy-description p',
			'Taxonomy Description Link' => dynamik_html_markup( 'content' ) . ' .taxonomy-description a, ' . dynamik_html_markup( 'content' ) . ' .taxonomy-description a:visited',
			'Taxonomy Description Link Hover' => dynamik_html_markup( 'content' ) . ' .taxonomy-description a:hover'
		),
		'-- Author Description --' => array(
			'Author Description' => '.author-description',
			'Author Description Title' => dynamik_html_markup( 'content' ) . ' .author-description h1',
			'Author Description Paragraph' => dynamik_html_markup( 'content' ) . ' .author-description p',
			'Author Description Link' => dynamik_html_markup( 'content' ) . ' .author-description a, ' . dynamik_html_markup( 'content' ) . ' .author-description a:visited',
			'Author Description Link Hover' => dynamik_html_markup( 'content' ) . ' .author-description a:hover'
		),
		'-- Author Box --' => array(
			'Author Box' => '.author-box',
			'Author Box Title' => dynamik_html_markup( 'author_box_title' ),
			'Author Box Paragraph' => dynamik_html_markup( 'author_box_content' ),
			'Author Box Link' => '.author-box a, .author-box a:visited',
			'Author Box Link Hover' => '.author-box a:hover',
			'Author Box Avatar' => '.author-box .avatar'
		),
		'-- Custom Widgets Areas --' => array(
			'Custom Widget Area' => '.dynamik-widget-area',
			'Custom Widget Area H4' => '.dynamik-widget-area h4'
		),
		'-- Featured Post --' => array(
			'Featured Post' => '.featuredpost',
			'Featured Post .post' => '.featuredpost .post',
			'Featured Post Title' => '.featuredpost .post h2',
			'Featured Post Title Link' => '.featuredpost .post h2 a, .featuredpost .post h2 a:visited',
			'Featured Post Title Link Hover' => '.featuredpost .post h2 a:hover',
			'Featured Post Post Info' => '.featuredpost .post ' . dynamik_html_markup( 'entry_header_entry_meta' ),
			'Featured Post Post Info Link' => '.featuredpost .post ' . dynamik_html_markup( 'entry_header_entry_meta' ) . ' a, .featuredpost .post ' . dynamik_html_markup( 'entry_header_entry_meta' ) . ' a:visited',
			'Featured Post Post Info Link Hover' => '.featuredpost .post ' . dynamik_html_markup( 'entry_header_entry_meta' ) . ' a:hover',
			'Featured Post Paragraph' => '.featuredpost .post p',
			'Featured Post Link' => '.featuredpost .post a, .featuredpost .post a:visited',
			'Featured Post Link Hover' => '.featuredpost .post a:hover'
		),
		'-- Featured Page --' => array(
			'Featured Page' => '.featuredpage',
			'Featured Page .page' => '.featuredpage .page',
			'Featured Page Title' => '.featuredpage .page h2',
			'Featured Page Title Link' => '.featuredpage .page h2 a, .featuredpage .page h2 a:visited',
			'Featured Page Title Link Hover' => '.featuredpage .page h2 a:hover',
			'Featured Page Byline' => '.featuredpage .page .byline',
			'Featured Page Byline Link' => '.featuredpage .page .byline a, .featuredpage .page .byline a:visited',
			'Featured Page Byline Link Hover' => '.featuredpage .page .byline a:hover',
			'Featured Page Paragraph' => '.featuredpage .page p',
			'Featured Page Link' => '.featuredpage .page a, .featuredpage .page a:visited',
			'Featured Page Link Hover' => '.featuredpage .page a:hover'
		),
		'-- Sidebar --' => array(
			'Sidebar' => dynamik_html_markup( 'sidebar_primary' ),
			'Sidebar H4' => dynamik_html_markup( 'sidebar_primary' ) . ' h4',
			'Sidebar Widget' => dynamik_html_markup( 'sidebar_primary' ) . ' .widget',
			'Sidebar Link' => dynamik_html_markup( 'sidebar_primary' ) . ' a, ' . dynamik_html_markup( 'sidebar_primary' ) . ' a:visited',
			'Sidebar Link Hover' => dynamik_html_markup( 'sidebar_primary' ) . ' a:hover',
			'Sidebar UL/OL' => dynamik_html_markup( 'sidebar_primary' ) . ' ul, ' . dynamik_html_markup( 'sidebar_primary' ) . ' ol',
			'Sidebar UL LI' => dynamik_html_markup( 'sidebar_primary' ) . ' ul li'
		),
		'-- Sidebar Alt --' => array(
			'Sidebar Alt' => dynamik_html_markup( 'sidebar_secondary' ),
			'Sidebar Alt H4' => dynamik_html_markup( 'sidebar_secondary' ) . ' h4',
			'Sidebar Alt Widget' => dynamik_html_markup( 'sidebar_secondary' ) . ' .widget',
			'Sidebar Alt Link' => dynamik_html_markup( 'sidebar_secondary' ) . ' a, ' . dynamik_html_markup( 'sidebar_secondary' ) . ' a:visited',
			'Sidebar Alt Link Hover' => dynamik_html_markup( 'sidebar_secondary' ) . ' a:hover',
			'Sidebar Alt UL/OL' => dynamik_html_markup( 'sidebar_secondary' ) . ' ul, ' . dynamik_html_markup( 'sidebar_secondary' ) . ' ol',
			'Sidebar Alt UL LI' => dynamik_html_markup( 'sidebar_secondary' ) . ' ul li'
		),
		'-- Comments --' => array(
			'Comments' => '#comments',
			'Comments Title' => '#comments h3',
			'Comment List' => '.comment-list',
			'Comment Author' => '.comment-author',
			'Comment Meta' => dynamik_html_markup( 'comment_meta' ),
			'Comment Meta Link' => dynamik_html_markup( 'comment_meta' ) . ' a, ' . dynamik_html_markup( 'comment_meta' ) . ' a:visited',
			'Comment Meta Link Hover' => dynamik_html_markup( 'comment_meta' ) . ' a:hover',
			'Comment Thread Even' => '.thread-even',
			'Comment Thread Alt' => '.thread-alt',
			'Comments Nav' => '#comments ' . dynamik_html_markup( 'pagination' ),
			'No Comments Text' => '.nocomments'
		),
		'-- Respond --' => array(
			'Respond' => '#respond',
			'Reply Title' => '#respond h3',
			'Author/Email/URL/Comment' => '#author, #comment, #email, #url',
			'Comment Form' => '#comment',
			'Comment Submit Button' => '#commentform #submit',
			'Comment Submit Button Hover' => '#commentform #submit:hover'
		),
		'-- Footer --' => array(
			'Footer' => dynamik_html_markup( 'site_footer' ),
			'Footer Wrap' => dynamik_html_markup( 'site_footer' ) . ' .wrap',
			'Footer Text' => dynamik_html_markup( 'site_footer' ) . ' p',
			'Footer Link' => dynamik_html_markup( 'site_footer' ) . ' a, ' . dynamik_html_markup( 'site_footer' ) . ' a:visited',
			'Footer Link Hover' => dynamik_html_markup( 'site_footer' ) . ' a:hover',
			'Footer Go To Top' => dynamik_html_markup( 'site_footer' ) . ' .gototop',
			'Footer Credits' => dynamik_html_markup( 'site_footer' ) . ' .creds'
		),
		'-- Images / Alignment --' => array(
			'Image Align None' => 'img.alignnone',
			'Image Align Left' => 'img.alignleft',
			'Image Align Center' => 'img.centered',
			'Image Align Right' => 'img.alignright',
			'Image WP Smiley' => 'img.wp-smiley, img.wp-wink',
			'Align Left' => '.alignleft',
			'Align Center' => '.aligncenter',
			'Align Right' => '.alignright',
			'WP Caption' => '.wp-caption',
			'WP Caption Text' => 'p.wp-caption-text',
			'Thumbnail Image' => '.attachment-thumbnail',
			'Post Format Image' => '.post-format-image'
		)
	);
	
	return $dynamik_css_elements_array;	
}

/**
 * Build the CSS Builder general elements menu.
 *
 * @since 1.0
 */
function dynamik_build_css_elements_menu( $selected = '' )
{
	$dynamik_css_elements_array = dynamik_css_elements_array();
	
	foreach( $dynamik_css_elements_array as $element_type => $elements )
	{
		echo '<optgroup label="' . $element_type . '">';
		foreach( $elements as $element_slug => $element_data )
		{
			$option = '<option value="' . $element_data . ' {"';
				
			if( $element_data == $selected )
			{
				$option .= ' selected="selected"';
			}

			$option .= '>' . $element_slug . '</option>';
			
			echo $option;
		}
		echo '</optgroup>';
	}
}

/**
 * Build body CSS elements drop-down list.
 *
 * @since 1.0
 * @return body CSS elements array.
 */
function dynamik_body_elements_array()
{
	$dynamik_body_elements_array = array(
		'-- Page Elements --' => array(
			'Body' => 'body',
			'Universal Link' => 'a, a:visited',
			'Universal Link Hover' => 'a:hover',
			'Main Wrap' => dynamik_html_markup( 'site_container' )
		)
	);
	
	return $dynamik_body_elements_array;
}

/**
 * Build the CSS Builder body elements menu.
 *
 * @since 1.0
 */
function dynamik_build_body_elements_menu( $selected = '' )
{
	$dynamik_body_elements_array = dynamik_body_elements_array();
	
	foreach( $dynamik_body_elements_array as $element_type => $elements )
	{
		echo '<optgroup label="' . $element_type . '">';
		foreach( $elements as $element_slug => $element_data )
		{
			$option = '<option value="' . $element_data . ' {"';
				
			if( $element_data == $selected )
			{
				$option .= ' selected="selected"';
			}

			$option .= '>' . $element_slug . '</option>';
			
			echo $option;
		}
		echo '</optgroup>';
	}
}

/**
 * Build header CSS elements drop-down list.
 *
 * @since 1.0
 * @return header CSS elements array.
 */
function dynamik_header_elements_array()
{
	$dynamik_header_elements_array = array(
		'-- Header --' => array(
			'Header' => dynamik_html_markup( 'site_header' ),
			'Header Wrap' => dynamik_html_markup( 'site_header' ) . ' .wrap',
			'Title Area' => dynamik_html_markup( 'title_area' ),
			'Site Title' => dynamik_html_markup( 'site_title' ),
			'Site Title Link' => dynamik_html_markup( 'site_title' ) . ' a, ' . dynamik_html_markup( 'site_title' ) . ' a:visited',
			'Site Title Link Hover' => dynamik_html_markup( 'site_title' ) . ' a:hover',
			'Site Tagline' => dynamik_html_markup( 'site_description' ),
			'Logo Image' => '.header-image ' . dynamik_html_markup( 'site_header' ) . ' .wrap ' . dynamik_html_markup( 'title_area' ),
			'Logo Image Area' => '.header-image ' . dynamik_html_markup( 'title_area' ) . ', .header-image ' . dynamik_html_markup( 'site_title' ) . ', .header-image ' . dynamik_html_markup( 'site_title' ) . ' a',
			'Header Widget Area' => dynamik_html_markup( 'site_header' ) . ' .widget-area'
		)
	);
	
	return $dynamik_header_elements_array;
}

/**
 * Build the CSS Builder header elements menu.
 *
 * @since 1.0
 */
function dynamik_build_header_elements_menu( $selected = '' )
{
	$dynamik_header_elements_array = dynamik_header_elements_array();
	
	foreach( $dynamik_header_elements_array as $element_type => $elements )
	{
		echo '<optgroup label="' . $element_type . '">';
		foreach( $elements as $element_slug => $element_data )
		{
			$option = '<option value="' . $element_data . ' {"';
				
			if( $element_data == $selected )
			{
				$option .= ' selected="selected"';
			}

			$option .= '>' . $element_slug . '</option>';
			
			echo $option;
		}
		echo '</optgroup>';
	}
}

/**
 * Build header menu menu CSS elements drop-down list.
 *
 * @since 1.0
 * @return header menu menu CSS elements array.
 */
function dynamik_header_menu_elements_array()
{
	$dynamik_header_menu_elements_array = array(
		'-- Header Menu --' => array(
			'Header Menu' => dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu',
			'Header Menu Page Link' => dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu a',
			'Header Menu Page Link Hover' => dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li a:active, ' . dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li a:hover',
			'Header Menu Current Page Link' => dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu .current_page_item a, ' . dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu .current-cat a, ' . dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu .current-menu-item a',
			'Header Menu Page jQuery Sub-Indicator' => dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li a .sf-sub-indicator, ' . dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li li a .sf-sub-indicator, ' . dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li li li a .sf-sub-indicator',
			'Header Menu Sub-Page Link' => dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li li a, ' . dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li li a:link, ' . dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li li a:visited',
			'Header Menu Sub-Page Link Hover' => dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li li a:active, ' . dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li li a:hover',
			'Header Menu UL' => dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu ul',
			'Header Menu LI' => dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li',
			'Header Menu LI UL' => dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li ul',
			'Header Menu LI UL UL' => dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li ul ul'
		)
	);
	
	return $dynamik_header_menu_elements_array;
}

/**
 * Build the CSS Builder header_menu menu elements menu.
 *
 * @since 1.0
 */
function dynamik_build_header_menu_elements_menu( $selected = '' )
{
	$dynamik_header_menu_elements_array = dynamik_header_menu_elements_array();
	
	foreach( $dynamik_header_menu_elements_array as $element_type => $elements )
	{
		echo '<optgroup label="' . $element_type . '">';
		foreach( $elements as $element_slug => $element_data )
		{
			$option = '<option value="' . $element_data . ' {"';
				
			if( $element_data == $selected )
			{
				$option .= ' selected="selected"';
			}

			$option .= '>' . $element_slug . '</option>';
			
			echo $option;
		}
		echo '</optgroup>';
	}
}

/**
 * Build nav CSS elements drop-down list.
 *
 * @since 1.0
 * @return nav CSS elements array.
 */
function dynamik_nav_elements_array()
{
	$dynamik_nav_elements_array = array(
		'-- Nav --' => array(
			'Nav' => dynamik_html_markup( 'nav_primary' ),
			'Nav Menu' => '.menu-primary',
			'Nav Page Link' => '.menu-primary a',
			'Nav Page Link Hover' => '.menu-primary li a:active, .menu-primary li a:hover',
			'Nav Current Page Link' => '.menu-primary .current_page_item a, .menu-primary .current-cat a, .menu-primary .current-menu-item a',
			'Nav Page jQuery Sub-Indicator' => '.menu-primary li a .sf-sub-indicator, .menu-primary li li a .sf-sub-indicator, .menu-primary li li li a .sf-sub-indicator',
			'Nav Sub-Page Link' => '.menu-primary li li a, .menu-primary li li a:link, .menu-primary li li a:visited',
			'Nav Sub-Page Link Hover' => '.menu-primary li li a:active, .menu-primary li li a:hover',
			'Nav UL' => '.menu-primary ul',
			'Nav LI' => '.menu-primary li',
			'Nav LI UL' => '.menu-primary li ul',
			'Nav LI UL UL' => '.menu-primary li ul ul',
			'Nav Right' => '.genesis-nav-menu li.right',
			'Nav Right Search' => '.genesis-nav-menu li.search',
			'Nav Right RSS' => '.genesis-nav-menu li.rss a',
			'Nav Right Twitter' => '.genesis-nav-menu li.twitter a',
			'Nav Right Link' => '.genesis-nav-menu li.right a, .genesis-nav-menu li.right a:visted',
			'Nav Right Link Hover' => '.genesis-nav-menu li.right a:hover'
		)
	);
	
	return $dynamik_nav_elements_array;
}

/**
 * Build the CSS Builder nav elements menu.
 *
 * @since 1.0
 */
function dynamik_build_nav_elements_menu( $selected = '' )
{
	$dynamik_nav_elements_array = dynamik_nav_elements_array();
	
	foreach( $dynamik_nav_elements_array as $element_type => $elements )
	{
		echo '<optgroup label="' . $element_type . '">';
		foreach( $elements as $element_slug => $element_data )
		{
			$option = '<option value="' . $element_data . ' {"';
				
			if( $element_data == $selected )
			{
				$option .= ' selected="selected"';
			}

			$option .= '>' . $element_slug . '</option>';
			
			echo $option;
		}
		echo '</optgroup>';
	}
}

/**
 * Build subnav CSS elements drop-down list.
 *
 * @since 1.0
 * @return subnav CSS elements array.
 */
function dynamik_subnav_elements_array()
{
	$dynamik_subnav_elements_array = array(
		'-- Subnav --' => array(
			'Subnav' => dynamik_html_markup( 'nav_secondary' ),
			'Subnav Menu' => '.menu-secondary',
			'Subnav Page Link' => '.menu-secondary a',
			'Subnav Page Link Hover' => '.menu-secondary li a:active, .menu-secondary li a:hover',
			'Subnav Current Page Link' => '.menu-secondary .current_page_item a, .menu-secondary .current-cat a, .menu-secondary .current-menu-item a',
			'Subnav Page jQuery Sub-Indicator' => '.menu-secondary li a .sf-sub-indicator, .menu-secondary li li a .sf-sub-indicator, .menu-secondary li li li a .sf-sub-indicator',
			'Subnav Sub-Page Link' => '.menu-secondary li li a, .menu-secondary li li a:link, .menu-secondary li li a:visited',
			'Subnav Sub-Page Link Hover' => '.menu-secondary li li a:active, .menu-secondary li li a:hover',
			'Subnav UL' => '.menu-secondary ul',
			'Subnav LI' => '.menu-secondary li',
			'Subnav LI UL' => '.menu-secondary li ul',
			'Subnav LI UL UL' => '.menu-secondary li ul ul'
		)
	);
	
	return $dynamik_subnav_elements_array;
}

/**
 * Build the CSS Builder subnav elements menu.
 *
 * @since 1.0
 */
function dynamik_build_subnav_elements_menu( $selected = '' )
{
	$dynamik_subnav_elements_array = dynamik_subnav_elements_array();
	
	foreach( $dynamik_subnav_elements_array as $element_type => $elements )
	{
		echo '<optgroup label="' . $element_type . '">';
		foreach( $elements as $element_slug => $element_data )
		{
			$option = '<option value="' . $element_data . ' {"';
				
			if( $element_data == $selected )
			{
				$option .= ' selected="selected"';
			}

			$option .= '>' . $element_slug . '</option>';
			
			echo $option;
		}
		echo '</optgroup>';
	}
}

/**
 * Build inner CSS elements drop-down list.
 *
 * @since 1.0
 * @return inner CSS elements array.
 */
function dynamik_inner_elements_array()
{
	$dynamik_inner_elements_array = array(
		'-- Page Elements --' => array(
			'Inner Wrap' => dynamik_html_markup( 'site_inner' ),
			'Content Sidebar Wrap' => dynamik_html_markup( 'content_sidebar_wrap' )
		)
	);
	
	return $dynamik_inner_elements_array;
}

/**
 * Build the CSS Builder inner elements menu.
 *
 * @since 1.0
 */
function dynamik_build_inner_elements_menu( $selected = '' )
{
	$dynamik_inner_elements_array = dynamik_inner_elements_array();
	
	foreach( $dynamik_inner_elements_array as $element_type => $elements )
	{
		echo '<optgroup label="' . $element_type . '">';
		foreach( $elements as $element_slug => $element_data )
		{
			$option = '<option value="' . $element_data . ' {"';
				
			if( $element_data == $selected )
			{
				$option .= ' selected="selected"';
			}

			$option .= '>' . $element_slug . '</option>';
			
			echo $option;
		}
		echo '</optgroup>';
	}
}

/**
 * Build content CSS elements drop-down list.
 *
 * @since 1.0
 * @return content CSS elements array.
 */
function dynamik_content_elements_array()
{
	$dynamik_content_elements_array = array(
		'-- Main Content --' => array(
			'Content' => dynamik_html_markup( 'content' ),
			'Content Post' => dynamik_html_markup( 'content' ) . ' .post',
			'Content Page' => dynamik_html_markup( 'content' ) . ' .page',
			'Content Paragraph' => '.entry-content p',
			'Content Lists' => '.entry-content ul li, .entry-content ol li',
			'Content Link' => '.entry-content a, .entry-content a:visited',
			'Content Link Hover' => '.entry-content a:hover',
			'Content Blockquote' => dynamik_html_markup( 'content' ) . ' blockquote',
			'Content Blockquote Paragraph' => dynamik_html_markup( 'content' ) . ' blockquote p',
			'Content Blockquote Link' => dynamik_html_markup( 'content' ) . ' blockquote a, ' . dynamik_html_markup( 'content' ) . ' blockquote a:visited',
			'Content Blockquote Link Hover' => dynamik_html_markup( 'content' ) . ' blockquote a:hover',
			'Post/Page Title' => dynamik_html_markup( 'content' ) . ' h1.entry-title, ' . dynamik_html_markup( 'content' ) . ' h2.entry-title',
			'Post Title Link' => dynamik_html_markup( 'content' ) . ' .post h2 a, ' . dynamik_html_markup( 'content' ) . ' .post h2 a:visited',
			'Post Title Link Hover' => dynamik_html_markup( 'content' ) . ' .post h2 a:hover',
			'Content Post H1' => dynamik_html_markup( 'content' ) . ' .post h1',
			'Content Post H2' => dynamik_html_markup( 'content' ) . ' .post h2',
			'Content Post H3' => dynamik_html_markup( 'content' ) . ' .post h3',
			'Content Post H4' => dynamik_html_markup( 'content' ) . ' .post h4',
			'Content Post H5' => dynamik_html_markup( 'content' ) . ' .post h5',
			'Content Post H6' => dynamik_html_markup( 'content' ) . ' .post h6',
			'Content Page H1' => dynamik_html_markup( 'content' ) . ' .page h1',
			'Content Page H2' => dynamik_html_markup( 'content' ) . ' .page h2',
			'Content Page H3' => dynamik_html_markup( 'content' ) . ' .page h3',
			'Content Page H4' => dynamik_html_markup( 'content' ) . ' .page h4',
			'Content Page H5' => dynamik_html_markup( 'content' ) . ' .page h5',
			'Content Page H6' => dynamik_html_markup( 'content' ) . ' .page h6',
			'Content Post/Page UL LI' => '.entry-content ul li',
			'Content Post/Page OL LI' => '.entry-content ol li',
			'Post Info' => dynamik_html_markup( 'entry_header_entry_meta' ),
			'Post Info Link' => dynamik_html_markup( 'entry_header_entry_meta' ) . ' a, ' . dynamik_html_markup( 'entry_header_entry_meta' ) . ' a:visited',
			'Post Info Link Hover' => dynamik_html_markup( 'entry_header_entry_meta' ) . ' a:hover',
			'Post Meta' => dynamik_html_markup( 'entry_footer_entry_meta' ),
			'Post Meta Link' => dynamik_html_markup( 'entry_footer_entry_meta' ) . ' a, ' . dynamik_html_markup( 'entry_footer_entry_meta' ) . ' a:visited',
			'Post Meta Link Hover' => dynamik_html_markup( 'entry_footer_entry_meta' ) . ' a:hover',
			'Post Navigation' => dynamik_html_markup( 'pagination' ),
			'Post Navigation Link' => dynamik_html_markup( 'pagination' ) . ' a, ' . dynamik_html_markup( 'pagination' ) . ' a:visited',
			'Post Navigation Link Hover' => dynamik_html_markup( 'pagination' ) . ' a:hover',
			'Post Navigation Numbered' => dynamik_html_markup( 'pagination' ) . ' li a, ' . dynamik_html_markup( 'pagination' ) . ' li.disabled, ' . dynamik_html_markup( 'pagination' ) . ' li a:hover, ' . dynamik_html_markup( 'pagination' ) . ' li.active a ',
			'Post Navigation Numbered Link' => dynamik_html_markup( 'pagination' ) . ' li a:hover, ' . dynamik_html_markup( 'pagination' ) . ' li.active a ',
			'Post Navigation Numbered Link Hover' => dynamik_html_markup( 'pagination' ) . ' li a:hover'
		)
	);
	
	return $dynamik_content_elements_array;
}

/**
 * Build the CSS Builder content elements menu.
 *
 * @since 1.0
 */
function dynamik_build_content_elements_menu( $selected = '' )
{
	$dynamik_content_elements_array = dynamik_content_elements_array();
	
	foreach( $dynamik_content_elements_array as $element_type => $elements )
	{
		echo '<optgroup label="' . $element_type . '">';
		foreach( $elements as $element_slug => $element_data )
		{
			$option = '<option value="' . $element_data . ' {"';
				
			if( $element_data == $selected )
			{
				$option .= ' selected="selected"';
			}

			$option .= '>' . $element_slug . '</option>';
			
			echo $option;
		}
		echo '</optgroup>';
	}
}

/**
 * Build breadcrumb CSS elements drop-down list.
 *
 * @since 1.0
 * @return breadcrumb CSS elements array.
 */
function dynamik_breadcrumb_elements_array()
{
	$dynamik_breadcrumb_elements_array = array(
		'-- Breadcrumbs --' => array(
			'Breadcrumbs' => '.breadcrumb',
			'Breadcrumbs Link' => '.breadcrumb a, .breadcrumb a:visited',
			'Breadcrumbs Link Hover' => '.breadcrumb a:hover'
		)
	);
	
	return $dynamik_breadcrumb_elements_array;
}

/**
 * Build the CSS Builder breadcrumb elements menu.
 *
 * @since 1.0
 */
function dynamik_build_breadcrumb_elements_menu( $selected = '' )
{
	$dynamik_breadcrumb_elements_array = dynamik_breadcrumb_elements_array();
	
	foreach( $dynamik_breadcrumb_elements_array as $element_type => $elements )
	{
		echo '<optgroup label="' . $element_type . '">';
		foreach( $elements as $element_slug => $element_data )
		{
			$option = '<option value="' . $element_data . ' {"';
				
			if( $element_data == $selected )
			{
				$option .= ' selected="selected"';
			}

			$option .= '>' . $element_slug . '</option>';
			
			echo $option;
		}
		echo '</optgroup>';
	}
}

/**
 * Build taxonomy description CSS elements drop-down list.
 *
 * @since 1.0
 * @return taxonomy description CSS elements array.
 */
function dynamik_taxonomy_description_elements_array()
{
	$dynamik_taxonomy_description_elements_array = array(
		'-- Taxonomy Description Elements --' => array(
			'Taxonomy Description' => '.taxonomy-description',
			'Taxonomy Description Title' => dynamik_html_markup( 'content' ) . ' .taxonomy-description h1',
			'Taxonomy Description Paragraph' => dynamik_html_markup( 'content' ) . ' .taxonomy-description p',
			'Taxonomy Description Link' => dynamik_html_markup( 'content' ) . ' .taxonomy-description a, ' . dynamik_html_markup( 'content' ) . ' .taxonomy-description a:visited',
			'Taxonomy Description Link Hover' => dynamik_html_markup( 'content' ) . ' .taxonomy-description a:hover'
		)
	);
	
	return $dynamik_taxonomy_description_elements_array;
}

/**
 * Build the CSS Builder taxonomy description elements menu.
 *
 * @since 1.0
 */
function dynamik_build_taxonomy_description_elements_menu( $selected = '' )
{
	$dynamik_taxonomy_description_elements_array = dynamik_taxonomy_description_elements_array();
	
	foreach( $dynamik_taxonomy_description_elements_array as $element_type => $elements )
	{
		echo '<optgroup label="' . $element_type . '">';
		foreach( $elements as $element_slug => $element_data )
		{
			$option = '<option value="' . $element_data . ' {"';
				
			if( $element_data == $selected )
			{
				$option .= ' selected="selected"';
			}

			$option .= '>' . $element_slug . '</option>';
			
			echo $option;
		}
		echo '</optgroup>';
	}
}

/**
 * Build author description CSS elements drop-down list.
 *
 * @since 1.0
 * @return author description CSS elements array.
 */
function dynamik_author_description_elements_array()
{
	$dynamik_author_description_elements_array = array(
		'-- Author Description Elements --' => array(
			'Author Description' => '.author-description',
			'Author Description Title' => dynamik_html_markup( 'content' ) . ' .author-description h1',
			'Author Description Paragraph' => dynamik_html_markup( 'content' ) . ' .author-description p',
			'Author Description Link' => dynamik_html_markup( 'content' ) . ' .author-description a, ' . dynamik_html_markup( 'content' ) . ' .author-description a:visited',
			'Author Description Link Hover' => dynamik_html_markup( 'content' ) . ' .author-description a:hover'
		)
	);
	
	return $dynamik_author_description_elements_array;
}

/**
 * Build the CSS Builder author description elements menu.
 *
 * @since 1.0
 */
function dynamik_build_author_description_elements_menu( $selected = '' )
{
	$dynamik_author_description_elements_array = dynamik_author_description_elements_array();
	
	foreach( $dynamik_author_description_elements_array as $element_type => $elements )
	{
		echo '<optgroup label="' . $element_type . '">';
		foreach( $elements as $element_slug => $element_data )
		{
			$option = '<option value="' . $element_data . ' {"';
				
			if( $element_data == $selected )
			{
				$option .= ' selected="selected"';
			}

			$option .= '>' . $element_slug . '</option>';
			
			echo $option;
		}
		echo '</optgroup>';
	}
}

/**
 * Build author box CSS elements drop-down list.
 *
 * @since 1.0
 * @return author box CSS elements array.
 */
function dynamik_author_box_elements_array()
{
	$dynamik_author_box_elements_array = array(
		'-- Author Box Info Box --' => array(
			'Author Box' => '.author-box',
			'Author Box Title' => dynamik_html_markup( 'author_box_title' ),
			'Author Box Paragraph' => dynamik_html_markup( 'author_box_content' ),
			'Author Box Link' => '.author-box a, .author-box a:visited',
			'Author Box Link Hover' => '.author-box a:hover',
			'Author Box Avatar' => '.author-box .avatar'
		)
	);
	
	return $dynamik_author_box_elements_array;
}

/**
 * Build the CSS Builder author box elements menu.
 *
 * @since 1.0
 */
function dynamik_build_author_box_elements_menu( $selected = '' )
{
	$dynamik_author_box_elements_array = dynamik_author_box_elements_array();
	
	foreach( $dynamik_author_box_elements_array as $element_type => $elements )
	{
		echo '<optgroup label="' . $element_type . '">';
		foreach( $elements as $element_slug => $element_data )
		{
			$option = '<option value="' . $element_data . ' {"';
				
			if( $element_data == $selected )
			{
				$option .= ' selected="selected"';
			}

			$option .= '>' . $element_slug . '</option>';
			
			echo $option;
		}
		echo '</optgroup>';
	}
}

/**
 * Build comments CSS elements drop-down list.
 *
 * @since 1.0
 * @return comments CSS elements array.
 */
function dynamik_comments_elements_array()
{
	$dynamik_comments_elements_array = array(
		'-- Comments --' => array(
			'Comments' => '#comments',
			'Comments Title' => '#comments h3',
			'Comment List' => '.comment-list',
			'Comment Author' => '.comment-author',
			'Comment Meta' => dynamik_html_markup( 'comment_meta' ),
			'Comment Meta Link' => dynamik_html_markup( 'comment_meta' ) . ' a, ' . dynamik_html_markup( 'comment_meta' ) . ' a:visited',
			'Comment Meta Link Hover' => dynamik_html_markup( 'comment_meta' ) . ' a:hover',
			'Comment Thread Even' => '.thread-even',
			'Comment Thread Alt' => '.thread-alt',
			'Comments Nav' => '#comments ' . dynamik_html_markup( 'pagination' ),
			'No Comments Text' => '.nocomments'
		)
	);
	
	return $dynamik_comments_elements_array;
}

/**
 * Build the CSS Builder comments elements menu.
 *
 * @since 1.0
 */
function dynamik_build_comments_elements_menu( $selected = '' )
{
	$dynamik_comments_elements_array = dynamik_comments_elements_array();
	
	foreach( $dynamik_comments_elements_array as $element_type => $elements )
	{
		echo '<optgroup label="' . $element_type . '">';
		foreach( $elements as $element_slug => $element_data )
		{
			$option = '<option value="' . $element_data . ' {"';
				
			if( $element_data == $selected )
			{
				$option .= ' selected="selected"';
			}

			$option .= '>' . $element_slug . '</option>';
			
			echo $option;
		}
		echo '</optgroup>';
	}
}

/**
 * Build respond CSS elements drop-down list.
 *
 * @since 1.0
 * @return respond CSS elements array.
 */
function dynamik_respond_elements_array()
{
	$dynamik_respond_elements_array = array(
		'-- Respond --' => array(
			'Respond' => '#respond',
			'Reply Title' => '#respond h3',
			'Author/Email/URL/Comment' => '#author, #comment, #email, #url',
			'Comment Form' => '#comment',
			'Comment Submit Button' => '#commentform #submit',
			'Comment Submit Button Hover' => '#commentform #submit:hover'
		)
	);
	
	return $dynamik_respond_elements_array;
}

/**
 * Build the CSS Builder respond elements menu.
 *
 * @since 1.0
 */
function dynamik_build_respond_elements_menu( $selected = '' )
{
	$dynamik_respond_elements_array = dynamik_respond_elements_array();
	
	foreach( $dynamik_respond_elements_array as $element_type => $elements )
	{
		echo '<optgroup label="' . $element_type . '">';
		foreach( $elements as $element_slug => $element_data )
		{
			$option = '<option value="' . $element_data . ' {"';
				
			if( $element_data == $selected )
			{
				$option .= ' selected="selected"';
			}

			$option .= '>' . $element_slug . '</option>';
			
			echo $option;
		}
		echo '</optgroup>';
	}
}

/**
 * Build sidebar CSS elements drop-down list.
 *
 * @since 1.0
 * @return sidebar CSS elements array.
 */
function dynamik_sidebar_elements_array()
{
	$dynamik_sidebar_elements_array = array(
		'-- Sidebar --' => array(
			'Sidebar' => dynamik_html_markup( 'sidebar_primary' ),
			'Sidebar H4' => dynamik_html_markup( 'sidebar_primary' ) . ' h4',
			'Sidebar Widget' => dynamik_html_markup( 'sidebar_primary' ) . ' .widget',
			'Sidebar Link' => dynamik_html_markup( 'sidebar_primary' ) . ' a, ' . dynamik_html_markup( 'sidebar_primary' ) . ' a:visited',
			'Sidebar Link Hover' => dynamik_html_markup( 'sidebar_primary' ) . ' a:hover',
			'Sidebar UL/OL' => dynamik_html_markup( 'sidebar_primary' ) . ' ul, ' . dynamik_html_markup( 'sidebar_primary' ) . ' ol',
			'Sidebar UL LI' => dynamik_html_markup( 'sidebar_primary' ) . ' ul li'
		)
	);
	
	return $dynamik_sidebar_elements_array;
}

/**
 * Build the CSS Builder sidebar elements menu.
 *
 * @since 1.0
 */
function dynamik_build_sidebar_elements_menu( $selected = '' )
{
	$dynamik_sidebar_elements_array = dynamik_sidebar_elements_array();
	
	foreach( $dynamik_sidebar_elements_array as $element_type => $elements )
	{
		echo '<optgroup label="' . $element_type . '">';
		foreach( $elements as $element_slug => $element_data )
		{
			$option = '<option value="' . $element_data . ' {"';
				
			if( $element_data == $selected )
			{
				$option .= ' selected="selected"';
			}

			$option .= '>' . $element_slug . '</option>';
			
			echo $option;
		}
		echo '</optgroup>';
	}
}

/**
 * Build sidebar alt CSS elements drop-down list.
 *
 * @since 1.0
 * @return sidebar alt CSS elements array.
 */
function dynamik_sidebar_alt_elements_array()
{
	$dynamik_sidebar_alt_elements_array = array(
		'-- Sidebar Alt --' => array(
			'Sidebar Alt' => dynamik_html_markup( 'sidebar_secondary' ),
			'Sidebar Alt H4' => dynamik_html_markup( 'sidebar_secondary' ) . ' h4',
			'Sidebar Alt Widget' => dynamik_html_markup( 'sidebar_secondary' ) . ' .widget',
			'Sidebar Alt Link' => dynamik_html_markup( 'sidebar_secondary' ) . ' a, ' . dynamik_html_markup( 'sidebar_secondary' ) . ' a:visited',
			'Sidebar Alt Link Hover' => dynamik_html_markup( 'sidebar_secondary' ) . ' a:hover',
			'Sidebar Alt UL/OL' => dynamik_html_markup( 'sidebar_secondary' ) . ' ul, ' . dynamik_html_markup( 'sidebar_secondary' ) . ' ol',
			'Sidebar Alt UL LI' => dynamik_html_markup( 'sidebar_secondary' ) . ' ul li'
		)
	);
	
	return $dynamik_sidebar_alt_elements_array;
}

/**
 * Build the CSS Builder sidebar alt elements menu.
 *
 * @since 1.0
 */
function dynamik_build_sidebar_alt_elements_menu( $selected = '' )
{
	$dynamik_sidebar_alt_elements_array = dynamik_sidebar_alt_elements_array();
	
	foreach( $dynamik_sidebar_alt_elements_array as $element_type => $elements )
	{
		echo '<optgroup label="' . $element_type . '">';
		foreach( $elements as $element_slug => $element_data )
		{
			$option = '<option value="' . $element_data . ' {"';
				
			if( $element_data == $selected )
			{
				$option .= ' selected="selected"';
			}

			$option .= '>' . $element_slug . '</option>';
			
			echo $option;
		}
		echo '</optgroup>';
	}
}

/**
 * Build footer CSS elements drop-down list.
 *
 * @since 1.0
 * @return footer CSS elements array.
 */
function dynamik_footer_elements_array()
{
	$dynamik_footer_elements_array = array(
		'-- Footer --' => array(
			'Footer' => dynamik_html_markup( 'site_footer' ),
			'Footer Wrap' => dynamik_html_markup( 'site_footer' ) . ' .wrap',
			'Footer Text' => dynamik_html_markup( 'site_footer' ) . ' p',
			'Footer Link' => dynamik_html_markup( 'site_footer' ) . ' a, ' . dynamik_html_markup( 'site_footer' ) . ' a:visited',
			'Footer Link Hover' => dynamik_html_markup( 'site_footer' ) . ' a:hover',
			'Footer Go To Top' => dynamik_html_markup( 'site_footer' ) . ' .gototop',
			'Footer Credits' => dynamik_html_markup( 'site_footer' ) . ' .creds'
		)
	);
	
	return $dynamik_footer_elements_array;
}

/**
 * Build the CSS Builder footer elements menu.
 *
 * @since 1.0
 */
function dynamik_build_footer_elements_menu( $selected = '' )
{
	$dynamik_footer_elements_array = dynamik_footer_elements_array();
	
	foreach( $dynamik_footer_elements_array as $element_type => $elements )
	{
		echo '<optgroup label="' . $element_type . '">';
		foreach( $elements as $element_slug => $element_data )
		{
			$option = '<option value="' . $element_data . ' {"';
				
			if( $element_data == $selected )
			{
				$option .= ' selected="selected"';
			}

			$option .= '>' . $element_slug . '</option>';
			
			echo $option;
		}
		echo '</optgroup>';
	}
}

/**
 * Build ez feature top CSS elements drop-down list.
 *
 * @since 1.0
 * @return ez feature top CSS elements array.
 */
function dynamik_ez_feature_top_elements_array()
{
	$dynamik_ez_feature_top_elements_array = array(
		'-- EZ Feature Top --' => array(
			'EZ Feature Top Container Wrap' => '#ez-feature-top-container-wrap',
			'EZ Feature Top Container' => '#ez-feature-top-container',
			'EZ Feature Top Widget Area H4' => '#ez-feature-top-container .ez-widget-area h4',
			'EZ Feature Top Widget Area Link' => '#ez-feature-top-container .ez-widget-area a, #ez-feature-top-container .ez-widget-area a:visited',
			'EZ Feature Top Widget Area Link Hover' => '#ez-feature-top-container .ez-widget-area a:hover',
			'EZ Feature Top 1' => '#ez-feature-top-1',
			'EZ Feature Top 2' => '#ez-feature-top-2',
			'EZ Feature Top 3' => '#ez-feature-top-3',
			'EZ Feature Top 4' => '#ez-feature-top-4',
			'EZ Feature Top Widget Area' => '#ez-feature-top-container .ez-widget-area',
			'EZ Feature Top Widget Area Paragraph' => '#ez-feature-top-container .ez-widget-area p',
			'ez_feature_top_1 Widget Area' => 'body.ez-feature-top-1 #ez-feature-top-container .ez-widget-area',
			'ez_feature_top_2 Widget Areas' => 'body.ez-feature-top-2 #ez-feature-top-container .ez-widget-area',
			'ez_feature_top_3 Widget Areas' => '#ez-feature-top-container .ez-widget-area',
			'ez_feature_top_4 Widget Areas' => 'body.ez-feature-top-4 #ez-feature-top-container .ez-widget-area',
			'Wide Left/Wide Right Widget Area' => 'body.ez-feature-top-wide-left-2 #ez-feature-top-1.ez-widget-area, body.ez-feature-top-wide-right-2 #ez-feature-top-2.ez-widget-area',
			'First/Only Widget Area' => '#ez-feature-top-container .ez-first, #ez-feature-top-container .ez-only'
		),
		'-- EZ Widget Area Class --' => array(
			'EZ Widget Area' => '.ez-widget-area',
			'EZ Widget Area H4' => '.ez-widget-area h4',
			'EZ Widget Area UL' => '.ez-widget-area ul',
			'EZ Widget Area OL' => '.ez-widget-area ol',
			'EZ Widget Area UL LI' => '.ez-widget-area ul li',
			'EZ Widget Area OL LI' => '.ez-widget-area ol li'
		)
	);
	
	return $dynamik_ez_feature_top_elements_array;
}

/**
 * Build the CSS Builder ez feature top elements menu.
 *
 * @since 1.0
 */
function dynamik_build_ez_feature_top_elements_menu( $selected = '' )
{
	$dynamik_ez_feature_top_elements_array = dynamik_ez_feature_top_elements_array();
	
	foreach( $dynamik_ez_feature_top_elements_array as $element_type => $elements )
	{
		echo '<optgroup label="' . $element_type . '">';
		foreach( $elements as $element_slug => $element_data )
		{
			$option = '<option value="' . $element_data . ' {"';
				
			if( $element_data == $selected )
			{
				$option .= ' selected="selected"';
			}

			$option .= '>' . $element_slug . '</option>';
			
			echo $option;
		}
		echo '</optgroup>';
	}
}

/**
 * Build ez fat footer CSS elements drop-down list.
 *
 * @since 1.0
 * @return ez fat footer CSS elements array.
 */
function dynamik_ez_fat_footer_elements_array()
{
	$dynamik_ez_fat_footer_elements_array = array(
		'-- EZ Fat Footer --' => array(
			'EZ Fat Footer Container Wrap' => '#ez-fat-footer-container-wrap',
			'EZ Fat Footer Container' => '#ez-fat-footer-container',
			'EZ Fat Footer Widget Area H4' => '#ez-fat-footer-container .ez-widget-area h4',
			'EZ Fat Footer Widget Area Link' => '#ez-fat-footer-container .ez-widget-area a, #ez-fat-footer-container .ez-widget-area a:visited',
			'EZ Fat Footer Widget Area Link Hover' => '#ez-fat-footer-container .ez-widget-area a:hover',
			'EZ Fat Footer 1' => '#ez-fat-footer-1',
			'EZ Fat Footer 2' => '#ez-fat-footer-2',
			'EZ Fat Footer 3' => '#ez-fat-footer-3',
			'EZ Fat Footer 4' => '#ez-fat-footer-4',
			'EZ Fat Footer Widget Area' => '#ez-fat-footer-container .ez-widget-area',
			'EZ Fat Footer Widget Area Paragraph' => '#ez-fat-footer-container .ez-widget-area p',
			'ez_fat_footer_1 Widget Area' => 'body.ez-fat-footer-1 #ez-fat-footer-container .ez-widget-area',
			'ez_fat_footer_2 Widget Areas' => 'body.ez-fat-footer-2 #ez-fat-footer-container .ez-widget-area',
			'ez_fat_footer_3 Widget Areas' => '#ez-fat-footer-container .ez-widget-area',
			'ez_fat_footer_4 Widget Areas' => 'body.ez-fat-footer-4 #ez-fat-footer-container .ez-widget-area',
			'Wide Left/Wide Right Widget Area' => 'body.ez-fat-footer-wide-left-2 #ez-fat-footer-1.ez-widget-area, body.ez-fat-footer-wide-right-2 #ez-fat-footer-2.ez-widget-area',
			'First/Only Widget Area' => '#ez-fat-footer-container .ez-first, #ez-fat-footer-container .ez-only'
		),
		'-- EZ Widget Area Class --' => array(
			'EZ Widget Area' => '.ez-widget-area',
			'EZ Widget Area H4' => '.ez-widget-area h4',
			'EZ Widget Area UL' => '.ez-widget-area ul',
			'EZ Widget Area OL' => '.ez-widget-area ol',
			'EZ Widget Area UL LI' => '.ez-widget-area ul li',
			'EZ Widget Area OL LI' => '.ez-widget-area ol li'
		)
	);
	
	return $dynamik_ez_fat_footer_elements_array;
}

/**
 * Build the CSS Builder ez fat footer elements menu.
 *
 * @since 1.0
 */
function dynamik_build_ez_fat_footer_elements_menu( $selected = '' )
{
	$dynamik_ez_fat_footer_elements_array = dynamik_ez_fat_footer_elements_array();
	
	foreach( $dynamik_ez_fat_footer_elements_array as $element_type => $elements )
	{
		echo '<optgroup label="' . $element_type . '">';
		foreach( $elements as $element_slug => $element_data )
		{
			$option = '<option value="' . $element_data . ' {"';
				
			if( $element_data == $selected )
			{
				$option .= ' selected="selected"';
			}

			$option .= '>' . $element_slug . '</option>';
			
			echo $option;
		}
		echo '</optgroup>';
	}
}

/**
 * Build ez home CSS elements drop-down list.
 *
 * @since 1.0
 * @return ez home CSS elements array.
 */
function dynamik_ez_home_elements_array()
{
	$dynamik_ez_home_elements_array = array(
		'-- EZ Home --' => array(
			'EZ Home Hook Wrap' => '#home-hook-wrap',
			'EZ Home Container Wrap' => '#ez-home-container-wrap',
			'EZ Home Widget Area H4' => '#ez-home-container-wrap .ez-widget-area h4',
			'EZ Home Widget Area' => '#ez-home-container-wrap .ez-widget-area',
			'EZ Home Widget Area Paragraph' => '#ez-home-container-wrap .ez-widget-area p',
			'EZ Home Widget Area Link' => '#ez-home-container-wrap .ez-widget-area a, #ez-home-container-wrap .ez-widget-area a:visited',
			'EZ Home Widget Area Link Hover' => '#ez-home-container-wrap .ez-widget-area a:hover',
			'EZ Home Container Area Class' => '.ez-home-container-area',
			'EZ Home Top Container' => '#ez-home-top-container',
			'EZ Home Top 1' => '#ez-home-top-1',
			'EZ Home Top 2' => '#ez-home-top-2',
			'EZ Home Top 3' => '#ez-home-top-3',
			'EZ Home Middle Container' => '#ez-home-middle-container',
			'EZ Home Middle 1' => '#ez-home-middle-1',
			'EZ Home Middle 2' => '#ez-home-middle-2',
			'EZ Home Middle 3' => '#ez-home-middle-3',
			'EZ Home Bottom Container' => '#ez-home-bottom-container',
			'EZ Home Bottom 1' => '#ez-home-bottom-1',
			'EZ Home Bottom 2' => '#ez-home-bottom-2',
			'EZ Home Bottom 3' => '#ez-home-bottom-3'
		),
		'-- EZ Widget Area Class --' => array(
			'EZ Widget Area' => '.ez-widget-area',
			'EZ Widget Area H4' => '.ez-widget-area h4',
			'EZ Widget Area UL' => '.ez-widget-area ul',
			'EZ Widget Area OL' => '.ez-widget-area ol',
			'EZ Widget Area UL LI' => '.ez-widget-area ul li',
			'EZ Widget Area OL LI' => '.ez-widget-area ol li'
		)
	);
	
	return $dynamik_ez_home_elements_array;
}

/**
 * Build the CSS Builder ez home elements menu.
 *
 * @since 1.0
 */
function dynamik_build_ez_home_elements_menu( $selected = '' )
{
	$dynamik_ez_home_elements_array = dynamik_ez_home_elements_array();
	
	foreach( $dynamik_ez_home_elements_array as $element_type => $elements )
	{
		echo '<optgroup label="' . $element_type . '">';
		foreach( $elements as $element_slug => $element_data )
		{
			$option = '<option value="' . $element_data . ' {"';
				
			if( $element_data == $selected )
			{
				$option .= ' selected="selected"';
			}

			$option .= '>' . $element_slug . '</option>';
			
			echo $option;
		}
		echo '</optgroup>';
	}
}

/**
 * Build ez home sidebar CSS elements drop-down list.
 *
 * @since 1.0
 * @return ez home sidebar CSS elements array.
 */
function dynamik_ez_home_sidebar_elements_array()
{
	$dynamik_ez_home_sidebar_elements_array = array(
		'-- EZ Home Sidebars --' => array(
			'EZ Home Sidebar Wrap' => '#ez-home-sidebar-wrap',
			'EZ Home Sidebar' => '#ez-home-sidebar',
			'EZ Home Sidebar Widget Area H4' => '#ez-home-sidebar h4',
			'EZ Home Sidebar Widget Area' => '#ez-home-sidebar .ez-widget-area',
			'EZ Home Sidebar Widget Area Link' => '#ez-home-sidebar a, #ez-home-sidebar a:visited',
			'EZ Home Sidebar Widget Area Link Hover' => '#ez-home-sidebar a:hover',
			'EZ Home Sidebar UL/OL' => '#ez-home-sidebar ul, #ez-home-sidebar ol',
			'EZ Home Sidebar UL LI' => '#ez-home-sidebar ul li'
		),
		'-- EZ Widget Area Class --' => array(
			'EZ Widget Area' => '.ez-widget-area',
			'EZ Widget Area H4' => '.ez-widget-area h4',
			'EZ Widget Area UL' => '.ez-widget-area ul',
			'EZ Widget Area OL' => '.ez-widget-area ol',
			'EZ Widget Area UL LI' => '.ez-widget-area ul li',
			'EZ Widget Area OL LI' => '.ez-widget-area ol li'
		)
	);
	
	return $dynamik_ez_home_sidebar_elements_array;
}

/**
 * Build the CSS Builder ez home sidebar elements menu.
 *
 * @since 1.0
 */
function dynamik_build_ez_home_sidebar_elements_menu( $selected = '' )
{
	$dynamik_ez_home_sidebar_elements_array = dynamik_ez_home_sidebar_elements_array();
	
	foreach( $dynamik_ez_home_sidebar_elements_array as $element_type => $elements )
	{
		echo '<optgroup label="' . $element_type . '">';
		foreach( $elements as $element_slug => $element_data )
		{
			$option = '<option value="' . $element_data . ' {"';
				
			if( $element_data == $selected )
			{
				$option .= ' selected="selected"';
			}

			$option .= '>' . $element_slug . '</option>';
			
			echo $option;
		}
		echo '</optgroup>';
	}
}

/**
 * Build home slider CSS elements drop-down list.
 *
 * @since 1.0
 * @return home slider CSS elements array.
 */
function dynamik_ez_home_slider_elements_array()
{
	$dynamik_ez_home_slider_elements_array = array(
		'-- EZ Home Slider --' => array(
			'EZ Home Slider Wrap' => '#ez-home-slider-container-wrap',
			'EZ Home Slider' => '#ez-home-slider'
		),
		'-- EZ Widget Area Class --' => array(
			'EZ Widget Area' => '.ez-widget-area',
			'EZ Widget Area H4' => '.ez-widget-area h4',
			'EZ Widget Area UL' => '.ez-widget-area ul',
			'EZ Widget Area OL' => '.ez-widget-area ol',
			'EZ Widget Area UL LI' => '.ez-widget-area ul li',
			'EZ Widget Area OL LI' => '.ez-widget-area ol li'
		)
	);
	
	return $dynamik_ez_home_slider_elements_array;
}

/**
 * Build the CSS Builder home slider elements menu.
 *
 * @since 1.0
 */
function dynamik_build_ez_home_slider_elements_menu( $selected = '' )
{
	$dynamik_ez_home_slider_elements_array = dynamik_ez_home_slider_elements_array();
	
	foreach( $dynamik_ez_home_slider_elements_array as $element_type => $elements )
	{
		echo '<optgroup label="' . $element_type . '">';
		foreach( $elements as $element_slug => $element_data )
		{
			$option = '<option value="' . $element_data . ' {"';
				
			if( $element_data == $selected )
			{
				$option .= ' selected="selected"';
			}

			$option .= '>' . $element_slug . '</option>';
			
			echo $option;
		}
		echo '</optgroup>';
	}
}

/**
 * Build custom widget CSS elements drop-down list.
 *
 * @since 1.0.3
 * @return custom widget CSS elements array.
 */
function dynamik_customwidget_elements_array()
{
	$dynamik_customwidget_elements_array = array(
		'-- Custom Widgets Areas --' => array(
			'Custom Widget Area' => '.dynamik-widget-area',
			'Custom Widget Area H4' => '.dynamik-widget-area h4',
			'Custom Widget Area Link' => '.dynamik-widget-area a, .catalyst-widget-area a:visited',
			'Custom Widget Area Link Hover' => '.dynamik-widget-area a:hover'
		)
	);
	
	return $dynamik_customwidget_elements_array;
}

/**
 * Build the CSS Builder custom widget elements menu.
 *
 * @since 1.0
 */
function dynamik_build_customwidget_elements_menu( $selected = '' )
{
	$dynamik_customwidget_elements_array = dynamik_customwidget_elements_array();
	
	foreach( $dynamik_customwidget_elements_array as $element_type => $elements )
	{
		echo '<optgroup label="' . $element_type . '">';
		foreach( $elements as $element_slug => $element_data )
		{
			$option = '<option value="' . $element_data . ' {"';
				
			if( $element_data == $selected )
			{
				$option .= ' selected="selected"';
			}

			$option .= '>' . $element_slug . '</option>';
			
			echo $option;
		}
		echo '</optgroup>';
	}
}

/**
 * Build featuredpost CSS elements drop-down list.
 *
 * @since 1.0
 * @return featuredpost CSS elements array.
 */
function dynamik_featuredpost_elements_array()
{
	$dynamik_featuredpost_elements_array = array(
		'-- Dynamik Featured Post --' => array(
			'Featured Post' => '.featuredpost',
			'Featured Post .post' => '.featuredpost .post',
			'Featured Post Title' => '.featuredpost .post h2',
			'Featured Post Title Link' => '.featuredpost .post h2 a, .featuredpost .post h2 a:visited',
			'Featured Post Title Link Hover' => '.featuredpost .post h2 a:hover',
			'Featured Post Post Info' => '.featuredpost .post ' . dynamik_html_markup( 'entry_header_entry_meta' ),
			'Featured Post Post Info Link' => '.featuredpost .post ' . dynamik_html_markup( 'entry_header_entry_meta' ) . ' a, .featuredpost .post ' . dynamik_html_markup( 'entry_header_entry_meta' ) . ' a:visited',
			'Featured Post Post Info Link Hover' => '.featuredpost .post ' . dynamik_html_markup( 'entry_header_entry_meta' ) . ' a:hover',
			'Featured Post Paragraph' => '.featuredpost .post p',
			'Featured Post Link' => '.featuredpost .post a, .featuredpost .post a:visited',
			'Featured Post Link Hover' => '.featuredpost .post a:hover'
		)
	);
	
	return $dynamik_featuredpost_elements_array;
}

/**
 * Build the CSS Builder featuredpost elements menu.
 *
 * @since 1.0
 */
function dynamik_build_featuredpost_elements_menu( $selected = '' )
{
	$dynamik_featuredpost_elements_array = dynamik_featuredpost_elements_array();
	
	foreach( $dynamik_featuredpost_elements_array as $element_type => $elements )
	{
		echo '<optgroup label="' . $element_type . '">';
		foreach( $elements as $element_slug => $element_data )
		{
			$option = '<option value="' . $element_data . ' {"';
				
			if( $element_data == $selected )
			{
				$option .= ' selected="selected"';
			}

			$option .= '>' . $element_slug . '</option>';
			
			echo $option;
		}
		echo '</optgroup>';
	}
}

/**
 * Build featuredpage CSS elements drop-down list.
 *
 * @since 1.0
 * @return featuredpage CSS elements array.
 */
function dynamik_featuredpage_elements_array()
{
	$dynamik_featuredpage_elements_array = array(
		'-- Dynamik Featured Page --' => array(
			'Featured Page' => '.featuredpage',
			'Featured Page .page' => '.featuredpage .page',
			'Featured Page Title' => '.featuredpage .page h2',
			'Featured Page Title Link' => '.featuredpage .page h2 a, .featuredpage .page h2 a:visited',
			'Featured Page Title Link Hover' => '.featuredpage .page h2 a:hover',
			'Featured Page Byline' => '.featuredpage .page .byline',
			'Featured Page Byline Link' => '.featuredpage .page .byline a, .featuredpage .page .byline a:visited',
			'Featured Page Byline Link Hover' => '.featuredpage .page .byline a:hover',
			'Featured Page Paragraph' => '.featuredpage .page p',
			'Featured Page Link' => '.featuredpage .page a, .featuredpage .page a:visited',
			'Featured Page Link Hover' => '.featuredpage .page a:hover'
		)
	);
	
	return $dynamik_featuredpage_elements_array;
}

/**
 * Build the CSS Builder featuredpage elements menu.
 *
 * @since 1.0
 */
function dynamik_build_featuredpage_elements_menu( $selected = '' )
{
	$dynamik_featuredpage_elements_array = dynamik_featuredpage_elements_array();
	
	foreach( $dynamik_featuredpage_elements_array as $element_type => $elements )
	{
		echo '<optgroup label="' . $element_type . '">';
		foreach( $elements as $element_slug => $element_data )
		{
			$option = '<option value="' . $element_data . ' {"';
				
			if( $element_data == $selected )
			{
				$option .= ' selected="selected"';
			}

			$option .= '>' . $element_slug . '</option>';
			
			echo $option;
		}
		echo '</optgroup>';
	}
}

/**********
  Non-Popup Elements
           **********/

/**
 * Build navbar CSS elements drop-down list.
 *
 * @since 1.0
 * @return navbar CSS elements array.
 */
function dynamik_navbars_elements_array()
{
	$dynamik_navbars_elements_array = array(
		'-- Nav --' => array(
			'Nav' => dynamik_html_markup( 'nav_primary' ),
			'Nav Menu' => '.menu-primary',
			'Nav Page Link' => '.menu-primary a',
			'Nav Page Link Hover' => '.menu-primary li a:active, .menu-primary li a:hover',
			'Nav Current Page Link' => '.menu-primary .current_page_item a, .menu-primary .current-cat a, .menu-primary .current-menu-item a',
			'Nav Page jQuery Sub-Indicator' => '.menu-primary li a .sf-sub-indicator, .menu-primary li li a .sf-sub-indicator, .menu-primary li li li a .sf-sub-indicator',
			'Nav Sub-Page Link' => '.menu-primary li li a, .menu-primary li li a:link, .menu-primary li li a:visited',
			'Nav Sub-Page Link Hover' => '.menu-primary li li a:active, .menu-primary li li a:hover',
			'Nav UL' => '.menu-primary ul',
			'Nav LI' => '.menu-primary li',
			'Nav LI UL' => '.menu-primary li ul',
			'Nav LI UL UL' => '.menu-primary li ul ul',
			'Nav Right' => '.genesis-nav-menu li.right',
			'Nav Right Search' => '.genesis-nav-menu li.search',
			'Nav Right RSS' => '.genesis-nav-menu li.rss a',
			'Nav Right Twitter' => '.genesis-nav-menu li.twitter a',
			'Nav Right Link' => '.genesis-nav-menu li.right a, .genesis-nav-menu li.right a:visted',
			'Nav Right Link Hover' => '.genesis-nav-menu li.right a:hover'
		),
		'-- Subnav --' => array(
			'Subnav' => dynamik_html_markup( 'nav_secondary' ),
			'Subnav Menu' => '.menu-secondary',
			'Subnav Page Link' => '.menu-secondary a',
			'Subnav Page Link Hover' => '.menu-secondary li a:active, .menu-secondary li a:hover',
			'Subnav Current Page Link' => '.menu-secondary .current_page_item a, .menu-secondary .current-cat a, .menu-secondary .current-menu-item a',
			'Subnav Page jQuery Sub-Indicator' => '.menu-secondary li a .sf-sub-indicator, .menu-secondary li li a .sf-sub-indicator, .menu-secondary li li li a .sf-sub-indicator',
			'Subnav Sub-Page Link' => '.menu-secondary li li a, .menu-secondary li li a:link, .menu-secondary li li a:visited',
			'Subnav Sub-Page Link Hover' => '.menu-secondary li li a:active, .menu-secondary li li a:hover',
			'Subnav UL' => '.menu-secondary ul',
			'Subnav LI' => '.menu-secondary li',
			'Subnav LI UL' => '.menu-secondary li ul',
			'Subnav LI UL UL' => '.menu-secondary li ul ul'
		),
		'-- Header Menu --' => array(
			'Header Menu' => dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu',
			'Header Menu Page Link' => dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu a',
			'Header Menu Page Link Hover' => dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li a:active, ' . dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li a:hover',
			'Header Menu Current Page Link' => dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu .current_page_item a, ' . dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu .current-cat a, ' . dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu .current-menu-item a',
			'Header Menu Page jQuery Sub-Indicator' => dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li a .sf-sub-indicator, ' . dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li li a .sf-sub-indicator, ' . dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li li li a .sf-sub-indicator',
			'Header Menu Sub-Page Link' => dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li li a, ' . dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li li a:link, ' . dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li li a:visited',
			'Header Menu Sub-Page Link Hover' => dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li li a:active, ' . dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li li a:hover',
			'Header Menu UL' => dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu ul',
			'Header Menu LI' => dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li',
			'Header Menu LI UL' => dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li ul',
			'Header Menu LI UL UL' => dynamik_html_markup( 'site_header' ) . ' .genesis-nav-menu li ul ul'
		)
	);
	
	return $dynamik_navbars_elements_array;
}

/**
 * Build the CSS Builder navbar elements menu.
 *
 * @since 1.0
 */
function dynamik_build_navbars_elements_menu( $selected = '' )
{
	$dynamik_navbars_elements_array = dynamik_navbars_elements_array();
	
	foreach( $dynamik_navbars_elements_array as $element_type => $elements )
	{
		echo '<optgroup label="' . $element_type . '">';
		foreach( $elements as $element_slug => $element_data )
		{
			$option = '<option value="' . $element_data . ' {"';
				
			if( $element_data == $selected )
			{
				$option .= ' selected="selected"';
			}

			$option .= '>' . $element_slug . '</option>';
			
			echo $option;
		}
		echo '</optgroup>';
	}
}

/**
 * Build ez CSS elements drop-down list.
 *
 * @since 1.0
 * @return ez CSS elements array.
 */
function dynamik_ez_elements_array()
{
	$dynamik_ez_elements_array = array(
		'-- EZ Widget Area Class --' => array(
			'EZ Widget Area' => '.ez-widget-area',
			'EZ Widget Area H4' => '.ez-widget-area h4',
			'EZ Widget Area UL' => '.ez-widget-area ul',
			'EZ Widget Area OL' => '.ez-widget-area ol',
			'EZ Widget Area UL LI' => '.ez-widget-area ul li',
			'EZ Widget Area OL LI' => '.ez-widget-area ol li'
		),
		'-- EZ Home --' => array(
			'EZ Home Container Wrap' => '#ez-home-container-wrap',
			'EZ Home Widget Area H4' => '#ez-home-container-wrap .ez-widget-area h4',
			'EZ Home Widget Area' => '#ez-home-container-wrap .ez-widget-area',
			'EZ Home Widget Area Link' => '#ez-home-container-wrap .ez-widget-area a, #ez-home-container-wrap .ez-widget-area a:visited',
			'EZ Home Widget Area Link Hover' => '#ez-home-container-wrap .ez-widget-area a:hover',
			'EZ Home Container Area Class' => '.ez-home-container-area',
			'EZ Home Top Container' => '#ez-home-top-container',
			'EZ Home Top 1' => '#ez-home-top-1',
			'EZ Home Top 2' => '#ez-home-top-2',
			'EZ Home Top 3' => '#ez-home-top-3',
			'EZ Home Middle Container' => '#ez-home-middle-container',
			'EZ Home Middle 1' => '#ez-home-middle-1',
			'EZ Home Middle 2' => '#ez-home-middle-2',
			'EZ Home Middle 3' => '#ez-home-middle-3',
			'EZ Home Bottom Container' => '#ez-home-bottom-container',
			'EZ Home Bottom 1' => '#ez-home-bottom-1',
			'EZ Home Bottom 2' => '#ez-home-bottom-2',
			'EZ Home Bottom 3' => '#ez-home-bottom-3'
		),
		'-- EZ Feature Top --' => array(
			'EZ Feature Top Container Wrap' => '#ez-feature-top-container-wrap',
			'EZ Feature Top Container' => '#ez-feature-top-container',
			'EZ Feature Top Widget Area H4' => '#ez-feature-top-container .ez-widget-area h4',
			'EZ Feature Top Widget Area' => '#ez-feature-top-container .ez-widget-area',
			'EZ Feature Top Widget Area Link' => '#ez-feature-top-container .ez-widget-area a, #ez-feature-top-container .ez-widget-area a:visited',
			'EZ Feature Top Widget Area Link Hover' => '#ez-feature-top-container .ez-widget-area a:hover',
			'EZ Feature Top 1' => '#ez-feature-top-1',
			'EZ Feature Top 2' => '#ez-feature-top-2',
			'EZ Feature Top 3' => '#ez-feature-top-3',
			'EZ Feature Top 4' => '#ez-feature-top-4'
		),
		'-- EZ Fat Footer --' => array(
			'EZ Fat Footer Container Wrap' => '#ez-fat-footer-container-wrap',
			'EZ Fat Footer Container' => '#ez-fat-footer-container',
			'EZ Fat Footer Widget Area H4' => '#ez-fat-footer-container .ez-widget-area h4',
			'EZ Fat Footer Widget Area' => '#ez-fat-footer-container .ez-widget-area',
			'EZ Fat Footer Widget Area Link' => '#ez-fat-footer-container .ez-widget-area a, #ez-fat-footer-container .ez-widget-area a:visited',
			'EZ Fat Footer Widget Area Link Hover' => '#ez-fat-footer-container .ez-widget-area a:hover',
			'EZ Fat Footer 1' => '#ez-fat-footer-1',
			'EZ Fat Footer 2' => '#ez-fat-footer-2',
			'EZ Fat Footer 3' => '#ez-fat-footer-3',
			'EZ Fat Footer 4' => '#ez-fat-footer-4'
		),
		'-- EZ Home Sidebars --' => array(
			'EZ Home Sidebar Wrap' => '#ez-home-sidebar-wrap',
			'EZ Home Sidebar' => '#ez-home-sidebar',
			'EZ Home Sidebar Widget Area H4' => '#ez-home-sidebar h4',
			'EZ Home Sidebar Widget Area' => '#ez-home-sidebar .ez-widget-area',
			'EZ Home Sidebar Widget Area Link' => '#ez-home-sidebar a, #ez-home-sidebar a:visited',
			'EZ Home Sidebar Widget Area Link Hover' => '#ez-home-sidebar a:hover',
		),
		'-- EZ Home Slider --' => array(
			'EZ Home Slider Wrap' => '#ez-home-slider-container-wrap',
			'EZ Home Slider' => '#ez-home-slider'
		)
	);
	
	return $dynamik_ez_elements_array;
}

/**
 * Build the CSS Builder ez elements menu.
 *
 * @since 1.0
 */
function dynamik_build_ez_elements_menu( $selected = '' )
{
	$dynamik_ez_elements_array = dynamik_ez_elements_array();
	
	foreach( $dynamik_ez_elements_array as $element_type => $elements )
	{
		echo '<optgroup label="' . $element_type . '">';
		foreach( $elements as $element_slug => $element_data )
		{
			$option = '<option value="' . $element_data . ' {"';
				
			if( $element_data == $selected )
			{
				$option .= ' selected="selected"';
			}

			$option .= '>' . $element_slug . '</option>';
			
			echo $option;
		}
		echo '</optgroup>';
	}
}

/**
 * Build general content CSS elements drop-down list.
 *
 * @since 1.0
 * @return general content CSS elements array.
 */
function dynamik_generalcontent_elements_array()
{
	$dynamik_generalcontent_elements_array = array(
		'-- Main Content --' => array(
			'Content' => dynamik_html_markup( 'content' ),
			'Content Post' => dynamik_html_markup( 'content' ) . ' .post',
			'Content Page' => dynamik_html_markup( 'content' ) . ' .page',
			'Content Paragraph' => '.entry-content p',
			'Content Lists' => '.entry-content ul li, .entry-content ol li',
			'Content Link' => '.entry-content a, .entry-content a:visited',
			'Content Link Hover' => '.entry-content a:hover',
			'Content Blockquote' => dynamik_html_markup( 'content' ) . ' blockquote',
			'Content Blockquote Paragraph' => dynamik_html_markup( 'content' ) . ' blockquote p',
			'Content Blockquote Link' => dynamik_html_markup( 'content' ) . ' blockquote a, ' . dynamik_html_markup( 'content' ) . ' blockquote a:visited',
			'Content Blockquote Link Hover' => dynamik_html_markup( 'content' ) . ' blockquote a:hover',
			'Post/Page Title' => dynamik_html_markup( 'content' ) . ' h1.entry-title, ' . dynamik_html_markup( 'content' ) . ' h2.entry-title',
			'Post Title Link' => dynamik_html_markup( 'content' ) . ' .post h2 a, ' . dynamik_html_markup( 'content' ) . ' .post h2 a:visited',
			'Post Title Link Hover' => dynamik_html_markup( 'content' ) . ' .post h2 a:hover',
			'Content Post H1' => dynamik_html_markup( 'content' ) . ' .post h1',
			'Content Post H2' => dynamik_html_markup( 'content' ) . ' .post h2',
			'Content Post H3' => dynamik_html_markup( 'content' ) . ' .post h3',
			'Content Post H4' => dynamik_html_markup( 'content' ) . ' .post h4',
			'Content Post H5' => dynamik_html_markup( 'content' ) . ' .post h5',
			'Content Post H6' => dynamik_html_markup( 'content' ) . ' .post h6',
			'Content Page H1' => dynamik_html_markup( 'content' ) . ' .page h1',
			'Content Page H2' => dynamik_html_markup( 'content' ) . ' .page h2',
			'Content Page H3' => dynamik_html_markup( 'content' ) . ' .page h3',
			'Content Page H4' => dynamik_html_markup( 'content' ) . ' .page h4',
			'Content Page H5' => dynamik_html_markup( 'content' ) . ' .page h5',
			'Content Page H6' => dynamik_html_markup( 'content' ) . ' .page h6',
			'Content Post/Page UL LI' => '.entry-content ul li',
			'Content Post/Page OL LI' => '.entry-content ol li',
			'Post Info' => dynamik_html_markup( 'entry_header_entry_meta' ),
			'Post Info Link' => dynamik_html_markup( 'entry_header_entry_meta' ) . ' a, ' . dynamik_html_markup( 'entry_header_entry_meta' ) . ' a:visited',
			'Post Info Link Hover' => dynamik_html_markup( 'entry_header_entry_meta' ) . ' a:hover',
			'Post Meta' => dynamik_html_markup( 'entry_footer_entry_meta' ),
			'Post Meta Link' => dynamik_html_markup( 'entry_footer_entry_meta' ) . ' a, ' . dynamik_html_markup( 'entry_footer_entry_meta' ) . ' a:visited',
			'Post Meta Link Hover' => dynamik_html_markup( 'entry_footer_entry_meta' ) . ' a:hover',
			'Post Navigation' => dynamik_html_markup( 'pagination' ),
			'Post Navigation Link' => dynamik_html_markup( 'pagination' ) . ' a, ' . dynamik_html_markup( 'pagination' ) . ' a:visited',
			'Post Navigation Link Hover' => dynamik_html_markup( 'pagination' ) . ' a:hover',
			'Post Navigation Numbered' => dynamik_html_markup( 'pagination' ) . ' li a, ' . dynamik_html_markup( 'pagination' ) . ' li.disabled, ' . dynamik_html_markup( 'pagination' ) . ' li a:hover, ' . dynamik_html_markup( 'pagination' ) . ' li.active a ',
			'Post Navigation Numbered Link' => dynamik_html_markup( 'pagination' ) . ' li a:hover, ' . dynamik_html_markup( 'pagination' ) . ' li.active a ',
			'Post Navigation Numbered Link Hover' => dynamik_html_markup( 'pagination' ) . ' li a:hover'
		)
	);
	
	return $dynamik_generalcontent_elements_array;
}

/**
 * Build the CSS Builder general content elements menu.
 *
 * @since 1.0
 */
function dynamik_build_generalcontent_elements_menu( $selected = '' )
{
	$dynamik_generalcontent_elements_array = dynamik_generalcontent_elements_array();
	
	foreach( $dynamik_generalcontent_elements_array as $element_type => $elements )
	{
		echo '<optgroup label="' . $element_type . '">';
		foreach( $elements as $element_slug => $element_data )
		{
			$option = '<option value="' . $element_data . ' {"';
				
			if( $element_data == $selected )
			{
				$option .= ' selected="selected"';
			}

			$option .= '>' . $element_slug . '</option>';
			
			echo $option;
		}
		echo '</optgroup>';
	}
}

/**********
General Option Arrays
           **********/

/**
 * Build main background options list.
 *
 * @since 1.0
 */
function dynamik_list_bg_options( $selected = '' )
{
	$dynamik_bg_options = array(
		'color' => 'Color',
		'transparent' => 'Transparent',
		'top left no-repeat' => 'No-Repeat Image (Left)',
		'top center no-repeat' => 'No-Repeat Image (Center)',
		'top right no-repeat' => 'No-Repeat Image (Right)',
		'top left repeat-x' => 'Horizontal-Repeat Image (Left)',
		'top center repeat-x' => 'Horizontal-Repeat Image (Center)',
		'top right repeat-x' => 'Horizontal-Repeat Image (Right)',
		'top left repeat-y' => 'Vertical-Repeat Image (Left)',
		'top center repeat-y' => 'Vertical-Repeat Image (Center)',
		'top right repeat-y' => 'Vertical-Repeat Image (Right)',
		'top repeat' => 'Horizontal & Vertical-Repeat Image'
	);
	
	foreach( $dynamik_bg_options as $bg_key => $bg_name )
	{
		$option = '<option value="' . $bg_key . '"';
			
		if( $bg_key == $selected )
		{
			$option .= ' selected="selected"';
		}

		$option .= '>' . $bg_name . '</option>';
		
		echo $option;
	}
}

/**
 * Build border options list.
 *
 * @since 1.0
 */
function dynamik_list_borders( $selected = '' )
{
	$dynamik_border_options = array( 'solid', 'dotted', 'dashed', 'double', 'groove', 'ridge', 'inset', 'outset' );

	foreach ( $dynamik_border_options as $border_option )
	{
		$option = '<option value="' . $border_option . '"';
		
		if( $border_option == $selected )
		{
			$option .= ' selected="selected"';
		}
		
		$option .= '>' . $border_option . '</option>';
		
		echo $option;
	}
}

/**
 * Build EZ Home Structure options list.
 *
 * @since 1.0
 */
function dynamik_list_ez_home_structure_options( $selected = '' )
{
	$dynamik_ez_home_structure_options = array(
		'disabled' => 'Disabled',
		'ez_home_1' => 'EZ Home 1',
		'ez_home_1_1' => 'EZ Home 1 1',
		'ez_home_1_2' => 'EZ Home 1 2',
		'ez_home_1_3' => 'EZ Home 1 3',
		'ez_home_1_1_1' => 'EZ Home 1 1 1',
		'ez_home_1_1_2' => 'EZ Home 1 1 2',
		'ez_home_1_1_3' => 'EZ Home 1 1 3',
		'ez_home_1_2_1' => 'EZ Home 1 2 1',
		'ez_home_1_2_2' => 'EZ Home 1 2 2',
		'ez_home_1_2_3' => 'EZ Home 1 2 3',
		'ez_home_1_3_1' => 'EZ Home 1 3 1',
		'ez_home_1_3_2' => 'EZ Home 1 3 2',
		'ez_home_1_3_3' => 'EZ Home 1 3 3',
		'ez_home_2' => 'EZ Home 2',
		'ez_home_2_1' => 'EZ Home 2 1',
		'ez_home_2_2' => 'EZ Home 2 2',
		'ez_home_2_3' => 'EZ Home 2 3',
		'ez_home_2_1_1' => 'EZ Home 2 1 1',
		'ez_home_2_1_2' => 'EZ Home 2 1 2',
		'ez_home_2_1_3' => 'EZ Home 2 1 3',
		'ez_home_2_2_1' => 'EZ Home 2 2 1',
		'ez_home_2_2_2' => 'EZ Home 2 2 2',
		'ez_home_2_2_3' => 'EZ Home 2 2 3',
		'ez_home_2_3_1' => 'EZ Home 2 3 1',
		'ez_home_2_3_2' => 'EZ Home 2 3 2',
		'ez_home_2_3_3' => 'EZ Home 2 3 3',
		'ez_home_3' => 'EZ Home 3',
		'ez_home_3_1' => 'EZ Home 3 1',
		'ez_home_3_2' => 'EZ Home 3 2',
		'ez_home_3_3' => 'EZ Home 3 3',
		'ez_home_3_1_1' => 'EZ Home 3 1 1',
		'ez_home_3_1_2' => 'EZ Home 3 1 2',
		'ez_home_3_1_3' => 'EZ Home 3 1 3',
		'ez_home_3_2_1' => 'EZ Home 3 2 1',
		'ez_home_3_2_2' => 'EZ Home 3 2 2',
		'ez_home_3_2_3' => 'EZ Home 3 2 3',
		'ez_home_3_3_1' => 'EZ Home 3 3 1',
		'ez_home_3_3_2' => 'EZ Home 3 3 2',
		'ez_home_3_3_3' => 'EZ Home 3 3 3',
		'ez_home_wl_2_3' => 'EZ Home Wide Left 2 3',
		'ez_home_wl_3_2' => 'EZ Home Wide Left 3 2',
		'ez_home_wl_2_3_3' => 'EZ Home Wide Left 2 3 3',
		'ez_home_wl_3_2_3' => 'EZ Home Wide Left 3 2 3',
		'ez_home_wl_3_3_2' => 'EZ Home Wide Left 3 3 2',
		'ez_home_wr_2_3' => 'EZ Home Wide Right 2 3',
		'ez_home_wr_3_2' => 'EZ Home Wide Right 3 2',
		'ez_home_wr_2_3_3' => 'EZ Home Wide Right 2 3 3',
		'ez_home_wr_3_2_3' => 'EZ Home Wide Right 3 2 3',
		'ez_home_wr_3_3_2' => 'EZ Home Wide Right 3 3 2'
	);
	
	foreach( $dynamik_ez_home_structure_options as $ez_home_structure_key => $ez_home_structure_name )
	{
		$option = '<option value="' . $ez_home_structure_key . '"';
			
		if( $ez_home_structure_key == $selected )
		{
			$option .= ' selected="selected"';
		}

		$option .= '>' . $ez_home_structure_name . '</option>';
		
		echo $option;
	}
}

/**
 * Build EZ Feature Top Structure options list.
 *
 * @since 1.0
 */
function dynamik_list_ez_feature_top_structure_options( $selected = '' )
{
	$dynamik_ez_feature_top_structure_options = array(
		'disabled' => 'Disabled',
		'ez_feature_top_1' => 'EZ Feature Top 1',
		'ez_feature_top_2' => 'EZ Feature Top 2',
		'ez_feature_top_3' => 'EZ Feature Top 3',
		'ez_feature_top_4' => 'EZ Feature Top 4',
		'ez_feature_top_wl_2' => 'EZ Feature Top Wide Left 2',
		'ez_feature_top_wr_2' => 'EZ Feature Top Wide Right 2'
	);
	
	foreach( $dynamik_ez_feature_top_structure_options as $ez_feature_top_structure_key => $ez_feature_top_structure_name )
	{
		$option = '<option value="' . $ez_feature_top_structure_key . '"';
			
		if( $ez_feature_top_structure_key == $selected )
		{
			$option .= ' selected="selected"';
		}

		$option .= '>' . $ez_feature_top_structure_name . '</option>';
		
		echo $option;
	}
}

/**
 * Build EZ Fat Footer Structure options list.
 *
 * @since 1.0
 */
function dynamik_list_ez_fat_footer_structure_options( $selected = '' )
{
	$dynamik_ez_fat_footer_structure_options = array(
		'disabled' => 'Disabled',
		'ez_fat_footer_1' => 'EZ Fat Footer 1',
		'ez_fat_footer_2' => 'EZ Fat Footer 2',
		'ez_fat_footer_3' => 'EZ Fat Footer 3',
		'ez_fat_footer_4' => 'EZ Fat Footer 4',
		'ez_fat_footer_wl_2' => 'EZ Fat Footer Wide Left 2',
		'ez_fat_footer_wr_2' => 'EZ Fat Footer Wide Right 2'
	);
	
	foreach( $dynamik_ez_fat_footer_structure_options as $ez_fat_footer_structure_key => $ez_fat_footer_structure_name )
	{
		$option = '<option value="' . $ez_fat_footer_structure_key . '"';
			
		if( $ez_fat_footer_structure_key == $selected )
		{
			$option .= ' selected="selected"';
		}

		$option .= '>' . $ez_fat_footer_structure_name . '</option>';
		
		echo $option;
	}
}

/**
 * List available images that have been uploaded using the Dynamik Image Uploader.
 *
 * @since 1.0
 */
function dynamik_list_images( $current_value = '' )
{
	$files = array();
	$images_path = dynamik_get_stylesheet_location( 'path' ) . 'images';
	$images_path_broken = false;
	$handle = dynamik_dir_check( $images_path ) ? opendir( $images_path ) : $images_path_broken = true;
	if( false == $images_path_broken )
	{
		while( false !== ( $file = readdir( $handle ) ) )
		{
			$ext = strtolower( substr( strrchr( $file, '.' ), 1) );
			if( $ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif' )
			{
				array_push( $files, $file );
			}
		}
		closedir( $handle );
	}
	else
	{
		$file = array();
	}
	
	echo '<option></option>';
	
	if( count( $files) != 0 )
	{
		sort( $files );
		foreach( $files as $file )
		{
			$image_list_option = '<option value="' . $file . '"';
			if( $current_value == $file )
			{
				$image_list_option .= ' selected="selected"';
			}
			$image_list_option .= '>' . $file . '</option>' . "\n";
			echo $image_list_option;
		}
	}
}

/**
 * Build "Forced Layout" options list.
 *
 * @since 1.2
 */
function dynamik_list_forced_layout_options( $selected = '' )
{
	$dynamik_forced_layout_options = array(
		"add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_content_sidebar' );" => "Content-Sidebar",
		"add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_sidebar_content' );" => "Sidebar-Content",
		"add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_content_sidebar_sidebar' );" => "Content-Sidebar-Sidebar",
		"add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_sidebar_sidebar_content' );" => "Sidebar-Sidebar-Content",
		"add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_sidebar_content_sidebar' );" => "Sidebar-Content-Sidebar",
		"add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );" => "Full Width Content"
	);
	
	foreach( $dynamik_forced_layout_options as $forced_layout_key => $forced_layout_name )
	{
		$option = '<option value="' . $forced_layout_key . '"';
			
		if( $forced_layout_key == $selected )
		{
			$option .= ' selected="selected"';
		}

		$option .= '>' . $forced_layout_name . '</option>';
		
		echo $option;
	}
}

/**
 * Build "Label Widths" options list.
 *
 * @since 1.3
 */
function dynamik_list_label_width_options( $selected = '' )
{
	$dynamik_custom_labels = get_option( 'dynamik_gen_custom_labels' );
	asort( $dynamik_custom_labels );
	$dynamik_label_width_options = array();

	if( !empty( $dynamik_custom_labels ) )
	{
		foreach( $dynamik_custom_labels as $key => $value )
		{
			if( substr( $value['label_id'], 0, 6 ) == 'width-' && is_numeric( substr( $value['label_id'], 6, 2 ) ) )
			{
				$dynamik_label_width_options['label-' . $key] = $value['label_name'];
			}
		}
	}
	
	foreach( $dynamik_label_width_options as $label_width_key => $label_width_name )
	{
		$option = '<option value="' . $label_width_key . '"';
			
		if( $label_width_key == $selected )
		{
			$option .= ' selected="selected"';
		}

		$option .= '>' . $label_width_name . '</option>';
		
		echo $option;
	}
}

/**
 * Build "Custom Widget Area Shortcodes" options list.
 *
 * @since 1.6
 */
function dynamik_list_wa_shortcode_options( $selected = '' )
{
	$dynamik_custom_widget_areas = get_option( 'dynamik_gen_custom_widget_areas' );
	asort( $dynamik_custom_widget_areas );
	$dynamik_wa_shortcode_options = array();

	if( !empty( $dynamik_custom_widget_areas ) )
	{
		foreach( $dynamik_custom_widget_areas as $key => $value )
		{
			$dynamik_wa_shortcode_options[$key] = $value['widget_name'];
		}
	}
	
	foreach( $dynamik_wa_shortcode_options as $wa_shortcode_key => $wa_shortcode_name )
	{
		$option = '<option value="' . $wa_shortcode_key . '"';
			
		if( $wa_shortcode_key == $selected )
		{
			$option .= ' selected="selected"';
		}

		$option .= '>' . $wa_shortcode_name . '</option>';
		
		echo $option;
	}
}

/**
 * Build "Custom Hook Box Shortcodes" options list.
 *
 * @since 1.6
 */
function dynamik_list_hb_shortcode_options( $selected = '' )
{
	$dynamik_custom_hook_boxes = get_option( 'dynamik_gen_custom_hook_boxes' );
	asort( $dynamik_custom_hook_boxes );
	$dynamik_hb_shortcode_options = array();

	if( !empty( $dynamik_custom_hook_boxes ) )
	{
		foreach( $dynamik_custom_hook_boxes as $key => $value )
		{
			$dynamik_hb_shortcode_options[$key] = $value['hook_name'];
		}
	}
	
	foreach( $dynamik_hb_shortcode_options as $hb_shortcode_key => $hb_shortcode_name )
	{
		$option = '<option value="' . $hb_shortcode_key . '"';
			
		if( $hb_shortcode_key == $selected )
		{
			$option .= ' selected="selected"';
		}

		$option .= '>' . $hb_shortcode_name . '</option>';
		
		echo $option;
	}
}

/**
 * Build "Code Snippets" list.
 *
 * @since 1.5
 */
function dynamik_list_code_snippets( $selected = '' )
{
	$dynamik_code_snippets = array(
		"// Your PHP comment text goes here" => "Add Simple Comment",
		"/**\n * Your PHP comment text goes here\n */" => "Add Complex Comment",
		"genesis();" => "Insert genesis() Function"
	);
	
	foreach( $dynamik_code_snippets as $code_snippet_key => $code_snippet_name )
	{
		$option = '<option value="' . $code_snippet_key . '"';
			
		if( $code_snippet_key == $selected )
		{
			$option .= ' selected="selected"';
		}

		$option .= '>' . $code_snippet_name . '</option>';
		
		echo $option;
	}
}

/**
 * Build PHP "actions" drop-down list.
 *
 * @since 1.2
 * @return PHP "actions" array.
 */
function dynamik_php_actions_array()
{
	$dynamik_php_actions_array = array(
		"-- Document <head> --" => array(
			"Doctype" => "( 'genesis_doctype', 'genesis_do_doctype' );",
			"WP Title" => "( 'genesis_title', 'wp_title' );",
			"Doc Head Control" => "( 'get_header', 'genesis_doc_head_control' );",
			"SEO Meta Description" => "( 'genesis_meta', 'genesis_seo_meta_description' );",
			"SEO Meta Keywords" => "( 'genesis_meta', 'genesis_seo_meta_keywords' );",
			"Robots Meta" => "( 'genesis_meta', 'genesis_robots_meta' );",
			"Responsive Viewport" => "( 'genesis_meta', 'genesis_responsive_viewport' );",
			"Load Favicon" => "( 'wp_head', 'genesis_load_favicon' );",
			"Meta Pingback" => "( 'wp_head', 'genesis_do_meta_pingback' );",
			"Canonical" => "( 'wp_head', 'genesis_canonical', 5 );",
			"Rel Author" => "( 'wp_head', 'genesis_rel_author' );",
			"Header Scripts" => "( 'wp_head', 'genesis_header_scripts' );",
			"Custom Header" => "( 'after_setup_theme', 'genesis_custom_header' );",
			"Custom Header Style" => "( 'wp_head', 'genesis_custom_header_style' );",
			"Load Stylesheet" => "( 'genesis_meta', 'genesis_load_stylesheet' );",
			"Feed Redirect" => "( 'template_redirect', 'genesis_feed_redirect' );",
			"Create Initial Layouts" => "( 'genesis_init', 'genesis_create_initial_layouts', 0 );",
			"SEO Compatibility Check" => "( 'after_setup_theme', 'genesis_seo_compatibility_check', 5 );",
			"HTML5 IE Fix" => "( 'wp_head', 'genesis_html5_ie_fix' );"
		),
		"-- Header --" => array(
			"Header Markup Open" => "( 'genesis_header', 'genesis_header_markup_open', 5 );",
			"Header" => "( 'genesis_header', 'genesis_do_header' );",
			"Header Markup Close" => "( 'genesis_header', 'genesis_header_markup_close', 15 );",
			"Site Title" => "( 'genesis_site_title', 'genesis_seo_site_title' );",
			"Site Description" => "( 'genesis_site_description', 'genesis_seo_site_description' );"
		),
		"-- Menus --" => array(
			"Register Nav Menus" => "( 'after_setup_theme', 'genesis_register_nav_menus' );",
			"Primary Navbar" => "( 'genesis_after_header', 'genesis_do_nav' );",
			"Secondary Navbar" => "( 'genesis_after_header', 'genesis_do_subnav' );"
		),
		"-- Misc. Before Loop --" => array(
			"Breadcrumbs" => "( 'genesis_before_loop', 'genesis_do_breadcrumbs' );",
			"Taxonomy Title/Description" => "( 'genesis_before_loop', 'genesis_do_taxonomy_title_description', 15 );",
			"Author Box Archive" => "( 'genesis_before_loop', 'genesis_do_author_box_archive', 15 );",
			"CPT Archive Title/Description" => "( 'genesis_before_loop', 'genesis_do_cpt_archive_title_description' );",
			"Search Title" => "( 'genesis_before_loop', 'genesis_do_search_title' );",
			"example_text" => "( 'genesis_loop_else', 'genesis_do_noposts' );"
		),
		"-- Misc. Loop --" => array(
			"Loop" => "( 'genesis_loop', 'genesis_do_loop' );",
			"'No Posts' Text" => "( 'genesis_loop_else', 'genesis_do_noposts' );",
			"Posts Nav" => "( 'genesis_after_endwhile', 'genesis_posts_nav' );",
			"404 Content" => "( 'genesis_loop', 'genesis_404' );"
		),
		"-- HTML5 Loop --" => array(
			"Post Format Image" => "( 'genesis_entry_header', 'genesis_do_post_format_image', 5 );",
			"Entry Header Markup Open" => "( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 )",
			"Entry Header Markup Close" => "( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );",
			"Post Title" => "( 'genesis_entry_header', 'genesis_do_post_title' );",
			"Post Image" => "( 'genesis_entry_content', 'genesis_do_post_image', 8 );",
			"Post Format Image" => "( 'genesis_entry_header', 'genesis_do_post_format_image', 4 );",
			"Post Content" => "( 'genesis_entry_content', 'genesis_do_post_content' );",
			"Post Permalink" => "( 'genesis_entry_content', 'genesis_do_post_permalink', 14 )",
			"Post Content Nav" => "( 'genesis_entry_content', 'genesis_do_post_content_nav', 12 );",
			"Post Info" => "( 'genesis_entry_header', 'genesis_post_info', 12 );",
			"Entry Footer Markup Open" => "( 'genesis_entry_footer', 'genesis_entry_footer_markup_open', 5 );",
			"Entry Footer Markup Close" => "( 'genesis_entry_footer', 'genesis_entry_footer_markup_close', 15 );",
			"Post Meta" => "( 'genesis_entry_footer', 'genesis_post_meta' );",
			"Author Box Single" => "( 'genesis_after_entry', 'genesis_do_author_box_single', 8 );",
			"Grid Loop Content" => "( 'genesis_entry_content', 'genesis_grid_loop_content' );",
			"Add ID To Global Exclude" => "( 'genesis_after_entry', 'genesis_add_id_to_global_exclude' );",
			"Page Archive Content" => "( 'genesis_entry_content', 'genesis_page_archive_content' );"
		),
		"-- Pre-HTML5 Loop --" => array(
			"Post Format Image" => "( 'genesis_before_post_title', 'genesis_do_post_format_image' );",
			"Post Title" => "( 'genesis_post_title', 'genesis_do_post_title' );",
			"Post Image" => "( 'genesis_post_content', 'genesis_do_post_image', 8 )",
			"Post Format Image" => "( 'genesis_before_post_title', 'genesis_do_post_format_image' );",
			"Post Content" => "( 'genesis_post_content', 'genesis_do_post_content' );",
			"Post Permalink" => "( 'genesis_post_content', 'genesis_do_post_permalink' );",
			"Post Content Nav" => "( 'genesis_post_content', 'genesis_do_post_content_nav' );",
			"Post Info" => "( 'genesis_before_post_content', 'genesis_post_info', 12 );",
			"Post Meta" => "( 'genesis_after_post_content', 'genesis_post_meta' );",
			"Author Box Single" => "( 'genesis_after_post', 'genesis_do_author_box_single' );",
			"Grid Loop Content" => "( 'genesis_post_content', 'genesis_grid_loop_content' );",
			"Add ID To Global Exclude" => "( 'genesis_after_post', 'genesis_add_id_to_global_exclude' );",
			"Page Archive Content" => "( 'genesis_post_content', 'genesis_page_archive_content' );",
			"Author Box Single" => "( 'genesis_after_post', 'genesis_do_author_box_single' );"
		),
		"-- Comments --" => array(
			"Comments Template (HTML5)" => "( 'genesis_after_entry', 'genesis_get_comments_template' );",
			"Comments Template (Pre-HTML5)" => "( 'genesis_after_post', 'genesis_get_comments_template' );",
			"Comments" => "( 'genesis_comments', 'genesis_do_comments' );",
			"Pings" => "( 'genesis_pings', 'genesis_do_pings' );",
			"Default List Comments" => "( 'genesis_list_comments', 'genesis_default_list_comments' );",
			"Default List Pings" => "( 'genesis_list_pings', 'genesis_default_list_pings' );",
			"Comment Form" => "( 'genesis_comment_form', 'genesis_do_comment_form' );"
		),
		"-- Sidebars --" => array(
			"Build Primary Sidebar" => "( 'genesis_after_content', 'genesis_get_sidebar' );",
			"Build Secondary Sidebar" => "( 'genesis_after_content_sidebar_wrap', 'genesis_get_sidebar_alt' );",
			"Get Primary Sidebar" => "( 'genesis_sidebar', 'genesis_do_sidebar' );",
			"Get Secondary Sidebar" => "( 'genesis_sidebar_alt', 'genesis_do_sidebar_alt' );",
			"Load Widgets" => "( 'widgets_init', 'genesis_load_widgets' );",
			"Remove Default Header Right Widgets" => "( 'load-themes.php', 'genesis_remove_default_widgets_from_header_right' );"
		),
		"-- Footer --" => array(
			"Footer Markup Open" => "( 'genesis_footer', 'genesis_footer_markup_open', 5 );",
			"Footer" => "( 'genesis_footer', 'genesis_do_footer' );",
			"Footer Markup Close" => "( 'genesis_footer', 'genesis_footer_markup_close', 15 );",
			"Footer Widget Areas" => "( 'genesis_before_footer', 'genesis_footer_widget_areas' );",
			"Footer Scripts" => "( 'wp_footer', 'genesis_footer_scripts' );"
		)
	);
	
	return $dynamik_php_actions_array;
}

/**
 * Build the PHP Builder "actions" menu.
 *
 * @since 1.2
 */
function dynamik_build_php_actions_menu( $selected = '' )
{
	$dynamik_php_actions_array = dynamik_php_actions_array();
	
	foreach( $dynamik_php_actions_array as $action_type => $actions )
	{
		echo '<optgroup label="' . $action_type . '">';
		foreach( $actions as $action_slug => $action_data )
		{
			$option = '<option value="' . $action_data . '"';
				
			if( $action_data == $selected )
			{
				$option .= ' selected="selected"';
			}

			$option .= '>' . $action_slug . '</option>';
			
			echo $option;
		}
		echo '</optgroup>';
	}
}

/**
 * Build PHP "filters" drop-down list.
 *
 * @since 1.2
 * @return PHP "filters" array.
 */
function dynamik_php_filters_array()
{
	$dynamik_php_filters_array = array(
		'-- Header Section --' => array(
			'SEO Title' => 'genesis_seo_title',
			'SEO Description' => 'genesis_seo_description',
			'Pre-load Favicon' => 'genesis_pre_load_favicon',
			'Header Scripts' => 'genesis_header_scripts'
		),
		'-- Menus --' => array(
			'Nav Default Args' => 'genesis_nav_default_args',
			'Pre Nav' => 'genesis_pre_nav',
			'Nav Home Text' => 'genesis_nav_home_text',
			'Nav Items' => 'genesis_nav_items',
			'Nav' => 'genesis_nav'
		),
		'-- The Loop --' => array(
			'Custom Loop Args' => 'genesis_custom_loop_args',
			'Post Title Text' => 'genesis_post_title_text',
			'Post Title Output' => 'genesis_post_title_output',
			'"No Posts" Text' => 'genesis_noposts_text',
			'Post Info' => 'genesis_post_info',
			'Post Meta' => 'genesis_post_meta',
			'Author Box Gravatar Size' => 'genesis_author_box_gravatar_size',
			'Author Box Title' => 'genesis_author_box_title'
		),
		'-- Post Shortcodes --' => array(
			'Post Date' => 'genesis_post_date_shortcode',
			'Post Time' => 'genesis_post_time_shortcode',
			'Post Author Link' => 'genesis_post_author_link_shortcode',
			'Post Author' => 'genesis_post_author_shortcode',
			'Post Comment' => 'genesis_post_comments_shortcode',
			'Post Tags' => 'genesis_post_tags_shortcode',
			'Post Categories' => 'genesis_post_categories_shortcode',
			'Post Edit' => 'genesis_post_edit_shortcode'
		),
		'-- Comment Section --' => array(
			'Title Comments' => 'genesis_title_comments',
			'No Comments Text' => 'genesis_no_comments_text',
			'Comments Closed Text' => 'genesis_comments_closed_text',
			'Title Pings' => 'genesis_title_pings',
			'No Pings Text' => 'genesis_no_pings_text',
			'Comment List Args' => 'genesis_comment_list_args',
			'Ping List Args' => 'genesis_ping_list_args',
			'Author Says Text' => 'comment_author_says_text',
			'Comment Form Args' => 'genesis_comment_form_args'
		),
		'-- Misc. --' => array(
			'Breadcrumb Args' => 'genesis_breadcrumb_args',
			'Breadcrumb Home Link' => 'genesis_breadcrumb_homelink',
			'Breadcrumb Blog Link' => 'genesis_breadcrumb_bloglink',
			'Gravatar Sizes' => 'genesis_gravatar_sizes'
		),
		'-- Search Form --' => array(
			'Search Query' => 'the_search_query',
			'Search Text' => 'genesis_search_text',
			'Search Button Text' => 'genesis_search_button_text',
			'Search Form' => 'genesis_search_form'
		),
		'-- Images --' => array(
			'Get Image Default Args' => 'genesis_get_image_default_args',
			'Pre Get Image' => 'genesis_pre_get_image',
			'Get Image' => 'genesis_get_image'
		),
		'-- Footer Section --' => array(
			'"Back To Top" Text' => 'genesis_footer_backtotop_text',
			'Footer Creds Text' => 'genesis_footer_creds_text',
			'Footer Output' => 'genesis_footer_output',
			'Footer Scripts' => 'genesis_footer_scripts'
		),
		'-- Footer Shortcodes --' => array(
			'Footer "Back To Top"' => 'genesis_footer_backtotop_shortcode',
			'Footer Copyright' => 'genesis_footer_copyright_shortcode',
			'Footer Child Theme Link' => 'genesis_footer_childtheme_link_shortcode',
			'Footer Genesis Link' => 'genesis_footer_genesis_link_shortcode',
			'Footer StudioPress Link' => 'genesis_footer_studiopress_link_shortcode',
			'Footer WordPress Link' => 'genesis_footer_wordpress_link_shortcode',
			'Footer Login/out' => 'genesis_footer_loginout_shortcode'
		)
	);
	
	return $dynamik_php_filters_array;
}

/**
 * Build the PHP Builder "filters" menu.
 *
 * @since 1.2
 */
function dynamik_build_php_filters_menu( $selected = '' )
{
	$dynamik_php_filters_array = dynamik_php_filters_array();
	
	foreach( $dynamik_php_filters_array as $filter_type => $filters )
	{
		echo '<optgroup label="' . $filter_type . '">';
		foreach( $filters as $filter_slug => $filter_data )
		{
			$option = '<option value="' . $filter_data . '"';
				
			if( $filter_data == $selected )
			{
				$option .= ' selected="selected"';
			}

			$option .= '>' . $filter_slug . '</option>';
			
			echo $option;
		}
		echo '</optgroup>';
	}
}

/**
 * Build an options list of Genesis hooks.
 *
 * @since 1.0
 */
function dynamik_list_hooks( $selected = '' )
{
	$genesis_hooks = array(
		'-- <head> Hooks --' => array(
			'genesis_doctype',
			'genesis_title',
			'genesis_meta',
			'wp_head'	
		),
		'-- Page Hooks --' => array(
			'genesis_before',
			'genesis_after'		
		),
		'-- Header Hooks --' => array(
			'genesis_before_header',
			'genesis_header',
			'genesis_after_header',
			'genesis_site_title',
			'genesis_site_description',
			'genesis_header_right'
		),
		'-- Content Hooks --' => array(
			'genesis_before_content_sidebar_wrap',
			'genesis_after_content_sidebar_wrap',
			'genesis_before_content',
			'genesis_after_content'
		),
		'-- HTML5 Content Hooks --' => array(
			'genesis_before_entry',
			'genesis_after_entry',
			'genesis_entry_header',
			'genesis_before_entry_content',
			'genesis_entry_content',
			'genesis_after_entry_content',
			'genesis_entry_footer'
		),
		'-- XHTML Content Hooks --' => array(
			'genesis_before_post',
			'genesis_after_post',
			'genesis_before_post_title',
			'genesis_post_title',
			'genesis_after_post_title',
			'genesis_before_post_content',
			'genesis_post_content',
			'genesis_after_post_content'
		),
		'-- Loop Hooks --' => array(
			'genesis_before_loop',
			'genesis_loop',
			'genesis_after_loop',
			'genesis_after_endwhile',
			'genesis_loop_else'
		),
		'-- Comment Hooks --' => array(
			'genesis_before_comments',
			'genesis_comments',
			'genesis_after_comments',
			'genesis_list_comments',
			'genesis_before_pings',
			'genesis_pings',
			'genesis_after_pings',
			'genesis_before_comment',
			'genesis_after_comment',
			'genesis_before_comment_form',
			'genesis_comment_form',
			'genesis_after_comment_form'
		),
		'-- Sidebar Hooks --' => array(
			'genesis_sidebar',
			'genesis_before_sidebar_widget_area',
			'genesis_after_sidebar_widget_area',
			'genesis_sidebar_alt',
			'genesis_before_sidebar_alt_widget_area',
			'genesis_after_sidebar_alt_widget_area'
		),
		'-- Footer Hooks --' => array(
			'genesis_before_footer',
			'genesis_footer',
			'genesis_after_footer'
		),
		'-- EZ Home Hooks --' => array(
			'dynamik_hook_before_ez_home',
			'dynamik_hook_home',
			'dynamik_hook_after_ez_home'
		)
	);
	
	foreach( $genesis_hooks as $optgroup => $options )
	{
		echo '<optgroup style="font-size:14px;color:#57A18D;" label="' . $optgroup . '">';
		foreach( $options as $option )
		{
			$output = '<option style="color:#000000;" value="' . $option . '"';
				
			if( $option == $selected )
			{
				$output .= ' selected="selected"';
			}

			$output .= '>' . $option . '</option>';
			
			echo $output;
		}
		echo '</optgroup>';
	}
}

/**
 * Build Custom Conditional Examples options list.
 *
 * @since 1.0
 */
function dynamik_list_conditional_examples( $selected = '' )
{
	$dynamik_conditional_examples = array(
		'examples' => 'Examples:',
		'is_page|is_page()' => 'Is Page',
		'is_not_page|! is_page()' => 'Is NOT Page',
		'is_page_template|is_page_template()' => 'Is Page Template',
		'is_not_page_template|! is_page_template()' => 'Is NOT Page Template',
		'is_single_post|is_single()' => 'Is Single Post',
		'is_not_single_post|! is_single()' => 'Is NOT Single Post',
		'is_front_page|is_front_page()' => 'Is Front Page',
		'is_not_front_page|! is_front_page()' => 'Is NOT Front Page',
		'is_archive|is_archive()' => 'Is Archive',
		'is_not_archive|! is_archive()' => 'Is NOT Archive',
		'is_category|is_category()' => 'Is Category',
		'is_not_category|! is_category()' => 'Is NOT Category',
		'is_tag|is_tag()' => 'Is Tag',
		'is_not_tag|! is_tag()' => 'Is NOT Tag',
		'is_author|is_author()' => 'Is Author',
		'is_not_author|! is_author()' => 'Is NOT Author',
		'has_label_example|dynamik_has_label(&#39;example&#39;)' => 'Has Dynamik Label',
		'is_ss_id|dynamik_is_ss(&#39;sb-id&#39;)' => 'Is Simple Sidebar'
	);
	
	foreach( $dynamik_conditional_examples as $conditional_examples_key => $conditional_examples_name )
	{
		$option = '<option value="' . $conditional_examples_key . '"';
			
		if( $conditional_examples_key == $selected )
		{
			$option .= ' selected="selected"';
		}

		$option .= '>' . $conditional_examples_name . '</option>';
		
		echo $option;
	}
}
	
//end lib/functions/dynamik-option-lists.php