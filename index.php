<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Employement Application</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="includes/css/bootstrap.min.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="includes/css/custom.css">

</head>

<body>
	<div class="container">
		<h1>Employment Application</h1>
		<hr>
		<p>Required fields are indicated by an asterisk (*).</p><br>

		<form name="Resume" onSubmit="return false" id="Resume" class="Resume" enctype="multipart/form-data">

			<div id="ResumeStep1">
				<h2>Basic Information - Step 1 of 14</h2>
				<div id="step1_error" class="alert alert-warning">Please ensure that you filled out each field properly.</div>
				<div class="form-group">
					<label class="control-label" for="step1_Firstname">* First Name: </label>
					<input name="step1_Firstname" required="required" class="form-control" id="step1_Firstname" placeholder="Enter your First Name">
				</div>
				<div class="form-group">
					<label class="control-label" for="step1_Lastname">* Last Name: </label>
					<input name="step1_Lastname" required="required" class="form-control" id="step1_Lastname" placeholder="Enter your Last Name">
				</div>
				<div class="form-group">
					<label class="control-label" for="step1_Phone">* Phone: </label>
					<input name="step1_Phone" required="required" class="form-control" id="step1_Phone" placeholder="Enter your 10 digit Phone Number">
				</div>
				<div class="form-group">
					<label class="control-label" for="step1_AltPhone">Alternate Phone: </label>
					<input name="step1_AltPhone" class="form-control" id="step1_AltPhone" placeholder="Enter your Alternate 10 digit Phone Number">
				</div>
				<div class="form-group">
					<label class="control-label" for="step1_Email">* Email: </label>
					<input name="step1_Email" required="required" class="form-control" id="step1_Email" placeholder="Enter your Email Address">
				</div>
				<div class="form-group">
					<label class="control-label" for="step1_Address">* Address: </label>
					<input name="step1_Address" required="required" class="form-control" id="step1_Address" placeholder="Enter your Address">
				</div>
				<div class="form-group">
					<label class="control-label" for="step1_AltAddress">Alternate Address: </label>
					<input name="step1_AltAddress" class="form-control" id="step1_AltAddress" placeholder="Enter your Alternate Address">
				</div>
				<div class="form-group">
					<label class="control-label required" for="step1_ProvState">* Province / State</label>
					<select id="step1_ProvState" name="step1_ProvState" class="form-control" required>
						<option value="">Choose one..</option>

						<optgroup label="Canada">

							<option id="CAN-AB" value="AB">Alberta (AB)</option>
							<option id="CAN-BC" value="BC">British Columbia (BC)</option>
							<option id="CAN-MB" value="MB">Manitoba (MB)</option>
							<option id="CAN-NB" value="NB">New Brunswick (NB)</option>

							<option id="CAN-NL" value="NL">Newfoundland and Labrador (NL)</option>
							<option id="CAN-NT" value="NT">Northwest Territories (NT)</option>
							<option id="CAN-NS" value="NS">Nova Scotia (NS)</option>
							<option id="CAN-NU" value="NU">Nunavut (NU)</option>
							<option id="CAN-PE" value="PE">Prince Edward Island (PE)</option>
							<option id="CAN-SK" value="SK">Saskatchewan (SK)</option>

							<option id="CAN-ON" value="ON">Ontario (ON)</option>
							<option id="CAN-QC" value="QC">Quebec (QC)</option>
							<option id="CAN-YT" value="YT">Yukon (YT)</option>

						</optgroup>

						<optgroup label="United States">

							<option id="USA-AL" value="AL">Alabama (AL)</option>

							<option id="USA-AK" value="AK">Alaska (AK)</option>
							<option id="USA-AZ" value="AZ">Arizona (AZ)</option>
							<option id="USA-AR" value="AR">Arkansas (AR)</option>
							<option id="USA-CA" value="CA">California (CA)</option>
							<option id="USA-CO" value="CO">Colorado (CO)</option>
							<option id="USA-CT" value="CT">Connecticut (CT)</option>

							<option id="USA-DE" value="DE">Delaware (DE)</option>
							<option id="USA-DC" value="DC">District of Columbia (DC)</option>
							<option id="USA-FL" value="FL">Florida (FL)</option>
							<option id="USA-GA" value="GA">Georgia (GA)</option>
							<option id="USA-GU" value="GU">Guam (GU)</option>
							<option id="USA-HI" value="HI">Hawaii (HI)</option>

							<option id="USA-ID" value="ID">Idaho (ID)</option>
							<option id="USA-IL" value="IL">Illinois (IL)</option>
							<option id="USA-IN" value="IN">Indiana (IN)</option>
							<option id="USA-IA" value="IA">Iowa (IA)</option>
							<option id="USA-KS" value="KS">Kansas (KS)</option>
							<option id="USA-KY" value="KY">Kentucky (KY)</option>

							<option id="USA-LA" value="LA">Louisiana (LA)</option>
							<option id="USA-ME" value="ME">Maine (ME)</option>
							<option id="USA-MD" value="MD">Maryland (MD)</option>
							<option id="USA-MA" value="MA">Massachusetts (MA)</option>
							<option id="USA-MI" value="MI">Michigan (MI)</option>
							<option id="USA-MN" value="MN">Minnesota (MN)</option>

							<option id="USA-MS" value="MS">Mississippi (MS)</option>
							<option id="USA-MO" value="MO">Missouri (MO)</option>
							<option id="USA-MT" value="MT">Montana (MT)</option>
							<option id="USA-NE" value="NE">Nebraska (NE)</option>
							<option id="USA-NV" value="NV">Nevada (NV)</option>
							<option id="USA-NH" value="NH">New Hampshire (NH)</option>

							<option id="USA-NJ" value="NJ">New Jersey (NJ)</option>
							<option id="USA-NM" value="NM">New Mexico (NM)</option>
							<option id="USA-NY" value="NY">New York (NY)</option>
							<option id="USA-NC" value="NC">North Carolina (NC)</option>
							<option id="USA-ND" value="ND">North Dakota (ND)</option>
							<option id="USA-OH" value="OH">Ohio (OH)</option>

							<option id="USA-OK" value="OK">Oklahoma (OK)</option>
							<option id="USA-OR" value="OR">Oregon (OR)</option>
							<option id="USA-PA" value="PA">Pennyslvania (PA)</option>
							<option id="USA-PR" value="PR">Puerto Rico (PR)</option>
							<option id="USA-RI" value="RI">Rhode Island (RI)</option>
							<option id="USA-SC" value="SC">South Carolina (SC)</option>

							<option id="USA-SD" value="SD">South Dakota (SD)</option>
							<option id="USA-TN" value="TN">Tennessee (TN)</option>
							<option id="USA-TX" value="TX">Texas (TX)</option>
							<option id="USA-UT" value="UT">Utah (UT)</option>
							<option id="USA-VT" value="VT">Vermont (VT)</option>
							<option id="USA-VA" value="VA">Virginia (VA)</option>

							<option id="USA-VI" value="VI">Virgin Islands (VI)</option>
							<option id="USA-WA" value="WA">Washington (WA)</option>
							<option id="USA-WV" value="WV">West Virginia (WV)</option>
							<option id="USA-WI" value="WI">Wisconsin (WI)</option>
							<option id="USA-WY" value="WY">Wyoming (WY)</option>

						</optgroup>
					</select>
				</div>
				<div class="form-group">
					<label class="control-label" for="step1_City">* City: </label>
					<input name="step1_City" required="required" class="form-control" id="step1_City" placeholder="Enter your City">
				</div>
				<div class="form-group">
					<label class="control-label" for="step1_Postal">* Postal: </label>
					<input name="step1_Postal" required="required" class="form-control" id="step1_Postal" placeholder="Enter your Postal">
				</div>

				<div class="form-group">
					<label class="control-label" for="step1_Positions">* Positions Applying For:</label>
					<br>
					<label class="control-label" for="step1_Positions">
						<input type="checkbox" class="checkbox-inline  answer1"  name="step1_Positions[]" id="step1_Positions" checked="true" value="General Labourer ">
						 General Labourer
					</label>
				
				  <br>
					<label class="control-label" for="step1_Positions">
						<input type="checkbox" class="checkbox-inline  answer1"  name="step1_Positions[]" id="step1_Positions" value="Certified Trades ">
						 Certified Trades
					</label>
				
				  <br>
					<label class="control-label" for="step1_Positions">
						<input type="checkbox" class="checkbox-inline  answer1"  name="step1_Positions[]" id="step1_Positions" value="Leadership ">
						 Leadership
					</label>
				
				  <br>
					<label class="control-label" for="step1_Positions">
						<input type="checkbox" class="checkbox-inline  answer1"  name="step1_Positions[]" id="step1_Positions"  value="Forestry ">
						 Forestry
					</label>
				
					<br>
					<label class="control-label" class="form-control" for="step1_Positions">
						<input class="form-control" type="text" name="step1_Positions[]" id="step1_Positions" placeholder="Other">
					</label>
				

			  </div>

				<div class="form-group">
					<label class="control-label" for="step1_Eligible">* Are you eligible to accept long term employment in Canada?   </label><br>
					<label class="radio-inline" for="temp-0">
                    	<input type="radio" name="step1_Eligible" id="step1_Eligible" value="yes" checked="checked">
							Yes
                    </label>
				


					<label class="radio-inline" for="temp-1">
                                    <input type="radio" name="step1_Eligible" id="step1_Eligible" value="no">
                                    No
                  </label>
				


			  </div>
				<div class="form-group">
					<label class="control-label" for="step1_PrevEmployed">* Have you ever been employed by Kalesnikoff Lumber or Kootenay Innovative Wood Products?   </label><br>
					<label class="radio-inline" for="temp-0">
                    	<input type="radio" name="step1_PrevEmployed" id="step1_PrevEmployed" value="yes" checked="checked">
							Yes
                    </label>
				


					<label class="radio-inline" for="temp-1">
                                    <input type="radio" name="step1_PrevEmployed" id="step1_PrevEmployed" value="no">
                                    No
                  </label>
				


			  </div>



			  <div class="form-group">
					<button onClick="processStep1()" class="btn btn-primary">Continue</button>
				</div>

			</div>

			<div id="ResumeStep2">
				<h2>Availability - Step 2 of 14</h2>
				<div id="step2_error" class="alert alert-warning">Please ensure that you filled out each field properly.</div>

				<div class="form-group">
					<label class="control-label" for="step2_TempEmploy">* Temporary Employment: </label><br>
					<label class="radio-inline" for="temp-0">
                                    <input type="radio" name="step2_TempEmploy" id="step2_TempEmploy" value="yes" checked="checked">
                                    Yes
                                </label>
				


					<label class="radio-inline" for="temp-1">
                                    <input type="radio" name="step2_TempEmploy" id="step2_TempEmploy" value="no">
                                    No
                                </label>
				


				</div>
				<div class="form-group">
					<label class="control-label" for="step2_FullEmploy">* Full Time Employment: </label><br>
					<label class="radio-inline" for="temp-0">
                                    <input type="radio" name="step2_FullEmploy" id="step2_FullEmploy" value="yes" checked="checked">
                                    Yes
                                </label>
				
					<label class="radio-inline" for="temp-1">
                                    <input type="radio" name="step2_FullEmploy" id="step2_FullEmploy" value="no">
                                    No
                                </label>
				


				</div>

				<div class="form-group">
					<label class="control-label" for="step2_Weekends">* Can you work on weekends: </label><br>
					<label class="radio-inline" for="temp-0">
                                    <input type="radio" name="step2_Weekends" id="step2_Weekends" value="yes" checked="checked">
                                    Yes
                                </label>
				
					<label class="radio-inline" for="temp-1">
                                    <input type="radio" name="step2_Weekends" id="step2_Weekends" value="no">
                                    No
                                </label>
				


				</div>

				<div class="form-group">
					<label class="control-label" for="step2_Evenings">* Can you work evenings: </label><br>
					<label class="radio-inline" for="temp-0">
                                    <input type="radio" name="step2_Evenings" id="step2_Evenings" value="yes" checked="checked">
                                    Yes
                                </label>
				


					<label class="radio-inline" for="temp-1">
                                    <input type="radio" name="step2_Evenings" id="step2_Evenings" value="no">
                                    No
                                </label>
				


				</div>

				<div class="form-group">
					<label class="control-label" for="step2_Overtime">* Can you work overtime: </label><br>
					<label class="radio-inline" for="temp-0">
                                    <input type="radio" name="step2_Overtime" id="step2_Overtime" value="yes" checked="checked">
                                    Yes
                                </label>
				


					<label class="radio-inline" for="temp-1">
                                    <input type="radio" name="step2_Overtime" id="step2_Overtime" value="no">
                                    No
                                </label>
				


				</div>
				<div class="form-group">
					<label class="control-label" for="step2_ShiftWork">* Can you work shift work: </label><br>
					<label class="radio-inline" for="temp-0">
                                    <input type="radio" name="step2_ShiftWork" id="step2_ShiftWork" value="yes" checked="checked">
                                    Yes
                                </label>
				


					<label class="radio-inline" for="temp-1">
                                    <input type="radio" name="step2_ShiftWork" id="step2_ShiftWork" value="no">
                                    No
                                </label>
				


				</div>



				<div class="form-group">
		
					<button onClick="processStep2()" class="btn btn-primary">Continue</button>
				</div>
			</div>

		    <div id="ResumeStep3">
				<h2>Education - Highschool - Step 3 of 14</h2>
				<div id="step3_error" class="alert alert-warning">Please ensure that you filled out each field properly.</div>

			  <div class="form-group">
			    <label class="control-label" for="step3_School">* School Name: </label>
			    <input type="text" name="step3_School" class="form-control" id="step3_School" placeholder="Enter your School Name">
				</div>
				
			  <div class="form-group">
			    <label class="control-label" for="step3_SchoolCity">* School City, Province: </label>
			    <input type="text" name="step3_SchoolCity" class="form-control" id="step3_SchoolCity" placeholder="Enter your Schools Location">
				</div>
				
			<div class="form-group">
			  <label class="control-label" for="step3_YearsCompleted">* Number of Years Completed: </label>
				<input type="text" name="step3_YearsCompleted" class="form-control" id="step3_YearsCompleted" placeholder="Enter the amount of years youve completed">
			  </div>
				
				<div class="form-group">
					<label class="control-label" for="step3_Graduate">* Did You Graduate? </label><br>
					<label class="radio-inline" for="temp-0">
                        <input type="radio" name="step3_Graduate" id="step3_Graduate" value="yes" checked="checked">
                    	Yes
                    </label>
					<label class="radio-inline" for="temp-1">
                         <input type="radio" name="step3_Graduate" id="step3_Graduate" value="no">
                         No
                    </label>
                </div>
				
				<div class="form-group">
					<label class="control-label" for="step3_YearGraduated">* Year Completed: </label>
					<input name="step3_YearGraduated" type="text" class="form-control" id="step3_YearGraduated" form="Resume" placeholder="Enter the year you graduated">
			</div>

				<button onClick="processStep3()" class="btn btn-primary">Continue</button>
		  </div>
		  
		   <div id="ResumeStep4">
				<h2>Education - University / College - Step 4 of 14</h2>
				<div id="step4_error" class="alert alert-warning">Please ensure that you filled out each field properly.</div>

			  <div class="form-group">
			    <label class="control-label" for="step4_School">* School Name: </label>
			    <input type="text" name="step4_School" class="form-control" id="step4_School" placeholder="Enter your School Name">
				</div>
				
			  <div class="form-group">
			    <label class="control-label" for="step4_SchoolCity">* School City, Province: </label>
			    <input type="text" name="step4_SchoolCity" class="form-control" id="step4_SchoolCity" placeholder="Enter your Schools Location">
				</div>
				
			<div class="form-group">
			  <label class="control-label" for="step4_YearsCompleted">* Number of Years Completed: </label>
				<input type="text" name="step4_YearsCompleted" class="form-control" id="step4_YearsCompleted" placeholder="Enter the amount of years youve completed">
			  </div>
				
				<div class="form-group">
			  <label class="control-label" for="step4_Diploma">Diploma / Degree Earned: </label>
				<input type="text" name="step4_Diploma" class="form-control" id="step4_Diploma" placeholder="Enter the Diploma or Degree you've earned">
			  </div>
				
				<div class="form-group">
					<label class="control-label" for="step4_Graduate">* Did You Graduate? </label><br>
					<label class="radio-inline" for="temp-0">
                        <input type="radio" name="step4_Graduate" id="step4_Graduate" value="yes" checked="checked">
                    	Yes
                    </label>
					<label class="radio-inline" for="temp-1">
                         <input type="radio" name="step4_Graduate" id="step4_Graduate" value="no">
                         No
                    </label>
                </div>
				
				<div class="form-group">
					<label class="control-label" for="step4_YearGraduated">* Year Completed: </label>
					<input name="step4_YearGraduated" type="text" class="form-control" id="step4_YearGraduated" form="Resume" placeholder="Enter the year you graduated">
			</div>
				<div class="form-group">
					<label class="control-label" for="step4_Field">Field of Study: </label>
					<input name="step4_Field" type="text" class="form-control" id="step4_Field" form="Resume" placeholder="Enter your field of study">
			</div>
				
				

				<button onClick="processStep4()" class="btn btn-primary">Continue</button>
		  </div>
		  
		  

			<div id="ResumeStep5">
				<button onclick="submitForm()" class="btn btn-primary">Submit Data</button>
			</div>
			
		</form>
	</div>
	<br>
	<br>
	<br>
	<!-- jQuery JS -->
	<script src="includes/js/jquery-3.1.1.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="includes/js/bootstrap.min.js"></script>
	<!-- Form JS -->
	<script src="includes/js/form.js"></script>

</body>

</html>