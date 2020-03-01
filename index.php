<?php

	require "header.php";

?>

<style>
<?php include 'css/style.css'; ?>
<?php include 'css/bootstrap.css'; ?>
</style>


	<main>
	
		<?php 
			if(isset($_SESSION['userId'])){
				echo file_get_contents("prez.php");
			}
			else
			{
				echo file_get_contents("prez.php");
			}
		?>
	
	</main>
	
<?php

	require "footer.php";

?>