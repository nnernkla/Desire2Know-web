<?php include('includes/adminHeader.html'); ?>

        <div class="gridbox gridmain">

            <div class="main">
            
    <h2> <font size="2">Enter New Course Information: </font> </h2>
    
<form action="" method="get">    
	<table style="width:10%">
  
		<tr>	
  			<td>  Course ID:<br>
  				<input type="text" name="CourseID" id=CourseID;> 
  			</td>
  			<br>  
  			<td>Course capacity:<br>
  				<input type="text" name="Coursecapacity" id=Coursecapacity;>
  			<br> 
  		</tr>  
  
  <tr>	
  <td>  Course Name:<br>
  	<input type="text" name="CourseID" id=CourseID;> 
  	</td>
  	<br>  
  	<td>Waitlist Size:<br>
  	<input type="text" name="Coursecapacity" id=Coursecapacity;> 
  	<br> 
  </tr>  
  
  <tr>	
  	<td>    
  		Semester:<br>
  		<select>
  			<option value="Select">Select</option>
  			<option value="Fall 16">Fall 2016</option>
  			<option value="Spring 16">Spring 2016</option>
  			<option value="Summer 16">Summer 2016</option>
  		</select>
  	</td>
  	
  	<td>
  		Day:<br>
  		<select>
  			<option value="Select">Select</option>
  			<option value="Monday">Monday</option>
  			<option value="Tuesday">Tuesday</option>
  			<option value="Wednesday ">Wednesday </option>
  			<option value="Thursday ">Thursday </option>
  			<option value="Friday ">Friday </option>
  			<option value="Saturday ">Saturday</option>
  			<option value="MWF">MWF </option>
  			<option value="MW">MW </option>
  			<option value="TTR ">TTHUR </option>
  		</select>
  	</td>
  	<td>
  		Time:<br>
  			<input type="text" id="datetime24"  name="datetime" value=" 00:00">
  	</td>  
  </tr>
 
  	
</table>    
  	
  	<br>
  <textarea rows="5" cols="50">
Description/ comments.
</textarea>

	<br><br><button type="submit" value="Submit">Submit</button>
	<button type="Reset" value="Reset">Clear</button>
 </form> 	
<?php include('includes/footer.html'); ?>
 