<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $fetch['file_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                  <div class="modal-header">
       			<h4 class="modal-title" id="myModalLabel"><?php echo $fetch ['file_name'] ;?></h4>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
            		<span aria-hidden="true">&times;</span>
        		</button>
            </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"select * from file where file_id='".$fetch['file_id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="../inc/edit_download.php?file_id=<?php echo $erow['file_id']; ?>">
					<div class="input-group mb-3">
        	    		    <div class="input-group-prepend">
        	    		        <span class="input-group-text">Uploaded by:</span>
        	    		    </div>
        	    		    <?php
								$doc= $erow['user_id'];
								$row1 = $conn->query("SELECT * FROM `users` where mem_id='$doc'") or die(mysqli_error());
					    		    while($fetch1 = $row1->fetch_array()){ 
							?>              
								<input type="text" name="firstname" class="form-control" value="<?php echo $fetch1['username']; ?>" disabled> 
							<?php 
								} 
							?>
        	    		</div>
					<div class="input-group mb-3">
        	    		    <div class="input-group-prepend">
        	    		        <span class="input-group-text">Date Uploaded:</span>
        	    		    </div>
        	    		    <input type="hidden" name="name_file" value="<?php echo $fetch['file_name']; ?>" >
							<input type="hidden" name="file_id" value="<?php echo $fetch['file_id']; ?>" >
							<input type="text" name="lastname" class="form-control" value="<?php echo $erow['date_uploaded']; ?>"disabled>
        	    		</div>
					<div class="input-group mb-3">
        	    		    <div class="input-group-prepend">
        	    		        <span class="input-group-text">Location:</span>
        	    		    </div>
        	    		    <input type="text" name="address" class="form-control" value="<?php echo $erow['location']; ?>"disabled>
        	    		</div>
			<?php if($erow['doc_type'] == "1") { ?>
					<div class="input-group mb-3">
        	    		    <div class="input-group-prepend">
        	    		        <span class="input-group-text">Effective Date:</span>
        	    		    </div>
        	    		    <input type="text" class="form-control" name="eff_date" onfocus="(this.type='date')" onblur="(this.type='text')" value="<?php echo $fetch['effective_date']; ?>" >
							<input type="hidden" name="doc_type" value ="1" > 
						</div>
						<div class="input-group mb-3">
        	    		    <div class="input-group-prepend">
        	    		        <span class="input-group-text">Parties Involve:</span>
        	    		    </div>
        	    		    <input type="text" id="other" placeholder="Name of the Agency" name="part_agency" class="form-control" autocomplete="off" value="<?php echo $fetch['parties_involve']; ?>">
        	    		</div>
						<div class="form-group mb-3">
							<label for="textarealabel">Description: </label>
        	    			<textarea name="moa_description" id="textarealabel" rows="5" class="form-control"><?php echo $fetch['description']; ?></textarea>
        	    		</div>
					<?php } ?>
						<?php if($erow['doc_type'] == "2") { ?>
				<div class="input-group mb-3">
        	        		<div class="input-group-prepend">
        	        		    <span class="input-group-text">Minute Date:</span>
        	        		</div>
        	        		<input type="hidden" name="doc_type" value ="2" > 
						 	<input type="text" class="form-control" name="date_meeting" onfocus="(this.type='date')" onblur="(this.type='text')" value="<?php echo $fetch['date']; ?>" >
        	    		</div>
						<div class="input-group mb-3">
        	        		<div class="input-group-prepend">
        	        		    <span class="input-group-text">Location:</span>
        	        		</div>
							<input type="text" name="mim_location" class="form-control" value="<?php echo $fetch['location']; ?>">
						</div>
						<div class="input-group mb-3">
        	        		<div class="input-group-prepend">
        	        		    <span class="input-group-text">Participants:</span>
        	        		</div>
							<input type="text" class="form-control" name="participants"  value="<?php echo $fetch['participants']; ?>" >
						</div>
						<div class="form-group mb-3">
							<label for="textarealabel">Description: </label>
        	    			<textarea id="textarealabel" rows="5" class="form-control" name="mim_description" ><?php echo $fetch['description']; ?></textarea>
        	    		</div>
						<?php }?>
						
						<?php if($erow['doc_type'] == "3") { ?>
						<div class="input-group mb-3">
        	        		<div class="input-group-prepend">
        	        		    <span class="input-group-text">Receiving Agency:</span>
        	        		</div>
							<input type="hidden" name="doc_type" value ="3" > 
							<input type="text" name="icm_receive_agen" class="form-control" value="<?php echo $fetch['agency']; ?>">
						</div>
						<div class="input-group mb-3">
        	        		<div class="input-group-prepend">
        	        		    <span class="input-group-text">Date:</span>
        	        		</div>
							<input type="text" class="form-control" name="icm_inc_date" onfocus="(this.type='date')" onblur="(this.type='text')" value="<?php echo $fetch['date']; ?>" >
						</div>
						<div class="input-group mb-3">
        	        		<div class="input-group-prepend">
        	        		    <span class="input-group-text">Purpose:</span>
        	        		</div>
							<input type="text" name="icm_purpose" class="form-control" value="<?php echo $fetch['purpose']; ?>">
						</div>
						<div class="input-group mb-3">
        	        		<div class="input-group-prepend">
        	        		    <span class="input-group-text">Phase:</span>
        	        		</div>
							<select name="icm_phase" id="" class="form-control" required>
                            	<option value="<?php echo $fetch['phase']?>" selected><?php echo $fetch['phase']?></option>
                            	<option value="Planning">Planning</option>
                            	<option value="Replanning">Re-Planning</option>
                            	<option value="Implementation">Implementation</option>
                            	<option value="Evaluation">Evaluation</option>
                            </select>
						</div>
						<?php }?>
						<?php if($erow['doc_type'] == "4") { ?>
						<div class="input-group mb-3">
        	        		<div class="input-group-prepend">
        	        		    <span class="input-group-text">Receiving Agency:</span>
        	        		</div>
							<input type="hidden" name="doc_type" value ="4" > 
							<input type="text" name="ocm_receive_agen" class="form-control" value="<?php echo $fetch['agency']; ?>">
						</div>
						<div class="input-group mb-3">
        	        		<div class="input-group-prepend">
        	        		    <span class="input-group-text">Date:</span>
        	        		</div>
							<input type="text" class="form-control" name="ocm_date" onfocus="(this.type='date')" onblur="(this.type='text')" value="<?php echo $fetch['date']; ?>" >
						</div>
						<div class="input-group mb-3">
        	        		<div class="input-group-prepend">
        	        		    <span class="input-group-text">Purpose:</span>
        	        		</div>
							<input type="text" name="ocm_purpose" class="form-control" value="<?php echo $fetch['purpose']; ?>">
						</div>
						<div class="input-group mb-3">
        	        		<div class="input-group-prepend">
        	        		    <span class="input-group-text">Phase:</span>
        	        		</div>
							<select name="ocm_phase" id="" class="form-control" required>
                                <option value="<?php echo $fetch['phase']?>" selected><?php echo $fetch['phase']?></option>
                                <option value="Planning">Planning</option>
                                <option value="Replanning">Re-Planning</option>
                                <option value="Implementation">Implementation</option>
                                <option value="Evaluation">Evaluation</option>
                            </select>
						</div>
						<?php }?>

						<?php if($erow['doc_type'] == "5") { ?>
						<div class="input-group mb-3">
        	    			<div class="input-group-prepend">
        	    			    <span class="input-group-text">Agenda:</span>
        	    			</div>
							<input type="hidden" name="doc_type" value ="5" > 
							<input type="text" name="purpose" class="form-control" value="<?php echo $fetch['agenda']; ?>">
						</div>
						<?php }?>
	<?php if($erow['doc_type'] == "6") { ?>
						<div class="input-group mb-3">
        	    			<div class="input-group-prepend">
        	    			    <span class="input-group-text">Alias Name:</span>
        	    			</div>
							<input type="hidden" name="doc_type" value ="6" > 
						<input type="text" name="name" class="form-control" value="<?php echo $fetch['name']; ?>">
						</div>
						<div class="form-group mb-3">
							<label for="textarealabel">Description: </label>
        	    			<textarea id="textarealabel" rows="5" class="form-control" name="description"><?php echo $fetch['description']; ?></textarea>
        	    		</div>
					
						<?php }?>

						
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Close</button>
<?php if($_SESSION['id'] == $erow['user_id']) {                   ?>
				   <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
<?php }?>
                </div>
				</form>
            </div>
        </div>
    </div>
	<!-- Delete -->
    <div class="modal fade" id="del<?php echo $fetch['file_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<p> Delete file<?php echo $fetch['file_name'] ;?> ?</p>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="../inc/remove_file.php?file_id=<?php echo $fetch['file_id']?>" class="btn btn-danger mx-1" type="button" id="<?php echo $fetch['file_id']?>"><i class="fa fa-trash"></i> Remove</a></button>
						
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->