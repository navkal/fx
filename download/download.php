<?php
  // Copyright 2018 Building Energy Monitor.  All rights reserved.
  
  $dir = "download/files";

  $aFilenames = array_slice( scandir( $_SERVER["DOCUMENT_ROOT"] . "/" .  $dir ), 2 );
  natcasesort( $aFilenames );
?>

<div class="container">

  <div class="h5 py-3">
    Download a File
  </div>

  <form action="javascript:rq();">
  
    <div class="form-group">
      <label for="file">File</label>
      <select id="file" class="form-control" >
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
        <button id="download-button" type="submit" class="btn btn-primary" tabindex="10">
          Download
        </button>
      </div>
    </div>

  </form>
</div>
