        <style>
          .navbar .nav-item:hover .dropdown-menu{ 
            display: block; 
          }
          /*navbar*/
            .nav-link{
              color: #c7c6c5 !important;
            }
            .nav-link:hover{
              color: #c48444 ;
            }
            .nav-link a:active{
              color: #c48444 ;
            }

            .dropdown-menu{
              border-radius: 12px;
              padding: 14px;
            }

            .dropdown-item{
              border-bottom: 2px #eaeaeb solid;
              color: #a9a9a9;
              font-size: 16px;
              padding: 10px;
            }

            .dropdown-item:hover{
              color: #cc8947;
              font-weight: 900;
            }


          .overlay {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0, 0.9);
            overflow-x: hidden;
            transition: 0.5s;
          }

          .overlay-content {
            position: relative;
            top: 10%;
            width: 100%;
            text-align: center;
            margin-top: 30px;
          }

          .overlay a {
            padding: 8px;
            text-decoration: none;
            font-size: 22px;
            color: #818181;
            display: block;
            transition: 0.3s;
          }

          .overlay a:hover, .overlay a:focus {
            color: #f1f1f1;
          }

          .overlay .closebtn {
            position: absolute;
            top: 13px;
            right: 42px;
            font-size: 60px;
          }

          .navbar-toggler-icons{
            font-size:28px;
            cursor:pointer;
            right: 0;
            top: 35px;
          }

            /*media query for mobile*/

          @media screen and (max-width: 950px) {
            .navbar-toggler-icons{
              position: absolute;
            }

            .navbar-toggler-icons {
                display: inline-block;
                width: 1.5em;
                height: 1.5em;
                vertical-align: middle;
                content: "";
                background: 50%/100% 100% no-repeat;
            }
            .navbar-dark .navbar-toggler-icons {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(196,196,196, 1)' stroke-width='3' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
            }
          }

          @media screen and (max-height: 450px) {
            .overlay a {font-size: 20px}
            .overlay .closebtn {
            font-size: 40px;
            top: 15px;
            right: 35px;
            }
          }


          @media only screen and (max-width: 950px) {
            #contact_us_list {
              display: block;
              background-color: #160b01;
              color: white;
              border: 2px #c5344c solid;
              border-radius: 8px;
              font-size: 18px;
              }
            #contact_us_list_button{
              display: none;
            }
            .navbar-nav{
              display: none;
            }
            #fourth-section{
              text-align: center;
            }
            .uni-padding{
              padding: 0 8%;
            }
            #seventh-section{
              text-align: center;
            }
            #seventh-text-div {
                padding-left: 9%;
            }
            #seventh-text-div input[type=text] {
                width: 125%;
            }
            #social_icon_ket_start{
              margin-bottom: 30px;
              margin-left: 25%;
            }

          }

          </style>

        <div id="header" class="uni-padding">
        <!-- nav bar  -->
            <div class="row">
                <div class="col-md-3 col-sm-6 col-6">
                    <a class="navbar-brand" href="index.php"><img class="cognic-labs-logo-final-01" src="images/Assets/web-logo.png" alt=""></a>
                </div>

                <div class="col-md-6 col-sm-6 col-6">
                    <nav class="navbar navbar-expand-md navbar-dark" >
                        <span class="navbar-toggler-icons" onclick="openNav()"></span>
                      <div id="myNav" class="overlay">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <div class="overlay-content">
                          <a href="Logo-Design-&-Branding-(Services).php">Logo Design & Branding</a>
                          <a href="#">Digital Marketing</a>
                          <a href="#">Website Design & Development</a>
                          <a href="#">Mobile Apps Development</a>
                          <a href="#"><b>Solutions</b></a>
                          <a href="blog.php"><b>Work</b></a>
                          <a href="about_us.php"><b>About</b></a>
                          <a href="#"><b>Resources</b></a>
                          <a href="contact_us.php"><b>Contact</b></a>
                          <a href="contact_us.php"><b>Contact Us</b></a>
                        </div>
                      </div>
                      <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" ><b>Services</b></a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="Logo-Design-&-Branding-(Services).php">Logo Design & Branding</a>
                                    <a class="dropdown-item" href="#">Digital Marketing</a>
                                    <a class="dropdown-item" href="#">Website Design & Development</a>
                                    <a class="dropdown-item" href="#">Mobile Apps Development</a>
                                </div>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#"><b>Solutions</b></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="blog.php"><b>Work</b></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="about_us.php"><b>About</b></a>
                            </li> 
                            <li class="nav-item">
                              <a class="nav-link" href="#"><b>Resources</b></a>
                            </li> 
                            <li class="nav-item">
                              <a class="nav-link" href="contact_us.php"><b>Contact</b></a>
                            </li> 
                            <li class="nav-item" id="contact_us_list">
                              <a class="nav-link" href="contact_us.php"><b>Contact Us</b></a>
                            </li> 
                        </ul>
                    </nav>
                </div>

                <div class="col-md-3 col-sm-6 col-6" id="contact_us_list_button">
                    <button id="contact-us-button" onclick="window.location.href='contact_us.php'"><b>Contact Us</b></button>
                </div>
              </div>
          </div>
          <script>
          function openNav() {
            document.getElementById("myNav").style.width = "100%";
          }

          function closeNav() {
            document.getElementById("myNav").style.width = "0%";
          }
          </script>