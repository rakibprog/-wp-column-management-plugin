<?php 
/*
 * Plugin Name:       wp column management plugin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Rakib Hossain
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       wp-column-mangement
 * Domain Path:       /languages
 */


 /**
  *  Add customs posts columns
  */

  function set_custom_post_columns ($columns) {
    unset($columns['tags']);
    unset($columns['categories']);
    unset($columns['author']);
    unset($columns['date']);

    $columns['author']  = 'Author';
    $columns['tags'] = 'Tags';
    $columns['categories'] = 'Categories';
    $columns['date']  = 'Date';
    $columns['id'] = __('Post ID','wp-column-mangement');


    return $columns;
  }
  add_filter( 'manage_posts_columns', 'set_custom_post_columns');

  function add_custom_post_column_id( $column, $post_id){
    echo $post_id;
  }
  add_action('manage_posts_custom_column','add_custom_post_column_id',10,2);