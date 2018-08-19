<?php
  require( "../../config.php" );

  # Page Vars
  $title = "Boston and Salem Massechuesettes";
  $canonical_uri = '/places/mass';

  include( ROOT . 'templates/top.php' );
?>
<section>
  <div class="container">
    <h1 class="">Massachuesetts</h1>
    <?php

      $count = 170;
      $park = 'mass';
      $path = '/images/places/mass';
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
