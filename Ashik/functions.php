<?php 

add_theme_support('menus');
add_theme_support('widgets');
add_theme_support('custom-header');
add_theme_support('custom-background');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('audio','video','gallery'));
add_theme_support('custom-logo');


register_sidebar([

'name' => ' Right sidebar',
'description' =>  'This Right sidebar',

'id'  => 'right'

]);

register_sidebar([

'name' => 'Left sidebar',
'description' => 'This Left Sidebar',
'id'   => 'left'

]);

register_sidebar([

'name' => 'Footer sidebar',
'description' => 'This Footer Sidebar',

'id' => 'footer'

]);

/*register_nav_menu('mainmenu',' Main Menu');
register_nav_menu('footermenu','Footer Menu'); Single menu create er jonno*/


register_nav_menus([

'mainmenu'      => 'Main Menu',

'footermenu'    => 'Footer Menu',

]);

register_post_type('gallery',[

'public' => true,
'labels' => [

'name' => 'Gallery',
'all_items' => 'All Gallery',
'add_new' => 'Add New Gallery',
'add_new_item' => 'Add New Gallery',
'featured_image' =>  'Gallery image',
'set_featured_image' => 'Set Gallery image',

],

'supports'  => ['title','thumbnail','editor'],
'menu_position' => 5,

'menu_icon' => 'dashicons-format-image',

]);

register_post_type('news',[

'public' => true,

'labels' => [

'name'  => 'News',
'all_items' => 'All News',
'add_new_item' => 'Add New News',
'add_new' => 'Add News',
'featured_image' => 'Add News image',
'set_featured_image' => 'Set News image', 

],

'supports' => ['title','thumbnail','editor'],
'menu_position' => 20,
'menu_icon' => 'dashicons-admin-site',

]);

register_post_type('products_catagories',[

'public' => true,

'labels' => [

'name'  => 'Products Catagories',
'all_items' => 'All Products',
'add_new' => 'Add Products',
'add_new_item' => 'Add New Products',
'featured_image' => 'Featured Image',
'set_featured_image' => 'Add Products Image',

],

'supports' => ['Title','thumbnail','editor'],

'menu_position' => 21,
'menu_icon' => 'dashicons-admin-appearance',


]);

register_taxonomy('gal_tag','gallery',[

'public' => true,

]);

register_taxonomy('gal_tag_cat','gallery',[

'pubilc' => true,
'hierarchical' => true,
]);

register_taxonomy('news_tag','news',[

'public' => true,


]);
register_taxonomy('news_tag_cat','news',[

'public' => true,
'hierarchical' => true,

]);

register_taxonomy('products_tag','products_catagories',[

'public' => true,


]);

register_taxonomy('products_tag_cat','products_catagories',[

'public' => true,
'hierarchical' => true,

]);

 ?>