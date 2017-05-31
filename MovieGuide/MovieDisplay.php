<style>
    body
    {
        background-color: whitesmoke;
    }

    #EditForm
    {
        position: relative;
        border: 3px solid black;
        max-width: 30%;
        padding: 30px;
        margin-bottom: 20px;
        padding-left: 100px;
        left: 30%;
        background-color:  lightgrey;
        box-shadow: 2px 2px 2px 2px gray;
        border-radius: 5px;    
        font-size: 20px;
        
    }
    #EditDiv
    {
        border: 3px solid black;
        width: 60%;
        position: relative;
        left: 20%;
        background-color:  lightyellow;
        box-shadow: 2px 2px 2px 2px gray;
        border-radius: 5px;
    }
    #hdr
    {
            font-family: old_stamper;
            text-shadow: 10px 3px 3px dimgray;
            border: 2px seashell;
            font-size: 50px;
    }
</style>
<?php
include ('Connect.php');
$resultSet = mysql_query("SELECT * FROM movietable");
?>
<div id="EditDiv">
<h1 id="hdr"><center>MOVIE INFO LIST</center></h1> <?php
	while($rows = mysql_fetch_assoc($resultSet)){
        $NAME = $rows['NAME'];
        $REGION = $rows['Region'];
        $DIRECTOR= $rows['DIRECTOR'];
        $TYPE = $rows['TYPE'];
        $YEAR = $rows['YEAR'];
        $PRODUCTION_COMPANY = $rows['PRODUCTION COMPANY'];
        $RATING = $rows['RATING'];
        $DESCRIPTION = $rows['DESCRIPTION'];
	?>
<form id="EditForm" action="MovieUpdateOrDelete.php" method="post" > <?php
	echo"<p>Name: $NAME<br />Region: $REGION<br />DIRECTOR: $DIRECTOR<br />TYPE: $TYPE<br />YEAR: $YEAR<br />PRODUCTION COMPANY: $PRODUCTION_COMPANY<br />RATING: $RATING<br />DESCRIPTION: $DESCRIPTION<br />"; ?><?php
	echo "<input type=hidden name=MID value=".$rows['ID']." >" ?><?php
	echo "<p>" . "<input  type=submit name=UPDATE_BTN value=UPDATE id=updateButton  ". " </p>"; ?><?php
        echo "<p>" . "<input  type=submit name=DELETE_BTN value=DELETE id=updateButton  ". " </p>"; ?>
        
	</form>
 <?php
	
	}?>
	</div>


