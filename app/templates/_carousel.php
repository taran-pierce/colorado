<?php
  #
  # takes 4 sizes of images
  # mobile, tablet, desktop, large
  #
  # requires $path from include for src
  #
  # requires $count for number of slides
  # TODO swap out placeholder images for actual file path for images

?>

<div class="carousel">
  <div class="carousel-wrapper">
    <div class="siema">
      <?php
        for ($i = 1; $i <= $count; $i++) {
          $file_path_large = $path . '/large/' . $i . '.jpg';
          $file_path_desktop = $path . '/desktop/' . $i . '.jpg';
          $file_path_mobile = $path . '/mobile/' . $i . '.jpg';

          print_r('<picture>');
            print_r('<source srcset="' . $file_path_large . '" media="(min-width: 1200px)">');
            print_r('<source srcset="' . $file_path_desktop . '" media="(min-width: 768px)">');
            print_r('<img class="img-responsive" src="' . $file_path_mobile .'">');
          print_r('</picture>');
        }
      ?>
    </div>
  </div>
  <div class="thumbnails">
    <?php
        for ($i = 1; $i <= $count; $i++) {
          $file_path_thumbs = $path . '/thumbs/' . $i . '.jpg';

          print_r('<div class="thumb">');
            print_r('<a href="#light-box-' . $i . '">');
              print_r('<img class="img-responsive" src="' . $file_path_thumbs .'">');
            print_r('</a>');
          print_r('</div>');
        }
      ?>
  </div>
  <div class="controls">
    <a href="#prev">prev</a>
    <a href="#next">next</a>
    <a href="#toggle" class="view-toggle">thumbs</a>
  </div>
</div>
<p>You can scroll through the images by dragging clicking and dragging your mouse on the images in the carousel or you can use the navigation to cycle through them. You can also toggle to a
smaller thumbnail view.</p>
<p>In the thumbnail view you can click the images and get a larger higer resolution image.</p>