<?php get_header(); ?>

<!-- ##### Breadcumb Area Start ##### -->
<?php get_template_part('template-parts/breadcumb'); ?>


    <!-- ##### Blog Area Start ##### -->
    <section class="blog-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">

                    <div class="single-blog-area">
                        <!-- Post Thumbnail -->
                        <div class="blog-post-thumbnail">
                            <img src="img/blog-img/blog3.jpg" alt="">
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <!-- Date -->
                            <div class="post-date">
                                <a href="#"><?php the_time('F j, Y'); ?></a>
                            </div>
                            <!-- Headline -->
                            <a href="#" class="headline"><?php the_title(); ?></a>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p>By <a href="#"><?php the_author_posts_link(); ?></a> | in <a href="#">Uncategorized</a> | <a href="#">2 Comments</a></p>
                            </div>
                            <?php the_content(); ?>
                        </div>
                    </div>

                    <!-------------------------- comments area -->
                    <div class="comments-area">
                        <h5> <?php  echo get_comments_number();  ?> Comments</h5>

                            <?php comments_template('/new-comments.php'); ?>

                        <ol>
                            <?php wp_list_comments('callback=new_comment'); ?>
                        </ol>
                    </div>

                    <!------------------------------- Leave a Comment/Reply Form-->
                    <div class="leave-comment-area mt-70 clearfix">
                        <div class="comment-form">

                        <?php $comment_args = array( 
                                'title_reply'=>'<h5>Leave a reply</h5>',
                                'comment_notes_before'=>'',
                                

                                'fields' => apply_filters( 'comment_form_default_fields', array(

                                    'author' => '<div class="form-group"> <input id="contact-name" class="form-control" placeholder="Name" name="author" type="text"   /></div>',

                                    'email' => '<div class="form-group"><input id="contact-email" class="form-control" placeholder="Email" name="email" type="email"  /></div>',
                                    'cookies'=>'',

                                )),

                                'comment_field' => '<div class="form-group"><textarea class="form-control" name="comment" id="comment" cols="30" rows="10" placeholder="Message"></textarea></div>',

                                'submit_button' => '<button type="submit" class="btn south-btn">Submit Reply</button>'


                                );

                                 ?>

                            <?php comment_form($comment_args); ?>

                        </div>
                    </div>

                </div><!--/col-12  -->



                <!-- Widget -->
                <div class="col-12 col-lg-4">
                    <div class="blog-sidebar-area">

                        <!-- Search Widget -->
                        <div class="search-widget-area mb-70">
                            <form action="#" method="get">
                                <input type="search" name="search" id="search" placeholder="Search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>

                        <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('widget') ) ?>
                        
                        <!-- Carousel Widget -->
                        <div class="featured-properties-slides owl-carousel">

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

                    </div>
                </div>

            </div><!--/row  -->
        </div>
    </section>

    <?php get_footer(); ?>