<!-- ✅ Pagination Start -->
<?php
global $wp_query;

$big = 999999999; // unique number

$pagination_links = paginate_links( array(
    'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format'    => '?paged=%#%',
    'current'   => max( 1, get_query_var( 'paged' ) ),
    'total'     => $wp_query->max_num_pages,
    'type'      => 'array',
    'prev_text' => '<i class="fa fa-long-arrow-left"></i> Prev',
    'next_text' => 'Next <i class="fa fa-long-arrow-right"></i>',
) );

if ( is_array( $pagination_links ) ) :
    ?>
    <div class="pagination-area orange-color text-center mt-30 md-mt-0">
        <ul class="pagination-part">
            <?php
            foreach ( $pagination_links as $link ) {
                if ( strpos( $link, 'current' ) !== false ) {
                    echo '<li class="active">' . str_replace( 'page-numbers', '', $link ) . '</li>';
                } else {
                    echo '<li>' . str_replace( 'page-numbers', '', $link ) . '</li>';
                }
            }
            ?>
        </ul>
    </div>
<?php endif; ?>

<!-- ✅ Pagination End -->