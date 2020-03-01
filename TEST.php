<?php

	require "header.php";

?>

<style>
<?php include 'css/style.css'; ?>
<?php include 'css/bootstrap.css'; ?>
</style>


	<main>
	<!-- Description START -->
	
		<div class="row" style="padding-top:20px;padding-bottom:20px;">
			<div class="col-md-8">
				<div class="container">
					
					<h3 style="text-align:center; color:#80ad68">Welcome to SmartFit!</h3>
					<p style="text-align:center;color:#80ad68;font-size:18px;">Our Gym has the newest and most innovative appliances in the field of fitness.</p>
					<p style="text-align:center;color:#80ad68;font-size:18px;">We have the best and most trained instructors in the field of fitness and bodybuilding.</p>
					<p style="text-align:center;color:#80ad68;font-size:18px;">Our Gym can be found in several places in the city and in several shopping centers.</p>
					<p style="text-align:center;color:#80ad68;font-size:18px;">For us and your team your health is the most important, we want you to feel good in your body and be healthy.</p>
					<p style="text-align:center;color:#80ad68;font-size:18px;">Our Gym encourages a healthy lifestyle with no banned substances.</p>
					<p style="text-align:center;color:#80ad68;font-size:18px;">Our room has the newest and most innovative system for monitoring the factors that influence your health and physical shape.</p><br><br><br>
					<p style="text-align:center;color:#80ad68;font-size:18px;text-decoration:underline;">To register your card to the application, go to the button below.</p>
					<div style="text-align:center;"><a href="signup.php"><button class="btn-signup">Signup</div></a>
					
				</div>
			</div>
			<div class="col-md-4">
			
				<img src="images/right-desc.png" alt="" />
			
			</div>
		</div>
	
	<!-- Description END -->
	
	
	<!-- Slide Show START -->
		<div class="row" style="background-color:#80ad68;padding-top:20px;padding-bottom:20px;">
			
			<div class="container">
			
				<div class="div-slide">
					<h3 style="margin-bottom:20px;color:white;">Presentation of the Gym</h3> 
					<img src="images/gymprincipal.jpg" id="slide" width="600" height="400" style="border-radius:10px;border-color:white;"><br> 
					<a class="a-slide" id="back" style="color:white">&larr; Prev</a> <a style="color:white">|</a> 
					<a class="a-slide" id="next" style="color:white">Next &rarr;</a> 
				</div>	
				
				<script src="js/jquery.min.js"></script>
				<script>
					let images = ["gym1.jpg", "gym2.jpg"]; 
					let index = 0; 
					let btnNext = $('#next');
					let btnBack = $('#back');
					let slide = $('#slide');
					
					function back() { 
						if (index > 0) { 
							index--; 
							// "images/" + images[index]
							
							slide.animate({
							
								opacity: '0'
							
							},1200, function(){
								
								slide.attr('src' , "images/" +images[index]);
								slide.css({'opacity': '1'});				
							
							});
						} 
					} 
					
					function next() { 
						if (index < images.length - 1) { 
							index++; 
							// "images/" + images[index]
							
							slide.animate({
							
								opacity: '0'
							
							},1200, function(){
								
								slide.attr('src' , "images/" +images[index]);
								slide.css({'opacity': '1'});				
							
							});
							
						} 
					} 
					
					btnNext.on('click', next);
					btnBack.on('click' , back);
				</script>
			
			</div>
		
		</div>
		
	<!-- Slide Show END -->
	
	
	<!-- Pricing END -->
	
		<div class="row" style="margin-bottom:20px;margin-top:20px;">
			<div class="container">
				<div class="row">
					<div class="col-md-4" style="text-align:left">
						<div class="container">
						
							<div class="abonament">
							
								<h4 style="padding-top:10px;text-decoration:underline;">Silver Subscription</h4>
									<p>✓ | 12 Gyms</p>
									<p>✓ | Sauna</p>
									<p>✓ | Gym Application</p>
									<p>✗ | Aerobic</p>
									<p>✗ | 3 Pools</p>
									<p style="padding-top:10px;text-decoration:underline;font-size:20px;">Price : 45€ / month</p>
									<button class="btn-signup" style="margin-bottom:20px;">Buy it!</button>
									
							</div>
							
						</div>
					</div>
					<div class="col-md-4" style="text-align:center">
						<div class="container">
						
							<div class="abonament">
							
								<h4 style="padding-top:10px;text-decoration:underline;">Gold Subscription</h4>
								<p>✓ | 12 Gyms</p>
								<p>✓ | Sauna</p>
								<p>✓ | Gym Application</p>
								<p>✓ | Aerobic</p>
								<p>✗ | 3 Pools</p>
								<p style="padding-top:10px;text-decoration:underline;font-size:20px;">Price : 55€ / month</p>
								<button class="btn-signup" style="margin-bottom:20px;">Buy it!</button>
								
							</div>
						
						</div>
					</div>
					<div class="col-md-4" style="text-align:right">
						<div class="container">
						
							<div class="abonament">
								<h4 style="padding-top:10px;text-decoration:underline;">Platinum Subscription</h4>
								<p>✓ | 12 Gyms</p>
								<p>✓ | Sauna</p>
								<p>✓ | Gym Application</p>
								<p>✓ | Aerobic</p>
								<p>✓ | 3 Pools</p>
								<p style="padding-top:10px;text-decoration:underline;font-size:20px;">Price : 65€ / month</p>
								<button class="btn-signup" style="margin-bottom:20px;">Buy it!</button>
								
							</div>
						
						</div>
					</div>
				</div>
			</div>
		</div>
	
	<!-- Pricing END -->
	</main>
	
<?php

	require "footer.php";

?>