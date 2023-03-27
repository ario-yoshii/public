<?php
/*
Template Name: レストラン＆バー - 京はるか
*/
?>
<?php get_header(); ?>
<div id="wrapper"><!-- #wrapper -->

    <?php include(TEMPLATEPATH . '/inc/header.php'); ?>

    <main id="maincontainer" class="container"><!-- #maincontainer -->
        
        <div class="main_bloc">

            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/kyoharuka/lkv_img_kyoharuka@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">RESTAURANT&BAR</span>
                    <span class="mttls_ja">レストラン＆バー</span>
                </h1>
            </section><!-- /#kv -->

            <div id="mainsections" class="main_inner">

                <article id="breadcrumb" class="ja-serif"><!-- #breadcrumb -->
                <div id="breadcrumb_inner" class="inner_m">
                    <p>
                        <a href="<?php bloginfo('url'); ?>/">ホーム</a>
                        <span class="bcsps">&nbsp;&gt;&nbsp;</span>
                        <a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
                        <span class="bcsps">&nbsp;&gt;&nbsp;</span>
                        <span>京はるか</span>
                    </p>
                </div>
                </article><!-- /#breadcrumb -->

                <section class="content">
                    <div class="ptb_sps pt0 pb30 inner_m sp_inner_b">
                        <h2 class="mttls tac mb18 smb12">
                            <span class="mttls_en en">JAPANESE STYLE</span>
                            <span class="mttls_ja">京はるか</span>
                        </h2>
                        <article class="tslide_container mb90 smb40">
                            <div class="tslide_ibox imgslidesB">
                                <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/kyoharuka/img_kyoharuka01.jpg"></figure>
                                <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/kyoharuka/img_kyoharuka02.jpg"></figure>
                                <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/kyoharuka/img_kyoharuka03.jpg"></figure>
                                <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/kyoharuka/img_kyoharuka04.jpg"></figure>
                                <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/kyoharuka/img_kyoharuka05.jpg"></figure>
                                <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/kyoharuka/img_kyoharuka06.jpg"></figure>
                                <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/kyoharuka/img_kyoharuka07.jpg"></figure>
                                <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/kyoharuka/img_kyoharuka08.jpg"></figure>
                                <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/kyoharuka/img_kyoharuka09.jpg"></figure>
                            </div>
                            <div class="tslide_tbox">
                                <div class="tslide_tbox_inner">
                                    <h5 class="tslide_tbox_stl en">CONCEPT</h5>
                                    <h2 class="tslide_tbox_ttl ja-min">
                                        日本ならではの伝統的な雰囲気と 味と素材と美にこだわった日本料理の醍醐味を味わう「京はるか」
                                    </h2>
                                    <p class="tslide_tbox_txt">
落ち着いた雰囲気の中で、鹿児島が誇る豊富な食材を使用した季節感溢れる彩りと、料理長が創造する芸術的な料理の数々を、心ゆくまでご堪能頂けます。<br>
また、地元鹿児島の焼酎（森伊蔵、魔王、萬膳、佐藤、伊佐美など）のほか、日本酒（玉乃光、京生粋など）もご用意しております。<br>
京はるかの「逸品」料理とともにお愉しみください。
                                    </p>
                                </div>
                            </div>
                        </article>


						<?php
							$chosen_idA = 62; $thisCatA = get_category($chosen_idA);
							$chosen_idB = 63; $thisCatB = get_category($chosen_idB);
							$chosen_idC = 64; $thisCatC = get_category($chosen_idC);
							$chosen_idD = 70; $thisCatD = get_category($chosen_idD);
							if($thisCatA->count != 0 || $thisCatB->count != 0 || $thisCatC->count != 0 || $thisCatD->count != 0):
						?>
							<h2 class="mttls tac mb55 smb15">
								<span class="mttls_en en">MENU</span>
								<span class="mttls_ja">メニュー</span>
							</h2>
							<div class="inner_sb sp_inner_b">
								<article class="itbox_c4">
							<?php
								if ($thisCatA->count != 0 ) :?>
									<a href="<?php bloginfo('url'); ?>/kyoharuka_info/kyoharuka-lunch/" class="itbox_item">
										<div class="itbox_item_inner">
											<figure class="itbox_item_img">
												<img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/kyoharuka/img_kyoharuka_lunch.jpg" alt=""/>
											</figure>
											<h3 class="itbox_item_ttl ja-min">京はるかランチ</h3>
											<p class="itbox_item_txt">京はるかのランチメニューをご紹介いたします。</p>
										</div>
									</a>
							<?php endif ?>
							<?php
								if ($thisCatB->count != 0 ) :?>
									<a href="<?php bloginfo('url'); ?>/kyoharuka_info/kyoharuka-dinner/" class="itbox_item">
										<div class="itbox_item_inner">
											<figure class="itbox_item_img">
												<img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/kyoharuka/img_kyoharuka_dinner.jpg" alt=""/>
											</figure>
											<h3 class="itbox_item_ttl ja-min">京はるかディナー</h3>
											<p class="itbox_item_txt">京はるかのディナーメニューをご紹介いたします。</p>
											</div>
									</a>
							<?php endif ?>
							<?php
								if ($thisCatC->count != 0 ) :?>
									<a href="<?php bloginfo('url'); ?>/kyoharuka_info/kyoharuka-planning/" class="itbox_item">
										<div class="itbox_item_inner">
											<figure class="itbox_item_img">
												<img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/kyoharuka/img_kyoharuka_planning.jpg" alt=""/>
											</figure>
											<h3 class="itbox_item_ttl ja-min">京はるか企画</h3>

											<p class="itbox_item_txt">京はるかをよりお楽しみ頂くために、特別なプランをご用意しております。</p>
											</div>
									</a>
							<?php endif ?>
							<?php
								if ($thisCatD->count != 0 ) :?>
									<a href="<?php bloginfo('url'); ?>/kyoharuka_info/kyoharuka-concluding/" class="itbox_item">
										<div class="itbox_item_inner">
											<figure class="itbox_item_img">
												<img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/kyoharuka/img_kyoharuka_concluding.jpg" alt=""/>
											</figure>
											<h3 class="itbox_item_ttl ja-min">京はるか結納</h3>

											<p class="itbox_item_txt">結納、顔合わせに合わせたプランをご用意しております。</p>
									</div>
									</a>
							<?php endif ?>
								</article>
							</div>
						<?php endif ?>
												
                    </div>
                    <div class="ptb_sps pb60 spb60 inner_m sp_inner_b">
                        <h2 class="mttls tac mb20 smb15">
                            <span class="mttls_en en">INFORMATION</span>
                            <span class="mttls_ja">インフォメーション</span>
                        </h2>
                        <article class="info_container mb30" data-maxview=6>

 							<?php
							$arg = array(
							'posts_per_page' => 6, // 表示する件数
							'orderby' => 'date', // 日付でソート
							'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
							'category_name' => 'kyoharuka_info' // 表示したいカテゴリーのスラッグを指定
							);
							$posts = get_posts( $arg );
							if( $posts ): ?>
							<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
								<?php $cats = get_the_category();?>    
								<div class="info_item">
									<?php if(has_post_thumbnail()): ?>
										<?php $thumbnail_id = get_post_thumbnail_id(); $eye_img = wp_get_attachment_image_src( $thumbnail_id , 'large' ); ?>	
										<figure class="info_item_img"><span data-image="<?php echo $eye_img[0];　?>"></span></figure>
									<?php endif; ?>
									<div class="info_tbox">
										<div class="postbox">
											<p class="post_date en"><?php the_time( 'Y/m/d' ); ?></p>
											<span class="post_line">|</span>
											<p class="post_tags"><span><?php the_category(', '); ?></span></p>
										</div>
										<h3 class="info_ttl"><?php the_title(); ?></h3>
									</div>
									<?php if( get_field('pdf') ) : ?><a href="<?php the_field('pdf'); ?>" class="hitarea" target="_blank"><?php elseif( get_field('URL') ) : ?><a href="<?php the_field('URL'); ?>" class="hitarea"><?php else: ?><a href="<?php the_permalink(); ?>" class="hitarea"><?php endif; ?></a>
								</div>
							<?php endforeach; ?>
							<?php endif; wp_reset_postdata(); ?>
							
							
                        </article>
                        <a href="<?php bloginfo('url'); ?>/kyoharuka_info/" class="txtbtn mauto smt15"><span>京はるかの情報一覧</span></a>
                    </div>
                </section>
					<?php include( TEMPLATEPATH . '/inc/banner1.php' ); ?>

                <section class="content bg_gray">
                    <div class="ptb_sps inner">
                        <h2 class="mttls tac mb58 smb30">
                            <span class="mttls_en en">INFORMATION</span>
                            <span class="mttls_ja">京はるかのご案内</span>
                        </h2>
                        <article class="id_container_s mb80 smb10">
                            <figure class="id_img onlySp" data-image="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/kyoharuka/img_info_kyoharuka.jpg"></figure>
                            <figure class="id_img onlyPc"><img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/kyoharuka/img_info_kyoharuka.jpg" alt=""></figure>
                            <div class="id_tbox">
                                <div class="id_tbox_inner">
                                    <article class="mb10">
                                        <dl class="dl_tnses_m">
                                            <dt class="pt15">営業時間</dt>
                                            <dd class="pt15">
                                                <span class="hourbox_m">ランチ</span>11:30～14:30（L.O. 14:00）<br>
                                                <span class="hourbox_m">ディナー</span>通　常：17:30～20:00（L.O. 19:00）<br>　　　　　　土曜日：17:30～21:00（L.O. 19:30）
                                            </dd>
                                        </dl>
										<dl class="dl_tnses_m">
											<dt>定休日</dt>
                                            <dd>毎週月曜日、火曜日</dd>
										</dl>
                                        <dl class="dl_tnses_m">
                                            <dt>TEL</dt>
                                            <dd><?php if (is_mobile()) : ?><a href="tel:0995-43-7613" onclick="gtag('event', 'tel-tap', {'event_category':'click','event_label': 'kyoharuka'});">0995-43-7613</a><?php else: ?>0995-43-7613<?php endif; ?></dd>
                                        </dl>
                                        <dl class="dl_tnses_m">
                                            <dt>席数</dt>
                                            <dd>テーブル席（ホール） 21席／テーブル個室 3室24席／お座敷 2室14席</dd>
                                        </dl>
                                    </article>
                                    <p class="fs13">※全席禁煙となります。</p>
                                </div>
                            </div>
                        </article>
                        <div class="btns mb40 smb0">
                            <a href="<?php bloginfo('url'); ?>/restaurant/reservation/?post_id=<?php echo $post->ID; ?>&option_id=2" class="squarebtn_arrow_gd smb30"><span>予約はこちら</span></a>
                            <div class="tellbox">
                                <p class="fs13 mt2">お電話でのご予約・お問い合わせはこちら</p>
                                <p class="tellno en"><?php if (is_mobile()) : ?><a href="tel:0995-43-7613" onclick="gtag('event', 'tel-tap', {'event_category':'click','event_label': 'kyoharuka'});"><span>TEL</span> 0995-43-7613</a><?php else: ?><span>TEL</span> 0995-43-7613<?php endif; ?></p>
                            </div>
                        </div>
                    </div>
                </section>

                <?php include( TEMPLATEPATH . '/inc/restaurant_list.php' ); ?>
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