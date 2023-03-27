<?php
/*
Template Name: レストラン＆バー - 予約 - エラー
*/
?>
<?php get_header(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.3.0.js"></script>

<div id="wrapper"><!-- #wrapper -->

    <?php include(TEMPLATEPATH . '/inc/header.php'); ?>

    <main id="maincontainer" class="container"><!-- #maincontainer -->
        
        <div class="main_bloc">


            <!--<div id="mainsections" class="main_inner">-->
			<div class="main_inner">

                <article id="breadcrumb" class="ja-serif"><!-- #breadcrumb -->
                  <div id="breadcrumb_inner" class="inner_m">
                    <p>
                        <a href="<?php bloginfo('url'); ?>/">ホーム</a>
                        <span class="bcsps">&nbsp;&gt;&nbsp;</span>
                        <a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
                        <span class="bcsps">&nbsp;&gt;&nbsp;</span>
                        <span>レストラン予約</span>
                    </p>
                  </div>
                </article><!-- /#breadcrumb -->

                <section class="content">
                    <div class="mb40 smb40 inner bd_btm">
                        <h2 class="read_ttl tac ja-min">
							レストラン予約フォーム
                        </h2>


                    </div>
                    <div class="mb120 smb60 inner">
						<div class="fm_flow">
							<p class="error">エラー</p>
							<p>確認</p>
							<p>完了</p>
						</div>
						<p class="tac fs14 sfs13 mb20">入力内容をご確認の上、再度「確認する」ボタンを押してください。</p>
						<p class="fs14 sfs13 mb40 smb30 tac"><span class="redlabel_fk mr10">必須</span>は入力必須項目です</p>
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_content(__('(more...)')); ?>
						<?php endwhile; else: ?><?php endif; ?>
                    </div>
                </section>

                <?php include(TEMPLATEPATH . '/inc/footer.php'); ?>

            </div>
        </div>

    </main><!-- / #maincontainer -->

    <div id="covermc"></div>

</div><!-- / #wrapper -->

<!--<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.3.0.js"></script>-->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/retina.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/slick.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/flick.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/share.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/low.js"></script>
               

<?php get_footer(); ?>