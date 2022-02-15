<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="style_crude.css">   
    <title>modifier</title> 
</head>  
<body>
       <?php  $connect=mysqli_connect("localhost","root","","e_classe_db");?>  
      <?php   
      
       if(isset($_POST['submit'])){
        
         $id=$_GET['id'];
         $update="UPDATE `course` SET `nom`='$_POST[nom]',`prenom`='$_POST[prenom]',`ville`='$_POST[ville]',`email`='$_POST[email]' WHERE id='$id'";
          mysqli_query($connect,$update); 
          header('location:course.php');
       } 
      ?> 
             <?php
                    
                    $id=$_GET['id'];   
                    $select="SELECT * FROM `course` WHERE id='$id'";
                    $query=mysqli_query($connect, $select);
                    $rows=mysqli_fetch_assoc( $query); 
             
             ?>
             <div  class="register">   
                  <h2>Ajouter</h2>  
                  <form action="" method="POST"> 
                        <input type="text" name="nom" placeholder="nom" value=<?php echo $rows['nom'] ?>><br> 
                       
                        <input type="text" name="prenom" placeholder="prenom" value=<?php echo $rows['prenom'] ?>><br>  
                       
                        <input type="text" name="ville" placeholder="ville" value=<?php echo $rows['ville'] ?>> <br>    
                      
                        <input type="text" name="email" placeholder="email" value=<?php echo $rows['email'] ?>><br>    
                       
                        <button type="submit" name="submit">
                         save  
                        </button>  
                    </form>    
                        
              </div>
</body>
</html>