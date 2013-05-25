<!doctype html>

<html lang = "es">

	<head>
	    <meta charset = "UTF-8">
		<title>Autentificación</title>
		<link rel="stylesheet" href="estilo.css" type="text/css" media="all">
	</head>

	
	<body>
       <?php
       $rut = $_POST['usuario'];
	     $password = $_POST['contraseña'];
			 
			 $upperpass = strtoupper($password);
	
	     $cliente = new SoapClient("http://informatica.utem.cl:8011/dirdoc-auth/ws/auth?wsdl");
         
			 $parametros = array("rut" => $rut , "password" => $password);

       $consulta = $cliente->autenticar($parametros);
	
        ?>
            <h1> <?php echo $consulta->return->descripcion; ?> </h1> 
 
    </body>
 
</html>