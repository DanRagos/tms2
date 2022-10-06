<div class="col-md-4">
    <div class="modal fade" id="update_modal<?php echo $fetch['client_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="responsive card-header pb-0 text-left">

                <h5 class=""></h5>

                <p class="mb-0">Enter <?php echo $fetch1['client_name'] ?> </p>
              </div>
              <div class="card-body">
                <form  action="../inc/addClientMachine.php" method="post"> 
				<?php include "../inc/test.php" ; ?>
			
		               				 
				<div class="input-group input-group-outline my-3">
                    <input type="text" id="datefilter" name="datefilter" class="form-control">
				<label class="form-label">Turn Over / Coverage Date</label>
					
                  </div>
				 
				  
				 <div 	class="input-group input-group-outline my-3">
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
