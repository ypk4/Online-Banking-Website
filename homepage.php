<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>State Bank Homepage</title>
  <style>
  body {
    background-image: url("images.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  }

 /* #back_image {
   width: 100%;
   z-index: -1;
  }*/

  #header {
   background:url("intro-middle.png");
   background-size:100%;
    border-radius: 4px 4px 0 0;
    padding: 5px;
/*    padding-left: 2px; */
    position:relative;
    height:120px;
    color:white;
    max-width:100%;
    overflow:hidden;
  }

  span#headertext {
    font-size: 150%;
    font-family: courier;
    font-weight: bold;
  }

  span#headertext b {
    position: relative;
    left:10px;
    font-size:250%;
    font-family:verdana;
    top:20px;
  }
  
  #subtitle {
    position:relative;
    right:10px;
    float:right;
    font-size: 150%;
    font-family: courier;
    font-weight: bold;
    color:white;
    top:20px;
  }


   ul#menu {
     position:absolute;
     top:120px;
     right: 0px;
     left: 5.1px;
     overflow: hidden;
     width: 95.9%;
     background-color: black;
   }

   ul#menu li {
    display: inline;
    float: left;
   }

   ul#menu li a {
    background-color:black;
    display: block;
    color: white;
    padding: 10px 20px;
    margin: 5px;
    text-decoration: none;	/* To remove underline */
    border-radius: 4px 4px 0 0;
 /*   border-spacing: 30px;*/
   }

  ul#menu li a:hover {
   background-color: orange;
  }
 
  a.button0 {
    position: absolute;
    top:475px;
    right:710px;
    padding: 10px 40px;
    margin: 0px 10px 10px 0px;
    float: left;
    border-radius: 10px;
    font-family: 'Helvetica', cursive;
    font-size: 25px;
    color: #FFF;
    text-decoration: none;  
    background-color: #3498DB;
    border-bottom: 5px solid #2980B9;
    text-shadow: 0px -2px #2980B9;
    /* Animation */
    transition: all 0.1s;
    -webkit-transition: all 0.1s;
  }

  a.button0:hover {
    /*font-size: 300%;*/
    font-weight: bold;
  /*  text-decoration: underline;*/
  }
 
  a.button0:focus {
    text-decoration: none;
    color: #fff;
  }

  a.button0:active {
    transform: translate(0px,5px);
    -webkit-transform: translate(0px,5px);
    border-bottom: 1px solid;
  }

  a.button1 {
    position: absolute;
    top:475px;
    right:525px;
    padding: 10px 40px;
    margin: 0px 10px 10px 0px;
    float: left;
    border-radius: 10px;
    font-family: 'Helvetica', cursive;
    font-size: 25px;
    color: #FFF;
    text-decoration: none;  
    background-color: #3498DB;
    border-bottom: 5px solid #2980B9;
    text-shadow: 0px -2px #2980B9;
    /* Animation */
    transition: all 0.1s;
    -webkit-transition: all 0.1s;
  }

  a.button1:hover {
   /* font-size: 300%;*/
     font-weight: bold;
   /*  text-decoration: underline;*/
   }

  a.button1:focus {
    text-decoration: none;
    color: #fff;
  }

  a.button1:active {
    transform: translate(0px,5px);
    -webkit-transform: translate(0px,5px);
    border-bottom: 1px solid;
  }

  h1#table_heading {
    text-align: left; 
    color: #660066;
    font-size: 200%;
    position: relative;
    left: 20px;
  }

  ul.features_list {
    float: left;
    position: relative;
    margin-left: 35px;
  }
  
  ul.features_list li pre {
   font-size: 150%;
   color: #707070;
  }

  ul.features_list li pre b {
   font-size: 180%;
   color: #600000;
  }


  #footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
    padding:5px;	 	
    max-width:100%;
  }
  </style>
 </head>

 <body>

 <div id="header">
  <span id = "headertext"><b>State Bank</b></span> <span id="subtitle"> Banking is now just a click away..!</span>
 </div>

<!-- <div id = "header2">-->
  <ul id="menu"><b><!--Bold-->   
   <li><a href="http://localhost/final_project/homepage.php">Home</a></li>
   <li><a href="http://localhost/final_project/aboutus.html">About Us</a></li>
   <li><a href="http://localhost/final_project/procedure.html">New Account Procedure</a></li>
   <li><a href="http://localhost/final_project/acct_status.php">Account Creation Status</a></li>
   <li><a href="http://localhost/final_project/contact.html">Contact Us</a></li></b>
  </ul><!--</div>-->
<br><br>
 <img src = "back1.jpg" width= "100%" height = "375">

 <a href="http://localhost/final_project/applic_form.php" class="button0">Create Account</a>
 <a href="http://localhost/final_project/login_page.php" class="button1">Login</a>

<!-- <img src="backf.jpeg" id="back_image">  -->

 <br>
 <h1 id="table_heading">Some of our Features</h1><hr style="color:#d0d0d0">

 <!--<p style="font-size:150%; color:blue;">Be it creating new account or sending money to your loved ones, it gets much easier, swift and secure..!</p><br> -->

 <!-- <th>Some of our cool features</th> -->
  <ul class="features_list" style= "list-style-type: square"> <li><pre><b>Quick :</b>
    Quick procedure</pre></li> <li><pre><b>Reliable :</b>
    Protected and Secure transactions</pre></li>
  </ul>
   
  <ul class="features_list "style="list-style-type: square"> <li><pre><b>Simple :</b>
    Simple and User-friendly interface</pre></li> <li><pre><b>24*7 :</b>
    24*7 Banking</pre></li> 
  </ul>
  <br>

 <div id="footer">
   Copyright © StateBankOfficial.com
  </div>

<?php ?>
 </body>
</html>
