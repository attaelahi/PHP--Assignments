<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment No 1</title>
</head>

<body>

    <h1 style="text-align: center; background-color:aquamarine">Php Coding Exercise</h1>
    <div style="margin: 20px;">
        <h3>Q1: Echo and Print Statement</h3>
        <?php
        echo 'Hello, World <br>';

        print 'PHP is amazing!'
        ?>

        <h3>Q2: Variable</h3>

        <?php
        $name = "Atta Elahi<br>";
        $age = 25;

        echo "My name is: " . $name, "My age: " . $age;

        ?>

        <h3>Q3: Data Types</h3>

        <?php
        $price = 12 / 99;
        $isAvailable = true;

        echo "Price: " . gettype($price) . "<br>";
        echo "isAvailable: " . gettype($isAvailable);

        ?>

        <h3>Q4: Comments</h3>

        <?php

        // i use above code for the comment this is single line comments as i used 
        $price = 12 / 99;

        /*
        in here i declared two variable in the name of price and isAvailable and echo gettype to 
        read what data type i will declared in the code
        */
        $isAvailable = true;

        echo "Price: I mentioned comment is the code || " . gettype($price) . "<br>";
        echo "isAvailable: I mention comment is the code || " . gettype($isAvailable);

        ?>

        <h3>Q5: Constant</h3>

        <h5>Sorry sir i don't remember what i used for constant so i will get help from WhatsApp AI it show we use define!!! </h5>

        <?php
        define('PI', 3.14159);

        echo "The value of PI is: " . PI;

        ?>

        <h3>Q6: Arithmetic Operator </h3>

        <?php
        $num1 = 10;
        $num2 = 5;

        echo "Addition: " . $num1 + $num2 . "<br>";
        echo "Subtraction: " . $num1 - $num2 . "<br>";
        echo "Multiplication: " . $num1 * $num2 . "<br>";
        echo "Division: " . $num1 / $num2 . "<br>";
        echo "Modulus: " . $num1 % $num2 . "<br>";
        ?>

        <h3>Q7: Comparison Operators </h3>
        <h4>In here is used is_bool() function and get incorrect answer i checked on google and used var_dump to get correct ans</h4>

        <?php
        $a = 30;
        $b = 20;

        echo "a is greater than b: ";
        var_dump($a > $b);
        echo "\n";

        echo "a is equal to b: ";
        var_dump($a == $b);
        echo "\n";

        echo "a is not equal to b: ";
        var_dump($a != $b);
        echo "\n";

        ?>

        <h3>Q8: If Statement </h3>

        <?php
        $age = 18;

        if ($age >= 18) {
            echo "You are Adult ";
        } else {
            echo "You are not Adult ";
        }
        ?>

        <h3>Q9: Logical Operator </h3>

        <?php
        $x = 10;
        $y = 5;


        echo "x is greater than 5 AND y is less than 10: ";
        var_dump($x > 5 && $y < 10);
        echo "\n";

        echo "x is greater than 20 OR y is less than 10: ";
        var_dump($x > 20 || $y < 10);
        echo "\n";

        echo "x is NOT equal to 15: ";
        var_dump($x != 15);
        echo "\n";
        ?>


        <h3>Q10: If Else Statement </h3>

        <?php

        $marks = 50;

        if ($marks >= 50) {
            echo "Passed";
        } else {
            echo "Failed";
        }
        ?>

    </div>

    <h1 style="text-align: center; background-color:aquamarine">Medium Level Exercise</h1>

    <div style="margin: 20px;">


        <h3>Q11: If Else If Statement </h3>

        <?php

        $day = 2;

        if ($day == 1) {
            echo "Sunday";
        } elseif ($day == 2) {
            echo "Monday";
        } elseif ($day == 3) {
            echo "Tuesday";
        } elseif ($day == 4) {
            echo "Wednesday";
        } elseif ($day == 5) {
            echo "Thursday";
        } elseif ($day == 6) {
            echo "Friday";
        } elseif ($day == 7) {
            echo "Saturday";
        } else {
            echo "Day Endddd";
        }
        ?>

        <h3>Q12: Switch Statement </h3>

        <?php

        $color = 'red';

        switch ($color) {
            case 'red':
                echo "Red is the color of passion.";
                break;
            case 'green':
                echo "Green is the color of nature.";
                break;
            case 'blue':
                echo "Blue is the color of calm.";
                break;
            default:
                echo "This color is not recognized.";
                break;
        }
        ?>

        <h3>Q13: Ternary Operator </h3>

        <?php

        $age = 18;

        $checked = ($age >= 18) ? "Adult" : "Minor";
        echo "You are an " . $checked . "\n";
        ?>

        <h3>Q14: String Operators </h3>

        <?php

        $firstName = "John";
        $lastName = "Doe";

        $fullName = $firstName . " " . $lastName;
        echo "Full Name: " . $fullName;
        ?>

        <h3>Q15: While Loop </h3>

        <?php

        $conter = 1;

        while ($conter <= 10) {
            echo "$conter ";
            $conter++;
        }
        ?>

        <h3>Q16: Do-While Loop </h3>

        <?php

        $counter = 1;

        do {
            echo "$counter ";
            $counter++;
        } while ($counter <= 10);
        ?>

        <h3>Q17: For Loop </h3>

        <?php

        for ($i = 2; $i <= 20; $i += 2) {
            echo "$i ";
        }
        ?>

        <h3>Q18: Nested Loop </h3>
        <h4>Get Help from google my multiplication will not correct </h4>

        <?php

        for ($i = 1; $i <= 5; $i++) {
            for ($j = 1; $j <= 5; $j++) {
                echo "$i x $j = " . ($i * $j) . "\t";
            }
            echo " \n";
        }
        ?>

        <h3>Q19: Continue and Break </h3>

        <?php

        for ($i = 1; $i <= 10; $i++) {

            if ($i == 5) {
                continue;
            }
            if ($i == 8) {
                break;
            }
            echo "$i ";
        }
        ?>

        <h3>Q20: Goto Statement </h3>

        <?php

        $counter = 1;

        increment:
        $counter++;
        if ($counter <= 5) {
            goto increment;
        }
        echo "Counter: $counter\n";

        ?>

        <h3>Q21: Functions and Parameters </h3>

        <?php

        function calculateArea($length, $width)
        {
            $area = $length * $width;
            return $area;
        }

        $length = 10;
        $width = 5;
        $area = calculateArea($length, $width);
        echo "The area of the rectangle is: $area";

        ?>

        <h3>Q22: Functions with Returning Value </h3>
        <h4>Here i can calculate the % with help of google</h4>

        <?php

        function getDiscount($totalPrice)
        {
            if ($totalPrice >= 100) {
                $discount = $totalPrice * 0.20;
            } else {
                $discount = $totalPrice * 0.10;
            }
            return $discount;
        }

        $totalPrice = 120;
        $discount = getDiscount($totalPrice);
        echo "The discount amount is: Rs." . number_format($discount, 2);

        ?>

        <h3>Q23: Functions Argument By Reference </h3>
        <h4>Here i can calculate the % with help of google</h4>

        <?php

        function increaseSalary(&$salary)
        {
            if ($salary) {
                echo "Salary must be a number.";
            }

            if ($salary <= 0) {
                echo "Salary must be positive.";
            }
            $salary *= 1.10;
            echo "The updated salary is: $" . number_format($salary, 2) . "\n";
        }
        $salary = 50000;
        increaseSalary($salary);
        echo "The updated salary (outside function) is: Rs." . number_format($salary, 2) . "\n";

        ?>

        <h3>Q24: Variable Functions </h3>

        <?php

        function greet()
        {
            echo "Hello, World!\n";
        }

        $function = 'greet';

        $function();

        ?>

        <h3>Q25: Recursive Functions </h3>

        <?php

        function factorial($n)
        {
            if ($n == 0 || $n == 1) {
                return 1;
            }
            if ($n > 1) {
                return $n * factorial($n - 1);
            }

            echo "Input must be a non-negative integer.";
        }
        echo factorial(5);

        ?>

        <h3>Q26: Functions with Optional Parameters </h3>

        <?php

        function multiply($a, $b = 1)
        {
            return $a * $b;
        }
        echo multiply(5, 3) . "<br>";
        echo multiply(5);

        ?>

        <h3>Q27: Anonymous Functions </h3>

        <?php

        $multiply = function ($a, $b) {
            return $a * $b;
        };
        $result = $multiply(12, 7);
        echo "The result is: $result";

        ?>

        <h3>Q28: Closures Functions </h3>

        <?php

        function multiplyByy($multiplier)
        {
            return function ($number) use ($multiplier) {
                return $number * $multiplier;
            };
        }
        $multiplyByThree = multiplyByy(4);
        echo "Multiplying 7 by 4: " . $multiplyByThree(7) . "<br>";
        $multiplyByFive = multiplyByy(3);
        echo "Multiplying 14 by 3: " . $multiplyByFive(14) . "<br>";

        ?>

        <h3>Q29: Callback Functions </h3>
        <h4>Get Help from google</h4>

        <?php

        function processArray(array $array, callable $callback)
        {
            foreach ($array as $element) {
                $result = $callback($element);
                echo "Element: $element, Result: $result<br>";
            }
        }
        $numbers = [1, 2, 3, 4, 5];
        $square = function ($number) {
            return $number ** 2;
        };
        processArray($numbers, $square);

        ?>

        <h3>Q30: Function with Variable Length Arguments</h3>
        <h4>Get Splat Operator help from google</h4>

        <?php

        function sumAll(...$numbers)
        {
            return array_sum($numbers);
        }

        echo sumAll(1, 2, 3, 4, 5);
        echo sumAll(10, 20, 30); 
        ?>

    </div>




</body>

</html>