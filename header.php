<!DOCTYPE HTML>
<html <?php language_attributes();?>> 
<head>
	
	<meta charset=<?php bloginfo('charset'); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/1477623818.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic|Ek+Mukta:400,700|Rambla:400,400i,700|Ruda:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link href="<?php echo get_template_directory_uri(); ?>/css/fonts/foundation-icons.css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
	<?php wp_head(); ?> 
</head>

<body <?php body_class();?>> 
<div class="container">
<div class="darkred main-header">
    <div class="row">
        <div class="col-xs-4">

            <?php
            // Get the ID of a given category
            $category_id = get_cat_ID( 'Restaurants' );

            // Get the URL of this category
            $category_link = get_category_link( $category_id );
            ?>

<!-- Print a link to this category -->
            <a href="<?php echo esc_url( $category_link ); ?>" title="Category Name"><button type="button" class="headerbutton cat"><i class="fa fa-bars" aria-hidden="true"></i></button></a>
        </div>
        <div class="col-xs-4">
            <div class="logo"><a href="<?php echo get_home_url(); ?>"><!--<img src="#" alt="Foodine">-->Foodine</a></div>
        </div>
        <div class="col-xs-4">
            <button type="button" class="headerbutton addnew" action="#"><i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
	    
        
    </div>
</div>
