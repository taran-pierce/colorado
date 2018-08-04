<?php
  $base_url = 'https://colorado.taranitup.club';
  $canonical = $base_url . $canonical_uri;
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107758647-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-107758647-1');
    </script>

    <meta charset="utf-8">
    <title><?php $title ? print_r( $title ) : "Colorado Adventures" ?></title>
    <link href="/favicon.ico" rel="icon" type="image/x-icon" />
    <meta name="description" content="Colorado Adventures">
    <meta name="author" content="Taran Pierce">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="robots" content="index,follow">
    <link rel="canonical" href="<?php $canonical ? print_r( $canonical ) : print_r( '/' ) ?>" />
    <meta name="description" content="Colorado has many beautiful parks and lakes where you can go hiking. This website details the places we have gone and taken photos of so that you can see
    them.">
    <meta name="keywords" content="Colorado Adventures, Colorado, Hiking, Lake, lakes, flowers, mountains, photography, taran pierce, taran, pierce, lumpy ridge trailhead, estes park, south
    shore, loveland, lory state park, arthurs rock, big thompson river">

    <link rel="stylesheet" href="/css/base.css">
  </head>
  <body>
    <?php include( ROOT . 'templates/nav-main.php' ); ?>
