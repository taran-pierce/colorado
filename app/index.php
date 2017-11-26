<?php
  require( "config.php" );

  # Page Vars
  $title = 'Colorado Adventures';

  include( 'templates/top.php' );
?>
<section>
  <div class="container">
    <div class="main-content">
      <h1>Colorado Adventures</h1>
      <p>Just wanted a way to chronicle and show off some of our adventures in Colorado. It's so beautiful here and we like to take photos so we wanted a way that we could easily show them off to people.</p>
      <p>This seemed like the easiest way.</p>
      <h2>Things to do in Colorado</h2>
      <p>There are really mainly two things to do in Colorado. Some kind of adventure in nature or drink craft beer. Both of which are pretty freaking awesome.</p>
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <h3>Hiking</h3>
          <p>There is so much beautful nature here in Colorado. There are plenty of rivers, lakes, parks and mountains to go check out.</p>
          <p>It's never ending.</p>
          <a href="/parks" class="btn btn-primary">Parks</a>
        </div>
        <!--
        <div class="col-xs-12 col-sm-6">
          <h3>Craft Beer</h3>
          <p>Every where you turn around there is a brewery and that isn't a bad thing. It seems as if almost everyone here enjoys beer and there are plenty of craft breweries to prove it.</p>
        </div>
        -->
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-lg-4">
        <div class="card">
          <h3>Lumpy Ridge Trailhead</h3>
          <div class="card-container">
            <p>The Lumpy Ridge Loop (also known as the Twin Owls Loop) circles around Lumpy Ridge, a massive granite rock outcropping that’s been sculpted by wind and erosion over the last 1.8 billion years.</p>
            <a href="/parks/lumpy-ridge-trailhead.php" class="btn btn-primary">View Photos</a>
            <a href="/parks/lumpy-ridge-trailhead-thumbs.php" class="btn btn-info pull-right">View Thumbnails</a>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-lg-4">
        <div class="card">
          <h3>Estes Park</h3>
          <div class="card-container">
            <p>Estes Park is a town in northern Colorado. It’s known as a base for the Rocky Mountain National Park, home to wildlife including elk and bears, plus miles of trails.</p>
            <a href="/parks/estes-park.php" class="btn btn-primary">View Photos</a>
            <a href="/parks/estes-park-thumbs.php" class="btn btn-info pull-right">View Thumbnails</a>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-lg-4">
        <div class="card big-t">
          <h3>Big Thompson River</h3>
          <div class="card-container">
            <p>The Big Thompson River is a tributary of the South Platte River, approximately 78 miles long &mdash; give or take &mdash;, in the U.S. state of Colorado.</p>
            <a href="/parks/big-thompson-river.php" class="btn btn-primary">View Photos</a>
            <a href="/parks/big-thompson-river-thumbs.php" class="btn btn-info pull-right">View Thumbnails</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-lg-4">
        <div class="card big-t">
          <h3>South Shore</h3>
          <div class="card-container">
            <p>Located along the south shore of Lake Loveland on US Highway 34.  Parking is located along the south shore of the lake, and easy access is provided to the Recreation Trail as it goes along the lake shore.  There are numerous benches to rest on, and many beautiful sculptures to enjoy!</p>
            <a href="/parks/south-shore.php" class="btn btn-primary">View Photos</a>
            <a href="/parks/south-shore-thumbs.php" class="btn btn-info pull-right">View Thumbnails</a>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-lg-4">
         <div class="card">
           <h3>Lory State Park</h3>
           <div class="card-container">
             <p>Lory State Park, is a state park located west of the ciy of Fort Collins and is north of Horsetooh Reservoir.</p>
             <a href="/parks/lory-state-park.php" class="btn btn-primary">View Photos</a>
             <a href="/parks/lory-state-park-thumbs.php" class="btn btn-info pull-right">View Thumbnails</a>
           </div>
         </div>
      </div>
      <!--
      <div class="col-xs-12 col-lg-4">
        <div class="card big-t">
          <h3>Craft Beer</h3>
          <div class="card-container">
            <p>We have found quite a few great breweries and look forward to finding more.</p>
            <a href="/parks/south-shore.php" class="btn btn-primary">View Photos</a>
          </div>
        </div>
      </div>
      -->
    </div>
  </div>
</section>
<?php include 'templates/bottom.php' ?>
