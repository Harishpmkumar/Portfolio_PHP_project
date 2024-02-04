<!-- configure you host, password and database -->

<?php
$db_user = "Your username";
$db_pass = "Your password";
$db_name = "Your Database name";

$db = new PDO('mysql:host=localhost;dbname='.$db_name.';charset=utf8',$db_user,$db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>