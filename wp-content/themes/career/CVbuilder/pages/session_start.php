<?php
  session_start();
  if (isset($_POST['btn-save'])) {
    # code...
    $_SESSION['phone_id'] = $_POST['phone_id'];
  }
 ?>
