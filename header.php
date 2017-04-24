<!DOCTYPE html>
<html>
<head>
	<title>Kimo</title>

	<!-- META -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="initial-scale=1, width=device-width, user-scalable=yes">
	
	<!-- STYLE -->
 	<link rel="stylesheet" type="text/css" href="assets/css/libs/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/libs/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">


	<!-- FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

</head>
<body>
<header >
	<nav class="navbar " style="background-color: #555b7a; color: white;">
  <div id="navigator" class="container-fluid ">
    <div class="navbar-header" >
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">                       
     	<span class="glyphicon glyphicon-th-list"></span>
     </button>
      <a class="navbar-brand" href="index.php">Kimo</a>
    </div>
    <ul class=" container clearfix collapse navbar-collapse nav navbar-nav navbar-right" id="myNavbar">
     					<li >	
							<a href="index.php">Home</a>
						</li>
					<li class="dropdown">
					  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Children
        												<span class="caret"></span></a>
        				<ul class="dropdown-menu">
						<li>	
							<a href="add-child.php">Add child</a>
						</li>
						<li>
							<a href="delete-child.php">Delete child</a>
						</li>
						<li>
							<a href="nearby-children.php">Nearby children</a>
						</li>
						<li>
							<a href="findkid.php">Find kid</a>
						</li>
						<li>
							<a href="statisticsP.php">Statistics</a>
						</li>
						</ul>
					</li>
						<li>	
							<a href="notification.php">Notification</a>
						</li>
						<li>
							<a href="my-profile.php">
							<span class="glyphicon glyphicon-user"></span> My Profile</a>
						</li>
						<li>
							<a href="contact.php">Contact</a>
						</li>
						<li>
							<a href="lastyear.php" >LastYearNotifications</a>
						</li>
						<li class="nav navbar-nav navbar-right">
							<a href="register.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a>
						</li>
						
    </ul>
  </div>

</nav>
</header>
