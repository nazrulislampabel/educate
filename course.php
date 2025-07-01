<?php
$lesson_query = new WP_Query(array(
	'post_type' => 'lesson',
	'posts_per_page' => -1,
	'meta_query' => array(
		array(
			'key' => 'parent_course_id',
			'value' => get_the_ID(),
		),
	),
));
echo esc_html($lesson_query->found_posts) . ' Lessons';
wp_reset_postdata();
