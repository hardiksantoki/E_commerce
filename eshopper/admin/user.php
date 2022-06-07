<?php
require_once '../php/connection.php';

$query = "SELECT * FROM user WHERE bit=0";

$result = $connect->query($query);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">


    <!-- data tables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">Admin</span>Panel</h1>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse" style="background-color: #D19C97;">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="home.php" class="nav-item nav-link ">Home</a>
                            <a href="user.php" class="nav-item nav-link active">Users</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Products</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="admin_mobile.php" class="dropdown-item">Mobiles</a>
                                    <a href="admin_laptop.php" class="dropdown-item">Laptops</a>
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link">Contact</a>
                            <a href="detail.html" class="nav-item nav-link"></a>
                        </div>
                        <div class="navbar-nav ml-auto py-0">
                            <a href="login.php" class="nav-item nav-link">Logout</a>
                            <!-- <a href="registration.php" class="nav-item nav-link">Register</a> -->
                        </div>
                    </div>
                </nav>
                
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            

            <table class="table text-center display"  id="table_id">
                <thead class="table-primary">
                    <tr>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Password</td>
                        <td>Contact</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($row=$result->fetch()){ ?>
                    <tr>
                        <td><?php echo $row['name'];?> </td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['password'];?></td>
                        <td><?php echo $row['mobile'];?></td>
                        <td><a href="#">Update</a> <a href="#">Delete</a></td>
                    </tr>
                    <?php } ?>
                    
                  
                </tbody>
            </table>
        </div>
    </div>
    <!-- Featured End -->


    <!-- Categories Start -->
    
    <!-- Categories End -->


    <!-- Offer Start -->
    
    <!-- Offer End -->


    <!-- Products Start -->
   
    <!-- Products End -->


    <!-- Subscribe Start -->
 
    <!-- Subscribe End -->


    <!-- Products Start -->
    
    <!-- Products End -->


    <!-- Vendor Start -->
   
    <!-- Vendor End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="#">Your Site Name</a>. All Rights Reserved. Designed
                    by
                    <a class="text-dark font-weight-semi-bold" href="https://htmlcodex.com">HTML Codex</a><br>
                    Distributed By <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="../mail/jqBootstrapValidation.min.js"></script>
    <script src="../mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>


    <!-- data table -->
    <script>

        // $(document).ready( function () {
        //     $('#table_id').DataTable();
        // } );

        let table = new DataTable('#example', {
    // options
});

    </script>
</body>

</html>