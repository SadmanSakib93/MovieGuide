<style>
        body
            {
                background:url(image/back.jpg);
            }
            #TitleBar
            {
                text-align: center;
                font-size: 55px;
                font-weight: bolder;
                font-family: old_stamper;
                text-shadow: 5px 5px 5px #969696;
                color: black;
                width: 100%;
                height: 100px;
                border: 2px solid #ff3333;
                background-color: #555555;
                border-radius: 5px;

            }     
            #SearchDiv
            {
                position: relative;
                background-color: #000;
                opacity: .6;
                width: 100%;
                height: 25%;
                color: cornflowerblue;
                top: 150px;
                text-align: center;
                border: 1px solid whitesmoke;
                border-radius: 3px;
            }   
            #SearchRes
            {
                position: relative; 
                font-size: 30px;
                text-spacing: 5px;
                text-shadow: 4px 4px 6px #333;
                text-align: center;
                top:20px;
                width: 30%;
                height: 60px;
                opacity: 1;
                border: 1px solid #000;
                border-radius: 7px;
                
            }  
             #FindButton
            {
                position: relative;
                text-align: center;
                top: 50px;
                left: 1%;
                opacity: 1;
                border-radius:5px;
                margin:5px;
                font-size:22px;
                color:black;
                cursor: pointer;
                transition: all 0.4s ease;            
                box-shadow: 2px 2px black; 
                font-family:NewRocker;
                font-weight: bold;                
            }
            #FindButton:hover
            {
                background-color: black;
                box-shadow: 4px 4px whitesmoke;
                color: whitesmoke;
            }
            #FindButton:active
            {
                background-color: red;
                box-shadow: 4px 4px grey;
                color: black;
                font-size: 28px;
            }           
</style>   
<?php
include ('Connect.php');
$QueryType=  mysql_query("SELECT DISTINCT Type FROM movietable ORDER BY Type");
$QueryRegion=  mysql_query("SELECT DISTINCT Region FROM movietable");
$QueryYear=  mysql_query("SELECT DISTINCT Year FROM movietable ORDER BY Year");

?>
<head>
    <title>HOME</title>
   
    
</head>





<body>
<img id="TitleBar" src="image/banner.jpg">
             
    
        <div id="SearchDiv">
            <form   action="SearchMovie.php" method="post" > 
                <select name="SearchTYPE" id="SearchRes">
<?php
                echo "<option value='' >" . "SELECT TYPE" . "</option>" ?><?php
                while($row = mysql_fetch_assoc($QueryType)) { 
                    
                    echo "<option value=".$row['Type'].">".$row['Type']; "</option>" ?><?php
                    
                }
                ?>
                </select>            
                
                <select name="SearchREGION" id="SearchRes">
<?php
                echo "<option value='' >" . "SELECT REGION" . "</option>" ?><?php
                while($row = mysql_fetch_assoc($QueryRegion)) { 
                    echo "<option value=".$row['Region'].">".$row['Region']; "</option>" ?><?php
                    
                }
                ?>
                </select>
                <select name="SearchYEAR" id="SearchRes">
<?php
                echo "<option value='' >" . "SELECT YEAR" . "</option>" ?><?php
                while($row = mysql_fetch_assoc($QueryYear)) { 
                    echo "<option value=".$row['Year'].">".$row['Year']; "</option>" ?><?php
                    
                }
                ?>
                </select>                
                
                
                
                
                <input id="FindButton" type="submit" name="submit" id="submit" value="SEARCH">
            </form>
        </div> 

</body>
