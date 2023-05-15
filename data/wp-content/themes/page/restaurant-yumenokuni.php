<?php
/*
Template Name: レストラン＆バー - バイキングレストラン 夢の国
*/
?>
<?php get_header(); ?>
<div id="wrapper"><!-- #wrapper -->

	<?php include(TEMPLATEPATH . '/inc/header.php'); ?>

	<main id="maincontainer" class="container"><!-- #maincontainer -->

		<div class="main_bloc">

			<section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/yumenokuni/lkv_img_yumenokuni@2x.jpg"><!-- #kv -->
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
							<span>バイキングレストラン 夢の国</span>
						</p>
					</div>
				</article><!-- /#breadcrumb -->

				<section class="content">
					<div class="ptb_sps pt0 pb30 inner_m sp_inner_b">
						<h2 class="mttls tac mb18 smb12">
							<span class="mttls_en en">BUFFET RESTAURANT</span>
							<span class="mttls_ja">バイキングレストラン 夢の国</span>
						</h2>
						<article class="tslide_container mb90 smb40">
							<div class="tslide_ibox imgslidesB">
								<figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/yumenokuni/img_yumenokuni01.jpg"></figure>
								<figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/yumenokuni/img_yumenokuni02.jpg"></figure>
								<figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/yumenokuni/img_yumenokuni03.jpg"></figure>
								<figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/yumenokuni/img_yumenokuni04.jpg"></figure>
							</div>
							<div class="tslide_tbox">
								<div class="tslide_tbox_inner">
									<h5 class="tslide_tbox_stl en">CONCEPT</h5>
									<h2 class="tslide_tbox_ttl ja-min">
										明るい自然光が差し込む開放的なカジュアルレストラン「夢の国」
									</h2>
									<p class="tslide_tbox_txt">
										おいしいものをお好きなだけ！ありとあらゆるメニューが揃う美食のドリームランドで、お腹いっぱいご賞味ください。<br>
										女性に嬉しい豊富なデザートや本場鹿児島の郷土メニューに焼酎も多数取り揃えております。
									</p>
								</div>
							</div>
						</article>


						<?php
						$chosen_idA = 66;
						$thisCatA = get_category($chosen_idA);
						$chosen_idB = 67;
						$thisCatB = get_category($chosen_idB);
						$chosen_idC = 68;
						$thisCatC = get_category($chosen_idC);
						if ($thisCatA->count != 0 || $thisCatB->count != 0 || $thisCatC->count != 0) :
						?>
							<h2 class="mttls tac mb55 smb15">
								<span class="mttls_en en">MENU</span>
								<span class="mttls_ja">メニュー</span>
							</h2>
							<div class="inner_xs sp_inner_b mb40 smb30">
								<article class="itbox_c">
									<?php
									if ($thisCatA->count != 0) : ?>
										<a href="<?php bloginfo('url'); ?>/yumenokuni_info/yumenokuni-lunch/" class="itbox_item">
											<div class="itbox_item_inner">
												<figure class="itbox_item_img">
													<img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/yumenokuni/img_yumenokuni_lunch.jpg" alt="" />
												</figure>
												<h3 class="itbox_item_ttl ja-min">夢の国ランチ</h3>
												<p class="itbox_item_txt">夢の国のランチメニューをご紹介いたします。</p>
											</div>
										</a>
									<?php endif ?>
									<?php
									if ($thisCatB->count != 0) : ?>
										<a href="<?php bloginfo('url'); ?>/yumenokuni_info/yumenokuni-dinner/" class="itbox_item">
											<div class="itbox_item_inner">
												<figure class="itbox_item_img">
													<img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/yumenokuni/img_yumenokuni_dinner.jpg" alt="" />
												</figure>
												<h3 class="itbox_item_ttl ja-min">夢の国ディナー</h3>
												<p class="itbox_item_txt">夢の国のディナーメニューをご紹介いたします。</p>
											</div>
										</a>
									<?php endif ?>
									<?php
									if ($thisCatC->count != 0) : ?>
										<a href="<?php bloginfo('url'); ?>/yumenokuni_info/yumenokuni-planning/" class="itbox_item">
											<div class="itbox_item_inner">
												<figure class="itbox_item_img">
													<img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/yumenokuni/img_yumenokuni_planning.jpg" alt="" />
												</figure>
												<h3 class="itbox_item_ttl ja-min">夢の国企画</h3>

												<p class="itbox_item_txt">夢の国をよりお楽しみ頂くために、特別なプランをご用意しております。</p>
											</div>
										</a>
									<?php endif ?>
								</article>
							</div>
						<?php endif ?>



						<div class="ptb_sps pt50 pb10 spb10 inner">
							<h2 class="mttls tac mb18 smb12">
								<span class="mttls_en en">PRICE</span>
								<span class="mttls_ja">料金</span>
							</h2>
						</div>

						<?php
						date_default_timezone_set('Asia/Tokyo');
						if (date('YmdHm') > "202103312359" || is_user_logged_in()) : ?>

							<article class="inner_sb pb80 spb60 sp_inner_b pl10 pr10 sfs12">
								<table>
									<tbody>
										<tr>
											<th style="width: 25%;">&nbsp;</th>
											<th class="sub">大人</th>
											<th class="sub">ホテルアプリ会員<br>シニア(65歳以上)<br>中高生</th>
											<th class="sub">小学生</th>
											<th class="sub">4歳以上</th>
											<th class="sub">3歳以下</th>
										</tr>
										<tr>
											<th class="sub">ランチタイム</th>
											<td><!--1,870-->1,980円</td>
											<td><!--1,760-->1,870円</td>
											<td>1,100円</td>
											<td>660円</td>
											<td>220円</td>
										</tr>
										<tr>
											<th class="sub">ディナータイム</th>
											<?php if (date_i18n("Ymd") <= "20230331") : ?>
												<td>3,080円</td>
												<td>2,970円</td>
												<td>1,760円</td>
												<td>990円</td>
												<td>440円</td>
											<?php else : ?>
												<td>3,400円</td>
												<td>3,200円</td>
												<td>1,870円</td>
												<td>1,100円</td>
												<td>550円</td>
											<?php endif; ?>
										</tr>
									</tbody>
								</table>
								<p class="fs14 tar">※0歳は無料</p>
							</article>

						<?php else : ?>

							<article class="inner_sb pb80 spb60 sp_inner_b pl10 pr10 sfs12">
								<table>
									<tbody>
										<tr>
											<th style="width: 25%;">&nbsp;</th>
											<th class="sub">大人</th>
											<th class="sub">小学生</th>
											<th class="sub">4歳以上</th>
											<th class="sub">3歳以下</th>
										</tr>
										<tr>
											<th class="sub">ランチタイム</th>
											<td>1,650円</td>
											<td>1,100円</td>
											<td>660円</td>
											<td>220円</td>
										</tr>
										<tr>
											<th class="sub">ディナータイム</th>
											<td>2,750円</td>
											<td>1,650円</td>
											<td>880円</td>
											<td>330円</td>
										</tr>
									</tbody>
								</table>
								<p class="fs14 tar">※0歳は無料</p>
							</article>

						<?php endif; ?>



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
									'category_name' => 'yumenokuni_info' // 表示したいカテゴリーのスラッグを指定
								);
								$posts = get_posts($arg);
								if ($posts) : ?>
									<?php foreach ($posts as $post) : setup_postdata($post); ?>
										<?php $cats = get_the_category(); ?>
										<div class="info_item">
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
							<a href="<?php bloginfo('url'); ?>/yumenokuni_info/" class="txtbtn mauto smt15"><span>夢の国の情報一覧</span></a>
						</div>
				</section>
				<?php include(TEMPLATEPATH . '/inc/banner1.php'); ?>

				<section class="content bg_gray">
					<div class="ptb_sps inner">
						<h2 class="mttls tac mb58 smb30">
							<span class="mttls_en en">INFORMATION</span>
							<span class="mttls_ja">夢の国のご案内</span>
						</h2>
						<article class="id_container_s mb80 smb10">
							<figure class="id_img onlySp" data-image="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/yumenokuni/img_info_yumenokuni.jpg"></figure>
							<figure class="id_img onlyPc"><img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/yumenokuni/img_info_yumenokuni.jpg" alt=""></figure>
							<div class="id_tbox">
								<div class="id_tbox_inner">
									<article class="mb10">
										<dl class="dl_tnses_m">
											<dt class="pt15">営業時間</dt>
											<dd class="pt15">
												<span class="hourbox_m">朝食</span> 6:30～10:00（L.I. 9:30）<br>
												<span class="hourbox_m">ランチ</span>11:30～14:30（L.I. 14:00）<br>
												<span class="hourbox_m">ディナー</span>17:00～21:00（L.I. 19:30）
											</dd>
										</dl>
										<dl class="dl_tnses_m">
											<dt>定休日</dt>
											<dd>毎週月曜日</dd>
										</dl>
										<dl class="dl_tnses_m">
											<dt>TEL</dt>
											<dd><?php if (is_mobile()) : ?><a href="tel:0995-43-7617" onclick="gtag('event', 'tel-tap', {'event_category':'click','event_label': 'yumenokuni'});">0995-43-7617</a><?php else : ?>0995-43-7617<?php endif; ?></dd>
										</dl>
										<dl class="dl_tnses_m">
											<dt>最大収容人数</dt>
											<dd>ホール 70席／団体席 44席</dd>
										</dl>
									</article>
									<p class="fs13">※全席ホール席、全席禁煙となります。</p>
								</div>
							</div>
						</article>
						<div class="btns mb40 smb0">
							<a href="<?php bloginfo('url'); ?>/restaurant/reservation/?post_id=<?php echo $post->ID; ?>&option_id=4" class="squarebtn_arrow_gd smb30"><span>予約はこちら</span></a>
							<div class="tellbox">
								<p class="fs13 mt2">お電話でのご予約・お問い合わせはこちら</p>
								<p class="tellno en"><?php if (is_mobile()) : ?><a href="tel:0995-43-7617" onclick="gtag('event', 'tel-tap', {'event_category':'click','event_label': 'yumenokuni'});"><span>TEL</span> 0995-43-7617</a><?php else : ?><span>TEL</span> 0995-43-7617<?php endif; ?></p>
							</div>
						</div>
					</div>
				</section>

				<?php include(TEMPLATEPATH . '/inc/restaurant_list.php'); ?>
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