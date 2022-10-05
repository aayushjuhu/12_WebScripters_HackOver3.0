<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "ed");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $first_name =  $_REQUEST['fname'];
        $last_name = $_REQUEST['lname'];
        $address = $_REQUEST['email'];
        $email = $_REQUEST['age'];
        $gender = $_REQUEST['gend'];
        $psw = $_REQUEST['psw'];
        $cpsw = $_REQUEST['psw-repeat'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO customer  VALUES ('$first_name',
            '$last_name','$email','$age','$gender','$psw','$cpsw')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$fname\n $lname\n "
                . "$gender\n $address\n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>