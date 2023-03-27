<?php get_header(); ?>


<div id="wrapper"><!-- #wrapper -->

    <?php include(TEMPLATEPATH . '/inc/header.php'); ?>

    <main id="maincontainer" class="container"><!-- #maincontainer -->
        
        <div class="main_bloc">
			<?php if(in_category('restaurant_info')) : ?>
            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/lkv_img_restaurant_bar@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">RESTAURANT&BAR</span>
                    <span class="mttls_ja">レストラン＆バー</span>
                </h1>
            </section><!-- /#kv -->
			<?php elseif(in_category('delsole_info')||in_category('delsole-lunch')||in_category('delsole-dinner')||in_category('delsole-planning')) : ?>
            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/delsole/lkv_img_delsole@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">RESTAURANT&BAR</span>
                    <span class="mttls_ja">レストラン＆バー</span>
                </h1>
            </section><!-- /#kv -->
			<?php elseif(in_category('kyoharuka_info')||in_category('kyoharuka-lunch')||in_category('kyoharuka-dinner')||in_category('kyoharuka-planning')||in_category('kyoharuka-concluding')) : ?>
            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/kyoharuka/lkv_img_kyoharuka@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">RESTAURANT&BAR</span>
                    <span class="mttls_ja">レストラン＆バー</span>
                </h1>
            </section><!-- /#kv -->
			<?php elseif(in_category('amore_info')||in_category('amore-planning')) : ?>
            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/amore/lkv_img_amore@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">RESTAURANT&BAR</span>
                    <span class="mttls_ja">レストラン＆バー</span>
                </h1>
            </section><!-- /#kv -->
			<?php elseif(in_category('yumenokuni_info')||in_category('yumenokuni-lunch')||in_category('yumenokuni-dinner')||in_category('yumenokuni-planning')) : ?>
            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/yumenokuni/lkv_img_yumenokuni@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">RESTAURANT&BAR</span>
                    <span class="mttls_ja">レストラン＆バー</span>
                </h1>
            </section><!-- /#kv -->
			<?php elseif(in_category('stay_info')) : ?>
            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/stay/lkv_img_stay@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">STAY</span>
                    <span class="mttls_ja">ご宿泊</span>
                </h1>
            </section><!-- /#kv -->
			<?php elseif(in_category('stay_plan')) : ?>
            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/stay/lkv_img_stay@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">STAY</span>
                    <span class="mttls_ja">ご宿泊</span>
                </h1>
            </section><!-- /#kv -->
			<?php elseif(in_category('banquet_info')) : ?>
            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/banquet/lkv_img_banquet@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">CONVENTION&BANQUET</span>
                    <span class="mttls_ja">宴会場</span>
                </h1>
            </section><!-- /#kv -->
			<?php elseif(in_category('relaxation_info')) : ?>
            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/relaxation/lkv_img_relaxation@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">RELAXATION</span>
                    <span class="mttls_ja">温泉・スパ・プール・ジム</span>
                </h1>
            </section><!-- /#kv -->
			<?php elseif(in_category('shop_info')) : ?>
            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/shop/lkv_img_shop@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">SHOP</span>
                    <span class="mttls_ja">ショップ</span>
                </h1>
            </section><!-- /#kv -->
			<?php elseif(in_category('info')) : ?>
            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/shop/lkv_img_shop@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">INFORMATION</span>
                    <span class="mttls_ja">お知らせ</span>
                </h1>
            </section><!-- /#kv -->
			<?php else: ?>
            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/access/lkv_img_access@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">NEWS</span>
                    <span class="mttls_ja">お知らせ</span>
                </h1>
            </section><!-- /#kv -->
			<?php endif; ?>

		<?php wp_reset_query(); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div id="mainsections" class="main_inner">

                <article id="breadcrumb" class="ja-serif"><!-- #breadcrumb -->
                  <div id="breadcrumb_inner" class="inner_m">
                    <p>
                        <a href="<?php bloginfo('url'); ?>/">Home</a>
                        <span class="bcsps">&nbsp;&gt;&nbsp;</span>
						<?php if(in_category('restaurant_info')) : ?>
                       		<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant_info/">インフォメーション</a>
						<?php elseif(in_category('delsole_info')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/delsole/">洋食レストラン デルソーレ</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/delsole_info/">インフォメーション</a>
						<?php elseif(in_category('delsole-lunch')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/delsole/">洋食レストラン デルソーレ</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/delsole_info/">インフォメーション</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/delsole_info/delsole-lunch/">ランチメニュー</a>
						<?php elseif(in_category('delsole-dinner')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/delsole/">洋食レストラン デルソーレ</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/delsole_info/">インフォメーション</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/delsole_info/delsole-dinner/">ディナーメニュー</a>
						<?php elseif(in_category('delsole-planning')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/delsole/">洋食レストラン デルソーレ</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/delsole_info/">インフォメーション</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/delsole_info/delsole-planning/">企画商品</a>
						<?php elseif(in_category('kyoharuka_info')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/kyoharuka/">京はるか</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/kyoharuka_info/">インフォメーション</a>
						<?php elseif(in_category('kyoharuka-lunch')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/kyoharuka/">京はるか</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/kyoharuka_info/">インフォメーション</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/info/restaurant/kyoharuka/kyoharuka-lunch/">昼食メニュー</a>
						<?php elseif(in_category('kyoharuka-dinner')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/kyoharuka/">京はるか</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/kyoharuka_info/">インフォメーション</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/kyoharuka_info/kyoharuka-dinner/">夕食メニュー</a>
						<?php elseif(in_category('kyoharuka-planning')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/kyoharuka/">京はるか</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/kyoharuka_info/">インフォメーション</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/kyoharuka_info/kyoharuka-planning/">企画商品</a>
						<?php elseif(in_category('kyoharuka-concluding')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/kyoharuka/">京はるか</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/kyoharuka_info/">インフォメーション</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/kyoharuka_info/kyoharuka-concluding/">京はるか結納</a>
						<?php elseif(in_category('amore_info')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/amore/">メインバー・アモーレ</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/amore_info/">インフォメーション</a>
						<?php elseif(in_category('amore-planning')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/amore/">メインバー・アモーレ</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/amore_info/">インフォメーション</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/amore_info/amore-planning/">企画商品</a>
						<?php elseif(in_category('yumenokuni_info')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/yumenokuni/">バイキングレストラン 夢の国</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/yumenokuni_info/">インフォメーション</a>
						<?php elseif(in_category('yumenokuni-lunch')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/yumenokuni/">バイキングレストラン 夢の国</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/yumenokuni_info/">インフォメーション</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/yumenokuni_info/yumenokuni-lunch/">ランチメニュー</a>
						<?php elseif(in_category('yumenokuni-dinner')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/yumenokuni/">バイキングレストラン 夢の国</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/yumenokuni_info/">インフォメーション</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/yumenokuni_info/yumenokuni-dinner/">ディナーメニュー</a>						
						<?php elseif(in_category('yumenokuni-planning')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/yumenokuni/">バイキングレストラン 夢の国</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/yumenokuni_info/">インフォメーション</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/yumenokuni_info/yumenokuni-planning/">夢の国企画</a>
						<?php elseif(in_category('stay_info')) : ?>
                       		<a href="<?php bloginfo('url'); ?>/stay/">ご宿泊</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/stay_info/">インフォメーション</a>						
						<?php elseif(in_category('stay_plan')) : ?>
                       		<a href="<?php bloginfo('url'); ?>/stay/">ご宿泊</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/stay/plan/">ご宿泊プラン</a>
						<?php elseif(in_category('banquet_info')) : ?>
                       		<a href="<?php bloginfo('url'); ?>/banquet/">宴会場</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/banquet_info/">インフォメーション</a>							
						<?php elseif(in_category('relaxation_info')) : ?>
                       		<a href="<?php bloginfo('url'); ?>/relaxation/">温泉・スパ・プール・ジム</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/relaxation_info/">インフォメーション</a>	
						<?php elseif(in_category('shop_info')) : ?>
                       		<a href="<?php bloginfo('url'); ?>/shop/">ショップ</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/shop_info/">インフォメーション</a>	
						<?php elseif(in_category('attention')) : ?>
							<a href="<?php bloginfo('url'); ?>/attention/">重要なお知らせ</a>
						<?php else: ?>
                        	<a href="<?php bloginfo('url'); ?>/info/">お知らせ</a>
						<?php endif; ?>
						<span class="bcsps">&nbsp;&gt;&nbsp;</span>
						<span><?php the_title(); ?></span>
                    </p>
                  </div>
                </article><!-- /#breadcrumb -->

                <section id="lsc_column" class="inner_m sp_inner_b"><!-- #lsc_products -->
                    <div id="lsc_column_main">
                        <article class="post_wrapper sp_sps">
                            <div class="postbox">
                                <p class="post_date en"><?php the_time( 'Y/m/d' ); ?></p>
                                <span class="post_line">|</span>
                                <p class="post_tags"><span><?php the_category(', '); ?></span></p>
                            </div>
                            <h1 class="ns_post_bttl"><?php the_title(); ?></h1>
                            <article class="post_contents pb60">
                                <!-- <img src="<?php bloginfo('template_directory'); ?>/assets/images/news/img_detail_img_b01.jpg" alt=""> -->
                                <div class="post_slides mb45 smb25">

									<?php if( have_rows( 'main_images' ) ): ?>

										<?php while( have_rows( 'main_images' ) ): the_row(); ?>
										  <?php
											$img = get_sub_field( 'wpcf-main_images' );
											$url = $img['sizes']['large'];
										  ?>
										  <figure><img src="<?php echo $url ?>"></figure>
										<?php endwhile; ?>

									<?php endif; ?>

                                </div>
                                <div>
									
								<?php if ( post_custom('プランコード') ) : ?>
									<div class="btns mt40 mb40 smb0">
										<a href="./?tripla_booking_widget_open=search&hotel_plan_code=<?php echo get_post_meta($post->ID,'プランコード',true); ?>&is_including_occupied=true" class="squarebtn_arrow_gd smb30 w454"><span>このプランのご予約はこちら</span></a>
									</div>
								<?php endif; ?>
									
									
									<div><?php the_content(__('(more...)')); ?></div>
									
									
								<?php if ( post_custom('プランコード') ) : ?>
									<div class="btns mt40 mb40 smb0">
										<a href="./?tripla_booking_widget_open=search&hotel_plan_code=<?php echo get_post_meta($post->ID,'プランコード',true); ?>&is_including_occupied=true" class="squarebtn_arrow_gd smb30 w454"><span>このプランのご予約はこちら</span></a>
									</div>
								<?php endif; ?>
									
								<?php if(get_post_meta($post->ID,'メールフォーム選択',true) == 'カフェ＆ダイニング デルソーレ予約'): ?>
									<div class="btns mt40 mb40 smb0">
										<a href="<?php bloginfo('url'); ?>/restaurant/reservation/?post_id=<?php echo $post->ID; ?>&option_id=1" class="squarebtn_arrow_gd smb30"><span>予約はこちら</span></a>
									</div>
								<?php elseif (get_post_meta($post->ID,'メールフォーム選択',true) == '日本料理 京はるか予約'): ?>
									<div class="btns mt40 mb40 smb0">
										<a href="<?php bloginfo('url'); ?>/restaurant/reservation/?post_id=<?php echo $post->ID; ?>&option_id=2" class="squarebtn_arrow_gd smb30"><span>予約はこちら</span></a>
									</div>
								<?php elseif (get_post_meta($post->ID,'メールフォーム選択',true) == 'メインバー・アモーレ予約'): ?>
									<div class="btns mt40 mb40 smb0">
										<a href="<?php bloginfo('url'); ?>/restaurant/reservation/?post_id=<?php echo $post->ID; ?>&option_id=3" class="squarebtn_arrow_gd smb30"><span>予約はこちら</span></a>
									</div>
								<?php elseif (get_post_meta($post->ID,'メールフォーム選択',true) == 'バイキングレストラン 夢の国予約'): ?>
									<div class="btns mt40 mb40 smb0">
										<a href="<?php bloginfo('url'); ?>/restaurant/reservation/?post_id=<?php echo $post->ID; ?>&option_id=4" class="squarebtn_arrow_gd smb30"><span>予約はこちら</span></a>
									</div>
								<?php elseif (get_post_meta($post->ID,'メールフォーム選択',true) == 'お問い合わせ'): ?>
									<div class="btns mt40 mb40 smb0">
										<a href="<?php bloginfo('url'); ?>/contact/?post_id=<?php echo $post->ID; ?>" class="squarebtn_arrow_gd smb30"><span>お問い合わせはこちら</span></a>
									</div>
								<?php endif; ?>		
								<?php if ( post_custom('メールフォーム') ) : ?>
									<div class="trustform-box">
										<?php echo do_shortcode(get_post_meta($post->ID,'メールフォーム',TRUE)); ?>
									</div>
								<?php endif; ?>									
									
                                </div>
                            </article>
							
								<?php
								$hostname = $_SERVER['HTTP_HOST'];//ドメインを取得
								if (!empty($_SERVER['HTTP_REFERER']) && (strpos($_SERVER['HTTP_REFERER'],$hostname) !== false)) {
									echo '<a href="' . $_SERVER['HTTP_REFERER'] . '" class="txtbtn mt20 mauto"><span>記事一覧へ戻る</span></a>';
								}
								?>							

                        </article>
                    </div>
				<?php endwhile; else: ?>
				<?php endif; ?>					
                    <?php include( TEMPLATEPATH . '/inc/category_list.php' ); ?>
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
<script type="text/javascript">
$(function() {
    $(document).ready( function() {
        $("input:text.pagetitle").val("<?php the_title();?>[<?php echo the_permalink();?>]");
    });
});
</script>
<?php get_footer(); ?>