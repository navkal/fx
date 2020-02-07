<?php
  // Copyright 2020 Energize Andover.  All rights reserved.

  if ( ! isset( $_SESSION ) )
  {
    http_response_code( 404 );
    exit( 1 );
  }

  // Did we get an upload request?
  $bHandlingUploadRequest = isset( $_FILES['uploadFile'] );

  if ( $bHandlingUploadRequest )
  {
    // Get name of temporary copy
    $sTempFilename = $_FILES['uploadFile']['tmp_name'];

    // If we got a temporary copy of the file...
    if ( $sTempFilename )
    {
      // Move temporary file to cache
      $sFilename = $_FILES['uploadFile']['name'];
      $bSuccess = move_uploaded_file( $sTempFilename, getenv( "FILE_EXCHANGE_CACHE" ) . "/uploads/" . $sFilename );
      $sMessage = $bSuccess ? ( "Uploaded file '<b>" . $sFilename . "</b>'." ) : ( "Failed to upload file '<b>" . $sFilename . "</b>'." );
    }
    else
    {
      // Did not get a file; set error message
      $bSuccess = false;
      $sMessage = 'Please select a file to upload.';
    }
  }
?>

<div class="container">

  <div class="h5 py-3">
    Upload a File
  </div>

  <form method="post" onsubmit="setWaitCursor();" enctype="multipart/form-data">

    <!-- Upload file picker -->
    <div class="form-group" >
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
      <button id="uploadButton" type="submit" class="btn btn-primary">
        Upload
      </button>
    </div>

    <!-- Report status of upload operation -->
    <?php
    if ( $bHandlingUploadRequest )
    {
    ?>
      <div id="uploadMessage" class="alert alert-<?=( $bSuccess ? 'success' : 'danger' )?>">
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

  function setWaitCursor()
  {
    $( '#uploadButton' ).prop( 'disabled', true );
    $( '#uploadMessage' ).hide();
    $( '#view' ).css( 'cursor', 'wait' );
  }

</script>
