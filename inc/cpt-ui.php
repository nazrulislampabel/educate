<?php
function register_course_type_taxonomy() {
    $labels = array(
        'name'              => 'Course Types',
        'singular_name'     => 'Course Type',
        'search_items'      => 'Search Course Types',
        'all_items'         => 'All Course Types',
        'parent_item'       => 'Parent Course Type',
        'parent_item_colon' => 'Parent Course Type:',
        'edit_item'         => 'Edit Course Type',
        'update_item'       => 'Update Course Type',
        'add_new_item'      => 'Add New Course Type',
        'new_item_name'     => 'New Course Type Name',
        'menu_name'         => 'Course Types',
    );

    register_taxonomy('course_type', ['product'], array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => ['slug' => 'course-type'],
    ));
}
add_action('init', 'register_course_type_taxonomy');
function register_instructor_taxonomy() {
    $labels = array(
        'name'                       => 'Instructors',
        'singular_name'              => 'Instructor',
        'search_items'               => 'Search Instructors',
        'popular_items'              => 'Popular Instructors',
        'all_items'                  => 'All Instructors',
        'edit_item'                  => 'Edit Instructor',
        'update_item'                => 'Update Instructor',
        'add_new_item'               => 'Add New Instructor',
        'new_item_name'              => 'New Instructor Name',
        'separate_items_with_commas' => 'Separate instructors with commas',
        'add_or_remove_items'        => 'Add or remove instructors',
        'choose_from_most_used'      => 'Choose from the most used instructors',
        'menu_name'                  => 'Instructors',
    );

    register_taxonomy('instructor', ['product'], array(
        'hierarchical'      => false,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => ['slug' => 'instructor'],
    ));
}
add_action('init', 'register_instructor_taxonomy');
