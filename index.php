<html>
    <head>
        <title>TELA <?php echo (!isset($_GET['tela'])); ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!--FAVICON-->
        <link rel="icon" type="image/png" href="multimidia/chapeu-mexicano.png">

        <!--CSS (cor de fundo e importação de fontes)-->
        <style type="text/css">
            body {
                background-color: #d5ffe5;
            }
            @font-face {
                font-family: mexicana;
                src: url(fontes/Open-Dyslexic/OpenDyslexic-Regular.otf);
            }
            @font-face {
                font-family: "comum bold";
                src: url(fontes/Champagne-Limousines/Champagne\ &\ Limousines\ Bold.ttf);
            }
        </style>
    </head>

    <body>
        <div class="container">

            <!--HEADER-->
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-light" style="background-color: #5bff9b;">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="index.php">
                                <img src="multimidia/chapeu-mexicano.png" alt="" width="40" height="30" class="d-inline-block align-text-top">
                                <strong style="font-family:mexicana;">Es México</strong>
                            </a>
                        </div>
                    </nav>
                </div>
            </div> 

            <!--NAVBAR-->
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="index.php" style="font-family:comum bold;">HOME</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-family:comum bold;">CONTENIDOS</a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <li><a class="dropdown-item" href="index.php?tela=2" style="font-family:comum bold;">Atracciones</a></li>

                                            <li><a class="dropdown-item" href="index.php?tela=3" style="font-family:comum bold;">Comidas Típicas</a></li>

                                            <li><a class="dropdown-item" href="index.php?tela=4" style="font-family:comum bold;">Tradiciones y Curiosidades</a></li>
                                        </ul>
                                    </li>
                                    <li class="navbar-nav">
                                        <a class="nav-link" href="#" style="font-family:comum bold;">CONTÁCTENOS</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <?php if(!isset($_GET['tela'])) { ?>

                <!--CAROUSEL-SLIDES-->
                <div class="row">
                    <div class="col">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="multimidia/bandeira-mexico.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="multimidia/cidade-do-mexico.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="multimidia/xoximilco.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        &nbsp;
                    </div>
                </div>

                <!--FIGURES-->
                <div class="row">
                    <div class="col">
                        <figure class="figure">
                            <img src="multimidia/1.png" class="figure-img img-fluid">
                            <figcaption class="figure-caption text-center" style="font-family:mexicana;"><strong>MÉ</strong></figcaption>
                        </figure>
                    </div>

                    <div class="col">
                        <figure class="figure">
                            <img src="multimidia/2.png" class="figure-img img-fluid">
                            <figcaption class="figure-caption text-center" style="font-family:mexicana;"><strong>XI</strong></figcaption>
                        </figure>
                    </div>

                    <div class="col">
                        <figure class="figure">
                            <img src="multimidia/3.png" class="figure-img img-fluid">
                            <figcaption class="figure-caption text-center" style="font-family:mexicana;"><strong>CO</strong></figcaption>
                        </figure>
                    </div>
                </div>


            <?php } elseif($_GET['tela'] == 2) { ?>
                <div class="row">
                    <div class="col">
                        &nbsp;
                    </div>
                </div>

                <!--IMAGEM E PEQUENO TEXTO-->
                <div class="row">
                    <div class="col">
                        <img src="multimidia/zocalo.jpg" class="img-fluid" alt="Zocalo">
                        &nbsp;
                        <h4 style="font-family:comum bold;">Belezas Mexicanas<h4>
                        <hr />
                        <h6 style="font-family:comum bold;">Você gosta de contemplar e conhecer lugares mais que encantadores? Então veio ao lugar certo!</h6>
                        <h6 style="font-family:comum bold;">A seguir, apresentaremos as 5 melhores atrações desse tão formoso país.</h6>
                    </div>

                    <!--ACCORDION-->
                    <div class="col">
                        <h4 style="font-family:comum bold;">Lista de Atrativos:</h4>
                        &nbsp;
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="font-family:comum bold; color:#00ca4f;">
                                        Basílica de Guadalupe - Ciudad de México
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body" style="font-family:comum bold;">
                                        Dono de uma beleza extraordinára, este santuário nacional mexicano é dedicado à Virgem Maria de Guadalupe, a padroeira do México. É considerado o principal templo da Igreja Católica nas Américas, além de ser um dos mais visitados no mundo, chegando a 20 milhões de visitas por ano. Ela foi erguida no local onde o índio Juan Diego testemunhou sua aparição. <a href="#" style="color:#5bff9b;"> Clique aqui</a> para conhecer mais.   
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-family:comum bold; color:#00ca4f;">
                                        Xoximilco - Puerto Morelos 
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body" style="font-family:comum bold;">
                                        Localizado a cinco minutos do Aeroporto Internacional de Cancun, o Xoximilco Cancun é uma homenagem respeitosa a Xochimilco na Cidade do México, que é uma série de canais de água que existem desde os tempos pré-colombianos, quando lagos e lagoas eram quase todo o vale do México.
                                        Com o Xoximilco, é possível viver a alegria da cultura, costumes e tradições mexicanas através da música, dança, jogos e comida em um cenário único do México, acompanhado por familiares, amigos e um anfitrião animado. <a href="#" style="color:#5bff9b;"> Clique aqui</a> para conhecer mais.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-family:comum bold; color:#00ca4f;">
                                        Chapultepec - Ciudad de México
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body" style="font-family:comum bold;">
                                        Considerado uma das maiores áreas verdes urbanas do mundo (com 686 hectares de área), o Bosque Chapultepec reserva aos visitantes atrações capazes de ocupar alguns dias da viagem. O passeio começa pelos maravilhosos jardins que compõem o parque, que podem ser vistos não só de baixo, mas também do alto do Castillo Chapultepec. O bosque conta com 6 museus, além de um Jardim Botânico, dezenas de monumentos, esculturas, fontes e lagos. <a href="#" style="color:#5bff9b;"> Clique aqui</a> para conhecer mais.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="font-family:comum bold; color:#00ca4f;">
                                        Zocalo - Ciudad de México
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body" style="font-family:comum bold;">
                                        Zocalo é o epicentro da capital do México. A enorme praça tem capacidade para mais de 100.000 pessoas, fazendo dela uma das maiores do mundo. Oficialmente denominada Plaza de la Constitucion, a praça Zocalo já foi, um dia, o coração de Tenochtitlan, uma antiga cidade asteca. É possível conhecer a história da praça por meio da ampla variedade arquitetônica, que vai desde as ruínas pré-hispânicas até estruturas palacianas e edifícios modernos. <a href="#" style="color:#5bff9b;"> Clique aqui</a> para conhecer mais.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="font-family:comum bold; color:#00ca4f;">
                                        Chichén Itzá - Yucatán
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body" style="font-family:comum bold;">
                                        Chichén Itzá é um dos sítios arqueológicos mais visitados no México; cerca de 1,4 milhões de turistas visitam as ruínas a cada ano. Essa popularidade muito se deu graças a sua eleição como uma das Novas Sete Maravilhas do Mundo.
                                        Um dos edifícios mais notáveis desse local é El Castillo, uma pirâmide com 24 metros de altura. Possui quatro lados, e incluindo o degrau localizado na plataforma do topo, há um total de 365 degraus. No topo da pirâmide, há um templo dedicado a Quetzalcóatl.
                                        Outros locais de destaque incluem um campo de bola (o maior da América Central), a Praça das Mil Colunas e o Templo dos Guerreiros. <a href="#" style="color:#5bff9b;"> Clique aqui</a> para conhecer mais.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            &nbsp;

            <?php } elseif ($_GET['tela'] == 3) { ?>
                <div class="row">
                    <div class="col">
                        &nbsp;
                    </div>
                </div>

                <!--IMAGEM E PEQUENO TEXTO-->
                <div class="row">
                    <div class="col">
                        <img src="multimidia/comidas.jpg" class="img-fluid" alt="Comidas Típicas">
                        &nbsp;
                        <h4 style="font-family:comum bold;">Culinária Mexicana<h4>
                        <hr />
                        <h6 style="font-family:comum bold;">Uma das melhores partes do México é a sua culinária, isso é indiscutível!</h6>
                        <h6 style="font-family:comum bold;">Sendo assim, vamos ver um pouco deste vasto universo gastronômico.</h6>
                    </div>

                    <!--ACCORDION-->
                    <div class="col">
                        <h4 style="font-family:comum bold;">Lista de Comidas Típicas:</h4>
                        &nbsp;
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-family:comum bold; color:#00ca4f;">
                                        Tacos
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body" style="font-family:comum bold;">
                                        Os famosos tacos são também um dos pratos mais populares em todo o mundo, principalmente entre os mexicanos. Por estar ao lado dos Estados Unidos, as receitas apresentam preparos e recheios variados com queijo, carne, tomate, alface e muito mais. Os tacos são preparados com tortilla à base de milho. <a href="#" style="color:#5bff9b;"> Clique aqui</a> para conhecer mais.   
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-family:comum bold; color:#00ca4f;">
                                        Nacho 
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body" style="font-family:comum bold;">
                                        O nacho é um prato delicioso, servido em diferentes refeições e muito tradicional nos lares mexicanos. 
                                        Esse prato é basicamente tortilhas de milho crocantes assados em formato triangular, cobertas com pimenta jalapeño, queijo e outros ingredientes.
                                        O nacho é um prato servido com diferentes acompanhamentos, como frango, carne moída, pimenta jalapeño, guacamole, alface, sour cream, tomate, feijões fritos, azeitonas e muito mais.<a href="#" style="color:#5bff9b;"> Clique aqui</a> para conhecer mais.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-family:comum bold; color:#00ca4f;">
                                        Guacamole
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body" style="font-family:comum bold;">
                                        Uma receita de comida típica do México muito famosa em todo mundo é o guacamole, uma verdadeira iguaria mexicana. Essa comida é servida como acompanhamento para os mais diferentes pratos, sendo geralmente servida com sour cream e pico de gallo. O guacamole consiste em um purê de abacate, que recebe vários temperos, funcionando, inclusive, como um complemento de salada. Muito mais do que uma comida muito saborosa, ele também faz parte de tradições milenares do país. Acredita-se que o guacamole foi criado pelo povo Tolteca há milhares de anos.<a href="#" style="color:#5bff9b;"> Clique aqui</a> para conhecer mais.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="font-family:comum bold; color:#00ca4f;">
                                        Burritos
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body" style="font-family:comum bold;">
                                        Entre as comidas típicas do México mais famosas, os Burritos estão entre as primeiras posições, além de ser um dos pratos mais amados pelos mexicanos, presente na mesa do seu povo. Essa comida tão tradicional é basicamente uma tortilla de farinha, recheada com os mais diferentes ingredientes e servido com vários acompanhamentos. Normalmente, os burritos são recheados com diversos tipos de carnes, que podem ser de frango, porco ou boi. Também são servidos com feijão e outros acompanhamentos, como alface, tomate, queijo, salsa, vegetais e muito mais. <a href="#" style="color:#5bff9b;"> Clique aqui</a> para conhecer mais.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="font-family:comum bold; color:#00ca4f;">
                                        Dulces cubiertos
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body" style="font-family:comum bold;">
                                        Os dulces cubiertos são feitos de frutas inteiras cristalizadas, que podem ser as mais variadas como abóbora, figo, pera, maçã e até limão. Depois de cristalizados, eles são recheados com coco, assemelhando-se a uma espécie de cocada, que vemos bastante aqui no Brasil. Sem dúvida, um dos doces mais saborosos do país.<a href="#" style="color:#5bff9b;"> Clique aqui</a> para conhecer mais.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                &nbsp;

            <?php } elseif($_GET['tela'] == 4) {?>
                <div class="row">
                    <div class="col">
                        &nbsp;
                    </div>
                </div>

                <!--IMAGEM E PEQUENO TEXTO-->
                <div class="row">
                    <div class="col">
                        <img src="multimidia/dia-de-los-muertos.jpg" class="img-fluid" alt="Día de Los Muertos">
                        &nbsp;
                        <h4 style="font-family:comum bold;">Tradições e Curiosidades Mexicanas<h4>
                        <hr />
                        <h6 style="font-family:comum bold;">É imprescindível falar sobre a cultura mexicana, que é riquíssima!</h6>
                        <h6 style="font-family:comum bold;">Em função disso, listamos ao lado algumas das principais tradições e curiosidades desse povo!</h6>
                    </div>
                
                    <!--ACCORDION-->
                    <div class="col">
                        <h4 style="font-family: comum bold;">Lista de Tradições e Curiosidades:</h4>
                        &nbsp;
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-family:comum bold; color:#00ca4f;">
                                        Día de Los Muertos
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body" style="font-family:comum bold;">
                                        Uma das tradições mais conhecidas é o Dia de Los Muertos, comemoração de origem indígena que usa a lembrança da morte para celebrar a vida dos ancestrais. A festa acontece entre os dias 31 de outubro e 2 de novembro e é festejada com muita música, comidas tradicionais, trajes típicos e dança. Existe a crença de que durante o período da festa os mortos vêm visitar seus entes queridos e as pessoas decoram as suas casas com velas, flores e incensos para recebê-los.<a href="#" style="color:#5bff9b;"> Clique aqui</a> para conhecer mais.   
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-family:comum bold; color:#00ca4f;">
                                        Mariachis
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body" style="font-family:comum bold;">
                                        Mariachi é chamado um dos gêneros musicais mais tradicionais do México. As pessoas que tocam esse tipo de música são conhecidas como mariacheros ou mariachis. O mariachi é composto de um conjunto musical com um cantor, instrumentos de cordas e vento. É comum encontrar esses conjuntos animando casamentos e festas. Na Cidade do México, mariachis de rua ou bares de mariachi são típicos da Plaza Garibaldi. Além disso, em 2011, a Unesco declarou Mariachi como um gênero musical Patrimônio Cultural Imaterial da Humanidade.<a href="#" style="color:#5bff9b;"> Clique aqui</a> para conhecer mais.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-family:comum bold; color:#00ca4f;">
                                        Pimientos y salsas
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body" style="font-family:comum bold;">
                                        O mexicano adora pratos picantes, temperados com muito molho de pimenta, que no México é conhecido como salsa. No país existem mais de 140 variedades de pimenta. Praticamente todos os pratos da culinária mexicana levam um toque de pimenta ou são acompanhados por uma salsa bem picante. Além do mais, a pimenta é adereço comum em muitos pratos que não são salgados. É comum encontrar lugares que vendem doces com pimenta, frutas, caldos e sorvetes.<a href="#" style="color:#5bff9b;"> Clique aqui</a> para conhecer mais.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="font-family:comum bold; color:#00ca4f;">
                                        La Siesta
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body" style="font-family:comum bold;">
                                        Esse é um costume popular conhecido como " La siesta". As lojas ficam fechadas por algumas horas durante a tarde para permitir que seus proprietários e funcionários tenham um período de descanso. Embora devido ao crescente ritmo de vida nas áreas urbanas esse costume esteja diminuindo, nas aldeias e nas áreas rurais esse é um dos antigos costumes do México que ainda prevalece.<a href="#" style="color:#5bff9b;"> Clique aqui</a> para conhecer mais.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="font-family:comum bold; color:#00ca4f;">
                                        Piñata
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body" style="font-family:comum bold;">
                                        Piñatas são um show de família em muitas festas. Este aspecto da cultura mexicana foi adotado em todo o mundo. A piñata pode ser uma panela de barro, cheia de frutas, doces e confetes, ou pode ser feita de papel, geralmente na forma de um burro. Eles têm decorações coloridas de enfeites, fitas e papel, com um barbante. A piñata está pendurada e as crianças vendadas tentam quebrá-la para colher os frutos.<a href="#" style="color:#5bff9b;"> Clique aqui</a> para conhecer mais.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                &nbsp;

            <?php } ?>

        </div>
    </body>
</html>