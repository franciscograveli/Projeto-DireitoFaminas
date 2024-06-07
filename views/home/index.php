<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/root.css">
    <title>Home</title>
</head>
<body>
<nav class="navbar">
        <div class="navbar-brand">
            <a href="<?php echo BASE_URL; ?>home"><img src="../assets/img/LOGO_BRANCA.png" class="logo" alt=""></a>
            <button class="navbar-toggler" aria-label="Toggle navigation">
                &#9776;
            </button>
        </div>
        <div class="navbar-menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="./../views/home/vagas.php">Vagas</a></li>
                <li><a href="./../views/home/especializacao.php">Especialização</a></li>
                <li>
                    <div class="navbar-user">
                    <lord-icon
                        src="https://cdn.lordicon.com/kthelypq.json"
                        trigger="hover"
                        colors="primary:#2b1b12"
                        style="width:36px;height:36px">
                    </lord-icon>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="main bg d-column ">
        <div class="p-2 d-column self-start w-100">
        <h1>Você no mercado de trabalho!</h1>
        <h2>Encontre vagas de empresas parceiras dispostas a te receber e reintegrar ao mercado de trabalho.</h2>
        </div>

        <div class="d-flex w-100 h-20 d-center">
            <div class="card-pesquisa d-flex">
                <input type="text" placeholder="Pesquisar" class="input-search">
                <button>Buscar</button>
            </div>
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
    <script src="../assets/js/script.js"></script>
</body>
</html>