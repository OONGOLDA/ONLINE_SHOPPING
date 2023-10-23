<?php
require 'user.php'; // Include the user.php file that contains the User class and database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the registration form
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    // Initialize the DBConfig class to establish a database connection
    $dbConfig = new DBConfig();
    $connection = $dbConfig->getConnection();

    // Initialize the User class with the database connection
    $user = new User($connection);

    // Call the registerUser method from the User class
    $registrationResult = $user->registerUser($username, $password, $email);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration</h2>
    <form method="post" action="User_registration.php">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        Email: <input type="text" name="email"><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
