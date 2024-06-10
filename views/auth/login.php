<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favico.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        * input{
            color: var(--input-color);
        }
        a {
            text-decoration: none;
            color: var(--title-color);
        }
        #register-modal {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: var(--bg);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 10;
        }
        .d-none {
            display: none;
        }
        @media screen and (max-width: 768px) {
    .main {
        align-items: center;
        padding: .5rem;
    }
}
    </style>
    <title>Login</title>
</head>
<body>
<div class="main">
    <form method="POST" action="<?php echo BASE_URL; ?>controllers/LoginController.php">
        <img src="assets/img/LOGO_BRANCA.png" class="logo" alt="">    
        <label for="login-username">Username:</label>
        <input type="text" id="login-username" name="username" required>
        <label for="login-password">Password:</label>
        <input type="password" id="login-password" name="password" required>
        <a class="register">Cadastrar-se</a>
        <button type="submit">Login</button>
        <?php if (isset($error)) echo "<p>$error</p>"; ?>
    </form>
</div>
<div class="main d-none" id="register-modal">
    <form method="POST" action="<?php echo BASE_URL; ?>controllers/RegisterController.php">
        <img src="assets/img/LOGO_BRANCA.png" class="logo" alt="">    
        <label for="nome">Nome Completo:</label>
        <input type="text" id="nome" name="nome" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="data">Data de Nascimento:</label>
        <input type="date" id="data" name="data" required>
        <label for="register-username">Username:</label>
        <input type="text" id="register-username" name="username" required>
        <label for="register-password">Senha:</label>
        <input type="password" id="register-password" name="register-password" required>
        <label for="confirm-password">Confirmar Senha:</label>
        <input type="password" id="confirm-password" name="confirm-password" required>
        <a class="register">Login</a>
        <button type="submit">Cadastrar</button>
        <?php if (isset($error)) echo "<p>$error</p>"; ?>
    </form>
</div>

<script>
    // Convert HTMLCollection to Array
    var a_registers = Array.from(document.getElementsByClassName("register"));
    
    // Add click event listener to each register link
    a_registers.forEach(function(registerLink) {
        registerLink.addEventListener("click", function() {
            let register_modal = document.getElementById("register-modal");
            // Toggle the d-none class
            register_modal.classList.toggle("d-none");
        });
    });
</script>
<script>
    // Function to parse query parameters
    function getQueryParams() {
        let params = {};
        let queryString = window.location.search.slice(1);
        if (queryString) {
            queryString.split('&').forEach(pair => {
                let [key, value] = pair.split('=');
                params[decodeURIComponent(key)] = decodeURIComponent(value);
            });
        }
        return params;
    }

    // Display the error message if present in the query parameters
    let queryParams = getQueryParams();
    let errorMessageDiv = document.querySelector('.error-message');
    
    if (queryParams.error && errorMessageDiv) {
        errorMessageDiv.textContent = 'Usuário ou senha inválidos';
        errorMessageDiv.style.display = 'block';
        errorMessageDiv.style.opacity = 0;
        errorMessageDiv.style.transition = 'opacity 0.5s';

        setTimeout(() => {
            errorMessageDiv.style.opacity = 1;
        }, 100); 

        setTimeout(() => {
            errorMessageDiv.style.opacity = 0;
            setTimeout(() => {
                errorMessageDiv.style.display = 'none';
            }, 500); 
        }, 3000); 
    }
</script>

</body>
</html>