<!DOCTYPE html>
<html lang="">
  <head>
    <title>Laravel's App</title>
    <meta charset=utf-8>
    <meta name=description content="">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=9">
    <meta property="og:site_name" content="Linkerise"/>  
    <!-- Bootstrap CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <link href="<?php echo e(URL::asset('css/style.css')); ?>" rel="stylesheet">   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  </head>
  <body>
  	<nav></nav>
  	<div id="container-fluid">
		<div class="row-fluid">
				<!-- -->
				<?php echo $__env->yieldContent('home-content'); ?>
        <?php echo $__env->yieldContent('menu-content'); ?>
        <?php echo $__env->yieldContent('orderdone-content'); ?>
				<!-- -->
		</div>


        <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;"><?php echo e(csrf_field()); ?></form>

	</div>
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>


  </body>
</html>
