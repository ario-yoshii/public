                    <div id="lsc_column_side">
                        <div id="lsc_column_side_inner" class="sp_sps">
                            <h3 class="side_cat_ttl nmt3"><span class="side_cat_en en">CATEGORY</span><span class="side_cat_ja">カテゴリー</span></h3>
                            <nav class="side_categories">
							<?php $chosen_id = 58; $thisCat = get_category($chosen_id);if ($thisCat->count != 0 ) :?>
                                <a href="<?php bloginfo('url'); ?>/attention/"><span>重要なお知らせ</span></a>
							<?php endif ?>
							<?php $chosen_id = 47; $thisCat = get_category($chosen_id);if ($thisCat->count != 0 ) :?>	
                                <a href="<?php bloginfo('url'); ?>/news/"><span>お知らせ</span></a>
							<?php endif ?>
							<?php $chosen_id = 1; $thisCat = get_category($chosen_id);if ($thisCat->count != 0 ) :?>
                                <a href="<?php bloginfo('url'); ?>/info/"><span>インフォメーション</span></a>
							<?php endif ?>
							<?php $chosen_id = 9; $thisCat = get_category($chosen_id);if ($thisCat->count != 0 ) :?>
                                <a href="<?php bloginfo('url'); ?>/info/restaurant/"><span>レストラン・バー</span></a>
							<?php endif ?>
                                <div class="low_btns">
									<?php $chosen_id = 20; $thisCat = get_category($chosen_id);if ($thisCat->count != 0 ) :?>
                                    <a href="<?php bloginfo('url'); ?>/info/restaurant/delsole/"><span>デルソーレ</span></a>
									<?php endif ?>
									<?php $chosen_id = 23; $thisCat = get_category($chosen_id);if ($thisCat->count != 0 ) :?>
                                    <a href="<?php bloginfo('url'); ?>/info/restaurant/kyoharuka/"><span>京はるか</span></a>
									<?php endif ?>
									<?php $chosen_id = 24; $thisCat = get_category($chosen_id);if ($thisCat->count != 0 ) :?>
                                    <a href="<?php bloginfo('url'); ?>/info/restaurant/amore/"><span>バー・アモーレ</span></a>
									<?php endif ?>
									<?php $chosen_id = 25; $thisCat = get_category($chosen_id);if ($thisCat->count != 0 ) :?>
                                    <a href="<?php bloginfo('url'); ?>/info/restaurant/yumenokuni/"><span>夢の国</span></a>
									<?php endif ?>
                                </div>
								<?php $chosen_id = 46; $thisCat = get_category($chosen_id);if ($thisCat->count != 0 ) :?>
                                <a href="<?php bloginfo('url'); ?>/info/stay/"><span>ご宿泊</span></a>
								<?php endif ?>
								<?php $chosen_id = 56; $thisCat = get_category($chosen_id);if ($thisCat->count != 0 ) :?>
                                <a href="<?php bloginfo('url'); ?>/info/banquet/"><span>宴会</span></a>
								<?php endif ?>
								<?php $chosen_id = 45; $thisCat = get_category($chosen_id);if ($thisCat->count != 0 ) :?>
                                <a href="<?php bloginfo('url'); ?>/info/relaxation/"><span>リラクゼーション</span></a>
								<?php endif ?>
								<?php $chosen_id = 21; $thisCat = get_category($chosen_id);if ($thisCat->count != 0 ) :?>
                                <a href="<?php bloginfo('url'); ?>/info/shop/"><span>ショップ</span></a>
								<?php endif ?>
                            </nav>
                        </div>
                    </div>