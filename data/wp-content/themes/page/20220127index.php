<?php get_header(); ?>
<div id="wrapper"><!-- #wrapper -->

    <?php include(TEMPLATEPATH . '/inc/header.php'); ?>

    <main id="maincontainer" class="container"><!-- #maincontainer -->
        
        <div class="main_bloc">

            <section id="kv"><!-- #kv -->
                <div id="yp_container">
                    <div id="yp_background"></div>
                    <div id="yp_overlay"></div>
                </div>
                <h1 id="kv_logo"><img src="<?php bloginfo('template_directory'); ?>/assets/images/kv_logo.png" alt=""></h1>
            </section><!-- /#kv -->

            <div id="mainsections" class="main_inner">

                <?php include(TEMPLATEPATH . '/inc/reservation.php'); ?>

                <section id="sc_news" class="content"><!-- #sc_news -->
                    <div class="inner">
                        
						
						<?php
							$chosen_id = 58; // 投稿数をカウントしたいカテゴリのID
							$thisCat = get_category($chosen_id);
							if ($thisCat->count != 0 ) :?>
								<article class="attentionbox"><!-- .attentionbox -->
									<div class="attentionbox_inner">
										<h3 class="attentionbox_label">重要なお知らせ</h3>
										<div class="news_tbox">
											<div class="news_tbox_inner">
												<?php
												$arg = array(
												'posts_per_page' => -1, // 表示する件数
												'orderby' => 'date', // 日付でソート
												'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
												'category_name' => 'attention' // 表示したいカテゴリーのスラッグを指定
												);
												$posts = get_posts( $arg );
												if( $posts ): ?>
												<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
													<div class="attention_news_item">
														<p class="news_tbox_date en"><?php the_time( 'Y/m/d' ); ?></p>
														<?php if( get_field('pdf') ) : ?><a href="<?php the_field('pdf'); ?>" class="news_tbox_atxt t_red" target="_blank"><?php elseif( get_field('URL') ) : ?><a href="<?php the_field('URL'); ?>" class="news_tbox_atxt t_red"><?php else: ?><a href="<?php the_permalink(); ?>" class="news_tbox_atxt t_red"><?php endif; ?><?php the_title(); ?></a>
													</div>
												<?php endforeach; ?>
												<?php endif; wp_reset_postdata(); ?>
											</div>
										</div>
									</div>
								</article><!-- /.attentionbox -->
						<?php endif ?>


                        <article class="news_container">
                            <h2 class="mttls">
                                <span class="mttls_en en">NEWS</span>
                                <span class="mttls_ja">お知らせ</span>
                            </h2>
                            <div class="news_tboxset">

                                <div class="news_tbox_tset">
									<?php
									$arg = array(
									'posts_per_page' => 3, // 表示する件数
									'orderby' => 'date', // 日付でソート
									'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
									'category_name' => 'news' // 表示したいカテゴリーのスラッグを指定
									);
									$posts = get_posts( $arg );
									if( $posts ): ?>
									<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
									<div class="news_tbox">
											<p class="news_tbox_date en"><?php the_time( 'Y/m/d' ); ?></p>
										<?php if( get_field('pdf') ) : ?><a href="<?php the_field('pdf'); ?>" class="news_tbox_atxt" target="_blank"><?php elseif( get_field('URL') ) : ?><a href="<?php the_field('URL'); ?>" class="news_tbox_atxt"><?php else: ?><a href="<?php the_permalink(); ?>" class="news_tbox_atxt"><?php endif; ?><?php the_title(); ?></a>
										</div>
									<?php endforeach; ?>
									<?php endif; wp_reset_postdata(); ?>
                                    <a href="<?php bloginfo('url'); ?>/news/" class="txtbtn mt20 smt40"><span>その他のお知らせ</span></a>
                                </div>
                                <a href="https://www.h-kyocera.co.jp/data/wp-content/uploads/information_20220125.pdf" target="_blank" class="news_bnr"><img src="<?php bloginfo('template_directory'); ?>/assets/images/bnr_01.png" alt=""></a>
                            </div>
                        </article>
						<?php date_default_timezone_set('Asia/Tokyo'); if ( date("YmdHi") >= "202110010000" ): /*2021年10月01日まで表示*/?>
						<div class="tac" style="margin-bottom: 3em;"><a href="https://h-kyocera-mokkuru.com/" target="_blank" title="Hotel Kyocera Online Shop 商品のご購入はこちら"><img src="<?php bloginfo('template_directory'); ?>/assets/images/bnr_onlinshop.jpg" alt="Online Shop 商品のご購入はこちら"></a></div>
						<?php endif;?>
                    </div>
                </section><!-- /#sc_news -->


                <section id="sc_info_top" class="sc_info content bg_gray"><!-- #sc_info -->
                    <div class="ptb_sps inner_m">
                        <h2 class="mttls tac mb25 smb20">
                            <span class="mttls_en en">INFORMATION</span>
                            <span class="mttls_ja">インフォメーション</span>
                        </h2>
                        <nav class="btns sp_nowrap sort_evt mb50 smb15 spl20">
                            <a href="#" class="roundbtn" data-target="cat_new"><span>お知らせ</span></a>
						<?php $chosen_id = 46; $thisCat = get_category($chosen_id); if ($thisCat->count != 0 ) :?>
                            <a href="#" class="roundbtn" data-target="cat_stay"><span>ご宿泊</span></a>
						<?php endif ?>
						<?php $chosen_id = 9; $thisCat = get_category($chosen_id); if ($thisCat->count != 0 ) :?>
                            <a href="#" class="roundbtn" data-target="cat_restaurant"><span>レストラン</span></a>
						<?php endif ?>
						<?php $chosen_id = 4; $thisCat = get_category($chosen_id); if ($thisCat->count != 0 ) :?>
                            <a href="#" class="roundbtn" data-target="cat_event"><span>イベント</span></a>
						<?php endif ?>
						<?php $chosen_id = 71; $thisCat = get_category($chosen_id); if ($thisCat->count != 0 ) :?>
                            <a href="#" class="roundbtn" data-target="cat_banquet"><span>宴会</span></a>
						<?php endif ?>
						<?php $chosen_id = 45; $thisCat = get_category($chosen_id); if ($thisCat->count != 0 ) :?>
                            <a href="#" class="roundbtn" data-target="cat_relaxation"><span>温泉</span></a>
						<?php endif ?>
						<?php $chosen_id = 21; $thisCat = get_category($chosen_id); if ($thisCat->count != 0 ) :?>
                            <a href="#" class="roundbtn" data-target="cat_shop"><span>ショップ</span></a>
						<?php endif ?>
                        </nav>
                        <article class="info_container" data-maxview=6>
							<?php
							$arg = array(
							'posts_per_page' => 6, // 表示する件数
							'orderby' => 'date', // 日付でソート
							'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
							'category_name' => 'info' // 表示したいカテゴリーのスラッグを指定
							);
							$posts = get_posts( $arg );
							if( $posts ): ?>
							<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
								<?php $cats = get_the_category();?>
								<div class="info_item cat_new">
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
									
									
							<?php //ご宿泊
							$arg = array(
							'posts_per_page' => 6, // 表示する件数
							'orderby' => 'date', // 日付でソート
							'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
							'category_name' => 'stay_info' // 表示したいカテゴリーのスラッグを指定
							);
							$posts = get_posts( $arg );
							if( $posts ): ?>
							<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
								<?php $cats = get_the_category();?>
								<div class="info_item cat_stay">
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
  									
							<?php //レストラン
							$arg = array(
							'posts_per_page' => 6, // 表示する件数
							'orderby' => 'date', // 日付でソート
							'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
							'category_name' => 'restaurant_info' // 表示したいカテゴリーのスラッグを指定
							);
							$posts = get_posts( $arg );
							if( $posts ): ?>
							<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
								<?php $cats = get_the_category();?>
								<div class="info_item cat_restaurant">
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
									
							<?php //イベント
							$arg = array(
							'posts_per_page' => 6, // 表示する件数
							'orderby' => 'date', // 日付でソート
							'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
							'category_name' => 'event_info' // 表示したいカテゴリーのスラッグを指定
							);
							$posts = get_posts( $arg );
							if( $posts ): ?>
							<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
								<?php $cats = get_the_category();?>
								<div class="info_item cat_event">
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
									
							<?php //宴会
							$arg = array(
							'posts_per_page' => 6, // 表示する件数
							'orderby' => 'date', // 日付でソート
							'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
							'category_name' => 'banquet_info' // 表示したいカテゴリーのスラッグを指定
							);
							$posts = get_posts( $arg );
							if( $posts ): ?>
							<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
								<?php $cats = get_the_category();?>
								<div class="info_item cat_banquet">
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
									
							<?php //温泉
							$arg = array(
							'posts_per_page' => 6, // 表示する件数
							'orderby' => 'date', // 日付でソート
							'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
							'category_name' => 'relaxation_info' // 表示したいカテゴリーのスラッグを指定
							);
							$posts = get_posts( $arg );
							if( $posts ): ?>
							<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
								<?php $cats = get_the_category();?>
								<div class="info_item cat_relaxation">
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
									
 							<?php //ショップ
							$arg = array(
							'posts_per_page' => 6, // 表示する件数
							'orderby' => 'date', // 日付でソート
							'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
							'category_name' => 'shop_info' // 表示したいカテゴリーのスラッグを指定
							);
							$posts = get_posts( $arg );
							if( $posts ): ?>
							<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
								<?php $cats = get_the_category();?>
								<div class="info_item cat_shop">
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
                        <a href="<?php bloginfo('url'); ?>/info/" class="txtbtn mauto smt15"><span>その他インフォメーション</span></a>
                    </div>
                </section><!-- /#sc_info -->


                <section id="sc_info_btm" class="sc_info content bg_gray"><!-- #sc_info -->
                    <div class="ptb_sps pb80 spb50 spt0 inner_m">
                        <article class="bnr_container">
                            <div class="bnr_item bnr_item_m">
                                <figure class="bnr_item_img"><span data-image="<?php bloginfo('template_directory'); ?>/assets/images/img_info_wedding.jpg"></span></figure>
                                <h2 class="w_bttls tac">
                                    <span class="mttls_en en">WEDDING</span>
                                    <span class="mttls_ja">ウエディング</span>
                                </h2>
                                <a href="https://www.kyocera-wedding.jp/" class="hitarea" target="_blank"></a>
                            </div>
                            <div class="bnr_item bnr_item_m">
                                <figure class="bnr_item_img"><span data-image="<?php bloginfo('template_directory'); ?>/assets/images/img_info_stay.jpg"></span></figure>
                                <h2 class="w_bttls tac">
                                    <span class="mttls_en en">STAY</span>
                                    <span class="mttls_ja">宿泊</span>
                                </h2>
                                <a href="<?php bloginfo('url'); ?>/stay/" class="hitarea"></a>
                            </div>
                            <div class="bnr_item bnr_item_m">
                                <figure class="bnr_item_img"><span data-image="<?php bloginfo('template_directory'); ?>/assets/images/img_info_restaurant.jpg"></span></figure>
                                <h2 class="w_bttls tac">
                                    <span class="mttls_en en">RESTAURANTS&BAR</span>
                                    <span class="mttls_ja">レストラン&バー</span>
                                </h2>
                                <a href="<?php bloginfo('url'); ?>/restaurant/" class="hitarea"></a>
                            </div>
                            <div class="bnr_item bnr_item_m">
                                <figure class="bnr_item_img"><span data-image="<?php bloginfo('template_directory'); ?>/assets/images/img_info_convention.jpg"></span></figure>
                                <h2 class="w_bttls tac">
                                    <span class="mttls_en en">CONVENTION&BANQUET</span>
                                    <span class="mttls_ja">宴会場</span>
                                </h2>
                                <a href="<?php bloginfo('url'); ?>/banquet/" class="hitarea"></a>
                            </div>
                            <div class="bnr_item bnr_item_s">
                                <figure class="bnr_item_img"><span data-image="<?php bloginfo('template_directory'); ?>/assets/images/img_info_relaxation.jpg"></span></figure>
                                <h2 class="w_bttls tac">
                                    <span class="mttls_en en">RELAXATION</span>
                                    <span class="mttls_ja">温泉・スパ・プール・ジム</span>
                                </h2>
                                <a href="<?php bloginfo('url'); ?>/relaxation/" class="hitarea"></a>
                            </div>
                            <div class="bnr_item bnr_item_s">
                                <figure class="bnr_item_img"><span data-image="<?php bloginfo('template_directory'); ?>/assets/images/img_info_shop.jpg"></span></figure>
                                <h2 class="w_bttls tac">
                                    <span class="mttls_en en">SHOP</span>
                                    <span class="mttls_ja">ショップ</span>
                                </h2>
                                <a href="<?php bloginfo('url'); ?>/shop/" class="hitarea"></a>
                            </div>
                            <div class="bnr_item bnr_item_s">
                                <figure class="bnr_item_img"><span data-image="<?php bloginfo('template_directory'); ?>/assets/images/img_info_app.jpg"></span></figure>
                                <h2 class="w_bttls tac">
                                    <span class="mttls_en en">APP MEMBER’S</span>
                                    <span class="mttls_ja">アプリメンバーズ</span>
                                </h2>
                                <a href="<?php bloginfo('url'); ?>/members/" class="hitarea"></a>
                            </div>
                        </article>
                    </div>
                </section>

                <section id="sc_location" class="content">
                    <figure id="img_location_sp" class="onlySp"><img src="<?php bloginfo('template_directory'); ?>/assets/images/img_location_sp.jpg" alt=""></figure>
                    <div class="inner_s">
                        <article class="loc_bluebox">
                            <div class="loc_bluebox_inner">
                                <h2 class="w_bttls_b tac">
                                    <span class="mttls_en en">LOCATION</span>
                                    <span class="mttls_ja">ロケーション</span>
                                </h2>
                                <p class="loc_bluebox_txt">
                                    北に天孫降臨神話の霧島連山、南に噴煙たなびく桜島を望む、自然と歴史に包まれたベストアクセス＆ロケーション
                                </p>
                                <a href="<?php bloginfo('url'); ?>/access/" class="squarebtn_arrow mauto"><span>交通のご案内</span></a>
                            </div>
                        </article>
                    </div>
                </section>
				<script src="https://tabiiro.jp/magazine/_common/js/bnr.js" type="text/javascript"></script>
                <nav id="bnr_section" class="inner">
                    <div class="bnrbtns">
                        <a href="javascript:fullscreen('https://tabiiro.jp/magazine/_a/46_kyocera/book.html');" class="a_bnr"><span><img src="https://tabiiro.jp/magazine/_a/46_kyocera/h230_110.jpg" alt="旅色に紹介されました"></span></a>
                        <!--<a href="https://trip-ai.jp/lp/305754/?route_cd=yado" class="a_bnr" target="_blank"><span><img src="<?php bloginfo('template_directory'); ?>/assets/images/bnr_s_02.jpg" alt="トリップAIコンシェルジュ"></span></a>-->
                    </div>
                </nav>
                

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

<?php
$arg = array(
'post_type' => array('topmovie'),
'posts_per_page' => 1, // 表示する件数
);
$posts = get_posts( $arg );
if( $posts ): ?>
<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
	<script>
		var ytID;
		var _w = $(window).width();
		if(_w <= 768)  ytID = '<?php if(get_field('スマホ')): ?><?php the_field('スマホ'); ?><?php else: ?>TEYWKmaZPck<?php endif; ?>'; //for SP
		else ytID = '<?php if(get_field('PC')): ?><?php the_field('PC'); ?><?php else: ?>uGz1nVQD2Ec<?php endif; ?>'; //for PC
	</script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
<?php endforeach; ?>
<?php endif; wp_reset_postdata(); ?>   	
<?php get_footer(); ?>