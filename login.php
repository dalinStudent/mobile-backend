<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['email']) && isset($_POST['password'])) {
    if ($db->dbConnect()) {
        if ($db->logIn("tbl_customers", $_POST['email'], $_POST['password'])) {
            echo "Login Success";
        } else echo "Email or Password is incorrect";
    } else echo "Error: Database connection";
} else echo "All fields are required";
?>
