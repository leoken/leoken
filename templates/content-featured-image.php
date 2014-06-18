<?php
$size = 'thumbnail';
$class = 'img-responsive';
if ( has_post_thumbnail() ) {
  the_post_thumbnail($size, array('class' => $class));
} else { ?>
  <img class="<?php echo $class; ?>" src="http://placehold.it/420x420&text=placeholder">
<?php }