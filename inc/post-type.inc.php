<?php
function form() {

    $labels = array(
        'name'                => _x( 'Formularia', 'Post Type General Name', 'formularia' ),
        'singular_name'       => _x( 'Formularia', 'Post Type Singular Name', 'formularia' ),
        'menu_name'           => __( 'Formularia', 'formularia' ),
        'name_admin_bar'      => __( 'Formularia', 'formularia' ),
        'parent_item_colon'   => __( '', 'formularia' ),
        'all_items'           => __( 'All Formularia', 'formularia' ),
        'add_new_item'        => __( 'Add New Formularia', 'formularia' ),
        'add_new'             => __( 'Add New Formularia', 'formularia' ),
        'new_item'            => __( 'New Formularia', 'formularia' ),
        'edit_item'           => __( 'Edit Formularia', 'formularia' ),
        'update_item'         => __( 'Update Formularia', 'formularia' ),
        'view_item'           => __( 'View Formularia', 'formularia' ),
        'search_items'        => __( 'Search Formularia', 'formularia' ),
        'not_found'           => __( 'Not found Formularia', 'formularia' ),
        'not_found_in_trash'  => __( 'Not found Formularia in Trash', 'formularia' ),
    );
    $args = array(
        'label'               => __( 'form', 'formularia' ),
        'description'         => __( 'form', 'formularia' ),
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