<?php get_header(); ?>

<!-- ##### Breadcumb Area Start ##### -->
<?php get_template_part('template-parts/breadcumb'); ?>

    <!-- ##### Advance Search Area Start ##### -->
	<?php get_template_part('template-parts/search-area'); ?>

    <!-- ##### Listing Content Wrapper Area Start ##### -->
    <section class="listings-content-wrapper section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="listings-top-meta d-flex justify-content-between mb-100">
                        <div class="view-area d-flex align-items-center">
                            <span>View as:</span>
                            <div class="grid_view ml-15"><a href="#" class="active"><i class="fa fa-th" aria-hidden="true"></i></a></div>
                            <div class="list_view ml-15"><a href="#"><i class="fa fa-th-list" aria-hidden="true"></i></a></div>
                        </div>
                        <div class="order-by-area d-flex align-items-center">
                            <span class="mr-15">Order by:</span>
                            <select>
                              <option selected>Default</option>
                              <option value="1">Newest</option>
                              <option value="2">Sales</option>
                              <option value="3">Ratings</option>
                              <option value="3">Popularity</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- properties -->
            <div class="row">

                <?php
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    $args = new WP_Query(
						array(
							'post_type' => 'property',
                            'posts_per_page' => 9,
                            'order' => 'ASC',
                            'paged'  => $paged
						)
					);               
                ?>
                <?php  while ($args->have_posts()) : $args->the_post(); ?>
                
                    <!-- include layout -->
                    <div class="col-12 col-md-6 col-xl-4">
                        <?php get_template_part('template-parts/layout'); ?> 
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

            </div><!-- /row properties -->


        </div>
    </section>

<?php get_footer(); ?>