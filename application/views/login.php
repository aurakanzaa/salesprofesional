<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Halaman Login </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>assets/gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url(); ?>assets/gentelella/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/gentelella/build/css/custom.min.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/gentelella/vendors/jquery/dist/jquery.min.js"></script>
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

        
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <center>
                    <img style="width:100%" src="<?php echo base_url(); ?>assets/gentelella/images/logologo.png" alt="">
            </center>
            <form method="post" id="frmLogin">
              <h1>Login</h1>
              <div id="pesan_login" >
                 
              </div>
              <div>
                <input id="username" type="text" class="form-control" name="username" placeholder="Username" required="" />
              </div>
              <div>
                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required="" />
              </div>
              <div>
              <input type="submit" value="Login" class="btn btn-default submit">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  
                  <p>Copyright © 2019 PT. Pegadaian - Persero. All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <center>
                    <img style="width:100%" src="<?php echo base_url(); ?>assets/gentelella/images/logologo.png" alt="">
            </center>
            <form>
              <h1>Daftar Akun</h1>
              <div id="pesan" >
                 
              </div>
              <div>
                <input type="text" id="nama_r" class="form-control" placeholder="Nama" name="nama" required="" />
              </div>
              <div>
                <input type="text" id="username_r" class="form-control" placeholder="Username" name="username" required="" />
              </div>
              <div>
                <input type="password" id="password_r" class="form-control" placeholder="Password" name="pasword" required="" />
              </div>
              <div>
                <input type="text"  id="nohp_r" class="form-control" placeholder="Handphone" name="nohp" required="" />
              </div>
              <div>
                <a class="btn btn-default" id="daftar">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  
                  <p>Copyright © 2019 PT. Pegadaian - Persero. All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
  <script>
    $("#daftar").click(function( event ) {
      event.preventDefault();

      var data ={
        nama : $("#nama_r").val(),
        username : $("#username_r").val(),
        password : $("#password_r").val(),
        nohp : $("#nohp_r").val()
      }
      $.ajax({
        url : "https://api.thegadeareamalang.com/bpo/index.php/register/",
        type: "POST",
        dataType: "JSON",
        data:data,
        success:function(respone){
          if(respone[0]==="data_error"){
            $("#pesan").html(
              '<div id="pesan" class="alert alert-danger"><strong>Warning!</strong> Pendaftaran Gagal Ganti Data Anda.</div>'
            )
          }else{
            $("#pesan").html(
              '<div id="pesan" class="alert alert-success"><strong>Berhasil</strong> Pendaftaran Berhasil.</div>'
            )
            setTimeout(function(){ $(location).attr('href', "#signin"); }, 1000);
            
          }
        },
        error:function(xhr,status,err){
          console.log(status)
        }
      })
    });


$('#frmLogin').submit(function(e) {

e.preventDefault();
var username = $("#username").val();
var password = $("#password").val();
var base_url = "<?= base_url('')?>"

$.ajax({
   url: base_url+'index.php/Home/login_aksi',
   type: 'POST',
   data: {username:username,password:password},
   error: function() {
      alert('Something is wrong');
   },
   success: function(respone) {
       if(respone==="sukses"){
        $("#pesan_login").html(
              '<div id="pesan_login" class="alert alert-success"><strong>Berhasil</strong> Login Berhasil Berhasil.</div>'
        )
        setTimeout(function(){ $(location).attr('href', base_url+"index.php/Home"); }, 1000);
       }else{
        $("#pesan_login").html(
              '<div id="pesan_login" class="alert alert-danger"><strong>Warning!</strong> Login Gagal Periksa Data Anda.</div>'
        )
       }
   }

});
});
</script>
</html>
