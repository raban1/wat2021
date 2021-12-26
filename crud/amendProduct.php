<?php 
include('connection.php');
if(isset($_GET['id'])){
    $id1=$_GET['id'];
    $query="SELECT * FROM product WHERE ProductID='$id1'";
    $qry=mysqli_query($connection,$query);
    $product=mysqli_fetch_array($qry);
}else{
    header('Location:crud.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amend Products</title>
</head>
<body>
<form method="POST" action="updateProduct.php">
    <fieldset>
        <legend>Enter New Product Details</legend>
        <input type="hidden" name="id" value="<?php echo $product['productID'];?>">
        <label>Product Name:</label><br>
        <input type="text" name="pname1" value="<?php echo $product['productName']; ?>"><br>
        <label>Price</label><br>
        <input type="text" name="price1" value="<?php echo $product['price'];?>"><br>
        <label>Image Filename</label><br>
        <input type="text" name="imagename1" value="<?php echo $product['imageName'];?>"><br>
        <div class="btn">
        <input type="Submit" name="submit1" value="update">
        </div>
    </fieldset>
    </form>
</body>
</html>