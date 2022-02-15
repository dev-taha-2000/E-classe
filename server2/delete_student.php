<?php 

$connect=mysqli_connect("localhost","root","","e_classe_db"); 
if(isset($_POST['submit'])){  
    $name=$_POST['Name'];
    $query="DELETE FROM `student` WHERE Name='$_POST[Name]'"; 
    mysqli_query( $connect,$query); 
    if( $query==true){
        echo "les information de $name est suprimer" ;  
    }  
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
<title>Delete</title> 
</head>
<body>       

<div class="login">        
    <form action="" method="post">            
    <div  class="register"> 
      <h2>delete student</h2>    
        <form action="" method="post"> 
            <input type="text" name="Name" placeholder="Name"><br>
          
            <input type="submit" name="submit"> 
        </form>    
        <a href="student.php"><button>retoure</a>   
  </div>
      

</div>
</body>
</html>