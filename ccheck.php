<!DOCTYPE html>
<html>
 
    <head>
        <title>Check</title>
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
        
            $email = $_REQUEST['uname'];
            $psw = $_REQUEST['psw'];
        
         
        // Performing insert query execution
        // here our table name is college
            $sql = "SELECT email,password from customer where email='$email' and password='$psw';
            
            ?>
        </center>
    </body>
</html>