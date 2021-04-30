<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php tutorial</title>
</head>
<style>
*{
    margin:0;
    padding:0;
}
.container{
    background-color: pink;
    max-width:80%;
    margin:auto;
    padding:21px;
}
</style>
<body>
    <div class="container">
    <h1>This is a PHP tutorial</h1>
    <?php
    echo"Hello World";
    echo"<br>";
    $age=7;
    if($age>18){
        echo"You can go to the party";
    }
    else if($age==7){
        echo"You are 7 years old";
    }
    else{
         echo"You cannot go to the party";
    }
    echo"<br>";
   //............................ARRAYS.....................................
    $languages= array("Python","C++","JAVA","PHP");
    echo $languages[2];
    echo"<br>";
    echo count($languages);
    // echo"<br>";
    // echo"<br>";

   //............................LOOPS.......................................
   //While
   $a=0;
    while ($a <= 10) {
        echo"<br>The value of a is: ";
        echo $a;
        $a++;
    }

   $a=0;
    while ($a < count($languages)) {
        echo"<br>The name of language is: ";
        echo $languages[$a];
        $a++;
    }

    //do-while
    $a=40;
    do{
        echo"<br>The value of a is: ";
        echo $a;
        $a++;
    }while($a<10);

    //For loop
   for ($i=0; $i < 10 ; $i++) { 
       echo"<br>The value of i is ";
       echo $i;
   }

   //for each
   foreach($languages as $value){
       echo"<br>The value is ";
       echo $value;
   }
   echo"<br>";
   //............................FUNCTIONS.............................
   function print5(){
       echo"FIVE";
   }
   print5();

   function print_number($number){
      echo"<br>The number is: ";
      echo $number;
    }
    print_number(493);    
    print_number(887);    
    print_number(523);    
    print_number(7874);
    ?>
    </div>
</body>
</html>