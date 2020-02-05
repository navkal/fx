<?php
  // Copyright 2020 Energize Andover.  All rights reserved.

  error_log( '=========> upload.php' );
?>

<div class="container">

  <div class="h5 py-3">
    Upload a File
  </div>
  
  <form action="upload/upload_file.php" method="post" enctype="multipart/form-data">
      Select image to upload:
      <input type="file" name="fileToUpload" id="fileToUpload">
      <input type="submit" value="Upload Image" name="submit">
  </form>
  <!---------------------- >
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
  <!---------------------->
</div>
