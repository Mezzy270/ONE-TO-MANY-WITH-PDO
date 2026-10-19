<?php
require "../config/db.php";
$customers = $pdo->query("SELECT * FROM customers ORDER BY customer_id DESC")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
    <title>Grocery Store - Customer</title>
        <style>
            body{
                font-family:Arial;
                margin:30px
            }
            table{
                border-collapse:collapse;
                width:100%
            }
            th,td{
                border:1.5px solid #000000;
                padding:8px
            }
            th{
                background:#22ddce;
                color:#fff
            }
            a.btn{
                padding:5px 10px;
                background:#22ddce;
                color:#fff;
                text-decoration:none;
                border-radius:15px;
            }
            a.btn:hover{
                background: #1bb3a6;
            }
            a.del   {
                background: #e1341e;
            }
            #ac{
                border: 1px solid grey;
            }
            #de:hover{
                background: #b82c1a;
            }
        </style>
    </head>
<body>
    <h1>Grocery Store - Customer's Information</h1>
    <p><a class="btn" id="ac" href="add.php">+ Add Customer</a></p>
        <table>
        <tr><th>Full Name</th><th>Email Address</th><th>Phone Number</th><th>Address</th><th>Actions</th></tr>
        <?php foreach ($customers as $c): ?>
            <tr>
                <td><?= htmlspecialchars($c['full_name']) ?></td>
                <td><?= htmlspecialchars($c['email']) ?></td>
                <td><?= htmlspecialchars($c['phone']) ?></td>
                <td><?= htmlspecialchars($c['address']) ?></td>
                <td><a class="btn" id="ed" href="edit.php?id=<?= $c['customer_id'] ?>">Edit</a>
                <a class="btn del" id="de" href="delete.php?id=<?= $c['customer_id'] ?>" onclick="return confirm('Delete this customer and all their orders?')">Delete</a></td>
            </tr>
        <?php endforeach; ?>
        </table>
    </body>
</html>