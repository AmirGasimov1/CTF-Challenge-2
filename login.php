 <?php
// Validate if the username cookie is set and matches the input
if (isset($_COOKIE['username']) && isset($_POST['username'])) {
    $inputUsername = $_POST['username'];

    if ($_COOKIE['username'] !== $inputUsername) {
        die("Invalid username!");
    }
} else {
    die("Unauthorized: Username not found!");
}

// Expected password hash (MD5 of 'p@ssw0rd123')
$expectedHash = '482c811da5d5b4bc6d497ffa98491e38';

// Get the password input and hash it
if (isset($_POST['password'])) {
    $password = $_POST['password'];
    $hashedPassword = md5($password);

    // Check if the hashed input matches the expected hash
    if ($hashedPassword === $expectedHash) {
        header("Location: flag.html"); // Redirect to flag page
        exit();
    } else {
        echo "Invalid password.";
    }
} else {
    echo "Please enter both username and password.";
}
?>

