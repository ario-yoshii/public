<?php
/*
Template Name: 韓国語 - ACCESS
*/
?>
<?php get_header(); ?>
<div id="wrapper"><!-- #wrapper -->

    <?php include(TEMPLATEPATH . '/inc/header_kr.php'); ?>

    <main id="maincontainer" class="container"><!-- #maincontainer -->
        
        <div class="main_bloc">

            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/access/lkv_img_access@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">오시는 길</span>
                </h1>
            </section><!-- /#kv -->

            <div id="mainsections" class="main_inner">

                <article id="breadcrumb" class="ja-serif"><!-- #breadcrumb -->
                  <div id="breadcrumb_inner" class="inner_m">
                    <p>
                        <a href="<?php bloginfo('url'); ?>/en/">Home</a>
                        <span class="bcsps">&nbsp;&gt;&nbsp;</span>
                        <span>오시는 길</span>
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
									호텔 쿄세라는 키리시마, 사쿠라지마, 이부스키의 중심지에 위치해 있어 다양한 관광지를 편리하게 이용하실 수 있습니다.s.
                                </h2>
                                <div class="bd_listbox">
                                    <ul class="sp_tac">
                                        <li>・가고시마 공항에서 리무진 버스로 약 18분</li>
                                        <li>・미조베 가고시마 공항IC에서 차로 약 15분</li>
                                        <li>・JR하야토역(隼人駅) 택시로 약 5분</li>
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
                                <h4 class="gray_points_ttl en">가고시마 공항에서 호텔 쿄세라까지</h4>
                                <p class="mb10">가고시마공항 버스터미널 10번 승차장에서 가노야(鹿屋)행 리무진 버스에 승차 후<br>
									호텔 쿄세라 앞 하차<br>
									・소요시간: 약 18분<br>
									・요금: 어른 410엔</p>
                                <p>*기타 문의사항은 Kagoshima Kotsu(鹿児島交通)로 연락주시기 바랍니다<br>(Tel: 81-994-65-2258)</p>
                            </div>
                        </article>
                        <article id="gray_points_item02" class="gray_points_item">
                            <div class="gray_points_item_inner">
                                <h4 class="gray_points_ttl en">JR가고시마 중앙역에서 호텔 쿄세라까지</h4>
                                <p>JR닛포혼센(日豊本線)행 급행전철을 타고 JR하야토역에서 하차 후 약 5분간 택시로 이동.<br>
									※총 소요시간: 약 40분 (단, 일반전철 이용시 약 1시간 소요)</p>
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

                <?php include(TEMPLATEPATH . '/inc/footer_kr.php'); ?>

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