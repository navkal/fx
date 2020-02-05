<?php
  // Copyright 2020 Energize Andover.  All rights reserved.

  error_log( '=========> upload.php' );
  error_log( '==> request=' . print_r( $_REQUEST, true ) );
  error_log( '==> files=' . print_r( $_FILES, true ) );
  $aFiles = [ 'foo'=>'jan', 'moo'=>'feb', 'goo'=>'mar' ];
?>

<div class="container">

  <div class="h5 py-3">
    Upload a File
  </div>

  <form action="javascript:rq();">
  
    <div class="form-group">
      <label for="file">File</label>
    </div>

    <div id="form-buttons" class="row pt-4 pb-2">
      <div class="col text-center">
        <button id="upload-button" type="submit" class="btn btn-primary" tabindex="10">
          Upload
        </button>
      </div>
    </div>

  </form>
</div>
