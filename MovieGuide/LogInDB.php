<?php

$email = $_POST['E_MAIL'];
$pass = $_POST['PASSWORD'];


include ('Connect.php');

$qry="SELECT * FROM usertable WHERE UserEmail='$email' AND UserPassword='$pass'";
$result = mysql_query($qry);
$UArray=  mysql_fetch_assoc($result);
$id=$UArray['UserID'];

session_start();
$_SESSION["UserID"] = $id;


if($result) 
    {
	if(mysql_num_rows($result) > 0)
            {

               header("location:Home.php?id=$id");
            }
        else
            {


               print '<script type="text/javascript">'; 
               print 'alert("Sorry, your credentials dont match, Please try again.")'; 
               print '</script>';
               header('refresh:0; url=First.php');

               
            }
    
    }

else
{
    

     $LoginORnot=FALSE;
     print '<script type="text/javascript">'; 
     print 'alert("Sorry, your credentials dont match, Please try again.")'; 
     print '</script>';     
     header('refresh:0; url=Main.php');

}

?>