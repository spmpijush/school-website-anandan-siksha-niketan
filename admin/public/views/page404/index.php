<?php if($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage"); 
$pageTitle = "Page not found";
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	
</head>

<body class="hold-transition" style="background:#fafafa;">

<div class="container">

    <div class="row mt-5">
        <div class="col-md-12 text-center">
            <h1>The page you are looking for does't exist!</h1>
        </div>

        <div class="col-md-4 offset-4 mt-5 mb-5">
            <img src="<?php echo URL ?>assets/images/undraw_page_not_found_su7k.svg" alt="" 
                class="img-fluid">
        </div>
    </div>
</div>


</body>
</html>