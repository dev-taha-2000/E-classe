<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
                                echo "sucses";
                           }
                           mysqli_query($connect,$sql);       
                        }
                      
                 ?>
              
              <div style="width:200px">
                    <form action="" method="post"> 
                        <label for="">Name:</label> 
                        <input type="text" name="Name">
                        <label for="">Payment Schedule:</label> 
                        <input type="text" name="Payment_Schedule">
                        <label for="">BillNumber:</label>   
                        <input type="text" name="Bill_Number">
                        <label for="">Amount Paid:</label> 
                        <input type="text" name="Amount_Paid">
                        <label for="">Balance Amount:</label> 
                        <input type="text" name="Balance_Amount">
                        <label for="">Date:</label> 
                        <input type="date" name="Date">    
                        <input type="submit" name="submit">
                    </form>    
              </div>
                         <a href="payment.php">select</a> 
             

</body>
</html>