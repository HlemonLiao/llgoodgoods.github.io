<?php
session_start();

if(isset($_POST['username']) && isset($_POST['password'])) {
    // TODO: Implement user authentication
    $users_file = 'users.txt';
    $username = $_POST['username'];
    $password = $_POST['password'];


    $users = file($users_file, FILE_IGNORE_NEW_LINES);
    foreach($users as $user) {
        list($user_name, $pass) = explode(':', $user);
        if($user_name === $username && $pass === $password) {
            $_SESSION['username'] = $username;
            header('Location: account.php');
            exit();
    }
}

//echo "<p>Invalid username or password.</p>";
// Display error message if authentication fails
$error_message = "Invalid username or password.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CISW 31 Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
        }
        .login {
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
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
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
        .error-message{
            text-align: center;
            color: red;
        }
    </style>
</head>
<body>
    <div class="login">
        <h1>Please Login</h1>
        <form method="POST" action="login.php">
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit">Login</button>
            <?php if(isset($error_message)): ?>
                <div class="error-message"><?php echo $error_message; ?></div>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>