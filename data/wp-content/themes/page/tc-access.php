<?php
/*
Template Name: 繁體中文 - 訪問
*/
?>
<?php get_header(); ?>
<div id="wrapper"><!-- #wrapper -->

    <?php include(TEMPLATEPATH . '/inc/header_tc.php'); ?>

    <main id="maincontainer" class="container"><!-- #maincontainer -->
        
        <div class="main_bloc">

            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/access/lkv_img_access@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">訪問</span>
                </h1>
            </section><!-- /#kv -->

            <div id="mainsections" class="main_inner">

                <article id="breadcrumb" class="ja-serif"><!-- #breadcrumb -->
                  <div id="breadcrumb_inner" class="inner_m">
                    <p>
                        <a href="<?php bloginfo('url'); ?>/en/">Home</a>
                        <span class="bcsps">&nbsp;&gt;&nbsp;</span>
                        <span>訪問</span>
                    </p>
                  </div>
                </article><!-- /#breadcrumb -->

                <section class="content">
                    <div class="gmap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3392.9636890480624!2d130.74484541517475!3d31.74419208129617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x353efb87c2cb55d3%3A0x15194bc982f59d2e!2z44Ob44OG44Or5Lqs44K744Op!5e0!3m2!1sja!2sjp!4v1605965920048!5m2!1sja!2sjp" width="1280" height="440" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="inner_m">
                        <div class="ptb_sps pt0 pb0 inner_sb sp_inner_b">
                            <div class="en_bttls pt35">
                                <h2 class="en_bttls_ttl en mb43 smb25">
Hotel Kyocera is located in a convenient place in Kagoshima.<br>
You can enjoy various sightseeing spots.
                                </h2>
                                <div class="bd_listbox">
                                    <ul class="sp_tac">
                                        <li>・18 minutes by bus from Kagoshima Airport</li>
                                        <li>・15 minutes by car from Kyushu Expressway Mizobe Kagoshima Airport IC</li>
                                        <li>・5 minutes by taxi from JR Hayato Station</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="sc_gray_points" class="content">
                    <div class="gray_points_container">
                        <article id="gray_points_item01" class="gray_points_item">
                            <div class="gray_points_item_inner">
                                <h4 class="gray_points_ttl en">From Kagoshima Airport to<br>Hotel Kyocera</h4>
                                <p class="mb10">From the Kagoshima Airport bus terminal No.10, take a bus to the hotel (410yen for adults).</p>
                                <p>*For more information about bus operations, please contact<br>Kagoshima Kotsu. (Tel: 81-994-65-2258)</p>
                            </div>
                        </article>
                        <article id="gray_points_item02" class="gray_points_item">
                            <div class="gray_points_item_inner">
                                <h4 class="gray_points_ttl en">From Kagoshima central train station to<br>Hotel Kyocera</h4>
                                <p>It takes roughly 35 minutes from Kagoshima central train station to Hayato Station by express train.<br>From the Nippo Line Hayato Station, it takes roughly 5 minutes by taxi.</p>
                            </div>
                        </article>
                    </div>
                </section>

                <section class="content">
                    <div class="inner_m sp_inner_b">
                        <div class="ptb_sps pt70 spt30 pb80 spb50 inner_sb">
                            <h2 class="mttls tac mb33 smb20">
                                <span class="mttls_en_b en">LOCATION MAP</span>
                            </h2>
                            <figure class="bd"><img src="<?php bloginfo('template_directory'); ?>/assets/images/img_locationmap.jpg" alt=""></figure>
                        </div>
                    </div>
                </section>

                <?php include(TEMPLATEPATH . '/inc/footer_tc.php'); ?>

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