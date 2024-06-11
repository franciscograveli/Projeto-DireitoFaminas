<?php 
if(!session_start()){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/root.css">
    <link rel="shortcut icon" href="../../assets/img/favico.ico" type="image/x-icon">
    <style>
        body{
            background-color: var(--bg);
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .profile-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .profile-pic {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-right: 20px;
        }

        .profile-info h2 {
            margin: 0;
            color: #333;
        }

        .profile-info p {
            margin: 5px 0;
            color: #666;
        }

        .edit-form {
            max-width: none !important;
            display: flex;
            flex-direction: column;
        }

        .edit-form label {
            margin: 10px 0 5px;
            font-weight: bold;
        }

        .edit-form input[type="text"],
        .edit-form input[type="date"],
        .edit-form input[type="file"],
        .edit-form textarea {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
        }

        .edit-form textarea {
            resize: vertical;
        }

        .edit-form button {
            margin-top: 20px;
        }
    </style>
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
                <li><a href="./index.php">Home</a></li>
                <li><a href="./vagas.php">Vagas</a></li>
                <li><a href="./especializacao.php">Especialização</a></li>
                <li><a href="./perfil.php">
                    <div class="navbar-user">
                    <lord-icon
                        src="https://cdn.lordicon.com/kthelypq.json"
                        trigger="hover"
                        colors="primary:#2b1b12"
                        style="width:36px;height:36px">
                    </lord-icon>
                    </div>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="profile-header">
            <img src="https://via.placeholder.com/100" alt="Foto do Usuário" class="profile-pic" id="profilePic">
            <div class="profile-info">
                <h2 id="userName">Nome do Usuário</h2>
                <p id="userEmail">email@exemplo.com</p>
            </div>
        </div>

        <form class="edit-form" >
        <?php 
if (isset($_SESSION['user-id'])) {
    $user_id = $_SESSION['user-id'];
    echo "<input type='hidden' name='user_id' id='user-id' value='$user_id'>";
}
?>
            <label for="profilePicInput">Alterar Foto</label>
            <input type="file" name="profilePic" id="profilePicInput">

            <label for="userNameInput">Nome</label>
            <input type="text" name="nome" id="userNameInput" value="Nome do Usuário">

            <label for="userEmailInput">Email</label>
            <input type="email" name="email" id="userEmailInput" value="email@exemplo.com">

            <label for="userDobInput">Data de Nascimento</label>
            <input type="date" name="data_de_nascimento" id="userDobInput" value="1990-01-01">

            <label for="userAddressInput">Endereço</label>
            <textarea id="userAddressInput" name="endereco" rows="3">Endereço do Usuário</textarea>

            <button type="submit" onclick="salvarAlteracoes(this)">Salvar Alterações</button>
        </form>
    </div>
    <footer> <p>Integrantes: 
            <a href="https://www.instagram.com/paolla_hellenaa/">Paolla</a>,
             <a href="https://www.instagram.com/emanuel.alef_/">Alef</a>,
             <a href="https://www.instagram.com/noelmacarvalhof/">Noelma</a>,
             <a href="https://www.instagram.com/greicesilva_1/">Greice</a>,
             <a href="https://www.instagram.com/erickdepaula7/">Erick</a>,
            <a href="https://www.instagram.com/florrane/">Lorrane</a></p>
        <p>Copyright © <?php echo date('Y'); ?>. Todos direitos reservados.</p>
       
    </footer>
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
    <script src="./../../assets/js/script.js"></script>
    <script>
        document.getElementById('profilePicInput').addEventListener('change', function(event) {
    var reader = new FileReader();
    reader.onload = function(){
        var output = document.getElementById('profilePic');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
    console.log(event.target.files[0]); // Verifica se o arquivo foi selecionado corretamente
});


        function loadProfile() {
            var userIdElement = document.getElementById('user-id');
            if (userIdElement) {
                var userId = parseInt(userIdElement.value); // Converte o ID para um número inteiro

                fetch(`/Projeto-DireitoFaminas/assets/bd/users.json`)
                    .then(response => response.json())
                    .then(data => {
                        // Filtra os dados para encontrar o usuário com o ID correspondente
                        var user = data.usuarios.find(u => u.id_Usuario === userId);

                        if (user) {
                            // Se o usuário for encontrado, exiba os dados no console ou em um elemento HTML
                            console.log(user);
                            var birthDate = new Date(user.data_de_nascimento);
                            var formattedDate = birthDate.toISOString().split('T')[0];

                            document.getElementById('userNameInput').value = user.nome;
                            document.getElementById('userName').innerText = user.nome;
                            document.getElementById('userEmailInput').value = user.email;
                            document.getElementById('userEmail').innerText = user.email;
                            document.getElementById('userDobInput').value = formattedDate;
                            document.getElementById('userAddressInput').value = user.endereco;  
                            document.getElementById('userAddressInput').innerText = user.endereco; 
                            document.getElementById('profilePic').src = user.profilePic? user.profilePic : 'https://via.placeholder.com/100'; 
                        } else {
                            console.log('Usuário não encontrado');
                        }
                    })
                    .catch(error => console.error('Erro ao carregar o perfil do usuário:', error));
            }
        }
        document.addEventListener('DOMContentLoaded', loadProfile);
    </script>
    <script>
        document.getElementById('profilePicInput').addEventListener('change', function(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('profilePic');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        });
    </script>
   <script>
    function salvarAlteracoes() {
        event.preventDefault();
        var formData = new FormData(document.querySelector('.edit-form'));
        
        fetch('./../../controllers/ProfileController.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (response.ok) {
                return response.text(); 
            } else {
                throw new Error('Erro ao salvar as alterações.');
            }
        })
        .then(data => {
             window.location.reload(true);
        })
        .catch(error => {
            console.error('Erro:', error);
        });

        

    }

    document.querySelector('.edit-form').addEventListener('submit', salvarAlteracoes);
</script>

</body>
</html>
