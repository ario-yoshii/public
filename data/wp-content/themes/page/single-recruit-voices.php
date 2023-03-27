<?php
/*
Template Name: 先輩の声
Template Post Type: recruit_voices
*/
?>
<?php get_header(); ?>

<div id="wrapper"><!-- #wrapper -->
<?php include(TEMPLATEPATH . '/inc/header.php'); ?>

    <main id="maincontainer" class="container"><!-- #maincontainer -->

        <div class="main_bloc">

            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/recruit/lkv_img_recruit@2x.jpg?20201221">
                <!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">RECRUIT</span>
                    <span class="mttls_ja">採用情報</span>
                </h1>
            </section>
            <!-- /#kv -->

            <div id="mainsections" class="main_inner">

                <article id="breadcrumb" class="ja-serif">
                    <!-- #breadcrumb -->
                    <div id="breadcrumb_inner" class="inner_m">
                        <p>
                            <a href="<?php bloginfo('url'); ?>/">Home</a>
                            <span class="bcsps">&nbsp;&gt;&nbsp;</span>
                            <a href="<?php bloginfo('url'); ?>/recruit/">採用情報</a>
                        </p>
                    </div>
                </article>
                <!-- /#breadcrumb -->

                <!-- ここから先輩の声 -->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <section class="recruit-voices">
                    <div class="recruit-voices_wrap">
                        <h2 class="recruit-voice_heading ja-min">未来の仲間達へ</h2>
                        <div class="recruit-voices_main-view">
                            <img src="<?php bloginfo('template_directory'); ?>/recruit-voices/images/<?php echo get_field('rv_main-img-url'); ?>" alt="" class="recruit-voices_main-img">
                            <div class="recruit-voices_main-view_txt">
                                <h3 class="recruit-voices_heading-s -with-line en">PROFILE<span class="-line"></span></h3>
                                <span class="-before-name"><?php echo get_field('rv_position'); ?></span>
                                <span class="-name-ja"><?php echo get_field('rv_name'); ?></span>
                                <span class="-name-en"><?php echo get_field('rv_name_en'); ?></span>
                            </div>
                        </div>
                        <p class="recruit-voices_lead"><?php echo get_field('rv_catch'); ?></p>
                        <div class="recruit-voices_sub-view">
                            <div class="recruit-voices_sub-view_txt_wrap">
                                <p class="recruit-voices_sub-view_txt"><?php echo get_field('rv_text1'); ?></p>
                                <?php if(get_field('rv_text2')): ?>
                                <p class="recruit-voices_sub-view_txt">
                                <?php the_field('rv_text2'); ?>
                                </p>
								<?php endif; ?>
                                <?php if(get_field('rv_text3')): ?>
                                <p class="recruit-voices_sub-view_txt">
                                <?php the_field('rv_text3'); ?>
                                </p>
								<?php endif; ?>
                                <?php if(get_field('rv_text4')): ?>
                                <p class="recruit-voices_sub-view_txt">
                                <?php the_field('rv_text4'); ?>
                                </p>
								<?php endif; ?>
                            </div>
                            <img src="<?php bloginfo('template_directory'); ?>/recruit-voices/images/<?php echo get_field('rv_sub-img-url'); ?>" alt="" class="recruit-voices_sub-img">
                        </div>
                        <div class="recruit-voices_bottom_wrap">
                            <div class="recruit-voices_bottom_ttl">
                                <h3 class="recruit-voices_heading-s en">MESSAGE</h3>
                                <span class="recruit-voices_bottom_ttl_txt">これから入社する<br>貴方へ</span>
                            </div>
                            <p class="recruit-voices_bottom_content"><?php echo get_field('rv_message'); ?></p>
                        </div>
                    </div>
                </section>
            <?php endwhile; endif; ?>
                <!-- ここまで先輩の声 -->

                <?php include(TEMPLATEPATH . '/inc/footer.php'); ?>
            </div>
        </div>

    </main>
    <!-- / #maincontainer -->

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