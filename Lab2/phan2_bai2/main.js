function cal()
{
    var str_input1 = document.getElementById("input1").value;
    if (!str_input1)
    {
        alert("Please input the first number!");
        return;
    }
    var input1 = parseInt(str_input1);
    var str_input2 = document.getElementById("input2").value;
    if (!str_input2)
    {
        alert("Please input the second number!");
        return;
    }
    var input2 = parseInt(str_input2);
    add = document.getElementById("add");
    sub = document.getElementById("sub");
    mul = document.getElementById("mul");
    div = document.getElementById("div");
    exp = document.getElementById("exp");

    var string = "";
    if (add.checked == true)
    {
        var add_res = input1 + input2;
        string = input1.toString() + " + " + input2.toString() + " = " + add_res.toString();
    } 
    else if (sub.checked == true)
    {
        var sub_res = input1 - input2;
        string = input1.toString() + " - " + input2.toString() + " = " + sub_res.toString();
    }
    else if (mul.checked == true)
    {
        var mul_res = input1 * input2;
        string = input1.toString() + " * " + input2.toString() + " = " + mul_res.toString();
    }
    else if (div.checked == true)
    {
        if (input2 == 0)
        {
            alert("Divide by zero!");
            return;
        }
        var div_res = input1 / input2;
        string = input1.toString() + " / " + input2.toString() + " = " + div_res.toString();
    }
    else if (exp.checked == true)
    {
        var exp_res = input1 ** input2;
        string = input1.toString() + " ^ " + input2.toString() + " = " + exp_res.toString();
    }
    else
    {
        alert("Please select an operator!");
        return;
    }
    document.getElementById("result").innerHTML = string;
}