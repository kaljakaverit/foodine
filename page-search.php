<?php get_header(); ?>

<main>

<?php $id = 88; $p = get_page($id); echo apply_filters('the_content', $p->post_content); ?>


</main>


<?php get_footer(); ?>

