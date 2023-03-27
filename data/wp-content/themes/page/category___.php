
<?php get_header(); ?>

<div id="info-contents" class="clearfix">
	<div class="title-info1">
		<div class="contents2 clearfix">
			<h2><img src="<?php bloginfo('template_directory'); ?>/images/info/title_info1.png" width="201" height="45" alt="お知らせ"/></h2>
		</div>
	</div>
	<div class="contents960 clearfix">
		<article class="info-list">
			<ul>
				<?php wp_reset_query(); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<a href="<?php the_permalink(); ?>">
						<li class="clearfix">
							<p class="date"><?php the_time('Y年m月d日'); ?></p>
							<h3 class="title"><?php the_title(); ?></h3>
						</li>
					</a>
				<?php endwhile; else: ?>
					<p>現在、登録されている情報はありません。</p>
				<?php endif; ?>
			</ul>

			<div class="posts-navi">
				<?php wp_pagenavi(); ?>
			</div>
		</article>			

		<ul class="menu-list">
			<li class="all"><a href="<?php bloginfo('url'); ?>/news">すべて表示</a></li>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>	
	</div>


</div>
<?php get_footer(); ?>