<?php
/*
Template Name: 宴会場
*/
?>
<?php get_header(); ?>
<div id="wrapper"><!-- #wrapper -->

    <?php include(TEMPLATEPATH . '/inc/header.php'); ?>

    <main id="maincontainer" class="container"><!-- #maincontainer -->
        
        <div class="main_bloc">

            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/banquet/lkv_img_banquet@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en sp_d2">CONVENTION<br class="onlySp"><span class="smr8">&</span>BANQUET</span>
                    <span class="mttls_ja">宴会場</span>
                </h1>
            </section><!-- /#kv -->

            <div id="mainsections" class="main_inner">

                <article id="breadcrumb" class="ja-serif"><!-- #breadcrumb -->
                <div id="breadcrumb_inner" class="inner_m">
                    <p>
                        <a href="<?php bloginfo('url'); ?>/">ホーム</a>
                        <span class="bcsps">&nbsp;&gt;&nbsp;</span>
                        <span>宴会場</span>
                    </p>
                </div>
                </article><!-- /#breadcrumb -->

                <section class="content inner_m">
                    <div class="ptb_sps pt0 pb45 spb30 bd_btm inner_sl sp_inner_b">
                        <h2 class="mttls tac mb30 smb20">
                            <span class="mttls_en en">BANQUET HALL</span>
                            <span class="mttls_ja">宴会場一覧</span>
                        </h2>
                        <h3 class="read_ttl ja-min tac mb50 smb30">
さまざまなシーンでご利用頂ける5つの宴会場をご用意<br>
盛大なパーティーから少人数の会議まで、目的に合わせてご自由にお使い頂けます
                        </h3>
                        <div class="imgbox_typeC">
                            <div class="itd_item ov_op">
                                <div class="itd_item_inner mb80 smb40">
                                    <figure class="mb15"><img src="<?php bloginfo('template_directory'); ?>/assets/images/banquet/img_tenga.jpg" alt=""></figure>
                                    <div class="itd_item_tbox_en">
                                        <h2 class="read_ttl_m ja-min">
                                            大宴会場 天雅
                                        </h2>
                                        <p class="read_txt mb20">
最大1,000名のお客様をおもてなしする事が可能な、ホテル京セラのメインバンケットホールです。
                                        </p>
                                        <p class="fs14 tal">※ご利用人数に応じて会場を仕切ることができます。</p>
                                    </div>
                                </div>
                                <a href="<?php bloginfo('url'); ?>/banquet/tenga/" class="hitarea"></a>
                            </div>
                            <div class="itd_item ov_op">
                                <div class="itd_item_inner mb80 smb40">
                                    <figure class="mb15"><img src="<?php bloginfo('template_directory'); ?>/assets/images/banquet/img_seiryu.jpg" alt=""></figure>
                                    <div class="itd_item_tbox_en">
                                        <h2 class="read_ttl_m ja-min">
                                            清流・浮雲・陽光
                                        </h2>
                                        <p class="read_txt mb20">
フロントロビーからエスカレーターをご利用いただける、気軽で使い勝手の良いバンケットルームです。
                                        </p>
                                    </div>
                                </div>
                                <a href="<?php bloginfo('url'); ?>/banquet/seiryu/" class="hitarea"></a>
                            </div>
                            <div class="itd_item ov_op">
                                <div class="itd_item_inner mb80 smb40">
                                    <figure class="mb15"><img src="<?php bloginfo('template_directory'); ?>/assets/images/banquet/img_southerncross.jpg" alt=""></figure>
                                    <div class="itd_item_tbox_en">
                                        <h2 class="read_ttl_m ja-min">
                                            サザンクロス
                                        </h2>
                                        <p class="read_txt mb20">
館内に広がる大アトリウム空間と錦江湾に浮かぶ桜島の眺望が一度に楽しめるバンケットルームです。
                                        </p>
                                    </div>
                                </div>
                                <a href="<?php bloginfo('url'); ?>/banquet/southerncross/" class="hitarea"></a>
                            </div>
                            <div class="itd_item ov_op">
                                <div class="itd_item_inner mb80 smb40">
                                    <figure class="mb15"><img src="<?php bloginfo('template_directory'); ?>/assets/images/banquet/img_bouquet.jpg" alt=""></figure>
                                    <div class="itd_item_tbox_en">
                                        <h2 class="read_ttl_m ja-min">
                                            ブーケ・オアシス
                                        </h2>
                                        <p class="read_txt mb20">
さまざまなシチュエーションにご利用いただけるバンケットルームです。
                                        </p>
                                    </div>
                                </div>
                                <a href="<?php bloginfo('url'); ?>/banquet/bouquet/" class="hitarea"></a>
                            </div>
                            <div class="itd_item ov_op">
                                <div class="itd_item_inner mb80 smb40">
                                    <figure class="mb15"><img src="<?php bloginfo('template_directory'); ?>/assets/images/banquet/img_flower.jpg" alt=""></figure>
                                    <div class="itd_item_tbox_en">
                                        <h2 class="read_ttl_m ja-min">
                                            フラワー
                                        </h2>
                                        <p class="read_txt mb20">
明るく開放的な多目的ホールです。様々な目的・用途のお集まりに。
                                        </p>
                                    </div>
                                </div>
                                <a href="<?php bloginfo('url'); ?>/banquet/flower/" class="hitarea"></a>
                            </div>
                        </div>
						<?php include( TEMPLATEPATH . '/inc/banner1.php' ); ?>
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