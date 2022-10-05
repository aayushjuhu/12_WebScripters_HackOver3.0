<!DOCTYPE html>
<html>
 
<head>
    <title>Insert page</title>
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
        $event_name =  $_REQUEST['ename'];
        $org_name = $_REQUEST['oname'];
        $email = $_REQUEST['email'];
        $pno = $_REQUEST['pno'];
        $evd = $_REQUEST['evd'];
        $dt = $_REQUEST['date'];
        
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO organization  VALUES ('$event_name',
            '$org_name','$email','$pno','$evd','$dt')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully.</h3>";
 
            echo nl2br("\nename\n $oname\n "
                . "$pno\n $evd\n $dt");
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