<?php
/*
Template Name: レストラン＆バー
*/
?>
<?php get_header(); ?>
<div id="wrapper"><!-- #wrapper -->

	<?php include(TEMPLATEPATH . '/inc/header.php'); ?>

	<main id="maincontainer" class="container"><!-- #maincontainer -->

		<div class="main_bloc">

			<section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/lkv_img_restaurant_bar@2x.jpg"><!-- #kv -->
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
							<span>レストラン＆バー</span>
						</p>
					</div>
				</article><!-- /#breadcrumb -->

				<!--<section class="content">
                    <div class="ptb_sps pt0 pb45 spb30 bd_btm inner_m sp_inner_b">
                        <h2 class="mttls tac mb18 smb12">
                            <span class="mttls_en en">INFORMATION</span>
                            <span class="mttls_ja">インフォメーション</span>
                        </h2>
                        <nav class="btns sp_nowrap sort_evt mb50 smb15 spl20">
                            <a href="#" class="roundbtn btnbg_w" data-target="cat_new"><span>レストラン</span></a>
							<?php $chosen_id = 20;
							$thisCat = get_category($chosen_id);
							if ($thisCat->count != 0) : ?>
                            <a href="#" class="roundbtn btnbg_w" data-target="cat_delsole"><span>デルソーレ</span></a>
							<?php endif ?>
							<?php $chosen_id = 23;
							$thisCat = get_category($chosen_id);
							if ($thisCat->count != 0) : ?>
                            <a href="#" class="roundbtn btnbg_w" data-target="cat_kyoharuka"><span>京はるか</span></a>
							<?php endif ?>
							<?php $chosen_id = 24;
							$thisCat = get_category($chosen_id);
							if ($thisCat->count != 0) : ?>
                            <a href="#" class="roundbtn btnbg_w" data-target="cat_amore"><span>アモーレ</span></a>
							<?php endif ?>
							<?php $chosen_id = 25;
							$thisCat = get_category($chosen_id);
							if ($thisCat->count != 0) : ?>
                            <a href="#" class="roundbtn btnbg_w" data-target="cat_yumenokuni"><span>夢の国</span></a>
							<?php endif ?>
                        </nav>
                        <article class="info_container mb30" data-maxview=6>
 							<?php
								$arg = array(
									'posts_per_page' => 6, // 表示する件数
									'orderby' => 'date', // 日付でソート
									'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
									'category_name' => 'restaurant_info' // 表示したいカテゴリーのスラッグを指定
								);
								$posts = get_posts($arg);
								if ($posts) : ?>
							<?php foreach ($posts as $post) : setup_postdata($post); ?>
								<?php $cats = get_the_category(); ?>    
                       	    	<div class="info_item cat_new">
									<?php if (has_post_thumbnail()) : ?>
										<?php $thumbnail_id = get_post_thumbnail_id();
											$eye_img = wp_get_attachment_image_src($thumbnail_id, 'large'); ?>	
										<figure class="info_item_img"><span data-image="<?php echo $eye_img[0]; ?>"></span></figure>
									<?php endif; ?>
									<div class="info_tbox">
										<div class="postbox">
											<p class="post_date en"><?php the_time('Y/m/d'); ?></p>
											<span class="post_line">|</span>
											<p class="post_tags"><span><?php the_category(', '); ?></span></p>
										</div>
										<h3 class="info_ttl"><?php the_title(); ?></h3>
									</div>
									<?php if (get_field('pdf')) : ?><a href="<?php the_field('pdf'); ?>" class="hitarea" target="_blank"><?php elseif (get_field('URL')) : ?><a href="<?php the_field('URL'); ?>" class="hitarea"><?php else : ?><a href="<?php the_permalink(); ?>" class="hitarea"><?php endif; ?></a>
								</div>
							<?php endforeach; ?>
							<?php endif;
								wp_reset_postdata(); ?>
									
									
 							<?php //デルソーレ
								$arg = array(
									'posts_per_page' => 6, // 表示する件数
									'orderby' => 'date', // 日付でソート
									'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
									'category_name' => 'delsole_info' // 表示したいカテゴリーのスラッグを指定
								);
								$posts = get_posts($arg);
								if ($posts) : ?>
							<?php foreach ($posts as $post) : setup_postdata($post); ?>
								<?php $cats = get_the_category(); ?>    
                       	    	<div class="info_item cat_delsole">
									<?php if (has_post_thumbnail()) : ?>
										<?php $thumbnail_id = get_post_thumbnail_id();
											$eye_img = wp_get_attachment_image_src($thumbnail_id, 'medium'); ?>	
										<figure class="info_item_img"><span data-image="<?php echo $eye_img[0]; ?>"></span></figure>
									<?php endif; ?>
									<div class="info_tbox">
										<div class="postbox">
											<p class="post_date en"><?php the_time('Y/m/d'); ?></p>
											<span class="post_line">|</span>
											<p class="post_tags"><span><?php the_category(', '); ?></span></p>
										</div>
										<h3 class="info_ttl"><?php the_title(); ?></h3>
									</div>
									<?php if (get_field('pdf')) : ?><a href="<?php the_field('pdf'); ?>" class="hitarea" target="_blank"><?php elseif (get_field('URL')) : ?><a href="<?php the_field('URL'); ?>" class="hitarea"><?php else : ?><a href="<?php the_permalink(); ?>" class="hitarea"><?php endif; ?></a>
								</div>
							<?php endforeach; ?>
							<?php endif;
								wp_reset_postdata(); ?>
									
 							<?php //京はるか
								$arg = array(
									'posts_per_page' => 6, // 表示する件数
									'orderby' => 'date', // 日付でソート
									'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
									'category_name' => 'kyoharuka_info' // 表示したいカテゴリーのスラッグを指定
								);
								$posts = get_posts($arg);
								if ($posts) : ?>
							<?php foreach ($posts as $post) : setup_postdata($post); ?>
								<?php $cats = get_the_category(); ?>    
                       	    	<div class="info_item cat_kyoharuka">
									<?php if (has_post_thumbnail()) : ?>
										<?php $thumbnail_id = get_post_thumbnail_id();
											$eye_img = wp_get_attachment_image_src($thumbnail_id, 'large'); ?>	
										<figure class="info_item_img"><span data-image="<?php echo $eye_img[0]; ?>"></span></figure>
									<?php endif; ?>
									<div class="info_tbox">
										<div class="postbox">
											<p class="post_date en"><?php the_time('Y/m/d'); ?></p>
											<span class="post_line">|</span>
											<p class="post_tags"><span><?php the_category(', '); ?></span></p>
										</div>
										<h3 class="info_ttl"><?php the_title(); ?></h3>
									</div>
									<?php if (get_field('pdf')) : ?><a href="<?php the_field('pdf'); ?>" class="hitarea" target="_blank"><?php elseif (get_field('URL')) : ?><a href="<?php the_field('URL'); ?>" class="hitarea"><?php else : ?><a href="<?php the_permalink(); ?>" class="hitarea"><?php endif; ?></a>
								</div>
							<?php endforeach; ?>
							<?php endif;
								wp_reset_postdata(); ?>
									
									
 							<?php //アモーレ
								$arg = array(
									'posts_per_page' => 6, // 表示する件数
									'orderby' => 'date', // 日付でソート
									'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
									'category_name' => 'amore_info' // 表示したいカテゴリーのスラッグを指定
								);
								$posts = get_posts($arg);
								if ($posts) : ?>
							<?php foreach ($posts as $post) : setup_postdata($post); ?>
								<?php $cats = get_the_category(); ?>    
                       	    	<div class="info_item cat_amore">
									<?php if (has_post_thumbnail()) : ?>
										<?php $thumbnail_id = get_post_thumbnail_id();
											$eye_img = wp_get_attachment_image_src($thumbnail_id, 'medium'); ?>	
										<figure class="info_item_img"><span data-image="<?php echo $eye_img[0]; ?>"></span></figure>
									<?php endif; ?>
									<div class="info_tbox">
										<div class="postbox">
											<p class="post_date en"><?php the_time('Y/m/d'); ?></p>
											<span class="post_line">|</span>
											<p class="post_tags"><span><?php the_category(', '); ?></span></p>
										</div>
										<h3 class="info_ttl"><?php the_title(); ?></h3>
									</div>
									<?php if (get_field('pdf')) : ?><a href="<?php the_field('pdf'); ?>" class="hitarea" target="_blank"><?php elseif (get_field('URL')) : ?><a href="<?php the_field('URL'); ?>" class="hitarea"><?php else : ?><a href="<?php the_permalink(); ?>" class="hitarea"><?php endif; ?></a>
								</div>
							<?php endforeach; ?>
							<?php endif;
								wp_reset_postdata(); ?>
									
									
 							<?php //夢の国
								$arg = array(
									'posts_per_page' => 6, // 表示する件数
									'orderby' => 'date', // 日付でソート
									'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
									'category_name' => 'yumenokuni_info' // 表示したいカテゴリーのスラッグを指定
								);
								$posts = get_posts($arg);
								if ($posts) : ?>
							<?php foreach ($posts as $post) : setup_postdata($post); ?>
								<?php $cats = get_the_category(); ?>    
                       	    	<div class="info_item cat_yumenokuni">
									<?php if (has_post_thumbnail()) : ?>
										<?php $thumbnail_id = get_post_thumbnail_id();
											$eye_img = wp_get_attachment_image_src($thumbnail_id, 'large'); ?>	
										<figure class="info_item_img"><span data-image="<?php echo $eye_img[0]; ?>"></span></figure>
									<?php endif; ?>
									<div class="info_tbox">
										<div class="postbox">
											<p class="post_date en"><?php the_time('Y/m/d'); ?></p>
											<span class="post_line">|</span>
											<p class="post_tags"><span><?php the_category(', '); ?></span></p>
										</div>
										<h3 class="info_ttl"><?php the_title(); ?></h3>
									</div>
									<?php if (get_field('pdf')) : ?><a href="<?php the_field('pdf'); ?>" class="hitarea" target="_blank"><?php elseif (get_field('URL')) : ?><a href="<?php the_field('URL'); ?>" class="hitarea"><?php else : ?><a href="<?php the_permalink(); ?>" class="hitarea"><?php endif; ?></a>
								</div>
							<?php endforeach; ?>
							<?php endif;
								wp_reset_postdata(); ?>
                        </article>
                        <a href="<?php bloginfo('url'); ?>/restaurant_info/" class="txtbtn mauto smt15"><span>その他のレストラン情報一覧</span></a>
                    </div>
                </section>-->

				<section class="content inner_m">
					<div class="ptb_sps inner_sl sp_inner_b">
						<h2 class="mttls tac mb60 smb30">
							<span class="mttls_en en">RESTAURANT</span>
							<span class="mttls_ja">レストラン一覧</span>
						</h2>
						<div class="imgbox_typeC">
							<div class="itd_item ov_op">
								<div class="itd_item_inner mb80 smb40">
									<figure class="mb15"><img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/img_delsole.jpg" alt=""></figure>
									<div class="itd_item_tbox_en">
										<h2 class="read_ttl_m ja-min">
											洋食レストラン　デルソーレ
										</h2>
										<p class="read_txt line pb20">
											広々としたオープンスペースと、目の前の天降川、豊かな緑、 霧島連山を望む巨大パノラマは、圧倒的な開放感。
										</p>
										<dl class="openhours">
											<dt>営業時間</dt>
											<dd>
												<span class="hourbox">喫茶</span>オールタイム<br>
												<span class="hourbox">ランチ</span>11:30～14:30（L.O. 14:00）<br>
												<span class="hourbox">ディナー</span>17:30～21:00（L.O. 19:30）
											</dd>
										</dl>
										<dl class="openhours">
											<dt>定休日</dt>
											<dd>
												毎週水曜日
											</dd>
										</dl>
									</div>
								</div>
								<a href="<?php bloginfo('url'); ?>/restaurant/delsole/" class="hitarea"></a>
							</div>
							<div class="itd_item ov_op">
								<div class="itd_item_inner mb80 smb40">
									<figure class="mb15"><img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/img_kyoharuka.jpg" alt=""></figure>
									<div class="itd_item_tbox_en">
										<h2 class="read_ttl_m ja-min">
											日本料理　京はるか
										</h2>
										<p class="read_txt line pb20">
											鹿児島が誇る豊富な食材を使用した季節感溢れる彩りと、料理長が創造する芸術的な料理の数々。
										</p>
										<dl class="openhours">
											<dt>営業時間</dt>
											<dd>
												<span class="hourbox">ランチ</span>11:30～14:30（L.O. 14:00）<br>
												<span class="hourbox">ディナー</span>17:30～21:00（L.O. 19:30）
											</dd>
										</dl>
										<dl class="openhours">
											<dt>定休日</dt>
											<dd>
												毎週月曜日、火曜日
											</dd>
										</dl>
									</div>
								</div>
								<a href="<?php bloginfo('url'); ?>/restaurant/kyoharuka/" class="hitarea"></a>
							</div>
							<div class="itd_item ov_op">
								<div class="itd_item_inner mb80 smb40">
									<figure class="mb15"><img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/img_amore.jpg" alt=""></figure>
									<div class="itd_item_tbox_en">
										<h2 class="read_ttl_m ja-min">
											バー　アモーレ
										</h2>
										<p class="read_txt line pb20">
											目前の星空が、大人の時間を演出するロマンチックな夜を豊富な種類の美酒を愉しみながらお過ごしください。
										</p>
										<dl class="openhours">
											<dt>営業時間</dt>
											<dd>
												<?php if (date_i18n("Ymd") <= "20231031") : /*2023年10月31日まで表示*/ ?>
													19:00～23:00（L.O. 22:30）
												<?php else : ?>
													20:00～24:00（L.O. 23:30）
												<?php endif; ?>
											</dd>
										</dl>
										<dl class="openhours">
											<dt>定休日</dt>
											<dd>
												毎週 日曜日・月曜日
											</dd>
										</dl>
									</div>
								</div>
								<a href="<?php bloginfo('url'); ?>/restaurant/amore/" class="hitarea"></a>
							</div>
							<div class="itd_item ov_op">
								<div class="itd_item_inner mb80 smb40">
									<figure class="mb15"><img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/img_yumenokuni.jpg" alt=""></figure>
									<div class="itd_item_tbox_en">
										<h2 class="read_ttl_m ja-min">
											バイキングレストラン　夢の国
										</h2>
										<p class="read_txt line pb20">
											おいしいものをお好きなだけ！ありとあらゆるメニューが揃う美食のドリームランド。
										</p>
										<dl class="openhours">
											<dt>営業時間</dt>
											<dd>
												<span class="hourbox">朝食</span>6:30～10:00（L.I. 9:30）<br>
												<span class="hourbox">ランチ</span>11:30～14:30（L.I. 14:00）<br>
												<span class="hourbox">ディナー</span>17:00～21:00（L.I. 19:30）<br>
											</dd>
										</dl>
										<dl class="openhours">
											<dt>定休日</dt>
											<dd>
												毎週月曜日
											</dd>
										</dl>
									</div>
								</div>
								<a href="<?php bloginfo('url'); ?>/restaurant/yumenokuni/" class="hitarea"></a>
							</div>
						</div>
						<?php include(TEMPLATEPATH . '/inc/banner1.php'); ?>
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