<?php

load_theme_textdomain( 'quatrorodas', TEMPLATEPATH . '/languages' );
 
$locale = get_locale();
$locale_file = TEMPLATEPATH . "/languages/$locale.php";
if ( is_readable($locale_file) )
   require_once($locale_file);
 
function get_page_number() {
      if ( get_query_var('paged') ) {
          print ' | ' . __( 'Page ' , 'quatrorodas') . get_query_var('paged');
     }
 } 

 ?>