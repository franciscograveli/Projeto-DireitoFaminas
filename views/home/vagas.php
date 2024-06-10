<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/root.css">
    <link rel="shortcut icon" href="../../assets/img/favico.ico" type="image/x-icon">
    <title>Vagas em Empresas</title>
    <style>
        /* Estilos básicos */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--bg);
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

        .job-card {
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

        .job-card:hover {
            transform: translateY(-5px);
        }

        .job-title {
            font-size: 1.5em;
            margin-bottom: 0.5rem;
            color: var(--title-color);
            font-weight: bold;
        }

        .company {
            font-size: 1.2em;
            color: #555;
        }

        .location {
            font-size: 1em;
            color: #777;
        }

        .description {
            font-size: 1em;
            color: var(--subtitle-color);
            margin-top: 0.5rem;
            flex-grow: 1;
        }

        .apply-button {
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

        .apply-button:hover {
            background-color: #45a049;
        }

        /* Responsividade */
        @media (max-width: 1024px) {
            .job-card {
                flex: 1 1 calc(50% - 2rem); /* Ocupa 1/2 da largura menos margens */
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            .job-card {
                flex: 1 1 calc(100% - 2rem); /* Ocupa toda a largura menos margens */
                margin: 0.5rem 0;
                padding: 0.5rem;
            }

            .job-title {
                font-size: 1.2em;
            }

            .company, .location, .description {
                font-size: 0.9em;
            }

            .apply-button {
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
            position: relative;
        }

        #img-vagas{
            background-image: url("../../assets/img/bg-vagas.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 100%;
            height: 100%;
            filter: blur(2px);
            z-index: 0;
        }
        #img-vagas::after{
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
        <h1>Vagas em Empresas</h1>
    </div>
        <div id="img-vagas" class="img"></div>
    </section>
    <div class="container">
        
        <div class="job-card">
            <div>
                <div class="job-title">Desenvolvedor Front-end</div>
                <div class="company">Tech Corp</div>
                <div class="location">São Paulo, SP</div>
                <div class="description">Estamos à procura de um Desenvolvedor Front-end experiente para se juntar ao nosso time de desenvolvimento...</div>
            </div>
            <button >Candidatar-se</button>
        </div>
        <div class="job-card">
            <div>
                <div class="job-title">Analista de Marketing Digital</div>
                <div class="company">Marketing Experts</div>
                <div class="location">Rio de Janeiro, RJ</div>
                <div class="description">O Analista de Marketing Digital será responsável por planejar, executar e gerenciar campanhas de marketing digital...</div>
            </div>
           <button >Candidatar-se</button>
        </div>
        <div class="job-card">
            <div>
                <div class="job-title">Engenheiro de Software</div>
                <div class="company">Innovatech</div>
                <div class="location">Belo Horizonte, MG</div>
                <div class="description">Buscamos um Engenheiro de Software para trabalhar em projetos inovadores e desenvolver soluções de software de alta qualidade...</div>
            </div>
           <button >Candidatar-se</button>
        </div>
        <div class="job-card">
            <div>
                <div class="job-title">Gerente de Projetos</div>
                <div class="company">Project Solutions</div>
                <div class="location">Porto Alegre, RS</div>
                <div class="description">Responsável pela coordenação e gestão de projetos complexos para assegurar a entrega no prazo e dentro do orçamento...</div>
            </div>
           <button >Candidatar-se</button>
        </div>
        <div class="job-card">
            <div>
                <div class="job-title">Designer Gráfico</div>
                <div class="company">Creative Studio</div>
                <div class="location">Curitiba, PR</div>
                <div class="description">Procuramos um Designer Gráfico talentoso para criar materiais visuais inovadores e atraentes para campanhas de marketing...</div>
            </div>
           <button >Candidatar-se</button>
        </div>
        <div class="job-card">
            <div>
                <div class="job-title">Analista de Sistemas</div>
                <div class="company">Tech Solutions</div>
                <div class="location">Fortaleza, CE</div>
                <div class="description">O Analista de Sistemas será responsável por analisar, projetar e implementar soluções tecnológicas eficazes para melhorar os processos de negócios...</div>
            </div>
           <button >Candidatar-se</button>
        </div>
        <div class="job-card">
            <div>
                <div class="job-title">Especialista em SEO</div>
                <div class="company">Web Optimizers</div>
                <div class="location">Salvador, BA</div>
                <div class="description">Estamos buscando um Especialista em SEO para melhorar a visibilidade dos nossos sites nos motores de busca e aumentar o tráfego orgânico...</div>
            </div>
           <button >Candidatar-se</button>
        </div>
        <div class="job-card">
            <div>
                <div class="job-title">Consultor de RH</div>
                <div class="company">HR Consultants</div>
                <div class="location">Recife, PE</div>
                <div class="description">O Consultor de RH será responsável por fornecer consultoria estratégica em práticas de recursos humanos para empresas de diversos setores...</div>
            </div>
           <button >Candidatar-se</button>
        </div>
        <div class="job-card">
            <div>
                <div class="job-title">Administrador de Redes</div>
                <div class="company">Network Solutions</div>
                <div class="location">Brasília, DF</div>
                <div class="description">Procuramos um Administrador de Redes experiente para gerenciar e manter nossa infraestrutura de rede e garantir sua segurança e eficiência...</div>
            </div>
           <button >Candidatar-se</button>
        </div>
        <div class="job-card">
            <div>
                <div class="job-title">Desenvolvedor Full Stack</div>
                <div class="company">Code Masters</div>
                <div class="location">Florianópolis, SC</div>
                <div class="description">Estamos buscando um Desenvolvedor Full Stack para criar e manter aplicativos web robustos e escaláveis, utilizando tecnologias modernas...</div>
            </div>
           <button >Candidatar-se</button>
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
