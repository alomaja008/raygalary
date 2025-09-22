<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header("Location: index.php");
        exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Response</title>
    <style>
        body{
            padding: 0;
            margin: 0;
            background-color: #574e4eff;
        }
        .error{
            background-color: #0b3991b6;
            padding-left: 6%;
            padding-right: 6%;
            margin-left: 15%;
            margin-right: 15%;
            margin-top: 8%;
            box-sizing: border-box;
            border: #d9e1eeff 5px solid;
        }
        .error,h1{
            align-items: center;
            margin-left: 20%;
            text-align: center;
            font-family: sans-serif;
            font-size: larger;
            color: #caf7ffb6;
        }
        span{
            color: #7d9987b6;
        }
        h3 a button{
            color: #ffffffff;
            background-color: #caf7ff80;
            text-transform: capitalize;
            cursor: pointer;
            border-radius: 6px;
            height: 35px;
            position: static;
            align-self: center;
            float: right;
            margin-top: 54.8px;
            height: 33px;
            padding-left: 5px;
            padding-right: 5px;
            font-size: bold;
            font-size: large;
        }
        h3 p a{
            color: #ffffffff;
            background-color: #caf7ff70;
            text-transform: capitalize;
            cursor: pointer;
            border-radius: 6px;
            height: 35px;
            float: left;
            text-decoration: none;
            box-sizing: border-box;
            border: #12338db6 2px groove;
            padding-left: 10px;
            padding-right: 10px;
            font-size: bold;
        }
        a{
            padding-left: 2px;
            padding-right: 2px;
            padding-top: 2px;
            padding-bottom: 2px;
        }
        marquee{
            background-color: #505f7ab6;
            border-radius: 20px;
            height: 38px;
        }
        marquee, p{
            height: 42px;
            color: #ffffffff;
        }

    </style>
</head>
<body>
   <div class="x">   
     <div class="error" class="error" name="error">
        <h2>message: <br><span>"SUCCESS!".</span></h2>  
        <div class="he">
            <h3>
                Thanks for sharing you Idea with Us! We so much appreciate!. <br>if you have any issue kindly reach out to Us via our <cite>HELP CENTER</cite> button below We are available to hear your response...<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thank You!..<br><a href="contact.php"><button >Contact</button></a><p><a href="index1.php">continue</a></p>
                
            </h3>
        </div>
    </div>
   </div>
</body>
</html>