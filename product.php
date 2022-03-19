<?php
 include "base.php";
?>
<head>
    <title>Product</title>
    <style>
        .product1{
            position: absolute;
            width: 583px;
            height: 734px;
            left: 60px;
            top: 94px;
         }
        .product2{
            position: absolute;
            width: 128px;
            height: 129px;
            left: 56px;
            top: 854px;
         }
        .product3{
            position: absolute;
            width: 128px;
            height: 124px;
            left: 210px;
            top: 854px;
        }
        .product4{
            position: absolute;
            width: 128px;
            height: 124px;
            left: 364px;
            top: 854px;
        }
        .product5{
            position: absolute;
            width: 128px;
            height: 124px;
            left: 518px;
            top: 854px;   
        }
        .newarrivals{
            position: absolute;
            width: 290px;
            height: 32px;
            left: 578px;
            top: 1074px;

            font-family: 'Abhaya Libre';
            font-style: normal;
            font-weight: 700;
            font-size: 36px;
            line-height: 42px;
            text-align: center;

            color: #FFFFFF;
        }
        figure{
            position: absolute;
            width: 263px;
            height: 335px;
        } 
        figcaption {
            width: 184px;
            height: 56px;
            font-family: Rokkitt;
            font-style: normal;
            font-weight: normal;
            font-size: 24px;
            line-height: 27px;
            text-align: center;
            color: #FFFFFF;
          }
          #img1{
            position: absolute;
            left: 102px;
            top: 1200px;
          }
          #price11{
            position: absolute;
            left: 139px;
            top: 1550px;
          }
          #price12{
            position: absolute;
            left: 139px;
            top: 1585px;
          }
          #img2{
            position: absolute;
            left: 426px;
            top: 1200px;
          }
          #price21{
            position: absolute;
            left: 464px;
            top: 1550px;
          }
          #price22{
            position: absolute;
            left: 464px;
            top: 1585px;
          }
          #img3{
            position: absolute;
            left: 740px;
            top: 1200px;
          }
          #price31{
            position: absolute;
            left: 789px;
            top: 1550px;
          }
          #price32{
            position: absolute;
            left: 789px;
            top: 1585px;
          }      
          #img4{
            position: absolute;
            left: 1075px;
            top: 1200px;
          }
          #price41{
            position: absolute;
            left: 1114px;
            top: 1550px;
          }
          #price42{
            position: absolute;
            left: 1114px;
            top: 1585px;
          }
          #img5{
            position: absolute;
            left: 91px;
            top: 1800px;
          }
          #price51{
            position: absolute;
            left: 125px;
            top: 2150px;
          }
          #price52{
            position: absolute;
            left: 125px;
            top: 2185px;
          }  
        #img6{
            position: absolute;
            left: 426px;
            top: 1800px;            
          }
          #price61{
            position: absolute;
            left: 450px;
            top: 2150px;
          }
          #price62{
            position: absolute;
            left: 450px;
            top: 2185px;
          }      
          #img7{
            position: absolute;
            left: 751px;
            top: 1800px;
          }
          #price71{
            position: absolute;
            left: 775px;
            top: 2150px;
          }
          #price72{
            position: absolute;
            left: 775px;
            top: 2185px;
          }      
          #img8{
            position: absolute;
            left: 1075px;
            top: 1800px;           
          }
          #price81{
            position: absolute;
            left: 1100px;
            top: 2150px;
          }
          #price82{
            position: absolute;
            left: 1100px;
            top: 2185px;
          }
          .related-products{
            position: absolute;
            width: 290px;
            height: 32px;
            left: 590px;
            top: 1686px;

            font-family: 'Abhaya Libre';
            font-style: normal;
            font-weight: 700;
            font-size: 36px;
            line-height: 42px;
            text-align: center;

            color: #FFFFFF;
          }
          .productname{
            position: absolute;
            width: 421px;
            height: 53px;
            left: 785px;
            top: 50px;

            font-family: 'Rokkitt';
            font-style: normal;
            font-weight: 400;
            font-size: 64px;
            line-height: 73px;
            text-align: center;

            color: #FFFFFF;
          }
          .productprice{
            position: absolute;
            width: 178px;
            height: 38px;
            left: 813px;
            top: 150px;

            font-family: 'Rokkitt';
            font-style: normal;
            font-weight: 400;
            font-size: 48px;
            line-height: 55px;
            text-align: center;

            color: #FFFFFF;
          }
          .line1{
            position: absolute;
            width: 631px;
            height: 0px;
            left: 776px;
            top: 267px;

            border: 1px solid #EE519E;
          }
          .selectsize{
            position: absolute;
            width: 209px;
            height: 29px;
            left: 769px;
            top: 288px;

            font-family: 'Rokkitt';
            font-style: normal;
            font-weight: 700;
            font-size: 28px;
            line-height: 32px;
            text-align: center;

            color: #FFFFFF;
          }
          .footer{
            position: absolute;
            top: 2400px;
          }
          .small{
            position: absolute;
            width: 70px;
            height: 70px;
            left: 785px;
            top: 368px;
          }
          .medium{
            position: absolute;
            width: 70px;
            height: 70px;
            left: 878px;
            top: 368px;
          }
          .large{
            position: absolute;
            width: 70px;
            height: 70px;
            left: 971px;
            top: 368px;
          }
          .xl{
            position: absolute;
            width: 70px;
            height: 70px;
            left: 1064px;
            top: 368px;
          }
          .doublexl{
            position: absolute;
            width: 71px;
            height: 70px;
            left: 1157px;
            top: 368px;
          }
          .triplexl{
            position: absolute;
            width: 91px;
            height: 70px;
            left: 1236px;
            top: 368px;
          }
          .quantity{
            position: absolute;
            width: 162px;
            height: 34px;
            left: 779px;
            top: 444px;

            font-family: 'Rokkitt';
            font-style: normal;
            font-weight: 700;
            font-size: 28px;
            line-height: 32px;
            text-align: center;
            text-transform: uppercase;

            color: #FFFFFF;
          }
          .product-details{
            position: absolute;
            width: 331px;
            height: 30.27px;
            left: 751px;
            top: 574px;

            font-family: 'Rokkitt';
            font-style: normal;
            font-weight: 700;
            font-size: 28px;
            line-height: 32px;
            text-align: center;
            text-transform: uppercase;

            color: #FFFFFF;
          }
          .addtobag{
            position: absolute;
            width: 262px;
            height: 57px;
            left: 779px;
            top: 916px;
          }
          .wishlist{
            position: absolute;
            width: 181px;
            height: 56px;
            left: 1082px;
            top: 917px;
          }
    </style>
</head>
<body>
    <div class="product1"><img src="./pictures/product/product_5.png"></div>
    <div class="product2"><img src="./pictures/product/product_2.png"></div>
    <div class="product3"><img src="./pictures/product/product_3.png"></div>
    <div class="product4"><img src="./pictures/product/product_4.png"></div>
    <div class="product5"><img src="./pictures/product/product_1.png"></div>
    <p class="productname">Product Name</p>
    <p class="productprice">Rs. 2500</p>
    <div class="line1"></div>
    <p class="selectsize">SELECT SIZE</p>
    <div class="small"><img src="./pictures/product/small.png"></div>
    <div class="medium"><img src="./pictures/product/medium.png"></div>
    <div class="large"><img src="./pictures/product/large.png"></div>
    <div class="xl"><img src="./pictures/product/xl.png"></div>
    <div class="doublexl"><img src="./pictures/product/2xl.png"></div>
    <div class="triplexl"><img src="./pictures/product/3xl.png"></div>
    <p class="quantity">QUANTITY</p>
    <p class="product-details">PRODUCT DETAILS</p>
    <div class="addtobag"><img src="./pictures/product/addtocart.png"></div>
    <div class="wishlist"><img src="./pictures/product/wishlist.png"></div>
    <p class="newarrivals">New Arrivals</p>
    <div class="newcollectionimages">
            <figure>
                <img id="img1" src="./pictures/home/1.png" alt="1" >
                <figcaption id="price11" >Product name</figcaption>
                <figcaption id="price12">Rs.0000</figcaption>
            </figure>
            </div>
            <figure>
                <img id="img2" src="./pictures/home/2.png" alt="2" >
                <figcaption id="price21" >Product name</figcaption>
                <figcaption id="price22">Rs.0000</figcaption>
            </figure>
            </div>
            <figure>
                <img id="img3" src="./pictures/home/3.png" alt="3" >
                <figcaption id="price31" >Product name</figcaption>
                <figcaption id="price32">Rs.0000</figcaption>
            </figure>
            </div><figure>
                <img id="img4" src="./pictures/home/4.png" alt="4" >
                <figcaption id="price41" >Product name</figcaption>
                <figcaption id="price42">Rs.0000</figcaption>
            </figure>
        </div>
        </div>
    <p class="related-products">Related Products</p>
    <div class="newcollectionimages">
            <figure>
                <img id="img5" src="./pictures/home/5.png" alt="1" >
                <figcaption id="price51" >Product name</figcaption>
                <figcaption id="price52">Rs.0000</figcaption>
            </figure>
            </div>
            <figure>
                <img id="img6" src="./pictures/home/6.png" alt="2" >
                <figcaption id="price61" >Product name</figcaption>
                <figcaption id="price62">Rs.0000</figcaption>
            </figure>
            </div>
            <figure>
                <img id="img7" src="./pictures/home/7.png" alt="3" >
                <figcaption id="price71" >Product name</figcaption>
                <figcaption id="price72">Rs.0000</figcaption>
            </figure>
            </div><figure>
                <img id="img8" src="./pictures/home/8.png" alt="4" >
                <figcaption id="price81" >Product name</figcaption>
                <figcaption id="price82">Rs.0000</figcaption>
            </figure>
        </div>
        </div>
</body>