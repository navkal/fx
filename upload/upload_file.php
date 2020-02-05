<?php
  // Copyright 2020 Energize Andover.  All rights reserved.

  error_log( '=========> upload_file.php' );
  error_log( '==> request=' . print_r( $_REQUEST, true ) );
  error_log( '==> files=' . print_r( $_FILES, true ) );
?>

<script type="text/javascript">
  window.location.href = "/?page=upload";
</script>