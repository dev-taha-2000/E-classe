<?php 
$connect=mysqli_connect("localhost","root","","e_classe_db");  
if(isset($_POST['submit'])){  
    $query="UPDATE `student` SET `Name`='$_POST[Name]',`Email`='$_POST[Email]',`phone`='$_POST[phone]',`Enroll_number`='$_POST[Enroll_number]',`Date_of_admission`='$_POST[Date_of_admission]' WHERE `id`='$_POST[id]'";
    mysqli_query( $connect,$query);
    header('location:student.php');
    mysqli_close($connect);
    
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
                 <?php 
                        $id = $_GET['id'];     
                        $connect=mysqli_connect("localhost","root","","e_classe_db");   
                        $select="SELECT *FROM `student` WHERE id='$id'"; 
                        $result=mysqli_query( $connect,$select);  
                        $rows=mysqli_fetch_array($result);

                     
                 ?>   
       <div class="login">        
                <form action="" method="post">            
                <div  class="register"> 
                  <h2>modifier</h2>    
                  <form action="" method="post"> 
                  <input type="hidden" name="id" value="<?php echo $rows['id']; ?>"><br>   

                        <input type="text" name="Name" value="<?php echo $rows['Name']; ?>"><br>
                        <input type="text" name="Email"  value=" <?php echo $rows['Email'];?>" ><br>
                       
                        <input type="text" name="phone" placeholder="phone"  value=" <?php echo $rows['phone'];?>" ><br>
                       
                        <input type="text" name="Enroll number" placeholder="Enroll_number" value=" <?php echo $rows['Enroll_number'];?>" > <br>  
                      
                        <input type="text" name="Date of admission" placeholder="Date_of_admission" value=" <?php echo $rows['Date_of_admission'];?>" ><br>  
                       
                        <input type="submit" name="submit"> 
                    </form>    
                    <a href="student.php"><button>retoure</a>     
              </div>
                 <?php     mysqli_close($connect);    ?> 
            
        </div>  
                     
</body>
</html> 