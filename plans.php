<?php

session_start();
if(!(isset($_SESSION['password']))){
	header('Location:../signin.php');
}

$id = $_SESSION['admin_id'];

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
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
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
            <a href="../index.php" class="navbar-brand p-0">
                <h1 style="color: #CCD4AF" class=" m-0"><i class="fa fa-map-marker-alt me-3"></i>RIHAL</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="users.php" class="nav-item nav-link">Users</a>
                    <a href="destination.php" class="nav-item nav-link">Places & Destinations</a>
                    <a href="departments.php" class="nav-item nav-link">Departments</a>
                    <a href="events.php" class="nav-item nav-link">Events</a>
                    <a href="plans.php" class="nav-item nav-link active">Users Plans</a>
                    <a href="comments.php" class="nav-item nav-link">Comments</a>
                    <a href="chat.php" class="nav-item nav-link">Technical Support</a>
                </div>
                <a href="../logout.php" style="background-color: #7F4E25 !important;border: 1px solid #7F4E25" class="btn btn-primary rounded-pill py-2 px-4"><i class="fa fa-key"></i> Sign Out</a>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Users Plans</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#" style="color: #7F4E25">Home</a></li>
                                <li class="breadcrumb-item"><a href="#" style="color: #7F4E25">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Users Plans</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    
    <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center  px-3">Users Plans</h6>

                    </div>
                </div>
                
            </div>
            <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Place</th>
                    <th>Events</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Number Of Persons</th>
                    <th>From Budget</th>
                    <th>To Budget</th>
                    <th>Events Types</th>
                    <th>Notes</th>
                    <th>Control</th>
                </tr>
            </thead>
            <tbody>
                <?php
                      
                include('../connect.php');  
                $sql = $con->prepare("SELECT customer_plans.* , events.title , events.event_type , places.name , customer.name as customer_name FROM customer_plans INNER JOIN places ON places.place_id=customer_plans.place_id INNER JOIN events ON events.event_id=customer_plans.event_id INNER JOIN customer ON  customer.customer_id=customer_plans.customer_id");      
                $sql->execute();
                $rows = $sql->fetchAll();

                foreach($rows as $pat)
                {

              ?>
                <tr>
                    <td><a title="Customer Data" href="customer_info.php?customer_id=<?php echo $pat['customer_id']; ?>"><?php echo $pat['customer_name']; ?></a></td>
                    <td><?php echo $pat['name']; ?></td>
                    <td>
                        <ul>
                            <li><?php echo $pat['title']; ?></li>
                            
                        </ul>
                    </td>
                    <td><?php echo $pat['from_date']; ?></td>
                    <td><?php echo $pat['to_date']; ?></td>
                    <td><?php echo $pat['persons_numbers']; ?></td>
                    <td><?php echo $pat['from_budget']; ?> SR</td>
                    <td><?php echo $pat['to_budget']; ?> SR</td>
                    <td><?php echo $pat['event_type']; ?></td>
                    <td><?php echo $pat['notes']; ?></td>
                    <td>
                        <a title="Plan Details" href="plan_details.php?plan_id=<?php echo $pat['customer_plan_id']; ?>" class="btn btn-primary" style="background-color: #7F4E25;border: 1px solid #7F4E25;color: #FFF"><i class="bi bi-eye"></i></a>
                       
                    </td>
                </tr>
                <?php } ?>
               
            </tbody>    
          </table>
            
        </div>
    </div>
    <!-- Package End -->
        

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-12 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">RIHAL</a>, All Right Reserved. 2024

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
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>