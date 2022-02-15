<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>array_payment</title>  
</head>
<body>

                 
                 <?php   
                 
                           $connect=mysqli_connect("localhost","root","","e_classe_db");                            

                           $sql = "SELECT `Name`, `Payment Schedule`, `Bill Number`, `Amount Paid`, `Balance Amount`, `Date` FROM `payment` ";
                           $result=mysqli_query( $connect,$sql);  
                 ?>  
                 <?php            
                           while($row=mysqli_fetch_array( $result)){
                            ?>      
                                             <table class="table">   
                                               <tr>
                                                   <td><?php echo $row['Name']?></td>
                                                   <td><?php echo $row['Payment Schedule']?></td>
                                                   <td><?php echo $row['Bill Number']?></td>
                                                   <td><?php echo $row['Amount Paid']?></td>
                                                   <td><?php echo $row['Balance Amount']?></td>
                                                   <td><?php echo $row['Date']?></td>   
                                               </tr>
                                            </table>  
                                        
                               
                                <?php  } ?>    
                                <a href="array.php">ajouter</a>    
                            
             

</body>
</html>   