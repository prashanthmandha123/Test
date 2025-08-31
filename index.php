 <?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Welcome to Simple App</h1>
    <?php if(isset($_SESSION['username'])): ?>
        <p>Hello, <?php echo $_SESSION['username']; ?>!</p>
        <a href="logout.php">Logout</a>
    <?php else: ?>
        <a href="login.php">Login</a> | 
        <a href="register.php">Register</a>
    <?php endif; ?>
</body>
</html>
