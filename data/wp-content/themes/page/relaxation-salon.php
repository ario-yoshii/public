<?php
/*
Template Name: 温泉・スパ・プール・ジム - リラクゼーションサロン オクシア
*/
?>
<?php get_header(); ?>

<div id="wrapper"><!-- #wrapper -->

    <?php include(TEMPLATEPATH . '/inc/header.php'); ?>

    <main id="maincontainer" class="container"><!-- #maincontainer -->

        <div class="main_bloc">

            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/relaxation/lkv_img_relaxation@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">RELAXATION</span>
                    <span class="mttls_ja">温泉・スパ・プール・ジム</span>
                </h1>
            </section><!-- /#kv -->

            <div id="mainsections" class="main_inner">

                <article id="breadcrumb" class="ja-serif"><!-- #breadcrumb -->
                    <div id="breadcrumb_inner" class="inner_m">
                        <p>
                            <a href="<?php bloginfo('url'); ?>/">ホーム</a>
                            <span class="bcsps">&nbsp;&gt;&nbsp;</span>
                            <a href="<?php bloginfo('url'); ?>/relaxation/">温泉・スパ・プール・ジム</a>
                            <span class="bcsps">&nbsp;&gt;&nbsp;</span>
                            <span>リラクゼーションサロン オクシア</span>
                        </p>
                    </div>
                </article><!-- /#breadcrumb -->

                <section class="content inner_m">
                    <div class="ptb_sps pt0 pb80 spb40 inner_ss sp_inner_b">
                        <h2 class="mttls tac mb18 smb12">
                            <span class="mttls_en en">RELAXATION SALON</span>
                            <span class="mttls_ja">リラクゼーションサロン オクシア</span>
                        </h2>
                        <div class="itbox_item_img imgslidesC mb40 smb25">
                            <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/relaxation/salon/img_slide_relaxation01.jpg" alt=""></figure>
                        </div>
                        <div class="t_flex_box_container">
                            <div class="t_flex_l">
                                <div class="t_flex_l_inner">
                                    <h3 class="read_ttl mb15">リラクゼーションサロン　オクシア</h3>
                                    <p>身も心もほぐす極上の癒やしを提供いたします。エステティックメニューからリラクゼーションメニューまで、女性のお客様はもちろん、<br class="onlyPc">男性のお客様も全てのメニューをご利用いただけます。</p>
                                </div>
                            </div>
                            <div class="t_flex_r">
                                <div class="t_flex_r_inner mt5">
                                    <dl class="ts_flex_container">
                                        <dt class="tl_m fw_bold">営業時間</dt>
                                        <dd class="">
                                            <?php if (date_i18n("Ymd") <= "20240930"): /*2024年9月30日まで表示*/ ?>
                                                <span class="fw_bold">16:00～23:00（最終受付 22:00）</span><br>
                                                <span class="fw_bold fs14 sfs13">※毎週日曜日は定休日です。</span><br>
                                            <?php else: ?>
                                                <span class="fw_bold">【火曜・水曜・木曜】18:00 〜 23:00<br>
                                                    【 金曜・土曜 】16:00 〜 23:00</span><br>
                                                <span class="fw_bold fs14 sfs13">※定休:日曜日、月曜日</span><br>
                                            <?php endif; ?>
                                            <span class="fs13 sfs12">上記以外については改定する場合がございますのでご予約時にご確認下さい</span>
                                        </dd>
                                    </dl>
                                    <dl class="ts_flex_container">
                                        <dt class="tl_m fw_bold">場所</dt>
                                        <dd>ホテル京セラ内 本館B1F<br>リラクゼーションサロン オクシア</dd>
                                    </dl>
                                    <dl class="ts_flex_container">
                                        <dt class="tl_m fw_bold">お問い合わせ</dt>
                                        <dd>0995-43-7611（直通）<br>831番（内線）</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="content">
                    <div class="ptb_sps inner_sm bd_btm2">
                        <h3 class="ja-min sttl">エステティックメニュー</h3>
                        <article class="tns_container">
                            <div class="tnsbox">
                                <h3 class="tns_ttl">アロマフェイシャル</h3>
                                <ul class="tnslist mb35 smb15">
                                    <li>
                                        <p class="tns_txt"><span class="tns_intxt">・お顔と胸元までのトリートメント</span></p>
                                        <p class="tns_time">30分</p>
                                        <p class="tns_yen">4,800円</p>
                                    </li>
                                    <li>
                                        <p class="tns_txt"><span class="tns_intxt">・クレンジング・お顔と胸元までのトリートメント＋パック</span></p>
                                        <p class="tns_time">60分</p>
                                        <p class="tns_yen">9,900円</p>
                                    </li>
                                    <li>
                                        <p class="tns_txt"><span class="tns_intxt">・クレンジング・お顔と胸元までのトリートメント＋パック＋首・肩・背面を集中的に</span></p>
                                        <p class="tns_time">90分</p>
                                        <p class="tns_yen">14,800円</p>
                                    </li>
                                </ul>

                                <h3 class="tns_ttl">アロマボディ</h3>
                                <ul class="tnslist">
                                    <li>
                                        <p class="tns_txt"><span class="tns_intxt">・上半身または下半身</span></p>
                                        <p class="tns_time">30分</p>
                                        <p class="tns_yen">4,800円</p>
                                    </li>
                                    <li>
                                        <p class="tns_txt"><span class="tns_intxt">・上半身・腕・下半身</span></p>
                                        <p class="tns_time">60分</p>
                                        <p class="tns_yen">9,900円</p>
                                    </li>
                                    <li>
                                        <p class="tns_txt"><span class="tns_intxt">・上半身・腕・デコルテ・下半身</span></p>
                                        <p class="tns_time">90分</p>
                                        <p class="tns_yen">14,800円</p>
                                    </li>
                                </ul>
                            </div>
                            <figure class="tnsimg"><img src="<?php bloginfo('template_directory'); ?>/assets/images/relaxation/salon/img_salon_s01.jpg" alt=""></figure>
                        </article>
                    </div>
                    <div class="ptb_sps pt30 pb60 spb40 inner_sm">
                        <h3 class="ja-min sttl mb15">リラクゼーションメニュー</h3>
                        <article class="tns_container">
                            <div class="tnsbox">
                                <h3 class="tns_ttl">ボディケア　全身のもみほぐし</h3>
                                <ul class="tnslist mb35 smb15">
                                    <li>
                                        <p class="tns_txt"><span class="tns_intxt">・首から下の背面</span></p>
                                        <p class="tns_time">40分</p>
                                        <p class="tns_yen">4,400円</p>
                                    </li>
                                    <li>
                                        <p class="tns_txt"><span class="tns_intxt">・全身・ヘッドケア</span></p>
                                        <p class="tns_time">60分</p>
                                        <p class="tns_yen">6,600円</p>
                                    </li>
                                    <li>
                                        <p class="tns_txt"><span class="tns_intxt">・全身＋ヘッドケア＋お疲れポイント集中ケア</span></p>
                                        <p class="tns_time">80分</p>
                                        <p class="tns_yen">8,800円</p>
                                    </li>
                                </ul>

                                <h3 class="tns_ttl">フットリフレクソロジー　足のつぼ</h3>
                                <ul class="tnslist mb35 smb15">
                                    <li>
                                        <p class="tns_txt"><span class="tns_intxt">・足首まで</span></p>
                                        <p class="tns_time">20分</p>
                                        <p class="tns_yen">2,200円</p>
                                    </li>
                                    <li>
                                        <p class="tns_txt"><span class="tns_intxt">・ひざ上まで</span></p>
                                        <p class="tns_time">40分</p>
                                        <p class="tns_yen">4,400円</p>
                                    </li>
                                </ul>

                                <h3 class="tns_ttl">ヘッドケア　頭・首のつぼ</h3>
                                <ul class="tnslist mb35 smb15">
                                    <li>
                                        <p class="tns_txt"><span class="tns_intxt">・頭・首・肩のもみほぐし</span></p>
                                        <p class="tns_time">20分</p>
                                        <p class="tns_yen">2,200円</p>
                                    </li>
                                    <li>
                                        <p class="tns_txt"><span class="tns_intxt">・頭・首・肩のもみほぐし</span></p>
                                        <p class="tns_time">30分</p>
                                        <p class="tns_yen">3,300円</p>
                                    </li>
                                </ul>

                                <h3 class="tns_ttl">ハンドリフレクソロジー　手のつぼ</h3>
                                <ul class="tnslist mb35 smb15">
                                    <li>
                                        <p class="tns_txt"><span class="tns_intxt">・肘まで</span></p>
                                        <p class="tns_time">20分</p>
                                        <p class="tns_yen">2,200円</p>
                                    </li>
                                    <li>
                                        <p class="tns_txt"><span class="tns_intxt">・腕の付け根まで</span></p>
                                        <p class="tns_time">30分</p>
                                        <p class="tns_yen">3,300円</p>
                                    </li>
                                </ul>

                                <p class="fs14">※表記料金はサービス料税込です。<br>
                                    ※料金については改定する場合がございますのでご予約時にご確認下さい。</p>
                            </div>
                            <figure class="tnsimg"><img src="<?php bloginfo('template_directory'); ?>/assets/images/relaxation/salon/img_salon_s02.jpg" alt=""></figure>
                        </article>
                    </div>
                </section>
                <!--
                <section class="content">
                    <div class="ptb_sps pt40 pb40 spb20 inner">
                        <h3 class="read_ttl ja-min tac fw_bold">サービス一覧</h3>
                    </div>
                    <article class="itbox_c_m5 pb75 spb40 sp_sps">
                        <a href="#" class="itbox_item">
                            <figure class="itbox_item_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/relaxation/img_service01.jpg" alt=""></figure>
                            <p class="itbox_item_txt">スポーツ＆リラクゼーション空間　オクシア</p>
                        </a>
                        <a href="#" class="itbox_item">
                            <figure class="itbox_item_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/relaxation/img_service02.jpg" alt=""></figure>
                            <p class="itbox_item_txt">リラクゼーションサロン　オクシア</p>
                        </a>
                        <a href="#" class="itbox_item">
                            <figure class="itbox_item_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/relaxation/img_service03.jpg" alt=""></figure>
                            <p class="itbox_item_txt">オクシア会員入会特別キャンペーン</p>
                        </a>
                        <a href="#" class="itbox_item">
                            <figure class="itbox_item_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/relaxation/img_service04.jpg" alt=""></figure>
                            <p class="itbox_item_txt">温泉プラン</p>
                        </a>
                        <a href="#" class="itbox_item">
                            <figure class="itbox_item_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/relaxation/img_service05.jpg" alt=""></figure>
                            <p class="itbox_item_txt">酸素カプセル</p>
                        </a>
                    </article>
                </section>
-->

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