<!DOCTYPE html>
<html lang=“en” dir=“LTR”>

<head>
    <meta charset="utf-8">
    <title>Payment Successful</title>
      <link rel="stylesheet" type="text/css" href="css/index.css" >
    </head>
<body>
    <header id="mainHeader">
    <img id='logo' src="images/logo.jpg" alt="logo" title="logo" height="100" width="150"/>
     
    <h1> Jawaria's Bookstore</h1>
    
        
</header>
   
    <nav>
        
     <ul class="nav">
      <li><a href="" title="Homepage"> Homepage</a></li>
      <li><a href="" title="AboutUs">About Us </a></li>
      <li><a href="" title="ContactUs">Contact Us </a></li>
     </ul> 
    
     </nav> 
    <br>
    <br>
    <h2> You have successfully entered your creit card details</h2>
     <hr>
    <h3>Debit/Credit Card</h3> 
    <img class="card" src="images/Card.jpg"  alt="card"  title="Card" width="70" height="45">
<section id='success' >
<?php
   $x=$_POST['hidden'];
    if($x == 1) {
        
$ccnum = $_POST['ccnum'];
$m = $_POST['exMonth'];
$y = $_POST['exYear'];
$date = new dateTime();
$m++;
$date->setDate($y, $m, 1);

$date->modify('-1 day');
        
//prep $v2,$v3,$v4
$v2 = md5($ccnum);
$v3 = $date->format('Y-m-d');
$v4 = $_POST['cvv'];

//connect database
$conn = new mysqli('localhost','root','','creditcard');
//check connection
if($conn-> connect_error) {
    die("Connection failed:" . $conn->connect_error);
}
    //echo "connected successfully";
        
// insert record
$sql="INSERT INTO `card`(`ccnum`, `expdate`, `seccode`) VALUES
('$v2', '$v3', '$v4')";
        
if ($conn->query($sql)=== TRUE) {
    //echo "New record created successfully";
}
else {
   echo "Error: " . $sql . "<br>" . $conn->error;
}
        
       
//close connection
$conn->close();
        $masked = str_pad(substr($ccnum,-4), strlen($ccnum), '*', STR_PAD_LEFT);
          
        echo "<h2> Your card ".$masked. " has been saved </h2>"; //**** **** **** 1234
}
    
   else {header('Location: pay.php');}
        
?>
    </section>
   <footer id='successFooter'></footer>
    
    </body>
    </html>