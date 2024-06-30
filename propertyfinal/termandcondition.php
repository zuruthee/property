<html>
<head>
<title>SkylineSymphony</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
	background-color:black;
}
h3{
	color:#FAF2F0;
	text-align:center;
}
#bar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}
#bar a {
  float: left;
  text-align: center;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}
#bar a:hover {
  background-color: #000;
}
#bar input[type=text] {
  padding: 6px;
  border: none;
  margin-top: 8px;
  font-size: 17px;
  width:200px;
}
#search {
	border-radius: 8px;
	width:2%;
}
.heading {
  position: relative;
  text-align: center;
  color: white;
  font-family:verdana;
}
.ph1{
    height:550px;
	width:1300px;
}
.cen {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size:70px;
  -webkit-text-stroke-width: 2px;
    -webkit-text-stroke-color: #FAD78C;
}
footer {
  background-color: black;
  color: white;
  bottom: 0;
  width: 100vw;
  font-size: 16px;
}
footer * {
  box-sizing: border-box;
  border: none;
  outline: none;
}
.row {
  padding: 1em 1em;
}
.row.primary {
  display: grid;
  grid-template-columns: 2.5fr 2fr 2.5fr;
  align-items: stretch;
}
.column {
  width: 100%;
  display: flex;
  flex-direction: column;
  padding: 0 2em;
  min-height: 15em;
}
.column subscribe {
  display: grid;
  grid-template-raws: 2fr 2.5fr;
  align-items: stretch;
}
.qr{
  width:30%;
  float: right;
  border: 1px dotted black;
  margin: 0px 0px 15px 20px;
}
.news{
	font-size: 15px;
}
.loc{
  font-size:20px;
}
h3 {
  width: 100%;
  text-align: left;
  color: white;
  font-size: 1.4em;
  white-space: nowrap;
}
column link {

  display: flex;
  flex-direction: column;
  padding: 0;
  margin: 0;
}
.about p {
  text-align: justify;
  line-height: 2;
  margin: 0;
}
input,
button {
  font-size: 1em;
  padding: 1em;
  width: 100%;
  border-radius: 5px;
  margin-bottom: 5px;
}
button {
  background-color: #c7940a;
  color: #ffffff;
}
div.social {
  display: flex;
  justify-content: space-around;
  font-size: 2.4em;
  flex-direction: row;
  margin-top: 0.5em;
}
.social a {
  color: white;
}
.copyright {
  padding: 0.3em 1em;
  background-color: #25262e;
}
.footer-menu{
  float: left;
    margin-top: 10px;
}
.footer-menu a{
  color: #cfd2d6;
  padding: 6px;
  text-decoration: none;
}
.footer-menu a:hover, .social i:hover{
  color: #c7940a;
}
.copyright p {
  font-size: 0.9em;
  text-align: right;
}
@media screen and (max-width: 850px) {
  .row.primary {
    grid-template-columns: 1fr;
  }
}

.div1 {
            background-color: #ede8e8;
			width:100%;

        }
        
        * {
            box-sizing: border-box;
        }
        
        .div1 {
            font-family: Verdana, sans-serif;
        }
        
        .mySlides {
            display: none;
        }
        
        img {
            vertical-align: middle;
        }
        
        .slideshow-container {
            max-width: 750px;
            position: relative;
            margin: auto;
        }
        
        
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }
        
        
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }
        
        
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }
        
        .active {
            background-color: #717171;
        }
        
        
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }
        
        @keyframes fade {
            from {
                opacity: .4
            }
            to {
                opacity: 1
            }
        }
       
        
        @media only screen and (max-width: 300px) {
            .text {
                font-size: 11px
            }
        }
		
		.h33{
			color:black;
		}
		

</style>
</head>
<body>

<?php
    include 'header.php';
    ?>


  <div class="div1">
   
   <table width="100%" height="70%" border="2"> 
        <tr>
            <th align="center">Terms & Conditions</th>
        </tr>

        <td>
            <p>This Web Site is owned and operated by SkylineSymphony. By accessing and using the Web Site you agree to be bound by the terms and conditions mentioned below. SkylineSymphony may make improvements and/or changes in the products,services and prices
                described in this Web Site at any given time without prior notice. Change will be made periodically to the Web Site.The SkylineSymphonymay amend these on the Web Site Continued use of this Web Site following such change shall constitute
                your acceptance of the some.</p>
            <h3 class="h33"><u>TRADEMARK NOTICE</u></h3>
            <p>This Web Site contains valuable trdemarks and intellectual properties owned by Snset Plains Ltd and are protected from being copied under national and international laws,these may not be reproduced modified or adapted without prior written
                authorization from the SkylineSymphony.However the information contained within may be downloaded printed or copies for your personal non-cpmmercial use.Other trademarks not owned by SkylineSymphony and referenced on this Web Site are the
                property of their respective owners.</p>
            <h3 class="h33"><u>COPYRIGHT NOTICE</u></h3>
            <p>The information text,graphics,images,logos,links,software and information published or otherwise contained on this site (the "Content") are owned by or licensed to, SkylineSymphony.All material may not be copied distributed,displayed,reproducted
                or transmitted in any form or by any means,electronical,photocopying, recording or othewise without prior written permission from SkylineSymphony.COPYRIGHT 2019 WATERS EDGE ALL RIGHTS RESERVED.</p>
            <h3 class="h33"><u>RESTRICTED LICENSE</u></h3>
            <p>You may use this Web Site in accordance with these terms and condition complying with all applicable laws,regulations and codes of practice in Sri Lanka and/or other jurisdictions from which you will access the web site.SkylineSymphony beleives
                in absolute discretion if you breach any of these terms and conditions, without prejudice to any of our right at law or otherwise, we reserve the right to deny you access to this Web Site.</p>
            <h3 class="h33"><u>GENERAL NOTICE</u></h3>
            <P>This Web Site has been compiled in good faith by SkylineSymphony.No representation is made, or given warranty nor expressed or implied as to the completeness or accuracy of the information that if contain or that it will be uninterrupted or
                error free or that any information is free of bugs viruses,worms,trojon hourse or other harmful components.By accessing this Web Site you agree that SkylineSymphony will not be liable for any direct,indirect or consequential loss or damage
                of any nature arising from the use of this web site including information and material contained in it from your access of other material on the internet via web links from this web site delay or inabily to use this web site or the avaolability
                and utility of te products and services.You further agree to indemnify hold SkylineSymphony and its service providers harmless from and covenant not to sue SkylineSymphony for any claims based on using this web site.</P>

        </td>
    </table>
  
    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="Images/terms (1).jpg" style="width:100%">

    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="Images/terms (2).jpg" style="width:100%">

    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="Images/terms (3).jpg" style="width:100%">

    </div>
    </div>
  
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); 
        }
    </script>
   
   <?php
    include 'footer.php';
    ?>

</body>
</html>
</html>