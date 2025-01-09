<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .bg-custom {
            background: linear-gradient(to bottom right, #0A2647, #144272);
        }
        .bg-custom-light {
            background-color: #2C74B3;
        }
        .btn-custom {
            background: linear-gradient(to right, #144272, #0A2647);
        }
    </style>
</head>
<body class="bg-custom min-vh-100 py-5">

<?php

require_once "../../../vendor/autoload.php";

use App\Controllers\AuthController;


if(isset($_POST["submit"]))
{

    if(empty($_POST["email"]) && empty($_POST["password"]))
    {
        echo "email or password is empty";
    }
    else{
        $email = $_POST["email"];
        $pass = $_POST["password"];

        $authController = new AuthController();
        $authController->login($email, $pass);

    }

}
?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="bg-custom-light text-center p-4 rounded-top">
                        <h2 class="text-white fw-bold fs-2">Welcome Back</h2>
                        <p class="text-white-50">Please sign in to your account</p>
                    </div>

                    <div class="card-body p-4">
                        <form method="POST">
                            <div class="mb-3">
                                <label class="form-label text-primary">Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    <input type="email" name="email" class="form-control" placeholder="you@example.com" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label text-primary">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    <input type="password" name="password" class="form-control" placeholder="••••••••" required>
                                </div>
                            </div>

                            <button type="submit" name="submit" class="btn btn-custom text-white w-100 mb-3">Login</button>
                        </form>

                        <div class="text-center mb-3">
                            <p class="text-muted">Don't have an account? 
                                <a href="./register.php" class="text-primary">Register here</a>
                            </p>
                        </div>

                        <div class="position-relative text-center mb-3">
                            <hr>
                            <span class="position-absolute top-50 start-50 translate-middle px-3 bg-white text-muted">
                                Or continue with
                            </span>
                        </div>

                        <div class="row g-2">
                            <div class="col-4">
                                <button class="btn btn-outline-secondary w-100">
                                    <i class="fab fa-google"></i>
                                </button>
                            </div>
                            <div class="col-4">
                                <button class="btn btn-outline-secondary w-100">
                                    <i class="fab fa-facebook"></i>
                                </button>
                            </div>
                            <div class="col-4">
                                <button class="btn btn-outline-secondary w-100">
                                    <i class="fab fa-twitter"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>