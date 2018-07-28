<?php
  require( "../config.php" );

  # Page Vars
  $title = 'Lumpy Ridge Trailhead';

  include( ROOT . 'templates/top.php' );
?>
<section>
  <div class="container">
    <h1 class="">Lumpy Ridge Trailhead</h1>
    <p>Cool ass place, here is some info about it.</p>
    <div class="carousel-wrapper">
      <?php
        include( ROOT . 'templates/_carousel.php');
      ?>
    </div>
  </div>
</section>
<?php include( ROOT . 'templates/bottom.php' ); ?>
