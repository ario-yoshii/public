<?php
/*
Template Name: 繁體中文 - 餐廳酒吧
*/
?>
<?php get_header(); ?>
<div id="wrapper"><!-- #wrapper -->

    <?php include(TEMPLATEPATH . '/inc/header_tc.php'); ?>

    <main id="maincontainer" class="container"><!-- #maincontainer -->
        
        <div class="main_bloc">

            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/lkv_img_restaurant_bar@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">餐廳酒吧</span>
                </h1>
            </section><!-- /#kv -->

            <div id="mainsections" class="main_inner">

                <article id="breadcrumb" class="ja-serif"><!-- #breadcrumb -->
                  <div id="breadcrumb_inner" class="inner_m">
                    <p>
                        <a href="<?php bloginfo('url'); ?>/en/">Home</a>
                        <span class="bcsps">&nbsp;&gt;&nbsp;</span>
                        <span>餐廳酒吧</span>
                    </p>
                  </div>
                </article><!-- /#breadcrumb -->

                <section class="content">
                    <div class="inner_m bd_btm">
                        <div class="ptb_sps pt0 pb80 spb40 inner_sb sp_inner_b">
                            <div class="imgslidesA mb38 smb25">
								<figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/delsole/img_delsole02.jpg" alt=""/></figure>
								<figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/kyoharuka/img_kyoharuka02.jpg" alt=""/></figure>
								<figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/amore/img_amore02.jpg" alt=""/></figure>
								<figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/yumenokuni/img_yumenokuni02.jpg" alt=""/></figure>
							</div>
                            <p class="tac sp_tal">
							品嚐當地的食材享受道地的美食是旅行中不可或缺的醍醐味，料理均嚴選當地當季的食材，無論是海鮮、黑豬、黑毛和牛、南國的太陽所孕育出的蔬果等等，外加純熟纖細的烹調技巧呈現出一年四季不同的風味佳餚。日本和食、西餐、中華料理、歐式自助餐的各個美食主廚無不大展身手來滿足您的味蕾；親切可掬的服務生熱情款待，讓您沉浸在不同的氛圍與感動。
                            </p>
                        </div>
                    </div>

                    <div class="inner_m bd_btm">
                        <div class="ptb_sps pt75 inner_sl sp_inner_b">
                            <div class="imgbox_typeC">
                                <div class="itd_item">
                                    <div class="itd_item_inner mb80 smb40">
                                        <figure class="mb15"><img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/img_delsole.jpg" alt=""></figure>
                                        <div class="itd_item_tbox_en">
                                            <h2 class="read_ttl_en en">
                                                <span class="read_stl">Main bldg.1F</span>
                                                牛排和自助餐 [DelSole]
                                            </h2>
                                            <p class="read_txt line pb20">
												高達60公尺高的玻璃帷幕，讓燦爛陽光能隨時灑落進來的中庭，是我們相當自滿的空間，近在眼前的天降川和遠處綠意盎然的霧島連峰，營造出多彩的景象；寬敞開放的環境，讓人有置身在戶外的錯覺；從精力早餐、商業午餐、下午茶到星光輝映的晚餐，整日的用餐環境精彩可期。
                                            </p>
                                            <dl class="openhours openhours_en">
                                                <dt>OPEN</dt>
                                                <dd>
                                                    10:00～20:00 (last order 19:00)<br>
													Saturday：10:00～21:00 (last order 19:30)
                                                </dd>
                                            </dl>
											<dl class="openhours openhours_en">
												<dt>Holiday</dt>
												<dd>
													Wednesday
													<?php date_default_timezone_set('Asia/Tokyo'); if  ( date(YmdHi) <= "202102010000" ): ?>
													（February 1, 2021 -）
													<?php endif; ?>
												</dd>
											</dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="itd_item">
                                    <div class="itd_item_inner mb80 smb40">
                                        <figure class="mb15"><img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/img_kyoharuka.jpg" alt=""></figure>
                                        <div class="itd_item_tbox_en">
                                            <h2 class="read_ttl_en en">
                                                <span class="read_stl">Main bldg.3F</span>
                                                日本料理 [Kyo-Haruka]
                                            </h2>
                                            <p class="read_txt line pb20">
												“KYO-HARUKA”展現日本僅有的傳統氛圍，加上講究的食材所烹調出，色、香、味俱全的料理美學，達到日本料理醍醐味的境界；在靜謐沈穩的餐廳裡，享受薩摩人自豪的料理，洋溢著季節的幸福感，料理長精心創作的料理，每道佳餚就有如藝術品般，定能打動您的內心深處。鹿兒島的燒酒、日本酒酩品一應俱全，搭配美食達到錦上添花的效果。
                                            </p>
                                            <dl class="openhours openhours_en">
                                                <dt>OPEN</dt>
                                                <dd>
                                                    <span class="hourbox_en">lunch</span>11:30～14:30 (last order 14:00)<br>
                                                    <span class="hourbox_en">Dinner</span>17:30～20:00 (last order 19:00)<br>
													　Saturday：17:30～21:00 (last order 19:30)
                                                </dd>
                                            </dl>
											<dl class="openhours openhours_en">
												<dt>Holiday</dt>
												<dd>
													Tuesday
													<?php date_default_timezone_set('Asia/Tokyo'); if  ( date(YmdHi) <= "202102010000" ): ?>
													（February 1, 2021 -）
													<?php endif; ?>
												</dd>
											</dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="itd_item">
                                    <div class="itd_item_inner mb80 smb40">
                                        <figure class="mb15"><img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/img_amore.jpg" alt=""></figure>
                                        <div class="itd_item_tbox_en">
                                            <h2 class="read_ttl_en en">
                                                <span class="read_stl">Main bldg.13F</span>
                                                京庭酒吧 艾莫蕾
                                            </h2>
                                            <p class="read_txt line pb20">
												南國迷人的星光，美不勝收的景緻，成年人專有的意境“酒吧 艾莫蕾”；在飯店的頂樓，欣賞一望無際的星空及夜景是種奢華的享受，豐富多樣的葡萄酒和道地燒酌，專業的調酒師精心調出您專屬的雞尾酒，讓您沉浸在曼妙微醺的世界。
                                            </p>
                                            <dl class="openhours">
                                                <dt>OPEN</dt>
                                                <dd>
                                                    19:00～23:00 (last order 22:30)
                                                </dd>
                                            </dl>
											<dl class="openhours openhours_en">
												<dt>Holiday</dt>
												<dd>
													Sunday,Monday
												</dd>
											</dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="itd_item">
                                    <div class="itd_item_inner mb80 smb40">
                                        <figure class="mb15"><img src="<?php bloginfo('template_directory'); ?>/assets/images/restaurant/img_yumenokuni.jpg" alt=""></figure>
                                        <div class="itd_item_tbox_en">
                                            <h2 class="read_ttl_en en">
                                                <span class="read_stl">Annex.1F</span>
                                                自助餐廳 夢想國度
                                            </h2>
                                            <p class="read_txt line pb20">
												利用自然光線營造出明亮開放的休閒餐廳“夢想國度”，這裡可暢快享用您喜歡的美食，在充滿感動且有活力的夢想樂園中，可飽嚐和風元素的創作美食。還有最受女性貴賓喜愛的甜點專區和種類豐富的鹿兒島燒酒等您來品嚐。
                                            </p>
                                            <dl class="openhours openhours_en">
                                                <dt>OPEN</dt>
                                                <dd>
                                                    <span class="hourbox_en">Breakfast</span>6:30～10:00 (last in 09:30)<br>
                                                    <span class="hourbox_en">lunch</span>11:30～14:30 (last in 14:00)<br>
                                                    <span class="hourbox_en">Dinner</span>17:00～20:00 (last in 19:00)<br>
													　Saturday：17:00～21:00 (last in 20:00)
                                                </dd>
                                            </dl>

											<dl class="openhours openhours_en">
												<dt>Holiday</dt>
												<dd>
													Monday
													<?php date_default_timezone_set('Asia/Tokyo'); if  ( date(YmdHi) <= "202102010000" ): ?>
													（February 1, 2021 -）
													<?php endif; ?>
												</dd>
											</dl>											
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <?php include(TEMPLATEPATH . '/inc/footer_tc.php'); ?>

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