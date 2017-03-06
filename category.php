	<?php get_header(); ?>
	<div class="content-row">
	
	<main>
	
        <h2><?php echo get_queried_object()->name; ?></h2>
        <p><?php echo get_queried_object()->description; ?></p>

	<h3>Category's restaurants</h3>

	<?php
    $id = get_queried_object()->term_id;
    $articles = get_posts(array('category' => $id, 'numberposts' => 999 ));
    
    foreach( $articles as $article):
       
	?>

	<article>

        <a href="<?php echo get_permalink( $article->ID); ?>">
				<?php echo get_the_post_thumbnail( $article->ID, 'thumbnail');?>
				<h4>
					<?php echo $article->post_title; ?>
				</h4>
				<p><?php echo substr($article->post_excerpt, 0, 100);?>...</p>
		</a>

	</article>	
    <?php endforeach; ?>
	<?php ?>
	

	
	</main>
	</div>

	<?php
	get_footer();	
	?>
