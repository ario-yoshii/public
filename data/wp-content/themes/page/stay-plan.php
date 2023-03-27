<?php
/*
Template Name: ご宿泊 - プラン一覧
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
                        <a href="<?php bloginfo('url'); ?>/stay/">ご宿泊</a>
                        <span class="bcsps">&nbsp;&gt;&nbsp;</span>
                        <span>宿泊プラン</span>
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
                        <article class="info_container mb30" data-maxview=-1>
                            
 							<?php
							$arg = array(
							'posts_per_page' => -1, // 表示する件数
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
									<a href="<?php the_permalink(); ?>" class="hitarea"></a>
								</div>
							<?php endforeach; ?>
							<?php endif; wp_reset_postdata(); ?>    							
							
							
							
							
                        </article>
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