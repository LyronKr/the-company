<?php
include '../classes/User.php';

// Create obj
$user = new User;

// Call method
$user->update($_POST, $_FILES);
?>