 
<div class="form-group">
          <label for="email">Country</label>
          <select name="country" id="country" class="form-control" onchange="FetchState(this.value)"  required>
            <option value="">Select Country</option>
          <?php
		  $query1 = mysqli_query($conn, "SELECT * FROM `machine_type` ") or die(mysqli_error());			
            if ($query1->num_rows > 0 ) {
               while ($row = $query1->fetch_assoc()) {
                echo '<option value='.$row['machine_id'].'>'.$row['machine_name'].'</option>';
               }
            }
          ?> 
          </select>
        </div>
		  <div class="form-group">
          <label for="pwd">State</label>
          <select name="state" id="state" class="form-control" onchange="FetchCity(this.value)"  required>
            <option>Select State</option>
          </select>
        </div>