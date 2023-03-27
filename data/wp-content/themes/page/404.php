<?php
/**
 * The template for displaying 404 pages (Not Found).
  */
  header("HTTP/1.1 301 Moved Permanently");
  header("Location: /");
  exit(); 

get_header(); ?>

<div id="contents">


<div id="error">
ページが見つかりませんでした。<br />
お手数ですが、トップページよりアクセスしてください。
<div class="error-top"><a href="<?php bloginfo('url'); ?>">トップページへ移動する</a></div>
</div>

<!--contents--></div>

<div class="clear"></div>
<?php get_footer(); ?>
