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
    <style>
        /*# sourceMappingURL=adminlte.css.map */
.chat-box{overflow:auto}.chat-list{margin:0px;padding:0px}.chat-list .chat-item{list-style:none;margin-top:30px}.chat-list .chat-item .chat-img{display:inline-block;width:45px;vertical-align:top}.chat-list .chat-item .chat-img img{width:45px;border-radius:100%}.chat-list .chat-item .chat-content{width:calc(100% - 50px);display:inline-block;padding-left:15px}.chat-list .chat-item .chat-content .box{display:inline-block;padding:10px;margin-bottom:3px;color:#343a40;background:#f8f9fa}.chat-list .chat-item .chat-time{display:block;font-size:10px;color:#4F5467;margin:5px 0 15px 65px}.chat-list .chat-item.odd .chat-content{text-align:right;width:calc(100% - 0px)}.chat-list .chat-item.odd .chat-time{text-align:right}.chat-list .chat-item.odd .box{clear:both;color:#fff;background:#27a9e3}.chat-list .chat-item.odd+.odd{margin-top:0px}.chat-list .chat-item.reverse{text-align:right}.chat-list .chat-item.reverse .chat-time{text-align:left}.chat-list .chat-item.reverse .chat-content{padding-left:0px;padding-right:15px}@media (min-width:768px){.bc-content{-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end}}@media (max-width:991.98px){.do-block{display:block!important}}
    </style>  
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
                    <a href="plans.php" class="nav-item nav-link">Users Plans</a>
                    <a href="comments.php" class="nav-item nav-link">Comments</a>
                    <a href="chat.php" class="nav-item nav-link active">Technical Support</a>
                </div>
                <a href="../logout.php" style="background-color: #7F4E25 !important;border: 1px solid #7F4E25" class="btn btn-primary rounded-pill py-2 px-4"><i class="fa fa-key"></i> Sign Out</a>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Technical Support Chatting</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#" style="color: #7F4E25">Home</a></li>
                                <li class="breadcrumb-item"><a href="#" style="color: #7F4E25">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Technical Support Chatting</li>
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
                        <h6 class="section-title bg-white text-center  px-3">Technical Support Chatting</h6>

                    </div>
                </div>
                
            </div>
            <?php
                  
              if(isset($_POST['add'])){


                $customer_id = $_POST['customer_id']; 
                $message = $_POST['message'];
                $chat_date = date('Y-m-d'); 
                $chat_time = date('h:i:s');   
                include('../connect.php');  



                    $sql = "INSERT INTO chatting (message , chat_date , chat_time , admin_id , opposer_id) VALUES ('$message' , '$chat_date' , '$chat_time' , '$id' , '$customer_id')";

                     $con->exec($sql);




              }


            ?>   
            <?php

             include('../connect.php');  
             $customer_id = isset($_GET['customer_id']) && is_numeric($_GET['customer_id']) ? intval($_GET['customer_id']) : 0;

             $stmtt = $con->prepare("SELECT name  FROM customer WHERE customer_id='$customer_id'");
             $stmtt->execute();
             $rowss = $stmtt->fetch();

             ?>
            <div class="card-body">
                          <h4 class="card-title" dir="ltr" style="font-family: cairo">Chatting With <?php echo $rowss['name']; ?></h4>
                          <div class="chat-box scrollable" style="height: 475px">
                            <!--chat Row -->
                            <ul class="chat-list">
                              <?php
										   
                                include('../connect.php');  
                                $sql = $con->prepare("SELECT
                                  chatting.* , customer.customer_id , customer.name as customer_name , admin.name as admin_name
                               FROM
                                  chatting

                               LEFT JOIN
                                  admin	  

                               ON
                                  chatting.admin_id = admin.admin_id

                                LEFT JOIN
                                  customer	  

                               ON
                                  chatting.customer_id = customer.customer_id");
                                $sql->execute();
                                $rows = $sql->fetchAll();

                                foreach($rows as $pat)
                                {

                                    if($pat["customer_id"] == $customer_id && $pat["opposer_id"] == $id){

                              ?>
                            <li class="chat-item">
                                <div class="chat-img">
                                  <img src="../img/user.png" alt="user" />
                                </div>
                                <div class="chat-content">
                                  <h6 class="font-medium" style="font-family: cairo"><?php echo $pat['customer_name']; ?></h6>
                                  <div class="box bg-light-info" style="font-family: cairo">
                                    <?php echo $pat['message']; ?>
                                  </div>
                                </div>
                                <div class="chat-time" style="font-family: cairo"><?php echo $pat['chat_time']; ?></div>
                              </li>
                            <?php }elseif($pat["admin_id"] == $id && $pat["opposer_id"] == $customer_id){ ?>
                            <li class="odd chat-item">
                                <div class="chat-content">
                                  <div class="box bg-light-inverse" style="font-family: cairo;background-color: #7F4E25">
                                   <?php echo $pat['message']; ?>
                                  </div>
                                  <br />
                                </div>
                              </li>
                            <?php }} ?>    
                              <!--chat Row -->
                              
                            </ul>
                          </div>
                        </div>
                        <div class="card-body border-top">
                          <div class="row" style="position:relative" dir="ltr">
                            <form method="post">
                             <input type="hidden" name="customer_id" value="<?php echo $customer_id; ?>">    
                            <div class="col-9">
                              <div class="input-field mt-0 mb-0">
                                <textarea style="color: #2D6950;font-family: cairo"
                                  id="textarea1"
                                  name="message"
                                  required          
                                  placeholder="Write a Something..."          
                                  class="form-control border-0"
                                ></textarea>
                              </div>
                            </div>
                            <div class="col-3" style="position:absolute;right:-100px;top:-5px">
                              <button type="submit" name="add" style="position: relative;background-color: #7F4E25;margin-right: 277px;width: 50px;height: 50px;border-radius: 50%;margin-top: 5px"
                                class="btn-circle btn-lg btn-cyan float-end"
                                href="javascript:void(0)"
                                ><i style="position: absolute;bottom: -2px;color: #FFF;left: 11px;margin-bottom: 5px" class="bi bi-arrow-up fs-3"></i
                              ></button>
                            </div>
                            </form>    
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