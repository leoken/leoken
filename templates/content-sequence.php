<?php
$args = array(
    'post_type' => 'attachment',
    'numberposts' => -1,
    'post_status' => null,
    'post_parent' => $post->ID
);
$sequence_query = new WP_Query( $args );
$c = 0;
$class = '';
?>
<div id="sequence">
    <ul class="sequence-canvas">

    <?php while ($sequence_query->have_posts()) : $sequence_query->the_post(); ?>
        <?php if ( $c == 0 ) { $class = 'animate-in'; } ?>
        <li class="<?php echo $class ?>">
            <?php get_template_part('templates/content', get_post_format()); ?>
        </li>
<?php
    $c++;
    endwhile;
    wp_reset_postdata();
?>
    </ul>
</div>