<?php
//Make connection to database
include('connection.php');
//Gather from $_POST[]all the data submitted and store in variables
if(isset($_POST['submit1'])){
    $id=$_POST['id'];
    $pname=$_POST['pname1'];
    $price=$_POST['price1'];
    $imgname=$_POST['imagename1'];
    //Construct UPDATE query using variables holding data gathered
    $qry="UPDATE product SET productName='$pname',price='$price',imageName='$imgname' WHERE productID=$id";
    //connecting conection with database
    $sqlquery=mysqli_query($connection,$qry);
    //if sqlquery exist
    if($sqlquery){
        //display output showing row update in url
        header('Location:crud.php?msg=Product detail is updated successfully');
    }else{
        //else something wrong 
        echo " while updating data something went wrong";
    }
}




?>