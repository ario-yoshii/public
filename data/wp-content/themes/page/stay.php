<?php
/*
Template Name: ご宿泊
*/
?>
<?php get_header(); ?>
<div id="wrapper"><!-- #wrapper -->

    <?php include(TEMPLATEPATH . '/inc/header.php'); ?>

    <main id="maincontainer" class="container"><!-- #maincontainer -->
        
        <div class="main_bloc">

            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/stay/lkv_img_stay@2x.jpg"><!-- #kv -->
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
                        <span>ご宿泊</span>
                    </p>
                  </div>
                </article><!-- /#breadcrumb -->

                <section class="content">
                    <div class="ptb_sps pt0 pb45 spb30 inner_m sp_inner_b">
                        <h2 class="mttls tac mb18 smb12">
                            <span class="mttls_en en">PLAN</span>
                            <span class="mttls_ja">宿泊プラン</span>
                        </h2>
                        <!--<nav class="btns sp_nowrap sort_evt mb50 smb15 spl20">
                            <a href="#" class="roundbtn btnbg_w" data-target="cat_new"><span>新着</span></a>
                            <a href="#" class="roundbtn btnbg_w" data-target="cat_category01"><span>カテゴリー1</span></a>
                            <a href="#" class="roundbtn btnbg_w" data-target="cat_category02"><span>カテゴリー2</span></a>
                        </nav>-->
                        <article class="info_container mb30" data-maxview=6>
							<?php
							$arg = array(
							'posts_per_page' => 6, // 表示する件数
							'orderby' => 'date', // 日付でソート
							'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
							'category_name' => 'stay_plan' // 表示したいカテゴリーのスラッグを指定
							);
							$posts = get_posts( $arg );
							if( $posts ): ?>
							<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>							
							
								<div class="info_item cat_new">
									<?php if(has_post_thumbnail()): ?>
										<?php $thumbnail_id = get_post_thumbnail_id(); $eye_img = wp_get_attachment_image_src( $thumbnail_id , 'large' ); ?>	
										<figure class="info_item_img"><span data-image="<?php echo $eye_img[0];?>"></span></figure>
									<?php endif; ?>
									<div class="info_tbox">
										<div class="postbox">
											<p class="post_date en"><?php the_time( 'Y/m/d' ); ?></p>
											<span class="post_line">|</span>
											<p class="post_tags"><span><?php the_category(', '); ?></span></p>
										</div>
										<h3 class="info_ttl"><?php the_title(); ?></h3>
									</div>
									<?php if( get_field('pdf') ) : ?><a href="<?php the_field('pdf'); ?>" class="hitarea" target="_blank"><?php else: ?><a href="<?php the_permalink(); ?>" class="hitarea"><?php endif; ?></a>
								</div>
							<?php endforeach; ?>
							<?php endif; wp_reset_postdata(); ?>							
							
                        </article>
                        <a href="<?php bloginfo('url'); ?>/stay/plan/" class="txtbtn mauto smt15"><span>その他の宿泊プラン一覧</span></a>
                    </div>
                </section>

                <section class="content bd_btm bg_gray">
                    <div class="ptb_sps pt65 spt40 pb30">
                        <h2 class="mttls tac mb40 sp_sps smb30">
                            <span class="mttls_en en">GUEST ROOM</span>
                            <span class="mttls_ja">客室のご案内</span>
                        </h2>
                        <h2 class="read_ttl ja-min tac mb70 sp_sps smb30">本館・別館合わせて２０種類の<br class="onlySp">客室タイプよりお選び頂けます。</h2>
                        <article class="imgbox_typeXA">
                            <figure class="imgbox_typeXA_l smb30">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/img_hotel_main@2x.jpg" alt="" class="onlyPc">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/img_hotel_main_sp.jpg" alt="" class="onlySp">
                                <div class="w_bttls_s">
                                    <h3 class="w_bttls_s_t1 ja-min">本館</h3>
                                    <p class="w_bttls_s_t2">MAIN</p>
                                </div>
                            </figure>
                            <div class="imgbox_typeXA_r">
                                <div class="room_type_item_b">
                                    <figure class="room_type_item_b_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/img_single1.jpg" alt=""></figure>
                                    <h5 class="room_type_item_b_name">シングル</h5>
                                    <p class="room_type_item_b_detail">広さ 19.5㎡</p>
                                    <a href="<?php bloginfo('url'); ?>/stay/single/" class="hitarea"></a>
                                </div>
                                <div class="room_type_item_b">
                                    <figure class="room_type_item_b_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/img_executive-single1.jpg" alt=""></figure>
                                    <h5 class="room_type_item_b_name">エグゼクティブシングル</h5>
                                    <p class="room_type_item_b_detail">広さ 19.5㎡</p>
                                    <a href="<?php bloginfo('url'); ?>/stay/executive-single/" class="hitarea"></a>
                                </div>
                                <div class="room_type_item_b">
                                    <figure class="room_type_item_b_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/img_executive-double1.jpg" alt=""></figure>
                                    <h5 class="room_type_item_b_name">エグゼクティブダブル</h5>
                                    <p class="room_type_item_b_detail">広さ 29.1㎡</p>
                                    <a href="<?php bloginfo('url'); ?>/stay/executive-double/" class="hitarea"></a>
                                </div>
                                <div class="room_type_item_b">
                                    <figure class="room_type_item_b_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/img_twin1.jpg" alt=""></figure>
                                    <h5 class="room_type_item_b_name">スタンダードツイン</h5>
                                    <p class="room_type_item_b_detail">広さ 29.1㎡</p>
                                    <a href="<?php bloginfo('url'); ?>/stay/twin/" class="hitarea"></a>
                                </div>
                                <div class="room_type_item_b">
                                    <figure class="room_type_item_b_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/img_executive-comfort-twin1.jpg" alt=""></figure>
                                    <h5 class="room_type_item_b_name">エグゼクティブコンフォートツイン</h5>
                                    <p class="room_type_item_b_detail">広さ 29.1㎡</p>
                                    <a href="<?php bloginfo('url'); ?>/stay/executive-comfort-twin/" class="hitarea"></a>
                                </div>
                                <div class="room_type_item_b">
                                    <figure class="room_type_item_b_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/img_executive-twin-a1.jpg" alt=""></figure>
                                    <h5 class="room_type_item_b_name">エグゼクティブツインAタイプ</h5>
                                    <p class="room_type_item_b_detail">広さ 29.1㎡</p>
                                    <a href="<?php bloginfo('url'); ?>/stay/executive-twin-a/" class="hitarea"></a>
                                </div>
                                <div class="room_type_item_b">
                                    <figure class="room_type_item_b_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/img_executive-twin-b1.jpg" alt=""></figure>
                                    <h5 class="room_type_item_b_name">エグゼクティブツインBタイプ</h5>
                                    <p class="room_type_item_b_detail">広さ 31.3㎡</p>
                                    <a href="<?php bloginfo('url'); ?>/stay/executive-twin-b/" class="hitarea"></a>
                                </div>
                                <div class="room_type_item_b">
                                    <figure class="room_type_item_b_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/img_executive-twin-dx1.jpg" alt=""></figure>
                                    <h5 class="room_type_item_b_name">エグゼクティブツインDXタイプ</h5>
                                    <p class="room_type_item_b_detail">広さ 38.7㎡</p>
                                    <a href="<?php bloginfo('url'); ?>/stay/executive-twin-dx/" class="hitarea"></a>
                                </div>
                                <div class="room_type_item_b">
                                    <figure class="room_type_item_b_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/img_superior-twin1.jpg" alt=""></figure>
                                    <h5 class="room_type_item_b_name">スーペリアツイン</h5>
                                    <p class="room_type_item_b_detail">広さ 31.3㎡</p>
                                    <a href="<?php bloginfo('url'); ?>/stay/superior-twin/" class="hitarea"></a>
                                </div>
                                <div class="room_type_item_b">
                                    <figure class="room_type_item_b_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/img_japanese-western-a1.jpg" alt=""></figure>
                                    <h5 class="room_type_item_b_name">和洋室Aタイプ</h5>
                                    <p class="room_type_item_b_detail">広さ 38.7㎡</p>
                                    <a href="<?php bloginfo('url'); ?>/stay/japanese-western-a/" class="hitarea"></a>
                                </div>
                                <div class="room_type_item_b">
                                    <figure class="room_type_item_b_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/img_japanese-western-b1.jpg" alt=""></figure>
                                    <h5 class="room_type_item_b_name">和洋室Bタイプ</h5>
                                    <p class="room_type_item_b_detail">広さ 48.6㎡</p>
                                    <a href="<?php bloginfo('url'); ?>/stay/japanese-western-b/" class="hitarea"></a>
                                </div>
                                <div class="room_type_item_b">
                                    <figure class="room_type_item_b_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/img_japanese-western-dx1.jpg" alt=""></figure>
                                    <h5 class="room_type_item_b_name">和洋室DXタイプ</h5>
                                    <p class="room_type_item_b_detail">広さ 48.6㎡</p>
                                    <a href="<?php bloginfo('url'); ?>/stay/japanese-western-dx/" class="hitarea"></a>
                                </div>
                                <div class="room_type_item_b">
                                    <figure class="room_type_item_b_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/img_crown-suite1.jpg" alt=""></figure>
                                    <h5 class="room_type_item_b_name">クラウンスイート</h5>
                                    <p class="room_type_item_b_detail">広さ 78.0㎡</p>
                                    <a href="<?php bloginfo('url'); ?>/stay/crown-suite/" class="hitarea"></a>
                                </div>
                                <div class="room_type_item_b">
                                    <figure class="room_type_item_b_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/img_royal-suite1.jpg" alt=""></figure>
                                    <h5 class="room_type_item_b_name">ロイヤルスイート</h5>
                                    <p class="room_type_item_b_detail">広さ 97.5㎡</p>
                                    <a href="<?php bloginfo('url'); ?>/stay/royal-suite/" class="hitarea"></a>
                                </div>
                            </div>
                        </article>
                    </div>
                </section>

                <section class="content bg_gray">
                    <div class="ptb_sps pt60 spt40 pb100 spb40">
                        <article class="imgbox_typeXA flex_rev">
                            <figure class="imgbox_typeXA_l smb30">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/img_hotel_annex@2x.jpg" alt="" class="onlyPc">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/img_hotel_annex_sp.jpg" alt="" class="onlySp">
                                <div class="w_bttls_s">
                                    <h3 class="w_bttls_s_t1 ja-min">別館</h3>
                                    <p class="w_bttls_s_t2">ANNEX</p>
                                </div>
                            </figure>
                            <div class="imgbox_typeXA_r">
                                <div class="room_type_item_b">
                                    <figure class="room_type_item_b_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/img_corner-single1.jpg" alt=""></figure>
                                    <h5 class="room_type_item_b_name">コーナーシングル</h5>
                                    <p class="room_type_item_b_detail">広さ 18.8㎡</p>
                                    <a href="<?php bloginfo('url'); ?>/stay/corner-single/" class="hitarea"></a>
                                </div>
                                <div class="room_type_item_b">
                                    <figure class="room_type_item_b_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/img_annex-single1.jpg" alt=""></figure>
                                    <h5 class="room_type_item_b_name">シングル</h5>
                                    <p class="room_type_item_b_detail">広さ 21.3㎡</p>
                                    <a href="<?php bloginfo('url'); ?>/stay/annex-single/" class="hitarea"></a>
                                </div>
                                <div class="room_type_item_b">
                                    <figure class="room_type_item_b_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/img_economy-twin1.jpg" alt=""></figure>
                                    <h5 class="room_type_item_b_name">エコノミーツイン</h5>
                                    <p class="room_type_item_b_detail">広さ 21.3㎡</p>
                                    <a href="<?php bloginfo('url'); ?>/stay/economy-twin/" class="hitarea"></a>
                                </div>
                                <div class="room_type_item_b">
                                    <figure class="room_type_item_b_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/img_annex-twin1.jpg" alt=""></figure>
                                    <h5 class="room_type_item_b_name">スタンダードツイン</h5>
                                    <p class="room_type_item_b_detail">広さ 25.5㎡</p>
                                    <a href="<?php bloginfo('url'); ?>/stay/annex-twin/" class="hitarea"></a>
                                </div>
                                <div class="room_type_item_b">
                                    <figure class="room_type_item_b_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/img_annex-superior-twin1.jpg" alt=""></figure>
                                    <h5 class="room_type_item_b_name">スーペリアツイン</h5>
                                    <p class="room_type_item_b_detail">広さ 32.1㎡</p>
                                    <a href="<?php bloginfo('url'); ?>/stay/annex-superior-twin/" class="hitarea"></a>
                                </div>
                                <div class="room_type_item_b">
                                    <figure class="room_type_item_b_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/img_japanese1.jpg" alt=""></figure>
                                    <h5 class="room_type_item_b_name">和室</h5>
                                    <p class="room_type_item_b_detail">広さ 6畳＋8畳</p>
                                    <a href="<?php bloginfo('url'); ?>/stay/japanese/" class="hitarea"></a>
                                </div>
                            </div>
                        </article>
                    </div>
                </section>

                <section class="content">
                    <div class="ptb_sps pt60 spt50 pb30 inner_m">
                        <h2 class="mttls tac mb40 smb30">
                            <span class="mttls_en en">SERVICE</span>
                            <span class="mttls_ja">宿泊サービス</span>
                        </h2>
                        <h3 class="read_ttl ja-min tac mb0">より快適でゆとりあるご滞在のために、<br class="onlySp">各種サービスをご用意しております</h3>
                    </div>
                    
                    <section id="sc_room_points_cl" class="content">
                        <div class="room_points_cl_container">
                            <div class="room_points_cl">
                                <article class="room_points_cl_item icon_parking">
                                    <div class="room_points_cl_item_inner">
                                        <h4 class="room_points_cl_ttl ja-min">ホテル併設の広い平置き駐車場</h4>
                                        <p class="room_points_cl_txt">普通車300台・バス10台までご利用頂け、料金は無料です。</p>
                                    </div>
                                    <!--<a href="#" class="txtbtn_s">詳しく見る</a>-->
                                </article>
                                <article class="room_points_cl_item icon_fax">
                                    <div class="room_points_cl_item_inner">
                                        <h4 class="room_points_cl_ttl ja-min">FAXサービス</h4>
                                        <p class="room_points_cl_txt">国内は１枚１００円でお受け致しております。本館１階フロントまでお申し付けください。</p>
                                    </div>
                                </article>
                                <article class="room_points_cl_item icon_copy">
                                    <div class="room_points_cl_item_inner">
                                        <h4 class="room_points_cl_ttl ja-min">コピーサービス</h4>
                                        <p class="room_points_cl_txt">モノクロは１枚３０円、カラーコピーは１枚１００円でお受け致しております。 </p>
                                    </div>
                                </article>
                            <article class="room_points_cl_item icon_gym">
                                <div class="room_points_cl_item_inner">
                                    <h4 class="room_points_cl_ttl ja-min">プール＆<br class="onlySp">スポーツジム</h4>
                                    <p class="room_points_cl_txt">本館地下１階「オクシア」にフィットネスジムと屋内プールがございます。</p>
                                </div>
                                <a href="<?php bloginfo('url'); ?>/relaxation/oxya/" class="txtbtn_s">詳しく見る</a>
                            </article>
                            <article class="room_points_cl_item icon_landry">
                                <div class="room_points_cl_item_inner">
                                    <h4 class="room_points_cl_ttl ja-min sp_pd">コインランドリー</h4>
                                    <p class="room_points_cl_txt">
                                        別館Ｂ１Ｆにコインランドリーが御座います。<br>
                                        ※洗剤はご自由にご利用ください。<br>
                                        <span class="fs12">営業時間10:00～22:00 洗濯￥500/乾燥8分￥100</span>
                                    </p>
                                </div>
                            </article>
                            <article class="room_points_cl_item icon_shopping">
                                <div class="room_points_cl_item_inner">
                                    <h4 class="room_points_cl_ttl ja-min">本館１階に<br class="onlySp">売店がございます</h4>
                                    <p class="room_points_cl_txt">お土産品やコンビニ商品、その他お菓子やドリンク類、アルコールも取り扱っております。  </p>
                                </div>
                                <a href="<?php bloginfo('url'); ?>/shop/" class="txtbtn_s">詳しく見る</a>
                            </article>
                            </div>
                        </div>
                        <a href="<?php bloginfo('url'); ?>/stay/service/" class="morebtn en"><span>More</span></a>
                    </section>
					<?php include( TEMPLATEPATH . '/inc/banner1.php' ); ?>
                    <div class="ptb_sps pt80 spt60 inner">

                        <div class="imgbox_typeC">
                            <div class="itd_item ov_op">
                                <div class="itd_item_inner mb60 smb40">
                                    <figure class="mb15"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/img_service_airclean.jpg" alt=""></figure>
                                    <div class="itd_item_tbox_en">
                                        <h2 class="mttls tac mb20">
                                            <span class="mttls_en en">SERVICE</span>
                                            <span class="mttls_ja">各種サービス</span>
                                        </h2>
                                        <p class="read_txt mb20">
											客室内のサービスや館内サービスをご案内いたします。
                                        </p>
                                    </div>
                                </div>
                                <a href="<?php bloginfo('url'); ?>/stay/service/" class="hitarea"></a>
                            </div>
                            <div class="itd_item ov_op">
                                <div class="itd_item_inner mb60 smb40">
                                    <figure class="mb15"><img src="<?php bloginfo('template_directory'); ?>/assets/images/stay/img_school_ex.jpg" alt=""></figure>
                                    <div class="itd_item_tbox_en">
                                        <h2 class="mttls tac mb20">
                                            <span class="mttls_en en">SCHOOL EXCURSION</span>
                                            <span class="mttls_ja">修学旅行について</span>
                                        </h2>
                                        <p class="read_txt mb20">
											ホテル京セラでは全国の修学旅行生の宿泊先として受け入れをいたしております。
                                        </p>
                                    </div>
                                </div>
                                <a href="<?php bloginfo('url'); ?>/stay/school/" class="hitarea"></a>
                            </div>
                        </div>
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