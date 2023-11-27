<?php
    include 'connect.php';
    $sql = 'SELECT * FROM PRODUCTS';
    $result = mysqli_query($connect, $sql);
    if ($result)
    {
        $data = array();
        while ($row = mysqli_fetch_assoc($result))
        {
            $product = array (
                'id' => $row['id'],
                'name' => $row['name'],
                'description' => $row['description'],
                'price' => $row['price'],
                'image' => $row['image'],
            );
            array_push($data, $product);
        }
        header('Content-Type: application/json');
        echo json_encode($data);
    }
    else
    {
        http_response_code(500);
        echo json_encode(['message' => 'Failed to get all products']);
    }
?>