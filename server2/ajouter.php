<!DOCTYPE html>  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style_crude.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter</title>  
</head>
<body>

                 
                 <?php  
                 
                           $connect=mysqli_connect("localhost","root","","e_classe_db");  
                          
                           if(isset($_POST['submit'])){                           
                           $Name = $_POST['Name']; 
                           $Payment_Schedule = $_POST['Payment_Schedule'];  
                           $Bill_Number = $_POST['Bill_Number']; 
                           $Amount_Paid = $_POST['Amount_Paid'];
                           $Balance_Amount = $_POST['Balance_Amount']; 
                           $Date = $_POST['Date'];
                           $sql = "INSERT INTO `payment`(`Name`, `Payment Schedule`, `Bill Number`, `Amount Paid`, `Balance Amount`, `Date`) VALUES ('$Name','$Payment_Schedule',' $Bill_Number',' $Amount_Paid',' $Balance_Amount','$Date')";
                           if($sql==true){
                                echo "les information de $Name est enregistrer"; 
                           }
                          
                           mysqli_query($connect,$sql);  
                           header('location:payment.php');       
                        }
                       
                      
                 ?>
              
              <div  class="register"> 
                  <h2>Ajouter</h2>  
                    <form action="" method="post"> 
                        <input type="text" name="Name" placeholder="Name"><br>
                        <input type="text" name="Payment_Schedule" placeholder="Payment_Schedule" ><br>
                       
                        <input type="text" name="Bill_Number" placeholder="Bill_Number" ><br>
                       
                        <input type="text" name="Amount_Paid" placeholder="Amount_Paid" > <br>  
                      
                        <input type="text" name="Balance_Amount" placeholder="Balance_Amount" ><br>
                       
                        <input type="date" name="Date"  placeholder="Date" > <br>   
                        <input type="submit" name="submit"> 
                    </form>    
                         <a href="payment.php">retoure</a>    
              </div>
                       
             

</body>
</html>










              

                      