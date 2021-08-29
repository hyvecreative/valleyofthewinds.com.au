<?php

/**
 * Theme assets
 */
if (file_exists(get_template_directory() . '/dist/assets.json')) {
  add_action('wp_enqueue_scripts', function () {

      $manifest = json_decode(file_get_contents('dist/assets.json', true));
      $main = $manifest->main;
      wp_enqueue_style('theme-css', get_template_directory_uri() . "/dist/" . $main->css,  false, null);
      wp_enqueue_script('theme-js', get_template_directory_uri() . "/dist/" . $main->js, ['jquery'], null, true);
  }, 100);
}

/*******************************

 CUSTOM BACKGROUND SUPPORT

********************************/

add_custom_background();



/*******************************

 MENUS SUPPORT

********************************/

function register_my_menus() {
  register_nav_menus(
    array(
	  'header-2019' => __( 'Header 2019' ),
	  'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );



/*******************************

 THUMBNAIL SUPPORT

********************************/



add_theme_support('post-thumbnails');
add_image_size('news', 568, 367, true );



/* Get the thumb original image full url */



function get_thumb_urlfull ($postID) {

$image_id = get_post_thumbnail_id($post);  

$image_url = wp_get_attachment_image_src($image_id,'large');  

$image_url = $image_url[0]; 

return $image_url;

}



/*******************************

 EXCERPT LENGTH ADJUST

********************************/


function home_excerpt_length($length) {
	return 12;
}
add_filter('excerpt_length', 'home_excerpt_length');

//function to replace invalid ellipsis with text linking to the post

function elpie_excerpt($text)  
{  
   return str_replace('[...]', '...', $text);  
}  
add_filter('get_the_excerpt', 'elpie_excerpt');


function excerpt_read_more_link($output) {
 global $post;
 return $output . ' <a href="'. get_permalink($post->ID) . '">Read More <i class="fa fa-arrow-right"></i></a>';
}
add_filter('get_the_excerpt', 'excerpt_read_more_link');

/***************************

ADD EXCERPT TO PAGE

******************************/

add_post_type_support( 'page', 'excerpt' );


/*******************************

 WIDGETS AREAS

********************************/



if ( function_exists('register_sidebar') )

register_sidebar(array(

	'name' => 'sidebar',

	'before_widget' => '<div class="rightBox">',

	'after_widget' => '</div>',

	'before_title' => '<h2>',

	'after_title' => '</h2>',

));

register_sidebar(array(

	'name' => 'about',

	'before_widget' => '<div class="rightBox">',

	'after_widget' => '</div>',

	'before_title' => '<h2>',

	'after_title' => '</h2>',

));


register_sidebar(array(

	'name' => 'news',

	'before_widget' => '<div class="rightBox">',

	'after_widget' => '</div>',

	'before_title' => '<h2>',

	'after_title' => '</h2>',

));



register_sidebar(array(

	'name' => 'footer',

	'before_widget' => '<div class="wgt-footer">',

	'after_widget' => '</div>',

	'before_title' => '<h2>',

	'after_title' => '</h2>',

));

 

	

/*******************************

 PAGINATION

********************************

 * Retrieve or display pagination code.

 *

 * The defaults for overwriting are:

 * 'page' - Default is null (int). The current page. This function will

 *      automatically determine the value.

 * 'pages' - Default is null (int). The total number of pages. This function will

 *      automatically determine the value.

 * 'range' - Default is 3 (int). The number of page links to show before and after

 *      the current page.

 * 'gap' - Default is 3 (int). The minimum number of pages before a gap is 

 *      replaced with ellipses (...).

 * 'anchor' - Default is 1 (int). The number of links to always show at begining

 *      and end of pagination

 * 'before' - Default is '<div class="emm-paginate">' (string). The html or text 

 *      to add before the pagination links.

 * 'after' - Default is '</div>' (string). The html or text to add after the

 *      pagination links.

 * 'title' - Default is '__('Pages:')' (string). The text to display before the

 *      pagination links.

 * 'next_page' - Default is '__('&raquo;')' (string). The text to use for the 

 *      next page link.

 * 'previous_page' - Default is '__('&laquo')' (string). The text to use for the 

 *      previous page link.

 * 'echo' - Default is 1 (int). To return the code instead of echo'ing, set this

 *      to 0 (zero).

 *

 * @author Eric Martin <eric@ericmmartin.com>

 * @copyright Copyright (c) 2009, Eric Martin

 * @version 1.0

 *

 * @param array|string $args Optional. Override default arguments.

 * @return string HTML content, if not displaying.

 */

 

function emm_paginate($args = null) {

	$defaults = array(

		'page' => null, 'pages' => null, 

		'range' => 3, 'gap' => 3, 'anchor' => 1,

		'before' => '<div class="emm-paginate">', 'after' => '</div>',

		'title' => __('Pages:'),

		'nextpage' => __('&raquo;'), 'previouspage' => __('&laquo'),

		'echo' => 1

	);



	$r = wp_parse_args($args, $defaults);

	extract($r, EXTR_SKIP);



	if (!$page && !$pages) {

		global $wp_query;



		$page = get_query_var('paged');

		$page = !empty($page) ? intval($page) : 1;



		$posts_per_page = intval(get_query_var('posts_per_page'));

		$pages = intval(ceil($wp_query->found_posts / $posts_per_page));

	}

	

	$output = "";

	if ($pages > 1) {	

		$output .= "$before<span class='emm-title'>$title</span>";

		$ellipsis = "<span class='emm-gap'>...</span>";



		if ($page > 1 && !empty($previouspage)) {

			$output .= "<a href='" . get_pagenum_link($page - 1) . "' class='emm-prev'>$previouspage</a>";

		}

		

		$min_links = $range * 2 + 1;

		$block_min = min($page - $range, $pages - $min_links);

		$block_high = max($page + $range, $min_links);

		$left_gap = (($block_min - $anchor - $gap) > 0) ? true : false;

		$right_gap = (($block_high + $anchor + $gap) < $pages) ? true : false;



		if ($left_gap && !$right_gap) {

			$output .= sprintf('%s%s%s', 

				emm_paginate_loop(1, $anchor), 

				$ellipsis, 

				emm_paginate_loop($block_min, $pages, $page)

			);

		}

		else if ($left_gap && $right_gap) {

			$output .= sprintf('%s%s%s%s%s', 

				emm_paginate_loop(1, $anchor), 

				$ellipsis, 

				emm_paginate_loop($block_min, $block_high, $page), 

				$ellipsis, 

				emm_paginate_loop(($pages - $anchor + 1), $pages)

			);

		}

		else if ($right_gap && !$left_gap) {

			$output .= sprintf('%s%s%s', 

				emm_paginate_loop(1, $block_high, $page),

				$ellipsis,

				emm_paginate_loop(($pages - $anchor + 1), $pages)

			);

		}

		else {

			$output .= emm_paginate_loop(1, $pages, $page);

		}



		if ($page < $pages && !empty($nextpage)) {

			$output .= "<a href='" . get_pagenum_link($page + 1) . "' class='emm-next'>$nextpage</a>";

		}



		$output .= $after;

	}



	if ($echo) {

		echo $output;

	}



	return $output;

}



/**

 * Helper function for pagination which builds the page links.

 *

 * @access private

 *

 * @author Eric Martin <eric@ericmmartin.com>

 * @copyright Copyright (c) 2009, Eric Martin

 * @version 1.0

 *

 * @param int $start The first link page.

 * @param int $max The last link page.

 * @return int $page Optional, default is 0. The current page.

 */

function emm_paginate_loop($start, $max, $page = 0) {

	$output = "";

	for ($i = $start; $i <= $max; $i++) {

		$output .= ($page === intval($i)) 

			? "<span class='emm-page emm-current'>$i</span>" 

			: "<a href='" . get_pagenum_link($i) . "' class='emm-page'>$i</a>";

	}

	return $output;

}



/*******************************

 CUSTOM COMMENTS

********************************/



function mytheme_comment($comment, $args, $depth) {

   $GLOBALS['comment'] = $comment; ?>

   <li <?php comment_class('clearfix'); ?> id="li-comment-<?php comment_ID() ?>">

   	<div class="gravatar">

	 <?php echo get_avatar($comment,$size='40',$default='http://www.gravatar.com/avatar/61a58ec1c1fba116f8424035089b7c71?s=32&d=&r=G' ); ?>

	 <div class="gravatar_mask"></div>

	</div>

     <div id="comment-<?php comment_ID(); ?>">

	  <div class="comment-meta commentmetadata clearfix">

	    <?php printf(__('<strong>%s</strong>'), get_comment_author_link()) ?><?php edit_comment_link(__('(Edit)'),'  ','') ?> <span><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?>

	  </span>

	  </div>

	  

      <div class="text">

		  <?php comment_text() ?>

	  </div>

	  

	  <?php if ($comment->comment_approved == '0') : ?>

         <em><?php _e('Your comment is awaiting moderation.') ?></em>

         <br />

      <?php endif; ?>



      <div class="reply">

         <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>

      </div>

     </div>

<?php }


	
/**
 * WTI Custom Navigation Menu widget class
 *
 * @since 3.0.0
 */

class Wti_Custom_Nav_Menu_Widget extends WP_Widget {

    function __construct() {
        $widget_ops = array( 'description' => __('Use this widget to add one of your custom menus as a widget.') );
        parent::__construct( 'custom_nav_menu', __('WTI Custom Menu'), $widget_ops );
    }

    function widget($args, $instance) {
        // Get menu
        $nav_menu = ! empty( $instance['nav_menu'] ) ? wp_get_nav_menu_object( $instance['nav_menu'] ) : false;

        if ( !$nav_menu )
            return;

        $instance['title'] = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

        echo $args['before_widget'];

        if ( !empty($instance['title']) )
            echo $args['before_title'] . $instance['title'] . $args['after_title'];

        wp_nav_menu(
                array(
                    'fallback_cb' => '',
                    'container' => '',
                    'menu_class' => $instance['menu_class'],
                    'menu' => $nav_menu
                )
            );

        echo $args['after_widget'];
    }

    function update( $new_instance, $old_instance ) {
        $instance['title'] = strip_tags ( stripslashes ( $new_instance['title'] ) );
        $instance['menu_class'] = strip_tags ( stripslashes ( trim ( $new_instance['menu_class'] ) ) );
        $instance['nav_menu'] = (int) $new_instance['nav_menu'];

        return $instance;
    }

    function form( $instance ) {
        $title = isset( $instance['title'] ) ? $instance['title'] : '';
        $menu_class = isset( $instance['menu_class'] ) ? $instance['menu_class'] : '';
        $nav_menu = isset( $instance['nav_menu'] ) ? $instance['nav_menu'] : '';

        // Get menus
        $menus = get_terms( 'nav_menu', array( 'hide_empty' => false ) );

        // If no menus exists, direct the user to go and create some.
        if ( !$menus ) {
            echo '<p>'. sprintf( __('No menus have been created yet. <a href="%s">Create some</a>.'), admin_url('nav-menus.php') ) .'</p>';
            return;
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:') ?></label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('menu_class'); ?>"><?php _e('Menu Class:') ?></label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('menu_class'); ?>" name="<?php echo $this->get_field_name('menu_class'); ?>" value="<?php echo $menu_class; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('nav_menu'); ?>"><?php _e('Select Menu:'); ?></label>
            <select id="<?php echo $this->get_field_id('nav_menu'); ?>" name="<?php echo $this->get_field_name('nav_menu'); ?>">
        <?php
            foreach ( $menus as $menu ) {
                echo '<option value="' . $menu->term_id . '"'
                    . selected( $nav_menu, $menu->term_id, false )
                    . '>'. $menu->name . '</option>';
            }
        ?>
            </select>
        </p>
        <?php
    }
}

function wti_custom_nav_menu_widget() {
    register_widget('Wti_Custom_Nav_Menu_Widget');
}

add_action ( 'widgets_init', 'wti_custom_nav_menu_widget', 1 );

add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );


/******************
ACF options page
*******************/
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

/*********************
INCLUDE NEEDED FILES
*********************/

require_once('includes/gravity-incs.php');

?>