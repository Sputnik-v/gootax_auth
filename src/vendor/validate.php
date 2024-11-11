<?php


function validatePassword(string $password): bool {
    if (strlen($password) < 8) {
        return false;
    }
    if (!preg_match("/[A-Z]/", $password)) {
        return false;
    }
    if (!preg_match("/[0-9]/", $password)) {
        return false;
    }
    return true;
}

function showErrors($errors)
{
    if (empty($errors)) {
        return "Form is valid";
        // Process the form data
    } else {
        foreach ($errors as $error) {
            return $error . "<br>";
        }
    }
}