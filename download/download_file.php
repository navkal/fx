<?php
  // Copyright 2020 Energize Andover.  All rights reserved.

  require_once $_SERVER["DOCUMENT_ROOT"]."/../common/util.php";

  error_log( '==> REQUEST=' . print_r( $_REQUEST, true ) );

  if ( isset( $_REQUEST['filename'] ) )
  {
    downloadFile( $_REQUEST['filename'] );
  }
?>
