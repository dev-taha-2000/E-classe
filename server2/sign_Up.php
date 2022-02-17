<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="body.css">
    <title>Document</title>
</head>
<body>    
             <?php
                          session_start();
                           $username="root";
                           $password="";
                           $connection=new PDO("mysql:host=localhost;dbname=e_classe_db;",$username,$password); 
                           if(isset($_POST['submit'])){
                                 
                                  $requet_a=$connection->prepare("SELECT *FROM  `sign up` WHERE  Email=:Email");
                                  $Email=htmlspecialchars(strtolower(trim($_POST['Email'])));  
                                  $requet_a->bindParam("Email",$Email); 
    
                                  $requet_a->execute(); 
                                  if($requet_a->rowCount()>0){  
                                           echo '<div class="alert alert-danger" role="alert">
                                           This email has been used by 
                                         </div>';
                                  } 
                                   
                         
                          else{  
                            $nome=htmlspecialchars(strtolower(trim($_POST['nome']))); 
                            $pnome=htmlspecialchars(strtolower(trim($_POST['prenome'])));
                            $Email=htmlspecialchars(strtolower(trim($_POST['Email'])));  
                            $password=$_POST['password'];  
                            $image=$_POST['image'];  
                            $requet=$connection->prepare("INSERT INTO `sign up`(`first name`, `list name`, `Email`, `password`,`image`) VALUES (:nome,:prenom,:email,:password,:image)");
                        
                            $requet->bindParam("nome",$nome); 
                            $requet->bindParam("prenom",$pnome);
                            $requet->bindParam("email", $Email);
                            $requet->bindParam("password",$password);  
                            $requet->bindParam("image",$image);  
                            if($requet->execute()){      
                              $_SESSION['registe']="registe";
                              header("Location:index.php");                                
                            } 
                           }
                        }  
             ?> 
                            <div class="container  mt-1 bg-light p-2" style="width:30%">  
                            <form method="post">
                                <h1 class="border-left border-5 border-info ms-4 ">E-classe</h1>      
                                <h4 class="text-center ">sign in</h4>  
                                <p class="text-secondary text-center">Enter your credentials to access your account</p> 

                                <label for="nome">first name*</label>    
                                <input type="text" class="form-control" name="nome" required placeholder="first name"><br> 
                                <label for="nome">last name*</label>
                                <input type="tex"  class="form-control"  name="prenome" required placeholder="last name"><br> 
                                <label for="Email">Email*</label>
                                <input type="Email"  class="form-control"  name="Email" required placeholder=" Email"><br>
                                <label for="pasword">password*</label>
                                <input type="password"  class="form-control"  name="password" required placeholder="password"><br>  
                                    <button type="submit" class="btn btn-primary" name="submit">sign up</button> 
                                    <button  class="btn btn-light" > <a href="index.php" class="text-decoration-none text-dark">login</a></button> 
                                    <br>  <input type="file" name="image"> 
                            </form>  
                            </div> 
</body>
</html>

     

          