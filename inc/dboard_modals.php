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
					  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Contact Person</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Machine</th>
                 
                
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
					 <?php
							
							$query = mysqli_query($conn, " select schedule.schedule_id, schedule.client_id, schedule.contract_id, schedule.machine_id, 
							schedule.schedule_date,schedule.status, clients.client_name,clients.contact_person, clients.contact_email,clients.client_address,clients.imglink, machine.machine_model from 
							((clients right join schedule on clients.client_id = schedule.client_id) left join machine on machine.machine_id = schedule.machine_id) 
							WHERE schedule.contract_id ='' AND schedule.status != '2' ");
							while($fetch = mysqli_fetch_array($query)){	
							
						?>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="<?php echo $fetch['imglink'] ?>" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $fetch['client_name']?></h6>
                            <p class="text-xs text-secondary mb-0"><?php echo $fetch['client_address']?></p>
                          </div>
                        </div>
						    <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success"><?php echo date("F-d-Y", strtotime($fetch['schedule_date']))?></span>
						
                      </td>
                      </td>
					   <td>
					    <h6 class="mb-0 text-sm"><?php echo $fetch['contact_person']?></h6>
                        <p class="text-xs font-weight-bold mb-0"><?php echo $fetch['contact_email']?></p>
                      
                      </td>
				
					  
					  <td>
                        <p class="text-xs font-weight-bold mb-0"><?php echo $fetch['machine_model']?></p>
                      
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
					  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Contact Person</th>	  
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Machine</th>
                   
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
					 <?php
							
							$query = mysqli_query($conn, " select schedule.schedule_id, schedule.client_id, schedule.contract_id, schedule.machine_id, 
							schedule.schedule_date,schedule.status, clients.client_name,clients.contact_person, clients.contact_email,clients.client_address,clients.imglink, machine.machine_model from 
							((clients right join schedule on clients.client_id = schedule.client_id) left join machine on machine.machine_id = schedule.machine_id) 
							WHERE schedule.contract_id !='' AND schedule.status = '1' ORDER BY schedule.schedule_date");
							while($fetch = mysqli_fetch_array($query)){	
							
						?>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="<?php echo $fetch['imglink'] ?>" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
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
					    <h6 class="mb-0 text-sm"><?php echo $fetch['contact_person']?></h6>
                        <p class="text-xs font-weight-bold mb-0"><?php echo $fetch['contact_email']?></p>
                      
                      </td>
				
					  
					  <td>
                        <p class="text-xs font-weight-bold mb-0"><?php echo $fetch['machine_model']?></p>
                      
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
    <div class="modal fade" id="serviceDone" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h5 class="">Service Call Resolved</h5>
             
              </div>
              <div class="card-body">
                 <div class="table-responsive p-0">
			   
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Client Name</th>
					     <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Schedule Date</th>
					  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Contact Person</th>	  
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Machine</th>
                   
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
					 <?php
							
							$query = mysqli_query($conn, " select schedule.schedule_id, schedule.client_id, schedule.contract_id, schedule.machine_id, 
							schedule.schedule_date,schedule.status, clients.client_name,clients.contact_person, clients.contact_email,clients.client_address,clients.imglink, machine.machine_model from 
							((clients right join schedule on clients.client_id = schedule.client_id) left join machine on machine.machine_id = schedule.machine_id) 
							WHERE schedule.contract_id !='' AND schedule.status = '1' ");
							while($fetch = mysqli_fetch_array($query)){	
							
						?>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="<?php echo $fetch['imglink'] ?>" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
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
					    <h6 class="mb-0 text-sm"><?php echo $fetch['contact_person']?></h6>
                        <p class="text-xs font-weight-bold mb-0"><?php echo $fetch['contact_email']?></p>
                      
                      </td>
				
					  
					  <td>
                        <p class="text-xs font-weight-bold mb-0"><?php echo $fetch['machine_model']?></p>
                      
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