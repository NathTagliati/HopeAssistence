<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel = "stylesheet" href = "assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/logo-transparente.png" type="image/x-icon" >
</head>
    <title>HopeAssistance</title>
<body>

        <!---Inicio do container -->

    <div class = "containerr">

    
    <style>
        .containerr {
        background-image: url('fundo.jpeg');
        }
    </style>

     <div class = "container">

        <!---Inicio navegação-->
        <div class = "navbar">
                
            <div class = "logo">
                <img src = "assets/img/logo-transparente.png" alt = "CraftSales" width= "350px">
            </div>

            <!---Inicio menu navegação-->

            <nav>
                <ul id = "MenuItens">
                    <li><a href = "index.php" title = "#">Início</a> </li>
                    <li><a href = "doacaovalores.php" title = "#">Doações</a> </li>
                    <li><a href = "produtos.php" title = "#">Medicamentos</a> </li>
                    <li><a href = "empresa.php" title = "#">Sobre Nós</a> </li>
                    <li><a href = "doacao.php" class ="btnn" title = "#">Doe Qualquer Valor </a> </li>
                </ul>
            </nav>

            <!--Fim menu navegação-->
           
            
            <img src="assets/img/menu.png" alt="" class="menu-celular" onclick="menucelular()">
        </div>
        <!---Fim navegação-->
          <br>
          <br>
          <br>
          <br>
        <!--Inicio texto do banner-->
        <div class = "linha">
            <div class = "col-2">
                <h1>Salve Vidas!</h1>
                <p> Nos ajude a salvar a vida de milhares de pessoas que necessitam de medicamentos urgentemente   .</p>
                <br> 
                <br>
                <br>
                <!---Inicio do botão-->
                <br><a href = "produtos.php" class = "btnn">Quero Doar Medicamentos ! </a>
                <!---Fim do botão-->
            </div>

         <div class = "col-2">
         </div>
            

        </div>
        <!--Fim do texto do banner-->

        

        </div>
    </div> 

    <!---Fim do container-->

    
    <!---Fim do Banner-->

    

    <section class="C-sobre" data-aos="fade-up">
        <div class="image">
            <img src="assets/img/logo-transparente.png">
        </div><!--image-->

        <div class="Sobre-mim">
            <h1>Hope Assistance</h1>
            <h4>Nossa  <span>Missão</span></h4>

            <p>Através de programas de doação cuidadosamente projetados,
                <br> colaboramos com organizações sem fins lucrativos e iniciativas
                <br> de saúde pública para distribuir medicamentos vitais onde são
                <br> mais necessários. Desde tratamentos para doenças crônicas até
                <br> medicamentos emergenciais, estamos comprometidos em fazer 
                <br> nossa parte para melhorar a qualidade de vida e promover a 
                <br> equidade no acesso à saúde, cada colaborador e parceiro 
                <br> desempenha um papel vital em nossa missão.  
                <br> Juntos, estamos construindo um futuro onde a saúde é uma 
                <br> prioridade acessível a  todos.</p>
                

        </div><!--Sobre-mim-->
    </section><!---C-sobre-->


    <section class="Container" data-aos="fade-up">
        <h1>Tipos de medicamentos</h1>
        <p>Meu serviços pra você faça sua oferta e me mande uma mensagem </p>
        <p>Nossos serviços pra você</p>
        <div class="C-card" data-aos="fade-up">
            <div class="Card">
                <img src="assets/img/febre.webp" alt="phone">
                <h3>Analgésicos e Antipiréticos</h3>
                <h4>São utilizados para aliviar a dor 
                    <br> (analgésicos) e reduzir a febre
                    <br> (antipiréticos), como o paracetamol
                    <br> e o ibuprofeno.</h4>
            </div><!--Card-->

            <div class="Card">
                <img src="assets/img/bacteria.png" alt="desktop">
                <h3>Anti-inflamatórios, Antibióticos 
                    <br> e Antifúngicos</h3>
                <h4>Combatem infecções bacterianas,
                    <br> virus e infecções causadas por fungos, 
                    <br> como fluconazol, amoxicilina e tratamentos
                    <br> da gripe e hiv
                    </h4>
            </div><!--Card-->

            <div class="Card">
                <img src="assets/img/transtorno.jpeg" alt="grafico">
                <h3>Antidepressivos e Antipsicóticos</h3>
                <h4>Usados no tratamento de
                    <br> transtornos de humor
                    <br> e condições psicóticas
                    <br> como depressão e ansiedade
                    <br>Exemplos incluem a sertralina e risperidona. </h4>
            </div><!--Card-->
        </div><!--C-card-->

        <div class="C-card-2" data-aos="fade-up">

            <div class="Card">
                <img src="assets/img/alergia.jpeg" alt="computador">
                <h3>Anticonvulsivantes e Antialérgicos</h3>
                <h4> Controlam convulsões e
                    <br>  reduzem reações alérgicas
                    <br> como a loratadina e
                    <br> carbamazepina</h4>
            </div><!--Card-->


            <div class="Card">
                <img src="assets/img/cardi.png" alt="camera">
                <h3>Medicamentos Cardiovasculares
                    <br>e Hormonais
                </h3>
                <h4>Regulam os níveis hormonais no corpo
                    <br> e ncluem betabloqueadores,
                    <br> diuréticos, e medicamentos para
                    <br> controle do colesterol, como a atorvastatina.
                 </h4>
            </div><!--Card-->


            <div class="Card">
                <img src="assets/img/quimio.webp" alt="paisagem">
                <h3>Imunossupressores e Quimioterápicos</h3>
                    <h4>Usados no tratamento de câncer
                    <br>como agentes alquilantes e antimetabólitos.
                    <br>Suprimem o sistema imunológico e 
                    <br> usados em transplantes de órgãos e
                    <br> no tratamento de doenças autoimunes.
                    <br> incluem a ciclosporina e o tacrolimo.</h4>
            </div><!--Card-->

        </div><!--C-card-2-->
    </section><!--conatiner-->


    <section class="C-projetos" data-aos="fade-up">
        <h1>Salvamos vidas com a 
            <br> sua ajuda
        </h1>
        <p>Meu serviços pra você faça sua oferta e me mande uma mensagem </p>
        <p>Nossos serviços pra você</p>
        <div class="img-projetos" data-aos="fade-up">
            <img src="assets/img/projeto-1.jpeg" alt="projeto">
            <img src="assets/img/projeto-2.jpg" alt="projeto">
        </div><!--img-projetos-->
        <div class="img-2"><img src="assets/img/projeto-3.jpg" alt="projeto"></div>
    </section><!--C-projetos-->



    <!--INICIO DEPOIMENTOS-->
    <div class="depoimentos">
        <div class="corpo-categorias">
            <div class="linha">

                <!--INICIO ITEM DEPOIMENTOS-->
                <div class="col-3">
                    
                    <p>Minha família e eu não temos palavras para expressar nossa gratidão à Hope Assistance. Os medicamentos que recebemos não apenas aliviaram nossos sintomas, mas também nos deram esperança em tempos difíceis. Saber que existe uma organização como a de vocês, que se preocupa genuinamente com o bem-estar das pessoas menos privilegiadas, é um verdadeiro conforto. Obrigado por serem os anjos que apareceram em nossa hora de necessidade.</p>
                    <img src="assets/img/cliente-1.png" alt="">
                  
                   

                    <h3>Maika Hiru</h3>
                </div>

                <div class="col-3">
                    
                    <p>Eu nunca vou esquecer o dia em que recebi os medicamentos da Hope Assistance. Aquilo foi mais do que apenas remédios; foi um gesto de compaixão que mudou minha vida. Graças a vocês, pude finalmente tratar minha condição de saúde e recuperar minha qualidade de vida. É incrível saber que existem pessoas como vocês que se importam tanto com o bem-estar dos outros. Obrigado por serem anjos em nossas vidas.</p>
                    <img src="assets/img/cliente-3.png" alt="">
                  
                   

                    <h3>Claudia oliveira</h3>
                </div>

                <div class="col-3">
                    
                    <p>Receber os medicamentos da Hope Assistance foi como um raio de esperança em meio à minha batalha contra a doença. Não tenho como expressar o quanto isso significou para mim e para minha família. A generosidade de vocês não só aliviou meus sintomas, mas também renovou minha fé na humanidade. Vocês são verdadeiros heróis, fazendo uma diferença real na vida de tantas pessoas como eu. Obrigado do fundo do meu coração.</p>
                    <img src="assets/img/cliente-2.png" alt="">
                  
                    

                    <h3>Cleyton Souza</h3>
                </div>
                <!--FIM DePOIMENTOS-->

            </div>
        </div>
    </div>
    <!--FIM DEPOIMENTOS-->



    <!--INICIO MARCAS-->

    <div class="corpo-categorias">
                 <h2 class="titulo"> Marcas apoiadoras</h2>



    <div class="marcas">
    <div class="corpo-categorias">
        <div class="linha">

            <div class="col-5">
        
            <a href="https://www.ems.com.br/">            
            
                <img src="assets/img/marca-1.png" alt="">
                            
                </a>
                
            </div>

            <div class="col-5">
                <a href="https://www.neoquimica.com.br/?utm_source=google&utm_campaign=convert_google_neoquimica_ch_brand_awareness_cpc_search_reconhecimento_home_jul-23&utm_medium=cpc&utm_content=brand-institucional_texto_automatico_home&utm_term=interesses-HM-18a65_cliques_brand-institucional&gad_source=1&gclid=CjwKCAjwm_SzBhAsEiwAXE2CvyNNxFpxbPFHotPFfBzLeeY26nQOUtAYuYvtsECEO361DUd2prOrXRoCQywQAvD_BwE">
                <img src="assets/img/marca-2.png" alt="">

            </a>
            </div>

            <div class="col-5">
                <a href="https://cimedremedios.com.br/">
                <img src="assets/img/marca-3.png" alt="">
            </div>
            </a>


        </div>
    </div>
</div>
</div>


    <!--FIM MARCAS-->

    <!--INICIO RODAPE-->
    <footer class="rodape">

        <div class="container">
            <div class="linha">

                <div class="rodape-col-1"> 
                    <h3>Baixe o nosso aplicativo</h3>
                    <p>Nas melhores plataformas</p>
                    <div class="app-logo">
                        <img src="assets/img/google.png" alt="">
                        <img src="assets/img/apple.png" alt="">
                    </div>
                </div>

                <div class="rodape-col-2">
                    <img src="assets/img/logo-transparente.png" alt="">
                    <p></p>
                    
                </div>
                <div class="rodape-col-3"> 
                    <h3>Mais Informações</h3>
                    <ul>
                        <li>Cupons</li>
                        <li>Blog</li>
                        <li>Política de Privacidade</li>
                        <li>Contatos</li>
                    </ul>
                </div>

                <div class="rodape-col-4"> 
                    <h3>Redes Sociais</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                        <li>Twitter</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="direitos">
                &#169; Todos os Direitos Reservados Craft Sales
            </p>

        </div>
        </footer>

     <!--FIM RODAPE-->
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
   <script src="https://unpkg.com/aos@next/dist/aos.js"></script><script src = "assets/js/app.js"></script>
   <script src="https://unpkg.com/aos@next/dist/aos.js"></script><script src = "assets/js/app.js"></script>
   <script src = "assets/js/app.js"></script>
   <script>
      AOS.init();
    </script>
</body>
</html>