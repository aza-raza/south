<?php get_header(); ?>

<!-- ##### Breadcumb Area Start ##### -->
<?php get_template_part('template-parts/breadcumb'); ?>


    <!-- ##### Advance Search Area Start ##### -->
	<?php get_template_part('template-parts/search-area'); ?>

    <!-- ##### About Content Wrapper Start ##### -->
    <section class="about-content-wrapper section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="section-heading text-left wow fadeInUp" data-wow-delay="250ms">
                        <h2>We search for the perfect home</h2>
                        <p>Suspendisse dictum enim sit amet libero</p>
                    </div>
                    <div class="about-content">
                        <p class="wow fadeInUp" data-wow-delay="450ms"><?php the_content(); ?></p>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="section-heading text-left wow fadeInUp" data-wow-delay="250ms">
                        <h2>Featured Properties</h2>
                        <p>Suspendisse dictum enim sit amet libero</p>
                    </div>

                    <div class="featured-properties-slides owl-carousel wow fadeInUp" data-wow-delay="350ms">
                        
                        <!-- Single Slide -->

                            <?php
                                $loop = new WP_Query(
                                    array(
                                        'post_type' => 'property',
                                        'posts_per_page' => 3,
                                        'orderby' => 'name',
                                        'order' => 'ASC'
                                    )
                                );               
                            ?> 
                            <?php while ($loop->have_posts()) : $loop->the_post(); ?>  
                              
                                <!-- include layout -->
                                <?php get_template_part('template-parts/layout'); ?>
                                
                            <?php endwhile;
                            wp_reset_query(); ?>

                    </div>
                    
                </div><!-- col-12 -->
            </div> <!-- row -->
        </div>
    </section>

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

    <!-- ##### Meet The Team Area Start ##### -->
    <section class="meet-the-team-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Meet The Team</h2>
                        <p>Suspendisse dictum enim sit amet libero</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Single Team Member -->
                        <?php
							$loop = new WP_Query(
							array(
							'post_type' => 'team',
							'posts_per_page' => 3,
							)
							);
					    ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="250ms">
                                <!-- Team Member Thumb -->
                                <div class="team-member-thumb">
                                    <img src="" alt="">
                                </div>
                                <!-- Team Member Info -->
                                <div class="team-member-info">
                                    <div class="section-heading">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                        <h2><?php the_title(); ?></h2>
                                        <p><?php the_content(); ?></p>
                                    </div>
                                    <div class="address">
                                        <h6><img src="<?php bloginfo('template_directory'); ?>/images/icons/phone-call.png" alt=""><?php the_field('phone'); ?></h6>
                                        <h6><img src="<?php bloginfo('template_directory'); ?>/images/icons/envelope.png" alt=""><?php the_field('email'); ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; wp_reset_query(); ?>
                
            </div>
        </div>
    </section>

<?php get_footer(); ?>



