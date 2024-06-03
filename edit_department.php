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
                    <a href="departments.php" class="nav-item nav-link active">Departments</a>
                    <a href="events.php" class="nav-item nav-link">Events</a>
                    <a href="plans.php" class="nav-item nav-link">Users Plans</a>
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
                        <h1 class="display-3 text-white animated slideInDown">Events Departments</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#" style="color: #7F4E25">Home</a></li>
                                <li class="breadcrumb-item"><a href="#" style="color: #7F4E25">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Events Departments</li>
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
                        <h6 class="section-title bg-white text-center  px-3">Edit Department</h6>

                    </div>
                </div>
                
            </div>
            <?php
                  
      if(isset($_POST['edit'])){

        $department_id = $_POST['department_id'];
        $name = $_POST['name'];
           
        
        include('../connect.php');  
        $sql = $con->prepare("SELECT * FROM department WHERE name='$name' AND department_id !='$department_id'");      
        $sql->execute();
        $rowsVVV = $sql->fetch();
        $count=$sql->rowCount();
        if($count <= 0){
            
             $stmt = $con->prepare("UPDATE department SET  name = ?  WHERE department_id = ?");
                $stmt->execute(array($name , $department_id));

                echo '<div class="container" dir="ltr" style="margin-top:30px;color:#FFF;margin-bottom:30px;font-family:cairo">
                          <div class="alert alert-info role="alert" style="color:#FFF;text-align:center;margin-bottom:40px;font-family:cairo">
                              Department Updated Successfully
                         </div>
                     </div>';

        }else{


            echo '<div class="container" dir="ltr" style="margin-top:30px;color:#FFF;margin-bottom:30px;font-family:cairo">
                  <div class="alert alert-info role="alert" style="color:#FFF;text-align:center;margin-bottom:40px;font-family:cairo">
                      This DEpartment Is Found Before
                 </div>
             </div>';


        }


     }


 ?>
    <?php

     $department_id = isset($_GET['department_id']) && is_numeric($_GET['department_id']) ? intval($_GET['department_id']) : 0;

     include('../connect.php');
     $stmt = $con->prepare("SELECT * FROM department WHERE department_id='$department_id'");  
     $stmt->execute();
     $rowsSpec = $stmt->fetch();
     $count = $stmt->rowCount();

    ?> 
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    
                </div>
                
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <form method="post">
                        <input type="hidden" name="department_id" value="<?php echo $department_id; ?>"> 
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" name="name" value="<?php echo $rowsSpec['name']; ?>" required class="form-control" id="name" placeholder="Name">
                                    <label for="name">Name</label>
                                </div>
                            </div>
                            
                            
                            <div class="col-12">
                                <button name="edit" class="btn btn-primary w-100 py-3" style="background-color: #7F4E25 !important;border: 1px solid #7F4E25" type="submit">Update</button>
                                
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    
                </div>
            </div>
            
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