<?php
include "../database/conn.php";

$data = json_decode(file_get_contents('php://input'));
$email = $data->email;
$password = $data->password;

$query = "SELECT * FROM tbl_netflix WHERE email='$email'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];
    $hashed_password = $row['password'];
    // Verify the password
    if (password_verify($password, $hashed_password)) {
        echo "success";
    } else {
        echo 'Invalid password';
    }
} else {
    echo 'Invalid email and password';
}
