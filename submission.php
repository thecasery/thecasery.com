<?php

define(DB_HOST, 'localhost');  
define(DB_USER, 'thecaser_manager');  
define(DB_PASS, 'G0c@seyourself');  
define(DB_DATABASENAME, 'thecaser_email_collection');  
define(DB_TABLENAME, 'email_list');  

$dbcolarray = array('email');  
  
//mysql_connect  
$conn = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("connect failed" . mysql_error());  
mysql_select_db(DB_DATABASENAME, $conn);  
  
$sql=sprintf("INSERT INTO email_list (email)
VALUES
('$_POST[email]')");

if (!mysql_query($sql,$conn)){
  $response="Sorry, this email has already exist in our database.";
}
else{
  $response="Your email has been uploaded successfully!";
}
mysql_close($conn);

echo $response;

?>