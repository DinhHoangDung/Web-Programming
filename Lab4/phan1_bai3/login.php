<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">    
</head>

<body>
    <h4>username: admin, password: 123</h4>
    <div class="container bg-light mt-3" style="width: 400px">
        <div class="row">
            <h3 class="fw-bold text-center mt-2">Login</h3>
        </div>

        <form action="login.php" method="post">
            
            <input type="text" class="form-control mt-3" name="username" placeholder="Username">
            <input type="password" class="form-control mt-3" name="password" placeholder="Password">
            <div class = "mt-3">
                <input type="checkbox" class="form-control mt-3" id="remember" name="remember" value="Remember me">
                <label for="remember">Remember me</label>
            </div>
            <div class = "text-center">
                <input type="submit" class="form btn btn-outline-primary mt-3" name="submit" value="Login">
            </div>
        </form>
    </div>
    <?php
        if(isset($_SESSION['username'])) 
        {
            header('Location: info.php');
        }
        if (isset($_POST['submit'])) 
        {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if ($username == 'admin' && $password == '123') 
            {
                $_SESSION['username'] = $username;
                header('location: info.php');
            }
            else
            {
                echo "<script>alert('Invalid username or password')</script>";
            }
        }
    ?>
</body>
