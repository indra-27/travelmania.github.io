<?php
  require('include/wanted.php');

  session_start();
  session_destroy();
  redirect('index.php');

?>