<?php
  require( "../config.php" );

  # Page Vars
  $title = 'Lory State Park';

  include( ROOT . 'templates/top.php' );
?>
<section>
  <div class="container">
    <h1 class="">Lory State Park</h1>
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
