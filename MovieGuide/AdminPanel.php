<html>
    <style>
        body{
            background-color: whitesmoke;
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
            top: 150px;
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
            width: 270px;
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
            width: 270px;
            border: 4px solid #000;
            height: 40px;
            color: #969696;
            background-color: whitesmoke;
        }        

        #inputbtn
        {
            position: relative;
           margin: 10px;
           width: 45%;
           height: 35px;
           background-color: aliceblue;
           box-shadow: 3px 3px 3px #969696;
           border-radius: 7px;
           border: 2px solid  #969696;
           cursor: pointer;
           left: 25%;
           font-size: 20px;
           transition: all 0.6s ease;           
        }
        #inputbtn:hover
        {
            width: 47%;
            font-size: 23px;
            border: 4px solid #000;
            height: 40px;
            color: #969696;
            background-color: whitesmoke;
        }      

        #NameP{
            text-align: center;
        }

    </style>

<body>


    <form id="loginform" action="AdminLogin.php" method="post">
        <center> <h1 id="hdr">ADMIN LOGIN</h1></center>
        <p id="NameP"> <input id="inputbx" type="text"  name ="AdminName" placeholder="Name" required=""/></p>
        <p id="NameP"><input id="Apassword" type="password"  name ="AdminPassword" placeholder="Password" required=""/> </p>
        <input id="inputbtn" type="submit" value="LOG IN"/>

</form>

</body>
</html>