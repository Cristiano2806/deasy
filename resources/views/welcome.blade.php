<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <meta name="description" content="D-easy - Seu diagnóstico fácil!">
    <meta name="author" content="Cristiano Botelho">

    
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure its jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    
    <title>D-easy</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="assets/css/swiper.css" rel="stylesheet">
	<link href="assets/css/styles.css" rel="stylesheet">
	
	
    <link rel="icon" href="images/favicon.png">
</head>
<body>
    
    
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
        <div class="container">

            
            <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.svg" alt="alternative"></a> 

            

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#header">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Portais</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Dicas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Estatísticas</a>
                    </li>
                </ul>
               
            </div> 
        </div> 
    </nav> 
  
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="h1-large">D-EASY<br> O SEU <br> DIAGNÓSTICO FÁCIL</h1>
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="button-container">
                    @if (Route::has('login'))
                        <div class="top-right links">
                        @auth
                        <a class="btn-solid-lg page-scroll" href="{{ url('/home') }}">Quais os seu sintomas?</a>
                    @else
                        <a class="btn-solid-lg page-scroll" href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a class="btn-outline-lg page-scroll" href="{{ route('register') }}">Register</a>
                    @endif
                        @endauth
                        </div>
                    @endif
                    
                    </div> 
                </div> 
            </div> 
        </div> 
    </header> 
   


  
    <div id="intro" class="basic-1 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1>Nossa missão é cuidar do próximo</h1>
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <p><strong>Pacientes</strong> pós covid podem ficar com muitas sequelas e muito diferentes do que eram antes.</p>
                        <p><strong>Nós</strong> estamos aqui para ajudar... Te dando soluções temporárias para se cuidar no pós COVID.</p>
                        <p><strong>RESSALTANDO:</strong> Temporárias, pois a sua visita em seu médico de confiança é de extrema importância.</p>
                    </div> 
                </div> 
            </div> 
        </div> 
    </div> 
    


    
    <div id="projects" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h2>Saiba mais sobre as vacinas </h2>
                        <p>Entenda tudo sobre as vacinas.</p>
                        <a class="read-more no-line green" href="https://www.who.int/pt/emergencies/diseases/novel-coronavirus-2019/covid-19-vaccines/explainers?adgroupsurvey={adgroupsurvey}&gclid=Cj0KCQjwqKuKBhCxARIsACf4XuESatAfnYi0DhzfHXXu75sWUE3aWPTL7Cqa7jPcvusFC9ouxXWSNRMaAms7EALw_wcB#">Leia mais<span class="fas fa-long-arrow-alt-right"></span></a>
                    </div> 
                </div> 
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="assets/images/vaccine-5439120-1920.jpg" alt="Vacina">
                    </div> 
                </div> 
            </div> 
        </div>
    </div> 
 


    
    <div class="basic-3 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="/assets/images/" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h2>Acompanhe o Coranavírus no Brasil</h2>
                        <p>Fique por dentro de todas as informações em tempo real do coronavírus no Brasil.</p>
                        <a class="read-more no-line green" href="https://covid.saude.gov.br/">Leia mais<span class="fas fa-long-arrow-alt-right"></span></a>
                    </div> 
                    </div> 
                </div> 
            </div> 
        </div> 
    </div> 
  


    
    
    <div class="basic-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Entenda o funcionamento</h2>
                    <hr class="hr-heading">
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="step-container">
                        <div class="step">Registre-se</div>
                        <i class="fas fa-chevron-right"></i>
                        <div class="step">O que você sente?</div>
                        <i class="fas fa-chevron-right"></i>
                        <div class="step">Diagnóstico fácil</div>
                    </div> 
                    <p>Aqui nos preocupamos com o seu bem-estar. Então conte-nos o que está sentindo que nós te damos uma solução temporária!</p>
                </div> 
            </div> 
        </div> 
    </div>

    
    <div id="services" class="cards-1 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Dicas muito importantes para lidar com tudo isso</h2>
                    <p class="p-heading">Para que tudo volte ao normal, e para que todos nós possamos aproveitar o melhor da vida. Lembre-se bem dessas dicas!</p>
                </div> 
            </div> 
            <div class="row">
                <div class="col-lg-12">

                    
                    <div class="card first">
                        <div class="card-icon">
                            <span class="fas fa-rocket green"></span>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Confie na Ciência!</h4>
                            <div class="card-text">Não deixe de tomar a vacina! Saiba que não é coisa de outro mundo. Tenha empatia.</div>
                        </div>
                    </div>
                    

                    <!-- Card -->
                    <div class="card second">
                        <div class="card-icon">
                            <span class="far fa-clock green"></span>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Não perca tempo</h4>
                            <div class="card-text">É muito importante que você tome as duas doses da vacina. Não deixe para depois.</div>
                        </div>
                    </div>
                                     
                    <div class="card third">
                        <div class="card-icon">
                            <span class="far fa-comments green"></span>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Conscientizar é viver</h4>
                            <div class="card-text">Conscientize a sua família e gente próxima a fazer o certo! Quanto mais melhor.</div>
                        </div>
                    </div>
    
                    <div class="card first">
                        <div class="card-icon">
                            <span class="fas fa-camera green"></span>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Poste nas Redes</h4>
                            <div class="card-text">Não esconda de ninguém a alegria de estar vacinado e imunizado. Poste fotos bem legais!</div>
                        </div>
                    </div>

                    <div class="card second">
                        <div class="card-icon">
                            <span class="fas fa-chart-pie green"></span>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Vacine mais cedo</h4>
                            <div class="card-text">A maioria dos múnicipios estão com doses contadas por dia. Acorde mais cedo!</div>
                        </div>
                    </div>
                    

                    <!-- Card -->
                    <div class="card third">
                        <div class="card-icon">
                            <span class="far fa-chart-bar green"></span>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Não vire uma estatística ruim</h4>
                            <div class="card-text">Seja responsável, cuide de você e da sua família. Viva feliz!</div>
                        </div>
                    </diV>
                </div> 
            </div> 
        </div> 
    </div> 

    <div id="about" class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Estatísticas</h2>
                    <hr class="hr-heading">
                </div> 
            </div> 
            <div class="row">
                <div class="col-xl-6">
                    <ul class="list-unstyled">
                        <li class="d-flex">
                            <div class="flex-grow-1">
                                <h5>Acompanhe as Estatísticas</h5>
                                <div class="text">Mas não fique preso a elas!</div>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="flex-grow-1">
                                <h5>Acompanhe em tempo real</h5>
                                <div class="text">Mas mantenha a calma, tudo vai passar!</div>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="flex-grow-1">
                                <h5>Cuide de você e da sua Família</h5>
                                <div class="text">Evite estar na parte ruim destes números!</div>
                            </div>
                        </li>
                    </ul>
                </div> 
                <div class="col-xl-6">
                    
                    <!-- Counter -->
                    <div class="counter-container">
                        <div class="counter-cell">
                            <div data-purecounter-start="0" data-purecounter-end="519" data-purecounter-duration="2" class="purecounter">1</div>
                            <div class="counter-info">Mil Mortes</div>
                        </div> 
                        <div class="counter-cell">
                            <div data-purecounter-start="0" data-purecounter-end="21" data-purecounter-duration="8" class="purecounter">1</div>
                            <div class="counter-info">Milhões de Casos</div>
                        </div> 
                        <div class="counter-cell">
                            <div data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="8" class="purecounter">1</div>
                            <div class="counter-info">Milhões de Recuperados</div>
                        </div> 
                        <div class="counter-cell">
                            <div data-purecounter-start="0" data-purecounter-end="349" data-purecounter-duration="1.5" class="purecounter">1</div>
                            <div class="counter-info">Mil em Acompanhamento</div>
                        </div> 
                    </div>               
                </div> 
            </div> 
        </div> 
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-col first">
                        <h6>Cristiano Botelho</h6>
                        <p class="p-small">Ánalise e Desenvolvimento de Sistemas - UNIFEOB<br>RA: 2000838</p>
                    </div>                
                </div> 
            </div> 
        </div> 
    </div> 

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © Cristiano Botelho</a></p>
                </div> 
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    

    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src="images/up-arrow.png" alt="alternative">
    </button>
    <!-- end of back to top button -->
    	
    <!-- Scripts -->
    <script src="assets/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="assets/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="assets/js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="assets/js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>