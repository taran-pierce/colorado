<?php
  require( "../config.php" );

  # Page Vars
  $title = 'South Shore';
  $canonical_uri = '/parks/south-shore.php';

  include( ROOT . 'templates/top.php' );
?>
<section>
  <div class="container">
    <h1 class="">South Shore</h1>
    <p>Located along the south shore of Lake Loveland on US Highway 34. Parking is located along the south shore of the lake, and easy access is provided to the Recreation Trail as it goes along the lake shore. There are numerous benches to rest on, and many beautiful sculptures to enjoy!</p>
    <?php

      $count = 40;
      $park = 'south-shore';
      $path = '/images/parks/south-shore';
      include( ROOT . 'templates/_carousel.php');
    ?>
  </div>
</section>
<?php
  # pass in additional js file
  $js = [
    '/js/siema.min.js',
    '/js/carousel.js'
  ];
  include( ROOT . 'templates/bottom.php' );
?>
