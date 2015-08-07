<?php 
// This IS thumbnail
add_theme_support ('post-thumbnails');
set_post_thumbnail_size (550 , 350 , true);



?>
<?php 
/*
 function wp_pagination() {
global $wp_query;
$big = 12345678;
$page_format = paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $wp_query->max_num_pages,
    'type'  => 'array'
) );
if( is_array($page_format) ) {
            $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
            echo '<div><ul>';
            echo '<li><span>'. $paged . ' از ' . $wp_query->max_num_pages .'</span></li>';
            foreach ( $page_format as $page ) {
                    echo "<li>$page</li>";
            }
           echo '</ul></div>';
}
}
*/
include ( 'paginate.php' );
?>
<?php

require_once(TEMPLATEPATH . '/admin/admin-functions.php');
require_once(TEMPLATEPATH . '/admin/admin-interface.php');
require_once(TEMPLATEPATH . '/admin/theme-settings.php');

?>
<?php

// THis is For menus
function register_my_menus() {
	register_nav_menus(
	array(
	'top-menu' => __( 'منو بالا' ),
	'cat' => __( 'فهرست' ),
	)
	);
	}
	 
	add_action( 'init', 'register_my_menus' );
?>
<?php
if(function_exists(register_sidebar)){
	register_sidebar(array(
	'name' => 'sidebar' ,
	'id' => 'my-sidebar',
	'descripton' => 'PCG SideBar',
	'before_widget' => '<aside>',
	'after_widget' => '</aside>',
	'before_title' => ' <header><div></div><p>',
	'after_title' => '</p></header>',
	));
}


// Send Email
add_action( 'comment_unapproved_to_approved', 'comment_unapproved_to_approved_example' ); 
 
function comment_unapproved_to_approved_example( $comment ) {
 
    $commenter_email = $comment->comment_author_email;
    $commenter_name  = $comment->comment_author;
    $post_url = get_comment_link( $comment );
    $subject = "دیدگاه ارسالی‌تان انتشار یافت!";
    $message = "سلام $commenter_name،\n\nدیدگاه ارسالی شما مورد تایید قرار گرفت و در سایت انتشار یافت. می‌توانید آن را از لینک زیر مشاهده نمایید:\n\n$post_url\n\nبا تشکر از به اشتراک گذاشتن نظرتان!";
 
    wp_mail( $commenter_email, $subject, $message );
}


// Ago Time
function time_ago( $type = 'post' ) {
    $d = 'comment' == $type ? 'get_comment_time' : 'get_post_time';
    return human_time_diff($d('U'), current_time('timestamp')) . " " . __('پیش');
}

/*
// َDashbord Just For Admin
add_action( 'init', 'blockusers_mw_init' );
function blockusers_mw_init() {
        if ( is_admin() && ! current_user_can( 'administrator' ) ) {
                wp_redirect( home_url() );
                exit;
        }
}
*/


