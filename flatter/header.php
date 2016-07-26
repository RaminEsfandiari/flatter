<?php
/**
 * The header for Flatter theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Flatter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:300italic' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fliud" id="navbar-div">
    <div class="navbar-header">
      
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
  					
  		<a href="http://talksocialism.com/">
				<img src="<?php bloginfo('template_directory'); ?>/images/logo-small.png" alt="Talk socialism logo"
				class="img-logo img-responsive">
			</a>

    </div>
    <div id="navbar" class="navbar-collapse collapse">
      
<!--       <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul> -->

      <ul class="nav navbar-nav navbar-right">
									<?php
							            wp_nav_menu( array(
							                'menu'              => 'primary',
							                'theme_location'    => 'primary',
							                'depth'             => 8,
							                'container'         => 'div',
							                'menu_class'        => 'nav navbar-nav navbar-right',
							                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							                'walker'            => new wp_bootstrap_navwalker()
							            ));
							        ?>
      </ul>

    </div><!--/.nav-collapse -->
  </div>
</nav>