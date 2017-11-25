<?php
  require( "../config.php" );

  # Page Vars
  $active_link = '/';

  include( ROOT . 'templates/top.php' );
?>
<section>
  <div class="container">
    <h1 class="carousel-title">Estes Park</h1>
    <ul class="nav nav-tabs gallery-nav">
      <li>
        <a href="/parks/index.php">Home</a>
      </li>
      <li>
        <a href="/parks/estes-park-thumbs.php">Thumbs</a>
      </li>
      <li class="active">
        <a href="/parks/estes-park.php">Carousel</a>
      </li>
    </ul>
    <div class="carousel-container">
      <div class="owl-carousel owl-theme" id="photo-carousel">
        <img class="owl-lazy img-responsive" data-src="/images/parks/estes-park/IMG_2118.jpg" alt="Estes Park" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/estes-park/IMG_2119.jpg" alt="Estes Park" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/estes-park/IMG_2120.jpg" alt="Estes Park" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/estes-park/IMG_2122.jpg" alt="Estes Park" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/estes-park/IMG_2125.jpg" alt="Estes Park" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/estes-park/IMG_2126.jpg" alt="Estes Park" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/estes-park/IMG_2127.jpg" alt="Estes Park" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/estes-park/IMG_2128.jpg" alt="Estes Park" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/estes-park/IMG_2129.jpg" alt="Estes Park" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/estes-park/IMG_2130.jpg" alt="Estes Park" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/estes-park/IMG_2133.jpg" alt="Estes Park" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/estes-park/IMG_2134.jpg" alt="Estes Park" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/estes-park/IMG_2137.jpg" alt="Estes Park" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/estes-park/IMG_2140.jpg" alt="Estes Park" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/estes-park/IMG_2141.jpg" alt="Estes Park" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/estes-park/IMG_2142.jpg" alt="Estes Park" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/estes-park/IMG_2143.jpg" alt="Estes Park" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/estes-park/IMG_2144.jpg" alt="Estes Park" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/estes-park/IMG_2145.jpg" alt="Estes Park" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/estes-park/IMG_2146.jpg" alt="Estes Park" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/estes-park/IMG_2147.jpg" alt="Estes Park" />
        <img class="owl-lazy img-responsive" data-src="/images/parks/estes-park/IMG_2148.jpg" alt="Estes Park" />
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
