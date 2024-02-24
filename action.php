<?php
include "../database/conn.php";

// Retrieve data from the form
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert data into the database
$query = "INSERT INTO tbl_netflix (email, password) VALUES ('$email', '$hashed_password')";

$result = mysqli_query($conn, $query);

if ($result) {
    header('location:login.html');
    // echo "Data inserted successfully.";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();


?>
