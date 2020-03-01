<?php

	require "header.php";

?>

<style>
<?php include 'css/style.css'; ?>
<?php include 'css/bootstrap.css'; ?>
</style>

		<?php 
			
			
			if(isset($_SESSION['userId'])){
				if(isset($_SESSION['userNr'])){
					echo file_get_contents("app.php");
				}
				else
				{
					echo file_get_contents("notlogin2.php");
				}
			}
			else
			{
				echo file_get_contents("notlogin1.php");
			}
			
			
		?>
		

<?php

	require "footer.php";

?>