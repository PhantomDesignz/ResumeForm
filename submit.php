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

// Escape user step2 inputs for security
$step3_school = mysqli_real_escape_string($link, $_REQUEST['step3_School']);
$step3_schoolcity = mysqli_real_escape_string($link, $_REQUEST['step3_SchoolCity']);
$step3_yearscompleted = mysqli_real_escape_string($link, $_REQUEST['step3_YearsCompleted']);
$step3_graduate = mysqli_real_escape_string($link, $_REQUEST['step3_Graduate']);
$step3_yeargraduated = mysqli_real_escape_string($link, $_REQUEST['step3_YearGraduated']);

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

// attempt insert step2 query execution
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


if(mysqli_multi_query($link, $sql)){
    echo "<h1> Your Resume has successfully been submitted.</h1>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>