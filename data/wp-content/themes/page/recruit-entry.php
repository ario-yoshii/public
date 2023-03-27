<?php
/*
Template Name: 採用情報 - 応募フォーム
*/
?>
<?php get_header(); ?>

<div id="wrapper"><!-- #wrapper -->

    <?php include(TEMPLATEPATH . '/inc/header.php'); ?>

    <main id="maincontainer" class="container"><!-- #maincontainer -->
        
        <div class="main_bloc">

            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/recruit/lkv_img_recruit@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">RECRUIT</span>
                    <span class="mttls_ja">採用情報</span>
                </h1>
            </section><!-- /#kv -->

            <div id="mainsections" class="main_inner">

                <article id="breadcrumb" class="ja-serif"><!-- #breadcrumb -->
                  <div id="breadcrumb_inner" class="inner_m">
                    <p>
                        <a href="<?php bloginfo('url'); ?>/">ホーム</a>
                        <span class="bcsps">&nbsp;&gt;&nbsp;</span>
                        <a href="<?php bloginfo('url'); ?>/recruit/">採用情報</a>
                        <span class="bcsps">&nbsp;&gt;&nbsp;</span>
                        <span>エントリーフォーム</span>
                    </p>
                  </div>
                </article><!-- /#breadcrumb -->

                <section class="content">
                    <div class="mb40 smb40 inner bd_btm">
                        <h2 class="read_ttl tac ja-min">
お問い合わせフォーム
                        </h2>
                        <p class="tac fs14 sfs13 mb20">
下記フォームに必須事項をご入力いただき、<br class="onlySp">ページ下部の「送信」ボタンを押してください。
                        </p>
                        <p class="tac fs14 sfs13 mb60 smb30"><span class="redlabel_fk mr10">必須</span>は入力必須項目です</p>
                    </div>
                    <div class="mb120 smb60 inner">
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

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.3.0.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/retina.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/slick.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/flick.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/share.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/low.js"></script>
<?php get_footer(); ?>