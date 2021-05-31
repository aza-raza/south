<?php get_header(); ?>

<!-- ##### Breadcumb Area Start ##### -->
<?php get_template_part('template-parts/breadcumb'); ?>

    <!-- ##### Blog Area Start ##### -->
    <section class="south-blog-area section-padding-100">
        <div class="container">

            <div class="row ">
                <!-- articles -->
                <div class="col-12 col-lg-8">

                    <!-- Single Blog Area -->
                    <?php
                        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                        $args = new WP_Query(
                            array(
                                'post_type' => 'post',
                                'posts_per_page' => 3,
                                'orderby' => 'name',
                                'order' => 'ASC',
                                'paged'  => $paged
                            )
                        );               
                    ?> 
                    <?php while ($args->have_posts()) : $args->the_post(); ?>      
                        <div class="single-blog-area mb-50">
                            <!-- Post Thumbnail -->
                            <div class="blog-post-thumbnail">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
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
                                <p><?php the_excerpt(); ?></p>
                                <!-- Read More btn -->
                                <a href="<?php the_permalink(); ?>" class="btn south-btn">Read More</a>
                            </div>
                        </div>
                     
                    <?php endwhile;?>

                    <!-- pagination -->
                    <?php
                        $pagination = paginate_links( array(
                        'base' => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $args->max_num_pages,
                        'prev_next' => false,
                        'type' => 'array'
                        ) );
                    ?>
                    <?php if ( ! empty( $pagination ) ) : ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="south-pagination d-flex justify-content-end">
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination">
                                            <?php foreach ( $pagination as $key => $page_link ) : ?>
                                                <li class="page-item
                                                    <?php
                                                        $link = htmlspecialchars($page_link);
                                                        $link = str_replace( ' current', '', $link);
                                                        if ( strpos( $page_link, 'current' ) !== false ) { echo ' active'; }
                                                    ?>
                                                ">
                                                <?php
                                                    if ( $link ) {
                                                    $link = str_replace( 'page-numbers', 'page-link', $link);
                                                    }
                                                    echo htmlspecialchars_decode($link);
                                                ?>
                                                </li>
                                            <?php endforeach ?>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>
                    
                    <?php wp_reset_query(); ?>

                </div>

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

            </div> <!-- /row -->

            <!-- Pagination -->
            

        </div> <!-- /container -->
    </section>

<?php get_footer(); ?>