<?php
// Make connection to database
include('connection.php');
//create a query to select all records from products table
$query="SELECT * FROM product";
//run query and store the result in a variable called $result
$result=mysqli_query($connection,$query) or die(mysqli_error($connection));

//display table with border and heading
echo "<table border=2px ><tr><th>ProductName</th><th>ProductPrice</th><th>ProductImagesName</th><th>Amend</th><th>Delete</th></tr>";
//Use a while loop to iterate through your $result array and display 
//ProductName, ProductPrice, ProductImageName.
while($rows=mysqli_fetch_array($result)){
    //display output as assign veriable
    echo "<tr><td>".$rows['productName']."</td><td>".$rows['price']."</td><td>"."<img src=./images/". $rows['imageName'].'>'."</td><td>".
    "<a href='amendProduct.php?id=". $rows['productID']."'>Amend</a>"."</td><td>".
    "<a href=deleteProduct.php?pid=". $rows['productID'].">Delete</a>"."</td></tr>";
}
echo"</table>";

//giving style to the table
echo "<style>";
echo"img{height:100px;width:100px;
}
h2{text-align:center;}
table{margin:0px auto;}
td,th{padding:15px}

</style>";
?>
