<?php get_header(); ?>

<!-- ##### Breadcumb Area Start ##### -->
<?php get_template_part('template-parts/breadcumb'); ?>


    <section class="south-contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-heading">
                        <h6>Contact info</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="content-sidebar">
                        <!-- Office Hours -->
                        <div class="weekly-office-hours">
                            <ul>
                                <li class="d-flex align-items-center justify-content-between"><span>Monday - Friday</span> <span>09 AM - 19 PM</span></li>
                                <li class="d-flex align-items-center justify-content-between"><span>Saturday</span> <span>09 AM - 14 PM</span></li>
                                <li class="d-flex align-items-center justify-content-between"><span>Sunday</span> <span>Closed</span></li>
                            </ul>
                        </div>
                        <!-- Address -->
                        <div class="address mt-30">
                            <h6><img src="<?php bloginfo('template_directory'); ?>/images/icons/phone-call.png" alt=""> +45 677 8993000 223</h6>
                            <h6><img src="<?php bloginfo('template_directory'); ?>/images/icons/envelope.png" alt=""> office@template.com</h6>
                            <h6><img src="<?php bloginfo('template_directory'); ?>/images/icons/location.png" alt=""> Main Str. no 45-46, b3, 56832,<br>Los Angeles, CA</h6>
                        </div>
                    </div>
                </div>

                <!-- Contact Form Area -->
                <div class="col-12 col-lg-8">
                    <div class="contact-form">
                    <?php echo do_shortcode('[contact-form-7 id="90" title="Contact form 1"]'); ?> 
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>