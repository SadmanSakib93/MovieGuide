
<style>
        body
            {
                background:url(image/back.jpg);
                color: white;
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
            
            #TBa
            {
                color: black;
            }    
            #Table
            {
                position: relative;
                left: 28%;
                padding-top:50px;
            }
        #submitform{


         display:none;
              
        }
        #review{
            position: relative;
            left: 28%;
            width:45%;
            border-bottom: 2px solid black;
            

              
        }
                   
        #tdrowbutton{
                    text-align:center;
                    padding:13px 0px 3px 0px;
                    color:white;
                 }
         #tdrow{
                    text-align:center;
                    border-bottom:1px solid black;
                    border-left:1px solid black;
                    font-size: 22px;
                    background: #444444;
                    width:430px;
                    color: black;
                    padding: 5px 5px 5px 0;
                      
                 }  
         #Header1
            {
               width:250px;
               background-color: black;
               color: white;
               text-align:center;
               font-size: 30px;
               
            }
            #Header2{
                background-color: black;
               color: white;
                width:340px;
                 font-size: 30px;
            }
                             @font-face
            {
                font-family: old_stamper;
                src:url(fonts/old_stamper.ttf);
            } 
            #info_header
            {
                background-color: #969696;
                width: 45%;
                border: 2px solid black;
                position: relative;
                left: 28%;
                color:whitesmoke;
                transition: all 0.5s ease;  
                border-radius: 5px;                 
            }
            #GiveRivForm
            {

                position: relative;
                right: 5%;
                position: relative;
                padding: 5px;
                margin-top: 20px;
                width: 50%;
                left:28%;                
            }
            #ReviewDiv
            {
                border-bottom: 2px solid beige;
                width: 45%;
                left: 28%;
                position: relative;
                font-size: 25px;
                padding-top: 15px;
                text-align: center;
                
            }
            #InputBox
           {
               width: 50%;
               max-width: 50%;
               height: 80px;
               border: 1px solid black;
               box-shadow: 2px 2px #7c7d7e  ;
               border-radius:5px;
               text-align: center;
           }
            #UN
            {
                font-size: 24px;
                font-weight: bold;     
            }
             #UR
            {
                font-size: 20px;
                font-weight: normal;               
            }
            #CoverPic
            {
                position: absolute;
                width: 65%;
                height: 50%;
                top: 20%;
                left: 25%;
                border-radius: 6px;
                border: 2px solid whitesmoke;
            }

            #SubmitReviewButn
            {
                width: 120px;
                height: 30px;
                border: 2px solid black;
                color: black;
                box-shadow: 3px 3px 3px #969696;
                border-radius: 6px;

            }



          
</style>

<?php
$MovieID = $_REQUEST['id'];

include ('Connect.php');

$qry = mysql_query("SELECT * FROM movietable WHERE ID = $MovieID ");

$rows=  mysql_fetch_assoc($qry);
	$name = $rows['NAME'];
        $type = $rows['TYPE'];
        $year = $rows['YEAR'];
        $director = $rows['DIRECTOR'];
        $rating= $rows['RATING'];
        $des = $rows['DESCRIPTION'];
        $logo = $rows['LOGO'];
        $reg = $rows['Region'];
        $pro_comp = $rows['PRODUCTION COMPANY'];
        
        
$MovieReview=mysql_query("SELECT * FROM reviewtable WHERE MovieID='$MovieID'");

$MovieCover=mysql_query("SELECT * FROM moviecovertable WHERE MovieID='$MovieID'");

$UserName=mysql_query("SELECT * FROM usertable,reviewtable  WHERE usertable.UserID=reviewtable.UserID AND reviewtable.MovieID='$MovieID'");
        
        
        
        ?>
<div id="gamesstablediv">
<img id="TitleBar" src="image/banner.jpg">        
            
   
    
        <?php
        
        echo "<p>" ."<img id=MovieImage  src=".$logo." width=200px height=350px border=3px>" . "</p>"; ?>
            

<?php
$CvrImg=array();
        while($rows = mysql_fetch_assoc($MovieCover)){
            
            $CvrImg[] = $rows['CoverName'];
        }
            ?>
        <script>
        var jArray= <?php echo json_encode($CvrImg); ?>;
        var imageIndex=0;

        function ChangeCover(){
            
            CoverPic.setAttribute("src", jArray[imageIndex]);
            imageIndex++;
            if(imageIndex>=jArray.length)
            {
                imageIndex=0;
            }      

            
        }

                var intervalHandle= setInterval(ChangeCover,2000);

        </script>
        
    
        <img id="CoverPic" src="" />
        <?php
        
        
       echo "<table id=Table >";
       
        //Logo 
  /*      echo "<form action=GameDetails.php method=post >";  
        echo "<tr >";       
        echo "<td colspan=2>" .  "<center>"."<img id=MovieImage  src=".$logo." width=200px height=350px border=3px>" ."</center>". "</td>";
        echo"</tr>";
   
   */
        
   
        //Name
        echo "<tr >"; 
        echo " <th id=Header1>Name</th>";
        echo "<th id=Header2 >".$name."</td>";
        echo"</tr>";
        
         //Type
        echo "<tr >";
        echo "<td id=tdrow>" .'Type'.   "</td>";
        echo "<td id=tdrow>" .$type .   "</td>";
        echo"</tr>";
        
         //Region
        echo "<tr >";
        echo "<td id=tdrow>" .'Region'.   "</td>";
        echo "<td id=tdrow>" .$reg .   "</td>";
        echo"</tr>";        
        
        
        //Year
        echo "<tr >";
        echo "<td id=tdrow>" .'Year'.   "</td>";
        echo "<td id=tdrow>" .$year.   "</td>";
        echo"</tr>";
        
        //Developer
         echo "<tr >";
        echo "<td id=tdrow>" .'Director'.   "</td>";
        echo "<td id=tdrow>".$director.   "</td>";
        echo"</tr>";
        
          //Description
         echo "<tr >";
        echo "<td id=tdrow>" .'Description'.   "</td>";
        echo "<td id=tdrow>".$des .   "</td>";
        echo"</tr>";
        
         //Rank
         echo "<tr >";
        echo "<td id=tdrow>" .'Rank'.   "</td>";
        echo "<td id=tdrow>" .$rating.  "</td>";
        echo"</tr>";
        
        //PRODUCTION COMPANY
         echo "<tr >";
        echo "<td id=tdrow>" .'PRODUCTION COMPANY'.   "</td>";
        echo "<td id=tdrow>".$pro_comp .   "</td>";
        echo"</tr>";
       
        echo"</form>";
        
 
        echo"</table>";
        
       
     
       
?></div>
      <?php
while(($MviReviewRow = mysql_fetch_assoc($MovieReview)) && ($UserNameFetch = mysql_fetch_assoc($UserName))) { ?>
        <div id="ReviewDiv"><?php            
            echo  "<li id=UN>".$UserNameFetch["UserName"]; "</li>" ?><?php
            echo  "<p id=UR>". $MviReviewRow["ReviewMSG"]; "</p>" ?><?php
        ?></div>

<?php
}
      
 ?>
<form id="GiveRivForm" action="InsertReviewDB.php" method="get"> 

            Enter Your Review:  <input id="InputBox" type="text" name="Review" placeholder="Enter Your Review Here"   /> <?php

            echo "<input type=submit name=SubmitReviewButton id=SubmitReviewButn value=POST>" ?><?php
            echo "<input type=hidden name=MID value=$MovieID >" ?>
        </form> 
