<?php
// Get only the approved comments
$args = array(
	'status' => 'approve',
);

// The comment Query
$comments_query = new WP_Comment_Query();
$comments       = $comments_query->query( $args );

// Comment Loop
if ( $comments ) {
	foreach ( $comments as $comment ) {
		echo '<p>' . $comment->comment_content . '</p>';
	}
} else {
	echo '暂时还没有人留言，快来做第一个留言的人吧。';
}
