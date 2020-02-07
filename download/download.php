<?php
  // Copyright 2020 Energize Andover.  All rights reserved.

  if ( ! isset( $_SESSION ) )
  {
    http_response_code( 404 );
    exit( 1 );
  }

  $downloadDir = getenv( "FILE_EXCHANGE_CACHE" ) . "/downloads/";
  $aFilenames = array_slice( scandir( $downloadDir ), 2 );
  natcasesort( $aFilenames );
?>

<div class="container">

  <div class="h5 py-3">
    Download a File
  </div>

  <form>

    <div class="form-group">
      <label for="download_filename">Select a file to download:</label>
      <select id="download_filename" class="form-control" >
        <?php
          foreach ( $aFilenames as $sFile )
          {
        ?>
            <option>
              <?=$sFile?>
            </option>
        <?php
          }
        ?>
      </select>
    </div>

    <div class="pt-4 text-center">
      <?php
        if ( count( $aFilenames ) )
        {
      ?>
          <a id="download_button" class="btn btn-primary" href="" role="button" title="Download selected file">
            Download
          </a>
      <?php
        }
        else
        {
      ?>
          <div class="alert alert-secondary">
            No files available to download.
          </div>
      <?php
        }
      ?>
    </div>

  </form>

</div>

<script>

  $( document ).ready( init );

  function init()
  {
    $( '#download_filename' ).on( 'change', updateDownloadButton );
    updateDownloadButton();
    $( '#download_filename' ).focus();
  }

  function updateDownloadButton()
  {
    sFilename = $( '#download_filename' ).val();
    console.log( sFilename );
    sHref = 'download/download_file.php/?filename=<?=$downloadDir?>' + sFilename;
    console.log( sHref );
    $( '#download_button' ).attr( 'href', sHref );
  }

</script>