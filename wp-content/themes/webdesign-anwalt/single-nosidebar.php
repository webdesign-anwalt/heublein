<?php
/*
* Template Name: ohne sidebar
*/
get_header();
?>	
      <div class="">

        <div class="blog-main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

         		<div id="post-<?php the_ID(); ?>" class="container" <?php post_class('post blog-post'); ?>>
            			<h1 class="blog-post-title"><?php the_title(); ?></h1>
           			 
			
				<div class="entry clearfix"><?php the_content(); ?></div>

				<?php wp_link_pages(); ?>

				
		  		
			</div>
	
	  <?php endwhile; endif; ?>


        </div><!-- /.blog-main -->

	
</div>
	<?php get_footer(); ?>