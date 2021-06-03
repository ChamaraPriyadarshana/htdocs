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
    <hr>
    <p>
        <?php 
            $decimalnumber=3.1428;
            echo $decimalnumber/0.5;
        ?> <br>
    </p>
    <p> <!--Constants-->
        <?php
            define("value_of_pi",3.14);

            echo "value_of_pi = ".(2 * value_of_pi * 7);
        ?>
    </p><br>
    <p>
        <?php
            $firstnumber=3;
            $secondnumber=7;
            $thirdnumber=3.6789;
            echo $thirdnumber/$secondnumber."<br>";

            echo "is {$firstnumber} : integer " . is_int($firstnumber) . "<br>";
            echo "is {$secondnumber} : integer " . is_int($secondnumber) . "<br>";
            echo "is {$thirdnumber} : float " . is_float($thirdnumber) . "<br>";
            echo "Decimal to Binary " . decbin($secondnumber) . "<br>";
            echo "Binary to Decimal " . bindec(11) . "<br>";
            echo "Squareroot " . sqrt(25) . "<br>";
            echo "Abs " . abs(-15+11) . "<br>";
            echo "Power " . pow(11,2) . "<br>";
            echo "Modulus " . fmod(11,3) . "<br>";
            echo "Random " . rand(10,100) . "<br>";

            for ($i=0; $i < 5; $i++) { 
                echo "Binary to Decimal " . pow($i,$i) . "<br>";
            }
        ?>
    </p>
    <p>
        <!--arrays-->
        <?php 
            $namearray = array('Chamara','malan','sadun');
            echo $namearray[1] . "<br> <br>";

            $student = array(array("chamara","priyadarshana","ekanayake"),array("Senan waththa","Kaikole","Polgahawela"),"BSc.IT");

            echo " Firstname: " . $student[0][0] . "<br>";
            echo " LastName: " . $student[0][2] . "<br>";
            echo " Address: " . $student[1][1] . ", " . $student[1][2] . "<br>";
            echo " Course: " . $student[2] . "<br>";
            echo "<pre>";
                echo print_r($student) . "<br>";
            echo "</pre>";
            echo "<br>"; 
        ?>
    </p>
    <p>
    <!--associative array-->
        <?php
            $users = array("name"=>"Chamara","username"=>"cha123","password"=>"abc123");
            echo " ". $users["name"] . "<br>";
            echo " ". $users["username"] . "<br>";

            $colors = array("red","green","blue");

            echo "<pre>";
                print_r($colors);
            echo "</pre>";

            array_pop($colors);
            array_pop($colors);
            array_pop($colors);

            array_push($colors,"purple","teal","cyan");

            echo "<pre>";
                print_r($colors);
            echo "</pre>";
        ?>
    </p>
    <br>
    <p>
        <?php
            echo "How many items inside the array : " . count($colors) . "<br>";
        ?>
    </p>      
</body>
</html>