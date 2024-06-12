<?php
if (!session_start()) {
    session_start();
}
if(isset($_SESSION['user-id'])) {
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favico.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/root.css">
    <style>
        * input{
            color: var(--input-color);
        }
        a {
            text-decoration: none;
            color: var(--title-color);
        }
        #register-modal, #login-modal {
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
        .close {
            color: #aaa;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }
        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 1.5em;
            font-weight: bold;
            width: 100%;
        }
        .d-none {
            display: none;
        }
        .btn-nav-entrar{
            position: absolute;
            right: 5rem;
        }
        img{
            margin-bottom: 0 !important;
        }
        @media screen and (max-width: 768px) {
            .btn-nav-entrar{
                position: relative;
                right: 0;
            }
    .main {
        align-items: center;
        padding: .5rem;
    }
}
    </style>
    <title>Login</title>
</head>
<body>
<nav class="navbar">
        <div class="navbar-brand">
            <button class="navbar-toggler" aria-label="Toggle navigation">
                &#9776;
            </button>
        </div>
        <div class="navbar-menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="./views/home/blog.php">Blog</a></li>
            </ul>
            <button type="submit" class="btn-nav-entrar" onclick="showLogin();">Entrar</button>
        </div>
    </nav>
    
    <div class="main bg d-column container">
        <div class="p-2 d-column self-start w-100 gap-2">
        <h1>Você no mercado de trabalho!</h1>
        <h2>Encontre vagas de empresas parceiras dispostas a te receber e reintegrar ao mercado de trabalho.</h2>
        <button type="submit" onclick="showLogin();">Entrar</button>
        </div>

        <div class="d-flex d-column w-100  d-center">
            <div class="card-pesquisa d-flex">
                <input type="text" placeholder="Pesquisar Empresas Parceiras ..." id="input-search-empresa" class="input-search" onkeyup="buscarEmpresa();">
                <button type="submit" onclick="buscarEmpresa();">Buscar</button>
            </div>
            <div id="resultados"></div>
        </div>


    </div>
    
    <footer> <p>Integrantes:     
            <a href="https://www.instagram.com/emanuel.alef_/">Alef</a>,
            <a href="https://www.instagram.com/erickdepaula7/">Erick</a>,
            <a href="https://www.instagram.com/greicesilva_1/">Greiciele</a>,
            <a href="https://www.instagram.com/florrane/">Lorrane</a>,
            <a href="https://www.instagram.com/noelmacarvalhof/">Noelma</a>,
            <a href="https://www.instagram.com/paolla_hellenaa/">Paolla</a></p>
        <p>Copyright © <?php echo date('Y'); ?>. Todos direitos reservados.</p>
       
    </footer>
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
    <script src="./../../Projeto-DireitoFaminas/assets/js/script.js"></script>
<div class="main d-none" id="login-modal">
    <form method="POST" action="<?php echo BASE_URL; ?>controllers/LoginController.php">
    <div class="modal-header">
   
        <img src="assets/img/LOGO_BRANCA.png" class="logo" alt="">  
        <span class="close" onclick="closeModal()">&times;</span>  
        </div>
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
    <div class="modal-header">
   
   <img src="assets/img/LOGO_BRANCA.png" class="logo" alt="">  
   <span class="close" onclick="closeModal()">&times;</span>  
   </div>   
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
    function closeModal() {
        let login_modal = document.getElementById("login-modal");
        let register_modal = document.getElementById("register-modal");
        // Toggle the d-none class
        if(!login_modal.classList.contains("d-none")){
            login_modal.classList.toggle("d-none");
        }
        if(!register_modal.classList.contains("d-none")){
            register_modal.classList.toggle("d-none");
        }
    }
    // Function to show login modal
    function showLogin() {
        let login_modal = document.getElementById("login-modal");
        // Toggle the d-none class
        login_modal.classList.toggle("d-none");
    }
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
    }else if(queryParams.success && errorMessageDiv) {
        errorMessageDiv.textContent = 'Usuário Cadastrado com Sucesso';
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
<script>
   function buscarEmpresa() {
    var inputEmpresas = document.getElementById("input-search-empresa").value.trim().toLowerCase();
    var resultadosDiv = document.getElementById("resultados");

    // Verifica se o elemento de resultados foi encontrado
    if (resultadosDiv === null) {
        console.error('Elemento com id="resultados" não foi encontrado no DOM.');
        return;
    }

    // Limpa os resultados anteriores
    resultadosDiv.innerHTML = '';

    if (inputEmpresas !== "") {
        fetch(`/Projeto-DireitoFaminas/assets/bd/empresas.json`)
            .then(response => response.json())
            .then(data => {
                // Filtra empresas que contém o termo de busca
                var resultados = data.filter(element => element.companyName.toLowerCase().includes(inputEmpresas));
                
                if (resultados.length > 0) {
                    resultados.forEach(element => {
                        // Cria um card para cada empresa encontrada
                        var empresaCard = document.createElement("div");
                        empresaCard.className = "empresa-card";
                        empresaCard.innerHTML = `
                            <h2>${element.companyName}</h2>
                            <p><strong>Localização:</strong> ${element.location}</p>
                            <p><strong>Telefone:</strong> ${element.phone}</p>
                            <p><strong>Website:</strong> <a href="${element.website}" target="_blank">${element.website}</a></p>
                            <p><strong>Email:</strong> <a href="mailto:${element.email}">${element.email}</a></p>
                            <p><strong>Descrição:</strong> ${element.description}</p>
                        `;
                        resultadosDiv.appendChild(empresaCard);
                    });
                } else {
                    resultadosDiv.innerHTML = '<div class="empresa-card"><p>Nenhuma empresa encontrada.</p></div>';
                }
            })
            .catch(error => {
                console.error('Erro ao buscar empresas:', error);
                resultadosDiv.innerHTML = '<div class="empresa-card"><p>Erro ao buscar empresas.</p></div>';
            });
    }
}
    </script>
</body>
</html>