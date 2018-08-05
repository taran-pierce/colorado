<?php
  require( "../config.php" );

  # Page Vars
  $title = 'Lory State Park';
  $canonical_uri = '/parks/lory-state-park.php';

  include( ROOT . 'templates/top.php' );
?>
<section>
  <div class="container">
    <h1 class="">Lory State Park</h1>
    <p>Lory State Park, is a state park located west of the ciy of Fort Collins and is north of Horsetooh Reservoir.</p>
    <?php

      $count = 54;
      $park = 'lory-state';
      $path = '/images/parks/lory-state';
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
