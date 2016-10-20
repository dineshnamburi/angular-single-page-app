
</body>
 <!-- Bootstrap Core JavaScript -->
<!---##--->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>js/vendor/jquery.sortelements.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>js/jquery.bdt.js" type="text/javascript"></script>
<script>
    $(document).ready( function () {
        $('#bootstrap-table').bdt();
    });
</script>

<!---##---> 
<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>js/postData.js"></script>
<script src="<?php echo base_url(); ?>ajax/inventory/ajaxdata.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_date').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
</script>

    <!-- Morris Charts JavaScript -->

</html>
