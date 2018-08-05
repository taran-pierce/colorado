<?php
  require( "../config.php" );

  # Page Vars
  $title = 'Lumpy Ridge Trailhead';
  $canonical_uri = '/parks/lumpy-ridge-trailhead.php';

  include( ROOT . 'templates/top.php' );
?>
<section>
  <div class="container">
    <h1 class="">Lumpy Ridge Trailhead</h1>
    <p>The Lumpy Ridge Loop (also known as the Twin Owls Loop) circles around Lumpy Ridge, a massive granite rock outcropping that’s been sculpted by wind and erosion over the last 1.8 billion years.</p>
    <?php

      $count = 40;
      $park = 'lumpy-ridge-trailhead';
      $path = '/images/parks/lumpy-ridge-trailhead';
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
