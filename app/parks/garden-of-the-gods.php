<?php
  require( "../config.php" );

  # Page Vars
  $title = 'Garden of the Gods';
  $canonical_uri = '/parks/garden-of-the-gods.php';

  include( ROOT . 'templates/top.php' );
?>
<section>
  <div class="container">
    <h1 class="">Garden of the Gods</h1>
    <?php

      $count = 81;
      $park = 'garden-of-the-gods';
      $path = '/images/parks/garden-of-the-gods';
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
