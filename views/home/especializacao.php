<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/root.css">
    <link rel="shortcut icon" href="../../assets/img/favico.ico" type="image/x-icon">
    <title>Especializações</title>
    <style>
        /* Estilos básicos */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

      
        .header {
            position: absolute;
            z-index: 1;
            background-color: var(--bg);
            padding: 1rem 2rem !important;
            width: 100%;
            color: var(--title-color, white);
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 1rem;
        }

        .container {
            padding: 2rem;
            max-width: 1200px;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            justify-content: center;
        }

        .course-card {
            background: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 2rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            flex: 1 1 calc(33.333% - 2rem); /* Ocupa 1/3 da largura menos margens */
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .course-card:hover {
            transform: translateY(-5px);
        }

        .course-title {
            font-size: 1.5em;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .description {
            font-size: 1em;
            color: #666;
            margin-top: 0.5rem;
            flex-grow: 1;
        }

        .access-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 1em;
            margin-top: 1rem;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            align-self: flex-start;
        }

        .access-button:hover {
            background-color: #45a049;
        }

        /* Responsividade */
        @media (max-width: 1024px) {
            .course-card {
                flex: 1 1 calc(50% - 2rem); /* Ocupa 1/2 da largura menos margens */
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            .course-card {
                flex: 1 1 calc(100% - 2rem); /* Ocupa toda a largura menos margens */
                margin: 0.5rem 0;
                padding: 0.5rem;
            }

            .course-title {
                font-size: 1.2em;
            }

            .description {
                font-size: 0.9em;
            }

            .access-button {
                font-size: 0.9em;
                padding: 0.5rem;
            }
        }
        section{
            width: 100%;
            height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

     
        
        #img-especializacao{
            background-image: url("../../assets/img/bg-especializacao.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 100%;
            height: 100%;
            filter: blur(2px);
            z-index: 0;
        }
        #img-especializacao::after{
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
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
 
    <section class="section img">
    <div class="header">
        <h1>Especializações</h1>
    </div>
        <div id="img-especializacao" class="img"></div>
    </section>
    <div class="container">
        <div class="course-card">
            <div>
                <div class="course-title">Curso de Front-end</div>
                <div class="description">Aprenda os fundamentos do desenvolvimento front-end, incluindo HTML, CSS e JavaScript.</div>
            </div>
            <a href="https://www.youtube.com/watch?v=video1" target="_blank" class=""> <button type="button"  href="https://www.youtube.com/watch?v=video2" target="_blank" >Acessar Curso</button></a>
        </div>
        <div class="course-card">
            <div>
                <div class="course-title">Marketing Digital</div>
                <div class="description">Descubra estratégias eficazes para promover seu negócio online através de marketing digital.</div>
            </div>
            <button type="button"  href="https://www.youtube.com/watch?v=video2" target="_blank" >Acessar Curso</button>
        </div>
        <div class="course-card">
            <div>
                <div class="course-title">Engenharia de Software</div>
                <div class="description">Entenda os princípios da engenharia de software e como aplicá-los em projetos reais.</div>
            </div>
            <button type="button"  href="https://www.youtube.com/watch?v=video3" target="_blank" >Acessar Curso</button>
        </div>
        <div class="course-card">
            <div>
                <div class="course-title">Gerenciamento de Projetos</div>
                <div class="description">Aprenda a gerenciar projetos complexos com eficiência e a atingir seus objetivos.</div>
            </div>
            <button type="button"  href="https://www.youtube.com/watch?v=video4" target="_blank" >Acessar Curso</button>
        </div>
        <div class="course-card">
            <div>
                <div class="course-title">Design Gráfico</div>
                <div class="description">Explore as técnicas de design gráfico e crie peças visuais impactantes.</div>
            </div>
            <button type="button"  href="https://www.youtube.com/watch?v=video5" target="_blank" >Acessar Curso</button>
        </div>
        <div class="course-card">
            <div>
                <div class="course-title">Análise de Sistemas</div>
                <div class="description">Conheça as melhores práticas para analisar e desenvolver sistemas de informação.</div>
            </div>
            <button type="button"  href="https://www.youtube.com/watch?v=video6" target="_blank" >Acessar Curso</button>
        </div>
        <div class="course-card">
            <div>
                <div class="course-title">SEO para Iniciantes</div>
                <div class="description">Aprenda como otimizar seu site para motores de busca e melhorar seu ranking no Google.</div>
            </div>
            <button type="button"  href="https://www.youtube.com/watch?v=video7" target="_blank" >Acessar Curso</button>
        </div>
        <div class="course-card">
            <div>
                <div class="course-title">Recursos Humanos</div>
                <div class="description">Desenvolva habilidades em gestão de pessoas e práticas de RH eficazes.</div>
            </div>
            <button type="button"  href="https://www.youtube.com/watch?v=video8" target="_blank" >Acessar Curso</button>
        </div>
        <div class="course-card">
            <div>
                <div class="course-title">Administração de Redes</div>
                <div class="description">Domine os conceitos de administração de redes e mantenha sistemas seguros e eficientes.</div>
            </div>
            <button type="button"  href="https://www.youtube.com/watch?v=video9" target="_blank" >Acessar Curso</button>
        </div>
        <div class="course-card">
            <div>
                <div class="course-title">Desenvolvimento Full Stack</div>
                <div class="description">Torne-se um desenvolvedor full stack e crie aplicações web completas do front-end ao back-end.</div>
            </div>
            <button type="button"  href="https://www.youtube.com/watch?v=video10" target="_blank" >Acessar Curso</button>
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
</body>
</html>
