<?php get_header(); ?>

<main>
	
<div class="maincontent">
	<div class="row"> 
	<div class="col-md-5 intro">
		<h1>Eat out? Foodine.</h1>
		<h3>Location, category, distance...</h3>
		<a href="<?php echo get_page_link(88); ?>"><button type="button" class="search searchbig darkred"><i class="fa fa-search" aria-hidden="true"></i>
	</button></a>
	</div>
	<div class="col-md-7 map">
		<?php echo do_shortcode("[huge_it_maps id='1']"); ?>
	</div>
	</div>

	<div class="row">
		<div class="col">
			<a href="<?php echo get_page_link(88); ?>"><button type="button" class="search searchsmall darkred"><i class="fa fa-search" aria-hidden="true"></i>
	</button></a>
		</div>
	</div>
</div>


</main>


<?php get_footer(); ?>

