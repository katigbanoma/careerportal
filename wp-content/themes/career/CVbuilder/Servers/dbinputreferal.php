<?php
		include_once('dbclass.php');
		if(isset($_POST['btn-save'])){
	  	$ref_first_name = $_POST['ref_first_name'];
        $ref_last_name = $_POST['ref_last_name'];
        $ref_phone_number = $_POST['ref_phone_number'];
        $ref_organization = $_POST['ref_organization'];
        $ref_job_description = $_POST['ref_job_description'];
        $ref_email = $_POST['ref_email'];
        $ref_testimony = $_POST['ref_testimony'];

        $sql_query = "INSERT INTO referal(ref_first_name,ref_last_name,ref_phone_number,ref_organization,ref_job_description,ref_email,ref_testimony) VALUES ('$ref_first_name','$ref_last_name','$ref_phone_number','$ref_organization','$ref_job_description','$ref_email','$ref_testimony')";
    }