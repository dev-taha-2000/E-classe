<!DOCTYPE html>  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link rel="stylesheet" href="main.css">  
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="body.css">   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head> 
<body>   
   <?php  
         session_start(); 
         $username="root";
         $password="";
         $connection=new PDO("mysql:host=localhost;dbname=e_classe_db;",$username,$password);
         ///////////////////
         if(isset($_SESSION['registe'])){ 
            echo '<div class="alert alert-success container mt-4" role="alert">
            Your account has been successfully created
          </div>'; 
         } 
     
       //////////////////
         if(isset($_POST['submit'])){ 
               $email=$_POST['Email'];
               $password=$_POST['password'];
               $requete=$connection->prepare("SELECT *FROM  `sign up` WHERE  Email=:Email AND password=:password");
               $requete->bindParam("Email",$email);
               $requete->bindParam("password",$password);   
               $requete->execute();   
            if( $requete->rowcount()>0){       
                 $_SESSION['Email']=$email;
                
                 header("Location:dachboard.php");     
             } 
             else{ 
                echo '<div class="alert alert-danger container mt-4" role="alert">
                your email or password incorrect 
                </div>';
             }
         }  
?>   
  <?php 
            if(isset($_POST['remember'])){   
                        $email=$_POST['Email'];
                        setcookie('email',$email,time()+3600,"/"); 
                        $password=$_POST['password'];
                        setcookie('password',$password,time()+3600,"/");  
            } 
    
    ?>    
       <div style="width:30% ;margin:auto;margin-top:50px;"> 
       <form method="post" class="container ">  
           <label for="Email">Email*</label>
           <input type="Email"  class="form-control"  name="Email" id="Email" required placeholder=" Email" value=<?= $_COOKIE['email'] ?? ''?>><br>    
           <label for="pasword">password*</label>                                                                 
           <input type="password"  class="form-control"  name="password" required placeholder="password" value=<?= $_COOKIE['password'] ?? ''?>><br>  
           <input type="checkbox" id="remember" name="remember"  value="Apples"/> 
           <label for="remember">remember me</label><br>  
           <button type="submit" class="btn btn-primary "  name="submit">login</button> 
           <button  class="btn btn-light" name="submit "> <a href="sign_Up.php" class="text-decoration-none text-dark">sign up</a></button> 
          
       </form>  
       </div> 
</body>
</html> 


