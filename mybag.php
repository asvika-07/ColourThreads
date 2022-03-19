<?php
 include "base.php";
?>
<head>
    <title>
        address
    </title>
    <link rel="stylesheet" href="./css/shippingaddress.css">
    <style>
        .blurrect1{
            position: absolute;
            width: 894px;
            height: 575px;
            left: 27px;
            top: 160px;

            background: rgba(196, 196, 196, 0.2);
            box-shadow: inset 2.49333px -2.49333px 2.49333px rgba(165, 165, 165, 0.6), inset -2.49333px 2.49333px 2.49333px rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(74.8px);
        }
        .photo1{
            position: absolute;
            width: 208px;
            height: 201px;
            left: 35px;
            top: 222px;
        }
        .photo2{
            position: absolute;
            width: 208px;
            height: 201px;
            left: 35px;
            top: 499px;
        }
        .productname1{
            position: absolute;
            width: 347px;
            height: 30px;
            left: 243px;
            top: 222px;
            font-family: 'Rokkitt';
            font-style: normal;
            font-weight: 700;
            font-size: 36px;
            line-height: 41px;
            text-align: center;
            text-transform: uppercase;
            color: #FFFFFF;
        }

    </style>
</head>
<body>
    <div class="blurrect1"></div>
    <div class="blurrect2"></div>
    <div class="photo1"><img src="./pictures/product/mybag_1.png"></div>
    <div class="photo2"><img src="./pictures/product/mybag_1.png"></div>
    <div class="total"><h3>TOTAL</h3></div>
    <div class="subtotalh"><p>SUBTOTAL : </p></div>
    <div class="subtotal"><p>RS:1000</p></div>
    <div class="shippingh"><p>ESTIMATED SHIPPING:</p></div>
    <div class="shipping"><p>RS:1000</p></div>
    <div class="taxh"><p>ESTIMATED TAX:</p></div>
    <div class="tax"><p>RS:1000</p></div>
    <div class="line"></div>
    <div class="totalh"><p>TOTAL : </p></div>
    <div class="totalcost"><p>RS.1000</p></div>
    <button class="checkoutbtn">CHECKOUT</button>
</body>