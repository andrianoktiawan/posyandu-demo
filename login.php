<?php
session_start();

require 'config.php';


if(isset($_POST['btnlogin'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cekdb = mysqli_query($db,"SELECT * FROM user WHERE username='$username' AND password='$password'");

    $uservalid = mysqli_fetch_array($cekdb);

    $baris = mysqli_num_rows($cekdb);

    if($uservalid){

        if($baris > 0){
            $_SESSION['log'] = "true";
            $_SESSION['username'] = $uservalid['username'];
        }else{
            echo "<script>alert('Maaf, Username atau Password salah!');</script>";
        };
    };
}


if(!isset($_SESSION['log'])){

}else{
    header('location:index.php');
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Page Title - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form  method="POST" >
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputUserName">Username</label>
                                                <input class="form-control py-4" name="username" id="UserName" type="username" placeholder="Enter username" required />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" name="password" id="inputPassword" type="password" placeholder="Enter password" required/>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" name="btnlogin">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>