<?php
  // Copyright 2020 Energize Andover.  All rights reserved.
  
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

      <label for="download_filename">File</label>
      <select id="download_filename" class="form-control" tabindex="10" >
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



    <div id="form-buttons" class="row pt-4 pb-2">
      <div class="col text-center">
        <a id="download_button" class="btn btn-primary" href="" role="button" title="Download selected file">
          Download
        </a>
      </div>
    </div>


  </form>
</div>


<script>

  $( document ).ready( init );

  function init()
  {
    $( '#download_filename' ).on( 'change', updateDownloadButton );
    updateDownloadButton();
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