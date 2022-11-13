<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from treemium-html.vercel.app/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Oct 2022 15:18:53 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fugu Login</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Owlcarousel -->
    <link rel="stylesheet" href="plugins/owlcarousel/css/owl.carousel.min.css">
    <!-- Venobox -->
    <link rel="stylesheet" href="plugins/venobox/venobox.min.css">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>




    <div class="main-wrapper">
        <!--===================== Authentication Start =====================-->
        <div class="authentication">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-lg-8 col-xl-5">
                            <div class="mini-logo text-center mb-5">
                                <h1><b>Fugu</b></h1>
                            </div>
                        <div class="auth-form card">
                            <div class="card-header justify-content-center">
                                <h4 class="card-title">Sign in</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" class="signin_validate" action="login">
                                    @csrf
                                    <div class="form-group">
                                        @error('email')
                                            <p style="color: red; text-align: center;">Invalid login credentials</p>
                                        @enderror
                                        <label>Email</label>
                                        <input required type="email" class="form-control" placeholder="Email"
                                            name="email">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" required placeholder="Password"
                                            name="password">
                                    </div>
                                    <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                        <div class="form-group mb-0">
                                            <label class="toggle">
                                                <input class="toggle-checkbox" type="checkbox">
                                                <div class="toggle-switch"></div>
                                                <span class="toggle-label">Remember me</span>
                                            </label>
                                        </div>
                                        <div class="form-group mb-0">
                                            <a href="reset">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success w-100">Sign in</button>
                                    </div>
                                </form>
                                <div class="new-account mt-3">
                                    <p>Don't have an account? <a class="text-primary" href="signup">Sign
                                            up</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===================== Authentication End =====================-->
    </div>
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="plugins/validator/jquery.validate.js"></script>
    <script src="plugins/validator/validator-init.js"></script>
    <script src="js/scripts.js"></script>
    
</body>

<!-- Mirrored from treemium-html.vercel.app/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Oct 2022 15:18:53 GMT -->
</html>