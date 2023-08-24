<header><!-- header -->
    <div class="inner_b">
        <h2 id="hd_logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/hd_logo.png" alt="ホテル京セラ"></a></h2>
        <nav id="gnavis">
            <div class="gnavi_item">
                <a href="<?php bloginfo('url'); ?>/stay/" class="mm-target haslow"><span>ご宿泊</span></a>
                <div class="low_gnv">
                    <a href="<?php bloginfo('url'); ?>/stay/plan/"><span>ご宿泊プラン</span></a>
                    <a href="<?php bloginfo('url'); ?>/stay/service/"><span>各種サービス</span></a>
                    <a href="<?php bloginfo('url'); ?>/stay/breakfast/"><span>ご朝食</span></a>
                    <a href="<?php bloginfo('url'); ?>/stay/agreement/"><span>宿泊約款</span></a>
                    <a href="<?php bloginfo('url'); ?>/stay/school/"><span>修学旅行について</span></a>
                </div>
            </div>
            <div class="gnavi_item">
                <a href="<?php bloginfo('url'); ?>/restaurant/" class="mm-target haslow"><span>レストラン・バー</span></a>
                <div class="low_gnv">
                    <a href="<?php bloginfo('url'); ?>/restaurant/delsole/"><span>洋食レストラン デルソーレ</span></a>
                    <a href="<?php bloginfo('url'); ?>/restaurant/kyoharuka/"><span>日本料理 京はるか</span></a>
                    <a href="<?php bloginfo('url'); ?>/restaurant/amore/"><span>メインバー・アモーレ</span></a>
                    <a href="<?php bloginfo('url'); ?>/restaurant/yumenokuni/"><span>バイキングレストラン 夢の国</span></a>
                </div>
            </div>
            <div class="gnavi_item">
                <a href="https://www.kyocera-wedding.jp/" target="_blank" class="mm-target haslow"><span>ウエディング</span></a>
            </div>
            <div class="gnavi_item">
                <a href="<?php bloginfo('url'); ?>/banquet/" class="mm-target haslow"><span>ご宴会・会議</span></a>
                <div class="low_gnv">
                    <a href="<?php bloginfo('url'); ?>/banquet/tenga/"><span>大宴会場 天雅</span></a>
                    <a href="<?php bloginfo('url'); ?>/banquet/seiryu/"><span>清流・浮雲・陽光</span></a>
                    <a href="<?php bloginfo('url'); ?>/banquet/southerncross/"><span>サザンクロス</span></a>
                    <a href="<?php bloginfo('url'); ?>/banquet/bouquet/"><span>ブーケ・ガーランド</span></a>
                    <a href="<?php bloginfo('url'); ?>/banquet/flower/"><span>フラワー</span></a>
                </div>
            </div>
            <div class="gnavi_item">
                <a href="<?php bloginfo('url'); ?>/relaxation/" class="mm-target haslow"><span>温泉</span></a>
                <div class="low_gnv">
                    <a href="<?php bloginfo('url'); ?>/relaxation/oxya/"><span>オクシア</span></a>
                    <a href="<?php bloginfo('url'); ?>/relaxation/salon/"><span>リラクゼーションサロン</span></a>
                </div>
            </div>
            <div class="gnavi_item">
                <a href="<?php bloginfo('url'); ?>/access/" class="mm-target haslow"><span>館内施設</span></a>
                <div class="low_gnv">
                    <a href="<?php bloginfo('url'); ?>/shop/"><span>ショップ</span></a>
                    <a href="<?php bloginfo('url'); ?>/members/"><span>アプリメンバーズ</span></a>
                    <a href="<?php bloginfo('url'); ?>/news/"><span>新着情報</span></a>
                    <a href="<?php bloginfo('url'); ?>/company/"><span>会社概要</span></a>
                    <a href="<?php bloginfo('url'); ?>/recruit/"><span>求人情報</span></a>
                </div>
            </div>
            <div class="gnavi_item hd_onlyPc">
                <span class="lang_btmline"></span>
                <select name="" class="btn_language mm-target en" onchange="location.href=value;">Language
                    <option label="Language" value="<?php bloginfo('url'); ?>/" selected>Language</option>
                    <option label="日本語" value="<?php bloginfo('url'); ?>/">日本語</option>
                    <option label="English" value="<?php bloginfo('url'); ?>/en/">English</option>
                    <option label="한국어" value="<?php bloginfo('url'); ?>/kr/">한국어</option>
                    <option label="簡体中文" value="<?php bloginfo('url'); ?>/cn/">簡体中文</option>
                    <option label="繁體中文" value="<?php bloginfo('url'); ?>/tc/">繁體中文</option>
                </select>
            </div>
        </nav>
        <div class="gnavi_item hd_onlyTb">
            <span class="lang_btmline"></span>
            <select name="" class="btn_language mm-target en" onchange="location.href=value;">
                <option label="Language" value="<?php bloginfo('url'); ?>/" selected>Language</option>
                <option label="日本語" value="<?php bloginfo('url'); ?>/">日本語</option>
                <option label="English" value="<?php bloginfo('url'); ?>/en/">English</option>
                <option label="한국어" value="<?php bloginfo('url'); ?>/kr/">한국어</option>
                <option label="簡体中文" value="<?php bloginfo('url'); ?>/cn/">簡体中文</option>
                <option label="繁體中文" value="<?php bloginfo('url'); ?>/tc/">繁體中文</option>
            </select>
            <div id="menubox">
                <p class="menutxt en">menu</p>
                <a class="menu-trigger" href="#">
                    <span></span><span></span><span></span>
                </a>
            </div>
        </div>
        <div id="cvbox">
            <p class="tellno en hd_onlyPc"><span>TEL</span>&nbsp;0995-43-7111</p>
            <a href="<?php bloginfo('url'); ?>/access/" class="accbtn hd_onlyPc"><span>アクセス</span></a>
            <a href="tel:0995-43-7111" class="hd_boxbtn sp_tellno hd_onlyTb" onclick="gtag('event', 'tel-tap', {'event_category':'click','event_label': 'header'});"><span>TEL</span></a>
            <a href="<?php bloginfo('url'); ?>/access/" class="hd_boxbtn sp_accbtn hd_onlyTb"><span>アクセス</span></a>
        </div>
        <div id="revbox">
            <?php if (in_category(array('restaurant_info', 'delsole_info', 'kyoharuka_info', 'amore_info', 'yumenokuni_info'))) : ?>
                <a href="<?php bloginfo('url'); ?>/restaurant/reservation/?post_id=<?php echo $post->ID; ?>" class="hd_boxbtn restrant_boxbtn"><span>レストラン<br>予約</span></a>
            <?php else : ?>
                <a href="<?php bloginfo('url'); ?>/restaurant/reservation/" class="hd_boxbtn restrant_boxbtn"><span>レストラン<br>予約</span></a>
            <?php endif; ?>
            <a href="./?tripla_booking_widget_open=search&type=plan&is_including_occupied=true" class="hd_boxbtn reserve_boxbtn"><span>宿泊予約</span></a>
        </div>
    </div>
</header>