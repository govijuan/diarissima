 <!-- Navigation -->
 <?php 
	 function getBaseUrl() 
	 {
	// output: /myproject/index.php
		$currentPath = $_SERVER['PHP_SELF']; 
		
		// output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index ) 
		$pathInfo = pathinfo($currentPath); 
		
		// output: localhost
		$hostName = $_SERVER['HTTP_HOST']; 
		
		// output: http://
		$protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';
		
		// return: http://localhost/myproject/
		return $protocol.$hostName.$pathInfo['dirname']."/";
	}
 ?>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="/">
                    <!-- <img src="img/logo.svg"> -->
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li style="margin: 7px 4px"><a href="<?php getBaseUrl();?>/quero-contratar" class="btn btn-warning topmenu-btn">Quero Contartar</a></li>
                    <li style="margin: 7px 4px"><a href="<?php getBaseUrl();?>/quero-prestar-servicos" class="btn btn-warning topmenu-btn">Quero prestar serviços</a></li>
                    
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php getBaseUrl();?>/">Início</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/#services">Vantagens</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php getBaseUrl();?>/ajuda/">Ajuda</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php getBaseUrl();?>/releases/">Notícias</a>
                    </li>
                    <li class="btn-baixe">
                        <a class="page-scroll" href="<?php getBaseUrl();?>#portfolio">Baixe o app!</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>