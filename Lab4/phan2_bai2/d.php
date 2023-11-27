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
            <h2 class="fw-bold text-center mt-2">Are you sure you want to delete?</h2>
        </div>

        <form method="post" action="" id="dlt">

            <input type="submit" class="form-control btn btn-outline-danger mt-3" name="submit" value="Delete">
            <a class="form-control btn btn-dark mt-3" href="a.php">Read products</a><br>

        </form>
    </div>
    <script>
        $("#dlt").on("submit", function(e) {
            e.preventDefault();
            var productID = '<?php echo $_GET['delete_id'] ?>';
            console.log(productID);
            $.ajax({
                url: "server/delete.php?delete_id=" + productID,
                type: "GET",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function(data) 
                {
                    console.log(data);
                    alert("Delete product successfully");
                    window.location.href = "a.php";
                },
                error: function(err)
                {
                    console.log(err);
                }
            })
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
