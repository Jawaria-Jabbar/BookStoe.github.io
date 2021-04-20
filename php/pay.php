<!DOCTYPE html>
<html lang=“en” dir=“LTR”>

<head>
    <meta charset="utf-8"/>
   <title> Payment page</title> 
    <link rel="stylesheet" type="text/css" href="css/index.css" >
</head>

<body>
    
<header id="mainHeader">
    
      <img id='logo' src="images/logo.jpg" alt="logo" title="logo"  height="100" width="150"/>
 <h1> Jawaria's Bookstore</h1>
    
        
</header>
   
    <nav>
        
     <ul class="nav">
      <li><a href="index.html" title="Homepage"> Homepage</a></li>
      <li><a href="" title="AboutUs">About Us </a></li>
      <li><a href="" title="ContactUs">Contact Us </a></li>
     </ul> 
     </nav> 
    <br>
     <br>
   
    
    <h2> Payment Options</h2>
     <hr>
    <h3>Debit/Credit Card</h3> 
    <img class="card" src="images/Card.jpg"  alt="card"  title="Card" width="70" height="45">
    
 <section id="cardCheck">
<form name="form1" method="POST" action="success.php">
    
    <label>Card Number: </label><input type="text" id="ccnum" name="ccnum"> 
    <br>
    <br>
    <ul class="dateCheck">
    <li>Expiration Date: <select name="exMonth" id="exMonth">
                <option selected value="0">Month</option>
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                 <option value="4">April</option>
                 <option value="5">May</option>
                 <option value="6">June</option>
                 <option value="7">July</option>
                 <option value="8">August</option>
                 <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
                </select>
        <select name="exYear" id="exYear">
            <option selected value=0>Year</option>
            <option value="2021">21</option>
            <option value="2022">22</option>
            <option value="2023">23</option>
            <option value="2024">24</option>
            <option value="2025">25</option>
            <option value="2026">26</option>
            <option value="2027">27</option>
            <option value="2028">28</option>
            <option value="2029">29</option>
            <option value="2030">30</option>
           </select>
        </li>
    </ul>
    <br>
    <label>Security Code/CVV: </label><input type="text" id="cvv" name="cvv"> 
    <br>
    <br>
    <p> (3-4 digit code normally on the back of your card)</p>
    <br>
     <input type="submit" name="submit" id="btn" value="Submit" /> 
     <input type="hidden" id="hidden" name="hidden" value=""/>
        
    </form>
     

    </section>
    
  <script type="text/javascript" src="js/pay.js"></script>  
</body>
    
        