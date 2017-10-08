<?php
  require( "config.php" );

  # Page Vars
  $active_link = '/';

  include( 'templates/top.php' );
?>
<section>
  <div class="container">
    <h1>Colorado Adventures</h1>
    <p>Just wanted a way to chronicle and show off some of our adventures in Colorado. It's so beautiful here and we like to take photos so we wanted a way that we could easily show them off to people.</p>
    <p>This seemed like the easiest way.</p>
  </div>
</section>
<section>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-lg-4">
        <div class="card">
          <h2>Lumpy Ridge Trailhead</h2>
          <div class="card-container">
            <p>The Lumpy Ridge Loop (also known as the Twin Owls Loop) circles around Lumpy Ridge, a massive granite rock outcropping that’s been sculpted by wind and erosion over the last 1.8 billion years.</p>
            <a href="/parks/lumpy-ridge-trailhead.php" class="btn btn-primary">View Photos</a>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-lg-4">
        <div class="card">
          <h2>Estes Park</h2>
          <div class="card-container">
            <p>Estes Park is a town in northern Colorado. It’s known as a base for the Rocky Mountain National Park, home to wildlife including elk and bears, plus miles of trails.</p>
            <a href="/parks/estes-park.php" class="btn btn-primary">View Photos</a>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-lg-4">
        <div class="card big-t">
          <h2>Big Thompson River</h2>
          <div class="card-container">
            <p>The Big Thompson River is a tributary of the South Platte River, approximately 78 miles long &mdash; give or take &mdash;, in the U.S. state of Colorado.</p>
            <a href="/parks/big-thompson-river.php" class="btn btn-primary">View Photos</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'templates/bottom.php' ?>
