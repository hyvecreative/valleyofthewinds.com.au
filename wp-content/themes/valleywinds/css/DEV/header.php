<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="keywords" content="murray darling, murray, darling, river, basin, mdba, plan for the murray, Jay Weatherill, SA, South Australia, Australia, Murray Darling Basin Authority, take action" />
  <meta name="description" content="Fight for the Murray: we need a better plan to save our river" />
  <link rel="image_src" href="<?php bloginfo('template_directory'); ?>/images/icon.jpg" />
  <title> <?php bloginfo('name'); ?></title>

    <?php
        $template_directory = get_bloginfo('template_url');
        
        wp_enqueue_style('style', get_bloginfo('stylesheet_url'));
		wp_enqueue_style('ddsmooth', $template_directory.'/css/ddsmoothmenu.css');
		
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js', false, '1.4.2', false);
        wp_enqueue_script( 'jquery');
        
        wp_enqueue_script( 'jquery_form', $template_directory."/js/jquery.form.js", array('jquery'), nil, true);
		wp_enqueue_script( 'ddsmooth', $template_directory."/js/ddsmoothmenu.js", array('jquery'), nil, true);
?>

<!-- Begin FB Sharing for WP by Chad Von Lind. Get the latest code here: http://vonlind.com/?p=539  -->
<?php
	$thumb = get_post_meta($post->ID,'_thumbnail_id',false);
	$thumb = wp_get_attachment_image_src($thumb[0], false);
	$thumb = $thumb[0];
	$default_img = get_bloginfo('stylesheet_directory').'/images/default_icon.jpg';
 
	?>
 
<?php if(is_single() || is_page()) { ?>
	<meta property="og:type" content="article" />
	<meta property="og:title" content="<?php single_post_title(''); ?>" />
	<meta property="og:description" content="Fight For The Murray! We need a better plan to save our river and now is the time to act. Show your support today." />
	<meta property="og:url" content="<?php the_permalink(); ?>"/>
	<meta property="og:image" content="<?php if ( $thumb[0] == null ) { echo $default_img; } else { echo $thumb; } ?>" />
<?php  } else { ?>
	<meta property="og:type" content="article" />
   <meta property="og:title" content="<?php bloginfo('name'); ?>" />
	<meta property="og:url" content="<?php bloginfo('url'); ?>"/>
	<meta property="og:description" content="Fight For The Murray! We need a better plan to save our river and now is the time to act. Show your support today." />
    <meta property="og:image" content="<?php  if ( $thumb[0] == null ) { echo $default_img; } else { echo $thumb; } ?>" />
<?php  }  ?>
<!-- End FB Sharing for WP -->

    
	<?php wp_head();?>
    
       <!--[if IE 6]><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie6.css" type="text/css" charset="utf-8" /><![endif]--> 
       
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
</head>
    
  <body <?php body_class(); ?>>





<!-- begin header -->
<div id="header">

<div id="logo">
<a href="<?php bloginfo('url'); ?>/">The Bunker Studios</a></div>

<div id="headeritems">

    
</div><!-- END Headeritems -->

</div><!-- END Header -->
 
<!-- begin wrapper -->
<div id="wrapper">
 
<div id="contentwrap"> <!-- Start content template... -->
 


	
