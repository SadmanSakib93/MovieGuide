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
    #MovieDiv
    {
        opacity: .7;
                position: relative;
                top:26%;
                left: 35%;
                padding: 10px;
                margin: 15px;
                border-bottom: 3px solid whitesmoke;
                width: 25%;
                font-size: 23px;
                background-color: transparent;               
                color:whitesmoke;
                transition: all 0.5s ease;  
            
    }    
            #MovieImg
            {
                position: relative;
                width: 45%;
                height: 40%;
                left: 30%;
                border: 2px solid white;
                border-radius: 5px;
                background-color: #969696;

            }
            #morebtn
            {
                position: relative;
                left: 45%;
                text-decoration: none;
                border: 2px solid white;
                border-radius: 5px;
                color: red;

            }
            #morebtn:hover
            {
                color: sienna;
                background-color: white;
                border: 2px solid black;
            }    
 </style>

<head>
    <title>SEARCH RESULT</title>
   
    
</head>
<body>
    
    <img id="TitleBar" src="image/banner.jpg">
</body>
<?php
include ('Connect.php');
$count=0;
if(isset($_POST['submit'])){
    
    if(!isset($_POST['SearchTYPE']) && !isset($_POST['SearchREGION']) && !isset($_POST['SearchYEAR']))
    {
    $count=1;
    session_start();
    $id=$_SESSION["UserID"];
    print '<script type="text/javascript">'; 
    print 'alert("Sorry, No You have not selected any criteria.")'; 
    print '</script>';
    header("refresh:0 Home.php?id=$id");         
    }

    if(isset($_POST['SearchTYPE']))
    {
        $SearchTYPE=$_POST['SearchTYPE'];
       // echo 'SearchByYear'.$SelectedYear;
    }
    if(isset($_POST['SearchREGION']))
    {
        $SearchREGION=$_POST['SearchREGION'];
       // echo 'SearchByRating'.$SelectedRating;
    }
    if(isset($_POST['SearchYEAR']))
    {
        $SearchYEAR=$_POST['SearchYEAR'];
       // echo 'SearchByType'.$SelectedType;
    }
}




if($SearchTYPE!="" && $SearchREGION!="" && $SearchYEAR!="") //ALL 3
{
    
    $SearchByAll = mysql_query("SELECT * FROM movietable WHERE TYPE=$SearchTYPE AND REGION='$SearchREGION' AND YEAR='$SearchYEAR'");
    while($Row= mysql_fetch_assoc($SearchByAll))
    {      
         MovieList($Row);
    }
}




else if($SearchTYPE!="" && $SearchREGION!="" && $SearchYEAR=="") //TYPE & REGION
{
    
    $SearchByTypeAndRegion = mysql_query("SELECT * FROM movietable WHERE TYPE='$SearchTYPE' AND REGION='$SearchREGION'");
    while($Row= mysql_fetch_assoc($SearchByTypeAndRegion))
    {      
         MovieList($Row);
    }
}

else if($SearchTYPE=="" && $SearchREGION!="" && $SearchYEAR!="") //REGION & YEAR
{
    
    $SearchByRegionAndYear = mysql_query("SELECT * FROM movietable WHERE REGION='$SearchREGION' AND YEAR='$SearchYEAR'");
    while($Row= mysql_fetch_assoc($SearchByRegionAndYear))
    {      
         MovieList($Row);
    }
}

else if($SearchTYPE!="" && $SearchREGION=="" && $SearchYEAR!="") //TYPE & YEAR
{
    
    $SearchByTypeAndYear= mysql_query("SELECT * FROM movietable WHERE TYPE='$SearchTYPE' AND YEAR='$SearchYEAR'");
    while($Row= mysql_fetch_assoc($SearchByTypeAndYear))
    {      
         MovieList($Row);
    }
}

else if($SearchTYPE!="" && $SearchREGION=="" && $SearchYEAR=="")//ONLY TYPE
{
    
    $SearchByType= mysql_query("SELECT * FROM movietable WHERE TYPE='$SearchTYPE'");
    while($Row= mysql_fetch_assoc($SearchByType))
    {      
         MovieList($Row);
    }
}
else if($SearchTYPE=="" && $SearchREGION!="" && $SearchYEAR=="")//ONLY REGION
{
    
    $SearchByRegion = mysql_query("SELECT * FROM movietable WHERE REGION='$SearchREGION'");
    while($Row= mysql_fetch_assoc($SearchByRegion))
    {      
         MovieList($Row);
    }
}
else if($SearchTYPE=="" && $SearchREGION=="" && $SearchYEAR!="")//ONLY REGION
{
    
    $SearchByYear = mysql_query("SELECT * FROM movietable WHERE YEAR='$SearchYEAR'");
    while($Row= mysql_fetch_assoc($SearchByYear))
    {      
         MovieList($Row);
    }
}

if($count==0) {
    session_start();
    $id=$_SESSION["UserID"];
    print '<script type="text/javascript">'; 
    print 'alert("Sorry, No Movie found.")'; 
    print '</script>';
    header("refresh:0 Home.php?id=$id");
 }


function MovieList($Row)
{
          ?>  <div id="MovieDiv"> <?php
          global $count;
          $count++;
            
            echo  "<img id=MovieImg src=".$Row["LOGO"]; "</br>"?> id="ResPic" >  <?php
            echo "<ul>";
            echo  "<li id=ListInfo>"."Name: ". $Row["NAME"]; "</li>" ?><?php
            echo  "<li id=ListInfo>"."Type: ". $Row["TYPE"]; "</li>" ?><?php
            echo  "<li id=ListInfo>"."Region: ". $Row["Region"]; "</li>" ?><?php
            echo  "<li id=ListInfo>"."Release Year: ". $Row["YEAR"]; "</li>" ?><?php
            echo  "<li id=ListInfo>"."Rating: ". $Row["RATING"]; "</li>" ?><?php
            echo "</ul>" ?><?php
            $MID=$Row["ID"];
            echo  "<a id=morebtn href=MovieDetails.php?id=$MID >". "MORE" . "</a>" ?>

        </div>
<?php
}