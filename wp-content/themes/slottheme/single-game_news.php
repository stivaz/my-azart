<?php get_header(); ?>
<div class="col-lg-9 col-sm-12 col-12 main">

	<div class="content-block">

		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
			<?php if(function_exists('bcn_display')) { bcn_display(); }?>
		</div>

		<?php if( have_posts() ): while( have_posts() ):  the_post(); ?>
		<h1><?php the_title(); ?></h1>

		<div class="news-content"><?php the_content(); ?></div>
		<?php endwhile; endif; ?>

	</div>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>