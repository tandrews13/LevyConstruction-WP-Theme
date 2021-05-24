<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LevyConstruction
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class= "navbar navbar-expand-md fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img class="levy-logo" src='https://levy.tonyandrews.dev/wp-content/uploads/2021/04/IMG_5038-1.jpg' width=200px style="border-radius: 10px;"></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="mailto:davelevyconstruction@gmail.com" class="nav-link">davelevyconstruction@gmail.com</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">License Number: BC 731516</a>
                </li>
            </ul>
        </div>
    </nav>
    
<?php wp_body_open(); ?>

