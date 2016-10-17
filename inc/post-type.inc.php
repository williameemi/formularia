<?php
function form() {

    $labels = array(
        'name'                => _x( 'Formularia', 'Post Type General Name', 'mm-plugin' ),
        'singular_name'       => _x( 'Formularia', 'Post Type Singular Name', 'mm-plugin' ),
        'menu_name'           => __( 'Formularia', 'mm-plugin' ),
        'name_admin_bar'      => __( 'Formularia', 'mm-plugin' ),
        'parent_item_colon'   => __( '', 'mm-plugin' ),
        'all_items'           => __( 'All Formularia', 'mm-plugin' ),
        'add_new_item'        => __( 'Add New Formularia', 'mm-plugin' ),
        'add_new'             => __( 'Add New Formularia', 'mm-plugin' ),
        'new_item'            => __( 'New Formularia', 'mm-plugin' ),
        'edit_item'           => __( 'Edit Formularia', 'mm-plugin' ),
        'update_item'         => __( 'Update Formularia', 'mm-plugin' ),
        'view_item'           => __( 'View Formularia', 'mm-plugin' ),
        'search_items'        => __( 'Search Formularia', 'mm-plugin' ),
        'not_found'           => __( 'Not found Formularia', 'mm-plugin' ),
        'not_found_in_trash'  => __( 'Not found Formularia in Trash', 'mm-plugin' ),
    );
    $args = array(
        'label'               => __( 'form', 'mm-plugin' ),
        'description'         => __( 'form', 'mm-plugin' ),
        'labels'              => $labels,
        'supports'            => array('title'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-id',
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );
    register_post_type( 'form', $args );

}
add_action( 'init', 'form', 0 );