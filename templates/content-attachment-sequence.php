<div id="sequence">
    <ul class="sequence-canvas">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
     $args = array(
       'post_type' => 'attachment',
       'numberposts' => -1,
       'post_status' => null,
       'post_parent' => $post->ID
      );
      $c = 0;
      $class = '';
      $attachments = get_posts( $args );
         if ( $attachments ) {
            foreach ( $attachments as $attachment ) { ?>
            <?php // if ( $c == 0 ) { $class = 'animate-in'; } ?>
               <li class="<?php echo $class ?>">
                 <div class="inner-frame-wrap">
                 <?php 
                  $attachment_id = $attachment->ID; // attachment ID
                  $image_attributes = wp_get_attachment_image_src( $attachment_id, 'medium' ); // returns an array
                  if( $image_attributes ) {
                    $image_url = $image_attributes[0];
                    $image_width = $image_attributes[1];
                    $image_height = $image_attributes[2];
                  ?> 
                  <div class="inner-gradient"></div>
                  <div class="header-image" style="background-image: url(<?php echo $image_url; ?>);"></div>
                  <?php } ?>
                 </div>
               </li>
              <?php } // foreach $attachment
         } // endif $attachments
        $c++; endwhile; endif; ?>
    </ul>
</div>


