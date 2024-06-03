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
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"  class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
                    <a href="destination.php" class="nav-item nav-link active">Places</a>
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
                        <h1 class="display-3 text-white animated slideInDown">Destination</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#" style="color: #7F4E25">Home</a></li>
                                <li class="breadcrumb-item"><a href="#" style="color: #7F4E25">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Destinations & Places</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <div class="container-fluid hero-header1">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-12 pt-lg-5 mt-lg-5 text-center">
                        <div class="position-relative w-75 mx-auto animated slideInDown">
                            <form method="post">
                            <select name="search" required style="border: 3px solid #D2A473 !important;background-color: #FFF !important" class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Search About Places Or Events...">
                                <option>Select Place</option>
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
                            <button type="submit" name="send" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;background-color: #7F4E25 !important;border: 1px solid #7F4E25">Filter</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
    </div>

    <!-- Destination Start -->
    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center  px-3">Destination</h6>
                <h1 class="mb-5">Destinations & Places</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-12 col-md-6">
                    <div class="row g-3">
                        <?php
        
                                    if(isset($_GET['message1'])){

                                         echo '
                                 <div class="container" dir="ltr" style="margin-top:80px;color:#000">
                                      <div class="alert alert-success role="alert" style="color:#000">';
                                           echo $_GET['message1'];
                                               echo '</div>
                                 </div>';

                                    }
                                    

                                    ?>
                        <?php
                        
                        if(!isset($_POST['sendd'])){
            
                        if(!isset($_POST['send'])){

                        include('connect.php');  
                        $sql = $con->prepare("SELECT * FROM places");      
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
                      <?php }}else{

                        include('connect.php'); 
                        $search = $_POST['search'];    
                        $sql = $con->prepare("SELECT * FROM places WHERE place_id='$search'");      
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


                      <?php  }}}else{ 
                        
                        include('connect.php'); 
                        $search = $_POST['result'];    
                        $sql = $con->prepare("SELECT * FROM places WHERE (name LIKE '%$search%' OR description LIKE '%$search%')");      
                        $sql->execute();
                        $rows = $sql->fetchAll();
                        $count = $sql->rowCount();    
                        if($count > 0){
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
                        
                        
                        
                      <?php  }}else{
                        
                            
                            include('connect.php'); 
                        $search = $_POST['result'];    
                        $sql = $con->prepare("SELECT events.* , places.name FROM events INNER JOIN places ON places.place_id = events.place_id WHERE (events.title LIKE '%$search%' OR events.event LIKE '%$search%')");      
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
                        
                        
                      <?php  }}} ?>    
                       
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Destination Start -->
        

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