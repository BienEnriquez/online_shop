<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="/css/form.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    @extends('layout')
    @section('content')
    
    <div id="sign-up-form">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-login">Sign Up</h1>
                    <form action="">
                        <input type="text" name="username" class="loginArea" required placeholder="Enter Username">                       
                        <input type="email" name="email" class="loginArea" required placeholder="Enter email">
                        <input type="password" name="password" class="loginArea" required placeholder="Password">
                        <input type="password" name="confirmPassword" class="loginArea" required placeholder="Confirm Password"> 
                        <input type="submit" name="submit" value="Sign Up" class="submit-btn" required placeholder="password">
                        <p>Already have an account? <a href="#">Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>