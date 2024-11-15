
<?php
session_start();

require_once __DIR__ . '/../vendor/validate.php';
require_once __DIR__ . '/../vendor/helpers.php';
require_once __DIR__ . '/../config.php';


$allErrors = "";
$sucsess = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $errors = [];

    $email = getProcessedRowInForm("email");
    $password = getProcessedRowInForm("password");



    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    if (!validatePassword($password)) {
        $errors[] = "Password must be at least 8 characters long, contain at least one digit and one uppercase letter";
    }


    if (empty($errors) || !empty($email) || !empty($password)) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `users` (`email`, `password`) VALUES ('$email', '$password')";

        if (mysqli_query($conn, $sql)) {
            flash("You Register");
            pushSessionAuth("auth", "true");
            redirectToPage("/feedback");
        } else {
            echo "Something went wrong. Please try again later.";
        }
        mysqli_close($conn);


    } else {
        foreach ($errors as $error) {
            $allErrors .= "<div class='alert alert-danger w-25 offset-4 mt-1' role='alert'>{$error}</div>";
        }
    }
}


$contentAuth = "<div class='row'>" . $sucsess .

"<form method='POST' class='offset-4 w-25'>
  <div class='mb-3'>
    <label for='exampleInputEmail1' class='form-label'>Email address</label>
    <input type='email' name='email' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp'>
    <div id='emailHelp' class='form-text'>We'll never share your email with anyone else.</div>
  </div>
  <div class='mb-3'>
    <label for='exampleInputPassword1' class='form-label'>Password</label>
    <input type='password' name='password' class='form-control' id='exampleInputPassword1'>
  </div>
  <button type='submit' class='btn btn-primary w-100'>Submit</button>
</form>" . $allErrors .

"</div>";






