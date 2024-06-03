<?php

ob_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RIHAL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border " style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->




    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="index.php" class="navbar-brand p-0">
                <h1 style="color: #CCD4AF" class=" m-0"><i class="fa fa-map-marker-alt me-3"></i>RIHAL</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="index.php#about" class="nav-item nav-link">About</a>
                    <a href="index.php#services" class="nav-item nav-link">Services</a>
                    <a href="destination.php" class="nav-item nav-link">Places</a>
                    <a href="events.php" class="nav-item nav-link">Events</a>
                    <a href="index.php#booking" class="nav-item nav-link">Create Plan</a>
                    <a href="index.php#contact" class="nav-item nav-link">Contact</a>
                </div>
                <a href="signup.php" style="margin-right: 10px;background-color: #7F4E25 !important;border: 1px solid #7F4E25" class="btn btn-primary rounded-pill py-2 px-4"><i class="fa fa-user"></i> Sign Up</a>
                <a href="signin.php" style="background-color: #7F4E25 !important;border: 1px solid #7F4E25" class="btn btn-primary rounded-pill py-2 px-4"><i class="fa fa-key"></i> Sign In</a>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Sign In</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#" style="color: #7F4E25">Home</a></li>
                                <li class="breadcrumb-item"><a href="#" style="color: #7F4E25">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Sign In</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center  px-3">Sign In</h6>
                
            </div>
            <div class="row g-4">
                
                <?php


    session_start();

    include('connect.php');  
    


//print_r($_POST);
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = sha1($password);                
                  
$sql1=$con->prepare("SELECT * FROM admin WHERE 
 email=? AND password=?");
$sql1->execute(array($email,$password));
$row1=$sql1->fetch();
//print_r($row);
$count1=$sql1->rowCount();

$sql2=$con->prepare("SELECT * FROM customer WHERE 
 email=? AND password=?");
$sql2->execute(array($email,$password2));
$row2=$sql2->fetch();
//print_r($row);
$count2=$sql2->rowCount();
	
//echo "<br>".$count;
if($email != "" && $password != ""){
	
	
if($count1>0){
    
    $sql = $con->prepare("SELECT * FROM admin");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        
        if($email == $pat["email"] && $password == $pat["password"])
        {
    
            $_SESSION['admin_id'] = $pat['admin_id'];
			$_SESSION['password'] = $pat['password'];
			$_SESSION['email'] = $pat['email'];
			$_SESSION['type'] = "admin";
            
            header('Location:admin/users.php');
			
			//echo $_SESSION['name'];
        }
    }
    $con=null;
    //echo "wrong password or email";
	
	
	
   
}
elseif($count2>0){
    
    $password1 = sha1($password);
    
    $sql = $con->prepare("SELECT * FROM customer");
    $sql->execute();
    $rows = $sql->fetchAll();

    foreach($rows as $pat)
    {
        
         if($email == $pat["email"] && $password1 == $pat["password"])
        {
            $_SESSION['customer_id'] = $pat['customer_id'];
			$_SESSION['name'] = $pat['name'];
			$_SESSION['email'] = $pat['email'];
            $_SESSION['password'] = $pat['password']; 
			$_SESSION['type'] = "customer";
             
            header('Location:traveler/profile.php');
			
			//echo $_SESSION['name'];
        }
    }
    $con=null;
    //echo "wrong password or email";
	
	
	
   
}
else{
	
	
	
	 echo '
	 <div class="container" dir="ltr" style="margin-top:80px;color:#000">
		  <div class="alert alert-success role="alert" style="color:#000">
			   Email Or Password May Be Incorrect Please Try Again
		 </div>
	 </div>
	<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    
                </div>
                
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <form method="post" action="signin-conn.php">
                        <div class="row g-3">
                            
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="email" name="email" required class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" name="password" required class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Password</label>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" style="background-color: #7F4E25 !important;border: 1px solid #7F4E25">Sign In</button>
                                Are You Not Member ? <a href="signup.php" style="color: #7F4E25"> Sign Up</a><br>
                                Forgot Password ? <a href="reset-password.php" style="color: #7F4E25"> Reset Password</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    
                </div>
	 
	  
	  
	  ';
	

	
  
	  }}else{
	
	
	/*include('logout.php');
	include('login.php');*/
	
	//echo "Not found UserName or password";
}
	
	    
?>
                
                
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">RIHAL</h4>
                    <a class="btn btn-link" href="index.php#about">About Us</a>
                    <a class="btn btn-link" href="index.php#contact">Contact Us</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Saudi Arabia</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>966509336563</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>Rihal.team@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/rh1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/rh2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/rh3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/rh7.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/rh5.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/rh6.jpg" alt="">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">RIHAL</a>, All Right Reserved. 2024

                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="index.php">Home</a>
                            <a href="destination.php">Places</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top" style="background-color: #7F4E25 !important;border: 1px solid #7F4E25"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
<?php

ob_end_flush();

?>