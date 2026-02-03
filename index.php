
<?php

    echo "For Loop...<br>";

    for($i=0; $i<=4; $i++)
    {
        echo "Hello World!! <br>";
    }

    echo "While Loop...<br>";

    $j=0;

    while($j<=4){
        echo "Hello World!! <br>";
        $j++;
    }

    echo "Do While Loop...<br>";

    $k=0;

    do{
        echo "Hello World!! <br>";
        $k++;
    }

    while($k<=4);


    $marks = [20, 45, 79, -56, 50, 98, 76, 110];

    foreach($marks as $mark){
        
        if($mark > 100 || $mark < 0){
            echo $mark.'=Invalid mark <br>';
        }
        elseif($mark >= 80){
            echo $mark.'=The grade is A+ <br>';
        }
        elseif($mark >= 70){
            echo $mark.'=The grade is A <br>';
        }
        elseif($mark >= 60){
            echo $mark.'=The grade is A- <br>';
        }
        elseif($mark >= 50){
            echo $mark.'=The grade is B <br>';
        }
        elseif($mark >= 40){
            echo $mark.'=The grade is C <br>';
        }
        elseif($mark >=33){
            echo $mark.'=The grade is D <br>';
        }
        else{
            echo $mark.'=The grade is F <br>';
        }
    }


    function greetings()
    {
        return '<h1>Good Evening</h1>';
    }

    echo greetings(); //Good Evening
    


?>