<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $name="Chamara";
        $age=25;  //variables
        $fn=10;
        $sn=2;
        echo $name;
        echo "<br>";
        echo $age;
        echo "<br>";

        echo "Total = " . ($fn+$sn); //Concatenation of two strings in PHP
        echo "<br>";
        
        define("value_of_PI",3.14);  //define constants
        echo 7 * value_of_PI;          // constants cannot re-assign values after it defined.
        echo "<br>";

        echo "$name is my name. <br>";   //output: [Chamara is my name].
        echo '$name is my name <br>';   //output: [$name is my name].
        echo "{$name}is my name <br>"; //output: [Chamarais my name].
    
        $name1="priyadarshana";
        $name2="ekanayake";
        $fullname=$name1;
        $fullname.=" ";
        $fullname.=$name2;             //work as: [$fullname = $fullname + $name2]
        echo "full name: " . $fullname . "<br>";
    ?>
    <hr>
    <p>
        UPPERCASE: <?php echo strtoupper("Chamara <br>");?>
        lowercase: <?php echo strtolower("Chamara <br>");?>
        <b>Each First Letter Capital:</b> <?php echo ucwords("chamara ekanayake <br>");?>
        <b>Just First letter capital:</b> <?php echo ucfirst("chamara ekanayake <br>");?>
    
        Repeat: <?php echo str_repeat($fullname,3); ?> <br>
    </p>
</body>
</html>