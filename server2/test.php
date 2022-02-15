<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="main.css"> 
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>      
 </head>                                     
  <body>                                        
                     
                     
                   <table class="table">
                   <?php
                    
                    $students=array(
                      array( 
                        'name'=>'Taha', 
                        'payment_schedule'=>'15/12/2020',  
                        'bill_number'=>'1234578',  
                        'amount_paid'=>'3,900 DH',   
                        'balance_amount'=>'5,200 DH',  
                        'date'=>'02/09/2021',  
                      ),
                      array( 
                        'name'=>'Ahmed', 
                        'payment_schedule'=>'15/12/2020',  
                        'bill_number'=>'1234578',  
                        'amount_paid'=>'3,900 DH',   
                        'balance_amount'=>'5,200 DH',  
                        'date'=>'02/09/2021',  
                      ),
                      array( 
                        'name'=>'Jhon', 
                        'payment_schedule'=>'15/12/2090',  
                        'bill_number'=>'1234578',  
                        'amount_paid'=>'3,900 DH',   
                        'balance_amount'=>'5,200 DH',  
                        'date'=>'02/09/2021',  
                      )
                  );  
                  
                      
              
              ?> 
              <table class="table">
                   
                      <tr>
                        <th scope="col">Name </th> 
                        <th scope="col">Payment Schedule</th>
                        <th scope="col">Bill Number</th>
                        <th scope="col">Amount Paid</th>
                        <th scope="col">Balance Amount</th>
                        <th scope="col">Date</th>
                      </tr> 
                   
                   
                        <?php
                          foreach ($students as $student) {
                                echo "<tr>
                                      <td>".$student['name']."</td>
                                      <td>".$student['payment_schedule']."</td>
                                      <td>".$student['amount_paid']."</td>
                                      <td>".$student['bill_number']."</td> 
                                      <td>".$student['balance_amount']."</td>
                                      <td>".$student['date']."</td>  
                                      <tr>"; 
         
                          }  
                        ?>  
                        
                   
                </table>   
                    
       </body>               
 </html> 