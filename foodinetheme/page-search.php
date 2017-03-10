<?php get_header(); ?>

<main>

<div class=row>
    <div class="col-md-10 col-md-offset-1">
<?php $id = 88; $p = get_page($id); echo apply_filters('the_content', $p->post_content); ?>

</div>
</div>


</main>


<?php get_footer(); ?>

