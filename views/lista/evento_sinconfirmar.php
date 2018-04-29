<li class="list-group-item">
	<span class="text-dia"><span class="label label-default"><?php echo $dia[$i] ?></span> <?php echo $evento['nombre'] ?></span>
	<a id="link" class="btn btn-danger pull-right" href="<?php echo '?view=confirmar&mes=2&confirmado=2&fecha='. $evento['fecha'] .'&mes='. $mes .' ' ?>"><i class="fa fa-exchange" aria-hidden="true"></i></a>
	<a id="link" class="btn btn-success pull-right" href="<?php echo '?view=confirmar&confirmado=1&fecha='. $evento['fecha'] .'&mes='. $mes .'&miembro='. $evento['nombre'] . ' ' ?>"><i class="fa fa-check" aria-hidden="true"></i></a>

</li>



