<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab4_phan2_bai2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Read Products</h1>
        <hr>
        <a class="btn btn-primary mt-2" href="b.php">Create a new product</a>
        <table class="table table-bordered mt-3" id="product_table">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col" class="col-2">Action</th>
            </tr>
        </table>
    </div>
    <script>
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'server/getAll.php', true);
        xhr.onload = function() {
            if(xhr.status === 200) 
            {
                var products = JSON.parse(xhr.responseText);
                var table = document.getElementById('product_table');
                products.forEach(element => {
                    var row = table.insertRow();
                    row.insertCell().innerHTML = element.id;
                    row.insertCell().innerHTML = element.name;
                    row.insertCell().innerHTML = element.description;
                    row.insertCell().innerHTML = element.price;
                    row.insertCell().innerHTML = '<a href="c.php?edit_id=' + element.id + '"><button type="button" class="btn btn-warning">Edit</button></a>' + '&emsp;' +
                                                 '<a href="d.php?delete_id=' + element.id + '"><button type="button" class="btn btn-danger">Delete</button></a>';
                });
            }
        }
        xhr.send();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>