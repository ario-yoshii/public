<?php
/*
Template Name: レストラン＆バー - メインバー・アモーレ
*/
?>
<?php get_header(); ?>
<div id="wrapper"><!-- #wrapper -->

    <?php include(TEMPLATEPATH . '/inc/header.php'); ?>

    <main id="maincontainer" class="container"><!-- #maincontainer -->
        
        <div class="main_bloc">

            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/amore/lkv_img_amore.jpg"><!-- #kv -->
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
                        <span>メインバー・アモーレ</span>
                    </p>
                </div>
                </article><!-- /#breadcrumb -->

                <section class="content">
                    <div class="ptb_sps pt0 pb30 inner_m sp_inner_b">
                        <h2 class="mttls tac mb18 smb12">
                            <span class="mttls_en en">MAIN BAR</span>
                            <span class="mttls_ja">メインバー・アモーレ</span>
                        </h2>
                        <article class="tslide_container mb90 smb40">
                            <div class="tslide_ibox imgslidesB">
                                <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/amore/img_amore01.jpg"></figure>
                                <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/amore/img_amore02.jpg"></figure>
                                <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/amore/img_amore03.jpg"></figure>
                            </div>
                            <div class="tslide_tbox">
                                <div class="tslide_tbox_inner">
                                    <h5 class="tslide_tbox_stl en">CONCEPT</h5>
                                    <h2 class="tslide_tbox_ttl ja-min">
                                        ホテル最上階から前方の大アトリウムを見晴らす天空のバー「アモーレ」
                                    </h2>
                                    <p class="tslide_tbox_txt">
										目前の星空が、大人の時間を演出するロマンチックな夜をカクテル、ワイン、地焼酎など豊富な種類の美酒を愉しみながらお過ごしください。<br>
										独自イベントとして『ボトルキープフェア』がございます。
                                    </p>
                                </div>
                            </div>
                        </article>


						<?php
							$chosen_idA = 65; $thisCatA = get_category($chosen_idA);
							if($thisCatA->count != 0):
						?>
							<h2 class="mttls tac mb55 smb15">
								<span class="mttls_en en">MENU</span>
								<span class="mttls_ja">メニュー</span>
							</h2>
							<div class="inner_xs sp_inner_b mb40 smb30">
								<article class="itbox_c">
							<?php
								if ($thisCatA->count != 0 ) :?>
									<a href="<?php bloginfo('url'); ?>/amore_info/amore-planning/" class="itbox_item">
										<div class="itbox_item_inner">
											<figure class="itbox_item_img">
													<?php
													$arg = array(
													'posts_per_page' => 1, // 表示する件数
													'orderby' => 'date', // 日付でソート
													'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
													'category' => '65' // 表示したいカテゴリーのスラッグを指定
													);
													$posts = get_posts( $arg );
													if( $posts ): ?>
													<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
														<?php if(has_post_thumbnail()): ?>
															<?php $thumbnail_id = get_post_thumbnail_id(); $eye_img = wp_get_attachment_image_src( $thumbnail_id , 'photo_a' ); ?>	
															<img src="<?php echo $eye_img[0];　?>">
														<?php endif; ?>											
													<?php endforeach; ?>
													<?php endif; wp_reset_postdata(); ?>
											</figure>
											<h3 class="itbox_item_ttl ja-min">アモーレ企画</h3>

											<p class="itbox_item_txt">バー・アモーレをよりお楽しみ頂くために、特別なプランをご用意しております。</p>
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
							'category_name' => 'amore_info' // 表示したいカテゴリーのスラッグを指定
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
                        <a href="<?php bloginfo('url'); ?>/amore_info/" class="txtbtn mauto smt15"><span>アモーレの情報一覧</span></a>
                    </div>
                </section>
					<?php include( TEMPLATEPATH . '/inc/banner1.php' ); ?>

                <section class="content bg_gray">
                    <div class="ptb_sps inner">
                        <h2 class="mttls tac mb58 smb30">
                            <span class="mttls_en en">INFORMATION</span>
                            <span class="mttls_ja">メインバー・アモーレのご案内</span>
                        </h2>
                        <article class="id_container_s mb80 smb10">
                            <figure class="id_img onlySp" data-image="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/amore/img_info_amore.jpg"></figure>
                            <figure class="id_img onlyPc"><img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/amore/img_info_amore.jpg" alt=""></figure>
                            <div class="id_tbox">
                                <div class="id_tbox_inner">
                                    <article class="mb10">
                                        <dl class="dl_tnses_m">
                                            <dt class="pt15">営業時間</dt>
                                            <dd class="pt15">
                                                19:00～23:00（L.O. 22:30）
                                            </dd>
                                        </dl>
                                        <dl class="dl_tnses_m">
                                            <dt>定休日</dt>
                                            <dd>毎週 日曜日・月曜日</dd>
                                        </dl>
										<dl class="dl_tnses_m">
                                            <dt>TEL</dt>
                                            <dd><?php if (is_mobile()) : ?><a href="tel:0995-43-7616" onclick="gtag('event', 'tel-tap', {'event_category':'click','event_label': 'amore'});">0995-43-7616</a><?php else: ?>0995-43-7616<?php endif; ?></dd>
                                        </dl>
                                        <dl class="dl_tnses_m">
                                            <dt>最大収容人数</dt>
                                            <dd>30名</dd>
                                        </dl>
                                    </article>
                                    <!--<p class="fs13">※全席ホール席、全席禁煙となります。</p>-->
                                </div>
                            </div>
                        </article>
                        <div class="btns mb40 smb0">
                            <a href="<?php bloginfo('url'); ?>/restaurant/reservation/?post_id=<?php echo $post->ID; ?>&option_id=3" class="squarebtn_arrow_gd smb30"><span>予約はこちら</span></a>
                            <div class="tellbox">
                                <p class="fs13 mt2">お電話でのご予約・お問い合わせはこちら</p>
                                <p class="tellno en"><?php if (is_mobile()) : ?><a href="tel:0995-43-7616" onclick="gtag('event', 'tel-tap', {'event_category':'click','event_label': 'amore'});"><span>TEL</span> 0995-43-7616</a><?php else: ?><span>TEL</span> 0995-43-7616<?php endif; ?></p>
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