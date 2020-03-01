<?php

	require "header.php";

?>

<style>
<?php include 'css/style.css'; ?>
<?php include 'css/bootstrap.css'; ?>
</style>

	<main>
	
		<h1 style="text-align:center;color:#80ad68;">Signup</h1>
		<?php
			if(isset($_GET['error']))
			{
				if($_GET['error'] == "emptyfields")
				{
					echo '<p>Fill in all fields!</p>';
				}
				else if($_GET['error'] == "invalidmailuid")
				{
					echo '<p>Inavalid username and e-mail!</p>';
				}
				else if($_GET['error'] == "invaliduid")
				{
					echo '<p>Invalid username!</p>';
				}
				else if($_GET['error'] == "invalidmail")
				{
					echo '<p>Invalid e-mail!</p>';
				}
				else if($_GET['error'] == "passwordcheck")
				{
					echo '<p>Your passwords do not match!</p>';
				}
				else if($_GET['error'] == "usertaken")
				{
					echo '<p>User is already taken!</p>';
				}
			}
			else if(isset($_GET['signup']) == "success")
			{
				echo '<p>Signup successful!</p>';
			}
		?>
		
		<div class="container" style="text-align:center;">
			<form action="includes/signup.inc.php" method="post">
			
				<input type="text" class="inp-header" name="uid" placeholder="Username"/><br /><br />
				<input type="text" class="inp-header" name="mail" placeholder="E-mail"/><br /><br />
				<input type="password" class="inp-header" name="pwd" placeholder="Password"/><br /><br />
				<input type="password" class="inp-header" name="pwd-repeat" placeholder="Repeat password"/><br /><br />
				<button type="submit" name="signup-submit" class="bbutons">Signup </button>
				
			</form>
		</div>
	
	</main>
	
<?php

	require "footer.php";

?>