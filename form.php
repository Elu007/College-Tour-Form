<?php
    $insert = false;
    if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "id19182968_trip"; 
    $dbname = "id19182968_travel";
    // If you are using localhost then our username will be "root" and password will be ""
    $password = "?f{a{jI8?tSnDf}m";

    // For connection we use a variable which takes these three things
    // Create a database connection
    $con = mysqli_connect($server, $username, $password,$dbname);

    // Check for connection success
    if(!$con){
        die("Connection to this database failed due to" . mysqli_connect_error);
    }

    // echo "Success connecting to the db.";

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $descr = $_POST['descr'];

    $sql = "INSERT INTO `trip` (`name`, `age`, `gender`, `email`, `phone`, `descr`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$descr', current_timestamp());";
    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";
        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "Error: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>
