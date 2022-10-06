<?php
    session_start();
    require_once ('../bootstrap/tcpdf/tcpdf.php');
    class MYPDF extends TCPDF {
        public function Footer(){
            $firstname= $_SESSION['firstname'];
            $lastname= $_SESSION['lastname'];
            $this -> SetY(-15);
            $this -> SetFont('Helvetica', 'BI', 10);
            $this -> Cell(0, 10, 'Generated by: '.$firstname. ' ' .$lastname,  0, false, 'L', 0, '', 0, false, 'T', 'M');
            $this -> SetY(-15);
            $this -> SetFont('Helvetica', 'I', 10);
            $this -> Cell(0, 10, 'Page ' .$this-> getAliasNumPage(), 0, false, 'R', 0, '', 0, false, 'T', 'M');
        }
    }
    function fetch_data() {
        $user_id = $_POST['user_id'];
        //$extension_act = $_POST['extension_act'];
		$table_name = $_POST['doc_type'];
        $output = '';
        $date_to_tmp = $_POST['date_to'];
        $date_from_tmp = $_POST['date_from'];
        
        include ('../inc/dbc.inc.php'); 
        if ($table_name == "user") {
            if ($user_id=="null") {
                $sql = "SELECT * FROM file where `date_uploaded` BETWEEN '$date_from_tmp' AND '$date_to_tmp' ORDER BY file_id ASC";  
                $result = mysqli_query($conn, $sql);  
                while($row = mysqli_fetch_array($result)) {		
                    $fetch1= $row['user_id']; 
                    $sql1 = "SELECT * FROM users WHERE `mem_id` ='$fetch1' ORDER BY mem_id ASC";  
                    $result1 = mysqli_query($conn, $sql1);  
                    while($row1 = mysqli_fetch_array($result1)) {
                        $fetch2= $row['doc_type']; 
                        $sql2 = "SELECT * FROM doc_type WHERE `doc_id` ='$fetch2' ORDER BY doc_id ASC";  
                        $result2 = mysqli_query($conn, $sql2);  
                        while($row2 = mysqli_fetch_array($result2)) {
                            $output .= 
                            '<tr align="center">  
                                <td>'.$row['file_id'].'</td>
                                <td>'.$row2['doc_name'].'</td>					
                                <td>'.$row['name'].'</td> 
                                <td>'.$row1['firstname'].' '.$row1['lastname'].'</td>  					
                              <td>'.$row['date_uploaded'].'</td> 
                            </tr>';   
                        }
                    }
                }
            } elseif ($user_id!="null") {
                $sql = "SELECT * FROM file WHERE `date_uploaded` BETWEEN '$date_from_tmp' AND '$date_to_tmp' AND `user_id` ='$user_id' ORDER BY file_id ASC";  
                $result = mysqli_query($conn, $sql);  
                while($row = mysqli_fetch_array($result)) {		
                    $fetch1= $row['user_id']; 
                    $sql1 = "SELECT * FROM users WHERE `mem_id` ='$fetch1' ORDER BY mem_id ASC";  
                    $result1 = mysqli_query($conn, $sql1);  
                    while($row1 = mysqli_fetch_array($result1)) {
                        $fetch2= $row['doc_type']; 
                        $sql2 = "SELECT * FROM doc_type WHERE `doc_id` ='$fetch2' ORDER BY doc_id ASC";  
                        $result2 = mysqli_query($conn, $sql2);  
                        while($row2 = mysqli_fetch_array($result2)) {
                            $output .= 
                            '<tr align="center">  
                                <td>'.$row['file_id'].'</td>
                                <td>'.$row2['doc_name'].'</td>					
                                <td>'.$row['name'].'</td>
								<td>'.$row['date_uploaded'].'</td>								
                            </tr>';  
                        }
                    }
                }
            }
        } 
        return $output;
    }  
    if(isset($_POST["create_pdf"])) {  
        $doc_name = $_POST['doc_name'];
        $doc_type = $_POST['doc_type'];
        $date_to_tmp = $_POST['date_to'];
        $date_to = date('d F Y', strtotime($date_to_tmp));
        $date_from_tmp = $_POST['date_from'];
        $date_from = date('d F Y', strtotime($date_from_tmp));
        $table_name = $_POST['doc_type'];
        $firstname= $_SESSION['firstname'];
        $lastname= $_SESSION['lastname'];
		$user_id= $_POST['user_id']; 
		 $first1= $_POST['first1'];
        $last1= $_POST['last1'];
		$extension= $_POST['extension'];
        
        /// PDF
        $obj_pdf = new MYPDF('L', 'mm', 'A4'); 
        $obj_pdf->SetCreator(PDF_CREATOR);  
        $obj_pdf->SetTitle($doc_name);  
        $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
        
        // set header and footer fonts  
        $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
        $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA)); 
        
        // set default monospaced font
        $obj_pdf->SetDefaultMonospacedFont('helvetica');

        // set margins
        $obj_pdf->SetFooterMargin(10);
        $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '11', PDF_MARGIN_RIGHT);  
        $obj_pdf->setPrintHeader(false); 
        $obj_pdf->SetAutoPageBreak(TRUE, 17);

        $obj_pdf->SetFont('helvetica', '', 12); 

        // set auto page breaks
        $obj_pdf->AddPage(); 
        $content = '';
        
        /// PDF style
        $content .= '
            <style>
                th {
                    background-color: #ccc;
                }
            </style>
            <div class="header">';
                $obj_pdf -> Image('../image/icon.jpg', 90, 10, 27);
                $obj_pdf -> SetFont('Helvetica', '', 12);
                $obj_pdf -> Cell(287, 7, "Republic of the Philippines", 0, 1, 'C');
                $obj_pdf -> SetFont('Helvetica', 'B', 14);
                $obj_pdf -> Cell(287, 7, "Cavite State University", 0, 1, 'C');
                $obj_pdf -> SetFont('Helvetica', 'B', 14);
                $obj_pdf -> Cell(287, 6, "Don Severino de las Alas Campus", 0, 1, 'C');
                $obj_pdf -> SetFont('Helvetica', '', 12);
                $obj_pdf -> Cell(287, 6, "Indang, Cavite", 0, 1, 'C');
                $obj_pdf -> Ln(7);
                $obj_pdf -> SetFont('Helvetica', 'B', 12);
                $obj_pdf -> Cell(277, 7, "College of Engineering and Information Technology", 0, 1, 'C');
                if ($user_id=="null") {  $obj_pdf -> SetFont('Helvetica', '', 12);
                $obj_pdf -> Cell(277, 7, "$first1 $last1 Uploaded Documents" , 0, 1, 'C');	
				}
				if ($user_id!="null") {  $obj_pdf -> SetFont('Helvetica', '', 12);
                $obj_pdf -> Cell(277, 7, "$first1 $last1 Uploaded Documents" , 0, 1, 'C');
				$obj_pdf -> SetFont('Helvetica', '', 12);
                $obj_pdf -> Cell(277, 7, "$extension " , 0, 1, 'C');				}
                $obj_pdf -> SetFont('Helvetica', '', 12);
                $obj_pdf -> Cell(277, 7, "Date: $date_from - $date_to", 0, 0, 'C');
                $obj_pdf -> Ln(7);
                $obj_pdf -> SetFont('Helvetica', '', 11);
                $content .= '
            </div>
            <table border="0" cellspacing="0" cellpadding="5">';
               if ($user_id!="null") {  $content .= '
                <tr align="center">
                    <th width="25%">File_Id</th>
					<th width="20%">Document Type</th>
                    <th width="35%">File Name</th>  
					 <th width="20%">Date Uploaded</th>  
			</tr>'; }
			if ($user_id == "null") {$content .= '
                <tr align="center">
                    <th width="10%">File_Id</th>
					<th width="20%">Document Type</th>
                    <th width="30%">File Name</th>  
                    <th width="20%">Name</th>  
                    <th width="20%">Date Uploaded</th> 
					</tr>' ; }
        $content .= fetch_data();  
        $content .= '</table>';  
        $obj_pdf->writeHTML($content);  
        $obj_pdf->Output('Report.pdf', 'I');  
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Export Table Data to PDF</title>  
    <?php include '../admin/links.php'; ?>
</head>
<body>
    <section>
        <?php 
            require_once '../inc/dbc.inc.php';

            $doc_type = $_POST['doc_type'];
            $doc_name = $_POST['doc_name'];
            $date_to = $_POST['date_to'];
            $date_to_tmp = date('d F Y', strtotime($date_to));
            $date_from = $_POST['date_from'];
            $date_from_tmp = date('d F Y', strtotime($date_from));
            $doc_title = $_POST['doc_name'];
            $table_name = $_POST['doc_type'];
            $firstname= $_SESSION['firstname'];
            $lastname= $_SESSION['lastname'];
            $user_id = $_POST['user_id'];
			 $firstname= $_SESSION['firstname'];
            $lastname= $_SESSION['lastname'];
        
        ?>
        <div class="container mt-5" style="width:1200px;">  
            <div class="header">
                <h3 class="text-center">Extension Coordinators Uploaded Files</h3> 
				<?php if ($user_id != "null") {
				$row = $conn->query("SELECT * FROM `users` where mem_id='$user_id'") or die(mysqli_error());
    					while($fetch = $row->fetch_assoc()){			?>
						<h4 class="text-center"> <?php echo $fetch ['firstname'] , $fetch['lastname']; ?> </h4>
							<h5 class="text-center"> <?php echo $fetch['extension_activity'] ;?> </h5>	<?php }} ?>
                <h6 class="text-center">Date: <?php echo $date_from_tmp; ?> - <?php echo $date_to_tmp; ?></h6>
            </div>
            <br />  
            <div class="table-responsive">  
                <table class="table table-bordered table-striped">  
                  <?php   if ($user_id != "null") { ?>
					  <tr>
                        <th class='text-center' width='10%'>File_Id</th>   
				        <th class='text-center' width='20%'>Document Type</th>   
				        <th class='text-center' width='30%'>File Name</th>
						<th class='text-center' width='30%'>Date Uploaded</th>
                       
				  </tr> <?php } ?>
					<?php if ($user_id == "null") { ?>
					<tr>
                        <th class='text-center' width='10%'>File_Id</th>   
				        <th class='text-center' width='20%'>Document Type</th>   
				        <th class='text-center' width='30%'>File Name</th>
                        <th class='text-center' width='20%'>Name</th>  
                        <th class='text-center' width='20%'>Date Uploaded</th>   
                    </tr> 
					<?php } ?>
                <?php  
                    echo fetch_data();  
                ?> 
                </table>
                <h6 class="text-right">Generated by: <?php echo $firstname; echo " "; echo $lastname;?></h6>
                <div class="form-group text-center">
                   <form method="post">
                       <input type="hidden" name="doc_type" value="<?php echo $doc_type; ?>">
                       <input type="hidden" name="doc_name" value="<?php echo $doc_name; ?>">
                       <input type="hidden" name="date_from" value="<?php echo $date_from;?>">
                       <input type="hidden" name="date_from_tmp" value="<?php echo $date_from_tmp;?>">
                       <input type="hidden" name="date_to" value="<?php echo $date_to; ?>">
                       <input type="hidden" name="date_to_tmp" value="<?php echo $date_to_tmp; ?>">
                       <input type="hidden" name="first" value="<?php echo $firstname; ?>">
                       <input type="hidden" name="last" value="<?php echo $lastname; ?>">
					   <input type="hidden" name="first1" value="">
                       <input type="hidden" name="last1" value="">
					    <input type="hidden" name="extension" value="">
                       <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
					  <?php $row = $conn->query("SELECT * FROM `users` where mem_id='$user_id'") or die(mysqli_error());
    					while($fetch = $row->fetch_assoc()){		?>
					   <input type="hidden" name="first1" value="<?php echo $fetch['firstname']; ?>">
					      <input type="hidden" name="last1" value="<?php echo $fetch['lastname']; ?>"> 
						   <input type="hidden" name="extension" value="<?php echo $fetch['extension_activity']; ?>"> 
						<?php } ?>

                       <button type="submit" name="create_pdf" class="btn btn-danger">
                             <span>Create PDF</span>
                       </button> 
                   </form>
                </div>
            </div>  
        </div>
    </section>
</body>
</html>