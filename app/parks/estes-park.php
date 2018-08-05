<?php
  require( "../config.php" );

  # Page Vars
  $title = 'Estes Park';
  $canonical_uri = '/parks/estes-park.php';


  include( ROOT . 'templates/top.php' );
?>
<section>
  <div class="container">
    <h1 class="">Estes Park</h1>
    <p>Estes Park is a town in northern Colorado. It’s known as a base for the Rocky Mountain National Park, home to wildlife including elk and bears, plus miles of trails.</p>
    <?php

      $count = 26;
      $park = 'estes-park';
      $path = '/images/parks/estes-park';
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
