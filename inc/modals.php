<?php
require '../inc/dbc.inc.php'; 
?>


<!--  Modal for Adding Client-->
 <div class="col-md-4">
    <div class="modal fade" id="addClient" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h5 class="">Add Client</h5>
                <p class="mb-0">Enter Client credentials</p>
              </div>
              <div class="card-body">
                <form role="form text-left" action="../inc/addClient.php" method="post" autocomplete="off"> 
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Client Name</label>
                    <input type="text" name="clientName" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
                  </div>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Address</label>
                    <input type="text" name= "clientAddress" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
                  </div>
				  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Contact Person</label>
                    <input type="text" name="contactPerson" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
                  </div>
				  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Email Address</label>
                    <input type="text" name= "emailAddress" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
                  </div>
                 <!-- <div class="form-check form-switch d-flex align-items-center">
                    <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                    <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
                  </div>
				  !-->
                  <div class="text-center">
                    <button type="submit" name="addClient" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Add</button>
                  </div>
                </form>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--  Modal for Adding Machine-->
  <div class="col-md-4">
    <div class="modal fade" id="addMachine" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h5 class=""></h5>
                <p class="mb-0">Enter Machine credentials</p>
              </div>
              <div class="card-body">
                <form role="form text-left" action="../inc/addMachine.php" method="post" autocomplete="off"> 
				
			<div class="input-group input-group-outline my-3">
			<select class="form-control" name="machineType" required>
           <option selected value="">Enter Type of Machine</option>
		    <?php
                                        $sql = "SELECT * FROM machine_type";
                                        $result = $conn->query($sql);
                                        while ($row = $result -> fetch_assoc()){
                                    ?>
                                    <option value = "<?php echo $row['machine_id']?>"><?php echo $row['machine_name']?></option>
                                    <?php
                                         }
                                    ?>
			</select>
			</div>
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Mahine Brand / Model</label>
                    <input type="text" name="machineName" class="form-control">
                  </div>
                
                 <!-- <div class="form-check form-switch d-flex align-items-center">
                    <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                    <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
                  </div>
				  !-->
                  <div class="text-center">
                    <button type="submit" name="addMachine" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Add</button>
                  </div>
                </form>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--  Modal for Event Details-->
<div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0">
                    <h5 class="modal-title">Schedule Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body rounded-0">
                    <div class="container-fluid">
                        <dl>
                            <dt class="text-muted">Client Name</dt>
                            <dd id="title" class="fw-bold fs-6"></dd>
                            <dt class="text-muted">Status</dt>
                            <dd id="stats" class=""></dd>
                            <dt class="text-muted">Client Address</dt>
                            <dd id="address" class=""></dd>
							 <dt class="text-muted">Machine</dt>
                            <dd id="machine" class=""></dd>
							 <dt class="text-muted">Reported Problem</dt>
                            <dd id="problem" class=""></dd>
							
						
						
                        </dl>
                    </div>
                </div>
                <div class="modal-footer rounded-0">
				<?php if ($_SESSION['type'] != 'Viewer') { ?>
                    <div class="text-end">
                        <button type="button" class="btn btn-primary btn-sm rounded-0" id="edit" data-id="" data-bs-toggle="modal"  data-bs-target="#save_schedule">Update</button>
                        <button type="button" class="btn btn-warning btn-sm rounded-0"  id="resched" data-id="" data-bs-toggle="modal"  data-bs-target="#resched-modal" >Reschedule</button>
						 <button type="button" class="btn btn-danger btn-sm rounded-0"  id="delete" data-id=""    >Delete</button>
                        <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                    </div>
				<?php } ?>
                </div>
            </div>
        </div>
    </div>
	<!-- reschedule modeal -->
	<div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="save_schedule">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0">
                    <h5 class="modal-title">Schedule Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body rounded-0">
                    <div class="container-fluid">
				<form action="../inc/save_schedule.php" method="post" id="schedule-form" autocomplete="off">
                                <input type="hidden" name="id" id="id" >
                               <div class="input-group input-group-static mb-4">
                                    <label for="title" class="control-label">Client Name</label>
                                    <input type="text" class="form-control form-control-sm rounded-0" name="title" id="title" disabled required>
                                </div>
                                <div class="input-group input-group-static mb-4">
                                    <label for="start_datetime" class="control-label">Schedule</label>
                                    <input type="date" class="form-control form-control-sm rounded-0" name="schedule_date" id="schedule_date" disabled required>
                                </div>
                               <div class="input-group input-group-static mb-4">
                                    <label for="end_datetime" class="control-label">Service Date</label>
                                    <input type="date" class="form-control form-control-sm rounded-0" name="service_date" id="service_date" required>
                                </div>
								 <div class="input-group input-group-static mb-4">
                                    <label for="description" class="control-label">Reported Problem</label>
                                    <textarea rows="2" class="form-control form-control-sm rounded-0" name="service_problem" id="service_problem" ></textarea>
                                </div>
							 <div class="input-group input-group-static mb-4">
                                    <label for="" class="control-label">Diagnosis</label>
                                    <textarea rows="2" class="form-control form-control-sm rounded-0" name="service_diagnosis" id="service_diagnosis" ></textarea>
                                </div>
							 <div class="input-group input-group-static mb-4">
                                    <label for="" class="control-label">Service Done</label>
                                    <textarea rows="2" class="form-control form-control-sm rounded-0" name="service_done" id="service_done" ></textarea>
                                </div>
								
								<div class="input-group input-group-static mb-4">
                                    <label for="sats" class="control-label">Status</label>
                                   <select name="remarks" class="form-control" id="sats" required>
									<option value="2" selected>Resolved</option>
									<option value="3">Unresolved</option>
									</select>
                                </div>
								 <div class="input-group input-group-static mb-4">
                                    <label for="" class="control-label">Recommendation</label>
                                    <textarea rows="2" class="form-control form-control-sm rounded-0" name="recommendation"  ></textarea>
                                </div>
								 <div class="input-group input-group-static mb-4">
                                    <label for="" class="control-label">Service By</label>
                                    <input  class="form-control form-control-sm rounded-0" name="service_by" id="service_by" required></input>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i class="fa fa-save"></i> Save</button>
                       
							<button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                        </div>
            </div>
        </div>
    </div>
	</div>
	<!-- save_schedule modeal -->
	<div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="resched-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0">
                    <h5 class="modal-title">Schedule Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body rounded-0">
                    <div class="container-fluid">
					<form action="../inc/edit_schedule.php" method="POST" id="resched-form" autocomplete="off">
                         <div class="input-group input-group-static mb-4">
                                    <label for="title" class="control-label">Client Name</label>
                                    <input type="text" class="form-control form-control-sm rounded-0" name="title" id="title" disabled required>
                                </div>
                                <div class="input-group input-group-static mb-4">
                                    <label for="start_datetime" class="control-label">Schedule</label>
                                    <input type="date" class="form-control form-control-sm rounded-0" name="schedule_date" id="schedule_date" disabled required>
                                </div>
                               <div class="input-group input-group-static mb-4">
                                    <label for="end_datetime" class="control-label">Reschedule Date</label>
                                    <input type="date" class="form-control form-control-sm rounded-0" name="resched"  required>
									<input type= "hidden" name="id" id="id" ></input>	
									<input type= "hidden" name="title" id="title" ></input>
										<input type= "hidden" name="schedule_date" id="schedule_date" ></input>
                                </div>
					
					
                    </div>
                </div>
                <div class="modal-footer rounded-0">
                    <div class="text-end">
                        <button type="submit" name="update_sched" class="btn btn-primary btn-sm rounded-0"  >Update</button>
                        <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
					</form>
            </div>
        </div>
    </div>
	<!--  Modal for Adding Service Call-->
<div class="col-md-4">
    <div class="modal fade" id="addServiceCall" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="responsive card-header pb-0 text-left">

                <center> <h6 class="">Add Schedule for Service Call</h6> </center>

            
              </div>
              <div class="card-body">
                <form role="form text-left" action="../inc/save_service_call.php" method="post" autocomplete="off"> 
				 <!-- <input type = "text" name="contract_id" value= " <?php echo $contract_id ?> "hidden> -->
			<div class="input-group input-group-static mb-4">
				<label class="ms-0">Client</label>
			<select class="form-control" name="client_id" id="depart"required>
				<option selected> Select </option>
		    <?php
			
                                        $sql = "SELECT * from clients;";
                                        $result4 = $conn->query($sql);
                                        while ($row = $result4 -> fetch_assoc()){
                                    ?>
                                    <option value = "<?php echo $row['client_id']?>"><?php echo $row['client_name']?></option>
                                    <?php
                                         
										 }
                                    ?>
				</select>
				</div>
				  <label for="profile">
						<input type="checkbox" id="profile" 
						 
						>
						Guest Client? Insert Client Name / Address
						</label>
				 <div class="input-group input-group-static mb-4">
				 	<input type="text" id="other" name="client_name" class="form-control" placeholder = "Client Name / Client Address" autocomplete="off" disabled required >
				<label class="ms-0">Machine Type</label>
			<select class="form-control" name="machine_Type">
			<option selected> Select </option>
		    <?php
			
                                        $sql = "SELECT * FROM machine_type";
                                        $result4 = $conn->query($sql);
                                        while ($row = $result4 -> fetch_assoc()){
                                    ?>
                                    <option value = "<?php echo $row['machine_id']?>"><?php echo $row['machine_name']?></option>
                                    <?php
                                         }
                                    ?>
				</select>
				</div>
				<div class="input-group input-group-static my-3">
			<label >Brand</label>
                <input  name="brand" class="form-control" required>
        </div>
		<div class="input-group input-group-static my-3">
			<label >Model</label>
                <input  name="model" class="form-control" required>
        </div>
				  <div class="input-group input-group-static mb-4">
			<label>Service Call Date</label>
		<input name="service_call"  class="form-control" required >
		</div>
		 <div class="input-group input-group-static mb-4">
			<label>Reported Problem</label>
		<input name="problem"  class="form-control" maxlength="80"required >
		</div>
		 
			   
                
                
                  <div class="text-center">
                    <button type="submit" name="add_sched" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Add</button>
                  </div>
                </form>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
<!--  Modal for View PMS Done-->
<div class="col-md-4">
    <div class="modal fade" id="viewPms<?php echo $fetch['pms_id']?>" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="responsive card-header pb-0 text-center">

                <center> <p class="align-items-center">Details for <?php echo $fetch['client_name']." at<br>". $fetch['service_date'] ?> </p> </center>

              </div>
              <div class="card-body">
                <form  method= "POST" action = "../inc/addClientMachine.php" autocomplete="off"> 
				 <input type = "text" name="pms_id" value= " <?php echo $fetch['pms_id']; ?> "hidden> 
			 <div class="input-group input-group-static mb-4">
			<label>Service Problem</label>
		<textarea name="service_problem" type="textarea" class="form-control"><?php echo $fetch['service_problem']?> </textarea>
		</div>
		 <div class="input-group input-group-static mb-4">
			<label>Service Diagnosis</label>
		<textarea name="service_diagnosis" type="textarea"  class="form-control"><?php echo $fetch['service_diagnosis']?> </textarea>
		</div>
		 <div class="input-group input-group-static mb-4">
			<label>Service Done</label>
		<textarea name="service_done" type="textarea" class="form-control"><?php echo $fetch['service_done']?></textarea>
		</div>
		 <div class="input-group input-group-static mb-4">
			<label>Remarks</label>
		<textarea name="service_remarks" type="textarea" class="form-control"> <?php echo $fetch['remarks']?> </textarea>
		</div>
		 <div class="input-group input-group-static mb-4">
			<label>Service By</label>
		<textarea name="service_by" type="textarea" class="form-control"><?php echo $fetch['service_by']?> </textarea>
		</div>
		 
			   
                
                
                  <div class="text-center">
                    <button name="edit_pms" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Edit</button>
                  </div>
                </form>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!--  Modal for Generating Report-->
<div class="modal fade" id="generateReport" tabindex="-1" role="dialog" aria-labelledby="generateReport" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role=document>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Report</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">X</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="input-group input-group-static">
                  
                         <label for="" class="ms-0">Reports</label>
                   
                    <select name="doc_name" onchange="ChangeDoc(this)" class="form-control" required>
                        <option value="" selected>Reports</option>
						 <option value="Memorandum of Agreement"hidden>Memorandum of Agreement</option>
                        <option value="Memorandum of Agreement"hidden>Memorandum of Agreement</option>
                        <option value="Minutes of the Meeting"hidden>Minutes of the Meeting</option>
                        <option value="Incoming Communication"hidden>Incoming Communication</option>
                        <option value="Outgoing Communication"hidden>Outgoing Communication</option>
						   <option value="Outgoing Communication"hidden>Outgoing Communication</option>
                        <option value="Resolved PMS">PMS</option>
                        <option value="Service Call">Service Call</option>
                        <option value="Contract Status">PMS Contract Status</option>
                        <option value="Extension Coordinator Uploaded">Service Done </option>
                    </select>
                </div>
                <form action="../inc/report.php" method="post" style="display:none;" target="_blank" autocomplete="off">
                    <div class="mt-2">
                        <input type="hidden" name="doc_name" value="PMS">
					 <div class="input-group input-group-outline mb-1">
						<label class="form-label">Report Name</label>
						<input type="text" class="form-control" name="report_name" required>
						</div>
						<!--
						 <div class="input-group input-group-outline mb-1">                
                       
                    <select name="category" class="form-control" required>
					
                        <option value="null" selected>PMS And Service Call</option>
                        <option value="pms">PMS Only</option>
                        <option value="service">Service Call Only</option>
                    </select>
                </div>
				<-->
				<div class="input-group input-group-outline mb-1">                
                     <select name="category" class="form-control" required>
                                <option selected value="Attended">Attended</option>                   
                               <option  value="Unattended">Unattended</option>            
                                
                            </select>
                </div>
			
						 <div class="input-group input-group-outline mb-1">
						<label class="form-label">PMS Schedule Date</label>
						<input name="datefilter" class="form-control" required>
						</div>
							<div class="input-group input-group-outline mb-1">                
                     <select name="client_id" class="form-control" required>
                                <option selected value="null">Client: (Optional)</option>
                                <?php
                                    $sql = "SELECT DISTINCT client_id, client_name FROM clients";
                                    $result = $conn->query($sql);
                                    while ($row = $result -> fetch_assoc()){
                                ?>
                                <option value = "<?php echo $row['client_id']?>"><?php echo $row['client_name']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                </div>
						<div class="input-group input-group-outline mb-1">                
                     <select name="service_by" class="form-control" required>
                                <option selected value="null">Serviced by: (Optional)</option>
                                <?php
                                    $sql = "SELECT DISTINCT service_by FROM pms";
                                    $result = $conn->query($sql);
                                    while ($row = $result -> fetch_assoc()){
                                ?>
                                <option value = "<?php echo $row['service_by']?>"><?php echo $row['service_by']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                </div>
                        
                        <div class="form-group input-group mb-3">
                            <div class="type-choose">
                                <input class="choosen" name="doc_type" type="hidden" value="res_pms">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-center">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" name="create_report" value="submit"><i class="fa fa-file"></i> Generate</button>
                    </div>
                </form>
                 <form action="../inc/report.php" method="post" style="display:none;" target="_blank" autocomplete="off">
                    <div class="mt-2">
                        <input type="hidden" name="doc_name" value="Service Call">
                 
					 <div class="input-group input-group-outline mb-1">
						<label class="form-label">Report Name</label>
						<input type="text" class="form-control" name="report_name" required>
						</div>
					
					<div class="input-group input-group-outline mb-1">                
                     <select name="category" class="form-control" required>
                                <option selected value="Resolved">Resolved</option>                   
                               <option  value="Unresolved">Unresolved</option>            
                                
                            </select>
                </div>
			
						 <div class="input-group input-group-outline mb-1">
						<label class="form-label">Service Date</label>
						<input name="datefilter" class="form-control" required>
						</div>
							<div class="input-group input-group-outline mb-1">                
                     <select name="client_id" class="form-control" required>
                                <option selected value="null">Client (Optional)</option>
                                <?php
                                    $sql = "SELECT DISTINCT client_id, client_name FROM clients";
                                    $result = $conn->query($sql);
                                    while ($row = $result -> fetch_assoc()){
                                ?>
                                <option value = "<?php echo $row['client_id']?>"><?php echo $row['client_name']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                </div>
						<div class="input-group input-group-outline mb-1">                
                     <select name="service_by" class="form-control" required>
                                <option selected value="null">Serviced by: (Optional)</option>
                                <?php
                                    $sql = "SELECT DISTINCT service_by FROM pms";
                                    $result = $conn->query($sql);
                                    while ($row = $result -> fetch_assoc()){
                                ?>
                                <option value = "<?php echo $row['service_by']?>"><?php echo $row['service_by']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                </div>
                        
                        <div class="form-group input-group mb-3">
                            <div class="type-choose">
                                <input class="choosen" name="doc_type" type="hidden" value="svc">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-center">
                        <button  class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" name="create_report" value="submit"><i class="fa fa-file"></i> Generate</button>
                    </div>
                </form>
				    <form action="../inc/report.php" method="post" style="display:none;" target="_blank" autocomplete="off">
					
                    <div class="mt-2">
                        <input type="hidden" name="doc_name" value="Contract Status">
                 
					 <div class="input-group input-group-outline mb-1">
						<label class="form-label">Report Name</label>
						<input type="text" class="form-control" name="report_name" required>
						</div>
				
			
						 <div class="input-group input-group-outline mb-1">
						<label class="form-label"> Coverage Date</label>
						<input name="datefilter" class="form-control" required>
						</div>
							<div class="input-group input-group-outline mb-1">                
                     <select name="category" class="form-control" required>
                                <option selected value="Active">Active</option>
								 <option  value="Expired">Expired</option>
                               
                            </select>
                </div>
					
                        <div class="form-group input-group mb-3">
                            <div class="type-choose">
                                <input class="choosen" name="doc_type" type="hidden" value="contract_status">
								<input class="choosen" name="client_id" type="hidden" value="null">
									<input class="choosen" name="service_by" type="hidden" value="null">
								
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-center">
                        <button  class="btn btn-secondary" data-bs-dismiss="modal"> Cancel</button>
                        <button type="submit" class="btn btn-primary" name="create_report" value="submit"><i class="fa fa-file"></i> Generate</button>
                    </div>
                </form>
             <form action="../inc/report.php" method="post" style="display:none;" target="_blank" autocomplete="off">
                    <div class="mt-2">
                        <input type="hidden" name="doc_name" value="Service Done">
                 
					 <div class="input-group input-group-outline mb-1">
						<label class="form-label">Report Name</label>
						<input type="text" class="form-control" name="report_name" required>
						</div>
					
						 <div class="input-group input-group-outline mb-1">
						<label class="form-label">Service Date</label>
						<input name="datefilter" class="form-control" required>
						</div>
							<div class="input-group input-group-outline mb-1">                
                     <select name="client_id" class="form-control" required>
                                <option selected value="null">Client (Optional)</option>
                                <?php
                                    $sql = "SELECT DISTINCT client_id, client_name FROM clients";
                                    $result = $conn->query($sql);
                                    while ($row = $result -> fetch_assoc()){
                                ?>
                                <option value = "<?php echo $row['client_id']?>"><?php echo $row['client_name']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                </div>
						<div class="input-group input-group-outline mb-1">                
                     <select name="service_by" class="form-control" required>
                                <option selected value="null">Serviced by: (Optional)</option>
                                <?php
                                    $sql = "SELECT DISTINCT service_by FROM pms";
                                    $result = $conn->query($sql);
                                    while ($row = $result -> fetch_assoc()){
                                ?>
                                <option value = "<?php echo $row['service_by']?>"><?php echo $row['service_by']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                </div>
                        
                        <div class="form-group input-group mb-3">
                            <div class="type-choose">
                                <input class="choosen" name="doc_type" type="hidden" value="service_done">
								       <input class="choosen" name="category" type="hidden" value="">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-center">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" name="create_report" value="submit"><i class="fa fa-file"></i> Generate</button>
                    </div>
                </form>
				    
			 </div>
        </div>
    </div>
</div>
