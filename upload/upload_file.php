<?php
  // Copyright 2020 Energize Andover.  All rights reserved.

  require_once $_SERVER["DOCUMENT_ROOT"]."/../common/util.php";

  error_log( '=========> upload_file.php' );
  error_log( '==> request=' . print_r( $_REQUEST, true ) );
  error_log( '==> files=' . print_r( $_FILES, true ) );
?>

<div class="container">

  <div class="h5 py-3">

  </div>

  <form>


    <div class="row pt-4 pb-2">
      <div class="col text-center">
        <a id="download_button" class="btn btn-primary" href="/?page=upload" role="button" >
          Done
        </a>
      </div>
    </div>

  </form>

</div>
