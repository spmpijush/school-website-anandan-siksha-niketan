<?php 
    if($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage"); 
    $pageTitle = "Admin Login";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo URL ?>assets/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo URL ?>assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo URL ?>assets/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo URL ?>assets/favicon/site.webmanifest">

  	<title> <?php echo $pageTitle; ?> </title>

	<!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
	<!-- IonIcons -->
	<!-- Theme style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo URL ?>assets/adminlte/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
	<?php
		if(isset($this->css))
		{
			foreach ($this->css as $css) {
				echo '<link href="' . URL . $css . '" rel="stylesheet">';
			}
		}
	?>
</head>

<body class="hold-transition" style="background:#fafafa;">

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-4 col-offset-2 mt-5">

            <div class="card">
                <div class="card-body">
                    <div class="text-center fs-2">
                        <i class="fa fa-user-lock"></i>
                    </div>
                    <h1 class="card-header text-center"> Admin Panel </h1>
                    <div class="text-center"> Login </div>

                    <form action="#">
                        <div class="form-group">
                            <label for=""> User id </label>
                            <input type="text" class="form-control" 
                                id="user_id" name="user_id" autofocus="true">
                        </div>
            
                        <div class="form-group">
                            <label for=""> Password </label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
            
                        <div class="form-group">
                            <button type="submit" id="login" class="btn btn-primary btn-block"> Login </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Main Footer -->
<footer class="footer login-footer">
    <div class="container">
        <strong>Copyright &copy; <?php echo date('Y'); ?>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 0.0.1
        </div>
    </div>
</footer>


<!-- jQuery -->
<script src="<?php echo URL ?>assets/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo URL ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="<?php echo URL ?>assets/adminlte/js/adminlte.js"></script>
<?php  
    if(isset($this->js))
    {
        foreach ($this->js as $js) {
            echo '<script type="text/javascript" src="' . URL . $js . '"></script>';
        }
    }
?>
</body>
</html>