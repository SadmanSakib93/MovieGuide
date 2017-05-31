<!doctype html>

<html>
    <head>
       <title> 
           Sign Up
       </title>
        

        
        <style>
            body
            {
                background:url(image/back.jpg);
            }        


            #SGForm
            {
                position: absolute;
                background-color:  antiquewhite;
                opacity: .5;
                width: 45%;
                top: 20%;
                left: 28%;
                font-weight: bold;
                font-size: 25px;
                border: 2px solid black;
                margin-top: 20px;
                box-shadow: 2px 2px 2px 2px gray;
                border-radius: 5px;
            }

            
            #FormAtributes
            {
                text-align: center;
                position: relative;
                left: 20%;
                width: 300px;
                height: 60px;
                padding: 20px;
                margin: 20px;
                border: 2px solid #555555;
                box-shadow: 4px 3px 3px 3px slategrey;
                border-radius: 5px;                
                font-weight: bolder;
            }
            #submit
            {
                position: relative;
                left: 37%;
                width: 150px;
                height: 40px;
                border-radius:3px;
                font-size:25px;
                margin: 10px;
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
                
                border: 2px solid lightslategray;
                box-shadow: 2px 2px brown; 
                width: 80%;
                height: 40%;
                background-color: #555555;               
                color:whitesmoke;
                transition: all 0.5s ease;  
                border-radius: 5px; 
            }
            #input:hover
            {
                background-color: white;
                width: 83%;
                color: black;
                
            }

           #TitleBar
            {
                text-align: center;
                font-size: 55px;
                font-weight: bolder;
                text-shadow: 5px 5px 5px #969696;
                color: black;
                width: 100%;
                height: 100px;
                border: 2px solid #ff3333;
                background-color: #555555;
                border-radius: 5px;
            }        
            

        </style>
    </head>
        
    <body>
         
    <img id="TitleBar" src="image/banner.jpg">
        


            
            <form id="SGForm" action="SignUpDB.php" method="post" > 
                <h1><center id="hdr">SIGN UP</center></h1>
                <div id="FormAtributes">NAME:</center>  <input id="input" type="text" name="NAME"  size="30"  required/>  </div>
                <div id="FormAtributes">E-MAIL:</center><input id="input" type="text" name="E_MAIL" size="30"  required/></div>
                <div id="FormAtributes">PASSWORD:<input id="input" type="text" name="PASSWORD" size="30"  required/> </div>
                <input type="submit" name="submit" id="submit" value="SUBMIT">             
            </form>

        
    </body>
</html>
