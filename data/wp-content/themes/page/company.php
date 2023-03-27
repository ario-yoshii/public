<?php
/*
Template Name: 会社概要
*/
?>
<?php get_header(); ?>
<div id="wrapper"><!-- #wrapper -->

    <?php include(TEMPLATEPATH . '/inc/header.php'); ?>

    <main id="maincontainer" class="container"><!-- #maincontainer -->
        
        <div class="main_bloc">

            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/company/lkv_img_company@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">COMPANY</span>
                    <span class="mttls_ja">会社概要</span>
                </h1>
            </section><!-- /#kv -->

            <div id="mainsections" class="main_inner">

                <article id="breadcrumb" class="ja-serif"><!-- #breadcrumb -->
                  <div id="breadcrumb_inner" class="inner_m">
                    <p>
                        <a href="<?php bloginfo('url'); ?>/">Home</a>
                        <span class="bcsps">&nbsp;&gt;&nbsp;</span>
                        <span>会社概要</span>
                    </p>
                  </div>
                </article><!-- /#breadcrumb -->

                <section class="content">
                    <div class="ptb_sps pt0 pb0 inner_ss sp_inner_b">
                        <h2 class="mttls tac mb50 smb12">
                            <span class="mttls_en en">COMPANY PROFILE</span>
                            <span class="mttls_ja">会社概要</span>
                        </h2>
                        <div class="imgslidesA mb25 smb20">
                            <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/company/img_company.jpg" alt=""></figure>
                        </div>
                        <p class="tac sp_tal mb50 sp_sps smb40">
						ホテルは多彩な出会いのステージです。ご宿泊やお食事、温泉、ウェディング、コンベンション、アミューズメント・・・<br>
						そこには、お客様と私たちとの出会いが生まれる心から楽しくなるホテルがあります。<br>
						愛をテーマに誕生したホテル京セラのコンセプト｢心からの笑顔でのおもてなし｣が訪れるお客様、<br class="onlyPc">
						おひとりおひとりをあたたかくお迎えいたします。
                        </p>
                    </div>
                </section>
                <section class="content bg_gray">
                    <div class="ptb_sps pt80 spt50 pb50 spb40 inner_sb">
                        <article>
                            <dl class="dl_tnses_b">
                                <dt>社名</dt>
                                <dd>株式会社ホテル京セラ</dd>
                            </dl>
                            <dl class="dl_tnses_b">
                                <dt>所在地</dt>
                                <dd>
								〒899-5117　鹿児島県霧島市隼人町見次1409-1<br>
								<?php if (is_mobile()) : ?><a href="tel:0995-43-7111" class="uline" onclick="gtag('event', 'tel-tap', {'event_category':'click','event_label': 'company'});">TEL 0995-43-7111 (代表)</a><?php else: ?>TEL 0995-43-7111 (代表)<?php endif; ?>／FAX 0995-43-7331<br>
								E-mail 
								<script type="text/javascript">
								<!--
								function converter(M){
								var str="", str_as="";
								for(var i=0;i<M.length;i++){
								str_as = M.charCodeAt(i);
								str += String.fromCharCode(str_as + 1);
								}
								return str;
								}
								var ad = converter(String.fromCharCode(104,109,101,110,63,103,44,106,120,110)+String.fromCharCode(98,100,113,96,45,98,110,45,105,111));
								document.write("<a href=\"mai"+"lto:"+ad+"\">"+ad+"<\/a>");
								//-->
								</script>
                                </dd>
                            </dl>
                            <dl class="dl_tnses_b">
                                <dt>開業</dt>
                                <dd>
									本館：1995年9月1日<br>
									別館：2001年4月26日
                                </dd>
                            </dl>
                            <dl class="dl_tnses_b">
                                <dt>創業者</dt>
                                <dd>
									稲盛　和夫<br>
									【名誉会長オフィシャルサイト】 <a href="http://www.kyocera.co.jp/inamori/" target="_blank" class="uline">http://www.kyocera.co.jp/inamori/</a>
                                </dd>
                            </dl>
                            <dl class="dl_tnses_b">
                                <dt>設計</dt>
                                <dd>黒川　紀章</dd>
                            </dl>
                            <dl class="dl_tnses_b">
                                <dt>資本金</dt>
                                <dd>1000万円</dd>
                            </dl>
                            <dl class="dl_tnses_b">
                                <dt>代表者</dt>
                                <dd>代表取締役社長　福永 健一</dd>
                            </dl>
                            <dl class="dl_tnses_b">
                                <dt>従業員</dt>
                                <dd>200人</dd>
                            </dl>
                            <dl class="dl_tnses_b">
                                <dt>拠点</dt>
                                <dd class="onlyPc">
									東京営業所　　〒150-0001　東京都渋谷区神宮前6-27-8 京セラ原宿ビルB1F<br>
									<?php if (is_mobile()) : ?><a href="tel:03-3400-9073" class="uline" onclick="gtag('event', 'tel-tap', {'event_category':'click','event_label': 'company'});">TEL 03-3400-9073</a><?php else: ?>TEL 03-3400-9073<?php endif; ?>
                                </dd>
                                <dd class="onlySp">
									東京営業所<br>
									〒150-0001　東京都渋谷区神宮前6-27-8 京セラ原宿ビルB1F<br>
									<?php if (is_mobile()) : ?><a href="tel:03-3400-9073" class="uline" onclick="gtag('event', 'tel-tap', {'event_category':'click','event_label': 'company'});">TEL 03-3400-9073</a><?php else: ?>TEL 03-3400-9073<?php endif; ?>
                                </dd>
                            </dl>
                            <dl class="dl_tnses_b">
                                <dt>関連企業</dt>
                                <dd>
									<a href="https://www.kyocera.co.jp/" class="uline" target="_blank">京セラ株式会社</a><br>
									<a href="https://krd.kyocera.co.jp/" class="uline" target="_blank">京セラ興産株式会社</a><br>
									<a href="https://www.princess-kyoto.co.jp/" class="uline" target="_blank">ホテル日航プリンセス京都</a> </dd>
                            </dl>
                        </article>
                    </div>
                </section>
                <section class="content spb40">
                    <div class="ptb_sps pt55 spt50 pb100 spb20 inner_sb">
                        <h2 class="mttls tac mb70 smb20">
                            <span class="mttls_en en">GLOBAL ENVIEONMENT</span>
                            <span class="mttls_ja">地球環境への取り組み</span>
                        </h2>
                        <article>
                            <div class="imgbox_typeD">
                                <figure class="imgbox_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/company/img_cgs.jpg" alt=""></figure>
                                <dl class="imgbox_dlset">
                                    <dt>コージェネレーションシステム(CGS)</dt>
                                    <dd>2001年4月に竣工した別館にて、鹿児島県のホテル業界では初の天然ガスを利用したコージェネレーションシステムを導入しております。 当ホテルのコージェネレーションシステムは、天然ガスから作られるクリーンな都市ガスを燃料としたガスエンジン発電機を駆動して発電し、その過程で発生した排熱をアネックス館内の暖房・給湯設備に有効利用して省エネルギー活動に努めています。</dd>
                                </dl>
                            </div>
                            <div class="imgbox_typeD">
                                <figure class="imgbox_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/company/img_light.jpg" alt=""></figure>
                                <dl class="imgbox_dlset">
                                    <dt>光触媒の活用</dt>
                                    <dd>特徴的な白い外壁のある本館では、光触媒を採用しております。<br>
									光触媒は、太陽や蛍光灯などの光が当たるとその表面で強力な酸化力が生まれ、接触してくる有機化合物や細菌などの有害物質を除去することが出来、外壁の汚れを防ぐほか、大気中のNOx (窒素酸化物) の分解・清浄化等、地球環境の浄化に役立っています。</dd>
                                </dl>
                            </div>
                            <div class="imgbox_typeD">
                                <figure class="imgbox_img"><img src="<?php bloginfo('template_directory'); ?>/assets/images/company/img_turbo.jpg" alt=""></figure>
                                <dl class="imgbox_dlset">
                                    <dt>ターボ冷凍機</dt>
                                    <dd>2007年9月より地球温暖化防止対策の一環として本館に導入しました。<br>
									当ホテルでは、2005年2月の京都議定書発効を機に、温室効果ガスの削減について具体的な目標を掲げて環境保護活動を推進しております。このターボ冷凍機の導入により、2005年度比924t-Co2/年の削減が可能です。<br>
									※一世帯あたりが年間に排出する温室効果ガスは約5400kg-Co2と言われています。</dd>
                                </dl>
                            </div>
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