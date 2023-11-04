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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab3_phan2_bai3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Read Products</h1>
        <hr>
        <a class="btn btn-primary mt-2" href="b.php">Create a new product</a>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM products";
                    $result = $connect->query($sql);
                    if ($result->num_rows > 0)
                    {
                        while ($row = $result->fetch_assoc())
                        {
                            echo 
                            "<tr>
                                <th scope='row'>".$row["id"]."</th>
                                <td class='col-2'>".$row["name"]."</td>
                                <td>".$row["description"]."</td>
                                <td>$".$row["price"]."</td>
                                <td class='col-3'>
                                    <a href='c.php?id=".$row["id"]."' class='btn btn-primary ms-2'>Edit</a>
                                    <a href='d.php?id=".$row["id"]."' class='btn btn-danger ms-2'>Delete</a>
                                </td>
                            </tr>";
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <?php
        mysqli_close($connect);
    ?>
</body>