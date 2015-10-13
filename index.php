
<?php require_once( "myDBC.php"); 
 
$servername = "localhost";
$username = "admin";
$password = "andres123";
$dbname = "productos";


$conn = new mysqli($servername, $username, $password, $dbname);    
$sql = "SELECT * FROM mercancia";
$result = $conn->query($sql); 
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/footerStyle.css">
    <meta charset="utf-8">
<link rel="stylesheet" href="./css/tablaStyle.css">
<script src="./js/tabla.js"></script>
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><span class="glyphicon glyphicon-globe"></span> Multiservicios Escolares</a>
            </div>
            <div class="collapse navbar-collapse " id="myNavbar">
                <ul class="nav navbar-nav">
                    
                </ul>
                <ul class="nav navbar-nav navbar-right">
  
                    <li><a href="precProductos.php"><span class="glyphicon glyphicon-usd"></span> Lista de precios</a>
                    </li>

                    <li><a href="precCargadores.php"><span class="glyphicon glyphicon-hdd"></span> Cargadores</a>

                    </li>
                    <li><a href="precProtectores.php"><span class="glyphicon glyphicon-phone"></span> Protectores</a>
                 
                    </li>
                    <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="jumbotron">
            <h1>Papeleria Multiservicios Escolares</h1>
            <p>Tenemos lo que necesitas!</p>
          
          
          
        </div>

         
    </div>

    
    <hr>
    
    <footer>
            <div class="row">
                <div class="col-lg-12">
    			<div class="col-lg-3 col-md-6">
                <div class="container">
	
   
    	<div class="col-lg-3">
    				<div class="cuadro_intro_hover " style="background-color:#cccccc;">
						<p style="text-align:center; margin-top:20px;">
							<img src="./imagenes/iphone.jpg" class="img-responsive" alt="">
						</p>
						<div class="caption">
							<div class="blur"></div>
							<div class="caption-text">
								<h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">Reparación</h3>
								<p>Reparacion de celulares</p>
								<a class=" btn btn-default" href="#"><span class="glyphicon glyphicon-plus"> INFO</span></a>
							</div>
						</div>
					</div>
				
	    </div>
       <div class="col-lg-3">
    				<div class="cuadro_intro_hover " style="background-color:#cccccc;">
						<p style="text-align:center; margin-top:20px;">
							<img src="./imagenes/hp.jpg" class="img-responsive" alt="">
						</p>
						<div class="caption">
							<div class="blur"></div>
							<div class="caption-text">
								<h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">Formateo</h3>
								<p>Formateo de computadoras</p>
								<a class=" btn btn-default" href="#"><span class="glyphicon glyphicon-plus"> INFO</span></a>
							</div>
						</div>
					</div>
				
	    </div>
            

            <div class="col-lg-3 col-md-6">
			<h3>Categorias:</h3>
                <ul>
				<li><a href=""><i class="fa fa-file"></i> News</a></li>
				<li><a href=""><i class="fa fa-android"></i> Android</a></li>
				<li><a href=""><i class="fa fa-code"></i> C#</a></li>
				<li><a href=""><i class="fa fa-code"></i> Java</a></li>
				<li><a href=""><i class="fa fa-book"></i> Books</a></li>
				<li><a href=""><i class="fa fa-globe"></i> Web</a></li>
				<li><a href=""><i class="fa fa-windows"></i> Windows</a></li>
				</ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <h3>Contacto:</h3>
				<p>¿Tienes una duda o sugerencia? Contactanos!</p>
				<p><a href="" title="Contact me!"><i class="fa fa-envelope"></i> Contactame</a></p>
            <h3>Sigueme:</h3>
			
			
<a href="https://twitter.com/?lang=es" id="gh" target="_blank" title="Twitter"><span class="fa-stack fa-lg">
  <i class="fa fa-square-o fa-stack-2x"></i>
  <i class="fa fa-twitter fa-stack-1x"></i>
</span>
Twitter</a>
<a href="https://github.com/"  target="_blank" title="GitHub"><span class="fa-stack fa-lg">
  <i class="fa fa-square-o fa-stack-2x"></i>
  <i class="fa fa-github fa-stack-1x"></i>
</span>
GitHub</a>

		


		
			
			</div>
			<br/>
            <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/hu_HU/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-like" data-href="" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>

<a href="https://twitter.com/share" class="twitter-share-button" data-url="">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

<div class="g-plusone" data-annotation="inline" data-width="300" data-href=""></div>

<!-- Helyezd el ezt a címkét az utolsó +1 gomb címke mögé. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
			<br/>
			
				<hr>
                    <p>Copyright © Andres Apodaca | <a href="">Privacy Policy</a> | <a href="">Terms of Use</a></p>
					
					
					
        </footer>
    
</body>

</html> 

                
