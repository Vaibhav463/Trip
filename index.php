<?php
$insert = false;
if(isset($_POST['name'])){

    //set connection variables
error_reporting(0);
$server="localhost";
$username="root";
$password="";

    //Create a database connection
$con = mysqli_connect($server,$username,$password);
    
   //Check for connection sucess
if(!$con){
    die("connection to this database failed due to". mysqli_connect_error());
}
// echo"Sucessfully Connected";

    //Collect post variables

$name = $_POST['name'];
$gender = $_POST['gender'];
$roll = $_POST['roll'];
$school = $_POST['school'];
$hostel = $_POST['hostel'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];
$sql = "    INSERT INTO `trip`.`trip` (`name`, `gender`, `roll no`, `school`, `hostel`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$gender', '$roll', '$school', '$hostel', '$email', '$phone', '$desc', current_timestamp());";
// echo"$sql";

   //Execute the query
if($con->query($sql) == true){
    // echo"Submitted Sucessfully";

    //flag for sucessful insertion
    $insert = true;
}
else{
    echo"ERROR: $sql <br> $con->error";
}

    //close the database connection
$con->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Orelega+One&family=Work+Sans:wght@100&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&family=Orelega+One&family=Work+Sans:wght@100&display=swap"
        rel="stylesheet">
    <title>Trip Form</title>
</head>

<body>
    <img class="bg" src="bg.jpg" alt="">
    <div class="container">
        <h1>Welcome to Trip Form</h1>
        <p>Fill this form with correct details</p>
        <?php
        if($insert == true)
        {
           echo"<p class='submitmsg'>Form Submitted</p>";
        }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your Name">
            <input type="gender" name="gender" id="gender" placeholder="Enter your gender">
            <input type="text" name="roll" id="roll" placeholder="Enter your Roll no">
            <input type="text" name="school" id="school" placeholder="Name of School">
            <input type="text" name="hostel" id="hostel" placeholder="Name of your hostel">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone no">
            <textarea name="desc" id="desc" cols="30" rows="10"
                placeholder="Any specific illness or problem that should be taken care of...."></textarea>
            <button class="btn">Submit</button>
            <!-- <button class="btn">Reset</button> -->
        </form>
    </div>
</body>

</html>