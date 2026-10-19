<?php
require "../config/db.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("INSERT INTO customers (full_name,email,phone,address) VALUES (?,?,?,?)");
    $stmt->execute([$_POST['full_name'], $_POST['email'], $_POST['phone'], $_POST['address']]);
    header("Location: index.php"); exit;
}
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Add Customer's Information</title>
    <style>
    body{
        font-family:Arial;
        margin:30px
    }
    input{
        display:block;
        margin:8px 0;
        padding:6px;
        width:300px;
    }
    button{
        margin-top: 5px;
        padding: 10px;
        font-size: 14px;
    }
    #can{
        margin-left: 15px;
        border: 1px solid;
        padding: 15px;
    }
    </style>
        </head>
    <body>
        <h1>Add Customer</h1>
        <form method="post">
            <input name="full_name" placeholder="Full name" required>
            <input name="email" type="email" placeholder="Email">
            <input name="phone" placeholder="Phone">
            <input name="address" placeholder="Address">
            <button type="submit">Save Changes</button> 
            <a id="can" href="index.php">Cancel</a>
        </form>
    </body>
</html>
