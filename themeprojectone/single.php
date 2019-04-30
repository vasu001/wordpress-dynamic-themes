<?php get_header(); ?>
<section id="blog-posts">
	<div class="container">
		<article id="main-blog-side">
			<div id="date-info">
				<div>
					<a href="#"><i
								class="fas fa-angle-left"></i> Blog</a>
				</div>
				<div>
					<p>April 29, 2019 by Vasu Srivastava in Category</p>
				</div>
			</div>
			<div id="single-blog-page">
				<div class="image">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Featured Image">
				</div>
				<div class="paragraph">
					<?php
						while ( have_posts() ):
							the_post();
							the_content();
						endwhile;
					?>
				</div>
			</div>
		</article>
	</div>
</section>
<?php get_footer(); ?>
