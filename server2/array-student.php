
                   <?php
                    
                    $students=array(
                      array( 
                        'name'=>'username',  
                        'payment_schedule'=>'karthi@gmmail.com',  
                        'bill_number'=>'1234578',  
                        'amount_paid'=>'1234567305477760',   
                        'date'=>'02/09/2021',  
                      ),
                      array( 
                        'name'=>'username', 
                        'payment_schedule'=>'karthi@gmmail.com',  
                        'bill_number'=>'1234578',  
                        'amount_paid'=>'1234567305477760',   
                        'date'=>'02/09/2021',   
                      ),
                      array( 
                        'name'=>'username', 
                        'payment_schedule'=>'karthi@gmmail.com',  
                        'bill_number'=>'1234578',  
                        'amount_paid'=>'1234567305477760',   
                        'balance_amount'=>'5,200 DH',    
                        'date'=>'02/09/2021',  
                      ),
                      array( 
                        'name'=>'username', 
                        'payment_schedule'=>'karthi@gmmail.com',  
                        'bill_number'=>'1234578',  
                        'amount_paid'=>'1234567305477760',   
                        'date'=>'02/09/2021',  
                      ),
                      array( 
                        'name'=>'username', 
                        'payment_schedule'=>'karthi@gmmail.com',  
                        'bill_number'=>'1234578',  
                        'amount_paid'=>'1234567305477760',   
                        'date'=>'02/09/2021',  
                      )
                  );   
              ?> 
            <div class="table-responsive"> 
              <table class="table ">   
                   
                      <tr class="text-muted">  
                         <td></td> 
                       
                        <td >Name </td> 
                        <td >Email</td>
                        <td >phone</td>
                        <td >Enroll number</td>
                        <td >Date of admission</td>
                        <td></td>  
                      </tr> 
                   
                   
                        <?php 
                        
                          foreach ($students as $student) {   
                        ?> 
                          <tr > 
                             <td><img src="svg/imgdach.svg" alt=""></td>  
                            <td ><?php echo  $student['name'];  ?> </td>  
                            <td ><?php echo $student['payment_schedule'];  ?></td>
                            <td ><?php echo $student['bill_number'] ; ?></td>
                            <td ><?php echo $student['amount_paid'];  ?></td> 
                            <td ><?php echo $student['date'];  ?></td>
                            <td>
                               <div class="p-2">
                                   <img src="svg/modifier.svg" alt="">
                                   <img src="svg/suprimer.svg" alt=""> 
                               </div>
                            </td>
                          </tr> 
                          
                          <?php
                          } 
                          ?>
                      
                </table>   
            </div>    
