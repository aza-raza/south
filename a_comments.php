<?php 
    if ( post_password_required() ) {
        return;
    }
?>
<div id="comments" class="comments-area">
    <?php 
        if(have_comments(  )):
            //we have comments
    ?>
    <ol class="comment-list">
        <?php 
                $args = array(
                    'walker' => null,
                    'max_depth' => '',
                    'style' => 'ol',
                    'callback' => null,
                    'end-callback' => null,
                    'type' => 'all',
                    'reply_text' => 'Reply...',
                    'page' => '',
                    'per_page' => '',
                    'avatar_size' => 32,
                    'reverse_top_level' => null,
                    'reverse_children' => '',
                    'format' => 'html5',
                    'short_ping' => false,
                    'echo' => true

                );
                wp_list_comments( $args ); 
            ?>
    </ol>

    <?php 
        if(!comments_open( ) && get_comments_number( )):
    ?>


    <?php 
        endif;
    ?>
    <?php 
        endif;
    ?>


    <?php
    
    $comments_args = array(
        // change the title of send button 
        'label_submit'=>'Submit Reply',
        // change the title of the reply section
        'title_reply'=>'<h5>Leave a reply</h5>',
        // remove "Text or HTML to be displayed after the set of comment fields"
        'comment_notes_after' => '',
        
        'comment_field' => '<p class="comment-form-comment"><label for="comment"></label><br /><textarea class="form-control" id="message" name="message" cols="30" rows="10" placeholder="Message" aria-required="true"></textarea></p>',
        
        
        
        ),
    
                                                                                                                    

comment_form($comments_args);
    
    ?>


</div><!-- .comments-area -->



<div class="comments-area">

    <?php if(have_comments(  )) : ?>
    <h3>
        <?php
                                $number_of_comments = get_comments_number();
                                if($number_of_comments === 1){
                                    printf(
                                        _x(
                                            'One comment on &ldquo;%s&rdquo;',
                                            'comments title'
                                        ),
                                        get_the_title()
                                    );

                                }else{
                                    printf(
                                        _nx(
                                            '%1$s comment on &ldquo;%2$s&rdquo;',
                                            '%1$s comments on &ldquo;%2$s&rdquo;',
                                            $number_of_comments,
                                            'comments title'
                                        ),
                                        number_format_i18n($number_of_comments),
                                        get_the_title()
                                    );

                                }
                        
                            ?>
    </h3>

</div>



<?php
                                echo get_comments_number();
                            ?>

<!-- comments.php -->
<?php 
    $args = array(
        'title_reply' => '<h5>Leave a reply</h5>',
        'comment_field' => '
            <div class="form-group">
                <input type="text" class="form-control" id="contact-name" placeholder="Name">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="contact-email" placeholder="Email">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
            </div>
        ',
        'submit_button' => '<button type="submit" class="btn south-btn">Submit Reply</button>'
    );
    comment_form($args);
?>

<!-------------------------- comments -->
<div class="comments-area">
    <h5><?php echo get_comments_number(); ?> Comments</h5>
    <ol>
        <?php
                            wp_list_comments(array(
                                'style' => 'ol',
                                'avatar_size' => 32

                            ));
                            ?>
    </ol>
</div>

<!------------------------------- Leave A Comment/Reply Form-->
<div class="leave-comment-area mt-70 clearfix">
    <div class="comment-form">

        <!-- Comment Form -->
        <?php
                            // If comments are open or we have at least one comment, load up the comment template
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                            ?>

    </div>
</div>



<div class="south-pagination d-flex justify-content-end">
                        <nav aria-label="Page navigation">
                            <?php 
                            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
                            $args = array(  
                                'post_type' => 'property',
                                'posts_per_page'         => '9',
                                'paged'                  => $paged
                            );
                            query_posts( $args );
                            $posts= get_posts( $args );
                            if ($posts) {
                                foreach ( $posts as $post ) {
                                    get_template_part( 'template-parts/content', get_post_format() );
                                }
                                the_posts_pagination( array(
                                    'mid_size'=>3,
                                    'prev_text' => _( '« Previous'),
                                    'next_text' => _( 'Next »'),
                                ) );
                            }
                            else{
                                echo '<p>No post found..</p>';
                            }
                            ?>
                        </nav>
                    </div>






                    
        <!-- properties -->
        <div class="row">
                <?php
					$loop = new WP_Query(
                        
						array(
							'post_type' => 'property',
							'posts_per_page' => 9,
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

            </div> <!-- /row -->