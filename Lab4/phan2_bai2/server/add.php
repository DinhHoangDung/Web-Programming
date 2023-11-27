<?php
    include 'connect.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $data = file_get_contents("php://input");
        $product = json_decode(($data));
        $sql = "INSERT INTO PRODUCTS(name, description, price, image) VALUES ('{$product->name}','{$product->description}', '{$product->price}', '{$product->image}')";
        $result = mysqli_query($connect, $sql);
        if ($result)
        {
            http_response_code(200);
            echo json_encode([
                'id' => mysqli_insert_id($connect),
                'name' => $product->name,
                'description' => $product->description,
                'price' => $product->price,
                'image' => $product->image,
            ]);
        }
        else
        {
            http_response_code(500);
            echo json_encode(['message' => 'Failed to add product']);
        }
    }
?>