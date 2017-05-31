<?php
include ('Connect.php');
    
        $NAME = $_POST['NAME'];
        $REGION = $_POST['REGION'];
        $DIRECTOR= $_POST['DIRECTOR'];
        $TYPE = $_POST['TYPE'];
        $YEAR = $_POST['YEAR'];
        $PRODUCTION_COMPANY = $_POST['PRODUCTION_COMPANY'];
        $RATING = $_POST['RATING'];
        $DESCRIPTION = $_POST['DESCRIPTION'];
        

$sql = "INSERT INTO `movieguide`.`movietable` (`NAME`, `Region`, `DIRECTOR`, `TYPE`, `YEAR`, `PRODUCTION COMPANY`, `RATING`, `DESCRIPTION`, `LOGO`) VALUES ('$NAME', '$REGION','$DIRECTOR','$TYPE','$YEAR','$PRODUCTION_COMPANY',$RATING,'$DESCRIPTION',NULL)";
//INSERT INTO `movieguide`.`movietable` (`NAME`, `Region`, `DIRECTOR`, `TYPE`, `YEAR`, `PRODUCTION COMPANY`, `RATING`, `DESCRIPTION`, `LOGO`) VALUES ( 'a', 'a', 'a', 'a', 'a', 'a', '1', 'a', NULL);
if (mysql_query($sql)) {
               

    echo 'New Movie Inserted!!';
    header('refresh:0; url=AdminHome.php');
}

    


mysql_close();
