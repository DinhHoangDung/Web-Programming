<?php
function foo($num)
{
    switch($num % 5)
    {
        case 0:
            echo "Hello" ."<br>";
            break;
        case 1:
            echo "How are you?" ."<br>";
            break;
        case 2:
            echo "I'm doing well, thank you" ."<br>";
            break;
        case 3:
            echo "See you later" ."<br>";
            break;
        case 4:
            echo "Good-bye" ."<br>";
            break;
        default:
            echo "Nhap so nguyen duong: " ."<br>";
            break;
    }
}
foo(0);
foo(1);
foo(2);
foo(3);
foo(4);
?>