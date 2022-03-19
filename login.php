<?php
 include "base.php";
?>
<head>
    <title>LOGIN</title>
    <style>
        .heading{
            position: absolute;
            height: 59px;
            left: 45%;
            top: 100px;
            font-family: Ubuntu;
            font-style: normal;
            font-weight: 500;
            font-size: 36px;
            line-height: 168.99%;
            text-align: center;
            color: #FFFFFF;
        }
        .rect{
            position: absolute;
            width: 100px;
            height: 100px;
            left: 669px;
            top: 881px;
            background: #EE519E;
        }
        .footer{
            position: absolute;
            top: 1000px;
        }
        .blurrect{
            position: absolute;
            width: 500px;
            height: 427.13px;
            left: 35%;
            top: 265px;
            background: rgba(196, 196, 196, 0.2);
            box-shadow: inset 2.49333px -2.49333px 2.49333px rgba(165, 165, 165, 0.6), inset -2.49333px 2.49333px 2.49333px rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(50px);
        }
        .whatsappno{
            position: absolute;
            width: 322px;
            height: 124px;
            left: 250px;
            top: 740px;
            font-family: Open Sans;
            font-style: normal;
            font-weight: normal;
            font-size: 24px;
            line-height: 113.5%;
            letter-spacing: -0.03em;
            text-transform: capitalize;
            color: #FFFFFF;
        }
        .emailid{
            position: absolute;
            width: 383px;
            height: 75px;
            left: 922px;
            top: 740px;
            font-family: Open Sans;
            font-style: normal;
            font-weight: normal;
            font-size: 24px;
            line-height: 113.5%;
            letter-spacing: -0.03em;
            color: #FFFFFF;
        }
        .blurcircle1{
            position: absolute;
            border-radius: 50%;
            width: 262.13px;
            height: 163.84px;
            left: 470.6px;
            top: 345px;
            background: linear-gradient(180deg, #1D69DA 0%, #D01370 100%);
            box-shadow: 0px 4px 18px rgba(0, 0, 0, 0.25);
        }
        .blurcircle2{
            position: absolute;
            border-radius: 50%;
            width: 65px;
            height: 61px;
            left: 65%;
            top: 615px;
            background: linear-gradient(180deg, #DA1D6F 0%, #EC7070 100%);
            box-shadow: 0px 4px 23px 18px rgba(0, 0, 0, 0.25);
        }
        .blurcircle3{
            position: absolute;
            border-radius: 50%;
            width: 218.43px;
            height: 167.91px;
            left: 905px;
            top: 340px;
            background: linear-gradient(180deg, #1D69DA 0%, #D01370 63.54%);
            box-shadow: 0px 4px 18px rgba(0, 0, 0, 0.25);
            transform: matrix(-1, 0.01, -0.02, -1, 0, 0);
        }
        .blurcircle4{
            position: absolute;
            border-radius: 50%;
            width: 156.24px;
            height: 122.74px;
            left: 742.55px;
            top: 500px;
            background: linear-gradient(180deg, #DA1D6F 0%, #EE519E 100%);
            box-shadow: 0px 4px 18px rgba(0, 0, 0, 0.25);
        }
        .blurcircle5{
            position: absolute;
            border-radius: 50%;
            width: 121.62px;
            height: 118.14px;
            left: 34%;
            top: 600px;
            background: linear-gradient(180deg, #DA1D6F 0%, #EE519E 100%);
            box-shadow: 0px 4px 45px 21px rgba(0, 0, 0, 0.25);
        }
        .blurcircle7{
            position: absolute;
            border-radius: 50%;
            width: 37px;
            height: 34px;
            left: 34.5%;
            top: 255px;
            background: linear-gradient(180deg, #DA1D6F 0%, #5157EE 100%);
            box-shadow: 0px 4px 28px 3px rgba(0, 0, 0, 0.25);
        }
        .blurcircle8{
            position: absolute;
            border-radius: 50%;
            width: 81px;
            height: 69px;
            left: 65%;
            top: 240px;
            background: linear-gradient(180deg, #DA1D6F 0%, #9C39FF 100%);
            box-shadow: 0px 4px 23px 18px rgba(0, 0, 0, 0.25);
        }
        .name{
            position: absolute;
            right:52.5%;
            top: 315px;
            height:17px;
            font-family: Ubuntu;
            font-style: normal;
            font-weight: 500;
            font-size: 18Px;
            line-height: 15px;
            color: #FFFFFF;
        }
        .namerect{
            position: absolute;
            width:285.29px;
            right:40%;
            top: 375px;
            height:35.29px;
            background: rgba(199, 207, 214, 0.1);
            box-shadow: inset 32.1667px -32.1667px 32.1667px rgba(151, 157, 163, 0.1), inset -32.1667px 32.1667px 32.1667px rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(64.3333px);
            border-radius: 8px;
            font-family: Open Sans;
            font-style: normal;
            font-weight: normal;
            font-size: 18px;
            line-height: 113.5%;
            letter-spacing: -0.03em;
            color: #FFFFFF;
        }
        
        .emailidrect{
            position: absolute;
            width:285.29px;
            right:40%;
            top: 480px;
            height:35.29px;
            background: rgba(199, 207, 214, 0.1);
            box-shadow: inset 32.1667px -32.1667px 32.1667px rgba(151, 157, 163, 0.1), inset -32.1667px 32.1667px 32.1667px rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(64.3333px);
            border-radius: 8px;
            font-family: Open Sans;
            font-style: normal;
            font-weight: normal;
            font-size: 18px;
            line-height: 113.5%;
            letter-spacing: -0.03em;
            color: #FFFFFF;
        }
        .message{
            position: absolute;
            right:52.5%;
            top: 415px;
            height:17px;
            font-family: Ubuntu;
            font-style: normal;
            font-weight: 500;
            font-size: 18px;
            line-height: 21px;
            text-transform: capitalize;
            color: #FFFFFF;

        }
        .sendbtn{
            position: absolute;
            width: 117px;
            height: 31px;
            right:45.5%;
            top: 645px;
            background: #EE519E;
            border: 1px solid #000000;
            box-sizing: border-box;
            border-radius: 5px;
            font-family: Open Sans;
            font-style: normal;
            font-weight: normal;
            font-size: 17px;
            line-height: 158%;
            letter-spacing: -0.03em;
            color: #FFFFFF;
        }
        .eyeicon{
            position: absolute;
            right:41%;
            top: 485px;
        }
        .newuser{
            position: absolute;
            right:45.5%;
            top: 550px;
            font-family: Open Sans;
            font-style: normal;
            font-weight: normal;
            font-size: 17px;
            line-height: 158%;
            letter-spacing: -0.03em;
            color: #FFFFFF;

        }
    </style>
</head>
<body>
    <div class="heading">
        <h3>LOGIN</h3>
    </div>
    <div class="blurcircle1"></div>
    <div class="blurcircle3"></div>
    <div class="blurcircle4"></div>
    <div class="blurcircle5"></div>
    <div class="blurrect"></div>
    <div class="blurcircle2"></div>
    <div class="blurcircle7"></div>
    <div class="blurcircle8"></div>
    <div class="name"><p>FIRST NAME</p></div>
    <input class="namerect"></input>
    <div class="message"><p>PASSWORD</p></div>
    <input type="password" class="emailidrect" name="password" id="myInput" >
    <img class=eyeicon id="eyeiconid" src="./pictures/eye_icon.png" alt="icon" onclick="myFunction()">
    <p class="newuser">NEW USER ? <a href="./signup.php">SIGNUP</a></p>
    <button class="sendbtn" onclick="window.location.href='login.php'">SUBMIT</button>
    <div class="whatsappno"><p>WHATSAPP  :  9999999999</p></div>
    <div class="emailid"><p>EMAIL  :  colourthreads@gmail.com</p></div>
    <script>
        function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>
</body>