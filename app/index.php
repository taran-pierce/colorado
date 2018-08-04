<?php
  require( "config.php" );

  # Page Vars
  $title = 'Colorado Adventures';

  include( 'templates/top.php' );
?>
<section>
  <div class="container">
    <h1>Colorado parks and other places to hike</h1>
    <p>Just wanted a way to chronicle and show off some of our adventures in Colorado. It's so beautiful here and we like to take photos so we wanted a way that we could easily show them off to people.</p>
    <p>This seemed like the easiest way.</p>
  </div>
</section>
<section class="card-wrapper">
  <div class="container">
    <?php
      $c_heading = 'Lumpy Ridge Trailhead';
      $c_paragraph = '<p>The Lumpy Ridge Loop (also known as the Twin Owls Loop) circles around Lumpy Ridge, a massive granite rock outcropping that’s been sculpted by wind and erosion over the last 1.8 billion years.</p>';
      $c_href_photos = '/parks/lumpy-ridge-trailhead.php';
      include( 'templates/_card.php' );
    ?>
    <?php
      $c_heading = 'Estes Park';
      $c_paragraph = '<p>Estes Park is a town in northern Colorado. It’s known as a base for the Rocky Mountain National Park, home to wildlife including elk and bears, plus miles of trails
      .</p>';
      $c_href_photos = '/parks/estes-park.php';
      include( 'templates/_card.php' );
    ?>
    <?php
      $c_heading = 'Big Thompson River';
      $c_paragraph = '<p>The Big Thompson River is a tributary of the South Platte River, approximately 78 miles long &mdash; give or take &mdash;, in the U.S. state of Colorado.</p>';
      $c_href_photos = '/parks/big-thompson-river.php';
      include( 'templates/_card.php' );
    ?>
    <?php
      $c_heading = 'South Shore';
      $c_paragraph = '<p>Located along the south shore of Lake Loveland on US Highway 34.  Parking is located along the south shore of the lake, and easy access is provided to the Recreation Trail as it goes along the lake shore.  There are numerous benches to rest on, and many beautiful sculptures to enjoy!</p>';
      $c_href_photos = '/parks/south-shore.php';
      include( 'templates/_card.php' );
    ?>
    <?php
      $c_heading = 'Lory State Park';
      $c_paragraph = '<p>Lory State Park, is a state park located west of the ciy of Fort Collins and is north of Horsetooh Reservoir.</p>';
      $c_href_photos = '/parks/lory-state-park.php';
      include( 'templates/_card.php' );
    ?>
  </div>
</section>
<?php include 'templates/bottom.php' ?>
