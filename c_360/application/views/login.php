<!DOCTYPE html>
<html lang="en">
<head>
  <title>Customer 360 Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets/img/TATAMushroom.png"/>

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/login/css/main.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.min.css">
  <style type="text/css">
    .error{
      color: red;
    }
  </style>
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="<?php echo base_url()?>assets/login/images/spaqplug_logo.png" alt="IMG">
        </div>

        <form class="login100-form validate-form" method="post" autocomplete="off" name="loginForm" id="loginForm">
          <span class="login100-form-title">
            Customer 360&#730;
          </span>
          <div id="msg"></div>
          <div class="wrap-input100 validate-input" data-validate = "">
            <input class="input100" type="text" name="username" id="username" placeholder="Username"  autocomplete="off">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" type="password" name="upwd" id="upwd" placeholder="Password" autocomplete="new-password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>
          
          <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn" name="submit_button" id="submit_button">
              Login
            </button>
          </div>

          <!-- <div class="text-center p-t-12">
            <span class="txt1">
            <input type="checkbox" class="remember" name="remember me"> Remember Me
            </span>
            <a class="txt2" href="#">
              Forgot Password?
            </a>
          </div>
 -->
        </form>
      </div>
    </div>
  </div>
  <!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script type="text/javascript">
  
$(document).ready(function() {
    $('#submit_button').on('click', function(e) {
        e.preventDefault();
        $("#loginForm").valid();
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
              }else if(data == 'unauthorized'){
                window.location = '<?php echo base_url();?>login/unauthorized';
              }else{
                $('#msg').html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>'+data+'</div>');
              }
            }
          });
        }else{
          return false;
          }
        // }
      });

    $("#loginForm").validate({
          rules: {
            username: {
              required: true
            },
            upwd: {
              required: true,
              maxlength: 15,
              minlength: 6
            },
            agree: "required"
          },
          messages: {
            username:{
              required: "Please enter username.",
            },
            
            upwd: {
              required: "Please enter password.",
              maxlength: "Your password must be at least 6 characters long"
            },
          },
            submitHandler: function(form) {
                form.submit();
                }
          
        });
  });
        

</script>

  

</body>
</html>