<?php
$post = $wp_query->post;
  if ( in_category('1') ) {
  include(TEMPLATEPATH . '/single-news.php');
  } elseif ( in_category('2') ) {
  include(TEMPLATEPATH . '/single-news.php');
  } elseif ( in_category('3') ) {
  include(TEMPLATEPATH . '/single-news.php');
  } elseif ( in_category('69') ) { //リクルート
  include(TEMPLATEPATH . '/single-recruit.php');
  } else {
  include(TEMPLATEPATH . '/single-news.php');
  }
?>


