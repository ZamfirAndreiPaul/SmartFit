<script src="js/jquery.min.js"></script>

<!--MACRO FUNCTION START -->

<script type="text/javascript">

											function CalcCalories()
											{
												
												let age = document.getElementById("age").value;
												let sex = document.querySelector('input[name="sex"]:checked').value;
												let height = document.getElementById("height").value;
												let weight = document.getElementById("weight").value;
												let goal = document.querySelector('input[name="goal"]:checked').value;
												let activity = document.querySelector('input[name="activity"]:checked').value;
												let protein = 0;
												let calories = 0;
												let carbo = 0;
												let fat = 0;
												
												if(goal === "fat")
												{
													if(age < 18)
													{
														if(sex === "male")
														{
															if(weight > 100)
															{
																if(activity === "light" || activity === "moderat")
																{
																	protein = parseFloat(weight)*0.8;
																	calories = 1500-parseInt(weight/3);
																	carbo = 200-parseInt(weight/3);
																	fat = 100-parseInt(weight/3);
																}
															}
														}
													}
												}
												
												if(goal === "fat")
												{
													if(age < 18)
													{
														if(sex === "male")
														{
															if(weight > 100)
															{
																if(activity === "very" || activity === "extra")
																{
																	protein = parseFloat(weight)*1.3;
																	calories = 1700-parseInt(weight/2.5);
																	carbo = 230-parseInt(weight/2.5);
																	fat = 130-parseInt(weight/2.5);
																}
															}
														}
													}
												}
												
												let table = document.getElementById("tableRez");
												let row = table.insertRow(1);
												let cell1 = row.insertCell(0);
												let cell2 = row.insertCell(1);
												let cell3 = row.insertCell(2);
												let cell4 = row.insertCell(3);
												cell1.innerHTML = calories;
												cell2.innerHTML = carbo;
												cell3.innerHTML = parseInt(protein);
												cell4.innerHTML = fat;
											}
											
</script>

<!--MACRO FUNCTION END -->

<script>
		
		$(document).ready(function(){
		  $("#button-div1").click(function(){
			$("#MAINP").slideToggle();
			$("#CARDP").slideUp();
			$("#MACROP").slideUp();
			$("#EXERP").slideUp();
			$("#FOODP").slideUp();
			$("#SUPPP").slideUp();
		  });
		});
		
		$(document).ready(function(){
		  $("#button-div2").click(function(){
			$("#CARDP").slideToggle();
			$("#MAINP").slideUp();
			$("#MACROP").slideUp();
			$("#EXERP").slideUp();
			$("#FOODP").slideUp();
			$("#SUPPP").slideUp();
		  });
		});
		
		$(document).ready(function(){
		  $("#button-div3").click(function(){
			$("#MACROP").slideToggle();
			$("#CARDP").slideUp();
			$("#MAINP").slideUp();
			$("#EXERP").slideUp();
			$("#FOODP").slideUp();
			$("#SUPPP").slideUp();
		  });
		});
		
		$(document).ready(function(){
		  $("#button-div4").click(function(){
			$("#EXERP").slideToggle();
			$("#MACROP").slideUp();
			$("#CARDP").slideUp();
			$("#MAINP").slideUp();
			$("#FOODP").slideUp();
			$("#SUPPP").slideUp();
		  });
		});
		
		$(document).ready(function(){
		  $("#button-div5").click(function(){
			$("#FOODP").slideToggle();
			$("#EXERP").slideUp();
			$("#MACROP").slideUp();
			$("#CARDP").slideUp();
			$("#MAINP").slideUp();
			$("#SUPPP").slideUp();
		  });
		});
		
		$(document).ready(function(){
		  $("#button-div6").click(function(){
			$("#SUPPP").slideToggle();
			$("#FOODP").slideUp();
			$("#EXERP").slideUp();
			$("#MACROP").slideUp();
			$("#CARDP").slideUp();
			$("#MAINP").slideUp();
		  });
		});

</script>

		<main style="background-color:#efefef">
		
			<!-- BUTTONS DIV START -->
			
			<div class="row" style="padding-top:20px;"></div>
			<div class="container" style="padding-top:10px;padding-bottom:10px;background-color:#80ad68;">
				<div class="row">
				
					<button id="button-div1" class="bbutons" style="margin:0 auto;">Main Page</button>
					<button id="button-div2" class="bbutons" style="margin:0 auto;">Card Generator</button>
					<button id="button-div3" class="bbutons" style="margin:0 auto;">Marco Calculator</button>
					<button id="button-div4" class="bbutons" style="margin:0 auto;">Exercices</button>
					<button id="button-div5" class="bbutons" style="margin:0 auto;">Food</button>
					<button id="button-div6" class="bbutons" style="margin:0 auto;">Supplements</button>
					
				</div>
			</div>
			
			<!-- BUTTONS DIV END -->
			
			<!-- MAIN PAGE START -->
			
				<div class="container" id="MAINP" style="background-color:white;margin-top:20px;">
				
					<div class="row" style="padding-top:30px;">
					
						<h2 style="margin:0 auto;">Hello <?php echo $_SESSION['userUid'] ?> , have a nice day!</h2>
					
					</div>
				
					<div class="row" style="padding-top:30px;padding-bottom:30px;">
					
						<iframe style="margin: 0 auto;" src="http://free.timeanddate.com/clock/i6ruahfr/n49/tlro/fn6/fs16/fc80ad68/tc000/ftb/pa9/tt0/th1/ts1/ta1/tb4" frameborder="0" width="268" height="58" align="center"></iframe>
					
					</div>
					
					<div class="row">
					
						<!-- weather widget start --><div style="margin: 0 auto;"><div id="m-booked-weather-bl250-78843"> <div class="booked-wzs-250-175 weather-customize" style="background-color:#137AE9;width:160px;" id="width1"> <div class="booked-wzs-250-175_in"> <div class="booked-wzs-250-175-data"> <div class="booked-wzs-250-175-left-img wrz-01"> <a target="_blank" href="https://www.booked.net/"> <img src="//s.bookcdn.com/images/letter/logo.gif" alt="booked.net" /> </a> </div> <div class="booked-wzs-250-175-right"> <div class="booked-wzs-day-deck"> <div class="booked-wzs-day-val"> <div class="booked-wzs-day-number"><span class="plus">+</span>19</div> <div class="booked-wzs-day-dergee"> <div class="booked-wzs-day-dergee-val">&deg;</div> <div class="booked-wzs-day-dergee-name">C</div> </div> </div> <div class="booked-wzs-day"> <div class="booked-wzs-day-d">H: <span class="plus">+</span>19&deg;</div> <div class="booked-wzs-day-n">L: <span class="plus">+</span>16&deg;</div> </div> </div> <div class="booked-wzs-250-175-info"> <div class="booked-wzs-250-175-city">Bucharest </div> <div class="booked-wzs-250-175-date">Wednesday, 22 May</div> <div class="booked-wzs-left"> <span class="booked-wzs-bottom-l">See 7-Day Forecast</span> </div> </div> </div> </div> <a target="_blank" href="https://www.booked.net/weather/bucharest-18294"> <table cellpadding="0" cellspacing="0" class="booked-wzs-table-250"> <tr> <td>Thu</td> <td>Fri</td> <td>Sat</td> <td>Sun</td> <td>Mon</td> <td>Tue</td> </tr> <tr> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-01"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>24&deg;</td> <td class="week-day-val"><span class="plus">+</span>24&deg;</td> <td class="week-day-val"><span class="plus">+</span>25&deg;</td> <td class="week-day-val"><span class="plus">+</span>26&deg;</td> <td class="week-day-val"><span class="plus">+</span>30&deg;</td> <td class="week-day-val"><span class="plus">+</span>30&deg;</td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>14&deg;</td> <td class="week-day-val"><span class="plus">+</span>13&deg;</td> <td class="week-day-val"><span class="plus">+</span>14&deg;</td> <td class="week-day-val"><span class="plus">+</span>15&deg;</td> <td class="week-day-val"><span class="plus">+</span>18&deg;</td> <td class="week-day-val"><span class="plus">+</span>17&deg;</td> </tr> </table> </a> </div></div> </div> </div><script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-widget-275.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-weather-bl250-78843'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } </script> <script type="text/javascript" charset="UTF-8" src="https://widgets.booked.net/weather/info?action=get_weather_info&ver=6&cityID=18294&type=3&scode=124&ltid=3457&domid=w209&anc_id=3385&cmetric=1&wlangID=1&color=137AE9&wwidth=160&header_color=ffffff&text_color=333333&link_color=08488D&border_form=1&footer_color=ffffff&footer_text_color=333333&transparent=0"></script><!-- weather widget end -->
					
					</div>
					
					<div class="row" style="padding-top:20px;padding-bottom:20px;">
					
						<h4 style="margin:0 auto">The occupancy level of the gym : <b style="color:#f2cc26;"> Medium</b></h4>
					
					</div>
				
				</div>
			
			<!-- MAIN PAGE END -->
			
			
			<!-- CARD PAGE START-->
			
				<div class="row" id="CARDP">
					<div class="container" style="background-color:white">
					
						<div class="row">
						
							<div style="margin:0 auto;padding-top:10px;padding-bottom:10px;position:relative;">
								<div style="text-align:left;">
									
									<h3 style="margin-bottom:10px;text-align:center">Welcome to Card generator!</h3>
									<h4 style="margin-bottom:30px;text-align:center">Press CREATE for a new card</h4>
									
									<img src="images/Card.png" alt="" style="margin-bottom:20px;"/> 
									
									<div class="text-block"><p><?php echo $_SESSION['userUid'] ?></p></div>
									<div class="text-block2"><p><?php echo $_SESSION['userNr'] ?></p></div>
									
									<div class="cod-block"><img src="images/cod-bare.png" alt="" style="width: 100px;height: 50px;"/></div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			
			<!-- CARD PAGE END -->
			
			
			<!-- MACRO PAGE START -->
			
				
				<div class="row" id="MACROP">
					<div class="container" style="background-color:white">
					
						<div class="row">
						
							<div style ="margin:0 auto;padding-top:10px;padding-bottom:10px;">
								<div style="text-align:left;">
									
									<h3 style="margin-bottom:10px;text-align:center">Welcome to Macronutrient calculator!</h3>
									<h4 style="margin-bottom:30px;text-align:center">Insert your info below</h4>
								
									<b style="color:#80ad68">AGE:</b><br />
									<input type="text" name="age" id="age" style="margin-bottom:10px;"/><br />
									
									<b style="color:#80ad68">SEX:</b><br />
									<input type="radio" name="sex" id="sex" value="male" checked> Male<br>
									<input type="radio" name="sex" id="sex" style="margin-bottom:10px;" value="female"> Female<br>
									
									<b style="color:#80ad68">HEIGHT:</b><br />
									<input type="text" name="height" id="height" style="margin-bottom:10px;"/><br />
									
									<b style="color:#80ad68">WEIGHT:</b><br />
									<input type="text" name="weight" id="weight" style="margin-bottom:10px;"/><br />
									
									<b style="color:#80ad68">GOAL:</b><br />
									<input type="radio" name="goal" id="goal" value="fat" checked> Fat lose<br>
									<input type="radio" name="goal" id="goal" value="maintenance"> Mainteneance<br>
									<input type="radio" name="goal" id="goal" style="margin-bottom:10px;" value="muscle"> Muscle Gainz<br>
									
									<b style="color:#80ad68;">ACTIVITY LEVEL:</b><br />
									<input type="radio" name="activity" id="activity" value="light" checked> Lightly active (moderate exercise but sedentary job)<br>
									<input type="radio" name="activity" id="activity" value="moderat"> Moderately active (intense exercise but sedentary job)<br>
									<input type="radio" name="activity" id="activity" value="very"> Very active (moderate exercise and active job)<br>
									<input type="radio" name="activity" id="activity" style="margin-bottom:30px;" value="extra"> Extra active (intense exercise and active job)<br>
									
									
									<button id="submit-macro" class="bbutons" onclick="CalcCalories()">CALCULATE</button>
									
									
									<table border="1" style="margin-top:50px;" class="rez-table" id="tableRez">
										<tr>
											<td>Calories</td>
											<td>Carbohydrate</td>
											<td>Protein</td>
											<td>Fat</td>
										</tr>
									</table>
									
								</div>
								
							</div>
							
						</div>
					
					</div>
				</div>
				
			
			<!-- MACRO PAGE END -->
			
			
			<!-- EXERCICES PAGE START -->
			
				<div class="row" id="EXERP">
					<div class="container" style="background-color:white">
						<div class="row">
							<div style="margin:0 auto;padding-top:20px;padding-bottom:20px;">
								<h3 style="margin-bottom:10px;text-align:center">Welcome to Exercices area!</h3>
								<h4 style="margin-bottom:30px;text-align:center">Choose from below</h4>
								
								<a href="https://www.youtube.com/watch?v=eGo4IYlbE5g"><img src="images/Ex1.png" alt="" style="width:150px;height:150px;maring:0 auto"/></a>
								<a href="https://www.youtube.com/watch?v=EEFHHOCfHgw"><img src="images/Ex2.png" alt="" style="width:150px;height:150px;maring:0 auto"/></a>
								<a href="https://www.youtube.com/watch?v=IODxDxX7oi4"><img src="images/Ex3.png" alt="" style="width:150px;height:150px;maring:0 auto"/></a>
								
							</div>
						</div>
					</div>
				</div>
			
			<!-- EXERCICES PAGE END -->
			
			
			<!-- FOOD PAGE START -->
			
				<div class="row" id="FOODP">
						<div class="container" style="background-color:white">
						
							<div class="row">
							
								<div style="margin:0 auto;padding-top:10px;padding-bottom:10px;">
									<div style="text-align:left;">
										
										<h3 style="margin-bottom:10px;text-align:center">Welcome to Food area!</h3>
										<h4 style="margin-bottom:30px;text-align:center">Choose from below</h4>
										<div class="row">
											<div class="col-md-4">
												<div style="margin:0 auto;">
													<a href="https://www.foodpanda.ro/restaurant/v3bl/south-burger-rahova"><img src="images/food1.jpg" alt="" style="width:150px;height:150px;maring:0 auto"/></a>
													<p>Calories: 1500kcal</p>
													<p>Protein: 80</p>
													<p>Carbohydrate: 100</p>
													<p>Fat: 30</p>
												</div>
											</div>
											<div class="col-md-4">
												<div style="margin:0 auto;">
													<a href="https://www.foodpanda.ro/restaurant/v8xu/salad-box-afi"><img src="images/food2.jpg" alt="" style="width:150px;height:150px;maring:0 auto"/></a>
													<p>Calories: 1500kcal</p>
													<p>Protein: 80</p>
													<p>Carbohydrate: 100</p>
													<p>Fat: 30</p>
												</div>
											</div>
											<div class="col-md-4">
												<div style="margin:0 auto;">
													<a href="https://www.foodpanda.ro/restaurant/v4kl/one-minute-pizza"><img src="images/food3.jpg" alt="" style="width:150px;height:150px;maring:0 auto"/></a>
													<p>Calories: 1500kcal</p>
													<p>Protein: 80</p>
													<p>Carbohydrate: 100</p>
													<p>Fat: 30</p>
												</div>
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
				</div>
			
			<!-- FOOD PAGE END -->
			
			
			<!-- SUPP PAGE START -->
			
				<div class="row" id="SUPPP">
						<div class="container" style="background-color:white">
						
							<div class="row">
							
								<div style="margin:0 auto;padding-top:10px;padding-bottom:10px;">
									<div style="text-align:left;">
										
										<h3 style="margin-bottom:10px;text-align:center">Welcome to Supplements area!</h3>
										<h4 style="margin-bottom:30px;text-align:center">Choose from below</h4>
										
										<div class="row">
											<div class="col-md-4">
												<div style="margin:0 auto;">
													<a href="https://www.megaproteine.ro/Performanta-sportiva/Animal-Pak/"><img src="images/supp1.jpg" alt="" style="width:150px;height:150px;maring:0 auto"/></a>
													<p style="text-align:center;">Price: 168lei</p>
												</div>
											</div>
											<div class="col-md-4">
												<div style="margin:0 auto;">
													<a href="https://www.megaproteine.ro/Proteine/Proteina-din-zer-ON-100-Whey-Gold-Standard-2-2-kg/"><img src="images/supp2.jpg" alt="" style="width:150px;height:150px;maring:0 auto"/></a>
													<p style="text-align:center;">Price: 218lei</p>
												</div>
											</div>
											<div class="col-md-4">
												<div style="margin:0 auto;">
													<a href="https://www.megaproteine.ro/Creatina/Creatina-monohidrata-micronizata-ON-Micronised-Creatine-Powder/"><img src="images/supp3.jpg" alt="" style="width:150px;height:150px;maring:0 auto"/></a>
													<p style="text-align:center;">Price: 57lei</p>
												</div>
											</div>
										</div>
									
									</div>
								</div>
							</div>
						</div>
				</div>
			
			<!-- SUPP PAGE END -->
			
			<div class="row" style="padding-top:20px;"></div>

		</main>
