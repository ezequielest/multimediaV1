<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SkyCalendar</title>
	<link rel="stylesheet" href="css/font-awesome.css">
	<style>
		.confirmado{
			background: #333;
		}
	</style>
</head>
<body>
<div class="container">
	

<h1>SkyCalendar v1</h1>
<h3><?php echo date('d-m-Y') ?></h3>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<table class="table">
	<tr>
		<th>Do</th>
		<th>Lu</th>
		<th>Ma</th>
		<th>Mi</th>
		<th>Ju</th>
		<th>Vi</th>
		<th>Sa</th>
	</tr>
	<?php $num_dom = 0; $num_int = 0; ?>
	<?php foreach ($calendario as $key): ?>

	<tr>
			<?php for ($i=0; $i<=6 ; $i++)  : ?>
				
				<!-- si es domingo -->
				<?php if ($i==0 && isset($key[$i])): ?>
					<td id="dom">
						<div class="radio radio-inline">
							<?php echo $key[$i]; ?></span> - 
							<label><input type="radio" name="integrante<?php echo $num_dom ?>" value="G" checked>G</label>
							<label><input type="radio" name="integrante<?php echo $num_dom ?>" value="B">B</label>
							<label><input type="radio" name="integrante<?php echo $num_dom ?>" value="K">K</label>
							<label><input type="radio" name="integrante<?php echo $num_dom ?>" value="M">M</label>
							<input type="hidden" id="dia" name="dia<?php echo $num_dom ?>" value="<?php echo $i ?> ">
							<input type="hidden" id="num" name="num<?php echo $num_dom ?>" value="<?php echo $key[$i] ?> ">
							<input type="hidden" name="total" value="<?php echo $num_dom ?>">
						</div>
						</form>
					</td>
					<?php $num_dom++; $num_int++; ?>
					<?php if ($num_dom >= count($integrantes)): ?>
						<?php $num_int = 0; ?>
					<?php endif ?>
				
				<?php else: ?>
					<td><?php echo isset($key[$i]) ? $key[$i] : ' '; ?></td>
				
				<?php endif ?>

				
			
			<?php endfor; ?>

	</tr>
	<?php endforeach; ?>
</table>

<button class="btn btn-default">Guardar</button>
</form>
</div>

<script src="./js/jquery-3.1.1.min.js"></script>

<script type="text/javascript">
	var obj = {
		confirmado: ''
	};
</script>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
</body>
</html>