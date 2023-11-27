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
            <h2 class="text-center fw-bold mt-2">Edit Product</h2>
        </div>
        <form method="post" action="" id="edit_product">
            <input type="text" id="name" class="form-control mt-3" name="name" placeholder="Name" value="">
            <input type="text" id="description" class="form-control mt-3" name="description" placeholder="Description" value="">
            <input type="text" id="price" class="form-control mt-3" name="price" placeholder="Price" value="">
            <input type="text" id="img" class="form-control mt-3" name="img" placeholder="Image" value="">
            <div class="row">
                <div class="col">
                    <input type="submit" class="form-control btn btn-outline-danger mt-3" name="submit" value="Submit">
                </div>
                <div class="col">
                    <a class="form-control btn btn-dark mt-3" href="a.php">Read products</a>    
                </div>
            </div>
        </form>
    </div>
    <script>
        $(document).ready(function(){
            var productID = <?php echo $_GET['edit_id']; ?>;
            console.log(productID);
            $.ajax({
                url: "server/getOne.php?edit_id=" + productID,
                type: "GET",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function(data)
                {
                    console.log(data);
                    $("#name").val(data.name);
                    $("#description").val(data.description);
                    $("#price").val(data.price);
                    $("#img").val(data.image);
                },
                error: function(err)
                {
                    console.log(err);
                }
            });
            $("#edit_product").submit(function(e){
                e.preventDefault();
                if ($("#name").val() == "" || $("#name").val().length < 5 || $("#name").val().length > 40) alert("Invalid Name");
                else if ($("#description").val() == "" || $("#description").val().length > 5000) alert("Invalid description (max: 5000 characters)");
                else if ($("#price").val() == "" || isNaN($("#price").val())) alert("Invalid price");
                else if ($("#img").val() == "" || $("#img").val().length > 255) alert("Invalid Image");
                else
                {
                    var product = {
                        id: productID,
                        name: $("#name").val(),
                        description: $("#description").val(),
                        price: $("#price").val(),
                        image: $("#img").val()
                    }
                    $.ajax({
                        url: "server/update.php?edit_id=" + productID,
                        type: "POST",
                        contentType: "application/json; charset=utf-8",
                        dataType: "json",
                        data: JSON.stringify(product),
                        success: function(data)
                        {
                            console.log(data);
                            alert("Update product success");
                            window.location.href = "a.php";
                        },
                        error: function(err)
                        {
                            console.log(err);
                        }
                    })
                }
            })
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
