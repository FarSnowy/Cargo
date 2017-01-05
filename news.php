<?php 
  session_start();

?>


<!DOCTYPE html>
<html lang="en">
     <head>
     <title>News</title>
     <meta charset="utf-8">
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/styles.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/superfish.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
     <script src="js/sForm.js"></script>
     </head>
     <body>
       <div class="main">

 <header> 
  <div class="container_12">
    <div class="grid_12">
    <h1><a href="start.php"><img src="images/logo8.png" alt="EXTERIOR"></a> </h1>
    
         <div class="menu_block">
           <nav  class="" >
            <ul class="sf-menu">
                   <li><a href="home.php">Home</a></li>
                   <li class="current"><a href="news.php">News </a></li>
                   <li class="with_ul"><a href="contacts.php">Contacts</a>
                   <ul>
                         <li><a href="contacts.php"> Contact Us</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        
                     </ul></li>
                 </ul>
              </nav>
           <div class="clear"></div>
           </div>
           <div class="clear"></div>
      </div>
    </div>
</header>

<div class="content"><div class="ic"></div>
  <div class="container_12">
    <div class="grid_7">
      <h2 class="head2">Latest News</h2>
      <div class="news">
        <img src="images/page5_img3.jpg" alt="" class="img_inner fleft">
        <div class="extra_wrapper">
          <div class="col1">BIMCO: Shipping Industry Faces Choppy Waters</div>
          <p>The shipping industry has its work cut out going forward in 2017 as the period will see another year of die-hard competition, which now includes tankers, according to international shipping association BIMCO.</p>
          <p>For eight years, the world has struggled to cope with huge changes and challenges brought around by the crash of the financial market in 2008. The resulting issues have not always been dealt with in the best way, leaving many large economies still in ‘recovery’ mode. </p>
          <a href="http://worldmaritimenews.com/" class="btn">More</a>
        </div>
      </div>
      <div class="news mb0">
        <img src="images/page5_img4.jpg" alt="" class="img_inner fleft">
        <div class="extra_wrapper">
          <div class="col1">MSI: Container Shipping Industry Sailing in Uncharted Waters</div>
          <p>The latest phase of mass consolidation continues to see the container shipping industry sailing in uncharted waters and has emphasized the extent to which liner companies are having to restructure their business models in order to survive, according to Maritime Strategies International (MSI).   </p>
          <p>MSI said that the actions taken by liner companies, both in terms of consolidating service provision and also redelivering chartered tonnage, mean that the worst of the downturn is over for the globally competitive operators. </p>
          <a href="http://worldmaritimenews.com/" class="btn">More</a>
        </div>
      </div>
    </div>
    <div class="grid_3 prefix_2">
      <h2 class="head2">Categories</h2>
      <ul class="list l1">
        <li><a href="#">Wind</a></li>
        <li><a href="#">Ocean</a></li>
        <li><a href="#">Convoy</a></li>
        <li><a href="#">Port</a></li>
        <li><a href="#">Ship</a></li>
        <li><a href="#">Trading</a></li>
        <li><a href="#">Navy</a></li>
        <li><a href="#">Military Exercise</a></li>
        <li><a href="#">Mloam at neque </a></li>
      </ul>
      <h2 class="head2">Archive</h2>
      <ul class="list">
        <li><a href="#">September 2017</a></li>
        <li><a href="#">August 2017</a></li>
        <li><a href="#">July 2017</a></li>
        <li><a href="#">June 2017</a></li>
        <li><a href="#">May 2017</a></li>
        <li><a href="#">April 2017</a></li>
        <li><a href="#">March 2017</a></li>
        <li><a href="#">February 2017</a></li>
        <li><a href="#">January 2017</a></li>
      </ul>
    </div>
    <div class="clear"></div>
    <div class="bottom_block">
      <div class="grid_6">
        <h3>CONNECT WITH US</h3>
        <div class="socials">
          <a href="#"></a>
          <a href="#"></a>
          <a href="#"></a>
        </div>
        <nav><ul>
                   <li><a href="index.html">Home</a></li>
                   <li class="current"><a href="index-4.html">News </a></li>
                   <li><a href="index-5.html">Contacts</a></li>
                 </ul></nav>
      </div>
      <div class="grid_6">
        <h3>Email Updates</h3>
        <p class="col1">Join our digital mailing list and get news<br> deals and be first to know about events</p>
        <form id="newsletter">
                  <div class="success">Your request has been sent!</div>
                  <label class="email">
                       <input type="email" value="Enter e-mail address" >
                       <a href="#" class="btn" data-type="submit">submit</a> 
                        <span class="error">*This is not a valid email address.</span>
                  </label> 
              </form> 
          </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>


<footer>    
  <div class="container_12">
    <div class="grid_12">
     © 2017 CSA Entertainment. All Rights Reserved. Cargo Shipping Assistance, CSA.com and the CSA logo are trademarks of CSA Entertainment in the U.S. and/or other countries.
    </div>
    <div class="clear"></div>
  </div>
</footer>
</body>
</html>
