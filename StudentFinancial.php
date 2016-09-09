<?php include('includes/studentHeader.html'); ?>					
					
					
					<div class="gridbox gridmain" >						
					<div style="position:relative; float:left; width:100%">
						<div class="finmenu" style="position:relative; float:left">
							<ul style="list-style-type: none; padding:0">
								<li style="border: 1px #CCC solid; padding:5px"><a href="statuspage.php">My Status</a></li>
								<li style="border: 1px #CCC solid; padding:5px"><a href="opportunities.php">Scholarship and Opportunities</a></li>
								<li style="border: 1px #CCC solid; padding:5px"><a href="StudentFinancial.php">Apply for Financial Aid</a></li>
								<li style="border: 1px #CCC solid; padding:5px"><a href="contact.php">Contact Financial Aid</a></li>
							</ul>
						</div>
						<div class="" style="position:relative; float:left; width:75%">
							<div class="main" style="margin-left:10px">
								<h3 >Application:</h3><br><br>
								<form action="action_StudentFinancial.php">
									
										<table>
											<tr>
												<td>
													<label>Available Grants:</label>
												</td>
											</tr>
											<tr>
												<td>
													<select name="Available financial aids">
														<option value="Select Financial Aid">Select Financial Aid</option>
														<option value="Select Financial Aid">Federal Pell Grant</option>
														<option value="Select Financial Aid">Federal Supplemental Educational Opportunity Grants</option>
														<option value="Select Financial Aid">Teacher Education Assistance for College and Higher Education (TEACH) Grants</option>
														<option value="Select Financial Aid">Iraq and Afghanistan Service Grants </option>
													</select>
												</td>
											</tr>
											<tr>
												<td>
													<label>Year:</label>
												</td>
											</tr>
											<tr>
												<td>
													<select name="Year">
														<option value="Select Year">Select Year</option>
														<option value="Select Year">2015</option>
														<option value="Select Year">2016</option>
														<option value="Select Year">2017</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>
													<label>Semester:</label>
												</td>
											</tr>
											<tr>
												<td>
													<select name="Semister">
														<option value="Select Semister">Select Semister</option>
														<option value="Select Semister">Summer</option>
														<option value="Select Semister">Fall</option>
														<option value="Select Semister">Spring</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>
													<label>Overall GPA:<label>
												</td>
											</tr>
											<tr>
												<td>
													<input type="text" size="12" maxlength="12" name="GPA" placeholder="0.00">
												</td>
											</tr>
											<tr>
												<td>
													<label>Have you been admitted to graduate program?</label>
												</td>
											</tr>
											<tr>
												<td>
													<input type="radio" name="select" value="yes" checked> Yes
													<input type="radio" name="select" value="no">No										
												</td>
											</tr>
											<tr>
												<td>
													<label>How would you define your educational success?</label>
												</td>
											</tr>
											<tr>
												<td>
													<textarea name="comments" rows="3" cols="40" placeholder="Maximum 250 words"></textarea>
												</td>
											</tr>
											<tr>
												<td>
													<button type="button" onclick="alert('Applied Successfully')">Submit</button>
												</td>
											</tr>
										</table>
									</form> 
							</div>
						</div>
						</div>						
					</div>
<?php include('includes/footer.html'); ?>








