<?php 
  session_start();

?>


<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Contacts</title>
     <meta charset="utf-8">
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/styles.css">
     <link rel="stylesheet" href="css/form.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/superfish.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
     <script src="js/sForm.js"></script>
     <script src="js/forms.js"></script>
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
                   <li><a href="news.php">News </a></li>
                   <li class="current"><a href="contacts.php">Contacts</a>
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
    <div class="grid_6">
      <h2>Find Us</h2>
            <div class="map">
            <figure class="img_inner">
                          <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
               </figure>
              <address>
                            <dl>
                                <dt><p>The Company Name Inc.<br>
                                    8901 Marmora Road,<br>
                                    Glasgow, D04 89GR.</p>
                                </dt>
                                <dd><span>Freephone:</span>+1 800 559 6580</dd>
                                <dd><span>Telephone:</span>+1 800 603 6035</dd>
                                <dd><span>FAX:</span>+1 800 889 9898</dd>
                            </dl>
                         </address>
 
          </div>
    </div>
    <div class="grid_5 prefix_1">
      <h2>Contact Us</h2>
      <form id="form">
      <div class="success_wrapper">
      <div class="success">Contact form submitted!<br>
      <strong>We will be in touch soon.</strong> </div></div>
      <fieldset>
      <label class="name">
      <input type="text" value="Name:">
      <br class="clear">
      <span class="error error-empty">*This is not a valid name.</span><span class="empty error-empty">*This field is required.</span> </label>
      <label class="email">
      <input type="text" value="E-mail:">
      <br class="clear">
      <span class="error error-empty">*This is not a valid email address.</span><span class="empty error-empty">*This field is required.</span> </label>
      <label class="phone">
      <input type="tel" value="Phone:">
      <br class="clear">
      <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
      <label class="message">
      <textarea>Message:</textarea>
      <br class="clear">
      <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
      <div class="clear"></div>
      <div class="btns"><a data-type="reset" class="btn">clear</a><a data-type="submit" class="btn">send</a>
      <div class="clear"></div>
      </div></fieldset></form>
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
                   <li><a href="index-4.html">News </a></li>
                   <li class="current"><a href="index-5.html">Contacts</a></li>
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
