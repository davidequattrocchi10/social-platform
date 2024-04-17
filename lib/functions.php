<?php

// Fare DOC BLOCK
// Function to generate a password
function generatePassword($name, $lastname, $birthdate)
{

    $dataString = $name . $lastname . $birthdate;

    // Password generation using a part of the string and a random string
    $password = substr(str_shuffle($dataString . uniqid()), 0, 8);
    return $password;
}
