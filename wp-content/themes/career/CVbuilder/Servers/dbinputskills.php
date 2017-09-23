<?php
include_once('dbclass.php');
		if(isset(_POST['btn-save'])){
 		$skill = $_POST['skill'];
        $proficiency_level = $_POST['proficiency_level'];
        $sql_query = "INSERT INTO skills(skills,proficiency_level) VALUES('$skills','$proficiency_level')";

        mysqli_query($conn,$sql_query);
        }else {
        	print "ERROR!!!"
        }
