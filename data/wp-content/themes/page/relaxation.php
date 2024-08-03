<?php
/*
Template Name: 温泉・スパ・プール・ジム
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
                            <span>温泉・スパ・プール・ジム</span>
                        </p>
                    </div>
                </article><!-- /#breadcrumb -->

                <section class="content inner_m">
                    <div class="ptb_sps pt30 pb90 spb40 inner_sl sp_inner_b">
                        <h2 class="read_ttl ja-min tac mb10 smb20">
                            ホテル直下1,050mの源泉を持つ温泉大浴場と、<br>
                            身も心もほぐす極上のリラクゼーションで癒やされる。
                        </h2>
                        <p class="tac sp_tal">
                            ホテル直下1,050mの源泉を持つ温泉大浴場と室内温水プールにスポーツジムまで完備したリラクゼーション空間と、<br class="onlyPc">
                            身も心もほぐす極上の癒やしを提供するリラクゼーションサロンを完備。<br>
                            日々の疲れを優しくほぐし、心地よい安らぎと癒やしで包みます。
                        </p>
                    </div>
                </section>
                <section class="content bg_gray">
                    <div class="inner_m">
                        <h2 class="mttls tac ptb_sps pt65 spt45 pb52 spb32">
                            <span class="mttls_en en">HOT SPRING & SALON</span>
                            <span class="mttls_ja">施設のご案内</span>
                        </h2>
                    </div>
                    <article class="imgboxes pb70 spb50">
                        <div class="imgbox_typeC sp_sps">
                            <div class="itd_item ov_op">
                                <div class="itd_item_inner mb20">
                                    <figure class="mb15"><img src="<?php bloginfo('template_directory'); ?>/assets/images/relaxation/img_oxya.jpg" alt=""></figure>
                                    <div class="itd_item_tbox">
                                        <h2 class="mttls tac mb20">
                                            <span class="mttls_en en">SPORT & RELAXATION</span>
                                            <span class="mttls_ja">スポーツ＆リラクゼーション空間 オクシア</span>
                                        </h2>
                                        <p class="read_txt">
                                            ホテル直下1,050mの源泉を持つ温泉大浴場と室内温水プールにスポーツジムまで完備したリラクゼーション空間。<br>
                                            陽光が差し込む明るい雰囲気とホテルならではのゆったりとした贅沢な時間で心も身体もリフレッシュ！
                                        </p>
                                    </div>
                                </div>
                                <a href="<?php bloginfo('url'); ?>/relaxation/oxya/" class="hitarea"></a>
                            </div>
                            <div class="itd_item ov_op">
                                <div class="itd_item_inner mb20">
                                    <figure class="mb15"><img src="<?php bloginfo('template_directory'); ?>/assets/images/relaxation/img_salon.jpg" alt=""></figure>
                                    <div class="itd_item_tbox">
                                        <h2 class="mttls tac mb20">
                                            <span class="mttls_en en">RELAXATION SALON</span>
                                            <span class="mttls_ja">リラクゼーションサロン オクシア</span>
                                        </h2>
                                        <p class="read_txt">
                                            身も心もほぐす極上の癒やしを提供いたします。エステティックメニューからリラクゼーションメニューまで、女性のお客様はもちろん、男性のお客様も全てのメニューをご利用いただけます。
                                        </p>
                                    </div>
                                </div>
                                <a href="<?php bloginfo('url'); ?>/relaxation/salon/" class="hitarea"></a>
                            </div>
                        </div>
                    </article>
                </section>
                <section class="content">
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
                                'category_name' => 'relaxation_info' // 表示したいカテゴリーのスラッグを指定
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
                        <a href="<?php bloginfo('url'); ?>/relaxation_info/" class="txtbtn mauto smt15"><span>リラクゼーション情報一覧</span></a>
                    </div>
                </section>

                <!--<section class="content">
                    <div class="ptb_sps pt40 pb40 spb20 inner">
                        <h3 class="read_ttl ja-min tac fw_bold">サービス一覧</h3>
                    </div>
                    <article class="itbox_c_m5 pb75 spb40 sp_sps">
                        <a href="<?php bloginfo('url'); ?>/relaxation/oxya/" class="itbox_item">
                            <figure class="itbox_item_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/relaxation/img_menu_oxya.jpg" alt=""></figure>
                            <p class="itbox_item_txt">スポーツ＆リラクゼーション空間　オクシア</p>
                        </a>
                        <a href="<?php bloginfo('url'); ?>/relaxation/salon/" class="itbox_item">
                            <figure class="itbox_item_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/relaxation/img_menu_salon.jpg" alt=""></figure>
                            <p class="itbox_item_txt">リラクゼーションサロン　オクシア</p>
                        </a>
                        <a href="#" class="itbox_item">
                            <figure class="itbox_item_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/relaxation/img_menu_gym.jpg" alt=""></figure>
                            <p class="itbox_item_txt">オクシア会員入会特別キャンペーン</p>
                        </a>
                        <a href="#" class="itbox_item">
                            <figure class="itbox_item_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/relaxation/img_menu_onsen.jpg" alt=""></figure>
                            <p class="itbox_item_txt">温泉プラン</p>
                        </a>
                        <a href="#" class="itbox_item">
                            <figure class="itbox_item_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/relaxation/img_menu_capsule.jpg" alt=""></figure>
                            <p class="itbox_item_txt">酸素カプセル</p>
                        </a>
                    </article>
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