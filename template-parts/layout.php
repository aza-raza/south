
        
            <a href="<?php the_permalink(); ?>">
            <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">

                <!-- Property Thumbnail -->
                <div class="property-thumb">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">

                    <div class="tag">
                        <span>For Sale</span>
                    </div>
                    <div class="list-price">
                        <p>$ <?php the_field('price'); ?></p>
                    </div>
                </div>
                <!-- Property Content -->
                <div class="property-content">
                    <h5><?php the_title(); ?></h5>
                    <p class="location"><img src="<?php bloginfo('template_directory'); ?>/images/icons/location.png"
                            alt=""><?php the_field('adresse'); ?></p>
                    <p><?php the_content(); ?></p>
                    <div class="property-meta-data d-flex align-items-end justify-content-between">
                        <div class="new-tag">
                            <img src="<?php bloginfo('template_directory'); ?>/images/icons/new.png" alt="">
                        </div>
                        <div class="bathroom">
                            <img src="<?php bloginfo('template_directory'); ?>/images/icons/bathtub.png" alt="">
                            <span><?php the_field('bathroom'); ?></span>
                        </div>
                        <div class="garage">
                            <img src="<?php bloginfo('template_directory'); ?>/images/icons/garage.png" alt="">
                            <span><?php the_field('bedroom'); ?></span>
                        </div>
                        <div class="space">
                            <img src="<?php bloginfo('template_directory'); ?>/images/icons/space.png" alt="">
                            <span><?php the_field('sq'); ?> sq ft</span>
                        </div>
                    </div>
                </div>
                
            </div>
            </a>
        
    

