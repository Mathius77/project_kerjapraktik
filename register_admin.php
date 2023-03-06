<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style1.css">

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            body{
                background-color: aqua;
            }
        </style>
        
        <title>Register - Kasir</title>
    </head>
    <body>
    <?php
        include('koneksi.php');

        if(isset($_POST['submit'])){
            $user = $_POST['username'];
            $pass = $_POST['password'];
            $nama = $_POST['namalengkap'];
            $email = $_POST['email'];

            if($user == "" || $pass == "" || $nama == "" || $email == ""){
                echo "<div class='container py-5 h-100'>
                <div class='row d-flex justify-content-center align-items-center h-100'>
                <div class='col-lg-8 col-xl-6'>
                    <div class='card rounded-3'>
                    <div class='card-body p-4 p-md-6'>
                        <h3 class='mb-4 pb-2 pb-md-0 mb-md-5 px-md-2'>Register Kasir<hr></h3>
                        <span style=color:red;font-weight:bold>Field harus diisi!<br></span>
                        <br>
                        <a href='register_kasir.php'><- Kembali</a>
                    </div>
                    </div>
                </div>
                </div>
            </div>";
            } else{
                mysqli_query($conn, "INSERT INTO tbl_login_admin(username, password, namalengkap, email) VALUES('$user', md5('$pass'), '$nama', '$email')")
                    or die("Tidak dapat mengeksekusi query yang telah dimasukkan.");

                
                echo "<div class='container py-5 h-100'>
                <div class='row d-flex justify-content-center align-items-center h-100'>
                <div class='col-lg-8 col-xl-6'>
                    <div class='card rounded-3'>
                    <div class='card-body p-4 p-md-6'>
                        <h3 class='mb-4 pb-2 pb-md-0 mb-md-5 px-md-2'>Register Kasir<hr></h3>
                        <span style=color:green;font-weight:bold>Registrasi berhasil</span><br>
                        <br>
                        <a href='login_admin.php'>Login sebagai Admin</a>
                    </div>
                    </div>
                </div>
                </div>
            </div>";
                
            }
        } else {
            ?>
            <!--<section class="h-100 h-custom" style="background-color: #8fc4b7;">-->
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card rounded-3">
                    <!--<img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/img3.jpg" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">-->
                    <div class="card-body p-4 p-md-6">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Register Admin<hr></h3>
        
                        <form action="" method="post" class="px-md-2">
        
                        <div class="form-outline mb-4">
                            <label class="form-label" for="username">Username</label>    
                            <input type="text" name="username" id="username" class="form-control" />  
                        </div>
        
                        <div class="form-outline mb-4">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" />
                        </div>
        
                        <div class="form-outline mb-4">
                            <label for="namalengkap">Nama Lengkap</label>
                            <input type="text" name="namalengkap" class="form-control" id="namalengkap">
                        </div>
        
                        <div class="form-outline mb-4">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                        </div>
        
                        <button type="submit" name="submit" class="btn btn-success btn-lg mb-1">Register</button>
        
                        <div class="text-left">
                            <a class="small" href="login_kasir.php">Kembali</a>
                        </div>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        <?php
        }
        ?>

    <!--</section>-->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>