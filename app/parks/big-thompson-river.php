<?php
  require( "../config.php" );

  # Page Vars
  $title = 'Big Thompson River';
  $canonical_uri = '/parks/big-thompson-river.php';

  include( ROOT . 'templates/top.php' );
?>
<section>
  <div class="container">
    <h1 class="">Big Thompson River</h1>
    <p>The Big Thompson River is a tributary of the South Platte River, approximately 78 miles long — give or take —, in the U.S. state of Colorado.</p>
    <?php

      $count = 36;
      $park = 'big-thompson-river';
      $path = '/images/parks/big-thompson-river';
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