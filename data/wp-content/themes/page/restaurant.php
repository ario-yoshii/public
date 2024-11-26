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
												<?php if (date_i18n("Ymd") <= "20240901"): /*2024年9月1日まで表示*/ ?>
													毎週月曜日、火曜日
												<?php else: ?>
													毎週火曜日
												<?php endif; ?>
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
												<!-- 毎週 日曜日・月曜日 -->なし
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