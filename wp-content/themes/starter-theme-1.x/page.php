<?php
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

$context = Timber::context();

$timber_post     = new Timber\Post();
$context['post'] = $timber_post;

$home_page_acf = [];
$home_page_acf['page_title'] = get_field('page_title');
$home_page_acf['description'] = nl2br(get_field('description'));
$home_page_acf['other_description'] = get_field('other_description');

$context['home_page_acf'] = $home_page_acf;
Timber::render( array( 'page-' . $timber_post->post_name . '.twig', 'page.twig' ), $context );

