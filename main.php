<?php

//Реализуйте функцию binarySum, которая принимает на вход два бинарных числа (в виде строк) и возвращает их сумму.
//Результат (вычисленная сумма) также должен быть бинарным числом в виде строки.
function binarySum($a, $b)
{
    $num1 = bindec($a);
    $num2 = bindec($b);

    $sum = $num1 + $num2;
    $sum = decbin($sum);
    print_r($sum);
}

//binarySum('10', '1');
//binarySum('1101', '101');



//Реализуйте функцию isPowerOfThree() которая определяет, является ли переданное число
//натуральной степенью тройки. Например, число 27 – это третья степень (33), а 81 – четвёртая (34).
function isPowerOfThree($num)
{
    if($num % 3 === 0) {
        print_r("Натуральная степень тройки");
    } else {
        print_r("Не натуральная степень тройки");
    }
}

//isPowerOfThree(3);
//isPowerOfThree(4);
//isPowerOfThree(9);



//Реализуйте функцию fib(), находящую положительные числа Фибоначчи.
//Аргументом функции является порядковый номер числа.
function fib($num)
{
    $prev = 0;
    $step = 1;
    for($i = 0; $i < $num; $i++) {
        $step = $prev + $step;
        $prev = $step - $prev;
    }
    print_r($prev);
}

//fib(3);
//fib(5);
//fib(10);



//Реализуйте функцию addDigits(), которая принимает на вход неотрицательное целое число и возвращает
//другое число, полученное из первого следующим преобразованием: Итеративно сложите все входящие в него
//цифры до тех пор пока, не останется одна цифра.

function addDigits($num)
{
    $result = 0;
    $str = (string)$num;
    if($num < 10) {
        echo $num;
    } else {
        for($i = 0; $i < strlen($str); $i++) {
            $result = $result + (int)$str[$i];
        }
        echo $result;
    }
}

//addDigits(0); // 0
//addDigits(1); // 1
//addDigits(9); // 9
//addDigits(12); // 3
//addDigits(42); // 6



// Создайте функцию isPerfect, которая принимает число и возвращает true, если оно совершенное, и false — в ином случае.
function isPerfect($num)
{
    $sum = 0;

    for($i = 1; $i < $num; $i++) {
        if($num % $i === 0) {
            $sum += $i;
        }
    }

    if($sum === $num) {
        echo('true');
    } else {
        echo('false');
    }
}

//isPerfect(6);
//isPerfect(5);



//Реализуйте функцию isHappy, проверяющую является ли номер счастливым (номер — всегда строка).
// Функция должна возвращать true, если билет счастливый, или false, если нет.
function isHappy($str)
{
    $num1 = (int)($str[0] + $str[1] + $str[2]);
    $num2 = (int)($str[3] + $str[4] + $str[5]);

    if($num1 === $num2) {
        echo('true');
    } else {
        echo('false');
    }
}

//isHappy('385916');
//isHappy('231002');



//Функция принимает два параметра ($begin и $end), определяющих начало и конец диапазона (включительно).
//Если диапазон пуст (в случае, когда $begin > $end), то функция просто ничего не печатает.
function fizzBuzz($begin, $end)
{
    for($i = $begin; $i <= $end; $i++) {
        if($i % 3 === 0 && $i % 5 === 0) {
            echo('FizzBuzz ');
        } elseif ($i % 3 === 0) {
            echo('Fizz ');
        } elseif ($i % 5 === 0) {
            echo('Buzz ');
        } else {
            echo($i . ' ');
        }
    }
}

//fizzBuzz(11, 20);