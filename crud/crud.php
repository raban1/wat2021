<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products</title>
    <style>
     h3{ 
         text-align:center; 
    } 
     form{ 
         width:300px; 
        margin :0px auto;

    }
    .btn{
        padding-top:10px;
    }
    .form-align{
        margin:0px;
        padding-left:0;
    }
    </style>
</head>
<body>
 <?php
   //for displaying successful msg
    if (isset($_GET['msg'])){
        echo "<h3>".$_GET['msg']."</h3>";    //from taking data from url we use GET method                                                                                                                
    }

 ?>


    <!-- <h2>Manage Products</h2> -->
    <!-- <?php include('displayProducts.php'); ?><br/><br/> -->
    
    <form method="POST" action="insertProduct.php" class="form-align" >
    <fieldset>
        <legend>Enter New Product Details</legend>
        <label>Product Name:</label><br>
        <input type="text" name="pname"><br>
        <label>Price</label><br>
        <input type="text" name="price"><br>
        <label>Image Filename</label><br>
        <input type="text" name="imagename"><br>
        <div class="btn">
        <input type="submit" name="productRegister" value ="Submit">
        <input type="submit" name="Clear" value="Clear">
        </div>
    </fieldset>
    </form>
    <h2>Manage Products</h2>
 <?php include('displayProducts.php'); ?><br/><br/>
<br>

 <footer>
 <small> <a href="../watIndex.html">Home</a></small>
 </footer>
 </body>
</html>
