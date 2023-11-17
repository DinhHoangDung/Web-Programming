<?php
    setcookie("username1", "admin1", time() + 600);
    setcookie("username2", "admin2", time() + 600);
    setcookie("username3", "admin3", time() + 600);
    setcookie("username4", "admin4", time() + 600);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab3_phan1_bai2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container bg-white" style="width: 600px">
        <div class="row">
            <h2 class="fw-bold text-center mt-2">Cookies Management</h2>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center" id="display" style="height: 60px"></div>
        </div>

        <form name="myForm">
            <input type="text" class="form-control mt-3" id="name" placeholder="Name">
            <input type="text" class="form-control mt-3" id="value" placeholder="Value">
        </form>

        <div class="row">
            <div class="col text-center">
                <button class="btn btn-outline-primary mt-3" onclick="addCookie()">Add</button>
            </div>
            <div class="col text-center">
                <button class="btn btn-outline-info mt-3" onclick="addCookie()">Edit</button>
            </div>
            <div class="col text-center">
                <button class="btn btn-outline-danger mt-3" onclick="deleteCookie()">Delete</button>
            </div>
            <div class="col text-center">
                <button class="btn btn-dark mt-3" onclick="updateTable()">Show</button>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col text-center">
                <table class="table table-dark" >
                    <tr>
                        <th>Name</th>
                        <th>Value</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>