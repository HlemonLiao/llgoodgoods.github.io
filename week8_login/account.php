<?php
$student = "Hongxuan Liao";

session_start();

if(!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

if(isset($_POST['logout'])) {
    // Add code to handle logout
    // Destroy session
    session_destroy();

    // Redirect to login page
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CISW 31 Account</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
        }
        .account {
            margin: auto;
            width: 50%;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
        }
        h1 {
            text-align: center;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #45a049;
        }
        footer {
            position: fixed;
            left: 0;
            bottom: 10;
            width: 100%;
            text-align: center;
            font-weight: 200;
            font-style: italic;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="account">
        <h1>Welcome, <?php echo ucfirst($_SESSION['username']); ?>!</h1>
        <p>You are logged in.</p>
        <form method="POST">
            <button type="submit" name="logout">Logout</button>
        </form>
    </div>
    <footer style="bottom: 20%;">
        <?php
        $date = date('n-j-y');
        ?>
        <?= $student ?> | CISW 31 | <?= $date ?>
    </footer>
</body>
</html>