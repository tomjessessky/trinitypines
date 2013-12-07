<!DOCTYPE html>
<html>
  <head>
    <title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf8" />
		
		<link href="<?php bloginfo('template_directory'); ?>/css/build/style.css" rel="stylesheet" media="screen">
    <link href="<?php bloginfo('template_directory'); ?>/fonts/stylesheet.css" rel="stylesheet" media="screen">
		<link href="<?php bloginfo('stylesheet_url');?>" type="text/css" rel="stylesheet" media="screen, projection" />
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/build/scripts.min.js"></script>
		
		
		<?php wp_head(); ?>
		
    
  </head>
 
  <body <?php body_class($class); ?>>
    
    <nav class="navbar navbar-default" role="navigation">
      <div class='container'>
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="/wp-content/images/Logo.gif" class="logo" /></a>
      </div>
   
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse">
       <?php wp_nav_menu( array('menu' => 'Main', 'menu_class' => 'nav navbar-nav navbar-right', 'depth'=> 3, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
      </div><!-- /.navbar-collapse -->
      </div>
    </nav>

    
    
    
    	
    	
