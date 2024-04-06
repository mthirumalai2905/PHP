<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        This is my first php website
        <?php
         echo "This is printed using php and its a dynamically typed language";

         // single line comment
         /*
         This is a multi line comment
         
         */

        $variable1 = 34;
        $variable2 = 43;
        echo $variable1;
        echo $variable2;

        echo $variable1 + $variable2;

        ?>
        <?php
        
        echo "Hello world again";

        // Operators in PHP

        //Aritmetic Operators
        echo "The value of variable + variable2";
        echo "<br>"; // New Line 
        echo $variable1 + $variable2;
        echo "<br>";
        echo "The value of variable - variable2";
        echo "<br>"; // New Line 
        echo $variable1 - $variable2;
        echo "<br>";
        echo "The value of variable * variable2";
        echo "<br>"; // New Line 
        echo $variable1 * $variable2;
        echo "<br>";

        //Assignment Operators
        $newVar  = $variable1;
        echo "The value of new varible is ";
        echo $newVar;
        echo "<br>";

        //Increment/Decrement Operators
        $variable1++;
        echo $variable1;
        echo "<br>";
        $variable1--;
        echo $variable1;
        echo "<br>";
        --$variable1;
        echo $variable1;
        echo "<br>";
        ++$variable1;
        echo $variable1;
        echo "<br>";


        //Logical Operator
        // and (&&)
        // or (||)
        // xor ( ^ )
        // not ( ! )
        $myVar = (true and true);
        echo var_dump($myVar);
        echo "<br>";


        //Comparison Operators
        echo "<h1>Comparison Operators</h1>";
        echo "The value of 1 == 4";
        echo var_dump(1==4);
        echo "<br>";
        echo "The value of 1 >= 4";
        echo var_dump(1>=4);
        echo "<br>";
        echo "The value of 1 <= 4";
        echo var_dump(1<=4);
        echo "<br>";
        echo "The value of 1 != 4";
        echo var_dump(1!=4);




        ?>
    </div>
</body>
</html>
