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
        * {
            color: none;
        }
        /* Estilos básicos */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--bg);
            color: var(--title-color) !important;
        }
        /* CSS básico para o modal */
        #jobTitle {
        color: var(--title-color);
        }
        #jobDescription, #jobResponsibilities, #jobRequirements, #jobBenefits, #companySummary, h3, ul, li {
            color: var(--subtitle-color);
        }
        .modal {
            display: none; /* Inicialmente, o modal não é visível */
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 1rem 3rem;
            border: 1px solid #888;
            width: 80%;
            max-width: 600px;
        }
        .modal-header, .modal-body, .modal-footer {
            margin-bottom: 10px;
        }
        .modal-footer {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 10px;
            margin-top: 10px;
            flex-direction: column;
        }
        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 1.5em;
            font-weight: bold;
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
        
    <div class="job-card" data-job-id="#201">
        <div>
            <div class="job-title">Auxiliar de Dentista</div>
            <div class="company">Clínica Sorriso</div>
            <div class="location">São Paulo, SP</div>
            <div class="description">Estamos em busca de um Auxiliar de Dentista para apoiar nossos dentistas em procedimentos clínicos e cuidar da organização do consultório.</div>
        </div>
        <button class="">Candidatar-se</button>
    </div>

    <div class="job-card" data-job-id="#202">
        <div>
            <div class="job-title">Auxiliar de Escritório</div>
            <div class="company">Serviços Administrativos Ltda</div>
            <div class="location">Rio de Janeiro, RJ</div>
            <div class="description">Buscamos um Auxiliar de Escritório para realizar tarefas administrativas, como organização de documentos, atendimento telefônico e suporte geral ao escritório.</div>
        </div>
        <button class="">Candidatar-se</button>
    </div>

    <div class="job-card" data-job-id="#203">
        <div>
            <div class="job-title">Vendedor</div>
            <div class="company">Loja de Moda</div>
            <div class="location">Belo Horizonte, MG</div>
            <div class="description">Procuramos um Vendedor para atuar no atendimento ao cliente, organização de produtos e realização de vendas.</div>
        </div>
        <button class="">Candidatar-se</button>
    </div>

    <div class="job-card" data-job-id="#204">
        <div>
            <div class="job-title">Operador de Caixa</div>
            <div class="company">Supermercado Local</div>
            <div class="location">Porto Alegre, RS</div>
            <div class="description">Estamos à procura de um Operador de Caixa para processar transações de vendas, auxiliar clientes e manter o caixa organizado.</div>
        </div>
        <button class="">Candidatar-se</button>
    </div>

    <div class="job-card" data-job-id="#205">
        <div>
            <div class="job-title">Assistente de Logística</div>
            <div class="company">TransLog</div>
            <div class="location">Curitiba, PR</div>
            <div class="description">Buscamos um Assistente de Logística para ajudar na organização e coordenação de transporte e distribuição de mercadorias.</div>
        </div>
        <button class="">Candidatar-se</button>
    </div>

    <div class="job-card" data-job-id="#206">
        <div>
            <div class="job-title">Repositor de Mercadorias</div>
            <div class="company">Rede de Supermercados</div>
            <div class="location">Salvador, BA</div>
            <div class="description">Procuramos um Repositor de Mercadorias para organizar produtos nas prateleiras e garantir a reposição adequada de mercadorias.</div>
        </div>
        <button class="">Candidatar-se</button>
    </div>

    <div class="job-card" data-job-id="#207">
        <div>
            <div class="job-title">Recepcionista</div>
            <div class="company">Hotelaria Global</div>
            <div class="location">Brasília, DF</div>
            <div class="description">Estamos contratando um Recepcionista para atender os clientes, realizar check-ins e check-outs e oferecer suporte nas necessidades dos hóspedes.</div>
        </div>
        <button class="">Candidatar-se</button>
    </div>

    <div class="job-card" data-job-id="#208">
        <div>
            <div class="job-title">Estoquista</div>
            <div class="company">Distribuidora XYZ</div>
            <div class="location">Manaus, AM</div>
            <div class="description">Estamos em busca de um Estoquista para gerenciar o recebimento, a movimentação e a reposição de produtos em nosso armazém.</div>
        </div>
        <button class="">Candidatar-se</button>
    </div>

    <div class="job-card" data-job-id="#209">
        <div>
            <div class="job-title">Assistente Administrativo</div>
            <div class="company">Consultoria ABC</div>
            <div class="location">Goiania, GO</div>
            <div class="description">Procuramos um Assistente Administrativo para fornecer suporte administrativo em nossa empresa, realizando tarefas de escritório e auxiliando em projetos específicos.</div>
        </div>
        <button class="">Candidatar-se</button>
    </div>

    <div class="job-card" data-job-id="#210">
        <div>
            <div class="job-title">Auxiliar de Produção</div>
            <div class="company">Indústria XYZ</div>
            <div class="location">Fortaleza, CE</div>
            <div class="description">Estamos contratando um Auxiliar de Produção para auxiliar nas operações de fabricação e garantir a qualidade dos produtos.</div>
        </div>
        <button class="">Candidatar-se</button>
    </div>

    <div id="jobModal" class="modal">
        <div class="modal-content" style="color: #000;">
            <div class="modal-header">
                <span id="jobTitle"></span>
                <span class="close" onclick="closeModal()">&times;</span>
            </div>
            <div class="modal-body">
                <p id="jobDescription"></p>
                <h3>Responsabilidades</h3>
                <ul id="jobResponsibilities"></ul>
                <h3>Requisitos</h3>
                <ul id="jobRequirements"></ul>
                <h3>Benefícios</h3>
                <ul id="jobBenefits"></ul>
            </div>
            <div class="modal-footer">
                <p id="companySummary"></p>
                <label for="cv">Anexe seu Curriculo</label>
                <input type="file" name="cv" id="cv">
                <button id="applyButton" onclick="applyJob()">Candidatar-se</button>
            </div>
        </div>
    </div>
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function applyJob() {
            const cv = document.getElementById('cv').files;
            if (cv.length === 0) {
                Swal.fire({
            title: "Ops!",
            text: `Você precisa adicionar seu curriculo!`,
            icon: "info"
            });
            }else{
                Swal.fire({
            title: "Parabéns!",
            text: `Você está se candidatando à vaga de ${document.getElementById('jobTitle').innerText}`,
            icon: "success"
            }).then(() => {
                closeModal();
            });
            }
            
        }

        function closeModal() {
            document.getElementById('jobModal').style.display = 'none';
        }

        document.addEventListener('DOMContentLoaded', function () {
            const jobCards = document.querySelectorAll('.job-card');

            jobCards.forEach(card => {
                card.addEventListener('click', function () {
                    const jobId = this.getAttribute('data-job-id');
                    fetch(`/Projeto-DireitoFaminas/assets/bd/vagas.json`)
                        .then(response => response.json())
                        .then(data => {
                            const job = data.find(job => job.id === jobId);
                            document.getElementById('jobTitle').innerText = job.title;
                            document.getElementById('jobDescription').innerText = job.description;
                            document.getElementById('jobResponsibilities').innerHTML = job.responsibilities.map(responsibility => `<li>${responsibility}</li>`).join('');
                            document.getElementById('jobRequirements').innerHTML = job.requirements.map(requirement => `<li>${requirement}</li>`).join('');
                            document.getElementById('jobBenefits').innerHTML = job.benefits.map(benefit => `<li>${benefit}</li>`).join('');
                            document.getElementById('companySummary').innerText = job.company_summary;
                            document.getElementById('jobModal').style.display = 'block';
                        })
                        .catch(error => {
                            console.error('Erro ao carregar dados da vaga:', error);
                        });
                });
            });
        });
    </script>
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
