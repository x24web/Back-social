<?php
$args = array(
    'status' => 'approve'
);
 
// The comment Query
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );

if ( $comments ) {
 foreach ( $comments as $comment ) {
    // print_r( $comment)
?>
<div class="comments">
    <div class="media-body">
        <h5><?php echo $comment->comment_author ?></h5>
        <?php echo '<p>' . $comment->comment_content . '</p>'; ?>
        <div class="comment-buttons">
            <a href="#">Replay</a>
        </div>
    </div>
</div>

<?php
 }
} else {
 echo 'No comments found.';
}
?>