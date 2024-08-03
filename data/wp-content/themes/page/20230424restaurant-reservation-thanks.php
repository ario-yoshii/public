<?php
/*
Template Name: レストラン＆バー - 予約 - 完了
*/
?>
<?php get_header(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.3.0.js"></script>

<div id="wrapper"><!-- #wrapper -->

    <?php include(TEMPLATEPATH . '/inc/header.php'); ?>

    <main id="maincontainer" class="container"><!-- #maincontainer -->
        
        <div class="main_bloc">
            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/lkv_img_restaurant_bar@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">RESTAURANT&BAR</span>
                    <span class="mttls_ja">レストラン＆バー</span>
                </h1>
            </section><!-- /#kv -->

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
							<p>入力</p>
							<p>確認</p>
							<p class="current">完了</p>
						</div>
                        <p class="tac fs16 sfs14 mb10 mt40">
							ご予約ありがとうございます。<br>
							後日メール又はお電話にて回答させていただきます。<br>
							正式なご予約の成立は、当店からご連絡を差し上げてからとなります。ご留意ください。<br>
							２～３日経っても連絡がない場合、お手数ですが下記の電話番号までお問合せください。
                        </p>
                            <p class="fs13 mb3 tac">お電話でのご予約・お問い合わせはこちら</p>
                            <h3 class="tellno_b en mb20 smb15 tac"><?php if (is_mobile()) : ?><a href="tel:0995-43-7111" onclick="gtag('event', 'tel-tap', {'event_category':'click','event_label': 'restaurant'});">TEL 0995-43-7111</a><?php else: ?>TEL 0995-43-7111<?php endif; ?></h3>
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