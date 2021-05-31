<?php get_header(); ?>

<!-- ##### Breadcumb Area Start ##### -->
<?php get_template_part('template-parts/breadcumb'); ?>

    <!-- ##### Advance Search Area Start ##### -->
	<?php get_template_part('template-parts/search-area'); ?>

    <!-- ##### Listings Content Area Start ##### -->
    <section class="listings-content-wrapper section-padding-100">
        <div class="container">
            <!-- carousel -->
            <div class="row">
            
                <div class="col-12">
                    <!-- Single Listings Slides -->
                    
                    <div class="single-listings-sliders owl-carousel">
                        
                        <?php if(have_rows('images_carousel')):?>
                            <?php while(have_rows('images_carousel')): the_row(); ?>
                                <img src="<?php the_sub_field('image_carousel'); ?>" alt="">
                            <?php endwhile; ?>
                        <?php endif; ?> 
                            
                    </div>
                    
                </div>
                
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="listings-content">
                        <!-- Price -->
                        <div class="list-price">
                            <p>$ <?php the_field('price'); ?></p>
                        </div>
                        <h5><?php the_title(); ?></h5>
                        <p class="location"><img src="<?php bloginfo('template_directory'); ?>/images/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odiomattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu varius ac. Etiam cursus turpis lectus, id iaculis risus tempor id. Phasellus fringilla nisl sed sem scelerisque, eget aliquam magna vehicula.</p>
                        <!-- Meta -->
                        <div class="property-meta-data d-flex align-items-end">
                            <div class="new-tag">
                                <img src="<?php bloginfo('template_directory'); ?>/images/icons/new.png" alt="">
                            </div>
                            <div class="bathroom">
                                <img src="<?php bloginfo('template_directory'); ?>/images/icons/bathtub.png" alt="">
                                <span>2</span>
                            </div>
                            <div class="garage">
                                <img src="<?php bloginfo('template_directory'); ?>/images/icons/garage.png" alt="">
                                <span>2</span>
                            </div>
                            <div class="space">
                                <img src="<?php bloginfo('template_directory'); ?>/images/icons/space.png" alt="">
                                <span>120 sq ft</span>
                            </div>
                        </div>
                        <!-- Core Features -->


                        <?php
                            $ckeckbox = get_field('ckeckbox');
                            if( $ckeckbox ): ?>
                            <ul class="listings-core-features d-flex align-items-center">
                            <?php foreach( $ckeckbox as $ckeckbox ): ?>
                            <li><i class="fa fa-check" aria-hidden="true"></i><?php echo $ckeckbox; ?></li>
                            <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                        <!-- Listings Btn Groups -->
                        <div class="listings-btn-groups">
                            <a href="#" class="btn south-btn">See Floor plans</a>
                            <a href="#" class="btn south-btn active">calculate mortgage</a>
                        </div>
                    </div>
                </div>

                <!-- realtor-info -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="contact-realtor-wrapper">
                        <div class="realtor-info">

                            <!--  -->
                            <?php
                            $featured_posts = get_field('team-memebr');
                            if( $featured_posts ): ?>
                                <?php foreach( $featured_posts as $post ): 
                                // Setup this post for WP functions (variable must be named $post).
                                setup_postdata($post); ?>

                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                <div class="realtor---info">
                                    <h2><?php the_title(); ?></h2>
                                    <p><?php the_content(); ?></p>
                                    <h6><img src="<?php bloginfo('template_directory'); ?>/images/icons/phone-call.png" alt=""> <?php the_field('phone'); ?></h6>
                                    <h6><img src="<?php bloginfo('template_directory'); ?>/images/icons/envelope.png" alt=""> <?php the_field('email'); ?></h6>
                                </div>
                                <div class="realtor--contact-form">
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="realtor-name" placeholder="Your Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control" id="realtor-number" placeholder="Your Number">
                                        </div>
                                        <div class="form-group">
                                            <input type="enumber" class="form-control" id="realtor-email" placeholder="Your Mail">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="realtor-message" cols="30" rows="10" placeholder="Your Message"></textarea>
                                        </div>
                                        <button type="submit" class="btn south-btn">Send Message</button>
                                    </form>
                                </div>
                                <?php endforeach; ?>

                                <?php 
                                // Reset the global post object so that the rest of the page works correctly.
                                wp_reset_postdata(); ?>
                            <?php endif; ?>

                        
                        </div>
                    </div>
                </div>
            </div>
            <!-- Listing Maps -->
            <div class="row">
                <div class="col-12">
                    <div class="listings-maps mt-100">
                        <div id="googleMap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10080.172919453944!2d4.3335001944862706!3d50.83036317557468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c4104cba9f49%3A0x4a5cd8bf29e3aa22!2sSaint-Gilles!5e0!3m2!1sfr!2sbe!4v1620984725442!5m2!1sfr!2sbe" width="1110" height="540" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>