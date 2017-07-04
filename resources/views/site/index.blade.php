<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>iClinic</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta property="og:title" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">

    <!-- Styles -->
    {{--<link rel="stylesheet" href="css/font-awesome.min.css">--}}
    <link rel="stylesheet" href="{{ asset('/css/animate.css') }}">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900|Montserrat:400,700' rel='stylesheet' type='text/css'>


    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/site.css') }}">

    <script src="{{ asset('/js/modernizr.js') }}"></script>

</head>

<body>


<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="logo" href="index.html"><img src="img/logo2.png" alt="Logo"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#pricing" class="scroll">Planos e Preços</a></li>
                <li><a href="#">Entrar</a></li>
            </ul>
        </div><!--/.navbar-collapse -->
    </div>
</div>

<header>
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <a href="index.html"><img src="img/logo.png" alt="Logo"></a>
            </div>
            <div class="col-xs-6 signin text-right navbar-nav">
                <a href="#pricing" class="scroll">Planos e Preços</a>&nbsp; &nbsp;<a href="#">Entrar</a>
            </div>
        </div>

        <div class="row header-info">
            <div class="col-sm-10 col-sm-offset-1 text-center">
                <h1 class="wow fadeIn">O MELHOR SISTEMA MÉDICO</h1>
                <br />
                <p class="lead wow fadeIn" data-wow-delay="0.5s">Software médico simples e inteligente que organiza sua clínica e aumenta a produtividade.</p>
                <br />

                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="row">
                            <div class="col-xs-4 text-right wow fadeInUp" data-wow-delay="1s">

                            </div>
                            <div class="col-xs-6 text-left wow fadeInUp" data-wow-delay="1.4s">
                                <a href="#be-the-first" class="btn btn-secondary btn-lg scroll">App</a>
                                <a href="#invite" class="btn btn-primary btn-lg scroll">Contato</a>
                                <a href="#press" class="btn btn-secondary btn-lg scroll">Cases</a>
                            </div>

                        </div><!--End Button Row-->
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>

<div class="mouse-icon hidden-xs">
    <div class="scroll"></div>
</div>

<section id="be-the-first" class="pad-xl">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text-center margin-30 wow fadeIn" data-wow-delay="0.6s">
                <h2>Acesse fácilmente pelo Aplicativo iClinic</h2>
                <p class="lead">Android | iOS | Windows Phone</p>
            </div>
        </div>

        <div class="iphone wow fadeInUp" data-wow-delay="1s">
            <img src="img/iphone.png">
        </div>
    </div>
</section>

<section id="main-info" class="pad-xl">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.4s">
                <hr class="line purple">
                <h3>Agenda</h3>
                <p>Fácil, simples e rápido a marcação de consulta.</p>
            </div>
            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.8s">
                <hr  class="line blue">
                <h3>Especialidades</h3>
                <p>Ache a especialidade que deseja em um simples toque</p>
            </div>
            <div class="col-sm-4 wow fadeIn" data-wow-delay="1.2s">
                <hr  class="line yellow">
                <h3>Contato via chat</h3>
                <p>Deixe uma mensagem direto para o médico/secretária</p>
            </div>
        </div>
    </div>
</section>


<!--Pricing-->
<section id="pricing" class="pad-lg">
    <div class="container">
        <div class="row margin-40">
            <div class="col-sm-8 col-sm-offset-2 text-center">
                <h2 class="white">Planos transparentes e sem surpresas</h2>
                <p class="white">Software médico simples e inteligente que organiza sua clínica e aumenta a produtividade.</p>
            </div>
        </div>

        <div class="row margin-50">

            <div class="col-sm-4 pricing-container wow fadeInUp" data-wow-delay="1s">
                <br />
                <ul class="list-unstyled pricing-table text-center">
                    <li class="headline"><h5 class="white">Básico</h5></li>
                    <li class="price"><div class="amount">R$49<small>/mês</small></div></li>
                    <li class="info">Perfeito para Médico e Secretária</li>
                    <li class="features first">Agenda</li>
                    <li class="features">Cadastro de pacientes</li>
                    <li class="features">Prontuário</li>
                    <li class="features">Prescrição</li>
                    <li class="features">Controle Financeiro</li>
                    <li class="features">Relatórios</li>
                    <li class="features">Envio de Lembretes</li>
                    <li class="features">Suporte 24hrs</li>
                    <li class="features">2 usuários</li>
                    <li class="features last btn btn-secondary btn-wide"><a href="#">Contrate Agora</a></li>
                </ul>
            </div>

            <div class="col-sm-4 pricing-container wow fadeInUp" data-wow-delay="0.4s">
                <ul class="list-unstyled pricing-table active text-center">
                    <li class="headline"><h5 class="white">TOP</h5></li>
                    <li class="price"><div class="amount">R$99<small>/mês</small></div></li>
                    <li class="info">Plano indicado para pequenas Clínicas com até 5 usuários</li>
                    <li class="features first">Agenda</li>
                    <li class="features">Cadastro de pacientes</li>
                    <li class="features">Prontuário</li>
                    <li class="features">Prescrição</li>
                    <li class="features">Controle Financeiro</li>
                    <li class="features">Relatórios</li>
                    <li class="features">Envio de Lembretes</li>
                    <li class="features">Suporte 24hrs</li>
                    <li class="features">5 usuários</li>
                    <li class="features last btn btn-secondary btn-wide"><a href="#">Contrate Agora</a></li>
                </ul>
            </div>

            <div class="col-sm-4 pricing-container wow fadeInUp" data-wow-delay="1.3s">
                <br />
                <ul class="list-unstyled pricing-table text-center">
                    <li class="headline"><h5 class="white">PRO</h5></li>
                    <li class="price"><div class="amount">R$199<small>/mês</small></div></li>
                    <li class="info">Perfeito para sua Clínica</li>
                    <li class="features first">Agenda</li>
                    <li class="features">Cadastro de pacientes</li>
                    <li class="features">Prontuário</li>
                    <li class="features">Prescrição</li>
                    <li class="features">Controle Financeiro</li>
                    <li class="features">Relatórios</li>
                    <li class="features">Envio de Lembretes</li>
                    <li class="features">Suporte 24hrs</li>
                    <li class="features">Usuários Ilimitado</li>
                    <li class="features last btn btn-secondary btn-wide"><a href="#">Contrate Agora</a></li>
                </ul>
            </div>

        </div>

    </div>
</section>


<section id="invite" class="pad-lg light-gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text-center">
                <i class="fa fa-envelope-o margin-40"></i>
                <h2 class="black">Entre em contato</h2>
                <br />
                <p class="black">Envie seu e-mail que lhe enviaremos maiores informações sobre o produto e 30 dias grátis para você experimentar o iClinic</p>
                <br />

                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                        <form role="form">
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                        </form>
                    </div>
                </div><!--End Form row-->

            </div>
        </div>
    </div>
</section>


<section id="press" class="pad-sm">
    <div class="container">

        <div class="row margin-30 news-container">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 wow fadeInLeft" data-wow-delay="0.8s">
                <a href="#" target="_blank">
                    <img class="news-img pull-left" src="img/press-01.jpg" alt="Tech Crunch">
                    <p class="black"> Há um ano optamos pela migração para o iClinic. Graças a eficiência da equipe, hoje o sistema
                        funciona muito bem, nos atendendo com maestria. Recomendo!<br />
                        <small><em>Dr. William Mangoni - Dezembro 02, 2016</em></small></p>
                </a>
            </div>
        </div>

        <div class="row margin-30 news-container">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 wow fadeInLeft" data-wow-delay="1.2s">
                <a href="#" target="_blank">
                    <img class="news-img pull-left" src="img/press-02.jpg" alt="Forbes">
                    <p class="black">Interface intuitiva e limpa, acessível de todos os lugares, atende as necessidades da nossa clinica sem complicação! O módulo financeiro é simples e extremamente funcional. Recomendado. <br />
                        <small><em>Gabriel Marcolino - Dezembro 02, 2016</em></small></p>
                </a>
            </div>
        </div>

        <div class="row margin-30 news-container">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 wow fadeInLeft" data-wow-delay="1.2s">
                <a href="#" target="_blank">
                    <img class="news-img pull-left" src="img/press-03.jpg" alt="Forbes">
                    <p class="black">Aqui na Clinica utilizamos o iClinic e hoje já não conseguimos imaginar como seria nossa vida sem ele!
                        A interface é super clean e conseguimos fazer tudo o que precisamos. <br />
                        <small><em>Lucas Carvalho - Dezembro 02, 2016</em></small></p>
                </a>
            </div>
        </div>

        <div class="row margin-30 news-container">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 wow fadeInLeft" data-wow-delay="1.2s">
                <a href="#" target="_blank">
                    <img class="news-img pull-left" src="img/press-04.jpg" alt="Forbes">
                    <p class="black">Melhor software para minha clínica que usei até hoje, simplesmente magnífico, atende a todas as necessidades da clínica. <br />
                        <small><em>Celestino Neto - Dezembro 02, 2016</em></small></p>
                </a>
            </div>
        </div>

    </div>
</section>


<footer>
    <div class="container">

        <div class="row">
            <div class="col-sm-8 margin-20">
                <ul class="list-inline social">
                    <li>Siga</li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>

            <div class="col-sm-4 text-right">
                <p><small>Copyright &copy; 2016. All rights reserved. <br>
                        Created by <a href="#">Celestino | Gabriel | Lucas | William</a></small></p>
            </div>
        </div>

    </div>
</footer>


<!-- Javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ asset('/js/jquery.min.js') }}"><\/script>')</script>
<script src="{{ asset('/js/wow.min.js') }}"></script>
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/js/site.js') }}"></script>


</body>
</html>