                    <?php
                        session_start();
                        if(empty($_SESSION['Email'])){  
                                header("Location:index.php");
                            } 

                    ?>  
  
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">  
    <link rel="stylesheet" href="style.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>

</head>  
<body>
              
                <div class="container-fluide">
                       
                     <?php 
                     include ('header.html');
                    
                    ?>
        
                     <div class="row" style="height: 100vh;">   
                         <?php   
                          include ('aside.php');  
                         ?>   

                                 
                        <div class="col-12 col-lg-10">  

                              <?php include 'navbar.html' ?>
                               <?php
                                     $connect=mysqli_connect("localhost","root","","e_classe_db"); 
                                      
                                ?>

                             <div class="row p-4">     
                                        <div class=" col-12 col-sm-6 px-3  my-3  col-xl-3 " style="height:140px;"> 
                                            <div  style="height:140px;border-radius: 10px;background-color: #F0F9FF;"> 
                                                <img src="student.svg" alt="image" class="mt-3 ml-3"> 
                                                <p class="text-secondary ml-3">student</p>  
                                                <div class="bg-light " style="width: 30px;position: relative;left: 170px;"> 
                                                    <H2 class="mt-2 float-end"><?php 
                                                    
                                                    $connect=mysqli_connect("localhost","root","","e_classe_db");
                                                     $sql="select COUNT(*) as num from student";
                                                    $my=mysqli_query( $connect, $sql);
                                                      while($rows=mysqli_fetch_assoc($my)){  
                                                          echo $rows['num']; 
                                                      }
                                                    
                                                    ?></H2>   
                                                </div>
                                            </div>   
                                        </div>   
                                        <div class=" col-12 col-sm-6    px-3  my-3 col-xl-3" style="height:140px;">  
                                            <div  style="height:140px;border-radius: 10px;background-color: #FEF6FB;">
                                                <img src="tag.svg" alt="image" class="mt-3 ml-3"> 
                                                <p class="text-secondary ml-3">course</p>  
                                                <div class="bg-light " style="width: 30px;position: relative;left: 170px;"> 
                                                <H2 class="mt-2 float-end"><?php  
                                                    
                                                    $connect=mysqli_connect("localhost","root","","e_classe_db");
                                                     $sql="SELECT COUNT(*) as num from payment";  
                                                    $my=mysqli_query( $connect, $sql);
                                                      while($rows=mysqli_fetch_assoc($my)){  
                                                          echo $rows['num']; 
                                                      }
                                                    
                                                    ?></H2>   
                                                </div>
                                            </div>  
                                        </div>  
                                        <div class="col-12 col-sm-6   px-3  my-3 col-xl-3" style="height:140px;"> 
                                            <div  style="height:140px;border-radius: 10px;background-color:#FEFBEC;">

                                                <div  style="height:140px;border-radius: 10px;background-color: #FEF6FB;">
                                                    <img src="dolar.svg" alt="image" class="mt-3 ml-3"> 
                                                    <p class="text-secondary ml-3">Payements</p>  
                                                    <div class="bg-light " style="width: 30px;position: relative;left: 170px;"> 
                                                        <h2 class="mt-2 float-end">
                                                        <?php
                                                                        $connect=mysqli_connect("localhost","root","","e_classe_db");
                                                                        $sql="SELECT SUM('Payment Schedule') as num from payment";    
                                                                       $my=mysqli_query($connect,$sql); 
                                                                         while($rows=mysqli_fetch_assoc($my)){  
                                                                             echo $rows['num']."dh"; 
                                                                         }
                                                                       ?>

                                                        </h2>    
                                             </div>
                                                </div>  
                                            </div>  
                                        </div> 
                                        <div class=" col-12 col-sm-6  px-3  my-3 col-xl-3" style="height:140px;">  
                                            <div class="bg-primary " style="height:140px;border-radius: 10px;">
                                               
                                                    <img src="pers.svg" alt="image" class="mt-3 ml-3"> 
                                                    <p class="text-secondary ml-3">Users</p>   
                                                      <div class="bg-light d-block" style="width: 30px;position: relative;left: 170px;"> 
                                                                 <h2 class="mt-2 float-end">
                                                                     <?php
                                                                        $connect=mysqli_connect("localhost","root","","e_classe_db");
                                                                        $sql="SELECT COUNT(*) as num from `sign up`";   
                                                                       $my=mysqli_query( $connect, $sql);
                                                                         while($rows=mysqli_fetch_assoc($my)){  
                                                                             echo $rows['num']; 
                                                                         }
                                                                       ?>
                                                                 </h2>  
                                                      </div> 
                                                      
                                                     
                                                
                                            </div>  
                                        </div> 
                                       
                             </div>
                            
                        </div>
                      </div>  
                </div>

               

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>