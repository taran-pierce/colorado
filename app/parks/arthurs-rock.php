<?php
  require( "../config.php" );

  # Page Vars
  $title = "Arthur's Rock";
  $canonical_uri = '/parks/arthurs-rock.php';

  include( ROOT . 'templates/top.php' );
?>
<section>
  <div class="container">
    <h1 class="">Arthur's Rock</h1>
    <?php

      $count = 102;
      $park = 'arthurs-rock';
      $path = '/images/parks/arthurs-rock';
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
