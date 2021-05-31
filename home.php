<?php get_header(); ?>

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
			<?php
     		$loop = new WP_Query(
     		array(
			'post_type' => 'slide',
			'posts_per_page' => -1,
			)
			);
			?>

            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

				<div class="single-hero-slide bg-img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
					<div class="container h-100">
						<div class="row h-100 align-items-center">
							<div class="col-12">
								<div class="hero-slides-content">
									<h2 data-animation="fadeInUp" data-delay="100ms"><?php the_title(); ?></h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile; wp_reset_query(); ?>
   
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Advance Search Area Start ##### -->
	<?php get_template_part('template-parts/search-area'); ?>
	

    <!-- ##### Featured Properties Area Start ##### -->
    <section class="featured-properties-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp">
                        <h2>Featured Properties</h2>
                        <p>Suspendisse dictum enim sit amet libero malesuada feugiat.</p>
                    </div>
                </div>
            </div>

			<div class="row">
				<?php
					$loop = new WP_Query(
						array(
							'post_type' => 'property',
							'posts_per_page' => 6,
							'orderby' => 'name',
							'order' => 'ASC'
						)
					);               
				?> 
				<?php while ($loop->have_posts()) : $loop->the_post(); ?>  
					<div class="col-12 col-md-6 col-xl-4">
						<!-- include layout -->
						<?php get_template_part('template-parts/layout'); ?>
					</div>
				<?php endwhile;
				wp_reset_query(); ?>

			</div> <!-- row -->
			
        </div>
    </section>
    <!-- ##### Featured Properties Area End ##### -->

    <!-- ##### Call To Action Area Start ##### -->
    <section class="call-to-action-area bg-fixed bg-overlay-black" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/bg-img/cta.jpg)">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-12">
                    <div class="cta-content text-center">
                        <h2 class="wow fadeInUp" data-wow-delay="300ms">Are you looking for a place to rent?</h2>
                        <h6 class="wow fadeInUp" data-wow-delay="400ms">Suspendisse dictum enim sit amet libero malesuada feugiat.</h6>
                        <a href="#" class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="500ms">Search</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Call To Action Area End ##### -->

    <!-- ##### Testimonials Area Start ##### -->
    <section class="south-testimonials-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                        <h2>Client testimonials</h2>
                        <p>Suspendisse dictum enim sit amet libero malesuada feugiat.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="testimonials-slides owl-carousel wow fadeInUp" data-wow-delay="500ms">

                        <!-- Single Testimonial Slide -->
						<?php
							$loop = new WP_Query(
							array(
							'post_type' => 'testimonial',
							'posts_per_page' => -1,
							)
							);
						?>

						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

							<div class="single-testimonial-slide text-center">
								<h5><?php the_title(); ?></h5>
								<p><?php the_content(); ?></p>

								<div class="testimonial-author-info">
									<img src="<?php the_post_thumbnail_url(); ?>" alt="">
									<p><?php the_field('testimonial-author'); ?>, <span><?php the_field('testimonial-customer'); ?></span></p>
								</div>
							</div>
							
						<?php endwhile; wp_reset_query(); ?>
   
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Testimonials Area End ##### -->

    <!-- ##### Editor Area Start ##### -->
    <section class="south-editor-area d-flex align-items-center">
        <!-- Editor Content -->
        <div class="editor-content-area">
            <!-- Section Heading -->
            <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                <img src="<?php bloginfo('template_directory'); ?>/images/icons/prize.png" alt="">
                <h2>jeremy Scott</h2>
                <p>Realtor</p>
            </div>
            <p class="wow fadeInUp" data-wow-delay="500ms">Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odiomattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu varius ac. Etiam cursus turpis lectus, id iaculis risus tempor id. Phasellus fringilla nisl sed sem scelerisque, eget aliquam magna vehicula.</p>
            <div class="address wow fadeInUp" data-wow-delay="750ms">
                <h6><img src="<?php bloginfo('template_directory'); ?>/images/icons/phone-call.png" alt=""> +45 677 8993000 223</h6>
                <h6><img src="<?php bloginfo('template_directory'); ?>/images/icons/envelope.png" alt=""> office@template.com</h6>
            </div>
            <div class="signature mt-50 wow fadeInUp" data-wow-delay="1000ms">
                <img src="<?php bloginfo('template_directory'); ?>/images/core-img/signature.png" alt="">
            </div>
        </div>

        <!-- Editor Thumbnail -->
        <div class="editor-thumbnail">
            <img src="<?php bloginfo('template_directory'); ?>/images/bg-img/editor.jpg" alt="">
        </div>
    </section>
    <!-- ##### Editor Area End ##### -->
	

<?php get_footer(); ?>