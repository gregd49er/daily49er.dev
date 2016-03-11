<?php
/**
 * @package Edit_flow_additons
 * @version 1.6
 */
/*
Plugin Name: Edit Flow Additons
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: This altered Edit Flow so that the publish button is hidden until the post goes into pending review. 
Author: Matt Mullenweg
Version: 1.6
Author URI: http://ma.tt/
*/


/**
 * Hide the "Publish" button until a post is ready to be published
 * In this example, we only show the "Publish button" until the post has the "Pending" status
 *
 * @see http://editflow.org/extend/hide-the-publish-button-for-certain-custom-statuses/
 */
function efx_hide_publish_button_until() {
 
    if ( ! function_exists( 'EditFlow' ) )
        return;
 
    if ( ! EditFlow()->custom_status->is_whitelisted_page() )
        return;
 
    // Show the publish button if the post has one of these statuses
    $show_publish_button_for_status = array(
            'pending',
            // The statuses below are WordPress' public statuses
            'future',
            'publish',
            'schedule',
            'private',
        );
    if ( ! in_array( get_post_status(), $show_publish_button_for_status ) ) {
        ?>
        <style>
            #publishing-action { display: none; }
        </style>
        <?php
    }
}
add_action( 'admin_head', 'efx_hide_publish_button_until' );




function db_add_ef_post_type_support() {
add_post_type_support('movie-review', 'ef_functionality');
add_post_type_support('movie-review', 'ef_notifications');
add_post_type_support('movie-review', 'ef_editorial_metadata');
add_post_type_support('movie-review', 'ef_calendar');
add_post_type_support('movie-review', 'ef_editorial_comments');
}
add_action('init', 'db_add_ef_post_type_support');





?>
