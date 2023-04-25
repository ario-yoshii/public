
<?php get_header(); ?>

<div id="wrapper"><!-- #wrapper -->

    <?php include(TEMPLATEPATH . '/inc/header.php'); ?>

    <main id="maincontainer" class="container"><!-- #maincontainer -->
        
        <div class="main_bloc">
			<?php if(is_category('restaurant_info')) : ?>
            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/lkv_img_restaurant_bar@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">RESTAURANT&BAR</span>
                    <span class="mttls_ja">レストラン＆バー</span>
                </h1>
            </section><!-- /#kv -->
			<?php elseif(is_category('delsole_info')||is_category('delsole-lunch')||is_category('delsole-dinner')||is_category('delsole-planning')) : ?>
            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/delsole/lkv_img_delsole@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">RESTAURANT&BAR</span>
                    <span class="mttls_ja">レストラン＆バー</span>
                </h1>
            </section><!-- /#kv -->
			<?php elseif(is_category('kyoharuka_info')||is_category('kyoharuka-lunch')||is_category('kyoharuka-dinner')||is_category('kyoharuka-planning')||is_category('kyoharuka-concluding')) : ?>
            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/kyoharuka/lkv_img_kyoharuka@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">RESTAURANT&BAR</span>
                    <span class="mttls_ja">レストラン＆バー</span>
                </h1>
            </section><!-- /#kv -->
			<?php elseif(is_category('amore_info')||is_category('amore-planning')) : ?>
            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/amore/lkv_img_amore@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">RESTAURANT&BAR</span>
                    <span class="mttls_ja">レストラン＆バー</span>
                </h1>
            </section><!-- /#kv -->
			<?php elseif(is_category('yumenokuni_info')||is_category('yumenokuni-lunch')||is_category('yumenokuni-dinner')||is_category('yumenokuni-planning')) : ?>
            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/yumenokuni/lkv_img_yumenokuni@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">RESTAURANT&BAR</span>
                    <span class="mttls_ja">レストラン＆バー</span>
                </h1>
            </section><!-- /#kv -->
			<?php elseif(is_category('stay_info')) : ?>
            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/stay/lkv_img_stay@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">STAY</span>
                    <span class="mttls_ja">ご宿泊</span>
                </h1>
            </section><!-- /#kv -->
			<?php elseif(is_category('stay_plan')) : ?>
            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/stay/lkv_img_stay@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">STAY</span>
                    <span class="mttls_ja">ご宿泊</span>
                </h1>
            </section><!-- /#kv -->
			<?php elseif(is_category('banquet_info')) : ?>
            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/banquet/lkv_img_banquet@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">CONVENTION&BANQUET</span>
                    <span class="mttls_ja">宴会場</span>
                </h1>
            </section><!-- /#kv -->
			<?php elseif(is_category('relaxation_info')) : ?>
            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/relaxation/lkv_img_relaxation@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">RELAXATION</span>
                    <span class="mttls_ja">温泉・スパ・プール・ジム</span>
                </h1>
            </section><!-- /#kv -->
			<?php elseif(is_category('shop_info')) : ?>
            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/shop/lkv_img_shop@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">SHOP</span>
                    <span class="mttls_ja">ショップ</span>
                </h1>
            </section><!-- /#kv -->
			<?php elseif(is_category('info')) : ?>
            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/access/lkv_img_access@2x.jpg"><!-- #kv -->
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

            <div id="mainsections" class="main_inner">

                <article id="breadcrumb" class="ja-serif"><!-- #breadcrumb -->
                  <div id="breadcrumb_inner" class="inner_m">
                    <p>
                        <a href="<?php bloginfo('url'); ?>/">Home</a>
                        <span class="bcsps">&nbsp;&gt;&nbsp;</span>
						<?php if(is_category('restaurant_info')) : ?>
                       		<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>インフォメーション</span>
						<?php elseif(is_category('delsole_info')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/delsole/">洋食レストラン デルソーレ</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>インフォメーション</span>
						<?php elseif(is_category('delsole-lunch')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/delsole/">洋食レストラン デルソーレ</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/delsole_info/">インフォメーション</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>デルソーレランチ</span>
						<?php elseif(is_category('delsole-dinner')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/delsole/">洋食レストラン デルソーレ</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/delsole_info/">インフォメーション</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>デルソーレディナー</span>
						<?php elseif(is_category('delsole-planning')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/delsole/">洋食レストラン デルソーレ</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/delsole_info/">インフォメーション</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>デルソーレ企画</span>
						<?php elseif(is_category('kyoharuka_info')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/kyoharuka/">京はるか</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>インフォメーション</span>
						<?php elseif(is_category('kyoharuka-lunch')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/kyoharuka/">京はるか</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/kyoharuka_info/">インフォメーション</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>京はるかランチ</span>
						<?php elseif(is_category('kyoharuka-dinner')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/kyoharuka/">京はるか</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/kyoharuka_info/">インフォメーション</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>京はるかディナー</span>
						<?php elseif(is_category('kyoharuka-planning')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/kyoharuka/">京はるか</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/kyoharuka_info/">インフォメーション</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>京はるか企画</span>
						<?php elseif(is_category('kyoharuka-concluding')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/kyoharuka/">京はるか</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/kyoharuka_info/">インフォメーション</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>京はるか結納</span>
						<?php elseif(is_category('amore_info')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/amore/">メインバー・アモーレ</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>インフォメーション</span>
						<?php elseif(is_category('amore-planning')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/amore/">メインバー・アモーレ</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/amore_info/">インフォメーション</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>アモーレ企画</span>
						<?php elseif(is_category('yumenokuni_info')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/yumenokuni/">バイキングレストラン 夢の国</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>インフォメーション</span>
						<?php elseif(is_category('yumenokuni-lunch')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/yumenokuni/">バイキングレストラン 夢の国</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/yumenokuni_info/">インフォメーション</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>夢の国ランチ</span>
						<?php elseif(is_category('yumenokuni-dinner')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/yumenokuni/">バイキングレストラン 夢の国</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/yumenokuni_info/">インフォメーション</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>夢の国ディナー</span>						
						<?php elseif(is_category('yumenokuni-planning')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/yumenokuni/">バイキングレストラン 夢の国</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/yumenokuni_info/">インフォメーション</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>夢の国企画</span>
						<?php elseif(is_category('stay_info')) : ?>
                       		<a href="<?php bloginfo('url'); ?>/stay/">ご宿泊</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>インフォメーション</span>						
						<?php elseif(is_category('stay_plan')) : ?>
                       		<a href="<?php bloginfo('url'); ?>/stay/">ご宿泊</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>ご宿泊プラン</span>
						<?php elseif(is_category('banquet_info')) : ?>
                       		<a href="<?php bloginfo('url'); ?>/banquet/">宴会場</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>インフォメーション</span>							
						<?php elseif(is_category('relaxation_info')) : ?>
                       		<a href="<?php bloginfo('url'); ?>/relaxation/">温泉・スパ・プール・ジム</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>インフォメーション</span>	
						<?php elseif(is_category('shop_info')) : ?>
                       		<a href="<?php bloginfo('url'); ?>/shop/">ショップ</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>インフォメーション</span>	
						<?php elseif(is_category('attention')) : ?>
							<span>重要なお知らせ</span>
						<?php else: ?>
                        	<span>お知らせ</span>
						<?php endif; ?>							
                    </p>
					  
				  
                  </div>
                </article><!-- /#breadcrumb -->
                <section id="lsc_column" class="inner_m sp_inner_b"><!-- #lsc_products -->
                    <div id="lsc_column_main">
                        <article class="ns_container pt6 mb30">
							
							<?php wp_reset_query(); ?>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								
								<div class="ns_item">
									<?php if(has_post_thumbnail()): ?>
										<?php $thumbnail_id = get_post_thumbnail_id(); $eye_img = wp_get_attachment_image_src( $thumbnail_id , 'large' ); ?>
										<figure class="ns_item_img"><span data-image="<?php echo $eye_img[0];?>"></span></figure>
									<?php endif; ?>									
									<div class="ns_tbox">
										<div class="postbox">
											<p class="post_date en"><?php the_time( 'Y/m/d' ); ?></p>
											<span class="post_line">|</span>
											<p class="post_tags"><span><?php the_category(', '); ?></span></p>
										</div>
										<h3 class="ns_ttl"><?php the_title(); ?></h3>
									</div>
									<?php if( get_field('pdf') ) : ?><a href="<?php the_field('pdf'); ?>" class="hitarea" target="_blank"><?php elseif( get_field('URL') ) : ?><a href="<?php the_field('URL'); ?>" class="hitarea"><?php else: ?><a href="<?php the_permalink(); ?>" class="hitarea"><?php endif; ?></a>
								</div>
							<?php endwhile; else: ?>
								<p>現在、登録されている情報はありません。</p>
							<?php endif; ?>
							
                        </article>
                        <nav id="page_navis" class="pb120 spb60">
							<?php wp_pagenavi(); ?>
                        </nav>
                    </div>
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
<?php get_footer(); ?>