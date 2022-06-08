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
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css"> -->
    <link href="../css/datatable.css" rel="stylesheet">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="../js/validation.js"></script>




    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet"> -->
    <!-- <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" rel="stylesheet"> -->
    

    <!-- <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script> -->
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
                            <a href="home.php" class="nav-item nav-link">Home</a>
                            <a href="user.php" class="nav-item nav-link active">Users</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Products</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="admin_mobile.php" class="dropdown-item">Mobiles</a>
                                    <a href="admin_laptop.php" class="dropdown-item  ">Laptops</a>
                                    <a href="admin_men_cloths.php" class="dropdown-item">Men Cloths</a>
                                    <a href="admin_women_cloths.php" class="dropdown-item">Women Cloths</a>
                                    <a href="admin_child_cloths.php" class="dropdown-item">Child Cloths</a>
                                    <a href="admin_grocery.php" class="dropdown-item">Grocery</a>
                                    <a href="admin_furniture.php" class="dropdown-item">Furniture</a>
                                    <a href="admin_accessories.php" class="dropdown-item">Accessories</a>
                                </div>
                            </div>
                            <a href="add_product.php" class="nav-item nav-link">Add Product</a>
                            <!-- <a href="detail.html" class="nav-item nav-link"></a> -->
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
    <div class="container-fluid pt-5"  >
        <div class="row px-xl-5 pb-3"  >


            <table id="example" class="table table-striped table-bordered"  style="width:100%">
                <thead class="table-primary">
                    <tr>
                    <td>Sr.No.</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Password</td>
                        <td>Contact</td>
                        <td>Update</td>
                        <td>Delete</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=1;
                    while ($row = $result->fetch()) { ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['name']; ?> </td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td><?php echo $row['mobile']; ?></td>
                            <td style="width: 60px;"><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-pencil-alt " style="color: orange;"></i></a></td>
                            <td style="width: 60px;"> <a class="btn" href="#"><i class="fa fa-trash" style="color: red;"></i></a></td>
                        </tr>
                    <?php $i++;} ?>
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

    <!-- Model Update User-->
                        <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="border: solid #d19c97 4px;border-radius: 30px;">
        <h4 class="font-weight-semi-bold mb-4 text-center  "
                          style="background-color: #d19c97; padding: 10px;    border-radius: 19px 19px 0px 0px;">
                          Update User <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;&nbsp;&nbsp;</span>
        </button></h4>
      <!-- <div class="modal-header"> -->
       
      <!-- </div> -->
      <div class="modal-body" style="margin-top:-15px;">
        <form action="../php/register.php" method="POST">
                  
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label>Name</label>
                            <input class="form-control" name="name" id="name" type="text" placeholder="John">
                        </div>

                        <div class="col-md-12 form-group">
                            <label>E-mail</label>
                            <input class="form-control" name="email" id="email" type="text" placeholder="example@email.com">
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Mobile No</label>
                            <input class="form-control" name="mobile" id="mobile"type="text" placeholder="+123 456 789">
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Password</label>
                            <input class="form-control" name="pass" id="pass"type="password" placeholder="example@123">
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Gender</label><br>
                            <input type="radio" id="male" name="gender" value="Male">
                            <label for="html">Male</label>
                            <input type="radio" id="female" name="gender" value="Female">
                            <label for="css">Female</label><br>
                        </div>
                        <span id="elo" class="serr" style='color:red'></span>
                        
                        <div class="col-md-12 d-flex justify-content-center ">
                            <button type="submit" class="font-weight-bold " onclick="return regster()" style="background-color: #d19c97;   padding: 4px 53px;    border-radius: 30px ;     border: 5px solid #d19c97;     font-size: 24px;">Update</button> 
                        </div>
                        
                    </div>
                </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
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
    
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    

    
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>