<?php
 
if(isset($_POST['productRegister'])){
    $productName=$_POST['pname'];
    $Price=$_POST['price'];
    $imgName=$_POST['imagename'];

    //1.//connection to database
    include('connection.php');

    //2.sql query
    $sql="INSERT INTO product(productName,price,imageName) VALUES('$productName',$Price,'$imgName')";

    //3.mysqli_query()
    $query= mysqli_query($connection,$sql);  
    if($query){
        header("Location: crud.php?msg=New Product is inserted successfully");
    }else{
    echo "Please specify data of New Product";
    }
}
	
?>




