<?php
/*
Template Name: 温泉・スパ・プール・ジム - オクシア
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
                            <span>オクシア</span>
                        </p>
                    </div>
                </article><!-- /#breadcrumb -->

                <section class="content inner_m">
                    <div class="ptb_sps pt0 pb40 spb30 inner_sl sp_inner_b">
                        <h2 class="mttls tac mb18 smb12">
                            <span class="mttls_en en">SPORT & RELAXATION</span>
                            <span class="mttls_ja">スポーツ＆リラクゼーション空間　オクシア</span>
                        </h2>
                        <p class="tac sp_tal">
                            ホテル直下1,050mの源泉を持つ温泉大浴場と室内温水プールにスポーツジムまで完備したリラクゼーション空間。<br>
                            大きなガラス張りの窓から陽光が差し込む明るい雰囲気とホテルならではのゆったりとした贅沢な時間で<br>
                            心も身体もリフレッシュできます。<br><br>
                            ※室内温水プール、スポーツジムのご利用は、オクシア会員とご宿泊のお客様のみとなります。
                        </p>
                    </div>
                </section>
                <section class="content">
                    <div class="inner_ss">
                        <figure class="itbox_item_img mb40 smb25"><img src="<?php bloginfo('template_directory'); ?>/assets/images/relaxation/oxya/img_oxya.jpg" alt=""></figure>
                        <div class="t_flex_box_container mb80 smb40">
                            <div class="t_flex_l">
                                <div class="t_flex_l_inner">
                                    <h3 class="read_ttl mb15">温泉大浴場　湯の花づくし</h3>
                                    <p>ホテル直下1,050mの源泉を持つ温泉大浴場。旅の疲れを心と体から癒します。</p>
                                </div>
                            </div>
                            <div class="t_flex_r">
                                <div class="t_flex_r_inner mt5">
                                    <dl class="ts_flex_container">
                                        <dt>営業時間</dt>
                                        <dd>
                                            6:30～23:00（最終受付 22:30）<br>
                                            <span class="fs14 sfs13">※11:00～13:00は温泉清掃のためクローズとなります</span>
                                        </dd>
                                    </dl>
                                    <dl class="ts_flex_container">
                                        <dt>泉質</dt>
                                        <dd>塩化物泉</dd>
                                    </dl>
                                    <dl class="ts_flex_container">
                                        <dt>給湯方法</dt>
                                        <dd>循環式</dd>
                                    </dl>
                                    <dl class="ts_flex_container">
                                        <dt>泉温</dt>
                                        <dd>摂氏46.5度</dd>
                                    </dl>
                                    <dl class="ts_flex_container">
                                        <dt>適応症</dt>
                                        <dd>神経痛、筋肉痛、関節痛、慢性消化器病、冷え性など</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="content">
                    <div class="inner_s">
                        <div class="btns pt30 mb40 smb0">
                            <div class="tellbox">
                                <p class="fs13 mt2">お電話でのお問い合わせはこちら</p>
                                <p class="tellno en"><?php if (is_mobile()) : ?><a href="tel:0995-43-7611" onclick="gtag('event', 'tel-tap', {'event_category':'click','event_label': 'oxya'});"><span>TEL</span> 0995-43-7611</a><?php else : ?><span>TEL</span> 0995-43-7611<?php endif; ?></p>
                                <p class="fs13 mt2">受付時間：6:30～23:00</p>
                            </div>
                        </div>
                        <article class="tb_flex_container pt40 spt30 mb70 smb10">
                            <!-- New -->
                            <div class="tb_flex_item">
                                <h3 class="sttl ja-min">全施設のご利用料金　<span class="fs14 sfs13">※価格は全て税込</span></h3>
                                <table>
                                    <tbody>
                                        <tr>
                                            <th></th>
                                            <th>大人</th>
                                            <th>小学生</th>
                                            <th>幼児<br>（4〜6歳）</th>
                                            <th>3歳以下</th>
                                        </tr>
                                        <tr>
                                            <th>オクシア<br class="onlySp">会員</th>
                                            <td>500円</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th>会員の<br class="onlySp">お連れ様</th>
                                            <td>1,200円</td>
                                            <td>600円</td>
                                            <td>500円</td>
                                            <td>無料</td>
                                        </tr>
                                        <tr>
                                            <th>外来の<br class="onlySp">お客様</th>
                                            <td colspan="4">プール、スポーツジムは<br>外来のお客様にはご利用頂けません。</td>
                                        </tr>
                                        <tr>
                                            <th>ご宿泊者</th>
                                            <td>1,000円<br><span class="fs12">付添 500円</span></td>
                                            <td>500円</td>
                                            <td>250円</td>
                                            <td>250円</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tb_flex_item mb0">
                                <h3 class="sttl ja-min">天然温泉のご利用料金　<span class="fs14 sfs13">※価格は全て税込</span></h3>
                                <table>
                                    <tbody>
                                        <tr>
                                            <th></th>
                                            <th>大人</th>
                                            <th>小学生</th>
                                            <th>幼児<br>（4〜6歳）</th>
                                            <th>3歳以下</th>
                                        </tr>
                                        <tr>
                                            <th>オクシア<br class="onlySp">会員</th>
                                            <td>300円</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th>会員の<br class="onlySp">お連れ様</th>
                                            <td>500円</td>
                                            <td>450円</td>
                                            <td>300円</td>
                                            <td>無料</td>
                                        </tr>
                                        <tr>
                                            <th>外来の<br class="onlySp">お客様</th>
                                            <td>1,200円</td>
                                            <td>600円</td>
                                            <td>300円</td>
                                            <td>無料</td>
                                        </tr>
                                        <tr>
                                            <th>ご宿泊者</th>
                                            <td colspan="4">無料</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </article>

                    </div>
                </section>


                <section class="content">
                    <div class="ptb_sps pt65 spt30 pb100 spb20 inner">
                        <h2 class="mttls tac mb70 smb20">
                            <span class="mttls_en en">FACILITIES</span>
                            <span class="mttls_ja">施設のご案内</span>
                        </h2>
                        <article>
                            <div class="imgbox_typeD">
                                <figure class="imgbox_img_b"><img src="<?php bloginfo('template_directory'); ?>/assets/images/relaxation/oxya/img_pool.jpg?20201218" alt=""></figure>
                                <dl class="imgbox_dlset pt10 spt20 pl57 spl20">
                                    <dt>室内温水プール</dt>
                                    <dd class="mb33 smb15">本館地下１階「オクシア」に屋内プールがございます。<br>
                                        ご利用の場合は、直接オクシア受付までお願いいたします。<br>
                                        ご宿泊のお客様・オクシア会員のお客様のみ、ご利用可能となっております。</dd>
                                    <dd class="tb_border">
                                        <div class="ts_flex_container fs14 sfs13">
                                            <p class="ts_flex_ttl tl_s">営業時間</p>
                                            <p class="ts_flex_txt">10:00～21:00（最終受付 20:00）</p>
                                        </div>
                                    </dd>
                                </dl>
                            </div>
                            <div class="imgbox_typeD">
                                <figure class="imgbox_img_b"><img src="<?php bloginfo('template_directory'); ?>/assets/images/relaxation/oxya/img_gym.jpg" alt=""></figure>
                                <dl class="imgbox_dlset pt10 spt20 pl57 spl20">
                                    <dt>スポーツジム</dt>
                                    <dd class="mb33 smb15">
                                        ご利用の場合は、直接オクシア受付までお願いいたします。<br>
                                        ご宿泊のお客様・オクシア会員のお客様のみ、ご利用可能となっております。<br>
                                        ※16歳未満のお客様のスポーツジムご利用はご遠慮下さいませ。</dd>
                                    <dd class="tb_border">
                                        <div class="ts_flex_container fs14 sfs13">
                                            <p class="ts_flex_ttl tl_s">営業時間</p>
                                            <p class="ts_flex_txt">06:30～21:00（最終受付 20:00）</p>
                                        </div>
                                        <div class="ts_flex_container fs14 sfs13">
                                            <p class="ts_flex_ttl tl_s">TEL</p>
                                            <p class="ts_flex_txt"><?php if (is_mobile()) : ?><a href="tel:0995-43-7611" onclick="gtag('event', 'tel-tap', {'event_category':'click','event_label': 'oxya'});">0995-43-7611（直通）</a><?php else : ?>0995-43-7611（直通）<?php endif; ?></p>
                                        </div>
                                    </dd>
                                </dl>
                            </div>
                            <div class="imgbox_typeD">
                                <figure class="imgbox_img_b"><img src="<?php bloginfo('template_directory'); ?>/assets/images/relaxation/oxya/img_capsule.jpg" alt=""></figure>
                                <dl class="imgbox_dlset pt10 spt20 pl57 spl20">
                                    <dt>酸素カプセル</dt>
                                    <dd class="mb33 smb15">なんとなく不調、不具合を感じる方におすすめ。ぐっすりおやすみいただきながら、こころとからだをリフレッシュさせることができます。酸素カプセルをご利用の際は、ぜひご予約してお越しください。<br>
                                        ※この機械は薬事法で規定された医療機器ではありません。</dd>
                                    <dd class="tb_border">
                                        <div class="ts_flex_container fs14 sfs13">
                                            <p class="ts_flex_ttl tl_s">場所</p>
                                            <p class="ts_flex_txt">スポーツ&リラクゼーションクラブ　オクシア（本館B1F）</p>
                                        </div>
                                        <div class="ts_flex_container fs14 sfs13">
                                            <p class="ts_flex_ttl tl_s">営業時間</p>
                                            <p class="ts_flex_txt">10:00~23:00</p>
                                        </div>
                                        <div class="ts_flex_container fs14 sfs13">
                                            <p class="ts_flex_ttl tl_s">TEL</p>
                                            <p class="ts_flex_txt"><?php if (is_mobile()) : ?><a href="tel:0995-43-7611" onclick="gtag('event', 'tel-tap', {'event_category':'click','event_label': 'oxya'});">0995-43-7611</a><?php else : ?>0995-43-7611<?php endif; ?></p>
                                        </div>
                                        <div class="ts_flex_container fs14 sfs13">
                                            <p class="ts_flex_ttl tl_s">料金</p>
                                            <p class="ts_flex_txt">40分2,000円（税込） / 60分3,000円（税込）</p>
                                        </div>
                                    </dd>
                                </dl>
                            </div>
                        </article>
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