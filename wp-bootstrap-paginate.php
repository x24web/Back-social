<?php
function bootstrap_pagination( \WP_Query $wp_query = null, $echo = true ) {

if ( null === $wp_query ) {
    global $wp_query;
}

$pages = paginate_links( [
        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
        'format'       => '?paged=%#%',
        'current'      => max( 1, get_query_var( 'paged' ) ),
        'total'        => $wp_query->max_num_pages,
        'type'         => 'array',
        'show_all'     => false,
        'end_size'     => 3,
        'mid_size'     => 1,
        'prev_next'    => false,
        'prev_text'    => __( '« Prev' ),
        'next_text'    => __( 'Next »' ),
        'add_args'     => false,
        'add_fragment' => ''
    ]
);

if ( is_array( $pages ) ) {
    //$paged = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );

    $pagination = '<div class="pagination-blog"><ul class="pagination" style="margin: auto;margin-bottom: 24px;">';

    foreach ($pages as $page) {
                    $pagination .= '<li class="page-item mx-2' . (strpos($page, 'current') !== false ? ' active' : '') . '"> ' . str_replace('page-numbers', 'page-link', $page) . '</li>';
            }

    $pagination .= '</ul></div>';

    if ( $echo ) {
        echo $pagination;
    } else {
        return $pagination;
    }
}

return null;
}
?>