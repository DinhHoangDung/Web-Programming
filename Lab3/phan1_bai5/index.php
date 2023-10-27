<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lab3_phan1_bai5</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $input1 = "";
        $input2 = "";
        $op = "";
        $result = "";
        $equal = "";
        $operator = "";
        if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $input1 = isset($_POST['input1']) ? $_POST['input1']:null;
            $input2 = isset($_POST['input2']) ? $_POST['input2']:null;
            $operator = isset($_POST['operator']) ? $_POST['operator']:null;
            if (!$input1 && $input1 != 0)
            {
                echo '<script>alert("Please enter input 1")</script>';
            }
            else if (!$input2 && $input2 != 0)
            {
                echo '<script>alert("Please enter input 2")</script>';
            }
            else if (!is_numeric($input1) || !is_numeric($input2))
            {
                echo '<script>alert("Please enter a number")</script>';
            }
            else
            {
                switch ($operator)
                {
                    case '1': $result = $input1 + $input2; $op = " + "; $equal = " = "; break;
                    case '2': $result = $input1 - $input2; $op = " - "; $equal = " = "; break;
                    case '3': $result = $input1 * $input2; $op = " * "; $equal = " = "; break;
                    case '4': 
                        if ($input2 == 0)
                        {
                            echo '<script>alert("Cannot divide by zero")</script>';
                            $equal = "";
                            $input1 = "";
                            $input2 = "";
                        }
                        else
                        {
                            $result = $input1 / $input2;
                            $op = " / ";
                            $equal = " = ";
                        }
                        break;
                    case '5': $result = $input1 ** $input2; $op = " ^ "; $equal = " = "; break;
                    case '6': $result = $input1 ** ($input2*(-1)); $op = " ^- "; $equal = " = "; break;
                }
            }
        }
    ?>
    <div class="container">
        <div class="row bg-light">
            <h2 class="fw-bold text-center mt-2">CALCULATOR</h2>
        </div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
            <input type="text" class="form-control text-center mt-3" name="input1" placeholder="Input 1:" value='<?php echo $input1 ?>'>
            <input type="text" class="form-control text-center mt-3" name="input2" placeholder="Input 2:" value='<?php echo $input2 ?>'>
            <select name="operator" class="form-select mt-3 text-center">
                <option value="1">Add</option>
                <option value="2" <?php if($operator == '2') echo "selected='selected'"?>>Subtract</option>
                <option value="3" <?php if($operator == '3') echo "selected='selected'"?>>Multiply</option>
                <option value="4" <?php if($operator == '4') echo "selected='selected'"?>>Divide</option>
                <option value="5" <?php if($operator == '5') echo "selected='selected'"?>>Exponent</option>
                <option value="6" <?php if($operator == '6') echo "selected='selected'"?>>Inversion</option>
            </select>
            <input type="submit" class="form-control btn btn-dark mt-3" value="Calculate">
            <h2 class="text-center fw-bold mt-3">
                <?php 
                    if (($input1 || $input1 ==0) && ($input2 || $input2 == 0) && is_numeric($input1) && is_numeric($input2)) 
                        echo $input1 .$op .$input2 .$equal .$result
                ?>
            </h2>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>