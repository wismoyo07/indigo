<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HALAMAN | LOGIN INDIGO</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/backend/theme/adminlte/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/backend/theme/adminlte/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/backend/theme/adminlte/plugins/iCheck/square/blue.css">
<style media="screen">
    body{
      background: #a3630a !important;
    }
    .login-box-body, .register-box-body{
      background: transparent !important
    }
    h4,a,p{
      color: #fff !important

    }
    a{
      text-shadow: 2px 2px 2px #222 !important;
      /*font-size: 18px*/
    }
    .box-logo{
      width: 100px;
      height: 100px;
      overflow: hidden;
      margin: auto;
      /*border-radius: 100% 100% 50% 0;*/
      border: 4px solid #fff;
      background: #d35400;
      box-shadow: 2px 2px 2px #222;
      margin-bottom: 10px;
    }
    .box-logo img{
      width: 100%;
      height: 100%;
    }
    .login-box-body{
      width: 350px !important;
      border: 4px solid #fff;
      margin: auto;
      box-shadow: 2px 2px 2px #222
    }
  </style>
</head>
<body class="hold-transition login-page">

<div class="login-box">
<h4 style="color: white; text-align: center;"><b>INDIGO</b><br>
    INSTRUMEN DIGITAL ONLINE</h4>
  <div class="box-logo">

  <img src="<?=base_url('assets/images/Logo PASIM.png')?>" alt="" width="100%" height="100%">
    
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">SILAHKAN MASUK</p>

    <form id="login" action="<?=$action;?>" style="margin-bottom: 0px !important;" class="" method="post">
    <img id="loading" style="display:none;" src="<?=base_url();?>assets/loading.gif">
      <div id="success" class="alert alert-success alert-white rounded" style="display:none;">
          <div class="icon"><i class="fa fa-check"></i></div>
          <strong>Login Sukses !</strong>
          <!-- <br>Halaman akan dialihkan dalam waktu 3 detik!  -->
          <br>Anda akan diarahkan otomatis ke <?=anchor(site_url('dashboardjs'), 'link');?>
       </div>
      <div id="warning" class="alert alert-warning alert-white rounded" style="display:none;">
          <div class="icon"><i class="fa fa-warning"></i></div>
          <strong>Peringatan !</strong>
          <br>Nama akun dan/atau password tidak boleh kosong!
      </div>
      <div id="failed" class="alert alert-danger alert-white rounded"style="display:none;">
          <div class="icon"><i class="fa fa-times-circle"></i></div>
          <strong>Login gagal !</strong>
          <br>Nama akun dan/atau password salah!
      </div>
      <div class="form-group has-feedback">

        <input type="text" class="form-control" placeholder="NAMA PENGGUNA" name="username" id="username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="KATA SANDI" name="password" id="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-12">
          <button id="btn-login" class="btn btn-primary btn-block btn-flat" style="width:100%" type="submit">MASUK</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div> -->

    <!-- <a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a> -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?= base_url(); ?>assets/backend/theme/adminlte/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?= base_url(); ?>assets/backend/theme/adminlte/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?= base_url(); ?>assets/backend/theme/adminlte/plugins/iCheck/icheck.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("#btn-login").click(function(){
        var formAction = $("#login").attr('action');
        var datalogin = {
            username: $("#username").val(),
            password: $("#password").val()
        };

        if (!$("#username").val() || !$("#password").val()) {
            $("#warning").show('fast').delay(2000).hide('fast');
            return false;
        } else {
            $.ajax({
                type: "POST",
                url: formAction,
                data: datalogin,
                beforeSend: function() {
                    $('#loading').show();
                },
                success: function(result) {
                    if(result == 1) {
                        $('#loading').hide('fast');
                        $("#success").show('fast');
                        setTimeout(function() {
                            window.location = '<?=base_url();?>dashboard';
                        }, 1000);
                    } else {
                        $('#loading').hide('fast');
                        $("#failed").show('fast').delay(2000).hide('fast');
                        $('#username').val('');
                        $('#password').val('');
                        return false;
                    }
                }
            });
            return false;
        }
    });    
});
</script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
