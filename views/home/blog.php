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
    <title>Como Criar um Currículo em 7 Passos</title>
    <style>
        header {
            background-color: var(--bg);
            color: #fff;
            padding: 20px 0;
            text-align: center;
            display: flex;
            align-content: center;
            justify-content: center;
            align-items: center;

        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            font-size: 18px;
            line-height: 1.6;
            background-color: var(--bg-main);
        }
        h1 {
            color: var(--title-color);
            width: 100%;
            min-width: 100%;
        }
        h3{
            color: var(--subtitle-color);
        }
        h3 span{
            font-weight: bolder;
        }
        b{
            font-weight: bolder;
            color: var(--bg-btn);
        }

        p,span,ul,li {
            font-weight: 400;
            color: var(--subtitle-color);
        }
        
        ol {
            padding-left: 20px;
        }
        article {
            padding: 2rem 0;
        }
        h3 {
            margin-top: 1rem;
            font-size: 2.5rem;
        }
        @media (max-width: 768px) {
            h3{
                font-size: 1.8rem;
            }
        }
        section{
            width: 100%;
            height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

     
        
        #img-blog{
            background-image: url("../../assets/img/bg-blog.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 100%;
            height: 100%;
            filter: blur(2px);
            z-index: 0;
            position: relative;
        }
        #img-blog::after{
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
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
              
                <?php if (isset($_SESSION['user-id'])): ?>
                <li><a href="./index.php">Home</a></li>
                <li><a href="#">Blog</a></li>
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
                <li id="closeLi"><a class="close-session" href="../../index.php"><img src="../../assets/img/close.png" alt="Close" width="24" height="24"></a></li>
            <?php else: ?>
                <li><a href="/Projeto-DireitoFaminas">Home</a></li>
                <li><a href="#">Blog</a></li>
            <?php endif; ?>
                
            </ul>
        </div>
    </nav>
   
    <section class="section img">
    <div class="header">
        <h1>Como Criar um Currículo em <b>7 Passos</b></h1>
    </div>
        <div id="img-blog" class="img"></div>
    </section>
    <div class="container">
        <article>
            <h3 class="wp-block-heading" id="h-elementos-essenciais-para-um-curriculo">
                <span style="font-weight: 400;">Elementos essenciais para um currículo</span>
            </h3>
            <p>
                <span style="font-weight: 400;">
                    Os elementos fundamentais que devem estar presentes em um bom currículo são:</span>
            </p>
                <ul>
                    <li>
                    <b>
                    Dados pessoais:</b>
                <span style="font-weight: 400;">
                     nome completo, idade, estado civil, telefone e e-mail de contato atualizados;</span>
            </li>
                <li>
                    <b>
                    Objetivo profissional:</b>
                <span style="font-weight: 400;">
                     cargo e área a qual pretende se candidatar;</span>
            </li>
                <li>
                    <b>
                    Experiência profissional: </b>
                <span style="font-weight: 400;">
                    empresas em que já trabalhou, seguidas do cargo, responsabilidades e período trabalhado;</span>
            </li>
                <li>
                    <b>
                    Formação acadêmica:</b>
                <span style="font-weight: 400;">
                     grau de escolaridade, nome da instituição de ensino, curso e data de início e término;</span>
            </li>
                <li>
                    <b>
                    Cursos complementares:</b>
                <span style="font-weight: 400;">
                     cursos livres, técnicos e especializações realizadas pelo candidato;</span>
            </li>
                <li>
                    <b>
                    Habilidades e competências:</b>
                 <a>
                    <span style="font-weight: 400;">
                    soft e hard skills</span>
            </a>
                <span style="font-weight: 400;">
                     que podem contribuir para a vaga em aberto.</span>
            </li>
            </ul>
                <h3 class="wp-block-heading" id="h-secoes-e-subsecoes">
                    <span style="font-weight: 400;">
                    Seções e subseções</span>
            </h3>
                <p>
                    <span style="font-weight: 400;">
                    O ideal é que o currículo seja</span>
                <b>
                     formatado em seções e subseções</b>
                <span style="font-weight: 400;">
                     para facilitar a leitura e a compreensão. Lembre-se que os recrutadores analisam uma quantidade imensa de currículos a cada vaga, por isso, muitas vezes, essa análise é feita de forma dinâmica.&nbsp;</span>
            </p>
                <p>
                    <span style="font-weight: 400;">
                    Para facilitar a leitura, escolha um modelo que use </span>
                <b>
                    blocos de texto</b>
                <span style="font-weight: 400;">
                    , divididos de acordo com o assunto. Assim, você pode definir seções do currículo para as experiências profissionais, outras para os cursos e formações e assim por diante.&nbsp;</span>
            </p>
            <h3 class="wp-block-heading" id="h-secoes-e-subsecoes">
                    <span style="font-weight: 400;">
                    Os 7 passos para criar um currículo:</span>
            </h3>
            <h3 class="wp-block-heading" id="h-2-destaque-conquistas-relevantes">
            <span style="font-weight: 400;">
            <b>1.</b> Utilize uma formatação limpa e profissional</span>
        </h3>
            <p>
                <span style="font-weight: 400;">
                A formatação faz toda a diferença na forma como as informações são absorvidas. Por isso, vale a pena ter cuidado nessa parte.&nbsp;</span>
        </p>
            <p>
                <span style="font-weight: 400;">
                O ideal é utilizar </span>
            <b>
                fontes que facilitem a leitura</b>
            <span style="font-weight: 400;">
                , como a Arial ou a Verdana. O tamanho da letra também deve ser padronizado. O indicado é usar tamanho 12 para o corpo do texto e 16 e 14 para títulos e subtítulos.&nbsp;</span>
        </p>
            <p>
                <span style="font-weight: 400;">
                Tente manter um</span>
            <b>
                 visual limpo</b>
            <span style="font-weight: 400;">
                , sem excesso de informações e com um formato tradicional. Não é necessário incluir uma foto no currículo, mas caso você opte por isso, dê preferência para imagens no formato 3x4, em alta resolução, com fundo branco.&nbsp;</span>
        </p>
            <h3 class="wp-block-heading" id="h-2-destaque-conquistas-relevantes">
                <span style="font-weight: 400;">
                <b>2.</b> Destaque conquistas relevantes</span>
        </h3>
            <p>
                <span style="font-weight: 400;">
                No início do currículo, vale incluir um </span>
            <b>
                resumo profissional</b>
            <span style="font-weight: 400;">
                 com um ou dois parágrafos, destacando suas experiências, conquistas e pontos altos da carreira.&nbsp;</span>
        </p>
            <p>
                <span style="font-weight: 400;">
                Além disso, quando for descrever suas experiências anteriores, é válido destacar </span>
            <b>
                conquistas relevantes e resultados alcançados</b>
            <span style="font-weight: 400;">
                . Assim, inclua, por exemplo, promoções, prêmios e outros pontos que achar importantes.&nbsp;</span>
        </p>
            <h3 class="wp-block-heading" id="h-3-adapte-seu-curriculo-para-cada-oportunidade">
                <span style="font-weight: 400;">
                <b>3.</b> Adapte seu currículo para cada oportunidade</span>
        </h3>
            <p>
                <span style="font-weight: 400;">
                É fundamental adaptar seu currículo para cada vaga específica que você deseja se candidatar. Por isso, mantenha uma cópia do documento em aberto para realizar alterações sempre que necessário.&nbsp;</span>
        </p>
            <p>
                <span style="font-weight: 400;">
                Na hora de se candidatar, </span>
            <b>
                personalize o objetivo profissional</b>
            <span style="font-weight: 400;">
                 e o resumo das qualificações de acordo com os requisitos e atribuições da vaga. É claro que você deve ser sempre verdadeiro, mas é possível encontrar nas suas experiências e competências, diferenciais que combinem com aquilo que está sendo exigido.&nbsp;</span>
        </p>
            <h3 class="wp-block-heading" id="h-4-destaque-habilidades-importantes-para-a-vaga">
                <span style="font-weight: 400;">
                <b>4.</b> Destaque habilidades importantes para a vaga</span>
        </h3>
            <p>
                <span style="font-weight: 400;">
                É comum que o recrutador inclua na descrição da vaga as competências técnicas e comportamentais que estão sendo buscadas. Antes de se candidatar, portanto, você, provavelmente, já verificou quais são esses </span>
            <b>
                requisitos obrigatórios e desejáveis.</b>
        </p>
            <p>
                <span style="font-weight: 400;">
                Assim, busque destacar os diferenciais que mostram que você é a pessoa mais adequada para a vaga. É interessante, por exemplo, fazer uma lista com 10 </span>
            <a >
                <span style="font-weight: 400;">
                habilidades profissionais</span>
        </a>
            <span style="font-weight: 400;">
                 ou incluir informações de cursos e treinamentos na área.&nbsp;</span>
        </p>
            <h3 class="wp-block-heading" id="h-5-use-palavras-chave-relevantes-para-a-area">
                <span style="font-weight: 400;">
                <b>5.</b> Use palavras-chave relevantes para a área</span>
        </h3>
            <p>
                <span style="font-weight: 400;">
                Hoje em dia, é comum que a primeira etapa dos processos seletivos, ou seja, a análise do currículo, seja feita com o auxílio de</span>
            <b>
                 softwares de inteligência artificial</b>
            <span style="font-weight: 400;">
                .&nbsp;</span>
        </p>
            <p>
                <span style="font-weight: 400;">
                Obviamente, esse tipo de ferramenta nem sempre tem a mesma capacidade de interpretação de um ser humano. Por isso, é válido dar uma mãozinha para a ferramenta, preenchendo o currículo com </span>
            <b>
                palavras-chaves e termos</b>
            <span style="font-weight: 400;">
                 semelhantes aos encontrados no anúncio da vaga.&nbsp;</span>
        </p>
            <p>
                <span style="font-weight: 400;">
                Dessa forma, se a descrição do cargo pede, por exemplo, habilidade com o Excel, vale colocar o nome da ferramenta na lista de competências, mesmo que você já tenha adicionado experiências com o pacote Office.</span>
        </p>
            <h3 class="wp-block-heading" id="h-6-faca-uma-revisao-cuidadosa">
                <span style="font-weight: 400;">
                <b>6.</b> Faça uma revisão cuidadosa</span>
        </h3>
            <p>
                <span style="font-weight: 400;">
                A revisão é uma das principais etapas na hora de fazer um bom currículo. Ela ajuda você a </span>
            <b>
                verificar erros superficiais</b>
            <span style="font-weight: 400;">
                , de ortografia, digitação e gramática.&nbsp;</span>
        </p>
            <p>
                <span style="font-weight: 400;">
                O ideal é fazer uma leitura cuidadosa de todo o texto algumas horas ou dias após escrevê-lo. Dessa forma, você deixa seu cérebro descansar e consegue notar erros que poderiam passar despercebidos no início.&nbsp;</span>
        </p>
            <h3 class="wp-block-heading" id="h-7-mantenha-o-curriculo-sempre-atualizado">
                <span style="font-weight: 400;">
                <b>7.</b> Mantenha o currículo sempre atualizado</span>
        </h3>
            <p>
                <span style="font-weight: 400;">
                Por fim, a última dica é manter o currículo sempre atualizado. Você nunca sabe quando vai achar uma oportunidade perfeita e ainda pode receber contatos ativos de recrutadores. Por isso, é essencial ter um currículo à mão, com</span>
            <b>
                 dados de contato atuais </b>
            <span style="font-weight: 400;">
                e experiências recentes.&nbsp;</span>
        </p>

             </article>
    </div>
<div class="fonte"><a id="link-fonte" href="https://blog.solides.com.br/fazer-um-bom-curriculo/" target="_blank">Fonte</a></div>
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
    <script src="./../../assets/js/script.js"></script>
</body>
</html>
