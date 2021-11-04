<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['phone']) && isset($_POST['gender'])) {
    if ($db->dbConnect()) {
        if ($db->signUp("tbl_customers", $_POST['first_name'], $_POST['last_name'], $_POST['password'], $_POST['email'], $_POST['address'], $_POST['phone'], $_POST['gender'])) {
            echo "Sign Up Success";
        } else echo "Sign up Failed";
    } else echo "Error: Database connection";
} else echo "All fields are required";
?>
