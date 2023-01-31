<div class="col-md-4">
    <div class="modal fade" id="edit_profile<?php echo $mem_id?>" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h5 class="">Edit your Profile</h5>
              </div>
              <div class="card-body">
                <form role="form text-left" action="../inc/complete_profile.php" method="post" autocomplete="off" enctype="multipart/form-data"> 
              			  <center>  <img id="uploadPreview" src="<?php echo $img?>" class="avatar" > </center>
						  <b>  <label class="form-label">Upload your Profile Picture</label></b>
				  <div class="input-group input-group-outline mb-3">
                   <input class="form-control" type="file" name="imglink" id="imglink" aria-describedby="inputGroupFile" accept=".jpg, .jpeg, .png" onchange="PreviewImage()">
                    </div>
			 <div class="input-group input-group-static mb-4">
			<label>Firstname</label>
		<input name="firstname" type="text" class="form-control" value="<?php echo $fetch['firstname']?> " ></input>
			<input type="hidden" name = "target_file" value = "<?php echo $fetch ['imglink'] ?>">
				  
		</div>
		 <div class="input-group input-group-static mb-4">
			<label>Lastname</label>
		<input name="lastname" type="text"  value= "<?php echo $fetch['lastname']?>"  class="form-control" ></input>
		</div>
		 <div class="input-group input-group-static mb-4">
			<label>Email</label>
		<input name="email" type="text" class="form-control" value="<?php echo $fetch['email']?>"></input>
		</div>
		 <div class="input-group input-group-static mb-4">
			<label>Password</label>
		<input name="password" type="password" class="form-control" value="<?php echo $fetch['password']?>"></input>
		</div>
		 
	
                
                  <div class="text-center">
                    <button name="edit_profile" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Edit</button>
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
    <div class="modal fade" id="edit_user_profile<?php echo $mem_id?>" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h5 class="">Edit  Profile</h5>
              </div>
              <div class="card-body">
                <form role="form text-left" action="../inc/complete_profile.php" method="post" autocomplete="off" enctype="multipart/form-data"> 
              			 
						 
				  <div class="input-group input-group-outline mb-3">
                  <input type="hidden" name = "target_file" value = "<?php echo $fetch ['imglink'] ?>">
				   </div>
			 <div class="input-group input-group-static mb-4">
			<label>Firstname</label>
		<input name="firstname" type="text" class="form-control" value="<?php echo $fetch['firstname']?> " ></input>
		<input name="id" type="hidden" class="form-control" value="<?php echo $fetch['mem_id']?> " ></input>
		</div>
		 <div class="input-group input-group-static mb-4">
			<label>Lastname</label>
		<input name="lastname" type="text"  value= "<?php echo $fetch['lastname']?>"  class="form-control" ></input>
		</div>
		 <div class="input-group input-group-static mb-4">
			<label>Email</label>
		<input name="email" type="text" class="form-control" value="<?php echo $fetch['email']?>"></input>
		</div>
		 <div class="input-group input-group-static mb-4">
			<label>Password</label>
		<input name="password" type="text" class="form-control" value="<?php echo $fetch['password']?>"></input>
		</div>
		 
	
                
                  <div class="text-center">
                    <button name="edit_user" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Edit</button>
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
    <div class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h5 class="">Add User Profile</h5>
              </div>
              <div class="card-body">
                <form role="form text-left" action="../inc/complete_profile.php" method="post" autocomplete="off" enctype="multipart/form-data"> 
              			  <center>  <img id="uploadPreview1" src="../userpics/avatar.png" class="avatar" > </center>
						  <b>  <label class="form-label">Upload your Profile Picture</label></b>
				  <div class="input-group input-group-outline mb-3">
                   <input class="form-control" type="file" name="imglink1" id="imglink1" aria-describedby="inputGroupFile" accept=".jpg, .jpeg, .png" onchange="PreviewImage1()" required>
                    </div>
			 <div class="input-group input-group-static mb-4">
			<label>Firstname</label>
		<input name="firstname" type="text" class="form-control" required ></input>
		</div>
		 <div class="input-group input-group-static mb-4">
			<label>Lastname</label>
		<input name="lastname" type="text"   class="form-control" required></input>
		</div>
		 <div class="input-group input-group-static mb-4">
			<label>Username</label>
		<input name="username" type="text" class="form-control" required></input>
		</div>
		 <div class="input-group input-group-static mb-4">
			<label>Email</label>
		<input name="email" type="text" class="form-control" required></input>
		</div>
		 <div class="input-group input-group-static mb-4">
			<label>Password</label>
		<input name="password" type="password" class="form-control" required> </input>
		</div>
		<div class="input-group input-group-static mb-4">
		<label>User Type</label>
				  <select class="form-control" name="user_type" required>
				<option selected value="Viewer">Viewer</option>
				<option value = "Admin">Admin/Supervisor</option>							                                 
				</select>
				</div>
		 
	
                
                  <div class="text-center">
                    <button name="add_user" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Add</button>
                  </div>
                </form>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>