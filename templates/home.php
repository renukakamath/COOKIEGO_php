<?php include 'connection.php';


if (isset($_POST['feedback'])) {
   extract($_POST);

   $q="insert into feedback values(null,'0','$det',curdate(),'guest')";
   insert($q);
   alert("send feedback");
   return redirect('home.php');
}



if (isset($_GET['pid'])) {
  extract($_GET);


  $q="insert into participate values(null,'$pid','0','guest',curdate(),'participate')";
  insert($q);
  alert("Participated");
   return redirect('home.php');


}

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cookie Go..</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

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
    <div class="container-xxl bg-white p-0">
     


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Cookie Go..</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="home.php" class="nav-item nav-link active">Home</a>
                        <!-- <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link">Service</a>
                        <a href="menu.html" class="nav-item nav-link">Menu</a> -->
                        <div class="nav-item dropdown">
                            <a href="userreg.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Registration</a>
                            <div class="dropdown-menu m-0">
                                <a href="entrepreneurreg.php" class="dropdown-item">Host Registration</a>
                                <a href="userreg.php" class="dropdown-item">User Registration</a>
                                <!-- <a href="testimonial.html" class="dropdown-item">Testimonial</a> -->
                            </div>
                        </div>
                       <!--  <a href="contact.html" class="nav-item nav-link">Contact</a> -->
                    </div>
                    <!-- <a href="login" class="nav-item nav-link">LOGIN</a> -->
                    <a href="login.php" class="btn btn-primary py-2 px-4">LOGIN</a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Delicious Meal</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                            <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A Table</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->



        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Recepie</h5>
                    <h1 class="mb-5">Most Popular Recepie</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                       
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3"  href="#tab-3">
                                <i class="fa fa-utensils fa-2x text-primary"></i>

                                 <form  method="post">
                                <div class="ps-3">

                                   
                                     <input type="text"   name="item">
                                    <input type="submit"  class="btn btn-success" name="search">
                                   
                                </div>
                                 </form>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">


                                           <?php 

    if (isset($_POST['search'])) {
        extract($_POST);

  $q="select * from recepie  where recepie like '$item%' ";

      
    }else{

    $q="select * from recepie ";
}
    $res=select($q);

    $i=1;
    foreach($res as $row){

    ?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">


                                        <img class="flex-shrink-0 img-fluid rounded" src="<?php echo $row['image'] ?>" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                
                                                <span >Incredienets:  <?php echo $row['incredienets'] ?></span>
                                                <span  class="text-primary">Recepie:  <?php echo $row['recepie'] ?></span>
                                            </h5>
                                            <small class="fst-italic">Details:  <?php echo $row['details'] ?></small>
                                        </div>
                                    </div>
                                </div>
                               
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->


        <!-- Reservation Start -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal"></h5>
                        <h1 class="text-white mb-4">Send Feedback</h1>
                        <form  method="post">
                            <div class="row g-3">
                                
                                
                                
                                
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Special Request"  name="det" id="message" style="height: 100px;width: 550px"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" name="feedback" type="submit">Send Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/mLledPsKnoU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation Start -->


    

        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal"></h5>
                    <h1 class="mb-5">Our Events!!!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                                      <?php 

 
 

    $q="select * from event ";

    $res=select($q);

    $i=1;
    foreach($res as $row){

    ?>

                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>


  

                        <p>Details:  <?php echo $row['details'] ?></p>
                        <div class="d-flex align-items-center">
                            
                            <div class="ps-3">
                                <h5 class="mb-1">Event:  <?php echo $row['event'] ?></h5>
                                <small>Event Date:  <?php echo $row['eventdate'] ?></small><br>
                                <button   class="btn btn-success"><a href="?pid=<?php echo $row['event_id'] ?>">Participate</a></button>
                            </div>
                        </div>


                    </div>

                        <?php } ?>
                   
                    
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        

<?php include 'footer.php' ?>