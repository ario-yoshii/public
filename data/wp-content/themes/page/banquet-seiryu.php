<?php
/*
Template Name: 宴会場 - 清流・浮雲・陽光
*/
?>
<?php get_header(); ?>
<div id="wrapper"><!-- #wrapper -->

    <?php include(TEMPLATEPATH . '/inc/header.php'); ?>

    <main id="maincontainer" class="container"><!-- #maincontainer -->
        
        <div class="main_bloc">

            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/banquet/seiryu/lkv_img_seiryu@2x.jpg"><!-- #kv -->
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
                        <span>清流・浮雲・陽光</span>
                    </p>
                </div>
                </article><!-- /#breadcrumb -->

                <section class="content">
                    <div class="ptb_sps pt0 pb0 inner_m sp_inner_b">
                        <h2 class="mttls tac mb18 smb12">
                            <span class="mttls_en en">BANQUET</span>
                            <span class="mttls_ja">清流・浮雲・陽光</span>
                        </h2>
                        <article class="tslide_container">
                            <div class="tslide_ibox imgslidesB">
                                <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/banquet/seiryu/img_seiryu01.jpg"></figure>
                                <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/banquet/seiryu/img_seiryu02.jpg"></figure>
                            </div>
                            <div class="tslide_tbox">
                                <div class="tslide_tbox_inner">
                                    <h2 class="tslide_tbox_ttl ja-min">
										南東側に並ぶくつろぎの快適空間
                                    </h2>
                                    <p class="tslide_tbox_txt">
										フロントロビーからエスカレーターをご利用いただける、気軽で使い勝手の良いバンケットルームです。<br>
										ミーティングやプライベートパーティ、昼食会など、さまざまな集いのシーンを演出いたします。
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="ptb_sps pt10 pb70 spb30 inner_sb">
                        <h3 class="ja-min sttl">宴会場の様子</h3>
                        <article class="mdbtnset">
                            <a href="<?php bloginfo('template_directory'); ?>/assets/images/banquet/seiryu/img_list_seiryu01.jpg" class="a_md"><span><img src="<?php bloginfo('template_directory'); ?>/assets/images/banquet/seiryu/img_list_seiryu01_thumb.jpg" alt=""></span></a>
                            <a href="<?php bloginfo('template_directory'); ?>/assets/images/banquet/seiryu/img_list_seiryu02.jpg" class="a_md"><span><img src="<?php bloginfo('template_directory'); ?>/assets/images/banquet/seiryu/img_list_seiryu02_thumb.jpg" alt=""></span></a>
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
                                    <th width="33" colspan="1" rowspan="3">本<br>
                                    館</th>
                                    <td rowspan="3" width="9">宴会場<br>2F</td>
                                    <td colspan="2">清　流</td>
                                    <td>55</td>
                                    <td>17</td>
                                    <td>3.0</td>
                                    <td>30</td>
                                    <td>30</td>
                                    <td>30</td>
                                    <td>60</td>
                                </tr>
                                <tr>
                                    <td colspan="2">浮　雲</td>
                                    <td>51</td>
                                    <td>16</td>
                                    <td>3.0</td>
                                    <td>30</td>
                                    <td>30</td>
                                    <td>30</td>
                                    <td>60</td>
                                </tr>
                                <tr>
                                    <td colspan="2">陽　光</td>
                                    <td>49</td>
                                    <td>15</td>
                                    <td>3.0</td>
                                    <td>30</td>
                                    <td>30</td>
                                    <td>30</td>
                                    <td>60</td>
                                </tr>
                            </tbody>
                        </table>
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