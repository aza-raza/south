<?php
function new_comment($comment, $args, $depth) {
    ?>
​
    <li class="single_comment_area">
        <div class="comment-wrapper d-flex" id="comment-<?php comment_ID(); ?>">

            <!-- Comment Meta -->
            <div class="comment-author">
                <?php echo get_avatar( $comment); ?>
            </div>

            <!-- Comment Content -->
            <div class="comment-content">
                <div class="comment-meta">
                    <a href="<?= $comment->comment_author_url ?>"
                        class="comment-author-name"><?= $comment->comment_author ?></a> |
                    <a href="#" class="comment-date"><?php echo get_comment_date() ?></a> |
                
                    <!-- Reply Content -->
                    <?php comment_reply_link( array_merge($args, array(
                            'reply_text' => __('Reply ', 'textdomain'),
                            'depth'      => $depth,
                            'max_depth'  => $args['max_depth']
                            )
                        )); 
                    ?>
    ​
                </div>
                <p><?php comment_text(); ?></p>
            </div>
        </div>
​
​
    <!-- <ul>
        <li></li>
    </ul> -->
​
    <?php
}