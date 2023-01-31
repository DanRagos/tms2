 <!-- logout--> 


 <div class="col-md-4">
    <div class="modal fade" id="pendCall" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h5 class="">Pending Service Call</h5>
             
              </div>
              <div class="card-body">
                 <div class="table-responsive p-0">
			   
                <table class="table align-items-center mb-0" id="dataTable">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Client Name</th>
					       <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Schedule Date</th>
					  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Machine</th>
                    
                 
                
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
					 <?php
							
							$query = mysqli_query($conn, " select schedule.schedule_id, schedule.client_id, schedule.guest, schedule.contract_id, schedule.machine_type, schedule.model, schedule.schedule_date,schedule.status, clients.client_name,clients.contact_person, clients.contact_email,clients.client_address,clients.imglink, machine_type.machine_name from ((clients right join schedule on clients.client_id = schedule.client_id) 
							left join machine_type on schedule.machine_type = machine_type.machine_id)
							WHERE schedule.contract_id ='' AND schedule.status != '2' ");
							while($fetch = mysqli_fetch_array($query)){	
									$clientName = $fetch['client_name'];
								$imglink = $fetch['imglink'];
					 if ($fetch['guest']) {
		$guest = $fetch['guest'];
		 $last_space = strrpos($guest, ' / ');
$clientAddress = substr($guest, $last_space + 2);
$clientName = substr($guest, 0, $last_space - 0);
	   }
	   else {
		   $clientName = $fetch['client_name'];
		     $clientAddress = $fetch['client_address'];

	   }
							
						?>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../image/uploads/mv santiago.webp" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $clientName?></h6>
                            <p class="text-xs text-secondary mb-0"><?php echo $clientAddress?></p>
                          </div>
                        </div>
						    <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success"><?php echo date("F-d-Y", strtotime($fetch['schedule_date']))?></span>
						
                      </td>
                      </td>
					  
				
					  
					  <td>
                        <p class="text-xs font-weight-bold mb-0"><?php echo $fetch['model']?></p>
						 <p class="text-xs text-secondary mb-0"><?php echo $fetch['machine_name']?></p>
                      
                      </td>
							
                  
         
					  <?php $contract_id = $fetch['contract_id']?>
                  
							
                    </tr>
							
							<?php } ?>
                  </tbody>
                </table>
              </div>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
   <div class="col-md-4">
    <div class="modal fade" id="pendPms" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h5 class="">Pending PMS </h5>
             
              </div>
              <div class="card-body">
                 <div class="table-responsive p-0">
			   
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Client Name</th>
					     <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Schedule Date</th>
					  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Machine</th>	  
                 
                   
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
					 <?php
							
							$query = mysqli_query($conn, "select schedule.schedule_id, schedule.client_id, schedule.contract_id, schedule.machine_type, schedule.model, schedule.schedule_date,schedule.status, clients.client_name,clients.contact_person, clients.contact_email,clients.client_address,clients.imglink, machine_type.machine_name from ((clients right join schedule 
							on clients.client_id = schedule.client_id) left join machine_type on machine_type.machine_id = schedule.machine_type)WHERE MONTH(schedule_date) <= $month and YEAR(schedule_date) <= $year AND  schedule.contract_id !='' AND schedule.status != '2' ORDER BY schedule.schedule_date");
							while($fetch = mysqli_fetch_array($query)){	
							
						?>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../image/uploads/mv santiago.webp" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $fetch['client_name']?></h6>
                            <p class="text-xs text-secondary mb-0"><?php echo $fetch['client_address']?></p>
                          </div>
                        </div>
                      </td>
					    <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success"><?php echo date("F-d-Y", strtotime($fetch['schedule_date']))?></span>
						
                      </td>
					 
				
					  
					  <td>
                        <p class="text-xs font-weight-bold mb-0"><?php echo $fetch['model']?></p>
						  <p class="text-xs font-weight-bold mb-0"><?php echo $fetch['machine_name']?></p>
						
                      
                      </td>
							
                    
         
					  <?php $contract_id = $fetch['contract_id']?>
                  
							
                    </tr>
							
							<?php } ?>
                  </tbody>
                </table>
              </div>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
   <div class="col-md-4">
    <div class="modal fade"  id="serviceDone" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h5 class="">Service Done </h5>
             
              </div>
              <div class="card-body">
                 <div class="table-responsive p-0">
			   
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Client Name</th>
					     <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Service Date</th>
					  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Machine</th>	  
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Service By</th>
                   
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
					 <?php
							
								$query = mysqli_query($conn, "SELECT pms.pms_id, pms.schedule_id, pms.service_date, pms.service_problem, pms.service_diagnosis,
				  pms.service_done,  pms.remarks, pms.service_by, schedule.guest, schedule.model, schedule.client_id, schedule.status, schedule.contract_id, contract.contract_id, contract.count,  contract.total,
				  contract.status, clients.client_name, clients.client_address, clients.imglink, machine_type.machine_name from 
				  ((((pms inner join schedule on pms.schedule_id = schedule.schedule_id) left join clients on schedule.client_id = clients.client_id) 
				  left join contract 
				  on schedule.contract_id = contract.contract_id ) left join machine_type on schedule.machine_type = machine_type.machine_id)
  WHERE MONTH(service_date) = $month AND YEAR (service_date) =  $year and pms.status = '2' GROUP BY pms.schedule_id");
  
  
							while($fetch = mysqli_fetch_array($query)){	
									
									 if ($fetch['guest']) {
		$guest = $fetch['guest'];
		 $last_space = strrpos($guest, ' / ');
$clientAddress = substr($guest, $last_space + 2);
$clientName = substr($guest, 0, $last_space - 1);
	   }
	   else {
		   $clientName = $fetch['client_name'];
		     $clientAddress = $fetch['client_address'];

	   }
							
						?>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../image/uploads/mv santiago.webp" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $clientName?></h6>
                            <p class="text-xs text-secondary mb-0"><?php echo $clientAddress?></p>
                          </div>
                        </div>
                      </td>
					    <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success"> <?php echo date("F-d-Y", strtotime($fetch['service_date']))?></span>
						
                      </td>
					   <td>
					  <h6 class="mb-0 text-sm"><?php echo $fetch['model']?></h6>
					    <p class="text-xs font-weight-bold mb-0"><?php echo $fetch['machine_name']?></p>
                       
                      
                      </td>
				
					  
					  <td>
                           <p class="text-xs font-weight-bold mb-0"><?php echo $fetch['service_by']?></p>
                      
                      </td>
							
                    
         
					  <?php $contract_id = $fetch['contract_id']?>
                  
							
                    </tr>
							
							<?php } ?>
                  </tbody>
                </table>
              </div>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    
  <div class="col-md-4">
    <div class="modal fade" id="contractExp" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h5 class="">Contract For Expiration</h5>
             
              </div>
              <div class="card-body">
                 <div class="table-responsive p-0">
			   
                <table class="table align-items-center mb-0 scrollable">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Client Name</th>
					     <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Turnover / Coverage</th>
					  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Machine</th>
  					  
             
                   
                    </tr>
                  </thead>
                  <tbody>
				   <?php
							
							$query = mysqli_query($conn, "SELECT contract.contract_id, contract.client_id,machine_type.machine_name, contract.model, contract.turn_over, contract.coverage, clients.client_name, clients.client_address 
							from ((contract inner JOIN clients on contract.client_id = clients.client_id) left join machine_type on 
							contract.machine_type = machine_type.machine_id)
							WHERE contract.count = '1'  ");
							while($fetch = mysqli_fetch_array($query)){	
							   $contract_id = $fetch['contract_id']
						?>
                    <tr>
					
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../image/uploads/mv santiago.webp" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $fetch['client_name']?></h6>
                            <p class="text-xs text-secondary mb-0"><?php echo $fetch['client_address']?></p>
                          </div>
                        </div>
                      </td>
					    <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success"><?php echo date("F-d-Y", strtotime($fetch['turn_over'])).' '.date("F-d-Y", strtotime($fetch['coverage']))?></span>
						
                      </td>
					   <td>
					    <h6 class="mb-0 text-sm"><?php echo $fetch['model']?></h6>
						<p class="text-xs text-secondary mb-0"><?php echo $fetch['machine_name']?></p>
                      </td>
									
                    </tr>
							
							<?php } ?>
                  </tbody>
                </table>
              </div>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>