<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style_crude.css"> 
    <link rel="stylesheet" href="style_crude.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter</title>  
</head>
<body>           
                 <?php  
                 
                           $connect=mysqli_connect("localhost","root","","e_classe_db");  
                          
                           if(isset($_POST['submit'])){                             
                           $Name = $_POST['Name']; 
                           $Email = $_POST['Email'];  
                           $phone = $_POST['phone']; 
                           $Enrollnumber = $_POST['Enroll_number'];
                           $Dateofadmission = $_POST['Date_of_admission'];  
                           $sql = "INSERT INTO `student`( `Name`, `Email`, `phone`, `Enroll_number`, `Date_of_admission`) VALUES  ('$Name','$Email',' $phone',' $Enrollnumber',' $Dateofadmission')"; 
                           mysqli_query($connect,$sql);  
                           if($sql==true){
                            header("location:student.php");  
                           }
                               
                        }
                      
                 ?>  
              
              <div  class="register"> 
                  <h2>Ajouter</h2>  
                    <form action="" method="post"> 
                        <input type="text" name="Name" placeholder="Name"><br>
                        <input type="text" name="Email" placeholder="Email" ><br>
                       
                        <input type="text" name="phone" placeholder="phone" ><br>
                       
                        <input type="text" name="Enroll number" placeholder="Enroll_number" > <br>  
                      
                        <input type="text" name="Date of admission" placeholder="Date_of_admission" ><br>  
                       
                        <input type="submit" name="submit"> 
                    </form>    
                         <a href="student.php">retoure</a>     
              </div> 
                       
             

</body>
</html>