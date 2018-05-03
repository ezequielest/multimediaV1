

<li class="list-group-item list-group-item-info">
	<span class="text-dia"><span class="label label-default"><?php echo $dia[$i] ?></span> <?php echo $miembros[$evento['reemplazo']] ?> </span>

	<a id="link" class="btn btn-danger pull-right" href="<?php  echo '?view=confirmar&confirmado=2&fecha='. $evento['fecha'] .'&miembro='.$evento['nombre'].'&mes='. $mes .' ' ?>"><i class="fa fa-times" aria-hidden="true"></i></a>

</li>