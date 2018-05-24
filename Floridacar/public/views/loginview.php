
 <!DOCTYPE html>
 <html>
   <head>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">
     <link rel="icon" href="../../../../favicon.ico">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
     <title>FloridaCar</title>

     <!-- Bootstrap core CSS -->
     <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

     <!-- Custom styles for this template -->
     <link href="css/album.css" rel="stylesheet">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
     <meta charset="utf-8">
     <title>Inicio de Sesión</title>
     <link rel="stylesheet" href="https://www.floridaoberta.com/theme/adaptable/style/font-awesome.min.css">
     <link rel="stylesheet" href="css/login.css">
     <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->

<!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="css/util.css">
 <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
   <body>
     <header>
       <div class="collapse bg-dark" id="navbarHeader">
         <div class="container">
           <div class="row">
             <div class="col-sm-8 col-md-7 py-4">
               <h4 class="text-white">Quienes somos?</h4>
               <p class="text-muted">Somos un grupo de estudiantes de primer año del modulo superior de Desarollo de Aplicaciones Web que hemos decidido crear FloridaCar una empresa enfocada al transporte de alumnos al centro de la Florida o de esta al destino que les interese.
               Nuestro fin con este programa es ayudar a los alumnos a moverse de un modo economico y de una manera eficiente,en la que principalmente los alumnos sin vehículo no dependan del transporte publico.
             </p>
             </div>
               <div class="col-sm-4 offset-md-1 py-4">
                   <h4 class="text-white"><?php
                       if (!isset($_SESSION['usuario'])){
                           echo 'Login';
                       }else {
                           echo $_SESSION['usuario'];
                       }
                       ?></h4>
                   <ul class="list-unstyled">
                       <?php if (!isset($_SESSION['usuario'])){
                           echo '<li><a href="login.php" class="text-white">Iniciar Sesión</a></li>';
                       }else {
                           echo '<li><a href="perfil.php" class="text-white">Ver perfil</a></li>';
                           echo '<li><a href="cerrarSesion.php" class="text-white">Cerrar Sesión</a></li>';
                       }
                       /*if (!isset($_SESSION['usuario'])){
                           echo '<li><a href="perfil.php" class="text-white">Ver perfil</a></li>';
                           echo '<li><a href="cerrarSesion.php" class="text-white">Cerrar Sesión</a></li>';
                       }else {
                           echo '<li><a href="login.php" class="text-white">Iniciar Sesión</a></li>';
                       }*/?>
                   </ul>
               </div>
           </div>
         </div>
       </div>
       <div class="navbar navbar-dark bg-dark box-shadow">
         <div class="container d-flex justify-content-between">
           <a href="index.php" class="navbar-brand d-flex align-items-center">
             <i class="fas fa-car"></i>

             <strong>FloridaCar</strong>
           </a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>
         </div>
       </div>
     </header>


  <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-10 p-b-20">
				<form class="login100-form validate-form flex-sb flex-w" action="activeDirectory.php" method="post">
					<span class="login100-form-title p-b-51">
						Login
					</span>


					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-24">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">


                <a href="registro.php" class="txt1" style="color: #007bff">
                  Registrarse
                </a>


						</div>

						<div>
	
						</div>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" name="login" style="background-color: #007bff">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

     </form>

   </body>
 </html>
