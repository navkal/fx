<?php
  define( 'BOOTSTRAP_VERSION', '_4' );
  // Load jQuery library outside the document head.  split.js needs this; don't know why.
  require_once '../common/libraries' . BOOTSTRAP_VERSION . '.php';  // <-- Includes jQuery, redundant with document head; needed by split.js (don't know why)
  include "../common/main.php";
  include $_SERVER['DOCUMENT_ROOT'] . '/../bgt/util/tablesorter.php';
?>

