<?php
      include_once('dbclass.php');
      if(isset($_POST['btn-save'])){
        $organizations = $_POST['organization'];
        $job_descriptions = $_POST['job_description'];
        $post_helds = $_POST['post_held'];
        $froms = $_POST['start_year'];
        $tos = $_POST['end_year'];
        for ($o = 0; $o < count($organizations); $o++){
            $organization = $organizations[$o];
            $sql_query = "INSERT INTO work_experience(exp_organization, post_held, exp_start_year, exp_end_year, exp_job_description) VALUES ('$organization','$job_description','$post_held','$from','$to')";
            if (mysqli_query($conn,$sql_query)) {
                # code...
                echo "success";
            }
        }
       for ($j = 0; $j < count($job_descriptions); $j++){
            $job_description = $job_descriptions[$j];
            $sql_query = "INSERT INTO work_experience(exp_organization, post_held, exp_start_year, exp_end_year, exp_job_description) VALUES ('$organization','$job_description','$post_held','$from','$to')";
            if (mysqli_query($conn,$sql_query)) {
               # code...
               echo "success";
           }
       }
       for ($p = 0; $p < count($post_helds); $p++){
           $post_held = $post_helds[$p];
           $sql_query = "INSERT INTO work_experience(exp_organization, post_held, exp_start_year, exp_end_year, exp_job_description) VALUES ('$organization','$job_description','$post_held','$from','$to')";
           if (mysqli_query($conn,$sql_query)) {
               # code...
               echo "success";
           }
       }
       for($f = 0; $f < count($froms); $f++){
           $from = $froms[$f];
           $sql_query = "INSERT INTO work_experience(exp_organization, post_held, exp_start_year, exp_end_year, exp_job_description) VALUES ('$organization','$job_description','$post_held','$from','$to')";
           if (mysqli_query($conn,$sql_query)) {
               # code...
               echo "success";
           }
       }
       for ($t = 0; $t < count($tos); $t++){
           $to = $tos[$t];
           $sql_query = "INSERT INTO work_experience(exp_organization, post_held, exp_start_year, exp_end_year, exp_job_description) VALUES ('$organization','$job_description','$post_held','$from','$to')";
           if (mysqli_query($conn,$sql_query)) {
               # code...
               echo "success";
           }
       }

      }
 ?>
