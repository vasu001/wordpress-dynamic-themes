<?php get_header(); ?>
<section id="blog-posts">
	<div class="container">
		<article id="main-blog-side">
			<h2>Latest Blogs</h2>
			<nav>
				<ul class="nav-ul">
					<?php
						while ( have_posts() ):
							the_post();
							?>
							<li class="nav-list">
								<div class="nav-list-div-one">
									<div class="nav-list-div-one-one">
										<a href="<?php echo get_permalink(); ?>">
											<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
										</a>
									</div>
									<div class="nav-list-div-one-two">
										<a class="nav-link" href="<?php echo get_permalink(); ?>">
											<h3><?php echo get_the_title(); ?></h3>
										</a>
										<p><?php echo get_the_excerpt(); ?></p>
									</div>
								</div>
								<div class="nav-list-div-two">
									<a href="<?php echo get_permalink(); ?>" class="btn-article">Read More</a>
								</div>
							</li>
						<?php endwhile; ?>
				</ul>
			</nav>
		</article>
		<aside id="sidebar-blog-side">
			<div class="card">
				<h2>Archives</h2>
				<nav>
					<ul class="nav-ul">
						<li class="nav-list"><a href="#" class="nav-link">Link 1</a></li>
						<li class="nav-list"><a href="#" class="nav-link">Link 2</a></li>
						<li class="nav-list"><a href="#" class="nav-link">Link 3</a></li>
						<li class="nav-list"><a href="#" class="nav-link">Link 4</a></li>
						<li class="nav-list"><a href="#" class="nav-link">Link 5</a></li>
					</ul>
				</nav>
			</div>
		</aside>
	</div>
</section>
<?php get_footer(); ?>
