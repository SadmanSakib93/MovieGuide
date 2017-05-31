<!doctype html>

<html>
    <head>
       <title> 
            MovieGuide
       </title>
        <style>
            body
            {
                background:url(image/back.jpg);
            }
            
            #HREF
            {
                position: relative;
                overflow: visible;
                backface-visibility:  visible;
                font-family:umbrage2;
                font-weight: 100;
                font-size: 25px;
                color: whitesmoke;
                margin-left: 15px;
                margin-bottom: 15px;
                text-shadow: 3px 3px 3px whitesmoke;
                border-radius: 5px;
                background-color: transparent;
                transition: all 0.4s ease-in-out;
                left: 0%;
                text-decoration: none;
               
                
            }

            #HREF:hover
            {
                color: #555555;
                font-size: 27px;
                text-shadow: 3px 3px 3px lightcoral;
                
            }
            #HREF:active
            {
                color: red;
                font-size: 28px;
                background-color: black;
                
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

            #regORlog
            {
                position: relative;
                margin: 15px;
                padding: 15px;
                left: 7%;
            }
        #NameP{
            text-align: center;
        }
        #loginform
        {
            position: relative;
            border: 1px solid black;
            padding: 10px;
            margin: 10px;
            font-size: 20px;
            width: 40%;
            left: 30%;
            top: 10%;
            background-color: lightgray;
            box-shadow: 3px 3px 3px #969696;
           border-radius: 7px;
           border: 2px solid  #969696;
        }
        #inputbx
        {
           margin: 10px;
           width: 260px;
           height: 35px;
           text-align: center;
           background-color: gray;
           box-shadow: 3px 3px 3px #969696;
           border-radius: 7px;
           border: 4px solid #ffffff;
           cursor: pointer;
           transition: all 0.6s ease; 
           font-size: 20px;
        }
        #inputbx:hover
        {
            width: 280px;
            border: 4px solid #000;
            height: 40px;
            color: #969696;
            background-color: whitesmoke;
        }
        #Apassword
        {
           margin: 10px;
           width: 260px;
           height: 35px;
           text-align: center;
           background-color: gray;
           box-shadow: 3px 3px 3px #969696;
           border-radius: 7px;
           border: 4px solid #ffffff;
           cursor: pointer;
           transition: all 0.6s ease; 
           font-size: 20px;
        }
        #Apassword:hover
        {
            width: 280px;
            border: 4px solid #000;
            height: 40px;
            color: #969696;
            background-color: whitesmoke;
        }        

        #inputbtn
        {
            position: relative;
           margin: 10px;
           width: 50%;
           height: 35px;
           background-color: aliceblue;
           box-shadow: 3px 3px 3px #969696;
           border-radius: 7px;
           border: 2px solid  #969696;
           cursor: pointer;
           left: 24%;
           font-size: 20px;
           transition: all 0.6s ease;           
        }
        #inputbtn:hover
        {
            width: 53%;
            font-size: 23px;
            border: 4px solid #000;
            height: 40px;
            color: #969696;
            background-color: whitesmoke;
        }          


        </style>
    </head>
    
    <body>
        <img id="TitleBar" src="image/banner.jpg">
             
    
        
        <div id="regORlog">
            <a id="HREF" href="SignUp.php">Not a member ? Click to SIGN UP </a>
        </div>
    <form id="loginform" action="LogInDB.php" method="post">
        <center> <h1 id="hdr">LOG IN</h1></center>
        <p id="NameP"><input id="inputbx" type="text"  name ="E_MAIL" placeholder="E-MAIL" required=""/></p>
        <p id="NameP"><input id="Apassword" type="password"  name ="PASSWORD" placeholder="PASSWORD" required=""/> </p>
<input id="inputbtn" type="submit" value="LOG IN"/>

</form>        
    
    </body>
