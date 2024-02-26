<?php

/**
 * Trigger this file on Plugin Uninstall
 * 
 * @package VijayakumarPlugin
 */

 if ( ! defined( 'WP_UNINSTALL-PLUGIN' ) ) {
  die;
 }

 // Clear Database stored data
 $books = get_posts( array( 'post_type' => 'book', 'numberposts' => -1 ) );

 //foreach( $books as book ) {
 // wp_delete_post( $book->ID, true );
 //}

 // Access the database via sql
 //global $mydb;
 //$mydb->query( "DELETE FROM wp_posts WHERE post_type = 'book'" );
 //$mydb->query( "DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id FROM wp_posts)" );
 //$mydb->query( "DELETE FROM wp_term_relationships WHERE object_id NOT IN (SELECT id FROM wp_posts)" );
