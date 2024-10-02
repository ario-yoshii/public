<?php
/*
Template Name: ショップ
*/
?>
<?php get_header(); ?>
<div id="wrapper"><!-- #wrapper -->

    <?php include(TEMPLATEPATH . '/inc/header.php'); ?>

    <main id="maincontainer" class="container"><!-- #maincontainer -->

        <div class="main_bloc">

            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/shop/lkv_img_shop@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">SHOP</span>
                    <span class="mttls_ja">ショップ</span>
                </h1>
            </section><!-- /#kv -->

            <div id="mainsections" class="main_inner">

                <article id="breadcrumb" class="ja-serif"><!-- #breadcrumb -->
                    <div id="breadcrumb_inner" class="inner_m">
                        <p>
                            <a href="<?php bloginfo('url'); ?>/">ホーム</a>
                            <span class="bcsps">&nbsp;&gt;&nbsp;</span>
                            <span>ショップ</span>
                        </p>
                    </div>
                </article><!-- /#breadcrumb -->

                <section class="content">
                    <div class="ptb_sps pt0 pb35 spb30 inner_sl sp_inner_b">
                        <h2 class="mttls tac mb43 smb30">
                            <span class="mttls_en en">HOTEL SHOP</span>
                            <span class="mttls_ja">ショップのご案内</span>
                        </h2>
                        <p class="read_ttl ja-min tac">
                            旅行の必需品や滞在に便利な日用品からお土産まで、幅広く取り扱っています<br>
                            鹿児島の想い出にいかがでしょうか
                        </p>
                    </div>
                </section>
                <section class="content inner_m">
                    <div class="ptb_sps pt0 pb80 spb40 inner_ss sp_inner_b">
                        <div class="itbox_item_img imgslidesC mb40 smb25">
                            <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/shop/img_slide_shop01.jpg"></figure>
                            <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/shop/img_slide_shop02.jpg"></figure>
                            <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/shop/img_slide_shop03.jpg"></figure>
                            <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/shop/img_slide_shop04.jpg"></figure>
                            <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/shop/img_slide_shop05.jpg"></figure>
                            <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/shop/img_slide_shop06.jpg"></figure>
                            <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/shop/img_slide_shop07.jpg"></figure>
                        </div>

                    </div>
                </section>

                <section class="content bg_gray">
                    <div class="ptb_sps pt45 pb45 spb30 bd_btm inner_m sp_inner_b">
                        <h2 class="mttls tac mb18 smb12">
                            <span class="mttls_en en">INFORMATION</span>
                            <span class="mttls_ja">インフォメーション</span>
                        </h2>
                        <article class="info_container mb30" data-maxview=6>
                            <?php
                            $arg = array(
                                'posts_per_page' => 6, // 表示する件数
                                'orderby' => 'date', // 日付でソート
                                'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
                                'category_name' => 'shop_info' // 表示したいカテゴリーのスラッグを指定
                            );
                            $posts = get_posts($arg);
                            if ($posts) : ?>
                                <?php foreach ($posts as $post) : setup_postdata($post); ?>
                                    <?php $cats = get_the_category(); ?>
                                    <div class="info_item cat_new  cat_<?php foreach ($cats as $cat) :  if ($cat->parent) echo $cat->category_nicename;
                                                                        endforeach; ?>">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php $thumbnail_id = get_post_thumbnail_id();
                                            $eye_img = wp_get_attachment_image_src($thumbnail_id, 'large'); ?>
                                            <figure class="info_item_img"><span data-image="<?php echo $eye_img[0]; ?>"></span></figure>
                                        <?php endif; ?>
                                        <div class="info_tbox">
                                            <div class="postbox">
                                                <p class="post_date en"><?php the_time('Y/m/d'); ?></p>
                                                <!-- <span class="post_line">|</span>
                                                <p class="post_tags"><span><?php the_category(', '); ?></span></p> -->
                                            </div>
                                            <h3 class="info_ttl"><?php the_title(); ?></h3>
                                        </div>
                                        <?php if (get_field('pdf')) : ?><a href="<?php the_field('pdf'); ?>" class="hitarea" target="_blank"><?php elseif (get_field('URL')) : ?><a href="<?php the_field('URL'); ?>" class="hitarea"><?php else : ?><a href="<?php the_permalink(); ?>" class="hitarea"><?php endif; ?></a>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif;
                            wp_reset_postdata(); ?>

                        </article>
                        <a href="<?php bloginfo('url'); ?>/shop_info/" class="txtbtn mauto smt15"><span>ショップ情報一覧</span></a>
                    </div>
                </section>

                <section class="content bg_gray">
                    <div class="ptb_sps inner">
                        <h2 class="mttls tac mb58 smb30">
                            <span class="mttls_en en">INFORMATION</span>
                            <span class="mttls_ja">売店「もっくる」のご案内</span>
                        </h2>
                        <article class="id_container_s mb80 smb10">
                            <figure class="id_img onlySp" data-image="<?php bloginfo('template_directory'); ?>/assets/images/shop/img_info_shop.jpg"></figure>
                            <figure class="id_img onlyPc"><img src="<?php bloginfo('template_directory'); ?>/assets/images/shop/img_info_shop.jpg" alt=""></figure>
                            <div class="id_tbox">
                                <div class="id_tbox_inner">
                                    <article class="mb10">
                                        <dl class="dl_tnses_m">
                                            <dt class="pt15">場所</dt>
                                            <dd class="pt15">
                                                本館 1階
                                            </dd>
                                        </dl>
                                        <dl class="dl_tnses_m">
                                            <dt class="pt15">営業時間</dt>
                                            <dd class="pt15">
                                                9:00～21:00
                                            </dd>
                                        </dl>
                                        <dl class="dl_tnses_m">
                                            <dt>TEL</dt>
                                            <dd><?php if (is_mobile()) : ?><a href="tel:0995-43-7630" onclick="gtag('event', 'tel-tap', {'event_category':'click','event_label': 'shop'});">0995-43-7630</a><?php else : ?>0995-43-7630<?php endif; ?></dd>
                                        </dl>
                                    </article>

                                </div>
                            </div>
                        </article>
                    </div>
                </section>


                <section class="content">
                    <article class="imgboxes pt60 pb70 spb50">
                        <h2 class="mttls tac mb60 smb30">
                            <span class="mttls_en en">ORIGINAL</span>
                            <span class="mttls_ja">オリジナル商品</span>
                        </h2>
                        <div class="imgbox_typeC">
                            <div class="itd_item">
                                <div class="itd_item_inner">
                                    <figure class="mb15"><img src="<?php bloginfo('template_directory'); ?>/assets/images/shop/img_curry.jpg" alt="" /></figure>
                                    <div class="itd_item_tbox">
                                        <h2 class="read_ttl">黒毛和牛黒カレー</h2>
                                        <p class="read_txt mb30">
                                            大自然の中で育てられた黒毛和牛を使用し、シェフが選び抜いたスパイスを贅沢に使ったこだわりの特選カレーです。<br>
                                            肉の旨味がギュッと詰まった高級感のあるカレーが食欲をそそります。ぜひ、素材のもつ美味しさをご堪能下さい。
                                        </p>
                                        <div class="tb_border">
                                            <div class="ts_flex_container fs14 sfs13">
                                                <p class="ts_flex_ttl">1人前（184g）</p>
                                                <p class="ts_flex_txt">750円（税込）</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="itd_item">
                                <div class="itd_item_inner">
                                    <figure class="mb15"><img src="<?php bloginfo('template_directory'); ?>/assets/images/shop/img_goods02.jpg" alt="" /></figure>
                                    <div class="itd_item_tbox">
                                        <h2 class="read_ttl">ホテルオリジナル芋焼酎　縄文のいぶき</h2>
                                        <p class="read_txt mb30">
                                            本格芋焼酎「縄文のいぶき」は、霧島の清冽な湧水と厳選された素材から生まれたスッキリとした味わいの焼酎です。<br>
                                            ホテル内にある「縄文遺跡ミュージアム」の誕生を記念して造られたオリジナル焼酎でまさに「縄文の息吹」に触れるような豊かな味わいで悠久の時をお楽しみ下さい。
                                        </p>
                                        <div class="tb_border">
                                            <div class="ts_flex_container fs14 sfs13">
                                                <p class="ts_flex_ttl fw_auto pr0">720ml瓶&nbsp;&nbsp;<br class="onlySp">1,700円（税込）&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="sp_hide">/</span></dt>
                                                <p class="ts_flex_txt pl0">300ml瓶&nbsp;&nbsp;<br class="onlySp">650円（税込）</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="itd_item">
                                <div class="itd_item_inner">
                                    <figure class="mb15"><img src="<?php bloginfo('template_directory'); ?>/assets/images/shop/img_goods03.jpg" alt="" /></figure>
                                    <div class="itd_item_tbox">
                                        <h2 class="read_ttl">プリンセスドレッシング</h2>
                                        <p class="read_txt mb30">
                                            野菜そのものの風味を引き立てる、さっぱりとした味わいのドレッシングです。<br>
                                            酸味を抑えたマイルドなドレッシングで、目を見張るようなピンク色は、赤ワインと紫芋によるもので添加物ではありません。
                                        </p>
                                        <div class="tb_border">
                                            <div class="ts_flex_container fs14 sfs13">
                                                <p class="ts_flex_ttl">1本（200ml）</p>
                                                <p class="ts_flex_txt">648円（税込）</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </article>
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