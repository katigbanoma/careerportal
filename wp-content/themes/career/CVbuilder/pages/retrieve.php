<?php
    include_once('dbclass.php');
    $query = "SELECT * FROM bio_data WHERE id='3'";
    $result = mysqli_query($conn,$query) or die(mysqli_error($conn,$query));

