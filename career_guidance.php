<?php
error_reporting(0);  
 include('connection.php');  
session_start();
$userid=$_SESSION['User_ID'];

  $sql = "SELECT * FROM users where userid='".$userid."'";  

        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
 $uname= $row['username'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GITAM UNIVERSITY</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon-red.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center py-4 px-xl-5">
            <div class="col-lg-3">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0"><span class="text-primary">GITAM</span>UNIVERSITY</h1>
                </a>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Office</h6>
                        <small>Madhapur, Hyderabad	</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-envelope text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Email Us</h6>
                        <small>gitam.edu</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-phone text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Call Us</h6>
                        <small>08455-221200 / 1 / 2 / 3 / 4</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="d-flex align-items-center justify-content-between bg-secondary w-100 text-decoration-none" data-toggle="collapse" href="#navbar-vertical" style="height: 67px; padding: 0 30px;">
                    <h5 class="text-primary m-0"><i class="fa fa-book-open mr-2"></i>Courses</h5>
                    <i class="fa fa-angle-down text-primary"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 9;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Computer Science Engineering<i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="cse-ds.php" class="dropdown-item">CSE-DS</a>
                                <a href="cse-aiml.php" class="dropdown-item">CSE-AIML</a>
                                <a href="cse.php" class="dropdown-item">CSE-cybersec</a>
                            </div>
                        </div>
                        <a href="mechanical.php" class="nav-item nav-link">Mechanical Engineering</a>
                        <a href="civil.php" class="nav-item nav-link">Civil Engineering</a>
                        <a href="aerospace.php" class="nav-item nav-link">Aerospace Engineering</a>
                        <a href="ece.php" class="nav-item nav-link">Electronics and Communications Engineering</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0"><span class="text-primary">GITAM</span>UNIVERSITY</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav py-0">
                            <a href="index.php" class="nav-item nav-link">Admissions</a>
                            <a href="academics.php" class="nav-item nav-link">Academics</a>
                            <a href="entrepreneurship.php" class="nav-item nav-link">Entrepreneurship</a>
                            <a href="career_guidance.php" class="nav-item nav-link active">Career Guidance</a>
                             <a href="gallery.php" class="nav-item nav-link">Gallery</a>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                        </div>
						
                        <?php if($_SESSION['User_ID']== '' ){?>
                        <a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href="login.php">Login</a>
						 <?PHP } else { ?>
						 
						 
						  <a class="btn btn-dark py-1 px-2 ml-auto d-none d-lg-block"><?php echo $uname;?></a>
						  &nbsp;
						  
						 <a class="btn btn-danger py-1 px-2 ml-auto d-none d-lg-block" href="logout.php">Logout</a>
						 <?php } ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    
    <!-- Header End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">PLACEMENTS</h5>
                <h1>Top Recruiting Companies</h1>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/amazon_1.jpg" alt="">
                            
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/Adobe.jpg" alt="">
                            
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/Cognizant.jpg" alt="">
                            
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/Deloitte.jpg" alt="">
                            
                        </div>
                        
                    </div>
                </div>
				<div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/Amadeus.jpg" alt="">
                            
                        </div>
                        
                    </div>
                </div>
				<div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/JP-Morgan.jpg" alt="">
                            
                        </div>
                        
                    </div>
                </div>
				
				<div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/State-Street.jpg" alt="">
                            
                        </div>
                        
                    </div>
                </div>
				<div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/pwc.jpg" alt="">
                            
                        </div>
                        
                    </div>
                </div>
				
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/TCS.jpg" alt="">
                            
                        </div>
                        <!--<div class="bg-secondary p-4">
                            <h5>TCS</h5>
                            
                        </div>-->
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/E&Y.jpg" alt="">
                            
                        </div>
                        <!--<div class="bg-secondary p-4">
                            <h5>Jhon Doe</h5>
                            <p class="m-0">Web Designer</p>
                        </div>-->
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/Capgemini.jpg" alt="">
                            
                        </div>
                        <!--<div class="bg-secondary p-4">
                            <h5>Jhon Doe</h5>
                            <p class="m-0">Web Designer</p>
                        </div>-->
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/Tiger-Analytics.jpg" alt="">
                            
                        </div>
                        <!--<div class="bg-secondary p-4">
                            <h5>Jhon Doe</h5>
                            <p class="m-0">Web Designer</p>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
	
	<div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">FUNCTIONS</h5>
                <h1>GCGC Structure Flowchart</h1>
				 <div class="row">
                <div class="col-md-12 col-lg-12 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/Team-Structure.jpg" alt="">
                            
                        </div>
                        
                    </div>
                </div>
				</div>
            </div>
			<div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">ABOUT GCGC </h5>
                <h1>GITAM CAREER GUIDANCE CENTER</h1>
				</div>
				 <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="img/7-counselling.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="text-left mb-4">
                        
                        <h3>Preparing Students for Professional Journeys</h3>
                    </div>
                    <p>GITAM Career Guidance Centre (GCGC) is a strategic initiative launched by GITAM. We endeavour to:<p>

<ul class="list-inline text-BLACK m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Guide</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Mentor</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Equip the students with competence, confidence & character</li>
						<li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Fulfil career aspirations.</li>
                    </ul>

<p>The Center focuses on strategy, long-term planning, formulating policies, designing and curating Competence Development activities, and developing and nurturing corporate relations. 

GCGC augments classroom education with training in career-specific skills and in human values. It enables the holistic development of a student and prepares them to be ready for careers of their choice as they graduate.</p>
                    
                </div>
            </div>
        </div>
		<div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="img/5-carrier.jpg" alt="">
                </div>
		<div class="col-lg-7">
                    <div class="text-left mb-4">
                        
                        <h3>Campus Career Guidance Center</h3>
                    <p>Our career development center is aimed at facilitating personal & professional skills development among students, helping them kickstart their careers and achieving 100% gainful placements.
					<ul class="list-inline text-BLACK m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>CGC Visakhapatnam</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>CGC Hyderabad</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>CGC Bengaluru</li>
						
                    </ul>


					</div>
					</div>
					<div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="img/6-counselling.jpg" alt="">
                </div>
					<div class="col-lg-7">
                    <div class="text-left mb-4">
                        
                        <h3>Career Counselling and Mentoring</h3>
                    <p>The Counselling & Mentoring Center is one of the key component functions of GCGC. It acts as a single point of contact for guidance and mentoring students. The CCM helps the faculty enhance their counselling and mentoring skills by accrediting them as professional mentors via a training process. It enables faculty members to support students in their journey of finding the right career.In education, mentoring, coaching and counselling are considered key elements of good capacity-building tools and we are fulfilling this need through CCM. The Career Counselling and Mentoring function helps students receive personalised counselling sessions from their mentors to chart out their professional journey. The unit helps students explore all the available avenues, guides them towards the right career choice, and supports them with required training.

</p>
					</div>
					</div>
					<div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="img/4-placements.jpg" alt="">
                </div>
					<div class="col-lg-7">
                    <div class="text-left mb-4">
                        
                        <h3>A Strategic Approach To Ensuring Placements
</h3>
                    <p> Competence Development is a core function of Career Fulfillment. It helps in developing the right competency strategies as per industry requirements and empowers students to pursue their aspiring careers. Our mission is to identify competency gaps between the employer’s requirements and academic curriculum and implement the in-demand skills to meet various industry requisites.”

</p>
<ul class="list-inline text-BLACK m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Competence Development Curriculum</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Events and Competition</li>
                        
						
                    </ul>

					</div>
					</div>
					



    


    <!-- Footer Start -->
    <!--<div class="container-fluid bg-dark text-white py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-7 col-md-12">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Get In Touch</h5>
                        <!--<p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>-->
						<!--<p> "My campus life was amazing and I enjoyed a lot, while in college I started my new life at GITAM, which has a beautiful and serene ambiance."</p>
						<h3>Abhishek Kumar Sharma</h3>
						<p>Physics & Electronics</p>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Our Courses</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Web Design</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Apps Design</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Marketing</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Research</a>
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>SEO</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 mb-5">
                <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Newsletter</h5>
                <p>Rebum labore lorem dolores kasd est, et ipsum amet et at kasd, ipsum sea tempor magna tempor. Accu kasd sed ea duo ipsum. Dolor duo eirmod sea justo no lorem est diam</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Your Email Address">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="#">Domain Name</a>. All Rights Reserved. Designed by <a href="https://htmlcodex.com">HTML Codex</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>-->
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>