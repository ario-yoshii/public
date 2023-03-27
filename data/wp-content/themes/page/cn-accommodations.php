<?php
/*
Template Name: 簡体中文 - 住宿
*/
?>
<?php get_header(); ?>
<div id="wrapper"><!-- #wrapper -->

    <?php include(TEMPLATEPATH . '/inc/header_cn.php'); ?>

    <main id="maincontainer" class="container"><!-- #maincontainer -->
        
        <div class="main_bloc">

            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/stay/lkv_img_stay@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">住宿</span>
                </h1>
            </section><!-- /#kv -->

            <div id="mainsections" class="main_inner">

                <article id="breadcrumb" class="ja-serif"><!-- #breadcrumb -->
                  <div id="breadcrumb_inner" class="inner_m">
                    <p>
                        <a href="<?php bloginfo('url'); ?>/en/">Home</a>
                        <span class="bcsps">&nbsp;&gt;&nbsp;</span>
                        <span>住宿</span>
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
								放眼望去，鹿儿岛广阔的自然景色尽收眼底，328间设计多样的客房，宛如一幅幅美丽的风景画。以白色和象牙色为基调的客房设计，高雅而温馨，令您感覚宾至如归，为您提供堪比度假山庄的极致享受。
                            </p>
                        </div>
                    </div>

                    <section id="sc_room_points" class="content">
                        <figure id="img_room_sp" class="onlySp"><img src="<?php bloginfo('template_directory'); ?>/assets/images/img_b_accommodations.jpg" alt=""></figure>
                        <div class="room_points_container">
                            <article id="room_points_item01" class="room_points_item">
                                <div class="room_points_item_inner">
                                    <h4 class="room_points_ttl en">328间客房</h4>
                                    <p>245非吸烟房</p>
                                </div>
                            </article>
                            <article id="room_points_item02" class="room_points_item">
                                <div class="room_points_item_inner">
                                    <h4 class="room_points_ttl en">互联网</h4>
                                    <p>所有客房均配备了有线网络和无线局域网所有客房都配备了视频点播系统</p>
                                </div>
                            </article>
                            <article id="room_points_item03" class="room_points_item">
                                <div class="room_points_item_inner">
                                    <h4 class="room_points_ttl en">配备了空气净化器配有加湿功能的所有房间。</h4>
                                    <p>您可以在舒适的室内环境中放松身心。</p>
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
                                        <dd>简洁时尚的单人间，配备半大双人床及多功能桌台，让您在舒适的环境中放松疲惫的身心和独享商务之旅的美妙一刻</dd>
                                    </dl>
                                </div>
                                <div class="imgbox_typeD">
                                    <figure class="imgbox_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/twin/img_twin1.jpg" alt=""/></figure>
                                    <dl class="imgbox_dlset">
                                        <dt>TWIN & TRIPLE</dt>
                                        <dd>宽敞舒适的双人间，满足您观光、商务等各种需求，尽享雾岛休闲时光。同时提供可供三人使用的双人间。</dd>
                                    </dl>
                                </div>
                                <div class="imgbox_typeD">
                                    <figure class="imgbox_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/crown-suite/img_crown-suite1.jpg" alt=""/></figure>
                                    <dl class="imgbox_dlset">
                                        <dt>SUITE</dt>
                                        <dd>豪华奢侈的套房，设计讲究、空间奢华，専为您守候。在这里，鹿児岛的壮阔景色、樱岛火山的雄姿一览无遗。<br>
										※豪华套房配有客厅、卧室、水流按摩浴室（只限皇家豪华套房/总统套房）、普通浴室、简易厨房。</dd>
                                    </dl>
                                </div>
                            </article>
                        </div>
                    </div>
                </section>
                
                <?php include(TEMPLATEPATH . '/inc/footer_cn.php'); ?>

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