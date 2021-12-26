<?php
    include('init.php');

    //Gather details submitted from the $_POST array and store in local vars
    if(isset($_POST['subLogin'])){
        $user=$_POST['txtUser'];
        $pass=$_POST['txtPass'];

        //build query to SELECT records from the users table WHERE
        //the username AND password in the table are equal to those entered.
        $sqlQuery="SELECT * FROM users WHERE username='$user' AND password='$pass'";

        //run query and store result
        $result=mysqli_query($connection,$sqlQuery);

        //check result and generate message with code below
         if ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['user']=$user;
            header ('Location:sessions.php');
        }
        else{
            $_SESSION['error']= 'User not recognised';
            header ('Location: sessions.php');
        } 
}
 
