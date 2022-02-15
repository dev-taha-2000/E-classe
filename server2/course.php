<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css"> 
    <title>student</title>  
</head> 
<body>
    <div class="container-fluide" style="width: 100%;"> 
                    <?php 
                     include ('header.html');
                    
                    ?> 
        
        <div class="row" style="height: 100vh;"> 
               
                            <?php
                             include ('aside.php');    
                            ?>  
               <div class="col-lg-10 ">

                        
               <?php include 'navbar.html' ?> 
                          
                             <main style="height:125vh; background-color: #eef0f0;margin: 0px;margin-left: -14px; margin-right: -14px;padding: 20px;">   
                            <div class=" h-80 " style="width: 97%; "> 
                                <H3>COURSE</H3>     
                                <div class=" d-inline-block float-right rounded-3 " style="background-color: #00C1FE;width: 200px;">
                                <a href="ajouter_course.php" style="text-decoration:none;"><p class="text-light text-center " >ADD NEW COURSE</p></a>   
                                           
                                </div>
                             
                              
                           </div>

                            <?php
                                     include('select_course.php');
                            ?>

          </div>   
                 
              
    </div>

  

   <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>