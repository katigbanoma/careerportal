<?php
	include_once('dbclass.php');
	if(isset($_POST['btn-save'])){
	    	$institutions = $_POST['institution'];
        $qualifications = $_POST['qualification'];
				$graduation_dates = $_POST['graduation_date'];
        $start_years = $_POST['start_year'];
        $end_years = $_POST['end_year'];

                //posting data has recieved
        for ($i = 0; $i < count($institutions); $i++){
            $institution = $institutions[$i];
            $sql_query = "INSERT INTO education_background(institution, qualification, graduation_date) VALUES ('$institution','$qualification','$graduation_date')";
            if (mysqli_query($conn,$sql_query)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql_query . "<br>" . mysqli_error($conn);
            }
        }
        for ($q = 0; $q < count($qualifications); $q++){
            $qualification = $qualifications[$q];
            $sql_query = "INSERT INTO education_background(institution, qualification, graduation_date) VALUES ('$institution','$qualification','$graduation_date')";
            if (mysqli_query($conn,$sql_query)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql_query . "<br>" . mysqli_error($conn);
            }
        }
        for ($s = 0; $s < count($start_years); $s++){

            $sql_query = "INSERT INTO education_background(institution, qualification, graduation_date) VALUES ('$institution','$qualification','$graduation_date')";
            if (mysqli_query($conn,$sql_query)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql_query . "<br>" . mysqli_error($conn);
            }   
        }
        for ($e = 0; $e < count($end_years); $e++){
            $sql_query = "INSERT INTO education_background(institution, qualification, graduation_date) VALUES ('$institution','$qualification','$graduation_date')";
            if (mysqli_query($conn,$sql_query)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql_query . "<br>" . mysqli_error($conn);
            }
        }
        for ($g = 0; $g < count($graduation_dates); $g++){
            $graduation_date = $graduation_dates[$g];
            $sql_query = "INSERT INTO education_background(institution, qualification, graduation_date) VALUES ('$institution','$qualification','$graduation_date')";
            if (mysqli_query($conn,$sql_query)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql_query . "<br>" . mysqli_error($conn);
            }

        }
       // print_r($_POST);
      //  exit;
        $sql_query = "INSERT INTO education_background(institution, qualification, graduation_date) VALUES ('$institution','$qualification','$graduation_date')";
				if (mysqli_query($conn,$sql_query)) {
						echo "New record created successfully";
				} else {
						echo "Error: " . $sql_query . "<br>" . mysqli_error($conn);
				}
        //call function
      //  mysqli_query($conn,$sql_query);

    }
