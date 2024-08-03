
<?php get_header(); ?>

<div id="news-contents" class="clearfix">

	<div class="news-box clearfix">

	
		<?php wp_reset_query(); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="single-box">
				<p class="date"><?php the_time('Y年m月d日'); ?></p>
				<h3 class="title serif"><?php the_title(); ?></h3>

				<div class="txt-box"><?php the_content(__('(more...)')); ?></div>
				<div class="clear"></div>

				
				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
				
				<p class="list-back"><a href="<?php bloginfo('url'); ?>/news">一覧にもどる</a></p>


			</article>	
			
			<ul class="menu-list">
				<li class="all"><a href="<?php bloginfo('url'); ?>/news">すべて表示</a></li>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>
	</div>

</div>
<?php get_footer(); ?>