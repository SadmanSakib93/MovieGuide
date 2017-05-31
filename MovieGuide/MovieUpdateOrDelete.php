<!doctype html>

<style>
            body{
            background-color: whitesmoke;
            }
            #InsForm
            {
                background-color: lightgray;
                opacity: .65;
                width: 45%;
                font-family:RAPSCALL;
                font-weight: bold;
                font-size: 25px;
                border: 2px solid black;
                margin-top: 20px;
                box-shadow: 2px 2px 2px 2px gray;
                border-radius: 5px;
            }

            
            #FormAtributes
            {
                background-color: beige;
                position: relative;
                width: 400px;
                height: 90px;
                padding: 30px;
                margin: 30px;
                border: 2px solid #555555;
                box-shadow: 4px 3px 3px 3px slategrey;
                border-radius: 5px;                
                font-weight: bolder;
            }
            #submit
            {
                width: 150px;
                height: 40px;
                border-radius:3px;
                font-size:25px;
                margin: 10px;
                font-family: umbrage2;
                transition: all 0.4s ease;            
                box-shadow: 2px 2px darkgray; 
                border: 1px solid black;   
            }
            #submit:hover
            {
                cursor: pointer;
                opacity: 1;
                font-size:30px;
                background-color: darkslategrey;     
                
            }
            #input
            {
                
                border: 2px solid black;
                width: 90%;
                height: 40%;
                margin-top: 15px;
                background-color: #A6A5A9;
                color:#aa0000;
                transition: all 0.5s ease;   
            }
            #input:hover
            {
                background-color: white;
                width: 83%;
                
            }
            #hdr
        {
            font-family: old_stamper;
            text-shadow: 10px 3px 3px dimgray;
            border: 2px seashell;
        }
            
            
</style>

<?php
include ('Connect.php');

$MID=$_POST['MID'];
if(isset($_POST['DELETE_BTN']))
{

$sql = "DELETE FROM movietable WHERE ID = $MID;";

if (mysql_query($sql)) {
               

    echo 'Movie Deleted successfully!!';
    header('refresh:0; url=AdminHome.php');
}
}

else if(isset($_POST['UPDATE_BTN']))
{
    ?>

    <center>
        <div id="InsDiv">
            
            <form id="InsForm" action="MovieUpdateDB.php" method="post" > 
                <h1 id="hdr"> UPDATE MOVIE </h1>
                <div id="FormAtributes">NAME:  <input id="input" type="text" name="NAME"  size="30"  required/>  </div>
                <div id="FormAtributes">REGION:<input id="input" type="text" name="REGION" size="30"  /> </div>
                <div id="FormAtributes">DIRECTOR:<input id="input" type="text" name="DIRECTOR" size="30"  required/></div>
                <div id="FormAtributes">TYPE:<input id="input" type="text" name="TYPE" size="30"  required/> </div>
                <div id="FormAtributes">YEAR:<input id="input" type="text" name="YEAR" size="30"  required/> </div>
                <div id="FormAtributes">PRODUCTION COMPANY:<input id="input" type="text" name="PRODUCTION_COMPANY" size="30"  required/> </div>
                <div id="FormAtributes">RATING:<input id="input" type="text" name="RATING" size="30"  required/> </div>
                <div id="FormAtributes">DESCRIPTION:<input id="input" type="text" name="DESCRIPTION" size="30"  required/> </div>
		<input type="submit" name="submit" id="submit" value="SUBMIT">    
                <?php  
                echo "<input type=hidden name=hiddenID  value=$MID /> "; ?>
            </form>
            
            
        </div>
    </center> 
<?php
}