<?php
  # takes scripts added to $js array and puts them in separately
  $script_start = '<script type="text/javascript" src="';
  $script_end = '"></script>';

  foreach ( $js as $script_name ) {
    $script = $script_start . $script_name . $script_end;
    print_r( $script . "\n" );
  }
?>
