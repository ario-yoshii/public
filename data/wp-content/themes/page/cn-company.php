<?php
/*
Template Name: 簡体中文 - 关于我们
*/
?>
<?php get_header(); ?>
<div id="wrapper"><!-- #wrapper -->

    <?php include(TEMPLATEPATH . '/inc/header_cn.php'); ?>

    <main id="maincontainer" class="container"><!-- #maincontainer -->
        
        <div class="main_bloc">

            <section id="lkv" data-image="<?php bloginfo('template_directory'); ?>/assets/images/access/lkv_img_access@2x.jpg"><!-- #kv -->
                <h1 class="lkv_bttls">
                    <span class="mttls_en en">关于我们</span>
                </h1>
            </section><!-- /#kv -->

            <div id="mainsections" class="main_inner">

                <article id="breadcrumb" class="ja-serif"><!-- #breadcrumb -->
                  <div id="breadcrumb_inner" class="inner_m">
                    <p>
                        <a href="<?php bloginfo('url'); ?>/en/">Home</a>
                        <span class="bcsps">&nbsp;&gt;&nbsp;</span>
                        <span>关于我们</span>
                    </p>
                  </div>
                </article><!-- /#breadcrumb -->

                <section class="content">
                    <div class="inner_m">
                        <div class="ptb_sps pt0 pb80 spb40 inner_sb sp_inner_b">
                            <div class="imgslidesA mb38 smb25">
                                <figure><img src="<?php bloginfo('template_directory'); ?>/assets/images/company/img_company.jpg" alt=""></figure>
                            </div>
                            <p class="tac sp_tal mb83 smb40">
								京瓷酒店是为您提供餐饮住宿、享受温泉、结婚典礼、大型宴会、休间娱乐的一个完美平台。我们希望能成就您的一段美好的回忆。京瓷酒店秉持着以爱为主题而诞生的的理念“以发自内心的笑脸待客”我们期待与您在此相遇，为您提供竭诚服务。
                            </p>

                            <article>
                                <dl class="dl_tnses_b">
                                    <dt>公司名称</dt>
                                    <dd>京瓷酒店</dd>
                                </dl>
                                <dl class="dl_tnses_b">
                                    <dt>地址</dt>
                                    <dd>日本鹿儿岛县雾岛市贡隼人町1409-1</dd>
                                </dl>
                                <dl class="dl_tnses_b">
                                    <dt>电话&传真</dt>
                                    <dd>
										电话:+81-995-43-7111(主机) 传真:+81-995-43-7331
                                    </dd>
                                </dl>
                                <dl class="dl_tnses_b">
                                    <dt>邮件</dt>
                                    <dd>
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
                                    <dt>开业</dt>
                                    <dd>
									主馆 :1995.09.01<br>
									别馆 : 2001.04.26
                                    </dd>
                                </dl>
                                <dl class="dl_tnses_b">
                                    <dt>创办人</dt>
                                    <dd>Kazuo Inamori</dd>
                                </dl>
                                <dl class="dl_tnses_b">
                                    <dt>设计者</dt>
                                    <dd>Kisho Kurokawa</dd>
                                </dl>
                                <dl class="dl_tnses_b">
                                    <dt>资金</dt>
                                    <dd>1.000万日元</dd>
                                </dl>
                                <dl class="dl_tnses_b">
                                    <dt>总经理</dt>
                                    <dd>Kenichi Fukunaga</dd>
                                </dl>
                                <dl class="dl_tnses_b">
                                    <dt>公司职员</dt>
                                    <dd>200</dd>
                                </dl>
                                <dl class="dl_tnses_b">
                                    <dt>办事处</dt>
                                    <dd>
									东京办事处<br>
									东京都涩谷区神宫前6-27-8京瓷原宿大厦公司事务所内地下1楼
                                    </dd>
                                </dl>
                                <dl class="dl_tnses_b">
                                    <dt>相关企业</dt>
                                    <dd>
										京瓷股份有限公司
										日本京都航空皇太子宾馆
                                    </dd>
                                </dl>
                            </article>
                        </div>
                    </div>
                </section>
                
                <?php include(TEMPLATEPATH . '/inc/footer_cn.php'); ?>

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