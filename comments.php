<?php if ( 'comments.php' == basename( $_SERVER['SCRIPT_FILENAME'] ) ) return; ?>
<section id="comments">
<?php 
if ( have_comments() ) : 
global $comments_by_type;
$comments_by_type = &separate_comments( $comments );
if ( ! empty( $comments_by_type['comment'] ) ) : 
?>
<?php endif; ?>
</section>

<?php 
endif; 

if ( comments_open() ) comment_form();
?>
</section>