<?php
/*
Template Name: English
*/
?>
<?php get_header(); ?>
<div id="wrapper" class="wrapper_en"><!-- #wrapper -->

    <?php include(TEMPLATEPATH . '/inc/header_en.php'); ?>

    <main id="maincontainer" class="container"><!-- #maincontainer -->
        
        <div class="main_bloc">

            <section id="kv"><!-- #kv -->
                <div id="yp_container">
                    <div id="yp_background"></div>
                    <div id="yp_overlay"></div>
                </div>
                <h1 id="kv_logo"><img src="<?php bloginfo('template_directory'); ?>/assets/images/kv_logo.png" alt="HOTEL KYOCERA"></h1>
            </section><!-- /#kv -->

            <div id="mainsections" class="main_inner">

                <section class="content inner_m">
                    <div class="en_bttls">
                        <h2 class="en_bttls_ttl en sp_tal smb15"></h2>
                        <p class="en_bttls_txt sp_tal">
                        </p>
                    </div>
                </section>

                <section id="sc_info_btm" class="sc_info content">
                    <div class="ptb_sps pt0 pb120 spb60 inner_m">
                        <article class="bnr_container">
                            <div class="bnr_item bnr_item_m">
                                <figure class="bnr_item_img"><span data-image="<?php bloginfo('template_directory'); ?>/assets/images/img_info_stay.jpg"></span></figure>
                                <h2 class="w_bttls tac">
                                    <span class="mttls_en en">ACCOMMODATIONS</span>
                                </h2>
                                <a href="<?php bloginfo('url'); ?>/en/accommodations/" class="hitarea"></a>
                            </div>
                            <div class="bnr_item bnr_item_m">
                                <figure class="bnr_item_img"><span data-image="<?php bloginfo('template_directory'); ?>/assets/images/img_info_restaurant.jpg"></span></figure>
                                <h2 class="w_bttls tac">
                                    <span class="mttls_en en">RESTAURANTS & BAR</span>
                                </h2>
                                <a href="<?php bloginfo('url'); ?>/en/restaurant/" class="hitarea"></a>
                            </div>
                            <div class="bnr_item bnr_item_s">
                                <figure class="bnr_item_img"><span data-image="<?php bloginfo('template_directory'); ?>/assets/images/img_info_relaxation.jpg"></span></figure>
                                <h2 class="w_bttls tac">
                                    <span class="mttls_en en">RELAXATION</span>
                                </h2>
                                <a href="<?php bloginfo('url'); ?>/en/relaxation/" class="hitarea"></a>
                            </div>
                            <div class="bnr_item bnr_item_s">
                                <figure class="bnr_item_img"><span data-image="<?php bloginfo('template_directory'); ?>/assets/images/img_info_aboutus.jpg"></span></figure>
                                <h2 class="w_bttls tac">
                                    <span class="mttls_en en">ABOUT US</span>
                                </h2>
                                <a href="<?php bloginfo('url'); ?>/en/company/" class="hitarea"></a>
                            </div>
                            <div class="bnr_item bnr_item_s">
                                <figure class="bnr_item_img"><span data-image="<?php bloginfo('template_directory'); ?>/assets/images/img_info_access.jpg"></span></figure>
                                <h2 class="w_bttls tac">
                                    <span class="mttls_en en">ACCESS</span>
                                </h2>
                                <a href="<?php bloginfo('url'); ?>/en/access/" class="hitarea"></a>
                            </div>
                            
                        </article>
                    </div>
                </section>

                <?php include(TEMPLATEPATH . '/inc/footer_en.php'); ?>

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