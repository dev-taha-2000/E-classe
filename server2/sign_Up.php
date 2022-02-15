<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                            $password=htmlspecialchars(strtolower(trim($_POST['password'])));
                           
                            $requet=$connection->prepare("INSERT INTO `sign up`(`first name`, `list name`, `Email`, `password`) VALUES (:nome,:prenom,:email,:password)");
                        
                            $requet->bindParam("nome",$nome); 
                            $requet->bindParam("prenom",$pnome);
                            $requet->bindParam("email", $Email);
                            $requet->bindParam("password",$password);  
                            if($requet->execute()){
                              $_SESSION['nome']; 
                                echo '<div class="alert alert-success container mt-4" role="alert">
                                Your account has been successfully created
                              </div>'; 
                              
                            } 
                           }
                        }  
             ?> 
                            <div style="width:30% ;margin:auto;margin-top:50px;"> 
                            <form method="post" class="container ">  
                                <label for="nome">first name*</label>   
                                <input type="text" class="form-control" name="nome" required placeholder="first name"><br> 
                                <label for="nome">last name*</label>
                                <input type="tex"  class="form-control"  name="prenome" required placeholder="last name"><br> 
                                <label for="Email">Email*</label>
                                <input type="Email"  class="form-control"  name="Email" required placeholder=" Email"><br>
                                <label for="pasword">password*</label>
                                <input type="password"  class="form-control"  name="password" required placeholder="password"><br>
                                    <button type="submit" class="btn btn-primary" name="submit">sign up</button> 
                                    <button  class="btn btn-light" > <a href="login.php" class="text-decoration-none text-dark">login</a></button> 

                            </form>  
                            </div> 
</body>
</html>

     

          