<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP toturial</title>
</head>
<body>
    <div class="container">
    This is my first PHP website</div>
    <?php
    echo"Hello World";
   echo"<br>";

   //Constants
   define('pi', 3.14);

    $var1=80;
    $var2=40;
    echo $var1;    
    echo $var2;    
    echo $var1 + $var2;
    echo"<br>";
    echo"The value of var1+var2 is ";
    echo $var1 + $var2; 
    echo"<br>";
    echo"The value of var1-var2 is ";
    echo $var1 - $var2; 
    echo"<br>";
    echo"The value of var1 * var2 is ";
    echo $var1 * $var2; 
    echo"<br>";
    echo"The value of var1/var2 is ";
    echo $var1 / $var2; 


    $newvar = $var1;
    $newvar += 1;
    echo"<br>";
    echo"The value of new variable is";
    echo $newvar;
    $newvar = $var1;
    $newvar -= 1;
    echo"<br>";
    echo"The value of new variable is";
    echo $newvar;
    $newvar = $var1;
    $newvar *= 1;
    echo"<br>";
    echo"The value of new variable is";
    echo $newvar;
    $newvar = $var1;
    $newvar /= 1;
    echo"<br>";
    echo"The value of new variable is";
    echo $newvar;
    
    echo"<br>";
    echo "The value of 1==4 is ";
    echo var_dump(1==4);
    echo"<br>";
    echo "The value of 1!=4 is ";
    echo var_dump(1!=4);
    echo"<br>";
    echo "The value of 1<=4 is ";
    echo var_dump(1<=4);
    echo"<br>";
    echo "The value of 1>=4 is ";
    echo var_dump(1>=4);
    echo "<br>";

    // INCREMENT/DECREMENT operators
    // echo $var1++;
    // echo $var1--;
    // echo --$var1;
    echo ++$var1;
    echo "<br>";
    echo $var1;
    
    //Logical Operator
    // and (&&)
    // or(||)
    // xor
    // not(!)
    // $obj1=(true and true);
    // $obj1=(false and false);
    // $obj1=(true and false);
    // $obj1=(false and true);

    // $obj1=(false or true);

    $obj1=(true xor true);
    // $obj1=(false xor false);
    // $obj1=(true xor false);
    // $obj1=(false xor true);
    echo "<br>";  
    echo var_dump($obj1);  

    //Data Types
    // 1. String
    // 2. Float
    // 3. Integer
    // 4. Boolean
    // 5. Array
    // 6. Object

    echo "<br>Data Types<br>";
    $var = "This is a string";
    echo var_dump($var);
    echo"<br>";
    
    $var = 169;
    echo var_dump($var);
    echo"<br>";
    
    $var = "45.95";
    echo var_dump($var);
    echo"<br>";
    
    $var = "True";
    echo var_dump($var);
    echo"<br>";

    echo pi;   //Constant
     ?>
</body>
</html>