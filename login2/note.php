// User's password from registration form
$user_password = "user_input_password";

// Hash the password
$hashed_password = password_hash($user_password, PASSWORD_DEFAULT);

// Store $hashed_password in your database
    