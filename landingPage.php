<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;500&display=swap" rel="stylesheet">
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Welcome to Twitstore!</title>
    <style>
        * {
            font-family: 'Manrope', sans-serif;
        }

        .btn {
            background-color: #C6396D;
            color: white;
        }
        .btn:hover {
            background-color: #39C692;
            color: white;
        }
    </style>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light border">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="font-size: 30px;">
                <span><b style="color: #C6396D;">Twit</b></span><span><b style="color: #39C692;">store</b></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" style="font-size: 25px; color: #424242;" aria-current="page" href="#login" data-bs-toggle="modal" data-bs-target="#login"><b>Log In</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" style="font-size: 25px; color: #424242;" aria-current="page" href="#signin" data-bs-toggle="modal" data-bs-target="#signin"><b>Sign In</b></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- part1 -->
    <div class="container-fluid" style="background-color: #424242;">
        <div class="row">
            <div class="col-xl" style="padding-left: 0 !important; padding-right: 0 !important;">
                <img src="http://localhost/PROJECT_UAS/images/m1 cropped1.jpg" class="img-fluid">
            </div>

            <div class="col-xl mt-4" style="background-color: #424242; color: white; padding-left: 2em;">
                <h1 class="h1" style="font-size: 100px;">Eats and Drinks</h1>
                <p style="font-size: 30px;">
                    Share the joy with everyone in <b>Twitstore!</b>
                    One click of a button, get your drinks and foods delivered in no time!
                </p>
                <button class="btn btn-lg mb-4">
                    <b data-bs-toggle="modal" data-bs-target="#login" style="font-size: 35px;">Order now!</b>
                </button>
            </div>
        </div>

        <div class="row" style="color: white;">
            <div class="col text-center" style="background-color: #39C692;">
                <h1 class="h1 mt-2 mb-2" style="font-size: 100px;">Eats and Drinks</h1>
            </div>
        </div>
        <div class="row">
            <div class="col" style="padding-left: 0 !important; padding-right: 0 !important;">
                <img src="http://localhost/PROJECT_UAS/images/m cropped.jpg" class="img-fluid">
            </div>
        </div>
        <div class="row" style="color: white;">
            <div class="col text-center" style="background-color: #C6396D;">
                <p class="mt-4 mb-4" style="font-size: 40px;">Made easier with <b>Twitstore!</b></p>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="container-fluid" style="background-color: #424242; color: white;">
        <div class="row">
            <div class="col mt-3 mb-3">
                <h1 class="h1 mb-0">Twitstore.inc</h1>
                <small>All Right Reserved 2022</small>
                <br>
                <small class="mb-0">St. Wilman Street 27, Brighton 2134, United Kingdom</small>
            </div>
        </div>
    </div>
    
    <!-- modal signin -->
    <div class="modal fade" id="signin" tabindex="-1" aria-labelledby="signin" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signin">Sign-In</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="http://localhost/signin-data-process.php" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="email">
                            <div id="email" class="form-text">Enter your active email</div>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username">
                            <div id="username" class="form-text">Insert the username that you have registered</div>
                        </div>
        
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="agreement" name="agreement" value="1">
                            <label class="form-check-label" for="agreement">I agree with the terms and conditions</label>
                        </div>
                        <button type="submit" class="btn">Submit</button> 
                        <button type="reset" class="btn mx-2">Reset</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <small><b>Twitstore.inc</b></small>
                </div>
            </div>
        </div>
    </div>
    
    <!-- modal login -->
    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="login" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="login">Log-In</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="http://localhost/login-data-process.php" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username">
                            <div id="username" class="form-text">Insert the username that you have registered</div>
                        </div>
        
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <!-- <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="agreement" name="agreement">
                            <label class="form-check-label" for="agreement">I agree with the terms and conditions</label>
                        </div> -->
                        <button type="submit" class="btn">Submit</button> 
                        <button type="reset" class="btn mx-2">Reset</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <small><b>Twitstore.inc</b></small>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>