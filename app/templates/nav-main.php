<?php
  # template variables
  $current_page_span = '<span class="sr-only">(current)</span>';
?>
<header>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Colorado</a>
      </div>
      <div class="collapse navbar-collapse" id="main-nav">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Parks <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li>
                <a href="/parks/estes-park.php">Estes Park</a>
              </li>
              <li>
                <a href="/parks/big-thompson-river.php">Big Thompson River</a>
              </li>
              <li>
                <a href="/parks/lumpy-ridge-trailhead.php">Lumpy Ridge Trailhead</a>
              </li>
              <li>
                <a href="/parks/south-shore.php">South Shore Parkway</a>
              </li>
              <li>
                <a href="/parks">All Parks</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
