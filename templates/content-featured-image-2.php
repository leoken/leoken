<?php
        $image = get_field('header_image');

        if( !empty($image) ):

          // vars
          $url = $image['url'];
          $title = $image['title'];
          $alt = $image['alt'];
          $caption = $image['caption'];

          // thumbnail
          $size = 'medium';
          $thumb = $image['sizes'][ $size ];
          $width = $image['sizes'][ $size . '-width' ];
          $height = $image['sizes'][ $size . '-height' ]; ?>


          <style>
           article {
            background-image: url(<?php echo $thumb; ?>);
          }
          </style>
<?php endif; ?>