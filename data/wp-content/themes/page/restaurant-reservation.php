<?php
/*
Template Name: レストラン＆バー - 予約
*/
?>
<?php get_header(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.3.0.js"></script>

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

            <!--<div id="mainsections" class="main_inner">-->
			<div class="main_inner">

                <article id="breadcrumb" class="ja-serif"><!-- #breadcrumb -->
                  <div id="breadcrumb_inner" class="inner_m">
                    <p>
                        <a href="<?php bloginfo('url'); ?>/">ホーム</a>
                        <span class="bcsps">&nbsp;&gt;&nbsp;</span>
                        <a href="<?php bloginfo('url'); ?>/restaurant/">レストラン＆バー</a>
                        <span class="bcsps">&nbsp;&gt;&nbsp;</span>
                        <span>レストラン予約</span>
                    </p>
                  </div>
                </article><!-- /#breadcrumb -->

                <section class="content">
                    <div class="mb40 smb40 inner bd_btm">
                        <h2 class="read_ttl tac ja-min">
							レストラン予約フォーム
                        </h2>

                        <div class="mb30 tac">
                            
                            <p class="fs13 mb3">お電話でのご予約・お問い合わせはこちら</p>
                            <h3 class="tellno_b en mb20 smb15"><?php if (is_mobile()) : ?><a href="tel:0995-43-7111" onclick="gtag('event', 'tel-tap', {'event_category':'click','event_label': 'restaurant'});">TEL 0995-43-7111</a><?php else: ?>TEL 0995-43-7111<?php endif; ?></h3>
                            <p class="fs14 sfs13">
							※前日の午前中までの要予約となっております。　<br class="onlySp">※季節・食材の入荷状況により材料や器の変更等ございます。<br>
							※食物アレルギーにつきましてのご要望はご予約の際に必ずお申しつけください。当日は対応できない場合がございますのでご了承ください。
                            </p>
                        </div>
                    </div>
                    <div class="mb120 smb60 inner">
						<div class="fm_flow">
							<p class="current">入力</p>
							<p>確認</p>
							<p>完了</p>
						</div>
                        <p class="tac fs14 sfs13 mb20">
						下記フォームにご入力いただき、<br class="onlySp">ページ下部の「確認する」ボタンを押してください。
                        </p>
						<p class="fs14 sfs13 mb40 smb30 tac"><span class="redlabel_fk mr10">必須</span>は入力必須項目です</p>
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_content(__('(more...)')); ?>
						<?php endwhile; else: ?><?php endif; ?>
                    </div>
                </section>

                <?php include(TEMPLATEPATH . '/inc/footer.php'); ?>

            </div>
        </div>

    </main><!-- / #maincontainer -->

    <div id="covermc"></div>

</div><!-- / #wrapper -->

<!--<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.3.0.js"></script>-->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/retina.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/slick.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/flick.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/share.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/low.js"></script>
               
      
<script>
var option_id = '<?= get_query_var('option_id') ?>';
  switch(option_id){
    case '1':
    document.querySelector('option[value="洋食レストラン　デルソーレ"]').setAttribute('selected', 'true');
    break;
    case '2':
    document.querySelector('option[value="日本料理　京はるか"]').setAttribute('selected', 'true');
    break;
    case '3':
    document.querySelector('option[value="バー　アモーレ"]').setAttribute('selected', 'true');
    break;
    case '4':
    document.querySelector('option[value="バイキングレストラン　夢の国"]').setAttribute('selected', 'true');
    break;
    default:
    document.querySelector('option[value="選択してください"]').setAttribute('selected', 'true');
    break;
  }
</script>
<?php get_footer(); ?>