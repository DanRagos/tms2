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
                    <input type="email" name= "emailAddress" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
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
              <div class="card-footer text-center pt-0 px-lg-2 px-1">
                <p class="mb-4 text-sm mx-auto">
                  Don't have an account?
                  <a href="javascript:;" class="text-info text-gradient font-weight-bold">Sign up</a>
                </p>
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
			<select class="form-control" name="machineType">
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
              <div class="card-footer text-center pt-0 px-lg-2 px-1">
                <p class="mb-4 text-sm mx-auto">
                  Don't have an account?
                  <a href="javascript:;" class="text-info text-gradient font-weight-bold">Sign up</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--  Modal for Event Details-->
<div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
        <div class="modal-dialog modal-dialog-centered">
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
						
                        </dl>
                    </div>
                </div>
                <div class="modal-footer rounded-0">
                    <div class="text-end">
                        <button type="button" class="btn btn-primary btn-sm rounded-0" id="edit" data-id="">Update</button>
                        <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" data-id="">Delete</button>
                        <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
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
			<select class="form-control" name="client_id" required>
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
				 <div class="input-group input-group-static mb-4">
				<label class="ms-0">Machine</label>
			<select class="form-control" name="machine_Type">
			<option selected> Select </option>
		    <?php
			
                                        $sql = "SELECT * FROM machine";
                                        $result4 = $conn->query($sql);
                                        while ($row = $result4 -> fetch_assoc()){
                                    ?>
                                    <option value = "<?php echo $row['machine_id']?>"><?php echo $row['machine_model']?></option>
                                    <?php
                                         }
                                    ?>
				</select>
				</div>
				  <div class="input-group input-group-static mb-4">
			<label>Service Call Date</label>
		<input name="service_call"  class="form-control" required >
		</div>
		 
			   
                
                
                  <div class="text-center">
                    <button type="submit" name="add_sched" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Edit</button>
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
                <form  autocomplete="off"> 
				 <!-- <input type = "text" name="contract_id" value= " <?php echo $contract_id ?> "hidden> -->
			 <div class="input-group input-group-static mb-4">
			<label>Service Problem</label>
		<input name="service_done" type="textarea" value="<?php echo $fetch['service_problem']?>" class="form-control">
		</div>
		 <div class="input-group input-group-static mb-4">
			<label>Service Diagnosis</label>
		<input name="service_done" type="textarea" value="<?php echo $fetch['service_diagnosis']?>" class="form-control">
		</div>
		 <div class="input-group input-group-static mb-4">
			<label>Service Done</label>
		<input name="service_done" type="textarea" value="<?php echo $fetch['service_done']?>" class="form-control">
		</div>
		 <div class="input-group input-group-static mb-4">
			<label>Remarks</label>
		<input name="service_done" type="textarea" value="<?php echo $fetch['remarks']?>" class="form-control">
		</div>
		 <div class="input-group input-group-static mb-4">
			<label>Service By</label>
		<input name="service_done" type="textarea" value="<?php echo $fetch['service_by']?>" class="form-control">
		</div>
		 
			   
                
                
                  <div class="text-center">
                    <button href="#" name="add_sched" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Edit</button>
                  </div>
                </form>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!--  Modal for Generating Repport-->
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
                        <option value="Minutes of the Meeting"hidden>Minutes of the Meeting</option>
                        <option value="Incoming Communication"hidden>Incoming Communication</option>
                        <option value="Outgoing Communication"hidden>Outgoing Communication</option>
                        <option value="Resolved PMS/Service Call">Conducted PMS</option>
                        <option value="Default">Conducted Service Call</option>
                        <option value="Extension Activity">Extension Activity</option>
                        <option value="Extension Coordinator Uploaded">Extension Coordinator Uploaded</option>
                    </select>
                </div>
                <form action="../inc/report.php" method="post" style="display:none;" target="_blank" autocomplete="off">
                    <div class="mt-2">
                        <input type="hidden" name="doc_name" value="Proposal">
                        <input type="hidden" name="parties_involve" value="blank">
                        <input type="hidden" name="participants" value="blank">
                        <input type="hidden" name="min_location" value="blank">
                        <input type="hidden" name="agency" value="blank">
                        <input type="hidden" name="phase" value="blank">
                        <input type="hidden" name="extension_act" value="blank">
					 <div class="input-group input-group-outline mb-1">
						<label class="form-label">Report Name</label>
						<input type="text" class="form-control">
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
						<label class="form-label">Date</label>
						<input name="datefilter" class="form-control">
						</div>
							<div class="input-group input-group-outline mb-1">                
                     <select name="client" class="form-control" required>
                                <option selected value="null">Client (Optional)</option>
                                <?php
                                    $sql = "SELECT DISTINCT client_name FROM clients";
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
                                <input class="choosen" name="table_name" type="hidden" value="res_pms">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-center">
                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" name="create_report" value="submit"><i class="fa fa-file"></i> Generate</button>
                    </div>
                </form>
                <form action="../inc/report.php" method="post" style="display:none;" target="_blank">
                    <div class="p-4">
                        <input type="hidden" name="doc_name" value="Other">
                        <input type="hidden" name="parties_involve" value="blank">
                        <input type="hidden" name="participants" value="blank">
                        <input type="hidden" name="min_location" value="blank">
                        <input type="hidden" name="agency" value="blank">
                        <input type="hidden" name="phase" value="blank">
                        <input type="hidden" name="agenda" value="blank">
                        <input type="hidden" name="extension_act" value="blank">
						<div class="form-group input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Report Name:</span>
                            </div>
                            <input autocomplete="off" type="text" name="report_name"  class="form-control " required>   
                        </div>
                        <div class="form-group input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Date From:</span>
                            </div>
                            <input autocomplete="off" type="text" name="date_from" id="picker3" class="form-control picker3" required>
                        </div>
                        <div class="form-group input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Date To:</span>
                            </div>
                            <input autocomplete="off" type="text" name="date_to" id="picker4" class="form-control picker4" required>
                        </div>
                        <div class="form-group input-group mb-3">
                            <div class="type-choose">
                                <input class="choosen" name="doc_type" type="hidden" value="other">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-center">
                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" name="create_report" value="submit"><i class="fa fa-file"></i> Generate</button>
                    </div>
                </form>
				<form action="../inc/report.php" method="post" style="display:none;" target="_blank">
                    <div class="p-4">
                        <input type="hidden" name="doc_name" value="Extension Activity">
                        <input type="hidden" name="parties_involve" value="blank">
                        <input type="hidden" name="participants" value="blank">
                        <input type="hidden" name="min_location" value="blank">
                        <input type="hidden" name="agency" value="blank">
                        <input type="hidden" name="phase" value="blank">
                        <input type="hidden" name="agenda" value="blank">
						<div class="form-group input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Report Name:</span>
                            </div>
                            <input autocomplete="off" type="text" name="report_name"  class="form-control " required>   
                        </div>
						<div class="form-group input-group mb-3">
						   <div class="input-group-prepend">
                                <span class="input-group-text"> Extension Activity:</span>
					        </div>
                          
				        </div>
                        <div class="form-group input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Date From:</span>
                            </div>
                            <input autocomplete="off" type="text" name="date_from" id="picker3" class="form-control picker3" required>
                        </div>
                        <div class="form-group input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Date To:</span>
                            </div>
                            <input autocomplete="off" type="text" name="date_to" id="picker4" class="form-control picker4" required>
                        </div>
                        <div class="form-group input-group mb-3">
                            <div class="type-choose">
                                <input class="choosen" name="doc_type" type="hidden" value="extension">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-center">
                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" name="create_report" value="submit"><i class="fa fa-file"></i> Generate</button>
                    </div>
                </form>
				<form action="../inc/report_user.php" method="post" style="display:none;" target="_blank">
                    <div class="report1">
                        <input type="hidden" name="doc_name" value="Extension Activity">
						<div class="form-group input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Report Name:</span>
                            </div>
                            <input autocomplete="off" type="text" name="report_name"  class="form-control " required>   
                        </div>
						<div class="form-group input-group mb-3">
						    <div class="input-group-prepend">
                                <span class="input-group-text">User: </span>
					        </div>
                         
				        </div>
						<!--<div class="form-group input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> Extension Activity:</span>
					        </div>
                            <select name="extension_act" class="form-control" required>
                                <option selected value="null">None</option>
                                //<?php
                                //    $sql = "SELECT * FROM extension_activity";
                                //    $result = $conn->query($sql);
                                //    while ($row = $result -> fetch_assoc()){
                                //?>		
					           <option value = "<?php //echo $row['id']?>"><?php //echo $row['extension_act']?></option>
                                <?php
                                    //}
                                ?>
                            </select>
				        </div>-->
                        <div class="form-group input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Date From:</span>
                            </div>
                            <input autocomplete="off" type="text" name="date_from" id="picker3" class="form-control picker3" required>
                        </div>
                        <div class="form-group input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Date To:</span>
                            </div>
                            <input autocomplete="off" type="text" name="date_to" id="picker4" class="form-control picker4" required>
                        </div>
                        <div class="form-group input-group mb-3">
                            <div class="type-choose">
                                <input class="choosen" name="doc_type" type="hidden" value="user">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-center">
                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" name="create_report" value="submit"><i class="fa fa-file"></i> Generate</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
