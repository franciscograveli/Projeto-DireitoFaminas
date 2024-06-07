<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Login</title>
</head>
<body>
<div class="main">
<form method="POST" action="<?php echo BASE_URL; ?>controllers/LoginController.php">
<img src="assets/img/LOGO_BRANCA.png" class="logo" alt="">    
<label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
<a href="<?php echo BASE_URL; ?>auth/register">Cadastrar-se</a>
    <button type="submit">Login</button>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
</form>
</div>
</body>
</html>