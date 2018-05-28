<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="apple-touch-icon" sizes="57x57" href="public/img/icon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="public/img/icon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="public/img/icon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="public/img/icon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="public/img/icon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="public/img/icon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="public/img/icon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="public/img/icon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="public/img/icon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="public/img/icon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="public/img/icon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="public/img/icon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="public/img/icon/favicon-16x16.png">
	<link rel="manifest" href="public/img/icon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="public/img/icon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<meta property="og:url"                content="http://www.ezequielest.com/multimedia" />
	<meta property="og:title"              content="App Multimedia" />
	<meta property="og:description"        content="Organización de turnos y cambios" />
	<meta property="og:image"              content="http://www.ezequielest.com/multimedia/public/img/facebook.png" />
	<title>SkyCalendar</title>
	<link rel="stylesheet" href="public/css/font-awesome.css">
	<link rel="stylesheet" href="libs/bootstrap-3.3.7-dist/css/bootstrap.css">
	<link rel="stylesheet" href="libs/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
	<style>

		#listames{
		 font-size: 40px;
		}

		#eventos-lista ul li{
			/*min-width: 320px;*/
		}
		span.text-dia{
			font-size: 40px;
		}

		li a#link {
			margin-top: 5px;
			font-size: 20px;
			margin-left: 20px;
		}

		#referencia div{
			font-size: 20px;
			margin-top: 5px;
		}

		@media screen and (max-width: 450px) {

			#mes{
			 	height: 50px;
		 		font-size: 25px;
			}
			
			#listames{
		 		font-size: 40px;
			}

			span.text-dia{
				font-size: 25px;
			}

			section li a#link {
				margin-top: 0px;
				font-size: 15px;
				margin-left: 20px;
			}


		}

	    @media screen and (max-width: 360px) {
			h1.tituloapp {
				font-size: 30px !important;
			}

			li a#link {
				font-size: 15px;
				margin-left: 10px;
			}

			section ul li .modal-body {
				font-size: 20px;
				color:#000;
			}

			section ul li .modal-body select{
				border: 1px solid #777;
			}




		}

		 @media screen and (max-width: 340px) {
		 	#listames{
		 		font-size: 20px;
		 	}
		 	span.text-dia{
				font-size: 20px;
			}

		 	li a#link {
				font-size: 10px;
				margin-left: 10px;
			}

		 }
	}


	</style>
</head>
<body>

<div class="container">

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>  SkyCalendar</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#eventos">Eventos <span class="sr-only">(current)</span></a></li>
        <li><a href="#referencia">Referencia de colores</a></li>
        <!--<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>-->
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <select name="mes" id="mes" class="form-control">
			<?php foreach ($array_meses as $array_mes => $valor_mes): ?>
			<?php if ($mes == $array_mes): ?>
			<option value="<?php echo $array_mes ?>" selected><?php echo $valor_mes ?></option>
			<?php else: ?>
			<option value="<?php echo $array_mes ?>"><?php echo $valor_mes ?></option>
			<?php endif; ?>
			<?php endforeach ?>
			</select>
      	    </div>
        	<button id="cargarmes" type="submit" class="btn btn-primary" value="cargar mes">Cargar mes</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href=""><?php echo $array_dias[date('w')]." ".date('d')." de ".$array_meses[date('n')]. " del ".date('Y') ; ?></a></li>
        <!--<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>-->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<?php setlocale(LC_ALL,"es_ES"); ?>

<br>

<section id="eventos-tabla">
<table class="table table-hover hidden-xs hidden-sm">
	<tr>
		<th>Domingo <small class="text-danger">Reunión general</small></th>
		<th>Lunes</th>
		<th>Martes</th>
		<th>Miercoles</th>
		<th>Jueves</th>
		<th>Viernes</th>
		<th>Sábado</th>
	</tr>
	<?php $num_dom = 0; $num_int = 0; ?>
	<?php foreach ($calendario as $dia): ?>

	<tr>
			<?php for ($i=0; $i<=6 ; $i++)  : ?>
				
				<?php if($cantidad_eventos): ?>
					<?php $cont_evento=0; ?>
					<?php foreach ($record_eventos as $evento): ?>

						<!-- pregunto si esta seteado para que no me de un error de fechas -->
						<?php if( isset($dia[$i]) ): ?>
						<!-- consulto si la fecha en la base es la misma que la fecha en el calendario-->
						<?php if ( date('Y-n-j',strtotime($evento['fecha'])) == date('Y') . '-' . $mes . '-' .$dia[$i] ): ?>
							<?php $cont_evento++; ?>

							<!-- si esta confirmado lo pongo en verde -->
							<?php 
							switch ($evento['confirmado']){
								case 1:
									include('calendario/evento_confirmado.php');
									break;
								case 2:
									include('calendario/evento_cambio.php');
									break;
								case 3:
									include('calendario/evento_cambio_confirmado.php');
									break;
								default:
									include('calendario/evento_sinconfirmar.php');
							}
							?>
							<!-- si el evento esta como cambio lo pongo en amarillo -->

						

						<?php endif ?>

						<?php endif ?>
					<?php endforeach ?>

					<?php if ($cont_evento==0): ?>
						<?php if ( isset($dia[$i]) ): ?>
							<?php if ( $hoy == date('Y') .'-'. $mes .'-'. $dia[$i] ): ?>
								<td class="bg-primary"><?php echo isset($dia[$i]) ? $dia[$i] : ' '; ?></td>
							<?php else: ?>
								<td><?php echo $dia[$i] ?></td>
							<?php endif; ?>
						<?php endif ?>
						
					<?php endif ?>


				<?php endif ?>
				
			
			<?php endfor; ?>

	</tr>
	<?php endforeach; ?>
</table>
</section>

<section id="eventos-lista" class="container hidden-md hidden-lg">
	<div class="row">
	<div class="col-md-12">

	<ul class="list-group">
		<li class="list-group-item list-group-item-warning">
			 <span id="listames" class="center"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?php echo 'Lista ' . $array_meses[$mes] ?></span>
		</li>
	</ul>

	<?php if ($cantidad_eventos_mes == 0): ?>
		<span class="label label-info">NO HAY EVENTOS CARGADOS PARA ESTE MES</span>
	<?php endif ?>

	<?php $num_dom = 0; $num_int = 0; ?>
	<?php foreach ($calendario as $dia): ?>
	<ul class="list-group">
		<?php for ($i=0; $i<=6 ; $i++)  : ?>
				
				<?php if($cantidad_eventos): ?>
					<?php $cont_evento=0; ?>
					<?php foreach ($record_eventos as $evento): ?>

						<!-- pregunto si esta seteado para que no me de un error de fechas -->
						<?php if( isset($dia[$i]) ): ?>
						<!-- consulto si la fecha en la base es la misma que la fecha en el calendario-->
						<?php if ( date('Y-n-j',strtotime($evento['fecha'])) == date('Y') . '-' . $mes . '-' .$dia[$i] ): ?>
							<?php $cont_evento++; ?>

							<!-- si esta confirmado lo pongo en verde -->
							<?php 
							switch ($evento['confirmado']){
								case 1:
									include('lista/evento_confirmado.php');
									break;
								case 2:
									include('lista/evento_cambio.php');
									break;
								case 3:
									include('lista/evento_cambio_confirmado.php');
									break;
								default:
									include('lista/evento_sinconfirmar.php');
							}
							?>
							<!-- si el evento esta como cambio lo pongo en amarillo -->

						

						<?php endif ?>

						<?php endif ?>
					<?php endforeach ?>

				<?php endif ?>
				
			
			<?php endfor; ?>

	</ul>
<?php endforeach ?>
   </div>
   </div>
</section>

<section id="respuesta"></section>

<!--<section id="eventos" class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="alert alert-dismissible alert-info">
			  <strong>PRÓXIMO ENCUENTRO:</strong> LUNES 23 DE ENERO 18.00 HS. CASA EZEQUIEL
			</div>
		</div>
	</div>
</section>-->

<div id="referencia" class="row">
	<div class="col-md-12"><h4>Referencias de colores</h4></div>
	<div class="col-xs-12 col-sm-3">(BLANCO) Sin acción</div>
	<div class="col-xs-12 col-sm-3"><div class="bg-success">Confirmado</div></div>
	<div class="col-xs-12 col-sm-3"><div class="bg-danger">Solicitud de intercambio</div></div>
	<div class="col-xs-12 col-sm-3"><div class="bg-info">Intercambio aceptado</div></div>
</div>

<script src="js/jquery-3.1.1.min.js"></script>

<script src="js/bootstrap.js"></script>
	
</body>
</html>