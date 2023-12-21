<?php
session_start();

// Include your database connection file
include "koneksi.php";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform your user authentication here (replace this with your actual authentication logic)
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Authentication successful
        $_SESSION['username'] = $username;
        header("Location: dashboard.php"); // Redirect to the dashboard or home page
        exit();
    } else {
        // Authentication failed
        echo "Invalid username or password";
    }
} else {
    die("Akses dilarang");
}
?>
