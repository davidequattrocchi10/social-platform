<?php

/**
 * Generates a password based on user data.
 *
 * @param string $name The user's name.
 * @param string $lastname The user's lastname.
 * @param string $birthdate The user's birthdate in the format 'YYYY-MM-DD'.
 * @return string The generated password.
 */
function generatePassword($name, $lastname, $birthdate)
{
    $dataString = $name . $lastname . $birthdate;

    // Password generation using a part of the string and a random string
    $password = substr(str_shuffle($dataString . uniqid()), 0, 8);
    return $password;
}
