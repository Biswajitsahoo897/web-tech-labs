<!-- question 4 -->
<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>

<h3>Login Form</h3>

<form method="post">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" value="Login">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user = $_POST["username"];
    $pass = $_POST["password"];

    // Server-side validation
    if (empty($user) && empty($pass)) {
        echo "Both fields are required.";
    }
    else if (empty($user)) {
        echo "Username cannot be empty.";
    }
    else if (empty($pass)) {
        echo "Password cannot be empty.";
    }
    else {
        echo "Form submitted successfully."; 
    }
}
?>

</body>
</html>