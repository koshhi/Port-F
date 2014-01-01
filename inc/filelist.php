<?php

/* attached files */

$files = get_posts(
          array(
          'numberposts' => -1,
          'post_parent' => get_the_ID(),
          'post_type' => 'attachment',
          'post_mime_type' => 'application',
          'order' => 'ASC',
          'orderby' => 'menu_order'
          )
        );

if ( $files ) { ?>

<h4><?php _e( 'Attached Files' ); ?></h4>

<ul class="filelist">

<?php foreach( $files as $file ) {

      $file_url = wp_get_attachment_url( $file->ID );
?>
      
  <li><a href="<?php echo $file_url; ?>" title="<?php _e( 'View/Download' ); ?>"><?php echo $file->post_title; ?></a> (<?php echo size_format( filesize( get_attached_file( $file->ID ) ) ); ?>)</li>

  <?php } ?>

</ul>

<?php } ?>