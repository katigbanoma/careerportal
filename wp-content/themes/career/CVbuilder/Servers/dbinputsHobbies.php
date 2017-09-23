<?php
	include_once('dbclass.php');

       if(isset($_POST['btn-save'])){
        $hobbies = $_POST['hobbies'];
               
               //posting data has recieved
	$sql_query = "INSERT INTO hobbies(hobbies) VALUES ('$hobbies')";

        // call to function
                mysqli_query($conn,$sql_query);
}