<?php
    register_nav_menus(
        array('primary_menu' => 'top Menu')
    )
?>
<?php
function add_dropdown_arrow_to_menu_items( $items, $args ) {
    if ( $args->theme_location == 'primary_menu' ) { // Replace 'primary_menu' with your menu location
      foreach ( $items as $item ) {
        if ( in_array( 'menu-item-has-children', $item->classes ) ) {
            $item->title .= ' <span class="dropdown-arrow">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/>
            </svg>
        </span>';
        }
      }
    }
    return $items;
  }
  add_filter( 'wp_nav_menu_objects', 'add_dropdown_arrow_to_menu_items', 10, 2 );

  wp_enqueue_script('custom-script', get_template_directory_uri() . '/script.js', array(), '1.0', true);
  add_theme_support('post-thumbnails');
  add_theme_support('custom-header');
?>
