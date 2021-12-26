
<?php

    //so session vars can be used
    include ('init.php');
   // session_start();

    //Use an if statement to determine whether the session var holding 
    //the user name ($_SESSION['user'] has been set.  If it has, echo out 
    //a welcome message for the user, followed by a links to a pages 
    //called protected.php and logout.php.
    if(isset($_SESSION['user'])){
        echo "Welcome ".$_SESSION['user']."<br/>";     
        echo "<a href = 'protected.php'>Protected</a><br/>";
        echo "<a href = 'logout.php'>Logout</a>";
    }
    else{
        //add an else section that will include loginform.php and display any 
        //error message that is held in ($_SESSION['error'] 
        if(isset($_SESSION['error'])){
            echo $_SESSION['error'];
        }
        include('loginform.php');
    }
?>  