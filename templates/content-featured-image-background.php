<?php
$size = 'thumbnail';
$image_id = get_post_thumbnail_id();
$image_url = wp_get_attachment_image_src($image_id, $size);
$image_url = $image_url[0];
$classes = array(
    'img-responsive',
    '',
 );?>
<style>
  article {
    background-image: url(<?php echo $image_url; ?>);
  }
</style>