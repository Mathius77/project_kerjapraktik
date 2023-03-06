<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - Operator dan Kasir</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-secondary">
    <?php
    include("koneksi.php");
    if(isset($_POST['submit'])){
        $user = mysqli_real_escape_string($conn, $_POST['username']);
	    $pass = mysqli_real_escape_string($conn, $_POST['password']);

        if($user == "" || $pass == ""){
            echo"<div class='container'>
            <div class='row justify-content-center'>
    
                <div class='col-xl-5 col-lg-12 col-md-9'>
    
                    <div class='card o-hidden border-0 shadow-lg my-5'>
                        <div class='card-body p-0'>


                                    <div class='p-5'>
                                        <div class='text-center'>
                                            <h1 class='h4 text-gray-900 mb-4'>Selamat Datang!</h1>
                                        </div>
                                        <hr>
                                        <span style=color:red;font-weight:bold>Username dan Password harus diisi!</span>
                                        <br>
                                        <a href='login_kasir.php'>Kembali</a>
                                    </div>


                        </div>
                    </div>
    
                </div>
    
            </div>
    
        </div>";
        } else{
            $result = mysqli_query($conn, "SELECT * FROM tbl_login_kasir WHERE username='$user' AND password=md5('$pass')")
                        or die("Tidak dapat mengeksekusi query yang telah dipilih.");
            
            $row = mysqli_fetch_assoc($result);
            
            //bagian ini menentukan variabel-variabel sesi, disini terdapat 3 variabel valid, name, dan id
            if(is_array($row) && !empty($row)) {
                //$validuser = $row['username'];
                $_SESSION['valid'] = $row['username'];
                $_SESSION['namalengkap'] = $row['namalengkap'];
                $_SESSION['id'] = $row['id'];
            } else {
                echo"<div class='container'>
                <div class='row justify-content-center'>
        
                    <div class='col-xl-5 col-lg-12 col-md-9'>
        
                        <div class='card o-hidden border-0 shadow-lg my-5'>
                            <div class='card-body p-0'>


                                        <div class='p-5'>
                                            <div class='text-center'>
                                                <h1 class='h4 text-gray-900 mb-4'>Selamat Datang!</h1>
                                            </div>
                                            <hr>
                                            <span style=color:red;font-weight:bold>Username atau Password yang dimasukkan salah!</span>
                                            <br>
                                            <a href='login_kasir.php'>Kembali</a>
                                        </div>


                            </div>
                        </div>
        
                    </div>
        
                </div>
        
            </div>";
            }
    
            if(isset($_SESSION['valid'])) {
                header('Location: dashboard_kasir.php');			
            }
        }
    } else{
        ?>
        <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block"><img src="asset/pyb_login.png" width="500" height="600"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
                                    </div>
                                    
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control form-control-user" name="username" placeholder="Masukkan Username">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control form-control-user" name="password" placeholder="Masukkan Password">
                                        </div>
                                        <div class="form-group">
                                            <!--<div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>-->
                                        </div>

                                        <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" value="Login" />

                                        <hr>
                                        <a href="register_kasir.php" class="btn btn-google btn-user btn-block"> Register</a>
                                        <!--<a href="#" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>-->
                                    </form>

                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <!--<div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div>-->
                                    <div class="text-center">
                                        <a class="small" href="index.php">Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <?php
    }
    ?>    

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>