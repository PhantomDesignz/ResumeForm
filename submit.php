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

// Escape user step1 inputs for security

$step2_tempemploy = mysqli_real_escape_string($link, $_REQUEST['step2_TempEmploy']);

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
step1_Postal
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
'$step1_postal');";

// attempt insert step2 query execution
$sql .= "INSERT INTO resumestep2 (
step2_TempEmploy
) VALUES (
'$step2_tempemploy');";



if(mysqli_multi_query($link, $sql)){
    echo "<h1> Your Resume has successfully been submitted.</h1>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>