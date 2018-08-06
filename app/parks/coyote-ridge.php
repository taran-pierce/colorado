<?php
  require( "../config.php" );

  # Page Vars
  $title = 'Coyote Ridge';
  $canonical_uri = '/parks/coyote-ridge.php';

  include( ROOT . 'templates/top.php' );
?>
<section>
  <div class="container">
    <h1 class="">Coyote Ridge</h1>
    <?php

      $count = 93;
      $park = 'coyote-ridge';
      $path = '/images/parks/coyote-ridge';
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
