<?php

include ('Connect.php');
        if(isset($_GET['SubmitReviewButton'])){
            $rvwmsg = $_GET['Review'];
            session_start();
            $UID=$_SESSION["UserID"];
            $MID = $_GET['MID'];

            if(mysql_query("INSERT INTO reviewtable (ReviewMSG,UserID, MovieID ) VALUES ('$rvwmsg', '$UID', '$MID')")){
               print '<script type="text/javascript">'; 
               print 'alert("Review Inserted. Thanks for your opinion.")'; 
               print '</script>';
               header("refresh:0; url=MovieDetails.php?id=$MID");
            }
            mysql_close();

        }
