<script src="../assets/js/core/jquery-3.6.0.min.js"></script>
  <script src="../assets/js/core/jquery-3.6.0.js"></script>
 <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/datatable/jquery.dataTables.min.js"></script>
  <script src="../assets/js/plugins/moment.min.js"></script>
   <script src="../assets/js/plugins/daterangepicker.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/fullcalendar/lib/main.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>  
  <script src="../assets/js/plugins/script.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
	 var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
	
		$(document).ready(function () {
		$('#dataTable').DataTable({
            "responsive": true
        });
	});
	  function ChangeDoc(form) {
            var selIndex = form.options.selectedIndex;
            let getFormArr = document.querySelectorAll(".modal-body form");
            let arrayLength = getFormArr.length;

            for (let i = 0; i < arrayLength; i++) {
                if (selIndex == (i+1)) {
                    getFormArr[i].style.display = "unset";           
                }
                else if (selIndex !== (i+1)) {
                    getFormArr[i].style.display = "none";
                }
            }
        }
$(function() {
  $('input[name="turn_over"]').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
  });
});
$(function() {
  $('input[name="coverage"]').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
  });
});
$(function() {
  $('input[name="service_call"]').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
  });
});
$(function() {

  $('input[name="datefilter"]').daterangepicker({
      autoUpdateInput: false,
      locale: {
          cancelLabel: 'Clear'
      }
  });

  $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
      $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
  });

  $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
      $(this).val('');
  });

});
 
</script>