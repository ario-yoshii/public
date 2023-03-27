<?php
/*
Template Name: ご宿泊 - 朝食
*/
?>
<?php get_header(); ?>

<body>

<div id="wrapper"><!-- #wrapper -->

    <?php include(TEMPLATEPATH . '/inc/header.php'); ?>

    <main id="maincontainer" class="container"><!-- #maincontainer -->
        
        <div class="main_bloc">

            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/stay/breakfast/lkv_img_breakfast.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">STAY</span>
                    <span class="mttls_ja">ご宿泊</span>
                </h1>
            </section><!-- /#kv -->

            <div id="mainsections" class="main_inner">

                <?php include(TEMPLATEPATH . '/inc/reservation.php'); ?>

                <article id="breadcrumb" class="ja-serif"><!-- #breadcrumb -->
                  <div id="breadcrumb_inner" class="inner_m">
                    <p>
                        <a href="<?php bloginfo('url'); ?>/">ホーム</a>
                        <span class="bcsps">&nbsp;&gt;&nbsp;</span>
                        <a href="<?php bloginfo('url'); ?>/stay/">ご宿泊</a>
                        <span class="bcsps">&nbsp;&gt;&nbsp;</span>
                        <span>朝食のご案内</span>
                    </p>
                  </div>
                </article><!-- /#breadcrumb -->

                <section class="content bd_btm">
                    <div class="ptb_sps pt0 pb100 spb0 inner_m">
                        <h2 class="mttls tac mb18 smb12">
                            <span class="mttls_en en">BREAKFAST</span>
                            <span class="mttls_ja">朝食のご案内</span>
                        </h2>
                        <p class="tac sp_tal mb25">
							その日１日を元気にスタートしていただきたい・・・。<br>
							そんな思いを、和食・洋食のバイキングに込めてご提供です！みなさまの大切な朝をサポートさせてください。<br>
							鹿児島ならではのメニューもご準備しております。美味しい朝ごはんをどうぞお召し上がりください。
                        </p>
                        <div class="mb25">
                            <p class="lrline_stl">ご提供時間</p>
                            <p class="eattime_txt tac en">6:30 - 10:00 <span>ラストイン</span> 9:30</p>
                        </div>

                        <article class="imgboxes onlyPc">
                            <div class="imgbox_typeA mb6">
                                <figure class="imgbox_typeA_l"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/breakfast/img_breakfast01.jpg" alt=""></figure>
                                <figure class="imgbox_typeA_r">
                                    <figure class="mb4"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/breakfast/img_breakfast02.jpg" alt=""></figure>
                                    <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/breakfast/img_breakfast03.jpg" alt=""></figure>
                                </figure>
                            </div>
                            <div class="imgbox_typeB">
                                <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/breakfast/img_breakfast04.jpg" alt=""></figure>
                                <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/breakfast/img_breakfast05.jpg" alt=""></figure>
                                <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/breakfast/img_breakfast06.jpg" alt=""></figure>
                            </div>
                        </article>
                    </div>
                    <article class="imgboxes onlySp">
                        <div class="imgbox_typeA mb6">
                            <figure class="imgbox_typeA_l smb6"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/breakfast/img_breakfast01.jpg" alt=""></figure>
                            <figure class="imgbox_typeA_r">
                                <figure class="mr3" data-image="<?php bloginfo('template_directory'); ?>/assets/images/stay/breakfast/img_breakfast02.jpg"></figure>
                                <figure class="ml3" data-image="<?php bloginfo('template_directory'); ?>/assets/images/stay/breakfast/img_breakfast03.jpg"></figure>
                            </figure>
                        </div>
                        <div class="imgbox_typeB">
                            <figure class="mr4"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/breakfast/img_breakfast04.jpg" alt=""></figure>
                            <figure class="mr2 ml2"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/breakfast/img_breakfast05.jpg" alt=""></figure>
                            <figure class="ml4"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/breakfast/img_breakfast06.jpg" alt=""></figure>
                        </div>
                    </article>
                </section>

                <section class="content bd_btm">
                    <div class="ptb_sps pt63 spt30 pb50 spb40 inner_m">
                        <h2 class="mttls tac mb40 smb30">
                            <span class="mttls_en en">FEATURES</span>
                            <span class="mttls_ja">ホテル京セラの朝食はここが違う！！</span>
                        </h2>
                        <article class="imgboxes">
                            <div class="imgbox_typeC">
                                <div class="itd_item">
                                    <div class="itd_item_inner">
                                        <figure class="mb15"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/breakfast/img_appeal01.jpg" alt=""></figure>
                                        <div class="itd_item_tbox">
                                            <h2 class="read_ttl ja-min">出来たてのふわふわオムレツ</h2>
                                            <p class="read_txt">ご注文をお受けしてからシェフが目の前で焼き上げるふわふわオムレツは、朝食の一番人気メニューです。</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="itd_item">
                                    <div class="itd_item_inner">
                                        <figure class="mb15"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/breakfast/img_appeal02.jpg" alt=""></figure>
                                        <div class="itd_item_tbox">
                                            <h2 class="read_ttl ja-min">鹿児島の食材を味わえる郷土料理</h2>
                                            <p class="read_txt">さつまあげや豚味噌、豚の角煮などの郷土料理を日替わりでご準備しております。鹿児島の食材をご賞味ください。</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="itd_item">
                                    <div class="itd_item_inner">
                                        <figure class="mb15"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/breakfast/img_appeal03.jpg" alt=""></figure>
                                        <div class="itd_item_tbox">
                                            <h2 class="read_ttl ja-min">純玄米黒酢をフルーティーに</h2>
                                            <p class="read_txt">霧島市福山で生産された純玄米黒酢に、ゆずやブルーベリーなどの果汁を加ており、爽やかにお飲みいただけます。</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="itd_item">
                                    <div class="itd_item_inner">
                                        <figure class="mb15"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/breakfast/img_appeal04.jpg" alt=""></figure>
                                        <div class="itd_item_tbox">
                                            <h2 class="read_ttl ja-min">鹿児島で生産された10種類以上のお茶</h2>
                                            <p class="read_txt">地元の霧島茶をはじめ、知覧などの煎茶、深蒸し茶、玄米茶、ほうじ茶、ハーブティーをご準備しております。飲み比べもお楽しみいただけます。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </section>

                <section class="content bd_btm">
                    <div class="ptb_sps pt70 spt30 pb0">
                        <h2 class="mttls tac mb33 smb20">
                            <span class="mttls_en en">INFORMATION</span>
                            <span class="mttls_ja">朝食会場のご案内</span>
                        </h2>
                        <article class="id_container">
                            <figure class="id_img" data-image="<?php bloginfo('template_directory'); ?>/assets/images/stay/breakfast/img_hall.jpg"></figure>
                            <div class="id_tbox">
                                <div class="id_tbox_inner">
                                    <h2 class="bttl ja-min mb20">朝日が差し込む明るく、開放感のある朝食会場</h2>
                                    <p class="mb20">別館1階「バイキングレストラン 夢の国」は、和洋のバイキングスタイルでお好きなメニューをお召し上がりいただけます。</p>
                                    <article class="">
                                        <h4 class="fs16 fw_bold ja-min mb13">朝食概要</h4>
                                        <dl class="dl_tnses">
                                            <dt class="pt15">会場</dt>
                                            <dd class="pt15"><div class="flex_left">別館１階 夢の国<!--<a href="#" class="btn_floormap nmt5 ml15"><span>フロアマップ</span></a>--></div></dd>
                                        </dl>
                                        <dl class="dl_tnses">
                                            <dt>ご提供時間</dt>
                                            <dd>6:30 - 10:00 ラストイン 9:30</dd>
                                        </dl>
                                        <dl class="dl_tnses">
                                            <dt>備考</dt>
                                            <dd>掲載の写真はイメージです。内容は予告無しに変更になる場合がございます。</dd>
                                        </dl>
                                    </article>
                                </div>
                            </div>
                        </article>
                    </div>
					<?php include( TEMPLATEPATH . '/inc/banner1.php' ); ?>
                    <div class="ptb_sps pt80 spt30 pb90 spb30 inner_m">
                        <article class="imgboxes">
                            <div class="imgbox_typeC">
                                <div class="itd_item_m">
                                    <div class="itd_item_inner">
                                        <figure class="mb10"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/breakfast/img_westernfood.jpg" alt=""></figure>
                                        <div class="tac">
                                            <h2 class="read_ttl mb7">洋食メニュー</h2>
                                            <p class="read_txt">オムレツ、ハム、ポテト、ウインナー、サラダ、シリアル、フルーツ、ヨーグルト、パン　など</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="itd_item_m">
                                    <div class="itd_item_inner">
                                        <figure class="mb10"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/breakfast/img_japanesefood.jpg" alt=""></figure>
                                        <div class="tac">
                                            <h2 class="read_ttl mb7">和食メニュー</h2>
                                            <p class="read_txt">さつまあげ、豚の角煮、季節の煮物、焼き魚、卵焼き、昆布巻き、ご飯　など</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="itd_item_m">
                                    <div class="itd_item_inner">
                                        <figure class="mb10"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/breakfast/img_drinkbar.jpg" alt=""></figure>
                                        <div class="tac">
                                            <h2 class="read_ttl mb7">ドリンクメニュー</h2>
                                            <p class="read_txt">黒酢、お茶、紅茶、コーヒー、烏龍茶、オレンジジュース、アップルジュース、トマトジュース、カルピス、牛乳　など</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </section>

                <section class="content">
                    <div class="ptb_sps pt80 spt40 pb43 spb30 inner">
                        <h3 class="read_ttl ja-min tac">部屋タイプ一覧</h3>
                        
                    </div>
                    <?php include(TEMPLATEPATH . '/inc/room_type.php'); ?>
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