<?php
    $servername = "localhost";
    $username = "root"; 
    $password = "";
    $database = "shop";

    $connect = mysqli_connect($servername, $username, $password, $database);
    if ($connect->connect_error)
    {
        die("Connection failed: " . $connect->connect_error);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='style.css'>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a href="#" class="navbar-brand ms-3 me-2">Site Title</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-3">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Follow Us</a>
                        </li>
                    </ul>
                </div>  

                <form class="d-flex">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </nav>
    </div>

    <!--Body-->
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-2 bg-white">
                <!--Sidebar-->
                <div class= "row">
                    <div class="col-md-6 col-lg-12">
                        <div class="list-group ms-1 mt-1">
                            <a href="#" class="list-group-item list-group-item-secondary text-center bold">Category</a>
                            <?php
                                $sql = "SELECT * FROM products";
                                $result = $connect->query($sql);
                                if ($result->num_rows > 0)
                                {
                                    while ($row = $result->fetch_assoc())
                                    {
                                        echo "<a href='detail.php?id=" . $row["id"] . "'" . "class='list-group-item list-group-item-action'>" . $row["name"]."</a>";
                                    }
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12">
                        <div class="list-group ms-1 mt-1">
                            <a href="#" class="list-group-item list-group-item-secondary text-center bold">Top Products</a>
                            <?php
                                $sql = "SELECT * FROM products";
                                $result = $connect->query($sql);
                                if ($result->num_rows > 0)
                                {
                                    while ($row = $result->fetch_assoc())
                                    {
                                        echo "<a href='detail.php?id=" . $row["id"] . "'" . "class='list-group-item list-group-item-action'>" . $row["name"]."</a>";
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--Top Products-->
            <div class="col-md-12 col-lg-8 mt-2">
                <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="black" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="black" href="#">Main Category</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a class="black" href="#">Sub Category</a></li>
                    </ol>
                </nav>

                <div class="row">
                    <div class="col-md-12 col-lg-6 col-xl-6 mt-1">
                        <div class="row mt-2">
                            <img src='<?php
                                    $sql = "SELECT * FROM products WHERE id = " . $_GET["id"] . ";";
                                    $result = $connect->query($sql);
                                    echo $result->fetch_assoc()["image"];
                                ?>' class="img-thumbnail" alt="">
                        </div>
                        <div class="row">
                            <div class="col">
                                <img src='<?php
                                    $sql = "SELECT * FROM `products` WHERE id = " . $_GET['id'] . ";";
                                    $result = $connect->query($sql);
                                    echo $result->fetch_assoc()["image"];
                                ?>' class="img-thumbnail mt-2" alt="">
                            </div>
                            <div class="col">
                                <img src='<?php
                                    $sql = "SELECT * FROM `products` WHERE id = " . $_GET['id'] . ";";
                                    $result = $connect->query($sql);
                                    echo $result->fetch_assoc()["image"];
                                ?>' class="img-thumbnail mt-2" alt="">
                            </div>
                            <div class="col">
                                <img src='<?php
                                    $sql = "SELECT * FROM `products` WHERE id = " . $_GET['id'] . ";";
                                    $result = $connect->query($sql);
                                    echo $result->fetch_assoc()["image"];
                                ?>' class="img-thumbnail mt-2" alt="">
                            </div>
                            <div class="col">
                                <img src='<?php
                                    $sql = "SELECT * FROM `products` WHERE id = " . $_GET['id'] . ";";
                                    $result = $connect->query($sql);
                                    echo $result->fetch_assoc()["image"];
                                ?>' class="img-thumbnail mt-2" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-6 mt-2">
                        <h2>
                            <?php
                                $sql = "SELECT * FROM products WHERE id = " . $_GET["id"] . ";";
                                $result = $connect->query($sql);
                                echo $result->fetch_assoc()["name"];
                            ?>
                        </h2>
                        <h4>Summary:</h4>
                        <div class="p-3">
                            <p>
                                <?php
                                    $sql = "SELECT * FROM products WHERE id = " . $_GET["id"] . ";";
                                    $result = $connect->query($sql);
                                    echo $result->fetch_assoc()["description"];
                                ?>
                            </p>
                        </div>
                        <div class="text-center p-3">
                                <button class="btn btn-outline-secondary">Buy Now</button>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <h4>Description:</h4>
                    <p>
                        <?php
                            $sql = "SELECT * FROM products WHERE id = " . $_GET["id"] . ";";
                            $result = $connect->query($sql);
                            echo $result->fetch_assoc()["description"];
                        ?>
                    </p>
                </div>
            </div>
            <!--Sale-->
            <div class="d-none d-xl-block col-lg-2 col-xl-2">
                <div class="row hide">
                    <div class="col-lg-12 p-0" style="height: 600px">
                        <img src="images/gshock.png" alt="Sale">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12" style="height: 200px"></div>
                </div>
            </div>
        </div>
        <footer class="bg-light text-center">
            <div class="p-3">
                Footer Information...<br>
                <a class="text-primary" href="#">Link 1</a> |
                <a class="text-black text-decoration-none href="#">Link 2</a> |
                <a class="text-primary" href="#">Link 3</a> 
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>