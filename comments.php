<?php
    if(!count($comments) == 0){
        echo "<h2 class='title'>Recent Comments</h2>";
        $args = array(
            'walker'            => null,
            'max_depth'         => '',
            'style'             => 'li',
            'callback'          => null,
            'end-callback'      => null,
            'type'              => 'all',
            'reply_text'        => 'Reply',
            'page'              => '',
            'per_page'          => '',
            'avatar_size'       => 80,
            'reverse_top_level' => null,
            'reverse_children'  => '',
            'format'            => 'html5',
            'short_ping'        => false,
            'echo'              => true   
        );
        wp_list_comments($args, $comments);
    }else{
        echo "<h2 class='title'>No Comment</h2>";
        echo "<h3 class='text-center'>Share your opinion and be the first comment</h1>";
    }
?>