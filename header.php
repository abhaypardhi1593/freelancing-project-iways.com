<style>
        
            body{
            font-family: Arial, sans-serif;
            }

            /*clicked Button */
            .open-btn {
            padding: 10px 20px;
            background: #00c28b;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
            }

            /* Popup Overlay */
            .popup-form {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.6);
            justify-content: center;
            align-items: center;
            z-index: 1000;
            
            }

            /* Form Box */
            .form-container {
            background: #1e2a38;
            padding: 30px 25px;
            border-radius: 10px;
            width: 300px;
            color: white;
            position: relative;
            box-shadow: 0 0 15px rgba(0,0,0,0.3);
            padding-right: 40px;
            
            }

            .form-container h2 {
            color: #00c28b;
            margin-bottom: 5px;
            text-align: center;
            }

            /* .form-container p {
            text-align: center;
            font-size: 14px;
            margin-bottom: 15px;
            } */

            .form-container input,
            .form-container textarea {
            width: 100%;
            margin: 8px 0;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-family: inherit;
            font-size: 14px;
            }

            textarea {
            resize: vertical;
            }

            /*  Password Toggle */
            /* .password-group {
            position: relative;
            }

            .toggle {
            position: absolute;
            right: 10px;
            top: 13px;
            cursor: pointer;
            } */

            /* Submit Button */
            button[type="submit"] {
            width: 100%;
            padding: 10px;
            background: #00c28b;
            color: white;
            border: none;
            border-radius: 5px;
            margin-top: 10px;
            font-size: 16px;
            }

            /* Close Button */
            .close-btn {
            position: absolute;
            top: 10px;
            right: 15px;
            cursor: pointer;
            font-size: 20px;
            color: #ffffff;
            }

            /* 📱 For tablets and below (max-width: 768px) */
            @media (max-width: 768px) {
            .form-container {
                width: 90%;
                padding: 25px 20px;
                padding-right: 40px;
            }

            .form-container h2 {
                font-size: 22px;
            }

            .form-container p {
                font-size: 13px;
            }

            .open-btn {
                font-size: 15px;
                padding: 8px 18px;
            }
            }

            /* 📱 For small devices like phones (max-width: 480px) */
            @media (max-width: 480px) {
            .form-container {
                width: 95%;
                padding: 20px 15px;
            }

            .form-container input,
            .form-container textarea {
                font-size: 13px;
                padding: 8px;
            }

            .toggle {
                top: 10px;
                font-size: 14px;
            }

            .close-btn {
                font-size: 18px;
                top: 8px;
                right: 10px;
            }

            button[type="submit"] {
                font-size: 15px;
                padding: 8px;
            }
            }

</style>
<!--====== HEADER PART START ======-->
    
    <header id="header-part">
       
        <div class="header-top d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact text-lg-left text-center">
                            <ul>
                                <li><img src="images/all-icon/map.png" alt="icon"><span>Luvkush Nagar , Nagpur </span></li>
                                <li><img src="images/all-icon/email.png" alt="icon"><span>helpdesk@iwaysindia.com</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-opening-time text-lg-right text-center">
                            <p>Opening Hours : Monday to Saturay - 10.00 AM to 5.00  PM</p>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header top -->
        
        <div class="header-logo-support pt-30 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="logo">
                            <a href="index-2.html">
                                <img src="images/logo11.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="support-button float-right d-none d-md-block">
                            <div class="support float-left">
                                <div class="icon">
                                    <img src="images/all-icon/support.png" alt="icon">
                                </div>
                                <div class="cont">
                                    <p>Need Help? call us free</p>
                                    <span>922 5780 123 </span>
                                </div>
                            </div>
                            <!-- pop-up section Start -->
                            <div class="button float-left">
                                <a href="#" class="main-btn" onclick="openForm()">Claim Gift Now</a>
                                <!--  Popup Form -->
                                <div id="popupForm" class="popup-form">
                                    <div class="form-container">
                                    <span class="close-btn" onclick="closeForm()">×</span>
                                    <h2>Register</h2>
                                    <!-- <p>Signup now and get full access to our app.</p> -->
                                    <form>
                                        <input type="text" placeholder="First Name" required />
                                        <input type="text" placeholder="Last Name" required />
                                        <input type="email" placeholder="Email" required />
                                        <input type="text" placeholder="Mobail No" required />

                                        <!-- Address -->
                                        <textarea placeholder="Address" rows="3" required></textarea>

                                        <!-- passowr section -->
                                        <!-- Password -->
                                        <!-- <div class="password-group">
                                        <input type="password" id="password" placeholder="Password" required />
                                        <span class="toggle" onclick="togglePassword('password')">👁️</span>
                                        </div> -->

                                        <!-- Confirm Password -->
                                        <!-- <div class="password-group">
                                        <input type="password" id="confirmPassword" placeholder="Confirm Password" required />
                                        <span class="toggle" onclick="togglePassword('confirmPassword')">👁️</span>
                                        </div> -->
                                        <!-- passerword section end -->

                                        <button type="submit">Submit</button>
                                        <!-- <p style="margin-top: 10px;">Already have an account? <a href="#">Signin</a></p> -->
                                    </form>
                                    </div>
                                </div>
                            </div>
                            <!-- pop-up section End -->
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header logo support -->
        
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-9 col-8">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a href="index">Home</a>
                                       
                                    </li>
                                    <li class="nav-item">
                                        <a href="about">About us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="courses">Courses</a>
										<ul class="sub-menu">
											<li class="nav-item"><a href="degree" class="nav-link">Degree Programs</a></li>
                                            <li class="nav-item"><a href="diploma" class="nav-link">Diploma Programs</a></li>
                                            <li class="nav-item"><a href="ed_cell" class="nav-link">ED Cell</a></li>
                                            <li class="nav-item"><a href="edp" class="nav-link">EDP</a></li>
                                            <li class="nav-item"><a href="tedp" class="nav-link">TEDP</a></li>
                                            <li class="nav-item"><a href="high_tech_edp" class="nav-link">High Tech EDP</a></li>
                                            <li class="nav-item"><a href="dis_lear" class="nav-link">Distance Learning</a></li>
                                            <li class="nav-item"><a href="seminar" class="nav-link">Seminar</a></li>
                                            <li class="nav-item"><a href="workshop" class="nav-link">Workshop</a></li>
                                            
                                        </ul>
                                    </li> 
									<li class="nav-item">
                                        <a href="#">LMS</a>
                                    </li> 
                                    <li class="nav-item">
                                        <a href="#">Projects</a>
                                        <ul class="sub-menu">
										
											<li><a href="#">Govt. Projects</a></li>
                                            <li><a href="#">CSR Projects</a></li>
											<li><a href="#">Private Projects</a></li> 
										</ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#">Services</a>
                                        <ul class="sub-menu">
                                            <li class="nav-item"><a href="#" class="nav-link">NGO Consultancy <i class='bx bx-chevron-right'></i></a></li>
                                              <li class="nav-item"><a href="#" class="nav-link">Company Consultancy <i class='bx bx-chevron-right'></i></a></li>
                                              <li class="nav-item"><a href="#" class="nav-link">Education Institute <i class='bx bx-chevron-right'></i></a></li>
                                              <li class="nav-item"><a href="#" class="nav-link">Software Services <i class='bx bx-chevron-right'></i></a></li>
                                              <li class="nav-item"><a href="#" class="nav-link">Infrastructure Services <i class='bx bx-chevron-right'></i></a></li>
                                              <li class="nav-item"><a href="#" class="nav-link">Human Resource <i class='bx bx-chevron-right'></i></a></li>
                                        </ul>
                                       
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="gallery">Gallery</a>
                                       
                                    </li>
									<li class="nav-item">
                                        <a href="#">Career</a>
                                       
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact">Contact</a>
                                       <!-- <ul class="sub-menu">
                                            <li><a href="contact">Contact Us</a></li>
                                            <li><a href="contact">Contact Us 2</a></li>
                                        </ul> -->
                                    </li>
                                </ul>
                            </div>
                        </nav> <!-- nav -->
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-4">
                        <div class="right-icon text-right">
                            <ul>
                             <li><a href="https://play.google.com/store/apps/details?id=co.tarly.lqcqo&hl=en"><i class="fa fa-play"> Download Our App</i></a></li>
                            </ul>
                        </div> <!-- right icon -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        <script>
            

      function openForm() {
  document.getElementById("popupForm").style.display = "flex";
}

function closeForm() {
  document.getElementById("popupForm").style.display = "none";
}

function togglePassword(id) {
  const input = document.getElementById(id);
  input.type = input.type === "password" ? "text" : "password";
}

        </script>
    </header>
    
    <!--====== HEADER PART ENDS ======-->