<?php include('includes/studentHeader.html'); ?>		
		
		<div class="gridbox gridmain">
			<div class="main">
					<div style="position:relative; float:left; width:100%">
						<div class="finmenu" style="position:relative; float:left">
							<ul style="list-style-type: none; padding:0">
								<li style="border: 1px #CCC solid; padding:5px"><a href="statuspage.html">My Status</a></li>
								<li style="border: 1px #CCC solid; padding:5px"><a href="opportunities.html">Scholarship and Opportunities</a></li>
								<li style="border: 1px #CCC solid; padding:5px"><a href="StudentFinancial.html">Apply for Scholarship</a></li>
								<li style="border: 1px #CCC solid; padding:5px"><a href="contact.html">Contact Financial Aid</a></li>
							</ul>
						</div>
						<div class="" style="position:relative; float:left; width:75%">
							<div class="main" style="margin-left:10px">
							<form action="action_contact.php">
							<h3>Financial Aid Office Hours:</h3>
							<h2><font size="2"><legend></legend><size="2"></h2>
							
							<p><h3>Monday through Thursday: 8:30 AM-7:00 PM and Friday: 8:30 AM-4:30 PM. </h3></p> 
							<p><h3>773-442-5016</h3></p>
							
								<h3>Question?</h3>
								
							Email:<br>
							  <input type="text" name="Email" placeholder="abc@xyz.com">
							  <br>
							Phone#:<br>
							  <input type="text" name="phone#">
							  <br>
							Comments:<br>
							  <textarea name="comments" rows="3" cols="40" placeholder="Explain your question in a few words."></textarea>
							  </textarea><br>
									<button type="button" onclick="alert('Submitted Successfully')">Submit</button>
								</fieldset>	
							</fieldset>	
							</form><br><br>
						</div>
						</div>
					
					</div>
		    </div>
			
		</div>
		
<?php include('includes/footer.html'); ?>