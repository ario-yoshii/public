
<?php get_header(); ?>

<div id="wrapper"><!-- #wrapper -->

    <?php include(TEMPLATEPATH . '/inc/header.php'); ?>

    <main id="maincontainer" class="container"><!-- #maincontainer -->
        
        <div class="main_bloc">
			<?php if(is_category('restaurant')) : ?>
            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/lkv_img_restaurant_bar@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">RESTAURANT&BAR</span>
                    <span class="mttls_ja">レストラン＆バー</span>
                </h1>
            </section><!-- /#kv -->
			<?php elseif(is_category('delsole')||is_category('delsole-lunch')||is_category('delsole-dinner')||is_category('delsole-planning')) : ?>
            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/delsole/lkv_img_delsole@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">RESTAURANT&BAR</span>
                    <span class="mttls_ja">レストラン＆バー</span>
                </h1>
            </section><!-- /#kv -->
			<?php elseif(is_category('kyoharuka')||is_category('kyoharuka-lunch')||is_category('kyoharuka-dinner')||is_category('kyoharuka-planning')) : ?>
            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/kyoharuka/lkv_img_kyoharuka@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">RESTAURANT&BAR</span>
                    <span class="mttls_ja">レストラン＆バー</span>
                </h1>
            </section><!-- /#kv -->
			<?php elseif(is_category('amore')||is_category('amore-planning')) : ?>
            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/amore/lkv_img_amore@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">RESTAURANT&BAR</span>
                    <span class="mttls_ja">レストラン＆バー</span>
                </h1>
            </section><!-- /#kv -->
			<?php elseif(is_category('yumenokuni')||is_category('yumenokuni-lunch')||is_category('yumenokuni-dinner')||is_category('yumenokuni-drink')) : ?>
            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/yumenokuni/lkv_img_yumenokuni@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">RESTAURANT&BAR</span>
                    <span class="mttls_ja">レストラン＆バー</span>
                </h1>
            </section><!-- /#kv -->
			<?php elseif(is_category('stay')) : ?>
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
			<?php elseif(is_category('banquet')) : ?>
            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/banquet/lkv_img_banquet@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">CONVENTION&BANQUET</span>
                    <span class="mttls_ja">宴会場</span>
                </h1>
            </section><!-- /#kv -->
			<?php elseif(is_category('relaxation')) : ?>
            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/relaxation/lkv_img_relaxation@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">RELAXATION</span>
                    <span class="mttls_ja">温泉・スパ・プール・ジム</span>
                </h1>
            </section><!-- /#kv -->
			<?php elseif(is_category('shop')) : ?>
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
						<?php if(is_category('restaurant')) : ?>
                       		<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>インフォメーション</span>
						<?php elseif(is_category('delsole')) : ?>
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
							<a href="<?php bloginfo('url'); ?>/info/restaurant/delsole/">インフォメーション</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>ランチメニュー</span>
						<?php elseif(is_category('delsole-dinner')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/delsole/">洋食レストラン デルソーレ</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/info/restaurant/delsole/">インフォメーション</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>ディナーメニュー</span>
						<?php elseif(is_category('delsole-planning')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/delsole/">洋食レストラン デルソーレ</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/info/restaurant/delsole/">インフォメーション</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>企画商品</span>
						<?php elseif(is_category('kyoharuka')) : ?>
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
							<a href="<?php bloginfo('url'); ?>/info/restaurant/kyoharuka/">インフォメーション</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>昼食メニュー</span>
						<?php elseif(is_category('kyoharuka-dinner')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/kyoharuka/">京はるか</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/info/restaurant/kyoharuka/">インフォメーション</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>夕食メニュー</span>
						<?php elseif(is_category('kyoharuka-planning')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/kyoharuka/">京はるか</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/info/restaurant/kyoharuka/">インフォメーション</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>企画商品</span>
						<?php elseif(is_category('amore')) : ?>
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
							<a href="<?php bloginfo('url'); ?>/info/restaurant/amore/">インフォメーション</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>企画商品</span>
						<?php elseif(is_category('yumenokuni')) : ?>
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
							<a href="<?php bloginfo('url'); ?>/info/restaurant/kyoharuka/">インフォメーション</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>ランチメニュー</span>
						<?php elseif(is_category('yumenokuni-dinner')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/yumenokuni/">バイキングレストラン 夢の国</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/info/restaurant/kyoharuka/">インフォメーション</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>ディナーメニュー</span>						
						<?php elseif(is_category('yumenokuni-drink')) : ?>
							<a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/restaurant/yumenokuni/">バイキングレストラン 夢の国</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<a href="<?php bloginfo('url'); ?>/info/restaurant/kyoharuka/">インフォメーション</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>ドリンクメニュー</span>
						<?php elseif(is_category('stay')) : ?>
                       		<a href="<?php bloginfo('url'); ?>/stay/">ご宿泊</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>インフォメーション</span>						
						<?php elseif(is_category('stay_plan')) : ?>
                       		<a href="<?php bloginfo('url'); ?>/stay/">ご宿泊</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>ご宿泊プラン</span>
						<?php elseif(is_category('banquet')) : ?>
                       		<a href="<?php bloginfo('url'); ?>/banquet/">宴会場</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>インフォメーション</span>							
						<?php elseif(is_category('relaxation')) : ?>
                       		<a href="<?php bloginfo('url'); ?>/relaxation/">温泉・スパ・プール・ジム</a>
							<span class="bcsps">&nbsp;&gt;&nbsp;</span>
							<span>インフォメーション</span>	
						<?php elseif(is_category('shop')) : ?>
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
										<figure class="ns_item_img"><span data-image="<?php echo $eye_img[0];　?>"></span></figure>
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