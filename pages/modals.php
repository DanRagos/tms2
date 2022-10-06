<div class="col-md-4">
    <div class="modal fade" id="addDetails7" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h5 class=""><?php echo $fetch['client_name']?></h5>
                <p class="mb-0">Enter </p>
              </div>
              <div class="card-body">
                <form role="form text-left" action="../inc/addClientMachine.php" method="post"> 
				 
			<div class="input-group input-group-outline my-3">
			<select class="form-control" id="machine_type" name="machineType">			
           <option selected value="" >Enter Machine Type </option>
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
			<input type="text" name="clientId" value = "<?php echo $fetch['client_id']?>" class="form-control" hidden>
		
			
			</div>
			<div class="input-group input-group-outline my-3">
			<select class="form-control" id="state" name ="machineBrand">
				<option selected disabled>Select Brand / Model</option>
			</select>
			</div>                				 
				<div class="input-group input-group-outline my-3">
				<label class="form-label">Turn Over / Coverage Date</label>
                    <input type="text" id="datefilter" name="datefilter" class="form-control">
					
                  </div>
				  
				 <div class="input-group input-group-outline my-3">
				  <select class="form-control" name="frequency">
				<option selected value="">Frequency</option>
                <option value = "Annualy">Annualy</option>
				<option value = "Semi-Annualy">Semi-Annualy</option>
				 <option value = "Quarterly">Quarterly</option>									                                 
				</select>
				</div>
				
				  
                
                 <!-- <div class="form-check form-switch d-flex align-items-center">
                    <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                    <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
                  </div>
				  !-->
                  <div class="text-center">
                    <button type="submit" name="addClientMachine" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Add</button>
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
                <form role="form text-left" action="../inc/addClient.php" method="post"> 
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
				  <div class="input-group input-group-outline my-3">
                    <label class="form-label"></label>
                    <input type="date" name= "contractDate" class="form-control" placeholder="Contract Date" >
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
                <h5 class=""><?php echo $fetch['contract_date']?></h5>
                <p class="mb-0">Enter Machine credentials</p>
              </div>
              <div class="card-body">
                <form role="form text-left" action="../inc/addMachine.php" method="post"> 
				
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

  <!--  Modal for View Client Details-->
