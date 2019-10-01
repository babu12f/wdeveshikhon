<?php

    $person_name = "shofiullah babor";

    $person_another = "rayhan ali";

    echo strlen($person_name) . "<br>";

    echo $person_name . "<br>";

    echo strtoupper($person_name) . "<br>";

    echo strtolower($person_name) . "<br>";

    echo ucfirst($person_name) . "<br>";

    echo ucwords($person_name) . "<br>";

    echo str_word_count($person_name) . "<br>";

    echo strcmp($person_name, $person_another) . "<br>";

    echo strrev($person_name) . "<br>";
?>