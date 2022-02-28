<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="/assets-dashboard/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/assets-dashboard/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/assets-dashboard/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/assets-dashboard/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="/assets-landingpage/favicon.png">
    <!-- Template Stylesheet -->
    <link href="/assets-dashboard/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="/user/dashboard" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>LindungiDiri</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="/assets-dashboard/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{Auth()->user()->name}}</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="/user/dashboard" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="/" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                   
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="/assets-dashboard/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">{{Auth()->user()->name}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="/user/dashboard/profile/{{Auth()->user()->id}}" class="dropdown-item">My Profile</a>

                            <a href="/user/logout" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="col-md-15 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title" style="text-align: left">Edit Profile</h4><br>
                           @if(session()->has('errorpassword'))
                           <h5 style="color:red; text-align: left">Password Dan Confirm Password Harus Sama</h5>
                           @endif
                           @if(session()->has('suksespassword'))
                           <h5 style="color:green; text-align: left">Password Sukses Diganti</h5>
                           @endif
                            <form action="/user/dashboard/profile/{{Auth()->user()->id}}" method="POST">
                                @csrf
                              <div class="form-group">
                                <label for="lokasi" style="float: left">Username</label>
                                <input type="text" class="form-control" id="lokasi" value="{{Auth()->user()->name}}" name="name" readonly>
                              </div><br>
                              <div class="form-group">
                                <label for="suhu" style="float: left">Password</label>
                                <input type="password" class="form-control" id="suhu" placeholder="Password" name="password" required>
                              </div><br>
                              <div class="form-group">
                                <label for="suhu" style="float: left">Confirm Password</label>
                                <input type="password" class="form-control" id="suhu" placeholder="Password" name="confirmpassword" required>
                              </div><br>
                              <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            </form>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
            <!-- Recent Sales End -->


            <!-- Widgets Start -->
           
            <!-- Widgets End -->


            <!-- Footer Start -->
            
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets-dashboard/lib/chart/chart.min.js"></script>
    <script src="/assets-dashboard/lib/easing/easing.min.js"></script>
    <script src="/assets-dashboard/lib/waypoints/waypoints.min.js"></script>
    <script src="/assets-dashboard/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/assets-dashboard/lib/tempusdominus/js/moment.min.js"></script>
    <script src="/assets-dashboard/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="/assets-dashboard/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="/assets-dashboard/js/main.js"></script>
</body>

</html>