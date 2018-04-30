

<li class="list-group-item list-group-item list-group-item-success">
	<span class="text-dia"><span class="label label-default"><?php echo $dia[$i] ?></span> <?php echo $evento['nombre'] ?></span>
	<a id="link" class="btn btn-default pull-right"  href="<?php  echo '?view=confirmar&confirmado=0&fecha='. $evento['fecha'] .'&mes='. $mes .'&miembro='. $evento['nombre'] . ' ' ?>"><i class="fa fa-times" aria-hidden="true"></i></a>
</li>