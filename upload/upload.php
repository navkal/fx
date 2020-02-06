<?php
  // Copyright 2020 Energize Andover.  All rights reserved.

  if ( isset( $_FILES['uploadFile'] ) )
  {
    $aFile = $_FILES['uploadFile'];
    $uploadDir = getenv( "FILE_EXCHANGE_CACHE" ) . "/uploads/";
    $bSuccess = move_uploaded_file( $aFile['tmp_name'], $uploadDir . $aFile['name'] );
    $sMessage = $bSuccess ? ( "Uploaded file '<b>" . $aFile['name'] . "</b>'" ) : ( "Failed to upload file '<b>" . $aFile['name'] . "</b>'" );
  }


?>

<div class="container">

  <div class="h5 py-3">
    Upload a File
  </div>

  <form method="post" enctype="multipart/form-data">

    <!-- Upload file picker -->
    <div class="form-group" id="uploadBlock" >
      <label>Select a file to upload:</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <label class="input-group-btn btn btn-outline-dark">
            Browse…
            <input type="file" name="uploadFile" id="uploadFile" style="display:none" onchange="showFilename( 'uploadFilename', 'uploadFile' )" >
          </label>
        </div>
        <input id="uploadFilename" type="text" class="form-control" onclick="$('#uploadFile').click();" readonly >
      </div>
    </div>

    <!-- Upload button -->
    <div class="py-4 text-center">
      <button type="submit" class="btn btn-primary">
        Upload
      </button>
    </div>

    <!-- Report status of upload operation -->
    <?php
    if ( isset( $bSuccess ) )
    {
    ?>
      <div class="alert alert-<?=( $bSuccess ? 'success' : 'danger' )?>">
        <?=$sMessage?>
      </div>
    <?php
    }
    ?>

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
