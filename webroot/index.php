</?php
/**
 //* The Front Controller for handling every request
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.2.9
 * @license       MIT License (https://opensource.org/licenses/mit-license.php)
 */

// Check platform requirements
//require dirname(__DIR__) . '/config/requirements.php';

// For built-in server
//if (php_sapi_name() === 'cli-server') {
  //  $_SERVER['PHP_SELF'] = '/' . basename(__FILE__);

    //$url = parse_url(urldecode($_SERVER['REQUEST_URI']));
    //$file = __DIR__ . $url['path'];
    //if (strpos($url['path'], '..') === false && strpos($url['path'], '.') !== false && is_file($file)) {
      //  return false;
    //}
//}
//require dirname(__DIR__) . '/vendor/autoload.php';

//use App\Application;
//use Cake\Http\Server;

// Bind your application to the server.
//$server = new Server(new Application(dirname(__DIR__) . '/config'));

// Run the request/response through the application and emit the response.
//$server->emit($server->run());


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">>
	<title>Registro de Usuarios</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1,user-scalable=no' name='viewport'>
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrapcdn/3.2.0/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="static/css/AdminLTE.css"/>
</head>
<body class="bg-black">
	<div class="form-box" id="login-box">
		<div class="header">Registro de Usuarios</div>
		<form action="RegistrarUsuarios.php" method="post">
			<div class="body bg-black">
				<div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="Nombre Completo"/>
				</div>
				<div class="form-group">
					<input type="email" name="email" class="form-control" placeholder="Email"/>
				</div>
			</div>
			<div class="footer">
				<button id="btnRegistrar" type="submit" class="btn bg-olive btn-block">Enviar</button>
			</div>
		</form>
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>>