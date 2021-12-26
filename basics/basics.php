<?php
//My first PHP

echo "Name : Raban Kathariya <br>Student Id : 77261113<br/>";
echo "\"most programmers say it's better to use 'echo' rather than ‘print’\" says who?";
?>



<?php
   echo "<h2>Variables</h2>";
   $name = 'David';
   $age = 12;

   echo "Hi my name is ".$name." and I am ".$age." years old</br>";
   echo "Mi nombre es $name y tengo $age anos de edad";
?>


//3
<?php
echo "<h2>Functions</h2>";
//gettype()returns the datatype of the variable
echo gettype($name);
echo '<br />';

//strlen() returns the length of the string
echo strlen($name);
echo '<br />';


//strtoUpper()returns string into the uppercase
echo strtoUpper($name)

?>


//4
<?php
  echo "<h2>Arithmetic</h2>";
  $num1 = 9;
  $num2 = 12;


  echo "num1 = 9<br>";
  echo"num2 = 12<br>";
  echo "num1 x num2 = ".$num1*$num2; 
  echo "<br/>";
  echo "num1 as a percentage of num2 =".(($num1/$num2)*100)."%<br>";
  echo "num2 divided by num1 = ".number_format($num2/$num1). " reminder " .$num2%$num1;
?>



<?php 
$height = 1.8;
echo "<br>Name:$name<br/>Age:$age<br/>";
echo "Height in Meters: $height<br/>";
echo "Height in Meters:".floor((($height*100)/2.54)/12)."ft ".((($height*100)/2.54)%12)."ins";
?>