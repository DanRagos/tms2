<style>
  #alert_popover
  {
   display:block;
   position:absolute;
   bottom:0;
   right:0;
  }
  .wrapper {
    display: table-cell;
    vertical-align: right;
    height: 35px !important;
    width: 200px;
    font-size: 0.8rem;
  }
  .alert_default
  {
   color: #333333;
   background-color: #62a4ff61  ;
   border-color: #cccccc;
  }
  </style>
<div id="alert_popover">
    <div class="wrapper">
     <div class="content">

     </div>
    </div>
   </div>
   <script src="../js/jquery-3.4.1.js"></script>
<script>
$(document).ready(function(){

	setInterval(function(){
	load_last_notification();
	}, 10000);

	function load_last_notification(){
		$.ajax({
		url:"../inc/fetch.php",
		method:"POST",
		success:function(data){
		$('.content').html(data);
		}
	})
	}
});
</script>