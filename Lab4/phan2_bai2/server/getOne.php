<?php
    include 'connect.php';
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $id = $_GET['edit_id'];
        $sql = "SELECT * FROM products WHERE products.id = $id";
        $result = mysqli_query($connect, $sql);
        if ($result)
        {
            $row = mysqli_fetch_assoc($result);
            $product = array(
                'id' => $row['id'],
                'name' => $row['name'],
                'description' => $row['description'],
                'price' => $row['price'],
                'image' => $row['image'],
            );
            header('Content-Type: application/json');
            echo json_encode($product);
        }
        else
        {
            http_response_code(500);
            echo json_encode(['message'=> 'Fail to get one product']);
        }
    }
?>