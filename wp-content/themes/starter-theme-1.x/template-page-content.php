<?php
/* Template Name: Content Page Template */

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * To generate specific templates for your pages you can use:
 * /mytheme/templates/page-mypage.twig
 * (which will still route through this PHP file)
 * OR
 * /mytheme/page-mypage.php
 * (in which case you'll want to duplicate this file and save to the above path)
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

// $context = Timber::context();

// $timber_post     = new Timber\Post();
// $context['post'] = $timber_post;

$featured_image = get_field('featured_image');
$pic = $featured_image['sizes']['large'];

// $content_page_acf = [];
// $content_page_acf['text_field'] = get_field('text_field');
// $content_page_acf['featured_image'] = $featured_image;
$content_page_acf['pic'] = $pic;
// $content_page_acf['featured_image_vardump'] = var_dump($featured_image);

//$context['content_page_acf'] = $content_page_acf;
var_dump($featured_image);
echo (get_field('text_field'));
//Timber::render( array( 'page-content.twig', 'page.twig' ), $context );

