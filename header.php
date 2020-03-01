<?php
	session_start();
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="descripion" content="fitness" />
	<meta name=viewport content="width=device-width, initial-scale=1"/>
	<title></title>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/bootstrap.css" />
	
	<script>
		function redirectApp() {
		  location.replace("webapplication.php")
		}
	</script>
	
</head>
<body>
	
	<header style="background-color:#80ad68">
	
		<nav>
			<div class="row">
				<div class="col-md-6">
					<a href="index.php">
						<img src="images/logo-header.png" alt="" style="width:80px;height:40px;margin-left:20px;margin-top:10px;"/>
					</a>
				</div>
				
				<div class="col-md-6" style="margin-top:10px;text-align:right;padding-right:50px;">
							<ul class="menu-list">
								<?php 
									if(isset($_SESSION['userId'])){
										echo '<li>
												<form action="includes/logout.inc.php" method="post">
													<button class="btn-header" type="submit" name="logout-submit">Logout</button>
												</form>
											  </li>
											  <li>
													<button class="btn-header" id="app-button" onclick="redirectApp()">Application</button>
											  </li>
											  
											  ';
											  
									}
									else
									{
										echo '<li>
												<form action="includes/login.inc.php" method="post" class="form-inline">
													<input class="inp-header" type="text" name="mailuid" placeholder="Username/Email..." />
													<input class="inp-header" type="password" name="pwd" placeholder="Password..." />
													<button class="btn-header" type="submit" name="login-submit">Login</button>
												</form>
											  </li>';
									}
								?>
							</ul>
						
					
					</div>
				</div>
			</div>
			
		</nav>
	
	</header>
	
</body>
</html>