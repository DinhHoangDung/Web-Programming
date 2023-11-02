<!DOCTYPE html>
<head lang="en">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lab3_phan1_bai6</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <?php
        $firstname = "";
        $lastname = "";
        $email = "";
        $password = "";
        $year = "";
        $month = "";
        $day = "";
        $gender = "";
        $country = "";
        $about = "";
        if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST")
        {
            if ($_POST["submit"] == "Submit")
            {
                $firstname = $_POST["firstname"];
                $lastname = $_POST["lastname"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $year = $_POST["year"];
                $month = $_POST["month"];
                $day = $_POST["day"];
                $gender = isset($_POST["gender"]) ? $_POST["gender"] : null;
                $country = $_POST["country"];
                $about = $_POST["about"];
                if (!preg_match("/[a-zA-Z]{2,30}/", $firstname))
                {
                    echo '<script>alert("Firstname contains 2-30 characters without special characters")</script>';
                }
                else if (!preg_match("/[a-zA-Z]{2,30}/", $lastname))
                {
                    echo '<script>alert("Lastname contains 2-30 characters without special characters")</script>';
                }
                else if (!preg_match ("/^([a-zA-Z0-9_])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{1,6}$/", $email)) 
                {
                    echo '<script>alert("Input valid email <sth>@<sth>.<sth>")</script>';
                }
                else if (!preg_match("/^[a-zA-Z0-9\._-]{2,30}$/", $password))
                {
                    echo '<script>alert("Password contains 2-30 characters")</script>';
                }
                else if ($day == "day")
                {
                    echo '<script>alert("Please select a day!")</script>';
                }
                else if ($month == "month")
                {
                    echo '<script>alert("Please select a month!")</script>';
                }
                else if ($year == "year")
                {
                    echo '<script>alert("Please select a year!")</script>';
                }
                else if ($country == "country")
                {
                    echo '<script>alert("Please select a country!")</script>';
                }
                else if (strlen($about) > 10000)
                {
                    echo '<script>alert("About must be less than 10000 characters!")</script>';
                }
                else echo '<script>alert("Submit successfully!")</script>';
            }
        }
    ?>
    <div class="container bg-light" style="width: 600px;">
        <div class="row">
            <h2 class="fw-bold text-center mt-2">REGISTER FORM</h2>
        </div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" class="form-control text-center mt-3" name="firstname" placeholder="Firstname:" value='<?php echo $firstname ?>'>
            <input type="text" class="form-control text-center mt-3" name="lastname" placeholder="Lastname:" value='<?php echo $lastname ?>'>
            <input type="text" class="form-control text-center mt-3" name="email" placeholder="Email:" value='<?php echo $email ?>'>
            <input type="password" class="form-control text-center mt-3" name="password" placeholder="Password:" value='<?php echo $password ?>'>
            <!-- Gender -->
            <div class="row">
                <div class="col">
                    <label class="ms-2 mt-4">Birthday:</label>
                </div>
                <div class="col">
                    <select name="day" class="form-select mt-3">
                        <option value="day">Day</option>
                        <?php
                            for ($i = 1; $i <= 31; $i++)
                            {
                                for ($i = 1; $i <= 31; $i ++) 
                                {
                                    if ($day == $i) echo "<option value='$i' selected='selected'>$i</option>";
                                    else echo "<option value='$i'>$i</option>";
                                }
                            }
                        ?>
                    </select>
                </div>
                <div class="col">
                    <select name="month" class="form-select mt-3">
                        <option value="month">Month</option>
                        <?php
                            for ($i = 1; $i <= 12; $i++)
                            {
                                for ($i = 1; $i <= 12; $i ++) 
                                {
                                    if ($month == $i) echo "<option value='$i' selected='selected'>$i</option>";
                                    else echo "<option value='$i'>$i</option>";
                                }
                            }
                        ?>
                    </select>
                </div>
                <div class="col">
                    <select name="year" class="form-select mt-3">
                        <option value="year">Year</option>
                        <?php
                            for ($i = 1950; $i <= 2022; $i++)
                            {
                                for ($i = 1950; $i <= 2023; $i ++) 
                                {
                                    if ($year == $i) echo "<option value='$i' selected='selected'>$i</option>";
                                    else echo "<option value='$i'>$i</option>";
                                }
                            }
                        ?>
                    </select>
            </div>
            <!-- Gender -->
            <div class="row">
                <div class="col">
                    <label class="ms-2 mt-3">Gender:</label>
                </div>
                <div class="col">
                    <input type="radio" class="mt-4" name="gender" value="male" <?php if ($gender == 'male') echo "checked = 'checked'";?>> Male</input>
                </div>
                <div class="col">
                    <input type="radio" class="mt-4" name="gender" value="female" <?php if ($gender == 'female') echo "checked = 'checked'";?>> Female</input>
                </div>
                <div class="col">
                    <input type="radio" class="mt-4" name="gender" value="other" <?php if ($gender == 'other') echo "checked = 'checked'";?>> Other</input>
                </div>
            </div>
            <!-- Country -->
            <div class="row">
                <div class="col-3">
                    <label class="ms-2 mt-3">Country:</label>
                </div>
                <div class="col-9">
                    <select name="country" class="form-select mt-3">
                        <option value="country">Country</option>
                        <option value="1" <?php if ($country == '1') echo "selected='selected'"?>>Vietnam</option>
                        <option value="2" <?php if ($country == '2') echo "selected='selected'"?>>Australia</option>
                        <option value="3" <?php if ($country == '3') echo "selected='selected'"?>>United States</option>
                        <option value="4" <?php if ($country == '4') echo "selected='selected'"?>>India</option>
                        <option value="5" <?php if ($country == '5') echo "selected='selected'"?>>Other</option>
                    </select>
                </div>
            </div>
            <!--About-->
            <label class="ms-2 mt-3"> About: </label>
            <textarea name="about" class="form-control mt-2" style="height: 120px"></textarea>
            <!-- Button -->
            <div class="row">
                <div class="col">
                    <input type="submit" class="form-control btn btn-outline-danger mt-3" name="submit" value="Submit">
                </div>
                <div class="col">
                    <input type="submit" class="form-control btn btn-outline-primary mt-3" name="submit" value="Reset">
                </div>
            </div>
        </form>
    </div>
</body>
