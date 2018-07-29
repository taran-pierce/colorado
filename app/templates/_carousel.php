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
        for ($i = 0; $i <= $count; $i++) {
          print_r('<picture>');
            print_r('<source srcset="' . $path . '1170x150" media="(min-width: 1200px)">');
            print_r('<source srcset="' . $path . '9700x150" media="(min-width: 992px)">');
            print_r('<source srcset="' . $path . '740x150" media="(min-width: 768px)">');
            print_r('<img class="img-responsive" src="' . $path .'450x150">');
          print_r('</picture>');
        }
      ?>
    </div>
  </div>
  <div class="thumbnails">
    <?php
        for ($i = 1; $i <= $count; $i++) {
          print_r('<div class="thumb">');
            print_r('<a href="#light-box-' . $i . '">');
              print_r('<img class="img-responsive" src="' . $path .'150x150">');
            print_r('</a>');
          print_r('</div>');
        }
      ?>
  </div>
  <div class="controls">
    <a href="#prev">prev</a>
    <a href="#next">next</a>
    <a href="#toggle" class="view-toggle">Toggle</a>
  </div>
</div>