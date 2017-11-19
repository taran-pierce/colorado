<?php
  require( "../config.php" );

  # Page Vars
  $active_link = '/';

  include( ROOT . 'templates/top.php' );
?>
<link href="/node_modules/lightbox2/src/css/lightbox.css" rel="stylesheet">
<section>
  <div class="container thumbnail-gallery">
    <h1>Estes Park Thumbs</h1>
    <div class="row">
      <?php
        # build thumbnail gallery
        $column = '<div class="col-xs-6 col-sm-3">';
        $div_end = '</div>';
        $image_json = file_get_contents( "data/image-gallery-estes-park.json" );
        $json = json_decode( $image_json );
     
        foreach ( $json as $value ) {
          # create vars
          $image_file_name = $value->file_name;
          $image_file_path = $value->file_path;
          $file_path = $image_file_path . $image_file_name;
          $image_lightbox = $value->lightbox;
          $image_title = $value->title;
          $image_thumb = $value->thumbnail;
          $thumb_file_path = $image_thumb . $image_file_name;

          # create lightbox anchor tag
          $lightbox_anchor ='<a href="' . $file_path . '" data-lightbox="' . $image_lightbox . '" data-title="' . $image_title . '">'; 

          # create thumbnail
          $thumbnail = '<img class="img-responsive" src="' . $thumb_file_path . '" alt="' . $image_title . '" />';

          print_r( $column );
            print_r( $lightbox_anchor );
              print_r( $thumbnail );
            print_r( '</a>' );
          print_r( $div_end );
        }
      ?>
  </div>
</section>
<?php 
  # push extra separate JS files
  # lightbox JS
  array_push($js, '../node_modules/lightbox2/src/js/lightbox.js' );

  include( ROOT . 'templates/bottom.php' );
?>
