<!doctype html>
<html>
  <head>
    <title>Cognic Labs</title>
    <meta charset="UTF-8">
    <meta name="description" content="Your site's description should be here">
    <meta name="keywords" content="Your site's keywords should be here">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
    <link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

   <!--  style -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- hover button and animation left and image css -->
  <link rel="stylesheet" type="text/css" href="css/main_button_hover.css">
  </head>
  <body>
    <div id="container">
      <!-- header -->
      <header>
          <?php
            // call header file
            include("header.php");
          ?>
          <?php
            include("main-slider-sim.html");
            // include("main-slider.html");
          ?>
      </header> 
      <!-- third section -->
      <section id="third-section" class="uni-padding">
        <div class="row">
            <div class="col-md-12">
                <center>
                  <h1>We Are your Independent Design <br>and Development Agency.</h1>
                  <p>We are a full life-cycle software  development company expert providing all kind of business <br>services with quality.</p>
                </center>
                <br><br><br>
            </div>
           
            <div class="col-md-3 col-sm-6 col-12 div_bottom">
                <center>
                    <div class="hover_div">
                        <img src="images/artboard.png" alt="">
                        <p class="third-section-p"><b>Logo Design &<br>Branding</b></p>
                        <a href="" class="btn-banner btn-hover"><b>Read More</b> &nbsp;<img class="right-arrow-1-copy-3" src="images/right-arrow_1.png" alt=""></a>
                    </div>
                </center>
            </div>
            <div class="col-md-3 col-sm-6 col-12 div_bottom">
                <center>
                  <div class="hover_div">
                      <img src="images/share.png" alt="">
                      <p class="third-section-p"><b>Digital<br>Marketing</b></p>
                      <a href="" class="btn-banner btn-hover"><b>Read More</b> &nbsp;<img class="right-arrow-1-copy-3" src="images/right-arrow_1.png" alt=""></a>
                  </div>
                </center>
            </div>
            <div class="col-md-3 col-sm-6 col-12 div_bottom">
                <center>
                  <div class="hover_div">
                      <img src="images/coding.png" alt="">
                      <p class="third-section-p"><b>Website Design &<br>Development</b></p>
                      <a href="" class="btn-banner btn-hover"><b>Read More</b> &nbsp;<img class="right-arrow-1-copy-3" src="images/right-arrow_1.png" alt=""></a>
                  </div>
                </center>
            </div>
            <div class="col-md-3 col-sm-6 col-12 div_bottom">
                <center>
                  <div class="hover_div">
                      <img src="images/share_1.png" alt="">
                      <p class="third-section-p"><b>Mobile Apps<br>Development</b></p>
                      <a href="" class="btn-banner btn-hover"><b>Read More</b> &nbsp;<img class="right-arrow-1-copy-3" src="images/right-arrow_1.png" alt=""></a>
                  </div>
                </center>
            </div>
          </div>
      </section>

      <!-- fourth section -->
      <section id="fourth-section" class="uni-padding">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <h1>Build Your Business<br>Website Better</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<br><br>
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <br>
                <div class="col-md-12 accept">
                  <img src="images/accept.png" alt="" style="float:left;"><p>&nbsp;&nbsp;&nbsp;<b>Proin laoreet leo vel enim gravida at porttitor metus ultricies.</b></p>
                </div>

                 <div class="col-md-12 accept">
                  <img src="images/accept.png" alt="" style="float:left;"><p>&nbsp;&nbsp;&nbsp;<b>Cras eu velit enim. Vivamus blandit dolor ut.</b></p>
                </div>

                 <div class="col-md-12 accept">
                  <img src="images/accept.png" alt="" style="float:left;"><p>&nbsp;&nbsp;&nbsp;<b>Ex elit mattis sapien aliquet rutrum.</b></p>
                </div>
                <div class="col-md-12 accept div_bottom">
                    <!-- <button id="fourth-section-read-more">Read More</button>  -->
                    <a href="#" class="btn-banner btn-hover" id="fourth-section-read-more">Read More<span></span></a>
                </div>
            </div>
            <div class="col-md-6  col-sm-12 col-xs-12">
              <div class="parallax"></div>
            </div>
        </div>
      </section>

     <!--  fifth section -->
      <section id="fifth-section" class="">
         <div class="row">
               <?php
                  include("collab_unlimited_slider.php");
                ?>
      </section>

      <!-- sixth section -->
      <section id="sixth-section" class="uni-padding">
         <div class="row">
            <div class="col-md-12">
              <center>
                <h1>Awards & Recognation</h1>
                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more <br>recently with desktop publishing software</p><br><br>
                <img src="images/Assets/logosss.png" class="img-fluid hover_div">
              </center>
            </div>
          </div>
      </section>

      <!-- seven section -->
      <section id="seventh-section">
        <div class="row">
            <div class="col-md-6 div_bottom" id="seventh-text-div">
                <h1>LET'S START A <br>PROJECT TOGETHER</h1><br>
                <p>We make all your dreams come true in a <br>successful project.</p><br>
                 <div class="row">
                    <div class="col-md-6 col-sm-6 col-6 accept">
                        <input type="text" placeholder="Enter Your Phone Number"></div>
                    <div class="col-md-6 col-sm-6 col-6 accept" style="">
                        <a href="contact-us" class="btn-hover" id="seven-section-read-more">Request A Call<span></span></a>
                    </div>
                  </div>
                    <!-- <button id="seven-section-read-more">Request A Call</button> -->
                  <p class="or">OR</p>
                  <div class="col-md-12">
                    <div class="row" id="social_icon_ket_start">
                      <div class="col-md-1 col-sm-2 col-2 seventh-section-social-icon hover_div" id="seventh-section-social-icon-first">
                        <center><img src="images/whatsapp_svg.png" alt=""></center>
                      </div>
                      <div class="col-md-1 col-sm-2 col-2 seventh-section-social-icon hover_div">
                        <center><img src="images/facebook-messenger-icon-p.png" alt=""></center>
                      </div>
                      <div class="col-md-1 col-sm-2 col-2 seventh-section-social-icon hover_div">
                        <center><img src="images/skype-logo-vector-icon-te.png" alt=""></center>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-md-6">
              <img src="images/Assets/4rth banner image.png" alt="" style="float:right;" class="img-fluid">
            </div>
          </div>
      </section>

      <!--  eight section -->
      <section id="eight-section" class="uni-padding">
        <?php
            include("testimonal-slider.html");
          ?>
      </section>


      <!-- nine section -->
      <section id="nine-section" class="uni-padding">
        <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <center>
                  <h1>Get in Touch</h1>
                  <p>We create brands. Choosing us will be your best decision.<br>
                  Talk to our team to get started today!</p><br><br>
                </center>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control nine-section_box" placeholder="Full Name" name="fullname"><br>
                <input type="text" class="form-control nine-section_box" placeholder=" Email" name="email"><br>
                <input type="text" class="form-control nine-section_box" placeholder="Phone Number" name="phone"><br>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control nine-section_box nine-section_message" id="pwd" placeholder="Message" name="message">
              </div>
              <div class="col-md-12">
                <center>
                  <!-- <button id="nine-section-read-more">Send Message</button> -->
                   <a href="contact-us" class="btn-banner btn-hover" id="nine-section-read-more">Send Message<span></span></a>
                </center>
              </div>
            </div>
          </div>
      </section>
     
     <?php
        // call footer file
        include("footer.php");
      ?>
    </div>
  </body>
</html>