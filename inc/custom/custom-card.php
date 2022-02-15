<?php

/**
 * Register a custom post type called "cardrama".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_card_init() {
    $labels = array(
        'name'                  => _x( 'cards', 'Post type general name', 'cardrama' ),
'singular_name'         => _x( 'cardrama', 'Post type singular name', 'cardrama' ),
'menu_name'             => _x( 'cards', 'Admin Menu text', 'cardrama' ),
'name_admin_bar'        => _x( 'cardrama', 'Add New on Toolbar', 'cardrama' ),
'add_new'               => __( 'Ajouter nouveau livre', 'cardrama' ),
'add_new_item'          => __( 'Add New cardrama', 'cardrama' ),
'new_item'              => __( 'New cardrama', 'cardrama' ),
'edit_item'             => __( 'Edit cardrama', 'cardrama' ),
'view_item'             => __( 'View cardrama', 'cardrama' ),
'all_items'             => __( 'All cards', 'cardrama' ),
'search_items'          => __( 'Search cards', 'cardrama' ),
'parent_item_colon'     => __( 'Parent cards:', 'cardrama' ),
'not_found'             => __( 'No cards found.', 'cardrama' ),
'not_found_in_trash'    => __( 'No cards found in Trash.', 'cardrama' ),
'featured_image'        => _x( 'cardrama Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'cardrama' ),
'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'cardrama' ),
'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'cardrama' ),
'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'cardrama' ),
'archives'              => _x( 'cardrama archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'cardrama' ),
'insert_into_item'      => _x( 'Insert into cardrama', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'cardrama' ),
'uploaded_to_this_item' => _x( 'Uploaded to this cardrama', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'cardrama' ),
'filter_items_list'     => _x( 'Filter cards list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'cardrama' ),
'items_list_navigation' => _x( 'cards list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'cardrama' ),
'items_list'            => _x( 'cards list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'cardrama' ),
);

$args = array(
'labels'             => $labels,
'public'             => true,
'publicly_queryable' => true,
'show_ui'            => true,
'show_in_menu'       => true,
'query_var'          => true,
'rewrite'            => array( 'slug' => 'card' ),
'capability_type'    => 'post',
'has_archive'        => true,
'hierarchical'       => false,
'menu_position'      => 43,
'menu_icon'          => 'dashicons-slides',
'supports'           => array( 'title','thumbnail')
);

register_post_type( 'card', $args );
}

add_action( 'init', 'wpdocs_codex_card_init' );
