<?php
/*
Template Name: 繁體中文 - 客房介紹
*/
?>
<?php get_header(); ?>
<div id="wrapper"><!-- #wrapper -->

    <?php include(TEMPLATEPATH . '/inc/header_tc.php'); ?>

    <main id="maincontainer" class="container"><!-- #maincontainer -->
        
        <div class="main_bloc">

            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/stay/lkv_img_stay@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">客房介紹</span>
                </h1>
            </section><!-- /#kv -->

            <div id="mainsections" class="main_inner">

                <article id="breadcrumb" class="ja-serif"><!-- #breadcrumb -->
                  <div id="breadcrumb_inner" class="inner_m">
                    <p>
                        <a href="<?php bloginfo('url'); ?>/en/">Home</a>
                        <span class="bcsps">&nbsp;&gt;&nbsp;</span>
                        <span>客房介紹</span>
                    </p>
                  </div>
                </article><!-- /#breadcrumb -->

                <section class="content">
                    <div class="inner_m bd_btm">
                        <div class="ptb_sps pt0 pb80 spb40 inner_sb sp_inner_b">
                            <div class="imgslidesA mb38 smb25">								
								<figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/executive-double/img_executive-double1.jpg" alt=""/></figure>
								<figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/executive-comfort-twin/img_executive-comfort-twin1.jpg" alt=""/></figure>
								<figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/executive-twin-dx/img_executive-twin-dx1.jpg" alt=""/></figure>
								<figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/japanese-western-dx/img_japanese-western-dx1.jpg" alt=""/></figure>
								<figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/crown-suite/img_crown-suite1.jpg"alt=""/></figure>
							</div>
                            <p class="tac sp_tal">
								從客房可俯瞰廣大的鹿兒島如畫般的自然美景；飯店共有客房328間，多樣的房型可滿足各式旅客之需求。<br>
								提供所有旅客最舒適、最便利的住宿空間與設備。全館設計風格以象牙白的歐風鋪陳，寬敞的大廳搭配優雅的裝飾，期待每位前來的旅客都能有賓至如歸的感覺，享受貴族般的服務與渡假般的悠閒。
                            </p>
                        </div>
                    </div>

                    <section id="sc_room_points" class="content">
                        <figure id="img_room_sp" class="onlySp"><img src="<?php bloginfo('template_directory'); ?>/assets/images/img_b_accommodations.jpg" alt=""></figure>
                        <div class="room_points_container">
                            <article id="room_points_item01" class="room_points_item">
                                <div class="room_points_item_inner">
                                    <h4 class="room_points_ttl en">328間</h4>
                                    <p>245間無煙客房</p>
                                </div>
                            </article>
                            <article id="room_points_item02" class="room_points_item">
                                <div class="room_points_item_inner">
                                    <h4 class="room_points_ttl en">上網服務</h4>
                                    <p>客房wifi環境、LAN網路線、VOD隨選視訊系統</p>
                                </div>
                            </article>
                            <article id="room_points_item03" class="room_points_item">
                                <div class="room_points_item_inner">
                                    <h4 class="room_points_ttl en">Air purifier</h4>
                                    <p>All rooms are equipped with an air-purification system with added humidifier so you can relax in a comfortable indoor environment.</p>
                                </div>
                            </article>
                        </div>
                    </section>

                    <div class="inner_m sp_inner_b">
                        <div class="ptb_sps pt40 pb70 spb30 inner_sb sp_inner_b">
                            <h2 class="mttls tac mb33 smb20">
                                <span class="mttls_en_b en">Rooms and Suites</span>
                            </h2>
                            <article>
                                <div class="imgbox_typeD">
                                    <figure class="imgbox_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/single/img_single1.jpg" alt=""/></figure>
                                    <dl class="imgbox_dlset">
                                        <dt>SINGLE</dt>
                                        <dd>簡約時尚的空間設計，配置精簡雙人床和事務桌，營造出舒適又釋壓的環境，為您的商務業績助上一臂之力。</dd>
                                    </dl>
                                </div>
                                <div class="imgbox_typeD">
                                    <figure class="imgbox_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/twin/img_twin1.jpg" alt=""/></figure>
                                    <dl class="imgbox_dlset">
                                        <dt>TWIN & TRIPLE</dt>
                                        <dd>寬敞的空間，洋溢著開放感，無論是休閒觀光或商務旅行，都竭盡滿足客人的期望，讓您度過一個稱心如意的霧島假期。<br>
											※寬廣的雙人房型，可提供三人住宿。</dd>
                                    </dl>
                                </div>
                                <div class="imgbox_typeD">
                                    <figure class="imgbox_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/crown-suite/img_crown-suite1.jpg" alt=""/></figure>
                                    <dl class="imgbox_dlset">
                                        <dt>SUITE</dt>
                                        <dd>鹿兒島的象徵--櫻島為主的自然美景盡收眼底，極上的時尚空間，讓您度過奢華極致的時刻。豪華套房內的設備有：客房、臥室、淋浴間、簡易廚房。<br>
											※豪華套房內的設備有：客房、臥室、淋浴間、簡易廚房。＊(皇家豪華套房提供按摩浴缸)。</dd>
                                    </dl>
                                </div>
                            </article>
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