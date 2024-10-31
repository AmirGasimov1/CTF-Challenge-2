<?php
// Check username
if ($_POST['username'] !== 'hacker$') {
    die("Invalid username.");
}

// Expected MD5 hash of password 'p@ssw0rd123'
$expectedHash = '482c811da5d5b4bc6d497ffa98491e38';
$inputPassword = $_POST['password'];
$hashedPassword = md5($inputPassword);

if ($hashedPassword === $expectedHash) {
    // Redirect to flag page on successful login
    header("Location: flag.html", true, 303);
    exit();
} else {
    echo "Invalid password.";
}
?>

