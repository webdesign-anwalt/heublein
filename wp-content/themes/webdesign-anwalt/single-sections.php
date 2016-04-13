<?php
/*
* Template Name: Sections
*/
get_header();
?>	
      <div class="">

        <div class="blog-main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

         		<article id="post-<?php the_ID(); ?>" class="" >
            			<h1 class="blog-post-title "><?php the_title(); ?></h1>
           			 
			<?php if ( has_post_thumbnail()) : ?>
				<div class="post-thumb">
					  <?php the_post_thumbnail('big-thumb'); ?>
				</div>
			 <?php endif; ?>

				<div class="entry clearfix"><?php the_content(); ?></div>

				<?php wp_link_pages(); ?>

				
		  		
			</article>
	
	  <?php endwhile; endif; ?>


        </div><!-- /.blog-main -->

	
</div>
	<?php get_footer(); ?>