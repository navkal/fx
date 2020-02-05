<?php
  // Copyright 2020 Energize Andover.  All rights reserved.

  error_log( '=========> upload.php' );
  error_log( '==> request=' . print_r( $_REQUEST, true ) );
  error_log( '==> files=' . print_r( $_FILES, true ) );

?>

<div class="container">

  <div class="h5 py-3">
    Upload a File
  </div>

  <form method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">

    <div class="pt-4 text-center">
      <button type="submit" class="btn btn-primary">
        Upload
      </button>
    </div>

  </form>

</div>


<script>

  $( document ).ready( init );

  function init()
  {
    if ( window.history.replaceState )
    {
      window.history.replaceState( null, null, window.location.href );
    }
  }
</script>
