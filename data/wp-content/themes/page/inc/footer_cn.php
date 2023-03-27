<footer><!-- footer -->
    <div id="ft_content">
        <div class="inner">
            <h2 id="ft_logo"><a href="<?php bloginfo('url'); ?>/en/"><img src="<?php bloginfo('template_directory'); ?>/assets/images/ft_logo.png" alt="HOTEL kyocera"></a></h2>
            <p id="ft_address">日本鹿儿岛县雾岛市贡隼人町1409-1</p>
            <h3 id="ft_tellno" class="en"><?php if (is_mobile()) : ?><a href="tel:+81-995-43-7111" onclick="gtag('event', 'tel-tap', {'event_category':'click','event_label': 'footer'});">TEL +81-995-43-7111</a><?php else: ?>TEL +81-995-43-7111<?php endif; ?></h3>
            <nav class="btns mb30 smb20">
                <a href="<?php bloginfo('url'); ?>/restaurant/reservation/?post_id=<?php echo $post->ID; ?>" class="squarebtn_restaurant btn_w280"><span>Restaurant <br class="onlySp">Reservations</span></a>
                <a href="./?tripla_booking_widget_open=search&type=plan&is_including_occupied=true" class="squarebtn_reserve btn_w280"><span>Room <br class="onlySp">Reservations</span></a>
            </nav>
            <nav id="ft_txtbtns" class="btns mb30 smb20">
                <a href="<?php bloginfo('url'); ?>/cn/" class="txtbtn_normal"><span>Home</span></a>
                <a href="<?php bloginfo('url'); ?>/en/agreement/" class="txtbtn_normal"><span>Terms and Conditions for Accommodation Contracts</span></a>
                <!--<a href="#" class="txtbtn_normal"><span>About us</span></a>
                <a href="#" class="txtbtn_normal"><span>Recruit</span></a>
                <a href="#" class="txtbtn_normal sp_mauto"><span>Privacy Policy</span></a>-->
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
        <div id="ft_grouptxt"><span class="mr10 smr5">Group site:</span><a href="https://www.princess-kyoto.co.jp/"><img src="<?php bloginfo('template_directory'); ?>/assets/images/ft_logo_group.png" alt=""></a></div>
    </div>
</footer><!-- / footer -->