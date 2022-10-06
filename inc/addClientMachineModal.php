<div class="col-md-4">
    <div class="modal fade" id="upd1<?php echo  $client_id  ?>" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="responsive card-header pb-0 text-left">

                <center> <h6 class=""><?php echo $fetch['client_name']; ?></h6> </center>

            
              </div>
              <div class="card-body">
                <form role="form text-left" action="../inc/addClientMachine.php" method="post" autocomplete="off"> 
				 
			<div class="input-group input-group-outline my-3">
			<select class="form-control" id="machine_type" name="machineType">			
           <option selected value="" >Enter Machine Type </option>
		    <?php
                                        $sql = "SELECT * FROM machine";
                                        $result = $conn->query($sql);
                                        while ($row = $result -> fetch_assoc()){
                                    ?>
                                    <option value = "<?php echo $row['machine_id']?>"><?php echo $row['machine_model']?></option>
									<?php
                                         }
                                    ?>
                                    
			</select>
			<input type="text" name="clientId" value = "<?php echo $fetch['client_id']?>" class="form-control" hidden>
		
			</div>
			<!--
			<div class="input-group input-group-outline my-3">
			<select class="form-control" id="state" name ="machineBrand">
				<option selected disabled>Select Brand / Model</option>
			</select>
			</div>      
-->			
				<div class="input-group input-group-outline my-3">
                    <input  name="datefilter" class="form-control" autocomplete=off>
				<label class="form-label">Turn Over / Coverage Date</label>
					
                  </div>
				  
				 <div class="input-group input-group-outline my-3">
				  <select class="form-control" name="frequency">
				<option selected value="">Frequency</option>
                <option value = "Annually">Annually</option>
				<option value = "Semi-Annually">Semi-Annually</option>
				 <option value = "Quarterly">Quarterly</option>									                                 
				</select>
				</div>
					 <div class="input-group input-group-outline my-3">
				  <select class="form-control" name="status">
				<option selected value="">Status</option>
                <option value = "Under Pms Contract">Under PMS Warranty</option>
				<option value = "Installation Warranty">Installation Warranty</option>							                                 
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
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- for edit contract id in pms.php -->
<div class="col-md-4">
  <div class="modal fade" id="con<?php echo $contract_id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
        
          <div class="modal-body">
		  <div class="card card-plain">
              <div class="responsive card-header pb-0 text-left">

                <center> <h6 class=""><?php echo $fetch['client_name']; ?></h6> </center>

            
              </div>
			   <?php 
			  $query1 = mysqli_query($conn, "  SELECT pms.pms_id , pms.service_date, pms.service_problem, pms.service_diagnosis, pms.service_done,
			  pms.remarks, pms.service_by, schedule.schedule_id from (pms inner join schedule 
			  on pms.schedule_id = schedule.schedule_id) where schedule.contract_id = '$contract_id' order by pms.service_date DESC");
							while($fetch1 = mysqli_fetch_array($query1)){	
			  ?>
            <form>
			<div class="border-0 bg-gray-100 border-radius-lg ">
              <h6 class="mb-3 t-2 text-sm"> Service Schedule: <?php echo date("F d, Y", strtotime($fetch1['service_date']))?></h6>
			   <span class="mb-2 text-xs">Service By: <span class="text-dark font-weight-bold ms-sm-3"><?php echo $fetch1['service_by']?></span></span>
              <div class="input-group input-group-dynamic ">
			   <span class="mb-2 text-xs">Service Problem:</span>
                  <textarea class="form-control text-xs " disabled><?php echo $fetch1['service_problem']?> </textarea>
                </div>
				 <div class="input-group input-group-dynamic ">
			   <span class="mb-2 text-xs">Service Diagnosis:</span>
                  <textarea class="form-control  text-xs " value="<?php echo $contract_id ?>" disabled><?php echo $fetch1['service_diagnosis']?> </textarea>
                </div>
				 <div class="input-group input-group-dynamic ">
			   <span class="mb-2 text-xs">Service Done:</span>
                  <textarea class="form-control t-3 text-xs " disabled><?php echo $fetch1['service_done']?> </textarea>
               </div>
				 <div class="input-group input-group-dynamic ">
			   <span class=" text-xs">Remarks:</span>
                  <textarea class="form-control text-xs  " disabled><?php echo $fetch1['remarks']?> </textarea>
                </div>
				 
				</div>
            </form>
							<?php } ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn bg-gradient-primary">Send message</button>
          </div>
        </div>
      </div>
    </div>
  </div>


<div class="col-md-4">
    <div class="modal fade" id="con1<?php echo $contract_id?>" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="responsive card-header pb-0 text-left">

                <center> <h6 class=""><?php echo $fetch['client_name']; ?></h6> </center>

            
              </div>
              <div class="card-body">
                <div class="col-md-12 mt-1">
          <div class="card">
          
            <div class="card-body pt-4 p-3">
              <ul class="list-group">
			  <?php 
			  $query1 = mysqli_query($conn, "  SELECT pms.pms_id , pms.service_date, pms.service_problem, pms.service_diagnosis, pms.service_done,
			  pms.remarks, pms.service_by, schedule.schedule_id from (pms inner join schedule 
			  on pms.schedule_id = schedule.schedule_id) where schedule.contract_id = '$contract_id' order by pms.service_date DESC");
							while($fetch1 = mysqli_fetch_array($query1)){	
			  ?>
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                  <div class="d-flex flex-column">
				  <p>
                    <h6 class="mb-3 text-sm"> <?php echo date("F d, Y", strtotime($fetch1['service_date']))?></h6>
                    <span class="mb-2 text-xs">Service By: <span class="text-dark font-weight-bold ms-sm-3"><?php echo $fetch1['service_by']?></span></span>
                    <span class="mb-2 text-xs">Service Problem: <p class="text-dark ms-sm-1 "><?php echo $fetch1['service_problem']?></p></span>
                    <span class="text-xs">Service Diagnosis: <p class="text-dark ms-sm-1 "><?php echo $fetch1['service_diagnosis']?></p></span>
					<span class="text-xs">Service Done: <p><?php echo $fetch1['service_done']?></p></span>
					<span class="text-xs">Remarks: <p class="text-dark ms-sm-1 "><?php echo $fetch1['remarks']?></p></span>
					</p>
				
                  </div>
						
                  <div class="ms-auto text-end">
                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="material-icons text-sm me-2">delete</i>Delete</a>
                    <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="material-icons text-sm me-2">edit</i>Edit</a>
                  </div>
				  	<?php } ?>
                </li>
             
              </ul>
            </div>
          </div>
        </div>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>