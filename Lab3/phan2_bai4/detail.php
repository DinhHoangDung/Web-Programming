<?php
    $servername = "localhost";
    $username = "root"; 
    $password = "";
    $database = "shop";

    $connect = new mysqli($servername, $username, $password, $database);
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <!--Body-->
    <div class="container">
            <!-- Top Products -->
            <div class="col-md-12 col-lg-12 mt-2 top_product">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="black" href="list.php">Home</a></li>
                        <li class="breadcrumb-item"><a class="black" href="list.php">Main Category</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sub-Category</li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="col-md-12 col-lg-6 col-xl-6 mt-1">
                        <div class="row mt-2">
                            <img src='<?php
                                $sql = "SELECT * FROM `products` WHERE id = " . $_GET['id'] . ";";
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
                                ?>' class="img-thumbnail mt-2' alt="">
                            </div>
                            <div class="col">
                                <img src='<?php
                                    $sql = "SELECT * FROM `products` WHERE id = " . $_GET['id'] . ";";
                                    $result = $connect->query($sql);
                                    echo $result->fetch_assoc()["image"];
                                ?>' class="img-thumbnail mt-2' alt="">
                            </div>
                            <div class="col">
                                <img src='<?php
                                    $sql = "SELECT * FROM `products` WHERE id = " . $_GET['id'] . ";";
                                    $result = $connect->query($sql);
                                    echo $result->fetch_assoc()["image"];
                                ?>' class="img-thumbnail mt-2' alt="">
                            </div>
                            <div class="col">
                                <img src='<?php
                                    $sql = "SELECT * FROM `products` WHERE id = " . $_GET['id'] . ";";
                                    $result = $connect->query($sql);
                                    echo $result->fetch_assoc()["image"];
                                ?>' class="img-thumbnail mt-2' alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-6 mt-2">
                        <h2>
                            <?php
                                $sql = "SELECT * FROM `products` WHERE id = " . $_GET['id'] . ";";
                                $result = $connect->query($sql);
                                echo $result->fetch_assoc()["name"];
                            ?>
                        </h2>
                        <h4>Summary:</h4>
                        <p>
                            <?php
                                $sql = "SELECT * FROM `products` WHERE id = " . $_GET['id'] . ";";
                                $result = $connect->query($sql);
                                echo $result->fetch_assoc()["description"];
                            ?>
                        </p>
                        <div class="text-center p-3">
                            <button class="btn btn-outline-secondary">Buy Now</button>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <h4>Description:</h4>
                    <p>
                        <?php
                            $sql = "SELECT * FROM `products` WHERE id = " . $_GET['id'] . ";";
                            $result = $connect->query($sql);
                            echo $result->fetch_assoc()["description"];
                        ?>
                    </p>
                </div>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <?php
        mysqli_close($connect);
    ?>
</body>
</html>