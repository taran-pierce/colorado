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
    <p>Cool ass place, here is some info about it.</p>
    <?php

      $count = 10;
      $path = 'http://via.placeholder.com/';
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