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
<style>
element.style {
    min-height: 282px;
}
.img-fluid {
    width: 367px;
    max-width: 100%;
    height: auto;


</style>
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
                        <small>Madhapur, Hyderabad</small>
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
     <!--Topbar End -->


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
                            <a href="academics.php" class="nav-item nav-link active">Academics</a>
                            <a href="entrepreneurship.php" class="nav-item nav-link">Entrepreneurship</a>
                            <a href="career_guidance.php" class="nav-item nav-link">Career Guidance</a>
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
  
    </div>
    <!-- Header End -->


    <!-- About Start -->
	<div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="img/civil_0.jpg" alt="">
                </div>
		<div class="col-lg-7">
                    <div class="text-left mb-4">
                        
                        <h3>B.Tech Civil Engineering</h3>
                        
                    <p>
Our 4-year B.Tech Civil Engineering programmer seeks to produce competent professionals with unique skills and knowledge that can be applied to urban developments, environmental protection, energy conservation, and sustainable construction & building development. Graduates from the programme will have a strong foundation and understanding of the fundamental principles of mathematics, science, and engineering, enabling graduates to pursue their careers as practicing civil engineers in civil and Allied Engineering fields.

A degree in this program will cover the following topics</p>
					<ul class="list-inline text-BLACK m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Fundamental principles of Civil Engineering</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Mechanics and Engineering in multiple environments</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Computer Applications in Civil Engineering</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Reengineering, Renovation, and Rehabilitation</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Advanced Structural Analytics</li>
                      
						
                    </ul>


					</div>
					</div>
					<div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="img/downloadaaa.jpg" alt="">
                </div>
		<div class="col-lg-7">
                    <div class="text-left mb-4">
                        
                        <h3>Career Options for B.Tech Civil Engineering
</h3>
                    <p>The options include:

</p>


					<ul class="list-inline text-BLACK m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Building control surveyor</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>CAD technician</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Consulting civil engineer</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Contracting civil engineer</li>
						
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Design engineer</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Nuclear engineer
</li>
                        
						
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Structural engineer</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Water engineer</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Rural and Urban Transport engineer</li>
						
						
                        
						
						
						
                    </ul>


					</div>
					</div>
					<div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="img/civil-eng-gitam-blr.jpg" alt="">
                </div>
		<div class="col-lg-7">
                    <div class="text-left mb-4">
                        
                        <h3>Scope of B.Tech Civil Engineering</h3>
                    <p> The programme will enable graduates to demonstrate sound knowledge in the analysis, design and execution of infrastructure projects with appropriate consideration for cost, safety and sustainability. A B.Tech in Civil Engineering paves the way to serve society by solving various civil engineering problems focusing on sustainable development, following professional ethics</p>
					<h5>Programme offered at:</h5>
					<ul class="list-inline text-BLACK m-0">
                        
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>GITAM School of Technology, Visakhapatnam campus</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>GITAM School of Technology, Hyderabad campus</li>
						
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>GITAM School of Technology, Bengaluru campus</li>
						
                        
						
                    </ul>
					
					<h5>Check Eligibility:</h5>
					<p>A minimum of 60% or 6.0 CGPA (55% in case of CBSE and ICSE) aggregate marks in Intermediate or 10+2 examination from a recognized central / state board (except open schools) with Physics, Chemistry & Mathematics subjects and Qualified in GAT UG (Engineering) 2023.</p>


					</div>
					</div>
        <!-- About End -->


    <!-- Registration Start 
    <div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h3 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Follow Your Passion or Discover a New One
</h3>
                        
                    </div>
                    <p class="text-white">GITAM offers a range of undergraduate, postgraduate, and Ph.D. programmes that are curated to blend conventional knowledge with contemporary advances. Explore various degree programmes offered at the institute.</p>
                    <ul class="list-inline text-white m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Architecture</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Engineering</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Humanities</li>
						<li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Law</li>
						<li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Management</li>
						<li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Nursing</li>
						<li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Paramedical</li>
						<li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Pharmacy</li>
						<li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Physiotherapy</li>
						<li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Public Policy</li>
						<li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Science</li>
                    </ul>
                </div>
				<div class="col-lg-5">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="img/undergrad.jpg" alt="">
                </div>
				

                <!--<div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-light text-center p-4">
                            <h1 class="m-0">Sign Up Now</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Your name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" placeholder="Your email" required="required" />
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="height: 47px;">
                                        <option selected>Select a course</option>
                                        <option value="1">Course 1</option>
                                        <option value="2">Course 1</option>
                                        <option value="3">Course 1</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-dark btn-block border-0 py-3" type="submit">Sign Up Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     Registration End -->
	
				 <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                
                
                    
                </div>
            </div>
        </div>
		


    <!-- Testimonial Start 
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Testimonial</h5>
                <h1>What Say Our Students</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/testimonial-1.jpg" alt="">
                            <h5 class="m-0">Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/testimonial-2.jpg" alt="">
                            <h5 class="m-0">Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/testimonial-3.jpg" alt="">
                            <h5 class="m-0">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    Testimonial End -->


    <!-- Footer Start -->
    
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
