	<?php get_header(); ?>
	<div class="content-row">
	
	<main>

    <div <?php post_class(); ?>>
	<?php if (have_posts()): ?>
		<?php while(have_posts()): ?>
			<?php the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		<?php endwhile; ?>
	<?php endif; ?>
    </div>

	</main>
	</div>

	<?php
	get_footer();	
	?>
