<?php

// 'show_in_menu' => 'edit.php?post_type=page_article'


 function my_plugin_menu(){
   add_menu_page('Page title', 'Top-level menu title', 'manage_options',  'my-top-level-handle', 'my_menu_function');
   add_submenu_page( 'my-top-level-handle', 'Custom Post Type Admin', 'Articles', 'manage_options','edit.php?post_type=page_article');
 
 
 add_action( 'admin_menu', 'my_plugin_menu' );}
