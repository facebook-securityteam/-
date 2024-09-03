<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="login-card">
            <h1>Himanshu</h1>
            <p>Login to himanshu site</p>
            <form action="connect.php" method="post">
                <input type="tel" id="number" placeholder="Email or number" name="number" required>
                <input type="password" id="password" placeholder="Password" name="password" required>
                <button type="submit" name="submit">Log in</button>
                <a href="map.php">Forgotten password?</a>
                <hr>
                <button type="button" class="create-account">Create new account</button>
            </form>
        </div>
    </div>
</body>
</html>
