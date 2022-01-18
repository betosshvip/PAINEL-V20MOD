<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PAINEL | Login Expirado</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<style>
@media (max-width: 320px) {
	.reduzcel{
	max-width:90%;
	}
}
</style>
<section id="wrapper">
    <div class="login-register" style="background-image: linear-gradient(0deg, #ffffff, #1e88e5);">        
        <div class="login-box card">
            <div class="card-body">
<div align="center" class="login-box">
<br>
  <div align="center" class="login-logo">
    <a ><img src="../app-assets/images/pages/Tempo.gif" width="180" height="295" class="reduzcel" border="0"></a>
  </div>
  <!-- /.login-logo -->
  <div align="center" class="login-box-body">
    <p class="login-box-msg">Tempo de inatividade expirou Favor <br>
    Entre com os dados para realizar nova  <b>Sessão </b></p>

    <form action="validacao.php" method="post"   >
      <div class="row">
        <div class="col-xs-8"></div>
        <!-- /.col --><!-- /.col -->
      </div>
      <!-- <div align="center"><b><a href="../">Entrar</a></b></div> -->
	  <a href="../" type="button" class="btn btn-warning active">ENTRAR</a>
<br>
<br><br>
<center><b> © <script>document.write(new Date().getFullYear())</script> | Direitos Reservados </b> <i class="fa fa-linux"></i></center>
</section>
    </form>
	

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../plugins/iCheck/icheck.min.js"></script>
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
