<?php
/*
Template Name: ご宿泊 - 和洋室DXタイプ 本館
*/
?>
<?php get_header(); ?>
<div id="wrapper"><!-- #wrapper -->

    <?php include(TEMPLATEPATH . '/inc/header.php'); ?>

    <main id="maincontainer" class="container"><!-- #maincontainer -->

        <div class="main_bloc">

            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/stay/lkv_img_stay@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">STAY</span>
                    <span class="mttls_ja">ご宿泊</span>
                </h1>
            </section><!-- /#kv -->

            <div id="mainsections" class="main_inner">

                <?php include(TEMPLATEPATH . '/inc/reservation.php'); ?>

                <article id="breadcrumb" class="ja-serif"><!-- #breadcrumb -->
                    <div id="breadcrumb_inner" class="inner_m">
                        <p>
                            <a href="<?php bloginfo('url'); ?>/">ホーム</a>
                            <span class="bcsps">&nbsp;&gt;&nbsp;</span>
                            <a href="<?php bloginfo('url'); ?>/stay/">ご宿泊</a>
                            <span class="bcsps">&nbsp;&gt;&nbsp;</span>
                            <span>和洋室DXタイプ</span>
                        </p>
                    </div>
                </article><!-- /#breadcrumb -->

                <section class="content">
                    <div class="ptb_sps pt0 pb0 inner_m">
                        <h2 class="mttls tac mb18 smb12">
                            <span class="mttls_en en">JAPANESE-WESTERN ROOM DX</span>
                            <span class="mttls_ja">和洋室DXタイプ</span>
                        </h2>
                        <div class="ptb_sps pt0 pb0 inner_sb sp_inner_b">
                            <div class="imgslidesA mb30 smb25">
                                <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/japanese-western-dx/img_japanese-western-dx1.jpg" alt=""></figure>
                                <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/japanese-western-dx/img_japanese-western-dx2.jpg" alt=""></figure>
                                <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/japanese-western-dx/img_japanese-western-dx3.jpg" alt=""></figure>
                            </div>
                            <h2 class="read_ttl ja-min tac mb15 sp_sps smb20">エグゼクティブフロアの和洋室で<br class="onlySp">広々快適にお過ごしください</h2>
                            <p class="tac sp_tal">
                                本館10～12階のエグゼクティブフロアに位置する、5名定員の広めの和洋室。<br class="onlyPc">
                                エアウィーヴマットレス、デュベタイプの寝具で快適な寝心地と大きな湯船が自慢のバスルーム、<br class="onlyPc">
                                マイクロナノバブルシャワーヘッド、こだわりのヘアドライヤー（ヘアビューザー）を設置。快適なご滞在をお約束致します。<br>
                                （全室禁煙ルームとなります）
                            </p>
                        </div>
                    </div>
                    <div class="ptb_sps pt60 spt40 spb20 inner_sb">
                        <article class="mb30 smb20">
                            <h3 class="ja-min sttl">基本情報</h3>
                            <dl class="dl_tnses_b">
                                <dt>定員</dt>
                                <dd>2～5名</dd>
                            </dl>
                            <dl class="dl_tnses_b">
                                <dt>広さ</dt>
                                <dd>
                                    <div class="flex_left">
                                        <span class="pt4 mr15">48.6㎡　ツイン+8.0畳</span>
                                        <a href="<?php bloginfo('template_directory'); ?>/assets/images/stay/japanese-western-dx/img_japanese-western-dx_layout.png" class="btn_floormap bg_gray a_md no_md_icon"><span>間取り図</span></a>
                                    </div>
                                </dd>
                            </dl>
                            <dl class="dl_tnses_b">
                                <dt>ベッド幅</dt>
                                <dd>1,200mm 2台<br>(3名～5名利用時は和布団をご準備いたします)</dd>
                            </dl>
                            <dl class="dl_tnses_b">
                                <dt>フロア</dt>
                                <dd>本館10～12階</dd>
                            </dl>
                            <dl class="dl_tnses_b">
                                <dt>料金</dt>
                                <dd>2名様1室　55,300円～<br><span class="fs12">※表示価格は通常料金になり、税金・サービス料が含まれております。</span></dd>
                            </dl>
                        </article>
                        <?php include(TEMPLATEPATH . '/inc/stay_reservation.php'); ?>
                        <?php include(TEMPLATEPATH . '/inc/stay_tel.php'); ?>
                    </div>
                    <?php include(TEMPLATEPATH . '/inc/banner1.php'); ?>
                    <div class="ptb_sps pt32 pb70 spb30 inner_sb">
                        <h3 class="ja-min sttl">お部屋の様子</h3>
                        <article class="mdbtnset">
                            <?php include(TEMPLATEPATH . '/inc/stay_inner2.php'); ?>
                        </article>
                    </div>
                </section>

                <?php include(TEMPLATEPATH . '/inc/stay_amenity1.php'); ?>

                <section class="content">
                    <div class="ptb_sps pt50 spt40 pb40 spb30 inner">
                        <h3 class="read_ttl ja-min tac">その他の部屋タイプもございます</h3>
                    </div>
                    <?php include(TEMPLATEPATH . '/inc/room_type.php'); ?>
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
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/modaal.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/flick.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/share.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/low.js"></script>
<script>
    $(".a_md").modaal({
        type: 'image',
        width: "50%",
        height: "50%"
    });
</script>
<?php get_footer(); ?>