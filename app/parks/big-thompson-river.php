<?php
  require( "../config.php" );

  # Page Vars
  $active_link = '/';

  include( ROOT . 'templates/top.php' );
?>
<section>
  <div class="container">
    <h1 class="carousel-title">Big Thompson River</h1>
    <ul class="nav nav-tabs gallery-nav">
      <li>
        <a href="/parks/index.php">Home</a>
      </li>
      <li>
        <a href="/parks/big-thompson-river-thumbs.php">Thumbs</a>
      </li>
      <li class="active">
        <a href="/parks/big-thompson-river.php">Carousel</a>
      </li>
    </ul>
    <div class="carousel-container">
      <div class="owl-carousel owl-theme" id="photo-carousel">
        <img class="owl-lazy img-responsive" data-src="/images/parks/big-thompson-river/IMG_2206.jpg" alt="Big Thompson River" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/big-thompson-river/IMG_2207.jpg" alt="Big Thompson River" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/big-thompson-river/IMG_2208.jpg" alt="Big Thompson River" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/big-thompson-river/IMG_2211.jpg" alt="Big Thompson River" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/big-thompson-river/IMG_2212.jpg" alt="Big Thompson River" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/big-thompson-river/IMG_2213.jpg" alt="Big Thompson River" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/big-thompson-river/IMG_2217.jpg" alt="Big Thompson River" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/big-thompson-river/IMG_2222.jpg" alt="Big Thompson River" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/big-thompson-river/IMG_2227.jpg" alt="Big Thompson River" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/big-thompson-river/IMG_2228.jpg" alt="Big Thompson River" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/big-thompson-river/IMG_2230.jpg" alt="Big Thompson River" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/big-thompson-river/IMG_2233.jpg" alt="Big Thompson River" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/big-thompson-river/IMG_2234.jpg" alt="Big Thompson River" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/big-thompson-river/IMG_2237.jpg" alt="Big Thompson River" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/big-thompson-river/IMG_2239.jpg" alt="Big Thompson River" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/big-thompson-river/IMG_2240.jpg" alt="Big Thompson River" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/big-thompson-river/IMG_2247.jpg" alt="Big Thompson River" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/big-thompson-river/IMG_2248.jpg" alt="Big Thompson River" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/big-thompson-river/IMG_2249.jpg" alt="Big Thompson River" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/big-thompson-river/IMG_2257.jpg" alt="Big Thompson River" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/big-thompson-river/IMG_2258.jpg" alt="Big Thompson River" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/big-thompson-river/IMG_2259.jpg" alt="Big Thompson River" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/big-thompson-river/IMG_2260.jpg" alt="Big Thompson River" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/big-thompson-river/IMG_2261.jpg" alt="Big Thompson River" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/big-thompson-river/IMG_2262.jpg" alt="Big Thompson River" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/big-thompson-river/IMG_2263.jpg" alt="Big Thompson River" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/big-thompson-river/IMG_2264.jpg" alt="Big Thompson River" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/big-thompson-river/IMG_2265.jpg" alt="Big Thompson River" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/big-thompson-river/IMG_2266.jpg" alt="Big Thompson River" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/big-thompson-river/IMG_2267.jpg" alt="Big Thompson River" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/big-thompson-river/IMG_2268.jpg" alt="Big Thompson River" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/big-thompson-river/IMG_2271.jpg" alt="Big Thompson River" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/big-thompson-river/IMG_2272.jpg" alt="Big Thompson River" />
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
