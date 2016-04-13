<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Diaríssima ･ Cuide bem de quem cuida do seu lar</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/diarissima.css" rel="stylesheet">

    <!-- Custom Favicon -->
    <link rel="icon" href="/favicon.ico?v=1.1">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Kaushan+Script|Droid+Serif:400,700,400italic,700italic|Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <!-- <link href="css/fonts.css" rel="stylesheet" type="text/css"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

</head>

<body id="page-top" class="index">
	<?php include 'template_parts/analyticstracking.php'; ?>	

   <?php include 'template_parts/main_nav.php'; ?>
   
   <?php include 'template_parts/header_home.php'; ?>

   <?php include 'template_parts/vantagens.php'; ?>     

   <?php include 'template_parts/baixe_app.php'; ?>

    
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Fale com a gente</h2>
                    <h3 class="section-subheading text-muted white">Você pode tirar dúvidas <a href="/ajuda/">aqui</a> ou se preferir, entre em contato conosco.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" action="contato.diarissima.com.br" method="GET" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nome *" name="name" id="name" required data-validation-required-message="Por favor, insira seu nome.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email *" name ="email" id="email" required data-validation-required-message="Por favor, insira seu email.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Telefone *" name="tel" id="phone" required data-validation-required-message="Por favor, insira seu telefone.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Mensagem *" name="message" id="message" required data-validation-required-message="Por favor, escreva sua mensagem."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Enviar Mensagem</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php include 'template_parts/footer.php'; ?>
    