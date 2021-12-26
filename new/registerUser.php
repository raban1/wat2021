
<?php

require_once 'connection.php';
$errors = array();
session_start();

if (isset($_POST['submit'])) {
    $uname = trim($_POST['uname']);
    $pass = htmlentities(trim($_POST['upass']));
    $email = $_POST['uemail'];    
    
    
    if (isset($_POST['uage'])) {
        $age = $_POST['uage'];
    }

    if (isset($_POST['chkConfirm'])) {
        $checkbox = $_POST['chkConfirm'];
    }

    //username
    if (!empty($uname)) {
        if (strlen($uname) >= 6) {
            $uname = $uname;
        } else {
            $errors['u'] = "Username must be at least 6 characters";
        }
    } else {
        $errors['u'] = "Username is required";
    }

    //email
    if (!empty($email)) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $query = " SELECT email FROM user WHERE email = '$email' ";
            $stm = mysqli_query($connection, $query);
            $count = mysqli_num_rows($stm);
            if (!$count > 0) {
                $email = $email;
            } else {
                $errors['e'] = "Email already exists";
            }
        } else {
            $errors['e'] = "Invalid email format";
        }
    } else {
        $errors['e'] = "Email is required";
    }

    //password
    if (!empty($pass)) {
        $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])/';
        if (preg_match($pattern, $pass)) {
            $pass = md5($pass);
        } else {
            $errors['p'] = "at least one uppercase, one symbol and one digit";
        }
    } else {
        $errors['p'] = "Password is required";
    }

    //age
    if ($age == "") {
        $errors['a']= "Age is required";
    } else {
        $age = $age;
    }

    //terms and condition
    if (!isset($checkbox)) {
       $errors['c'] = "required";
    }

    //insert
    if (count($errors) == 0) {
        
        $qry = "INSERT INTO user (username, email, password, agerange) 
            VALUES ('$uname', '$email', '$pass', '$age') ";
        $sql = mysqli_query($connection, $qry);

        if(!$sql){
            $message = "Error inserting data: ".mysqli_error($connection);
        }else {
            $message = "Data inserted Successfully";
        }
        $_SESSION['message'] = $message;     
    }
    else {
        $message = "Following fields need to be filled.";
        $_SESSION['errors'] = $errors;
        $_SESSION['message'] = $message;
    }
    header('Location: register.php');    
}
?>



