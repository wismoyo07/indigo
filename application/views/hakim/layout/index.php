<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $backend_aplikasi; ?> | <?= $versi_aplikasi; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?= base_url();?>assets/backend/theme/adminlte/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url();?>assets/backend/theme/adminlte/dist/css/font-awesome-4.3.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url();?>assets/backend/theme/adminlte/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  <!- jQuery 2.2.3 -->
  <script src="<?= base_url();?>assets/backend/theme/adminlte/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

  <link rel="stylesheet" href="<?= base_url();?>assets/backend/theme/adminlte/dist/css/skins/skin-green.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url();?>assets/backend/theme/adminlte/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?= base_url();?>assets/backend/theme/adminlte/plugins/morris/morris.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/backend/theme/adminlte/plugins/datatables/dataTables.bootstrap.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?= base_url();?>assets/backend/theme/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?= base_url();?>assets/backend/theme/adminlte/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url();?>assets/backend/theme/adminlte/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?= base_url();?>assets/backend/theme/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <link rel="stylesheet" href="<?= base_url();?>assets/backend/theme/adminlte/plugins/iCheck/flat/blue.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/backend/theme/adminlte/plugins/chosen/chosen.css">
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo site_url('dashboardkm'); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>APP</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>APLIKASI</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <?php $this->load->view('hakim/layout/topheader'); ?>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
  <?php $this->load->view('hakim/layout/sidebar');?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">    
      <?php $this->load->view($konten); ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <?php $this->load->view('hakim/layout/footer'); ?>
  </footer>

</div>
<!-- ./wrapper -->

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="<?=base_url('assets/backend/theme/adminlte/plugins/ckeditor/ckeditor.js');?>" type="text/javascript"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?= base_url();?>assets/backend/theme/adminlte/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?= base_url();?>assets/backend/theme/adminlte/plugins/morris/morris.min.js"></script>
<!-- jvectormap -->
<script src="<?= base_url();?>assets/backend/theme/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= base_url();?>assets/backend/theme/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url();?>assets/backend/theme/adminlte/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<!-- datatable -->
<script src="<?= base_url();?>assets/backend/theme/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url();?>assets/backend/theme/adminlte/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- datatable -->
<script>
  $(function () {
    $("#datatables").DataTable();
    $('#datatable').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<script src="<?=base_url('assets/backend/theme/adminlte/js/app.js');?>" type="text/javascript"></script>
<!-- datepicker -->
<script src="<?= base_url();?>assets/backend/theme/adminlte/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Slimscroll -->
<script src="<?= base_url();?>assets/backend/theme/adminlte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url();?>assets/backend/theme/adminlte/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url();?>assets/backend/theme/adminlte/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url();?>assets/backend/theme/adminlte/plugins/iCheck/icheck.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){                
        //Date picker
        $('.datepicker-input').datepicker();
    });
</script>
<script src="<?php echo base_url(); ?>assets/backend/theme/adminlte/plugins/chosen/chosen.jquery.js" type="text/javascript"></script>
  
<script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Maaf, data tidak ditemukan!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
</script>
<script type="text/javascript">
    $("#no_putusan").change(function(){
        var no_putusan = $("#no_putusan").val();
        $.ajax({
            type: "POST",
            url : "<?php echo base_url('suratpendapathukum/get_detail_noputusan'); ?>",
            data: "no_putusan="+no_putusan,
            cache:false,
            success: function(data){
                $('#form_detail').html(data);
                document.frm.add.disabled=false;
            }
        });
    });

</script>

<script>
  $(function () {
    //Enable iCheck plugin for checkboxes
    //iCheck for checkbox and radio inputs
    $('.data-tabel input[type="checkbox"]').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });

    //Enable check and uncheck all functionality
    $(".checkbox-toggle").click(function () {
      var clicks = $(this).data('clicks');
      if (clicks) {
        //Uncheck all checkboxes
        $(".data-tabel input[type='checkbox']").iCheck("uncheck");
        $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
      } else {
        //Check all checkboxes
        $(".data-tabel input[type='checkbox']").iCheck("check");
        $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
      }
      $(this).data("clicks", !clicks);
    });

    //Handle starring for glyphicon and font awesome
    $(".mailbox-star").click(function (e) {
      e.preventDefault();
      //detect type
      var $this = $(this).find("a > i");
      var glyph = $this.hasClass("glyphicon");
      var fa = $this.hasClass("fa");

      //Switch states
      if (glyph) {
        $this.toggleClass("glyphicon-star");
        $this.toggleClass("glyphicon-star-empty");
      }

      if (fa) {
        $this.toggleClass("fa-star");
        $this.toggleClass("fa-star-o");
      }
    });
  });
</script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url();?>assets/backend/theme/adminlte/dist/js/demo.js"></script>
</body>
</html>
