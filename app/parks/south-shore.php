<?php
  require( "../config.php" );

  # Page Vars
  $title = 'South Shore';

  include( ROOT . 'templates/top.php' );
?>
<section>
  <div class="container">
    <h1 class="">South Shore Parkway</h1>
    <ul class="nav nav-tabs gallery-nav">
      <li>
        <a href="/parks/index.php">Home</a>
      </li>
      <li>
        <a href="/parks/south-shore-thumbs.php">Thumbs</a>
      </li>
      <li class="active">
        <a href="/parks/south-shore.php">Carousel</a>
      </li>
    </ul>
    <div class="carousel-container">
      <div class="owl-carousel owl-theme" id="photo-carousel">
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1934.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1935.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1939.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1940.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1941.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1942.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1943.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1944.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1945.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1946.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1947.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1948.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1949.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1951.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1952.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1955.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1956.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1957.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1959.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1961.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1967.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1968.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1969.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1970.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1971.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1972.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1973.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1974.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1975.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1976.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1977.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1978.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1980.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1981.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1982.jpg" alt="South Shore Parkway" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/south-shore/IMG_1983.jpg" alt="South Shore Parkway" />
      </div>
    </div>
  </div>
</section>
<script>
  document.addEventListener("DOMContentLoaded", function(event) {
    // create carousel and options
    var $carousel = $('#photo-carousel');

    var options = {};
    options = {
      items: 1,
      lazyLoad: true,
    }

    // pass options to carousel function
    initCarousel($carousel, options);
  });
</script>
<?php include( ROOT . 'templates/bottom.php' ); ?>
