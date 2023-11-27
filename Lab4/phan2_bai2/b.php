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
    <div class="container bg-light" style="width: 600px">
        <div class="row">
            <h2 class="text-center fw-bold mt-2">CREATE NEW PRODUCT</h2>        
        </div>
        <form method="post" action="" id="add_new_product">
            <input type="text" id="name" class="form-control mt-3" name="name" placeholder="Name" value="">
            <input type="text" id="description" class="form-control mt-3" name="description" placeholder="Description" value="">
            <input type="text" id="price" class="form-control mt-3" name="price" placeholder="Price" value="">
            <input type="text" id="img" class="form-control mt-3" name="img" placeholder="Image" value="">
            <div class="row">
                <div class="col">
                    <input type="submit" class="form-control btn btn-success mt-3" name="submit" value="Create">
                </div>
                <div class="col">
                    <a href="a.php" class="form-control btn btn-dark mt-3">Read products</a>
                </div>
            </div>
        </form>
    </div>
    <script>
        $(document).ready(function(){
            $("#add_new_product").on("submit", function(e){
                e.preventDefault();
                if ($("#name").val() == "" || $("#name").val().length < 5 || $("#name").val().length > 40) alert("Invalid Name");
                else if ($("#description").val() == "" || $("#description").val().length > 5000) alert("Invalid description (max: 5000 characters");
                else if ($("#price").val() == "" || $("#price").val() < 0 || isNaN($("#price").val())) alert("Invalid price");
                else if ($("#img").val() == "" || $("#img").val().length > 255) alert("Invalid Image");
                else
                {
                    var product = {
                        name: $("#name").val(),
                        price: $("#price").val(),
                        description: $("#description").val(),
                        image: $("#img").val()
                    };
                    $.ajax({
                        url: "server/add.php",
                        type: "POST",
                        data: JSON.stringify(product),
                        contentType: "application/json; charset=utf-8",
                        dataType: "json",
                        success: function(data)
                        {
                            alert("Add new product successfully");
                            console.log(data);
                            window.location.href = "a.php";
                        },
                        error: function(err)
                        {
                            console.log(err);
                            alert("Error: " + err);
                        }
                    })
                }
            })
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>