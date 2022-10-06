<!-- Create Folder -->
<div class="modal fade" id="CreateModal" tabindex="-1" role="dialog" aria-labelledby="CreateLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role=document>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="CreateLabel">Create Folder</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../inc/create_dir.php" method="post">
                <div class="modal-body">
                    <input autocomplete="off" type="text" class="form-control" name="dir" placeholder="Enter folder name.." required>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" name="add"><i class="fa fa-folder-open"></i> Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Logging Out -->
<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Logging out...</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> 
            </div>
            <div class="modal-body">
			<div class="container-fluid">
				<center>
                    <h5 class="lead">Are you sure you want to log out?</h5>
                    <strong><span style="font-size: 15px;">Username: <?php echo $_SESSION['username']; ?></span></strong>
                </center>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a href="../inc/logout.php" class="btn btn-danger"><i class="fa fa-sign-out-alt"></i> Logout</a>
            </div>
        </div>
    </div>
</div>
<!-- Update Password -->
<div class="modal fade" id="ChangePassModal" tabindex="-1" role="dialog" aria-labelledby="CreateLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role=document>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="CreateLabel">Update Password</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../inc/change_pass.php" method="post">
                <div class="modal-body">
                    <div class="form-group input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Username:</span>
                        </div>
                        <input type="text" class="form-control" name="username" placeholder="<?php echo $_SESSION['username']; ?>" disabled>
                  <input type="hidden" name="mem_id" value="<?php echo $_SESSION['id'];?>">
				  </div>	 
                    <hr>
                    <div class="form-group input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">New Password:</span>
                        </div>
                        <input autocomplete="off" type="text" class="form-control" minlength="6" name="new_password" value="" placeholder="New Password" required>
                    </div>	
                    <div class="form-group input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Confirm Password:</span>
                        </div>
                        <input autocomplete="off" type="text" class="form-control"  minlength="6" name="cpassword" value="" placeholder="Confirm Password" required>
                    </div>
                </div>
                <div class="modal-footer text-center">
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success" name="change" value="submit"><i class="fa fa-edit"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Insert Announcement -->
<div class="modal fade" id="InsAnnounceModal" tabindex="-1" role="dialog" aria-labelledby="InsAnnounceLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role=document>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="CreateLabel">Add Announcement</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../inc/announcement_set.php" method="post">
                <div class="modal-body">                        
				    <?php 
    			        require 'dbc.inc.php';
				        $user=$_SESSION['username'];
				        $row = $conn->query("SELECT * FROM `announcement`") or die(mysqli_error());
    			        while($fetch = $row->fetch_assoc()){
                        }
				    ?>
                    <input name="posted_by" type="hidden" value="<?php echo $_SESSION['id'];?> " >
				    <input name="post_id" type="hidden" value="<?php echo $fetch['id'];?> ">
				   <div class="form-group input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Name: </span>
                        </div>
                        <input autocomplete="off" type="text" name="anoun_name" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="textarealabel">Body</label>
                        <textarea name="message" id="textarealabel" rows="5" class="form-control" placeholder="Description..." required></textarea>
                    </div>
                </div>
                <div class="modal-footer text-center">
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" name="annouce_set" value="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Insert Schedules -->
<div class="modal fade" id="ScheduleModal" tabindex="-1" role="dialog" aria-labelledby="InsAnnounceLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role=document>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="CreateLabel">Add Schedules</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../inc/addSchedule.php" method="post">
                <div class="modal-body">                        
                    <div class="form-group mb-3">
                        <label for="title">Name</label>
                        <input autocomplete="off" type="text" name="title" id="" class="form-control" placeholder="Enter event name..." required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="color">Color</label>
                        <select name="color" class="custom-select" id="color" required>
						  <option value="" selected>Choose a color</option>
						  <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
						  <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
						  <option style="color:#18e018;" value="#18e018">&#9724; Green</option>						  
						  <option style="color:#ffe34d;" value="#ffe34d">&#9724; Yellow</option>
						  <option style="color:#ffac47;" value="#ffac47">&#9724; Orange</option>
						  <option style="color:#ff6161;" value="#ff6161">&#9724; Red</option>
						  <option style="color:#EEE;" value="#EEE">&#9724; Gray</option>
						</select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="date_from">Date From</label>
                        <input autocomplete="off" type="text" name="date_from" id="picker1" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="date_to">Date To</label>
                        <input autocomplete="off" type="text" name="date_to" id="picker2" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer text-center">
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" name="add_sched" value="submit"><i class="fa fa-calendar"></i> Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Create Report Modal -->
<div class="modal fade" id="ReportModal" tabindex="-1" role="dialog" aria-labelledby="ReportLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role=document>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="CreateLabel">Create Report</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Reports:</span>
                    </div>
                    <select name="doc_name" onchange="ChangeDoc(this)" class="form-control" required>
                        <option value="" selected>Reports</option>
                        <option value="Memorandum of Agreement">Memorandum of Agreement</option>
                        <option value="Minutes of the Meeting">Minutes of the Meeting</option>
                        <option value="Incoming Communication">Incoming Communication</option>
                        <option value="Outgoing Communication">Outgoing Communication</option>
                        <option value="Proposal">Proposal</option>
                        <option value="Default">Other</option>
                        <option value="Extension Activity">Extension Activity</option>
                        <option value="Extension Coordinator Uploaded">Extension Coordinator Uploaded</option>
                    </select>
                </div>
                <form action="../inc/report.php" method="post" style="display:none;" target="_blank">
                    <div class="report1">
                        <input type="hidden" name="doc_name" value="Memorandum of Agreement">
                        <input type="hidden" name="participants" value="blank">
                        <input type="hidden" name="min_location" value="blank">
                        <input type="hidden" name="agency" value="blank">
                        <input type="hidden" name="phase" value="blank">
                        <input type="hidden" name="extension_act" value="blank">
						<div class="form-group input-group mb-3">
						   <div class="input-group-prepend">
                                <span class="input-group-text"> Parties Involve:</span>
					        </div>
                            <select name="parties_involve" class="form-control" required>
                                <option selected value="null">None</option>
                                <?php
                                    $sql = "SELECT DISTINCT parties_involve FROM memorandum_agreement";
                                    $result = $conn->query($sql);
                                    while ($row = $result -> fetch_assoc()){
                                ?>
                                <option value = "<?php echo $row['parties_involve']?>"><?php echo $row['parties_involve']?></option>
                                <?php
                                    }
                                ?>
                            </select>
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
                                <input class="choosen" name="doc_type" type="hidden" value="memorandum_agreement">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-center">
                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" name="create_report" value="submit"><i class="fa fa-file"></i> Generate</button>
                    </div>
                </form>
                <form action="../inc/report.php" method="post" style="display:none;" target="_blank">
                    <div class="report1">
                        <input type="hidden" name="doc_name" value="Minutes of the Meeting">
                        <input type="hidden" name="parties_involve" value="blank">
                        <input type="hidden" name="agency" value="blank">
                        <input type="hidden" name="phase" value="blank">
                        <input type="hidden" name="extension_act" value="blank">
						<div class="form-group input-group mb-3">
						   <div class="input-group-prepend">
                                <span class="input-group-text">Select Location:</span>
					        </div>
                            <select name="min_location" class="form-control" required>
                                <option selected value="null">None</option>
                                <?php
                                    $sql1 = "SELECT DISTINCT location FROM `minutes_meeting`";
                                    $result1 = $conn->query($sql1);
                                    while ($row1 = $result1 -> fetch_assoc()){
                                ?>
                                <option value = "<?php echo $row1['location']?>"><?php echo $row1['location']?></option>
                                <?php
                                    }
                                ?>
                            </select>
				        </div>
						<div class="form-group input-group mb-3">
						   <div class="input-group-prepend">
                                <span class="input-group-text">Select Participants:</span>
					        </div>
                            <select name="participants" class="form-control" required>
                                <option selected value="null">None</option>
                                <?php
                                    $sql = "SELECT DISTINCT participants FROM `minutes_meeting`";
                                    $result = $conn->query($sql);
                                    while ($row = $result -> fetch_assoc()){
                                ?>
                                <option value = "<?php echo $row['participants']?>"><?php echo $row['participants']?></option>
                                <?php
                                    }
                                ?>
                            </select>
				        </div>
                        <div class="form-group input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Date From:</span>
                            </div>
                            <input autocomplete="off" type="text" name="date_from" id="picker3" class="form-control picker3" required>
								<input type="hidden" name="parties_involve" value="null" >
                        </div>
                        <div class="form-group input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Date To:</span>
                            </div>
                            <input autocomplete="off" type="text" name="date_to" id="picker4" class="form-control picker4" required>
                        </div>
                        <div class="form-group input-group mb-3">
                            <div class="type-choose">
                                <input class="choosen" name="doc_type" type="hidden" value="minutes_meeting">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-center">
                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" name="create_report" value="submit"><i class="fa fa-file"></i> Generate</button>
                    </div>
                </form>
                <form action="../inc/report.php" method="post" style="display:none;" target="_blank">
                    <div class="report1">
                        <input type="hidden" name="doc_name" value="Incomming Communication">
                        <input type="hidden" name="parties_involve" value="blank">
                        <input type="hidden" name="participants" value="blank">
                        <input type="hidden" name="min_location" value="blank">
                        <input type="hidden" name="extension_act" value="blank">
                        <div class="form-group input-group mb-3">
						   <div class="input-group-prepend">
                                <span class="input-group-text">Phase:</span>
					        </div>
                            <select name="phase" class="form-control" required>
                                <option selected value="null">None</option>
                                <?php
                                    $sql1 = "SELECT DISTINCT phase FROM `incoming_comm`";
                                    $result1 = $conn->query($sql1);
                                    while ($row1 = $result1 -> fetch_assoc()){
                                ?>
                                <option value = "<?php echo $row1['phase']?>"><?php echo $row1['phase']?></option>
                                <?php
                                    }
                                ?>
                            </select>
				        </div>
						<div class="form-group input-group mb-3">
						   <div class="input-group-prepend">
                                <span class="input-group-text">Select Agency:</span>
					        </div>
                            <select name="agency" class="form-control" required>
                                <option selected value="null">None</option>
                                <?php
                                    $sql = "SELECT DISTINCT agency FROM `incoming_comm`";
                                    $result = $conn->query($sql);
                                    while ($row = $result -> fetch_assoc()){
                                ?>
                                <option value = "<?php echo $row['agency']?>"><?php echo $row['agency']?></option>
                                <?php
                                    }
                                ?>
                            </select>
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
                                <input class="choosen" name="doc_type" type="hidden" value="incoming_comm">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-center">
                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" name="create_report" value="submit"><i class="fa fa-file"></i> Generate</button>
                    </div>
                </form>
                <form action="../inc/report.php" method="post" style="display:none;" target="_blank">
                    <div class="report1">
                        <input type="hidden" name="doc_name" value="Outgoing Communication">
                        <input type="hidden" name="parties_involve" value="blank">
                        <input type="hidden" name="participants" value="blank">
                        <input type="hidden" name="min_location" value="blank">
                        <input type="hidden" name="agency" value="blank">
                        <input type="hidden" name="phase" value="blank">
                        <input type="hidden" name="extension_act" value="blank">
                        <div class="form-group input-group mb-3">
						   <div class="input-group-prepend">
                                <span class="input-group-text">Phase:</span>
					        </div>
                            <select name="phase" class="form-control" required>
                                <option selected value="null">None</option>
                                <?php
                                    $sql1 = "SELECT DISTINCT phase FROM `outgoing_comm`";
                                    $result1 = $conn->query($sql1);
                                    while ($row1 = $result1 -> fetch_assoc()){
                                ?>
                                <option value = "<?php echo $row1['phase']?>"><?php echo $row1['phase']?></option>
                                <?php
                                    }
                                ?>
                            </select>
				        </div>
						<div class="form-group input-group mb-3">
						   <div class="input-group-prepend">
                                <span class="input-group-text">Select Agency:</span>
					        </div>
                            <select name="agency" class="form-control" required>
                                <option selected value="null">None</option>
                                <?php
                                    $sql = "SELECT DISTINCT agency FROM `outgoing_comm`";
                                    $result = $conn->query($sql);
                                    while ($row = $result -> fetch_assoc()){
                                ?>
                                <option value = "<?php echo $row['agency']?>"><?php echo $row['agency']?></option>
                                <?php
                                    }
                                ?>
                            </select>
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
                                <input class="choosen" name="doc_type" type="hidden" value="outgoing_comm">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-center">
                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" name="create_report" value="submit"><i class="fa fa-file"></i> Generate</button>
                    </div>
                </form>
                <form action="../inc/report.php" method="post" style="display:none;" target="_blank">
                    <div class="report1">
                        <input type="hidden" name="doc_name" value="Proposal">
                        <input type="hidden" name="parties_involve" value="blank">
                        <input type="hidden" name="participants" value="blank">
                        <input type="hidden" name="min_location" value="blank">
                        <input type="hidden" name="agency" value="blank">
                        <input type="hidden" name="phase" value="blank">
                        <input type="hidden" name="extension_act" value="blank">
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
                                <input class="choosen" name="doc_type" type="hidden" value="proposal_module">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-center">
                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" name="create_report" value="submit"><i class="fa fa-file"></i> Generate</button>
                    </div>
                </form>
                <form action="../inc/report.php" method="post" style="display:none;" target="_blank">
                    <div class="report1">
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
                    <div class="report1">
                        <input type="hidden" name="doc_name" value="Extension Activity">
                        <input type="hidden" name="parties_involve" value="blank">
                        <input type="hidden" name="participants" value="blank">
                        <input type="hidden" name="min_location" value="blank">
                        <input type="hidden" name="agency" value="blank">
                        <input type="hidden" name="phase" value="blank">
                        <input type="hidden" name="agenda" value="blank">
						<div class="form-group input-group mb-3">
						   <div class="input-group-prepend">
                                <span class="input-group-text"> Extension Activity:</span>
					        </div>
                            <select name="extension_act" class="form-control" required>
                                <option selected value="null">None</option>
                                <?php
                                    $sql = "SELECT * FROM extension_activity";
                                    $result = $conn->query($sql);
                                    while ($row = $result -> fetch_assoc()){
                                ?>		
					           <option value = "<?php echo $row['id']?>"><?php echo $row['extension_act']?></option>
                                <?php
                                    }
                                ?>
                            </select>
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
                                <span class="input-group-text">User: </span>
					        </div>
                            <select name="user_id" class="form-control" required>
                                <option selected value="null">None</option>
                                <?php
                                    $sql = "SELECT * FROM users";
                                    $result = $conn->query($sql);
                                    while ($row = $result -> fetch_assoc()){
                                ?>
					           <option value = "<?php echo $row['mem_id']?>"><?php echo $row['firstname'] , $row['lastname']?></option>
                                <?php
                                    }
                                ?>
                            </select>
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
<!-- Remove Modal -->
<div class="modal fade" id="RemoveModal" tabindex="-1" role="dialog" aria-labelledby="RemoveLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form class="modal-content" method="POST" action="../inc/remove_file.php">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Deleting...</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> 
            </div>
            <div class="modal-body">
			    <div class="container-fluid">
                   <input type="hidden" name="file_id" value="23231">
                        <h5 class="lead text-center">Are you sure you want to delete this file?</h5>
                        <span style="font-size: 15px;"></span>
                        <div class="buttons d-flex justify-content-center">
                            <button type="type" class="btn btn-primary m-2" name="yes">Yes</button>
                            <button type="button" class="btn btn-danger m-2" data-dismiss="modal" aria-hidden="true">No</button>
                        </div>
                  
                </div> 
			</div>
        </form>
    </div>
</div>
<!-- Edit Profile-->
<div class="modal fade" id="EditProfileModal" tabindex="-1" role="dialog" aria-labelledby="EditProfileLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role=document>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="CreateLabel">Edit Your Profile</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php 
    			require_once '../inc/dbc.inc.php';
				$user=$_SESSION['id'];
				$row = $conn->query("SELECT * FROM `users` where mem_id='$user'") or die(mysqli_error());
    			while($fetch = $row->fetch_assoc()){		
            ?>
            <form action="../inc/edit_profile.php" method="post" enctype="multipart/form-data">
                <div class="modal-body bg-light">
                    <div class="form-group input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Firstname:</span>
                        </div>
                        <input autocomplete="off" type="text" name="firstname" id="" class="form-control" value="<?php echo $fetch['firstname'];?>">
                    </div>
                    <div class="form-group input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Lastname:</span>
                        </div>
                        <input autocomplete="off" type="text" name="lastname" id="" class="form-control" value="<?php echo $fetch['lastname'];?>">
                    </div>
					<div class="form-group input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Email:</span>
                        </div>
                        <input autocomplete="off" type="text" name="email" id="" class="form-control" value="<?php echo $fetch['email'];?>">
                    </div>
                    <div class="form-group input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Department:</span>
                        </div>
                        <select name="department" id="" class="custom-select">
                            <option class="text-danger" value="<?php echo $fetch['department'];?>" selected><?php echo $fetch['department'];?> </option>
                            <?php
                            $sql = "SELECT * FROM department";
                            $result = $conn->query($sql);
                            while ($row1 = $result -> fetch_assoc()){
                        ?>
                        <option value = "<?php echo $row1['department']?>"><?php echo $row1['department']?></option>
                        <?php
                            }
                        ?>
                        </select>
                    </div>
                    <div class="form-group input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Extension Activity: </span>
                        </div>
                        <select name="activity" id="" class="custom-select">
                            <option class="text-danger" value="<?php echo $fetch['extension_activity'];?>" selected><?php echo $fetch['extension_activity'];?></option>
                            <?php
                            $sql1 = "SELECT *  FROM extension_activity";
                            $result1 = $conn->query($sql1);
                            while ($row2 = $result1 -> fetch_assoc()){
                        ?>
                        <option value = "<?php echo $row2['extension_act']?>"><?php echo $row2['extension_act']?></option>
                        <?php
                            }
                        ?>								
                        </select>
                    </div>
                    <input type="hidden" name="mem_id" value="<?php echo $_SESSION['id'];?>">
                </div>
                <div class="modal-footer text-center">
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success" name="edit_profile" value="submit"><i class="fa fa-edit"></i> Update</button>
                </div>
            </form>
            <?php
                }
            ?>
        </div>
    </div>
</div>
<!-- Edit Picture -->
<div class="modal fade" id="EditPicture" tabindex="-1" role="dialog" aria-labelledby="DetailsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Change Picture</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> 
            </div>
            <?php 
    			require_once '../inc/dbc.inc.php';
				$user=$_SESSION['id'];
				$row = $conn->query("SELECT * FROM `users` where mem_id='$user'") or die(mysqli_error());
    			while($fetch = $row->fetch_assoc()){		
            ?>
            <form action="../inc/edit_profile.php" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group input-group mb-3 justify-content-center">
                        <div class="profile-pic border">
                            <img style="width: 200px; height: 200px; position: relative;" id="uploadPreview" src= "<?php echo $fetch['imglink'];?>">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="imglink" name="imglink" accept=".jpg,.jpeg,.png" onchange="PreviewImage()" value="<?php echo $fetch['imglink'];?> "required />
							<input type="hidden" name="mem_id" value="<?php echo $user ;?>">
						   <label class="custom-file-label" for="imglink">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-center">
                    <button type="submit" class="btn btn-success edit-btn" name="update_file" value="submit"><i class="fa fa-edit"></i> Change</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </form>
            <?php
                }
            ?>
        </div>
    </div>
</div>
<!-- Details Modal -->
<div class="modal fade" id="DetailsModal" tabindex="-1" role="dialog" aria-labelledby="DetailsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> 
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <input type="hidden" name="file_id" id="file_id">
                    <div class="form-group mb-3">
                        <label for="">File Name</label>
                        <input autocomplete="off" type="text" name="filename" id="file_name" class="form-control" placeholder="Enter File Name..." required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Document Type</label>
                        <input autocomplete="off" type="text" name="filename" id="doc_type" class="form-control" placeholder="Enter Document Type..." required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Date Uploaded</label>
                        <input autocomplete="off" type="text" name="filename" id="date_upload" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Location</label>
                        <input autocomplete="off" type="text" name="filename" id="location" class="form-control" placeholder="Enter Location..." required>
                    </div>
                </div>
                <div class="modal-footer text-center">
                    <button type="submit" class="btn btn-success edit-btn" name="update_file" value="submit"><i class="fa fa-edit"></i> Update</button>
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $fetch['file_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"select * from file where file_id='".$fetch['file_id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit.php?id=<?php echo $erow['file_id']; ?>">
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="firstname" class="form-control" value="<?php echo $erow['user_id']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="lastname" class="form-control" value="<?php echo $erow['location']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Address:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="address" class="form-control" value="<?php echo $erow['l']; ?>">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
