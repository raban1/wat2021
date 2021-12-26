<?php
session_start();
if(isset($_SESSION['errors'])){
    $errors = $_SESSION['errors'];
}
if(isset($_SESSION['message'])){
    $message = $_SESSION['message'];
}
unset($_SESSION['errors']);
unset($_SESSION['message']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
fieldset {
    border: 3px solid;
  width: 400px;
  }

    </style>
</head>
<h1>REGISTER</h1> 
        <?php
            if(isset($message)){
                echo "<span class='message'>$message</span><br>";
            }
        ?> 
<body>
    <form method="POST" name="registerForm" action="registerUser.php" enctype="multipart/form-data">
    
       <fieldset>
       <legend><h3>Register</h3></legend>
       <label for="username">Username:</label>
       <input type="text" name="uname" value="<?php if (isset($_POST['uname'])) {
                                                                    echo $_POST['uname'];
                                                                } ?>"><br>
                        <span class="error"><?php if (isset($errors['u'])) {
                                                echo $errors['u'];
                                            }
                                             ?></span><br/><br/>

       <label for="email">Email:</label>
        <input type="email" name="email" value="<?php if (isset($_POST['email'])) {
                                                                    echo $_POST['email'];
                                                                } ?>"><br>
                        <span class="error"><?php if (isset($errors['e'])) {
                                                echo $errors['e'];
                                            } ?></span><br/><br/>

       <label for="password">Password:</label>
       <input type="password" name="password"><br>
                        <span class="error"><?php if (isset($errors['p'])) {
                                                echo $errors['p'];
                                            } ?></span> <br/><br/>

       <label for="age">Age Range:</label>
<select name="uage" id="age"> 
  <option value="below 18">below 18</option>
  <option value="18-60">18-60</option>
  <option value="above 60">above 60</option>
 
</select>
<span class="error"><?php if (isset($errors['a'])) {
                                                echo $errors['a'];
                                            } ?></span><br/><br/>


<label for="checkbox">I agree the terms and conditions: </label>
<input type="checkbox" name="chkConfirm" id="checkbox"> <span class="error"><?php if (isset($errors['c'])) {
                                                echo $errors['c'];
                                            } ?></span><br /><br/>

       <input type="submit" name="submit" value="Register"/>
       <input type="reset" value="clear">
</fieldset>
    </form><br/><br/>
    
</body>
</html>

