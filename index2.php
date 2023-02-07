<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php project</title>
</head>
<body>
    <div class="container">
        This is my First Php


        <?php
            print "hello world";

        $variable1 = 34;
        $variable2 = 2;
        
        echo $variable1;
        echo $variable2;

        echo $variable1 + $variable2;


        echo "<br>";
        echo "The value of variable 1 + 2 is:";
        echo "<br>";
        echo $variable1 + $variable2;

        echo "<br>";
        echo "The value of variable 1 - 2 is:";
        echo "<br>";
        echo $variable1 - $variable2;

        echo "<br>";
        echo "The value of variable 1 * 2 is:";
        echo "<br>";
        echo $variable1 * $variable2;

        echo "<br>";
        echo "The value of variable 1 / 2 is:";
        echo "<br>";
        echo $variable1 / $variable2;

        echo "<br>";

        $newVar = $variable2;
        echo "the value of new variable is";
        echo $newVar;

        echo "<br>";

        echo var_dump(1<=4);
        
        ?>

        
        <?php
            echo "hello world again";
        ?>
    </div>
</body>
</html>