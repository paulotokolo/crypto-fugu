<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fugu Signup</title>
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
                                <h4 class="card-title">Sign up your account</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="create" class="signup_validate">
                                    @csrf
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control" required placeholder="Full Name" name="name">
                                        @error('name')
                                        <p style="color: red;">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" required placeholder="Email"
                                            name="email">
                                            @error('email')
                                        <p style="color: red;">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" required placeholder="Password"
                                            name="password">
                                            @error('password')
                                            <p style="color: red;">{{$message}}</p>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="phone" class="form-control" required placeholder="Phone Number"
                                            name="phone">
                                            @error('phone')
                                        <p style="color: red;">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-success w-100">Sign up</button>
                                    </div>
                                </form>
                                <div class="new-account mt-3">
                                    <p>Already have an account? <a class="text-primary" href="login">Sign in</a>
                                    </p>
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

</html>