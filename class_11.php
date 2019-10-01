<?php
    // foreach loop

    // $numbers = [1,2,3,4,5,6,8];

    // for($i = 0; $i < count($numbers); $i++)
    // {
    //     echo $numbers[$i] . "<br>";
    // }

    // foreach loop
    $person_1 = ['name' => 'adnan', 'age' => 10];
    $person_2 = ['name' => 'santo', 'age' => 15];
    $person_3 = ['name' => 'hasan', 'age' => 30];

    $people = [];
    $people[0] = $person_1;
    $people[1] = $person_2;
    $people[2] = $person_3;

    foreach($people as $key => $val)
    {
        echo "person name :". $val['name'] . "<br>";
        echo "person age :". $val['age'] . "<br>";
    }

    // Function

    // print("hello");

    $number_1 = 10;
    $number_2 = 23;

    function sum($input_1, $input_2)
    {
        $result = $input_1 + $input_2;

        return $result;
    }

    function multi($n1, $n2)
    {
        return $n1 * $n2;
    }

    $sum = sum(10, 4);

    echo multi(3,40);

    // [1,2,3,4,5];
    // one
    // two
    // three
    // four
    // five
    fnum([1,2,3,4,5]);
?>