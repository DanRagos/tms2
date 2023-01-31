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
				<input type="hidden" name="client_name" value = "<?php echo $fetch['client_name'] ?> " >
				 
			<div class="input-group input-group-static my-3">
			<select class="form-control" id="machine_type" name="machineType"required>			
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
			<!--
			<div class="input-group input-group-outline my-3">
			<select class="form-control" id="state" name ="machineBrand">
				<option selected disabled>Select Brand / Model</option>
			</select>
			</div>      
-->			
		<div class="input-group input-group-static my-3">
			<label >Brand</label>
                <input  name="brand" class="form-control" required>
        </div>
		<div class="input-group input-group-static my-3">
			<label >Model</label>
                <input  name="model" class="form-control" required>
        </div>
				<div class="input-group input-group-static my-3">
				<label >Turn Over / Coverage Date</label>
                    <input  name="datefilter" class="form-control" required>
				
					
                  </div>
				 <div class="input-group input-group-static my-3">
				<label>First PMS Schedule Date</label>
					<input type="date" name="firstpms" class="form-control" required>
				</div>
				  
				 <div class="input-group input-group-static my-3">
				  <select class="form-control" name="frequency" required>
				<option selected value="">Frequency</option>
                <option value = "Annually">Annually</option>
				<option value = "Semi-Annually">Semi-Annually</option>
				 <option value = "Quarterly">Quarterly</option>									                                 
				</select>
				</div>
					 <div class="input-group input-group-static my-3">
				  <select class="form-control" name="status" required>
				<option selected value="">Status</option>
                <option value = "Under Pms Contract ">Under PMS Contract</option>
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
<!-- -->
<div class="col-md-4">
    <div class="modal fade" id="edit<?php echo  $client_id  ?>" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="responsive card-header pb-0 text-center">

                <center> <p class="align-items-center"> <?php echo $fetch['client_name']?> </p> </center>

              </div>
              <div class="card-body">
                <form  action = "../inc/addClient.php" method = "POST" autocomplete="off"> 
				 <input type = "text" name="client_id" value= " <?php echo $client_id ?> "hidden> 
			 <div class="input-group input-group-static mb-4">
			<label>Client Name</label>
		<input name="client_name" type="textarea" value="<?php echo $fetch['client_name']?>" class="form-control">
		</div>
		 <div class="input-group input-group-static mb-4">
			<label>Address</label>
		<input name="address" type="textarea" value="<?php echo $fetch['client_address']?>" class="form-control">
		</div>
		 <div class="input-group input-group-static mb-4">
			<label>Contact Person</label>
		<input name="contact_person" type="textarea" value="<?php echo $fetch['contact_person']?>" class="form-control">
		</div>
		 <div class="input-group input-group-static mb-4">
			<label>Email</label>
		<input name="email" type="textarea" value="<?php echo $fetch['contact_email']?>" class="form-control">
		</div>
		
		 
			   
                
                
                  <div class="text-center">
                    <button type="submit" name="edit_client" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Edit Client </button>
                  </div>
                </form>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
<div class="col-md-4">
    <div class="modal fade" id="pmsScheds<?php echo  $fetch['contract_id']  ?>" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="responsive card-header pb-0 text-center">

                <center> <p class="align-items-center"> <?php echo $fetch['client_name']?> </p> </center>

              </div>
              <div class="card-body">
			   <div class="table-responsive p-0">
			   
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
					  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>			
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
					   <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ps">Action</th>
					  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Status</th>
					
                   
                    </tr>
                  </thead>
                  <tbody class="scroll">
				  	<?php 
					$num = 0;
				$contract_id= $fetch['contract_id']; 
				$pmsc = mysqli_query($conn, "Select * from schedule where schedule.contract_id ='$contract_id' ");
							while($fetch2 = mysqli_fetch_array($pmsc)){	
							$date_sched = $fetch2['schedule_date'];
	$date_sched = date('F d, Y', strtotime($date_sched));
	
			?>
                    <tr>
				 <td class="align-middle text-center text-sm">
				       <span class=""><?php echo $num + 1?></span>
</td>				 
             
			<td>
			 	<form method="post" action="../inc/edit_schedule.php">
                        <div class="d-flex px-2 py-1">
					
                         
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><input  type="date" name="schedule_date" value="<?php echo date('Y-m-d', strtotime($date_sched));;?>"> </input></h6>
                         
                          </div>
                        </div>
						<input type="hidden" name="contract_id" value = "<?php echo $fetch2['contract_id'] ?>" />
						<input type = "hidden" name = "schedule_id" value = "<?php echo $fetch2['schedule_id'] ?>" />
						<td>
						 <button class="btn btn-primary btn-sm rounded" name="edit_schedules" type="submit" ><i class="fa fa-save"></i> Edit</button>
						  </form>
						</td>
						
                      </td>
					    <td class="align-middle text-center text-sm">
						<?php if ($fetch2['status'] == '2') {
							$stats = "DONE" ;
							$badge = "badge badge-sm bg-gradient-success";
						}
						 elseif($fetch2['status'] == '1') {
							$stats = "DELAYED" ;
							$badge = "badge badge-sm bg-gradient-warning";
						}
						elseif($fetch2['status'] == '4') {
							$stats = "Lapsed" ;
							$badge = "badge badge-sm bg-black";
						}
						 else {
							$stats = "NOT DONE" ;
							$badge = "badge badge-sm bg-gradient-info";
						}
						?>
                        <span class="<?php echo $badge?>"><?php echo $stats?></span>
						
                      </td>
					
					  </tr>
				 
			
			
							<?php 
							$num++;}?>
		
		 
			      </tbody>
                </table>
				</div>
				</div>
                </div>
                 <div class="card-footer">
                        <div class="text-center">                    
							<button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                        </div>
            </div>
                
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
          
          </div>
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
      <div class="modal fade" id="del<?php echo $fetch['report_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<p> Delete file <?php echo $fetch['report_name'] ;?> ?</p>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="../inc/file_deleted.php?report_id=<?php echo $fetch['report_id']?>" class="btn btn-danger mx-1" type="button" id="<?php echo $fetch['report_id']?>"><i class="fa fa-trash"></i> Remove</a></button>
						
                </div>
				
            </div>
        </div>
    </div>