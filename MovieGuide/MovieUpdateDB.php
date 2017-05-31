<?php
include ('Connect.php');

echo $MID=$_POST['hiddenID'];
        $NAME = $_POST['NAME'];
        $REGION = $_POST['REGION'];
        $DIRECTOR= $_POST['DIRECTOR'];
        $TYPE = $_POST['TYPE'];
        $YEAR = $_POST['YEAR'];
        $PRODUCTION_COMPANY = $_POST['PRODUCTION_COMPANY'];
        $RATING = $_POST['RATING'];
        $DESCRIPTION = $_POST['DESCRIPTION'];
        

$sql = "UPDATE `movieguide`.`movietable` SET `NAME` = '$NAME', `Region` = '$REGION', `DIRECTOR` = '$DIRECTOR', `TYPE` = '$TYPE', `YEAR` = '$YEAR', `PRODUCTION COMPANY` = '$PRODUCTION_COMPANY', `RATING` = '$RATING', `DESCRIPTION` = '$DESCRIPTION' WHERE `movietable`.`ID` = $MID;";




if (mysql_query($sql)) {
               

    echo 'Movie Updated successfully!!';
    header('refresh:0; url=AdminHome.php');
}

    


mysql_close();
