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
         <p>Required fields are indicated by an asterisk (*).</p>
         <br>
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
               <h2>Education - Vocational / Trade School - Step 5 of 14</h2>
               <div id="step5_error" class="alert alert-warning">Please ensure that you filled out each field properly.</div>
               <div class="form-group">
                  <label class="control-label" for="step5_School">* School Name: </label>
                  <input type="text" name="step5_School" class="form-control" id="step5_School" placeholder="Enter your School Name">
               </div>
               <div class="form-group">
                  <label class="control-label" for="step5_SchoolCity">* School City, Province: </label>
                  <input type="text" name="step5_SchoolCity" class="form-control" id="step5_SchoolCity" placeholder="Enter your Schools Location">
               </div>
               <div class="form-group">
                  <label class="control-label" for="step5_YearsCompleted">* Number of Years Completed: </label>
                  <input type="text" name="step5_YearsCompleted" class="form-control" id="step5_YearsCompleted" placeholder="Enter the amount of years youve completed">
               </div>
               <div class="form-group">
                  <label class="control-label" for="step5_Trade">Trade: </label>
                  <input type="text" name="step5_Trade" class="form-control" id="step5_Trade" placeholder="Enter the Diploma or Degree you've earned">
               </div>
               <div class="form-group">
                  <label class="control-label" for="step5_Certified">* Are You Certified? </label><br>
                  <label class="radio-inline" for="temp-0">
                  <input type="radio" name="step5_Certified" id="step5_Certified" value="yes" checked="checked">
                  Yes
                  </label>
                  <label class="radio-inline" for="temp-1">
                  <input type="radio" name="step5_Certified" id="step5_Certified" value="no">
                  No
                  </label>
               </div>
               <div class="form-group">
                  <label class="control-label" for="step5_YearGraduated">* Year Completed: </label>
                  <input name="step5_YearGraduated" type="text" class="form-control" id="step5_YearGraduated" form="Resume" placeholder="Enter the year you graduated">
               </div>
               <button onClick="processStep5()" class="btn btn-primary">Continue</button>
            </div>
            <div id="ResumeStep6">
               <h2>Other Training - Step 6 of 14</h2>
               <div id="step6_error" class="alert alert-warning">Please ensure that you filled out each field properly.</div>
               <p>What other training, qualifications or skills do you have that should be brought to our attention? For example: First Aid ticket, Grading ticket, Class 1 Driver's license or Management training.</p>
               <textarea class="form-control" id="step6_Other" name="step6_Other"></textarea>
               <br>
               <button onClick="processStep6()" class="btn btn-primary">Continue</button>
            </div>
            <div id="ResumeStep7">
               <h2>Employment History - Step 7 of 14</h2>
               <div id="step7_error" class="alert alert-warning">Please ensure that you filled out each field properly.</div>
               <div class="form-group">
                  <label class="control-label" for="step7_Employed">* Are you currently employed: </label><br>
                  <label class="radio-inline" for="temp-0">
                  <input type="radio" name="step7_Employed" id="step7_Employed" value="yes" checked="checked">
                  Yes
                  </label>
                  <label class="radio-inline" for="temp-1">
                  <input type="radio" name="step7_Employed" id="step7_Employed" value="no">
                  No
                  </label>
               </div>
               <div class="form-group">
                  <label class="control-label" for="step7_ContactCurrent">* If Yes, may we contact your current employer: </label><br>
                  <label class="radio-inline" for="temp-0">
                  <input type="radio" name="step7_ContactCurrent" id="step7_ContactCurrent" value="yes" checked="checked">
                  Yes
                  </label>
                  <label class="radio-inline" for="temp-1">
                  <input type="radio" name="step7_ContactCurrent" id="step7_ContactCurrent" value="no">
                  No
                  </label>
                  <label class="radio-inline" for="temp-2">
                  <input type="radio" name="step7_ContactCurrent" id="step7_ContactCurrent" value="not applicable">
                  N/A
                  </label>
               </div>
               <p>Please describe past and present employment positions, dating back 10 years (if applicable). Please account for all periods of unemployment. 
Even if you have attached a resume, this section must be completed.</p>
               <div class="form-group">
                  <label class="control-label" for="step7_EmployerName">* Name of Employer: </label>
                  <input name="step7_EmployerName" class="form-control" id="step7_EmployerName" placeholder="Enter your employers name">
               </div>
               <div class="form-group">
                  <label class="control-label" for="step7_Supervisor">* Name of Supervisor: </label>
                  <input name="step7_Supervisor" class="form-control" id="step7_Supervisor" placeholder="Enter your supervisors name">
               </div>
               <div class="form-group">
                  <label class="control-label" for="step7_Phone">* Telephone Number: </label>
                  <input name="step7_Phone" class="form-control" id="step7_Phone" placeholder="Enter the phone number">
               </div>
               <div class="form-group">
                  <label class="control-label" for="step7_BusinessType">* Business Type: </label>
                  <input name="step7_BusinessType" class="form-control" id="step7_BusinessType" placeholder="Enter the type of business">
               </div>
               <div class="form-group">
                  <label class="control-label" for="step7_City">* City: </label>
                  <input name="step7_City" class="form-control" id="step7_City" placeholder="Enter the city">
               </div>
               <div class="form-group">
                  <label class="control-label" for="step7_Province">* Province / State</label>
                  <select id="step7_Province" name="step7_Province" class="form-control">
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
                  <label class="control-label" for="step7_Start">* Start Date: </label>
                  <input name="step7_Start" class="form-control" id="step7_Start" placeholder="Enter your start date">
               </div>
               <div class="form-group">
                  <label class="control-label" for="step7_End">* End Date: </label>
                  <input name="step7_End"  class="form-control" id="step7_End" placeholder="Enter your end date">
               </div>
               <p>List the jobs you held, duties performed, skills used or learned, advancements or promotions while you worked at this company:</p>
               <textarea class="form-control" id="step7_Duties" name="step7_Duties"></textarea><br>
               <p>What was your reason for leaving this company?</p>
               <textarea class="form-control" id="step7_LeavingReason" name="step7_LeavingReason"></textarea><br>
               <button onClick="processStep7()" class="btn btn-primary">Continue</button>
            </div>
            <div id="ResumeStep8">
            	<h2>Additional Information - Step 8 of 14</h2>
            	<div id="step8_error" class="alert alert-warning">Please ensure that you filled out each field properly.</div>
            	<p>For the entry level position you must be able to pile, throw, lift and/or pull heavy (50 - 75 pounds plus) boards and other objects, which may be on the ground or above your head or anywhere in between, without injuring yourself or aggravating old injuries or any of your current physical limitations.</p>
            	<div class="form-group">
                  <label class="control-label" for="step8_Able">* Are you able to do this: </label><br>
                  <label class="radio-inline" for="temp-0">
                  <input type="radio" name="step8_Able" id="step8_Able" value="yes" checked="checked">
                  Yes
                  </label>
                  <label class="radio-inline" for="temp-1">
                  <input type="radio" name="step8_Able" id="step8_Able" value="no">
                  No
                  </label>
               </div>
               <div class="form-group">
                  <label class="control-label" for="step8_Injuries">* Do you have any such old injuries or physical limitations: </label><br>
                  <label class="radio-inline" for="temp-0">
                  <input type="radio" name="step8_Injuries" id="step8_Injuries" value="yes" checked="checked">
                  Yes
                  </label>
                  <label class="radio-inline" for="temp-1">
                  <input type="radio" name="step8_Injuries" id="step8_Injuries" value="no">
                  No
                  </label>
               </div>
               <p>An application form sometimes makes it difficult for an individual to adequately summarize a complete background. Use the space below to summarize any additional information necessary to describe your full qualifications for the specific position for which you are applying.</p>
               <textarea class="form-control" id="step8_AdditionalInfo" name="step8_AdditionalInfo"></textarea><br>
               <p>Help us get to know you a little better by telling us what you enjoy doing when not at work. What makes it enjoyable for you? (Sometimes these skills are beneficial in a work environment.)</p>
               <textarea class="form-control" id="step8_HobbiesInterests" name="step8_HobbiesInterests"></textarea><br>
               <button onclick="processStep8()" class="btn btn-primary">Continue</button>
            </div>
            <div id="ResumeStep9">
            	<h2>References - Step 9 of 14</h2>
            	<div id="step9_error" class="alert alert-warning">Please ensure that you filled out each field properly.</div>
               <p>List three persons who have knowledge of your work performance within the last five years. Please include professional references only.</p>
               <h2>First Reference:</h2>
                <div class="form-group">
                   <label class="control-label" for="step9_Name1">* Name (First and Last): </label>
                   <input name="step9_Name1"class="form-control" id="step9_Name1" placeholder="">
                </div>
                <div class="form-group">
                   <label class="control-label" for="step9_Phone1">* Telephone Number: </label>
                   <input name="step9_Phone1"class="form-control" id="step9_Phone1" placeholder="">
                </div>
                <div class="form-group">
                   <label class="control-label" for="step9_Rel1">* Relationship: </label>
                   <input name="step9_Rel1"class="form-control" id="step9_Rel1" placeholder="">
                </div>
               <h2>Second Reference:</h2>
                <div class="form-group">
                   <label class="control-label" for="step9_Name1">* Name (First and Last): </label>
                   <input name="step9_Name2"class="form-control" id="step9_Name2" placeholder="">
                </div>
                <div class="form-group">
                   <label class="control-label" for="step9_Phone2">* Telephone Number: </label>
                   <input name="step9_Phone2"class="form-control" id="step9_Phone2" placeholder="">
                </div>
                <div class="form-group">
                   <label class="control-label" for="step9_Rel2">* Relationship: </label>
                   <input name="step9_Rel2"class="form-control" id="step9_Rel2" placeholder="">
                </div>
               <h2>Third Reference:</h2>
                <div class="form-group">
                   <label class="control-label" for="step9_Name3">* Name (First and Last): </label>
                   <input name="step9_Name3"class="form-control" id="step9_Name3" placeholder="">
                </div>
                <div class="form-group">
                   <label class="control-label" for="step9_Phone3">* Telephone Number: </label>
                   <input name="step9_Phone3"class="form-control" id="step9_Phone3" placeholder="">
                </div>
                <div class="form-group">
                   <label class="control-label" for="step9_Rel3">* Relationship: </label>
                   <input name="step9_Rel3"class="form-control" id="step9_Rel3" placeholder="">
                </div>
                 <button onclick="processStep9()" class="btn btn-primary">Continue</button>
            </div>
            <div id="ResumeStep10">
            	<h2>Resume - Step 10 of 14</h2>
            	<div id="step10_error" class="alert alert-warning">Please ensure that you filled out each field properly.</div>
            	<p>Your resume is required to complete the application process. Please upload it here.</p>
            	<input name="step10_File" type="file" size="90" id="step10_File"><br>
            	<button onclick="processStep10()" name="Resume" class="btn btn-primary">Continue</button>
            </div>
            <div id="ResumeStep11">
            	<h2>How did you hear about us? - Step 11 of 14</h2>
            	<div id="step11_error" class="alert alert-warning">Please ensure that you filled out each field properly.</div>
                 
               <div class="form-group">
                  <label class="control-label" for="step11_HearAbout">* Choose One: </label><br>
                  <label class="radio-inline" for="temp-0">
                  <input type="radio" name="step11_HearAbout" id="step11_HearAbout" value="Newspaper" checked="checked">
                  Newspaper
                  </label>
                  <label class="radio-inline" for="temp-1">
                  <input type="radio" name="step11_HearAbout" id="step11_HearAbout" value="Highway Sign">
                  Highway Sign
                  </label>
                  <label class="radio-inline" for="temp-2">
                  <input type="radio" name="step11_HearAbout" id="step11_HearAbout" value="Friend">
                  Friend
                  </label>
                  <label class="radio-inline" for="temp-3">
                  <input type="radio" name="step11_HearAbout" id="step11_HearAbout" value="Word of Mouth">
                  Word of Mouth
                  </label>
                  <label class="radio-inline" for="temp-4">
                  <input type="radio" name="step11_HearAbout" id="step11_HearAbout" value="Company Website">
                  Company Website
                  </label>
                  <label class="radio-inline" for="temp-5">
                  <input type="radio" name="step11_HearAbout" id="step11_HearAbout" value="Other Website">
                  Other Website
                  </label>
                  <label class="radio-inline" for="temp-6">
                  <input type="radio" name="step11_HearAbout" id="step11_HearAbout" value="Other">
                  Other
                  </label>
                <div class="form-group">
                   <label class="control-label" for="step11_Other">If you chose Other, or Other Website, please specify: </label>
                   <input name="step11_Other"class="form-control" id="step11_Other" placeholder="">
                </div>
               </div>
            	<button onclick="processStep11()" name="Resume" class="btn btn-primary">Continue</button>
            </div>
            
            <div id="ResumeStep12">
                <p>I certify that I have not purposely withheld any information that might adversely affect my chances for hiring. I attest to the fact that the answers given by me are true and correct to the best of my knowledge and ability. I understand that any omission (including any misstatement) of material fact on this application or on any document used to secure employment can be grounds for rejection of application or, if I am employed by this company, terms for my immediate expulsion from the company. 
                <br><br>
                I permit the company to examine my references, record of employment, education record, and any other information I have provided. I authorize the references I have listed to disclose any information related to my work record and my professional experiences with them, without giving me prior notice of such disclosure. In addition, I release the company, my former employers and all persons, corporations, partnerships & associations from any & all claims, demands or liabilities arising out of or in any way related to such examination or revelation.</p>
                <div class="form-group">
                  <label class="control-label" for="ResumeSubmit">* Choose One: </label><br>
                  <label class="radio-inline" for="temp-0">
                  <input type="radio" name="ResumeSubmitY" id="ResumeSubmitY" value="yes">
                  Yes
                  </label>
                  <label class="radio-inline" for="temp-0">
                  <input type="radio" name="ResumeSubmitN" id="ResumeSubmitN" value="no">
                  No
                  </label>
                </div>
               <button onclick="submitForm()" name="Resume" id="Resume" class="btn btn-primary">Submit Resume</button>
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