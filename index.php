<?php

session_start();
if(isset($_SESSION['password'])){
	
    if($_SESSION['type'] == "customer"){
        
        $id = $_SESSION['customer_id'];
        
    }elseif($_SESSION['type'] == "admin"){
        
        
        $id = $_SESSION['admin_id'];
        
    }
}


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
    <!-- Load jQuery -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/css/multi-select-tag.css">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border " style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <!--<div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Soudia - Reyada</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>000000000</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>traveler@example.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


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
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="index.php#about" class="nav-item nav-link">About</a>
                    <a href="index.php#services" class="nav-item nav-link">Services</a>
                    <a href="destination.php" class="nav-item nav-link">Places</a>
                    <a href="events.php" class="nav-item nav-link">Events</a>
                    <a href="index.php#booking" class="nav-item nav-link">Create Plan</a>
                    <a href="index.php#contact" class="nav-item nav-link">Contact</a>
                </div>
                 <?php 
						 
             if(isset($_SESSION['password'])){

               if($_SESSION['type'] == "customer"){


             ?>

                 <a href="traveler/profile.php" style="margin-right: 10px;background-color: #7F4E25 !important;border: 1px solid #7F4E25" class="btn btn-primary rounded-pill py-2 px-4"><i class="fa fa-user"></i> My Account</a>
                <a href="logout.php" style="background-color: #7F4E25 !important;border: 1px solid #7F4E25" class="btn btn-primary rounded-pill py-2 px-4"><i class="fa fa-key"></i> Sign Out</a>

           <?php

               }elseif($_SESSION['type'] == "admin"){ ?>

                   <a href="admin/users.php" style="margin-right: 10px;background-color: #7F4E25 !important;border: 1px solid #7F4E25" class="btn btn-primary rounded-pill py-2 px-4"><i class="fa fa-user"></i> My Account</a>
                <a href="logout.php" style="background-color: #7F4E25 !important;border: 1px solid #7F4E25" class="btn btn-primary rounded-pill py-2 px-4"><i class="fa fa-key"></i> Sign Out</a>

              <?php }

                }else{  ?>


                <a href="signup.php" style="margin-right: 10px;background-color: #7F4E25 !important;border: 1px solid #7F4E25" class="btn btn-primary rounded-pill py-2 px-4"><i class="fa fa-user"></i> Sign Up</a>
                <a href="signin.php" style="background-color: #7F4E25 !important;border: 1px solid #7F4E25" class="btn btn-primary rounded-pill py-2 px-4"><i class="fa fa-key"></i> Sign In</a>  


            <?php	 
             }


             ?> 
                
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Enjoy Your Vacation With Us</h1>
                        <p class="fs-4 text-white mb-4 animated slideInDown">RIHAL website is an online platform that provides various services and information related to travel and tourism.</p>
                        <div class="position-relative w-75 mx-auto animated slideInDown">
                            <form method="post" action="destination.php">
                            <input name="result" required class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Search About Places Or Events...">
                            <button type="submit" name="sendd" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;background-color: #7F4E25 !important;border: 1px solid #7F4E25">Search</button>
                            </form>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- About Start -->
    <div class="container-xxl py-5" id="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/2.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start  pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to <span class="">RIHAL</span></h1>
                    <p class="mb-4">Rihal is a website that focuses on domestic tourism in Saudi Arabia and offers many advantages. Our goal is to make planning tourism and tours easier and more enjoyable. The tourist can determine where he wants to go, when and how much in his budget, and then we will provide the tourist with an integrated tourism plan.</p>
                    
                    <!--<a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>-->
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5" id="services">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center  px-3">Services</h6>
                <h1 class="mb-5">Our Services</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe  mb-4"></i>
                            <h5>Saudi Arabia Tours</h5>
                            <p>Here is where you can travel anywhere within the Kingdom of Saudi Arabia</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-hotel  mb-4"></i>
                            <h5>Hotel Reservation</h5>
                            <p>Here is where you can book various hotels in Saudi Arabia and the best places</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user  mb-4"></i>
                            <h5>Travel Guides</h5>
                            <p>Here there are instructions for traveling within Saudi Arabia</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cog  mb-4"></i>
                            <h5>Event Management</h5>
                            <p>This is where you can choose which events you want to implement with your plan</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa fa-file  mb-4"></i>
                            <h5>Booking Services</h5>
                            <p>Here you can book anywhere, in any hotel or camp, not just a hotel</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home  mb-4"></i>
                            <h5>Places</h5>
                            <p>Here we have various tourist places and natural attractions within Saudi Arabia</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-table  mb-4"></i>
                            <h5>Travel Packages</h5>
                            <p>Here we have the various tourist places and also the events that you want</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user  mb-4"></i>
                            <h5>Customer Support</h5>
                            <p>Here is where you can contact us if you encounter any problem</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Destination Start -->
    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center  px-3">Destination</h6>
                <h1 class="mb-5">Destination & Places</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-12 col-md-6">
                    <div class="row g-3">
                        <?php
                      
                            include('connect.php');  
                            $sql = $con->prepare("SELECT * FROM places LIMIT 4");      
                            $sql->execute();
                            $rows = $sql->fetchAll();

                            foreach($rows as $pat)
                            {

                          ?> 
                        <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="place-details.php?place_id=<?php echo $pat['place_id']; ?>">
                                <img class="img-fluid" src="data:image;base64,<?php echo $pat['image']; ?>" style="width: 500px;height: 250px" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2" title="Like"><i style="color: #343D28" class="fa fa-thumbs-up"></i></div>
                                <div class="bg-white  fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2" style="color: #343D28"><?php echo $pat['name']; ?></div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="place-details.php?place_id=<?php echo $pat['place_id']; ?>">
                                <img class="img-fluid" src="img/101.jpg" style="width: 500px;height: 250px" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2" title="Like"><i style="color: #343D28" class="fa fa-thumbs-up"></i></div>
                                <div class="bg-white  fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2" style="color: #343D28"><?php echo $pat['name']; ?></div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="place-details.php?place_id=<?php echo $pat['place_id']; ?>">
                                <img class="img-fluid" src="img/105.jpg" style="width: 500px;height: 250px" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2" title="Like"><i style="color: #343D28" class="fa fa-thumbs-up"></i></div>
                                <div class="bg-white  fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2" style="color: #343D28"><?php echo $pat['name']; ?></div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="place-details.php?place_id=<?php echo $pat['place_id']; ?>">
                                <img class="img-fluid" src="img/103.jpg" style="width: 500px;height: 250px" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2" title="Like"><i style="color: #343D28" class="fa fa-thumbs-up"></i></div>
                                <div class="bg-white  fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2" style="color: #343D28"><?php echo $pat['name']; ?></div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="place-details.php?place_id=<?php echo $pat['place_id']; ?>">
                                <img class="img-fluid" src="img/104.jpg" style="width: 500px;height: 250px" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2" title="Like"><i style="color: #343D28" class="fa fa-thumbs-up"></i></div>
                                <div class="bg-white  fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2" style="color: #343D28"><?php echo $pat['name']; ?></div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="place-details.php?place_id=<?php echo $pat['place_id']; ?>">
                                <img class="img-fluid" src="img/106.jpg" style="width: 500px;height: 250px" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2" title="Like"><i style="color: #343D28" class="fa fa-thumbs-up"></i></div>
                                <div class="bg-white  fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2" style="color: #343D28"><?php echo $pat['name']; ?></div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="place-details.php?place_id=<?php echo $pat['place_id']; ?>">
                                <img class="img-fluid" src="img/109.jpg" style="width: 500px;height: 250px" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2" title="Like"><i style="color: #343D28" class="fa fa-thumbs-up"></i></div>
                                <div class="bg-white  fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2" style="color: #343D28"><?php echo $pat['name']; ?></div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="place-details.php?place_id=<?php echo $pat['place_id']; ?>">
                                <img class="img-fluid" src="img/110.jpg" style="width: 500px;height: 250px" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2" title="Like"><i style="color: #343D28" class="fa fa-thumbs-up"></i></div>
                                <div class="bg-white  fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2" style="color: #343D28"><?php echo $pat['name']; ?></div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="place-details.php?place_id=<?php echo $pat['place_id']; ?>">
                                <img class="img-fluid" src="img/111.jpg" style="width: 500px;height: 250px" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2" title="Like"><i style="color: #343D28" class="fa fa-thumbs-up"></i></div>
                                <div class="bg-white  fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2" style="color: #343D28"><?php echo $pat['name']; ?></div>
                            </a>
                        </div>
                        <?php } ?>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Destination Start -->



    <!-- Booking Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s" id="booking">
        <div class="container">
            <div class="booking p-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white">
                        <h6 class="text-white text-uppercase">Your Plan</h6>
                        <h1 class="text-white mb-4">Online Create Plan</h1>
                        <p class="mb-4">You Can Do It Now And Enjoy</p>
                        <!--<a class="btn btn-outline-light py-3 px-5 mt-2" href="">Read More</a>-->
                    </div>
                    <div class="col-md-6">
                        <h1 class="text-white mb-4">Create A Plan</h1>
                        <?php
                  
                          if(isset($_POST['add'])){
                              
                            $num_of_persons = $_POST['num_of_persons'];
                            $from_date = $_POST['from_date']; 
                            $to_date = $_POST['to_date']; 
                            $place_id = $_POST['place_id']; 
                            $event_id = $_POST['event_id']; 
                            $from_budget = $_POST['from_budget']; 
                            $to_budget = $_POST['to_budget']; 
                            $residence = $_POST['residence']; 
                            $type = $_POST['type']; 
                            $notes = $_POST['notes'];   
                              
                           foreach($place_id as $place_idd){
                                    
                                    foreach($event_id as $event_idd){    
                              
                            include('connect.php');  
                            $sqlPL = $con->prepare("SELECT * FROM customer_plans WHERE ((place_id='$place_idd' AND event_id='$event_idd') OR (place_id='$place_idd' OR event_id='$event_idd')) AND customer_id='$id'");      
                            $sqlPL->execute();
                            $rowsPL = $sqlPL->fetchAll();
                            $countPL=$sqlPL->rowCount();
                            if($countPL > 0){ 

                                foreach($rowsPL as $pat){

                                    if(($pat['place_id'] == $place_id && $pat['event_id'] == $event_id) || ($pat['place_id'] == $place_id || $pat['event_id'] == $event_id)){


                                        echo '
                                         <div class="container" dir="ltr" style="margin-top:80px;color:#000">
                                              <div class="alert alert-success role="alert" style="color:#000">
                                                  This Plan Is Found Before
                                             </div>
                                         </div>';



                                    }


                                }


                            }else{

                                
                                

                        
                                $sql = "INSERT INTO customer_plans (persons_numbers , from_date , to_date , place_id , from_budget , to_budget , event_id , notes , customer_id , status) VALUES ('$num_of_persons' , '$from_date' , '$to_date' , '$place_idd' , '$from_budget' , '$to_budget' , '$event_idd' , '$notes' , '$id' , '0')";

                                 $con->exec($sql);
                                    
                               

                                echo '
                                 <div class="container" dir="ltr" style="margin-top:80px;color:#000">
                                      <div class="alert alert-success role="alert" style="color:#000">
                                          Plan Created Successfully
                                     </div>
                                 </div>';


                            } }}

                          }


                        ?>   
                        <form method="post">
                            
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label style="margin-bottom:10px;color:#FFF" for="name">Number Of People</label>
                                    <div class="form-floating">
                                        <input type="number" name="num_of_persons" required class="form-control" id="name" placeholder="Your Name">
                                        
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <label style="margin-bottom:10px;color:#FFF" for="name">From Date</label>
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="date" name="from_date" required class="form-control datetimepicker-input" id="datetime" min="<?php echo date("Y-m-d"); ?>" placeholder="Date" data-target="#date3" data-toggle="datetimepicker" />
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label style="margin-bottom:10px;color:#FFF" for="name">To Date</label>
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="date" min="<?php echo date("Y-m-d"); ?>" name="to_date" required class="form-control datetimepicker-input" id="datetime" placeholder="Date" data-target="#date3" data-toggle="datetimepicker" />
                                        
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label style="margin-bottom:10px;color:#FFF" for="name">Destination</label>
                                    <div class="form-floating">
                                        <select name="place_id[]" required multiple class="form-select" style="color: #C1C3AB !important;background-color: #000 !important" id="select1">
                                            <?php
                      
                                                include('connect.php');  
                                                $sql = $con->prepare("SELECT * FROM places");      
                                                $sql->execute();
                                                $rows = $sql->fetchAll();

                                                foreach($rows as $pat)
                                                {

                                              ?> 
                                            <option value="<?php echo $pat['place_id']; ?>"><?php echo $pat['name']; ?></option>
                                            <?php } ?>
                                        </select>
                                       
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label style="margin-bottom:10px;color:#FFF" for="name">From Budget</label>
                                    <div class="form-floating">
                                        <input class="form-control" name="from_budget" required type="number" placeholder="Budget" id="message">
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label style="margin-bottom:10px;color:#FFF" for="name">To Budget</label>
                                    <div class="form-floating">
                                        <input class="form-control"  name="to_budget" required type="number" placeholder="Budget" id="message">
                                        
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label style="margin-bottom:10px;color:#FFF" for="name">Residence Type</label>
                                    <div class="form-floating">
                                        <select multiple name="residence[]" required class="form-select" id="select2">
                                            <option value="1">Hotel</option>
                                            <option value="2">camp</option>
                                            <option value="3">resort</option>
                                        </select>
                                        
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label style="margin-bottom:10px;color:#FFF" for="name">Events Type</label>
                                    <div class="form-floating">
                                        <select multiple required name="type[]" class="form-select" id="select3">
                                            <option value="1">Morning</option>
                                            <option value="2">Night</option>
                                        </select>
                                        
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label style="margin-bottom:10px;color:#FFF" for="name">Events</label>
                                    <div class="form-floating">
                                        <select multiple required name="event_id[]" class="form-select" id="select4">
                                            <?php
                      
                                                include('connect.php');  
                                                $sql = $con->prepare("SELECT * FROM events");      
                                                $sql->execute();
                                                $rows = $sql->fetchAll();

                                                foreach($rows as $pat)
                                                {

                                              ?> 
                                            <option value="<?php echo $pat['event_id']; ?>"><?php echo $pat['title']; ?></option>
                                            <?php } ?>
                                        </select>
                                 
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label style="margin-bottom:10px;color:#FFF" for="name">Notes</label>
                                    <div class="form-floating">
                                        <textarea name="notes" required class="form-control bg-transparent" placeholder="Notes" id="message" style="height: 100px"></textarea>
                                        
                                    </div>
                                </div>
                                <div class="col-12">
                                    <?php

                                        if(isset($_SESSION['password'])){

                                            if($_SESSION['type'] == "customer"){ ?>

                                                <button name="add" class="btn btn-outline-light w-100 py-3" type="submit">Create Plan</button>

                                           <?php
                                                
                                            }}else{  ?>
                                            
                                            <a href="signup.php" class="btn btn-outline-light w-100 py-3" type="submit">Create Plan</a>
                                            
                                            
                                          <?php  }


                                        ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Start -->


    <!-- Process Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center  px-3">Process</h6>
                <h1 class="mb-5">3 Easy Steps</h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4" style="border: 1px solid #5A2F0C !important">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;;background-color: #5A2F0C !important">
                            <i class="fa fa-globe fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Choose A Destination</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">You Can Choose A Destination</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4" style="border: 1px solid #5A2F0C !important">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;;background-color: #5A2F0C !important">
                            <i class="fa fa-dollar-sign fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Pay Online</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Then You Can Pay Online</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4" style="border: 1px solid #5A2F0C !important">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;background-color: #5A2F0C !important">
                            <i class="fa fa-plane fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Fly Today</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Finaly You Can Fly Today</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Start -->
    
     <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center  px-3">Events</h6>
                <h1 class="mb-5">Awesome Events</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <?php
                      
                    include('connect.php');  
                    $sql = $con->prepare("SELECT events.* , places.name FROM events INNER JOIN places ON places.place_id = events.place_id LIMIT 4");      
                    $sql->execute();
                    $rows = $sql->fetchAll();

                    foreach($rows as $pat)
                    {

                  ?> 
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="data:image;base64,<?php echo $pat['image']; ?>" style="width: 400px;height: 355px" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt  me-2"></i><?php echo $pat['name']; ?></small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-box  me-2"></i><?php echo $pat['title']; ?></small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-moon  me-2"></i><?php echo $pat['event_type']; ?></small>
                        </div>
                        <div class="text-center p-4">
                            
                            <p><?php echo $pat['event']; ?></p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="event_like.php?event_id=<?php echo $pat['event_id']; ?>" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 30px 30px 30px;background-color: #7F4E25 !important;border: 1px solid #7F4E25"><i class="fa fa-thumbs-up"></i></a>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Package End -->


    <!-- Team Start -->
    <!--<div class="container-xxl py-5" id="team">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center  px-3">Travel Guide</h6>
                <h1 class="mb-5">Meet Our Guide</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <!--<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center  px-3">Customer Opinions</h6>
                <h1 class="mb-5">Our Clients Say!!!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">John Doe</h5>
                    <p>New York, USA</p>
                    <p class="mb-0">This Is The Perfect Travel Website.</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">John Doe</h5>
                    <p>New York, USA</p>
                    <p class="mt-2 mb-0">This Is The Perfect Travel Website.</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">John Doe</h5>
                    <p>New York, USA</p>
                    <p class="mt-2 mb-0">This Is The Perfect Travel Website.</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">John Doe</h5>
                    <p>New York, USA</p>
                    <p class="mt-2 mb-0">This Is The Perfect Travel Website.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    
    <div class="container-xxl py-5" id="contact">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center  px-3">Contact Us</h6>
                <h1 class="mb-5">Contact For Any Query</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h5>Get In Touch</h5>
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;background-color: #7F4E25 !important;border: 1px solid #7F4E25">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <a href="https://www.google.com/maps/place/%D8%AC%D8%A7%D9%85%D8%B9%D8%A9+%D8%AD%D9%81%D8%B1+%D8%A7%D9%84%D8%A8%D8%A7%D8%B7%D9%86%E2%80%AD/@28.2415549,45.9508109,17z/data=!3m1!4b1!4m6!3m5!1s0x3fd72328d7539f39:0x1bac57ac90115d3!8m2!3d28.2415503!4d45.9461975!16s%2Fg%2F11bvt3ln0y?entry=ttu">
                            <h5 class="">Location</h5>
                            <p style="color:#7F4E25" class="mb-0">Saudi Al-Ula - Hafr Al Batin</p>
                            </a>    
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;background-color: #7F4E25 !important;border: 1px solid #7F4E25">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="">Mobile</h5>
                            <p class="mb-0" style="color:#7F4E25">966509336563</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;background-color: #7F4E25 !important;border: 1px solid #7F4E25">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="">Email</h5>
                            <p class="mb-0"><a style="color:#7F4E25" href="mailto:Rihal.team@gmail.com">Rihal.team@gmail.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <?php
            
            
                    if(isset($_POST['send'])){

                        include('connect.php');
                        $namee = $_POST["name"];
                        $emaill = $_POST["email"];
                        $subject = $_POST["subject"];
                        $message = $_POST["message"];  

                        $sql = "INSERT INTO contact (name, email, subject , message) VALUES ('$namee', '$emaill', '$subject', '$message')";

                        $con->exec($sql);


                       echo '<div class="" dir="ltr" style="margin-top:80px;color:#000">
                          <div class="alert alert-success role="alert" style="color:#000">
                               Your problem has been successfully submitted to the support department
                         </div>
                     </div>';



                    }


                    ?> 
                    <form method="post">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" name="name" required class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" name="email" required class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea name="message" required class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button name="send" class="btn btn-primary w-100 py-3" style="background-color: #7F4E25 !important;border: 1px solid #7F4E25" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        

    <!-- Footer Start -->
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
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" style="background-color: #7F4E25 !important;border: 1px solid #7F4E25" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


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
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>
    <script>
    new MultiSelectTag('select1')  // id
</script>
    <script>
    new MultiSelectTag('select2')  // id
</script>
    <script>
    new MultiSelectTag('select3')  // id
</script>
    <script>
    new MultiSelectTag('select4')  // id
</script>
  
</body>

</html>