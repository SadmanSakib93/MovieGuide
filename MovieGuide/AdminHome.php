    <style>
        body{
            background-color: whitesmoke;
        }
     
        #Adform{
            position: relative;
            border: 1px solid black;         
            text-decoration-line: cancel-all;
            font-size: 20px;
            padding: 15px;
            margin: 15px;
            top: 150px;
            left: 30%;
            width: 35%;
            background-color: lightgray;
            box-shadow: 3px 3px 3px #969696;
           border-radius: 7px;
           border: 2px solid  gainsboro; 
        }
        #LogOut
        {
            text-decoration: none;
            color: black;
            position: relative;
            left: 80%;
            border: 2px solid black;
            border-radius: 7px;
            box-shadow: 3px 3px 3px #969696;
            background-color: darkgray;


        }
        #LogOut:hover
        {
            background-color: aliceblue;
            
        }
        #LogOut:active
        {
            background-color: tomato;
            
        }
         #hdr
        {
            font-family: old_stamper;
            text-shadow: 10px 3px 3px dimgray;
            border: 2px seashell;
            font-size: 45px;
            
        }    
        #atri
        {
            text-decoration: none;
            color: black;
            border: 2px solid black;
            background-color: darkgray;
            border-radius: 7px;
            box-shadow: 3px 3px 3px #969696;

          
        }
        #atri:hover
        {
            background-color: aliceblue;
            
        }
        #atri:active
        {
            background-color: tomato;
            
        }        
    </style>
<?php

    include ('Connect.php');
    session_start();
    $AdID=$_SESSION["AdminID"];
    $Query=  mysql_query("SELECT * FROM admintable WHERE AdminID=$AdID");
    $QryResArray=  mysql_fetch_assoc($Query);
    
    $name = $QryResArray['AdminName'];
    $id = $QryResArray['AdminID']; 
    ?>
    <form id="Adform">
        <h1><center id="hdr">ADMIN HOME</center></h1><?php
    echo "ADMIN NAME:".$name."</br>";
    
    echo "ADMIN ID:".$id."</br>"; ?>
    <a id="LogOut" href="AdminPanel.php">LOG OUT</a> <?php
    
    
    
    
?>
<ul>
    <p><li><a id="atri" href="MovieInsert.php" >INSERT NEW MOVIE</a> </li></p>
    <p><li><a id="atri" href="MovieDisplay.php" >EDIT or DELETE MOVIE FROM DATABASE</a> </li></p>
 
    
</ul>
    </form>



