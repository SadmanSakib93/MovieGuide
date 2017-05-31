<?php

include ('Connect.php');
    
$name = $_POST['NAME'];
$email = $_POST['E_MAIL'];
$pass = $_POST['PASSWORD'];

$sql = "INSERT INTO usertable (	UserName,  UserEmail,  	UserPassword) VALUES ('$name',  '$email', '$pass')";

if (!mysql_query($sql)) {
               
               print '<script type="text/javascript">'; 
               print 'alert("#ERROR: Sorry, This E-mail has been already registerd! Try again.")'; 
               print '</script>';
               header('refresh:0; url=RegistrationForm.php');
}
 else {  
               print '<script type="text/javascript">'; 
               print 'alert("Congratulations, You have successfully registerd !")'; 
               print '</script>';
               header('refresh:0; url=First.php');
    
}

mysql_close();
