<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title> Prediksi Penjualan Batik Solo &trade;</title>
  <!-- Favicon-->
  <link rel="icon" href="<?php echo base_url(); ?>images/favico.ico" type="image/x-icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css" />

  <!-- Colorpicker Css -->
  <link href="<?php echo base_url(); ?>design/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />

  <!-- Bootstrap Core Css -->
  <link href="<?php echo base_url(); ?>design/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" />

  <!-- Waves Effect Css -->
  <link href="<?php echo base_url(); ?>design/plugins/node-waves/waves.css" rel="stylesheet" />

  <!-- Animation Css -->
  <link href="<?php echo base_url(); ?>design/plugins/animate-css/animate.css" rel="stylesheet" />

  <!-- JQuery DataTable Css -->
  <link href="<?php echo base_url(); ?>design/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet" />

  <!-- Bootstrap Material Datetime Picker Css -->
  <link href="<?php echo base_url(); ?>design/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

  <!-- Wait Me Css -->
  <link href="<?php echo base_url(); ?>design/plugins/waitme/waitMe.css" rel="stylesheet" />

  <!-- Bootstrap Select Css -->
  <link href="<?php echo base_url(); ?>design/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

  <!-- Dropzone Css -->
  <link href="<?php echo base_url(); ?>design/plugins/dropzone/dropzone.css" rel="stylesheet" />

  <!-- Multi Select Css -->
  <link href="<?php echo base_url(); ?>design/plugins/multi-select/css/multi-select.css" rel="stylesheet" />

  <!-- Bootstrap Spinner Css -->
  <link href="<?php echo base_url(); ?>design/plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet" />

  <!-- Bootstrap Tagsinput Css -->
  <link href="<?php echo base_url(); ?>design/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" />

  <!-- Bootstrap Select Css -->
  <link href="<?php echo base_url(); ?>design/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

  <!-- noUISlider Css -->
  <link href="<?php echo base_url(); ?>design/plugins/nouislider/nouislider.min.css" rel="stylesheet" />

  <!-- Custom Css -->
  <link href="<?php echo base_url(); ?>design/css/style.css" rel="stylesheet">

  <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
  <link href="<?php echo base_url(); ?>design/css/themes/all-themes.css" rel="stylesheet" />

  <!-- Sweet Alert Css -->
  <link href="<?php echo base_url(); ?>design/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

  <!-- Morris Chart Css-->
  <link href="<?php echo base_url(); ?>design/plugins/morrisjs/morris.css" rel="stylesheet" />

  <!-- Bootstrap Material Datetime Picker Css -->
  <link href="<?php echo base_url(); ?>design/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />



</head>

<body class="theme-deep-purple">
  <!-- Page Loader -->
  <div class="page-loader-wrapper">
    <div class="loader">
      <div class="preloader">
        <div class="spinner-layer pl-red">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div>
          <div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>
      </div>
      <p>Please wait...</p>
    </div>
  </div>
  <!-- #END# Page Loader -->
  <!-- Overlay For Sidebars -->
  <div class="overlay"></div>
  <!-- #END# Overlay For Sidebars -->
  <!-- Search Bar -->

  <!-- #END# Search Bar -->

  <!-- Top Bar -->
  <?php $this->load->view('topbar'); ?>
  <!-- #Top Bar -->

  <!-- Left Sidebar -->
  <?php $this->load->view('sidebar'); ?>
  <!-- #END# Left Sidebar -->

  <section class="content">
    <div class="container-fluid">
      <?php $this->load->view($content); ?>
    </div>
  </section>




  <!-- Jquery Core Js -->
  <script src="<?php echo base_url(); ?>design/plugins/jquery/jquery.min.js"></script>

  <!-- Bootstrap Core Js -->
  <script src="<?php echo base_url(); ?>design/plugins/bootstrap/js/bootstrap.js"></script>

  <!-- Select Plugin Js -->
  <script src="<?php echo base_url(); ?>design/plugins/bootstrap-select/js/bootstrap-select.js"></script>

  <!-- Slimscroll Plugin Js -->
  <script src="<?php echo base_url(); ?>design/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

  <!-- Waves Effect Plugin Js -->
  <script src="<?php echo base_url(); ?>design/plugins/node-waves/waves.js"></script>





  <!-- Jquery CountTo Plugin Js -->
  <script src="<?php echo base_url(); ?>design/plugins/jquery-countto/jquery.countTo.js"></script>



  <!-- Flot Charts Plugin Js -->
  <script src="<?php echo base_url(); ?>design/plugins/flot-charts/jquery.flot.js"></script>
  <script src="<?php echo base_url(); ?>design/plugins/flot-charts/jquery.flot.resize.js"></script>
  <script src="<?php echo base_url(); ?>design/plugins/flot-charts/jquery.flot.pie.js"></script>
  <script src="<?php echo base_url(); ?>design/plugins/flot-charts/jquery.flot.categories.js"></script>
  <script src="<?php echo base_url(); ?>design/plugins/flot-charts/jquery.flot.time.js"></script>








  <!-- Jquery DataTable Plugin Js -->
  <script src="<?php echo base_url(); ?>design/plugins/jquery-datatable/jquery.dataTables.js"></script>
  <script src="<?php echo base_url(); ?>design/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
  <script src="<?php echo base_url(); ?>design/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
  <script src="<?php echo base_url(); ?>design/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
  <script src="<?php echo base_url(); ?>design/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
  <script src="<?php echo base_url(); ?>design/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
  <script src="<?php echo base_url(); ?>design/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
  <script src="<?php echo base_url(); ?>design/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
  <script src="<?php echo base_url(); ?>design/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

  <!-- Custom Js -->
  <script src="<?php echo base_url(); ?>design/js/admin.js"></script>
  <script src="<?php echo base_url(); ?>design/js/pages/tables/jquery-datatable.js"></script>
  <script src="<?php echo base_url(); ?>design/js/pages/examples/sign-up.js"></script>

  <script src="<?php echo base_url(); ?>design/js/pages/forms/editors.js"></script>
  <script src="<?php echo base_url(); ?>design/js/pages/index.js"></script>


  <script src="<?php echo base_url(); ?>design/js/pages/forms/form-validation.js"></script>
  <script src="<?php echo base_url(); ?>design/js/pages/forms/basic-form-elements.js"></script>
  <script src="<?php echo base_url(); ?>design/js/pages/forms/advanced-form-elements.js"></script>

  <script src="<?php echo base_url(); ?>design/js/pages/ui/dialogs.js"></script>
  <script src="<?php echo base_url(); ?>design/js/pages/ui/notifications.js"></script>





  <!-- Demo Js -->
  <script src="<?php echo base_url(); ?>design/js/demo.js"></script>

  <!-- Jquery Validation Plugin Css -->
  <script src="<?php echo base_url(); ?>design/plugins/jquery-validation/jquery.validate.js"></script>

  <!-- JQuery Steps Plugin Js -->
  <script src="<?php echo base_url(); ?>design/plugins/jquery-steps/jquery.steps.js"></script>

  <!-- Sweet Alert Plugin Js -->
  <script src="<?php echo base_url(); ?>design/plugins/sweetalert/sweetalert.min.js"></script>

  <!-- Autosize Plugin Js -->
  <script src="<?php echo base_url(); ?>design/plugins/autosize/autosize.js"></script>

  <!-- Moment Plugin Js -->
  <script src="<?php echo base_url(); ?>design/plugins/momentjs/moment.js"></script>

  <!-- Bootstrap Material Datetime Picker Plugin Js -->
  <script src="<?php echo base_url(); ?>design/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

  <!-- Bootstrap Colorpicker Js -->
  <script src="<?php echo base_url(); ?>design/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

  <!-- Dropzone Plugin Js -->
  <script src="<?php echo base_url(); ?>design/plugins/dropzone/dropzone.js"></script>

  <!-- Input Mask Plugin Js -->
  <script src="<?php echo base_url(); ?>design/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

  <!-- Multi Select Plugin Js -->
  <script src="<?php echo base_url(); ?>design/plugins/multi-select/js/jquery.multi-select.js"></script>

  <!-- Jquery Spinner Plugin Js -->
  <script src="<?php echo base_url(); ?>design/plugins/jquery-spinner/js/jquery.spinner.js"></script>

  <!-- Bootstrap Tags Input Plugin Js -->
  <script src="<?php echo base_url(); ?>design/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

  <!-- noUISlider Plugin Js -->
  <script src="<?php echo base_url(); ?>design/plugins/nouislider/nouislider.js"></script>

  <!--  <script type="text/javascript" src="<?php echo base_url(); ?>design/my.js"></script> -->

  <script src="<?php echo base_url(); ?>design/js/jquery-ui.js?>" type="text/javascript"></script>



  <!-- Morris Plugin Js -->
  <script src="<?php echo base_url(); ?>design/plugins/raphael/raphael.min.js"></script>
  <script src="<?php echo base_url(); ?>design/plugins/morrisjs/morris.js"></script>

  <!-- TinyMCE -->
  <script src="<?php echo base_url(); ?>design/plugins/tinymce/tinymce.js"></script>
  <!-- Ckeditor -->
  <script src="<?php echo base_url(); ?>design/plugins/ckeditor/ckeditor.js"></script>





</body>

</html>