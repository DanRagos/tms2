<?php
require_once '../inc/dbc.inc.php';

if(isset($_POST["emp_id"]))  
{
    $output = '';

    $query = "SELECT * FROM clients WHERE client_id = '".$_POST["emp_id"]."'";  
    $result = mysqli_query($conn, $query);  


    $output .= '  
    <div class="table-responsive">  
         <table class="table table-bordered">';  
    while($row = mysqli_fetch_array($result))  
    {  
         $output .= '  
              <tr>  
                   <td width="30%"><label>Name</label></td>  
                   <td width="70%">'.$row["client_name"].'</td>  
              </tr>  
              <tr>  
                   <td width="30%"><label>Address</label></td>  
                   <td width="70%">'.$row["client_address"].'</td>  
              </tr>  
              <tr>  
                   <td width="30%"><label>Gender</label></td>  
                   <td width="70%">'.$row["contact_email"].'</td>  
              </tr>  
             
               
              ';  
    }  
    $output .= "</table></div>";  
    echo $output;  








}