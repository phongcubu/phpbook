<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
include('../database/connectdb.php');
?>
<?php
//  session_destroy()
	if(isset($_POST['login']))
	{
		$email = $_POST['Email'];
		$password = md5($_POST['Password']);
		
	 	//  $password = $_POST['Password'];
		if($email==''|| $password=='')
		{
			echo '<p>Bạn chưa nhập tài khoản hoặc mật khẩu!</p>';
			header('Location: login.php');
		}
		else{
	 		$sql_select_admin = mysqli_query($con,"SELECT * FROM tbl_admin WHERE email='$email' AND  password='$password' LIMIT 1");
			$count = mysqli_num_rows($sql_select_admin);
			$row_login = mysqli_fetch_array($sql_select_admin);
			
			if($count >0){
			$_SESSION['login'] = $row_login['admin_name'];
			$_SESSION['admin_id'] = $row_login['admin_id'];
			
			header('Location:admin.php');
			}else{
			echo 'Tài khoản hoặc mật khẩu của bạn không chính xác.';
			header('Location: index.php');
			}
			
		}
	}
?>
<!DOCTYPE html>
<head>
<title>Login Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>

<div class="log-w3">
<div class="w3layouts-main">
	<h2>Đăng nhập</h2>
		<form action="#" method="POST">
			<input type="email" class="ggg" name="Email" placeholder="E-MAIL" required="">
			<input type="password" class="ggg" name="Password" placeholder="PASSWORD" required="">
			<span><input type="checkbox" />Nhớ tài khoản</span>
			<h6><a href="#">Quên mật khẩu?</a></h6>
				<div class="clearfix"></div>
				<input type="submit" value="Đăng nhập" name="login">
		</form>
</div>
</div>


<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
