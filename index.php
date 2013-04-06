<?php get_header(); ?>

<div class="row">
	<div class="large-8 columns">
		<ul data-orbit>
			<li><img src="http://fakeimg.pl/960x500/00CED1/FFF/?text=Slide+01"></li>
			<li><img src="http://fakeimg.pl/960x500/00CED1/FFF/?text=Slide+02"></li>
			<li><img src="http://fakeimg.pl/960x500/00CED1/FFF/?text=Slide+03"></li>
		</ul>
			<div class="panel">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

						<small><?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?></small>
						<figure class="large-4 columns"> 
							 <?php the_post_thumbnail('ultimas');?>
						</figure>
						<div class="entry large-8 columns">
							<?php the_content(); ?>
						</div>

						<footer class="postmetadata">
							<?php the_tags('Tags: ', ', ', '<br />'); ?>
							Posted in <?php the_category(', ') ?> | 
							<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
						</footer>

					</article>

				<?php endwhile; ?>

				<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

				<?php else : ?>

					<h2>Not Found</h2>

				<?php endif; ?>
			</div>
	</div>

	<?php get_sidebar(); ?>

</div>


<?php get_footer(); ?>
