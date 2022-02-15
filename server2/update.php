<?php 

$connect=mysqli_connect("localhost","root","","e_classe_db");  
if(isset($_POST['submit'])){  
    $query="UPDATE `payment` SET `Name`='$_POST[Name]',`Payment Schedule`='$_POST[Payment_Schedule]',`Bill Number`='$_POST[Bill_Number]',`Amount Paid`='$_POST[Amount_Paid]',`Balance Amount`='$_POST[Balance_Amount]',`Date`='$_POST[Date]' WHERE `Name`='$_POST[Name]'";
    mysqli_query( $connect,$query); 
} 

?>  
<!DOCTYPE html>  
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style_crude.css">
<link rel="stylesheet" href="style.css">
<title>update</title> 
</head>
<body>       

       <div class="login">        
                <form action="" method="post">            
                <div  class="register"> 
                  <h2>modifier</h2>   
                    <form action="" method="post"> 
                        <input type="text" name="Name" placeholder="Name"><br>
                        <input type="text" name="Payment_Schedule" placeholder="Payment_Schedule" ><br>
                       
                        <input type="text" name="Bill_Number" placeholder="Bill_Number" ><br>
                       
                        <input type="text" name="Amount_Paid" placeholder="Amount_Paid" > <br>  
                      
                        <input type="text" name="Balance_Amount" placeholder="Balance_Amount" ><br>
                       
                        <input type="date" name="Date"  placeholder="Date" > <br>   
                        <input type="submit" name="submit"> 
                    </form>    
                    <a href="payment.php"><button>retoure</a>    
              </div>
                  
            
       </div>
</body>
</html> 