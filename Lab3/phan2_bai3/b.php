<?php
    $severname = "localhost";
    $username = "root";
    $password = "";
    $database = "shop";
    $connect = new mysqli($severname, $username, $password, $database);
    if ($connect->connect_error) 
    {
        die("Connection failed: " . $connect->connect_error);
    }
    $id = $img = $name = $description = $price = "";
    $sql = "SELECT * FROM products";
    $result = $connect->query($sql);
    if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST")
    {
        if ($_POST["submit"] == "Create")
        {
            $id = isset($_POST['id']) ? $_POST['id'] : null;
            $name = $_POST['name']; 
            $description = $_POST['description'];
            $price = $_POST['price'];
            $img = $_POST['img'];
            if (!$id && !id != 0)
            {
                echo '<script>alert("Please enter ID")</script>';
            }
            else if (!preg_match("/^[0-9]{1,100}$/", $id))
            {
                echo '<script>alert("ID must be a number")</script>';
            }
            else if (strlen($name) < 5 || strlen($name) > 40)
            {
                echo '<script>alert("Name contains from 5 to 40 characters")</script>';
            }
            else if (strlen($description) > 5000)
            {
                echo '<script>alert("Description contains from 0 to 5000 characters")</script>';
            }
            else if (!is_numeric($price))
            {
                echo '<script>alert("Price contains only numbers")</script>';
            }
            else if(strlen($img) > 255)
            {
                echo '<script>alert("Image contains maximum 255 characters")</script>';
            }
            else
            {
                $test = 0;
                if ($result->num_rows > 0)
                {
                    while ($row = $result->fetch_assoc())
                    {
                        if ($row["id"] == $id)
                        {
                            $test = 1;
                            echo '<script>alert("ID already exists")</script>';
                        }
                    }
                }
                if ($test == 0)
                {
                    $newsql = "INSERT INTO products (id, name, description, price, image) VALUES ('$id', '$name', '$description', '$price', '$img')";
                    if ($connect->query($newsql) === TRUE) 
                    {
                        echo '<script>alert("Create successfully")</script>';
                    } 
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab3_phan2_bai3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container bg-light" style="width: 600px">
        <div class="row">
            <h2 class="text-center fw-bold mt-2">CREATE NEW PRODUCT</h2>        
        </div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <input type="text" class="form-control mt-3" name="id" placeholder="ID" value='<?php echo $id; ?>'>
            <input type="text" class="form-control mt-3" name="name" placeholder="Name" value='<?php echo $name; ?>'>
            <input type="text" class="form-control mt-3" name="description" placeholder="Description" value='<?php echo $description; ?>'>
            <input type="text" class="form-control mt-3" name="price" placeholder="Price" value='<?php echo $price; ?>'>
            <input type="text" class="form-control mt-3" name="img" placeholder="Image" value='<?php echo $img; ?>'>
            <div class="row">
                <div class="col">
                    <input type="submit" class="form-control btn btn-outline-danger mt-3" name="submit" value="Create">
                </div>
                <div class="col">
                    <input type="submit" class="form-control btn btn-outline-primary mt-3" name="submit" value="Clear">
                </div>
            </div>
            <a href="a.php" class="form-control btn btn-dark mt-3">Read products</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <?php
        mysqli_close($connect);
    ?>
</body>