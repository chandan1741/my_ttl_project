<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Customer 360&#176;</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets/img/TATAMushroom.png"/>
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.min.css">
  <style>
    .login-box-body .form-control-feedback, .register-box-body .form-control-feedback {
    color: #c31818;
    }
    body{
    background: url("<?php echo base_url();?>assets/dist/img/bg.png")!important; 
    background-repeat: no-repeat;
    background-size: cover !important;
    height: 100% !important;
    position: fixed;
    min-width: 100%;
    min-height: 100%;
 
    }
    .img_logo{
      margin-top: 10px;
    margin-left: 10px;
    padding: 5px;
    width: 73px;
    height: 73px;
    }
  </style>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
  <div>
    <img class="pull-right" style="float: right; margin-top: 10px; margin-right: 10px;padding: 5px; width: 184px;height: 61px;" src="<?php echo base_url();?>assets/dist/img/tata_it_logo.png">
    
    <img class="pull-left img_logo" src="<?php echo base_url();?>assets/dist/img/SparQplug.png">
  </div>
<div class="login-box">
  <div class="login-logo" style="margin-top: 108px;">
    <a href="#" style="color: #fff;"><b>Customer</b> 360&#176;</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg" id="msg"></p>

    <form action="#" method="post" autocomplete="off" name="loginForm" id="loginForm">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username" id="username" required="required" autocomplete="off">
        <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="upwd" id="upwd" required="required" autocomplete="new-password">
        <!-- <span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="submit_button" id="submit_button" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
<script type="text/javascript">
  
$(document).ready(function() {
  function loginDataValidation() {
    var validator = $('#loginForm').bootstrapValidator({
      feedbackIcons:{
        valid: 'glyphicon glyphicon-ok',
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
      },
      fields:{
        username:{
          validators:{
            notEmpty:{
              message: 'Enter Username'
            }
          }
        },
        upwd:{
          validators:{
            notEmpty:{
              message: 'Enter Password'
            }
          }
        },
      }
    });
  }
    $('#submit_button').on('click', function(e) {
        e.preventDefault();
        jQuery('#loginForm').bootstrapValidator('destroy');
        jQuery('#loginForm').data('bootstrapValidator', null);
        loginDataValidation();  
        var validator = jQuery('#loginForm').data('bootstrapValidator');
        validator.validate();
       if (validator.isValid()) {
        var username  = $('#username').val();
        var password  = $('#upwd').val();
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
            csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
        if(username && password){
          $.ajax({
            url:'<?php echo base_url();?>login/login',
            method:"POST",
            dataType:"json",
            data:{[csrfName]: csrfHash,username:username,password,password},
            success:function(data){
              if(data == 'Success!!'){
                window.location = '<?php echo base_url();?>search';
              }else{
                $('#msg').html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>'+data+'</div>');
           
              }
              
            // if(data === '1'){
            //   window.location = '<?php echo base_url();?>mytime/index';
            // }else if(data === '0'){
            //   window.location = '<?php echo base_url();?>login/change_password';
            // }else if(data === 'Invalied'){
            //   $('#msg').html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>Invalied username or password.</div>');
            // }
            }
          });
        }else{
          return false;
          }
        }
      });
  });
        

</script>
</body>
</html>
