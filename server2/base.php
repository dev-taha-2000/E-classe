<!DOCTYPE html>  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>base</title>  
</head>
<body>  
                 <?php   
                 
                           $connect=mysqli_connect("localhost","root","","e_classe_db");                            

                           $sql = "SELECT `Name`, `Payment Schedule`, `Bill Number`, `Amount Paid`, `Balance Amount`, `Date` FROM `payment` ";
                           $result=mysqli_query( $connect,$sql); 
                           
                 ?>  
                                      <table class="table">
                                                <tr>  
                                                     <td>name</td>
                                                     <td>Payment Schedule</td>
                                                      <td>Bill Number</td>
                                                      <td>Amount Paid</td>
                                                      <td>Balance Amount</td>
                                                      <td>Date</td>  
                                                      <td></td>
                                                 </tr> 
                 <?php            
                           foreach($result as $rows){ 
                            ?>       
                                               <tr>  
                                                   <td><?php echo $rows['Name']?></td> 
                                                   <td><?php echo $rows['Payment Schedule']?></td>
                                                   <td><?php echo $rows['Bill Number']?></td>
                                                   <td><?php echo $rows['Amount Paid']?></td>
                                                   <td><?php echo $rows['Balance Amount']?></td>
                                                   <td><?php echo $rows['Date']?></td>  
                                                   <td><img src="vue.svg" alt="imag"></td>      
                                               </tr>
                                              
                                   
                                        
                               
                                <?php  } ?>    

                                </table>  
                                <a href="payment.php">ajouter</a>   
                            
             

</body>
</html>   