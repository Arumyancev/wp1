<?php get_header(); ?>


<div class="container">
	<div class="row">
		<?php  while(have_posts()) : the_post(); ?>

		<div class="col-md-12">
			<div class="card"">
				<img src="..." class="card-img-top" alt="img">
				<div class="card-body">

					<h5 class="card-title">
						
							<?php the_title(); ?>
						
					</h5>

					<p class="card-text">
						<?php the_content('', true); ?>
					</p>

				</div>
			</div>
		</div>

		<?php endwhile; ?>

	</div>
</div>

<?php get_footer(); ?>