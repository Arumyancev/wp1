
<!-- get_header('test');  -->
<?php get_header(); ?>


<div class="container">
	<div class="row">
		<?php if ( have_posts() ) : while(have_posts()) : the_post(); ?>

		<div class="col-md-12">
			<div class="card"">
				<img src="..." class="card-img-top" alt="img">
				<div class="card-body">

					<h5 class="card-title">
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h5>

					<p class="card-text">
						<?php /*the_excerpt();*/ the_content('', true);?>
					</p>
					<a href="<?php the_permalink(); ?>" class="btn btn-primary">Переход</a>
				</div>
			</div>
		</div>

		<?php endwhile; ?>

		<?php else : ?>
				<p>Постов нет</p>
		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>

