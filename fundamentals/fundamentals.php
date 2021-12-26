<!DOCTYPE html>
<html lang="en">
 <head>
 <title>Web Applications and Technologies</title>
 <link type="text/css" rel="stylesheet" href="main.css" />
 </head>
 <body>
 <header>
   <h1>Raban Kathariya C7261113</h1> 
 </header>
 
     <section id="container">
        <h1>Fundamentals of PHP</h1>

     <?php
          echo "<h2>Selection</h2>";
          $day = date('l'); //that is a lower case L
          echo 'it\'s '.$day;
          echo "<br/>";

        if($day=="Wedneday")
         {
           echo 'it\'s midweek';
         }
        else echo 'it\'s not midweek';
    
         echo "<br/>";
     ?>
     <?php
    //setting time to Local time of Nepal
     date_default_timezone_set("Asia/Kathmandu");
     echo "Current time is ".date('H:i:sa');
     echo "<br/>";
     $hour = date('H');
     if ($hour<12)
         {
            echo "Good Morning.";
         }
      elseif($hour>=12 && $hour<=18)
           {
              echo"Good Afternoon.";
           }
      else echo "Good Night.";
     ?>
     <?php
        echo "<br/>";
         $password = "password";
         if(strlen($password)>4 && strlen($password)<10)
            {
              echo "Password length is valid.";
              if($password=="password" || $password = "username")
                 {
                   echo "Password valid";
                 }
              else echo "Password invalid";
           }
          else echo "Password length is invalid";
     ?>


    <?php
    $price = 25;
    $age = 15;
    $membership = true;
    $d_price =  $price-(0.35*$price);
      echo "<br/>";
      echo "Initial Ticket Price:".$price;
      echo "<br/>";
      echo "Age: ".$age;
      echo "<br/>";
       if ($membership = true){
        echo "Member : Yes<br/>";
       }
       else 
       {
        echo "Member :".$memeber;
        echo "<br/>";
       }
      echo "Final Ticket Price: ".$d_price;  
    ?>


    <?php
   
     echo "<h2>Arrays</h2>";
     echo "<h3>Simple Arrays</h3>";

     $products = array('t-shirt','cap','mug');
     print_r($products);
     echo "<br/>";

     $products[1] = 'shirt';
     print_r($products);
     echo "<br/>";

      array_push($products,'skirt');
     print_r($products);
     echo "<br/>";


     echo "The item at index[2] is: ".$products[2]."<br/>";
     echo "The item at index[3] is: ".$products[3]."<br/>";

     echo "<h3>Associative Arrays</h3>";
     $customer = array('CustID'=>12, 'CustName'=>'Sarah','CustAge'=>23,'CustGender'=>'F');
     print_r($customer);
     echo "<br/>";

      $customer['CustAge'] = 32;
      $customer['CustEmail'] = 'sarah@gmail.com';
      print_r($customer);  
      echo "<br/>";

      echo "The item at index[CustName] is: ".$customer['CustName']."<br/>";
      echo "The item at index[CustEmail] is: ".$customer['CustEmail']."<br/>";
   
      echo "<h3>Multi-Dimensional Arrays</h3>";

     $stock = array('id1'=>array('description'=>'t-shirt','price'=>9.99,'stock'=>100,'color' => array('blue','green','red')), 
    'id2'=>array('description'=>'cap','price'=>4.99,'stock'=>50,'color' => array('blue','black','grey')),
    'id3' =>array('description'=>'mug','price'=>6.99,'stock'=>30,'color' => array('yellow','green','pink')));
    
      echo "This is my order :<br/>";
      echo $stock['id1']['color'][1].$stock['id1']['description']."<br/>";
      echo "Price:  £".$stock['id1']['price']."<br/>";
      echo  $stock['id2']['color'][2]." ".$stock['id2']['description']."<br/>";
      echo "Price:  £".$stock['id2']['price']."<br/>";


      echo "<h2>Loops</h2>";
      echo "<h3>While Loops</h3>";
      $counter = 1;
      while($counter<6){

         echo "count = $counter <br/>";
         $counter++;
      }
      echo "<br/>";
   

      echo"<table border =1>";
      echo"<thead>"; 
      echo"<tr>"; 
      echo"<th>Quantity</th>";
      echo"<th>Price</th>";
      echo" </tr>";
      echo"</thead>";
       echo "<tbody>";    
       $shirtPrice = 9.99;
       $counter = 1;
       while($counter<=10){
        $total = $counter * $shirtPrice;
       echo"<tr>";
       echo"<td>$counter</td>"; 
       echo "<td>£".number_format($total,2)."</td>";
       echo "</tr>";
        $counter++;

       }
       echo "</tbody>";
       echo "</table>";
    ?>

     <!--for  and foreach Loops-->
      <h3>For Loops</h3>
      <?php
         $names = array('Peter','Kat','Laura','All','Popacatapetal');
         for($i=0;$i<5;$i++){
            echo "$names[$i]<br>";
         }
       ?>
      <h3>Foreach Loops</h3>
      <?php
        $names = array('Peter'=>'c123456','Kat'=>'c654321','Laura'=>'c987654','All'=>'c654987','Popacatapetal'=>'c765984');
        foreach($names as $name=>$id){
           echo "Name:".$name." ID: ".$id."<br>";
        }
      ?>

       <?php
        $city = array('Peter'=>'LEEDS','Kat'=>'bradford','Laura'=>'wakeFIeld');
        foreach($city as $name=>$address){
           $address = strtolower($address);
           $address = ucfirst($address);
           $city[$name]=$address;
        }
        print_r($city);
        ?>




<!--Extensions Exercise-->
   <h2>Some Useful Functions</h2>
   <?php
      $password = 'pass';     //if $password is set to null
      echo "Password is:".$password."<br>";
      if (isset($password)){
         echo "Password OK";  //execute when password is 'pass'

      }
      else{
         echo"please enter a password";   //execute when $password is null
      }
      ?>
      <?php
      echo "<br>";
        //$password = 'pass'; 
         $password = null;
        //$password = ''; //setting password to empty

      if(isset($password)){
         echo "Password OK";
      }
      elseif(empty($password))
      {
         echo"password is empty";
      }
      else{
         echo "Password is not Okay";
      }

   ?>
   
         </section>
 <footer> 
 <small> <a href="../watIndex.html">Home</a></small>
 </footer>
 </body>
</html>