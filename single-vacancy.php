<?php get_header(); ?>

	<div class="pbs-breadcrumb">
		<nav class="container-fluid">
			<ul>
				<li><a href="<?php echo site_url(); ?>">Home</a></li>
				<li>/</li>
				<li><a href="<?php echo site_url() . '/vacancies'; ?>">Vacancies</a></li>
				<li>/</li>
				<li class="text-muted"><?php the_title(); ?> - <?php echo get_post_meta($post->ID, 'custom_input', true); ?></li>
			</ul>
		</nav>
	</div>

	<div class="pbs-vacancy-section">

		<div class="container-fluid">

			<div class="row">

				<div class="col-lg-9">
					<div class="pbs-content">
						<?php
						if ( have_posts() ) :
							while ( have_posts() ) : the_post(); ?>

								<h4><?php the_title(); ?> - <?php echo get_post_meta($post->ID, 'custom_input', true); ?></h4>
								<p class="text-muted">Posted <i class="far fa-fw fa-calendar-alt"></i> <?php the_date(); ?></p>

								<?php
								if ( has_tag() ) {
									// Show the tags if any
									the_tags();
								} else {
									// Do nothing
								}

								if ( has_category() ) {
									// Show the category if any
									the_category();
								} else {
									// Do nothig
								}
								?>

								<hr>
								<?php the_content(); ?>

								<?php wp_reset_postdata(); ?>

							<?php endwhile;
						endif;
						?>
					</div>



					<div class="pbs-content">

						<h4>Apply Now</h4>
						<p class="text-muted"><?php the_title(); ?> - <?php echo get_post_meta($post->ID, 'custom_input', true); ?></p>
						<hr>

						<form>

							<div class="form-group">
						    <label for="">First name <span class="pbs-red">*</span></label>
						    <input type="text" class="form-control" id="" placeholder="Joe" required>
						  </div>

							<div class="form-group">
							  <label for="">Last name <span class="pbs-red">*</span></label>
							  <input type="text" class="form-control" id="" placeholder="Bloggs" required>
						  </div>

						  <div class="form-group">
						    <label for="exampleFormControlInput1">Email address <span class="pbs-red">*</span></label>
						    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
						  </div>

							<div class="form-group">
						    <label for="exampleFormControlInput1">Telephone / Mobile <span class="pbs-red">*</span></label>
						    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="0844 257 7000" required>
						  </div>

							<div class="form-group">
					   		<label for="exampleFormControlFile1">Attach CV <span class="pbs-red">*</span></label>
						    <input type="file" class="form-control-file" id="exampleFormControlFile1" required>
							</div>

						  <div class="form-group">
						  	<label for="exampleFormControlTextarea1">Notes</label>
					   		<textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
							</div>

							<p class="text-right">Fields marked with ( <span class="pbs-red">*</span> ) are required</p>

							<div class="text-right">
								<button type="submit" class="btn btn-primary">Submit Application</button>
							</div>

						</form>

					</div>

				</div>

				<div class="col-lg-3">
					<div class="pbs-sidebar">
						<h4 class="text-center mb-3 pbs-font pbs-heading">More Vacancies</h4>
						<ul>
							<?php
				       $args = array(
								 'post_type' => 'vacancy',
								 'posts_per_page' => -1,
								 'orderby'=> 'title',
								 'order' => 'ASC',
								 'post__not_in' => array( $post->ID )
							 );
				       $branches = new WP_Query( $args );
							 if ( $branches->have_posts() ) {
					       while ( $branches->have_posts() ) : $branches->the_post(); ?>
					        <li>
										<a href="<?php the_permalink(); ?>" class="d-flex justify-content-start align-items-center">
											<div class="pbs-icon"><i class="fas fa-fw fa-user-tie"></i></div>
											<div>
												<?php the_title(); ?>
												<span class="d-block text-muted">Location - <?php echo get_post_meta($post->ID, 'custom_input', true); ?></span>
											</div>
										</a>
									</li>

	 								<?php wp_reset_postdata(); ?>

								 <?php
					       endwhile;
							 }
							else {
								echo "<span class='p-3 d-block'>Sorry, this is the only vacancy available at this time.</span>";
							}
				   		?>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</div>

<?php get_footer(); ?>
