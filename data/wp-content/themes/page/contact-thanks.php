<?php
/*
Template Name: お問い合わせ - 完了画面
*/
?>
<?php get_header(); ?>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.3.0.js"></script>

<div id="wrapper"><!-- #wrapper -->

    <?php include(TEMPLATEPATH . '/inc/header.php'); ?>

    <main id="maincontainer" class="container"><!-- #maincontainer -->
        
        <div class="main_bloc">

            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/access/lkv_img_access@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">CONTACT US</span>
                    <span class="mttls_ja">お問い合わせ</span>
                </h1>
            </section><!-- /#kv -->

            <!--<div id="mainsections" class="main_inner">-->
			<div class="main_inner">
                <article id="breadcrumb" class="ja-serif"><!-- #breadcrumb -->
                  <div id="breadcrumb_inner" class="inner_m">
                    <p>
                        <a href="<?php bloginfo('url'); ?>/">ホーム</a>
                        <span class="bcsps">&nbsp;&gt;&nbsp;</span>
                        <span>お問い合わせ</span>
                    </p>
                  </div>
                </article><!-- /#breadcrumb -->

                <section class="content">
                    <div class="mb40 smb40 inner bd_btm">
                        <h2 class="read_ttl tac ja-min">
							お問い合わせフォーム
                        </h2>
                    </div>
                    <div class="mb120 smb60 inner">
						<div class="fm_flow">
							<p>入力</p>
							<p>確認</p>
							<p class="current">完了</p>
						</div>
                        <p class="tac fs16 sfs14 mb10 mt40">
							お問い合わせありがとうございます。<br>
							内容を確認し、担当者よりご連絡を差し上げます。
                        </p>
                    </div>
                </section>

                <?php include(TEMPLATEPATH . '/inc/footer.php'); ?>

            </div>
        </div>

    </main><!-- / #maincontainer -->

    <div id="covermc"></div>

</div><!-- / #wrapper -->

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/retina.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/slick.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/flick.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/share.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/low.js"></script>
<?php get_footer(); ?>