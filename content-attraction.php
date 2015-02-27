<?php 

  /* Template for displaying Attractions within Category listing */

  if ( has_post_thumbnail() ) {
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
  }

?>

<?php 
  // get relevant metadata

  $id = get_the_ID();
  $website = get_post_meta( $id, 'attraction_website', true ); 
  $facebook = get_post_meta( $id, 'attraction_facebook', true ); 
  $twitter = get_post_meta( $id, 'attraction_twitter', true);
  $tumblr = get_post_meta($id, 'attraction_tumblr', true);
  $etsy = get_post_meta($id, 'attraction_etsy', true);
  $bandcamp = get_post_meta($id, 'attraction_bandcamp', true);
  $reverb = get_post_meta($id, 'attraction_reverbnation', true);
  $video = get_post_meta( $id, 'attraction_video', true);
?>
        <section class="attraction">
      
          <ul class="links">
            <?php if ( $website != '') : ?>
              <li><a href="<?php echo $website; ?>" class="web" rel="me" target="_blank">Website</a></li>
            <?php endif; ?>
            <?php if ( $facebook != '') : ?>
              <li><a href="<?php echo $facebook; ?>" class="fb" rel="me" target="_blank">Facebook</a></li>
            <?php endif; ?>
            <?php if ( $twitter != '') : ?>
              <li><a href="http://twitter.com/<?php echo $twitter; ?>" class="tw" rel="me" target="_blank">Twitter</a></li>
            <?php endif; ?>
            <?php if ( $tumblr != '') : ?>
              <li><a href="http://<?php echo $tumblr; ?>.tumblr.com/" class="tumblr" rel="me" target="_blank">Tumblr</a></li>
            <?php endif; ?>
            <?php if ( $etsy != '') : ?>
              <li><a href="<?php echo $etsy; ?>" class="etsy" rel="me" target="_blank">Etsy</a></li>
            <?php endif; ?>
            <?php if ( $bandcamp != '') : ?>
              <li><a href="<?php echo $bandcamp; ?>" class="bandcamp" rel="me" target="_blank">Bandcamp</a></li>
            <?php endif; ?>
            <?php if ( $reverb != '') : ?>
              <li><a href="<?php echo $reverb; ?>" class="reverb" rel="me" target="_blank">ReverbNation</a></li>
            <?php endif; ?>
         </ul>

          <a href="<?php echo $website; ?>"><?php the_post_thumbnail('medium', array('class' => 'alignright')); ?></a>

          <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'jme-event-base-theme' ) ); ?>

          <?php if (is_single() && $video !== ''): ?>
            <iframe src='<?php echo $video; ?>' frameborder='0' allowfullscreen='allowfullscreen'></iframe>
          <?php endif; ?>
         
        </section>

<?php /*
<a href="<?php the_permalink(); ?>">
<li class="attraction-thumbnail" 
    style="background-image:url('<?php echo $large_image_url[0]; ?>');"> 
  <?php the_title(); ?>           
</li>
</a>

*/ ?>