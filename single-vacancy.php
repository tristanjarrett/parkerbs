<?php get_header(); ?>

	<div class="pbs-vacancy-section">
		<div class="container-fluid">
			<div class="row">

				<div class="col-lg-9">
					<div class="pbs-content">
						<?php
						if ( have_posts() ) :
							while ( have_posts() ) : the_post(); ?>

							<div class="row">
								<div class="col">
									<h4><?php the_title(); ?></h4>
									<p class="text-muted">Posted <i class="far fa-fw fa-calendar-alt"></i> <?php the_date(); ?></p>
								</div>

								<div class="col-auto">
									<a href="#apply-now" class="btn btn-primary">Apply Now</a>
								</div>
							</div>

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

					<div class="pbs-content" id="apply-now">

						<form>

							<div class="form-group">
						    <label for="">First name *</label>
						    <input type="text" class="form-control" id="" placeholder="Joe" required>
						  </div>

							<div class="form-group">
							  <label for="">Last name *</label>
							  <input type="text" class="form-control" id="" placeholder="Bloggs" required>
						  </div>

						  <div class="form-group">
						    <label for="exampleFormControlInput1">Email address *</label>
						    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
						  </div>

							<div class="form-group">
						    <label for="exampleFormControlInput1">Telephone / Mobile *</label>
						    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="0844 257 7000" required>
						  </div>

							<div class="form-group">
						    <label for="exampleFormControlFile1">Attach CV *</label>
						    <input type="file" class="form-control-file" id="exampleFormControlFile1" required>
						  </div>

						  <div class="form-group">
						    <label for="exampleFormControlTextarea1">Notes</label>
						    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
						  </div>

							<div class="text-right">
								<button type="submit" class="btn btn-primary">Submit Application</button>
							</div>

						</form>

					</div>

				</div>

				<div class="col-lg-3">
					<div class="pbs-sidebar">
						<ul>
							<?php
				       $args = array(
								 'post_type' => 'vacancy',
								 'posts_per_page' => -1,
								 'orderby'=> 'title',
								 'order' => 'ASC'
							 );
				       $branches = new WP_Query( $args );
				       while ( $branches->have_posts() ) : $branches->the_post(); ?>
				         <li><a href="<?php the_permalink(); ?>"><span class="pbs-icon"><i class="fas fa-fw fa-user"></i></span> <?php the_title(); ?></a></li>

 								<?php wp_reset_postdata(); ?>

							 <?php
				       endwhile;
				   		?>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</div>

<?php get_footer(); ?>
