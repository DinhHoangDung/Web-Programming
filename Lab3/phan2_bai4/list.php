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
                            <a href="#" class="list-group-item list-group-item-secondary text-center bold">Categories</a> <a href="#" class="list-group-item list-group-item-action"></a>
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
            <div class="col-md-12 col-lg-8 top_product">
                <h2 class="mt-1">
                    <small>Top Products</small>
                </h2>
                <div class="row">
                    <?php
                        $sql = "SELECT * FROM products";
                        $result = $connect->query($sql);
                        if ($result->num_rows > 0)
                        {
                            while ($row = $result->fetch_assoc())
                            {
                                echo "
                                    <div class='col-md-6 col-lg-6 col-xl-4 mt-4'>
                                        <div class='card text-center'>
                                            <img class='card-img-top' src='" . $row["image"] ."' alt='Card image' />
                                            <div class='card-body'>
                                                <p class='card-text fw-bold'>" . $row["name"] ."</p>
                                                <p class='card-text text-muted'>Price: " . $row["price"] ."</p>
                                                <a href='detail.php?id=" . $row["id"] . "'" . " class='btn btn-outline-secondary'>Buy Now</a>
                                            </div>
                                        </div>
                                    </div>";
                            }
                        }
                    ?>
                </div>
                <div class="row mt-3">
                    <ul class="pagination justify-content-end">
                        <li class="page-item">
                            <a class="page-link text-black" href="#">Prev</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link text-black" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link text-black" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link text-black" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link text-black" href="#">Next</a>
                        </li>
                    </ul>
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
                <a class="blue" href="#">Link 1</a> |
                <a class="black" href="#">Link 2</a> |
                <a class="blue" href="#">Link 3</a> 
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $(".list-group-item-action, .btn-outline-secondary").click(function(){
                id = $(this).attr('id');
                $.ajax({
                    url: "detail.php?id=" + id,
                    success: function(result){
                        $(".top_product").html(result);                        
                    }
                });
            });
        });
    </script>
    <?php
        mysqli_close($connect);
    ?>
</body>
</html>
