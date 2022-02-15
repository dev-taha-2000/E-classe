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
                           $sql = "SELECT *FROM `student`";   
                           $result=mysqli_query( $connect,$sql);  
                           
                 ?>  
                                      <table class="table">
                                                <tr>  
                                              
                                               <td></td>
                                                <td >Name </td> 
                                                <td >Email</td>
                                                <td >phone</td>
                                                <td >Enroll number</td> 
                                                <td >Date of admission</td>  
                                                <td></td>  
                                                 </tr> 
                 <?php            
                           foreach($result as $student){ 
                            ?>  
                          
                                                <tr>    
                                                <?php $id=$student['id']?>  
                                                <td><img src="svg/imgdach.svg" alt=""></td>  
                                                <td ><?php echo  $student['Name'];  ?> </td>    
                                                <td ><?php echo $student['Email'];  ?></td>
                                                <td ><?php echo $student['phone'] ; ?></td>
                                                <td ><?php echo $student['Enroll_number'];  ?></td>
                                                <td ><?php echo $student['Date_of_admission'];  ?></td>  
                                                <td>
                                                <div class="p-2">
                                                <a href="update_student.php?id=<?php echo $id?>"><img src="svg/modifier.svg" alt=""></a>     
                                                <a href="delete.php?id=<?php echo $id?>"><img src="svg/suprimer.svg" alt="" name="suprimer"></a>     
                                                </div>
                                                </td>
                                                </tr> 
                                              
                                   
                                        
                               
                                <?php  } ?>    

                                </table> 
                               
                                 
                            
             

</body>
</html>   