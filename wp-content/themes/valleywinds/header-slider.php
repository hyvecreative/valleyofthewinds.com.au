<!DOCTYPE html>
<html lang="en">
<head >
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-158162465-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-158162465-1');
</script>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<meta content="index, follow, noarchive" name="robots">
	<meta name="google-site-verification" content="X_SuFmC9mGtqfiV7KcxBc8R8dcnq75GZl-yqs93B5Ow" />
	<link rel="image_src" href="<?php bloginfo('template_directory'); ?>/images/icon.jpg" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon-16x16.png" sizes="16x16" />
	<title><?php bloginfo('name'); ?></title>
    
        <?php
        $template_directory = get_bloginfo('template_url');
        
        wp_enqueue_style('style', get_bloginfo('stylesheet_url'));
		wp_enqueue_style('awesome', $template_directory.'/css/font-awesome.min.css');
		wp_enqueue_style('slick', $template_directory.'/slick/slick.css');
		wp_enqueue_style('slick-theme', $template_directory.'/slick/slick-theme.css');

		
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', false, '1.12.4', false);
        wp_enqueue_script( 'jquery');
	
		wp_enqueue_script( 'flexmenu', $template_directory."/js/jquery.flexmenu.js", array('jquery'), null, true);
		wp_enqueue_script( 'bootstrap', $template_directory."/bootstrap/js/bootstrap.min.js", array('jquery'), null, true);
		wp_enqueue_script( 'scrollTo', $template_directory."/js/jquery.scrollTo.js", array('jquery'), null, true);
		wp_enqueue_script( 'fancyboxeasing', $template_directory."/js/jquery.easing-1.3.pack.js", array('jquery'), null, true);
		wp_enqueue_script( 'matchheight', $template_directory."/js/jquery.matchHeight.js", array('jquery'), null, true);
		wp_enqueue_script( 'scroll', $template_directory."/js/scroll.js", array('jquery'), null, true);
	    wp_enqueue_script( 'slick', $template_directory."/slick/slick.min.js", array('jquery'), null, true);
		?>

    
	<?php wp_head();?>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
	<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" charset="utf-8" media="all" href="<?php bloginfo('template_url'); ?>/css/ie8.css" />
	<![endif]-->   
	
	<link rel="stylesheet" href="https://use.typekit.net/bas1fhy.css">
	<link href="https://fonts.googleapis.com/css?family=Catamaran:400,500,600,700&display=swap" rel="stylesheet"> 
	
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        
</head>
    
<body <?php body_class(); ?>>

<div class="main-wrap">

<header class="mainHeader" style="position: absolute; width: 100%; z-index: 20;">
	

	

<div class="fm-container home-header lo-shadow clearfix">
		
		<div class="logo-mob">
    		<a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/logo-valley-of-the-winds-mob.png" alt="Valley of the winds" /></a>
		</div> <!-- end logo --> 
		
		<div class="logo-upc">
    		<a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/logo-upc-ac-mob.png" alt="upc/ac frenewables" /></a>
	</div> <!-- end logo --> 


	<div class="fm-button"><span class="fm-bar"></span><span class="fm-bar"></span><span class="fm-bar"></span></div>
      		
	<nav id="nav" class="nav-2">
     <?php wp_nav_menu( array( 'theme_location' => 'header-2019', 'container_id' => 'topmenu', 'container_class' => 'menu', 'items_wrap' => '<ul id="mymenu">%3$s</ul>' ) ); ?>
	</nav>

            
</div>  <!-- end fm-container -->
	


	
</header>

<div class="container-wrap">

<main id="main">





	
