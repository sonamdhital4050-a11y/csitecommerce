<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    a {
        display: inline-block;
        text-decoration: none;
        color: white;
        background-color: #333;
        padding: 12px 18px;
        margin: 5px;
        border-radius: 5px;
    }

    a:hover {
        background-color: #f43009;
    }
</style>
</head>
<body>
    <a href="add-product.php">Add Product</a>

<a href="index.php">Home</a>
<a href="about.php">About Us</a>
<a href="category.php">Category</a>
<a href="products.php">Products</a>
<a href="contact.php">Contact</a>
<a href="login.php">Login</a>
<a href="register.php">Register</a>
