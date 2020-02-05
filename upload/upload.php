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

    <div class="form-group" id="uploadBlock" >
      <label>Select a file to upload:</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <label class="input-group-btn btn btn-primary">
            Browse…
            <input type="file" name="uploadFile" id="uploadFile" style="display:none" onchange="showFilename( 'uploadFilename', 'uploadFile' )" >
          </label>
        </div>
        <input id="uploadFilename" type="text" class="form-control" onclick="$('#uploadFile').click();" readonly >
      </div>
    </div>

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


  // Show selected filename in input field
  function showFilename( sFilenameId, sFileId )
  {
    var sFilename = $( '#' + sFileId ).val().split('\\').pop().split('/').pop();
    $( '#' + sFilenameId ).val( sFilename );
  }

</script>
