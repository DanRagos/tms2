<?php
include('dbc.inc.php');

$file_id= $_GET['report_id'];
 $sql = "SELECT * FROM report WHERE `report_id` = '$file_id' ";  
                $result = mysqli_query($conn, $sql);  
                while($row = mysqli_fetch_array($result)) {
?>
<html>
<style>
.pdfobject-container { height: 50rem; border: 1rem solid rgba(0,0,0,.1); }
</style>
 <div id="view"></div>
<script src="../assets/pdfobject.js"></script>
<?php $filename= $row['location']; ?>
<script>PDFObject.embed("<?php echo $filename ?>", "#view");</script>
</html>

				<?php } ?>