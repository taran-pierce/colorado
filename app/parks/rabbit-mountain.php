<?php
  require( "../config.php" );

  # Page Vars
  $title = 'Rabbit Mountain';
  $canonical_uri = '/parks/rabbit-mountain.php';

  include( ROOT . 'templates/top.php' );
?>
<section>
  <div class="container">
    <h1 class="">Rabbit Mountain</h1>
    <?php

      $count = 45;
      $park = 'rabbit-mountain';
      $path = '/images/parks/rabbit-mountain';
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
