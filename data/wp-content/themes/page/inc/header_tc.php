<header><!-- header -->
    <div class="inner_b">
        <h2 id="hd_logo"><a href="<?php bloginfo('url'); ?>/tc/"><img src="<?php bloginfo('template_directory'); ?>/assets/images/hd_logo.png" alt="HOTEL KYOCERA"></a></h2>
        <nav id="gnavis">
            <div class="gnavi_item">
                <a href="<?php bloginfo('url'); ?>/tc/accommodations/" class="mm-target haslow"><span>客房介紹</span></a>
            </div>
            <div class="gnavi_item">
                <a href="<?php bloginfo('url'); ?>/tc/restaurant/" class="mm-target haslow"><span>餐廳酒吧</span></a>
            </div>
            <div class="gnavi_item">
                <a href="<?php bloginfo('url'); ?>/tc/relaxation/" class="mm-target haslow"><span>釋放壓力</span></a>
            </div>
            <div class="gnavi_item">
                <a href="<?php bloginfo('url'); ?>/tc/company/" class="mm-target haslow"><span>公司名稱</span></a>
            </div>
           <!-- <div class="gnavi_item">
                <a href="<?php bloginfo('url'); ?>/tc/access/" class="mm-target haslow"><span>Access</span></a>
            </div>-->
            <div class="gnavi_item hd_onlyPc">
                <span class="lang_btmline"></span>
                <select name="" class="btn_language mm-target en" onchange="location.href=value;">
                    <option label="日本語" value="<?php bloginfo('url'); ?>/">日本語</option>
                    <option label="English" value="<?php bloginfo('url'); ?>/en/">English</option>
                    <option label="한국어" value="<?php bloginfo('url'); ?>/kr/">한국어</option>
                    <option label="簡体中文" value="<?php bloginfo('url'); ?>/cn/">簡体中文</option>
                    <option label="繁體中文" value="<?php bloginfo('url'); ?>/tc/" selected>繁體中文</option>
                </select>
            </div>
        </nav>
        <div class="gnavi_item hd_onlyTb">
            <span class="lang_btmline"></span>
            <select name="" class="btn_language mm-target en" onchange="location.href=value;">
                    <option label="日本語" value="<?php bloginfo('url'); ?>/">日本語</option>
                    <option label="English" value="<?php bloginfo('url'); ?>/en/">English</option>
                    <option label="한국어" value="<?php bloginfo('url'); ?>/kr/">한국어</option>
                    <option label="簡体中文" value="<?php bloginfo('url'); ?>/cn/">簡体中文</option>
                    <option label="繁體中文" value="<?php bloginfo('url'); ?>/tc/" selected>繁體中文</option>
            </select>
            <div id="menubox">
                <p class="menutxt en">menu</p>
                <a class="menu-trigger" href="#">
                    <span></span><span></span><span></span>
                </a>
            </div>
        </div>
        <div id="cvbox">
            <p class="tellno en hd_onlyPc"><span>TEL</span>&nbsp;+81-995-43-7111</p>
            <a href="<?php bloginfo('url'); ?>/tc/access/" class="accbtn hd_onlyPc"><span>訪問</span></a>
            <a href="tel:0995-43-7111" class="hd_boxbtn sp_tellno hd_onlyTb" onclick="gtag('event', 'tel-tap', {'event_category':'click','event_label': 'header'});"><span>TEL</span></a>
            <a href="<?php bloginfo('url'); ?>/tc/access/" class="hd_boxbtn sp_accbtn hd_onlyTb"><span>訪問</span></a>
        </div>
        <div id="revbox">
            <a href="<?php bloginfo('url'); ?>/restaurant/reservation/?post_id=<?php echo $post->ID; ?>" class="hd_boxbtn restrant_boxbtn"><span>Restaurant<br>Reservations</span></a>
            <a href="./?tripla_booking_widget_open=search&type=plan&is_including_occupied=true" class="hd_boxbtn reserve_boxbtn reserve_boxbtn_en"><span>Room<br>Reservations</span></a>
        </div>
    </div>
</header>