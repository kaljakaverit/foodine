	<?php get_header(); ?>
	<div class="content-row">
	
	<main>
	
        <h2><?php echo get_queried_object()->name; ?></h2>
        <p><?php echo get_queried_object()->description; ?></p>

	<h3 class="blue">Categories</h3>

	<?php
    $id = get_queried_object()->term_id;
    $type = get_queried_object()->taxonomy;
    $subcats = get_term_children( $id, $type );
    foreach( $subcats as $subcat):
        $term = get_term_by('id', $subcat, $type);
	?>

	<article>
		<a href="<?php echo get_term_link($subcat, $type); ?>">
				<?php
                $articles = get_posts(array('category' => $term->term_id, 'numberposts' => 1, 'orderby' => 'rand'));
                echo get_the_post_thumbnail( $articles[0]->ID, 'thumbnail');
                ?>
				<h4><?php echo $term->name; ?></h4>
                <p><?php echo substr(category_description( $term->term_id ), 0, 100);?>...</p>
		</a>
	</article>	
    <?php endforeach; ?>
	<?php ?>
	

	
	</main>
	</div>

	<?php
	get_footer();	
	?>
