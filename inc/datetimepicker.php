<script>
    //File Upload
    $('#picker').datetimepicker({
        timepicker: false,
        datepicker: true,
        format: 'Y-m-d',
        weeks: true,
    });
    //Schedule Modal
    $('#picker1').datetimepicker({
        timepicker: true,
        datepicker: true,
        format: 'Y-m-d H:00',
        weeks: true,
        onShow: function (ct) {
            this.setOptions({
                maxDate: $('#picker2').val() ? $('#picker2').val() : false
            })
        }
    });
    $('#picker2').datetimepicker({
        timepicker: true,
        datepicker: true,
        format: 'Y-m-d H:00',
        weeks: true,
        onShow: function (ct) {
            this.setOptions({
                minDate: $('#picker1').val() ? $('#picker1').val() : false
            })
        }
    });
    //Report Modal
    $('.picker3').datetimepicker({
        timepicker: false,
        datepicker: true,
        format: 'Y-m-d',
        weeks: true,
        onShow: function (ct) {
            this.setOptions({
                maxDate: $('#picker4').val() ? $('#picker4').val() : false
            })
        }
    });
    $('.picker4').datetimepicker({
        timepicker: false,
        datepicker: true,
        format: 'Y-m-d',
        weeks: true,
        onShow: function (ct) {
            this.setOptions({
                minDate: $('#picker3').val() ? $('#picker3').val() : false
            })
        }
    });
</script>