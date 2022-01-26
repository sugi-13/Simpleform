<?php 
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];
    //connecting to database
    $host = "localhost";
    $username = "root";
    $password= "";
    $dbname = "formdb";
    //creating connection
    $con = mysqli_connect($host, $username, $password, $dbname);
    //checking the connection
    if (!$con){
            die("Connection failed!" . mysqli_connect_error());
    }
    //inserting into table
    $sql = "INSERT INTO details (id,name,email,feedback)VALUES('0','$name','$email','$feedback')";
    //to check whether it is stored in database
    $rs = mysqli_query($con, $sql);
    if($rs){
        echo "stay tuned {$name} we will send an email at {$email}";
    }
    
        //closing connection
        mysqli_close($con);
}
?>