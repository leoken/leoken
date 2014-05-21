<?php 
        $image = get_field('header_image');
         
        if( !empty($image) ): 
         
          // vars
          $url = $image['url'];
          $title = $image['title'];
          $alt = $image['alt'];
          $caption = $image['caption'];
         
          // thumbnail
          $size = 'full';
          $thumb = $image['sizes'][ $size ];
          $width = $image['sizes'][ $size . '-width' ];
          $height = $image['sizes'][ $size . '-height' ]; ?>

    <div id="header-image" class="">
      <div class="header-inner">
          <style>
           #header-image {
            background-image: url(<?php echo $url; ?>);
          }
          </style>
      </div>
    </div>
<?php endif; ?>