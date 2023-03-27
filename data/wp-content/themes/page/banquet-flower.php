<?php
/*
Template Name: 宴会場 - フラワー
*/
?>
<?php get_header(); ?>
<div id="wrapper"><!-- #wrapper -->

    <?php include(TEMPLATEPATH . '/inc/header.php'); ?>

    <main id="maincontainer" class="container"><!-- #maincontainer -->
        
        <div class="main_bloc">

            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/banquet/flower/lkv_img_flower.jpg"><!-- #kv -->
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
                        <a href="<?php bloginfo('url'); ?>/banquet/">宴会場</a>
                        <span class="bcsps">&nbsp;&gt;&nbsp;</span>
                        <span>フラワー</span>
                    </p>
                </div>
                </article><!-- /#breadcrumb -->

                <section class="content">
                    <div class="ptb_sps pt0 pb0 inner_m sp_inner_b">
                        <h2 class="mttls tac mb18 smb12">
                            <span class="mttls_en en">BANQUET</span>
                            <span class="mttls_ja">フラワー</span>
                        </h2>
                        <article class="tslide_container">
                            <div class="tslide_ibox imgslidesB">
                                <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/banquet/flower/img_flower01.jpg"></figure>
                            </div>
                            <div class="tslide_tbox">
                                <div class="tslide_tbox_inner">
                                    <h2 class="tslide_tbox_ttl ja-min">
										南・東の2方向の窓から陽光を取り入れた明るく開放的なつくり
                                    </h2>
                                    <p class="tslide_tbox_txt">
										音響・照明などの最新鋭の設備・機器を備えた多目的ホールですので、ご披露宴はもとより、各種パーティ、展示会、研修会など様々な目的・用途のお集まりに対応いたします。
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="ptb_sps pt10 pb70 spb30 inner_sb">
                        <h3 class="ja-min sttl">宴会場の様子</h3>
                        <article class="mdbtnset">
                            <a href="<?php bloginfo('template_directory'); ?>/assets/images/banquet/flower/img_list_flower01.jpg" class="a_md"><span><img src="<?php bloginfo('template_directory'); ?>/assets/images/banquet/flower/img_list_flower01_thumb.jpg" alt=""></span></a>
                            <a href="<?php bloginfo('template_directory'); ?>/assets/images/banquet/flower/img_list_flower02.jpg" class="a_md"><span><img src="<?php bloginfo('template_directory'); ?>/assets/images/banquet/flower/img_list_flower02_thumb.jpg" alt=""></span></a>
                        </article>
                    </div>
                </section>
					<?php include( TEMPLATEPATH . '/inc/banner1.php' ); ?>

                <?php include( TEMPLATEPATH . '/inc/banquet_list.php' ); ?>

                <section class="content">
                    <div class="ptb_sps pt40 pb40 spb30 inner">
                        <h2 class="mttls tac mb18 smb12">
                            <span class="mttls_en en">FACILITIES & CAPACITY</span>
                            <span class="mttls_ja">設備・収容人数一覧</span>
                        </h2>
                    </div>
                    <article class="inner_sb pb80 spb60 sp_inner_b">
                        <table class="sp_ofx mb10">
                            <tbody>
                                <tr>
                                    <th colspan="4" rowspan="2" style="width: 27%;">会場</th>
                                    <th colspan="2">面積</th>
                                    <th colspan="1">高さ</th>
                                    <th colspan="4">最大収容人数</th>
                                </tr>
                                <tr>
                                    <th class="sub" width="9">m<sup>2</sup></th>
                                    <th class="sub" width="9">坪</th>
                                    <th class="sub" width="9">m</th>
                                    <th class="sub" width="9">立食</th>
                                    <th class="sub" width="9">正餐</th>
                                    <th class="sub" width="9">会議</th>
                                    <th class="sub" width="9">講演</th>
                                </tr>
                                <tr>
                                    <th rowspan="2" colspan="1" width="33">別<br>館</th>
                                    <td rowspan="2">宴会場<br>2F</td>
                                    <td colspan="2">フラワー</td>
                                    <td>291</td>
                                    <td>88</td>
                                    <td>4.3</td>
                                    <td>180</td>
                                    <td>120</td>
                                    <td>120</td>
                                    <td>240</td>
                                </tr>
                                <tr>
                                    <td colspan="2">桜</td>
                                    <td>79</td>
                                    <td>24</td>
                                    <td>3.4</td>
                                    <td>50</td>
                                    <td>40</td>
                                    <td>30</td>
                                    <td>60</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="fs14 sp_sps">※ご利用人数に応じて会場を仕切ることができます。</p>
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
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/modaal.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/flick.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/share.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/low.js"></script>
<script>
    $(".a_md").modaal({
        type:'image',
        width:"50%",
        height:"50%"
    });
</script>
<?php get_footer(); ?>