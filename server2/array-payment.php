
                   <?php
                    
                    $students=array(
                      array( 
                        'name'=>'karthi', 
                        'payment_schedule'=>'first',  
                        'bill_number'=>'00012223',  
                        'amount_paid'=>'DHS 100,000',   
                        'balance_amount'=>'DHS 500,000',  
                        'date'=>'05-Jan, 2022',   
                      ),
                      array( 
                        'name'=>'karthi', 
                        'payment_schedule'=>'first',  
                        'bill_number'=>'00012223',  
                        'amount_paid'=>'DHS 100,000',   
                        'balance_amount'=>'DHS 500,000',  
                        'date'=>'05-Jan, 2022',  
                      ),
                      array( 
                        'name'=>'karthi', 
                        'payment_schedule'=>'first',  
                        'bill_number'=>'00012223',  
                        'amount_paid'=>'DHS 100,000',   
                        'balance_amount'=>'DHS 500,000',  
                        'date'=>'05-Jan, 2022',  
                      ),
                      array( 
                        'name'=>'karthi', 
                        'payment_schedule'=>'first',  
                        'bill_number'=>'00012223',  
                        'amount_paid'=>'DHS 100,000',   
                        'balance_amount'=>'DHS 500,000',  
                        'date'=>'05-Jan, 2022',  
                      ),
                  );    
              ?> 
            <div class="table-responsive"> 
                      <table class="table table-striped table-hover">  
                        
                        <tr  class="text-muted" >   
                          <td scope="col">Name </td> 
                          <td scope="col">Payment Schedule</td>
                          <td scope="col">Bill Number</td>
                          <td scope="col">Amount Paid</td>
                          <td scope="col">Balance Amount</td>
                          <td scope="col">Date</td>
                          <td></td>  
                        </tr>     
                      
                          <?php   
                          
                          foreach ($students as $student) {     
                        ?> 
                          <tr> 
                            <td ><?php echo  $student['name'];  ?> </td>  
                            <td ><?php echo $student['payment_schedule'];  ?></td>
                            <td ><?php echo $student['bill_number'] ; ?></td>
                            <td ><?php echo $student['amount_paid'];  ?></td>
                            <td ><?php echo $student['balance_amount'];  ?></td> 
                            <td ><?php echo $student['date'];  ?></td>
                            <td ><img src="vue.svg" alt="image"></td>       
                          </tr>                            
                          <?php
                          } 
                          ?>
                      </table>   
            </div> 