
<?php include 'connection.php';

if (isset($_POST['cusreg'])) {
    extract($_POST);
    $q1="select * from login where username='$uname' ";
        $res1=select($q1);
        if (sizeof($res1)>0) {
            alert('already exist');
        }else{
    echo$q="insert into login values(null,'$uname','$pwd','host')";
     $id=insert($q);
 echo $q1="insert into host values(null,'$id','$fname','$place','$num','$email') ";
   insert($q1);
   alert('sucessfully');
   return redirect('entrepreneurreg.php');
}
}



 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Foodie Zone</title>
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

<body onload="handleOnLoad()" onmousemove="trickyButton()" >
    <div class="container-xxl bg-white p-0">
     

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Foodie Zone</h1>
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
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Registration</a>
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

                                 <h4 class="display-3 text-white animated slideInLeft">Host Registration</h4>


 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>

 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


                    <body ng-app="app" ng-controller="controller">
                     <form method="post">
               


               <table class="table" style="width: 400px;color: white">


                        <tr>
                            <th>Host Name:</th>
                            <td><input type="text" name="fname" required="" class="form-control" placeholder="Enter Host Name:">
                            <!--  <span style="color:red" ng-show="myForm.$submitted || myForm.hname.$dirty">
                            <span id="mainspan" ng-show="myForm.hname.$error.required">Name is required</span> --></td>
                            </td>
                        </tr>


                        <tr>
                            <th>Place</th>
                            <td><input "  type="text"  required name="place"  required class="form-control" placeholder="Place">
                           <!--  <span style="color:red" ng-show="myForm.$submitted || myForm.place.$dirty">
                            <span id="mainspan2" ng-show="myForm.place.$error.required">Place is required</span> --></td>
                            </td>
                        </tr>
                       <!--  <tr>
                            <th>License Number</th>
                            <td>
                            <input id="lno" onblur="handleBlur3()" type="text" name="hlicense" ng-model="hlicense" required class="form-control" placeholder="License number">
                        <span style="color:red" ng-show="myForm.$submitted || myForm.hlicense.$dirty">
                            <span id="mainspan3" ng-show="myForm.hlicense.$error.required">License Number is required</span>
                            </td>
                        </tr>
 -->
                        <tr>
                            <th>Phone</th>
                            <td>
                                <input type="number" name="num"  required class="form-control" placeholder="Enter Phone Number:">
                        <!-- <span style="color:red" ng-show="myForm.$submitted || myForm.hphone.$dirty">
                            <span id="mainspan5" ng-show="myForm.hphone.$error.required">Phone is required</span> --></td>
                            </td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>
                                <input  type="email" name="email" required class="form-control" placeholder="Enter Email address:">
                     <!--    <span style="color:red" ng-show="myForm.$submitted || myForm.hemail.$dirty">
                            <span  id="mainspan6" ng-show="myForm.hemail.$error.required">Email is required</span> -->
                            </td>
                        </tr>
                        
                        <tr>
                            <th>Username</th>
                            <td>
                            <input  type="text" name="uname"  required class="form-control" placeholder="Username">
                     <!--    <span style="color:red" ng-show="myForm.$submitted || myForm.username.$dirty">
                            <span id="mainspan7" ng-show="myForm.username.$error.required">Username is required</span> -->
                            </td>
                        </tr>
                        <tr>
                            <th>Password</th>
                            <td>
                            <input  required name="pwd" class="form-control" placeholder="Password">
                           <!--  <span style="color:red" ng-show="myForm.$submitted || myForm.password.$dirty">
                            <span id="mainspan8" ng-show="myForm.password.$error.required">Password is required</span> -->
                        </span>
                        </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><input  class="btn btn-success" style="border-radius: 0px;margin-top: 5px;" type="submit"  name="cusreg" value="Register"></td>
                        </tr>
                    </table>    
                </form>

              <!--   <script>
                    let elName = document.getElementById("mainname").value;
                    let elPlace = document.getElementById("place").value;
                    let elLNo = document.getElementById("lno").value;
                    let elPhone = document.getElementById("phoneno").value;
                    let elEmail = document.getElementById("email").value;
                    let elUname = document.getElementById("uname").value;
                    let elPass = document.getElementById("pass").value;

                    const trickyButton = () => {

                        let elName = document.getElementById("mainname").value;
                        let elPlace = document.getElementById("place").value;
                        let elLNo = document.getElementById("lno").value;
                        let elPhone = document.getElementById("phoneno").value;
                        let elEmail = document.getElementById("email").value;
                        let elUname = document.getElementById("uname").value;
                        let elPass = document.getElementById("pass").value;

                    if (elName === "" || elPlace === "" || elLNo === "" || elPhone === "" || elEmail === "" || elUname === "" || elPass === "" )
                        {   
                            document.getElementById("btnmain").disabled =true;
                            document.getElementById("btnmain").style.backgroundColor="red"
                            
                            // document.getElementById("btnmain").style.display="none"

                        }else{
                            document.getElementById("btnmain").style.backgroundColor="green"
                            document.getElementById("btnmain").disabled =false;
                        }
                    }


                    const handleSubmit = () => {
                        if (elName === "" || elPlace === "" || elLNo === "" || elPhone === "" || elEmail === "" || elUname === "" || elPass === "" )
                        {   
                            alert("Enter complete Details to Continue !")
                            
                            // document.getElementById("btnmain").style.display="none"

                        }

                    }

                    const handleBlur = () => {
                        if (document.getElementById("mainname").value ==="" ){
                            document.getElementById("mainspan").style.display="block"
                            document.getElementById("btnmain").disabled =true;
                            document.getElementById("btnmain").style.backgroundColor="red"

                        }else{
                            document.getElementById("mainspan").style.display="none"
                            document.getElementById("btnmain").style.backgroundColor="green"
                            document.getElementById("btnmain").disabled =false;
                        }
                    }
                    
                    const handleBlur2 = () => {
                        if (document.getElementById("place").value === "" ){
                            document.getElementById("mainspan2").style.display="block"
                            document.getElementById("btnmain").disabled =true;
                            document.getElementById("btnmain").style.backgroundColor="red"

                        }else{
                            document.getElementById("mainspan2").style.display="none"
                            document.getElementById("btnmain").style.backgroundColor="green"
                            document.getElementById("btnmain").disabled =false;
                        }
                    }
                    const handleBlur3 = () => {
                        if (document.getElementById("lno").value === "" ){
                            document.getElementById("mainspan3").style.display="block"

                        }else{
                            document.getElementById("mainspan3").style.display="none"
                        }
                    }
                   
                    const handleBlur5 = () => {
                        if (document.getElementById("phoneno").value === "" ){
                            document.getElementById("mainspan5").style.display="block"

                        }else{
                            document.getElementById("mainspan5").style.display="none"
                        }
                    }
                    const handleBlur6 = () => {
                        if (document.getElementById("email").value === "" ){
                            document.getElementById("mainspan6").style.display="block"

                        }else{
                            document.getElementById("mainspan6").style.display="none"
                        }
                    }
                    const handleBlur7 = () => {
                        if (document.getElementById("uname").value === "" ){
                            document.getElementById("mainspan7").style.display="block"

                        }else{
                            document.getElementById("mainspan7").style.display="none"
                        }
                    }
                    const handleBlur8 = () => {
                        if (document.getElementById("pass").value === "" ){
                            document.getElementById("mainspan8").style.display="block"

                        }else{
                            document.getElementById("mainspan8").style.display="none"
                        }
                    }
                    
                    
                    
                    
                    const handleOnLoad = () => {
                        
                        // if (elName === "" ){
                        //  document.getElementById("mainspan").style.display="none";

                            
                        //  }
                            // else{
                            // document.getElementById("mainspan").style.display="block";
                            // }
                        document.getElementById("mainspan").style.display="none"
                        document.getElementById("mainspan2").style.display="none"
                        document.getElementById("mainspan3").style.display="none"
                       
                        document.getElementById("mainspan5").style.display="none"
                        document.getElementById("mainspan6").style.display="none"
                        document.getElementById("mainspan7").style.display="none"
                        document.getElementById("mainspan8").style.display="none"
                        document.getElementById("mainname").focus()
                
                        document.getElementById("btnmain").disabled =true;
                            document.getElementById("btnmain").style.backgroundColor="red"

                    }


                    const buttonHandle = () => {
                        // let elUname = document.getElementById("uname").value;
                        // let elPass = document.getElementById("btnmain").

                        if (document.getElementById("uname").value === "" || document.getElementById("pass").value === "" ){

                            document.getElementById("btnmain").disabled =true;
                            document.getElementById("btnmain").style.color="red"
                        }else{
                            document.getElementById("btnmain").disabled =false;
                            document.getElementById("btnmain").style.color="green"

                        }
                    }

                </script> -->
</body>

</center>


</body>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
<?php include 'footer.php' ?>