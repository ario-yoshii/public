<footer><!-- footer -->
    <div id="ft_content">
        <div class="inner">
            <h2 id="ft_logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/ft_logo.png" alt="ホテル京セラ"></a></h2>
            <p id="ft_address">〒899-5117 鹿児島県霧島市隼人町見次1409-1</p>
            <h3 id="ft_tellno" class="en"><?php if (is_mobile()) : ?><a href="tel:0995-43-7111" onclick="gtag('event', 'tel-tap', {'event_category':'click','event_label': 'footer'});">TEL 0995-43-7111</a><?php else : ?>TEL 0995-43-7111<?php endif; ?></h3>
            <nav class="btns mb30 smb20">
                <?php if (in_category(array('restaurant_info', 'delsole_info', 'kyoharuka_info', 'amore_info', 'yumenokuni_info'))) : ?>
                    <a href="<?php bloginfo('url'); ?>/restaurant/reservation/?post_id=<?php echo $post->ID; ?>" class="squarebtn_restaurant"><span>レストラン予約</span></a>
                <?php else : ?>
                    <a href="<?php bloginfo('url'); ?>/restaurant/reservation/" class="squarebtn_restaurant"><span>レストラン予約</span></a>
                <?php endif; ?>
                <a href="./?tripla_booking_widget_open=search&type=plan&is_including_occupied=true" class="squarebtn_reserve"><span>宿泊予約</span></a>
            </nav>
            <nav id="ft_txtbtns" class="btns mb30 smb20">
                <a href="<?php bloginfo('url'); ?>/" class="txtbtn_normal"><span>ホーム</span></a>
                <a href="<?php bloginfo('url'); ?>/company/" class="txtbtn_normal"><span>会社概要</span></a>
                <a href="<?php bloginfo('url'); ?>/recruit/" class="txtbtn_normal"><span>採用情報</span></a>
                <a href="<?php bloginfo('url'); ?>/privacypolicy/" class="txtbtn_normal sp_mauto"><span>プライバシーポリシー</span></a>
            </nav>
            <nav id="ft_snsbtns" class="btns mb40 smb30">
                <a href="https://twitter.com/Hotel_Kyocera" class="a_sns icon_sns_twitter" target="_blank"></a>
                <a href="https://www.facebook.com/hotelkyocera/" class="a_sns icon_sns icon_sns_facebook" target="_blank"></a>
                <a href="https://www.instagram.com/hotel_kyocera/?hl=ja" class="a_sns icon_sns_instagram" target="_blank"></a>
                <a href="https://www.youtube.com/channel/UCR5S3NtSXJow_N8eD6NH-1Q" class="a_sns icon_sns_youtube" target="_blank"></a>
                <a href="https://www.tripadvisor.jp/Hotel_Review-g1022935-d1069644-Reviews-Hotel_Kyocera-Kirishima_Kagoshima_Prefecture_Kyushu.html" class="a_sns icon_sns_tripadvisor" target="_blank"></a>
            </nav>
            <p class="copyrights en">© Hotel Kyocera. All Rights Reserved.</p>
        </div>
    </div>
    <div id="ft_btm">
        <div id="ft_grouptxt"><span class="mr10 smr0">グループサイト<span class="sep">:</span></span><a href="https://www.princess-kyoto.co.jp/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/images/ft_logo_group.png" alt="ホテル日航プリンセス京都"></a><a href="https://krd.kyocera.co.jp/" target="_blank" class="smt5"><img src="<?php bloginfo('template_directory'); ?>/assets/images/ft_logo_group_krd-kyocera.png" alt="京セラ興産株式会社"></a></div>
    </div>
</footer><!-- / footer -->