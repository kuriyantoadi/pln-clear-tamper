<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login Tamper PLN</title>
        <link href="../assets/css/styles.css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="../assets/img/favicon.png" />
        <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container-xl px-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <!-- Basic login form-->
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    
                                    <div class="card-header justify-content-center">
                                        <div style="display: flex; justify-content: center; align-items: center;">
                                            <img src="../assets/images/Logo_PLN.png" height="100px" alt="PLN">
                                        </div>

                                        <h3 class="fw-light my-4" style="text-align: center;">PLN Clear Tamper ULP Pandeglang</h3>
                                    </div>
                                    <div class="card-body">
                                        <?php
                                        if (isset($_GET['pesan'])) {
                                            if ($_GET['pesan'] == "gagal") {
                                                echo "
                                                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                                    Username atau Password Salah
                                                    <button class='btn-close' type='button' data-bs-dismiss='alert' aria-label='Close'></button>
                                                </div>
                                                ";
                                            } elseif ($_GET['pesan'] == "logout") {
                                                echo "
                                                <div class='alert alert-primary alert-dismissible fade show' role='alert'>
                                                    Anda Berhasil Logout
                                                    <button class='btn-close' type='button' data-bs-dismiss='alert' aria-label='Close'></button>
                                                </div>
                                                ";
                                            } elseif ($_GET['pesan'] == "belum_login") {
                                                echo "
                                                <div class='alert alert-primary alert-dismissible fade show' role='alert'>
                                                    Anda Harus Login
                                                    <button class='btn-close' type='button' data-bs-dismiss='alert' aria-label='Close'></button>
                                                </div>
                                                ";
                                            }
                                        }
                                        ?>

                                        <!-- Login form-->
                                        <form method="post" action="cek_login.php">
                                            <!-- Form Group (email address)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="inputEmailAddress">Username</label>
                                                <input class="form-control" id="inputEmailAddress" type="text" name="username" placeholder="Inputkan Username" />
                                            </div>
                                            <!-- Form Group (password)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Inputkan password" />
                                            </div>
                                            <!-- Form Group (remember password checkbox)-->
                                            
                                            <!-- Form Group (login box)-->
                                           <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                                <input type="submit" class="btn btn-primary" value="Login"></input>
                                            </div>

                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="footer-admin mt-auto footer-dark">
                    <div class="container-xl px-4">
                        <div class="row">
                            <div class="col-md-6 small">Copyright &copy; Your Website 2021</div>
                            <div class="col-md-6 text-md-end small">
                                <a href="#!">Privacy Policy</a>
                                &middot;
                                <a href="#!">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../assets/js/scripts.js"></script>
    </body>
</html>
