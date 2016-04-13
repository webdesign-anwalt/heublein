<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
	<link href='https://fonts.googleapis.com/css?family=Oswald|Lobster|Lato|Droid+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>
<div id="vordemfooter"> <!-- benötigt für den sticky-footer -->
    <div class="blog-masthead nav-farbe">
      	<nav class="blog-nav nav-farbe container">
		      <!-- <p class="handy-show">Menu <i class="fa fa-angle-double-down"></i></p> -->
		      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'depth' => 0 ) ); ?>
	       </nav>
      </div>

    <header class="blog-header centerContent " 
    <?php
      if ( $thumbnail_id = get_post_thumbnail_id() ) {
        if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, 'normal-bg' ) )
            printf( ' style="background-image: url(%s);"', $image_src[0] );     
      }
    ?> 
    >
        <div><h1 class="blog-title"><?php the_title(); ?></h1>
        <p class="lead blog-description"><?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?>  </p></div>
      </header>
