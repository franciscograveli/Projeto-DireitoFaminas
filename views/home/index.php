<?php
if (!session_start()) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/root.css">
    <link rel="shortcut icon" href="../../assets/img/favico.ico" type="image/x-icon">
    <title>Home</title>
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
    
    <div class="main bg d-column ">
        <div class="p-2 d-column self-start w-100">
        <h1>Você no mercado de trabalho!</h1>
        <h2>Encontre vagas de empresas parceiras dispostas a te receber e reintegrar ao mercado de trabalho.</h2>
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