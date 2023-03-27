<?php
/*
Template Name: 採用情報
*/
?>
<?php get_header(); ?>

<div id="wrapper"><!-- #wrapper -->

    <?php include(TEMPLATEPATH . '/inc/header.php'); ?>

    <main id="maincontainer" class="container"><!-- #maincontainer -->
        
        <div class="main_bloc">

            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/recruit/lkv_img_recruit@2x.jpg?20201221"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">RECRUIT</span>
                    <span class="mttls_ja">採用情報</span>
                </h1>
            </section><!-- /#kv -->

            <div id="mainsections" class="main_inner">

                <article id="breadcrumb" class="ja-serif"><!-- #breadcrumb -->
                  <div id="breadcrumb_inner" class="inner_m">
                    <p>
                        <a href="<?php bloginfo('url'); ?>/">Home</a>
                        <span class="bcsps">&nbsp;&gt;&nbsp;</span>
                        <span>採用情報</span>
                    </p>
                  </div>
                </article><!-- /#breadcrumb -->

                <section class="content">
                    <!--<div class="mb60 smb40 inner">
                        <h2 class="read_ttl tac ja-min">
採用情報のコピーが入ります採用情報のコピーが入ります
                        </h2>
                        <p class="tac">
若き人材を求めています。ホテル京セラで一緒に働きませんか？<br>
このテキストはダミーです。このテキストはダミーです。このテキストはダミーです。
                        </p>
                    </div>-->
                    <div class="mb90 smb60 inner sp_inner_b">
						
						<?php
						$arg = array(
						'posts_per_page' => -1, // 表示する件数
						'orderby' => 'date', // 日付でソート
						'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
						'category_name' => 'recruit_cat' // 表示したいカテゴリーのスラッグを指定
						);
						$posts = get_posts( $arg );
						if( $posts ): ?>
						<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>						
						
						
                        <article class="acd_container"><!-- acd_open 入れると開いたまま-->
                            <a href="#" class="acd_trigger"><span><?php the_title(); ?></span></a>
                            <div class="acd_tree sp_sps">
								<?php if(get_field('業務内容')): ?>
                                <dl class="dl_tnses_m">
                                    <dt>業務内容</dt>
                                    <dd><?php the_field('業務内容'); ?></dd>
                                </dl>
								<?php endif; ?>
								<?php if(get_field('雇用形態')): ?>
                                <dl class="dl_tnses_m">
                                    <dt>雇用形態</dt>
                                    <dd><?php the_field('雇用形態'); ?></dd>
                                </dl>
								<?php endif; ?>
								<?php if(get_field('応募資格')): ?>
                                <dl class="dl_tnses_m">
                                    <dt>応募資格</dt>
                                    <dd><?php the_field('応募資格'); ?></dd>
                                </dl>
								<?php endif; ?>
								<?php if(get_field('勤務地')): ?>
                                <dl class="dl_tnses_m">
                                    <dt>勤務地</dt>
                                    <dd><?php the_field('勤務地'); ?></dd>
                                </dl>
								<?php endif; ?>
								<?php if(get_field('給与条件')): ?>
                                <dl class="dl_tnses_m">
                                    <dt>給与条件</dt>
                                    <dd><?php the_field('給与条件'); ?></dd>
                                </dl>
								<?php endif; ?>
								<?php if(get_field('時間')): ?>
                                <dl class="dl_tnses_m">
                                    <dt>時間</dt>
                                    <dd><?php the_field('時間'); ?></dd>
                                </dl>
								<?php endif; ?>
								<?php if(get_field('処遇')): ?>
                                <dl class="dl_tnses_m">
                                    <dt>処遇</dt>
                                    <dd><?php the_field('処遇'); ?></dd>
                                </dl>
								<?php endif; ?>
								<?php if(get_field('社会保険')): ?>
                                <dl class="dl_tnses_m">
                                    <dt>社会保険</dt>
                                    <dd><?php the_field('社会保険'); ?></dd>
                                </dl>
								<?php endif; ?>
                                <dl class="dl_tnses_m">
                                    <dt>エントリー方法</dt>
                                    <dd>
										<!--<span class="fw_bold">WEBからのエントリー方法</span><br>
										下記「WEBエントリー」よりお申し込みください。<br><br>

										<span class="fw_bold">郵送でのエントリー方法</span><br>-->
										履歴書、職務経歴書（省略可）を応募先まで送付ください。
                                    </dd>
                                </dl>
                                <dl class="dl_tnses_m">
                                    <dt>応募先</dt>
                                    <dd>
										〒899-5117　鹿児島県霧島市隼人町見次1409-1<br>
										株式会社ホテル京セラ　人事総務係　採用担当　榎園（えのきぞの）
                                    </dd>
                                </dl>
                                <dl class="dl_tnses_m">
                                    <dt>選考方法</dt>
                                    <dd>書類選考、面接</dd>
                                </dl>
                                <div class="btns btns_left sp_fixbtn mt40 smt30 mb60 smb30">
                                    <!--<a href="<?php bloginfo('url'); ?>/recruit/entry/?post_id=<?php echo $post->ID; ?>" class="squarebtn_arrow_gd"><span>WEBエントリー</span></a>-->
                                    <a href="<?php bloginfo('url'); ?>/contact/?post_id=<?php echo $post->ID; ?>" class="squarebtn_arrow_gd"><span>お問い合わせ</span></a>
                                </div>
                            </div>
                        </article>

						<?php endforeach; ?>
						<?php endif; wp_reset_postdata(); ?>                    
                      

                       

                        

                        

                        
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