 <?php

        include_once('dbclass.php');
        //include_once('cv1templateBasic.php');

    if(isset($_POST['btn-save'])){

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $middle_name = $_POST['middle_name'];
        $gender = $_POST['gender'];
        $marital_status = $_POST['marital_status'];
        $address = $_POST['address'];
        $summary = $_POST['summary'];
        $phone_number = $_POST['phone_id'];

        //$language = $_POST['language'];
        //posting data has recieved
        $sql_query = "INSERT INTO bio_data (first_name, last_name, middle_name, gender, marital_status, address, summary, phone_id) 
        VALUES ('$first_name','$last_name','$middle_name','$gender','$marital_status','$address','$summary','$phone_number')";
        $sql_querynd = "INSERT INTO email_information (email) VALUE ('$email')";

        $save=mysqli_query($conn,$sql_query) or die(mysqli_error());
        //call to function
            //mysqli_query($conn,$sql_query);
        if ($save) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql_query . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }