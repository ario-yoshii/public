<?php
/*
Template Name: アクセス＆フロアガイド
*/
?>
<?php get_header(); ?>
<div id="wrapper">
    <!-- #wrapper -->

    <?php include(TEMPLATEPATH . '/inc/header.php'); ?>

    <main id="maincontainer" class="container">
        <!-- #maincontainer -->

        <div class="main_bloc">

            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/access/lkv_img_access.jpg">
                <!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">LOCATION</span>
                    <span class="mttls_ja">ロケーション</span>
                </h1>
            </section><!-- /#kv -->

            <div id="mainsections" class="main_inner">

                <article id="breadcrumb" class="ja-serif">
                    <!-- #breadcrumb -->
                    <div id="breadcrumb_inner" class="inner_m">
                        <p>
                            <a href="<?php bloginfo('url'); ?>/">Home</a>
                            <span class="bcsps">&nbsp;&gt;&nbsp;</span>
                            <span>アクセス＆フロアガイド</span>
                        </p>
                    </div>
                </article><!-- /#breadcrumb -->

                <section class="content bd_btm">
                    <div class="ptb_sps pt0 pb0 inner_ss sp_inner_b">
                        <h2 class="mttls tac mb50 smb12">
                            <span class="mttls_en en">ACCESS</span>
                            <span class="mttls_ja">アクセス</span>
                        </h2>
                    </div>
                    <div class="gmap mb60 smb30">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3392.9636890480624!2d130.74484541517475!3d31.74419208129617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x353efb87c2cb55d3%3A0x15194bc982f59d2e!2z44Ob44OG44Or5Lqs44K744Op!5e0!3m2!1sja!2sjp!4v1605965920048!5m2!1sja!2sjp" width="1280" height="440" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="inner_m">
                        <div class="btns mb70 smb30">
                            <a href="#kagoshima" class="squarebtn_arrow_gd w454"><span>鹿児島市内方面からお越しの方</span></a>
                            <a href="#airport" class="squarebtn_arrow_gd w454"><span>鹿児島空港方面からお越しの方</span></a>
                        </div>
                    </div>
                </section>

                <section id="kagoshima" class="content bd_btm">
                    <div class="ptb_sps pt70 spt40 pb75 spb40 inner">
                        <h2 class="xttl ja-min tac mb60 smb40">鹿児島市内方面からお越しの方</h2>
                        <article class="imgboxes">
                            <div class="imgbox_typeC">
                                <div class="itd_item_m">
                                    <div class="itd_item_inner">
                                        <figure class="mb15 smb20"><img src="<?php bloginfo('template_directory'); ?>/assets/images/access/img_access_kagoshima01.jpg" alt=""></figure>
                                        <div class="tac">
                                            <h2 class="read_ttl_l ja-min mb20 smb15">一般道 (国道) をご利用の場合</h2>
                                            <p class="read_txt">
                                                鹿児島市内方面より国道10号線を隼人方面まで直進してください。<br>
                                                国道10号線を直進されて隼人に入りましたら、交差点「国道223入口」にて国道223号線へ左折して下さい。そのまま国道223号線を直進していただきますと、約５分（2.5ｋｍ）で右手にホテル京セラが見えてまいります。
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="itd_item_m">
                                    <div class="itd_item_inner">
                                        <figure class="mb15 smb20"><img src="<?php bloginfo('template_directory'); ?>/assets/images/access/img_access_kagoshima02.jpg" alt=""></figure>
                                        <div class="tac">
                                            <h2 class="read_ttl_l ja-min mb20 smb15">高速道路をご利用の場合</h2>
                                            <p class="read_txt">
                                                九州自動車道「加治木IC」より隼人道路に接続します。<br>
                                                隼人東インターチェンジを降りて右折すると交差点「国道223入口」に出ます。そのまま国道223号線を直進していただきますと、約５分（2.5km）でホテル京セラが見えてまいります。
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="itd_item_m">
                                    <div class="itd_item_inner">
                                        <figure class="mb15 smb20"><img src="<?php bloginfo('template_directory'); ?>/assets/images/access/230808_img_access_kagoshima03.jpg" alt=""></figure>
                                        <div class="tac">
                                            <h2 class="read_ttl_l ja-min mb20 smb15">JRをご利用の場合</h2>
                                            <p class="read_txt">
                                                JR九州の日豊本線『隼人駅』で下車してください。隼人駅からは徒歩で15分程度、タクシーではワンメーター程の距離になります。タクシーは常駐しておりませんため、ご予約をおすすめいたします。
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </section>

                <section id="airport" class="content">
                    <div class="ptb_sps pt75 spt40 pb75 spb40 inner">
                        <h2 class="xttl ja-min tac mb60 smb40">鹿児島空港方面からお越しの方</h2>
                        <article class="imgboxes">
                            <div class="imgbox_typeC">
                                <div class="itd_item_m">
                                    <div class="itd_item_inner">
                                        <figure class="mb15 smb20"><img src="<?php bloginfo('template_directory'); ?>/assets/images/access/img_access_aieport01.jpg" alt=""></figure>
                                        <div class="tac">
                                            <h2 class="read_ttl_l ja-min mb20 smb15">一般道 (国道) をご利用の場合</h2>
                                            <p class="read_txt">
                                                鹿児島空港方面より国道504号線を霧島市街地方面へお進み下さい。約5.4km直進の後、西光寺交差点を右折。国道223号線に入ります。国道223号を直進されますと約5分で左側にホテル京セラが見えてまいります。
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="itd_item_m">
                                    <div class="itd_item_inner">
                                        <figure class="mb15 smb20"><img src="<?php bloginfo('template_directory'); ?>/assets/images/access/img_access_aieport02.jpg" alt=""></figure>
                                        <div class="tac">
                                            <h2 class="read_ttl_l ja-min mb20 smb15">高速道路をご利用の場合</h2>
                                            <p class="read_txt">
                                                九州自動車道「溝辺鹿児島空港IC」を降りて国道504号線を霧島市街地方面へ右折してください。約5.4km直進の後、西光寺交差点を右折。国道223号線に入ります。国道223号を直進されますと約５分で左側にホテル京セラが見えてまいります。
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="itd_item_m">
                                    <div class="itd_item_inner">
                                        <figure class="mb15 smb20"><img src="<?php bloginfo('template_directory'); ?>/assets/images/access/img_access_aieport03.jpg" alt=""></figure>
                                        <div class="tac">
                                            <h2 class="read_ttl_l ja-min mb20 smb15">空港リムジンバスをご利用の場合</h2>
                                            <p class="read_txt">
                                                鹿児島空港バス乗り場 (10番) 発着<br>
                                                大人460円 / 子供230円（2022年10月11日現在）<br>

                                                <a href="https://www.h-kyocera.co.jp/data/wp-content/uploads/airportbus_20231001.pdf" target="_blank" class="btn1">バス時刻表</a>

                                                <span class="d_block mt5 fs13 lh20">
                                                    ※【鹿屋⇔空港】と表示のあるバスにご乗車くださいませ。<br>
                                                    ※一部ホテル前に停車しない便がありますので乗車前にご確認くださいませ。<br>
                                                    ※ホテル京セラ → 鹿児島空港は乗車専用となります。<br>
                                                    ※鹿児島空港 → ホテル京セラは下車専用となります。 バスの運行状況などのお問合せは、鹿児島交通 鹿屋営業所 (0994-65-2258) まで。
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </section>

                <section class="content bg_gray">
                    <div class="ptb_sps pt75 spt40 pb75 spb40 inner_m">
                        <h2 class="mttls tac mb40 smb0">
                            <span class="mttls_en en">FLOOR GUIDE</span>
                            <span class="mttls_ja">フロアガイド</span>
                        </h2>
                        <article class="fg_flex_container">
                            <figure class="fg_flex_item_l"><img src="<?php bloginfo('template_directory'); ?>/assets/images/access/img_floorguide.jpg" alt=""></figure>
                            <div class="fg_flex_item_r">
                                <article class="mb45">
                                    <h5 class="sttl ja-min">本館</h5>
                                    <div class="tnses_container">
                                        <dl class="tnses">
                                            <dt>TOPF（13F）</dt>
                                            <dd>
                                                メインバー「アモーレ」　/　TOPバンケットルーム「サザンクロス」<br class="onlyPc">
                                                パーティールーム「シャンテ」　/　パーティールーム「アミューズ」<br class="onlyPc">
                                                バンケットルーム「ブーケ」　/　バンケットルーム「オアシス」
                                            </dd>
                                        </dl>
                                        <dl class="tnses">
                                            <dt>4〜12F</dt>
                                            <dd class="flex_left">
                                                <p class="fw_a fw_bold">客室</p>
                                                <p>シングルルーム　/　ダブルルーム　/　ツインルーム<br class="onlyPc">
                                                    デラックスツインルーム　/　和洋室　/　スイートルーム</p>
                                            </dd>
                                        </dl>
                                        <dl class="tnses">
                                            <dt>3F</dt>
                                            <dd>
                                                チャペル「セントグラシアチャーチ」　/　日本料理「京はるか」<br class="onlyPc">
                                                アイ・スポット　/　喫煙コーナー
                                            </dd>
                                        </dl>
                                        <dl class="tnses">
                                            <dt>2F</dt>
                                            <dd>
                                                神前式場　/　写場　/　衣裳室　/　ドレッシングルーム　/　バンケットルーム「清流」<br class="onlyPc">
                                                バンケットルーム「浮雲」　/　バンケットルーム「陽光」<br class="onlyPc">
                                                男性更衣室「山水」　/　女性更衣室「風月」　/　ブライダルサロン
                                            </dd>
                                        </dl>
                                        <dl class="tnses">
                                            <dt>1F</dt>
                                            <dd>
                                                フロント　/　ロビー　/　エントランス　/　洋食レストラン「デルソーレ」<br class="onlyPc">
                                                フラワーショップ　/　ジュエリーショップ　/　売店　/　喫煙コーナー　/　授乳室
                                            </dd>
                                        </dl>
                                        <dl class="tnses">
                                            <dt>B1F</dt>
                                            <dd>
                                                オクシア（温泉大浴場・トレーニングジム・プール）<br class="onlyPc">
                                                マッサージルーム　/　喫煙コーナー
                                            </dd>
                                        </dl>
                                        <dl class="tnses">
                                            <dt>B2F</dt>
                                            <dd>
                                                大宴会場「天雅」　/　授乳室　/　喫煙コーナー
                                            </dd>
                                        </dl>
                                    </div>
                                </article>

                                <article>
                                    <h5 class="sttl ja-min">別館-アネックス-</h5>
                                    <div class="tnses_container">
                                        <dl class="tnses">
                                            <dt>4〜8F</dt>
                                            <dd class="flex_left">
                                                <p class="fw_a fw_bold">客室</p>
                                                シングルルーム　/　ツインルーム　/　和室</p>
                                            </dd>
                                        </dl>
                                        <dl class="tnses">
                                            <dt>3F</dt>
                                            <dd>
                                                上野原縄文の森コーナー <span class="fw_bold ml20">客室</span> シングルルーム　/　ツインルーム
                                            </dd>
                                        </dl>
                                        <dl class="tnses">
                                            <dt>2F</dt>
                                            <dd>
                                                バンケットルーム「桜」　/　バンケットルーム「フラワー」
                                            </dd>
                                        </dl>
                                        <dl class="tnses">
                                            <dt>1F</dt>
                                            <dd>
                                                ロビー・エントランス　/　バイキングレストラン「夢の国」　/　喫煙コーナー
                                            </dd>
                                        </dl>
                                        <dl class="tnses">
                                            <dt>B1F</dt>
                                            <dd>
                                                アミューズメントスパ「エデン」
                                            </dd>
                                        </dl>
                                    </div>
                                </article>
                            </div>
                        </article>
                    </div>
                </section>


                <section class="content pt70 spt50 pb100 spb0">
                    <div class="ptb_sps pt0 pb0 inner_m">
                        <h2 class="mttls tac mb40 smb30">
                            <span class="mttls_en en">FACILITIES</span>
                            <span class="mttls_ja">施設のご案内</span>
                        </h2>
                        <article class="imgboxes">
                            <div class="imgbox_typeC">
                                <div class="itd_item">
                                    <div class="itd_item_inner">
                                        <figure class="mb15"><img src="<?php bloginfo('template_directory'); ?>/assets/images/access/img_entrance.jpg" alt="" /></figure>
                                        <div class="itd_item_tbox">
                                            <h2 class="read_ttl ja-min">エントランス</h2>
                                            <p class="read_txt"></p>
                                        </div>
                                        <!--<p class="txtbtn_s">詳しく見る</p>-->
                                    </div>
                                    <!--<a href="#" class="hitarea"></a>-->
                                </div>
                                <div class="itd_item">
                                    <div class="itd_item_inner">
                                        <figure class="mb15"><img src="<?php bloginfo('template_directory'); ?>/assets/images/access/img_concierge.jpg" alt="" /></figure>
                                        <div class="itd_item_tbox">
                                            <h2 class="read_ttl ja-min">コンシェルジュ</h2>
                                            <p class="read_txt"></p>
                                        </div>
                                        <!--<p class="txtbtn_s">詳しく見る</p>-->
                                    </div>
                                    <!--<a href="#" class="hitarea"></a>-->
                                </div>
                                <div class="itd_item">
                                    <div class="itd_item_inner">
                                        <figure class="mb15"><img src="<?php bloginfo('template_directory'); ?>/assets/images/access/img_lobby.jpg" alt="" /></figure>
                                        <div class="itd_item_tbox">
                                            <h2 class="read_ttl ja-min">ロビー</h2>
                                            <p class="read_txt"></p>
                                        </div>
                                        <!--<p class="txtbtn_s">詳しく見る</p>-->
                                    </div>
                                    <!--<a href="#" class="hitarea"></a>-->
                                </div>
                                <div class="itd_item">
                                    <div class="itd_item_inner">
                                        <figure class="mb15"><img src="<?php bloginfo('template_directory'); ?>/assets/images/access/img_breastfeeding.jpg" alt="" /></figure>
                                        <div class="itd_item_tbox">
                                            <h2 class="read_ttl ja-min">授乳室</h2>
                                            <p class="read_txt"></p>
                                        </div>
                                        <!-- <p class="txtbtn_s">詳しく見る</p>-->
                                    </div>
                                    <!-- <a href="#" class="hitarea"></a>-->
                                </div>
                                <div class="itd_item">
                                    <div class="itd_item_inner">
                                        <figure class="mb15"><img src="<?php bloginfo('template_directory'); ?>/assets/images/access/img_toilet.jpg" alt="" /></figure>
                                        <div class="itd_item_tbox">
                                            <h2 class="read_ttl ja-min">みんなのトイレ</h2>
                                            <p class="read_txt"></p>
                                        </div>
                                        <!-- <p class="txtbtn_s">詳しく見る</p>-->
                                    </div>
                                    <!-- <a href="#" class="hitarea"></a>-->
                                </div>
                                <div class="itd_item">
                                    <div class="itd_item_inner">
                                        <figure class="mb15"><img src="<?php bloginfo('template_directory'); ?>/assets/images/access/img_shop01.jpg" alt="" /></figure>
                                        <div class="itd_item_tbox">
                                            <h2 class="read_ttl ja-min">売店</h2>
                                            <p class="read_txt"></p>
                                        </div>
                                        <p class="txtbtn_s">詳しく見る</p>
                                    </div>
                                    <a href="<?php bloginfo('url'); ?>/shop/" class="hitarea"></a>
                                </div>
                                <div class="itd_item">
                                    <div class="itd_item_inner">
                                        <figure class="mb15"><img src="<?php bloginfo('template_directory'); ?>/assets/images/access/img_museum.jpg" alt="" /></figure>
                                        <div class="itd_item_tbox">
                                            <h2 class="read_ttl ja-min">縄文遺跡ミュージアム</h2>
                                            <p class="read_txt"></p>
                                        </div>
                                        <!--<p class="txtbtn_s">詳しく見る</p>-->
                                    </div>
                                    <!--<a href="#" class="hitarea"></a>-->
                                </div>
                            </div>
                        </article>
                    </div>
                </section>


                <!--               <section class="content spb40">
                    <div class="ptb_sps pt70 spt50 pb100 spb0 inner_sb">
                        <h2 class="mttls tac mb70 smb20">
                            <span class="mttls_en en">FACILITIES</span>
                            <span class="mttls_ja">施設のご案内</span>
                        </h2>
                        <article>
                            <div class="imgbox_typeD">
                                <figure class="imgbox_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/access/img_entrance.jpg" alt=""></figure>
                                <dl class="imgbox_dlset">
                                    <dt class="sp_tac">エントランス・ロビー</dt>
                                    <dd>
文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。
                                    </dd>
                                </dl>
                            </div>
                            <div class="imgbox_typeD">
                                <figure class="imgbox_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/access/img_front.jpg" alt=""></figure>
                                <dl class="imgbox_dlset">
                                    <dt class="sp_tac">フロント</dt>
                                    <dd>
文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。予約制となっておりますので、お電話にてお申し込みください。
                                    </dd>
                                </dl>
                            </div>
                            <div class="imgbox_typeD">
                                <figure class="imgbox_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/access/img_shop.jpg" alt=""></figure>
                                <dl class="imgbox_dlset">
                                    <dt class="sp_tac">売店</dt>
                                    <dd>
文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。予約制となっておりますので、お電話にてお申し込みください。
                                    </dd>
                                </dl>
                            </div>
                        </article>
                    </div>
                </section>-->

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