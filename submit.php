<?php
define('MyConst', TRUE);
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require_once('includes/database/connection.php');

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user step1 inputs for security
$step1_first_name = mysqli_real_escape_string($link, $_REQUEST['step1_Firstname']);
$step1_last_name = mysqli_real_escape_string($link, $_REQUEST['step1_Lastname']);
$step1_phone = mysqli_real_escape_string($link, $_REQUEST['step1_Phone']);
$step1_altphone = mysqli_real_escape_string($link, $_REQUEST['step1_AltPhone']);
$step1_email = mysqli_real_escape_string($link, $_REQUEST['step1_Email']);
$step1_address = mysqli_real_escape_string($link, $_REQUEST['step1_Address']);
$step1_altaddress = mysqli_real_escape_string($link, $_REQUEST['step1_AltAddress']);
$step1_provstate = mysqli_real_escape_string($link, $_REQUEST['step1_ProvState']);
$step1_city = mysqli_real_escape_string($link, $_REQUEST['step1_City']);
$step1_postal = mysqli_real_escape_string($link, $_REQUEST['step1_Postal']);
$step1_eligible = mysqli_real_escape_string($link, $_REQUEST['step1_Eligible']);
$step1_prevemployed = mysqli_real_escape_string($link, $_REQUEST['step1_PrevEmployed']);
$step1_positions = mysqli_real_escape_string($link, $_REQUEST['step1_Positions']);
$step1_positions = implode(',',$_POST['step1_Positions']);

// Escape user step2 inputs for security
$step2_tempemploy = mysqli_real_escape_string($link, $_REQUEST['step2_TempEmploy']);
$step2_fullemploy = mysqli_real_escape_string($link, $_REQUEST['step2_FullEmploy']);
$step2_overtime = mysqli_real_escape_string($link, $_REQUEST['step2_Overtime']);
$step2_shiftwork = mysqli_real_escape_string($link, $_REQUEST['step2_ShiftWork']);
$step2_evenings = mysqli_real_escape_string($link, $_REQUEST['step2_Evenings']);
$step2_weekends = mysqli_real_escape_string($link, $_REQUEST['step2_Weekends']);

// Escape user step3 inputs for security
$step3_school = mysqli_real_escape_string($link, $_REQUEST['step3_School']);
$step3_schoolcity = mysqli_real_escape_string($link, $_REQUEST['step3_SchoolCity']);
$step3_yearscompleted = mysqli_real_escape_string($link, $_REQUEST['step3_YearsCompleted']);
$step3_graduate = mysqli_real_escape_string($link, $_REQUEST['step3_Graduate']);
$step3_yeargraduated = mysqli_real_escape_string($link, $_REQUEST['step3_YearGraduated']);

// Escape user step4 inputs for security
$step4_school = mysqli_real_escape_string($link, $_REQUEST['step4_School']);
$step4_schoolcity = mysqli_real_escape_string($link, $_REQUEST['step4_SchoolCity']);
$step4_yearscompleted = mysqli_real_escape_string($link, $_REQUEST['step4_YearsCompleted']);
$step4_graduate = mysqli_real_escape_string($link, $_REQUEST['step4_Graduate']);
$step4_diploma = mysqli_real_escape_string($link, $_REQUEST['step4_Diploma']);
$step4_field = mysqli_real_escape_string($link, $_REQUEST['step4_Field']);
$step4_yeargraduated = mysqli_real_escape_string($link, $_REQUEST['step4_YearGraduated']);

// Escape user step5 inputs for security
$step5_school = mysqli_real_escape_string($link, $_REQUEST['step5_School']);
$step5_schoolcity = mysqli_real_escape_string($link, $_REQUEST['step5_SchoolCity']);
$step5_yearscompleted = mysqli_real_escape_string($link, $_REQUEST['step5_YearsCompleted']);
$step5_certified = mysqli_real_escape_string($link, $_REQUEST['step5_Certified']);
$step5_trade = mysqli_real_escape_string($link, $_REQUEST['step5_Trade']);
$step5_yeargraduated = mysqli_real_escape_string($link, $_REQUEST['step5_YearGraduated']);

// Escape user step6 inputs for security
$step6_other = mysqli_real_escape_string($link, $_REQUEST['step6_Other']);

// Escape user step7 inputs for security
$step7_businesstype = mysqli_real_escape_string($link, $_REQUEST['step7_BusinessType']);
$step7_city = mysqli_real_escape_string($link, $_REQUEST['step7_City']);
$step7_contactcurrent = mysqli_real_escape_string($link, $_REQUEST['step7_ContactCurrent']);
$step7_duties = mysqli_real_escape_string($link, $_REQUEST['step7_Duties']);
$step7_employed = mysqli_real_escape_string($link, $_REQUEST['step7_Employed']);
$step7_employername = mysqli_real_escape_string($link, $_REQUEST['step7_EmployerName']);
$step7_end = mysqli_real_escape_string($link, $_REQUEST['step7_End']);
$step7_leavingreason = mysqli_real_escape_string($link, $_REQUEST['step7_LeavingReason']);
$step7_phone = mysqli_real_escape_string($link, $_REQUEST['step7_Phone']);
$step7_province = mysqli_real_escape_string($link, $_REQUEST['step7_Province']);
$step7_start = mysqli_real_escape_string($link, $_REQUEST['step7_Start']);
$step7_supervisor = mysqli_real_escape_string($link, $_REQUEST['step7_Supervisor']);

// Escape user step8 inputs for security
$step8_able = mysqli_real_escape_string($link, $_REQUEST['step8_Able']);
$step8_injuries = mysqli_real_escape_string($link, $_REQUEST['step8_Injuries']);
$step8_additionalinfo = mysqli_real_escape_string($link, $_REQUEST['step8_AdditionalInfo']);
$step8_hobbiesinterests = mysqli_real_escape_string($link, $_REQUEST['step8_HobbiesInterests']);

// Escape user step6 inputs for security
$step9_name1 = mysqli_real_escape_string($link, $_REQUEST['step9_Name1']);
$step9_name2 = mysqli_real_escape_string($link, $_REQUEST['step9_Name2']);
$step9_name3 = mysqli_real_escape_string($link, $_REQUEST['step9_Name3']);
$step9_rel1 = mysqli_real_escape_string($link, $_REQUEST['step9_Rel1']);
$step9_rel2 = mysqli_real_escape_string($link, $_REQUEST['step9_Rel2']);
$step9_rel3 = mysqli_real_escape_string($link, $_REQUEST['step9_Rel3']);
$step9_phone1 = mysqli_real_escape_string($link, $_REQUEST['step9_Phone1']);
$step9_phone2 = mysqli_real_escape_string($link, $_REQUEST['step9_Phone2']);
$step9_phone3 = mysqli_real_escape_string($link, $_REQUEST['step9_Phone3']);

// attempt insert step1 query execution
$sql = "INSERT INTO resumestep1 (
step1_FirstName, 
step1_LastName, 
step1_AltPhone, 
step1_Phone, 
step1_Email,
step1_Address,
step1_AltAddress,
step1_ProvState,
step1_City,
step1_Postal,
step1_Eligible,
step1_PrevEmployed,
step1_Positions
) VALUES (
'$step1_first_name', 
'$step1_last_name', 
'$step1_phone', 
'$step1_altphone', 
'$step1_email',
'$step1_address',
'$step1_altaddress',
'$step1_provstate',
'$step1_city',
'$step1_postal',
'$step1_eligible',
'$step1_prevemployed',
'$step1_positions'
);";

// attempt insert step2 query execution
$sql .= "INSERT INTO resumestep2 (
step2_TempEmploy,
step2_FullEmploy,
step2_Weekends,
step2_Overtime,
step2_Evenings,
step2_ShiftWork
) VALUES (
'$step2_tempemploy',
'$step2_fullemploy',
'$step2_weekends',
'$step2_overtime',
'$step2_evenings',
'$step2_shiftwork'
);";

// attempt insert step3 query execution
$sql .= "INSERT INTO resumestep3 (
step3_School,
step3_SchoolCity,
step3_YearsCompleted,
step3_Graduate,
step3_YearGraduated
) VALUES (
'$step3_school',
'$step3_schoolcity',
'$step3_yearscompleted',
'$step3_graduate',
'$step3_yeargraduated'
);";

// attempt insert step4 query execution
$sql .= "INSERT INTO resumestep4 (
step4_School,
step4_SchoolCity,
step4_YearsCompleted,
step4_Graduate,
step4_Diploma,
step4_Field,
step4_YearGraduated
) VALUES (
'$step4_school',
'$step4_schoolcity',
'$step4_yearscompleted',
'$step4_graduate',
'$step4_diploma',
'$step4_field',
'$step4_yeargraduated'
);";

// attempt insert step5 query execution
$sql .= "INSERT INTO resumestep5 (
step5_School,
step5_SchoolCity,
step5_YearsCompleted,
step5_Certified,
step5_Trade,
step5_YearGraduated
) VALUES (
'$step5_school',
'$step5_schoolcity',
'$step5_yearscompleted',
'$step5_certified',
'$step5_trade',
'$step5_yeargraduated'
);";

// attempt insert step6 query execution
$sql .= "INSERT INTO resumestep6 (
step6_Other
) VALUES (
'$step6_other'
);";

// attempt insert step7 query execution
$sql .= "INSERT INTO resumestep7 (
step7_BusinessType,
step7_City,
step7_ContactCurrent,
step7_Duties,
step7_Employed,
step7_EmployerName,
step7_End,
step7_LeavingReason,
step7_Phone,
step7_Province,
step7_Start,
step7_Supervisor
) VALUES (
'$step7_businesstype',
'$step7_city',
'$step7_contactcurrent',
'$step7_duties',
'$step7_employed',
'$step6_other',
'$step6_other',
'$step6_other',
'$step6_other',
'$step6_other',
'$step6_other',
'$step6_other'
);";

// attempt insert step8 query execution
$sql .= "INSERT INTO resumestep8 (
step8_Able,
step8_Injuries,
step8_AdditionalInfo,
step8_HobbiesInterests
) VALUES (
'$step8_able',
'$step8_injuries',
'$step8_additionalinfo',
'$step8_hobbiesinterests'
);";

// attempt insert step9 query execution
$sql .= "INSERT INTO resumestep9 (
step9_Name1,
step9_Name2,
step9_Name3,
step9_Phone1,
step9_Phone2,
step9_Phone3,
step9_Rel1,
step9_Rel2,
step9_Rel3
) VALUES (
'$step9_name1',
'$step9_name2',
'$step9_name3',
'$step9_phone1',
'$step9_phone2',
'$step9_phone3',
'$step9_rel1',
'$step9_rel2',
'$step9_rel3'
);";

if(mysqli_multi_query($link, $sql)){
    echo "<h1> Your Resume has successfully been submitted.</h1>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>