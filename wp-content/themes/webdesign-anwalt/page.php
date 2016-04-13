	<?php get_header(); ?>
      <div class="row inhaltsbereich">

        <div class=" blog-main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

         		<div id="post-<?php the_ID(); ?>" <?php post_class('post blog-post'); ?>">
            			<h1 class="blog-post-title"><?php the_title(); ?></h1>

				<div class="entry clearfix"><?php the_content(); ?></div>

			</div>

	  <?php endwhile; endif; ?>

        </div><!-- /.blog-main -->

	<?php get_sidebar(); ?>
</div>
	<?php get_footer(); ?>