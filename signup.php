<?php
 include "base.php";
?>
<head>
    <title>SIGNUP</title>
    <style>
        .heading{
            position: absolute;
            height: 59px;
            left: 590px;
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
            height: 250px;
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
            width: 800.06px;
            height: 727.13px;
            left: 329.7px;
            top: 200px;
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
            left: 1119px;
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
            left: 359.89px;
            top: 600px;
            background: linear-gradient(180deg, #DA1D6F 0%, #EE519E 100%);
            box-shadow: 0px 4px 45px 21px rgba(0, 0, 0, 0.25);
        }
        .blurcircle6{
            position: absolute;
            border-radius: 50%;
            width: 122.63px;
            height: 59.25px;
            left: 501.3px;
            top: 255px;
            background: linear-gradient(180deg, #DA1D6F 0%, #EE519E 100%);
            box-shadow: 0px 4px 18px rgba(0, 0, 0, 0.25);
        }
        .blurcircle7{
            position: absolute;
            border-radius: 50%;
            width: 37px;
            height: 34px;
            left: 321px;
            top: 255px;
            background: linear-gradient(180deg, #DA1D6F 0%, #5157EE 100%);
            box-shadow: 0px 4px 28px 3px rgba(0, 0, 0, 0.25);
        }
        .blurcircle8{
            position: absolute;
            border-radius: 50%;
            width: 81px;
            height: 69px;
            left: 1084px;
            top: 240px;
            background: linear-gradient(180deg, #DA1D6F 0%, #9C39FF 100%);
            box-shadow: 0px 4px 23px 18px rgba(0, 0, 0, 0.25);
        }
        .firstname{
    position: absolute;
    left: 25.94%;
    top: 225px;
    bottom: 75.59%;
    font-family: Ubuntu;
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 21px;
    color: #FFFFFF;
}
.firstnamerect{
    position: absolute;
    width:285.29px;
    left:25.94%;
    top: 300px;
    height:35.29px;
    background: rgba(199, 207, 214, 0.1);
    box-shadow: inset 32.1667px -32.1667px 32.1667px rgba(151, 157, 163, 0.1), inset -32.1667px 32.1667px 32.1667px rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(64.3333px);
    border-radius: 8px;
}
.lastname{
    position: absolute;
    left: 50%;
    top: 225px;
    bottom: 75.59%;
    font-family: Ubuntu;
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 21px;
    color: #FFFFFF;
}
.lastnamerect{
    position: absolute;
    width:285.29px;
    left: 50%;
    top: 300px;
    height:35.29px;
    background: rgba(199, 207, 214, 0.1);
    box-shadow: inset 32.1667px -32.1667px 32.1667px rgba(151, 157, 163, 0.1), inset -32.1667px 32.1667px 32.1667px rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(64.3333px);
    border-radius: 8px;
}
.doorno{
    position: absolute;
    left: 25.94%;
    top: 350px;
    bottom: 75.59%;
    font-family: Ubuntu;
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 21px;
    color: #FFFFFF;
}
.doornorect{
    position: absolute;
    width:285.29px;
    left: 25.94%;
    top: 425px;
    height:35.29px;
    background: rgba(199, 207, 214, 0.1);
    box-shadow: inset 32.1667px -32.1667px 32.1667px rgba(151, 157, 163, 0.1), inset -32.1667px 32.1667px 32.1667px rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(64.3333px);
    border-radius: 8px;
}
.street{
    position: absolute;
    left: 50%;
    top: 350px;
    bottom: 75.59%;
    font-family: Ubuntu;
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 21px;
    color: #FFFFFF;
}
.streetrect{
    position: absolute;
    width:285.29px;
    left: 50%;
    top: 425px;
    height:35.29px;
    background: rgba(199, 207, 214, 0.1);
    box-shadow: inset 32.1667px -32.1667px 32.1667px rgba(151, 157, 163, 0.1), inset -32.1667px 32.1667px 32.1667px rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(64.3333px);
    border-radius: 8px;
}
.city{
    position: absolute;
    left: 25.94%;
    top: 475px;
    bottom: 75.59%;
    font-family: Ubuntu;
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 21px;
    color: #FFFFFF;
}
.cityrect{
    position: absolute;
    width:285.29px;
    left: 25.94%;
    top: 550px;
    height:35.29px;
    background: rgba(199, 207, 214, 0.1);
    box-shadow: inset 32.1667px -32.1667px 32.1667px rgba(151, 157, 163, 0.1), inset -32.1667px 32.1667px 32.1667px rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(64.3333px);
    border-radius: 8px;
}
.state{
    position: absolute;
    left: 50%;
    top: 475px;
    bottom: 75.59%;
    font-family: Ubuntu;
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 21px;
    color: #FFFFFF;
}
.staterect{
    position: absolute;
    width:285.29px;
    left: 50%;
    top: 550px;
    height:35.29px;
    background: rgba(199, 207, 214, 0.1);
    box-shadow: inset 32.1667px -32.1667px 32.1667px rgba(151, 157, 163, 0.1), inset -32.1667px 32.1667px 32.1667px rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(64.3333px);
    border-radius: 8px;
}
.pincode{
    position: absolute;
    left: 25.94%;
    top: 600px;
    bottom: 75.59%;
    font-family: Ubuntu;
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 21px;
    color: #FFFFFF;
}
.pincoderect{
    position: absolute;
    width:285.29px;
    left: 25.94%;
    top: 675px;
    height:35.29px;
    background: rgba(199, 207, 214, 0.1);
    box-shadow: inset 32.1667px -32.1667px 32.1667px rgba(151, 157, 163, 0.1), inset -32.1667px 32.1667px 32.1667px rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(64.3333px);
    border-radius: 8px;
}
.email{
    position: absolute;
    left: 50%;
    top: 600px;
    bottom: 75.59%;
    font-family: Ubuntu;
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 21px;
    color: #FFFFFF;
}
.emailrect{
    position: absolute;
    width:285.29px;
    left: 50%;
    top: 675px;
    height:35.29px;
    background: rgba(199, 207, 214, 0.1);
    box-shadow: inset 32.1667px -32.1667px 32.1667px rgba(151, 157, 163, 0.1), inset -32.1667px 32.1667px 32.1667px rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(64.3333px);
    border-radius: 8px;
}
.password{
    position: absolute;
    left: 25.94%;
    top: 725px;
    bottom: 75.59%;
    font-family: Ubuntu;
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 21px;
    color: #FFFFFF;
}
.passwordrect{
    position: absolute;
    width:285.29px;
    left: 25.94%;
    top:800px ;
    height:35.29px;
    background: rgba(199, 207, 214, 0.1);
    box-shadow: inset 32.1667px -32.1667px 32.1667px rgba(151, 157, 163, 0.1), inset -32.1667px 32.1667px 32.1667px rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(64.3333px);
    border-radius: 8px;
}
.confirmpassword{
    position: absolute;
    left: 50%;
    top: 725px;
    bottom: 75.59%;
    font-family: Ubuntu;
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 21px;
    color: #FFFFFF;    
}
.confirmpasswordrect{
    position: absolute;
    width:285.29px;
    left: 50%;
    top:800px ;
    height:35.29px;
    background: rgba(199, 207, 214, 0.1);
    box-shadow: inset 32.1667px -32.1667px 32.1667px rgba(151, 157, 163, 0.1), inset -32.1667px 32.1667px 32.1667px rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(64.3333px);
    border-radius: 8px;
}
        .sendbtn{
            position: absolute;
            width: 117px;
            height: 31px;
            right:50%;
            top: 865px;
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
    </style>
</head>
<body>
    <div class="heading">
        <h3>SIGN UP </h3>
    </div>
    <div class="blurcircle1"></div>
    <div class="blurcircle3"></div>
    <div class="blurcircle4"></div>
    <div class="blurcircle5"></div>
    <div class="blurcircle6"></div>
    <div class="blurrect"></div>
    <div class="blurcircle2"></div>
    <div class="blurcircle7"></div>
    <div class="blurcircle8"></div>
    <div class="firstname"><h3> FIRST NAME</h3></div>
    <input type="text" class="firstnamerect" name="fname">
    <div class="lastname"><h3> LAST NAME</h3></div>
    <input type="text" class="lastnamerect" name="lname">
    <div class="doorno"><h3> DOOR NO</h3></div>
    <input type="text" class="doornorect" name="doorno">
    <div class="street"><h3> STREET</h3></div>
    <input type="text" class="streetrect" name="street">
    <div class="city"><h3> CITY</h3></div>
    <input type="text" class="cityrect" name="city">
    <div class="state"><h3> STATE</h3></div>
    <input type="text" class="staterect" name="state">
    <div class="pincode"><h3> POSTAL CODE</h3></div>
    <input type="text" class="pincoderect" name="pincode">
    <div class="email"><h3> EMAIL</h3></div>
    <input type="text" class="emailrect" name="email">
    <div class="password"><h3>PASSWORD</h3></div>
    <input type="text" class="passwordrect" name="password">
    <div class="confirmpassword"><h3>RE-ENTER PASSWORD</h3></div>
    <input type="text" class="confirmpasswordrect" name="confirmpassword">
    <button class="sendbtn">SUBMIT</button>
</body>