<?php
  require( "../config.php" );

  # Page Vars
  $active_link = '/';

  include( ROOT . 'templates/top.php' );
?>
<section>
  <div class="container">
    <h1>Parks we have visited</h1>
    <p>Here is a list of parks we have visited. Each one has photos to go with it.</p>
  </div>
</section>
<section>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-4">
        <div class="card">
          <h2>Lumpy Ridge Trailhead</h2>
          <a href="/parks/lumpy-ridge-trailhead.php" class="btn btn-primary">View Photos</a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include( ROOT . 'templates/bottom.php' ); ?>
